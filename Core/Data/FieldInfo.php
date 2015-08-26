<?php
namespace Core\Data;
use Core\Object, Core\U, stdClass;
/**
 * 
 */
class FieldInfo extends Object {
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_name, $_oname, $_table, $_otable, $_maxLength, $_length, $_charset, $_type, $_decimals;
	protected $_nn, $_pk, $_uk, $_blob, $_unsigned, $_zerofill, $_bin, $_enum, $_auto, $_timestamp, $_set,
				$_num, $_partKey, $_group, $_unique;
	###########################################################################
	# Constructor
	###########################################################################
	function __construct(
		$name='', $originalName='', $tableName='', $originalTableName='', $maximumLength='', $length='', $charsetNo='',
		FieldType $type=null, $decimals='', $notNull='', $primaryKey='', $uniqueKey='', $blob='', $unsigned='', $zerofill='',
		$binary='', $enum='', $autoIncrement='', $timestamp='', $set='', $num='', $partKey='', $group='', $unique=''
	) {
		$this->_auto = $autoIncrement; $this->_bin = $binary; $this->_blob = $blob; $this->_charset = $charsetNo;
		$this->_decimals = $decimals; $this->_enum = $enum; $this->_group = $group; $this->_length = $length;
		$this->_maxLength = $maximumLength; $this->_name = $name; $this->_nn = $notNull; $this->_num = $num;
		$this->_oname = $originalName; $this->_otable = $originalTableName; $this->_partKey = $partKey;
		$this->_pk = $primaryKey; $this->_set = $set; $this->_table = $tableName; $this->_timestamp = $timestamp;
		$this->_type = $type; $this->_uk = $uniqueKey; $this->_unique = $unique; $this->_unsigned = $unsigned;
		$this->_zerofill = $zerofill;
	}
	###########################################################################
	# Properties Get Accessors
	###########################################################################
	/**
	 * Whether this field is auto-incremented
	 * @return bool
	 */
	public function IsAutoIncrement(){
		return $this->_auto;
	}
	/**
	 * Whether this field is binary
	 * @return bool
	 */
	public function IsBinary(){
		return $this->_bin;
	}
	/**
	 * Whether this field is a blob
	 * @return bool
	 */
	public function IsBlob(){
		return $this->_blob;
	}
	/**
	 * The character set number for the field
	 * @return string
	 */
	public function CharsetNumber(){
		return $this->_charset;
	}
	/**
	 * The number of decimals used (for integer fields)
	 * @return int
	 */
	public function Decimals(){
		return $this->_decimals;
	}
	/**
	 * Whether this field is an enumeration
	 * @return bool
	 */
	public function IsEnum(){
		return $this->_enum;
	}
	/**
	 * Whether this field is a group
	 * @return bool
	 */
	public function IsGroup(){
		return $this->_group;
	}
	/**
	 * The width of the field, as specified in the table definition.
	 * @return int
	 */
	public function Length(){
		return $this->_length;
	}
	/**
	 * The maximum width of the field for the result set.
	 * @return int
	 */
	public function MaxLength(){
		return $this->_maxLength;
	}
	/**
	 * The current name of the field
	 * @return string
	 */
	public function Name(){
		return $this->_name;
	}
	/**
	 * Whether this field does not allows null values (NOT NULL in most databases, required in html and xml ...etc)
	 * @return bool
	 */
	public function IsNotNull(){
		return $this->_nn;
	}
	/**
	 * Whether this field is a numeric field
	 * @return bool
	 */
	public function IsNum(){
		return $this->_num;
	}
	/**
	 * Original field name if an alias was specified
	 * @return string
	 */
	public function OriginalName(){
		return $this->_oname;
	}
	/**
	 * Original table name if an alias was specified
	 * @return string
	 */
	public function OriginalTable(){
		return $this->_otable;
	}
	/**
	 * Whether this field is part of a  key
	 * @return bool
	 */
	public function IsPartOfKey(){
		return $this->_partKey;
	}
	/**
	 * Whether this field is a primary key
	 * @return bool
	 */
	public function IsPrimaryKey(){
		return $this->_pk;
	}
	/**
	 * Whether this field is a set
	 * @return bool
	 */
	public function IsASet(){
		return $this->_set;
	}
	/**
	 * The name of the table this field belongs to (if not calculated)
	 * @return string
	 */
	public function Table(){
		return $this->_table;
	}
	/**
	 * Whether this field is a timestamp
	 * @return bool
	 */
	public function IsTimestamp(){
		return $this->_timestamp;
	}
	/**
	 * The data type used for this field
	 * @return string
	 */
	public function Type(){
		return $this->_type;
	}
	/**
	 * Whether this field is a unique key
	 * @return bool
	 */
	public function IsUniqueKey(){
		return $this->_uk;
	}
	/**
	 * Whether this field is unique
	 * @return bool
	 */
	public function IsUnique(){
		return $this->_unique;
	}
	/**
	 * Whether this field is unique
	 * @return bool
	 */
	public function IsUnsigned(){
		return $this->_unsigned;
	}
	/**
	 * Whether this field is serofill
	 * @return bool
	 */
	public function IsZeroFill(){
		return $this->_zerofill;
	}
	###########################################################################
	# Static Factory Methods
	###########################################################################
	/**
	 * Factory method to create a FieldInfo object from the stdClass object returned by mysqli_fetch_fields() or
	 * mysqli_result::fetch_fields()
	 * @return FieldInfo
	 * The newly created FieldInfo object
	 */
	public static function FromMysqliFieldInfo(stdClass $fieldInfo){
		if(U::NA($fieldInfo)){throw new Exception("Can not Initialize object from an empty object or null", 1);}
		$f = $fieldInfo->flags;
		$type = FieldType::$Int;
		switch ($fieldInfo->type) {
			case MYSQLI_TYPE_BIT: $type = FieldType::$Bit; break;
			case MYSQLI_TYPE_BLOB: $type = FieldType::$Blob; break;
			case MYSQLI_TYPE_CHAR: $type = FieldType::$Char; break;
			case MYSQLI_TYPE_DATE: $type = FieldType::$Date; break;
			case MYSQLI_TYPE_DATETIME: $type = FieldType::$DateTime; break;
			case MYSQLI_TYPE_DECIMAL: $type = FieldType::$Decimal; break;
			case MYSQLI_TYPE_DOUBLE: $type = FieldType::$Double; break;
			case MYSQLI_TYPE_ENUM: $type = FieldType::$Enum; break;
			case MYSQLI_TYPE_FLOAT: $type = FieldType::$Float; break;
			case MYSQLI_TYPE_GEOMETRY: $type = FieldType::$Geometry; break;
			case MYSQLI_TYPE_INT24: $type = FieldType::$MediumInt; break;
			case MYSQLI_TYPE_INTERVAL: $type = FieldType::$Interval; break;
			case MYSQLI_TYPE_LONG: $type = FieldType::$Int; break;
			case MYSQLI_TYPE_LONGLONG: $type = FieldType::$BigInt; break;
			case MYSQLI_TYPE_LONG_BLOB: $type = FieldType::$LongBlob; break;
			case MYSQLI_TYPE_MEDIUM_BLOB: $type = FieldType::$MediumBlob; break;
			case MYSQLI_TYPE_NEWDATE: $type = FieldType::$Date; break;
			case MYSQLI_TYPE_NEWDECIMAL: $type = FieldType::$Decimal; break;
			case MYSQLI_TYPE_SET: $type = FieldType::$Set; break;
			case MYSQLI_TYPE_SHORT: $type = FieldType::$SmallInt; break;
			case MYSQLI_TYPE_STRING: $type = FieldType::$String; break;
			case MYSQLI_TYPE_TIME: $type = FieldType::$Time; break;
			case MYSQLI_TYPE_TIMESTAMP: $type = FieldType::$Timestamp; break;
			case MYSQLI_TYPE_TINY: $type = FieldType::$TinyInt; break;
			case MYSQLI_TYPE_TINY_BLOB: $type = FieldType::$TinyBlob; break;
			case MYSQLI_TYPE_VAR_STRING: $type = FieldType::$Varchar; break;
			case MYSQLI_TYPE_YEAR: $type = FieldType::$Year; break;
		}
		return new FieldInfo(
			$fieldInfo->name, $fieldInfo->orgname, $fieldInfo->table, $fieldInfo->orgtable,
			$fieldInfo->max_length, $fieldInfo->length, $fieldInfo->charsetnr, $type, $fieldInfo->decimals,
			U::HF($f, MYSQLI_NOT_NULL_FLAG), U::HF($f, MYSQLI_PRI_KEY_FLAG), U::HF($f, MYSQLI_UNIQUE_KEY_FLAG),
			U::HF($f, MYSQLI_BLOB_FLAG), U::HF($f, MYSQLI_UNSIGNED_FLAG), U::HF($f, MYSQLI_ZEROFILL_FLAG),
			U::HF($f, MYSQLI_BINARY_FLAG), U::HF($f, MYSQLI_ENUM_FLAG), U::HF($f, MYSQLI_AUTO_INCREMENT_FLAG),
			U::HF($f, MYSQLI_TIMESTAMP_FLAG), U::HF($f, MYSQLI_SET_FLAG), U::HF($f, MYSQLI_NUM_FLAG),
			U::HF($f, MYSQLI_PART_KEY_FLAG), U::HF($f, MYSQLI_GROUP_FLAG), U::HF($f, 65536)
		);
	}
}

?>