<?php
class HtmlGenericContainerElement extends HtmlElement{
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true)
	 */
	public function __construct($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct($tag, $attributes, $contents, $id, $class, $title, $style, $indentContents, false);
	}
	###########################################################################
	# Public Functions
	###########################################################################
	/** Returns whether the element has child nodes or not */
	public function HasContents(){return is_array($this->_contents) && count($this->_contents) > 0;}
	# Generic Content Addition Methods
	#####################################
	///TODO: Add RAdd methods
	public function AddComment($commentText, $indentContents=false){$this->_contents[] = new HtmlCommentNode($commentText, $indentContents); return $this;}
	public function AddRawText($text){$this->_contents[] = new HtmlRawTextNode(U::ENC($text), true); return $this;}
	public function AddUnindentedText($text){$this->_contents[] = new HtmlRawTextNode(U::ENC($text), false); return $this;}

	public function AddScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', false, false, $id); return $this;}
	public function AddInlineScript($script, $id='', $type='text/javascript'){$this->_contents[] = new HtmlInlineScriptElement($script, $type, $id, true); return $this;}
	public function AddScriptDefered($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', true, false, $id); return $this;}
	public function AddScriptAsync($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', false, true, $id); return $this;}
	public function AddScriptDeferedAsync($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/javascript', '', true, true, $id); return $this;}

	public function AddScriptVBScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/vbscript', '', false, false, $id); return $this;}
	public function AddScriptTCLScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/tcl', '', false, false, $id); return $this;}
	public function AddScriptJScript($src, $id=''){$this->_contents[] = new HtmlScriptElement($src, 'text/jscript', '', false, false, $id); return $this;}

	public function AddStyle($style, $id=''){$this->_contents[] = new HtmlStyleElement($style, $id); return $this;}
};
?>