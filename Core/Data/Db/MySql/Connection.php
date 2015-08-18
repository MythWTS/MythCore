<?php
namespace Core\Data\Db\MySql{
	class Connection extends \Core\Data\Db\ConnectionBase{
		protected $_conn, $_isOpen, $_isClosed;
		############################################################################
		# Constructor
		############################################################################
		/** Constructor($hostName='', $dbName='', $userName='', $userPass='') */
		public function __construct($hostName='', $dbName='', $userName='', $userPass=''){
			parent::__construct($hostName, $dbName, $userName, $userPass);
			$this->_isClosed = $this->_isOpen = false;
		}
		############################################################################
		# IConnection Implementation
		############################################################################
		public function Open(){
			$this->_conn = @new \mysqli($this->_host, $this->_user, $this->_pass, $this->_db);
			if($this->_conn->connect_errno){$this->_isOpen = true; $this->_isClosed = true; return false;}
			else{$this->_isOpen = true; $this->_isClosed = false; return true;}
		}
		public function Close(){
			if($this->_isOpen){
				$this->_conn->close();
				$this->_isOpen = false; $this->_isClosed = true;
			}
		}
		public function IsOpen(){return $this->_isOpen;}
		public function IsClosed(){return $this->_isClosed;}
		######################################
		public function Execute($query){
			return new DBReults($this->_conn->query($query));
		}
		######################################
		public function ExecuteMultiQuery($query){
			return $this->_conn->multi_query($query);
		}
		public function HasMoreResults(){
			return $this->_conn->more_results();
		}
		public function NextResult(){
			return $this->_conn->next_result();
		}
		public function CurrentResult(){
			return new DBReults($this->_conn->use_result());
		}
		public function CurrentResultBufffered(){
			return new DBReults($this->_conn->store_result());
		}
		######################################
		public function Escape($string){
			return $this->_conn->escape_string($string);
		}
		######################################
		public function LastErrorNumber(){
			return $this->_conn->errno;
		}
		public function LastErrorMsg(){
			return $this->_conn->error;
		}
		######################################
		public function AffectedRows(){
			return $this->_conn->affected_rows;
		}
		public function LastInsertId(){
			return $this->_conn->insert_id;
		}
		############################################################################
		# Public Methods
		############################################################################
		# Get Accessors
		######################################
		public function HasConnectErrors(){
			return $this->_conn->connect_errno?true:false;
		}
		public function HasQueryErrors(){
			return $this->_conn->errno?true:false;
		}
		
		public function ConnectErrorNumber(){
			return $this->_conn->connect_errno;
		}
		public function ConnectErrorMsg(){
			return $this->_conn->connect_error;
		}
		
		public function ErrorsList(){
			return $this->_conn->error_list;
		}
		public function SqlStateErrorCode(){
			return $this->_conn->sqlstate;
		}
		public function WarningCount(){
			return $this->_conn->warning_count;
		}
		
		public function HostInfo(){
			return $this->_conn->host_info;
		}
		
		public function FieldCount(){
			return $this->_conn->field_count;
		}
		///TODO: change the return by creating a connection stats class and returning an object of it
		public function Stats(){
			return $this->_conn->get_connection_stats();
		}
		///TODO: change the return type as it currently returns a mysqli_warning object
		public function Warnings(){
			return $this->_conn->get_warnings();
		}
		# Methods
		######################################
		public function ChangeUser($user, $password, $db=null){
			return $this->_conn->change_user($user, $password, $db);
		}
		public function ChangeDb($newDb){
			return $this->_conn->select_db($newDb);
		}
	};
}
?>