<?php
class HtmlFieldsetElement extends HtmlContainerElement{
	/** Constructor($content=''='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$FIELDSET, null, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>