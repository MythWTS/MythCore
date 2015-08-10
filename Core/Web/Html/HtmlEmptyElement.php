<?php
class HtmlEmptyElement extends HtmlElement{
	public function __construct($tag, $id='', $class='', $title='', $style='', array $attributes = null){
		parent::__construct($tag, $id, $class, $title, $style, $attributes, true, '', true);
	}
};
?>