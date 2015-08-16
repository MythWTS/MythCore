<?php
final class HtmlSchemaOrgAttributes extends Enum{
	public static $ItemScope, $ItemProp, $ItemType;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$ItemScope = new HtmlSchemaOrgAttributes('ItemScope', 'itemscope');
		self::$ItemProp = new HtmlSchemaOrgAttributes('ItemProp', 'itemprop');
		self::$ItemType = new HtmlSchemaOrgAttributes('ItemType', 'itemtype');
	}
};
HtmlSchemaOrgAttributes::Initialize();
?>