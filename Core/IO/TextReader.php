<?php
class TextReader extends Object implements IReader{
	protected $_stream;
	
	public function __construct(IStream $stream){
		if($stream == null){throw new Exception("Stream supplied to reader was null", 1);}
		if(!$stream->CanRead()){throw new Exception("Stream supplied to reader can not read", 1);}
		$this->_stream = $stream;
		if(!$this->_stream->IsOpen()){$this->_stream->Open();}
	}
	###########################################################################
	# IReader Implementation
	###########################################################################
	public function Read($count){return $this->_stream->Read($count);}
	public function Reset(){
		if($this->_stream->CanSeek()){
			$this->_stream->Reset(); return $this;
		}
		else{
			throw new Exception("The underlying stream does not support seeking", 1);
		}
	}
	public function Seek($offset){
		if($this->_stream->CanSeek()){
			$this->_stream->Seek($offset); return $this;
		}
		else{
			throw new Exception("The underlying stream does not support seeking", 1);
		}
	}
	public function Position(){return $this->_stream->Position();}
	public function IsEOF(){return $this->_stream->IsEOF();}
	###########################################################################
	# TextReader Specific Implementation
	###########################################################################
	public function ReadLine(){
		if(method_exists($this->_stream, "ReadLine")){return $this->_stream->ReadLine();}
		$res = ""; $c =''; $l = strlen(U::$NL);
		do{
			$c = $this->_stream->Read($l);
			$res .= $c;
		}while($c != U::$NL);
		return rtrim($res, U::$NL);
	}
	public function ReadToEnd(){
		if(method_exists($this->_stream, "ReadToEnd")){return $this->_stream->ReadToEnd();}
		else{
			$res = "";
			while(!$this->_stream->IsEOF()){
				$res .= $this->_stream->Read($Config->StreamDefaultChunkSize());
			}
			return $res;
		}
	}
	///FUTURE: ReadTo($stringToStopAt)
	###########################################################################
	# TextReader Specific Static Members
	###########################################################################
	public static function FromFile($fileName, FileOpenMode $mode=null, $binaryMode = true){
		$stream = new FileStream($fileName, $mode?:FileOpenMode::$ReadOnly, $binaryMode);
		return new TextReader($stream);
	}
};
?>