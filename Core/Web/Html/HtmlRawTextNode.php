<?php
class HtmlRawTextNode extends HtmlNode{
	public $Html, $UseIndent;
	public function __construct($html, $useIndent=true){
		$this->Html = $html; $this->UseIndent = $useIndent;
	}
	public function OuterHtml($indent=0){
		return $this->UseIndent?U::Indent($this->Html, $indent):$this->Html;
	}
};
?>