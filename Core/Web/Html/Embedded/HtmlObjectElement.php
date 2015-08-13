<?php
class HtmlObjectElement extends HtmlGenericContainerElement{
	/** Constructor($content, $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($data='', $type='', $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$OBJECT, null, null, $id, $class, $title, $style, $indentContent);
		if(!U::NA($data)){$this->_attributes['data'] = U::ES($data);}
		if(!U::NA($type)){$this->_attributes['type'] = U::ES($type);}
	}
	###########################################################################
	public function AddNode(HtmlParamElement $param){
		$this->_contents[] = $param;
		return $this;
	}
	public function AddParameter($name, $value){
		$this->_contents[] = new HtmlParamElement($name, $value);
		return $this;
	}
	###########################################################################
	public function Data($value=null){
		if($value===null){return $this->_attributes['data'];}
		else{$this->_attributes['data']=U::ES($value);}
	}
	public function Form($value=null){
		if($value===null){return $this->_attributes['form'];}
		else{$this->_attributes['form']=U::ES($value);}
	}
	public function Name($value=null){
		if($value===null){return $this->_attributes['name'];}
		else{$this->_attributes['name']=U::ES($value);}
	}
	public function Height($value=null){
		if($value===null){return $this->_attributes['height'];}
		else{$this->_attributes['height']=U::ES($value);}
	}
	public function Width($value=null){
		if($value===null){return $this->_attributes['width'];}
		else{$this->_attributes['width']=U::ES($value);}
	}
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type']=U::ES($value);}
	}
	public function UseMap($value=null){
		if($value===null){return $this->_attributes['usemap'];}
		else{$this->_attributes['usemap']=U::ES($value);}
	}
};
?>