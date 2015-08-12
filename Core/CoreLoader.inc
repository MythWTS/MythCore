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
			'HtmlContainerElement',
			'HtmlElement',
			'HtmlEmptyElement',
			'HtmlGenericContainerElement',
			'HtmlNode',
			'IDOMMetaData',
			'IDOMNode'
		),
		'Core/Web/Html/Doc' => array(
			'HtmlBodyElement',
			'HtmlDocTypeNode',
			'HtmlHeadElement',
		),
		'Core/Web/Html/Embedded' => array(
			'HtmlAudioElement',
			'HtmlCanvasElement',
			'HtmlEmbedElement',
			'HtmlIFrameElement',
			'HtmlImgElement',
			'HtmlObjectElement',
			'HtmlVideoElement',
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
		'Core/Web/Html/Heading' => array(
			'HtmlH1Element', 'HtmlH2Element', 'HtmlH3Element', 'HtmlH4Element', 'HtmlH5Element', 'HtmlH6Element'
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
		'Core/Web/Html/Phrasing' => array(
			'HtmlAbbrElement',
			'HtmlAddressElement',
			'HtmlAElement',
			'HtmlBdiElement',
			'HtmlBdoElement',
			'HtmlBElement',
			'HtmlCiteElement',
			'HtmlCodeElement',
			'HtmlDelElement',
			'HtmlDfnElement',
			'HtmlEmElement',
			'HtmlIElement',
			'HtmlInsElement',
			'HtmlKbdElement',
			'HtmlMarkElement',
			'HtmlMeterElement',
			'HtmlOutputElement',
			'HtmlProgressElement',
			'HtmlQElement',
			'HtmlSampElement',
			'HtmlSElement',
			'HtmlSmallElement',
			'HtmlSpanElement',
			'HtmlStrongElement',
			'HtmlSubElement',
			'HtmlSupElement',
			'HtmlTimeElement',
			'HtmlUElement',
			'HtmlVarElement',
			'HtmlWbrElement',
		),
		'Core/Web/Html/Specific' => array(
			'HtmlParamElement',
			'HtmlSourceElement',
		),
	), 
	$Config->BasePath, '.php'
);
$Loader->Register();
?>