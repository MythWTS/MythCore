<?php
namespace Core;
/**
 * interface IObject - root interface in the framework.
 * Every class and interface within the framework implements this interface either directly or through one of its ancestors
 */
interface IObject{
	/**
	 * Magic __toString() method. Returns a string representation of the IObject
	 * @return string
	 */
	public function __toString();
	/**
	 * Alias of __toString()
	 * @return string
	 */
	public function ToString();
	/**
	 * Returns the name of the class for the actual object at hand
	 * @return string
	 */
	public function GetClassName();
	/**
	 * Returns a Type object containing information about the type of the current object for reflection use.
	 * @return \Core\Type
	 */
	public function GetType();
	/**
	 * Returns whether the object is a descendant of the class named $className
	 * @param string $className The name of the class to check whether this object is a descendant of
	 * @return bool
	 */
	public function Is($className);
}