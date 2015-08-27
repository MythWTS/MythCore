<?php
namespace Core\UI\BS;
use Core\U;
use Core\UI\Html\Nodes\LabelElement;
use Core\UI\Html\Nodes\TextAreaElement;
use Core\UI\Html\Nodes\InputElement;
///TODO: Set up accessors for the main propserties label, type, placeholder
///TODO: Decide a strategy of whether every element should be id'd and what to use for auto-ids
/**
 * Represents a bootstrap text input field in a form. An id must be supplied and if no id was supplied, an auto id 
 * will be generated and used since a text field relies in part on the "for" attribute of a "label" element
 * Construct($id, TextFieldTypes $type=null, $label='', $initialValue='', $placeholderText='', $rows='', $cols='')
 */
class TextField extends FormGroup{
	///TODO:Clean up any unnecessary properties
	protected $_label, $_type, $_rows, $_columns, $_placeholder;
	protected $_lbl, $_input;
	/** Construct($id, TextFieldTypes $type=null, $label='', $initialValue='', $placeholderText='', $rows='', $cols='') */
	public function __construct($id, TextFieldTypes $type=null, $label='', $initialValue='', $placeholderText='', $rows='', $cols=''){
		if(U::NA($id)){$id = uniqid('NPID');}
		//array $classesToEnforce, $tag, $contents='', $id='', $class='', $title='', $style='', $indentContents=true
		$type = $type?: TextFieldTypes::$Text;
		$this->_type = $type; $this->_label = $label; $this->_placeholder = $placeholderText; $this->_rows = $rows; $this->_columns = $cols;

		$this->_lbl = new LabelElement($label, $id);

		$attr = array();
		$this->_input = null; 
		if(!U::NA($placeholderText)){$attr['placeholder'] = $placeholderText;}
		if($type == TextFieldTypes::$Multiline){
			if(!U::NA($rows)){$attr['rows'] = "{$rows}";}
			if(!U::NA($cols)){$attr['cols'] = "{$cols}";}
			$this->_input = new TextAreaElement($initialValue, $id, 'form-control');
			$this->_input->SetAttributes($attr);
		}
		else{
			$this->_input = new InputElement($type, $id, $attr, $id, 'form-control');
		}

		parent::__construct(array($this->_lbl, $this->_input));
	}
	
	public function Id($value=null){
		if($value === null){return $this->_input->Id();}
		else{$this->_input->Id($value); $this->_input->Name($value);}
	}
	
	public function LabelContents($value=null){
		if($value===null){return $this->_lbl->ChildNodes();}
		else{$this->_lbl = new LabelElement($value, $this->_input->Id());}
	}
};
?>