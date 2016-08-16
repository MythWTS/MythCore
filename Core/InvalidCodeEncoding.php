<?php
namespace Core;
/**
 * Enumeration to be used with Html & Http Encoding methods to indicate how to handle invalid code units in the string to be encoded
 * @see String::HtmlSpecialCharacters()
 * @property string $Name The name asscoiated with the enumeration member
 * @property mixed $Value The value associated with the enumeration member
 */
final class InvalidCodeEncoding extends Enum{
	/**
	 * Silently discard invalid code unit sequences instead of returning an empty string. Using this flag is discouraged as it » may have security implications.
	 * @var \Core\QuoteEnding
	 */
	public static $Ignore;
	/**
	 * Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &#xFFFD; (otherwise) instead of returning an empty string.
	 * @var \Core\QuoteEnding
	 */
	public static $Substitute;
	/**
	 * Replace invalid code points for the given document type with a Unicode Replacement Character U+FFFD (UTF-8) or &#xFFFD; (otherwise) 
	 * instead of leaving them as is. This may be useful, for instance, to ensure the well-formedness of XML documents with embedded external content.
	 * @var \Core\QuoteEnding
	 */
	public static $Disallowed;
	/**
	 * Equivalent to not providing a value. In this case an empty string will be returned if an invalid code unit is detected
	 * @var \Core\QuoteEnding
	 */
	public static $None;
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
		self::$Ignore = new InvalidCodeEncoding("Ignore", ENT_IGNORE);
		self::$Substitute = new InvalidCodeEncoding("Substitute", ENT_SUBSTITUTE);
		self::$Disallowed = new InvalidCodeEncoding("Disallowed", ENT_DISALLOWED);
		self::$None = new InvalidCodeEncoding("None", 0);
	}
}
InvalidCodeEncoding::Initialize();