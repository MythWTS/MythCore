<?php
class HtmlButtonElement extends HtmlContainerElement{
	/** Constructor($content=''='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$BUTTON, null, $content, $id, $class, $title, $style, $indentContent);
		if(!U::NA($id)){$this->_attributes['name']=$id;}
	}
	public function Name($value=null){
		if($value===null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = U::ES($value);}
	}
};
?>