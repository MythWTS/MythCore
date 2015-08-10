<?php
final class HtmlTargetCommonValues extends Enum{
	public static $Self, $Blank, $Parent, $New;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Self = new HtmlTargetCommonValues('Self', '_self');
		self::$Blank = new HtmlTargetCommonValues('Blank', '_blank');
		self::$Parent = new HtmlTargetCommonValues('Parent', '_parent');
		self::$New = new HtmlTargetCommonValues('New', '_new');
	}
};
HtmlTargetCommonValues::Initialize();
?>