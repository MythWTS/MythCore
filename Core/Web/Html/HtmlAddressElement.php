<?php
class HtmlAddressElement extends HtmlContainerElement implements IDOMFlow, IDOMPalpable{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$ADDRESS, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>