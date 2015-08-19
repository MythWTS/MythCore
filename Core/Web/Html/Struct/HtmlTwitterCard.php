<?php
class HtmlTwitterCard extends Object implements IMetaDataProvider{
	protected $_type, $_site, $_description;
	public function __construct(HtmlTwitterCardTypes $type=null, $site='', $description=''){
		$this->_type = $type;
		$this->_site = U::ES($site);
		$this->_description = U::ES($description);
	}
	
	public function Type(HtmlTwitterCardTypes $value=null){
		if($value === null){return $this->_type;}
		else{$this->_type = $value;}
	}
	public function Site($value=null){
		if($value === null){return $this->_site;}
		else{$this->_site = U::ES($value);}
	}
	public function Description($value=null){
		if($value === null){return $this->_description;}
		else{$this->_description = U::ES($value);}
	}
	###########################################################################
	# Html generation Methods
	###########################################################################
	public function GenerateHtmlNodes(){
		$res = array();
		if(!U::NA($this->_type)){$res[] = Html::Meta('twitter:card', $this->_type);}
		if(!U::NA($this->_site)){$res[] = Html::Meta('twitter:site', $this->_site);}
		if(!U::NA($this->_description)){$res[] = Html::Meta('twitter:description', $this->_description);}
		return $res;
	}
};
?>