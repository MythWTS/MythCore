<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "hr" html element in the documents object model
 * Constructor($id='', $class='', $title='', $style='')
 */
class HrElement extends EmptyElement{
	/** Constructor($id='', $class='', $title='', $style='') */
	public function __construct($id='', $class='', $title='', $style=''){
		parent::__construct(Tags::$HR, null, $id, $class, $title, $style);
	}
};
?>