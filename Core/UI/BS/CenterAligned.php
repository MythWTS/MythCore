<?php
namespace Core\UI\BS;
/**
 * Represents an center-aligned element (an element with the text-center class enforced to exist always)
 * Defaults to a p element if a tag is not supplied
 * Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class CenterAligned extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(
			array('text-center'),
			$tag, $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>