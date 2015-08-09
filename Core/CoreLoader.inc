<?php
$Loader = new CoreLoader(
	array(
		"Core" => array(
			"Enum"
		),
		"Core/IO" => array(
			"IStream", "IReader", "IWriter", "FileOpenMode", "FileStream", "TextReader", "TextWriter"
		),
		"Core/IO/Serialization" => array(
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
			"HtmlNode"
		),
		"Web/Controls" => array(
		)
	), 
	$Config->BasePath, ".php"
);
$Loader->Register();
?>