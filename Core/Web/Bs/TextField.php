<?php
namespace Core\Web\Bs;
///TODO: Set up accessors for the main propserties label, type, placeholder
///TODO: Decide a strategy of whether every element should be id'd and what to use for auto-ids
class TextField extends ClassEnforcedContainerElement{
	///TODO:Clean up any unnecessary properties
	protected $_label, $_type, $_rows, $_columns, $_placeholder;
	protected $_lbl, $_input;
	public function __construct($id, TextFieldTypes $type=null, $label='', $initialValue='', $placeholderText='', $rows='', $cols=''){
		if(\U::NA($id)){$id = uniqid('NPID');}
		//array $classesToEnforce, $tag, $contents='', $id='', $class='', $title='', $style='', $indentContents=true
		$type = $type?: TextFieldTypes::$Text;
		$this->_type = $type; $this->_label = $label; $this->_placeholder = $placeholderText; $this->_rows = $rows; $this->_columns = $cols;

		$this->_lbl = new \HtmlLabelElement($label, $id);

		$attr = array();
		$this->_input = null; 
		if(!\U::NA($placeholderText)){$attr['placeholder'] = $placeholderText;}
		if($type == TextFieldTypes::$Multiline){
			if(!\U::NA($rows)){$attr['rows'] = "{$rows}";}
			if(!\U::NA($cols)){$attr['cols'] = "{$cols}";}
			$this->_input = new \HtmlTextAreaElement($initialValue, $id, 'form-control');
			$this->_input->SetAttributes($attr);
		}
		else{
			$this->_input = new \HtmlInputElement($type, $id, $attr, $id, 'form-control');
		}

		parent::__construct(array('form-group'), 'div', array($this->_lbl, $this->_input));
	}
	
	public function Id($value=null){
		if($value === null){return $this->_input->Id();}
		else{$this->_input->Id($value); $this->_input->Name($value);}
	}
	
	public function LabelContents($value=null){
		if($value===null){return $this->_lbl->ChildNodes();}
		else{$this->_lbl = new \HtmlLabelElement($value, $this->_input->Id());}
	}
};
?>