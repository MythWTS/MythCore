<?php
namespace Core\UI\Html;
use Core\IObject;
/**
 * Parent interface to be implemented by all UI components to be integratable with the MythCore class library
 * Exposes methods OuterHtml($indent=0), __toString()
 */
interface IDOMNode extends IObject{
	/**
	 * When implemented, returns the outer html of the node, indented $indent units.
	 * @param $indent int
	 * The indentation level of the html output of this node. Defaults to 0 (no indent)
	 * @return string
	 */
	function OuterHtml($indent=0);
	/**
	 * Returns a string presentation of the node. Usually, this method will just call OuterHtml() with an indent of 0
	 * @return string
	 */
	function __toString();
};
?>