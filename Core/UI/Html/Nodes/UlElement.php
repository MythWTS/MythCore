<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\GenericContainerElement;
/**
 * Represents a "ul" html element in the documents object model
 * Constructor($id='', $class='', $title='', $style='', $indentContent=true)
 */
class UlElement extends GenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$UL, null, null, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddLi($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new LiElement($content, $value, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddLiNode(LiElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function RAddLi($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents[] = new LiElement($content, $value, $id, $class, $title, $style, $indentContent);
	}
};
?>