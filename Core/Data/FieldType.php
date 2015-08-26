<?php
namespace Core\Data;
use Core\Enum;
/**
 * Specifies the type of a data field. Some of the members represent types supported by database systems, some represent
 * types supported by Xml and some might represent generic data types. The values are assigned to work seamlessly with 
 * MySql. Other than that, it is the responsibility of the implementor of any data provider to interpret the members
 * as appropriate for their data store types.
 * Values in this enumeration are mainly used in the FieldInfo class. The Type property of a field info object is of
 * type FieldType.
 */
final class FieldType extends Enum{
	public static
		/** The data field was declared as a bit */
		$Bit,
		/** The data field was declared as a blob */
		$Blob,
		/** The data field was declared as a char */
		$Char,
		/** The data field was declared as a date */
		$Date,
		/** The data field was declared as a datetime */
		$DateTime,
		/** The data field was declared as a decimal */
		$Decimal,
		/** The data field was declared as a double */
		$Double,
		/** The data field was declared as an enum */
		$Enum,
		/** The data field was declared as a float */
		$Float,
		/** The data field was declared as a geometry */
		$Geometry,
		/** The data field was declared as a medium int */
		$MediumInt,
		/** The data field was declared as an interval */
		$Interval,
		/** The data field was declared as an integer */
		$Int,
		/** The data field was declared as a big integer */
		$BigInt,
		/** The data field was declared as a long blob */
		$LongBlob,
		/** The data field was declared as a medium blob */
		$MediumBlob,
		/** The data field was declared as a set */
		$Set,
		/** The data field was declared as a small integer */
		$SmallInt,
		/** The data field was declared as a string */
		$String,
		/** The data field was declared as time */
		$Time,
		/** The data field was declared as a timestamp */
		$Timestamp,
		/** The data field was declared as a tiny integer */
		$TinyInt,
		/** The data field was declared as a tiny blob */
		$TinyBlob,
		/** The data field was declared as a varchar */
		$Varchar,
		/** The data field was declared as a year */
		$Year;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		$Bit = new FieldType('Bit', 'bit');
		$Blob = new FieldType('Blob', 'blob');
		$Char = new FieldType('Char', 'char');
		$Date = new FieldType('Date', 'date');
		$DateTime = new FieldType('DateTime', 'datetime');
		$Decimal = new FieldType('Decimal', 'decimal');
		$Double = new FieldType('Double', 'double');
		$Enum = new FieldType('Enum', 'enum');
		$Float = new FieldType('Float', 'float');
		$Geometry = new FieldType('Geometry', 'geometry');
		$MediumInt = new FieldType('MediumInt', 'mediumInt');
		$Interval = new FieldType('Interval', 'interval');
		$Int = new FieldType('Int', 'int');
		$BigInt = new FieldType('BigInt', 'bigint');
		$LongBlob = new FieldType('LongBlob', 'longblob');
		$MediumBlob = new FieldType('MediumBlob', 'mediumblob');
		$Set = new FieldType('Set', 'set');
		$SmallInt = new FieldType('SmallInt', 'smallint');
		$String = new FieldType('String', 'string');
		$Time = new FieldType('Time', 'time');
		$Timestamp = new FieldType('Timestamp', 'timestamp');
		$TinyInt = new FieldType('TinyInt', 'tinyint');
		$TinyBlob = new FieldType('TinyBlob', 'tinyblob');
		$Varchar = new FieldType('Varchar', 'varchar');
		$Year = new FieldType('Year', 'year');
	}
};
FieldType::Initialize();
?>