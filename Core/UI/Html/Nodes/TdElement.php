<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
/**
 * Represents a "td" html element in the documents object model
 * Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class TdElement extends ContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$TD, null, $content, $id, $class, $title, $style, $indentContent);
	}
	
	public function ColSpan($value=null){
		if($value === null){return $this->_attributes['colspan'];}
		else{$this->_attributes['colspan'] = $value;}
	}
	public function RowSpan($value=null){
		if($value === null){return $this->_attributes['rowspan'];}
		else{$this->_attributes['rowspan'] = $value;}
	}
};
?>