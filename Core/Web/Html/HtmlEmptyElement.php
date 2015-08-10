<?php
class HtmlEmptyElement extends HtmlElement{
	###########################################################################
	# Constructor
	###########################################################################
	public function __construct($tag, array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct($tag, $attributes, null, $id, $class, $title, $style, false, true);
	}
	###########################################################################
	# Property Accessors Overrides
	###########################################################################
	public function IsEmpty(){return true;}
	public function ChildNodes(array $value){
		if($value === null){return null;}
	}
	public function IndentContent($value=null){
		if($value === null){return false;}
	}
};
?>