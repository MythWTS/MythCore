<?php
namespace Core\UI\Html;
use Core\U;
use Core\UI\Html\Nodes\HeadElement;
use Core\UI\Html\Nodes\BodyElement;
/**
 * Base class for Html and (most likely) UI pages.
 * Despite both being treated as and are children of HtmlNode, pages and documents are different at least concept-wise
 * While documents are complex data structures, they are still designed o be DOM nodes, the topmost nodes, but nodes
 * nonetheless. Pages are designed with "active components" in mind. It abstracts the html behind the scenes even further
 * So instead of the user having to add meta elements with the meta data and handle all the structure behind,
 * Page classes only ask for the meta data themeselves and they handle choosing the right element to represent each 
 * piece of meta data. Same applies with stylesheets and scripts. You supply a page with the urls of stylesheets
 * and scripts and they add the corresponding link and script elements.
 * Constructor(PageMetaData $metaData=null, $contents=null)
 * @see HtmlDocument
 */
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
	/** Constructor(PageMetaData $metaData=null, $contents=null) */
	public function __construct(PageMetaData $metaData=null, $contents=null){
		if(U::NA($metaData)){$this->_metaData = new PageMetaData();}
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
			if(
				is_a($script, 'Core\UI\Html\Nodes\ScriptElement')||
				is_a($script, 'Core\UI\Html\Nodes\InlineScriptElement')
			){$head->AddNode($script);}
			else{$head->AddScript($script, is_string($id) && !U::NA($id)?$id:'');}
		}
		foreach ($this->_stylesheets as $id => $stylesheet) {
			if(is_a($stylesheet, 'Core\UI\Html\Nodes\LinkElement')){$head->AddNode($stylesheet);}
			else{$head->AddStylesheet($stylesheet, is_string($id) && !U::NA($id)?$id:'');}
		}
		$body = new BodyElement($this->_contents);
		foreach ($this->_bottomScripts as $id => $script) {
			if(
				is_a($script, 'Core\UI\Html\Nodes\ScriptElement')||
				is_a($script, 'Core\UI\Html\Nodes\InlineScriptElement')
			){$body->AddNode($script);}
			else{$body->AddScript($script, is_string($id) && !U::NA($id)?$id:'');}
		}
		$this->_doc = new HtmlDocument($head, $body, $this->_metaData->DocType(), $this->_indentContents);
	}
	############################################################################
	# Properties Accessors
	############################################################################
	public function Data(PageMetaData $value=null){
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