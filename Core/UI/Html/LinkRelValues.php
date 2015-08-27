<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported values for the "rel" attribute of  "link" html element
 */
final class LinkRelValues extends Enum{
	public static $ShortcutIcon,$AppleTouchIcon,$Stylesheet,$Alternate,$Bookmark,$Canonical,$Chapter,$Contents,$Copyright,
		$DnsPrefetch,$Edit,$EditUri,$Glossary,$Help,$Index,$Next,$Prev,$Search,$Section,$Start,$Subsection,$Publisher;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$ShortcutIcon = new LinkRelValues('ShortcutIcon', 'shortcut icon');
		self::$AppleTouchIcon = new LinkRelValues('AppleTouchIcon', 'apple-touch-icon');
		self::$Stylesheet = new LinkRelValues('Stylesheet', 'stylesheet');
		self::$Alternate = new LinkRelValues('Alternate', 'alternate');
		self::$Bookmark = new LinkRelValues('Bookmark', 'bookmark');
		self::$Canonical = new LinkRelValues('Canonical', 'canonical');
		self::$Chapter = new LinkRelValues('Chapter', 'chapter');
		self::$Contents = new LinkRelValues('Contents', 'contents');
		self::$Copyright = new LinkRelValues('Copyright', 'copyright');
		self::$DnsPrefetch = new LinkRelValues('DnsPrefetch', 'dns-prefetch');
		self::$Edit = new LinkRelValues('Edit', 'edit');
		self::$EditUri = new LinkRelValues('EditUri', 'EditURI');
		self::$Glossary = new LinkRelValues('Glossary', 'glossary');
		self::$Help = new LinkRelValues('Help', 'help');
		self::$Index = new LinkRelValues('Index', 'index');
		self::$Next = new LinkRelValues('Next', 'next');
		self::$Prev = new LinkRelValues('Prev', 'prev');
		self::$Search = new LinkRelValues('Search', 'search');
		self::$Section = new LinkRelValues('Section', 'section');
		self::$Start = new LinkRelValues('Start', 'start');
		self::$Subsection = new LinkRelValues('Subsection', 'subsection');
		self::$Publisher = new LinkRelValues('Publisher', 'publisher');
	}
};
LinkRelValues::Initialize();
?>