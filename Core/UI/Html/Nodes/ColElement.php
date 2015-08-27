<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "col" html element in the documents object model
 * Constructor($span='', array $attributes = null, $id='', $class='', $title='', $style='')
 */
class ColElement extends EmptyElement{
	/** Constructor($span='', array $attributes = null, $id='', $class='', $title='', $style='') */
	public function __construct($span='', array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Tags::$COL, $attributes, $id, $class, $title, $style);
		if(!U::NA($span)){$this->_attributes['span'] = $span;}
	}
	
	public function Span($value=null){
		if($value === null){return $this->_attributes['span'];}
		else{$this->_attributes['span'] = $value;}
	}
};
?>