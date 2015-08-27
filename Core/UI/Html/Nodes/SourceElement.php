<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "source" html element in the documents object model
 * Constructor($src='', $type='audio', array $attributes = null)
 */
class SourceElement extends EmptyElement{
	/** Constructor($src='', $type='audio', array $attributes = null) */
	public function __construct($src='', $type='audio', array $attributes = null){
		parent::__construct(Tags::$SOURCE, $attributes);
		if(!U::NA($src)){$this->_attributes['src'] = U::ES($src);}
		if(!U::NA($type)){$this->_attributes['type'] = U::ES($type);}
	}
	
	public function Src($value=null){
		if($value === null){return $this->_attributes['src'];}
		else{$this->_attributes['src'] = U::ES($value);}
	}
	public function Type($value=null){
		if($value === null){return $this->_attributes['type'];}
		else{$this->_attributes['type'] = U::ES($value);}
	}
};
?>