<?php
namespace Core;
/**
 * Helper class to aid in parsing formatting options into easier to manipulate and process objects. The main method of this class
 * is the static Parse() method which is supposed to be used by users to parse a formatting options string and return an array
 * of parsed options with their parameters from that string
 * @property string $Name The name of the parsed option
 * @property string[] $Parameters An array of parameters to be passed to the option
 */
final class FormattingOption extends Object{
	###########################################################################
	# Private Static Readonly Fields
	###########################################################################
	/**
	 * The regex pattern to parse a whole string of formatting options within a formatting placeholder/specifier. This pattern will identify whole options.
	 * For example if the string passed is "option1(1, something, `string`); option2(Something else, something); option3;"
	 * the pattern will match 3 options and return 3 option strings
	 * @var string
	 */
	private static $_patternOption = "/([_a-zA-Z][_a-zA-Z\-0-9]*)\s*(?:\(((?:[^\(\)`\;]|`(?:[^`\\\\]|\\\\`)*?`)*)\))?\s*\;{1}/";
	/**
	 * Regex pattern to identify the different parts of an option such as name, parameters etc.
	 * @var string
	 */
	private static $_patternParams = "/([^\,`\s]+|`(?:[^`\\\\]|\\\\`)*?`)\,?/";
	/**
	 * The name of the option
	 * @var string
	 */
	###########################################################################
	# Private Data Fields
	###########################################################################
	private $_name;
	/**
	 * An array of the parameters passed to the option
	 * @var string[]
	 */
	private $_params;
	/**
	 * Private constructor that is used by parsing methods
	 * @param string $optionName The name of the option
	 * @param string[] $parameters A list of parameters that were passed to the option
	 */
	###########################################################################
	# Private Constructor
	###########################################################################
	private function __construct($optionName, array $parameters = null){
		$this->_name = $optionName;
		$this->_params = $parameters ?: array();
	}
	###########################################################################
	# Parsing and Factory Methods
	###########################################################################
	/**
	 * Takes a formatting placeholder's options part and parses it into an array of FormattingOption array.
	 * Option strings should be formatted in the form: option1-name[([param1, [param2], ...])]; option2 ...
	 * @param string $stringToParse The options part of a formatting placeholder. This should be formatted as option1-name[([param1, [param2], ...])];
	 * @throws FormatException If the string supplied as the options string caused an error
	 * @return \Core\FormattingOption[]
	 * @todo Add a way to find syntax errors and report them through exceptions
	 */
	public static function Parse($stringToParse){
		$res = array();
		$string = U::ES($stringToParse);
		$matches = array();
		if(preg_match_all(self::$_patternOption, $string, $matches, PREG_SET_ORDER) === false){
			throw new FormatException("An error occured while parsing formatting placeholder options");
		}
		elseif(count($matches)!=0){
			foreach ($matches as $match){
				$res[] = new FormattingOption($match[1], self::parseParams(isset($match[2])?$match[2]:''));
			}
		}
		return $res;
	}
	/**
	 * Takes a string representing parameters of a formatting option and returns an array of the parameter values as strings
	 * @param string $paramsString The string containing the parameters to be parsed
	 * @throws FormatException If the format of the parameters was not valid
	 * @return string[]
	 */
	private static function parseParams($paramsString){
		$res = array();
		$matches = array();
		if(preg_match_all(self::$_patternParams, $paramsString, $matches, PREG_SET_ORDER) === false){
			throw new FormatException("An error occured parsing parameters for a formatting placeholder");
		}
		elseif(count($matches) != 0){
			foreach ($matches as $match){
				$res[] = trim($match[1], '`');
			}
		}
		elseif(count($matches) == 0 && !U::NAW($paramsString)){
			throw new FormatException("Parameters for formatting option has an unidentified pattern");
		}
		return $res;
	}
	###########################################################################
	# Public Properties Accessors
	###########################################################################
	/**
	 * Returns the name of the formatting option
	 * @return string
	 */
	public function Name(){
		return $this->_name;
	}
	/**
	 * Returns an array of parameters passed to the option if any exists or an empty array if none
	 * @return \Core\string[]
	 */
	public function Parameters(){
		return $this->_params;
	}
}