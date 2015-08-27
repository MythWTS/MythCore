<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
/**
 * Represents a "label" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false)
 */
class LabelElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $labelFor='', $id='', $class='', $title='', $style='', $indentContent=false){
		$attr = U::NA($labelFor)? array() : array('for'=>U::ES($labelFor));
		parent::__construct(Tags::$LABEL, $attr, $content, $id, $class, $title, $style, $indentContent);
	}
	
	public function ForId($value=null){
		if($value===null){return $this->_attributes['for'];}
		else{$this->_attributes['for'] = U::ES($value);}
	}
};
?>