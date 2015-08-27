<?php
namespace Core\UI\BS;
use Core\Enum;
/**
 * A list of the text aligns supported by bootstrap formatting classes
 */
class TextAlign extends Enum{
	public static $Left, $Right, $Center, $Justify, $NoWrap;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Left = new TextAlign('Left', 'text-left');
		self::$Right = new TextAlign('Right', 'text-right');
		self::$Center = new TextAlign('Center', 'text-center');
		self::$Justify = new TextAlign('Justify', 'text-justify');
		self::$NoWrap = new TextAlign('NoWrap', 'text-nowrap');
	}
};
TextAlign::Initialize();
?>