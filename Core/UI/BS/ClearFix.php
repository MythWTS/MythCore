<?php
namespace Core\UI\BS;
/**
 * Represents a bootstrap clear fix element used to fix the clearing between columns
 * Constructor($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class ClearFix extends ClassEnforcedContainerElement{
	/** Constructor($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('clearfix'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>