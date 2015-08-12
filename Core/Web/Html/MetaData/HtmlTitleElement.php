<?php
class HtmlTitleElement extends HtmlElement implements IDOMMetaData{
	/** Constructor($pageTitle, $id='') */
	public function __construct($pageTitle, $id=''){
		$content = new HtmlRawTextNode($pageTitle, true);
		parent::__construct(Html5Tags::$TITLE, null, $content, $id, '', '', '', false);
	}
	public function Title($value=null){
		if($value===null){return $this->_contents[0]->Html;}
		else{$this->_contents[0] = new HtmlRawTextNode($value);}
	}
};
?>