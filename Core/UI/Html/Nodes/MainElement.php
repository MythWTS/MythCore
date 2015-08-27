<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "main" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class MainElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$MAIN, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>