<?php
namespace Core;
/**
 * Utility class to generate random values. Based on the mt_rand() native method
 * @todo Create a set of methods to generate arrays of random elements
 */
final class Random extends Object{
	###########################################################################
	# Private Static Fields
	###########################################################################
	/**
	 * The pattern to be used to match placeholders in a format string passed to Next()
	 * @var string
	 */
	private static $_pattern;
	/**
	 * This will be initialized to the maximum int random number that can be generated by mt_rand(). [This is simply to store the 
	 * return value of mt_getrandmax() for further use in the code]
	 * @var integer
	 */
	private static $_maxIntRand;
	/**
	 * A shuffled array of lowercase characters
	 * @var array
	 */
	private static $_lower; //26
	/**
	 * A shuffled array of uppercase characters
	 * @var array
	 */
	private static $_upper; //26
	/**
	 * A shuffled array of numeric digits
	 * @var array
	 */
	private static $_digits; //10
	/**
	 * A shuffled array of number signs characters
	 * @var array
	 */
	private static $_signs; //2
	/**
	 * A shuffled array of horizontal whitespace characters
	 * @var array
	 */
	private static $_hWhitespace; //2
	/**
	 * A shuffled array of vertical whitespace characters
	 * @var array
	 */
	private static $_vWhitespace; //3
	/**
	 * A shuffled array of witespace characters
	 * @var array
	 */
	private static $_whitespace; //5
	/**
	 * A shuffled array of special characters
	 * @var array
	 */
	private static $_special; //32
	/**
	 * A shuffled array of enclosing characters - Openning Paranthesis
	 * @var array
	 */
	private static $_enclosingOpen; //6
	/**
	 * A shuffled array of enclosing characters - Closing Paranthesis
	 * @var array
	 */
	private static $_enclosingClose; //6
	/**
	 * A shuffled array of alphabitical characters
	 * @var array
	 */
	private static $_alpha; //52
	/**
	 * A shuffled array of alphanumeric characters
	 * @var array
	 */
	private static $_alphaNumeric; //62
	/**
	 * A shuffled array of alphabitical and horizontal whitespace characters
	 * @var array
	 */
	private static $_alphaHWhite; //54
	/**
	 * A shuffled array of alphabitical and vertical whitespace characters
	 * @var array
	 */
	private static $_alphaVWhite; //55
	/**
	 * A shuffled array of alphabitical and whitespace characters
	 * @var array
	 */
	private static $_alphaWhite; //57
	/**
	 * A shuffled array of alphanumeric and horizontal whitespace characters
	 * @var array
	 */
	private static $_alphaNumericHWhite; //64
	/**
	 * A shuffled array of alphanumeric and vertical whitespace characters
	 * @var array
	 */
	private static $_alphaNumericVWhite; //65
	/**
	 * A shuffled array of alphanumeric and whitespace characters
	 * @var array
	 */
	private static $_alphaNumericWhite; //67
	/**
	 * A shuffled array of all printable characters
	 * @var array
	 */
	private static $_printable; //99
	###########################################################################
	# Format Based Random Text Generation
	###########################################################################
	/**
	 * Creates a string of random and static text based on a format string. The format string will be output after translating all format placeholders
	 * into their respective randomly generated text. Random Format Placeholders are short strings that are placed in curly brackets to inform the Next()
	 * method of what type of random text should be placed in their place.
	 * Following are lists of valid random format placeholders based on their syntax:
	 * <ul>
	 * <li><b>Random String Generation</b>: <i>{type} OR {type:length} OR {type:minimumLength-maxLength}</i>
	 * <dl>
	 * 		<dt>{cs}</dt>
	 * 		<dd>
	 * 			String of printable characters. {cs} will generate a single character to replace the placeholder.
	 * 			{cs:3} will generate a 3 characters string, {cs:3-10} will generate a random string between 3 and 10 characters long (randomly)
	 * 		</dd>
	 * 		<dt>{cnh}</dt>
	 * 		<dd>String of alphanumeric or horizontal whitespace characters. Supports {cnh}, {cnh:n}, {cnh:n1-n2}</dd>
	 * 		<dt>{cnv}</dt>
	 * 		<dd>String of alphanumeric or vertical whitespace characters. Supports {cnv}, {cnv:n}, {cnv:n1-n2}</dd>
	 * 		<dt>{cnw}</dt>
	 * 		<dd>String of alphanumeric or whitespace characters. Supports {cnw}, {cnw:n}, {cnw:n1-n2}</dd>
	 * 		<dt>{ch}</dt>
	 * 		<dd>String of alphabitical or horizontal whitespace characters. Supports {ch}, {ch:n}, {ch:n1-n2}</dd>
	 * 		<dt>{cv}</dt>
	 * 		<dd>String of alphabitical or vertical whitespace characters. Supports {cv}, {cv:n}, {cv:n1-n2}</dd>
	 * 		<dt>{cw}</dt>
	 * 		<dd>String of alphabitical or whitespace characters. Supports {cw}, {cw:n}, {cw:n1-n2}</dd>
	 * 		<dt>{cn}</dt>
	 * 		<dd>String of alphanumeric characters. Supports {cn}, {cn:n}, {cn:n1-n2}</dd>
	 * 		<dt>{l}</dt>
	 * 		<dd>String of alphabitical characters. Supports {l}, {l:n}, {l:n1-n2}</dd>
	 * 		<dt>{ll}</dt>
	 * 		<dd>String of lowercase alphabitical characters. Supports {ll}, {ll:n}, {ll:n1-n2}</dd>
	 * 		<dt>{ul}</dt>
	 * 		<dd>String of uppercase alphabitical characters. Supports {ul}, {ul:n}, {ul:n1-n2}</dd>
	 * 		<dt>{p}</dt>
	 * 		<dd>String of special characters. Supports {p}, {p:n}, {p:n1-n2}</dd>
	 * 		<dt>{w}</dt>
	 * 		<dd>String of whitespace characters. Supports {w}, {w:n}, {w:n1-n2}</dd>
	 * 		<dt>{d}</dt>
	 * 		<dd>String of digit characters. Supports {d}, {d:n}, {d:n1-n2}</dd>
	 * </dl>
	 * </li>
	 * <li><b>Fractions Generation Placeholders</b>: <i>{type}</i>
	 * <dl>
	 * 		<dt>{+}</dt>
	 * 		<dd>Generates a random sign character (either + or -)</dd>
	 * 		<dt>{fr}</dt>
	 * 		<dd>Generates a fraction between 0 and 1 exclusive. Supports {fr} and {fr:precision}</dd>
	 * 		<dt>{fri}</dt>
	 * 		<dd>Generates a fraction between 0 and 1 inclusive. Supports {fri} and {fri:precision}</dd>
	 * </dl>
	 * </li>
	 * <li><b>Random Number Generators' Placeholder</b>: <i></i>
	 * <dl>
	 * 		<dt>{i}</dt>
	 * 		<dd>Generates a random integer. Supports {i}, {i:maxValue}, {i:minValue-maxValue}</dd>
	 * 		<dt>{f}</dt>
	 * 		<dd>Generates a random float/real. Supports {f}, {f:maxValue}, {f:minValue-maxValue}</dd>
	 * 		<dt>{n}</dt>
	 * 		<dd>Generates a random number (float or integer). Supports {n}, {n:maxValue}, {n:minValue-maxValue}</dd>
	 * </dl>
	 * </li>
	 * </ul>
	 * @param mixed $format A string-convertable variable that holds the format of the random string to be generated.
	 * @return string
	 */
	public static function Next($format){
		$res = U::ES($format);
		if(!U::NAW($res)){
			$res = self::performReplacements($res, self::getReplacements(self::getMatches($res)));
		}
		return $res;
	}
	/**
	 * Creates an array with randomly generated strings based on a format. The format is the same used for Next().
	 * @param mixed $format The format used to generate the random text.
	 * @param integer $count The number of strings to generate.
	 * @see \Core\Random::Next()
	 * @return string[]
	 */
	public static function NextArray($format, $count = 1){
		Params::InsureInt($count, "count"); Params::InsureGTE($count, 0, "count");
		$f = U::ES($format);
		$res = array();
		$matches = self::getMatches($f);
		for($i = 0; $i < $count; $i++){
			$res[] = self::performReplacements($f, self::getReplacements($matches));
		}
		return $res;
	}
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Static constructor.
	 */
	public static function Initialize(){
		self::$_lower = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		self::$_upper = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		self::$_digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
	 	self::$_signs = array('+', '-');
	 	self::$_hWhitespace = array(' ', "\t");
	 	self::$_vWhitespace = array("\n", "\r", "\f");
	 	self::$_whitespace = array(' ', "\t", "\n", "\r", "\f");
	 	self::$_special = array(
	 			'`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+',
	 			']', '}', '[', '{', '"', "\'", ';', ':', '/', '?', '.', '>', ',', '<', '\\', '|'
	 	);
	 	self::$_enclosingOpen = array('(', '[', '{', '<', "\'", '"');
	 	self::$_enclosingClose = array(')', ']', '}', '>', "\'", '"');
	 	
	 	self::$_alpha = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
	 	);
	 	self::$_alphaNumeric = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
	 	);
	 	self::$_alphaHWhite = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			' ', "\t"
	 	);
	 	self::$_alphaVWhite = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			"\n", "\r", "\f"
	 	);
	 	self::$_alphaWhite = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			' ', "\t", "\n", "\r", "\f"
	 	);
	 	self::$_alphaNumericHWhite = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ' ', "\t"
	 	);
	 	self::$_alphaNumericVWhite = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', "\n", "\r", "\f"
	 	);
	 	self::$_alphaNumericWhite = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ' ', "\t", "\n", "\r", "\f"
	 	);
	 	self::$_printable = array(
	 			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
	 			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
	 			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ' ', "\t", "\n", "\r", "\f",
	 			'`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+',
	 			']', '}', '[', '{', '"', "\'", ';', ':', '/', '?', '.', '>', ',', '<', '\\', '|'
	 	);
	 	self::$_maxIntRand = mt_getrandmax();
	 	self::$_pattern = "/\{(\\S{1,3})(:(\\d+)(-(\\d+))?)?\}/";
	 	shuffle(self::$_alpha);
	 	shuffle(self::$_alphaNumeric);
	 	shuffle(self::$_alphaNumericWhite);
	 	shuffle(self::$_alphaWhite);
	 	shuffle(self::$_digits);
	 	shuffle(self::$_lower);
	 	shuffle(self::$_printable);
	 	shuffle(self::$_signs);
	 	shuffle(self::$_special);
	 	shuffle(self::$_upper);
	 	shuffle(self::$_hWhitespace);
	 	shuffle(self::$_vWhitespace);
	 	shuffle(self::$_whitespace);
	}
	###########################################################################
	# Random String Generation
	###########################################################################
	/**
	 * Returns a random printable string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_printable[mt_rand(0, 98)];
		}
		return $res;
	}
	/**
	 * Returns a random printable string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextPrintableString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_printable[mt_rand(0, 98)];
		}
		return $res;
	}
	/**
	 * Returns a random alphanumeric or horizontal whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaNumericOrHWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alphaNumericHWhite[mt_rand(0, 63)];
		}
		return $res;
	}
	/**
	 * Returns a random alphanumeric or vertical whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaNumericOrVWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alphaNumericVWhite[mt_rand(0, 64)];
		}
		return $res;
	}
	/**
	 * Returns a random alphanumeric or whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaNumericOrWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alphaNumericWhite[mt_rand(0, 66)];
		}
		return $res;
	}
	/**
	 * Returns a random alphabitical or horizontal whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaOrHWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alphaHWhite[mt_rand(0, 53)];
		}
		return $res;
	}
	/**
	 * Returns a random alphabitical or vertical whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaOrVWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alphaVWhite[mt_rand(0, 54)];
		}
		return $res;
	}
	/**
	 * Returns a random alphabitical or whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaOrWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alphaWhite[mt_rand(0, 56)];
		}
		return $res;
	}
	/**
	 * Returns a random alphanumeric string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaNumericString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alphaNumeric[mt_rand(0, 61)];
		}
		return $res;
	}
	/**
	 * Returns a random alphabitical string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextAlphaString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_alpha[mt_rand(0, 51)];
		}
		return $res;
	}
	/**
	 * Returns a random special string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextSpecialString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_special[mt_rand(0, 31)];
		}
		return $res;
	}
	/**
	 * Returns a random horizontal whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextHWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_hWhitespace[mt_rand(0, 1)];
		}
		return $res;
	}
	/**
	 * Returns a random vertical whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextVWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_vWhitespace[mt_rand(0, 2)];
		}
		return $res;
	}
	/**
	 * Returns a random whitespace string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextWhitespaceString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_whitespace[mt_rand(0, 4)];
		}
		return $res;
	}
	/**
	 * Returns a random number sign string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextSignString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_signs[mt_rand(0,1)];
		}
		return $res;
	}
	/**
	 * Returns a random digit string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextDigitString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_digits[mt_rand(0, 9)];
		}
		return $res;
	}
	/**
	 * Returns a random uppercase string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextUpperString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_upper[mt_rand(0, 25)];
		}
		return $res;
	}
	/**
	 * Returns a random lowercase string of the specified length
	 * @param integer $length The length of the generated string
	 * @throws InvalidParameterTypeException If the length is not an integer
	 * @throws InvalidParameterValueException If the length is not greater than 0
	 * @return string
	 */
	public static function NextLowerString($length = 1){
		Params::InsureInt($length, "length"); Params::InsureGT($length, 0, "length");
		$res = "";
		for($i=0; $i<$length; $i++){
			$res .= self::$_lower[mt_rand(0, 25)];
		}
		return $res;
	}
	###########################################################################
	# Random Character Generation
	###########################################################################
	/**
	 * Returns a random printable character
	 * @return string
	 */
	public static function NextChar(){
		return self::$_printable[mt_rand(0, 98)];
	}
	/**
	 * Returns a random printable character
	 * @return string
	 */
	public static function NextPrintableChar(){
		return self::$_printable[mt_rand(0, 89)];
	}
	/**
	 * Returns a random alphanumeric or horizontal whitespace character
	 * @return string
	 */
	public static function NextAlphaNumericOrHWhitespaceChar(){
		return self::$_alphaNumericHWhite[mt_rand(0, 63)];
	}
	/**
	 * Returns a random alphanumeric or vertical whitespace character
	 * @return string
	 */
	public static function NextAlphaNumericOrVWhitespaceChar(){
		return self::$_alphaNumericVWhite[mt_rand(0, 64)];
	}
	/**
	 * Returns a random alphanumeric or whitespace character
	 * @return string
	 */
	public static function NextAlphaNumericOrWhitespaceChar(){
		return self::$_alphaNumericWhite[mt_rand(0, 66)];
	}
	/**
	 * Returns a random alphabitical or horizontal whitespace character
	 * @return string
	 */
	public static function NextAlphaOrHWhitespaceChar(){
		return self::$_alphaHWhite[mt_rand(0, 53)];
	}
	/**
	 * Returns a random alphabitical or vertical whitespace character
	 * @return string
	 */
	public static function NextAlphaOrVWhitespaceChar(){
		return self::$_alphaVWhite[mt_rand(0, 54)];
	}
	/**
	 * Returns a random alphabitical or whitespace character
	 * @return string
	 */
	public static function NextAlphaOrWhitespaceChar(){
		return self::$_alphaWhite[mt_rand(0, 56)];
	}
	/**
	 * Returns a random alphanumeric character
	 * @return string
	 */
	public static function NextAlphaNumericChar(){
		return self::$_alphaNumeric[mt_rand(0, 61)];
	}
	/**
	 * Returns a random alphabitical character
	 * @return string
	 */
	public static function NextAlphaChar(){
		return self::$_alpha[mt_rand(0, 51)];
	}
	/**
	 * Returns a random enclosing character (parnthesis) character
	 * @return string
	 */
	public static function NextEnclosingOpenerChar(){
		return self::$_enclosingOpen[mt_rand(0, 5)];
	}
	/**
	 * Returns a random special character
	 * @return string
	 */
	public static function NextSpecialChar(){
		return self::$_special[mt_rand(0, 31)];
	}
	/**
	 * Returns a random horizontal whitespace character
	 * @return string
	 */
	public static function NextHWhitespaceChar(){
		return self::$_hWhitespace[mt_rand(0, 1)];
	}
	/**
	 * Returns a random horizontal whitespace character
	 * @return string
	 */
	public static function NextVWhitespaceChar(){
		return self::$_vWhitespace[mt_rand(0, 2)];
	}
	/**
	 * Returns a random whitespace character
	 * @return string
	 */
	public static function NextWhitespaceChar(){
		return self::$_whitespace[mt_rand(0, 4)];
	}
	/**
	 * Returns a random number sign character
	 * @return string
	 */
	public static function NextSignChar(){
		return self::$_signs[mt_rand(0,1)];
	}
	/**
	 * Returns a random digit character
	 * @return string
	 */
	public static function NextDigitChar(){
		return self::$_digits[mt_rand(0, 9)];
	}
	/**
	 * Returns a random uppercase character
	 * @return string
	 */
	public static function NextUpperChar(){
		return self::$_upper[mt_rand(0, 25)];
	}
	/**
	 * Returns a random lowercase character
	 * @return string
	 */
	public static function NextLowerChar(){
		return self::$_lower[mt_rand(0, 25)];
	}
	###########################################################################
	# Random Number Generation
	###########################################################################
	/**
	 * Returns a random integer number netween the supplied values including the supplied values themselves.
	 * The order at which min and max are supplied is not important, they will be sorted out
	 * @param integer $min Optional minimum value to be returned [Defaults to 0]
	 * @param integer $max Optional maximum value to be returned [Defaults to mt_getrandmax()]
	 * @throws InvalidParameterTypeException If the value of min or max is not an integer
	 * @return integer
	 */
	public static function NextInt($min = null, $max = null){
		$mn = $min === null ? 0 : $min;
		$mx = $max === null ? self::$_maxIntRand : $max;
		Params::InsureInt($mn, "min"); Params::InsureInt($mx, "max");
		if($mn > $mx){
			$t = $mn; $mn = $mx; $mx = $t;
		}
		return mt_rand($mn, $mx);
	}
	/**
	 * Returns a new random floating point number between 0 and 1 exclusive.
	 * @return float
	 */
	public static function NextFraction(){
		return  (float)(1 / (float)mt_rand(2));
	}
	/**
	 * Returns a new random floating point number between 0 and 1 inclusive.
	 * @return float
	 */
	public static function NextFractionInclusive(){
		$rnd = mt_rand();
		if($rnd === 0){
			return 0.0;
		}
		elseif($rnd === self::$_maxIntRand()){
			return 1.0;
		}
		else{
			return (float)(1 / (float)$rnd);
		}
	}
	/**
	 * Returns a floating point random number between min and max inclusive. The order at which min and max are provided does not matter, they'll be sorted out.
	 * @param number $min The minimum value to be generated
	 * @param number $max The maximum value to be generated
	 * @throws InvalidParameterTypeException If the value of min or max is not a number
	 * @return float
	 */
	public static function NextFloat($min = null, $max = null){
		$mn = $min === null ? 0.0 : $min;
		$mx = $max === null ? (float)self::$_maxIntRand : $max;
		Params::InsureNumeric($mn, "min"); Params::InsureNumeric($mx, "max");
		if($mn > $mx){
			$t = $mn; $mn = $mx; $mx = $t;
		}
		return $mn + (self::NextFractionInclusive() * ($mx - $mn));
	}
	###########################################################################
	# Random Interaction
	###########################################################################
	/**
	 * Shuffles an array, a string or a Traversable object. If a Traversable is supplied, the return will be an array of the keys and values of the traversable object
	 * @param array|string|\Traversable $elements the elements that needs to be shuffled
	 * @throws InvalidParameterTypeException If the supplied parameter is not of a valid type (array, string or a Traversable object)
	 * @return array|string
	 */
	public static function Shuffle($elements){
		if(is_array($elements) || $elements instanceof \Traversable ){
			$res = array();
			foreach ($elements as $key => $value){
				$res[$key] = $value;
			}
			shuffle($res);
			return $res;
		}
		elseif(is_string($elements)){
			return str_shuffle($elements);
		}
		else{
			throw new InvalidParameterTypeException("elements", __METHOD__, "array, string or a Traversable object");
		}
	}
	/**
	 * Picks an item randomly from a string, an array or an ArrayAccess object
	 * @param array|string|\ArrayAccess $elements The elements to pick randomly from
	 * @throws InvalidParameterTypeException If the elements provided was not of a valid type (array, string or ArrayAccess object)
	 * @return mixed
	 */
	public static function Pick($elements){
		if(is_array($elements) || $elements instanceof \ArrayAccess){
			return $elements[self::NextInt(0, count($elements) - 1)];
		}
		elseif(is_string($elements)){
			return $elements[self::NextInt(0, strlen($elements))];
		}
		else {
			throw new InvalidParameterTypeException("elements", __METHOD__, "array, string or ArrayAccess object");
		}
	}
	###########################################################################
	# Private Internal Methods
	###########################################################################
	/**
	 * Returns an array of information about matches of random generation placeholders in a format.
	 * @param string $format The frormat to get matches for
	 * @return array
	 */
	private static function getMatches($format){
		$matches = array();
		preg_match_all(self::$_pattern, $format, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
		return $matches;
	}
	/**
	 * Performs a replacment on a format string based on an array of replacement instructions. Each member of the replacements array should in turn be an array
	 * of three members, namely:
	 * <ul>
	 * 	<li>$replacements[i][0] = the start position of the replacement to be done relative to the format string</li>
	 * 	<li>$replacements[i][1] = the length of the string to be replaced in the format string</li>
	 * 	<li>$replacements[i][2] = the string to use as replacement, usually a randomly generated text</li>
	 * </ul>
	 * @param string $format The format to use to perform replacements on
	 * @param array $replacements An array of replacements with array members each with three members, start position, length and replacement string
	 * @return string
	 */
	private static function performReplacements($format, array $replacements){
		$start = 0; $t = "";
		foreach ($replacements as $replacement){
			$t .= substr($format, $start, $replacement[0] - $start) . $replacement[2];
			$start = $replacement[0] + $replacement[1];
		}
		$t .= substr($format, $start);
		return $t;
	}
	/**
	 * Returns an array of replacement instructions to be performed based on a set of matches of random generation placeholders
	 * @param array $matches the matches array as returned by preg_match_all()
	 * @return array
	 */
	private static function getReplacements(array $matches){
		$replacements = array();
		foreach ($matches as $match){
			$matchStart = $match[0][1];
			$matchLength = strlen($match[0][0]);
			$replacement = "";
			$cmd = $match[1][0];
			$matchCount = count($match);
			switch ($cmd){
				case "+": $replacement = self::$_signs[mt_rand(0, 1)]; break;
				case "fr":
				case "fri":
					$replacement = $cmd == "fri" ? self::NextFractionInclusive() : (float)(1 / (float)mt_rand(2));
					if($matchCount == 2){$replacement = "{$replacement}";}
					elseif($matchCount >= 4){$replacement = sprintf("%.{$match[3][0]}f", $replacement);}
					break;
				case "i":
				case "f":
				case "n":
					$min = $matchCount == 2 || $matchCount == 4 ? null : (float)$match[3][0];
					$max = $matchCount == 2 ? null : ($matchCount == 4 ? (float)$match[3][0] : (float)$match[5][0]);
					if($cmd == "i"){$replacement = self::NextInt((integer)$min, (integer)$max);}
					elseif($cmd == "f"){$replacement = self::NextFloat($min, $max);}
					else{
						$s = mt_rand(0, 1);
						$replacement = $s ? self::NextInt($min, $max) : self::NextFloat($min, $max);
					}
					$replacement = "{$replacement}";
					break;
				default:
					$source = array();
					$sourceLength = 2;
					$length = 1;
					switch ($cmd){
						case "cs" : $source = self::$_printable; $sourceLength = 99; break;
						case "cnw" : $source = self::$_alphaNumericWhite; $sourceLength = 67; break;
						case "cnh" : $source = self::$_alphaNumericHWhite; $sourceLength = 64; break;
						case "cnv" : $source = self::$_alphaNumericVWhite; $sourceLength = 65; break;
						case "cw" : $source = self::$_alphaWhite; $sourceLength = 57; break;
						case "ch" : $source = self::$_alphaHWhite; $sourceLength = 54; break;
						case "cv" : $source = self::$_alphaVWhite; $sourceLength = 55; break;
						case "cn" : $source = self::$_alphaNumeric; $sourceLength = 62; break;
						case "l" : $source = self::$_alpha; $sourceLength = 52; break;
						case "ul" : $source = self::$_upper; $sourceLength = 26; break;
						case "ll" : $source = self::$_lower; $sourceLength = 26; break;
						case "p" : $source = self::$_special; $sourceLength = 32; break;
						case "w" : $source = self::$_whitespace; $sourceLength = 5; break;
						case "wh" : $source = self::$_hWhitespace; $sourceLength = 2; break;
						case "wv" : $source = self::$_vWhitespace; $sourceLength = 3; break;
						case "d" : $source = self::$_digits; $sourceLength = 10; break;
					}
					switch($matchCount){
						case 4: $length = (integer)$match[3][0]; break;
						case 6: $length = mt_rand((integer)$match[3][0], (integer)$match[5][0]); break;
					}
					for($i = 0; $i < $length; $i++){
						$replacement .= $source[mt_rand(0, $sourceLength - 1)];
					}
					break;
			}
			$replacements[] = array($matchStart, $matchLength, $replacement);
		}
		return $replacements;
	}
}
Random::Initialize();