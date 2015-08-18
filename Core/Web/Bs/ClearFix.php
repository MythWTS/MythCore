<?php
namespace \Core\Web\Bs;
class ClearFix extends ClassEnforcedContainerElement{
	/** Constructor($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true) */
	public function __construct($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true){
		parent::__construct(array('clearfix'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>