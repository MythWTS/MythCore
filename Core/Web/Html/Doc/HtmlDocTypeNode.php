<?php
final class HtmlDocTypeNode extends HtmlNode{
	private $_docType;
	/** Constructor(HtmlDocTypes $docType) */
	public function __construct(HtmlDocTypes $docType=null){
		if($docType==null){$docType = HtmlDocTypes::$Html5;}
		$this->_docType = $docType;
	}
	public function OuterHtml($indent=0){
		return U::TAB($indent) . "<!DOCTYPE {$this->_docType}>";
	}
	public function DocType(HtmlDocTypes $value = null){
		if($value === null){return $this->_docType;}
		else{$this->_docType = $value;}
	}
}
?>