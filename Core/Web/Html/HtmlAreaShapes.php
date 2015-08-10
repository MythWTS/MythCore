<?php
final class HtmlAreaShapes extends Enum{
	public static $Default, $Rect, $Circle, $Poly;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Circle = new HtmlAreaShapes('Circle', 'circle');
		self::$Default = new HtmlAreaShapes('Default', 'default');
		self::$Poly = new HtmlAreaShapes('Poly', 'circle');
		self::$Rect = new HtmlAreaShapes('Rect', 'rect');
	}
};
HtmlAreaShapes::Initialize();
?>