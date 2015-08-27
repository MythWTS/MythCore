<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Tags;
use Core\UI\Html\EmptyElement;
use Core\UI\Html\KeyTypes;
/**
 * Represents a "keygen" html element in the documents object model
 * Constructor($name='', KeyTypes $keytype=null, array $attributes = null)
 */
class KeygenElement extends EmptyElement{
	/** Constructor($name='', KeyTypes $keytype=null, array $attributes = null) */
	public function __construct($name='', KeyTypes $keytype=null, array $attributes = null){
		parent::__construct(Tags::$KEYGEN, $attributes);
		if(!U::NA($name)){$this->_attributes['name'] = $name;}
		if(!U::NA($keytype)){$this->_attributes['keytype'] = $keytype;}
	}
	
	public function Name($value=null){
		if($value === null){return $this->_attributes['name'];}
		else{$this->_attributes['name'] = $value;}
	}
	public function KeyType(KeyTypes $value=null){
		if($value === null){return $this->_attributes['keytype'];}
		else{$this->_attributes['keytype'] = $value->__toString();}
	}
	public function Disabled($value=null){
		if($value === null){return $this->_attributes['disabled'];}
		else{
			if($value){$this->_attributes['disabled'] = 'disabled';}
			else if(isset($this->_attributes['disabled'])){unset($this->_attributes['disabled']);}
		}
	}
	public function Challenge($value=null){
		if($value === null){return $this->_attributes['challenge'];}
		else{
			if($value){$this->_attributes['challenge'] = 'challenge';}
			else if(isset($this->_attributes['challenge'])){unset($this->_attributes['challenge']);}
		}
	}
	public function AutoFocus($value=null){
		if($value === null){return $this->_attributes['autofocus'];}
		else{
			if($value){$this->_attributes['autofocus'] = 'autofocus';}
			else if(isset($this->_attributes['autofocus'])){unset($this->_attributes['autofocus']);}
		}
	}
};
?>