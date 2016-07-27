<?php
namespace Core;
/**
 * A trait to be used by static singleton classes (classes that are supposed to have one and only one instance)
 */
trait TSingleton{
	use TObject;
	protected static $_instance;
	/**
	 * Property method to return the only instance of the singleton
	 * @return unknown - depends on the using class
	 */
	public static function Instance(){
		$class = __CLASS__;
		return self::$_instance?: self::$_instance = new $class;
	}
	/**
	 * Magic clone method to disallow clonning of the singleton class instance
	 */
	public function __clone(){
		trigger_error('Cloning '.__CLASS__.' is not allowed.',E_USER_ERROR);
	}
	/**
	 * Magic deserialization method to disallow deserializing the sole instance of the class
	 */
	public function __wakeup(){
		trigger_error('Unserializing '.__CLASS__.' is not allowed.',E_USER_ERROR);
	}
}