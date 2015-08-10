<?php
class HtmlBrElement extends HtmlEmptyElement{
	public function __construct(array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$BR, $attributes, $id, $class, $title, $style);
	}
};
?>