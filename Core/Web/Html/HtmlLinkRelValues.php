<?php
final class HtmlLinkRelValues extends Enum{
	public static $ShortcutIcon,$AppleTouchIcon,$Stylesheet,$Alternate,$Bookmark,$Canonical,$Chapter,$Contents,$Copyright,
		$DnsPrefetch,$Edit,$EditUri,$Glossary,$Help,$Index,$Next,$Prev,$Search,$Section,$Start,$Subsection,$Publisher;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$ShortcutIcon = new Html5Tags('ShortcutIcon', 'shortcut icon');
		self::$AppleTouchIcon = new Html5Tags('AppleTouchIcon', 'apple-touch-icon');
		self::$Stylesheet = new Html5Tags('Stylesheet', 'stylesheet');
		self::$Alternate = new Html5Tags('Alternate', 'alternate');
		self::$Bookmark = new Html5Tags('Bookmark', 'bookmark');
		self::$Canonical = new Html5Tags('Canonical', 'canonical');
		self::$Chapter = new Html5Tags('Chapter', 'chapter');
		self::$Contents = new Html5Tags('Contents', 'contents');
		self::$Copyright = new Html5Tags('Copyright', 'copyright');
		self::$DnsPrefetch = new Html5Tags('DnsPrefetch', 'dns-prefetch');
		self::$Edit = new Html5Tags('Edit', 'edit');
		self::$EditUri = new Html5Tags('EditUri', 'EditURI');
		self::$Glossary = new Html5Tags('Glossary', 'glossary');
		self::$Help = new Html5Tags('Help', 'help');
		self::$Index = new Html5Tags('Index', 'index');
		self::$Next = new Html5Tags('Next', 'next');
		self::$Prev = new Html5Tags('Prev', 'prev');
		self::$Search = new Html5Tags('Search', 'search');
		self::$Section = new Html5Tags('Section', 'section');
		self::$Start = new Html5Tags('Start', 'start');
		self::$Subsection = new Html5Tags('Subsection', 'subsection');
		self::$Publisher = new Html5Tags('Publisher', 'publisher');
	}
};
?>