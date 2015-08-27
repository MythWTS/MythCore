<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "param" html element in the documents object model
 * Constructor($name, $value='', array $attributes = null)
 */
class ParamElement extends EmptyElement{
	/** Constructor($name, $value='', array $attributes = null) */
	public function __construct($name, $value='', array $attributes = null){
		parent::__construct(Tags::$PARAM, $attributes);
		$this->_attributes['name'] = $name;
		if(!U::NA($value)){$this->_attributes['value'] = $value;}
	}
	
	public function Name($value=null){
		if($value === null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = U::ES($value);}
	}
	public function Value($value=null){
		if($value === null){return $this->_attributes['value'];}
		else{$this->_attributes['value'] = U::ES($value);}
	}
};
?>