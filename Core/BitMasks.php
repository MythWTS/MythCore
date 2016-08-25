<?php
namespace Core;
/**
 * An enumeration of bitmasks that can be used to extract single bits or more of an integer
 * @property string $Name The name asscoiated with the enumeration member
 * @property integer $Value The value associated with the enumeration member
 */
final class BitMasks extends Enum{
	/**
	 * Mask for the bit 01 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit01;
	/**
	 * Mask for the bit 02 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit02;
	/**
	 * Mask for the bit 03 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit03;
	/**
	 * Mask for the bit 04 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit04;
	/**
	 * Mask for the bit 05 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit05;
	/**
	 * Mask for the bit 06 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit06;
	/**
	 * Mask for the bit 07 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit07;
	/**
	 * Mask for the bit 08 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit08;
	/**
	 * Mask for the bit 09 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit09;
	/**
	 * Mask for the bit 10 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit10;
	/**
	 * Mask for the bit 11 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit11;
	/**
	 * Mask for the bit 12 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit12;
	/**
	 * Mask for the bit 13 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit13;
	/**
	 * Mask for the bit 14 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit14;
	/**
	 * Mask for the bit 15 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit15;
	/**
	 * Mask for the bit 16 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit16;
	/**
	 * Mask for the bit 17 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit17;
	/**
	 * Mask for the bit 18 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit18;
	/**
	 * Mask for the bit 19 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit19;
	/**
	 * Mask for the bit 20 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit20;
	/**
	 * Mask for the bit 21 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit21;
	/**
	 * Mask for the bit 22 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit22;
	/**
	 * Mask for the bit 23 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit23;
	/**
	 * Mask for the bit 24 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit24;
	/**
	 * Mask for the bit 25 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit25;
	/**
	 * Mask for the bit 26 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit26;
	/**
	 * Mask for the bit 27 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit27;
	/**
	 * Mask for the bit 28 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit28;
	/**
	 * Mask for the bit 29 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit29;
	/**
	 * Mask for the bit 30 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit30;
	/**
	 * Mask for the bit 31 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit31;
	/**
	 * Mask for the bit 32 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Bit32;
	/**
	 * Mask for the half-byte (4 bits) 01 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte01;
	/**
	 * Mask for the half-byte (4 bits) 02 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte02;
	/**
	 * Mask for the half-byte (4 bits) 03 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte03;
	/**
	 * Mask for the half-byte (4 bits) 04 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte04;
	/**
	 * Mask for the half-byte (4 bits) 05 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte05;
	/**
	 * Mask for the half-byte (4 bits) 06 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte06;
	/**
	 * Mask for the half-byte (4 bits) 07 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte07;
	/**
	 * Mask for the half-byte (4 bits) 08 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $HalfByte08;
	/**
	 * Mask for the byte (8 bits) 01 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Byte01;
	/**
	 * Mask for the byte (8 bits) 02 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Byte02;
	/**
	 * Mask for the byte (8 bits) 03 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Byte03;
	/**
	 * Mask for the byte (8 bits) 04 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Byte04;
	/**
	 * Mask for the word (16 bits) 01 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Word01;
	/**
	 * Mask for the word (16 bits) 02 (right to left, right most is 01)
	 * @var \Core\BitMasks
	 */
	public static $Word02;
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
		self::$Bit01 = new BitMasks("Bit01", 0b00000000000000000000000000000001);
		self::$Bit02 = new BitMasks("Bit02", 0b00000000000000000000000000000010);
		self::$Bit03 = new BitMasks("Bit03", 0b00000000000000000000000000000100);
		self::$Bit04 = new BitMasks("Bit04", 0b00000000000000000000000000001000);
		self::$Bit05 = new BitMasks("Bit05", 0b00000000000000000000000000010000);
		self::$Bit06 = new BitMasks("Bit06", 0b00000000000000000000000000100000);
		self::$Bit07 = new BitMasks("Bit07", 0b00000000000000000000000001000000);
		self::$Bit08 = new BitMasks("Bit08", 0b00000000000000000000000010000000);
		self::$Bit09 = new BitMasks("Bit09", 0b00000000000000000000000100000000);
		self::$Bit10 = new BitMasks("Bit10", 0b00000000000000000000001000000000);
		self::$Bit11 = new BitMasks("Bit11", 0b00000000000000000000010000000000);
		self::$Bit12 = new BitMasks("Bit12", 0b00000000000000000000100000000000);
		self::$Bit13 = new BitMasks("Bit13", 0b00000000000000000001000000000000);
		self::$Bit14 = new BitMasks("Bit14", 0b00000000000000000010000000000000);
		self::$Bit15 = new BitMasks("Bit15", 0b00000000000000000100000000000000);
		self::$Bit16 = new BitMasks("Bit16", 0b00000000000000001000000000000000);
		self::$Bit17 = new BitMasks("Bit17", 0b00000000000000010000000000000000);
		self::$Bit18 = new BitMasks("Bit18", 0b00000000000000100000000000000000);
		self::$Bit19 = new BitMasks("Bit19", 0b00000000000001000000000000000000);
		self::$Bit20 = new BitMasks("Bit20", 0b00000000000010000000000000000000);
		self::$Bit21 = new BitMasks("Bit21", 0b00000000000100000000000000000000);
		self::$Bit22 = new BitMasks("Bit22", 0b00000000001000000000000000000000);
		self::$Bit23 = new BitMasks("Bit23", 0b00000000010000000000000000000000);
		self::$Bit24 = new BitMasks("Bit24", 0b00000000100000000000000000000000);
		self::$Bit25 = new BitMasks("Bit25", 0b00000001000000000000000000000000);
		self::$Bit26 = new BitMasks("Bit26", 0b00000010000000000000000000000000);
		self::$Bit27 = new BitMasks("Bit27", 0b00000100000000000000000000000000);
		self::$Bit28 = new BitMasks("Bit28", 0b00001000000000000000000000000000);
		self::$Bit29 = new BitMasks("Bit29", 0b00010000000000000000000000000000);
		self::$Bit30 = new BitMasks("Bit30", 0b00100000000000000000000000000000);
		self::$Bit31 = new BitMasks("Bit31", 0b01000000000000000000000000000000);
		self::$Bit32 = new BitMasks("Bit32", 0b10000000000000000000000000000000);
		self::$HalfByte01 = new BitMasks("HalfByte01", 0b00000000000000000000000000001111);
		self::$HalfByte02 = new BitMasks("HalfByte02", 0b00000000000000000000000011110000);
		self::$HalfByte03 = new BitMasks("HalfByte03", 0b00000000000000000000111100000000);
		self::$HalfByte04 = new BitMasks("HalfByte04", 0b00000000000000001111000000000000);
		self::$HalfByte05 = new BitMasks("HalfByte05", 0b00000000000011110000000000000000);
		self::$HalfByte06 = new BitMasks("HalfByte06", 0b00000000111100000000000000000000);
		self::$HalfByte07 = new BitMasks("HalfByte07", 0b00001111000000000000000000000000);
		self::$HalfByte08 = new BitMasks("HalfByte08", 0b11110000000000000000000000000000);
		self::$Byte01 = new BitMasks("Byte01", 0b00000000000000000000000011111111);
		self::$Byte02 = new BitMasks("Byte02", 0b00000000000000001111111100000000);
		self::$Byte03 = new BitMasks("Byte03", 0b00000000111111110000000000000000);
		self::$Byte04 = new BitMasks("Byte04", 0b11111111000000000000000000000000);
		self::$Word01 = new BitMasks("Word01", 0b00000000000000001111111111111111);
		self::$Word02 = new BitMasks("Word02", 0b11111111111111110000000000000000);
	}
}
BitMasks::Initialize();