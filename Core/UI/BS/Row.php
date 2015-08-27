<?php
namespace Core\UI\BS;
/**
 * Represents a bootstrap grid row.
 * Defaults to using "div" elements if no tag was supplied at construction time
 * Constructor($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class Row extends ClassEnforcedContainerElement{
	/** Constructor($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('row'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>