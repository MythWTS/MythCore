<?php
namespace Core;
/**
 * Denotes an invalid parameter error. Serves as the base generic class for other invalid parameter exceptions
 * @property string ParameterName The name of the parameter that caused the exception to be thrown
 * @property string FunctionName The name of the function/method that was passed the invalid parameter
 */
class InvalidParameterException extends ExceptionBase{
	/**
	 * The name of the parameter that was invalid
	 * @var string
	 */
	protected $_parameterName;
	/**
	 * The name of the function the invalid parameter was passed to
	 * @var string
	 */
	protected $_functionName;
	/**
	 * Creates a new instance of the InvalidParameterException exception
	 * @param string $parameterName - the name of the parameter that was invalid
	 * @param string $functionName - the name of the function/method that was passed the invalid parameter
	 */
	public function __construct($parameterName, $functionName){
		$this->_functionName = $functionName; $this->_parameterName = $parameterName;
		parent::__construct("The parameter [{$this->_parameterName}] passed to function/method [{$this->_functionName}] was invalid", 1);
	}
	/**
	 * Gets the name of the parameter that caused the exception to be thrown
	 * @return string
	 */
	public function ParameterName(){
		return $this->_parameterName;
	}
	/**
	 * Gets the name of the function/method that was passed the invalid parameter
	 * @return string
	 */
	public function FunctionName(){
		return $this->_functionName;
	}
}