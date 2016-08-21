<?php
namespace Core;
/**
 * Abstract base class of all delegates in the MythCore framework. A delegate is an object that holds information necessary to call a function or method.
 * @property array $Parameters An array of parameters to be used with the function/method
 */
abstract class Delegate extends Object implements IInvocable, IParameterized{
	/**
	 * Internal storage of the parameters to the method/function pointed to by the delegate
	 * @var array
	 */
	protected $_params;
	###########################################################################
	# Static Factory Methods
	###########################################################################
	/**
	 * Creates a new Delegate object from a function
	 * @param string $functionName The name of the function to be invoked by the delegate, qualified with the namespace name
	 * @param array $parameters An array of parameters to pass to the function when invoking it
	 * @throws InvalidParameterTypeException If the supplied $functionName is not a string
	 * @throws InvalidParameterValueException If the supplied $functionName is an empty string or not a valid function name
	 * @return \Core\FunctionDelegate
	 */
	public static function ForFunction($functionName, array $parameters = null){
		return new FunctionDelegate($functionName, $parameters);
	}
	/**
	 * Creates a new Delegate object from an instance method
	 * @param object $object The object which has the method to be invoked
	 * @param string $methodName The name of the method to be invoked
	 * @param array $parameters The parameters to provide to the method when invoking it
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 * @return \Core\MethodDelegate
	 */
	public static function ForInstanceMethod($object, $methodName, array $parameters = null){
		return new MethodDelegate($object, $methodName, $parameters);
	}
	/**
	 * Creates a new Delegate object from a static class method
	 * @param string $className The name of the class that has the static method to invoke
	 * @param string $methodName The name of the method to be invoked
	 * @param array $parameters The parameters to provide to the method when invoking it
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 * @return \Core\StaticMethodDelegate
	 */
	public static function ForStaticMethod($className, $methodName, array $parameters = null){
		return new StaticMethodDelegate($className, $methodName, $parameters);
	}
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor to be used by child classes. Initializes the function name and parameters properties
	 * @param array $parameters An array of parameters to initialize the Parameters property
	 */
	protected function __construct(array $parameters = null){
		if(is_null($parameters)){
			$this->_params = array();
		}
		else{
			$this->_params = $parameters;
		}
	}
	/**
	 * Accessor for the Parameters property
	 * {@inheritDoc}
	 * @see \Core\IParameterized::Parameters()
	 */
	###########################################################################
	# Implementation of IParameterized
	###########################################################################
	public function Parameters(array $value = null){
		if($value !== null){
			$this->_params = $value;
		}
		return $this->_params;
	}
	/**
	 * To be implemented by extending classes
	 * {@inheritDoc}
	 * @see \Core\IInvocable::Invoke()
	 */
	###########################################################################
	# Abstract Methods
	###########################################################################
	abstract public function Invoke();
}