<?php
class HtmlAudioElement extends HtmlGenericContainerElement{
	/** Constructor($src='', $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($src='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$VIDEO, null, null, $id, $class, $title, $style, $indentContent);
		if(!U::NA($src)){$this->_attributes['src'] = U::ES($src);}
	}

	public function AddSource($src, $type){
		$this->_contents[] = new HtmlSourceElement($src, $type);
		return $this;
	}
	public function AddTrack($src='', $label='', $kind='', $srclang=''){
		$this->_contents[] = new HtmlTrackElement($src, $label, $kind, $srclang);
		return $this;
	}
	public function AddSourceNode(HtmlSourceElement $source){
		$this->_contents[] = $source;
		return $this;
	}
	public function AddTrackNode(HtmlTrackElement $track){
		$this->_contents = $track;
		return $this;
	}

	public function Src($value=null){
		if($value===null){return $this->_attributes['src'];}
		else{$this->_attributes['src']=U::ES($value);}
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