<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Area shapes enumeration for use with area html elements
 */
final class AreaShapes extends Enum{
	public static $Default, $Rect, $Circle, $Poly;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Circle = new AreaShapes('Circle', 'circle');
		self::$Default = new AreaShapes('Default', 'default');
		self::$Poly = new AreaShapes('Poly', 'circle');
		self::$Rect = new AreaShapes('Rect', 'rect');
	}
};
AreaShapes::Initialize();
?>