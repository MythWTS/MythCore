<?php
class HtmlImgElement extends HtmlEmptyElement implements IDOMEmbedded, IDOMFlow, IDOMPhrasing, IDOMPalpable, IDOMInteractive{
	public function __construct($src='', $alt='', $width='', $height='', array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$IMG, $attributes, $id, $class, $title, $style);
		if(!U::NA($src)){$this->_attributes['src'] = $src;}
		if(!U::NA($alt)){$this->_attributes['alt'] = $alt;}
		if(!U::NA($width)){$this->_attributes['width'] = $width;}
		if(!U::NA($height)){$this->_attributes['height'] = $height;}
	}
	public function Src($value = null){
		if($value === null){return $this->_attributes['src'];}
		else{$this->_attributes['src'] = $value;}
	}
	public function LongDesc($value = null){
		if($value === null){return $this->_attributes['longdesc'];}
		else{$this->_attributes['longdesc'] = $value;}
	}
	public function UseMap($value = null){
		if($value === null){return $this->_attributes['usemap'];}
		else{$this->_attributes['usemap'] = $value;}
	}
	public function Alt($value = null){
		if($value === null){return $this->_attributes['alt'];}
		else{$this->_attributes['alt'] = $value;}
	}
	public function Width($value = null){
		if($value === null){return $this->_attributes['width'];}
		else{$this->_attributes['width'] = $value;}
	}
	public function Height($value = null){
		if($value === null){return $this->_attributes['height'];}
		else{$this->_attributes['height'] = $value;}
	}
	public function CrossOrigin($value = null){
		if($value === null){return $this->_attributes['crossorigin'];}
		else{$this->_attributes['crossorigin'] = $value;}
	}
};
?>