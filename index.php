<?php
/**
 * CURRENTLY THIS FILE IS USED MAINLY FOR TESTING IN THE LOCAL DEVELOPMENT ENVIRONMENT.
 * BY ACTIVATING THE CLASS LOADER WE CAN, JUST BY MENTIONING A CLASS, MAKE PHP PARSE IT, RIGHT!
 */
require_once "Core.inc";
$x = IANAMediaTypes::$App1DInterleavedParityfec;
echo "<b>{$x->Name}:</b> {$x->Value}<br/>\n";
$x = new HtmlContainerElement(Html5Tags::$DIV);
$x->AddNode(new HtmlImgElement('https://sourceforge.net/u/mythwts/user_icon', 'Myth WTS'))
	->AddNode(new HtmlInputElement(HtmlInputTypes::$Button, 'btn'))
	->AddNode(new HtmlCommentNode("Some Comment", false))
	->AddNode(new HtmlColElement(10, array('id'=>'something'), 'somethingElse', '', '', 'background-color: blue; width: 100px; height: 200px;'))
	->AddNode(new HtmlBrElement())->AddNode(new HtmlBrElement())
	->AddNode(new HtmlHrElement(null, 'hrId', 'hrClass', 'hrTitle', 'width: 80%; color: gray;'));

echo $x;
?>