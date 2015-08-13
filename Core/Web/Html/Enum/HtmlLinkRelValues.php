<?php
final class HtmlLinkRelValues extends Enum{
	public static $ShortcutIcon,$AppleTouchIcon,$Stylesheet,$Alternate,$Bookmark,$Canonical,$Chapter,$Contents,$Copyright,
		$DnsPrefetch,$Edit,$EditUri,$Glossary,$Help,$Index,$Next,$Prev,$Search,$Section,$Start,$Subsection,$Publisher;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$ShortcutIcon = new HtmlLinkRelValues('ShortcutIcon', 'shortcut icon');
		self::$AppleTouchIcon = new HtmlLinkRelValues('AppleTouchIcon', 'apple-touch-icon');
		self::$Stylesheet = new HtmlLinkRelValues('Stylesheet', 'stylesheet');
		self::$Alternate = new HtmlLinkRelValues('Alternate', 'alternate');
		self::$Bookmark = new HtmlLinkRelValues('Bookmark', 'bookmark');
		self::$Canonical = new HtmlLinkRelValues('Canonical', 'canonical');
		self::$Chapter = new HtmlLinkRelValues('Chapter', 'chapter');
		self::$Contents = new HtmlLinkRelValues('Contents', 'contents');
		self::$Copyright = new HtmlLinkRelValues('Copyright', 'copyright');
		self::$DnsPrefetch = new HtmlLinkRelValues('DnsPrefetch', 'dns-prefetch');
		self::$Edit = new HtmlLinkRelValues('Edit', 'edit');
		self::$EditUri = new HtmlLinkRelValues('EditUri', 'EditURI');
		self::$Glossary = new HtmlLinkRelValues('Glossary', 'glossary');
		self::$Help = new HtmlLinkRelValues('Help', 'help');
		self::$Index = new HtmlLinkRelValues('Index', 'index');
		self::$Next = new HtmlLinkRelValues('Next', 'next');
		self::$Prev = new HtmlLinkRelValues('Prev', 'prev');
		self::$Search = new HtmlLinkRelValues('Search', 'search');
		self::$Section = new HtmlLinkRelValues('Section', 'section');
		self::$Start = new HtmlLinkRelValues('Start', 'start');
		self::$Subsection = new HtmlLinkRelValues('Subsection', 'subsection');
		self::$Publisher = new HtmlLinkRelValues('Publisher', 'publisher');
	}
};
HtmlLinkRelValues::Initialize();
?>