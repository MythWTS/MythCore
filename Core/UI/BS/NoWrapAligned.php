<?php
namespace Core\UI\BS;
/**
 * Represents an no-wrap-aligned element (an element with the text-nowrap class enforced to exist always)
 * Defaults to a p element if a tag is not supplied
 * Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class NoWrapAligned extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(
			array('text-nowrap'),
			$tag, $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>