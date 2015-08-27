<?php
namespace Core;
/**
 * Base class for enumerations that are binary flags. In other words, that can be combined by using bitwise or and bitwise
 * and to indicate the presence of a flag in the value.
 * Currently, only limited to 32 bit flags to guarntee compatibility with most systems. Might change in the future
 */
class FlagsEnum extends Enum {
	private static 
		$_max = 0,
		$_flags = array(
			1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048, 4096, 8192, 16384, 32768, 65536, 131072, 262144,
			524288, 1048576, 2097152, 4194304, 8388608, 16777216, 33554432, 67108864, 134217728, 268435456,
			536870912, 1073741824, 2147483648
		);
	protected function __construct($name) {
		if(self::$_max>31){throw new Exception("FlagsEnum can not have more than 32 members");}
		parent::__construct($name, self::$_flags[self::$_max++]);
	}
}

?>
