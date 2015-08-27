<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
use Core\UI\Html\IDOMMetaData;
use Core\UI\Html\SOItemProperties;
/**
 * Represents a "meta" html element in the documents object model
 * Constructor($name='', $content='', $id='')
 */
class MetaElement extends EmptyElement implements IDOMMetaData {
	/** Constructor($name='', $content='', $id='') */
	public function __construct($name = '', $content = '', $id = '') {
		parent::__construct(Tags::$META);
		if (!U::NA($id)) {$this -> _attributes['id'] = $id;}
		if (!U::NA($name)) {$this -> _attributes['name'] = $name;}
		if (!U::NA($content)) {$this -> _attributes['content'] = $content;}
	}
	public function Name($value = null) {
		if ($value === null) {return $this -> _attributes['name'];}
		else {$this -> _attributes['name'] = U::ES($value);}
	}
	public function Property($value = null) {
		if ($value === null) {return $this -> _attributes['property'];}
		else {$this -> _attributes['property'] = U::ES($value);}
	}
	public function Content($value = null) {
		if ($value === null) {return $this -> _attributes['content'];}
		else {$this -> _attributes['content'] = U::ES($value);}
	}
	public function HttpEquiv($value = null) {
		if ($value === null) {return $this -> _attributes['http-equiv'];}
		else {$this -> _attributes['http-equiv'] = U::ES($value);}
	}
	public function Charset($value = null) {
		if ($value === null) {return $this -> _attributes['charset'];}
		else {$this -> _attributes['charset'] = U::ES($value);}
	}
	public function ItemProp(SOItemProperties $value = null) {
		if ($value === null) {return $this -> _attributes['itemprop'];}
		else {$this -> _attributes['itemprop'] = $value -> __toString();}
	}
	###########################################################################
	# Factory Methods
	###########################################################################
	public static function NewCharset($charset = 'UTF-8') {
		$res = new MetaElement('', '', '');
		$res -> Charset($charset);
		return $res;
	}
	public static function NewHttpEquiv($httpEquiv, $value, $id = '') {
		$res = new MetaElement('', $value, $id);
		$res -> HttpEquiv($httpEquiv);
		return $res;
	}
	public static function NewProperty($property, $content) {
		$res = new MetaElement('', '', '');
		$res -> Property($property);
		$res -> Content($content);
		return $res;
	}
	public static function NewItemProp(SOItemProperties $itemProp, $content){
		$res = new MetaElement();
		$res->ItemProp($itemProp);
		$res->Content($content);
		return $res;
	}
	public static function NewContentType($contentType, $id = '') {
		$res = new MetaElement('', $contentType, $id);
		$res -> HttpEquiv('content-type');
		return $res;
	}
	public static function NewDefaultStyle($defaultStyle, $id = '') {
		$res = new MetaElement('', $defaultStyle, $id);
		$res -> HttpEquiv('default-style');
		return $res;
	}
	public static function NewRefresh($refresh, $id = '') {
		$res = new MetaElement('', $refresh, $id);
		$res -> HttpEquiv('refresh');
		return $res;
	}
	public static function NewApplicationName($appName, $id = '') {
		return new MetaElement('application-name', $appName, $id);
	}
	public static function NewAuthor($author, $id = '') {
		return new MetaElement('author', $author, $id);
	}
	public static function NewDescription($desc, $id = '') {
		return new MetaElement('description', $desc, $id);
	}
	public static function NewGenerator($generator, $id = '') {
		return new MetaElement('generator', $generator, $id);
	}
	public static function NewKeywords($keywords, $id = '') {
		return new MetaElement('keywords', $keywords, $id);
	}
	public static function NewViewport($viewport = 'width=device-width; initial-scale=1.0', $id = '') {
		return new MetaElement('viewport', $viewport, $id);
	}
	public static function NewRobots($robots, $id = '') {
		return new MetaElement('robots', $robots, $id);
	}
	public static function NewGoogleBot($googleBot, $id = '') {
		return new MetaElement('googlebot', $googleBot, $id);
	}
	public static function NewBingBot($bingbot, $id = '') {
		return new MetaElement('bingbot', $bingbot, $id);
	}
	public static function NewSlurp($slurp, $id = '') {
		return new MetaElement('Slurp', $slurp, $id);
	}
	public static function NewXUACompatible() {
		$res = new MetaElement();
		$res -> HttpEquiv('X-UA-Compatible');
		$res->Content('IE=edge,chrome=1');
		return $res;
	}
};
?>