<?php
require_once "Core.inc";
/**
 * CURRENTLY THIS FILE IS USED MAINLY FOR TESTING IN THE LOCAL DEVELOPMENT ENVIRONMENT.
 * MOST OF THE TIME THE CONTENTS OF THIS FILE WILL NOT MAKE ANY SENSE, THIS SHOULD CHANGE AT THE ALPHA RELEASE
 */
################################################################################################################
$tst = new HtmlHeadElement();
$tst->AddBase('', '_new', 'docBaseTarget');
$tst->AddMetaCharset();
$tst->AddMetaXUACompatible();
$tst->AddTitle('Head Element Test');
$tst->AddMetaDescription('Some Description');
$tst->AddMetaAuthor('Mohamed A. Abumarsa');
$tst->AddMetaGenerator('MythCore Framework');
$tst->AddMetaViewport();
$tst->AddRawText("");
$tst->AddShortcutIcon('/favicon.ico');
$tst->AddAppleTouchIcon('/favico.png');
$tst->AddRawText("\n");
$tst->AddStylesheet('/styles.css', 'ssMain', HtmlLinkTypeValues::$Css);

echo $tst;
?>