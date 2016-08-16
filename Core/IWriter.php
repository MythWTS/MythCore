<?php
namespace Core;
/**
 * Interface IWriter is the base interface for all writers that write data items to underlying resources
 * @property integer $Position Gets or sets the current position of the writer in relation to the underlying resource
 */
interface IWriter extends IObject{
	/**
	 * Writes the data supplied to the underlying resource and returns the writer for method chaining
	 * @param unknown $data The data to be written to the underlying resource
	 * @return \Core\IWriter
	 */
	public function Write($data);
	/**
	 * Flushes the buffered data to the underlying resource if the writer is buffered
	 * @return \Core\IWriter
	 */
	public function Flush();
	/**
	 * Changes the current internal position of the writer to the specified offset
	 * @param integer $offset The offset to which to move the internal current position of the writer
	 * @return \Core\IWriter
	 */
	public function Seek($offset=0);
	/**
	 * Gets or sets the current internal position of the writer
	 * @param integer $offset The offset to which to move the internal current position of the writer
	 * @return integer
	 */
	public function Position($offset=null);
	/**
	 * Resets the position of the writer to the beginning of the underlying resource. Equivalent to Seek(0)
	 * @return \Core\IWriter
	 */
	public function Reset();
}