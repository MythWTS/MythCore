<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "caption" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class CaptionElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$CAPTION, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>