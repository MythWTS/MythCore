<?php
namespace Core\Web\Bs;
class Row extends ClassEnforcedContainerElement{
	/** Constructor($tag, $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag, $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(array('row'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>