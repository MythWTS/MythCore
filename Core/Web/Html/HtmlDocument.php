<?php
class HtmlDocument extends HtmlNode{
	protected $_doctype, $_html, $_indentContents;
	public function __construct(HtmlHeadElement $head=null, HtmlBodyElement $body=null, HtmlDocTypes $docType=null, $indentContents=true){
		$this->_doctype = new HtmlDocTypeNode($docType);
		$this->_html = new HtmlHtmlElement($head, $body);
		$this->_indentContents = $indentContents;
	}
	public function Render(IWriter $out=null, $indent=0){
		if($out==null){echo $this->OuterHtml($indent);}
		else{$out->Write($this->OuterHtml($indent));}
	}
	public function OuterHtml($indent=0){
		return $this->_doctype->OuterHtml() . ($this->_indentContents?U::$NL:'') . $this->_html->OuterHtml($indent);
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