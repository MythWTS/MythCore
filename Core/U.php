<?php
namespace Core;
/**
 * MythCore Framework's Utility Class.
 * This class is mainly used in implementing the framework and is available for its functionality. It is to be the only class with abbriviated method names
 * and ambigious naming conventions. The main reason for this class is to group common php functions and some commonely used tasks like checking if a var is empty.
 * Users of the framework can use it if they so please but they can also use the clearer versions of these methods, which is strongly recommended.
 */
final class U extends Object{
	###########################################################################
	# Public Static Fields
	###########################################################################
	/**
	 * The tab character used for indentation across the framework. Changing it will affect any outputing from that point onward.
	 * @var string
	 */
	public static $TAB = "\t";
	/**
	 * New line character used in the framework output.
	 * @var string
	 */
	public static $NL = "\n";
	/**
	 * The string used to identify directory separators.
	 * @var string
	 */
	public static $DS = DIRECTORY_SEPARATOR; 
	/**
	 * Quote character to be used for html output.
	 * @var string
	 */
	public static $Q = '"';
	###########################################################################
	# Private Constructor
	###########################################################################
	/** private constructor to forbid initializing objects */
	private function __construct(){}
	###########################################################################
	# Extraction Methods
	###########################################################################
	/**
	 * Extract String from mixed variable. Depending on the variable, tries to return a string representation, mostly suitable for use in the framework.
	 * <ul>
	 * 	<li>If a scalar, return the scalar enclosed in a string.</li>
	 * 	<li>If IObject, calls the __toString method.</li>
	 * 	<li>If object that has __toString() or ToString() method, calls one of them (__toString first).</li>
	 * 	<li>If array, goes through the elements one by one and.</li>
	 * 	<li>Tries to obtain a string from it (any array elements will be recursively expanded with an indent string suitable to the level of depth).</li>
	 * 	<li>Adds the string to the result as a new line.</li>
	 * </ul>
	 * @param mixed $var The variable to extract a string out of
	 * @return string
	 */
	public static function ES($var){
		if($var === null || $var === '' || (is_array($var) && count($var) == 0)){return '';}
		else if(is_scalar($var)){return "$var";}
		else if(is_a($var, 'Core\IObject')){return $var->__toString();}
		else if(is_object($var)){
			if(method_exists($var, '__toString')){return $var->__toString();}
			else if(method_exists($var, 'ToString')){return $var->ToString();}
		}
		else if(is_array($var)){
			$res = '';
			foreach ($var as $item) {
				if(is_array($item)){
					$temp = self::ES($item);
					$res .= self::Indent($temp, 1);
				}
				else{
					$res .= self::ES($item) . self::$NL;
				}
			}
			return $res;
		}
		else{return '';}
	}
	/**
	 * Extracts a boolean value out of any mixed var and always return a true or false result
	 * @param mixed $var The variable to extract from
	 * @return boolean
	 */
	public static function EB($var){return $var?true:false;}
	/**
	 * Converts a mixed variable to string and then replaces html special characters with entities
	 * @param mixed $var The variable to encode
	 * @return string
	 */
	public static function ENC($var){return htmlspecialchars(self::ES($var));}
	# Path Extraction Methods
	###########################################################################
	/**
	 * Ensures there's a directory separator at the end of the path
	 * @param string $path - the original path string
	 * @return string
	 */
	public static function CleanPath($path){return rtrim($path, self::$DS).self::$DS;}
	/**
	 * Ensures there's a directory separator at the end of the path
	 * @param string $path The original path string
	 * @return string
	 */
	public static function CP($path){return rtrim($path, self::$DS).self::$DS;}
	/**
	 * Returns a $_SERVER['DOCUMENT_ROOT'] with a directory separator at the end if the script is not run in cli mode
	 * @return string
	 */
	public static function DocRoot(){
		if(php_sapi_name() == "cli"){
			return rtrim(dirname(dirname(__FILE__)), self::$DS) . self::$DS;
		}
		else{
			return rtrim($_SERVER['DOCUMENT_ROOT'], self::$DS) . self::$DS;
		}
	}
	###########################################################################
	# Content Checks' Methods
	###########################################################################
	/**
	 * Checks to see if a variable is null or an empty string (if it's not set by the user)
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function NA($var){return $var === null || $var === '';}
	/**
	 * Checks to see if a variable is null or an empty string/array
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function NAE($var){return $var === null || $var === '' || (is_array($var) && count($var) == 0);}
	/**
	 * Checks to see if the variable is null, empty string or all whitespace characters (not available or whitespaces)
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function NAW($var){return $var === null || $var === '' || trim($var) === '';}
	/**
	 * Returns whether an integer flags value has the specified flag or not
	 * @param integer $value The value to check for the existance of a flag
	 * @param integer $flag The flag to check for
	 * @return boolean
	 */
	public static function HF($value, $flag){return (($value & $flag) === 0?false:true);}
	/**
	 * Returns whether an integer flags value has the specified flag or not
	 * @param integer $value The value to check for the existance of a flag
	 * @param integer $flag The flag to check for
	 * @return boolean
	 */
	public static function HasFlag($value, $flag){return (($value & $flag) === 0?false:true);}
	###########################################################################
	# Type Checks' Methods
	###########################################################################
	/**
	 * Checks to see if a variable $obj is an object and an instance of the class $className or one of its child classes
	 * @param mixed $obj The object to check
	 * @param string $className The class name to check against
	 * @return boolean
	 */
	public static function IsA($obj, $className){return is_object($obj) && is_a($obj, $className);}
	/**
	 * Checks if $var is a php string
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function IsString($var){return is_string($var);}
	/**
	 * Checks if $var is a php numeric value
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function IsN($var){return is_numeric($var);}
	/**
	 * Checks if $var is not a php numeric value
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function IsNAN($var){return is_nan($var);}
	/**
	 * Checks if $var is a php integer
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function IsInt($var){return is_int($var);}
	/**
	 * Checks if $var is a php array
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function IsArray($var){return is_array($var);}
	/**
	 * Checks if $var is a php object (including but NOT LIMITED TO children of the Object class)
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function IsObj($var){return is_object($var);}
	/**
	 * Checks if $var is a php float value
	 * @param mixed $var The variable to check
	 * @return boolean
	 */
	public static function IsFloat($var){return is_float($var);}
	###########################################################################
	# File System Check Methods
	###########################################################################
	/**
	 * Checks if the file $fileName exists and is readable
	 * @param string $filename The name of/path to the file to check
	 * @return boolean
	 */
	public static function IsReadable($filename){return is_readable($filename);}
	/**
	 * Checks if the file $fileName exists and is writeable
	 * @param string $filename The name of/path to the file to check
	 * @return boolean
	 */
	public static function IsWriteable($filename){return is_writable($filename);}
	###########################################################################
	# Generation Methods
	###########################################################################
	/**
	 * Returns $n number of tab/indentation characters as set in this class's $TAB public static property
	 * @param integer $n The number of tabs to return. Defaults to 1
	 * @return string
	 */
	public static function TAB($n=1){return str_repeat(self::$TAB, $n);}
	/**
	 * Returns $n newline characters/strings as set in the $NL public static property of this class
	 * @param integer $n The number of new-line characters to have in the returned string. Defaults to 1.
	 * @return string
	 */
	public static function NL($n=1){return str_repeat(self::$NL, $n);}
	/**
	 * Returns a string containing $count repetitions of the string $str
	 * @param string $str The string to repeat
	 * @param integer $count The number of times to repeat $str
	 * @return string
	 */
	public static function Repeat($str, $count){return str_repeat($str, $count);}
	/**
	 * Returns a string resulting from replacing each occurance of $toBeReplaced with $replacement in the input string $within
	 * @param string $toBeReplaced The string to be searched for and replaced
	 * @param string $replacement The replacement string
	 * @param string $within The string to be searched
	 * @return string
	 */
	public static function Replace($toBeReplaced, $replacement, $within){return str_replace($toBeReplaced, $replacement, $within);}
	/**
	 * Returns an array resulting from splitting the string $string at each occurance of $delimiter
	 * @param string $delimiter The delimiter to use for separating the string
	 * @param string $string The string to be exploded
	 * @return array
	 */
	public static function Explode($delimiter, $string){return explode($delimiter, $string);}
	/**
	 * Returns a string resulting from gluing the array of strings $pieces using $glue in between each array element
	 * @param string $glue The string to use to "glue" the members of the array together
	 * @param array $pieces An array containing string pieces of the final string
	 * @return string
	 */
	public static function Implode($glue, array $pieces){return implode($glue, $pieces);}
	/**
	 * Returns an indented version of $text. $text can be an array of strings or a string. If it is an array, it is converted to a string first using U::ES()
	 * @param mixed $text The text to indent. Can be an array of strings or a string.
	 * @param integer $indent The number of levels to indent the text
	 * @return string
	 */
	public static function Indent($text, $indent){
		$arr = array();
		if(is_array($text)){$arr = self::ES($text);}
		else{$arr = explode(U::$NL, $text);}
		$res = '';
		foreach ($arr as $line) {
			$res .= str_repeat(self::$TAB, $indent) . $line . self::$NL;
		}
		return rtrim($res, self::$NL);
	}
}