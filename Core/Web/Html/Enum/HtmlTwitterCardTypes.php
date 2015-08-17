<?php
final class HtmlTwitterCardTypes extends Enum{
	public static $Summary, $SummaryLargeImage, $Photo, $Gallery, $App, $Player, $Product;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Summary = new HtmlTwitterCardTypes('Summary Card', 'summary');
		self::$SummaryLargeImage = new HtmlTwitterCardTypes('Summary Card with Large Image', 'summary_large_image');
		self::$Photo = new HtmlTwitterCardTypes('Photo Card', 'photo');
		self::$Gallery = new HtmlTwitterCardTypes('Gallery Card', 'gallery');
		self::$App = new HtmlTwitterCardTypes('App Card', 'app');
		self::$Player = new HtmlTwitterCardTypes('Player Card', 'player');
		self::$Product = new HtmlTwitterCardTypes('Product Card', 'product');
	}
};
HtmlTwitterCardTypes::Initialize();
?>