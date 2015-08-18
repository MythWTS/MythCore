<?php
class HtmlTrElement extends HtmlGenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$TR, null, null, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new HtmlTdElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new HtmlTdElement($content, $id, $class, $title, $style, $indentContent);
	}
	public function AddCellNode(HtmlTdElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function AddHCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new HtmlThElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddHCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new HtmlThElement($content, $id, $class, $title, $style, $indentContent);
	}
	public function AddHCellNode(HtmlThElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>