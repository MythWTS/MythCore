<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Element;
use Core\UI\Html\IDOMMetaData;
use Core\UI\Html\Tags;
/**
 * Represents a "style" html element in the documents object model
 * Constructor($styleText='', $id='')
 */
class StyleElement extends Element implements IDOMMetaData{
	/** Constructor($styleText='', $id='') */
	public function __construct($styleText='', $id=''){
		$content = new RawTextNode($styleText, true);
		parent::__construct(Tags::$STYLE, null, $content, $id, '', '', '', true);
	}
	public function Style($value=null){
		if($value===null){return $this->_contents[0]->Html;}
		else{$this->_contents[0] = new RawTextNode($value);}
	}
};
?>