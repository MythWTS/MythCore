<?php
class HtmlSOMetaData extends Object{
	protected $_name, $_description, $_image;
	protected $_type;
	/** Constructor(HtmlSOTypes $type=null, $name='', $description='', $imageUrl='') */
	public function __construct(HtmlSOTypes $type=null, $name='', $description='', $imageUrl=''){
		$this->_type = $type; if(U::NA($this->_type)){$this->_type = HtmlSOTypes::$Article;}
		$this->_name = U::ES($name); $this->_description = U::ES($description); $this->_image = U::ES($imageUrl);
	}
	public function Type(HtmlSOTypes $value=null){
		if($value === null){return $this->_type;}
		else{$this->_type = $value;}
	}
	public function Name($value=null){
		if($value === null){return $this->_name;}
		else{$this->_name = U::ES($value);}
	}
	public function Description($value=null){
		if($value === null){return $this->_description;}
		else{$this->_description = U::ES($value);}
	}
	public function ImageUrl($value=null){
		if($value === null){return $this->_image;}
		else{$this->_image = U::ES($value);}
	}
	###########################################################################
	# Html generation Methods
	###########################################################################
	public function GenerateElements(){
		$res = array();
		if(!U::NA($this->_name)){$res[] = Html::ItemPropMeta(HtmlSOItemProperties::$Name, $this->_name);}
		if(!U::NA($this->_description)){$res[] = Html::ItemPropMeta(HtmlSOItemProperties::$Description, $this->_description);}
		if(!U::NA($this->_imagei)){$res[] = Html::ItemPropMeta(HtmlSOItemProperties::$Image, $this->_image);}
		return $res;
	}
};
?>