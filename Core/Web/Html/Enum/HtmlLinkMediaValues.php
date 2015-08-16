<?php
final class HtmlLinkMediaValues extends Enum{
	public static $Screen,$Teletype,$Tv,$Projection,$Handheld,$Print,$Braille,$Aural,$All;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Screen = new HtmlLinkMediaValues('Screen', 'screen');
		self::$Teletype = new HtmlLinkMediaValues('Teletype', 'tty');
		self::$Tv = new HtmlLinkMediaValues('Tv', 'tv');
		self::$Projection = new HtmlLinkMediaValues('Projection', 'projection');
		self::$Handheld = new HtmlLinkMediaValues('Handheld', 'handheld');
		self::$Print = new HtmlLinkMediaValues('Print', 'print');
		self::$Braille = new HtmlLinkMediaValues('Braille', 'braille');
		self::$Aural = new HtmlLinkMediaValues('Aural', 'aural');
		self::$All = new HtmlLinkMediaValues('All', 'all');
	}
};
HtmlLinkMediaValues::Initialize();
?>