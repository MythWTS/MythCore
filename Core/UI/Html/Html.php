<?php
namespace Core\UI\Html;
use Core\UI\Html\Nodes;
use Core\Object;
/**
 * Main Factory Class for the HTML module of the UI package. The class has static methods to generate almost
 * all types of elements in the module. One way of using the module is to only use this class and use
 * the method it ontains to create elements. This has the added bonus of avoiding namespace hell
 */
final class Html extends Object {
	/** Private constructor - This class is factory static class, no instances should be instantiated from it */
	private function __constructor() {}
	/**
	 * Creates and returns a new HtmlDocument object using the supplied parameters
	 * @return HtmlDocument
	 */
	public static function Document(HeadElement $head = null, BodyElement $body = null, DocTypes $docType = null, $indentContents = true) {
		return new HtmlDocument($head, $body, $docType, $indentContents);
	}
	/**
	 * Creates and returns a new DocTypeNode object using the supplied parameters
	 * @return DocTypeNode
	 */
	public static function DocType(DocTypes $type) {
		return new Nodes\DocTypeNode($type);
	}
	/**
	 * Creates and returns a new HtmlPage object using the supplied parameters
	 * @return HtmlPage
	 */
	public static function Page(PageMetaData $metadata=null, $contents=''){
		return new HtmlPage($metadata, $contents);
	}
	###########################################################################
	# Raw Text Nodes
	###########################################################################
	/**
	 * Creates and returns a new RawTextNode object using the supplied parameters
	 * @return RawTextNode
	 */
		public static function RawHtml($html, $useIndent = true) {
		return new Nodes\RawTextNode($html, $useIndent);
	}
	/**
	 * Creates and returns a new RawTextNode object using the supplied parameters
	 * @return RawTextNode
	 */
	public static function TextNode($txt) {
		return new Nodes\RawTextNode(U::ENC($txt), true);
	}
	/**
	 * Creates and returns a new RawTextNode object using the supplied parameters
	 * @return RawTextNode
	 */
	public static function UnIndentedTextNode($txt) {
		return new Nodes\RawTextNode(U::ENC($txt), false);
	}
	###########################################################################
	# Script Elements
	###########################################################################
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function Script($src, $id = '') {
		return new Nodes\ScriptElement($src, 'text/javascript', '', false, false, $id);
	}
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function ScriptDefered($src, $id = '') {
		return new Nodes\ScriptElement($src, 'text/javascript', '', true, false, $id);
	}
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function ScriptAsync($src, $id = '') {
		return new Nodes\ScriptElement($src, 'text/javascript', '', false, true, $id);
	}
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function ScriptDeferedAsync($src, $id = '') {
		return new Nodes\ScriptElement($src, 'text/javascript', '', true, true, $id);
	}
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function ScriptVBScript($src, $id = '') {
		return new Nodes\ScriptElement($src, 'text/vbscript', '', false, false, $id);
	}
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function ScriptTCLScript($src, $id = '') {
		return new Nodes\ScriptElement($src, 'text/tcl', '', false, false, $id);
	}
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function ScriptJScript($src, $id = '') {
		return new Nodes\ScriptElement($src, 'text/jscript', '', false, false, $id);
	}
	/**
	 * Creates and returns a new ScriptElement object using the supplied parameters
	 * @return ScriptElement
	 */
	public static function InlineScript($script, $id = '', $type = 'text/javascript') {
		return new Nodes\InlineScriptElement($script, $type, $id, true);
	}
	###########################################################################
	# Link Elements
	###########################################################################
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function Link($href = '', $rel = 'stylesheet', $type = 'text/css', $id = '') {
		return new Nodes\LinkElement($href, $rel, $type, null, $id);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function Stylesheet($href, $id = '', $type = 'text/css') {
		return new Nodes\LinkElement($href, 'stylesheet', $type, $id);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function ShortcutIcon($href, $id = '') {
		return new Nodes\LinkElement($href, 'shortcut icon', '', null, $id);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function AppleTouchIcon($href, $id = '') {
		return new Nodes\LinkElement($href, 'apple-touch-icon', '', null, $id);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function AlternateLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'alternate', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function UpLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'up', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function NextLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'next', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function PrevLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'prev', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function HomeLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'home', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function StartLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'start', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function FirstLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'first', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function LastLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'last', $type);
	}
	/**
	 * Creates and returns a new HtmlDocument object using the supplied parameters
	 * @return LinkElement
	 */
	public static function ChapterLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'chapter', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function SectionLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'section', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function SubsectionLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'subsection', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function SearchLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'search', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function EditUriLink($href, $type = 'application/rsd+xml') {
		return new Nodes\LinkElement($href, 'edituri', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function ContentsLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'contents', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function IndexLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'index', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function GlossaryLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'glossary', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function HelpLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'help', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function BookmarkLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'bookmark', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function CopyrightLink($href, $type = 'text/html') {
		return new Nodes\LinkElement($href, 'copyright', $type);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function RssFeedLink($href, $title='') {
		return new Nodes\LinkElement($href, 'alternate', 'application/rss+xml', null, '','', $title);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function AtomFeedLink($href, $title='') {
		return new Nodes\LinkElement($href, 'alternate', 'application/atom+xml', null, '','', $title);
	}
	/**
	 * Creates and returns a new LinkElement object using the supplied parameters
	 * @return LinkElement
	 */
	public static function AltLangLink($href, $altlang='', $type = 'text/html') {
		$res = new Nodes\LinkElement($href, 'alternate', $type);
		if(!U::NA($altlang)){$res->SetAttribute('hreflang', $altlang);}
		return $res;
	}
	###########################################################################
	# Meta Elements
	###########################################################################
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function Meta($name, $content) {
		return new Nodes\MetaElement($name, $content);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function CharsetMeta($charset = 'UTF-8') {
		$res = new Nodes\MetaElement();
		$res -> Charset($charset);
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function HttpEquivMeta($httpEquiv, $value, $id = '') {
		$res = new Nodes\MetaElement();
		$res -> HttpEquiv($httpEquiv);
		$res->Content($value); $res->Id($id);
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function PropertyMeta($property, $content) {
		$res = new Nodes\MetaElement();
		$res -> Property($property);
		$res -> Content($content);
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function ItemPropMeta(SOItemProperties $itemProp, $content){
		$res = new Nodes\MetaElement();
		$res->ItemProp($itemProp); $res->Content($content);
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function XUACompatibleMeta() {
		$res = new Nodes\MetaElement();
		$res -> HttpEquiv('X-UA-Compatible');
		$res->Content('IE=edge,chrome=1');
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function ContentTypeMeta($contentType, $id = '') {
		$res = new Nodes\MetaElement();
		$res -> HttpEquiv('content-type');
		$res->Content($contentType); $res->Id($id);
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function DefaultStyleMeta($defaultStyle, $id = '') {
		$res = new Nodes\MetaElement();
		$res -> HttpEquiv('default-style');
		$res->Content($defaultStyle); $res->Id($id);
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function RefreshMeta($refresh, $id = '') {
		$res = new Nodes\MetaElement();
		$res -> HttpEquiv('refresh');
		$res->Content($refresh); $res->Id($id);
		return $res;
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function ApplicationNameMeta($appName, $id = '') {
		return new Nodes\MetaElement('application-name', $appName, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function AuthorMeta($author, $id = '') {
		return new Nodes\MetaElement('author', $author, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function DescriptionMeta($desc, $id = '') {
		return new Nodes\MetaElement('description', $desc, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function GeneratorMeta($generator, $id = '') {
		return new Nodes\MetaElement('generator', $generator, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function PublisherMeta($publisher, $id = '') {
		return new Nodes\MetaElement('publisher', $publisher, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function KeywordsMeta($keywords, $id = '') {
		return new Nodes\MetaElement('keywords', $keywords, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function ViewportMeta($viewport = 'width=device-width; initial-scale=1.0', $id = '') {
		return new Nodes\MetaElement('viewport', $viewport, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function RobotsMeta($robots, $id = '') {
		return new Nodes\MetaElement('robots', $robots, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function GoogleBotMeta($googleBot, $id = '') {
		return new Nodes\MetaElement('googlebot', $googleBot, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function BingBotMeta($bingbot, $id = '') {
		return new Nodes\MetaElement('bingbot', $bingbot, $id);
	}
	/**
	 * Creates and returns a new MetaElement object using the supplied parameters
	 * @return MetaElement
	 */
	public static function SlurpMeta($slurp, $id = '') {
		return new Nodes\MetaElement('Slurp', $slurp, $id);
	}
	###########################################################################
	# Other Head Elements
	###########################################################################
	/**
	 * Creates and returns a new TitleElement object using the supplied parameters
	 * @return TitleElement
	 */
	public static function Title($pageTitle, $id = '') {
		return new Nodes\TitleElement($pageTitle, $id);
	}
	/**
	 * Creates and returns a new StyleElement object using the supplied parameters
	 * @return StyleElement
	 */
	public static function Style($style, $id = '') {
		return new Nodes\StyleElement($style, $id);
	}
	/**
	 * Creates and returns a new BaseElement object using the supplied parameters
	 * @return BaseElement
	 */
	public static function Base($href = '', $target = '', $id = '') {
		return new Nodes\BaseElement($href, $target, null);
	}
	/**
	 * Creates and returns a new NoScriptElement object using the supplied parameters
	 * @return NoScriptElement
	 */
	public static function NoScript($note, $id = '') {
		return new Nodes\NoScriptElement($note, $id);
	}
	###########################################################################
	# Phrasing Elements
	###########################################################################
	/**
	 * Creates and returns a new AbbrElement object using the supplied parameters
	 * @return AbbrElement
	 */
	public static function Abbr($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\AbbrElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new AddressElement object using the supplied parameters
	 * @return AddressElement
	 */
	public static function Address($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\AddressElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new AreaElement object using the supplied parameters
	 * @return AreaElement
	 */
	public static function Area(AreaShapes $shape, $coords, $href = '', $alt = '', array $attributes = null, $id = '') {
		return new Nodes\AreaElement($shape, $coords, $href, $alt, null, $id);
	}
	/**
	 * Creates and returns a new AElement object using the supplied parameters
	 * @return AElement
	 */
	public static function A($content, $href = '', $id = '', $class = '', $title = '', $style = '', $indentContent = false) {
		return new Nodes\AElement($content, $href, $id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new BdiElement object using the supplied parameters
	 * @return BdiElement
	 */
	public static function Bdi($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\BdiElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new BdoElement object using the supplied parameters
	 * @return BdoElement
	 */
	public static function Bdo($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\BdoElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new BElement object using the supplied parameters
	 * @return BElement
	 */
	public static function B($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\BElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new CiteElement object using the supplied parameters
	 * @return CiteElement
	 */
	public static function Cite($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\CiteElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new CodeElement object using the supplied parameters
	 * @return CodeElement
	 */
	public static function Code($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\CodeElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new DataListElement object using the supplied parameters
	 * @return DataListElement
	 */
	public static function DataList($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\DataListElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new DelElement object using the supplied parameters
	 * @return DelElement
	 */
	public static function Del($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\DelElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new DfnElement object using the supplied parameters
	 * @return DfnElement
	 */
	public static function Dfn($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\DfnElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new EmElement object using the supplied parameters
	 * @return EmElement
	 */
	public static function Em($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\EmElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new IElement object using the supplied parameters
	 * @return IElement
	 */
	public static function I($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\IElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new InsElement object using the supplied parameters
	 * @return InsElement
	 */
	public static function Ins($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\InsElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new KbdElement object using the supplied parameters
	 * @return KbdElement
	 */
	public static function Kbd($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\KbdElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new MapElement object using the supplied parameters
	 * @return MapElement
	 */
	public static function Map($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\MapElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new MarkElement object using the supplied parameters
	 * @return MarkElement
	 */
	public static function Mark($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\MarkElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new MeterElement object using the supplied parameters
	 * @return MeterElement
	 */
	public static function Meter($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\MeterElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new OutputElement object using the supplied parameters
	 * @return OutputElement
	 */
	public static function Output($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\OutputElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new ProgressElement object using the supplied parameters
	 * @return ProgressElement
	 */
	public static function Progress($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\ProgressElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new QElement object using the supplied parameters
	 * @return QElement
	 */
	public static function Q($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\QElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SampElement object using the supplied parameters
	 * @return SampElement
	 */
	public static function Samp($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\SampElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SElement object using the supplied parameters
	 * @return SElement
	 */
	public static function S($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\SElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SmallElement object using the supplied parameters
	 * @return SmallElement
	 */
	public static function Small($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\SmallElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SpanElement object using the supplied parameters
	 * @return SpanElement
	 */
	public static function Span($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\SpanElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new StrongElement object using the supplied parameters
	 * @return StrongElement
	 */
	public static function Strong($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\StrongElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SubElement object using the supplied parameters
	 * @return SubElement
	 */
	public static function Sub($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\SubElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SupElement object using the supplied parameters
	 * @return SupElement
	 */
	public static function Sup($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\SupElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new TimeElement object using the supplied parameters
	 * @return TimeElement
	 */
	public static function Time($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\TimeElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new UElement object using the supplied parameters
	 * @return UElement
	 */
	public static function U($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\UElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new VarElement object using the supplied parameters
	 * @return VarElement
	 */
	public static function Variable($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\VarElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new WbrElement object using the supplied parameters
	 * @return WbrElement
	 */
	public static function Wbr($id = '', $class = '', $title = '', $style = '') {
		return new Nodes\WbrElement(null, $id, $class, $title, $style);
	}
	###########################################################################
	# Heading Elements
	###########################################################################
	/**
	 * Creates and returns a new H1Element object using the supplied parameters
	 * @return H1Element
	 */
	public static function H1($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\H1Element($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new H2Element object using the supplied parameters
	 * @return H2Element
	 */
	public static function H2($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\H2Element($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new H3Element object using the supplied parameters
	 * @return H3Element
	 */
	public static function H3($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\H3Element($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new H4Element object using the supplied parameters
	 * @return H4Element
	 */
	public static function H4($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\H4Element($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new H5Element object using the supplied parameters
	 * @return H5Element
	 */
	public static function H5($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\H5Element($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new H6Element object using the supplied parameters
	 * @return H6Element
	 */
	public static function H6($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\H6Element($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Embedded Elements
	###########################################################################
	/**
	 * Creates and returns a new AudioElement object using the supplied parameters
	 * @return AudioElement
	 */
	public static function Audio($src = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\AudioElement($src, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new CanvasElement object using the supplied parameters
	 * @return CanvasElement
	 */
	public static function Canvas($height = '', $width = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\CanvasElement($height, $width, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new EmbedElement object using the supplied parameters
	 * @return EmbedElement
	 */
	public static function Embed($src = '', $type = '', $width = '', $height = '', $id = '', $class = '', $title = '', $style = '') {
		return new Nodes\EmbedElement($src, $type, $width, $height, $id, $class, $title, $style);
	}
	/**
	 * Creates and returns a new IFrameElement object using the supplied parameters
	 * @return IFrameElement
	 */
	public static function IFrame($src = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\IFrameElement($src, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new ImgElement object using the supplied parameters
	 * @return ImgElement
	 */
	public static function Img($src = '', $alt = '', $width = '', $height = '', array $attributes = null, $id = '', $class = '', $title = '', $style = '') {
		return new Nodes\ImgElement($src, $alt, $width, $height, $attributes, $id, $class, $title, $style);
	}
	/**
	 * Creates and returns a new ObjectElement object using the supplied parameters
	 * @return ObjectElement
	 */
	public static function Object($data = '', $type = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\ObjectElement($data, $type, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new VideoElement object using the supplied parameters
	 * @return VideoElement
	 */
	public static function Video($src = '', $poster = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\VideoElement($src, $poster, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# List Elements
	###########################################################################
	/**
	 * Creates and returns a new DlElement object using the supplied parameters
	 * @return DlElement
	 */
	public static function Dl($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\DlElement($id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new OlElement object using the supplied parameters
	 * @return OlElement
	 */
	public static function Ol($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\OlElement($id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new UlElement object using the supplied parameters
	 * @return UlElement
	 */
	public static function Ul($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\UlElement($id, $class, $title, $style, $indentContent);
	}
	###########################################################################
	# Block Elements
	###########################################################################
	/**
	 * Creates and returns a new BlockquoteElement object using the supplied parameters
	 * @return BlockquoteElement
	 */
	public static function Blockquote($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\BlockquoteElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new BrElement object using the supplied parameters
	 * @return BrElement
	 */
	public static function Br($id = '', $class = '', $title = '', $style = '') {
		return new Nodes\BrElement($id, $class, $title, $style);
	}
	/**
	 * Creates and returns a new DetailsElement object using the supplied parameters
	 * @return DetailsElement
	 */
	public static function Details($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\DetailsElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new DialogElement object using the supplied parameters
	 * @return DialogElement
	 */
	public static function Dialog($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\DialogElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new DivElement object using the supplied parameters
	 * @return DivElement
	 */
	public static function Div($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\DivElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new FigureElement object using the supplied parameters
	 * @return FigureElement
	 */
	public static function Figure($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\FigureElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new FooterElement object using the supplied parameters
	 * @return FooterElement
	 */
	public static function Footer($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\FooterElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new HeaderElement object using the supplied parameters
	 * @return HeaderElement
	 */
	public static function Header($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\HeaderElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new HrElement object using the supplied parameters
	 * @return HrElement
	 */
	public static function Hr($id = '', $class = '', $title = '', $style = '') {
		return new Nodes\HrElement($id, $class, $title, $style);
	}
	/**
	 * Creates and returns a new MainElement object using the supplied parameters
	 * @return MainElement
	 */
	public static function Main($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\MainElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new PElement object using the supplied parameters
	 * @return PElement
	 */
	public static function P($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\PElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new PreElement object using the supplied parameters
	 * @return PreElement
	 */
	public static function Pre($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\PreElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Sectioning Elements
	###########################################################################
	/**
	 * Creates and returns a new ArticleElement object using the supplied parameters
	 * @return ArticleElement
	 */
	public static function Article($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\ArticleElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new AsideElement object using the supplied parameters
	 * @return AsideElement
	 */
	public static function Aside($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\AsideElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new NavElement object using the supplied parameters
	 * @return NavElement
	 */
	public static function Nav($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\NavElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SectionElement object using the supplied parameters
	 * @return SectionElement
	 */
	public static function Section($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\SectionElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Form Elements
	###########################################################################
	/**
	 * Creates and returns a new ButtonElement object using the supplied parameters
	 * @return ButtonElement
	 */
	public static function Button($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\ButtonElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new FieldsetElement object using the supplied parameters
	 * @return FieldsetElement
	 */
	public static function Fieldset($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\FieldsetElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new FormElement object using the supplied parameters
	 * @return FormElement
	 */
	public static function Form($action = '', $method = '', $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\FormElement($action, $method, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new InputElement object using the supplied parameters
	 * @return InputElement
	 */
	public static function Input($type = '', $name = '', array $attributes = null, $id = '', $class = '', $title = '', $style = '') {
		return new Nodes\InputElement($type, $name, $attributes, $id, $class, $title, $style);
	}
	/**
	 * Creates and returns a new KeygenElement object using the supplied parameters
	 * @return KeygenElement
	 */
	public static function Keygen($name = '', KeyTypes $keytype = null, array $attributes = null) {
		return new Nodes\KeygenElement($name, $keytype, $attributes);
	}
	/**
	 * Creates and returns a new LabelElement object using the supplied parameters
	 * @return LabelElement
	 */
	public static function Label($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\LabelElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new LegendElement object using the supplied parameters
	 * @return LegendElement
	 */
	public static function Legend($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new Nodes\LegendElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new OptGroupElement object using the supplied parameters
	 * @return OptGroupElement
	 */
	public static function OptGroup($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\OptGroupElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new OptionElement object using the supplied parameters
	 * @return OptionElement
	 */
	public static function Option($content, $value = '', $id = '', $class = '', $title = '', $style = '', $indentContent = false) {
		return new Nodes\OptionElement($content, $value, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new SelectElement object using the supplied parameters
	 * @return SelectElement
	 */
	public static function Select($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\SelectElement($content, $id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new TextAreaElement object using the supplied parameters
	 * @return TextAreaElement
	 */
	public static function TextArea($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new Nodes\TextAreaElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Table Elements
	###########################################################################
	/**
	 * Creates and returns a new TableElement object using the supplied parameters
	 * @return TableElement
	 */
	public static function Table($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\TableElement($id, $class, $title, $style, $indentContents);
	}
	/**
	 * Creates and returns a new TrElement object using the supplied parameters
	 * @return TrElement
	 */
	public static function Tr($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\TrElement($id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new TBodyElement object using the supplied parameters
	 * @return TBodyElement
	 */
	public static function TBody($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\TBodyElement($id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new THeadElement object using the supplied parameters
	 * @return THeadElement
	 */
	public static function THead($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\THeadElement($id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new TFootElement object using the supplied parameters
	 * @return TFootElement
	 */
	public static function TFoot($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\TFootElement($id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new ColGroupElement object using the supplied parameters
	 * @return ColGroupElement
	 */
	public static function ColGroup($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\ColGroupElement($id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new ColElement object using the supplied parameters
	 * @return ColElement
	 */
	public static function Col($span = '', array $attributes = null, $id = '', $class = '', $title = '', $style = '') {
		return new Nodes\ColElement($span, $attributes, $id, $class, $title, $style);
	}
	/**
	 * Creates and returns a new CaptionElement object using the supplied parameters
	 * @return CaptionElement
	 */
	public static function Caption($content, $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\CaptionElement($content, $id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new TdElement object using the supplied parameters
	 * @return TdElement
	 */
	public static function Td($content, $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\TdElement($content, $id, $class, $title, $style, $indentContent);
	}
	/**
	 * Creates and returns a new ThElement object using the supplied parameters
	 * @return ThElement
	 */
	public static function Th($content, $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new Nodes\ThElement($content, $id, $class, $title, $style, $indentContent);
	}
};
?>