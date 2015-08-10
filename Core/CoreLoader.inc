<?php
$Loader = new CoreLoader(
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
		'Web/Html' => array(
			'Html',
			'Html5Attributes',
			'Html5Tags',
			'HtmlAreaElement',
			'HtmlAreaShapes',
			'HtmlBaseElement',
			'HtmlBrElement',
			'HtmlColElement',
			'HtmlCommentNode',
			'HtmlContainerElement',
			'HtmlDocTypeNode',
			'HtmlDocTypes',
			'HtmlElement',
			'HtmlEmptyElement',
			'HtmlHrElement',
			'HtmlImgElement',
			'HtmlInputElement',
			'HtmlInputTypes',
			'HtmlKeygenElement',
			'HtmlKeyTypes',
			'HtmlLinkElement',
			'HtmlLinkRelValues',
			'HtmlLinkTypeValues',
			'HtmlNode',
			'HtmlParamElement',
			'HtmlRawTextNode',
			'HtmlSourceElement',
			'HtmlTags',
			'HtmlTargetCommonValues',
			'HtmlWbrElement',
		),
	), 
	$Config->BasePath, '.php'
);
$Loader->Register();
?>