<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
///TODO: Add methods for adding option and optgroup elements
/**
 * Represents a "select" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class SelectElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$SELECT, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>