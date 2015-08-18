<?php
class HtmlLiElement extends HtmlContainerElement{
	/** Constructor($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$LI, null, $content, $id, $class, $title, $style, $indentContent);
		if(!U::NA($value)){$this->_attributes['value'] = U::ES($value);}
	}
};
?>