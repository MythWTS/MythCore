<?php
final class HtmlDocTypeNode extends HtmlNode{
	private $_docType;
	public function __construct(HtmlDocTypes $docType){
		$this->_docType = $docType;
	}
	public function OuterHtml($indent=0){
		return "<!DOCTYPE {$this->_docType}>";
	}
	//Trying out type hints for accessor methods
	public function DocType(HtmlDocTypes $value = null){
		if($value === null){return $this->_docType;}
		else{$this->_docType = $value;}
	}
}
?>