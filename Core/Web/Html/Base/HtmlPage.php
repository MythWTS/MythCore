<?php
class HtmlPage extends HtmlNode{
	############################################################################
	# Protected Fields
	############################################################################
	protected $_metaData, $_contents;
	protected $_doc, $_indentContents;
	protected $_headScripts, $_bottomScripts, $_stylesheets;
	############################################################################
	# Constructor
	############################################################################
	/** Constructor(HtmlPageMetaData $metaData=null, $contents=null) */
	public function __construct(HtmlPageMetaData $metaData=null, $contents=null){
		if(U::NA($metaData)){$this->_metaData = new HtmlPageMetaData();}
		else{$this->_metaData = $metaData;}
		$this->_contents = $contents?:array();
		$this->_doc = new HtmlDocument();
		$this->_headScripts = array(); $this->_bottomScripts = array();
		$this->_stylesheets = array();
		$this->_indentContents = true;
	}
	############################################################################
	# Base Implementation
	############################################################################
	public function OuterHtml($indent=0){
		$this->generateHtmlDocument();
		return $this->_doc->OuterHtml($indent);
	}
	############################################################################
	# Public Methods
	############################################################################
	public function Render(IWriter $writer=null, $indent=0){
		if(U::NA($writer)){echo $this->OuterHtml($indent);}
		else{$writer->Write($this->OuterHtml($indent));}
	}
	############################################################################
	# Protected Virtual Methods
	############################################################################
	protected function generateHtmlDocument(){
		$head = $this->_metaData->GenerateHeadElement();
		foreach($this->_headScripts as $id=>$script){
			if(is_a($script, 'HtmlScriptElement')||is_a($script, 'HtmlInlineScriptElement')){$head->AddNode($script);}
			else{$head->AddScript($script, is_string($id) && !U::NA($id)?$id:'');}
		}
		foreach ($this->_stylesheets as $id => $stylesheet) {
			if(is_a($stylesheet, 'HtmlLinkElement')){$head->AddNode($stylesheet);}
			else{$head->AddStylesheet($stylesheet, is_string($id) && !U::NA($id)?$id:'');}
		}
		$body = new HtmlBodyElement($this->_contents);
		foreach ($this->_bottomScripts as $id => $script) {
			if(is_a($script, 'HtmlScriptElement')||is_a($script, 'HtmlInlineScriptElement')){$body->AddNode($script);}
			else{$body->AddScript($script, is_string($id) && !U::NA($id)?$id:'');}
		}
		$this->_doc = new HtmlDocument($head, $body, $this->_metaData->DocType(), $this->_indentContents);
	}
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
	public function HeadScripts(array $value=null){
		if($value === null){return $this->_headScripts;}
		else{$this->_headScripts = $value;}
	}
	public function BottomScripts(array $value=null){
		if($value === null){return $this->_bottomScripts;}
		else{$this->_bottomScripts = $value;}
	}
	public function Stylesheets(array $value=null){
		if($value === null){return $this->_stylesheets;}
		else{$this->_stylesheets = $value;}
	}
	public function IndentContents($value=null){
		if($value === null){return $this->_indentContents;}
		else{$this->_indentContents = U::EB($value);}
	}
};
?>