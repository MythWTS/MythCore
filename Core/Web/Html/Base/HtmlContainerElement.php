<?php
class HtmlContainerElement extends HtmlGenericContainerElement{
	/** Constructor($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true) */
	protected function __construct($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct($tag, $attributes, $contents, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Methods to add generic nodes
	###########################################################################
	public function AddNode(IDOMNode $node){
		$this->_contents[] = $node;
		return $this;
	}
	public function AddNodes(array $nodes){
		foreach ($nodes as $node) {
			if(is_a($node, 'IDOMNode')){$this->_contents[] = $node;}
		}
		return $this;
	}

	public function RAddNode(IDOMNode $node){
		return $this->_contents[] = $node;
	}
	###########################################################################
	# Methods to add phrase elements
	###########################################################################
	public function AddAbbr($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlAbbrElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddAddress($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlAddressElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddArea(HtmlAreaShapes $shape, $coords, $href='', $alt='', $id=''){
		$this->_contents[] = new HtmlAreaElement($shape, $coords, $href, $alt, null, $id);
		return $this;
	}
	public function AddA($content, $href='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlAElement($content, $href, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddBdi($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlBdiElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddBdo($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlBdoElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddB($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlBElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddCite($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlCiteElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddCode($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlCodeElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDataList($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlDataListElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDel($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlDelElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDfn($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlDfnElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddEm($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlEmElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddI($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlIElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddIns($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlInsElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddKbd($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlKbdElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddMap($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlMapElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddMark($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlMarkElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddMeter($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlMeterElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddOutput($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlOutputElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddProgress($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlProgressElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddQ($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlQElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSamp($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSampElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddS($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSmall($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSmallElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSpan($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSpanElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddStrong($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlStrongElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSub($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSubElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSup($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSupElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddTime($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlTimeElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddU($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlUElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddVar($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlVarElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddWbr($id='', $class='', $title='', $style=''){
		$this->_contents[] = new HtmlWbrElement(null, $id, $class, $title, $style);
		return $this;
	}
	###########################################################################
	# Methods to add heading elements
	###########################################################################
	public function AddH1($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlH1Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH2($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlH2Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH3($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlH3Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH4($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlH4Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH5($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlH5Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH6($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlH6Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add embedded elements
	###########################################################################
	public function AddAudio($src='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new HtmlAudioElement($src, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddCanvas($height='', $width='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new HtmlCanvasElement($height, $width, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddEmbed($src='', $type='', $width='', $height='', $id='', $class='', $title='', $style=''){
		$this->_contents[] = new HtmlEmbedElement($src, $type, $width, $height, $id, $class, $title, $style);
		return $this;
	}
	public function AddIFrame($src='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlIFrameElement($src, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddImg($src='', $alt='', $width='', $height='', array $attributes = null, $id='', $class='', $title='', $style=''){
		$this->_contents[] = new HtmlImgElement($src, $alt, $width, $height, $attributes, $id, $class, $title, $style);
		return $this;
	}
	public function AddObject($data='', $type='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlObjectElement($data, $type, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddVideo($src='', $poster='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new HtmlVideoElement($src, $poster, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add lists
	###########################################################################
	public function AddDl($id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlDlElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddOl($id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlOlElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddUl($id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlUlElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	###########################################################################
	# Methods to add block elements
	###########################################################################
	public function AddBlockquote($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlBlockquoteElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddBr($id='', $class='', $title='', $style=''){
		$this->_contents[] = new HtmlBrElement($id, $class, $title, $style);
		return $this;
	}
	public function AddDetails($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlDetailsElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDialog($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlDialogElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDiv($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlDivElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddFigure($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlFigureElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddFooter($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlFooterElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddHeader($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlHeaderElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddHr($id='', $class='', $title='', $style=''){
		$this->_contents[] = new HtmlHrElement($id, $class, $title, $style);
		return $this;
	}
	public function AddMain($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlMainElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddP($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlPElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddPre($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlPreElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add sectioning elements
	###########################################################################
	public function AddArticle($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlArticleElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddAside($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlAsideElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddNav($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlNavElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSection($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSectionElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add sectioning elements
	###########################################################################
	public function AddButton($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlButtonElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddFieldset($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlFieldsetElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddForm($action='', $method='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlFormElement($action, $method, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddInput($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style=''){
		$this->_contents[] = new HtmlInputElement($type, $name, $attributes, $id, $class, $title, $style);
		return $this;
	}
	public function AddKeygen($name='', HtmlKeyTypes $keytype=null, array $attributes = null){
		$this->_contents[] = new HtmlKeygenElement($name, $keytype, $attributes);
		return $this;
	}
	public function AddLabel($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlLabelElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddLegend($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlLegendElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddOptGroup($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlOptGroupElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddOption($content, $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new HtmlOptionElement($content, $value, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSelect($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlSelectElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddTextArea($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new HtmlTextAreaElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
};
?>