<?php
namespace Core;

final class Guid extends Object{
	###########################################################################
	# Private Fields
	###########################################################################
	private $_time_low;
	private $_time_mid;
	private $_time_hi;
	private $_clk_seq;
	private $_node_hi;
	private $_node_mid;
	private $_node_low;
	###########################################################################
	# Private Static Readonly Fields
	###########################################################################
	private static $_dualWordMax = 0xffffffff;
	private static $_wordMax = 0xffff;
	private static $_version = 0x4000;
	private static $_time_hi_max = 0x0fff;
	private static $_clk_seq_max = 0x3fff;
	private static $_clk_seq_mask = 0x8000;
	private static $_empty;
	###########################################################################
	# Constructors
	###########################################################################
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
	public static function Initialize(){
		self::$_empty = new Guid(0, 0, 0, 0, 0, 0, 0);
	}
	###########################################################################
	# Factory Methods
	###########################################################################
	public static function NewGuid(){
		return new Guid(
				mt_rand(0, self::$_dualWordMax), mt_rand(0, self::$_wordMax), mt_rand(0, self::$_time_hi_max),
				mt_rand(0, self::$_clk_seq_max), mt_rand(0, self::$_wordMax), mt_rand(0, self::$_wordMax), mt_rand(0, self::$_wordMax)
		);
	}
	public function __toString(){
		return sprintf(
				'%08x-%04x-%04x-%04x-%04x%04x%04x',
				$this->_time_low, $this->_time_mid, $this->_time_hi, $this->_clk_seq, $this->_node_hi, $this->_node_mid, $this->_node_low
		);
	}
}
Guid::Initialize();