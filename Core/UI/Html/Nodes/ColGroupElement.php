<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\GenericContainerElement;
/**
 * Represents a "colgroup" html element in the documents object model
 * Constructor($id='', $class='', $title='', $style='', $indentContent=true)
 */
class ColGroupElement extends GenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$COLGROUP, null, $content, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddCol($span='', array $attributes = null, $id='', $class='', $title='', $style=''){
		$this->_contents[] = new ColElement($span, $attributes, $id, $class, $title, $style);
		return $this;
	}
	public function RAddCol($span='', array $attributes = null, $id='', $class='', $title='', $style=''){
		return $this->_contents[] = new ColElement($span, $attributes, $id, $class, $title, $style);;
	}
	public function AddColNode(ColElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>