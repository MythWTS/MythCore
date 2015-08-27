<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\GenericContainerElement;
/**
 * Represents a "table" html element in the documents object model
 * Constructor($id='', $class='', $title='', $style='', $indentContent=true)
 */
class TableElement extends GenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$TABLE, null, null, $id, $class, $title, $style, $indentContent);
	}

	public function AddRaw($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new TrElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddRaw($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new TrElement($id, $class, $title, $style, $indentContent);
	}
	public function AddRawNode(TrElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddTBody($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new TBodyElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddTBody($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new TBodyElement($id, $class, $title, $style, $indentContent);
	}
	public function AddTBodyNode(TBodyElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddTHead($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new THeadElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddTHead($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new THeadElement($id, $class, $title, $style, $indentContent);
	}
	public function AddTHeadNode(THeadElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddTFoot($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new TFootElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddTFoot($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new TFootElement($id, $class, $title, $style, $indentContent);
	}
	public function AddTFootNode(TFootElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddColGroup($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new ColGroupElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddColGroup($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new ColGroupElement($id, $class, $title, $style, $indentContent);
	}
	public function AddColGroupNode(ColGroupElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddCaption($content, $id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new CaptionElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddCaption($content, $id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new CaptionElement($content, $id, $class, $title, $style, $indentContent);
	}
	public function AddCaptionNode(CaptionElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>