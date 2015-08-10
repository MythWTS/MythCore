<?php
class HtmlLinkElement extends HtmlEmptyElement{
	public function __construct($href='', $rel='stylesheet', $type='text/css', array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$LINK, $attributes, $id, $class, $title, $style);
		if(!U::NA($rel)){$this->_attributes[Html5Attributes::$Rel] = $rel;}
		if(!U::NA($href)){$this->_attributes[Html5Attributes::$Href] = $href;}
		if(!U::NA($type)){$this->_attributes[Html5Attributes::$Type] = $type;}
	}
	public function Rel($value = null){
		if($value === null){return array_key_exists('rel', $this->_attributes)?$this->_attributes['rel']:'';}
		else{$this->_attributes['rel'] = $value;}
	}
	public function Href($value = null){
		if($value === null){return array_key_exists('href', $this->_attributes)?$this->_attributes['href']:'';}
		else{$this->_attributes['href'] = $value;}
	}
	public function Type($value = null){
		if($value === null){return array_key_exists('type', $this->_attributes)?$this->_attributes['type']:'';}
		else{$this->_attributes['type'] = $value;}
	}
	public function Rev($value = null){
		if($value === null){return array_key_exists('rev', $this->_attributes)?$this->_attributes['rev']:'';}
		else{$this->_attributes['rev'] = $value;}
	}
	public function Target($value = null){
		if($value === null){return array_key_exists('target', $this->_attributes)?$this->_attributes['target']:'';}
		else{$this->_attributes['target'] = $value;}
	}
	public function HrefLang($value = null){
		if($value === null){return array_key_exists('hreflang', $this->_attributes)?$this->_attributes['hreflang']:'';}
		else{$this->_attributes['hreflang'] = $value;}
	}
	public function Media($value = null){
		if($value === null){return array_key_exists('media', $this->_attributes)?$this->_attributes['media']:'';}
		else{$this->_attributes['media'] = $value;}
	}
};
?>