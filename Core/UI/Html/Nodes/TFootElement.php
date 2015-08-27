<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\GenericContainerElement;
/**
 * Represents a "tfoot" html element in the documents object model
 * Constructor($id='', $class='', $title='', $style='', $indentContent=true)
 */
class TFootElement extends GenericContainerElement{
	/** Constructor($id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$TFOOT, null, null, $id, $class, $title, $style, $indentContent);
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
};
?>