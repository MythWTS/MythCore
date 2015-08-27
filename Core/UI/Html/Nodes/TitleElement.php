<?php
namespace Core\UI\Html\Nodes;
use Core\UI\Html\Tags;
use Core\UI\Html\Element;
use Core\UI\Html\IDOMMetaData;
/**
 * Represents a "title" html element in the documents object model
 * Constructor($pageTitle='', $id='')
 */
class TitleElement extends Element implements IDOMMetaData{
	/** Constructor($pageTitle='', $id='') */
	public function __construct($pageTitle='', $id=''){
		$content = new RawTextNode($pageTitle, true);
		parent::__construct(Tags::$TITLE, null, $content, $id, '', '', '', false);
	}
	public function PageTitle($value=null){
		if($value===null){return $this->_contents[0]->Html;}
		else{$this->_contents[0] = new RawTextNode($value);}
	}
};
?>