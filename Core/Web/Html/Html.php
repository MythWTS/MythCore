<?php
final class Html extends Object {
	private function __constructor() {
	}
	public static function Document(HtmlHeadElement $head = null, HtmlBodyElement $body = null, HtmlDocTypes $docType = null, $indentContents = true) {
		return new HtmlDocument($head, $body, $docType, $indentContents);
	}
	public static function DocType(HtmlDocTypes $type) {
		return new HtmlDocTypeNode($type);
	}
	###########################################################################
	# Raw Text Nodes
	###########################################################################
	public static function RawHtml($html, $useIndent = true) {
		return new HtmlRawTextNode($html, $useIndent);
	}
	public static function TextNode($txt) {
		return new HtmlRawTextNode(U::ENC($txt), true);
	}
	public static function UnIndentedTextNode($txt) {
		return new HtmlRawTextNode(U::ENC($txt), false);
	}
	###########################################################################
	# Script Elements
	###########################################################################
	public static function Script($src, $id = '') {
		return new HtmlScriptElement($src, 'text/javascript', '', false, false, $id);
	}
	public static function ScriptDefered($src, $id = '') {
		return new HtmlScriptElement($src, 'text/javascript', '', true, false, $id);
	}
	public static function ScriptAsync($src, $id = '') {
		return new HtmlScriptElement($src, 'text/javascript', '', false, true, $id);
	}
	public static function ScriptDeferedAsync($src, $id = '') {
		return new HtmlScriptElement($src, 'text/javascript', '', true, true, $id);
	}
	public static function ScriptVBScript($src, $id = '') {
		return new HtmlScriptElement($src, 'text/vbscript', '', false, false, $id);
	}
	public static function ScriptTCLScript($src, $id = '') {
		return new HtmlScriptElement($src, 'text/tcl', '', false, false, $id);
	}
	public static function ScriptJScript($src, $id = '') {
		return new HtmlScriptElement($src, 'text/jscript', '', false, false, $id);
	}
	public static function InlineScript($script, $id = '', $type = 'text/javascript') {
		return new HtmlInlineScriptElement($script, $type, $id, true);
	}
	###########################################################################
	# Link Elements
	###########################################################################
	public static function Link($href = '', $rel = 'stylesheet', $type = 'text/css', $id = '') {
		return new HtmlLinkElement($href, $rel, $type, null, $id);
	}
	public static function Stylesheet($href, $id = '', $type = 'text/css') {
		return new HtmlLinkElement($href, 'stylesheet', $type, $id);
	}
	public static function ShortcutIcon($href, $id = '') {
		return new HtmlLinkElement($href, 'shortcut icon', '', null, $id);
	}
	public static function AppleTouchIcon($href, $id = '') {
		return new HtmlLinkElement($href, 'apple-touch-icon', '', null, $id);
	}
	public static function AlternateLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'alternate', $type);
	}
	public static function IndexLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'index', $type);
	}
	public static function UpLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'up', $type);
	}
	public static function NextLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'next', $type);
	}
	public static function PrevLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'prev', $type);
	}
	public static function HomeLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'home', $type);
	}
	public static function StartLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'start', $type);
	}
	public static function FirstLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'first', $type);
	}
	public static function LastLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'last', $type);
	}
	public static function ChapterLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'chapter', $type);
	}
	public static function SectionLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'section', $type);
	}
	public static function SubsectionLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'subsection', $type);
	}
	public static function SearchLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'search', $type);
	}
	public static function EditUriLink($href, $type = 'application/rsd+xml') {
		return new HtmlLinkElement($href, 'edituri', $type);
	}
	public static function ContentsLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'contents', $type);
	}
	public static function IndexLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'index', $type);
	}
	public static function GlossaryLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'glossary', $type);
	}
	public static function HelpLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'help', $type);
	}
	public static function BookmarkLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'bookmark', $type);
	}
	public static function CopyrightLink($href, $type = 'text/html') {
		return new HtmlLinkElement($href, 'copyright', $type);
	}
	public static function RssFeedLink($href, $title='') {
		return new HtmlLinkElement($href, 'alternate', 'application/rss+xml', null, '','', $title);
	}
	public static function AtomFeedLink($href, $title='') {
		return new HtmlLinkElement($href, 'alternate', 'application/atom+xml', null, '','', $title);
	}
	public static function AltLangLink($href, $altlang='', $type = 'text/html') {
		$res = new HtmlLinkElement($href, 'alternate', $type);
		if(!U::NA($altlang)){$res->SetAttribute('hreflang', $altlang);}
		return $res;
	}
	###########################################################################
	# Meta Elements
	###########################################################################
	public static function Meta($name, $content) {
		return new HtmlMetaElement($name, $content);
	}
	public static function CharsetMeta($charset = 'UTF-8') {
		$res = new HtmlMetaElement('', '', '');
		$res -> Charset($charset);
		return $res;
	}
	public static function HttpEquivMeta($httpEquiv, $value, $id = '') {
		$res = new HtmlMetaElement('', $value, $id);
		$res -> HttpEquiv($httpEquiv);
		return $res;
	}
	public static function PropertyMeta($property, $content) {
		$res = new HtmlMetaElement('', '', '');
		$res -> Property($property);
		$res -> Content($content);
		return $res;
	}
	public static function ItemPropMeta(HtmlSOItemProperties $itemProp, $content){
		$res = new HtmlMetaElement();
		$res->ItemProp($itemProp); $res->Content($content);
		return $res;
	}
	public static function XUACompatibleMeta() {
		$res = new HtmlMetaElement('', 'IE=edge,chrome=1');
		$res -> HttpEquiv('X-UA-Compatible');
		return $res;
	}
	public static function ContentTypeMeta($contentType, $id = '') {
		$res = new HtmlMetaElement('', $contentType, $id);
		$res -> HttpEquiv('content-type');
		return $res;
	}
	public static function DefaultStyleMeta($defaultStyle, $id = '') {
		$res = new HtmlMetaElement('', $defaultStyle, $id);
		$res -> HttpEquiv('default-style');
		return $res;
	}
	public static function RefreshMeta($refresh, $id = '') {
		$res = new HtmlMetaElement('', $refresh, $id);
		$res -> HttpEquiv('refresh');
		return $res;
	}
	public static function ApplicationNameMeta($appName, $id = '') {
		return new HtmlMetaElement('application-name', $appName, $id);
	}
	public static function AuthorMeta($author, $id = '') {
		return new HtmlMetaElement('author', $author, $id);
	}
	public static function DescriptionMeta($desc, $id = '') {
		return new HtmlMetaElement('description', $desc, $id);
	}
	public static function GeneratorMeta($generator, $id = '') {
		return new HtmlMetaElement('generator', $generator, $id);
	}
	public static function PublisherMeta($publisher, $id = '') {
		return new HtmlMetaElement('publisher', $publisher, $id);
	}
	public static function KeywordsMeta($keywords, $id = '') {
		return new HtmlMetaElement('keywords', $keywords, $id);
	}
	public static function ViewportMeta($viewport = 'width=device-width; initial-scale=1.0', $id = '') {
		return new HtmlMetaElement('viewport', $viewport, $id);
	}
	public static function RobotsMeta($robots, $id = '') {
		return new HtmlMetaElement('robots', $robots, $id);
	}
	public static function GoogleBotMeta($googleBot, $id = '') {
		return new HtmlMetaElement('googlebot', $googleBot, $id);
	}
	public static function BingBotMeta($bingbot, $id = '') {
		return new HtmlMetaElement('bingbot', $bingbot, $id);
	}
	public static function SlurpMeta($slurp, $id = '') {
		return new HtmlMetaElement('Slurp', $slurp, $id);
	}
	###########################################################################
	# Other Head Elements
	###########################################################################
	public static function Title($pageTitle, $id = '') {
		return new HtmlTitleElement($pageTitle, $id);
	}
	public static function Style($style, $id = '') {
		return new HtmlStyleElement($style, $id);
	}
	public static function Base($href = '', $target = '', $id = '') {
		return new HtmlBaseElement($href, $target, null);
	}
	public static function NoScript($note, $id = '') {
		return new HtmlNoScriptElement($note, $id);
	}
	###########################################################################
	# Phrasing Elements
	###########################################################################
	public static function Abbr($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlAbbrElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Address($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlAddressElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Area(HtmlAreaShapes $shape, $coords, $href = '', $alt = '', array $attributes = null, $id = '') {
		return new HtmlAreaElement($shape, $coords, $href, $alt, null, $id);
	}
	public static function A($content, $href = '', $id = '', $class = '', $title = '', $style = '', $indentContent = false) {
		return new HtmlAElement($content, $href, $id, $class, $title, $style, $indentContent);
	}
	public static function Bdi($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlBdiElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Bdo($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlBdoElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function B($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlBElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Cite($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlCiteElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Code($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlCodeElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function DataList($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlDataListElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Del($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlDelElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Dfn($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlDfnElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Em($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlEmElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function I($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlIElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Ins($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlInsElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Kbd($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlKbdElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Map($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlMapElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Mark($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlMarkElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Meter($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlMeterElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Output($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlOutputElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Progress($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlProgressElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Q($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlQElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Samp($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlSampElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function S($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlSElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Small($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlSmallElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Span($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlSpanElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Strong($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlStrongElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Sub($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlSubElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Sup($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlSupElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Time($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlTimeElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function U($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlUElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Variable($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlVarElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Wbr($id = '', $class = '', $title = '', $style = '') {
		return new HtmlWbrElement(null, $id, $class, $title, $style);
	}
	###########################################################################
	# Heading Elements
	###########################################################################
	public static function H1($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlH1Element($content, $id, $class, $title, $style, $indentContents);
	}
	public static function H2($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlH2Element($content, $id, $class, $title, $style, $indentContents);
	}
	public static function H3($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlH3Element($content, $id, $class, $title, $style, $indentContents);
	}
	public static function H4($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlH4Element($content, $id, $class, $title, $style, $indentContents);
	}
	public static function H5($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlH5Element($content, $id, $class, $title, $style, $indentContents);
	}
	public static function H6($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlH6Element($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Embedded Elements
	###########################################################################
	public static function Audio($src = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlAudioElement($src, $id, $class, $title, $style, $indentContents);
	}
	public static function Canvas($height = '', $width = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlCanvasElement($height, $width, $id, $class, $title, $style, $indentContents);
	}
	public static function Embed($src = '', $type = '', $width = '', $height = '', $id = '', $class = '', $title = '', $style = '') {
		return new HtmlEmbedElement($src, $type, $width, $height, $id, $class, $title, $style);
	}
	public static function IFrame($src = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlIFrameElement($src, $id, $class, $title, $style, $indentContents);
	}
	public static function Img($src = '', $alt = '', $width = '', $height = '', array $attributes = null, $id = '', $class = '', $title = '', $style = '') {
		return new HtmlImgElement($src, $alt, $width, $height, $attributes, $id, $class, $title, $style);
	}
	public static function Object($data = '', $type = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlObjectElement($data, $type, $id, $class, $title, $style, $indentContents);
	}
	public static function Video($src = '', $poster = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlVideoElement($src, $poster, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# List Elements
	###########################################################################
	public static function Dl($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlDlElement($id, $class, $title, $style, $indentContent);
	}
	public static function Ol($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlOlElement($id, $class, $title, $style, $indentContent);
	}
	public static function Ul($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlUlElement($id, $class, $title, $style, $indentContent);
	}
	###########################################################################
	# Block Elements
	###########################################################################
	public static function Blockquote($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlBlockquoteElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Br($id = '', $class = '', $title = '', $style = '') {
		return new HtmlBrElement($id, $class, $title, $style);
	}
	public static function Details($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlDetailsElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Dialog($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlDialogElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Div($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlDivElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Figure($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlFigureElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Footer($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlFooterElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Header($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlHeaderElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Hr($id = '', $class = '', $title = '', $style = '') {
		return new HtmlHrElement($id, $class, $title, $style);
	}
	public static function Main($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlMainElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function P($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlPElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Pre($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlPreElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Sectioning Elements
	###########################################################################
	public static function Article($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlArticleElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Aside($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlAsideElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Nav($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlNavElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Section($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlSectionElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Form Elements
	###########################################################################
	public static function Button($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlButtonElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Fieldset($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlFieldsetElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Form($action = '', $method = '', $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlFormElement($action, $method, $id, $class, $title, $style, $indentContents);
	}
	public static function Input($type = '', $name = '', array $attributes = null, $id = '', $class = '', $title = '', $style = '') {
		return new HtmlInputElement($type, $name, $attributes, $id, $class, $title, $style);
	}
	public static function Keygen($name = '', HtmlKeyTypes $keytype = null, array $attributes = null) {
		return new HtmlKeygenElement($name, $keytype, $attributes);
	}
	public static function Label($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlLabelElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Legend($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false) {
		return new HtmlLegendElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function OptGroup($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlOptGroupElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Option($content, $value = '', $id = '', $class = '', $title = '', $style = '', $indentContent = false) {
		return new HtmlOptionElement($content, $value, $id, $class, $title, $style, $indentContents);
	}
	public static function Select($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlSelectElement($content, $id, $class, $title, $style, $indentContents);
	}
	public static function TextArea($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = true) {
		return new HtmlTextAreaElement($content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Table Elements
	###########################################################################
	public static function Table($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlTableElement($id, $class, $title, $style, $indentContents);
	}
	public static function Tr($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlTrElement($id, $class, $title, $style, $indentContent);
	}
	public static function TBody($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlTBodyElement($id, $class, $title, $style, $indentContent);
	}
	public static function THead($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlTHeadElement($id, $class, $title, $style, $indentContent);
	}
	public static function TFoot($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlTFootElement($id, $class, $title, $style, $indentContent);
	}
	public static function ColGroup($id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlColGroupElement($id, $class, $title, $style, $indentContent);
	}
	public static function Col($span = '', array $attributes = null, $id = '', $class = '', $title = '', $style = '') {
		return new HtmlColElement($span, $attributes, $id, $class, $title, $style);
	}
	public static function Caption($content, $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlCaptionElement($content, $id, $class, $title, $style, $indentContent);
	}
	public static function Td($content, $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlTdElement($content, $id, $class, $title, $style, $indentContent);
	}
	public static function Th($content, $id = '', $class = '', $title = '', $style = '', $indentContent = true) {
		return new HtmlThElement($content, $id, $class, $title, $style, $indentContent);
	}
};
?>