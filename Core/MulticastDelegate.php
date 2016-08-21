<?php
namespace Core;
/**
 * Base Delegate class for multicast delegates. Multicast delegates have invocation lists and are capable of invoking more than one method/function each time.
 * @property array $Parameters An array of parameters to be used with the function/method
 * @property Delegate[] $InvocationList An array of Delegate objects that represent the current invocation list of the multicast delegate
 */
class MulticastDelegate extends Delegate{
	/**
	 * List of delegates that will be invoked when this multicast is invoked
	 * @var array
	 */
	protected $_callList;
	/**
	 * Initializes the multicast delegate with optional list of methods and parameters
	 * @param array $callList An array of strings (function names), arrays of two members (either object-method name or class-static method name pairs)
	 * delegates, or any combination of that. This will be used to initialize the list of delegates to invoke when this multicast is invoked
	 * @param array $parameters The parameters that will be used when invoking this multicast
	 */
	public function __construct(array $callList = null, array $parameters = null){
		parent::__construct($parameters);
		$this->_callList = array();
		if(!is_null($callList)){
			foreach ($callList as $function){
				if(is_string($function)){
					$this->_callList[] = new FunctionDelegate($function);
				}
				elseif (is_array($function) && count($function) == 2){
					if(is_object($function[0])){
						$this->_callList[] = new MethodDelegate($function[0], $function[1]);
					}
					elseif(is_string($functionp0[])){
						$this->_callList[] = new StaticMethodDelegate($function[0], $function[1]);
					}
				}
				elseif (is_a($function, "\\Core\\Delegate")){
					$this->_callList[] = $function;
				}
			}
		}
	}
	/**
	 * Returns the internal invocation list as. This method is a read only getter for the InvocationList property.
	 * @return Delegate[]
	 */
	public function InvocationList(){
		return $this->_callList;
	}
	/**
	 * Adds a single delegate to the invocation list. Tries to create a delegate out of the parameter as follows:
	 * <ol>
	 *  <li>If a delegate object is passed, it is added</li>
	 *  <li>If a string is passed it will be used to create a FunctionDelegate object which in turn will be added to the invocation list</li>
	 *  <li>If an array of 2 items is passed,
	 *   <ol>
	 *    <li>If the first is an object and the second is a string, a MethodDelagate will be created and added</li>
	 *    <li>If the two items are strings, a StaticMethodDelegate will be created and added</li>
	 *   </ol>
	 *  <li>Anything else will throw an exception</li>
	 * </ol>
	 * The method returns this object for method chaining
	 * @param mixed $delegate The delegate to be added
	 * @throws InvalidParameterTypeException If the parameter can not be converted to a single delegate
	 * @return \Core\MulticastDelegate
	 */
	public function Add($delegate){
		if(is_a($delegate, "\\Core\Delegate")){
			$this->_callList[] = $delegate;
		}
		elseif (is_string($delegate)){
			$this->_callList[] = new FunctionDelegate($delegate);
		}
		elseif (is_array($delegate) && count($delegate) == 2){
			if(is_object($delegate[0]) && is_string($delegate[1])){
				$this->_callList = new MethodDelegate($delegate[0], $delegate[1]);
			}
			elseif(is_string($delegate[0]) && is_string($delegate[1])){
				$this->_callList[] = new StaticMethodDelegate($delegate[0], $delegate[1]);
			}
		}
		else {
			throw new InvalidParameterTypeException("delegate", "MulticastDelegate::Add()", "string, delegate, or an array of object-string or string string pair");
		}
		return $this;
	}
	/**
	 * Creates a FunctionDelegate and adds it to the invocation list. Returns this object for method chaining.
	 * @param string $functionName The name of the function to add to the multicast
	 * @throws InvalidParameterTypeException If the supplied $functionName is not a string
	 * @throws InvalidParameterValueException If the supplied $functionName is an empty string or not a valid function name
	 * @return \Core\MulticastDelegate
	 */
	public function AddFunction($functionName){
		$this->_callList[] = new FunctionDelegate($functionName);
		return $this;
	}
	/**
	 * Creates and adds a MethodDelgate to the invocation list. Returns this object for method chaining.
	 * @param object $object The object which has the method to be invoked
	 * @param string $methodName The name of the method to be invoked
	 * @throws InvalidParameterTypeException If $methodName is not a string or $object is not an object
	 * @throws InvalidParameterValueException If $methodName is empty, $object is null, the method does not exist or the method is not callable
	 * @return \Core\MulticastDelegate
	 */
	public function AddMethod($object, $methodName){
		$this->_callList[] = new MethodDelegate($object, $methodName);
		return $this;
	}
	/**
	 * Creates and adds a StaticMethodDelegate to the invocation list. Returns this object for method chaining.
	 * @param string $className The name of the class that has the static method to invoke
	 * @param string $methodName The name of the method to be invoked
	 * @throws InvalidParameterTypeException If $methodName is not a string or $className is not a valid class name
	 * @throws InvalidParameterValueException If $methodName is empty, $className is empty, the method does not exist or the method is not callable
	 * @return \Core\MulticastDelegate
	 */
	public function AddStaticMethod($className, $methodName){
		$this->_callList[] = new StaticMethodDelegate($className, $methodName);
		return $this;
	}
	/**
	 * Adds a delegate to the invocation list. Returns this object for method chaining.
	 * @param Delegate $delegate The delegate to add to the invocation list. Parameters will be overriden at each invoke
	 * @return \Core\MulticastDelegate
	 */
	public function AddDelegate(Delegate $delegate){
		$this->_callList[] = $delegate;
		return $this;
	}
	/**
	 * Searches for a delegate in the invocation list and removes it. Returns the current object for method chaining.
	 * @param Delegate $delegate
	 * @return \Core\MulticastDelegate
	 */
	public function RemoveDelegate(Delegate $delegate){
		$k = -1;
		foreach ($this->_callList as $key=>$del){
			if($del == $delegate){
				$k = $key;
				break;
			}
		}
		if($k > -1){
			unset($this->_callList[$k]);
		}
		return $this;
	}
	/**
	 * Invokes all the delegates in the call list using the parameters supplied. Returns the current object for method chaining.
	 * {@inheritDoc}
	 * @see \Core\Delegate::Invoke()
	 * @return \Core\MulticastDelegate
	 */
	public function Invoke(){
		foreach ($this->_callList as $delegate){
			$delegate->Parameters = &$this->_params;
			$delegate->Invoke();
		}
		return $this;
	}
}