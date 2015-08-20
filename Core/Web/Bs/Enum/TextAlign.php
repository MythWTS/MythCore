<?php
namespace Core\Web\Bs;
class TextAlign extends \Enum{
	public static $Left, $Right, $Center, $Justify, $NoWrap;
	protected function __construct($name, $value){parent::__construct($name, $value);}
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