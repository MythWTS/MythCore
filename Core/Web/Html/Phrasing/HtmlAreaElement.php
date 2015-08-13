<?php
class HtmlAreaElement extends HtmlEmptyElement{
	/** Constructor(HtmlAreaShapes $shape, $coords, $href='', $alt='', array $attributes = null, $id='') */
	public function __construct(HtmlAreaShapes $shape, $coords, $href='', $alt='', array $attributes = null, $id=''){
		parent::__construct(Html5Tags::$AREA, $attributes, $id);
		$this->_attributes['shape'] = $shape->__toString();
		$this->_attributes['coords'] = $coords;
		if(!U::NA($href)){$this->_attributes['href'] = $href;}
		if(!U::NA($alt)){$this->_attributes['alt'] = $alt;}
	}
	
	public function Shape(HtmlAreaShapes $value=null){
		if($value === null){return $this->_attributes['src'];}
		else{$this->_attributes['src'] = $value->__toString();}
	}
	public function Coords($value=null){
		if($value === null){return $this->_attributes['coords'];}
		else{$this->_attributes['coords'] = $value;}
	}
	public function Href($value=null){
		if($value === null){return $this->_attributes['href'];}
		else{$this->_attributes['href'] = $value;}
	}
	public function Alt($value=null){
		if($value === null){return $this->_attributes['alt'];}
		else{$this->_attributes['alt'] = $value;}
	}
	public function Download($value=null){
		if($value === null){return $this->_attributes['download'];}
		else{$this->_attributes['download'] = $value;}
	}
	public function Media($value=null){
		if($value === null){return $this->_attributes['media'];}
		else{$this->_attributes['media'] = $value;}
	}
	public function Rel(HtmlLinkRelValues $value=null){
		if($value === null){return $this->_attributes['rel'];}
		else{$this->_attributes['rel'] = $value->__toString();}
	}
	public function Target($value=null){
		if($value === null){return $this->_attributes['target'];}
		else{$this->_attributes['target'] = $value;}
	}
};
?>