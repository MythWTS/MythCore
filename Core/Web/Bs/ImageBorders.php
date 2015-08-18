<?php
namespace Core\Web\Bs;
class ImageBorders extends \Enum{
	public static $Rounded, $Circle, $Thumbnail;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Rounded = new ImageBorders('Rounded', 'active');
		self::$Circle = new ImageBorders('Circle', 'success');
		self::$Thumbnail = new ImageBorders('Thumbnail', 'danger');
	}
};
ImageBorders::Initialize();
?>