<?php
namespace Core;
/**
 * Enumeration used to define the sorting direction
 */
class SortDirection extends Enum{
	/**
	 * Denotes the sorting will be in ascending order (smaller to larger values)
	 * @var SortDirection
	 */
	public static $ASC;
	/**
	 * Denotes the sorting will be in descending order (larger to smaller values)
	 * @var SortDirection
	 */
	public static $DESC;
	/**
	 * Protected constructor used to initialize static members of the enumeration
	 * @param string $name The name of the enumeration member
	 * @param mixed $value The value attached to the enumeration member
	 */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/**
	 * Static constructor/Initializer
	 */
	public static function Initialize(){
		self::$ASC = new SortDirection('Ascending', 'ASC');
		self::$ASC = new SortDirection('Descending', 'DESC');
	}
}
SortDirection::Initialize();