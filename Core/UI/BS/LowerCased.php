<?php
namespace Core\UI\BS;
/**
 * Represents an lower-cased element (an element with the text-lowercase class enforced to exist always)
 * Defaults to a p element if a tag is not supplied
 * Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true)
 */
class LowerCased extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(
			array('text-lowercase'),
			$tag, $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>