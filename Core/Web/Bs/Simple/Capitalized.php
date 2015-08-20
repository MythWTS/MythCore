<?php
namespace Core\Web\Bs;
class Capitalized extends ClassEnforcedContainerElement{
	/** Constructor($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct(
			array('text-capitalize'),
			$tag, $contents, $id, $class, $title, $style, $indentContents
		);
	}
};
?>