<?php
class HtmlBodyElement extends HtmlContainerElement{
	/** Constructor($content = null, $id = '', $indentContent = true) */
	public function __construct($content = null, $id = '', $indentContent = true){
		parent::__construct(Html5Tags::$BODY, null, $content, $id, '', '', '', $indentContent);
	}
};
?>