<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "wbr" html element in the documents object model
 * Constructor(array $attributes = null, $id='', $class='', $title='', $style='')
 */
class WbrElement extends EmptyElement{
	/** Constructor(array $attributes = null, $id='', $class='', $title='', $style='') */
	public function __construct(array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Tags::$WBR, $attributes, $id, $class, $title, $style);
	}
};
?>