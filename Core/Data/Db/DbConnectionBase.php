<?php
namespace Core\Data\Db;
use Core\Object, Core\Data\Db\IDbConnection, Core\U;
/**
 * Optional base class for implementations of IDbConnection. This class provides some features that most likely
 * will be useful to implementers of IDbConnection. However, choosing to extend it is totally optional.
 * Within the MythCore framework, some features might be added that require an object of this class though.
 */
abstract class DbConnectionBase extends Object implements IDbConnection{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_host, $_db, $_user, $_pass, $_port, $_socket;
	protected $_isOpen, $_isClosed, $_hasError, $_hasConnectError;
	protected $_errNo, $_errMsg, $_connErrNo, $_connErrMsg;
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor($host='', $dbName='', $userName='', $password='', $port='', $socket='') - Protected
	 * Instantiates a new instance of the DbConnectionBase Object for inheritors to use
	 */
	protected function __construct($host='', $dbName='', $userName='', $password='', $port='', $socket=''){
		$this->_host = U::ES($host); $this->_db = U::ES($dbName);
		$this->_user = U::ES($userName); $this->_pass = U::ES($password);
		$this->_port = $port; $this->_socket = $socket;
		$this->_isOpen = $this->_isClosed = $this->_hasError = $this->_hasConnectError = false;
		$this->_errNo = $this->_connErrNo = 0;
		$this->_errMsg = $this->_connErrMsg = ''; 
	}
	###########################################################################
	# Properties
	###########################################################################
	/**
	 * Accessor for the Host Property. [set, get]
	 * Closes the connection if it is open before changing the property
	 * @return string
	 */
	public function Host($value=null){
		if($value===null){return $this->_host;}
		else{
			if($this->IsOpen()){$this->Close();}
			$this->_host = U::ES($value);
		}
	}
	/**
	 * Accessor for the DatabaseName Property. [set, get]
	 * Closes the connection if it is open before changing the property
	 * @return string
	 */
	public function DatabaseName($value=null){
		if($value===null){return $this->_db;}
		else{
			if($this->IsOpen()){$this->Close();}
			$this->_db = U::ES($value);
		}
	}
	/**
	 * Accessor for the UserName Property. [set, get]
	 * Closes the connection if it is open before changing the property
	 * @return string
	 */
	public function UserName($value=null){
		if($value===null){return $this->_user;}
		else{
			if($this->IsOpen()){$this->Close();}
			$this->_user = U::ES($value);
		}
	}
	/**
	 * Accessor for the Password Property. [set, get]
	 * Closes the connection if it is open before changing the property
	 * @return string
	 */
	public function Password($value=null){
		if($value===null){return $this->_pass;}
		else{
			if($this->IsOpen()){$this->Close();}
			$this->_pass = U::ES($value);
		}
	}
	/**
	 * Accessor for the Port Property. [set, get]
	 * Closes the connection if it is open before changing the property
	 * @return string
	 */
	public function Port($value=null){
		if($value===null){return $this->_port;}
		else{
			if($this->IsOpen()){$this->Close();}
			$this->_port = U::ES($value);
		}
	}
	/**
	 * Accessor for the Socket Property. [set, get]
	 * Closes the connection if it is open before changing the property
	 * @return string
	 */
	public function Socket($value=null){
		if($value===null){return $this->_socket;}
		else{
			if($this->IsOpen()){$this->Close();}
			$this->_socket = U::ES($value);
		}
	}
	###########################################################################
	# IConnection Methods
	###########################################################################
	/**
	 * Returns whether the connection has errors or not
	 * @return bool
	 */
	public function HasError(){
		return $this->_hasError;
	}
	/**
	 * Returns the last error number if any. Zero error code means no errors
	 * @return int
	 */
	public function LastErrorNumber(){
		return $this->_errNo;
	}
	/**
	 * Returns the last error's message. If no errors and the last operation was successfull, returns an empty string
	 * @return string
	 */
	public function LastErrorMessage(){
		return $this->_errMsg;
	}
	/**
	 * Returns whether the connection is currently opened to the data source or not
	 * @return bool
	 */
	public function IsOpen(){
		return $this->_isOpen;
	}
	/**
	 * Return whether the connection is closed at the time of call. The connection must have been closed explicitly using
	 * Close() for this to be true. This is important as at the time of construction, the connection is not open, but it's
	 * not closed as well.
	 * @return bool
	 */
	public function IsClosed(){
		return $this->_isClosed;
	}
	###########################################################################
	# IDbConnection Methods
	###########################################################################
	/**
	 * Returns whether the connection has a connect error
	 * @return bool
	 */
	public function HasConnectError(){
		return $this->_hasConnectError;
	}
	/**
	 * Returns the connect error number associated with the last connect error. A value of 0 should mean no connect error
	 * @return int
	 */
	public function ConnectErrorNumber(){
		return $this->_connErrNo;
	}
	/**
	 * Returns the connect error message associated with the last connect error. A value of 0 should mean no connect error
	 * @return string
	 */
	public function ConnectErrorMessage(){
		return $this->_connErrMsg;
	}
	###########################################################################
	# IConnection Abstract Methods
	###########################################################################
	/** IConnection method. To be implemented by inheritors*/
	abstract public function Open();
	/** IConnection method. To be implemented by inheritors*/
	abstract public function Close();
	/** IConnection method. To be implemented by inheritors*/
	abstract public function CreateCommand();
	###########################################################################
	# IDbConnection Abstract Methods
	###########################################################################
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function Execute($sql);
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function ExecuteMultiQuery($sql);
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function HasMoreResults();
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function NextResult();
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function CurrentResult();
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function CurrentResultBufffered();
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function Escape($string);
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function AffectedRows();
	/** IDbConnection method. To be implemented by inheritors*/
	abstract public function LastInsertId();
};
?>