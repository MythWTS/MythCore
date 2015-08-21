<?php
namespace Core\IO;
use Core\Object;
/**
 * FileStream objects represent "streams" to files on the file system. A stream can be read from or written to using a 
 * IReader or IWriter such as TextReader (which reads data as text), XmlReader (if implemented in the future)
 */
class FileStream extends Object implements IStream{
	protected $_mode, $_handle, $_isBinary, $_isOpen, $_isClosed, $_fileName, $_canRead, $_canWrite;
	/**
	 * Instantiates a new instance of the FileStream class
	 * @param $fileName string [required] the name of the file to be connected to using the FileStream object
	 * @param $mode OpenMode [optional] [defaults to OpenMode::$ReadWrite] the mode to open the file for
	 * @param $isBinary bool [optional] [defaults to true] whether to open in binary safe mode or not.
	 * It is recommended to always set this on (leave the default)
	 */
	public function __construct($fileName, OpenMode $mode=null, $isBinary=true){
		$this->_mode = $mode?:OpenMode::$ReadWrite;
		$this->_isBinary = $isBinary;
		$this->_isOpen = $this->_isClosed = false;
		$this->_fileName = $fileName;
		$this->_canRead = $this->_mode == OpenMode::$ReadOnly || $this->_mode == OpenMode::$ReadWrite ||
				$this->_mode == OpenMode::$ReadWriteAppend || $this->_mode == OpenMode::$ReadWriteCreateOnly ||
				$this->_mode == OpenMode::$ReadWriteToStart || $this->_mode == OpenMode::$ReadWriteTruncate;
		$this->_canWrite = $this->_mode == OpenMode::$ReadWrite || $this->_mode == OpenMode::$ReadWriteAppend ||
				$this->_mode == OpenMode::$ReadWriteCreateOnly || $this->_mode == OpenMode::$ReadWriteToStart ||
				$this->_mode == OpenMode::$ReadWriteTruncate || $this->_mode == OpenMode::$WriteAppend ||
				$this->_mode == OpenMode::$WriteCreateOnly || $this->_mode == OpenMode::$WriteToStart ||
				$this->_mode == OpenMode::$WriteTruncate;
	}
	###########################################################################
	# IStream implementation
	###########################################################################
	/**
	 * CanRead()
	 * Returns whether this stream instance can read or not.
	 * @return bool
	 */
	public function CanRead(){return $this->_canRead;}
	/**
	 * CanWrite()
	 * Returns whether this stream instance can write or not.
	 * @return bool
	 */
	public function CanWrite(){return $this->_canWrite;}
	/**
	 * CanSeek()
	 * Returns whether this stream instance can seek or not.
	 * @return bool
	 */
	public function CanSeek(){return true;}
	/**
	 * IsBinary()
	 * Returns whether this stream instance is in binary mode or not.
	 * @return bool
	 */
	public function IsBinary(){return $this->_isBinary;}
	/**
	 * IsOpen()
	 * Returns whether this stream instance is open or not.
	 * @return bool
	 */
	public function IsOpen(){return $this->_isOpen;}
	/**
	 * IsClosed()
	 * Returns whether this stream instance is closed or not.
	 * @return bool
	 */
	public function IsClosed(){return $this->_isClosed;}
	/**
	 * Open()
	 * Opens the stream and makes it ready for writing/reading. Returns true if the open succeeded, false otherwise.
	 * @return bool
	 */
	public function Open(){
		$mode = $this->_mode->Value() . ($this->_isBinary?"b":"");
		$this->_handle = @fopen($this->_fileName, $mode);
		if($this->_handle === false){
			$this->_isOpen = false; $this->_isClosed = false;
			return false;
		}
		else{
			$this->_isOpen = true; $this->_isClosed = false; 
			return true;
		}
	}
	/**
	 * Close()
	 * Closes the stream. Returns the same object for chaining methods
	 * @return Core\IO\FileStream
	 */
	public function Close(){
		if(fclose($this->_handle)){$this->_isOpen = false; $this->_isClosed = true;}
		else{$this->_isClosed = false;}
		return $this;
	}
	/**
	 * Read($count)
	 * Reads the specified count of characters/bytes from the stream and returns them
	 * @return mixed. depends on the type of stream
	 */
	public function Read($count){
		if(!$this->_canRead){throw new Exception("Trying to read from an unreadable file. This file stream does not support reading.", 1);}
		if($this->_isOpen){
			return fread($this->_handle, $count);
		}
		else{
			throw new Exception("Trying to read a stream that is not opened", 1);
		}
	}
	/**
	 * Write($data)
	 * Writes the supplied data to the stream. Returns whether the write was successfull or not
	 * @param $data mixed. depends on the type of stream
	 * @return bool
	 */
	public function Write($data){
		if(!$this->_canWrite){throw new Exception("Trying to write to an unwritable file. This file stream does not support writing", 1);}
		if($this->_isOpen){
			fwrite($this->_handle, $data);
			return $this;
		}
		else{
			throw new Exception("Trying to write to a stream that is not opened.", 1);
		}
	}
	/**
	 * Seek($offset)
	 * Sets the iternal position pointer to $offset, or end of stream if $offset is larger
	 * Returns the same object for chaining
	 * @param $offset int
	 * @return Core\IO\FileStream
	 */
	public function Seek($offset){
		if($this->_isOpen){
			fseek($this->_handle, $offset);
			return $this;
		}
		else{
			throw new Exception("Trying to seek in a stream that is not opened.", 1);
		}
	}
	/**
	 * Position()
	 * Returns the current position of the internal pointer within the stream
	 * @return int
	 */
		public function Position(){
		if($this->_isOpen){
			return ftell($this->_handle);
		}
		else{
			throw new Exception("Trying to get the position in a stream that is not opened.", 1);
		}
	}
	/**
	 * Reset()
	 * Sets the iternal position pointer to the beginning of the stream.
	 * Returns the same object for chaining
	 * @param $offset int
	 * @return Core\IO\FileStream
	 */
	public function Reset(){
		if($this->_isOpen){
			rewind($this->_handle);
			return $this;
		}
		else{
			throw new Exception("Trying to change the position in a stream that is not opened.", 1);
		}
	}
	/**
	 * IsEOF()
	 * Returns whether this stream instance's internal pointer is at the end of the stream or not.
	 * @return bool
	 */
	public function IsEOF(){
		if($this->_isOpen){return feof($this->_handle);}
		else{return false;}
	}
	/**
	 * Flush()
	 * Flushes output written using Write() to the output stream
	 * @return Core\IO\FileStream
	 */
	public function Flush(){
		if(!$this->_canWrite){throw new Exception("Trying to flush a file that is not writeable. This file stream does not support writing", 1);}
		if($this->_isOpen){
			fflush($this->_handle);
			return $this;
		}
		else{
			throw new Exception("Trying to flush a stream that is not opened.", 1);
		}
	}
	###########################################################################
	# FileStream Specific implementation
	###########################################################################
	/**
	 * Returns the length of the file
	 * @return int
	 */
	public function Length(){
		return filesize($this->_fileName);
	}
	/**
	 * Gets a single character from the stream
	 * @return string
	 */
	public function GetChar(){
		if(!$this->_isOpen){throw new Exception("Trying to read from a stream that is not opened.", 1);}
		return fgetc($this->_handle);
	}
	/**
	 * Reads the stream until it reaches the end of it.
	 * @return string
	 */
	public function ReadToEnd(){
		if(!$this->_isOpen){throw new Exception("Trying to read from a stream that is not opened.", 1);}
		return fread($this->_handle, filesize($this->_fileName));
	}
	/**
	 * Reads a single line from the Stream and returns it
	 * @return string
	 */
	public function ReadLine(){
		if(!$this->_isOpen){throw new Exception("Trying to read from a stream that is not opened.", 1);}
		return fgets($this->_handle);
	}
}
?>