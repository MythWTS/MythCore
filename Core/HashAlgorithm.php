<?php
namespace Core;
/**
 * Enumeration to be used with Hashing methods such as String::Hash()
 * @property string Name The name asscoiated with the enumeration member
 * @property integer Value The value associated with the enumeration member
 * @see \Core\String::Hash()
 */
final class HashAlgorithm extends Enum{
	/**
	 * The hashing algorithm MD2
	 * @var \Core\HashAlgorithm
	 */
	public static $MD2;
	/**
	 * The hashing algorithm MD4
	 * @var \Core\HashAlgorithm
	 */
	public static $MD4;
	/**
	 * The hashing algorithm MD5
	 * @var \Core\HashAlgorithm
	 */
	public static $MD5;
	/**
	 * The hashing algorithm SHA1
	 * @var \Core\HashAlgorithm
	 */
	public static $SHA1;
	/**
	 * The hashing algorithm SHA256
	 * @var \Core\HashAlgorithm
	 */
	public static $SHA256;
	/**
	 * The hashing algorithm SHA384
	 * @var \Core\HashAlgorithm
	 */
	public static $SHA384;
	/**
	 * The hashing algorithm SHA512
	 * @var \Core\HashAlgorithm
	 */
	public static $SHA512;
	/**
	 * The hashing algorithm RipeMD128
	 * @var \Core\HashAlgorithm
	 */
	public static $RipeMD128;
	/**
	 * The hashing algorithm RipeMD160
	 * @var \Core\HashAlgorithm
	 */
	public static $RipeMD160;
	/**
	 * The hashing algorithm RipeMD256
	 * @var \Core\HashAlgorithm
	 */
	public static $RipeMD256;
	/**
	 * The hashing algorithm RipeMD320
	 * @var \Core\HashAlgorithm
	 */
	public static $RipeMD320;
	/**
	 * The hashing algorithm Whirlpool
	 * @var \Core\HashAlgorithm
	 */
	public static $Whirlpool;
	/**
	 * The hashing algorithm Tiger128_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Tiger128_3;
	/**
	 * The hashing algorithm Tiger160_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Tiger160_3;
	/**
	 * The hashing algorithm Tiger192_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Tiger192_3;
	/**
	 * The hashing algorithm Tiger128_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Tiger128_4;
	/**
	 * The hashing algorithm Tiger160_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Tiger160_4;
	/**
	 * The hashing algorithm Tiger192_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Tiger192_4;
	/**
	 * The hashing algorithm Snefru
	 * @var \Core\HashAlgorithm
	 */
	public static $Snefru;
	/**
	 * The hashing algorithm Gost
	 * @var \Core\HashAlgorithm
	 */
	public static $Gost;
	/**
	 * The hashing algorithm Adler32
	 * @var \Core\HashAlgorithm
	 */
	public static $Adler32;
	/**
	 * The hashing algorithm CRC32
	 * @var \Core\HashAlgorithm
	 */
	public static $CRC32;
	/**
	 * The hashing algorithm CRC32B
	 * @var \Core\HashAlgorithm
	 */
	public static $CRC32B;
	/**
	 * The hashing algorithm Haval128_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval128_3;
	/**
	 * The hashing algorithm Haval160_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval160_3;
	/**
	 * The hashing algorithm Haval192_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval192_3;
	/**
	 * The hashing algorithm Haval224_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval224_3;
	/**
	 * The hashing algorithm Haval256_3
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval256_3;
	/**
	 * The hashing algorithm Haval128_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval128_4;
	/**
	 * The hashing algorithm Haval160_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval160_4;
	/**
	 * The hashing algorithm Haval192_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval192_4;
	/**
	 * The hashing algorithm Haval224_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval224_4;
	/**
	 * The hashing algorithm Haval256_4
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval256_4;
	/**
	 * The hashing algorithm Haval128_5
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval128_5;
	/**
	 * The hashing algorithm Haval160_5
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval160_5;
	/**
	 * The hashing algorithm Haval192_5
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval192_5;
	/**
	 * The hashing algorithm Haval224_5
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval224_5;
	/**
	 * The hashing algorithm Haval256_5
	 * @var \Core\HashAlgorithm
	 */
	public static $Haval256_5;
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
		self::$MD2 = new HashAlgorithm("MD2", "md2");
		self::$MD4 = new HashAlgorithm("MD4", "md4");
		self::$MD5 = new HashAlgorithm("MD5", "md5");
		self::$SHA1 = new HashAlgorithm("SHA1", "sha1");
		self::$SHA256 = new HashAlgorithm("SHA256", "sha256");
		self::$SHA384 = new HashAlgorithm("SHA384", "sha384");
		self::$SHA512 = new HashAlgorithm("SHA512", "sha512");
		self::$RipeMD128 = new HashAlgorithm("RipeMD128", "ripemd128");
		self::$RipeMD160 = new HashAlgorithm("RipeMD160", "ripemd160");
		self::$RipeMD256 = new HashAlgorithm("RipeMD256", "ripemd256");
		self::$RipeMD320 = new HashAlgorithm("RipeMD320", "ripemd320");
		self::$Whirlpool = new HashAlgorithm("Whirlpool", "whirlpool");
		self::$Tiger128_3 = new HashAlgorithm("Tiger128,3", "tiger128,3");
		self::$Tiger160_3 = new HashAlgorithm("Tiger160,3", "tiger160,3");
		self::$Tiger192_3 = new HashAlgorithm("Tiger192,3", "tiger192,3");
		self::$Tiger128_4 = new HashAlgorithm("Tiger128,4", "tiger128,4");
		self::$Tiger160_4 = new HashAlgorithm("Tiger160,4", "tiger160,4");
		self::$Tiger192_4 = new HashAlgorithm("Tiger192,4", "tiger192,4");
		self::$Snefru = new HashAlgorithm("Snefru", "snefru");
		self::$Gost = new HashAlgorithm("Gost", "gost");
		self::$Adler32 = new HashAlgorithm("Adler32", "adler32");
		self::$CRC32 = new HashAlgorithm("CRC32", "crc32");
		self::$CRC32B = new HashAlgorithm("CRC32B", "crc32b");
		self::$Haval128_3 = new HashAlgorithm("Haval128,3", "haval128,3");
		self::$Haval160_3 = new HashAlgorithm("Haval160,3", "haval160,3");
		self::$Haval192_3 = new HashAlgorithm("Haval192,3", "haval192,3");
		self::$Haval224_3 = new HashAlgorithm("Haval224,3", "haval224,3");
		self::$Haval256_3 = new HashAlgorithm("Haval256,3", "haval256,3");
		self::$Haval128_4 = new HashAlgorithm("Haval128,4", "haval128,4");
		self::$Haval160_4 = new HashAlgorithm("Haval160,4", "haval160,4");
		self::$Haval192_4 = new HashAlgorithm("Haval192,4", "haval192,4");
		self::$Haval224_4 = new HashAlgorithm("Haval224,4", "haval224,4");
		self::$Haval256_4 = new HashAlgorithm("Haval256,4", "haval256,4");
		self::$Haval128_5 = new HashAlgorithm("Haval128,5", "haval128,5");
		self::$Haval160_5 = new HashAlgorithm("Haval160,5", "haval160,5");
		self::$Haval192_5 = new HashAlgorithm("Haval192,5", "haval192,5");
		self::$Haval224_5 = new HashAlgorithm("Haval224,5", "haval224,5");
		self::$Haval256_5 = new HashAlgorithm("Haval256,5", "haval256,5");
	}
}
HashAlgorithm::Initialize();