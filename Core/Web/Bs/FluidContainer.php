<?php
namespace Core\Web\Bs;
class FluidContainer extends ClassEnforcedContainerElement{
	/** Constructor($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('container-fluid'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>