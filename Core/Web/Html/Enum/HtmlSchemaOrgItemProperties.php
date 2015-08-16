<?php
final class HtmlSchemaOrgItemProperties extends Enum{
	public static $Name, $Description, $Image;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Name = new HtmlSchemaOrgItemProperties('Name', 'name');
		self::$Description = new HtmlSchemaOrgItemProperties('Description', 'description');
		self::$Image = new HtmlSchemaOrgItemProperties('Image', 'image');
	}
};
HtmlSchemaOrgItemProperties::Initialize();
?>