<?php
namespace Core;
/**
 * Enumeration to be used with string padding methods to decide which side is the padding to go
 * @property string Name The name asscoiated with the enumeration member
 * @property integer Value The value associated with the enumeration member
 */
final class PaddingSide extends Enum{
	/**
	 * Padding added to the right side of the string
	 * @var Core\PaddingSide
	 */
	public static $Right;
	/**
	 * Padding added to the left side of the string
	 * @var Core\PaddingSide
	 */
	public static $Left;
	/**
	 * Padding added to both sides of the string
	 * @var Core\PaddingSide
	 */
	public static $Both;
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
		self::$Right = new PaddingSide("Right", 0);
		self::$Left = new PaddingSide("Left", 1);
		self::$Both = new PaddingSide("Both", 2);
	}
}
PaddingSide::Initialize();