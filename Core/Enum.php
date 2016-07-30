<?php
namespace Core;
/**
 * Base class for all enumerations in the framework. This class provides the basic utilities for the enumeration classes.
 * Enumeration classes are almost all declared the same way:
 * 1) Extend the Enum class.
 * 2) Define static public fields for the enumeration members.
 * 3) [Optional] Define a constructor with the same signature as the Enum class constructor that calls the parent constructor.
 * 4) Define the public static Initialize() method which basically instantiates the fields by creating new objects passing the name value pair to the Enum constructor.
 * 5) Call the Initialize method immediately after the end of the class declaration
 * @property string Name The name asscoiated with the enumeration member
 * @property mixed Value The value associated with the enumeration member
 */
class Enum extends Object{
	/**
	 * The name asscoiated with the enumeration member
	 * @var string
	 */
	protected $_name;
	/**
	 * The value associated with the enumeration member
	 * @var mixed
	 */
	protected $_value;
	/**
	 * {@inheritDoc}
	 * @see \Core\Object::__toString()
	 */
	public function __toString(){return $this->_value;}
	/**
	 * Protected constructor. Initializes the values for the name and value attributes.
	 * @param string $name - the name asscoiated with the enumeration member
	 * @param mixed $value - The value associated with the enumeration member. For internal uses mostly.
	 */
	protected function __construct($name, $value){$this->_name = $name; $this->_value = $value;}
	/**
	 * Getter for the Name property.
	 * @return string - the name asscoiated with the enumeration member
	 */
	public function Name(){return $this->_name;}
	/**
	 * Getter for the Value property
	 * @return mixed - The value associated with the enumeration member
	 */
	public function Value(){return $this->_value;}
}