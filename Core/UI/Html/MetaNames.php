<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported values for the "name" attribute of  "meta" html element
 */
final class MetaNames extends Enum{
	//Common Meta Name Attribute Values
	public static $ApplicationName, $Author, $Description, $Generator, $Keywords, $Viewport;
	//Less Common
	public static $Robots, $GoogleBot, $Slurp, $BingBot;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$ApplicationName = new MetaNames('Application-Name', 'application-name');
		self::$Author = new MetaNames('Author', 'author');
		self::$Description = new MetaNames('Description', 'description');
		self::$Generator = new MetaNames('Generator', 'generator');
		self::$Keywords = new MetaNames('Keywords', 'keywords');
		self::$Viewport = new MetaNames('Viewport', 'viewport');		
		self::$Robots = new MetaNames('Robots', 'robots');
		self::$GoogleBot = new MetaNames('GoogleBot', 'googlebot');
		self::$Slurp = new MetaNames('Slurp', 'Slurp');
		self::$BingBot = new MetaNames('BingBot', 'bingbot');
	}
};
MetaNames::Initialize();
?>