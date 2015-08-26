<?php
namespace Core\Data\Db\MySql;
use Core\Object;
use Core\U;
use Core\Data\IDataReader;
use Core\Data\DataRecordBase;
use mysqli, mysqli_result, Exception, Iterator, ArrayAccess;
///TODO: Write Close/Dispose methods to free results
/**
 * MySql Data Reader
 * Used in conjunction with DbCommand and DbConnection.
 * You will usually get a DbReader object from calling Execute() on a DbCommand object. It is not recommended to
 * construct objects of this class using the supplied constructor (we would really appreciate if internal/friend
 * access modifiers were implemented in future versions of php)
 */
class DbReader extends DataRecordBase implements IDataReader{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_conn, $_res, $_fields;
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor(DbQueryResult &$res, DbConnection &$conn)
	 * Creates a new instance of a DbReader to iterate through data from the supplied results on the supplied connection
	 * Usually, you will get a DbReader object as a reult of calling DbCommand's Execute, not using this constructor
	 */
	public function __construct(DbQueryResult &$res, DbConnection &$conn){
		if(U::NA($res) || U::NA($conn)){throw new Exception("Cannot instantiate reader with empty result and/or connection", 1);}
		$this->_res = $res; $this->_conn = $conn; $this->_fields = array();
		$this->_scalar = $res->IsScalar();
		if($this->_scalar){
			parent::__construct($res->Read()[0]);
		}
		else{
			parent::__construct(array());
			$this->_fields = $this->_res->FieldsInfo();
			$this->_count = count($this->_fields);
		}
	}
	###########################################################################
	# IDataReader Implementation
	###########################################################################
	/**
	 * Reads a record from the result set and saves it internally. Returns whether a record has been retrieved or not
	 * @return bool
	 * true if there are more rows; otherwise, false.
	 */
	public function Read(){
		if($this->_scalar){return false;}
		else{
			$row = $this->_res->ReadRow();
			if($row){
				$this->changeCurrentRecord($row);
				return true;
			}
			else{return false;}
		}
	}
	/**
	 * Advances the data reader to the next result, when reading the results of batch SQL statements
	 * @return bool
	 * true if there are more results and the next result was moved to successfully; otherwise, false.
	 */
	public function NextResult(){
		if($this->_scalar){return false;}
		if($this->_conn->HasMoreResults()){
			$res = $this->_conn->NextResult();
			$this->_res = $this->_conn->CurrentResult();
			$this->_fields = $this->_res->FieldsInfo();
			return $res;
		}
		else{return false;}
	}
	###########################################################################
	# DbReader Specific Implementation
	###########################################################################
	public function Fields(){
		return $this->_fields;
	}
	public function FieldsNames(){
		$res = array();
		foreach($this->_fields as $field){
			$res[] = $field->Name();
		}
		return $res;
	}
	public function RowsCount(){
		return $this->_scalar?1:$this->_res->RowsCount();
	}
};
?>