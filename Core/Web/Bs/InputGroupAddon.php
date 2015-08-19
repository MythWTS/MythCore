<?php
namespace Core\Web\Bs;
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