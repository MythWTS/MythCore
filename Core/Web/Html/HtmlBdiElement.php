<?php
class HtmlBdiElement extends HtmlContainerElement implements IDOMFlow, IDOMPhrasing, IDOMPalpable{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$BDI, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>