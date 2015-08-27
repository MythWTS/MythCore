<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\GenericContainerElement;
/**
 * Represents a "html" html element in the documents object model
 * Constructor(HeadElement $headElement=null, BodyElement $bodyElement=null, $indentContents=true)
 */
class HtmlElement extends GenericContainerElement{
	protected $_head, $_body;
	/** Constructor(HeadElement $headElement=null, BodyElement $bodyElement=null, $indentContents=true) */
	public function __construct(HeadElement $headElement=null, BodyElement $bodyElement=null, $indentContents=true){
		$this->_head = $headElement; $this->_body = $bodyElement;
		if($this->_head == null){$this->_head = new HeadElement();}
		if($this->_body == null){$this->_body = new BodyElement();}
		parent::__construct(Tags::$HTML, null, array($this->_head, $this->_body), '', '', '', '', $indentContents);
	}
	
	public function Head(HeadElement $value=null){
		if($value === null){return $this->_head;}
		else{$this->_head = $value;}
	}
	public function Body(BodyElement $value=null){
		if($value === null){return $this->_body;}
		else{$this->_body = $value;}
	}
};
?>