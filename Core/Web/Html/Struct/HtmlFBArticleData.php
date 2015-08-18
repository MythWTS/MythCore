<?php
class HtmlFBArticleData extends HtmlFBMetaData{
	###########################################################################
	# Protected Fields
	###########################################################################
	protected $_authors, $_publisher, $_section, $_tags;
	protected $_expirationTime, $_modifiedTime, $_publishedTime;
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor(
	 * 			$admins='', $appId='', $title='', $image='', $description='', $url='', $sitename='',
	 * 			$authors='', $publisher='', $parentSection='', $tags='', $publishTime='', $modifiedTime='', $expiryTime='')
	*/
	public function __construct(
		$admins='', $appId='', $title='', $image='', $description='', $url='', $sitename='',
		$authors='', $publisher='', $parentSection='', $tags='', $publishTime='', $modifiedTime='', $expiryTime=''
	){
		parent::__construct($admins, $appId, HtmlFBObjectTypes::$Article, $title, $image, $sitename, $url, $description);
		$this->_authors = $this->extractArray($authors); $this->_tags = $this->extractArray($tags);
		if(!U::NA($publisher)){$this->_publisher = U::ES($publisher);}
		if(!U::NA($parentSection)){$this->_section = U::ES($parentSection);}
		if(!U::NA($expiryTime)){$this->_expirationTime = U::ES($expiryTime);}
		if(!U::NA($modifiedTime)){$this->_modifiedTime = U::ES($modifiedTime);}
		if(!U::NA($publishTime)){$this->_publishedTime = U::ES($publishTime);}
	}
	###########################################################################
	# Properties Accessors
	###########################################################################
	public function Authors(array $value=null){
		if($value === null){return $this->_authors;}
		else{$this->_authors = $this->extractArray($value);}
	}
	public function Tags(array $value=null){
		if($value === null){return $this->_tags;}
		else{$this->_tags = $this->extractArray($value);}
	}
	public function Publisher($value=null){
		if($value === null){return $this->_publisher;}
		else{$this->_publisher = U::ES($value);}
	}
	public function Section($value=null){
		if($value === null){return $this->_section;}
		else{$this->_section = U::ES($value);}
	}
	public function ExpiryTime($value=null){
		if($value === null){return $this->_expirationTime;}
		else{$this->_expirationTime = U::ES($value);}
	}
	public function PublishedTime($value=null){
		if($value === null){return $this->_publishedTime;}
		else{$this->_publishedTime = U::ES($value);}
	}
	public function ModifiedTime($value=null){
		if($value === null){return $this->_modifiedTime;}
		else{$this->_modifiedTime = U::ES($value);}
	}
	###########################################################################
	# Html generation Methods (Base override)
	###########################################################################
	public function GenerateHtmlNodes(){
		$res = parent::GenerateHtmlNodes();
		foreach($this->_authors as $author){$res[] = Html::PropertyMeta('og:article:author', $author);}
		foreach($this->_tags as $tag){$res[] = Html::PropertyMeta('og:article:tag', $tag);}
		if(!U::NA($this->_publisher)){$res[] = Html::PropertyMeta('og:article:publisher', $this->_publisher);}
		if(!U::NA($this->_section)){$res[] = Html::PropertyMeta('og:article:section', $this->_section);}
		if(!U::NA($this->_expirationTime)){$res[] = Html::PropertyMeta('og:article:expiration_time', $this->_expirationTime);}
		if(!U::NA($this->_modifiedTime)){$res[] = Html::PropertyMeta('og:article:modified_time', $this->_modifiedTime);}
		if(!U::NA($this->_publishedTime)){$res[] = Html::PropertyMeta('og:article:published_time', $this->_publishedTime);}
		return $res;
	}
};
?>