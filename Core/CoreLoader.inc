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
		"Core/Settings" => array(
		),
		"Core/Exceptions" => array(
		),
		"Data" => array(
		),
		"Data/DB/Sql" => array(
		),
		"Data/DB" => array(
		),
		"Data/DB/MySql" => array(
		),
		"Data/Xml" => array(
		),
		"Web" => array(
		),
		"Web/Html" => array(
			"Html", "Html5Attributes", "Html5Tags", "HtmlContainerElement", "HtmlElement", "HtmlEmptyElement", "HtmlLinkElement",
			"HtmlLinkRelValues", "HtmlLinkTypeValues", "HtmlNode", "HtmlRawTextNode",
		),
		"Web/Controls" => array(
		)
	), 
	$Config->BasePath, ".php"
);
$Loader->Register();
?>