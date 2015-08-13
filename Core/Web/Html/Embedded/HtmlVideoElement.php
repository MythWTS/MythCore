<?php
class HtmlVideoElement extends HtmlGenericContainerElement{
	/** Constructor($src='', $poster='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($src='', $poster='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$VIDEO, null, null, $id, $class, $title, $style, $indentContent);
		if(!U::NA($src)){$this->_attributes['src'] = U::ES($src);}
		if(!U::NA($poster)){$this->_attributes['poster'] = U::ES($poster);}
	}
	
	public function AddNode(HtmlSourceElement $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function AddSource($src, $type){
		$this->_contents[] = new HtmlSourceElement($src, $type);
		return $this;
	}

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
	public function Poster($value=null){
		if($value===null){return $this->_attributes['poster'];}
		else{$this->_attributes['poster']=U::ES($value);}
	}
	public function Preload($value=null){
		if($value===null){return $this->_attributes['preload'];}
		else{$this->_attributes['preload']=U::ES($value);}
	}

	public function Autoplay($value=null){
		if($value===null){return $this->_attributes['autoplay'];}
		else{
			if($value){$this->_attributes['autoplay'] = 'autoplay';}
			else{if(array_key_exists('autoplay', $this->_attributes)){unset($this->_attributes['autoplay']);}}
		}
	}
	public function Controls($value=null){
		if($value===null){return $this->_attributes['controls'];}
		else{
			if($value){$this->_attributes['controls'] = 'controls';}
			else{if(array_key_exists('controls', $this->_attributes)){unset($this->_attributes['controls']);}}
		}
	}
	public function Loop($value=null){
		if($value===null){return $this->_attributes['loop'];}
		else{
			if($value){$this->_attributes['loop'] = 'loop';}
			else{if(array_key_exists('loop', $this->_attributes)){unset($this->_attributes['loop']);}}
		}
	}
	public function Muted($value=null){
		if($value===null){return $this->_attributes['muted'];}
		else{
			if($value){$this->_attributes['muted'] = 'muted';}
			else{if(array_key_exists('muted', $this->_attributes)){unset($this->_attributes['muted']);}}
		}
	}
};
?>