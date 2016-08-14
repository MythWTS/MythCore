<?php
namespace Core;
/**
 * IReader interface is the base interface for all readers in the framework. It enables a unified framework for creating and designing reader classes
 * @property integer Position Sets or gets the current position of the reader in relation to the underlying resource
 * @property boolean IsAtEnd Gets whether the current reader is at the end of the underlying resource
 */
interface IReader extends IObject{
	/**
	 * Reads an item from the underlying resource and returns it after advancing the internal current position offset
	 */
	public function Read();
	/**
	 * Reads the specified number of items from the underlying resource and returns them as an array after advancing the internal current position offset
	 * @param integer $count The number of items to read from resource
	 * @return array The retreived items
	 */
	public function ReadBlock($count=1);
	/**
	 * Resets the internal current position offset to the beginning of the resource. Equivalent to Position(0)
	 * @return \Core\IReader
	 */
	public function Reset();
	/**
	 * Property Position [get, set]. Sets or gets the internal current position offset.
	 * @param integer $offset The offset to set the current position to
	 */
	public function Position($offset=null);
	/**
	 * Sets the internal current position offset
	 * @param integer $offset The offset to set the current position to
	 * @return \Core\IReader
	 */
	public function Seek($offset=0);
	/**
	 * Reads the specified amount of items from the underlying resource without actually moving the cursor (internal current position offset)
	 * @param integer $count The number of items to retrieve
	 * @return array
	 */
	public function Peek($count=1);
	/**
	 * Checks if the reader has reached the end of the underlying resource.
	 * @return boolean
	 */
	public function IsAtEnd();
}