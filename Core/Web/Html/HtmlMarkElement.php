<?php
class HtmlMarkElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$MARK, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>