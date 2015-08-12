<?php
class HtmlInsElement extends HtmlContainerElement implements IDOMFlow, IDOMPhrasing{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$INS, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>