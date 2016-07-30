<?php
namespace Core;
/**
 * Exception thrown when the type of a parameter that is passed to a method is invalid
 * @property string Message The exception message
 * @property int Code The error code associated with this exception
 * @property string File The filename of the file where the exception occured
 * @property int Line The line number of the code line where the exception was thrown
 * @property array Trace An array representing the stack trace
 * @property Exception Previous The previous exception
 * @property string TraceAsString A string representation of the stack trace
 * @property string ParameterName The name of the parameter that caused the exception to be thrown
 * @property string FunctionName The name of the function/method that was passed the invalid parameter
 * @property string ExpectedType The name of the type expected to be passed instead
 */
class InvalidParameterTypeException extends InvalidParameterException{
	/**
	 * The name of the correct expected type for the parameter
	 * @var string
	 */
	protected $_expectedType;
	/**
	 * Creates a new instance of the exception
	 * @param string $parameterName - the name of the parameter that was invalid
	 * @param string $functionName - the name of the function/method that was passed the invalid parameter
	 * @param string $expectedType - the name of the type expected for the parameter
	 */
	public function __construct($parameterName, $functionName, $expectedType){
		parent::__construct($parameterName, $functionName);
		$this->_expectedType = $expectedType;
		$this->message = "The parameter [{$this->_parameterName}] passed to function/method [{$this->_functionName}] was of invalid type. [{$this->_expectedType}] expected.";
	}
	/**
	 * Gets the name of the type expected to be passed instead
	 * @return string
	 */
	public function ExpectedType(){
		return $this->_expectedType;
	}
}