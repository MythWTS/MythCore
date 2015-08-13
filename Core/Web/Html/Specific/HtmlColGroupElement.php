<?php
class HtmlColGroupElement extends HtmlGenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$COLGROUP, null, $content, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddCol($span='', array $attributes = null, $id='', $class='', $title='', $style=''){
		$this->_contents[] = new HtmlColElement($span, $attributes, $id, $class, $title, $style);
		return $this;
	}
	public function RAddCol($span='', array $attributes = null, $id='', $class='', $title='', $style=''){
		return $this->_contents[] = new HtmlColElement($span, $attributes, $id, $class, $title, $style);;
	}
	public function AddColNode(HtmlColElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>