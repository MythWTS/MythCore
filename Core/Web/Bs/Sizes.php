<?php
namespace \Core\Web\Bs;
class Sizes extends \Enum{
	public static $XS, $SM, $MD, $LG, $XSmall, $Small, $Medium, $Large;
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
	}
};
Sizes::Initialize();
?>