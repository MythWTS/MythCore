<?php
namespace \Core\Web\Bs;
class Row extends \HtmlContainerElement{
	/** Constructor($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true) */
	public function __construct($tag, $contents='', $id='', $classes='', $title='', $style='', $indentContents=true){
		parent::__construct(array('row'), $tag, $contents, $id, $class, $title, $style, $indentContents);
	}
};
?>