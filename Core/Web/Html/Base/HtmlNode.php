<?php
abstract class HtmlNode extends Object implements IDOMNode{
	/** Abstract method to be implemented by children to return the (optionally indented) html of this node */
	abstract public function OuterHtml($indent=0);
	/** Magic method that calls OuterHtml(0) to return a string representation of the node so it can be used in string contexts */
	public function __toString(){return $this->OuterHtml();}
	/** Writes the string representation of the node to the supplied TextWriter */
	public function Write(TextWriter $writer, $indent=0){$writer->Write($this->OuterHtml($indent));}
	/** Writes the string representation of the node to the supplied TextWriter with a trailing new line stringas defined in U::$NL */
	public function WriteLine(TextWriter $writer, $indent=0){$writer->WriteLine($this->OuterHtml($indent));}
};
?>