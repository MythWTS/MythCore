<?php
namespace Core\Data\Db{
	abstract class ConnectionBase extends \Object implements IConnection{
		protected $_host, $_db, $_user, $_pass;
		/** Constructor($host='', $dbname='', $username='', $password='') */
		protected function __construct($host='', $dbname='', $username='', $password=''){
			$this->_host = \U::ES($host);
			$this->_db = \U::ES($dbname);
			$this->_user = \U::ES($username);
			$this->_pass = \U::ES($password);
		}
		/**
		 * Accessor for the host name member. Should be overriden if you don't want to support setting the host name 
		 * or want to do extra checks other than making sure it is a string.
		 */
		public function Host($value=null){
			if($value===null){return $this->_host;}
			else{$this->_host = \U::ES($value);}
		}
		/**
		 * Accessor for the database name member. Should be overriden if you don't want to support setting the host name 
		 * or want to do extra checks other than making sure it is a string.
		 */
		public function Database($value=null){
			if($value===null){return $this->_db;}
			else{$this->_db = \U::ES($value);}
		}
		/**
		 * Accessor for the user name member. Should be overriden if you don't want to support setting the host name 
		 * or want to do extra checks other than making sure it is a string.
		 */
		public function User($value=null){
			if($value===null){return $this->_user;}
			else{$this->_user = \U::ES($value);}
		}

		abstract public function Open();
		abstract public function Close();
		abstract public function IsOpen();
		abstract public function IsClosed();
		abstract public function ExecuteSql();
	};
};
?>