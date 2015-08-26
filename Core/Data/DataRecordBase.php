<?php
namespace Core\Data;
use Core\Object;
use Core\U;
/**
 * Optional base class for IDataRecord implementations. It implements the methods of Iterator, ArrayAccess
 * and IDataRecord so it is ready to use. It is abstract only to prevent using it directly just as
 * a way of being consistent. It is highly recommended though to override the implementation of some of 
 * the methods to improve performance.
 * In particular, it's recommended to override: GetName($fieldIndex) and GetOrdinal($fieldName)
 * Mainly used as the base class for DataReaders since they implement the IDataRecord interface so this class
 * takes the burden of implementing the standard stuff off of the implementer's shoulder. You're Welcome!
 */
abstract class DataRecordBase extends Object implements IDataRecord{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_record, $_scalar, $_count;
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor($data)
	 * @param $data mixed
	 * Either a scalar value or an array that holds the same data as both assoc and numeric (like the 
	 * return of fetch_array(MYSQLI_BOTH))
	 */
	public function __construct($data){
		if(is_scalar($data)){
			$this->_record = $data;
			$this->_scalar = true;
			$this->_count = 1;
		}
		else{
			$this->_scalar = false;
			$this->_record = array(array(), array());
			foreach($data as $key=>$value){
				if(is_string($key)){$this->_record[0][$key] = $value;}
				else {$this->_record[1][$key] = $value;}
			}
			$this->_count = count($this->_record[0]);
			//reset($this->_record[0]); reset($this->_record[1]);
		}
	}
	###########################################################################
	# Iterator Methods
	###########################################################################
	/** Iterator implementtion method. Returns current item. */
	public function current(){
		if($this->_scalar){return $this->_record;}
		else{return current($this->_record[0]);}
	}
	/** Iterator implementtion method. Returns current key. */
	public function key(){
		if($this->_scalar){return 0;}
		else{return key($this->_record[0]);}
	}
	/** Iterator implementtion method. Moves to next item. */
	public function next(){
		if(!$this->_scalar){return next($this->_record[0]);}
		else{return false;}
	}
	/** Iterator implementtion method. Moves to beginning of record. */
	public function rewind(){
		if(!$this->_scalar){
			reset($this->_record[1]); return reset($this->_record[0]);
		}
		else{return false;}
	}
	/** Iterator implementtion method. Checks if current is valid. */
	public function valid(){
		if($this->_scalar){return true;}
		else{return key_exists(key($this->_record[0]), $this->_record[0]);}
	}
	###########################################################################
	# ArrayAccess Methods
	###########################################################################
	/** ArrayAccess implementtion method. */
	public function offsetExists($offset){
		if($this->_scalar){return $offset === 0;}
		elseif(is_string($offset)){return isset($this->_record[0][$offset]);}
		elseif(is_int($offset)){return isset($this->_record[1][$offset]);}
		else{return false;}
	}
	/** ArrayAccess implementtion method. */
	public function offsetGet($offset){
		if($this->_scalar){
			if($offset !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return $this->_record;
		}
		else{
			if(is_string($offset)){
				if(!key_exists($offset, $this->_record[0])){throw new Exception('Trying to access invalid offset in DataRecord', 1);}
				return $this->_record[0][$offset];
			}
			elseif(is_int($offset)){
				if(!key_exists($offset, $this->_record[1])){throw new Exception('Trying to access invalid offset in DataRecord', 1);}
				return $this->_record[1][$offset];
			}
			else{throw new Exception('DataRecords only accept string or int offsets', 1);}
		}
	}
	/** ArrayAccess implementtion method. */
	public function offsetSet($offset, $value){
		throw new Exception('Data Records are read only. You can not set values in a DataRecord object', 1);
	}
	/** ArrayAccess implementtion method. */
	public function offsetUnset($offset){
		throw new Exception('Data Records are read only. You can not unset values in a DataRecord object', 1);
	}
	###########################################################################
	# IDataRecord Methods
	###########################################################################
	/**
	 * Returns whether this data record is a scalar or a data structure/row
	 * @return bool
	 */
	public function IsScalar(){
		return $this->_scalar;
	}
	/**
	 * Get-Accessor to the FieldsCount Property.
	 * @return int
	 */
	public function FieldsCount(){
		return $this->_count;
	}
	/**
	 * Get an integer value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return int
	 */
	public function GetInt($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (int)($this->_record);
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (int)($this->_record[0][$fieldIndex]);
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (int)($this->_record[1][$fieldIndex]);
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Get an string value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return string
	 */
	public function GetString($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (string)($this->_record);
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (string)($this->_record[0][$fieldIndex]);
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (string)($this->_record[1][$fieldIndex]);
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Get a boolean value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function GetBoolean($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (bool)($this->_record);
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (bool)($this->_record[0][$fieldIndex]);
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (bool)($this->_record[1][$fieldIndex]);
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Get a float/double value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return float
	 */
	public function GetDecimal($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (float)($this->_record);
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (float)($this->_record[0][$fieldIndex]);
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return (float)($this->_record[1][$fieldIndex]);
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Get the value of the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return mixed
	 */
	public function GetValue($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return $this->_record;
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return $this->_record[0][$fieldIndex];
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return $this->_record[1][$fieldIndex];
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Get the numeric index of the field with the specified name
	 * @param $fieldName string the name of the field
	 * @throws Exception if the supplied index is not a string
	 * @return int
	 * the index of the field with the specified name, -1 if there'sno field with the specified name
	 * @note this mehod's implementation here is a very in-effecient one. This is mainly because it relies on having
	 * an implementation without forcing sxtenders to have extra data members at construction. It's advisable to
	 * override this method in child classes for better performance if possible
	 */
	public function GetOrdinal($fieldName){
		if($this->_scalar){return 0;}
		elseif(is_string($fieldName)){
			if(key_exists($fieldName, $this->_record[0])){
				return array_search($fieldName, array_keys($this->_record[0]));
			}
			else{return -1;}
		}
		else{throw new Exception('GetOrdinal only accepts string parameter. Non-string passed', 1);}
	}
	/**
	 * Get the name of the field with the specified numeric index
	 * @param $fieldIndex int the index/ordinal of the field
	 * @throws Exception if the supplied index is not an integer
	 * @return string
	 * the name of the field with the specified index or null if it does not exist
	 * @note this mehod's implementation here is a very in-effecient one. This is mainly because it relies on having
	 * an implementation without forcing sxtenders to have extra data members at construction. It's advisable to
	 * override this method in child classes for better performance if possible
	 */
	public function GetName($fieldIndex){
		if($this->_scalar){return null;}
		elseif(is_int($fieldIndex)){
			return array_keys($this->_record[0])[$fieldIndex];
		}
		else{throw new Exception('GetName only accepts string parameters. Non-integer passed', 1);}
	}
	/**
	 * Returns wheher the value of the specified field is null
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsNull($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record);
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record[0][$fieldIndex]);
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record[1][$fieldIndex]);
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Returns wheher the value of the specified field is an empty string
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsEmpty($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return $this->_record === '';
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return $this->_record[0][$fieldIndex] === '';
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return $this->_record[1][$fieldIndex] === '';
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Returns wheher the value of the specified field is an empty string or only whitespaces
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsWhitespace($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return trim($this->_record) === '';
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return trim($this->_record[0][$fieldIndex]) === '';
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return trim($this->_record[1][$fieldIndex]) === '';
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Returns wheher the value of the specified field is null, empty, or a whitespace only string
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsNWE($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record) || trim($this->_record) === '';
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record[0][$fieldIndex]) || (trim($this->_record[0][$fieldIndex]) === '');
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record[1][$fieldIndex]) || (trim($this->_record[1][$fieldIndex]) === '');
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	/**
	 * Returns wheher the value of the specified field is null or an empty string
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsNE($fieldIndex){
		if($this->_scalar){
			if($fieldIndex !== 0){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record) || ($this->_record === '');
		}
		elseif(is_string($fieldIndex)){
			if(!isset($this->_record[0][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record[0][$fieldIndex]) || ($this->_record[0][$fieldIndex] === '');
		}
		elseif(is_int($fieldIndex)){
			if(!isset($this->_record[1][$fieldIndex])){throw new Exception('Trying to access an invalid offset in data record', 1);}
			return is_null($this->_record[1][$fieldIndex]) || ($this->_record[1][$fieldIndex] === '');
		}
		else{throw new Exception('DataRecord objects only support integer and string offsets', 1);}
	}
	###########################################################################
	# Object Methods Override
	###########################################################################
	/**
	 * Oevrrides properties get accessor so that it first searches if the property requested is the name of one
	 * of this record's field. If it is, the record returns the value of the field. Otherwise, it falls
	 * back to the default behacior of Object
	 */
	public function __get($propertyName){
		if(key_exists($propertyName, $this->_record[0])){return $this->_record[0][$propertyName];}
		elseif(method_exists($this, $propertyName)){return call_user_func(array($this, $propertyName));}
		else if(property_exists($this, $propertyName)){return $this->$propertyName;}
		else{return null;}
	}
	###########################################################################
	# Protected Utility Methods
	###########################################################################
	/**
	 * This method is used by children classes to set the current record without having to re-construct the object.
	 * It only accepts an array since if the result/record is a scalar, this method shoul not be called
	 */
	protected function changeCurrentRecord(array $data){
		$this->_record = array(array(), array());
		foreach($data as $key=>$value){
			if(is_string($key)){$this->_record[0][$key] = $value;}
			else {$this->_record[1][$key] = $value;}
		}
		//$this->_count = count($this->_record[0]);
		reset($this->_record[0]); reset($this->_record[1]);
	}
};
?>