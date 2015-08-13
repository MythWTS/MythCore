<?php
namespace Core\Data\Db{
	abstract class QueryResultsBase extends \Object implements IQueryResults{
		protected $_isScalar, $_isRowset, $_fieldsCount, $_rowsCount, $_fieldsInfo;
		protected function __construct($isScalar=true, $isRowset=false, $fieldsCount=0, $rowsCount=0, $fieldsInfo=null){
			$this->_fieldsCount = $fieldsCount; $this->_rowsCount = $rowsCount;
			$this->_isRowset = $isRowset; $this->_isScalar = $isScalar;
			$this->_fieldsInfo = $fieldsInfo;
		}
		public function IsRowset(){
			return $this->_isRowset;
		}
		public function IsScalar(){
			return $this->_isScalar;
		}
		public function FieldsCount(){
			return $this->_fieldsCount;
		}
		public function RowsCount(){
			return $this->_rowsCount;
		}
		public function FieldsInfo(){
			return $this->_fieldsInfo;
		}
	};
}
?>