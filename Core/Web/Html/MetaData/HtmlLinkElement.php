<?php
class HtmlLinkElement extends HtmlEmptyElement implements IDOMMetaData{
	public function __construct($href='', $rel='stylesheet', $type='text/css', array $attributes = null, $id='', $class='', $title='', $style=''){
		parent::__construct(Html5Tags::$LINK, $attributes, $id, $class, $title, $style);
		if(!U::NA($rel)){$this->_attributes['rel'] = $rel;}
		if(!U::NA($href)){$this->_attributes['href'] = $href;}
		if(!U::NA($type)){$this->_attributes['type'] = $type;}
	}
	public function Rel($value = null){
		if($value === null){return $this->_attributes['rel'];}
		else{$this->_attributes['rel'] = U::ES($value);}
	}
	public function Href($value = null){
		if($value === null){return $this->_attributes['href'];}
		else{$this->_attributes['href'] = U::ES($value);}
	}
	public function Type($value = null){
		if($value === null){return $this->_attributes['type'];}
		else{$this->_attributes['type'] = U::ES($value);}
	}
	public function Rev($value = null){
		if($value === null){return $this->_attributes['rev'];}
		else{$this->_attributes['rev'] = U::ES($value);}
	}
	public function Target($value = null){
		if($value === null){return $this->_attributes['target'];}
		else{$this->_attributes['target'] = U::ES($value);}
	}
	public function HrefLang($value = null){
		if($value === null){return $this->_attributes['hreflang'];}
		else{$this->_attributes['hreflang'] = U::ES($value);}
	}
	public function Media($value = null){
		if($value === null){return $this->_attributes['media'];}
		else{$this->_attributes['media'] = U::ES($value);}
	}
	
	public static function NewStylesheet($href, $id='', $type='text/css'){return new HtmlLinkElement($href, 'stylesheet', $type, null, $id);}
	public static function NewShortcutIcon($href, $id=''){return new HtmlLinkElement($href, 'shortcut icon', '', null, $id);}
	public static function NewAppleTouchIcon($href, $id=''){return new HtmlLinkElement($href, 'apple-touch-icon', '', null, $id);}
	
	public static function NewAlternate($href, $type='text/html'){return new HtmlLinkElement($href, 'index', $type);}
	public static function NewIndex($href, $type='text/html'){return new HtmlLinkElement($href, 'index', $type);}
	public static function NewUp($href, $type='text/html'){return new HtmlLinkElement($href, 'up', $type);}
	public static function NewNext($href, $type='text/html'){return new HtmlLinkElement($href, 'next', $type);}
	public static function NewPrev($href, $type='text/html'){return new HtmlLinkElement($href, 'prev', $type);}
	public static function NewStart($href, $type='text/html'){return new HtmlLinkElement($href, 'start', $type);}
	public static function NewChapter($href, $type='text/html'){return new HtmlLinkElement($href, 'chapter', $type);}
	public static function NewSection($href, $type='text/html'){return new HtmlLinkElement($href, 'section', $type);}
	public static function NewSubsection($href, $type='text/html'){return new HtmlLinkElement($href, 'subsection', $type);}
	public static function NewSearch($href, $type='text/html'){return new HtmlLinkElement($href, 'search', $type);}
	public static function NewContents($href, $type='text/html'){return new HtmlLinkElement($href, 'contents', $type);}
	public static function NewGlossary($href, $type='text/html'){return new HtmlLinkElement($href, 'glossary', $type);}
	public static function NewHelp($href, $type='text/html'){return new HtmlLinkElement($href, 'help', $type);}
	public static function NewBookmark($href, $type='text/html'){return new HtmlLinkElement($href, 'bookmark', $type);}
	public static function NewCopyright($href, $type='text/html'){return new HtmlLinkElement($href, 'copyright', $type);}
};
?>