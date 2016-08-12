<?php
namespace Core;
/**
 * Enumeration to be used with Html and Http encoding methods.
 * @property string Name The name asscoiated with the enumeration member
 * @property integer Value The value associated with the enumeration member
 * @see String::HtmlSpecialCharacters()
 */
final class EncodingCodeType extends Enum{
	/**
	 * Handle code as HTML 4.01.
	 * @var \Core\EncodingCodeType
	 */
	public static $Html401;
	/**
	 * Handle code as XML 1.
	 * @var \Core\EncodingCodeType
	 */
	public static $Xml1;
	/**
	 * 	Handle code as XHTML.
	 * @var \Core\EncodingCodeType
	 */
	public static $Xhtml;
	/**
	 * Handle code as HTML 5.
	 * @var \Core\EncodingCodeType
	 */
	public static $Html5;
	/**
	 * Protected constructor used to initialize static members of the enumeration
	 * @param string $name The name of the enumeration member
	 * @param mixed $value The value attached to the enumeration member
	 */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/**
	 * Static constructor/Initializer
	 */
	public static function Initialize(){
		self::$Html401 = new EncodingCodeType("$Html401", ENT_HTML401);
		self::$Xml1 = new EncodingCodeType("$Xml1", ENT_XML1);
		self::$Xhtml = new EncodingCodeType("$Xhtml", ENT_XHTML);
		self::$Html5 = new EncodingCodeType("$Html5", ENT_HTML5);
	}
}
EncodingCodeType::Initialize();