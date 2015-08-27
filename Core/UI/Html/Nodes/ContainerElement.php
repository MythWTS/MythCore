<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\IDOMNode;
use Core\UI\Html\GenericContainerElement;
/**
 * Base class for DOM elements that can contain other html DOM elements of nodes. The class exposes and
 * implements methods to add different types of elements (most of the node classes in MythCore)
 * It also provide methods to add generic class nodes such as GenericContainerElement or HtmlNodes
 * Constructor($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true)
 */
class ContainerElement extends GenericContainerElement{
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
			if(is_a($node, 'Core\UI\Html\IDOMNode')){$this->_contents[] = $node;}
		}
		return $this;
	}

	public function RAddNode(IDOMNode $node){
		return $this->_contents[] = $node;
	}
	############################################################################
	# CHAINABLE Add____ METHODS (returns $this)
	############################################################################
	# Methods to add phrase elements
	######################################
	public function AddAbbr($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new AbbrElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddAddress($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new AddressElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddArea(AreaShapes $shape, $coords, $href='', $alt='', $id=''){
		$this->_contents[] = new AreaElement($shape, $coords, $href, $alt, null, $id);
		return $this;
	}
	public function AddA($content, $href='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new AElement($content, $href, $id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddBdi($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new BdiElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddBdo($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new BdoElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddB($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new BElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddCite($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new CiteElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddCode($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new CodeElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDataList($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new DataListElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDel($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new DelElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDfn($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new DfnElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddEm($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new EmElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddI($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new IElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddIns($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new InsElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddKbd($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new KbdElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddMap($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new MapElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddMark($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new MarkElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddMeter($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new MeterElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddOutput($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new OutputElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddProgress($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new ProgressElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddQ($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new QElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSamp($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new SampElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddS($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new SElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSmall($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new SmallElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSpan($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new SpanElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddStrong($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new StrongElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSub($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new SubElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSup($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new SupElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddTime($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new TimeElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddU($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new UElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddVar($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new VarElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddWbr($id='', $class='', $title='', $style=''){
		$this->_contents[] = new WbrElement(null, $id, $class, $title, $style);
		return $this;
	}
	###########################################################################
	# Methods to add heading elements
	###########################################################################
	public function AddH1($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new H1Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH2($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new H2Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH3($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new H3Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH4($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new H4Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH5($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new H5Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddH6($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new H6Element($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add embedded elements
	###########################################################################
	public function AddAudio($src='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new AudioElement($src, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddCanvas($height='', $width='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new CanvasElement($height, $width, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddEmbed($src='', $type='', $width='', $height='', $id='', $class='', $title='', $style=''){
		$this->_contents[] = new EmbedElement($src, $type, $width, $height, $id, $class, $title, $style);
		return $this;
	}
	public function AddIFrame($src='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new IFrameElement($src, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddImg($src='', $alt='', $width='', $height='', array $attributes = null, $id='', $class='', $title='', $style=''){
		$this->_contents[] = new ImgElement($src, $alt, $width, $height, $attributes, $id, $class, $title, $style);
		return $this;
	}
	public function AddObject($data='', $type='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new ObjectElement($data, $type, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddVideo($src='', $poster='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new VideoElement($src, $poster, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add lists
	###########################################################################
	public function AddDl($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new DlElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddOl($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new OlElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	public function AddUl($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new UlElement($id, $class, $title, $style, $indentContent);
		return $this;
	}
	###########################################################################
	# Methods to add block elements
	###########################################################################
	public function AddBlockquote($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new BlockquoteElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddBr($id='', $class='', $title='', $style=''){
		$this->_contents[] = new BrElement($id, $class, $title, $style);
		return $this;
	}
	public function AddDetails($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new DetailsElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDialog($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new DialogElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddDiv($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new DivElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddFigure($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new FigureElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddFooter($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new FooterElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddHeader($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new HeaderElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddHr($id='', $class='', $title='', $style=''){
		$this->_contents[] = new HrElement($id, $class, $title, $style);
		return $this;
	}
	public function AddMain($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new MainElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddP($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new PElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddPre($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new PreElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add sectioning elements
	###########################################################################
	public function AddArticle($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new ArticleElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddAside($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new AsideElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddNav($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new NavElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSection($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new SectionElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add sectioning elements
	###########################################################################
	public function AddButton($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new ButtonElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddFieldset($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new FieldsetElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddForm($action='', $method='', $id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new FormElement($action, $method, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddInput($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style=''){
		$this->_contents[] = new InputElement($type, $name, $attributes, $id, $class, $title, $style);
		return $this;
	}
	public function AddKeygen($name='', KeyTypes $keytype=null, array $attributes = null){
		$this->_contents[] = new KeygenElement($name, $keytype, $attributes);
		return $this;
	}
	public function AddLabel($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new LabelElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddLegend($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		$this->_contents[] = new LegendElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddOptGroup($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new OptGroupElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddOption($content, $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		$this->_contents[] = new OptionElement($content, $value, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddSelect($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new SelectElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	public function AddTextArea($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		$this->_contents[] = new TextAreaElement($content, $id, $class, $title, $style, $indentContents);
		return $this;
	}
	###########################################################################
	# Methods to add table element
	###########################################################################
	public function AddTable($id='', $class='', $title='', $style='', $indentContent=true){
		$this->_contents[] = new TableElement($id, $class, $title, $style, $indentContents);
		return $this;
	}

	############################################################################
	# NON-CHAINABLE Add____ METHODS (returns added node)
	############################################################################
	# Methods to add phrase elements
	######################################
	public function RAddAbbr($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new AbbrElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddAddress($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new AddressElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddArea(AreaShapes $shape, $coords, $href='', $alt='', $id=''){
		return $this->_contents[] = new AreaElement($shape, $coords, $href, $alt, null, $id);
	}
	public function RAddA($content, $href='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents[] = new AElement($content, $href, $id, $class, $title, $style, $indentContent);
	}
	public function RAddBdi($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new BdiElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddBdo($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new BdoElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddB($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new BElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddCite($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new CiteElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddCode($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new CodeElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddDataList($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new DataListElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddDel($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new DelElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddDfn($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new DfnElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddEm($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new EmElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddI($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new IElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddIns($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new InsElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddKbd($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new KbdElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddMap($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new MapElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddMark($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new MarkElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddMeter($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new MeterElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddOutput($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new OutputElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddProgress($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new ProgressElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddQ($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new QElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddSamp($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new SampElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddS($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new SElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddSmall($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new SmallElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddSpan($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new SpanElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddStrong($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new StrongElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddSub($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new SubElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddSup($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new SupElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddTime($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new TimeElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddU($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new UElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddVar($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new VarElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddWbr($id='', $class='', $title='', $style=''){
		return $this->_contents[] = new WbrElement(null, $id, $class, $title, $style);
	}
	###########################################################################
	# Methods to add heading elements
	###########################################################################
	public function RAddH1($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new H1Element($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddH2($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new H2Element($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddH3($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new H3Element($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddH4($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new H4Element($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddH5($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new H5Element($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddH6($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new H6Element($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Methods to add embedded elements
	###########################################################################
	public function RAddAudio($src='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new AudioElement($src, $id, $class, $title, $style, $indentContents);
	}
	public function RAddCanvas($height='', $width='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new CanvasElement($height, $width, $id, $class, $title, $style, $indentContents);
	}
	public function RAddEmbed($src='', $type='', $width='', $height='', $id='', $class='', $title='', $style=''){
		return $this->_contents[] = new EmbedElement($src, $type, $width, $height, $id, $class, $title, $style);
	}
	public function RAddIFrame($src='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new IFrameElement($src, $id, $class, $title, $style, $indentContents);
	}
	public function RAddImg($src='', $alt='', $width='', $height='', array $attributes = null, $id='', $class='', $title='', $style=''){
		return $this->_contents[] = new ImgElement($src, $alt, $width, $height, $attributes, $id, $class, $title, $style);
	}
	public function RAddObject($data='', $type='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new ObjectElement($data, $type, $id, $class, $title, $style, $indentContents);
	}
	public function RAddVideo($src='', $poster='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new VideoElement($src, $poster, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Methods to add lists
	###########################################################################
	public function RAddDl($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new DlElement($id, $class, $title, $style, $indentContent);
	}
	public function RAddOl($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new OlElement($id, $class, $title, $style, $indentContent);
	}
	public function RAddUl($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new UlElement($id, $class, $title, $style, $indentContent);
	}
	###########################################################################
	# Methods to add block elements
	###########################################################################
	public function RAddBlockquote($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new BlockquoteElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddBr($id='', $class='', $title='', $style=''){
		return $this->_contents[] = new BrElement($id, $class, $title, $style);
	}
	public function RAddDetails($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new DetailsElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddDialog($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new DialogElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddDiv($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new DivElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddFigure($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new FigureElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddFooter($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new FooterElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddHeader($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new HeaderElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddHr($id='', $class='', $title='', $style=''){
		return $this->_contents[] = new HrElement($id, $class, $title, $style);
	}
	public function RAddMain($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new MainElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddP($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new PElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddPre($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new PreElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Methods to add sectioning elements
	###########################################################################
	public function RAddArticle($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new ArticleElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddAside($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new AsideElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddNav($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new NavElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddSection($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new SectionElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Methods to add sectioning elements
	###########################################################################
	public function RAddButton($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new ButtonElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddFieldset($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new FieldsetElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddForm($action='', $method='', $id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new FormElement($action, $method, $id, $class, $title, $style, $indentContents);
	}
	public function RAddInput($type='', $name='', array $attributes = null, $id='', $class='', $title='', $style=''){
		return $this->_contents[] = new InputElement($type, $name, $attributes, $id, $class, $title, $style);
	}
	public function RAddKeygen($name='', KeyTypes $keytype=null, array $attributes = null){
		return $this->_contents[] = new KeygenElement($name, $keytype, $attributes);
	}
	public function RAddLabel($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new LabelElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddLegend($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return $this->_contents[] = new LegendElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddOptGroup($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new OptGroupElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddOption($content, $value='', $id='', $class='', $title='', $style='', $indentContent=false){
		return $this->_contents[] = new OptionElement($content, $value, $id, $class, $title, $style, $indentContents);
	}
	public function RAddSelect($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new SelectElement($content, $id, $class, $title, $style, $indentContents);
	}
	public function RAddTextArea($content='', $id='', $class='', $title='', $style='', $indentContents=true){
		return $this->_contents[] = new TextAreaElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Methods to add table element
	###########################################################################
	public function RAddTable($id='', $class='', $title='', $style='', $indentContent=true){
		return $this->_contents[] = new TableElement($id, $class, $title, $style, $indentContents);
	}
};
?>