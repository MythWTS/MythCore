<?php
class HtmlCiteElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$CITE, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>