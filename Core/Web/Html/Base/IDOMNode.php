<?php
interface IDOMNode extends IObject{
	function OuterHtml($indent=0);
	function __toString();
};
?>