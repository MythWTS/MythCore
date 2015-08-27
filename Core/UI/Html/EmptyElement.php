<?php
namespace Core\UI\Html;
/**
 * Base class for empty html elements such as "img", "link", "meta" ... etc
 */
class EmptyElement extends Element{
	###########################################################################
	# Constructor
	###########################################################################
	/** Constructor($tag, array $attributes = null, $id='', $class='', $title='', $style='') */
	public function __construct($tag, array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct($tag, $attributes, null, $id, $class, $title, $style, false, true);
	}
	###########################################################################
	# Property Accessors Overrides
	###########################################################################
	/** Overriden. Returns the IndentContent property, set accessor disabled in this class. */
	public function IndentContent($value=null){
		if($value === null){return false;}
	}
};
?>