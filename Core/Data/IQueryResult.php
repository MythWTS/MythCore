<?php
namespace Core\Data;
use Core\IObject;
/**
 * This class is the bridge between php data access style and .NET access style. It represents the result returned by 
 * executing a query against a data store. It is optional for implementors of data providers for data stores not initially
 * supported by the MythCore framework. It is recommended however to implement this interface.
 */
interface IQueryResult extends IObject{
	/**
	 * Returns whether this instance contains a row set or not
	 * @return bool
	 */
	public function IsRowset();
	/**
	 * Returns whether the result held by this instance is a scalar or not
	 * @return bool
	 */
	public function IsScalar();
	/**
	 * Returns whether this result instance holds a successfully retrieved result or not
	 * @return bool
	 */
	public function IsSuccess();
	/**
	 * Returns the number of fields of the current result held by this instance. -1 if the result is a scalar.
	 * @return int
	 */
	public function FieldsCount();
	/**
	 * Returns the number of rows held within this result instance. -1 if the result is not a rowset
	 * @return int
	 */
	public function RowsCount();
	/**
	 * Returns an array of FieldInfo objects representing information about the fields of the rowset currently held
	 * within this result instance. An empty array is returned if the result does not hold a rowset
	 * @return array
	 */
	public function FieldsInfo();
	/**
	 * Frees anyresources held by this instance
	 * @return null
	 */
	public function Free();
	/**
	 * Retrieves an associative array containing the current row in the result's rowset. If the result is a scalar,
	 * it returns the scalar value wrapped in an array.
	 * @return array
	 */
	public function Read();
	/**
	 * Same as read but returns an integer indexed array. Might be slighlty faster so use if you know the order of fields
	 * @return array
	 */
	public function ReadArray();
	/**
	 * Retrieves an array that is both associative and numeric-indexed containing the current row in the result's rowset.
	 * If the result is a scalar, it returns the scalar value wrapped in an array.
	 * @return array
	 */
	public function ReadRow();	
	/**
	 * Same as Read but returns an object with the data. An optional $className parameter can be passed to tell the method
	 * to use this class as the return type instead. In that case, the class passed must exist and it must have either
	 * a constructor that accepts an array or have a static factory method called FromRowData that takes an array
	 * The method looks for the factory method first, if it is found, it is used, otherwise, the method looks for the
	 * constructor. If both do not exist, an exception is thrown. If one of them is found, it is passed the row
	 * in an array that is both associative and numerically indexed. Implementors should use that to initialize the new
	 * object. If no parameter is passed (null or empty string passed have the same effect), the object returned will be
	 * an object of the DataResultObject class which is basically a version of Object that is used for this purpose
	 * @return object
	 * Either a DataResultObject or an object of the $className class
	 */
	public function ReadObject($className='');
};
?>