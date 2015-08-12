<?php
class HtmlAbbrElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$ABBR, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>