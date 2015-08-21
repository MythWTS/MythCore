<?php
namespace Test\IO\Core;
use Core\IO\OutStream;
use Core\IO\FileStream;
use Core\IO\OpenMode;
use Test\Test;
/**
 * A test class to test streams
 */
class Streams extends Test{
	public function __construct(){
		parent::__construct('Testing Stream Classes and Interfaces - Basic', 'Simple tests to make sure the IStream inheritors are fine');
	}
	public function Run(){
		$this->OutH1("Testing Streams");
		$this->OutH2("OutStream");
		$out = new OutStream();
		$out->Write("Written from OutStrem<br/>\n");
		$out->Flush()->Close()->Write("Tested chaining ... every thing is ok for this class</br>\n");
		$this->OutWBr('<b>OutStream->CanRead()</b>: {0}', $out->CanRead()?'true':'false');
		$this->OutWBr('<b>OutStream->CanSeek()</b>: {0}', $out->CanSeek()?'true':'false');
		$this->OutWBr('<b>OutStream->CanWrite()</b>: {0}', $out->CanWrite()?'true':'false');
		$this->OutWBr('<b>OutStream->IsBinary()</b>: {0}', $out->IsBinary()?'true':'false');
		$this->OutWBr('<b>OutStream->IsClosed()</b>: {0}', $out->IsClosed()?'true':'false');
		$this->OutWBr('<b>OutStream->IsEOF()</b>: {0}', $out->IsEOF()?'true':'false');
		$this->OutWBr('<b>OutStream->IsOpen()</b>: {0}', $out->IsOpen()?'true':'false');
		$this->OutH3("Testing Reading ...");
		$r = $out->Read(10);
		$this->OutWBr("OutStream->Read(10): {0}", $r===null?"null":($r===false?"false":($r==''?"<empty string>":$r)));
		$this->OutH3("Testing Chaining ...");
		$this->OutWBr("Using ->Flush()->Close()->Write");
		$out->Flush()->Close()->Write("Written from chain .... ok<br/>\n");
		$this->OutWBr("Using ->Flush->Close->Write");
		$out->Flush->Close->Write("Written from another chain ... ok<br/>\n");
		$this->OutH1("Testing OutStream Finished Successfully!");
		$this->Hr();
		############################################################################################################
		$this->OutH2("Testing FileStream's");
		$this->OutP("Note that you need to have write and read permissions set up for using this test to the full extent.");
		$this->OutWBr("Creating File Stream in read write mode and file name of loca.test ...");
		$stream = new FileStream("something.local", OpenMode::$WriteAppend);
		$this->OutWBr("File stream created, no exceptions so far");
		$this->OutH3("Testing properties before openning ...");
		$this->OutWBr('<b>FileStream->CanRead()</b>: {0}', $stream->CanRead()?'true':'false');
		$this->OutWBr('<b>FileStream->CanSeek()</b>: {0}', $stream->CanSeek()?'true':'false');
		$this->OutWBr('<b>FileStream->CanWrite()</b>: {0}', $stream->CanWrite()?'true':'false');
		$this->OutWBr('<b>FileStream->IsBinary()</b>: {0}', $stream->IsBinary()?'true':'false');
		$this->OutWBr('<b>FileStream->IsClosed()</b>: {0}', $stream->IsClosed()?'true':'false');
		$this->OutWBr('<b>FileStream->IsEOF()</b>: {0}', $stream->IsEOF()?'true':'false');
		$this->OutWBr('<b>FileStream->IsOpen()</b>: {0}', $stream->IsOpen()?'true':'false');
		$this->OutWBr("Trying to open stream ... ");
		if($stream->Open()){
			$this->OutWBr("Stream Opened Successfully ...");
		}
		else{
			$this->OutWBr("A Problem Occured! {0}, {1}", $stream->IsOpen()?'open':'not open', $stream->IsClosed()?'closed':'not closed');
		}
		return true;
	}
	
	//public function Hr(){parent::Hr();}
	//public function Out($format=''){parent::Out($format);}
	//public function OutL($format=''){parent::OutL($format);}
	//public function OutWBr($format=''){parent::OutWBr($format);}
	//public function OutP($format=''){parent::OutP($format);}
	//public function OutH1($format=''){parent::OutH1($format);}
	//public function OutH2($format=''){parent::OutH2($format);}
	//public function OutH3($format=''){parent::OutH3($format);}
	//public function Title($value=null){return parent::Title($value);}
	//public function Message($value=null){return parent::Message($value);}
	
};
?>