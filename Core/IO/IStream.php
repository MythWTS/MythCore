<?php
namespace Core\IO;
use Core\IObject;
interface IStream extends IObject{
	/**
	 * CanRead()
	 * When implemented, returns whether this stream instance can read or not.
	 * @return bool
	 */
	public function CanRead();
	/**
	 * CanWrite()
	 * When implemented, returns whether this stream instance can write or not.
	 * @return bool
	 */
	public function CanWrite();
	/**
	 * CanSeek()
	 * When implemented, returns whether this stream instance can seek or not.
	 * @return bool
	 */
	public function CanSeek();
	/**
	 * IsBinary()
	 * When implemented, returns whether this stream instance is in binary mode or not.
	 * @return bool
	 */
	public function IsBinary();
	/**
	 * IsOpen()
	 * When implemented, returns whether this stream instance is open or not.
	 * @return bool
	 */
	public function IsOpen();
	/**
	 * IsClosed()
	 * When implemented, returns whether this stream instance is closed or not.
	 * @return bool
	 */
	public function IsClosed();
	/**
	 * Open()
	 * When implemented, opens the stream and makes it ready for writing/reading. Returns true if the open succeeded, false otherwise.
	 * @return bool
	 */
	public function Open();
	/**
	 * Close()
	 * When implemented, closes the stream. Returns the same object for chaining methods
	 * @return \Core\IO\IStream
	 */
	public function Close();
	/**
	 * Read($count)
	 * Reads the specified count of characters/bytes from the stream and returns them
	 * @return mixed. depends on the type of stream
	 */
	public function Read($count);
	/**
	 * Write($data)
	 * Writes the supplied data to the stream. Returns whether the write was successfull or not
	 * @param $data mixed. depends on the type of stream
	 * @return bool
	 */
	public function Write($data);
	/**
	 * Seek($offset)
	 * When implemented, sets the iternal position pointer to $offset, or end of stream if $offset is larger
	 * Returns the same object for chaining
	 * @param $offset int
	 * @return \Core\IO\IStream
	 */
	public function Seek($offset);
	/**
	 * Position()
	 * When implemented, returns the current position of the internal pointer within the stream
	 * @return int
	 */
	public function Position();
	/**
	 * Reset()
	 * When implemented, sets the iternal position pointer to the beginning of the stream.
	 * Returns the same object for chaining
	 * @param $offset int
	 * @return \Core\IO\IStream
	 */
	public function Reset();
	/**
	 * IsEOF()
	 * When implemented, returns whether this stream instance's internal pointer is at the end of the stream or not.
	 * @return bool
	 */
	public function IsEOF();
	/**
	 * Flush()
	 * When implemented, flushes output written using Write() to the output stream
	 */
	public function Flush();
};
?>