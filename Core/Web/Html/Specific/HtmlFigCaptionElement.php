<?php
class HtmlFigCaptionElement extends HtmlContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$FIGCAPTION, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>