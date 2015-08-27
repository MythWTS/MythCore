<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "q" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false)
 */
class QElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Tags::$Q, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>