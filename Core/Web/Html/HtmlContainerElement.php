<?php
class HtmlContainerElement extends HtmlElement{
	###########################################################################
	# Constructor
	###########################################################################
	public function __construct($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct($tag, $attributes, $contents, $id, $class, $title, $style, $indentContents, false);
	}
	###########################################################################
	# Property Accessors Overrides
	###########################################################################
	public function IsEmpty(){return false;}
	###########################################################################
	# Public Functions
	###########################################################################
	public function HasContents(){
		return is_array($this->_contents) && count($this->_contents) > 0;
	}
};
?>