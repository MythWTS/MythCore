<?php
namespace Core;
/**
 * Utility class that provides utility static methods to handle method and function parameters/arguments.
 * 
 * This class includes some Insure__() methods that will check an expression and if a cetain condition is not satisfied, they throw and appropriate
 * InvalidParameterException with an appropriate message.
 */
class Params extends Object{
	/**
	 * Private constructor to disallow creating objects
	 */
	private function __construct(){}
	###########################################################################
	# Insure Parameter Value Methods
	###########################################################################
	/**
	 * Throws an exception if a value is not within the specified range (Exclusive of the two values).
	 * The order at which the bounds of the range is supplied is not important
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value1 The beginning of the range of values to insure the expression is within
	 * @param mixed $value2 The end of the range of values to insure the expression is within
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the expression value is not within the range between two values (Exclusive of the two values)
	 */
	public static function InsureInRangeExclusive($expression, $value1, $value2, $parameterName = "expression", $functionName = null){
		$v1 = $value1 < $value2 ? $value1 : $value2;
		$v2 = $value1 >= $value2 ? $value1 : $value2;
		if($expression <= $v1 || $expression >= $v2){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value between " . U::ES($v1) . " and " . U::ES($v2)
			);
		}
	}
	/**
	 * Throws an exception if a value is not within the specified range (inclusive of the two values).
	 * The order at which the bounds of the range is supplied is not important
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value1 The beginning of the range of values to insure the expression is within
	 * @param mixed $value2 The end of the range of values to insure the expression is within
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the expression value is not within the range between two values (inclusive of the two values)
	 */
	public static function InsureInRange($expression, $value1, $value2, $parameterName = "expression", $functionName = null){
		$v1 = $value1 < $value2 ? $value1 : $value2;
		$v2 = $value1 >= $value2 ? $value1 : $value2;
		if($expression < $v1 || $expression > $v2){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value between " . U::ES($v1) . " and " . U::ES($v2)
			);
		}
	}
	/**
	 * Compares two values and throws an exception if the first is not less than the second
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not less than the second ($value)
	 */
	public static function InsureLT($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression >= $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value less than " . U::ES($value)
			);
		}
	}
	/**
	 * Compares two values and throws an exception if the first is not less than or equals the second
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not less than or equals the second ($value)
	 */
	public static function InsureLTE($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression > $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value less than or equals " . U::ES($value)
			);
		}
	}
	/**
	 * Compares two values and throws an exception if the first is not greater than the second
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not greater than the second ($value)
	 */
	public static function InsureGT($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression <= $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value greater than " . U::ES($value)
			);
		}
	}
	/**
	 * Compares two values and throws an exception if the first is not greater than or equals the second
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not greater than or equals the second ($value)
	 */
	public static function InsureGTE($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression < $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value greater than or equals " . U::ES($value)
			);
		}
	}
	/**
	 * Compares two values using the equality (==) operator and throws an exception if the two values are not equal
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the two values are not equal (== comparison)
	 */
	public static function InsureEquals($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression != $value){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], U::ES($value));
		}
	}
	/**
	 * Compares two values using the identical equality (===) operator and throws an exception if the two values are not identical
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the two values are not identical (=== comparison)
	 */
	public static function InsureIdentical($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression !== $value){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], U::ES($value));
		}
	}
	###########################################################################
	# Insure Parameter Type Methods
	###########################################################################
	/**
	 * Checks a value/expression to see if it evaluates to an integer value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an integer
	 */
	public static function InsureInt($expression, $parameterName = "expression", $functionName = null){
		if(!is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "integer");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a float value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a float
	 */
	public static function InsureFloat($expression, $parameterName = "expression", $functionName = null){
		if(!is_float($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "float");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a numeric value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a number
	 */
	public static function InsureNumeric($expression, $parameterName = "expression", $functionName = null){
		if(!is_numeric($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "number");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a boolean value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a boolean
	 */
	public static function InsureBoolean($expression, $parameterName = "expression", $functionName = null){
		if(!is_bool($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "boolean");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a string value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a string
	 */
	public static function InsureString($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a scalar value (integer, float, boolean, or string). If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a scalar (integer, float, boolean, or string)
	 */
	public static function InsureScalar($expression, $parameterName = "expression", $functionName = null){
		if(!is_scalar($expression)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"scalar (integer, float, boolean, or string)"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an array value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an array
	 */
	public static function InsureArray($expression, $parameterName = "expression", $functionName = null){
		if(!is_array($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "array");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an associative array value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an associative array
	 */
	public static function InsureArrayAssoc($expression, $parameterName = "expression", $functionName = null){
		if(!is_array($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "associative array");
		}
		else{
			foreach ($expression as $key => $value){
				if(is_int($key)){
					throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "associative array");
				}
			}
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a numeric array value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a numeric array
	 */
	public static function InsureArrayNumeric($expression, $parameterName = "expression", $functionName = null){
		if(!is_array($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "numeric indexed array");
		}
		else{
			foreach ($expression as $key => $value){
				if(!is_int($key)){
					throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "numeric indexed array");
				}
			}
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to null. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not null
	 */
	public static function InsureNull($expression, $parameterName = "expression", $functionName = null){
		if(!is_null($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "null");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an object value (of any class). If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an object of any class
	 */
	public static function InsureInstance($expression, $parameterName = "expression", $functionName = null){
		if(!is_object($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object of any class");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a resource. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a resource
	 */
	public static function InsurePHPResource($expression, $parameterName = "expression", $functionName = null){
		if(!is_resource($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "PHP resource");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an IObject object. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an IObject object
	 */
	public static function InsureIObject($expression, $parameterName = "expression", $functionName = null){
		if(!is_a($expression, "\\Core\\IObject")){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"\\Core\\IObject or a class that implements it"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an object from a class that extends the Object class. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an Object object
	 */
	public static function InsureObject($expression, $parameterName = "expression", $functionName = null){
		if(!is_a($expression, "\\Core\\Object")){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "\\Core\\Object or one of its children");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an object from a class that either is or extends a supplied class.
	 * If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $classToInsure The name of the class that the expression must be from or from one of its children
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an object from the class $classToInsure or one of its children
	 */
	public static function InsureIsA($expression, $classToInsure, $parameterName = "expression", $functionName = null){
		if(!is_a($expression, $classToInsure)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "{$classToInsure} or one of its children");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a primitive value (int, float, boolean, string, null, array, resource). If so, nothing happens.
	 * If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a primitive value (int, float, boolean, string, null, array, resource)
	 */
	public static function InsurePrimitive($expression, $parameterName = "expression", $functionName = null){
		if(!is_null($expression) && !is_scalar($expression) && !is_array($expression) && !is_resource($expression)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"php primitive types (int, float, boolean, string, null, array, resource)"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a built-in value (int, float, boolean, string, null, array, resource, built-in objects).
	 * If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a built-in value (int, float, boolean, string, null, array, resource, built-in objects)
	 */
	public static function InsureBuiltIn($expression, $parameterName = "expression", $functionName = null){
		if(!(Type::Of($expression)->IsBuiltIn)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"php built-in types (int, float, boolean, string, null, array, resource, built-in objects)"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an instance of an anonymous class. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an instance of an anonymous class
	 */
	public static function InsureAnonymous($expression, $parameterName = "expression", $functionName = null){
		if(!(Type::Of($expression)->IsAnonymous)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an anonymous class");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an instance of an instantiable class. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an instance of an instantiable class
	 */
	public static function InsureInstantiable($expression, $parameterName = "expression", $functionName = null){
		if(!(Type::Of($expression)->IsInstantiable)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an instantiable class");
		}
	}
	###########################################################################
	/**
	 * Checks a value/expression to see if it's not an integer value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an integer
	 */
	public static function InsureNotInt($expression, $parameterName = "expression", $functionName = null){
		if(is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not integer");
		}
	}
	/**
	 * Checks a value/expression to see if it's not a float value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a float
	 */
	public static function InsureNotFloat($expression, $parameterName = "expression", $functionName = null){
		if(is_float($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not float");
		}
	}
	/**
	 * Checks a value/expression to see if it's not a numeric value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a number
	 */
	public static function InsureNotNumeric($expression, $parameterName = "expression", $functionName = null){
		if(is_numeric($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not number");
		}
	}
	/**
	 * Checks a value/expression to see if it's not a boolean value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a boolean
	 */
	public static function InsureNotBoolean($expression, $parameterName = "expression", $functionName = null){
		if(is_bool($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not boolean");
		}
	}
	/**
	 * Checks a value/expression to see if it's not a string value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a string
	 */
	public static function InsureNotString($expression, $parameterName = "expression", $functionName = null){
		if(is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not string");
		}
	}
	/**
	 * Checks a value/expression to see if it's not a scalar value (integer, float, boolean, or string). If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a scalar (integer, float, boolean, or string)
	 */
	public static function InsureNotScalar($expression, $parameterName = "expression", $functionName = null){
		if(is_scalar($expression)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"not scalar (integer, float, boolean, or string)"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it's not an array value. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an array
	 */
	public static function InsureNotArray($expression, $parameterName = "expression", $functionName = null){
		if(is_array($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not array");
		}
	}
	/**
	 * Checks a value/expression to see if it's not null. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is null
	 */
	public static function InsureNotNull($expression, $parameterName = "expression", $functionName = null){
		if(is_null($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not null");
		}
	}
	/**
	 * Checks a value/expression to see if it's not an object value (of any class). If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an object of any class
	 */
	public static function InsureNotInstance($expression, $parameterName = "expression", $functionName = null){
		if(is_object($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not object of any class");
		}
	}
	/**
	 * Checks a value/expression to see if it's not a resource. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a resource
	 */
	public static function InsureNotPHPResource($expression, $parameterName = "expression", $functionName = null){
		if(is_resource($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not PHP resource");
		}
	}
	/**
	 * Checks a value/expression to see if it's not an IObject object. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an IObject object
	 */
	public static function InsureNotIObject($expression, $parameterName = "expression", $functionName = null){
		if(is_a($expression, "\\Core\\IObject")){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"not \\Core\\IObject or a class that implements it"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it's not an object from a class that extends the Object class. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an Object object
	 */
	public static function InsureNotObject($expression, $parameterName = "expression", $functionName = null){
		if(is_a($expression, "\\Core\\Object")){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"not \\Core\\Object or one of its children"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it's not an object from a class that either is or extends a supplied class.
	 * If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $classToInsure The name of the class that the expression must be from or from one of its children
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an object from the class $classToInsure or one of its children
	 */
	public static function InsureNotIsA($expression, $classToInsure, $parameterName = "expression", $functionName = null){
		if(is_a($expression, $classToInsure)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"not {$classToInsure} or any of its children"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it's not a primitive value (int, float, boolean, string, null, array, resource).
	 * If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a primitive value (int, float, boolean, string, null, array, resource)
	 */
	public static function InsureNotPrimitive($expression, $parameterName = "expression", $functionName = null){
		if(is_null($expression) || is_scalar($expression) || is_array($expression) || is_resource($expression)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"not php primitive types (int, float, boolean, string, null, array, resource)"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it's not a built-in value (int, float, boolean, string, null, array, resource, built-in objects).
	 * If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is a built-in value (int, float, boolean, string, null, array, resource, built-in objects)
	 */
	public static function InsureNotBuiltIn($expression, $parameterName = "expression", $functionName = null){
		if(Type::Of($expression)->IsBuiltIn){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"not php built-in types (int, float, boolean, string, null, array, resource, built-in objects)"
			);
		}
	}
	/**
	 * Checks a value/expression to see if it's not an instance of an anonymous class. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an instance of an anonymous class
	 */
	public static function InsureNotAnonymous($expression, $parameterName = "expression", $functionName = null){
		if(Type::Of($expression)->IsAnonymous){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not an anonymous class");
		}
	}
	/**
	 * Checks a value/expression to see if it's not an instance of an instantiable class. If so, nothing happens. If not, throws an exception.
	 * @param string $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an instance of an instantiable class
	 */
	public static function InsureNotInstantiable($expression, $parameterName = "expression", $functionName = null){
		if(Type::Of($expression)->IsInstantiable){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not an instantiable class");
		}
	}
	###########################################################################
	# Function/Method Parameters Information Methods
	###########################################################################
	/**
	 * Returns the number of arguments passed to a method
	 * @return integer
	 */
	public static function Count(){
		return count(debug_backtrace(0, 2)[1]["args"]);
	}
	/**
	 * Returns the parameter at the specified index (starting from 0 as the first argument/parameter) passed to the calling function/method.
	 * @param integer $paramIndex The index of the parameter to retreive
	 * @throws InvalidParameterValueException If the parameter index supplied is less than 0 or higher than the index of the last parameter
	 * @return mixed
	 */
	public static function Get($paramIndex){
		$args = debug_backtrace(0, 2)[1]["args"];
		if($paramIndex < 0 || $paramIndex >= count($args)){
			throw new InvalidParameterValueException("paramIndex", "\\Core\\Params::Get()", ">= 0 && < " . count($args));
		}
		return debug_backtrace(0, 2)[1]["args"][$paramIndex];
	}
	/**
	 * Returns a numeric array of the parameters passed to the calling function/method
	 * @return array
	 */
	public static function GetAll(){
		return debug_backtrace(0, 2)[1]["args"] ?: array();
	}
}