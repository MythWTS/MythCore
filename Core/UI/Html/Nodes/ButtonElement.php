<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
/**
 * Represents a "button" html element in the documents object model
 */
class ButtonElement extends ContainerElement{
	/** Constructor($content=''='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Tags::$BUTTON, null, $content, $id, $class, $title, $style, $indentContent);
		if(!U::NA($id)){$this->_attributes['name']=$id;}
	}
	public function Name($value=null){
		if($value===null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = U::ES($value);}
	}
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type'] = U::ES($value);}
	}
};
?>