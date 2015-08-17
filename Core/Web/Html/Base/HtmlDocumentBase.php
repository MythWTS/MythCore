<?php
abstract class HtmlDocumentBase extends HtmlNode{
	protected $_doctype, $_html, $_indentContents;
	/** Constructor(HtmlHeadElement $head=null, HtmlBodyElement $body=null, HtmlDocTypes $docType=null, $indentContents=true) */
	protected function __construct(HtmlHeadElement $head=null, HtmlBodyElement $body=null, HtmlDocTypes $docType=null, $indentContents=true){
		$this->_doctype = new HtmlDocTypeNode($docType);
		$this->_html = new HtmlHtmlElement($head, $body, $indentContents);
		$this->_indentContents = $indentContents;
	}
	/** Render(IWriter $out=null, $indent=0) - Renders the document to the specified writer (defaults to standard output if none is provided) using the supplied indent */
	public function Render(IWriter $out=null, $indent=0){
		if($out==null){echo $this->OuterHtml($indent);}
		else{$out->Write($this->OuterHtml($indent));}
	}
	/** Implementation of base class abstract method OuterHmtml() - returns the html of the node */
	public function OuterHtml($indent=0){
		return $this->_doctype->OuterHtml() . ($this->_indentContents?U::$NL:'') . $this->_html->OuterHtml($indent);
	}
	/** Head(HtmlHeadElement $value=null) - In child classes, should at least return the head element. Might be implemented to set it as well.  */
	abstract public function Head(HtmlHeadElement $value=null);
	/** Body(HtmlBodyElement $value=null) - In child classes, should at least return the body element. Might be implemented to set it as well. */
	abstract public function Body(HtmlBodyElement $value=null);
};
?>