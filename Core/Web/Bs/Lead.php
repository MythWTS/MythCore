<?php
namespace Core\Web\Bs;
class Lead extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('lead'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>