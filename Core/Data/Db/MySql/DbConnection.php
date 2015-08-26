<?php
namespace Core\Data\Db\MySql;
use Core\Data\Db\DbConnectionBase;
use mysqli, mysqli_result, Exception;
/**
 * Represents a MySql database connection object.
 * Constructor($host='', $dbName='', $userName='', $password='', $openAtCreate=false)
 */
class DbConnection extends DbConnectionBase{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_conn;
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor($host='', $dbName='', $userName='', $password='', $openAtCreate=false)
	 * Instantiates a new instance of the Core\Data\Db\MySql\DbConnection Object.
	 * The connection is not open at construction time by default. You have to call Open() explicitly,
	 * or pass true to the $openAtCreate argument of this constructor.
	 */
	public function __construct($host='', $dbName='', $userName='', $password='', $openAtCreate=false, $port='', $socket=''){
		$port = $port?:ini_get("mysqli.default_port");
		$socket = $socket?:ini_get("mysqli.default_socket");
		parent::__construct($host, $dbName, $userName, $password, $port, $socket);
		if($openAtCreate){$this->Open();}
	}
	###########################################################################
	# IConnection Methods Implementation
	###########################################################################
	/**
	 * Opens the connection to the database using the parameters of this DbConnection object.
	 * Returns whether the connection was opened successfully or not.
	 * This method affects the status of other properties such as HasConnectError, IsOpen
	 * If the connection was open when the call was made, it is closed and reopened.
	 * @return bool
	 */
	public function Open(){
		if($this->_isOpen){$this->Close();}
		$this->_conn = @new mysqli($this->_host, $this->_user, $this->_pass, $this->_db, $this->_port, $this->_socket);
		$this->_connErrNo = $this->_conn->connect_errno; $this->_connErrMsg = $this->_conn->connect_error;
		if($this->_connErrNo){$this->_hasConnectError = true; $this->_isOpen = false; return false;}
		else{$this->_hasConnectError = false; $this->_isOpen = true; $this->_isClosed = false; return true;}
		
	}
	/**
	 * Closes the connection to the database. If the connection was not open at the time of calling Close(), nothing 
	 * happens, but the method returns false. Returns whether the close was successfull or not
	 * @return bool
	 */
	public function Close(){
		if($this->_isOpen){
			if($this->_conn->close()){$this->_isOpen = false; $this->_isClosed = true; return true;}
			else{return false;}
		}
		return false;
	}
	/** IConnection method. To be implemented by inheritors*/
	public function CreateCommand(){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return new DbCommand($this);
	}
	###########################################################################
	# IDbConnection Methods Implementation
	###########################################################################
	/**
	 * Excapes the supplied string to be appropriate for use within a statement that will be executed against this connection.
	 * @param $string string the string to escape
	 * @return string
	 * The escaped string
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function Escape($string){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return $this->_conn->escape_string($string);
	}
	/**
	 * Returns the number of rows affected by the last execute call
	 * @return int
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function AffectedRows(){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return $this->_conn->affected_rows;
	}
	/**
	 * Returns the last auto-generated ID from the last INSERT statement executed
	 * @return scalar
	 * The last auto-generated ID from the last INSERT operation
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function LastInsertId(){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return $this->_conn->insert_id;
	}
	/**
	 * Returns whether the last execute call still has more results. To be used in conjunction with ExecuteMultiQuery,
	 * NextResult(), and CurrentResult() or CurrentResultBufffered()
	 * @return bool
	 * Whether there are still more results from the last execute call
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function HasMoreResults(){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return $this->_conn->more_results();
	}
	/**
	 * Moves to the next query result which then can be retrieved using CurrentResult() or CurrentResultBufffered()
	 * @return bool
	 * Whether the move to the next result was successfull or not
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function NextResult(){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return $this->_conn->next_result();
	}
	/**
	 * Retrieves the current result from the last execute call.
	 * @return DbQueryResult
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function CurrentResult(){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return new DbQueryResult($this->_conn->use_result());
	}
	/**
	 * Retrieves the current result, buffered, from the last execute call.
	 * @return DbQueryResult
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function CurrentResultBufffered(){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return new DbQueryResult($this->_conn->store_result());
	}
	/**
	 * Executes the supplied sql statement against the database and returns an IQueryResult object
	 * @param $sql string
	 * The SQL statement to execute. The $sql parameter must be a  single SQL statements.
	 * @return DbQueryResult
	 * The internal result of the query execution, to be used by comman objects mainly. However it also provides an 
	 * alternative method of handling databases through the direct use of the query results.
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function Execute($sql){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		return new DbQueryResult($this->_conn->query($sql));
	}
	/**
	 * Executes the supplied sql statements against the database and returns an IQueryResult object
	 * @param $sql string
	 * The SQL statements to execute.
	 * @return DbQueryResult
	 * The internal result of the query execution, to be used by comman objects mainly. However it also provides an 
	 * alternative method of handling databases through the direct use of the query results.
	 * @throws Exception If this method was called while the connection was closed or never opened
	 */
	public function ExecuteMultiQuery($sql){
		if(!$this->_isOpen){throw new Exception("Trying to perform an operation on a connection that is not open", 1);}
		if($this->_conn->multi_query($sql)){
			return new DbQueryResult($this->_conn->use_result());
		}
		else{
			return new DbQueryResult(false);
		}
	}
};
?>