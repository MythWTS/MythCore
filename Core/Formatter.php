<?php
namespace Core;
/**
 * Utility class that exposes public static methods that in turn handle formatting of standard basic/primitive types using the framework's
 * stanadard formatting options.
 * This class is used by the framework's default formatters to apply formatting parsed to string representations of variables. It can also be used 
 * by custom formatters that handles composite types of primitive or basic types.
 */
final class Formatter extends Object{
	/**
	 * Private constructor
	 */
	private function __construct(){}
	###########################################################################
	# Global Formatting Methods
	###########################################################################
	/**
	 * Checks a string for being null and if so, returns the supplied null value
	 * @param string $string The string to apply the null formatting to
	 * @param string $nullFormatting The string to replace a null value
	 * @return string
	 */
	public static function ApplyNullFormatting($string, $nullFormatting = 'NULL'){
		if($string === null){
			return $nullFormatting;
		}
		else{
			return $string;
		}
	}
	/**
	 * Applys padding options to a string.
	 * @param string $string The string to apply the formatting to
	 * @param integer $width The width of the padding required
	 * @param string $paddingSide The side to which to append the padding. One of [left, right, both]
	 * @param string $paddingFillLeft The charcter to use for padding to the left
	 * @param string $paddingFillRight The charcter to use for padding to the right
	 * @param string $overflow Which side to trim if the string is longer than width. One of [left, right, both, none]
	 * @throws FormatException If any of the options is supplied an invalid value
	 * @throws InvalidParameterValueException If $paddingFillLeft or $paddingFillRight is not a one charcter string
	 * @return string
	 */
	public static function ApplyPadding($string, $width = 0, $paddingSide = 'left', $paddingFillLeft = ' ', $paddingFillRight = ' ', $overflow = 'none'){
		$res = $string; $len = strlen($res);
		if(strlen($paddingFillLeft) != 1){
			throw new InvalidParameterValueException('paddingFillLeft', __METHOD__, 'one character string');
		}
		if(strlen($paddingFillRight) != 1){
			throw new InvalidParameterValueException('paddingFillRight', __METHOD__, 'one character string');
		}
		if($width !== 0 || $width != $len){
			if($width > $len){
				switch ($paddingSide){
					case 'left': $res = str_repeat($paddingFillLeft, $width - $len) . $res; break;
					case 'right': $res .= str_repeat($paddingFillRight, $width - $len); break;
					case 'both': $res = str_repeat($paddingFillLeft, ($width - $len)/2) . $res . str_repeat($paddingFillRight, (($width - $len)/2) + ($width - $len)%2); break;
					default: throw new FormatException('Invalid value for option padding-side(). Must be one of: [left|right|both]'); break;
				}
			}
			else{
				switch ($overflow){
					case 'right': $res = substr($res, 0, $width); break;
					case 'left': $res = substr($res, $len - $width); break;
					case 'both': $res = substr($res, ($len - $width)/2, $width); break;
					case 'none': break;
					default: throw new FormatException('Invalid value for option overflow(). Must be one of [right|left|both|none].'); break;
				}
			}
		}
		return $res;
	}
	###########################################################################
	# Primitive Types' Formatting Methods
	###########################################################################
	/**
	 * Takes a number and returns a string representation of that number formatted as an integer with the supplied formatting options
	 * @param number $number The number to format
	 * @param string $base The base to use when formatting the number. One of [binary/b/bin|octal/o|hexadecimal/hex/h/x|decimal/dec/d]
	 * @param string $signed How to sign the integer. One of [negative/n/-/empty string|positive/p/+|signed/s/true/yes/+-/-+|unsigned/u/false/no]
	 * @param string $grouped Whether to group digits visually. One of [true/yes|false/no/empty string]
	 * @param string $groupSeparator The string to use to separate groups of digits.
	 * @param integer $groupedEvery The number of digits for each group
	 * @throws FormatException If the values supplied to any of the options is not valid
	 * @return string
	 */
	public static function FormatNumberAsInteger($number, $base = 'decimal', $signed = 'negative', $grouped = 'false', $groupSeparator = ',', $groupedEvery = 3){
		$res = '';
		switch($base){
			case 'binary':
			case 'b':
			case 'bin':
				$res = sprintf("%b", $number); break;
			case 'octal':
			case 'o':
				$res = sprintf('%o', $number); break;
			case 'hexadecimal':
			case 'h':
			case 'hex':
			case 'x':
				$res = sprintf('%o', $number); break;
			case 'decimal':
			case 'dec':
			case 'd':
				$res = sprintf('%u', $number); break;
			default:
				throw new FormatException("{$base} is not a valid integer number base value for the base() option"); break;
		}
		switch($grouped){
			case 'false':
			case 'no':
			case '':
				break;
			case 'true':
			case 'yes':
				$count = strlen($res);
				$temp = '';
				for($i = $count - 1; $i >= 0; $i-- ){
					$temp = $res[$i] . $temp;
					if(($count - $i) % $groupedEvery == 0 && $i != 0){
						$temp = $groupSeparator . $temp;
					}
				}
				$res = $temp;
				break;
			default:
				throw new FormatException("{$grouped} is not a valid integer number group value for the grouped() option"); break;
		}
		switch ($signed){
			case 'negative':
			case 'n':
			case '-':
			case '':
				$res = ($number < 0? '-' : '') . $res; break;
			case 'positive':
			case 'p':
			case '+':
				$res = ($number <= 0? '' : '+') . $res; break;
			case 'signed':
			case 's':
			case 'true':
			case 'yes':
			case '+-':
			case '-+':
				$res = ($number < 0? '-' : ($number > 0? '+' : '')) . $res; break;
			case 'unsigned':
			case 'u':
			case 'false':
			case 'no':
				break;
			default:
				throw new FormatException("{$signed} is not a valid integer number sign value for the signed() option"); break;
		}
		return $res;
	}
}