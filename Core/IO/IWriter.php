<?php
namespace Core\IO;
use Core\IObject;
/**
 * Interface IWriter is the base interface for all writers, used to write data to streams
 */
interface IWriter extends IObject{
	/** Writes the supplied data to the stream at the current position */
	public function Write($data);
	/** Flushes what was written to the stream if this is a buffered writer */
	public function Flush();
	/** Moves the internal pointer of the stream to the specified offset from the beginning of the stream */
	public function Seek($offset);
	/** Moves the interanle pointer of the stream to the beginning of the stream */
	public function Reset();
	/** Returns the current position of the internal pointer */
	public function Position();
};
?>