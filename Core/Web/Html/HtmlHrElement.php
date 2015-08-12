<?php
class HtmlHrElement extends HtmlEmptyElement implements IDOMFlow{
	public function __construct(array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$HR, $attributes, $id, $class, $title, $style);
	}
};
?>