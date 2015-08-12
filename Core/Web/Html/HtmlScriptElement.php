<?php
class HtmlScriptElement extends HtmlContainerElement{
	public function __construct($src, $type='text/javascript', $charset='UTF-8', $defer=false, $async=false, $id=''){
		parent::__construct(Html5Tags::$SCRIPT, null, null, $id, '', '', '', false);
		$this->_attributes['src'] = $src;
		if(!U::NA($type)){$this->_attributes['type'] = $type;}
		if(!U::NA($charset)){$this->_attributes['charset'] = $charset;}
		if($defer){$this->_attributes['defer'] = 'defer';}
		if($async){$this->_attributes['async'] = 'async';}
	}
	
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type']=$value;}
	}
	public function Src($value=null){
		if($value===null){return $this->_attributes['src'];}
		else{$this->_attributes['src']=$value;}
	}
	public function Charset($value=null){
		if($value===null){return $this->_attributes['charset'];}
		else{$this->_attributes['charset']=$value;}
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
	
	public static function NewScript($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', false, false, $id);}
	public static function NewDefered($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', true, false, $id);}
	public static function NewAsync($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', false, true, $id);}
	public static function NewDeferedAsync($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', true, true, $id);}

	public static function NewVBScript($src, $id=''){return new HtmlScriptElement($src, 'text/vbscript', '', false, false, $id);}
	public static function NewTCLScript($src, $id=''){return new HtmlScriptElement($src, 'text/tcl', '', false, false, $id);}
	public static function NewJScript($src, $id=''){return new HtmlScriptElement($src, 'text/jscript', '', false, false, $id);}
};
?>