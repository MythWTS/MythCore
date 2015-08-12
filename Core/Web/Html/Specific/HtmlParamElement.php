<?php
class HtmlParamElement extends HtmlEmptyElement{
	public function __construct($name, $value='', array $attributes = null){
		parent::__construct(Html5Tags::$PARAM, $attributes);
		$this->_attributes['name'] = $name;
		if(!U::NA($value)){$this->_attributes['value'] = $value;}
	}
	
	public function Name($value=null){
		if($value === null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = U::ES($value);}
	}
	public function Value($value=null){
		if($value === null){return $this->_attributes['value'];}
		else{$this->_attributes['value'] = U::ES($value);}
	}
};
?>