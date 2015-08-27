<?php
namespace Core\UI\BS;
/**
 * Represents an lead element (an element with the lead class enforced to exist always)
 * Defaults to a p element if a tag is not supplied
 * Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class Lead extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('lead'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>