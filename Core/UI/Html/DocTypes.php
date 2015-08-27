<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * The supported DOCTYPE declarations
 * This enumeration's values are what is written after the DOCTYPE, including uris and other attributes. It is used
 * by the DocTypeNode class
 */
final class DocTypes extends Enum{
	public static 
		$Html5, $Html4_01Strict, $Html4_01Transational, $Html4_01Frameset, 
		$XHtml1Strict, $XHtml1Transitional, $XHtml1Frameset, $XHtml1_1;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		//Display Attributes
		self::$Html5 = new DocTypes('HTML 5', 'html');
		self::$Html4_01Strict = new DocTypes('HTML 4.01 Strict', 'HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"');
		self::$Html4_01Transational = new DocTypes('HTML 4.01 Transitional', 'HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"');
		self::$Html4_01Frameset = new DocTypes('HTML 4.01 Frameset', 'HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"');
		self::$XHtml1Strict = new DocTypes('XHTML 1.0 Strict', 'html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"');
		self::$XHtml1Transitional = new DocTypes('XHTML 1.0 Transitional', 'html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"');
		self::$XHtml1Frameset = new DocTypes('XHTML 1.0 Frameset', 'html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd"');
		self::$XHtml1_1 = new DocTypes('XHTML 1.1', 'html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"');
	}
};
DocTypes::Initialize();
?>