<?php
namespace Core\UI\BS;
/**
 * Represents an upper-cased element (an element with the text-uppercase class enforced to exist always)
 * Defaults to a p element if a tag is not supplied
 * Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class UpperCased extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(
			array('text-uppercase'),
			$tag, $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>