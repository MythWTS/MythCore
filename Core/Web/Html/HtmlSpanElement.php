<?php
class HtmlSpanElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$SPAN, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>