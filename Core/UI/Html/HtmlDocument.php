<?php
namespace Core\UI\Html;
use Core\UI\Html\Nodes\HeadElement;
use Core\UI\Html\Nodes\BodyElement;
use Core\UI\Html\Nodes\DocTypeNode;
/**
 * Base class for html documents that allow assigning the Head and Body attributes. Documents are the topmost
 * containers of html simple nodes. They represent the whole html document and are capable of outputing the html
 * via the Render() method. They are fundamentally different than Pages
 * @see HtmlPage
 */
class HtmlDocument extends HtmlDocumentBase{
	/** Constructor(HeadElement $head=null, BodyElement $body=null, DocTypes $docType=null, $indentContents=true) */
	public function __construct(HeadElement $head=null, BodyElement $body=null, DocTypes $docType=null, $indentContents=true){
		parent::__construct($head, $body, $docType, $indentContents);
	}
	
	public function Head(HeadElement $value=null){
		if($value===null){return $this->_html->Head();}
		else{$this->_html->Head($value);}
	}
	public function Body(BodyElement $value=null){
		if($value === null){return $this->_html->Body();}
		else{$this->_html->Body($value);}
	}
};
?>