<?php
namespace Core\Web\Bs;
class FormGroup extends ClassEnforcedContainerElement{
	protected $_state, $_lg, $_sm;
	/** Constructor($contents='', FormState $state=null, $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($contents='', FormState $state=null, $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('form-group'), 'div', $contents, $id, $class, $title, $style, $indentContents);
		if(!\U::NA($state)){$this->AddClassOnce($state->__toString());}
		$this->_state = $state;
	}
	public function State(FormState $value=null){
		if($value === null){return $this->_state;}
		else{
			str_replace($this->_state->__toString(), '', $this->_attributes['class']);
			$this->_state = $value;
			$this->_attributes['class'] = trim("{$this->_attributes['class']} {$value->__toString()}");
		}
	}
	
	public function IsLarge($value=null){
		if($value === null){return $this->_lg;}
		else{
			$value = \U::EB($value);
			$this->_lg = $value;
			if($value){
				if(strpos($this->_attributes['class'], 'form-group-lg') === false){
					$this->_attributes['class'] = trim("{$this->_attributes['class']} form-group-lg");
				}
			}
			else{str_replace('form-group-lg', '', $this->_attributes['class']);}
		}
	}
	public function IsSmall($value=null){
		if($value === null){return $this->_sm;}
		else{
			$value = \U::EB($value);
			$this->_sm = $value;
			if($value){
				if(strpos($this->_attributes['class'], 'form-group-sm') === false){
					$this->_attributes['class'] = trim("{$this->_attributes['class']} form-group-sm");
				}
			}
			else{str_replace('form-group-sm', '', $this->_attributes['class']);}
		}
	}
};
?>