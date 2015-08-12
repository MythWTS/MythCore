<?php
class HtmlDfnElement extends HtmlContainerElement implements IDOMFlow, IDOMPhrasing, IDOMPalpable{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$DFN, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>