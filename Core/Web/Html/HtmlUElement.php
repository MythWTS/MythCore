<?php
class HtmlUElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$U, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>