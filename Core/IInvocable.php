<?php
namespace Core;
/**
 * Interface to be implemented by instance classes that want to expose a method to invoke a specific action.
 * 
 * This should mainly be used by classes whose objects essentially represent an action not data such as delegates.
 */
interface IInvocable extends IObject{
	/**
	 * Performs the invoke of the main action represented by this instance
	 * @return mixed
	 */
	public function Invoke();
}