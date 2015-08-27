<?php
namespace Core\UI\Html\Nodes;
use Core\U;
/**
 * Represents a "details" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class DetailsElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$DETAILS, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>