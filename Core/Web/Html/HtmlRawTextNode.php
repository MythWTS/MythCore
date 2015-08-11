<?php
class HtmlRawTextNode extends HtmlNode{
	public $Html, $UseIndent;
	public function __construct($html, $useIndent=true){
		$this->Html = $html; $this->UseIndent = $useIndent;
	}
	public function OuterHtml($indent=0){
		$html = '';
		if(is_scalar($this->Html)){$html = $this->Html;}
		else if(is_object($this->Html)){
			if(method_exists($this->Html, '__toString')){$html = $this->Html->__toString();}
			else if(method_exists($this->Html, 'ToString')){$html = $this->Html->ToString();}
		}
		return !U::NA($html)?($this->UseIndent?U::Indent($html, $indent):$html):'';
	}
};
?>