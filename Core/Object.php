<?php
namespace Core;
/**
 * Base class of all classes in the framework
 */
class Object implements IObject{
	use TObject;
	/**
	 * Gets information about the type of this object in the form of a Type object suitable for use with the MythCore Reflection component/feature. Implemeneted here
	 * so that it will not be overriden.
	 * {@inheritDoc}
	 * @see \Core\IObject::GetType()
	 */
	final public function GetType(){
		return new Type(get_class($this));
	}
	/**
	 * Magic __toString() method. Returns a string representation of the object when the object is used in a context that expects a string. It is implemented in
	 * the Object class and not the TObject trait so that it will be overriden not overwritten in subclasses.
	 * Should be overriden if the class produces instances that can be represented as strings.
	 * {@inheritDoc}
	 * @see \Core\IObject::__toString()
	 */
	public function __toString(){return get_class($this);}
}