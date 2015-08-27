<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "input" html element in the documents object model
 * Constructor($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style='')
 */
class InputElement extends EmptyElement{
	/** Constructor($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style='') */
	public function __construct($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Tags::$INPUT, $attributes, $id, $class, $title, $style);
		if(!U::NA($type)){$this->_attributes['type'] = U::ES($type);}
		if(!U::NA($name)){$this->_attributes['name'] = U::ES($name);}
	}
	public function Type($value = null){
		if($value === null){return $this->_attributes['type'];}
		else{$this->_attributes['type'] = U::ES($value);}
	}
	public function Name($value = null){
		if($value === null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = U::ES($value);}
	}
	public function AutoFocus($value=null){
		if($value === null){return $this->_attributes['autofocus'];}
		else{
			if($value){$this->_attributes['autofocus'] = 'autofocus';}
			else if(isset($this->_attributes['autofocus'])){unset($this->_attributes['autofocus']);}
		}
	}
	public function AutoComplete($value=null){
		if($value === null){return $this->_attributes['autocomplete'];}
		else{
			if($value){$this->_attributes['autocomplete'] = 'on';}
			else {$this->_attributes['autocomplete'] = 'off';}
		}
	}
	public function Disabled($value=null){
		if($value === null){return $this->_attributes['disabled'];}
		else{
			if($value){$this->_attributes['disabled'] = 'disabled';}
			else if(isset($this->_attributes['disabled'])){unset($this->_attributes['disabled']);}
		}
	}
	public function Checked($value=null){
		if($value === null){return $this->_attributes['checked'];}
		else{
			if($value){$this->_attributes['checked'] = 'disabled';}
			else if(isset($this->_attributes['checked'])){unset($this->_attributes['checked']);}
		}
	}
	public function ReadOnly($value=null){
		if($value === null){return $this->_attributes['readonly'];}
		else{
			if($value){$this->_attributes['readonly'] = 'readonly';}
			else if(isset($this->_attributes['readonly'])){unset($this->_attributes['readonly']);}
		}
	}
	public function Required($value=null){
		if($value === null){return $this->_attributes['required'];}
		else{
			if($value){$this->_attributes['required'] = 'required';}
			else if(isset($this->_attributes['required'])){unset($this->_attributes['required']);}
		}
	}
	public function Form($value = null){
		if($value === null){return $this->_attributes['form'];}
		else{$this->_attributes['form'] = U::ES($value);}
	}
	public function DataListId($value = null){
		if($value === null){return $this->_attributes['list'];}
		else{$this->_attributes['list'] = U::ES($value);}
	}
	public function Max($value = null){
		if($value === null){return $this->_attributes['max'];}
		else{$this->_attributes['max'] = U::ES($value);}
	}
	public function Min($value = null){
		if($value === null){return $this->_attributes['min'];}
		else{$this->_attributes['min'] = U::ES($value);}
	}
	public function MaxLength($value = null){
		if($value === null){return $this->_attributes['maxlength'];}
		else{$this->_attributes['maxlength'] = U::ES($value);}
	}
	public function Size($value = null){
		if($value === null){return $this->_attributes['size'];}
		else{$this->_attributes['size'] = U::ES($value);}
	}
	public function Value($value = null){
		if($value === null){return $this->_attributes['value'];}
		else{$this->_attributes['value'] = U::ES($value);}
	}
};
?>