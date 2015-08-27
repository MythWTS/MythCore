<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
use Core\UI\Html\IDOMMetaData;
/**
 * Represents a "base" html element in the documents object model
 */
class BaseElement extends EmptyElement implements IDOMMetaData{
	/** Constructor($href='', $target='', $id='') */
	public function __construct($href='', $target='', $id=''){
		parent::__construct(Tags::$BASE, null, $id);
		if(!U::NA($href)){$this->_attributes['href'] = $href;}
		if(!U::NA($target)){$this->_attributes['target'] = $target;}
	}
	
	public function Href($value=null){
		if($value === null){return $this->_attributes['href'];}
		else{$this->_attributes['href'] = $value;}
	}
	public function Target($value=null){
		if($value === null){return $this->_attributes['target'];}
		else{$this->_attributes['target'] = $value;}
	}
};
?>