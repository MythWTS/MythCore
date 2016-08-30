<?php
namespace Core;
/**
 * A utility static class for string manipulation methods.This class is mainly a wrapper around php functions
 * It adds support to exceptions and type checking whenever possible. Most of the methods require an input string that can actually be
 * any type that can be converted to a string either using a __toString(), ToString() method or via casting and in the case of arrays, via joining
 * @todo Add utility methods to verify character classes such as hex-digit, octal digit, decimal digit, float digits ... etc
 */
final class Strings extends Object{
	use TStaticFormatConsumer;
	###########################################################################
	# Constants
	###########################################################################
	/**
	 * The new line character
	 * @var string
	 */
	const NewLine = "\n";
	/**
	 * The tab character
	 * @var string
	 */
	const Tab = "\t";
	/**
	 * The slash character
	 * @var string
	 */
	const Slash = "\\";
	/**
	 * The carriage return character
	 * @var string
	 */
	const CarriageReturn = "\r";
	/**
	 * The vertical tab character
	 * @var string
	 */
	const VerticalTab = "\x0B";
	/**
	 * The NUL-byte
	 * @var string
	 */
	const NulByte = "\0";
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Private constructor to disallow creating instances
	 */
	private function __construct(){}
	###########################################################################
	# Quoting
	###########################################################################
	/**
	 * Quote string with slashes. Returns a string with backslashes before characters that need to be escaped.
	 * These characters are single quote ('), double quote ("), backslash (\) and NUL (the NULL byte).
	 * The PHP directive magic_quotes_gpc was on by default before PHP 5.4, and it essentially ran addslashes() on all GET, POST, and COOKIE data.
	 * Do not use addslashes() on strings that have already been escaped with magic_quotes_gpc as you'll then do double escaping.
	 * The function get_magic_quotes_gpc() may come in handy for checking this.
	 * @param mixed $string string or string convertable value to be quoted with slashes.
	 * @return string
	 */
	public static function AddSlashes($string){
		return addslashes(U::ES($string));
	}
	/**
	 * Un-quotes a quoted string. An example use of stripslashes() is when the PHP directive magic_quotes_gpc is on 
	 * (it was on by default before PHP 5.4), and you aren't inserting this data into a place (such as a database) that requires escaping.
	 * For example, if you're simply outputting data straight from an HTML form.
	 * @param mixed $string  string or string convertable value to be quoted with slashes.
	 * @return string
	 */
	public static function StripSlashes($string){
		return stripslashes(U::ES($string));
	}
	/**
	 * Returns a string with backslashes before characters that are listed in $charactersList parameter.
	 * @param mixed $string The string to be escaped. A string will be extracted if value supplied is not a string
	 * @param mixed $charactersList A list of characters to be escaped. If charlist contains characters \n, \r etc., they are converted in C-like style, while other non-alphanumeric characters with ASCII codes lower than 32 and higher than 126 converted to octal representation.
	 * @return string
	 */
	public static function AddCSlashes($string, $charactersList){
		return addcslashes(U::ES($string), U::ES($charactersList));
	}
	/**
	 * Returns a string with backslashes stripped off. Recognizes C-like \n, \r ..., octal and hexadecimal representation.
	 * @param mixed $string The string to be unescaped.
	 * @return string
	 */
	public static function StripCSlashes($string){
		return stripcslashes(U::ES($string));
	}
	###########################################################################
	# Trimming and Padding
	###########################################################################
	/**
	 * Strip whitespace (or other characters) from the beginning and end of a string. Without the second parameter, trim() will strip these characters:
	 * " " (ASCII 32 (0x20)), an ordinary space.
	 * "\t" (ASCII 9 (0x09)), a tab.
	 * "\n" (ASCII 10 (0x0A)), a new line (line feed).
	 * "\r" (ASCII 13 (0x0D)), a carriage return.
	 * "\0" (ASCII 0 (0x00)), the NUL-byte.
	 * "\x0B" (ASCII 11 (0x0B)), a vertical tab.
	 * @param mixed $string The string that will be trimmed. It will be extracted if something other than string is passed
	 * @param mixed $mask Optionally, the stripped characters can also be specified using the $mask parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.
	 * @return string
	 */
	public static function Trim($string, $mask = " \t\n\r\0\x0B"){
		return trim(U::ES($string), U::ES($mask));
	}
	/**
	 * Strip whitespace (or other characters) from the end of a string
	 * @param mixed $string The string that will be trimmed. It will be extracted if something other than string is passed
	 * @param mixed $mask Optionally, the stripped characters can also be specified using the $mask parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.
	 * @return string
	 * @see Strings::Trim()
	 */
	public static function RTrim($string, $mask = " \t\n\r\0\x0B"){
		return rtrim(U::ES($string), U::ES($mask));
	}
	/**
	 * Strip whitespace (or other characters) from the beginning of a string
	 * @param mixed $string The string that will be trimmed. It will be extracted if something other than string is passed
	 * @param mixed $mask Optionally, the stripped characters can also be specified using the $mask parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.
	 * @return string
	 * @see Strings::Trim()
	 */
	public static function LTrim($string, $mask = " \t\n\r\0\x0B"){
		return ltrim(U::ES($string), U::ES($mask));
	}
	/**
	 * Pads the specified amount of padding characters/strings to the end of the string
	 * @param mixed $string The string to be padded
	 * @param integer $count The number of padding characters/strings to be added
	 * @param mixed $padding The padding character/string
	 * @throws InvalidParameterTypeException if the count supplied is not an integer
	 * @throws InvalidParameterValueException if the count supplied is less than 0
	 * @return string
	 */
	public static function Pad($string, $count = 1, $padding = " "){
		if(!is_int($count)){
			throw new InvalidParameterTypeException('count', "Strings::Pad()", "integer");
		}
		elseif ($count < 0){
			throw new InvalidParameterValueException("count", "Strings::Pad()", "> 0");
		}
		return U::ES($string) . str_repeat(U::ES($padding), $count);
	}
	/**
	 * Pad a string to a certain length with another string
	 * @param string $string The input string.
	 * @param integer $length The length to which to pad the string
	 * @param string $padding The padding character. [DEFAULT " "]
	 * @param PaddingSide $side Whether to add padding to the right, left side of the string or both
	 * @throws InvalidParameterTypeException if length is not an integer
	 * @return string
	 */
	public static function PadTo($string, $length, $padding = ' ', PaddingSide $side = null){
		if(!is_int($length)){
			throw new InvalidParameterTypeException("length", "Strings::PadTo()", "integer");
		}
		$paddingSide = $side ? ($side == PaddingSide::$Left ? STR_PAD_LEFT : ($side == PaddingSide::$Right ? STR_PAD_RIGHT : STR_PAD_BOTH)) : STR_PAD_RIGHT;
		return str_pad(U::ES($string), $length, U::ES($padding), $paddingSide);
	}
	###########################################################################
	# Splitting
	###########################################################################
	/**
	 * Chunks the string into chunks of equal size (except the last one sometimes) and returns an array of those chunks
	 * @param mixed $string The string to be chunked
	 * @param integer $chunkLength The size of each chunk
	 * @throws InvalidParameterValueException
	 * @return string[]
	 */
	public static function Chunk($string, $chunkLength = 1){
		if(!is_int($chunkLength)){
			throw new InvalidParameterTypeException("chunkLength", "Strings::Chunk()", "integer");
		}
		elseif ($chunkLength <= 0){
			throw new InvalidParameterValueException("chunkLength", "Strings::Chunk()", " > 0");
		}
		$s = U::ES($string);
		$res = array();
		for ($i=0; $i<strlen($s); $i+= $chunkLength){
			$res[] = substr($s, $i, $chunkLength);
		}
		return $res;
	}
	/**
	 * Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter. Same as Explode().
	 * @param mixed $string The input string. 
	 * @param mixed $delimiter The boundary string. 
	 * @param integer $limit If limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.
	 * If the limit parameter is negative, all components except the last -limit are returned.
	 * @see Strings::Join()
	 * @throws InvalidParameterTypeException
	 * @return string[]
	 */
	public static function Split($string, $delimiter, $limit = PHP_INT_MAX){
		if (!is_int($limit)){
			throw new InvalidParameterTypeException("limit", "Strings::Split()", "integer");
		}
		return explode(U::ES($delimiter), U::ES($string), $limit);
	}
	/**
	 * Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter. Same as Explode().
	 * @param mixed $string The input string. 
	 * @param mixed $delimiter The boundary string. 
	 * @param integer $limit If limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.
	 * If the limit parameter is negative, all components except the last -limit are returned.
	 * @see Strings::Join()
	 * @throws InvalidParameterTypeException
	 * @return string[]
	 */
	public static function Explode($string, $delimiter, $limit = PHP_INT_MAX){
		if (!is_int($limit)){
			throw new InvalidParameterTypeException("limit", "Strings::Explode()", "integer");
		}
		return explode(U::ES($delimiter), U::ES($string), $limit);
	}
	/**
	 * Join array elements with a glue string. Same as Implode()
	 * @param array $parts The array of strings to implode.
	 * @param string $glue The glue string to use in between joined parts in the resulting string. Defaults to an empty string.
	 * @return string
	 * @see Strings::Split()
	 */
	public static function Join(array $parts, $glue = ""){
		$res = "";
		$g = U::ES($glue);
		foreach ($parts as $part){
			$res .= U::ES($part) . $g;
		}
		$res = substr($res, 0, strlen($res) - strlen($g));
		return $res;
	}
	/**
	 * Join array elements with a glue string. Same as Join()
	 * @param array $parts The array of strings to implode.
	 * @param string $glue The glue string to use in between joined parts in the resulting string. Defaults to an empty string.
	 * @return string
	 * @see Strings::Split()
	 */
	public static function Implode(array $parts, $glue = ""){
		$res = "";
		$g = U::ES($glue);
		foreach ($parts as $part){
			$res .= U::ES($part) . $g;
		}
		$res = substr($res, 0, strlen($res) - strlen($g));
		return $res;
	}
	###########################################################################
	# Hashing & Encoding
	###########################################################################
	/**
	 * Calculate the md5 hash of a string.
	 * @param string $string The string to calculate the hash for.
	 * @param boolean $rawOutput If the optional raw_output is set to TRUE, then the md5 digest is instead returned in raw binary format with a length of 16.
	 * @return string
	 */
	public static function MD5($string, $rawOutput = false){
		return md5(U::ES($string), U::EB($rawOutput));
	}
	/**
	 * Calculates the md5 hash of a given file
	 * @param string $fileName The name of the file to calculate the hash for
	 * @param boolean $rawOutput When TRUE, returns the digest in raw binary format with a length of 16.
	 * @return string
	 */
	public static function MD5File($fileName, $rawOutput = false){
		return md5_file(U::ES($fileName), U::EB($rawOutput));
	}
	/**
	 * Calculates the md5 hash of a given file
	 * @param string $fileName The name of the file to calculate the hash for
	 * @param boolean $rawOutput When TRUE, returns the digest in raw binary format with a length of 16.
	 * @return string
	 */
	public static function SHA1File($fileName, $rawOutput = false){
		return sha1_file(U::ES($fileName), U::EB($rawOutput));
	}
	/**
	 * Calculates the sha1 hash of a given file
	 * @param string $fileName The name of the file to calculate the hash for
	 * @param boolean $rawOutput When TRUE, returns the digest in raw binary format with a length of 20.
	 * @return string
	 */
	public static function SHA1($string, $rawOutput = false){
		return sha1(U::ES($string), U::EB($rawOutput));
	}
	/**
	 * Generate a hash value (message digest)
	 * @param HashAlgorithm $algorithm Name of selected hashing algorithm
	 * @param string $data Message to be hashed.
	 * @param boolean $rawOutput When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.
	 * @return string
	 */
	public static function Hash(HashAlgorithm $algorithm, $data, $rawOutput = false){
		return hash($algorithm->Value(), U::ES($data), U::EB($rawOutput));
	}
	/**
	 * Generate a hash value using the contents of a given file
	 * @param HashAlgorithm $algorithm Name of selected hashing algorithm
	 * @param string $fileName URL describing location of file to be hashed; Supports fopen wrappers.
	 * @param boolean $rawOutput When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.
	 * @return string
	 */
	public static function HashFile(HashAlgorithm $algorithm, $fileName, $rawOutput = false){
		return hash_file($algorithm->Value(), U::ES($fileName), U::EB($rawOutput));
	}
	/**
	 * Translate characters witin a string. This function returns a copy of $string where all occurrences of each (single-byte) character in $from have
	 * been translated to the corresponding character in $to, i.e., every occurrence of $from[$n] has been replaced with $to[$n], where $n is a valid
	 * offset in both arguments.
	 * Note that if arrays were passed to $from, $to, or either, these arrays will be converted into strings by joining the string extraction of members of
	 * those arrays. This also applies for any type that is passed for those parameters instead of a string.
	 * @param mixed $string The string to perform the character translation on. If something else is passed, it will be extracted into a string value.
	 * @param mixed $from The string containing characters being translated to $to. If something else is passed, it will be extracted into a string value.
	 * @param mixed $to The string containing characters that will be replacing $from. If something else is passed, it will be extracted into a string value.
	 * @throws InvalidParameterValueException If $from extracts into an empty string or null
	 * @return string
	 */
	public static function CharTranslate($string, $from, $to){
		if(U::NAE($from)){
			throw new InvalidParameterValueException("from", "Strings::CharTranslate()", "a non empty string of characters to be translated");
		}
		return strtr(U::ES($string), U::ES($from), U::ES($to));
	}
	/**
	 * Translates a string using two arrays containing pairs of substrings to replace and strings to replace them with. Equivalent to
	 * Strings::Translate($string, array_combine($from, $to))
	 * @param mixed $string The string to translate. Other types will be converted using Strings::Extract()
	 * @param array $from An array of substrings to translate
	 * @param array $to An array of the strings that the substrings in $from will be translated to
	 * @throws InvalidParameterValueException If the two arrays $from and $to are not of equal lengths, or if $from is empty or null
	 * @return string
	 * @see Translate()
	 */
	public static function TranslateSubstrings($string, array $from, array $to){
		if(U::NAE($from)){
			throw new InvalidParameterValueException("from", "Strings::TranslateSubstrings()", "non-null, non-empty array");
		}
		if(count($from) != count($to)){
			throw new InvalidParameterValueException("from, to", "Strings::TranslateSubstrings()", "equal lengths arrays");
		}
		return strtr(U::ES($string), array_combine($from, $to));
	}
	/**
	 * Translates a string using an associative array of keys (susbtrings to replace) and values (strings to replace them with
	 * @param mixed $string The string to translate
	 * @param array $translationTable an associactive array of substrings to replace and values to replace them with
	 * @throws InvalidParameterValueException If the translation table supplied is null or empty
	 * @return string
	 */
	public static function Translate($string, array $translationTable){
		if(U::NAE($translationTable)){
			throw new InvalidParameterValueException("translationTable", "Strings::Translate()", "a non-empty, not-null array");
		}
		return strtr(U::ES($string), $translationTable);
	}
	###########################################################################
	# Html & Http Encoding
	###########################################################################
	/**
	 * Tries to strip all html tags and comments along with php tags. PHP tags and html comments are stripped always regardless of the allowedTags parameter.
	 * It is possible to keep some tags through the allowedTags parameter. Xhtml self closing tags are ignored.
	 * @param mixed $string The string to be stripped of html and php tags
	 * @param mixed $allowedTags Any html tags that are allowed and not stripped. The whole tag should be added.
	 * @return string
	 * @example echo Strings::StripHtmlTags("<a href=''><b>Some Link</b></a><br/><br>", "<br>"); //Will output Some Link<br/><br>
	 */
	public static function StripHtmlTags($string, $allowedTags = ""){
		return strip_tags(U::ES($string), U::ES($allowedTags));
	}
	/**
	 * Convert special characters to HTML entities. Certain characters have special significance in HTML, and should be represented by HTML entities
	 * if they are to preserve their meanings. This function returns a string with these conversions made. If you require all input substrings that
	 * have associated named entities to be translated, use HtmlEntities() instead.
	 * @param mixed $string The string to encode
	 * @param QuoteEncoding $quotes Whether to encode double quotes only, both or none
	 * @param EncodingCodeType $codeType The type of code that the method will assume handling
	 * @param InvalidCodeEncoding $invalidCode Whether invalid code units in the string should be ignored, substituted or otherwise
	 * @param EncodingCharset $charset The character set of the input string
	 * @param string $doubleEncode When double_encode is turned off PHP will not encode existing html entities, the default is to convert everything. 
	 * @return string
	 */
	public static function HtmlSpecialCharacters(
		$string, QuoteEncoding $quotes=null, EncodingCodeType $codeType=null, InvalidCodeEncoding $invalidCode=null,
		EncodingCharset $charset = null, $doubleEncode = true
	){
		$q = $quotes ?: QuoteEncoding::$Double;
		$c = $codeType ?: EncodingCodeType::$Html401;
		$i = $invalidCode ?: InvalidCodeEncoding::$None;
		$flags = $q->Value() | $c->Value() | $i->Value();
		$chars = $charset ?: EncodingCharset::$UTF8;
		return htmlspecialchars(U::ES($string), $flags, $chars->Value(), U::EB($doubleEncode));
	}
	/**
	 * Convert special HTML entities back to characters.
	 * @param mixed $string The string to decode
	 * @param QuoteEncoding $quotes How to handle quotes
	 * @param EncodingCodeType $codeType What type of code should be assumed
	 * @return string
	 */
	public static function HtmlSpecialCharactersDecode($string, QuoteEncoding $quotes = null, EncodingCodeType $codeType = null){
		$q = $quotes ?: QuoteEncoding::$Double;
		$c = $codeType ?: EncodingCodeType::$Html401;
		$flags = $q->Value() | $c->Value();
		return htmlspecialchars_decode(U::ES($string), $flags);
	}
	/**
	 * Convert all applicable characters to HTML entities. This function is identical to HtmlSpecialCharacters() in all ways, except with HtmlEntities(),
	 * all characters which have HTML character entity equivalents are translated into these entities.
	 * @param mixed $string The string to encode
	 * @param QuoteEncoding $quotes Whether to encode double quotes only, both or none
	 * @param EncodingCodeType $codeType The type of code that the method will assume handling
	 * @param InvalidCodeEncoding $invalidCode Whether invalid code units in the string should be ignored, substituted or otherwise
	 * @param EncodingCharset $charset The character set of the input string
	 * @param string $doubleEncode When double_encode is turned off PHP will not encode existing html entities, the default is to convert everything. 
	 * @return string
	 * @see Strings::HtmlEntitiesDecode()
	 */
	public static function HtmlEntities(
		$string, QuoteEncoding $quotes=null, EncodingCodeType $codeType=null, InvalidCodeEncoding $invalidCode=null,
		EncodingCharset $charset = null, $doubleEncode = true
	){
		$q = $quotes ?: QuoteEncoding::$Double;
		$c = $codeType ?: EncodingCodeType::$Html401;
		$i = $invalidCode ?: InvalidCodeEncoding::$None;
		$flags = $q->Value() | $c->Value() | $i->Value();
		$chars = $charset ?: EncodingCharset::$UTF8;
		return htmlentities(U::ES($string), $flags, $chars->Value(), U::EB($doubleEncode));
	}
	/**
	 * Convert all HTML entities to their applicable characters
	 * @param mixed $string The string to decode
	 * @param QuoteEncoding $quotes How to handle quotes
	 * @param EncodingCodeType $codeType What type of code should be assumed
	 * @param EncodingCharset $charset The character set of the input string
	 * @return string
	 * @see Strings::HtmlEntities()
	 */
	public static function HtmlEntitiesDecode($string, QuoteEncoding $quotes = null, EncodingCodeType $codeType = null, EncodingCharset $charset = null){
		$q = $quotes ?: QuoteEncoding::$Double;
		$c = $codeType ?: EncodingCodeType::$Html401;
		$flags = $q->Value() | $c->Value();
		$chars = $charset ?: EncodingCharset::$UTF8;
		return html_entity_decode(U::ES($string), $flags, $chars->Value());
	}
	/**
	 * Inserts line break tags before all newline characters in the supplied string
	 * @param mixed $string The string to insert line break tags to
	 * @return string
	 */
	public static function InsertLineBreaks($string){
		return nl2br(U::ES($string), true);
	}
	###########################################################################
	# Letter Case
	###########################################################################
	/**
	 * Converts the supplied string to lower case
	 * @param mixed $string The string to convert to lower case
	 * @return string
	 */
	public static function ToLower($string){
		return strtolower(U::ES($string));
	}
	/**
	 * Converts the supplied string to capital letters
	 * @param mixed $string
	 * @return string
	 */
	public static function ToUpper($string){
		return strtoupper(U::ES($string));
	}
	/**
	 * Convert the first letter of each word into capital letter
	 * @param mixed $string The string to capitalize the first letters of each word in.
	 * @param string $delimiters The optional delimiters contains the word separator characters.
	 * @return string
	 */
	public static function CapitalizeWords($string, $delimiters = " \t\r\n\f\v"){
		return ucwords(U::ES($string), U::ES($delimiters));
	}
	/**
	 * Makes the first character of a string upper case
	 * @param mixed $string The string
	 * @return string
	 */
	public static function UpperFirstLetter($string){
		return ucfirst(U::ES($string));
	}
	/**
	 * Makes the first character of a string lower case
	 * @param mixed $string The string
	 * @return string
	 */
	public static function LowerFirstLetter($string){
		return lcfirst(U::ES($string));
	}
	###########################################################################
	# Modifications
	###########################################################################
	/**
	 * Randomly shuffles a string
	 * @param mixed $string The string to shuffle
	 * @return string
	 */
	public static function Shuffle($string){
		return str_shuffle(U::ES($string));
	}
	/**
	 * Reverse a string
	 * @param mixed $string The string to reverse
	 * @return string
	 */
	public static function Reverse($string){
		return strrev(U::ES($string));
	}
	/**
	 * Wraps a string to a given number of characters
	 * @param mixed $string The input string.
	 * @param integer $width The number of characters at which the string will be wrapped.
	 * @param string $break The line is broken using the optional break parameter.
	 * @param boolean $cut If the cut is set to TRUE, the string is always wrapped at or before the specified width. So if you have a word that is larger 
	 * than the given width, it is broken apart. When FALSE the function does not split the word even if the width is smaller than the word width.
	 * @throws InvalidParameterTypeException
	 * @return string
	 */
	public static function WordWrap($string, $width, $break = "\n", $cut = false){
		if(!is_int($width)){
			throw new InvalidParameterTypeException("width", "Strings::WordWrap()", "integer");
		}
		return wordwrap(U::ES($string), $width, $break, U::EB($cut));
	}
	###########################################################################
	# Information
	###########################################################################
	/**
	 * Returns the length of the string
	 * @param mixed $string
	 * @return integer
	 */
	public static function Length($string){
		return strlen(U::ES($string));
	}
	/**
	 * Returns the number of words within the supplied string. For the purpose of this function, 'word' is defined as a locale dependent string containing
	 * alphabetic characters, which also may contain, but not start with "'" and "-" characters.
	 * @param string $string
	 * @return integer
	 */
	public static function WordsCount($string){
		return str_word_count(U::ES($string), 0);
	}
	/**
	 * Returns an array of words within the supplied string. For the purpose of this function, 'word' is defined as a locale dependent string containing
	 * alphabetic characters, which also may contain, but not start with "'" and "-" characters.
	 * @param mixed $string
	 * @return string[]
	 */
	public static function GetWords($string){
		return str_word_count(U::ES($string), 1);
	}
	/**
	 * Returns an associative array, where the key is the numeric position of the word inside the string and the value is the actual word itself.  For the 
	 * purpose of this function, 'word' is defined as a locale dependent string containing
	 * alphabetic characters, which also may contain, but not start with "'" and "-" characters.
	 * @param mixed $string
	 * @return string[][]
	 */
	public static function GetWordsPositions($string){
		return str_word_count(U::ES($string), 2);
	}
	/**
	 * Returns an array with the byte-value as key and the frequency of every byte as value.
	 * @param mixed $string The input string
	 * @return array
	 */
	public static function Frequency($string){
		return count_chars(U::ES($string), 0);
	}
	/**
	 * Returns an array with the byte-value as key and the frequency of every byte as value. Only byte-values with a frequency greater than zero are listed.
	 * @param mixed $string The input string
	 * @return array
	 */
	public static function UsedCharFrequency($string){
		return count_chars(U::ES($string), 1);
	}
	/**
	 * Returns an array with the byte-value as key and the frequency of every byte as value. Only byte-values with a frequency equal to zero are listed.
	 * @param mixed $string The input string
	 * @return array
	 */
	public static function UnusedCharFrequency($string){
		return count_chars(U::ES($string), 2);
	}
	/**
	 * Returns a string containing all unique characters used in the input string
	 * @param mixed $string The input string
	 * @return string
	 */
	public static function UsedUniqueCharacters($string){
		return count_chars(U::ES($string), 3);
	}
	/**
	 * Returns a string containing all unique characters not used in the input string
	 * @param mixed $string The input string
	 * @return string
	 */
	public static function UnusedUniqueCharacters($string){
		return count_chars(U::ES($string), 4);
	}
	###########################################################################
	# Generators
	###########################################################################
	/**
	 * Extracts a string from mixed variable. Depending on the variable, tries to return a string representation (mostly suitable for use in the framework)
	 * <ol>
	 * 	<li>If null, empty string, empty array, return the empty string.</li>
	 * 	<li>If a string, return the string as is.</li>
	 *  <li>if a scalar, return the scalar enclosed in a string</li>
	 *  <li>if IObject, calls the __toString() method</li>
	 *  <li>if object that has __toString() or ToString() method, calls one of them (__toString first)</li>
	 *  <li>if array, goes through the elements one by one and:</li>
	 *  <li>tries to obtain a string from it (any array elements will be recursively expanded with an indent string suitable to the level of depth)</li>
	 *  <li>adds the string to the result as a new line</li>
	 * </ol>
	 * @param mixed $var The variable to extract a string out of
	 * @return string
	 */
	public static function Extract($var){
		if($var === null || $var === '' || (is_array($var) && count($var) == 0)){return '';}
		else if(is_string($var)){return $var;}
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
	 * Returns the input $string repeated $count times
	 * @param mixed $string The input string to be repeated
	 * @param integer $count The number of times the input string is to be repeated in the output string. 0 returns an empty string.
	 * @throws InvalidParameterTypeException
	 * @throws InvalidParameterValueException
	 * @return string
	 */
	public static function Repeat($string, $count = 1){
		if(!is_int($count)){
			throw new InvalidParameterTypeException("count", "Strings::Repeat()", "integer");
		}
		elseif($count < 0){
			throw new InvalidParameterValueException("count", "Strings::Repeat()", " >= 0 ");
		}
		elseif($count == 0){
			return "";
		}
		return str_repeat($string, $count);
	}
	###########################################################################
	# Substrings
	###########################################################################
	/**
	 * Returns the first $length characters from the input $string
	 * @param mixed $string The input string
	 * @param integer $length The number of characters to get from the beginning of the input string
	 * @throws InvalidParameterTypeException If $length is not an integer
	 * @throws InvalidParameterValueException If $length is less than 0
	 * @return string
	 */
	public static function Left($string, $length = 1){
		if(!is_int($length)){
			throw new InvalidParameterTypeException("length", "Strings::Left()", "integer");
		}
		elseif ($length < 0){
			throw new InvalidParameterValueException("length", "Strings::Left()", " >=0 ");
		}
		return substr(U::ES($string), 0, $length);
	}
	/**
	 * Returns $length characters from the end of the input $string
	 * @param mixed $string The input string
	 * @param integer $length The number of characters to extract from the end of the string
	 * @throws InvalidParameterTypeException If $length is not an integer
	 * @throws InvalidParameterValueException If $length is less than 0
	 * @return string
	 */
	public static function Right($string, $length = 1){
		if(!is_int($length)){
			throw new InvalidParameterTypeException("length", "Strings::Right()", "integer");
		}
		elseif ($length < 0){
			throw new InvalidParameterValueException("length", "Strings::Right()", " >=0 ");
		}
		$str = U::ES($string);
		$start = strlen($str) - $length;
		$start = $start < 0? 0 : $start;
		return substr(U::ES($string), $start, $length);
	}
	/**
	 * Returns a substring from the supplied $string starting at $start and either to the end of the string or only $length characters long
	 * @param mixed $string The input string
	 * @param integer $start The start index where the substring begins
	 * @param integer $length The number of characters to extract from the input string into the substring
	 * @throws InvalidParameterTypeException If $start or $length are not integer values
	 * @throws InvalidParameterValueException If $start or $length are negative values
	 * @return string
	 */
	public static function Substring($string, $start = 0, $length = PHP_INT_MAX){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::Substring()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::Substring()", " >=0 ");
		}
		if(!is_int($length)){
			throw new InvalidParameterTypeException("length", "Strings::Substring()", "integer");
		}
		elseif ($length < 0){
			throw new InvalidParameterValueException("length", "Strings::Substring()", " >=0 ");
		}
		return substr(U::ES($string), $start, $length);
	}
	/**
	 * Count the number of substring occurrences
	 * @param mixed $string The haystack to look for substrings in
	 * @param unknown $substring The needle to search for
	 * @param number $start The position at which to start counting substring occurences
	 * @param string $length The length of characters from $start to count occurences of $substring in
	 * @throws InvalidParameterTypeException If $start or $length are not integers
	 * @throws InvalidParameterValueException If $start or $length are negative values
	 * @return integer
	 */
	public static function SubstringCount($string, $substring, $start = 0, $length = PHP_INT_MAX){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::SubstringCount()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::SubstringCount()", " >= 0 ");
		}
		if(!is_int($length)){
			throw new InvalidParameterTypeException("length", "Strings::SubstringCount()", "integer");
		}
		elseif ($length < 0){
			throw new InvalidParameterValueException("length", "Strings::SubstringCount()", " >= 0 ");
		}
		$str = U::ES($string);
		$sl = strlen($str);
		$s = $start < $sl? $start : $sl - 1;
		$l = $start + $length > $sl ? $sl - $start : $length;
		return substr_count($str, U::ES($substring), $s, $l);
	}
	###########################################################################
	# Search & Replace
	###########################################################################
	/**
	 * Finds the index of the first occurence of $needle in $haystack, starting the search at $start. If the needle is not found, -1 is returned
	 * @param mixed $haystack The string to search in
	 * @param mixed $needle The string to search for
	 * @param integer $start The offset of where to start searching
	 * @throws InvalidParameterTypeException If $start is not an integer
	 * @throws InvalidParameterValueException If start is less than 0
	 * @return integer
	 * @see CIIndexOf()
	 */
	public static function IndexOf($haystack, $needle, $start = 0){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::IndexOf()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::IndexOf()", " >= 0 ");
		}
		$p = strpos(U::ES($haystack), U::ES($needle), $start);
		return $p === false? -1 : $p;
	}
	/**
	 * Finds the index of the first occurence of $needle in $haystack, starting the search at $start. If the needle is not found, -1 is returned.
	 * The search is carried out in a case insensitive manner.
	 * @param mixed $haystack The string to search in
	 * @param mixed $needle The string to search for
	 * @param integer $start The offset of where to start searching
	 * @throws InvalidParameterTypeException If $start is not an integer
	 * @throws InvalidParameterValueException If start is less than 0
	 * @return integer
	 * @see IndexOf()
	 */
	public static function CIIndexOf($haystack, $needle, $start = 0){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::CIIndexOf()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::CIIndexOf()", " >= 0 ");
		}
		$p = stripos(U::ES($haystack), U::ES($needle), $start);
		return $p === false? -1 : $p;
	}
	/**
	 * Finds the index of the last occurence of $needle in $haystack, starting the search at $start. If the needle is not found, -1 is returned
	 * @param mixed $haystack The string to search in
	 * @param mixed $needle The string to search for
	 * @param integer $start The offset of where to start searching
	 * @throws InvalidParameterTypeException If $start is not an integer
	 * @throws InvalidParameterValueException If start is less than 0
	 * @return integer
	 * @see CILastIndexOf()
	 */
	public static function LastIndexOf($haystack, $needle, $start = 0){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::LastIndexOf()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::LastIndexOf()", " >= 0 ");
		}
		$p = strrpos(U::ES($haystack), U::ES($needle), $start);
		return $p === false? -1 : $p;
	}
	/**
	 * Searches for the $needle in $haystack and if it exists, returns true, otherwise, returns false
	 * @param mixed $haystack The string to search in
	 * @param mixed $needle The string to search for
	 * @param integer $start The offset of where to start searching
	 * @throws InvalidParameterTypeException If $start is not an integer
	 * @throws InvalidParameterValueException If start is less than 0
	 * @return boolean
	 * @see CIHas()
	 */
	public static function Has($haystack, $needle, $start = 0){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::Has()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::Has()", " >= 0 ");
		}
		return strpos(U::ES($haystack), U::ES($needle), $start) !== false;
	}
	/**
	 * Searches for the $needle in $haystack and if it exists, returns true, otherwise, returns false
	 * @param mixed $haystack The string to search in
	 * @param mixed $needle The string to search for
	 * @param integer $start The offset of where to start searching
	 * @throws InvalidParameterTypeException If $start is not an integer
	 * @throws InvalidParameterValueException If start is less than 0
	 * @return boolean
	 * @see Has()
	 */
	public static function CIHas($haystack, $needle, $start = 0){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::CIHas()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::CIHas()", " >= 0 ");
		}
		return stripos(U::ES($haystack), U::ES($needle), $start) !== false;
	}
	/**
	 * Finds the index of the last occurence of $needle in $haystack, starting the search at $start. If the needle is not found, -1 is returned
	 * @param mixed $haystack The string to search in
	 * @param mixed $needle The string to search for
	 * @param integer $start The offset of where to start searching
	 * @throws InvalidParameterTypeException If $start is not an integer
	 * @throws InvalidParameterValueException If start is less than 0
	 * @return integer
	 * @see LastIndexOf()
	 */
	public static function CILastIndexOf($haystack, $needle, $start = 0){
		if(!is_int($start)){
			throw new InvalidParameterTypeException("start", "Strings::CILastIndexOf()", "integer");
		}
		elseif ($start < 0){
			throw new InvalidParameterValueException("start", "Strings::CILastIndexOf()", " >= 0 ");
		}
		$p = strripos(U::ES($haystack), U::ES($needle), $start);
		return $p === false? -1 : $p;
	}
	/**
	 * Replaces all occurences of a substring in a string with another string.
	 * @param mixed $searchFor The substring to search for and replace
	 * @param mixed $replaceWith The replacement string
	 * @param mixed $within The string the search for occurences and replace them
	 * @return string
	 * @see ReplaceMultiple()
	 */
	public static function Replace($searchFor, $replaceWith, $within){
		return str_replace(U::ES($searchFor), U::ES($replaceWith), U::ES($within));
	}
	/**
	 * Replaces all occurences of the strings in a search substrings array with values from another replace strings array within a given string.
	 * If the replace string array is of fewer elements than the search one, empty strings will be susbstituted for the remaining search items
	 * @param array $searchFor The array of strings to search for
	 * @param array $replaceWith The array of strings to be used as replacements
	 * @param mixed $within The string within which to search
	 * @throws InvalidParameterValueException If the search for array is null or empty
	 * @return mixed
	 * @see Replace()
	 * @see CIReplaceMultiple()
	 * @see CIReplace()
	 */
	public static function ReplaceMultiple(array $searchFor, array $replaceWith, $within){
		if(U::NAE($searchFor)){
			throw new InvalidParameterValueException("searchFor", "Strings::ReplaceMultiple()", "a non-empty array");
		}
		return str_replace($searchFor, $replaceWith, U::ES($within));
	}
	/**
	 * Replaces all occurences of a substring in a string with another string. The search is case insensitive
	 * @param mixed $searchFor The substring to search for and replace
	 * @param mixed $replaceWith The replacement string
	 * @param mixed $within The string the search for occurences and replace them
	 * @return string
	 * @see CIReplaceMultiple()
	 * @see ReplaceMultiple()
	 * @see Replace()
	 */
	public static function CIReplace($searchFor, $replaceWith, $within){
		return str_ireplace(U::ES($searchFor), U::ES($replaceWith), U::ES($within));
	}
	/**
	 * Replaces all occurences of the strings in a search substrings array with values from another replace strings array within a given string.
	 * If the replace string array is of fewer elements than the search one, empty strings will be susbstituted for the remaining search items.
	 * The search is case insensitive
	 * @param array $searchFor The array of strings to search for
	 * @param array $replaceWith The array of strings to be used as replacements
	 * @param mixed $within The string within which to search
	 * @throws InvalidParameterValueException If the search for array is null or empty
	 * @return mixed
	 * @see Replace()
	 * @see CIReplace()
	 * @see CIReplaceMultiple()
	 */
	public static function CIReplaceMultiple(array $searchFor, array $replaceWith, $within){
		if(U::NAE($searchFor)){
			throw new InvalidParameterValueException("searchFor", "Strings::CIReplaceMultiple()", "a non-empty array");
		}
		return str_ireplace($searchFor, $replaceWith, U::ES($within));
	}
	/**
	 * 
	 * @param mixed $searchFor The substring to search for and replace
	 * @param mixed $replaceWith The replacement string
	 * @param mixed $within The source string
	 * @param integer $firstCount The number of occurences to replace
	 * @throws InvalidParameterTypeException If $firstCount is not an integer
	 * @throws InvalidParameterValueException If $firstCount is zero or negative
	 * @return string
	 */
	public static function ReplaceFirst($searchFor, $replaceWith, $within, $firstCount = 1){
		if(!is_int($firstCount)){
			throw new InvalidParameterTypeException("firstCount", "Strings::ReplaceFirst()", "integer");
		}
		else if($firstCount < 1){
			throw new InvalidParameterValueException("firstCount", "Strings::ReplaceFirst()", "1 or greater");
		}
		str_replace(U::ES($searchFor),U::ES($replaceWith), U::ES($within), $firstCount);
	}
	###########################################################################
	# Checks
	###########################################################################
	/**
	 * Checks to see if a value convertable to string ends up as null or empty.
	 * @param mixed $string The string to check
	 * @return boolean
	 */
	public static function IsNullOrEmpty($string){
		$s = U::ES($string);
		return ($s === "");
	}
	/**
	 * Checks to see if the string is not null or empty.
	 * @param mixed $string The string to check
	 * @return boolean
	 */
	public static function IsNotNullOrEmpty($string){
		$s = U::ES($string);
		return $s != "";
	}
	/**
	 * Checks to see if the string is all whitespaces.
	 * @param mixed $string The string to check
	 * @return boolean
	 */
	public static function IsWhitespaces($string){
		$s = trim(U::ES($string));
		return $s == "";
	}
	/**
	 * Checks to see if the string is not all whitespaces.
	 * @param mixed $string The string to check
	 * @return boolean
	 */
	public static function IsNotWhitespaces($string){
		$s = trim(U::ES($string));
		return $s != "";
	}
	###########################################################################
	# Formatting
	###########################################################################
	/**
	 * Format a number with grouped thousands. If only one parameter is given, number will be formatted without decimals, but with a comma (",") between every 
	 * group of thousands. If two parameters are given, number will be formatted with $decimals decimals with a dot (".") in front, and a comma (",") between every
	 * group of thousands. If all four parameters are given, number will be formatted with $decimals decimals, $decimalsPoint instead of a dot (".") before the decimals
	 * and $thousandsSeparator instead of a comma (",") between every group of thousands.
	 * @param float $number The string to format
	 * @param integer $decimals The number of decimal points
	 * @param string $decimalsPoint The string to use instead of the decimal dot
	 * @param string $thousandsSeparator The string to be used as a separator between thousand groups instead of the comma
	 * @throws InvalidParameterTypeException If $number is not a number or $decimals is not an integer
	 * @throws InvalidParameterValueException If $decimals is negative
	 * @return string
	 */
	public static function FormatNumber($number, $decimals = 0, $decimalsPoint = ".", $thousandsSeparator = ","){
		if(!is_int($decimals)){
			throw new InvalidParameterTypeException("decimals", "Strings::FormatNumber()", "integer");
		}
		else if($decimals < 0){
			throw new InvalidParameterValueException("decimals", "Strings::FormatNumber()", " >= 0 ");
		}
		if(!is_numeric($number)){
			throw new InvalidParameterTypeException("number", "Strings::FormatNumber()", "number");
		}
		return number_format($number, $decimals, U::ES($decimalsPoint), U::ES($thousandsSeparator));
	}
	###########################################################################
	# Strings Operations
	###########################################################################
	/**
	 * Appends two strings and returns the result
	 * @param mixed $string1 First string (left side of the result)
	 * @param mixed $string2 Second string (right side of the result)
	 * @return string
	 */
	public static function Append($string1, $string2){
		return U::ES($string1) . U::ES($string2);
	}
	/**
	 * Removes all instances of a substring within a string
	 * @param mixed $remove The susbstring to search for and remove
	 * @param mixed $from The string to search in
	 * @return mixed
	 */
	public static function Remove($remove, $from){
		return  str_replace(U::ES($remove), '', U::ES($from));
	}
}