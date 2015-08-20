<?php
namespace Core\Data\Db;
class Table extends DbObject{
	protected $_name;
	public function __construct(IConnection $conn, $tableName){
		parent::__construct($conn);
		$this->_name = $tableName;
	}
	
	public function RowsCount(){
		if(!$this->_conn->IsOpen()){$this->_conn->Open();}
		$res = $this->_conn->Execute("SELECT COUNT(*) FROM `{$this->_name}`");
		$row = $res->ReadArray();
		$row = $row[0];
		$res->Free();
		$this->_conn->Close();
		return $res;
	}
};
?>