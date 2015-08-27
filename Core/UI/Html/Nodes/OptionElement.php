<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
/**
 * Represents a "option" html element in the documents object model
 * Constructor($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false)
 */
class OptionElement extends ContainerElement{
	/** Constructor($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Tags::$OPTION, null, $content, $id, $class, $title, $style, $indentContent);
		if(!U::NA($value)){$this->_attributes['value'] = U::ES($value);}
	}
	public function Value($value = null){
		if($value === null){return $this->_attributes['value'];}
		else{$this->_attributes['value'] = U::ES($value);}
	}
};
?>