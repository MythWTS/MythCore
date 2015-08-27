<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "body" html element in the documents object model
 */
class BodyElement extends ContainerElement{
	/** Constructor($content = null, $id = '', $indentContent = true) */
	public function __construct($content = null, $id = '', $indentContent = true){
		parent::__construct(Tags::$BODY, null, $content, $id, '', '', '', $indentContent);
	}
};
?>