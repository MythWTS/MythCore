<?php
namespace Core\UI\Html;
use Core\Object;
use Core\IO\TextWriter;
/**
 * Parent class of all UI components. This class is to be implemented by any UI component to be integratable into the
 * MythCore class library UI package.
 * Most of the time, the implementation of __toString(), Write(), WriteLine() will be left to the default set here.
 */
abstract class HtmlNode extends Object implements IDOMNode{
	/** 
	 * Abstract method to be implemented by children to return the (optionally indented) html of this node
	 * @param $indent int
	 * The indentation level of the html output of this node. Defaults to 0 (no indent)
	 * @return string
	 */
	abstract public function OuterHtml($indent=0);
	/**
	 * Returns a string presentation of the node. Usually, this method will just call OuterHtml() with an indent of 0
	 * @return string
	 */
	public function __toString(){return $this->OuterHtml();}
	/**
	 * Writes the string representation of the node to the supplied TextWriter
	 * @param $writer TextWriter - the text writer to use with the Write method
	 * @param $indent The indentation level of the html output of this node. Defaults to 0 (no indent)
	 * @return HtmlNode
	 * The calling object instance (for method-chaining)
	 */
	public function Write(TextWriter $writer, $indent=0){$writer->Write($this->OuterHtml($indent)); return $this;}
	/**
	 * Writes the string representation of the node to the supplied TextWriter with a trailing newline character
	 * @param $writer TextWriter - the text writer to use with the Write method
	 * @param $indent The indentation level of the html output of this node. Defaults to 0 (no indent)
	 * @return HtmlNode
	 * The calling object instance (for method-chaining)
	 */
	public function WriteLine(TextWriter $writer, $indent=0){$writer->WriteLine($this->OuterHtml($indent)); return $this;}
};
?>