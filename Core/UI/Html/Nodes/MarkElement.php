<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "mark" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false)
 */
class MarkElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Tags::$MARK, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>