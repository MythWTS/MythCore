<?php
namespace Core\Data\Db\MySql{
	class Connection extends \Core\Data\Db\ConnectionBase{
		protected $_conn;
		public function __construct($hostName='', $dbName='', $userName='', $userPass=''){
			parent::__construct($hostName, $dbName, $userName, $userPass);
			$this->_conn = new \mysqli($this->_host, $this->_db, $this->_user, $this->_pass);
		}
		public function Open(){}
		public function Close(){}
		public function IsOpen(){}
		public function IsClosed(){}
		public function ExecuteSql(){}
	};
}
?>