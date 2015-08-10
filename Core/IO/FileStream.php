<?php
class FileStream extends Object implements IStream{
	protected $_mode, $_handle, $_isBinary, $_isOpen, $_isClosed, $_fileName, $_canRead, $_canWrite;
	public function __construct($fileName, FileOpenMode $mode=null, $isBinary=true){
		$this->_mode = $mode;
		$this->_isBinary = $isBinary;
		$this->_isOpen = $this->_isClosed = false;
		$this->_fileName = $fileName;
		$this->_canRead = $this->_mode == FileOpenMode::$ReadOnly || $this->_mode == FileOpenMode::$ReadWrite ||
				$this->_mode == FileOpenMode::$ReadWriteAppend || $this->_mode == FileOpenMode::$ReadWriteCreateOnly ||
				$this->_mode == FileOpenMode::$ReadWriteToStart || $this->_mode == FileOpenMode::$ReadWriteTruncate;
		$this->_canWrite = $this->_mode == FileOpenMode::$ReadWrite || $this->_mode == FileOpenMode::$ReadWriteAppend ||
				$this->_mode == FileOpenMode::$ReadWriteCreateOnly || $this->_mode == FileOpenMode::$ReadWriteToStart ||
				$this->_mode == FileOpenMode::$ReadWriteTruncate || $this->_mode == FileOpenMode::$WriteAppend ||
				$this->_mode == FileOpenMode::$WriteCreateOnly || $this->_mode == FileOpenMode::$WriteToStart ||
				$this->_mode == FileOpenMode::$WriteTruncate;
	}
	###########################################################################
	# IStream implementation
	###########################################################################
	public function CanRead(){return $this->_canRead;}
	public function CanWrite(){return $this->_canWrite;}
	public function CanSeek(){return true;}
	public function IsBinary(){return $this->_isBinary;}
	public function IsOpen(){return $this->_isOpen;}
	public function IsClosed(){return $this->_isClosed;}
	public function Open(){
		$mode = $this->_mode->Value() . ($this->_isBinary?"b":"");
		$this->_handle = fopen($this->_fileName, $mode);
		$this->_isClosed = false; $this->_isOpen = $this->_handle?true:false;
		return $this;
	}
	public function Close(){
		if(fclose($this->_handle)){$this->_isOpen = false; $this->_isClosed = true;}
		else{$this->_isClosed = false;}
		return $this;
	}
	public function Read($count){
		if(!$this->_canRead){throw new Exception("Trying to read from an unreadable file. This file stream does not support reading.", 1);}
		if($this->_isOpen){
			return fread($this->_handle, $count);
		}
		else{
			throw new Exception("Trying to read a stream that is not opened", 1);
		}
	}
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
	public function Seek($offset){fseek($this->_handle, $offset); return $this;}
	public function Position(){return ftell($this->_handle);}
	public function Reset(){rewind($this->_handle); return $this;}
	public function IsEOF(){return feof($this->_handle);}
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
	public function Length(){return filesize($this->_fileName);}
	public function GetChar(){return fgetc($this->_handle);}
	public function ReadToEnd(){return fread($this->_handle, filesize($this->_fileName));}
	public function ReadLine(){return fgets($this->_handle);}
}
?>