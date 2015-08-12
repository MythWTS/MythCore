<?php
class HtmlNoScriptElement extends HtmlContainerElement{
	public function __construct($note, $id=''){
		$content = new HtmlRawTextNode($note, true);
		parent::__construct(Html5Tags::$NOSCRIPT, null, $content, $id, '', '', '', false);
	}
	
	public function Note($value=null){
		if($value===null){return $this->_contents[0]->Html;}
		else{$this->_contents[0] = new HtmlRawTextNode($value);}
	}
	//Override to disable assigning values to ChildNodes directly
	public function ChildNodes(array $value){
		if($value === null){return $this->_contents;}
		else{}
	}
};
?>