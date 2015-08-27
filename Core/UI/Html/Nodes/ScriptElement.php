<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Element;
use Core\UI\Html\IDOMMetaData;
use Core\UI\Html\Tags;
/**
 * Represents a "script" html element in the documents object model
 * Constructor($src, $type='text/javascript', $charset='UTF-8', $defer=false, $async=false, $id='')
 */
class ScriptElement extends Element implements IDOMMetaData{
	/** Constructor($src, $type='text/javascript', $charset='UTF-8', $defer=false, $async=false, $id='') */
	public function __construct($src, $type='text/javascript', $charset='UTF-8', $defer=false, $async=false, $id=''){
		parent::__construct(Tags::$SCRIPT, null, null, $id, '', '', '', false);
		$this->_attributes['src'] = U::ES($src);
		if(!U::NA($type)){$this->_attributes['type'] = U::ES($type);}
		if(!U::NA($charset)){$this->_attributes['charset'] = U::ES($charset);}
		if($defer){$this->_attributes['defer'] = 'defer';}
		if($async){$this->_attributes['async'] = 'async';}
	}
	
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type']=U::ES($value);}
	}
	public function Src($value=null){
		if($value===null){return $this->_attributes['src'];}
		else{$this->_attributes['src']=U::ES($value);}
	}
	public function Charset($value=null){
		if($value===null){return $this->_attributes['charset'];}
		else{$this->_attributes['charset']=U::ES($value);}
	}
	public function Defer($value=null){
		if($value === null){return $this->_attributes['defer'];}
		else{
			if($value){$this->_attributes['defer'] = 'defer';}
			else if(isset($this->_attributes['defer'])){unset($this->_attributes['defer']);}
		}
	}
	public function Async($value=null){
		if($value === null){return $this->_attributes['async'];}
		else{
			if($value){$this->_attributes['async'] = 'async';}
			else if(isset($this->_attributes['async'])){unset($this->_attributes['async']);}
		}
	}
	
	public static function NewScript($src, $id=''){return new ScriptElement($src, 'text/javascript', '', false, false, $id);}
	public static function NewDefered($src, $id=''){return new ScriptElement($src, 'text/javascript', '', true, false, $id);}
	public static function NewAsync($src, $id=''){return new ScriptElement($src, 'text/javascript', '', false, true, $id);}
	public static function NewDeferedAsync($src, $id=''){return new ScriptElement($src, 'text/javascript', '', true, true, $id);}

	public static function NewVBScript($src, $id=''){return new ScriptElement($src, 'text/vbscript', '', false, false, $id);}
	public static function NewTCLScript($src, $id=''){return new ScriptElement($src, 'text/tcl', '', false, false, $id);}
	public static function NewJScript($src, $id=''){return new ScriptElement($src, 'text/jscript', '', false, false, $id);}
};
?>