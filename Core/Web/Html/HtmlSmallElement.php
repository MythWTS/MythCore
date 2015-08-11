<?php
class HtmlSmallElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$SMALL, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>