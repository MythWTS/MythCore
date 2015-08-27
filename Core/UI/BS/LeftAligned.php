<?php
namespace Core\UI\BS;
/**
 * Represents an left-align element (an element with the text-left class enforced to exist always)
 * Defaults to a p element if a tag is not supplied
 * Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class LeftAligned extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(
			array('text-left'),
			$tag, $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>