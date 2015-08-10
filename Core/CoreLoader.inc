<?php
$Loader = new CoreLoader(
	array(
		"Core" => array(
			"Enum"
		),
		"Core/IO" => array(
			"FileOpenMode", "FileStream", "IReader", "IStream", "IWriter", "TextReader", "TextWriter"
		),
		"Core/IO/Serialization" => array(
			"ISerializable"
		),
		"Core/Lookups" => array(
			"IANAMediaTypes"
		),
		"Web/Html" => array(
			"Html", "Html5Attributes", "Html5Tags", "HtmlCommentNode", "HtmlContainerElement", "HtmlDocTypeNode", "HtmlDocTypes",
			"HtmlElement", "HtmlEmptyElement", "HtmlLinkElement",
			"HtmlLinkRelValues", "HtmlLinkTypeValues", "HtmlNode", "HtmlRawTextNode", "HtmlTags"
		),
	), 
	$Config->BasePath, ".php"
);
$Loader->Register();
?>