<?php
class HtmlSourceElement extends HtmlEmptyElement{
	public function __construct($src, $type='audio', array $attributes = null){
		parent::__construct(Html5Tags::$SOURCE, $attributes);
		$this->_attributes['src'] = $src;
		if(!U::NA($type)){$this->_attributes['type'] = $type;}
	}
	
	public function Src($value=null){
		if($value === null){return $this->_attributes['src'];}
		else{$this->_attributes['src'] = $value;}
	}
	public function Type($value=null){
		if($value === null){return $this->_attributes['type'];}
		else{$this->_attributes['type'] = $value;}
	}
};
?>