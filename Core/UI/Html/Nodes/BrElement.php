<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "br" html element in the documents object model
 */
class BrElement extends EmptyElement{
	/** Constructor($id='', $class='', $title='', $style='') */
	public function __construct($id='', $class='', $title='', $style=''){
		parent::__construct(Tags::$BR, null, $id, $class, $title, $style);
	}
};
?>