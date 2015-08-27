<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "legend" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false)
 */
class LegendElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Tags::$LEGEND, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>