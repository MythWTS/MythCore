<?php
class HtmlStyleElement extends HtmlContainerElement{
	public function __construct($styleText, $id=''){
		$content = new HtmlRawTextNode($styleText, true);
		parent::__construct(Html5Tags::$STYLE, null, $content, $id, '', '', '', true);
	}
	public function Style($value=null){
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