<?php
namespace Core;
/**
 * Interface to be implemented by classes that want their object to exhibit array-like behavior (indexable and iteratable)
 */
interface IArray extends IObject, \ArrayAccess, \Iterator{
	/**
	 * Checks whether an offset/index existsor not. This method is executed when using isset() or empty() on objects implementing ArrayAccess.
	 * @param mixed $offset The offset to check
	 * @return boolean
	 */
	public function OffsetExists ($offset);
	/**
	 * Gets the item at the specified offset/index. This method is executed when checking if offset is empty().
	 * @param mixed $offset The offset/index of the item to retreive
	 */
	public function OffsetGet ($offset);
	/**
	 * Sets the item at the specified offset/index.
	 * @param mixed $offset The offset/index of the item to set
	 * @param mixed $value The value to set the item to
	 */
	public function OffsetSet ($offset, $value);
	/**
	 * Unsets/Removes the item at the specified offset/index. This method will NOT be called when type-casting to (unset)
	 * @param mixed $offsetThe offset/index of the item to unset
	 */
	public function OffsetUnset ($offset);

	/**
	 * Returns the current item from the underlying collection/array-like object. 
	 */
	public function Current ();
	/**
	 * Moves the current position to the next element. This method is called after each foreach loop.
	 */
	public function Next ();
	/**
	 * Returns the key of the current element.
	 */
	public function Key ();
	/**
	 * Checks if current position is valid. This method is called after Iterator::rewind() and Iterator::next() to check if the current position is valid.
	 */
	public function Valid ();
	/**
	 * Rewinds back to the first element of the Iterator. This is the first method called when starting a foreach loop. It will not be executed after foreach loops.
	 */
	public function Rewind ();
}