<?php
namespace Core\Data\Db\MySql;
use Core\Object, Core\Data\ICommand, Core\U, Core\Data\CommandType, Core\Data\IConnection;
use mysqli, mysqli_result, Exception;
///TODO:Add Parameter Support
/**
 * MySql DbCommand. Used to execute sql commands against a MySql connection object.
 * Used in conjunction with DbConnection, DbReader, and internally, DbQueryResult
 */
class DbCommand extends Object implements ICommand{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_conn, $_txt, $_type;
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor(DbConnection &$conn, $commandText='', CommandType $commandType=null)
	 * Creates a new DbCommand instance to be used to execute sql statements
	 */
	public function __construct(DbConnection &$conn, $commandText='', CommandType $commandType=null){
		$this->_txt = $commandText; $this->_conn = $conn; $this->_type = $commandType;
		if(U::NA($this->_type)){$this->_type = CommandType::$Expression;}
	}
	/**
	 * Gets or sets the text command to run against the data source. Implementers might choose to only implement get
	 * @param $value string
	 * The value to set the command text to. Only used when the method is used as the setter of the property
	 * @return string
	 * The text of the command to be executed against the data source
	 */
	public function Text($value=null){
		if($value===null){return $this->_txt;}
		else{$this->_txt = U::ES($value);}
	}
	/**
	 * Gets or sets Indicates or specifies how the ICommand Text property is interpreted.
	 * @param $value CommandType
	 * The value to set the command type to. Only used when the method is used as the setter of the property
	 * @return CommandType
	 * The type of the current command's text
	 */
	public function Type(CommandType $value=null){
		if($value === null){return $this->_type;}
		else{$this->_type = $value;}
	}
	/**
	 * Gets or sets the Connection property
	 * @param $value IConnection
	 * The value to set the command connection to. Only used when the method is used as the setter of the property
	 * @return IConnection
	 * The connection object used by the current command as an IConnection.
	 */
	public function Connection(IConnection $value=null){
		if($value === null){return $this->_conn;}
		elseif(is_a($value, 'DbConnection')){$this->_conn = $value;}
		else{throw new Exception("You must use a DbConnection object with this type of Command object", 1);}
	}
	/**
	 * Strongly typed Accessor for the Connection Property
	 * @return DbConnection
	 * The connection object used by this command
	 */
	public function DbConnection(DbConnection $value=null){
		if($value===null){return $this->_conn;}
		else{$this->_conn = $value;}
	}
	/**
	 * Executes the command and returns a DbReader object to read the results or null if the command is not a query
	 * @return DbReader
	 * The data reader object to be used to read the data or null if the command is not a query
	 * For non query commands, use ExecuteNonQuery()
	 */
	public function Execute(){
		return new DbReader($this->_conn->ExecuteMultiQuery($this->getSql()), $this->_conn);
	}
	/**
	 * Executes the command and returns the number of affected records. Appropriate for data update, insert or delete operations
	 * @return int the number of records affected
	 */
	public function ExecuteNonQuery(){
		$t = false;
		if(U::NA($this->_conn)){throw new Exception('Trying to execute against a non-existant connection', 1);}
		if(!$this->_conn->IsOpen()){$this->_conn->Open(); $t = true;}
		$this->_conn->Execute($this->getSql());
		if($this->_conn->HasError()){
			throw new Exception("Error Executing Sql Statement: [{$this->_conn->LastErrorNumber()}]:[{$this->_conn->LastErrorMessage()}]", 1);
		}
		$r = $this->_conn->AffectedRows();
		if($t){$this->_conn->Close();}
		return $r;
	}
	/**
	 * Executes the command and returns the scalar returned or the first field of the first record.
	 * @return mixed
	 * Either the scalar returned by a scalar command type or the first field of the first record of any dataset returned
	 */
	public function ExecuteScalar(){
		$t = false;
		if(U::NA($this->_conn)){throw new Exception('Trying to execute against a non-existant connection', 1);}
		if(!$this->_conn->IsOpen()){$this->_conn->Open(); $t = true;}
		$res = $this->_conn->Execute($this->getSql());
		if($this->_conn->HasError()){
			throw new Exception("Error Executing Sql Statement: [{$this->_conn->LastErrorNumber()}]:[{$this->_conn->LastErrorMessage()}]", 1);
		}
		$ret = null;
		if($res->IsScalar()){$ret = $res->Read()[0];}
		elseif($res->RowsCount()>0){
			$arr = $res->ReadArray();
			$ret = $arr[0];
		}
		if($t){$this->_conn->Close();}
		return $ret;
	}
	###########################################################################
	# Protected Methods
	###########################################################################
	protected function getSql(){
		$sql = '';
		if($this->_type == CommandType::$Table){$sql = 'select * from `' . $this->_txt . "`";}
		elseif($this->_type == CommandType::$Procedure){$sql = 'call `' . $this->_txt . "`";}
		else {$sql = $this->_txt;}
		return $sql;
	}
};
?>