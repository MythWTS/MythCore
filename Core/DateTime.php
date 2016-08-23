<?php
namespace Core;
/**
 * Data structure to hold informtion about a date/time or both.
 * @property integer $MicroSecond The microseconds component of this date/time object
 * @property integer $Second The seconds component of this date/time object
 * @property integer $Minute The minutes component of this date/time object
 * @property integer $Hour The hours component of this date/time object
 * @property integer $Day The day component of this date/time object
 * @property integer $DayOfWeek The name of the day component of this date/time object within the week
 * @property string $DayOfWeekName The name of the day of week (Sunday, Monday ...)
 * @property string $DayOfWeekShortName The short name of the day of week (Sun, Mon ...)
 * @property integer $DayOfYear The day of the year (0 for first day, through to 365)
 * @property integer $Month The month component of this date/time object
 * @property integer $MonthName The the name of the month (January, February ...)
 * @property integer $MonthShortName The the short name of the month (Jan, Feb ...)
 * @property integer $Year The years component of this date/time object
 * @property integer $Timestamp The UNIX timestamp value for this DateTime object
 * @property float $FullTimestamp The full timestamp as would be returned by microtime(true) including the microseconds part. [Calculated at each call]
 */
final class DateTime extends Object{
	###########################################################################
	# Private Fields
	###########################################################################
	/**
	 * The micro seconds component of the date/time
	 * @var integer
	 */
	private $_microSecond;
	/**
	 * The seconds component of the date/time
	 * @var integer
	 */
	private $_second;
	/**
	 * The minutes component of the date/time
	 * @var integer
	 */
	private $_minute;
	/**
	 * The hours component of the date/time
	 * @var integer
	 */
	private $_hour;
	/**
	 * The day component of the date/time
	 * @var integer
	 */
	private $_day;
	/**
	 * The week-day component of the date/time
	 * @var integer
	 */
	private $_weekDay;
	/**
	 * The name of the week-day component of the date/time (Sunday through Saturday)
	 * @var string
	 */
	private $_weekDayName;
	/**
	 * The short name of the week-day component of the date/time (Sat through Sun)
	 * @var string
	 */
	private $_weekDayShortName;
	/**
	 * The year day component of the date/time
	 * @var integer
	 */
	private $_yearDay;
	/**
	 * The month component of the date/time
	 * @var integer
	 */
	private $_month;
	/**
	 * The month name of the month component of the date/time (January through December)
	 * @var string
	 */
	private $_monthName;
	/**
	 * The month short name (three letters) of the month component of the date/time (Jan through Dec)
	 * @var string
	 */
	private $_shortMonthName;
	/**
	 * The year component of the date/time
	 * @var integer
	 */
	private $_year;
	/**
	 * The timestamp represented by this instance of DateTime (the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time represented)
	 * @var integer
	 */
	private $_timestamp;
	###########################################################################
	# Constructor & Factory Methods
	###########################################################################
	/**
	 * Creates a new instance of DateTime object based on a UNIX timestamp (the number of seconds between the Unix Epoch
	 * (January 1 1970 00:00:00 GMT) and the time specified) or a full float timestamp.
	 * @param integer|float $timestamp The UNIX timestamp to initialize the object from or the full float timestamp. If this is float, $microSeconds must be null
	 * @param inetger $microSeconds The number of micro seconds
	 * @throws InvalidParameterTypeException If the value of the timestamp is provided and not an integer
	 * @throws InvalidParameterValueException If the timestamp is provided and not greater than or equals 0
	 */
	public function __construct($timestamp = null, $microSeconds = null){
		if(is_null($timestamp)){
			if(is_null($microSeconds)){
				if(is_callable("microtime")){
					$t = microtime(true);
					$this->_timestamp = (integer)$t;
					$this->_microSecond = (integer)(($t - $this->_timestamp) * 1000000);
				}
			}
			else{
				$this->_timestamp = time();
				Params::InsureInt($microSeconds, "microSeconds"); Params::InsureInRange($microSeconds, 0, 999999);
				$this->_microSecond = $microSeconds;
			}
		}
		elseif (is_float($timestamp) && is_null($microSeconds)){
			$this->_timestamp = (integer)$timestamp;
			$this->_microSecond = (integer)(($timestamp - $this->_timestamp) * 1000000);
		}
		else{
			Params::InsureInt($timestamp, "timestamp"); Params::InsureGTE($timestamp, 0, "timestamp");
			$this->_timestamp = $timestamp;
			if(is_null($microSeconds)){
				$this->_microSecond = 0;
			}
			else{
				Params::InsureInt($microSeconds, "microSeconds"); Params::InsureInRange($microSeconds, 0, 999999);
				$this->_microSecond = $microSeconds;
			}
		}
		$this->updateFromTimeStamp();
	}
	/**
	 * Returns a DateTime instance representing the current date/time
	 * @return \Core\DateTime
	 */
	public static function Now(){
		return new DateTime();
	}
	/**
	 * Creates a new DateTime instance from the standard PHP DateTime class object
	 * @param \DateTime $dateTime The PHP builtin DateTime object to create the new instance from
	 * @return \Core\DateTime
	 */
	public static function FromBuiltInDateTime(\DateTime $dateTime){
		return new DateTime($dateTime->getTimestamp());
	}
	/**
	 * Creates a new instance of DateTime based on a string that follows PHP Date and Time Formats
	 * @param string $string The string containing the time or date. String will be extracted.
	 * @throws InvalidParameterValueException If the string supplied is not in a valid format for PHP Date and Time Formats
	 * @link http://php.net/manual/en/datetime.formats.php | Supported Date and Time Formats
	 * @return \Core\DateTime
	 */
	public static function FromString($string){
		$timestamp = strtotime(U::ES($string));
		if($timestamp === false){
			throw new InvalidParameterValueException("string", __METHOD__, "string that can be interpreted as a date or time or both");
		}
		return new DateTime($timestamp);
	}
	/**
	 * Converts the return of microtime() to a DateTime object
	 * @param float|string $microtime The microtime as returned by microtime()
	 * @throws InvalidParameterValueException If the string supplied is not formatted as supposed
	 * @link http://php.net/manual/en/function.microtime.php | Documentation for microtime() that shows the format
	 * @return \Core\DateTime
	 */
	public static function FromMicroSecondOutput($microtime){
		if(is_float($microtime)){
			return new DateTime((integer)$microtime, (integer)(($microtime - ((integer)$microtime)) * 1000000));
		}
		else{
			$c = explode(" ", U::ES($microtime));
			if(is_null($c) || !is_array($c) || count($c) != 2){
				throw new InvalidParameterValueException(
						"microtime", __METHOD__, "a string that is the return value of microtime() or compatible with it (<microseconds seconds> string)"
				);
			}
			else{
				$timestamp = (integer)$c[1];
				$microseconds = (integer)(((float)$c[0]) * 1000000);
				return new DateTime($timestamp, $microseconds);
			}
		}
	}
	/**
	 * Creates a new DateTime object from the components of a date/time
	 * @param integer $year The year (>0)
	 * @param integer $month The month (1-12)
	 * @param integer $day The day (1-28/29/30/31 according to month and year)
	 * @param integer $hour The hour (0-24)
	 * @param integer $minute The minute (0-60)
	 * @param integer $second The second (0-60)
	 * @param integer $microseconds Microseconds (0-999999)
	 * @return \Core\DateTime
	 */
	public static function From($year, $month=1, $day=1, $hour=0, $minute=0, $second=0, $microseconds=null){
		$t = mktime($hour, $minute, $second, $month, $day, $year);
		return new DateTime($t, $microseconds);
	}
	###########################################################################
	# Public Instance DateTime Components Properties
	###########################################################################
	/**
	 * Accessor for the MicroSecond property.
	 * @param integer $value The value to be assigned in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not between 0 and 999999
	 * @return integer
	 */
	public function MicroSecond($value = null){
		if($value == null){
			return $this->_microSecond;
		}
		else {
			Params::InsureInt($value, "value"); Params::InsureInRange($value, 0, 999999);
			$this->_microSecond = $value;
		}
	}
	/**
	 * Accessor for the seconds component of the date/time
	 * @param integer $value The value to assign to the property if this method is working as a setter (value assigned must be between 0 and 59)
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not between 0 and 59
	 * @return integer
	 */
	public function Second($value = null){
		if($value === null){
			return $this->_second;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureInRange($value, 0, 59, "value");
			$this->_second = $value;
			$this->updateTimestamp();
		}
	}
	/**
	 * Accessor for the minutes component of the date/time
	 * @param integer $value The value to assign to the property if this method is working as a setter (value assigned must be between 0 and 59)
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not between 0 and 59
	 * @return integer
	 */
	public function Minute($value = null){
		if($value === null){
			return $this->_minute;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureInRange($value, 0, 59, "value");
			$this->_minute = $value;
			$this->updateTimestamp();
		}
	}
	/**
	 * Accessor for the hours component of the date/time
	 * @param integer $value The value to assign to the property if this method is working as a setter (value assigned must be between 0 and 23)
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not between 0 and 23
	 * @return integer
	 */
	public function Hour($value = null){
		if($value === null){
			return $this->_hour;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureInRange($value, 0, 23, "value");
			$this->_hour = $value;
			$this->updateTimestamp();
		}
	}
	/**
	 * Accessor for the days component of the date/time
	 * @param integer $value The value to assign to the property if this method is working as a setter (value assigned must be between 1 and 31)
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not valid day for the month at hand
	 * @return integer
	 */
	public function Day($value = null){
		if($value === null){
			return $this->_day;
		}
		else{
			Params::InsureInt($value, "value");
			switch ($this->_month){
				case 1: case 3: case 5: case 7: case 8: case 10: case 12:
					Params::InsureInRange($value, 1, 31, "value"); break;
				case 4: case 6: case 9: case 11:
					Params::InsureInRange($value, 1, 30, "value"); break;
				case 2:
					if($this->_year % 4 === 0){
						Params::InsureInRange($value, 1, 29, "value"); break;
					}
					else{
						Params::InsureInRange($value, 1, 28, "value"); break;
					}
			}
			$this->_day = $value;
			$this->updateTimestamp();
			$this->updateDayInfo();
		}
	}
	/**
	 * Getter for the DayOfWeek property. Returns the day of the week as a number (0 for Sunday, ...)
	 * @return integer
	 */
	public function DayOfWeek(){
		return $this->_weekDay;
	}
	/**
	 * Getter for the DayOfWeekName property. Returns the name of the day of week (Sunday, Monday ...)
	 * @return string
	 */
	public function DayOfWeekName(){
		return $this->_weekDayName;
	}
	/**
	 * Getter for the DayOfWeekShortName property. Returns the short name of the day of week (Sun, Mon ...)
	 * @return string
	 */
	public function DayOfWeekShortName(){
		return $this->_weekDayShortName;
	}
	/**
	 * Getter for the DayOfYear property. Returns the day of the year (0 for first day, through to 365)
	 * @return integer
	 */
	public function DayOfYear(){
		return $this->_yearDay;
	}
	/**
	 * Accessor for the months component of the date/time
	 * @param integer $value The value to assign to the property if this method is working as a setter (value assigned must be between 1 and 12)
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not between 1 and 12
	 * @return integer
	 */
	public function Month($value = null){
		if($value === null){
			return $this->_month;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureInRange($value, 1, 12, "value");
			$this->_month = $value;
			$this->validateDay();
		}
	}
	/**
	 * Getter for the MonthName property. Returns the name of the month (January, February ...)
	 * @return string
	 */
	public function MonthName(){
		return $this->_monthName;
	}
	/**
	 * Getter for the MonthShortName property. Returns the short name of the month (Jan, Feb ...)
	 * @return string
	 */
	public function MonthShortName(){
		return $this->_shortMonthName;
	}
	/**
	 * Accessor for the years component of the date/time
	 * @param integer $value The value to assign to the property if this method is working as a setter (value assigned must be between 1 and 9999)
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not between 0 and 9999
	 * @return integer
	 */
	public function Year($value = null){
		if($value === null){
			return $this->_year;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureInRange($value, 0, 9999, "value");
			$this->_year = $value;
			$this->validateDay();
		}
	}
	/**
	 * Accessor for the Timestamp equivalent of this DateTime object
	 * @param integer $value The value to assign to the property if this method is working as a setter
	 * @throws InvalidParameterTypeException If value provided in setter mode is not an integer
	 * @throws InvalidParameterValueException If the value provided is not greater thanor equal 0
	 * @return integer
	 */
	public function Timestamp($value = null){
		if($value === null){
			return $this->_timestamp;
		}
		else{
			Params::InsureInt($value, "value"); Params::InsureGTE($value, 0, "value");
			$this->_timestamp = $value;
			$this->updateFromTimeStamp();
		}
	}
	/**
	 * Accessor for the full timestamp as would be returned by microtime(true) including the microseconds part
	 * @param float $value The value to assign in setter mode
	 * @throws InvalidParameterTypeException If value provided in setter mode is not a float
	 * @return float
	 */
	public function FullTimestamp($value){
		if($value === null){
			return (((float)$this->_microSecond) / 1000000) + ((float)$this->_timestamp);
		}
		else {
			Params::InsureFloat($value, "value");
			$this->_timestamp = (integer)$value;
			$this->_microSecond = (integer)(($value - $this->_timestamp) * 1000000);
			$this->updateFromTimeStamp();
		}
	}
	###########################################################################
	# Formatting Methods
	###########################################################################
	/**
	 * Returns a string representation of the time in the format YYYY-MM-DD HH:MM:SS:MICROSECONDS
	 * {@inheritDoc}
	 * @see \Core\Object::__toString()
	 */
	public function __toString(){
		return strftime("%G-%m-%d %H:%M:%S", $this->_timestamp) . ":{$this->_microSecond}";
	}
	/**
	 * Uses strftime() format to get a string representation of this DateTime object. Ignores the microseconds
	 * @param string $format The format string to use. Must be compatible with the strftime() format. String will be extracted
	 * @link http://php.net/manual/en/function.strftime.php | Documentation of strftime() that lists the valid format strings
	 * @return string
	 */
	public function PHPFormat($format){
		return strftime(U::ES($format), $this->_timestamp);
	}
	###########################################################################
	# Operations Methods
	###########################################################################
	/**
	 * Adds the specified time interval to the current object's date-time
	 * @param TimeSpan $interval The interval to add to this date
	 * @return \Core\DateTime
	 */
	public function Add(TimeSpan $interval){
		return new DateTime($this->FullTimestamp + $interval->FullTimestamp);
	}
	/**
	 * Subtracts the specified time interval from the current object's date-time
	 * @param TimeSpan $intervalThe interval to subtract from this date
	 * @return \Core\DateTime
	 */
	public function Subtract(TimeSpan $interval){
		return new DateTime($this->FullTimestamp - $interval->FullTimestamp);
	}
	/**
	 * Returns the difference between this date and another time and returns the resulting TimeSpan
	 * @param DateTime $date The date to subtract from this one
	 * @return \Core\TimeSpan
	 */
	public function Difference(DateTime $date){
		return new TimeSpan($this->FullTimestamp - $date->FullTimestamp);
	}
	###########################################################################
	# Private Methods
	###########################################################################
	/**
	 * Makes sure the day is a valid day in the current month and year if any of them change
	 */
	private function validateDay(){
		switch ($this->_month){
			case 4: case 6: case 9: case 11:
				if($this->_day > 30){
					$this->_day = 30;
				}
				break;
			case 2:
				if($this->_year % 4 === 0){
					if($this->_day > 29){
						$this->_day = 29;
					}
				}
				else{
					if($this->_day > 28){
						$this->_day = 28;
					}
				}
		}
		$this->updateTimestamp();
		$this->updateFromTimeStamp();
	}
	/**
	 * Recalculates the day of week and day of year based on the cursrent timestamp
	 */
	private function updateDayInfo(){
		$d = getdate($this->_timestamp);
		$this->_weekDay = $d["wday"];
		switch ($this->_weekDay){
			case 0: $this->_weekDayName = "Sunday"; $this->_weekDayShortName = "Sun"; break;
			case 1: $this->_weekDayName = "Monday"; $this->_weekDayShortName = "Mon"; break;
			case 2: $this->_weekDayName = "Tuesday"; $this->_weekDayShortName = "Tue"; break;
			case 3: $this->_weekDayName = "Wednesday"; $this->_weekDayShortName = "Wed"; break;
			case 4: $this->_weekDayName = "Thursday"; $this->_weekDayShortName = "Thu"; break;
			case 5: $this->_weekDayName = "Friday"; $this->_weekDayShortName = "Fri"; break;
			case 6: $this->_weekDayName = "Saturday"; $this->_weekDayShortName = "Sat"; break;
		}
		$this->_yearDay = $d["yday"];
	}
	/**
	 * Updates the month name and short month name
	 */
	private function updateMonthInfo(){
		$d = getdate($this->_timestamp);
		$this->_monthName = $d["month"];
		$this->_shortMonthName = substr($d["month"], 0, 3);
	}
	/**
	 * Recalculates the timestamp based on other information
	 */
	private function updateTimestamp(){
		$this->_timestamp = mktime($this->_hour, $this->_minute, $this->_second, $this->_month, $this->_day, $this->_year);
	}
	/**
	 * Recalculates all private fields based on the timestamp field
	 */
	private function updateFromTimeStamp(){
		if($this->_timestamp < 0){
			$this->_timestamp = -$this->_timestamp;
		}
		$d = getdate($this->_timestamp);
		$this->_day = $d["mday"];
		$this->_hour = $d["hours"];
		$this->_minute = $d["minutes"];
		$this->_month = $d["mon"];
		$this->_monthName = $d["month"];
		$this->_shortMonthName = substr($d["month"], 0, 3);
		$this->_second = $d["seconds"];
		$this->_weekDay = $d["wday"];
		switch ($this->_weekDay){
			case 0: $this->_weekDayName = "Sunday"; $this->_weekDayShortName = "Sun"; break;
			case 1: $this->_weekDayName = "Monday"; $this->_weekDayShortName = "Mon"; break;
			case 2: $this->_weekDayName = "Tuesday"; $this->_weekDayShortName = "Tue"; break;
			case 3: $this->_weekDayName = "Wednesday"; $this->_weekDayShortName = "Wed"; break;
			case 4: $this->_weekDayName = "Thursday"; $this->_weekDayShortName = "Thu"; break;
			case 5: $this->_weekDayName = "Friday"; $this->_weekDayShortName = "Fri"; break;
			case 6: $this->_weekDayName = "Saturday"; $this->_weekDayShortName = "Sat"; break;
		}
		$this->_year = $d["year"];
		$this->_yearDay = $d["yday"];
	}
}