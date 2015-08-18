<?php
class HtmlDocument extends HtmlDocumentBase{
	/** Constructor(HtmlHeadElement $head=null, HtmlBodyElement $body=null, HtmlDocTypes $docType=null, $indentContents=true) */
	public function __construct(HtmlHeadElement $head=null, HtmlBodyElement $body=null, HtmlDocTypes $docType=null, $indentContents=true){
		parent::__construct($head, $body, $docType, $indentContents);
	}
	
	public function Head(HtmlHeadElement $value=null){
		if($value===null){return $this->_html->Head();}
		else{$this->_html->Head($value);}
	}
	public function Body(HtmlBodyElement $value=null){
		if($value === null){return $this->_html->Body();}
		else{$this->_html->Body($value);}
	}
};
?>