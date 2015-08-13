<?php
class HtmlBrElement extends HtmlEmptyElement{
	/** Constructor($id='', $class='', $title='', $style='') */
	public function __construct($id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$BR, null, $id, $class, $title, $style);
	}
};
?>