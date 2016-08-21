<?php
namespace Core;
/**
 * A delegate capable of invoking a static class method
 * @property array $Parameters An array of parameters to be used with the function/method
 * @property string $ClassName The name of the class that has the static method to invoke
 * @property string $MethodName The name of the method to be invoked by the delegate
 */
final class StaticMethodDelegate extends Delegate{
	/**
	 * The name of the method this delegate will invoke
	 * @var string
	 */
	protected $_methodName;
	/**
	 * The name of the class that has the static method to invoke
	 * @var string
	 */
	protected $_ownerClass;
	/**
	 * Instantiates a new MethodDelegate object with the supplied object, method name and parameters
	 * @param string $className The name of the class that has the static method to invoke
	 * @param string $methodName The name of the method to be invoked
	 * @param array $parameters The parameters to provide to the method when invoking it
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 */
	public function __construct($className, $methodName, array $parameters = null){
		Params::InsureCallableStaticMethod($className, $methodName, "className", "methodName");
		$this->_ownerClass = $className;
		$this->_methodName = $methodName;
		parent::__construct($parameters);
	}
	/**
	 * Getter for the ClassName property representing the name of the class of the method to be invoked by this delegate
	 * @return string
	 */
	public function ClassName(){
		return $this->_ownerClass;
	}
	/**
	 * Getter for the method name of the method this delegate will invoke
	 * @return string
	 */
	public function MethodName(){
		return $this->_methodName;
	}
	/**
	 * Calls the method represented by this delegate and returns the value returned by it
	 * {@inheritDoc}
	 * @see \Core\Delegate::Invoke()
	 */
	public function Invoke(){
		return call_user_func_array(array($this->_ownerClass, $this->_methodName), $this->_params);
	}
}