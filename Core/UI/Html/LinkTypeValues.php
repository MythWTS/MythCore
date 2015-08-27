<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported values for the "type" attribute of  "link" html element
 */
final class LinkTypeValues extends Enum{
	public static $Css,$Js,$Html,$AppXWiki,$AppAtomXml,$AppOpenSearchDesc,$AppRsdXml,$AppRssXml,$ALL;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Css = new LinkTypeValues('Css', 'text/css');
		self::$Js = new LinkTypeValues('Js', 'text/javascript');
		self::$Html = new LinkTypeValues('Html', 'text/html');
		self::$AppXWiki = new LinkTypeValues('AppXWiki', 'application/x-wiki');
		self::$AppAtomXml = new LinkTypeValues('AppAtomXml', 'application/atom+xml');
		self::$AppOpenSearchDesc = new LinkTypeValues('AppOpenSearchDesc', 'application/opensearchdescription+xml');
		self::$AppRsdXml = new LinkTypeValues('AppRsdXml', 'application/rsd+xml');
		self::$AppRssXml = new LinkTypeValues('AppRssXml', 'application/rss+xml');
		self::$ALL = new LinkTypeValues('ALL', '*');
	}
};
LinkTypeValues::Initialize();
?>