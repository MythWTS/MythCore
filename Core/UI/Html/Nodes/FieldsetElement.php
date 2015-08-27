<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "fieldset" html element in the documents object model
 * Constructor($content=''='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class FieldsetElement extends ContainerElement{
	/** Constructor($content=''='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$FIELDSET, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>