<?php
class HtmlHtmlElement extends HtmlGenericContainerElement{
	protected $_head, $_body;
	/** Constructor() */
	public function __construct(HtmlHeadElement $headElement=null, HtmlBodyElement $bodyElement=null, $indentContents=true){
		$this->_head = $headElement; $this->_body = $bodyElement;
		if($this->_head == null){$this->_head = new HtmlHeadElement();}
		if($this->_body == null){$this->_body = new HtmlBodyElement();}
		parent::__construct(Html5Tags::$HTML, null, array($this->_head, $this->_body), '', '', '', '', $indentContents);
	}
	
	public function Head(HtmlHeadElement $value=null){
		if($value === null){return $this->_head;}
		else{$this->_head = $value;}
	}
	public function Body(HtmlBodyElement $value=null){
		if($value === null){return $this->_body;}
		else{$this->_body = $value;}
	}
};
?>