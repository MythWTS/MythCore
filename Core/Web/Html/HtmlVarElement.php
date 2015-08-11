<?php
class HtmlVarElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$VAR, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>