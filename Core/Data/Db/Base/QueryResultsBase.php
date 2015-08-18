<?php
namespace Core\Data\Db{
	abstract class QueryResultsBase extends \Object implements IQueryResults{
		############################################################################
		# Protected Fields
		############################################################################
		protected $_isRowset, $_isSuccess, $_fieldsCount, $_rowsCount, $_fieldsInfo;
		############################################################################
		# Protected Constructor
		############################################################################
		/** Constructor($isSuccess=true, $isRowset=false, $fieldsCount=0, $rowsCount=0, array $fieldsInfo=null) */
		protected function __construct($isSuccess=true, $isRowset=false, $fieldsCount=0, $rowsCount=0, array $fieldsInfo=null){
			$this->_fieldsCount = $fieldsCount; $this->_rowsCount = $rowsCount;
			$this->_isRowset = $isRowset; $this->_isSuccess = $isSuccess;
			$this->_fieldsInfo = $this->extractFieldsInfo($fieldsInfo);
		}
		############################################################################
		# IQueryResults Implementation
		############################################################################
		public function IsRowset(){
			return $this->_isRowset;
		}
		public function IsScalar(){
			return !$this->_isRowset;
		}
		public function IsSuccess(){
			return $this->_isSuccess;
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
		############################################################################
		# Abstract Methods
		############################################################################
		abstract public function Free();
		abstract public function Read();
		abstract public function ReadArray();
		abstract public function ReadObject($className);

		abstract protected function extractFieldsInfo(array $fieldsInfo);
	};
}
?>