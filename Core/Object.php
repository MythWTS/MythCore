<?php
namespace Core;

/**
 * class Object - base class of all classes in the framework
 */
class Object implements IObject{
	use TObject;
	/**
	 * Magic getter. MythCore framework enables the use of structured properties in different conventions in a prioertized manner. This method is the
	 * getter part which is called when a property has been called in right-term expressions. In other words, if you want to get the value associated with the property.
	 * The way this works is the framework checks to see if there is any getter for this property and if so calls it, otherwise it returns null.
	 * Getters can be:
	 * 1) A method with the same name as the property and that can be called with no arguments and return a value.
	 * 2) A method with the name Get[PropertyName] that can be called with no arguments and return a value.
	 * 3) A method with the name get[PropertyName] that can be called with no arguments and return a value.
	 * When a method like this is found, it is called with no arguments and the result is returned.
	 * @param string $propertyName - the name of the property used to access the getter. Passed automatically by php to this method.
	 * @return mixed|NULL
	 */
	public function __get($propertyName){
		if(method_exists($this, $propertyName)){return call_user_func(array($this, $propertyName));}
		else if(method_exists($this, "Get{$propertyName}")){return call_user_func(array($this, "Get{$propertyName}"));}
		else if(method_exists($this, "get{$propertyName}")){return call_user_func(array($this, "get{$propertyName}"));}
		else{return null;}
	}
	/**
	 * Magic setter. MythCore framework enables the use of structured properties in different conventions in a prioertized manner. This method is the
	 * setter part which is called when the property has been called as a left-term in an expression. That is, if the property was assigned.
	 * The framework checks if a setter exists for the property and if so calls it and returns the result or just does nothing if no setter is found and returns null.
	 * Setters can be:
	 * 1) A method with the same name as the property and that can be called with one argument and return an optional value.
	 * 2) A method with the name Set[PropertyName] that can be called with one argument and return an optional value.
	 * 3) A method with the name set[PropertyName] that can be called with one argument and return an optional value.
	 * @param string $propertyName the name of the property that was called. Passed automatically by php to this method.
	 * @param mixed $value - the value that was assigned to the property name. Passed automatically by php to this method.
	 * @return mixed|NULL
	 */
	public function __set($propertyName, $value){
		if(method_exists($this, $propertyName)){return call_user_func(array($this, $propertyName), $value);}
		else if(method_exists($this, "Set{$propertyName}")){return call_user_func(array($this, "Set{$propertyName}"), $value);}
		else if(method_exists($this, "set{$propertyName}")){return call_user_func(array($this, "set{$propertyName}"), $value);}
		else{return null;}
	}
}