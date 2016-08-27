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
	# Insured-Extraction Methods
	###########################################################################
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing file name. If so, returns the expression, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing file name
	 * @return string
	 */
	public static function GetInsuredExistingFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
		return $expression;
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing readable file name. If so, return sthe expression, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing readable file name
	 * @return string
	 */
	public static function GetInsuredReadableFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
		if(!is_readable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "readable file name");
		}
		return $expression;
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing writable file name. If so, returns the expression, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing writable file name
	 * @return string
	 */
	public static function GetInsuredWritableFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
		if(!is_writable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "writable file name");
		}
		return $expression;
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing readable & writable file name.
	 * If so, returns the file name, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing readable & writable file name
	 * @return string
	 */
	public static function GetInsuredReadWriteFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
		if(!is_readable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "readable file name");
		}
		if(!is_writable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "writable file name");
		}
		return $expression;
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing function name.
	 * If so, returns the function name, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not a valid function name
	 * @return string
	 */
	public static function GetInsuredExistingFunction($expression, $parameterName = "functionName", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!function_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name");
		}
		return $expression;
	}
	/**
	 * Checks to see if the supplied object and function name are valid to identify an existing method.
	 * If so, returns an array containing the object as the first element and the name of the method as the second, otherwise throws an exception
	 * @param object $object The object to which the method to be checked belongs
	 * @param string $methodName The name of the method to insure
	 * @param string $objectParameterName The name of the parameter that represents the object in the calling method/function
	 * @param string $methodNameParameterName The name of the parameter of the method name from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null or the method does not exist
	 * @return array
	 */
	public static function GetInsuredExistingMethod($object, $methodName, $objectParameterName = "object", $methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!is_object($object)){
			throw new InvalidParameterTypeException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object");
		}
		if(is_null($object)){
			throw new InvalidParameterValueException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!method_exists($object, $methodName)){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name"
			);
		}
		return array($object, $methodName);
	}
	/**
	 * Checks to see if the supplied class name and method name constitute a valid existing static method name.
	 * If so, returns an array containing the class name as the first element and the name of the method as the second, otherwise throws an exception
	 * @param string $className The name of the class that contains the static method
	 * @param string $methodName The name of the method to insure
	 * @param string $calssNameParameterName The name of the class name parameter from the calling function/method
	 * @param string $methodNameParameterName The name of the method name parameter from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName or $className is not a string
	 * @throws InvalidParameterValueException If $className is not the name of an existing class,
	 * $className or $methodName is an empty string or the combination is not a valid static method name
	 * @return array
	 */
	public static function GetInsuredExistingStaticMethod(
			$className, $methodName, $calssNameParameterName = "className",
			$methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($className)){
			throw new InvalidParameterTypeException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($className === ""){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!class_exists($className)){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing class name");
		}
		if(!method_exists($className, $methodName)){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing static method name"
			);
		}
		return array($className, $methodName);
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing callable function name.
	 * If so, returns the function name, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not a valid callable function name
	 * @return string
	 */
	public static function GetInsuredCallableFunction($expression, $parameterName = "functionName", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!function_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name");
		}
		if(!is_callable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing callable function name");
		}
		return $expression;
	}
	/**
	 * Checks to see if the supplied object and function name are valid to identify an existing callable method.
	 * If so, returns an array containing the object as the first element and the name of the method as the second, otherwise throws an exception
	 * @param object $object The object to which the method to be checked belongs
	 * @param string $methodName The name of the method to insure
	 * @param string $objectParameterName The name of the parameter that represents the object in the calling method/function
	 * @param string $methodNameParameterName The name of the parameter of the method name from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 * @return array
	 */
	public static function GetInsuredCallableMethod($object, $methodName, $objectParameterName = "object", $methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!is_object($object)){
			throw new InvalidParameterTypeException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object");
		}
		if(is_null($object)){
			throw new InvalidParameterValueException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!method_exists($object, $methodName)){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing object method name"
			);
		}
		if(!is_callable(array($object, $methodName))){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing callable object method name"
			);
		}
		return array($object, $methodName);
	}
	/**
	 * Checks to see if the supplied class name and method name constitute a valid existing callable static method name.
	 * If so, returns an array containing the class name as the first element and the name of the method as the second, otherwise throws an exception
	 * @param string $className The name of the class that contains the static method
	 * @param string $methodName The name of the method to insure
	 * @param string $calssNameParameterName The name of the class name parameter from the calling function/method
	 * @param string $methodNameParameterName The name of the method name parameter from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName or $className is not a string
	 * @throws InvalidParameterValueException If $className is not the name of an existing class,
	 * $className or $methodName is an empty string, the combination is not a valid static method name or the method is not callable
	 * @return array
	 */
	public static function GetInsuredCallableStaticMethod(
			$className, $methodName, $calssNameParameterName = "className",
			$methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($className)){
			throw new InvalidParameterTypeException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($className === ""){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!class_exists($className)){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing class name");
		}
		if(!method_exists($className, $methodName)){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing static method name"
			);
		}
		if(!is_callable(array($className, $methodName))){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"name of a callable static method"
			);
		}
		return array($className, $methodName);
	}
	/**
	 * Throws an exception if the value supplied is extracted into an empty string. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the supplied expression extracts to an empty string
	 * @return string
	 */
	public static function GetInsuredNonEmptyStringExtractable($expression, $parameterName = "expression", $functionName = null){
		$res = U::ES($expression);
		if($res === ""){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"an expression that can be converted to a non-empty string"
			);
		}
		return $res;
	}
	/**
	 * Throws an exception of the appropriate type if the supplied expression is not a non-empty string. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the value of the supplied expression is null or empty
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @return string
	 */
	public static function GetInsuredNonEmptyString($expression, $parameterName = "expression", $functionName = null){
		if(is_null($expression) || $expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if (!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		return $expression;
	}
	/**
	 * Throws an exception if a value is not within the specified range (Exclusive of the two values). Returns the expression otherwise.
	 * The order at which the bounds of the range is supplied is not important
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value1 The beginning of the range of values to insure the expression is within
	 * @param mixed $value2 The end of the range of values to insure the expression is within
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the expression value is not within the range between two values (Exclusive of the two values)
	 * @return mixed
	 */
	public static function GetInsuredInRangeExclusive($expression, $value1, $value2, $parameterName = "expression", $functionName = null){
		$v1 = $value1 < $value2 ? $value1 : $value2;
		$v2 = $value1 >= $value2 ? $value1 : $value2;
		if($expression <= $v1 || $expression >= $v2){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value between " . U::ES($v1) . " and " . U::ES($v2)
			);
		}
		return $expression;
	}
	/**
	 * Throws an exception if a value is not within the specified range (inclusive of the two values). Returns the expression otherwise.
	 * The order at which the bounds of the range is supplied is not important
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value1 The beginning of the range of values to insure the expression is within
	 * @param mixed $value2 The end of the range of values to insure the expression is within
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the expression value is not within the range between two values (inclusive of the two values)
	 * @return mixed
	 */
	public static function GetInsuredInRange($expression, $value1, $value2, $parameterName = "expression", $functionName = null){
		$v1 = $value1 < $value2 ? $value1 : $value2;
		$v2 = $value1 >= $value2 ? $value1 : $value2;
		if($expression < $v1 || $expression > $v2){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value between " . U::ES($v1) . " and " . U::ES($v2)
			);
		}
		return $expression;
	}
	/**
	 * Compares two values and throws an exception if the first is not less than the second. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not less than the second ($value)
	 * @return mixed
	 */
	public static function GetInsuredLT($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression >= $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value less than " . U::ES($value)
			);
		}
		return $expression;
	}
	/**
	 * Compares two values and throws an exception if the first is not less than or equals the second. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not less than or equals the second ($value)
	 * @return mixed
	 */
	public static function GetInsuredLTE($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression > $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value less than or equals " . U::ES($value)
			);
		}
		return $expression;
	}
	/**
	 * Compares two values and throws an exception if the first is not greater than the second. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not greater than the second ($value)
	 * @return mixed
	 */
	public static function GetInsuredGT($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression <= $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value greater than " . U::ES($value)
			);
		}
		return $expression;
	}
	/**
	 * Compares two values and throws an exception if the first is not greater than or equals the second. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the first value ($expression) is not greater than or equals the second ($value)
	 * @return mixed
	 */
	public static function GetInsuredGTE($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression < $value){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"A value greater than or equals " . U::ES($value)
			);
		}
		return $expression;
	}
	/**
	 * Compares two values using the equality (==) operator and throws an exception if the two values are not equal. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the two values are not equal (== comparison)
	 * @return mixed
	 */
	public static function GetInsuredEquals($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression != $value){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], U::ES($value));
		}
		return $expression;
	}
	/**
	 * Compares two values using the identical equality (===) operator and throws an exception if the two values are not identical. Returns the expression otherwise.
	 * @param mixed $expression The expression/value to be checked
	 * @param mixed $value The value to check against
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the two values are not identical (=== comparison)
	 * @return mixed
	 */
	public static function GetInsuredIdentical($expression, $value, $parameterName = "expression", $functionName = null){
		if($expression !== $value){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], U::ES($value));
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an integer value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an integer
	 * @return integer
	 */
	public static function GetInsuredInt($expression, $parameterName = "expression", $functionName = null){
		if(!is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "integer");
		}
		return $expression;
	}
	/**
	 *  Checks a value/expression to see if it evaluates to an integer value that is greater than or equals 0. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an integer
	 * @throws InvalidParameterValueException If the value of the parameter is less than zero
	 * @return integer
	 */
	public static function GetInsuredGTE0Int($expression, $parameterName = "expression", $functionName = null){
		if(!is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "integer");
		}
		elseif($expression < 0){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], ">= 0");
		}
		return $expression;
	}
	/**
	 *  Checks a value/expression to see if it evaluates to an integer value that is greater than or equals 0. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an integer
	 * @throws InvalidParameterValueException If the value of the parameter is less than zero
	 * @return integer
	 */
	public static function GetInsuredUnsignedInt($expression, $parameterName = "expression", $functionName = null){
		if(!is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "integer");
		}
		elseif($expression < 0){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], ">= 0");
		}
		return $expression;
	}
	/**
	 *  Checks a value/expression to see if it evaluates to an integer value that is greater than or equals 1. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an integer
	 * @throws InvalidParameterValueException If the value of the parameter is less than 1
	 * @return integer
	 */
	public static function GetInsuredPositiveInt($expression, $parameterName = "expression", $functionName = null){
		if(!is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "integer");
		}
		elseif($expression < 1){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], ">= 0");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a float value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a float
	 * @return float
	 */
	public static function GetInsuredFloat($expression, $parameterName = "expression", $functionName = null){
		if(!is_float($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "float");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a numeric value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a number
	 * @return number
	 */
	public static function GetInsuredNumeric($expression, $parameterName = "expression", $functionName = null){
		if(!is_numeric($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "number");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a boolean value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a boolean
	 * @return boolean
	 */
	public static function GetInsuredBoolean($expression, $parameterName = "expression", $functionName = null){
		if(!is_bool($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "boolean");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a string value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a string
	 * @return string
	 */
	public static function GetInsuredString($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a scalar value (integer, float, boolean, or string). If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a scalar (integer, float, boolean, or string)
	 * @return mixed
	 */
	public static function GetInsuredScalar($expression, $parameterName = "expression", $functionName = null){
		if(!is_scalar($expression)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"scalar (integer, float, boolean, or string)"
			);
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an array value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an array
	 * @return array
	 */
	public static function GetInsuredArray($expression, $parameterName = "expression", $functionName = null){
		if(!is_array($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "array");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an associative array value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an associative array
	 * @return array
	 */
	public static function GetInsuredArrayAssoc($expression, $parameterName = "expression", $functionName = null){
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
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a numeric array value. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a numeric array
	 * @return array
	 */
	public static function GetInsuredArrayNumeric($expression, $parameterName = "expression", $functionName = null){
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
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it's not null. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is null
	 * @return mixed
	 */
	public static function GetInsuredNotNull($expression, $parameterName = "expression", $functionName = null){
		if(is_null($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "not null");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an object value (of any class). If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an object of any class
	 * @return mixed
	 */
	public static function GetInsuredInstance($expression, $parameterName = "expression", $functionName = null){
		if(!is_object($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object of any class");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a resource. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a resource
	 * @return resource
	 */
	public static function GetInsuredPHPResource($expression, $parameterName = "expression", $functionName = null){
		if(!is_resource($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "PHP resource");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an IObject object. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an IObject object
	 * @return IObject
	 */
	public static function GetInsuredIObject($expression, $parameterName = "expression", $functionName = null){
		if(!is_a($expression, "\\Core\\IObject")){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"\\Core\\IObject or a class that implements it"
			);
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an object from a class that extends the Object class. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an Object object
	 * @return Object
	 */
	public static function GetInsuredObject($expression, $parameterName = "expression", $functionName = null){
		if(!is_a($expression, "\\Core\\Object")){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "\\Core\\Object or one of its children");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an object from a class that either is or extends a supplied class.
	 * If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $classToInsure The name of the class that the expression must be from or from one of its children
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an object from the class $classToInsure or one of its children
	 * @return mixed
	 */
	public static function GetInsuredIsA($expression, $classToInsure, $parameterName = "expression", $functionName = null){
		if(!is_a($expression, $classToInsure)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "{$classToInsure} or one of its children");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a primitive value (int, float, boolean, string, null, array, resource). If so, expression is returned.
	 * If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a primitive value (int, float, boolean, string, null, array, resource)
	 * @return mixed
	 */
	public static function GetInsuredPrimitive($expression, $parameterName = "expression", $functionName = null){
		if(!is_null($expression) && !is_scalar($expression) && !is_array($expression) && !is_resource($expression)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"php primitive types (int, float, boolean, string, null, array, resource)"
			);
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to a built-in value (int, float, boolean, string, null, array, resource, built-in objects).
	 * If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not a built-in value (int, float, boolean, string, null, array, resource, built-in objects)
	 * @return mixed
	 */
	public static function GetInsuredBuiltIn($expression, $parameterName = "expression", $functionName = null){
		if(!(Type::Of($expression)->IsBuiltIn)){
			throw new InvalidParameterTypeException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"php built-in types (int, float, boolean, string, null, array, resource, built-in objects)"
			);
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an instance of an anonymous class. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an instance of an anonymous class
	 * @return mixed
	 */
	public static function GetInsuredAnonymous($expression, $parameterName = "expression", $functionName = null){
		if(!(Type::Of($expression)->IsAnonymous)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an anonymous class");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an existing class's name. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param unknown $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the type of the parameter is not a string
	 * @throws InvalidParameterValueException If the value of the parameter is not a valid existing class name
	 * @return string
	 */
	public static function GetInsuredExistingClass($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string containing an existing class name");
		}
		if(!class_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an existing class name");
		}
		return $expression;
	}
	/**
	 * Checks a value/expression to see if it evaluates to an existing interface's name. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param unknown $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the type of the parameter is not a string
	 * @throws InvalidParameterValueException If the value of the parameter is not a valid existing interface's name
	 * @return string
	 */
	public static function GetInsuredExistingInterface($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string containing an existing interface name");
		}
		if(!interface_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an existing interface name");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an existing trait's name. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param unknown $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the type of the parameter is not a string
	 * @throws InvalidParameterValueException If the value of the parameter is not a valid existing trait's name
	 * @return string
	 */
	public static function GetInsuredExistingTrait($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string containing an existing trait name");
		}
		if(!trait_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an existing trait name");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an instance of an instantiable class. If so, expression is returned. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an instance of an instantiable class
	 * @return mixed
	 */
	public static function GetInsuredOfInstantiableType($expression, $parameterName = "expression", $functionName = null){
		if(!(Type::Of($expression)->IsInstantiable)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an instantiable class");
		}
		return $expression;
	}
	###########################################################################
	# Insure Parameter Value Methods
	###########################################################################
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing file name. If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing file name
	 */
	public static function InsureExistingFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing file name. If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing file name
	 */
	public static function InsureFileExists($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing readable file name. If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing readable file name
	 */
	public static function InsureReadableFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
		if(!is_readable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "readable file name");
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing writable file name. If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing writable file name
	 */
	public static function InsureWritableFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
		if(!is_writable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "writable file name");
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing readable & writable file name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not an existing readable & writable file name
	 */
	public static function InsureReadWriteFile($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!file_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing file name");
		}
		if(!is_readable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "readable file name");
		}
		if(!is_writable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "writable file name");
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing function name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not a valid function name
	 */
	public static function InsureExistingFunction($expression, $parameterName = "functionName", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!function_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name");
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing function name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not a valid function name
	 */
	public static function InsureFunctionExists($expression, $parameterName = "functionName", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!function_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name");
		}
	}
	/**
	 * Checks to see if the supplied object and function name are valid to identify an existing method.
	 * If so, nothing happens, otherwise throws an exception
	 * @param object $object The object to which the method to be checked belongs
	 * @param string $methodName The name of the method to insure
	 * @param string $objectParameterName The name of the parameter that represents the object in the calling method/function
	 * @param string $methodNameParameterName The name of the parameter of the method name from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null or the method does not exist
	 */
	public static function InsureExistingMethod($object, $methodName, $objectParameterName = "object", $methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!is_object($object)){
			throw new InvalidParameterTypeException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object");
		}
		if(is_null($object)){
			throw new InvalidParameterValueException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!method_exists($object, $methodName)){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name"
			);
		}
	}
	/**
	 * Checks to see if the supplied object and function name are valid to identify an existing method.
	 * If so, nothing happens, otherwise throws an exception
	 * @param object $object The object to which the method to be checked belongs
	 * @param string $methodName The name of the method to insure
	 * @param string $objectParameterName The name of the parameter that represents the object in the calling method/function
	 * @param string $methodNameParameterName The name of the parameter of the method name from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null or the method does not exist
	 */
	public static function InsureMethodExists($object, $methodName, $objectParameterName = "object", $methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!is_object($object)){
			throw new InvalidParameterTypeException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object");
		}
		if(is_null($object)){
			throw new InvalidParameterValueException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!method_exists($object, $methodName)){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name"
			);
		}
	}
	/**
	 * Checks to see if the supplied class name and method name constitute a valid existing static method name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param string $className The name of the class that contains the static method
	 * @param string $methodName The name of the method to insure
	 * @param string $calssNameParameterName The name of the class name parameter from the calling function/method
	 * @param string $methodNameParameterName The name of the method name parameter from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName or $className is not a string
	 * @throws InvalidParameterValueException If $className is not the name of an existing class,
	 * $className or $methodName is an empty string or the combination is not a valid static method name
	 */
	public static function InsureExistingStaticMethod(
			$className, $methodName, $calssNameParameterName = "className",
			$methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($className)){
			throw new InvalidParameterTypeException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($className === ""){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!class_exists($className)){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing class name");
		}
		if(!method_exists($className, $methodName)){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing static method name"
			);
		}
	}
	/**
	 * Checks to see if the supplied class name and method name constitute a valid existing static method name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param string $className The name of the class that contains the static method
	 * @param string $methodName The name of the method to insure
	 * @param string $calssNameParameterName The name of the class name parameter from the calling function/method
	 * @param string $methodNameParameterName The name of the method name parameter from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName or $className is not a string
	 * @throws InvalidParameterValueException If $className is not the name of an existing class,
	 * $className or $methodName is an empty string or the combination is not a valid static method name
	 */
	public static function InsureStaticMethodExists(
			$className, $methodName, $calssNameParameterName = "className",
			$methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($className)){
			throw new InvalidParameterTypeException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($className === ""){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!class_exists($className)){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing class name");
		}
		if(!method_exists($className, $methodName)){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing static method name"
			);
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing callable function name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not a valid callable function name
	 */
	public static function InsureCallableFunction($expression, $parameterName = "functionName", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!function_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name");
		}
		if(!is_callable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing callable function name");
		}
	}
	/**
	 * Checks to see if the supplied expression is a non-empty string that is an existing callable function name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 * @throws InvalidParameterValueException If the supplied expression is an empty string or not a valid callable function name
	 */
	public static function InsureFunctionIsCallable($expression, $parameterName = "functionName", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!function_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing function name");
		}
		if(!is_callable($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing callable function name");
		}
	}
	/**
	 * Checks to see if the supplied object and function name are valid to identify an existing callable method.
	 * If so, nothing happens, otherwise throws an exception
	 * @param object $object The object to which the method to be checked belongs
	 * @param string $methodName The name of the method to insure
	 * @param string $objectParameterName The name of the parameter that represents the object in the calling method/function
	 * @param string $methodNameParameterName The name of the parameter of the method name from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 */
	public static function InsureCallableMethod($object, $methodName, $objectParameterName = "object", $methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!is_object($object)){
			throw new InvalidParameterTypeException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object");
		}
		if(is_null($object)){
			throw new InvalidParameterValueException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!method_exists($object, $methodName)){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing object method name"
			);
		}
		if(!is_callable(array($object, $methodName))){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing callable object method name"
			);
		}
	}
	/**
	 * Checks to see if the supplied object and function name are valid to identify an existing callable method.
	 * If so, nothing happens, otherwise throws an exception
	 * @param object $object The object to which the method to be checked belongs
	 * @param string $methodName The name of the method to insure
	 * @param string $objectParameterName The name of the parameter that represents the object in the calling method/function
	 * @param string $methodNameParameterName The name of the parameter of the method name from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 */
	public static function InsureMethodIsCallable($object, $methodName, $objectParameterName = "object", $methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!is_object($object)){
			throw new InvalidParameterTypeException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "object");
		}
		if(is_null($object)){
			throw new InvalidParameterValueException($objectParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-null object");
		}
		if(!method_exists($object, $methodName)){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing object method name"
			);
		}
		if(!is_callable(array($object, $methodName))){
			throw new InvalidParameterValueException(
					"{$objectParameterName}->{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing callable object method name"
			);
		}
	}
	/**
	 * Checks to see if the supplied class name and method name constitute a valid existing callable static method name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param string $className The name of the class that contains the static method
	 * @param string $methodName The name of the method to insure
	 * @param string $calssNameParameterName The name of the class name parameter from the calling function/method
	 * @param string $methodNameParameterName The name of the method name parameter from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName or $className is not a string
	 * @throws InvalidParameterValueException If $className is not the name of an existing class,
	 * $className or $methodName is an empty string, the combination is not a valid static method name or the method is not callable
	 */
	public static function InsureCallableStaticMethod(
			$className, $methodName, $calssNameParameterName = "className",
			$methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($className)){
			throw new InvalidParameterTypeException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($className === ""){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!class_exists($className)){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing class name");
		}
		if(!method_exists($className, $methodName)){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing static method name"
			);
		}
		if(!is_callable(array($className, $methodName))){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"name of a callable static method"
			);
		}
	}
	/**
	 * Checks to see if the supplied class name and method name constitute a valid existing callable static method name.
	 * If so, nothing happens, otherwise throws an exception
	 * @param string $className The name of the class that contains the static method
	 * @param string $methodName The name of the method to insure
	 * @param string $calssNameParameterName The name of the class name parameter from the calling function/method
	 * @param string $methodNameParameterName The name of the method name parameter from the calling function/method
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If $methodName or $className is not a string
	 * @throws InvalidParameterValueException If $className is not the name of an existing class,
	 * $className or $methodName is an empty string, the combination is not a valid static method name or the method is not callable
	 */
	public static function InsureStaticMethodIsCallable(
			$className, $methodName, $calssNameParameterName = "className",
			$methodNameParameterName = "methodName", $functionName = null){
		if(!is_string($className)){
			throw new InvalidParameterTypeException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if(!is_string($methodName)){
			throw new InvalidParameterTypeException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
		if($className === ""){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if($methodName === ""){
			throw new InvalidParameterValueException($methodNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if(!class_exists($className)){
			throw new InvalidParameterValueException($calssNameParameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing class name");
		}
		if(!method_exists($className, $methodName)){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"], "existing static method name"
			);
		}
		if(!is_callable(array($className, $methodName))){
			throw new InvalidParameterValueException(
					"{$calssNameParameterName}::{$methodNameParameterName}", $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"name of a callable static method"
			);
		}
	}
	/**
	 * Throws an exception if the value supplied is extracted into an empty string
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the supplied expression extracts to an empty string
	 */
	public static function InsureNonEmptyStringExtractable($expression, $parameterName = "expression", $functionName = null){
		if(U::ES($expression) === ""){
			throw new InvalidParameterValueException(
					$parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"],
					"an expression that can be converted to a non-empty string"
			);
		}
	}
	/**
	 * Throws an exception of the appropriate type if the supplied expression is not a non-empty string
	 * @param mixed $expression The expression/value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterValueException If the value of the supplied expression is null or empty
	 * @throws InvalidParameterTypeException If the supplied expression is not a string
	 */
	public static function InsureNonEmptyString($expression, $parameterName = "expression", $functionName = null){
		if(is_null($expression) || $expression === ""){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "non-empty string");
		}
		if (!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string");
		}
	}
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
	 * @param mixed $expression The value to be checked
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
	 *  Checks a value/expression to see if it evaluates to an integer value that is greater than or equals 0. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an integer
	 * @throws InvalidParameterValueException If the value of the parameter is less than zero
	 */
	public static function InsureGTE0Int($expression, $parameterName = "expression", $functionName = null){
		if(!is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "integer");
		}
		elseif($expression < 0){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], ">= 0");
		}
	}
	/**
	 *  Checks a value/expression to see if it evaluates to an integer value that is greater than or equals 1. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an integer
	 * @throws InvalidParameterValueException If the value of the parameter is less than 1
	 */
	public static function InsurePositiveInt($expression, $parameterName = "expression", $functionName = null){
		if(!is_int($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "integer");
		}
		elseif($expression < 1){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], ">= 0");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to a float value. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * Checks a value/expression to see if it evaluates to an existing class's name. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param unknown $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the type of the parameter is not a string
	 * @throws InvalidParameterValueException If the value of the parameter is not a valid existing class name
	 */
	public static function InsureClassExists($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string containing an existing class name");
		}
		if(!class_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an existing class name");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an existing interface's name. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param unknown $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the type of the parameter is not a string
	 * @throws InvalidParameterValueException If the value of the parameter is not a valid existing interface's name
	 */
	public static function InsureInterfaceExists($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string containing an existing interface name");
		}
		if(!interface_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an existing interface name");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an existing trait's name. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param unknown $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the type of the parameter is not a string
	 * @throws InvalidParameterValueException If the value of the parameter is not a valid existing trait's name
	 */
	public static function InsureTraitExists($expression, $parameterName = "expression", $functionName = null){
		if(!is_string($expression)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "string containing an existing trait name");
		}
		if(!trait_exists($expression)){
			throw new InvalidParameterValueException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an existing trait name");
		}
	}
	/**
	 * Checks a value/expression to see if it evaluates to an instance of an instantiable class. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is not an instance of an instantiable class
	 */
	public static function InsureOfInstantiableType($expression, $parameterName = "expression", $functionName = null){
		if(!(Type::Of($expression)->IsInstantiable)){
			throw new InvalidParameterTypeException($parameterName, $functionName ?: debug_backtrace(0, 2)[1]["function"], "an instantiable class");
		}
	}
	###########################################################################
	/**
	 * Checks a value/expression to see if it's not an integer value. If so, nothing happens. If not, throws an exception.
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
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
	 * @param mixed $expression The value to be checked
	 * @param string $parameterName The name of the parameter that is being checked
	 * @param string $functionName The name of the function/method that the check occured within. If not provided, the name of the calling function will be used.
	 * @throws InvalidParameterTypeException If the value of the parameter is an instance of an instantiable class
	 */
	public static function InsureNotOfInstantiableType($expression, $parameterName = "expression", $functionName = null){
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