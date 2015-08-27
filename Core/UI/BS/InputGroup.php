<?php
namespace Core\UI\BS;
/**
 * Represents a bootstrap input group
 * Constructor($contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class InputGroup extends ClassEnforcedContainerElement{
	/** Constructor($contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(
			array('input-group'),
			'div', $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>