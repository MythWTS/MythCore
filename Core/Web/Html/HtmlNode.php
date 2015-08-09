<?php
abstract class HtmlNode extends Object{
	abstract public function OuterHtml($indent=0);
	public function __toString(){return $this->OuterHtml();}
	public function Write(TextWriter $writer, $indent=0){$writer->Write($this->OuterHtml($indent));}
	public function WriteLine(TextWriter $writer, $indent=0){$writer->WriteLine($this->OuterHtml($indent));}
};
?>