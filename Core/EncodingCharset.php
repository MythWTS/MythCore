<?php
namespace Core;
/**
 * Enumeration to be used with Html & Http encoding methods to indicate the character set to use
 * @see String::HtmlSpecialCharacters()
 * @property string Name The name asscoiated with the enumeration member
 * @property mixed Value The value associated with the enumeration member
 */
final class EncodingCharset extends Enum{
	public static $ISO_8859_1;
	public static $ISO_8859_5;
	public static $ISO_8859_15;
	public static $UTF8;
	public static $CP866;
	public static $CP1251;
	public static $CP1252;
	public static $KOI8_R;
	public static $BIG5;
	public static $GB2312;
	public static $BIG5_HKSCS;
	public static $Shift_JIS;
	public static $EUC_JP;
	public static $MacRoman;
	public static $Detect;
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
		self::$ISO_8859_1 = new EncodingCharset("ISO_8859_1", "ISO-8859-1");
		self::$ISO_8859_5 = new EncodingCharset("ISO_8859_5", "ISO-8859-5");
		self::$ISO_8859_15 = new EncodingCharset("ISO_8859_15", "ISO-8859-15");
		self::$UTF8 = new EncodingCharset("UTF8", "UTF-8");
		self::$CP866 = new EncodingCharset("CP866", "cp866");
		self::$CP1251 = new EncodingCharset("CP1251", "cp1251");
		self::$CP1252 = new EncodingCharset("CP1252", "cp1252");
		self::$KOI8_R = new EncodingCharset("KOI8_R", "KOI8-R");
		self::$BIG5 = new EncodingCharset("BIG5", "BIG5");
		self::$GB2312 = new EncodingCharset("GB2312", "GB2312");
		self::$BIG5_HKSCS = new EncodingCharset("BIG5_HKSCS", "BIG5-HKSCS");
		self::$Shift_JIS = new EncodingCharset("Shift_JIS", "Shift_JIS");
		self::$EUC_JP = new EncodingCharset("EUC_JP", "EUC-JP");
		self::$MacRoman = new EncodingCharset("MacRoman", "MacRoman");
		self::$Detect = new EncodingCharset("Detect", "");
	}
}
EncodingCharset::Initialize();