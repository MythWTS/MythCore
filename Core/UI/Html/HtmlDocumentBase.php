<?php
namespace Core\UI\Html;
use Core\U;
use Core\IO\IWriter;
use Core\UI\Html\Nodes\HeadElement;
use Core\UI\Html\Nodes\BodyElement;
use Core\UI\Html\Nodes\DocTypeNode;
use Core\UI\Html\Nodes\HtmlElement;
/**
 * Abstract base class for all html document classes in the framework
 */
abstract class HtmlDocumentBase extends HtmlNode{
	protected $_doctype, $_html, $_indentContents;
	/** Constructor(HeadElement $head=null, BodyElement $body=null, DocTypes $docType=null, $indentContents=true) */
	protected function __construct(HeadElement $head=null, BodyElement $body=null, DocTypes $docType=null, $indentContents=true){
		$this->_doctype = new DocTypeNode($docType);
		$this->_html = new HtmlElement($head, $body, $indentContents);
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
	/** Head(HeadElement $value=null) - In child classes, should at least return the head element. Might be implemented to set it as well.  */
	abstract public function Head(HeadElement $value=null);
	/** Body(BodyElement $value=null) - In child classes, should at least return the body element. Might be implemented to set it as well. */
	abstract public function Body(BodyElement $value=null);
};
?>