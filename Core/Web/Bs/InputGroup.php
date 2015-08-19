<?php
namespace Core\Web\Bs;
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