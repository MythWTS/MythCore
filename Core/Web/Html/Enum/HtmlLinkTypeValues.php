<?php
final class HtmlLinkTypeValues extends Enum{
	public static $Css,$Js,$Html,$AppXWiki,$AppAtomXml,$AppOpenSearchDesc,$AppRsdXml,$AppRssXml,$ALL;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Css = new HtmlLinkTypeValues('Css', 'text/css');
		self::$Js = new HtmlLinkTypeValues('Js', 'text/javascript');
		self::$Html = new HtmlLinkTypeValues('Html', 'text/html');
		self::$AppXWiki = new HtmlLinkTypeValues('AppXWiki', 'application/x-wiki');
		self::$AppAtomXml = new HtmlLinkTypeValues('AppAtomXml', 'application/atom+xml');
		self::$AppOpenSearchDesc = new HtmlLinkTypeValues('AppOpenSearchDesc', 'application/opensearchdescription+xml');
		self::$AppRsdXml = new HtmlLinkTypeValues('AppRsdXml', 'application/rsd+xml');
		self::$AppRssXml = new HtmlLinkTypeValues('AppRssXml', 'application/rss+xml');
		self::$ALL = new HtmlLinkTypeValues('ALL', '*');
	}
};
HtmlLinkTypeValues::Initialize();
?>