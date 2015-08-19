<?php
require_once "Core.inc";
################################################################################################################
# THIS FILEIS USED AS A TEST LOCALLY. ANY CONTENTS IN IT ARE CURRENTLY NOT IMPORTANT TO THE FRAMEWORK ITSELF
# FROM NOW ON, IT WILL CONTAIN THIS CONTENT ON THE REMOTE REPO UNTIL THE FRAMEWORK IS MATURE ENOUGH TO HAVE 
# OTHER USES FOR IT :)
################################################################################################################
$p = new HtmlPage(new HtmlPageMetaData('Testing - [Test Subject]'), array(
	//Components here
));
$p->Render();
?>