<?php
class HtmlPage extends HtmlNode{
	############################################################################
	# Protected Fields
	############################################################################
	protected $_metaData, $_contents;
	protected $_html, $_head, $_body;
	############################################################################
	# Constructor
	############################################################################
	public function __construct(HtmlPageMetaData $metaData=null, $contents=null){
		if(U::NA($metaData)){$this->_metaData = new HtmlPageMetaData();}
		else{$this->_metaData = $metaData;}
		$this->_contents = $contents;
	}
	############################################################################
	# Base Implementation
	############################################################################
	############################################################################
	# Properties Accessors
	############################################################################
	public function Data(HtmlPageMetaData $value=null){
		if($value===null){return $this->_metaData;}
		else{$this->_metaData = $value;}
	}
	public function Contents($value=null){
		if($value===null){return $this->_contents;}
		else{$this->_contents = $value;}
	}
};
?>