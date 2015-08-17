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
			if($this->_conn->connect_errno){$this->_isOpen = true; $this->IsClosed() = true; return false;}
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
		public function ExecuteSql($sql){
			return new _DBReults($this->_conn->query($sql));
		}
		############################################################################
		# Public Methods
		############################################################################
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
		
		public function LastErrorNumber(){
			return $this->_conn->errno;
		}
		public function LastErrorMsg(){
			return $this->_conn->error;
		}
		public function ErrorsList(){
			return $this->_conn->error_list;
		}
		
		public function AffectedRows(){
			return $this->_conn->affected_rows;
		}
		public function FieldCount(){
			return $this->_conn->field_count;
		}
	};
}
?>