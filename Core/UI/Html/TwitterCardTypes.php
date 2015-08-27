<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * List of supported Twitter card types
 */
final class TwitterCardTypes extends Enum{
	public static $Summary, $SummaryLargeImage, $Photo, $Gallery, $App, $Player, $Product;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Summary = new TwitterCardTypes('Summary Card', 'summary');
		self::$SummaryLargeImage = new TwitterCardTypes('Summary Card with Large Image', 'summary_large_image');
		self::$Photo = new TwitterCardTypes('Photo Card', 'photo');
		self::$Gallery = new TwitterCardTypes('Gallery Card', 'gallery');
		self::$App = new TwitterCardTypes('App Card', 'app');
		self::$Player = new TwitterCardTypes('Player Card', 'player');
		self::$Product = new TwitterCardTypes('Product Card', 'product');
	}
};
TwitterCardTypes::Initialize();
?>