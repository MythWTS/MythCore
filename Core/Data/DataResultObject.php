<?php
namespace Core\Data;
use Core\Object;
/**
 * A class to be used by data retrieval features to store a data record. For example, the ReadObject of a QueryResult 
 * object. Basically, this is the default type to be returned by methods that fetch a data record from a data store
 * and want to return the data record as an object instead of as an associative or numerative array.
 * The constructor accepts an associative array and uses the keys as property names and the values as property values.
 * This class is just a blue print and more features might be added in future, more mature versions of MythCore
 */
class DataResultObject extends Object{
	private static $invalids = array(' ', '-', '"', "'", "\\", "/", "\t", "#", "+", "*", "%", '$', '@', 
		'!', '^', '&', '.', '(', ')', '[', ']', '{', '}', ';', ':', ',', '<', '>', '`', '~', '?');
	public function __sonstruct(array $dataRecord){
		///TODO: Improve the algorithm for extracting a valid property name from a field name
		foreach($dataRecord as $name=>$value){
			for($i=0; $i<strlen($name); $i++){
				$n = '';
				if(!in_array($name[$i], self::$invalids)){$n .= $name[$i];}
			}
			$this->$n = $value;
		}
	}
};
?>