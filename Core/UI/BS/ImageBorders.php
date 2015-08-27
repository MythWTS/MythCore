<?php
namespace Core\UI\BS;
use Core\Enum;
/**
 * A list of image border styles supported by bootstrap formatting classes
 */
class ImageBorders extends Enum{
	public static $Rounded, $Circle, $Thumbnail;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Rounded = new ImageBorders('Rounded', 'active');
		self::$Circle = new ImageBorders('Circle', 'success');
		self::$Thumbnail = new ImageBorders('Thumbnail', 'danger');
	}
};
ImageBorders::Initialize();
?>