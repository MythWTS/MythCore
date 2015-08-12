<?php
class HtmlOutputElement extends HtmlContainerElement implements IDOMFlow, IDOMPhrasing{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$OUTPUT, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>