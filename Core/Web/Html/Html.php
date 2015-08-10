<?php
final class Html extends Object{
	private function __constructor(){}
	
	public static function RawHtml($html, $useIndent=true){return new HtmlRawTextNode($html, $useIndent);}
	public static function Element($tag, array $attributes = null, $contents='', $id='', $class='', $title='', $style='', $indentContents=true, $isEmptyElement=false){
		return new HtmlElement($tag, $attributes, $contents, $id, $class, $title, $style, $indentContents, $isEmptyElement);
	}
};
?>