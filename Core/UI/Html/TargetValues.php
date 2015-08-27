<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * List of most commonly used values for the "target" attribute of "link", "base", "a" html elements
 */
final class TargetValues extends Enum{
	public static $Self, $Blank, $Parent, $New;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Self = new TargetValues('Self', '_self');
		self::$Blank = new TargetValues('Blank', '_blank');
		self::$Parent = new TargetValues('Parent', '_parent');
		self::$New = new TargetValues('New', '_new');
	}
};
TargetValues::Initialize();
?>