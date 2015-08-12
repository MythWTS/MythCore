<?php
class HtmlBdoElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$BDO, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>