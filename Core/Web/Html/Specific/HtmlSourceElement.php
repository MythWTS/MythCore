<?php
class HtmlSourceElement extends HtmlEmptyElement{
	public function __construct($src, $type='audio', array $attributes = null){
		parent::__construct(Html5Tags::$SOURCE, $attributes);
		if(!U::NA($src)){$this->_attributes['src'] = U::ES($src);}
		if(!U::NA($type)){$this->_attributes['type'] = U::ES($type);}
	}
	
	public function Src($value=null){
		if($value === null){return $this->_attributes['src'];}
		else{$this->_attributes['src'] = U::ES($value);}
	}
	public function Type($value=null){
		if($value === null){return $this->_attributes['type'];}
		else{$this->_attributes['type'] = U::ES($value);}
	}
};
?>