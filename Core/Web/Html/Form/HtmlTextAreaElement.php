<?php
class HtmlTextAreaElement extends HtmlContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$TEXTAREA, null, $content, $id, $class, $title, $style, $indentContent);
	}
	public function Name($value = null){
		if($value === null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = U::ES($value);}
	}
};
?>