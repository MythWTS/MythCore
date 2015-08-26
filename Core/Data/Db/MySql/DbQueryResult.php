<?php
namespace Core\Data\Db\MySql;
use Core\Data\IQueryResult, Core\Object, Core\U, Core\Data\FieldInfo, Core\Data\DataResultObject;
use mysqli, mysqli_result, Exception;
/**
 * This class is primarily for internal implementation by the DbCommand and DbReader classes.
 * However, it does have enough utilities to be use on its own.
 * Usually, you will get an object of DbQueryResult from another method such as DbConnection's Execute()
 * There will be no need to create objects from this class explicitly or using the constructor
 */
class DbQueryResult extends Object implements IQueryResult{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_res;
	protected $_isRowset, $_isScalar, $_isSuccess;
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor($result)
	 * Instantiates a new object of the Core\Data\Db\MySql\DbQueryResult class.
	 * $result should usually be the result of a call to query() in a mysqli object
	 * Usually, you will get an object of DbQueryResult from another method such as DbConnection's Execute()
	 * There will be no need to create objects using this constructor.
	 */
	public function __construct($result){
		if(U::NA($result)){$this->_res = null; $this->_isScalar = $this->_isRowset = $this->_isSuccess = false;}
		elseif($result === false){$this->_isRowset = $this->_isScalar = $this->_isSuccess = $this->_res = false; }
		elseif(is_a($result, 'mysqli_result')){$this->_res = $result; $this->_isSuccess = $this->_isRowset = true; $this->_isScalar = false;}
		elseif(is_scalar($result)){$this->_res = $result; $this->_isSuccess = $this->_isScalar = true; $this->_isRowset = false;}
		else{
			throw new Exception("Value supplied to constructor of DbQueryResult is not a valid query result", 1);
		}
	}
	###########################################################################
	# IQueryResult Methods Implementation
	###########################################################################
	/**
	 * Returns whether this instance contains a row set or not
	 * @return bool
	 */
	public function IsRowset(){
		return $this->_isRowset;
	}
	/**
	 * Returns whether the result held by this instance is a scalar or not
	 * @return bool
	 */
	public function IsScalar(){
		return $this->_isScalar;
	}
	/**
	 * Returns whether this result instance holds a successfully retrieved result or not
	 * @return bool
	 */
	public function IsSuccess(){
		return $this->_isSuccess;
	}
	/**
	 * Returns the number of fields of the current result held by this instance. -1 if the result is a scalar.
	 * @return int
	 */
	public function FieldsCount(){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isRowset){return $this->_res->field_count;}
		else{return 0;}
	}
	/**
	 * Returns the number of rows held within this result instance. -1 if the result is not a rowset
	 * @return int
	 */
	public function RowsCount(){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isRowset){return $this->_res->num_rows;}
		else{return 0;}
	}
	/**
	 * Returns an array of FieldInfo objects representing information about the fields of the rowset currently held
	 * within this result instance. An empty array is returned if the result does not hold a rowset
	 * @return array
	 */
	public function FieldsInfo(){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isRowset){
			$fields = array();
			$f = $this->_res->fetch_fields();
			foreach($f as $field){
				$fields[] = FieldInfo::FromMysqliFieldInfo($field);
			}
			return $fields;
		}
		else{return array();}
	}
	/**
	 * Frees anyresources held by this instance
	 * @return null
	 */
	public function Free(){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isRowset){$this->_res->free();}
	}
	/**
	 * Retrieves an associative array containing the current row in the result's rowset. If the result is a scalar,
	 * it returns the scalar value wrapped in an array.
	 * @return array
	 */
	public function Read(){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isRowset){return $this->_res->fetch_assoc();}
		else{return array($this->_res);}
	}
	/**
	 * Same as read but returns an integer indexed array. Might be slighlty faster so use if you know the order of fields
	 * @return array
	 */
	public function ReadArray(){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isRowset){return $this->_res->fetch_row();}
		else{return array($this->_res);}
	}
	/**
	 * Retrieves an array that is both associative and numeric-indexed containing the current row in the result's rowset.
	 * If the result is a scalar, it returns the scalar value wrapped in an array.
	 * @return array
	 */
	public function ReadRow(){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isRowset){return $this->_res->fetch_array(MYSQLI_BOTH);}
		else{return array($this->_res);}
	}
	/**
	 * Same as Read but returns an object with the data. An optional $className parameter can be passed to tell the method
	 * to use this class as the return type instead. In that case, the class passed must exist and it must have either
	 * a constructor that accepts an array or have a static factory method called FromRowData that takes an array
	 * The method looks for the factory method first, if it is found, it is used, otherwise, the method looks for the
	 * constructor. If one of them is found, it is passed the row
	 * in an array that is both associative and numerically indexed. Implementors should use that to initialize the new
	 * object. If no parameter is passed (null or empty string passed have the same effect), the object returned will be
	 * an object of the DataResultObject class which is basically a version of Object that is used for this purpose
	 * @return object
	 * Either a DataResultObject or an object of the $className class
	 */
	public function ReadObject($className=''){
		if(!$this->_isSuccess){throw new Exception('Tying to access method of an unsuccessfull query results', 1);}
		if($this->_isScalar){return $this->_res;}
		elseif(U::NA($className)){
			return new DataResultObject($this->_res->fetch_array(MYSQLI_BOTH));
		}
		else{
			if(method_exists($className, 'FromRawData')){return $className::FromRawData($this->_res->fetch_array(MYSQLI_BOTH));}
			else{return new $className($this->_res->fetch_array(MYSQLI_BOTH));}
		}
	}
};
?>