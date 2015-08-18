<?php
namespace Core\Web\Bs;
class Devices extends \Enum{
	public static $XS, $SM, $MD, $LG, $XSmall, $Small, $Medium, $Large, $Mobile, $Tablet, $Laptop, $Desktop;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$XS = new Sizes('XS', 'xs');
		self::$SM = new Sizes('SM', 'sm');
		self::$MD = new Sizes('MD', 'md');
		self::$LG = new Sizes('LG', 'lg');
		self::$XSmall = new Sizes('X-Small', 'xs');
		self::$Small = new Sizes('Small', 'sm');
		self::$Medium = new Sizes('Medium', 'md');
		self::$Large = new Sizes('Large', 'lg');
		self::$Mobile = new Sizes('Mobile', 'xs');
		self::$Tablet = new Sizes('Tablet', 'sm');
		self::$Laptop = new Sizes('Laptop', 'md');
		self::$Desktop = new Sizes('Desktop', 'lg');
	}
};
Sizes::Initialize();
?>