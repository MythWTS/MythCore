<?php
class HtmlOlElement extends HtmlGenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$OL, null, null, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddLi($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlLiElement($content, $value, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddLiNode(HtmlLiElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function RAddLi($content='', $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents[] = new HtmlLiElement($content, $value, $id, $class, $title, $style, $indentContent);
	}
};
?>