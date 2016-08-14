<?php
namespace Core;
/**
 * IClassLoader - Base interface for all class loader.
 */
interface IClassLoader extends IObject{
	/**
	 * Registers the class loader instance with the load services.
	 * @return boolean
	 */
	public function Register();
	/**
	 * Given a class $className, implementations of this method should be able to load the class file if the class
	 * is handled by this instance of the class loader. Returns true if the class was loaded, false otherwise
	 * @param string $className The name of the class to be loaded. Passed automatically by the class loading services
	 * @return bool
	 */
	public function LoadClass($className);
}