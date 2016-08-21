<?php
namespace Core;
/**
 * Interface to be implemented by classes whose instances will represent something that requires parameters (most of the time changeable) to perform their task.
 * @property array $Parameters An array of parameters to be used for executing a task
 */
interface IParameterized extends IObject{
	/**
	 * Getter and setter for the Parameters property which sets and gets the parameters used by implementers
	 * @param array $value used when the method is used as the setter of the property. The array to which to set the property to
	 * @return array The array of parameters for this instance
	 */
	public function Parameters(array $value = null);
}