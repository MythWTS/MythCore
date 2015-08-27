<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\Element;
use Core\UI\Html\IDOMMetaData;
/**
 * Represents a "noscript" html element in the documents object model
 * Constructor($note='', $id='')
 */
class NoScriptElement extends Element implements IDOMMetaData{
	/** Constructor($note='', $id='') */
	public function __construct($note='', $id=''){
		$content = new RawTextNode($note, true);
		parent::__construct(Tags::$NOSCRIPT, null, $content, $id, '', '', '', false);
	}
	
	public function Note($value=null){
		if($value===null){return $this->_contents[0]->Html;}
		else{$this->_contents[0] = new RawTextNode($value);}
	}
};
?>