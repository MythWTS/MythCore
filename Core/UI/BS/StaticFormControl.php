<?php
namespace Core\UI\BS;
/**
 * Represents static form controls (text within a form)
 * Constructor($contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class StaticFormControl extends ClassEnforcedContainerElement{
	/** Constructor($contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('form-control-static'), 'p', $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>