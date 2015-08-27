<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\GenericContainerElement;
/**
 * Represents a "tr" html element in the documents object model
 * Constructor($id='', $class='', $title='', $style='', $indentContent=true)
 */
class TrElement extends GenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$TR, null, null, $id, $class, $title, $style, $indentContent);
	}
	
	public function AddCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new TdElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new TdElement($content, $id, $class, $title, $style, $indentContent);
	}
	public function AddCellNode(TdElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function AddHCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new ThElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddHCell($content, $id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new ThElement($content, $id, $class, $title, $style, $indentContent);
	}
	public function AddHCellNode(ThElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>