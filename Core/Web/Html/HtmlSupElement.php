<?php
class HtmlSupElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$SUP, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>