<?php
namespace Core\IO;
use Core\Object;
use Core\U;
use Core\CoreConfig;
class TextReader extends Object implements IReader{
	protected $_stream;
	
	public function __construct(IStream $stream){
		if($stream == null){throw new Exception("Stream supplied to reader was null", 1);}
		if(!$stream->CanRead()){throw new Exception("Text reader can not be used with streams that can not read. Try changing the mode ", 1);}
		$this->_stream = $stream;
		if(!$this->_stream->IsOpen()){$this->_stream->Open();}
	}
	###########################################################################
	# IReader Implementation
	###########################################################################
	/**
	 * Read($count) reads the specified amount of characters from the stream and returns it
	 * @param $count int how many characters to retrieve from the stream
	 * @return string
	 */
	public function Read($count){return $this->_stream->Read($count);}
	/** 
	 * Moves the internal pointer of the stream to the beginning of the stream
	 * @return Core\IO\TextReader
	 * @throws Exception if the underlying stream can not seek
	 */
	public function Reset(){
		if($this->_stream->CanSeek()){
			$this->_stream->Reset(); return $this;
		}
		else{
			throw new Exception("The underlying stream does not support seeking", 1);
		}
	}
	/**
	 * Moves the internal pointer of the stream to the specified offset from the beginning of the stream
	 * @param $offset int the new position to move the internal pointer to
	 * @return Core\IO\TextReader
	 * @throws Exception if the underlying stream can not seek
	 */
	public function Seek($offset){
		if($this->_stream->CanSeek()){
			$this->_stream->Seek($offset); return $this;
		}
		else{
			throw new Exception("The underlying stream does not support seeking", 1);
		}
	}
	/**
	 * Returns the current position of the internal pointer from the beginning of the stream
	 * @return int
	 */
	public function Position(){return $this->_stream->Position();}
	/**
	 * Returns whether the reader is currently at the end of the stream
	 * @return bool
	 */
	public function IsEOF(){return $this->_stream->IsEOF();}
	###########################################################################
	# TextReader Specific Implementation
	###########################################################################
	/**
	 * Reads a line from the stream and return it. Lines are delimeted at U::$NL which is a global config that can be changed using CoreConfig class
	 * @return string
	 */
	public function ReadLine(){
		if(method_exists($this->_stream, "ReadLine")){return $this->_stream->ReadLine();}
		$res = ""; $c =''; $l = strlen(U::$NL);
		do{
			$c = $this->_stream->Read($l);
			$res .= $c;
		}while($c != U::$NL);
		return rtrim($res, U::$NL);
	}
	/**
	 * Reads the stream to the end and returns the result
	 * @return string
	 */
	public function ReadToEnd(){
		if(method_exists($this->_stream, "ReadToEnd")){return $this->_stream->ReadToEnd();}
		else{
			$res = "";
			while(!$this->_stream->IsEOF()){
				$res .= $this->_stream->Read(CoreConfig::StreamDefaultChunkSize);
			}
			return $res;
		}
	}
	///FUTURE: ReadTo($stringToStopAt)
	###########################################################################
	# TextReader Specific Static Members
	###########################################################################
	/**
	 * TextReader::NewFromFile($fileName, OpenMode $mode=null, $binaryMode = true)
	 * Creates and return a new TextReader object based on a file stream from the information supplied.
	 * @param $fileName string
	 * This is passed to the constructor of the underlying stream
	 * @param $mode OpenMode
	 * this is passed to the constructor of the underlying stream and decides the file open mode
	 * @param $binaryMode bool
	 * This is passed to the constructor of the underlying stream and decides whether to open the file in binary safe 
	 * mode or not. This is the recommended mode, so leave true unless you really need to change it
	 * @return \Core\IO\TextReader
	 */
	public static function NewFromFile($fileName, OpenMode $mode=null, $binaryMode = true){
		$stream = new FileStream($fileName, $mode?:OpenMode::$ReadOnly, $binaryMode);
		return new TextReader($stream);
	}
};
?>