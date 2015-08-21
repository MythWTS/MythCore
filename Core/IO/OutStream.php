<?php
namespace Core\IO;
/**
 * class Core\IO\OutStream
 * A stream class representing writing to stdout. Can be used as one replacement to echo and print.
 */
class OutStream extends \Core\Object implements IStream{
	/**
	 * CanRead()
	 * Returns whether this stream instance can read or not. Always returns false for this kind of streams.
	 * @return bool
	 */
	public function CanRead(){false;}
	/**
	 * CanWrite()
	 * Returns whether this stream instance can write or not. Always true for this kind of streams.
	 * @return bool
	 */
	public function CanWrite(){return true;}
	/**
	 * CanSeek()
	 * Returns whether this stream instance can seek or not. Always false in this case.
	 * @return bool
	 */
	public function CanSeek(){return false;}
	/**
	 * IsBinary()
	 * Returns whether this stream instance is in binary mode or not. Always false in this case.
	 * @return bool
	 */
	public function IsBinary(){false;}
	/**
	 * IsOpen()
	 * Returns whether this stream instance is open or not. Always true in this case.
	 * @return bool
	 */
	public function IsOpen(){return true;}
	/**
	 * IsClosed()
	 * Returns whether this stream instance is closed or not. Always false in this case
	 * @return bool
	 */
	public function IsClosed(){return false;}
	/**
	 * Open()
	 * Returns true in this case
	 * @return bool
	 */
	public function Open(){return true;}
	/**
	 * Close()
	 * Closes the stream. Returns the same object for chaining methods. Has no effect in this case.
	 * @return \Core\IO\OutStream
	 */
	public function Close(){
		return $this;
	}
	/**
	 * Read($count)
	 * Reads the specified count of characters/bytes from the stream and returns them
	 * returns null always in this case
	 * @return null
	 */
	public function Read($count){return null;}
	/**
	 * Seek($offset)
	 * Returns the same object for chaining. Has no effect in this case.
	 * @param $offset int
	 * @return \Core\IO\OutStream
	 */
	public function Seek($offset){
		return $this;
	}
	/**
	 * Position()
	 * Always returns 0;
	 * @return int
	 */
	public function Position(){return 0;}
	/**
	 * Reset()
	 * Returns the same object for chaining. Has no effect in this case.
	 * @param $offset int
	 * @return \Core\IO\OutStream
	 */
	public function Reset(){
		return $this;
	}
	/**
	 * IsEOF()
	 * Always returns false
	 * @return bool
	 */
	public function IsEOF(){return false;}
	/**
	 * Flush()
	 * Returns the same object for chaining. Has no effect in this case.
	 * @return \Core\IO\OutStream
	 */
	public function Flush(){
		return $this;
	}

	/**
	 * Write($data, ...)
	 * Writes the supplied data to the stream. Always returns true in this case.
	 * @param $data mixed. depends on the type of stream
	 * @return bool
	 */
	public function Write($data){
		echo $data;
	}
};
?>