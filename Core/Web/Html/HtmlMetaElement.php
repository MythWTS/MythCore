<?php
class HtmlMetaElement extends HtmlEmptyElement{
	public function __construct($name, $content='', $id=''){
		parent::__construct(Html5Tags::$META);
		$this->Id = $id;
		if(!U::NA($name)){$this->_attributes['name'] = $name;}
		if(!U::NA($content)){$this->_attributes['content'] = $content;}
	}
	
	public function Name($value=null){
		if($value === null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = $value;}
	}
	public function Content($value=null){
		if($value === null){return $this->_attributes['content'];}
		else{$this->_attributes['content'] = $value;}
	}
	public function HttpEquiv($value=null){
		if($value === null){return $this->_attributes['http-equiv'];}
		else{$this->_attributes['http-equiv'] = $value;}
	}
	public function Charset($value=null){
		if($value === null){return $this->_attributes['charset'];}
		else{$this->_attributes['charset'] = $value;}
	}
	//Factory methods
	public static function NewCharset($charset='UTF-8'){$res = new HtmlMetaElement('', '', ''); $res->Charset($charset); return $res;}
	public static function NewHttpEquiv($httpEquiv, $value, $id=''){$res = new HtmlMetaElement('', $value, $id); $res->HttpEquiv($httpEquiv); return $res;}
	public static function NewContentType($contentType, $id=''){$res = new HtmlMetaElement('', $contentType, $id); $res->HttpEquiv('content-type'); return $res;}
	public static function NewDefaultStyle($defaultStyle, $id=''){$res = new HtmlMetaElement('', $defaultStyle, $id); $res->HttpEquiv('default-style'); return $res;}
	public static function NewRefresh($refresh, $id=''){$res = new HtmlMetaElement('', $refresh, $id);$res->HttpEquiv('refresh');return $res;}
	public static function NewApplicationName($appName, $id=''){return new HtmlMetaElement('application-name', $appName, $id);}
	public static function NewAuthor($author, $id=''){return new HtmlMetaElement('author', $author, $id);}
	public static function NewDescription($desc, $id=''){return new HtmlMetaElement('description', $desc, $id);}
	public static function NewGenerator($generator, $id=''){return new HtmlMetaElement('generator', $generator, $id);}
	public static function NewKeywords($keywords, $id=''){return new HtmlMetaElement('keywords', $keywords, $id);}
	public static function NewViewport($viewport='width=device-width; initial-scale=1.0', $id=''){return new HtmlMetaElement('viewport', $viewport, $id);}
	public static function NewRobots($robots, $id=''){return new HtmlMetaElement('robots', $robots, $id);}
	public static function NewGoogleBot($googleBot, $id=''){return new HtmlMetaElement('googlebot', $googleBot, $id);}
	public static function NewBingBot($bingbot, $id=''){return new HtmlMetaElement('bingbot', $bingbot, $id);}
	public static function NewSlurp($slurp, $id=''){return new HtmlMetaElement('Slurp', $slurp, $id);}
	public static function NewXUACompatible(){$res = new HtmlMetaElement('', 'IE=edge,chrome=1'); $res->HttpEquiv('X-UA-Compatible'); return $res;}
};
?>