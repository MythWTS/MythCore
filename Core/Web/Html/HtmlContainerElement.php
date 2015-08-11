<?php
class HtmlContainerElement extends HtmlElement{
	###########################################################################
	# Constructor
	###########################################################################
	public function __construct($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct($tag, $attributes, $contents, $id, $class, $title, $style, $indentContents, false);
	}
	###########################################################################
	# Property Accessors Overrides
	###########################################################################
	public function IsEmpty(){return false;}
	###########################################################################
	# Public Functions
	###########################################################################
	public function HasContents(){
		return is_array($this->_contents) && count($this->_contents) > 0;
	}
	###########################################################################
	# Methods to add content that is almost acceptable in all contexts (Chainable)
	###########################################################################
	public function AddScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', false, false, $id); return $this;}
	public function AddInlineScript($script, $id='', $type='text/javascript'){$this->_contents[] = new HtmlInlineScriptElement($script, $type, $id, true); return $this;}
	public function AddScriptDefered($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', true, false, $id); return $this;}
	public function AddScriptAsync($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', false, true, $id); return $this;}
	public function AddScriptDeferedAsync($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', true, true, $id); return $this;}

	public function AddScriptVBScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/vbscript', '', false, false, $id); return $this;}
	public function AddScriptTCLScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/tcl', '', false, false, $id); return $this;}
	public function AddScriptJScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/jscript', '', false, false, $id); return $this;}
	public function AddStyle($style, $id=''){$this->_contents[] = new HtmlStyleElement($style, $id); return $this;}
	###########################################################################
	# Methods to add content that is almost acceptable in all contexts (Returns the newly added content)
	###########################################################################
	public function RAddScript($src, $id=''){return $this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', false, false, $id);}
	public function RAddInlineScript($script, $id='', $type='text/javascript'){return $this->_contents[] = new HtmlInlineScriptElement($script, $type, $id, true);}
	public function RAddScriptDefered($src, $id=''){return $this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', true, false, $id);}
	public function RAddScriptAsync($src, $id=''){return $this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', false, true, $id);}
	public function RAddScriptDeferedAsync($src, $id=''){return $this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', true, true, $id);}

	public function RAddScriptVBScript($src, $id=''){return $this->_contents[] = new HtmlScriptElement($src, 'text/vbscript', '', false, false, $id);}
	public function RAddScriptTCLScript($src, $id=''){return $this->_contents[] = new HtmlScriptElement($src, 'text/tcl', '', false, false, $id);}
	public function RAddScriptJScript($src, $id=''){return $this->_contents[] = new HtmlScriptElement($src, 'text/jscript', '', false, false, $id);}
	public function RAddStyle($style, $id=''){return $this->_contents[] = new HtmlStyleElement($style, $id);}
	///TODO: See if it is appropriate to just remove these methods or not
	###########################################################################
	# Content Adding Methods - Protected Virtual FOR NOW
	###########################################################################
	protected function AddNode(HtmlNode $node){$this->_contents[] = $node; return $this;}
	protected function RAddNode(HtmlNode $node){return $this->_contents[] = $node;}
	protected function AddRawHtml($html, $useIndent){$this->_contents[] = new HtmlRawTextNode($html, $useIndent); return $this;}
	protected function RAddRawHtml($html, $useIndent){return $this->_contents[] = new HtmlRawTextNode($html, $useIndent);}
	
	protected function AddNodes(array $nodes){
		if(!U::NA($nodes)){
			foreach ($nodes as $node) {
				if(is_a($node, 'HtmlNode')){$this->_contents[] = $node;}
				else if(is_a($node, 'IObject')){$this->_contents[] = new HtmlRawTextNode($node->__toString());}
				else if(is_scalar($node)){$this->_contents[] = new HtmlRawTextNode($node);}
			}
		}
		return $this;
	}
};
?>