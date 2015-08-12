<?php
class HtmlInlineScriptElement extends HtmlElement implements IDOMMetaData{
	/** Constructor($script, $type='text/javascript', $id='', $indentScript=true) */
	public function __construct($script, $type='text/javascript', $id='', $indentScript=true){
		$s = new HtmlRawTextNode($script, $indentScript);
		parent::__construct(Html5Tags::$SCRIPT, null, $s, $id, '', '', '', false);
		if(!U::NA($type)){$this->_attributes['type'] = U::ES($type);}
	}
	
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type']=U::ES($value);}
	}
	
	public function Script($value=null){
		if($value===null){return $this->_contents[0]->Html;}
		else{$this->_contents[0] = new HtmlRawTextNode($value);}
	}
};
?>