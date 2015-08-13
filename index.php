<?php
require_once "Core.inc";
/**
 * CURRENTLY THIS FILE IS USED MAINLY FOR TESTING IN THE LOCAL DEVELOPMENT ENVIRONMENT.
 * MOST OF THE TIME THE CONTENTS OF THIS FILE WILL NOT MAKE ANY SENSE, THIS SHOULD CHANGE AT THE ALPHA RELEASE
 */
################################################################################################################
$html = new HtmlHtmlElement();
$html->Head()->AddCharsetMeta();
$html->Head()->AddMetaXUACompatible();
$html->Head()->AddTitle('Testing the Html Module');
$html->Head()->AddDescriptionMeta("Testing out the various html elements in a quick way");
$html->Head()->AddAuthorMeta('Mohamed A. Abumarsa');
$html->Head()->AddViewportMeta();
$html->Head()->AddShortcutIcon('/favico.ico');
$html->Head()->AddAppleTouchIcon('/favico.png');
$html->Head()->AddStylesheet('/main.css');

$div = $html->Body()->RAddDiv();
$div->AddHeader(Html::H1('Heading'));
$div->AddNav(array(Html::P(Html::A('Home', '/')), Html::P(Html::A('Products', '/'))));
$div->AddDiv(Html::TextNode(''));
$div->AddFooter(Html::P('&copy; Copyright  by VC'));
echo $html;
?>