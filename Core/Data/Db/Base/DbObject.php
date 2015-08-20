<?php
namespace Core\Data\Db;
class DbObject extends \Object{
	protected $_conn;
	public function __construct(IConnection $conn){
		$this->_conn = $conn;
	}
	public function Connect(){
		if(!$this->_conn->IsOpen()){$this->_conn->Open();}
		return $this;
	}
	public function Disconnect(){
		if($this->_conn->IsOpen()){$this->_conn->Close();}
		return $this;
	}
};
?>