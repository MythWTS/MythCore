<?php
class HtmlFigureElement extends HtmlContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$FIGURE, null, $content, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddFigCaption($caption, $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlFigCaptionElement($caption, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddFigCaption($caption, $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents[] = new HtmlFigCaptionElement($caption, $id, $class, $title, $style, $indentContent);
	}
	public function AddFigCaptionNode(HtmlFigCaptionElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>