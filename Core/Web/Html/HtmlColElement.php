<?php
class HtmlColElement extends HtmlEmptyElement{
	public function __construct($span='', array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$COL, $attributes, $id, $class, $title, $style);
		if(!U::NA($span)){$this->_attributes['span'] = $span;}
	}
	
	public function Span($value=null){
		if($value === null){return $this->_attributes['span'];}
		else{$this->_attributes['span'] = $value;}
	}
};
?>