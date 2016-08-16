<?php
namespace Core;
/**
 * Enumeration to be used with Html & Http encoding methods to indicate the character set to use
 * @see String::HtmlSpecialCharacters()
 * @property string $Name The name asscoiated with the enumeration member
 * @property mixed $Value The value associated with the enumeration member
 */
final class EncodingCharset extends Enum{
	/**
	 * The ISO-8859-1 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $ISO_8859_1;
	/**
	 * The ISO-8859-5 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $ISO_8859_5;
	/**
	 * The ISO-8859-15 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $ISO_8859_15;
	/**
	 * The UTF8 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $UTF8;
	/**
	 * The CP866 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $CP866;
	/**
	 * The CP1251 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $CP1251;
	/**
	 * The CP1252 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $CP1252;
	/**
	 * The KOI8-R Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $KOI8_R;
	/**
	 * The BIG5 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $BIG5;
	/**
	 * The GB2312 Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $GB2312;
	/**
	 * The BIG5-HKSCS Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $BIG5_HKSCS;
	/**
	 * The Shift_JIS Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $Shift_JIS;
	/**
	 * The EUC-JP Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $EUC_JP;
	/**
	 * The MacRoman Character Set
	 * @var \Core\EncodingCharset
	 */
	public static $MacRoman;
	/**
	 * Used to indicate the code using the enumeration should detect the character set automatically
	 * @var \Core\EncodingCharset
	 */
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