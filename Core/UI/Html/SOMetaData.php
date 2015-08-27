<?php
namespace Core\UI\Html;
use Core\Object;
use Core\U;
/**
 * data structure to hold schema.org meta data.
 */
class SOMetaData extends Object implements IMetaDataProvider{
	protected $_name, $_description, $_image;
	protected $_type;
	/** Constructor(SOTypes $type=null, $name='', $description='', $imageUrl='') */
	public function __construct(SOTypes $type=null, $name='', $description='', $imageUrl=''){
		$this->_type = $type; if(U::NA($this->_type)){$this->_type = SOTypes::$Article;}
		$this->_name = U::ES($name); $this->_description = U::ES($description); $this->_image = U::ES($imageUrl);
	}
	public function Type(SOTypes $value=null){
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
	public function GenerateHtmlNodes(){
		$res = array();
		if(!U::NA($this->_name)){$res[] = Html::ItemPropMeta(SOItemProperties::$Name, $this->_name);}
		if(!U::NA($this->_description)){$res[] = Html::ItemPropMeta(SOItemProperties::$Description, $this->_description);}
		if(!U::NA($this->_imagei)){$res[] = Html::ItemPropMeta(SOItemProperties::$Image, $this->_image);}
		return $res;
	}
};
?>