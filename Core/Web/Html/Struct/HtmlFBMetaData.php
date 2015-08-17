<?php
/**
 * class HtmlFBMetaData
 * A data structure to hold Facebook meta-data about the page that will use instances of this class or one of its children.
 * This is the base class of all types of facebook meta data classes. This class is used in social media enabled pages to
 * describe the page to facebook share and like actions. For more specific types of pages, use the corresponding child class
 * instead as this class is generic. For example, if the page is a video, use the HtmlFBVideoData class instead.
 */
class HtmlFBMetaData extends Object{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_type, $_title, $_image, $_url, $_description, $_determiner, $_locale, $_sitename;
	protected $_admins, $_appId;
	/**
	 * Constructor(
	 * 			$admins='', $appId='',
	 * 			HtmlFBObjectTypes $type=null, $title='', $image='', $sitename='', $url='', $description='',
	 * 			$determiner='', $locale='')
	*/
	public function __construct(
		$admins='', $appId='',
		HtmlFBObjectTypes $type=null, $title='', $image='', $sitename='', $url='', $description='',
		$determiner='', $locale=''){
		if(!U::NA($admins)){$this->_admins = U::ES($admins);}
		if(!U::NA($appId)){$this->_appId = U::ES($appId);}
		if(!U::NA($description)){$this->_description = U::ES($description);}
		if(!U::NA($determiner)){$this->_determiner = U::ES($determiner);}
		if(!U::NA($image)){$this->_image = U::ES($image);}
		if(!U::NA($locale)){$this->_locale = U::ES($locale);}
		if(!U::NA($sitename)){$this->_sitename = U::ES($sitename);}
		if(!U::NA($title)){$this->_title = U::ES($title);}
		if(!U::NA($type)){$this->_type = U::ES($type);}
		if(!U::NA($url)){$this->_url = U::ES($url);}
	}
	###########################################################################
	# Properties Accessors
	###########################################################################
	public function Admins($value=null){
		if($value === null){return $this->_admins;}
		else{$this->_admins = U::ES($value);}
	}
	public function AppId($value=null){
		if($value === null){return $this->_appId;}
		else{$this->_appId = U::ES($value);}
	}
	public function Type(HtmlFBObjectTypes $value=null){
		if($value === null){return $this->_type;}
		else{$this->_type = $value;}
	}
	public function Title($value=null){
		if($value === null){return $this->_title;}
		else{$this->_title = U::ES($value);}
	}
	public function Image($value=null){
		if($value === null){return $this->_image;}
		else{$this->_image = U::ES($value);}
	}
	public function Url($value=null){
		if($value === null){return $this->_url;}
		else{$this->_url = U::ES($value);}
	}
	public function Description($value=null){
		if($value === null){return $this->_description;}
		else{$this->_description = U::ES($value);}
	}
	public function Determiner($value=null){
		if($value === null){return $this->_determiner;}
		else{$this->_determiner = U::ES($value);}
	}
	public function Locale($value=null){
		if($value === null){return $this->_locale;}
		else{$this->_locale = U::ES($value);}
	}
	public function SiteName($value=null){
		if($value === null){return $this->_sitename;}
		else{$this->_sitename = U::ES($value);}
	}
	###########################################################################
	# Html generation Methods
	###########################################################################
	public function GenerateElements(){
		$res = array();
		if(!U::NA($this->_admins)){$res[] = Html::PropertyMeta('fb:admins', $this->_admins);}
		if(!U::NA($this->_appId)){$res[] = Html::PropertyMeta('fb:app_id', $this->_appId);}

		if(!U::NA($this->_type)){$res[] = Html::PropertyMeta('og:type', $this->_type);}
		if(!U::NA($this->_url)){$res[] = Html::PropertyMeta('og:url', $this->_url);}
		if(!U::NA($this->_title)){$res[] = Html::PropertyMeta('og:title', $this->_title);}
		if(!U::NA($this->_image)){$res[] = Html::PropertyMeta('og:image', $this->_image);}
		if(!U::NA($this->_description)){$res[] = Html::PropertyMeta('og:description', $this->_description);}
		if(!U::NA($this->_sitename)){$res[] = Html::PropertyMeta('og:site_name', $this->_sitename);}
		if(!U::NA($this->_determiner)){$res[] = Html::PropertyMeta('og:determiner', $this->_determiner);}
		if(!U::NA($this->_locale)){$res[] = Html::PropertyMeta('og:locale', $this->_locale);}
		return $res;
	}
};
?>