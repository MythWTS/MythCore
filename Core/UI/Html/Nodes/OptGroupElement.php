<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "optgroup" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class OptGroupElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$OPTGROUP, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>