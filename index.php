<?php
require_once "Core.inc";
/**
 * CURRENTLY THIS FILE IS USED MAINLY FOR TESTING IN THE LOCAL DEVELOPMENT ENVIRONMENT.
 * MOST OF THE TIME THE CONTENTS OF THIS FILE WILL NOT MAKE ANY SENSE, THIS SHOULD CHANGE AT THE ALPHA RELEASE
 */
################################################################################################################
$tst = new HtmlBodyElement();
$tst->AddNode($n = new HtmlArticleElement("Something"));
$n->AddSection($d = Html::Dialog());
$d->AddNode($h = Html::Header());
$h->AddH1("Heading text");
$d->AddNode($m = Html::Main());
$m->AddP("Some body text");
$d->AddNode($f = Html::Footer());
$f->AddNode($a = Html::A(Html::H2('heading in footer')));
$a->Href = 'http:://localhost';
$d->SetAttribute('open', 'open');
echo $tst;
?>