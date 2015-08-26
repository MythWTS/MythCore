<?php
namespace Core\Data;
use Core\IObject, Iterator, ArrayAccess;
interface IDataRecord extends IObject, Iterator, ArrayAccess{
	/**
	 * Returns whether this data record is a scalar or a data structure/row
	 * @return bool
	 */
	public function IsScalar();
	/**
	 * Get-Accessor to the FieldsCount Property.
	 * @return int
	 */
	public function FieldsCount();
	/**
	 * Get an integer value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return int
	 */
	public function GetInt($fieldIndex);
	/**
	 * Get an string value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return string
	 */
	public function GetString($fieldIndex);
	/**
	 * Get a boolean value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function GetBoolean($fieldIndex);
	/**
	 * Get the value of the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return mixed
	 */
	public function GetValue($fieldIndex);
	/**
	 * Get a float/double value from the specified field within the record object
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return float
	 */
	public function GetDecimal($fieldIndex);
	/**
	 * Get the numeric index of the field with the specified name
	 * @param $fieldName string the name of the field
	 * @throws Exception if the supplied index is not a string
	 * @return int
	 * the index of the field with the specified name, -1 if there'sno field with the specified name
	 */
	public function GetOrdinal($fieldName);
	/**
	 * Get the name of the field with the specified numeric index
	 * @param $fieldIndex int the index/ordinal of the field
	 * @throws Exception if the supplied index is not an integer
	 * @return string
	 * the name of the field with the specified index or null if it does not exist
	 */
	public function GetName($fieldIndex);
	/**
	 * Returns wheher the value of the specified field is null
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsNull($fieldIndex);
	/**
	 * Returns wheher the value of the specified field is an empty string
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsEmpty($fieldIndex);
	/**
	 * Returns wheher the value of the specified field is an empty string or only whitespaces
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsWhitespace($fieldIndex);
	/**
	 * Returns wheher the value of the specified field is null, empty, or a whitespace only string
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsNWE($fieldIndex);
	/**
	 * Returns wheher the value of the specified field is null or an empty string
	 * @param $fieldIndex int/string either the name of the field or its numeric index
	 * @throws Exception if the supplied index is not a valid field index
	 * @throws Exception if the supplied index is neithr an integer nor a string
	 * @return bool
	 */
	public function IsNE($fieldIndex);
};
?>