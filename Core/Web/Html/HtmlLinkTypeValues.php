<?php
final class HtmlLinkTypeValues extends Enum{
	public static $Css,$Js,$Html,$AppXWiki,$AppAtomXml,$AppOpenSearchDesc,$AppRsdXml,$AppRssXml,$ALL;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Css = new Html5Tags('Css', 'text/css');
		self::$Js = new Html5Tags('Js', 'text/javascript');
		self::$Html = new Html5Tags('Html', 'text/html');
		self::$AppXWiki = new Html5Tags('AppXWiki', 'application/x-wiki');
		self::$AppAtomXml = new Html5Tags('AppAtomXml', 'application/atom+xml');
		self::$AppOpenSearchDesc = new Html5Tags('AppOpenSearchDesc', 'application/opensearchdescription+xml');
		self::$AppRsdXml = new Html5Tags('AppRsdXml', 'application/rsd+xml');
		self::$AppRssXml = new Html5Tags('AppRssXml', 'application/rss+xml');
		self::$ALL = new Html5Tags('ALL', '*');
	}
};
HtmlLinkTypeValues::Initialize();
?>