<?php
namespace Core;
/**
 * Enumeration used with Html & Http Encoding methods to indicate how to handle quotes
 * @property string Name The name asscoiated with the enumeration member
 * @property integer Value The value associated with the enumeration member
 * @see String::HtmlSpecialCharacters()
 */
final class QuoteEnding extends Enum{
	/**
	 * Will convert double-quotes and leave single-quotes alone.
	 * @var \Core\QuoteEnding
	 */
	public static $Double;
	/**
	 * Will convert both double and single quotes.
	 * @var \Core\QuoteEnding
	 */
	public static $Both;
	/**
	 * Will leave both double and single quotes unconverted.
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
		self::$Both = new QuoteEnding("Both", ENT_QUOTES);
		self::$Double = new QuoteEnding("Double", ENT_COMPAT);
		self::$None = new QuoteEnding("None", ENT_NOQUOTES);
	}
}
QuoteEnding::Initialize();