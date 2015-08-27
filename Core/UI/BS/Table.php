<?php
namespace Core\UI\BS;
use Core\UI\Html\Nodes\TrElement;
use Core\UI\Html\Nodes\TBodyElement;
use Core\UI\Html\Nodes\THeadElement;
use Core\UI\Html\Nodes\TFootElement;
use Core\UI\Html\Nodes\ColGroupElement;
use Core\UI\Html\Nodes\CaptionElement;
/**
 * Represents a table element with the table class enforced (at least). Exposes some of bootstrap's extensions
 * to the normal table element such as striped and condensed tables.
 * Constructor($id='', $striped=false, $hovered=false, $condensed=true, $bordered=false, $indentContents=true)
 */
class Table extends ClassEnforcedContainerElement{
	/** Constructor($id='', $striped=false, $hovered=false, $condensed=true, $bordered=false, $indentContents=true) */
	public function __construct($id='', $striped=false, $hovered=false, $condensed=true, $bordered=false, $indentContents=true){
		$classes = array('table');
		if($striped){$classes[] = 'table-striped';}
		if($hovered){$classes[] = 'table-hover';}
		if($condensed){$classes[] = 'table-condensed';}
		if($bordered){$classes[] = 'table-bordered';}
		parent::__construct($classes, 'table', null, $id, '', '', '', $indentContents);
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