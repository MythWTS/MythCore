<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\GenericContainerElement;
/**
 * Represents a "dl" html element in the documents object model
 * Constructor($id='', $class='', $title='', $style='', $indentContent=true)
 */
class DlElement extends GenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$DL, null, null, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddTerm($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new DtElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddTermNode(DtElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function RAddTerm($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents = new DtElement($content, $id, $class, $title, $style, $indentContent);
	}

	public function AddDesc($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new DdElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddDescNode(DdElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function RAddDesc($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents = new DdElement($content, $id, $class, $title, $style, $indentContent);
	}
};
?>