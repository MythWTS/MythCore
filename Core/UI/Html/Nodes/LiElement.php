<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "li" html element in the documents object model
 * Constructor($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false)
 */
class LiElement extends ContainerElement{
	/** Constructor($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Tags::$LI, null, $content, $id, $class, $title, $style, $indentContent);
		if(!U::NA($value)){$this->_attributes['value'] = U::ES($value);}
	}
};
?>