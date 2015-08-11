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
	# Content Adding Methods (Chainable-EmptyElements)
	###########################################################################
	public function AddNode(HtmlNode $node){$this->_contents[] = $node; return $this;}
	public function AddRawHtml($html, $useIndent){$this->_contents[] = new HtmlRawTextNode($html, $useIndent); return $this;}
	public function AddComment($comment, $indentContents=false){$this->_contents[] = new HtmlCommentNode($comment, $indentContents); return $this;}
	public function AddArea(HtmlAreaShapes $shape, $coords, $href='', $alt='', array $attributes = null, $id=''){$this->_contents[] = new HtmlAreaElement($shape, $coords, $href, $alt, $attributes, $id); return $this;}
	public function AddBase($href='', $target='', $attributes=null){$this->_contents[] = new HtmlBaseElement($href, $target, $attributes); return $this;}
	public function AddBr(array $attributes = null, $id='', $class='', $title='', $style=''){$this->_contents[] = new HtmlBrElement($attributes, $id, $class, $title, $style); return $this;}
	public function AddCol($span='', array $attributes = null, $id='', $class='', $title='', $style=''){$this->_contents[] = new HtmlColElement($span, $attributes, $id, $class, $title, $style); return $this;}
	public function AddHr(array $attributes = null, $id='', $class='', $title='', $style=''){$this->_contents[] = new HtmlHrElement($attributes, $id, $class, $title, $style); return $this;}
	public function AddImg($src='', $alt='', $width='', $height='', array $attributes = null, $id='', $class='', $title='', $style=''){$this->_contents[] = new HtmlImgElement($src, $alt, $width, $height, $attributes, $id, $class, $title, $style); return $this;}
	public function AddInput($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style=''){$this->_contents[] = new HtmlInputElement($type, $name, $attributes, $id, $class, $title, $style); return $this;}
	public function AddKeygen($name='', HtmlKeyTypes $keytype=null, array $attributes = null){$this->_contents[] = new HtmlKeygenElement($name, $keytype, $attributes); return $this;}
	public function AddParam($name, $value='', array $attributes = null){$this->_contents[] = new HtmlParamElement($name, $value, $attributes); return $this;}
	public function AddSource($src, $type='audio', array $attributes = null){$this->_contents[] = new HtmlSourceElement($src, $type, $attributes); return $this;}
	public function AddWbr(array $attributes = null, $id='', $class='', $title='', $style=''){$this->_contents[] = new HtmlWbrElement($attributes, $id, $class, $title, $style); return $this;}
	###########################################################################
	# Content Adding Methods (Returns the newly added content-EmptyElements)
	###########################################################################
	public function RAddNode(HtmlNode $node){return $this->_contents[] = $node;}
	public function RAddRawHtml($html, $useIndent){return $this->_contents[] = new HtmlRawTextNode($html, $useIndent);}
	public function RAddComment($comment, $indentContents=false){return $this->_contents[] = new HtmlCommentNode($comment, $indentContents);}
	public function RAddArea(HtmlAreaShapes $shape, $coords, $href='', $alt='', array $attributes = null, $id=''){return $this->_contents[] = new HtmlAreaElement($shape, $coords, $href, $alt, $attributes, $id);}
	public function RAddBase($href='', $target='', $attributes=null){return $this->_contents[] = new HtmlBaseElement($href, $target, $attributes);}
	public function RAddBr(array $attributes = null, $id='', $class='', $title='', $style=''){return $this->_contents[] = new HtmlBrElement($attributes, $id, $class, $title, $style);}
	public function RAddCol($span='', array $attributes = null, $id='', $class='', $title='', $style=''){return $this->_contents[] = new HtmlColElement($span, $attributes, $id, $class, $title, $style);}
	public function RAddHr(array $attributes = null, $id='', $class='', $title='', $style=''){return $this->_contents[] = new HtmlHrElement($attributes, $id, $class, $title, $style);}
	public function RAddImg($src='', $alt='', $width='', $height='', array $attributes = null, $id='', $class='', $title='', $style=''){return $this->_contents[] = new HtmlImgElement($src, $alt, $width, $height, $attributes, $id, $class, $title, $style);}
	public function RAddInput($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style=''){return $this->_contents[] = new HtmlInputElement($type, $name, $attributes, $id, $class, $title, $style);}
	public function RAddKeygen($name='', HtmlKeyTypes $keytype=null, array $attributes = null){return $this->_contents[] = new HtmlKeygenElement($name, $keytype, $attributes);}
	public function RAddParam($name, $value='', array $attributes = null){return $this->_contents[] = new HtmlParamElement($name, $value, $attributes);}
	public function RAddSource($src, $type='audio', array $attributes = null){return $this->_contents[] = new HtmlSourceElement($src, $type, $attributes);}
	public function RAddWbr(array $attributes = null, $id='', $class='', $title='', $style=''){return $this->_contents[] = new HtmlWbrElement($attributes, $id, $class, $title, $style);}
};
?>