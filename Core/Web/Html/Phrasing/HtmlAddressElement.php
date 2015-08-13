<?php
class HtmlAddressElement extends HtmlContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$ADDRESS, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>