<?php
class HtmlTHeadElement extends HtmlGenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$THEAD, null, null, $id, $class, $title, $style, $indentContent);
	}

	public function AddRaw($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new HtmlTrElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddRaw($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new HtmlTrElement($id, $class, $title, $style, $indentContent);
	}
	public function AddRawNode(HtmlTrElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>