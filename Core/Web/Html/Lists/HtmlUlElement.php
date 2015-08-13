<?php
class HtmlUlElement extends HtmlGenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$UL, null, null, $id, $class, $title, $style, $indentContent);
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