<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\HtmlNode;
use Core\UI\Html\IDOMMetaData;
/**
 * Represents a raw text/html node in the documents object model
 * Constructor($html, $useIndent=true)
 */
class RawTextNode extends HtmlNode implements IDOMMetaData{
	public $Html, $UseIndent;
	/** Constructor($html, $useIndent=true) */
	public function __construct($html, $useIndent=true){
		$this->Html = $html; $this->UseIndent = $useIndent;
	}
	public function OuterHtml($indent=0){
		$html = U::ES($this->Html);
		return !U::NA($html)?($this->UseIndent?U::Indent($html, $indent):$html):'';
	}
};
?>