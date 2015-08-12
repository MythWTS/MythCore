<?php
class HtmlDelElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$DEL, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>