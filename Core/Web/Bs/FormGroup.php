<?php
namespace Core\Web\Bs;
class FormGroup extends ClassEnforcedContainerElement{
	protected $_state;
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
};
?>