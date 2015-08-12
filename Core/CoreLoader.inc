<?php
$Loader = new CoreLoader(
/*
		'Core/Web/Html/' => array(
		),
*/
	array(
		'Core' => array(
			'Enum'
		),
		'Core/IO' => array(
			'FileOpenMode',
			'FileStream',
			'IReader',
			'IStream',
			'IWriter',
			'TextReader',
			'TextWriter'
		),
		'Core/IO/Serialization' => array(
			'ISerializable'
		),
		'Core/Lookups' => array(
			'IANAMediaTypes'
		),
		'Core/Web/Html' => array(
			'Html',
		),
		'Core/Web/Html/Base' => array(
			'HtmlElement',
			'HtmlEmptyElement',
			'HtmlGenericContainerElement',
			'HtmlNode',
			'IDOMMetaData',
			'IDOMNode'
		),
		'Core/Web/Html/Doc' => array(
			'HtmlDocTypeNode',
			'HtmlHeadElement',
		),
		'Core/Web/Html/Enum' => array(
			'Html5Attributes',
			'Html5Tags',
			'HtmlAreaShapes',
			'HtmlDocTypes',
			'HtmlInputTypes',
			'HtmlKeyTypes',
			'HtmlLinkRelValues',
			'HtmlLinkTypeValues',
			'HtmlMetaHttpEquivValues',
			'HtmlMetaNames',
			'HtmlScriptTypes',
			'HtmlTags',
			'HtmlTargetCommonValues',
		),
		'Core/Web/Html/MetaData' => array(
			'HtmlBaseElement',
			'HtmlLinkElement',
			'HtmlMetaElement',
			'HtmlNoScriptElement',
			'HtmlTitleElement',
		),
		'Core/Web/Html/Misc' => array(
			'HtmlCommentNode',
			'HtmlInlineScriptElement',
			'HtmlRawTextNode',
			'HtmlScriptElement',
			'HtmlStyleElement',
		),
	), 
	$Config->BasePath, '.php'
);
$Loader->Register();
?>