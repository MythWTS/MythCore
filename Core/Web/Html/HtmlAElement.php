<?php
class HtmlAElement extends HtmlContainerElement{
	public function __construct($content, $href='', $id='', $class='', $title='', $style='', $indentContent=false){
		parent::__construct(Html5Tags::$A, null, $content, $id, $class, $title, $style, $indentContent);
		if(!U::NA($href)){$this->_attributes['href'] = $href;}
	}
	public function Href($value=null){
		if($value === null){return $this->_attributes['href'];}
		else{$this->_attributes['href'] = $value;}
	}
	public function Target($value=null){
		if($value === null){return $this->_attributes['target'];}
		else{$this->_attributes['target'] = $value;}
	}
	public function Rel($value=null){
		if($value === null){return $this->_attributes['rel'];}
		else{$this->_attributes['rel'] = $value;}
	}
	public function Type($value=null){
		if($value === null){return $this->_attributes['type'];}
		else{$this->_attributes['type'] = $value;}
	}
	public function Download($value=null){
		if($value === null){return $this->_attributes['download'];}
		else{$this->_attributes['download'] = $value;}
	}
};
?>