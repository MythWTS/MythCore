<?php
class HtmlDetailsElement extends HtmlContainerElement{
	/** Constructor($content='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$DETAILS, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>