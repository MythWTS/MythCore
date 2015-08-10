<?php
class HtmlElement extends HtmlNode{
	###########################################################################
	# Public Fields/Properties
	###########################################################################
	public $Id, $Class, $Title, $Style;
	###########################################################################
	# Private Fields
	###########################################################################
	protected $_tag, $_attributes, $_contents, $_isEmpty, $_indentContents;
	###########################################################################
	# Property Accessors
	###########################################################################
	public function Tag(){return $this->_tag;}
	public function IsEmpty(){return $this->_isEmpty;}
	public function Attributes(array $value=null){
		if($value===null){return $this->_attributes;}
		else{$this->_attributes = $this->extractValidAttributes($value);}
	}
	public function ChildNodes(array $value){
		if($value === null){return $this->_contents;}
		else{$this->_contents = $this->extractValidContents($value);}
	}
	public function IndentContent($value=null){
		if($value === null){return $this->_indentContents;}
		else{$this->_indentContents = $value?true:false;}
	}
	
	###########################################################################
	# Constructor
	###########################################################################
	public function __construct($tag, $id='', $class='', $title='', $style='', array $attributes = null, $isEmptyElement=false, $contents='', $indentContents=true){
		$this->_tag = $tag; $this->Id = $id; $this->Class = $class; $this->Title = $title; $this->Style = $style; $this->_isEmpty = $isEmptyElement;
		$this->_attributes = U::NA($attributes)?array():$this->extractValidAttributes($attributes);
		$this->_contents = $isEmptyElement?null:(U::NA($contents)?array():$this->extractValidContents($contents));
		$this->_indentContents = $indentContents;
	}
	###########################################################################
	# Public Methods
	###########################################################################
	public function HasAttribute($name){
		$n = strtolower($name);
		switch ($n) {
			case 'id': return U::NA($this->Id); break;
			case 'class': return U::NA($this->Class); break;
			case 'style': return U::NA($this->Style); break;
			case 'title': return U::NA($this->Title); break;
			default: return array_key_exists($n, $this->_attributes); break;
		}
	}
	public function GetAttribute($name){
		$n = strtolower($name);
		switch ($n) {
			case 'id': return $this->Id; break;
			case 'class': return $this->Class; break;
			case 'style': return $this->Style; break;
			case 'title': return $this->Title; break;
			default: return array_key_exists($n, $this->_attributes)?$this->_attributes[$n]:null; break;
		}
	}
	public function AddAttribute($name, $value){
		if((is_string($name) && !U::NAW($name))||(is_a($name, "IObject") && !U::NAW($name->__toString()))){
			$this->_attributes[strtolower($name)] = is_scalar($value)?$value:(is_a($value, "IObject")?$value->__toString():"");
		}
	}
	public function RemoveAttribute($name){
		$n = strtolower($name);
		switch ($n) {
			case 'id': $this->Id = ''; break;
			case 'class': $this->Class = ''; break;
			case 'style': $this->Style = ''; break;
			case 'title': $this->Title = ''; break;
			default: if(array_key_exists($n, $this->_attributes)){unset($this->_attributes[$n]);} break;
		}
	}
	###########################################################################
	# Protected Virtual Utility Methods
	###########################################################################
	protected function openTagHtml($indent=0){
		if($this->_isEmpty){return U::TAB($indent) . "<{$this->_tag} {$this->attributesString()} />";}
		else {return U::TAB($indent) . "<{$this->_tag} {$this->attributesString()}>" . ($this->_indentContents?U::$NL:"");}
	}
	protected function contentsHtml($indent=1){
		if($this->_isEmpty){return "";}
		else{
			$res = "";
			foreach ($this->_contents as $value) {
				$res .= $value->OuterHtml($this->_indentContents?$indent:0) . ($this->_indentContents?U::$NL:"");
			}
			return $res;
		}
	}
	protected function closeTagHtml($indent=0){if($this->_isEmpty){return "";}else{return U::TAB($indent) . "</{$this->_tag}>";}}
	protected function attributesString(){
		$res = '';
		foreach ($this->_attributes as $key => $value) {
			$res .= "{$key}={U::$Q}{$value}{U::$Q} ";
		}
		if(!U::NA($this->Id)){$res .= " id={U::$Q}{$this->Id}{U::$Q}";}
		if(!U::NA($this->Class)){$res .= " id={U::$Q}{$this->Class}{U::$Q}";}
		if(!U::NA($this->Title)){$res .= " id={U::$Q}{$this->Title}{U::$Q}";}
		if(!U::NA($this->Style)){$res .= " id={U::$Q}{$this->Style}{U::$Q}";}
		return trim($res);
	}
	###########################################################################
	# Base Overrides
	###########################################################################
	public function OuterHtml($indent=0){
		return $this->openTagHtml($indent) . $this->contentsHtml($indent+1) . $this->closeTagHtml();
	}
	###########################################################################
	# Private Utility Methods
	###########################################################################
	private function extractValidAttributes(array $attributes){
		$res = array();
		foreach ($attributes as $name => $value) {
			if((is_string($name) && !U::NAW($name))||(is_a($name, "IObject") && !U::NAW($name->__toString()))){
				$res[strtolower($name)] = is_scalar($value)?$value:(is_a($value, "IObject")?$value->__toString():"");
			}
		}
		return $res;
	}
	private function extractValidContents(array $contents){
		$res = array();
		foreach ($contents as $value) {
			if(is_a($value, "HtmlNode")){$res[] = $value;}
			else if(is_a($value, "IObject")){$res[] = new HtmlRawTextNode($value->__toString());}
			else if(is_scalar($value)){$res[] = new HtmlRawTextNode($value);}
		}
		return $res;
	}
};
?>