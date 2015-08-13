<?php
require_once "Core.inc";
/**
 * CURRENTLY THIS FILE IS USED MAINLY FOR TESTING IN THE LOCAL DEVELOPMENT ENVIRONMENT.
 * MOST OF THE TIME THE CONTENTS OF THIS FILE WILL NOT MAKE ANY SENSE, THIS SHOULD CHANGE AT THE ALPHA RELEASE
 */
################################################################################################################
$tst = new HtmlBodyElement();
$tst->AddNode($n = new HtmlArticleElement("Something"));
$n->AddSection(Html::Dialog());

echo $tst;
?>