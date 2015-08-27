<?php
namespace Core\UI\BS;
use Core\Enum;
/**
 * A list of device sizes/breakpoints. These are aliases for the size prefix in botstrap classes.
 * -XSmall, Mobile, XS -> xs (extra small)
 * -Small, Tablet, SM -> sm (small)
 * -Medium, Laptop, MD -> md (medium)
 * -Large, Desktop, LG -> lg (large)
 */
class Devices extends Enum{
	public static $XS, $SM, $MD, $LG, $XSmall, $Small, $Medium, $Large, $Mobile, $Tablet, $Laptop, $Desktop;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$XS = new Devices('XS', 'xs');
		self::$SM = new Devices('SM', 'sm');
		self::$MD = new Devices('MD', 'md');
		self::$LG = new Devices('LG', 'lg');
		self::$XSmall = new Devices('X-Small', 'xs');
		self::$Small = new Devices('Small', 'sm');
		self::$Medium = new Devices('Medium', 'md');
		self::$Large = new Devices('Large', 'lg');
		self::$Mobile = new Devices('Mobile', 'xs');
		self::$Tablet = new Devices('Tablet', 'sm');
		self::$Laptop = new Devices('Laptop', 'md');
		self::$Desktop = new Devices('Desktop', 'lg');
	}
};
Devices::Initialize();
?>