<?php
namespace Core;
/**
 * interface IObject - root interface in the framework.
 * Every class and interface within the framework implements this interface either directly or through one of its ancestors
 */
interface IObject{
	/**
	 * Magic __toString() method. Returns a string representation of the IObject
	 * @return string - a string representation of the IObject
	 */
	public function __toString();
	/**
	 * Alias of __toString()
	 * @return string - a string representation of the IObject
	 */
	public function ToString();
	/**
	 * Returns the name of the class for the actual object at hand
	 * @return string - the name of the class for the actual object at hand
	 */
	public function GetClassName();
	/**
	 * Returns whether the object is a descendant of the class named $className
	 * @param string $className - The name of the class to check whether this object is a descendant of
	 * @return bool - whether the object is a descendant of the class named $className
	 */
	public function Is($className);
}