<?php
class HtmlIFrameElement extends HtmlGenericContainerElement{
	/** Constructor($src='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($src='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$IFRAME, null, null, $id, $class, $title, $style, $indentContent);
		if(!U::NA($src)){$this->_attributes['src'] = U::ES($src);}
	}
	public function Src($value=null){
		if($value===null){return $this->_attributes['src'];}
		else{$this->_attributes['src']=U::ES($value);}
	}
	public function SrcDoc($value=null){
		if($value===null){return $this->_attributes['srcdoc'];}
		else{$this->_attributes['srcdoc']=U::ES($value);}
	}
	public function Name($value=null){
		if($value===null){return $this->_attributes['name'];}
		else{$this->_attributes['name']=U::ES($value);}
	}
	public function Height($value=null){
		if($value===null){return $this->_attributes['height'];}
		else{$this->_attributes['height']=U::ES($value);}
	}
	public function Width($value=null){
		if($value===null){return $this->_attributes['width'];}
		else{$this->_attributes['width']=U::ES($value);}
	}
	public function Seamless($value=null){
		if($value===null){return $this->_attributes['seamless'];}
		else{
			if($value){$this->_attributes['seamless'] = 'seamless';}
			else{if(array_key_exists('seamless', $this->_attributes)){unset($this->_attributes['seamless']);}}
		}
	}
};
?>