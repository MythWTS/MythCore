<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "figure" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class FigureElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$FIGURE, null, $content, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddFigCaption($caption, $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new FigCaptionElement($caption, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddFigCaption($caption, $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents[] = new FigCaptionElement($caption, $id, $class, $title, $style, $indentContent);
	}
	public function AddFigCaptionNode(FigCaptionElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>