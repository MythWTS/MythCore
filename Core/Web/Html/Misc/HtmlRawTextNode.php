<?php
class HtmlRawTextNode extends HtmlNode implements IDOMMetaData{
	public $Html, $UseIndent;
	public function __construct($html, $useIndent=true){
		$this->Html = $html; $this->UseIndent = $useIndent;
	}
	public function OuterHtml($indent=0){
		$html = U::ES($this->Html);
		return !U::NA($html)?($this->UseIndent?U::Indent($html, $indent):$html):'';
	}
};
?>