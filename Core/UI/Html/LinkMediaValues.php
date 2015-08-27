<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported values for the "media" attribute of a "link" html element
 */
final class LinkMediaValues extends Enum{
	public static $Screen,$Teletype,$Tv,$Projection,$Handheld,$Print,$Braille,$Aural,$All;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Screen = new LinkMediaValues('Screen', 'screen');
		self::$Teletype = new LinkMediaValues('Teletype', 'tty');
		self::$Tv = new LinkMediaValues('Tv', 'tv');
		self::$Projection = new LinkMediaValues('Projection', 'projection');
		self::$Handheld = new LinkMediaValues('Handheld', 'handheld');
		self::$Print = new LinkMediaValues('Print', 'print');
		self::$Braille = new LinkMediaValues('Braille', 'braille');
		self::$Aural = new LinkMediaValues('Aural', 'aural');
		self::$All = new LinkMediaValues('All', 'all');
	}
};
LinkMediaValues::Initialize();
?>