<?php
class HtmlEmbedElement extends HtmlEmptyElement{
	/** Constructor($src='', $type='', $width='', $height='', $id='', $class='', $title='', $style='') */
	public function __construct($src='', $type='', $width='', $height='', $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$EMBED, null, $id, $class, $title, $style);
		if(!U::NA($src)){$this->_attributes['src']=U::ES($src);}
		if(!U::NA($type)){$this->_attributes['type']=U::ES($type);}
		if(!U::NA($width)){$this->_attributes['width']=U::ES($width);}
		if(!U::NA($height)){$this->_attributes['height']=U::ES($height);}
	}
	###########################################################################
	public function Height($value=null){
		if($value===null){return $this->_attributes['height'];}
		else{$this->_attributes['height']=U::ES($value);}
	}
	public function Width($value=null){
		if($value===null){return $this->_attributes['width'];}
		else{$this->_attributes['width']=U::ES($value);}
	}
	public function Src($value=null){
		if($value===null){return $this->_attributes['src'];}
		else{$this->_attributes['src']=U::ES($value);}
	}
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type']=U::ES($value);}
	}
};
?>