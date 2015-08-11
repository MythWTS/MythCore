<?php
class HtmlSampElement extends HtmlContainerElement{
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$SAMP, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>