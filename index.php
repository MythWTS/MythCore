<?php
require_once "Core.inc";
/**
 * CURRENTLY THIS FILE IS USED MAINLY FOR TESTING IN THE LOCAL DEVELOPMENT ENVIRONMENT.
 * MOST OF THE TIME THE CONTENTS OF THIS FILE WILL NOT MAKE ANY SENSE, THIS SHOULD CHANGE AT THE ALPHA RELEASE
 */
################################################################################################################
$tst = new HtmlBodyElement();
$tst->AddA('Google', 'http://www.google.com');
$tst->AddAbbr("Abbr");
$tst->AddAddress("address");
$tst->AddB("Bold Text");
$tst->AddBdi("Bdi");
$tst->AddBdo("Bdo");
$tst->AddCite("Cite");
$tst->AddCode("Code");
$tst->AddComment("Comment comment");

$tst->AddAbbr('HtmlAbbrElement');
$tst->AddAddress('HtmlAddressElement');
$tst->AddA('HtmlAElement');
$tst->AddBdi('HtmlBdiElement');
$tst->AddBdo('HtmlBdoElement');
$tst->AddB('HtmlBElement');
$tst->AddCite('HtmlCiteElement');
$tst->AddCode('HtmlCodeElement');
$tst->AddDel('HtmlDelElement');
$tst->AddDfn('HtmlDfnElement');
$tst->AddEm('HtmlEmElement');
$tst->AddI('HtmlIElement');
$tst->AddIns('HtmlInsElement');
$tst->AddKbd('HtmlKbdElement');
$tst->AddMark('HtmlMarkElement');
$tst->AddMeter('HtmlMeterElement');
$tst->AddOutput('HtmlOutputElement');
$tst->AddProgress('HtmlProgressElement');
$tst->AddQ('HtmlQElement');
$tst->AddSamp('HtmlSampElement');
$tst->AddS('HtmlSElement');
$tst->AddSmall('HtmlSmallElement');
$tst->AddSpan('HtmlSpanElement');
$tst->AddStrong('HtmlStrongElement');
$tst->AddSub('HtmlSubElement');
$tst->AddSup('HtmlSupElement');
$tst->AddTime('HtmlTimeElement');
$tst->AddU('HtmlUElement');
$tst->AddVar('HtmlVarElement');
$tst->AddWbr('HtmlWbrElement');

$tst->AddH1('HtmlH1Element', '', 'h1', 'Title 1', 'color: red;', true);
$tst->AddH2('HtmlH2Element');
$tst->AddH3('HtmlH3Element');
$tst->AddH4('HtmlH4Element');
$tst->AddH5('HtmlH5Element');
$tst->AddH6('HtmlH6Element');

$tst->AddAudio('HtmlAudioElement');
$tst->AddCanvas('HtmlCanvasElement');
$tst->AddEmbed('HtmlEmbedElement');
$tst->AddIFrame('HtmlIFrameElement');
$tst->AddImg('HtmlImgElement');
$tst->AddObject('HtmlObjectElement');
$tst->AddVideo('HtmlVideoElement');

$tst->AddScript('/some.js');
$tst->AddRawText("<h1>Some trial heading injection</h1>");
$tst->AddInlineScript("var a = 10;");

echo $tst;
?>