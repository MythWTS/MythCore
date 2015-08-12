<?php
class HtmlContainerElement extends HtmlGenericContainerElement{
	/** Constructor($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true) */
	protected function __construct($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct($tag, $attributes, $content, $id, $class, $title, $style, $indentContent);
	}
};
?>