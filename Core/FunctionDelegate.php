<?php
namespace Core;
/**
 * A delegate capable of invoking a function
* @property array $Parameters An array of parameters to be used with the function/method
* @property string $FunctionName A readonly property which gets the name of the function the delegate invokes (namespace qualified)
 */
final class FunctionDelegate extends Delegate{
	/**
	 * The name of the function this delegate invokes
	 * @var string
	 */
	protected $_function;
	/**
	 * Instantiates a new FunctionDelegate object capable of invoking the function with name $functionName and with the supplied parameters
	 * @param string $functionName The name of the function to be invoked by the delegate, qualified with the namespace name
	 * @param array $parameters An array of parameters to pass to the function when invoking it
	 * @throws InvalidParameterTypeException If the supplied $functionName is not a string
	 * @throws InvalidParameterValueException If the supplied $functionName is an empty string or not a valid function name
	 */
	public function __construct($functionName, array $parameters = null){
		parent::__construct($parameters);
		$this->_function = Params::GetInsuredCallableFunction($functionName, "functionName");
	}
	/**
	 * Getter for the FunctionName property which gets the name of the function the delegate invokes
	 * @return string
	 */
	public function FunctionName(){
		return $this->_function;
	}
	/**
	 * Actually calls the underlying user function with the supplied parameters
	 * {@inheritDoc}
	 * @see \Core\Delegate::Invoke()
	 */
	public function Invoke(){
		return call_user_func_array($this->_function, $this->_params);
	}
}