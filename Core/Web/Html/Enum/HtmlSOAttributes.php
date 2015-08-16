<?php
final class HtmlSOAttributes extends Enum{
	public static $ItemScope, $ItemProp, $ItemType;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$ItemScope = new HtmlSOAttributes('ItemScope', 'itemscope');
		self::$ItemProp = new HtmlSOAttributes('ItemProp', 'itemprop');
		self::$ItemType = new HtmlSOAttributes('ItemType', 'itemtype');
	}
};
HtmlSOAttributes::Initialize();
?>