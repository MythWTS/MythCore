<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\HtmlNode;
use Core\UI\Html\DocTypes;
/**
 * Represents a DOCTYPE declaration in the documents object model
 * Constructor(DocTypes $docType)
 */
final class DocTypeNode extends HtmlNode{
	private $_docType;
	/** Constructor(DocTypes $docType) */
	public function __construct(DocTypes $docType=null){
		if($docType==null){$docType = DocTypes::$Html5;}
		$this->_docType = $docType;
	}
	public function OuterHtml($indent=0){
		return U::TAB($indent) . "<!DOCTYPE {$this->_docType}>";
	}
	public function DocType(DocTypes $value = null){
		if($value === null){return $this->_docType;}
		else{$this->_docType = $value;}
	}
}
?>