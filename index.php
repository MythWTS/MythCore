<?php
/**
 * CURRENTLY THIS FILE IS USED MAINLY FOR TESTING IN THE LOCAL DEVELOPMENT ENVIRONMENT.
 * BY ACTIVATING THE CLASS LOADER WE CAN, JUST BY MENTIONING A CLASS, MAKE PHP PARSE IT, RIGHT!
 */
require_once "Core.inc";
$tst = new HtmlHeadElement();
$tst->AddMetaCharset();
$tst->AddMetaXUACompatible();
$tst->AddTitle("Testing Head Element and Meta Content elements");
$tst->AddMetaDescription('Just testing the different DOM write element classes');
$tst->AddMetaAuthor('Mohamed A. Abumarsa');
$tst->AddMetaGenerator('MythCore');
$tst->AddMetaKeywords('MythCore, Myth, MythSDP');
$tst->AddShortcutIcon('/favicon.png');
$tst->AddAppleTouchIcon('/favicon.png');
echo $tst;
?>