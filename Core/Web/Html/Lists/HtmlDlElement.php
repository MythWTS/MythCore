<?php
class HtmlDlElement extends HtmlGenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$DL, null, null, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddTerm($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlDtElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddTermNode(HtmlDtElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function RAddTerm($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents = new HtmlDtElement($content, $id, $class, $title, $style, $indentContent);
	}

	public function AddDesc($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlDdElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddDescNode(HtmlDdElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function RAddDesc($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents = new HtmlDdElement($content, $id, $class, $title, $style, $indentContent);
	}
};
?>