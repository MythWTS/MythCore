<?php
namespace Core\UI\BS;
/**
 * Represents a bootstrap Input group addon (an icon that is ttached to an input group)
 * Constructor($contents='', $id='', $class='', $title='', $style='', $indentContents=false)
 */
class InputGroupAddon extends ClassEnforcedContainerElement{
	/** Constructor($contents='', $id='', $class='', $title='', $style='', $indentContents=false) */
	public function __construct($contents='', $id='', $class='', $title='', $style='', $indentContents=false){
		parent::__construct(
			array('input-group-addon'),
			'span', $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>