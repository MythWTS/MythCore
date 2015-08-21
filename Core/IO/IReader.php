<?php
namespace Core\IO;
use Core\IObject;
/**
 * IReader interface is the base interface for all IO readers that reads data from streams
 */
interface IReader extends IObject{
	/** Reads the specified count of data and returns it*/
	public function Read($count);
	/** Reset the internal pointer of the reader to the beginning of the stream*/
	public function Reset();
	/** Moves the internal pointer of the reader to the specified offset from the beginning of the stream */
	public function Seek($offset);
	/** Returns the current position of the internal pointer from the beginning of the stream*/
	public function Position();
	/** Returns whether the reader is currently at the end of the stream */
	public function IsEOF();
};
?>