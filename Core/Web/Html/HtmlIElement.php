<?php
class HtmlIElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$I, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>