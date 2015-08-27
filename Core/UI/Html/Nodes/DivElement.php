<?php
namespace Core\UI\Html\Nodes;
use Core\U;
/**
 * Represents a "div" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class DivElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$DIV, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>