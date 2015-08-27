<?php
namespace Core\UI\BS;
/**
 * Represents a bootstrap grid container
 * Constructor($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class Container extends ClassEnforcedContainerElement{
	/** Constructor($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('container'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>