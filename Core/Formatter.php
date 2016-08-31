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