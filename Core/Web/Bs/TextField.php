<?php
namespace Core\Web\Bs;
///TODO: Set up accessors for the main propserties label, type, placeholder
///TODO: Decide a strategy of whether every element should be id'd and what to use for auto-ids
class TextField extends ClassEnforcedContainerElement{
	///TODO:Clean up any unnecessary properties
	protected $_label, $_type, $_rows, $_columns, $_placeholder;
	public function __construct($id, TextFieldTypes $type=null, $label='', $initialValue='', $placeholderText='', $rows='', $cols=''){
		if(\U::NA($id)){$id = uniqid('NPID');}
		//array $classesToEnforce, $tag, $contents='', $id='', $class='', $title='', $style='', $indentContents=true
		$type = $type?: TextFieldTypes::$Text;
		$this->_type = $type; $this->_label = $label; $this->_placeholder = $placeholderText; $this->_rows = $rows; $this->_columns = $cols;

		$lbl = new \HtmlLabelElement($label, $id);

		$attr = array();
		$txt = null; 
		if(!\U::NA($placeholderText)){$attr['placeholder'] = $placeholderText;}
		if($type == TextFieldTypes::$Multiline){
			if(!\U::NA($rows)){$attr['rows'] = "{$rows}";}
			if(!\U::NA($cols)){$attr['cols'] = "{$cols}";}
			$txt = new \HtmlTextAreaElement($initialValue, $id, 'form-control');
			$txt->SetAttributes($attr);
		}
		else{
			$txt = new \HtmlInputElement($type, $id, $attr, $id, 'form-control');
		}

		parent::__construct(array('form-group'), 'div', array($lbl, $txt), $id);
	}
};
?>