<?php
final class HtmlDocTypeNode extends HtmlNode{
	private $_docType;
	/** Constructor(HtmlDocTypes $docType) */
	public function __construct(HtmlDocTypes $docType){
		$this->_docType = $docType;
	}
	public function OuterHtml($indent=0){
		return "<!DOCTYPE {$this->_docType}>";
	}
	public function DocType(HtmlDocTypes $value = null){
		if($value === null){return $this->_docType;}
		else{$this->_docType = $value;}
	}
}
?>