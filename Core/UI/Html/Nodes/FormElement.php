<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
/**
 * Represents a "form" html element in the documents object model
 * Constructor($action='', $method='', $id='', $class='', $title='', $style='', $indentContent=true)
 */
class FormElement extends ContainerElement{
	/** Constructor($action='', $method='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($action='', $method='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Tags::$FORM, null, null, $id, $class, $title, $style, $indentContent);
		if(!U::NA($action)){$this->_attributes['action'] = U::ES($action);}
		if(!U::NA($method)){$this->_attributes['method'] = U::ES($method);}
	}
	
	public function Method($value = null){
		if($value === null){return $this->_attributes['method'];}
		else{$this->_attributes['method'] = U::ES($value);}
	}
	public function Action($value = null){
		if($value === null){return $this->_attributes['action'];}
		else{$this->_attributes['action'] = U::ES($value);}
	}
	public function AcceptCharset($value = null){
		if($value === null){return $this->_attributes['accept-charset'];}
		else{$this->_attributes['accept-charset'] = U::ES($value);}
	}
	public function EncType($value = null){
		if($value === null){return $this->_attributes['enctype'];}
		else{$this->_attributes['enctype'] = U::ES($value);}
	}
	public function Name($value = null){
		if($value === null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = U::ES($value);}
	}
	public function Target($value = null){
		if($value === null){return $this->_attributes['target'];}
		else{$this->_attributes['target'] = U::ES($value);}
	}
	public function AutoComplete($value=null){
		if($value === null){return $this->_attributes['autocomplete'];}
		else{
			if($value){$this->_attributes['autocomplete'] = 'on';}
			else {$this->_attributes['autocomplete'] = 'off';}
		}
	}
};
?>