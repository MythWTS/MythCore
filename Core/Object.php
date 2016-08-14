<?php
namespace Core;

/**
 * class Object - base class of all classes in the framework
 */
class Object implements IObject{
	use TObject;
	/**
	 * Magic __toString() method. Returns a string representation of the object when the object is used in a context that expects a string. It is implemented in
	 * the Object class and not the TObject trait so that it will be overriden not overwritten in subclasses.
	 * @return string A string representation of the object
	 */
	public function __toString(){return get_class($this);}
}