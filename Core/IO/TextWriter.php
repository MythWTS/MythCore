<?php
namespace Core\IO;
use Core\Object;
use Core\U;
class TextWriter extends Object implements IWriter{
	protected $_stream;
	
	public function __construct(IStream $stream){
		if($stream == null){throw new Exception("Stream supplied to writer was null", 1);}
		if(!$stream->CanWrite()){throw new Exception("Text reader can not be used with streams that can not write. Try changing the mode ", 1);}
		$this->_stream = $stream;
		if(!$this->_stream->IsOpen()){$this->_stream->Open();}
	}
	###########################################################################
	# IWriter Implementation
	###########################################################################
	/**
	 * Writes the supplied data to the stream at the current position
	 * Allows Write("{0}{2}", 0, 1, 2)
	 * @return Core\IO\TextWriter
	 */
	public function Write($data){
		if(func_num_args() < 2){$this->_stream->Write($data);}
		else{
			$args = func_get_args(); $str = $data;
			foreach ($args as $key => $arg) {
				if($key !== 0){$str = str_replace('{'. $key . '}', $arg, $str);}
			}
			$this->_stream->Write($str);
		}
		return $this;
	}
	/** 
	 * Flushes what was written to the stream if this is a buffered writer
	 * @return Core\IO\TextWriter
	 */
	public function Flush(){
		$this->_stream->Flush();
		return $this;
	}
	/**
	 * Moves the interanle pointer of the stream to the beginning of the stream
	 * @return Core\IO\TextWriter
	 * @throws Exception if the underlying stream does not support seeking
	 */
	public function Reset(){
		if($this->_stream->CanSeek()){
			$this->_stream->Reset();
			return $this;
		}
		else{
			throw new Exception("The underlying stream does not support seeking", 1);
		}
	}
	/**
	 * Moves the internal pointer of the stream to the specified offset from the beginning of the stream
	 * @param $offset int the new position to move the internal pointer to
	 * @return Core\IO\TextWriter
	 * @throws Exception if the underlying stream does not support seeking
	 */
	public function Seek($offset){
		if($this->_stream->CanSeek()){
			$this->_stream->Seek($offset);
			return $this;
		}
		else{
			throw new Exception("The underlying stream does not support seeking", 1);
		}
	}
	/**
	 * Returns the current position of the internal pointer
	 * @return int
	 */
	public function Position(){return $this->_stream->Position();}
	###########################################################################
	# TextWriter Specific Implementation
	###########################################################################
	/**
	 * Writes a line into the stream (by adding U::$NL to the end of the supplied string)
	 * Supports formatting in .NET style
	 * @param $data string the data to be written or the format to use if more arguments were supplied
	 * @param ... can have any number of parameters
	 * @return Core\IO\TextWriter
	 */
	public function WriteLine($data){
		if(func_num_args() < 2){$this->_stream->Write($data);}
		else{
			$args = func_get_args(); $str = $data;
			foreach ($args as $key => $arg) {
				if($key !== 0){$str = str_replace('{'. $key . '}', $arg, $str);}
			}
			$this->_stream->Write($str . U::$NL);
		}
		return $this;
	}
	###########################################################################
	# TextWriter Factory Methods
	###########################################################################
	/**
	 * TextWriter::NewOut()
	 * Creates and returns a new instance of the TextWriter class based on an OutStream to be used to output
	 * to the standard output
	 * @return \Core\IO\TextWriter
	 */
	public function NewOut(){
		return new TextWriter(new OutStream());
	}
	/**
	 * TextWriter::NewFromFile($fileName, OpenMode $mode=null, $binaryMode = true)
	 * Creates and return a new TextWriter object based on a file stream from the information supplied.
	 * @param $fileName string
	 * This is passed to the constructor of the underlying stream
	 * @param $mode OpenMode
	 * this is passed to the constructor of the underlying stream and decides the file open mode
	 * @param $binaryMode bool
	 * This is passed to the constructor of the underlying stream and decides whether to open the file in binary safe 
	 * mode or not. This is the recommended mode, so leave true unless you really need to change it
	 * @return \Core\IO\TextWriter
	 */
	public function NewFromFile($fileName, OpenMode $mode=null, $isBinary=true){
		$stream = new FileStream($fileName, $mode?:OpenMode::$WriteAppend, $binaryMode);
		return new TextWriter($stream);
	}
};
?>