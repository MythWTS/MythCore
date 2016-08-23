<?php
namespace Core;
/**
 * Data structure to hold information about a time interval. This class represents an amount of time regardless of when it is (not tied to a specific moment in time)
 * @see \Core\DateTime
 * @property integer $MicroSecond The microseconds component of this time span object. If value is greater than 999999, the amount will be converted  to seconds and microseconds.
 * @property integer $Seconds The seconds component of this time span object. If value is greater than 59, the amount will be converted  to minutes and seconds.
 * @property integer $Minutes The minutes component of this time span object. If value is greater than 59, the amount will be converted  to hours and minutes.
 * @property integer $Hours The hours component of this time span object. If value is greater than 23, the amount will be converted  to days and hours.
 * @property integer $Days The days component of this time span object. If value is greater than 29, the amount will be converted  to months and days.
 * @property integer $Months The months component of this time span object. If value is greater than 11, the amount will be converted  to years and months.
 * @property integer $Years The years component of this time span object.
 * @property integer $Timestamp An integer that represents the total number of seconds in this time span (suitable for working with UNIX timestamps)
 * @property float $FullTimestamp A float that represents the number of seconds in this time span including microseconds
 * 
 */
final class TimeSpan extends Object{
	###########################################################################
	# Private Fields
	###########################################################################
	/**
	 * Microseconds in the interval/time span
	 * @var integer
	 */
	private $_microSeconds;
	/**
	 * Seconds in the interval/time span
	 * @var integer
	 */
	private $_seconds;
	/**
	 * Minutes in the interval/time span
	 * @var integer
	 */
	private $_minutes;
	/**
	 * Hours in the interval/time span
	 * @var integer
	 */
	private $_hours;
	/**
	 * Days in the interval/time span
	 * @var integer
	 */
	private $_days;
	/**
	 * Months in the interval/time span
	 * @var integer
	 */
	private $_months;
	/**
	 * Years in the interval/time span
	 * @var integer
	 */
	private $_years;
	/**
	 * A timestamp representation of the TimeSpan object. The number of seconds in the interval
	 * @var integer
	 */
	private $_timestamp;
	###########################################################################
	# Constructor & Factory Methods
	###########################################################################
	/**
	 * Creates a new TimeSpan object from a number of seconds value. Not a standard UNIX timestamp 
	 * @param integer|float $totalSeconds The amount of seconds representing the time span either as an integer or as a float
	 * @throws InvalidParameterTypeException If the totalSeconds is not a float nor an integer
	 */
	public function __construct($totalSeconds = null){
		if($totalSeconds === null){
			$this->_days = $this->_hours = $this->_microSeconds = $this->_minutes = $this->_months = $this->_seconds = $this->_years = $this->_timestamp = 0;
		}
		else {
			$t = 0;
			if(is_int($totalSeconds)){
				$this->_microSeconds = 0;
				$this->_timestamp = $totalSeconds;
			}
			elseif (is_float($totalSeconds)){
				$this->_timestamp = (integer)$totalSeconds;
				$this->_microSeconds = (integer)(($totalSeconds - $t) * 1000000);
			}
			else{
				throw new InvalidParameterTypeException("totalSeconds", __METHOD__, "either a float or an integer");
			}
			$this->updateFromTimestamp();
		}
	}
	/**
	 * Creates a new instance of TimeSpan based on the components provided
	 * @param integer $years The number of years in the time span
	 * @param integer $months The number of months in the time span
	 * @param integer $days The number of days in the time span
	 * @param integer $hours The number of hours in the time span
	 * @param integer $minutes The number of minutes in the time span
	 * @param integer $seconds The number of seconds in the time span
	 * @param integer $microseconds The number of micro-seconds in the time span
	 * @return \Core\TimeSpan
	 */
	public static function From($years, $months = 0, $days = 0, $hours = 0, $minutes = 0, $seconds = 0, $microseconds = 0){
		return new TimeSpan(
				(float)($seconds + ($minutes * 60) + ($hours * 3600) + ($days * 86400) + ($months * 2592000) + ($years * 31536000)) + 
				(((float)$microseconds) / 1000000)
		);
	}
	###########################################################################
	# Public Properties
	###########################################################################
	/**
	 * Accessor for the MicroSeconds property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not 0 or positive
	 * @return integer
	 */
	public function MicroSeconds($value){
		if($value == null){
			return $this->_microSecond;
		}
		else {
			Params::InsureInt($value, "value"); Params::InsureGTE($value, 0, "value");
			$seconds = $value / 1000000;
			if($seconds !== 0){
				$this->Seconds($seconds);
			}
			$this->_microSecond = $value % 1000000;
		}
	}
	/**
	 * Accessor for the Seconds property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not 0 or positive
	 * @return integer
	 */
	public function Seconds($value = null){
		if($value === null){
			return $this->_seconds;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureGTE($value, 0, "value");
			$minutes = $value / 60;
			if($minutes !== 0){
				$this->Minutes($minutes);
			}
			$this->_seconds = $value % 60;
		}
	}
	/**
	 * Accessor for the Minutes property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not 0 or positive
	 * @return integer
	 */
	public function Minutes($value = null){
		if($value === null){
			return $this->_minutes;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureGTE($value, 0, "value");
			$hours = $value / 60;
			if($hours !== 0){
				$this->Hours($hours);
			}
			$this->_minutes = $value % 60;
		}
	}
	/**
	 * Accessor for the Hours property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not 0 or positive
	 * @return integer
	 */
	public function Hours($value = null){
		if($value === null){
			return $this->_hours;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureGTE($value, 0, "value");
			$days = $value / 24;
			if($days !== 0){
				$this->Days($days);
			}
			$this->_hours = $value % 24;
		}
	}
	/**
	 * Accessor for the Days property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not 0 or positive
	 * @return integer
	 */
	public function Days($value = null){
		if($value === null){
			return $this->_days;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureGTE($value, 0, "value");
			$months = $value / 30;
			if($months !== 0){
				$this->Months($months);
			}
			$this->_days = $value % 30;
		}
	}
	/**
	 * Accessor for the Months property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not 0 or positive
	 * @return integer
	 */
	public function Months($value = null){
		if($value === null){
			return $this->_months;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureGTE($value, 0, "value");
			$years = $value / 12;
			if($years !== 0){
				$this->Years($years);
			}
			$this->_months = $value % 12;
		}
	}
	/**
	 * Accessor for the Years property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not 0 or positive
	 * @return integer
	 */
	public function Years($value = null){
		if($value === null){
			return $this->_years;
		}
		else{
			Params::InsureInt($value); Params::InsureGTE($value, 0, "value");
			$this->_years = $value;
		}
	}
	/**
	 * Accessor for the Timestamp property. An integer that represents the total number of seconds in this time span (suitable for working with UNIX timestamps)
	 * @param integer $value The value to be assigned to the property in setter mode
	 * @throws InvalidParameterTypeException If the value is not an integer
	 * @return integer
	 */
	public function Timestamp($value = null){
		if($value === null){
			return $this->_timestamp;
		}
		else {
			Params::InsureInt($value, "value");
			$this->_timestamp = $value;
			$this->updateFromTimestamp();
		}
	}
	/**
	 * Accessor for the FullTimestamp property. A float that represents the total number of seconds in this time span (including microseconds)
	 * @param integer $value The value to be assigned to the property in setter mode
	 * @throws InvalidParameterTypeException If the value is not an integer
	 * @throws InvalidParameterValueException If the value is not 0 or positive
	 * @return float
	 */
	public function FullTimestamp($value = null){
		if($value === null){
			return ((float)$this->_timestamp) + (((float)$this->_microSeconds) / 1000000);
		}
		else{
			Params::InsureFloat($value, "value"); Params::InsureGTE($value, 0, "value");
			$this->_timestamp = (integer)$value;
			$this->_microSeconds = (integer)(($value - $this->_timestamp) * 1000000);
		}
	}
	###########################################################################
	# Operations
	###########################################################################
	/**
	 * Adds a number of seconds or a timespan to the current time span and returns the result in a new TimeSpan object
	 * @param number|\Core\TimeSpan $increment The amount to add to this timespan
	 * @throws InvalidParameterTypeException If the value supplied is not valid
	 * @return \Core\TimeSpan
	 */
	public function Add($increment){
		if(is_numeric($increment)){
			return new TimeSpan($this->FullTimestamp + $increment);
		}
		elseif (is_a($increment, "\\Core\\TimeSpan")){
			return new TimeSpan($this->FullTimestamp + $increment->FullTimestamp);
		}
		else{
			throw new InvalidParameterTypeException("increment", __METHOD__, "number, or \\Core\\TimeSpan");
		}
	}
	/**
	 * Subtracts a number of seconds or a timespan to the current time span and returns the result in a new TimeSpan object
	 * @param number|\Core\TimeSpan $decrement The amount to subtract to this timespan
	 * @throws InvalidParameterTypeException If the value supplied is not valid
	 * @return \Core\TimeSpan
	 */
	public function Subtract($decrement){
		if(is_numeric($decrement)){
			return new TimeSpan($this->FullTimestamp - $decrement);	
		}
		elseif (is_a($decrement, "\\Core\\TimeSpan")){
			return new TimeSpan($this->FullTimestamp - $decrement->FullTimestamp);	
		}
		else{
			throw new InvalidParameterTypeException("decrement", __METHOD__, "number, or \\Core\\TimeSpan");
		}
	}
	/**
	 * Multiplies the current timespan by a multiplier and returns the result in a new TimeSpan object
	 * @param number $multiplier The amount to multiply by this timespan
	 * @throws InvalidParameterTypeException If the value supplied is not valid
	 * @return \Core\TimeSpan
	 */
	public function Multiply($multiplier){
		if(is_numeric($multiplier)){
			return new TimeSpan($this->FullTimestamp * $multiplier);	
		}
		else{
			throw new InvalidParameterTypeException("multiplier", __METHOD__, "number");
		}
	}
	/**
	 * Divides the current timespan by a divisor and returns the result in a new TimeSpan object
	 * @param number $divisor The amount to divide this timespan by
	 * @throws InvalidParameterTypeException If the value supplied is not valid
	 * @return \Core\TimeSpan
	 */
	public function Divide($divisor){
		if(is_numeric($$divisor)){
			return new TimeSpan($this->FullTimestamp / $divisor);	
		}
		else{
			throw new InvalidParameterTypeException("divisor", __METHOD__, "number");
		}
	}
	###########################################################################
	# Formatting Methods
	###########################################################################
	/**
	 * Returns a string representing the TimeSpan object as "Y:years M:months D:days H:hours M:minutes S:seconds MS:microseconds"
	 * {@inheritDoc}
	 * @see \Core\Object::__toString()
	 */
	public function __toString(){
		return "Y:{$this->_years} M:{$this->_months} D:{$this->_days} H:{$this->_hours} M:{$this->_minutes} S:{$this->_seconds} MS:{$this->_microSeconds}";
	}
	###########################################################################
	# Private Utility Methods
	###########################################################################
	/**
	 * Updates the fields from the timestamp
	 */
	private function updateFromTimestamp(){
		if($this->_timestamp < 0){
			$this->_timestamp = -$this->_timestamp;
		}
		$t = $this->_timestamp;
		$this->_years = $t / 31536000;
		$t = $t % 31536000;
		$this->_months = $t / 2592000;
		$t = $t % 2592000;
		$this->_days = $t / 86400;
		$t = $t % 86400;
		$this->_hours = $t / 3600;
		$t = $t % 3600;
		$this->_minutes = $t / 60;
		$t = $t % 60;
		$this->_seconds = $t;
	}
	/**
	 * Calculates the timestamp from the fields
	 */
	private function updateTimestamp(){
		$this->_timestamp = $this->_seconds + ($this->_minutes * 60) + ($this->_hours * 3600) + 
			($this->_days * 86400) + ($this->_months * 2592000) + ($this->_years * 31536000);
	}
}