<?php
class HtmlCanvasElement extends HtmlContainerElement{
	/** Constructor($height='', $width='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($height='', $width='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$CANVAS, null, null, $id, $class, $title, $style, $indentContent);
		if(!U::NA($height)){$this->_attributes['height'] = U::ES($height);}
		if(!U::NA($width)){$this->_attributes['width'] = U::ES($width);}
	}
	public function Height($value=null){
		if($value===null){return $this->_attributes['height'];}
		else{$this->_attributes['height']=U::ES($value);}
	}
	public function Width($value=null){
		if($value===null){return $this->_attributes['width'];}
		else{$this->_attributes['width']=U::ES($value);}
	}
};
?>