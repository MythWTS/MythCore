<?php
namespace \Core\Web\Bs;
class Lead extends \HtmlContainerElement{
	/** Constructor($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true) */
	public function __construct($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true){
		parent::__construct(array('lead'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>