<?php
final class HtmlMetaHttpEquivValues extends Enum{
	public static $ContentType, $DefaultStyle, $Refresh;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$ContentType = new HtmlMetaHttpEquivValues('Content-Type', 'content-type');
		self::$DefaultStyle = new HtmlMetaHttpEquivValues('Default-Style', 'default-style');
		self::$Refresh = new HtmlMetaHttpEquivValues('Refresh', 'refresh');
	}
};
HtmlMetaHttpEquivValues::Initialize();
?>