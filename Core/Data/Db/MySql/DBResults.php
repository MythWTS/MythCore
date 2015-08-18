<?php
namespace Core\Data\Db\MySql{
	class DBResults extends \Core\Data\Db\QueryResultsBase{
		############################################################################
		# Protected Fields
		############################################################################
		protected $_res;
		############################################################################
		# Public Constructor
		############################################################################
		/** Constructor(mysqli_result $result) */
		//$isSuccess=true, $isRowset=false, $fieldsCount=0, $rowsCount=0, array $fieldsInfo=null
		public function __construct($result){
			if(\U::NA($result)){parent::__construct(false, false, 0, 0, array());}
			else if(is_bool($result)){parent::__construct($result, false, 0, 0, array());}
			else if(is_scalar($result)){parent::__construct(true, false, 0, 0, array()); $this->_res = $result;}
			else if(is_a($result, "mysqli_result")){
				parent::__construct(
					true, true,
					$result->field_count, $result->num_rows,
					$result->fetch_fields()?:array()
				);
				$this->_res = $result;
			}
		}
		############################################################################
		# QueryResultsBase Implementation
		############################################################################
		protected function extractFieldsInfo(array $fieldsInfo=null){
			//TODO: Change implementation so that it will convert the raw stdClass object arrray into a new class for FieldsInfo
			return $fieldsInfo;
		}
		######################################
		public function Free(){
			if($this->_isRowset){$this->_res->free();}
		}
		######################################
		public function Read(){
			return $this->_isRowset? $this->_res->fetch_assoc():$this->_res;
		}
		public function ReadArray(){
			return $this->_isRowset? $this->_res->fetch_row() : array($this->_res);
		}
		//TODO: Add A Default class name after creating a suitable one (maybe one that stores values in an associative array and enables getting and setting field names as properties)
		/**
		 * DBReults->ReadObject($className)
		 * Reads one row from the result set and returns it as an object of the class $className.
		 * The class must have a static method FromAssocArray(array $array) that returns a new object of the class initialized
		 * to the values supplied in the assoc array.
		 * Returns null if this object is not a rowset
		 */
		public function ReadObject($className){
			if($this->_isRowset && class_exists($className) && method_exists("{$className}", 'FromAssocArray')){
				call_user_func("{$className}::FromAssocArray", $this->_res->fetch_assoc());
			}
			else{return null;}
		}
		############################################################################
		# Public Methods
		############################################################################
		public function CurrentRowLengths(){
			if($this->_isRowset){return $this->_res->lengths;}
			else{return array();}
		}
	};
}
?>