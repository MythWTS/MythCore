<?php
class HtmlEmElement extends HtmlContainerElement implements IDOMFlow, IDOMPhrasing{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$EM, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>