<?php
class HtmlSElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$S, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>