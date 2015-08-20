<?php
namespace Core\Web\Bs;
class Table extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($id='', $striped=false, $hovered=false, $condensed=true, $bordered=false, $indentContents=true){
		$classes = array('table');
		if($striped){$classes[] = 'table-striped';}
		if($hovered){$classes[] = 'table-hover';}
		if($condensed){$classes[] = 'table-condensed';}
		if($bordered){$classes[] = 'table-bordered';}
		parent::__construct($classes, 'table', null, $id, '', '', '', $indentContents);
	}
	public function AddRaw($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new \HtmlTrElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddRaw($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new \HtmlTrElement($id, $class, $title, $style, $indentContent);
	}
	public function AddRawNode(\HtmlTrElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddTBody($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new \HtmlTBodyElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddTBody($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new \HtmlTBodyElement($id, $class, $title, $style, $indentContent);
	}
	public function AddTBodyNode(\HtmlTBodyElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddTHead($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new \HtmlTHeadElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddTHead($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new \HtmlTHeadElement($id, $class, $title, $style, $indentContent);
	}
	public function AddTHeadNode(\HtmlTHeadElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddTFoot($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new \HtmlTFootElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddTFoot($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new \HtmlTFootElement($id, $class, $title, $style, $indentContent);
	}
	public function AddTFootNode(\HtmlTFootElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddColGroup($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new \HtmlColGroupElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddColGroup($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new \HtmlColGroupElement($id, $class, $title, $style, $indentContent);
	}
	public function AddColGroupNode(\HtmlColGroupElement $node){
		$this->_contents[] = $node;
		return $this;
	}

	public function AddCaption($content, $id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new \HtmlCaptionElement($content, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function RAddCaption($content, $id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new \HtmlCaptionElement($content, $id, $class, $title, $style, $indentContent);
	}
	public function AddCaptionNode(\HtmlCaptionElement $node){
		$this->_contents[] = $node;
		return $this;
	}
};
?>