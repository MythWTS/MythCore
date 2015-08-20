<?php
namespace Core\Data\Db;
class Database extends DbObject{
	protected $_tables, $_tablesCount, $_views, $_viewsCount;
	protected $_procs, $_procsCount, $_funcs, $_funcsCount;
	public function __construct(IConnection $conn){
		parent::__construct($conn);
		$this->_tables = array(); $this->_funcs = array(); $this->_procs = array();
		$this->_tablesCount = $this->_viewsCount = $this->_procsCount = $this->_funcsCount = 0;
		//Openning connection if it is closed
		if(!$conn->IsOpen()){$conn->Open();}
		//Getting tables and views information
		$res = $conn->Execute('SHOW FULL TABLES');
		while($row = $res->ReadArray()){
			if(strtolower($row[1]) == 'view'){$this->_viewsCount++; $this->_views[] = $row[0];}
			else{$this->_tablesCount++; $this->_tables[] = $row[0];}
		}
		$res->Free();
		//Getting Procedures and Functions
		$res = $conn->Execute("SHOW PROCEDURE STATUS WHERE Db = DATABASE()");
		$this->_procsCount = $res->RowsCount();
		while($row = $res->ReadArray()){
			$this->_procs[] = $row[1];
		}
		$res->Free();
		$res = $conn->Execute("SHOW FUNCTION STATUS WHERE Db = DATABASE()");
		$this->_funcsCount = $res->RowsCount();
		while($row = $res->ReadArray()){
			$this->_funcs[] = $row[1];
		}
		$res->Free();
		$this->_conn->Close();
	}
	public function TablesCount(){return $this->_tablesCount;}
	public function ProceduresCount(){return $this->_procsCount;}
	public function FunctionsCount(){return $this->_funcsCount;}

	public function Tables(){return $this->_tables;}
	public function Procedures(){return $this->_procs;}
	public function Functions(){return $this->_funcs;}
	///TODO: Add "Create" methods to create database objects in the database
	///TODO: Add "Drop" Methods
	///TODO: Add "Alter Methods"
};
?>