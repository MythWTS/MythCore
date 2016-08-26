<?php
namespace Core;
/**
 * Represents a UUID v4.0 Guid
 */
final class Guid extends Object{
	###########################################################################
	# Private Fields
	###########################################################################
	/**
	 * The time_low component of the guid (dual word / 32 bits / 8 hexadecimal digits)
	 * @var integer
	 */
	private $_time_low;
	/**
	 * The time_mid component of the guid (word / 16 bits / 4 hexadecimal digits)
	 * @var integer
	 */
	private $_time_mid;
	/**
	 * The time_hi component of the guid without the version (12 bits / 3 hexadecimal digits)
	 * @var integer
	 */
	private $_time_hi;
	/**
	 * The clk_seq component of the guid without the 10 in the high bits (14 bits / 7 hexadecimal digits)
	 * @var integer
	 */
	private $_clk_seq;
	/**
	 * The node hi digits component of the guid (word / 16 bits / 4 hexadecimal digits)
	 * @var integer
	 */
	private $_node_hi;
	/**
	 * The node mid digits component of the guid (word / 16 bits / 4 hexadecimal digits)
	 * @var integer
	 */
	private $_node_mid;
	/**
	 * The node low digits component of the guid (word / 16 bits / 4 hexadecimal digits)
	 * @var integer
	 */
	private $_node_low;
	###########################################################################
	# Private Static Readonly Fields
	###########################################################################
	/**
	 * The maximum value allowed for a double word (32 bit / 8 hexadecimal digits) [4294967295]
	 * @var integer
	 */
	private static $_dualWordMax = 0xffffffff; //4294967295
	/**
	 * The maximum value allowed for a word (16 bits / 4 hexadecimal digits) [65535]
	 * @var integer
	 */
	private static $_wordMax = 0xffff; //65535
	/**
	 * The version to be added to the time_hi component (16384)
	 * @var integer
	 */
	private static $_version = 0x4000; //16384
	/**
	 * The maximum value allowed for the time_hi component [4095]
	 * @var integer
	 */
	private static $_time_hi_max = 0x0fff; //4095
	/**
	 * The maximum value allowed for the clk_seq component [16383]
	 * @var integer
	 */
	private static $_clk_seq_max = 0x3fff; //16383
	/**
	 * The mask value to be added to the clk_seq component [32768]
	 * @var integer
	 */
	private static $_clk_seq_mask = 0x8000; //32768
	/**
	 * The empty Guid object
	 * @var \Core\Guid
	 */
	private static $_empty;
	###########################################################################
	# Constructors
	###########################################################################
	/**
	 * Creates a new UUID Guid v4.0 object from the various components that constitutes the guid
	 * @param integer $timeLowDualWord The time_low component of the guid (dual word / 32 bits / 8 hexadecimal digits) [0-4294967295]
	 * @param integer $timeMidWord The time_mid component of the guid (word / 16 bits / 4 hexadecimal digits) [0-65535]
	 * @param integer $timeHiWord The time_hi component of the guid without the version (12 bits / 3 hexadecimal digits) [0-4095]
	 * @param integer $clkSeqWord The clk_seq component of the guid without the 10 in the high bits (14 bits / 7 hexadecimal digits) [0-16383]
	 * @param integer $nodeHiWord The node hi digits component of the guid (word / 16 bits / 4 hexadecimal digits) [0-65535]
	 * @param integer $nodeMidWord The node mid digits component of the guid (word / 16 bits / 4 hexadecimal digits) [0-65535]
	 * @param integer $nodeLowWord The node low digits component of the guid (word / 16 bits / 4 hexadecimal digits) [0-65535]
	 */
	public function __construct($timeLowDualWord, $timeMidWord, $timeHiWord, $clkSeqWord, $nodeHiWord, $nodeMidWord, $nodeLowWord){
		Params::InsureInt($timeLowDualWord, "timeLowDualWord"); Params::InsureInt($timeMidWord, "timeMidWord");
		Params::InsureInt($timeHiWord, "timeHiWord"); Params::InsureInt($clkSeqWord, "clkSeqWord");
		Params::InsureInt($nodeHiWord, "nodeHiWord"); Params::InsureInt($nodeMidWord, "nodeMidWord");
		Params::InsureInt($nodeLowWord, "nodeLowWord");
		$this->_time_low = Params::GetInsuredInRange($timeLowDualWord, 0, self::$_dualWordMax, "timeLowDualWord");
		$this->_time_mid = Params::GetInsuredInRange($timeMidWord, 0, self::$_wordMax, "timeMidWord");
		$this->_time_hi = Params::GetInsuredInRange($timeHiWord, 0, self::$_time_hi_max, "timeHiWord") | self::$_version;
		$this->_clk_seq = Params::GetInsuredInRange($clkSeqWord, 0, self::$_clk_seq_max, "clkSeqWord") | self::$_clk_seq_mask;
		$this->_node_hi = Params::GetInsuredInRange($nodeHiWord, 0, self::$_wordMax, "nodeHiWord");
		$this->_node_mid = Params::GetInsuredInRange($nodeMidWord, 0, self::$_wordMax, "nodeMidWord");
		$this->_node_low = Params::GetInsuredInRange($nodeLowWord, 0, self::$_wordMax, "nodeLowWord");
	}
	/**
	 * Static constructor
	 */
	public static function Initialize(){
		self::$_empty = new Guid(0, 0, 0, 0, 0, 0, 0);
	}
	###########################################################################
	# Factory Methods
	###########################################################################
	/**
	 * Creates a new random Guid object
	 * @return \Core\Guid
	 */
	public static function NewGuid(){
		return new Guid(
				mt_rand(0, self::$_dualWordMax), mt_rand(0, self::$_wordMax), mt_rand(0, self::$_time_hi_max),
				mt_rand(0, self::$_clk_seq_max), mt_rand(0, self::$_wordMax), mt_rand(0, self::$_wordMax), mt_rand(0, self::$_wordMax)
		);
	}
	/**
	 * Creates a copy of a guid object and returns the new copy
	 * @param Guid $guid The Guid object to copy
	 * @return \Core\Guid
	 */
	public static function Copy(Guid $guid){
		$res = new Guid(0, 0, 0, 0, 0, 0, 0);
		$res->_clk_seq = $guid->_clk_seq; $res->_node_hi = $guid->_node_hi; $res->_node_low = $guid->_node_low;
		$res->_node_mid = $guid->_node_mid; $res->_time_hi = $guid->_time_hi; $res->_time_low = $guid->_time_low;
		$res->_time_mid = $guid->_time_mid;
		return $res;
	}
	###########################################################################
	# Comparison Operators
	###########################################################################
	/**
	 * Returns whether this guid is equal to another Guid or not
	 * @param Guid $guid The Guid object to compare to
	 * @return boolean
	 */
	public function IsEqualTo(Guid $guid){
		return 
			$this->_time_low == $guid->_time_low && $this->_time_mid == $guid->_time_mid &&
			$this->_time_hi == $guid->_time_hi && $this->_clk_seq == $guid->_clk_seq &&
			$this->_node_hi == $guid->_node_hi && $this->_node_mid == $guid->_node_mid &&
			$this->_node_low == $guid->_node_low;
	}
	/**
	 * Returns whether this guid is not equal to another Guid
	 * @param Guid $guid The Guid object to compare to
	 * @return boolean
	 */
	public function IsNotEqualTo(Guid $guid){
		return 
			$this->_time_low != $guid->_time_low || $this->_time_mid != $guid->_time_mid ||
			$this->_time_hi != $guid->_time_hi || $this->_clk_seq != $guid->_clk_seq ||
			$this->_node_hi != $guid->_node_hi || $this->_node_mid != $guid->_node_mid ||
			$this->_node_low != $guid->_node_low;
	}
	###########################################################################
	# Base Overrides
	###########################################################################
	/**
	 * Returns a string representation of the Guid object in the form [time_low-time_mid]-[time_hi_and_version]-[clk_seq]-[node_hi][node_mid][node_low]
	 * {@inheritDoc}
	 * @see \Core\Object::__toString()
	 */
	public function __toString(){
		return sprintf(
				'%08x-%04x-%04x-%04x-%04x%04x%04x',
				$this->_time_low, $this->_time_mid, $this->_time_hi, $this->_clk_seq, $this->_node_hi, $this->_node_mid, $this->_node_low
		);
	}
}
Guid::Initialize();