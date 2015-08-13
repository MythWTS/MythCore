<?php
final class HtmlDocTypes extends Enum{
	public static 
		$Html5, $Html4_01Strict, $Html4_01Transational, $Html4_01Frameset, 
		$XHtml1Strict, $XHtml1Transitional, $XHtml1Frameset, $XHtml1_1;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		//Display Attributes
		self::$Html5 = new HtmlDocTypes('HTML 5', 'html');
		self::$Html4_01Strict = new HtmlDocTypes('HTML 4.01 Strict', 'HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"');
		self::$Html4_01Transational = new HtmlDocTypes('HTML 4.01 Transitional', 'HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"');
		self::$Html4_01Frameset = new HtmlDocTypes('HTML 4.01 Frameset', 'HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"');
		self::$XHtml1Strict = new HtmlDocTypes('XHTML 1.0 Strict', 'html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"');
		self::$XHtml1Transitional = new HtmlDocTypes('XHTML 1.0 Transitional', 'html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"');
		self::$XHtml1Frameset = new HtmlDocTypes('XHTML 1.0 Frameset', 'html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd"');
		self::$XHtml1_1 = new HtmlDocTypes('XHTML 1.1', 'html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"');
	}
};
HtmlDocTypes::Initialize();
?>