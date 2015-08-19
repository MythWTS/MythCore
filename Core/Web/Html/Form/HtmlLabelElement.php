<?php
class HtmlLabelElement extends HtmlContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $labelFor='', $id='', $class='', $title='', $style='', $indentContent=false){
		$attr = U::NA($labelFor)? array() : array('for'=>U::ES($labelFor));
		parent::__construct(Html5Tags::$LABEL, $attr, $content, $id, $class, $title, $style, $indentContent);
	}
	
	public function ForId($value=null){
		if($value===null){return $this->_attributes['for'];}
		else{$this->_attributes['for'] = U::ES($value);}
	}
};
?>