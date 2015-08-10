<?php
class HtmlEmptyElement extends HtmlElement{
	public function __construct($tag, array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct($tag, $attributes, $contents, $id, $class, $title, $style, false, true);
	}
};
?>