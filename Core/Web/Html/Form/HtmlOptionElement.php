<?php
class HtmlOptionElement extends HtmlContainerElement{
	/** Constructor($content, $value='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content, $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$OPTION, null, $content, $id, $class, $title, $style, $indentContent);
		if(!U::NA($value)){$this->_attributes['value'] = U::ES($value);}
	}
	public function Value($value = null){
		if($value === null){return $this->_attributes['value'];}
		else{$this->_attributes['value'] = U::ES($value);}
	}
};
?>