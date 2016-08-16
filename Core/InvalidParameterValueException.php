<?php
namespace Core;
/**
 * Exception thrown when the parameter that is passed to a method has an invalid value
 * @property string $Message The exception message
 * @property int $Code The error code associated with this exception
 * @property string $File The filename of the file where the exception occured
 * @property int $Line The line number of the code line where the exception was thrown
 * @property array $Trace An array representing the stack trace
 * @property Exception $Previous The previous exception
 * @property string $TraceAsString A string representation of the stack trace
 * @property string $ParameterName The name of the parameter that caused the exception to be thrown
 * @property string $FunctionName The name of the function/method that was passed the invalid parameter
 * @property string $ExpectedValues A string describing the valid expected value/values
 */
class InvalidParameterValueException extends InvalidParameterException{
	/**
	 * A string explaining the valid expected value/values
	 * @var string
	 */
	protected $_expectedValues;
	/**
	 * Creates a new instance of the exception
	 * @param string $parameterName The name of the parameter that was invalid
	 * @param string $functionName The name of the function/method that was passed the invalid parameter
	 * @param string $expectedValues A string explaining the valid expected value/values
	 */
	public function __construct($parameterName, $functionName, $expectedValues){
		parent::__construct($parameterName, $functionName);
		$this->_expectedValues = $expectedValues;
		$this->message = "The parameter [{$this->_parameterName}] passed to function/method [{$this->_functionName}] was an invalid value. [{$this->_expectedValues}] expected.";
	}
	/**
	 * Gets a string describing the valid expected value/values
	 * @return string
	 */
	public function ExpectedValues(){
		return $this->_expectedValues;
	}
}