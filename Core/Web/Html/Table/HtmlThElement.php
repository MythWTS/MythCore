<?php
class HtmlThElement extends HtmlContainerElement{
	/** Constructor($content, $id='', $class='', $title='', $style='', $indentContent=true) */
	public function __construct($content, $id='', $class='', $title='', $style='', $indentContent=true){
		parent::__construct(Html5Tags::$TH, null, $content, $id, $class, $title, $style, $indentContent);
	}

	public function ColSpan($value=null){
		if($value === null){return $this->_attributes['colspan'];}
		else{$this->_attributes['colspan'] = $value;}
	}
	public function RowSpan($value=null){
		if($value === null){return $this->_attributes['rowspan'];}
		else{$this->_attributes['rowspan'] = $value;}
	}
};
?>