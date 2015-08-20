<?php
namespace Core\Web\Bs;
class Devices extends \Enum{
	public static $XS, $SM, $MD, $LG, $XSmall, $Small, $Medium, $Large, $Mobile, $Tablet, $Laptop, $Desktop;
	protected function __construct($name, $value){parent::__construct($name, $value);}
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