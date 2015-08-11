<?php
class HtmlInlineScriptElement extends HtmlContainerElement{
	public function __construct($script, $type='text/javascript', $id='', $indentScript=true){
		$s = new HtmlRawTextNode($script, $indentScript);
		parent::__construct(Html5Tags::$SCRIPT, null, $s, $id, '', '', '', false);
		if(!U::NA($type)){$this->_attributes['type'] = $type;}
	}
	
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type']=$value;}
	}
	
	public function Script($value=null){
		if($value===null){return $this->_contents[0];}
		else{$this->_contents[0] = $value;}
	}
	//Override to disable assigning values to ChildNodes directly
	public function ChildNodes(array $value){
		if($value === null){return $this->_contents;}
		else{}
	}
};
?>