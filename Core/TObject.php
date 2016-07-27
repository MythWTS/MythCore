<?php
namespace Core;
/**
 * trait TObject - root trait for all traits in the framework and is also used by the Object class.
 * It's recommended that any trait use this one as a way of making the framework more tied up together.
 */
trait TObject{
	/**
	 * Magic __toString() method. Returns a string representation of the object
	 * @return string - a string representation of the object
	 */
	public function __toString(){return get_class($this);}
	/**
	 * Alias of __toString()
	 * @return string - a string representation of the object
	 */
	public function ToString(){return $this->__toString();}
	/**
	 * Returns the name of the class for the actual object at hand
	 * @return string - the name of the class for the actual object at hand
	 */
	public function GetClassName(){return get_class($this);}
	/**
	 * Returns whether the object is a descendant of the class named $className
	 * @param string $className - The name of the class to check whether this object is a descendant of
	 * @return bool - whether the object is a descendant of the class named $className
	 */
	public function Is($className){return is_a($this, $className);}
}