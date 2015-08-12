<?php
class HtmlDelElement extends HtmlContainerElement implements IDOMFlow, IDOMPhrasing{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$DEL, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>