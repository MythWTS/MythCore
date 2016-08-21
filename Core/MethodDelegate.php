<?php
namespace Core;
/**
 * A delegate capable of invoking an instnace method
 * @property array $Parameters An array of parameters to be used with the function/method
 * @property object $Object The instance object that has the method to be invoked by this delegate
 * @property string $MethodName The name of the method to be invoked by the delegate
 */
final class MethodDelegate extends Delegate{
	/**
	 * The name of the method this delegate will invoke
	 * @var string
	 */
	protected $_methodName;
	/**
	 * The object this delegate's method belongs to
	 * @var object
	 */
	protected $_ownerObject;
	/**
	 * Instantiates a new MethodDelegate object with the supplied object, method name and parameters
	 * @param object $object The object which has the method to be invoked
	 * @param string $methodName The name of the method to be invoked
	 * @param array $parameters The parameters to provide to the method when invoking it
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 */
	public function __construct($object, $methodName, array $parameters = null){
		Params::InsureCallableMethod($object, $methodName, "object", "methodName");
		$this->_ownerObject = $object;
		$this->_methodName = $methodName;
		parent::__construct($parameters);
	}
	/**
	 * Getter for the Object property representing the owner object of the method to be invoked by this delegate
	 * @return object
	 */
	public function Object(){
		return $this->_ownerObject;
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
		return call_user_func_array(array($this->_ownerObject, $this->_methodName), $this->_params);
	}
}