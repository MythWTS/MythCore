<?php
final class HtmlSOItemProperties extends Enum{
	public static $Name, $Description, $Image;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Name = new HtmlSOItemProperties('Name', 'name');
		self::$Description = new HtmlSOItemProperties('Description', 'description');
		self::$Image = new HtmlSOItemProperties('Image', 'image');
	}
};
HtmlSOItemProperties::Initialize();
?>