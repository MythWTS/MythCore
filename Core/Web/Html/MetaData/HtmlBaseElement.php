<?php
class HtmlBaseElement extends HtmlEmptyElement implements IDOMMetaData{
	public function __construct($href='', $target='', $id=''){
		parent::__construct(Html5Tags::$BASE, null, $id);
		if(!U::NA($href)){$this->_attributes['href'] = $href;}
		if(!U::NA($target)){$this->_attributes['target'] = $target;}
	}
	
	public function Href($value=null){
		if($value === null){return $this->_attributes['href'];}
		else{$this->_attributes['href'] = $value;}
	}
	public function Target($value=null){
		if($value === null){return $this->_attributes['target'];}
		else{$this->_attributes['target'] = $value;}
	}
};
?>