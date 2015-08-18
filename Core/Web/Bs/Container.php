<?php
namespace \Core\Web\Bs;
class Container extends ClassEnforcedContainerElement{
	/** Constructor($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true) */
	public function __construct($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true){
		parent::__construct(array('container'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>