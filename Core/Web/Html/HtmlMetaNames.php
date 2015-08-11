<?php
final class HtmlMetaNames extends Enum{
	//Common Meta Name Attribute Values
	public static $ApplicationName, $Author, $Description, $Generator, $Keywords;
	//Less Common
	public static $Robots, $GoogleBot, $Slurp, $BingBot;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$ApplicationName = new HtmlMetaNames('Application-Name', 'application-name');
		self::$Author = new HtmlMetaNames('Author', 'author');
		self::$Description = new HtmlMetaNames('Description', 'description');
		self::$Generator = new HtmlMetaNames('Generator', 'generator');
		self::$Keywords = new HtmlMetaNames('Keywords', 'keywords');
		
		self::$Robots = new HtmlMetaNames('Robots', 'robots');
		self::$GoogleBot = new HtmlMetaNames('GoogleBot', 'googlebot');
		self::$Slurp = new HtmlMetaNames('Slurp', 'Slurp');
		self::$BingBot = new HtmlMetaNames('BingBot', 'bingbot');
	}
};
HtmlMetaNames::Initialize();
?>