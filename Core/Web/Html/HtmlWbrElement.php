<?php
class HtmlWbrElement extends HtmlEmptyElement{
	public function __construct(array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$WBR, $attributes, $id, $class, $title, $style);
	}
};
?>