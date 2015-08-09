<?php
class TextWriter extends Object implements IWriter{
	protected $_stream;
	
	public function __construct(IStream $stream){
		if($stream == null){throw new Exception("Stream supplied to writer was null", 1);}
		if(!$stream->CanWrite()){throw new Exception("Stream supplied to writer can not write", 1);}
		$this->_stream = $stream;
		if(!$this->_stream->IsOpen()){$this->_stream->Open();}
	}
	###########################################################################
	# IWriter Implementation
	###########################################################################
	/** Allows Write("{0}{2}", 0, 1, 2) */
	public function Write($data){
		if(func_num_args() < 2){$this->_stream->Write($data);}
		else{
			$args = func_get_args(); $str = $data;
			foreach ($args as $key => $arg) {
				if($key !== 0){$str = str_replace('{'. $key . '}', $arg, $str);}
			}
			$this->_stream->Write($str);
		}
	}
	public function Flush(){$this->_stream->Flush();}
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
	###########################################################################
	# TextWriter Specific Implementation
	###########################################################################
	public function WriteLine($data){
		if(func_num_args() < 2){$this->_stream->Write($data);}
		else{
			$args = func_get_args(); $str = $data;
			foreach ($args as $key => $arg) {
				if($key !== 0){$str = str_replace('{'. $key . '}', $arg, $str);}
			}
			$this->_stream->Write($str . U::$NL);
		}
	}
};
?>