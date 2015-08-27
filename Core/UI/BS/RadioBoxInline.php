<?php
namespace Core\UI\BS;
use Core\U;
use Core\UI\Html\Nodes\InputElement;
use Core\UI\Html\Nodes\RawTextNode;
use Core\UI\Html\Nodes\LabelElement;
/**
 * Represents a bootstrap inline radio box.
 * if no ID attribute was supplied an automatic id will be generated as the component relies in part on the
 * "for" attribute of the label element it generates
 * Constructor($id, $label='', $value='', $checked=false, $disabled=false, $class='', $title='', $style='', $indentContents=true)
 */
class RadioBoxInline extends ClassEnforcedContainerElement{
	protected $_input, $_label, $_txt;
	/** Constructor($id, $label='', $value='', $checked=false, $disabled=false, $class='', $title='', $style='', $indentContents=true) */
	public function __construct($id, $label='', $value='', $checked=false, $disabled=false, $class='', $title='', $style='', $indentContents=true){
		//Ensuring there's an ID
		if(U::NA($id)){$id = uniqid('NPID');}
		//Creating checkbox input element
		$attr = array();
		if(!U::NA($value)){$attr['value'] = U::ES($value);}
		if($checked){$attr['checked'] = 'checked';}
		if($disabled){$attr['disabled'] = 'disabled';}
		$this->_input = new InputElement('radio', $id, $attr, $id);
		//Creating contents for the label
		$this->_txt = new RawTextNode($label, true);
		//Creating label element and adding contents to it
		$this->_label = new LabelElement(array($this->_input, $this->_txt));
		//Creating element
		parent::__construct(array('radio-inline'), 'div', array($this->_label), '', $class, $title, $style, $indentContents);
		if($disabled){$this->AddClassOnce('disabled');}
	}
	/** Accessor for the checked attribute of the checkbox input */
	public function Checked($value=null){
		if($value===null){return $this->_input->HasAttribute('checked');}
		else{$this->_input->Checked($value);}
	}
	/** Accessor for the disabled attribute of the checkbox */
	public function Disabled($value=null){
		if($value===null){return $this->_input->HasAttribute('disabled');}
		else{
			$this->_input->Disabled($value);
			if($value){$this->AddClassOnce('disabled');}
			else{$this->RemoveClass('disabled');}
		}
	}
	/** Accessor for the text of the label property */
	public function Text($value=null){
		if($value===null){return $this->_txt->Html;}
		else{$this->_txt->Html = U::ES($value);}
	}
	/** Override of the Id property to set the property of the input not the containing div */
	public function Id($value=null){
		if($value===null){return $this->_input->Id();}
		else{$this->_input->Id($value); $this->_input->Name($value);}
	}
	/** Accessor for the value attribute of the checkbox input */
	public function Value($value = null){
		if($value===null){return $this->_input->Value();}
		else{$this->_input->Value($value);}
	}
};
?>