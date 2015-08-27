<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
/**
 * Represents a "track" html element in the documents object model
 * Constructor($src='', $label='', $kind='', $srclang='',  $id='', $class='', $title='', $style='', $indentContent=false)
 */
class TrackElement extends EmptyElement{
	/** Constructor($src='', $label='', $kind='', $srclang='',  $id='', $class='', $title='', $style='', $indentContent=false) */
	public function __construct($src='', $label='', $kind='', $srclang='',  $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Tags::$TRACK, null, $id, $class, $title, $style, $indentContent);
		if(!U::NA($src)){$this->_attributes['src'] = U::ES($src);}
		if(!U::NA($label)){$this->_attributes['label'] = U::ES($label);}
		if(!U::NA($kind)){$this->_attributes['kind'] = U::ES($kind);}
		if(!U::NA($srclang)){$this->_attributes['srclang'] = U::ES($srclang);}
	}
	public function Src($value=null){
		if($value === null){return $this->_attributes['src'];}
		else{$this->_attributes['src'] = U::ES($value);}
	}
	public function Kind($value=null){
		if($value === null){return $this->_attributes['kind'];}
		else{$this->_attributes['kind'] = U::ES($value);}
	}
	public function Label($value=null){
		if($value === null){return $this->_attributes['label'];}
		else{$this->_attributes['label'] = U::ES($value);}
	}
	public function SrcLang($value=null){
		if($value === null){return $this->_attributes['srclang'];}
		else{$this->_attributes['srclang'] = U::ES($value);}
	}
};
?>