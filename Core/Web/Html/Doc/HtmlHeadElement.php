<?php
class HtmlHeadElement extends HtmlGenericContainerElement {
	/** Constructor($id = '', $indentContent = true) */
	public function __construct($id = '', $indentContent = true) {
		parent::__construct(Html5Tags::$HEAD, null, null, $id, '', '', '', $indentContent);
	}
	############################################################################
	# CHAINABLE Add____ METHODS (returns $this)
	############################################################################
	# Content Adding Methods - General
	######################################
	public function AddNode(IDOMMetaData $node) {
		$this -> _contents[] = $node;
		return $this;
	}
	public function AddLink($href = '', $rel = 'stylesheet', $type = 'text/css', $id = '') {
		$this -> _contents[] = new HtmlLinkElement($href, $rel, $type, null, $id);
		return $this;
	}
	public function AddMeta($name, $content) {
		$this -> _contents[] = new HtmlMetaElement($name, $content);
		return $this;
	}
	public function AddTitle($pageTitle, $id = '') {
		$this -> _contents[] = new HtmlTitleElement($pageTitle, $id);
		return $this;
	}
	public function AddBase($href = '', $target = '', $id = '') {
		$this -> _contents[] = new HtmlBaseElement($href, $target, null);
		return $this;
	}
	public function AddNoScript($note, $id = '') {
		$this -> _contents[] = new HtmlNoScriptElement($note, $id);
		return $this;
	}
	# Specific Link Elements
	######################################
	public function AddStylesheet($href, $id = '', $type = 'text/css') {
		$this -> _contents[] = new HtmlLinkElement($href, 'stylesheet', $type, null, $id);
		return $this;
	}
	public function AddShortcutIcon($href, $id = '') {
		$this -> _contents[] = new HtmlLinkElement($href, 'shortcut icon', '', null, $id);
		return $this;
	}
	public function AddAppleTouchIcon($href, $id = '') {
		$this -> _contents[] = new HtmlLinkElement($href, 'apple-touch-icon', '', null, $id);
		return $this;
	}
	public function AddAlternateLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'index', $type);
		return $this;
	}
	public function AddIndexLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'index', $type);
		return $this;
	}
	public function AddUpLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'up', $type);
		return $this;
	}
	public function AddNextLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'next', $type);
		return $this;
	}
	public function AddPrevLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'prev', $type);
		return $this;
	}
	public function AddStartLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'start', $type);
		return $this;
	}
	public function AddChapterLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'chapter', $type);
		return $this;
	}
	public function AddSectionLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'section', $type);
		return $this;
	}
	public function AddSubsectionLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'subsection', $type);
		return $this;
	}
	public function AddSearchLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'search', $type);
		return $this;
	}
	public function AddContentsLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'contents', $type);
		return $this;
	}
	public function AddGlossaryLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'glossary', $type);
		return $this;
	}
	public function AddHelpLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'help', $type);
		return $this;
	}
	public function AddBookmarkLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'bookmark', $type);
		return $this;
	}
	public function AddCopyrightLink($href, $type = 'text/html') {
		$this -> _contents[] = new HtmlLinkElement($href, 'copyright', $type);
		return $this;
	}
	# Specific Meta Elements
	######################################
	public function AddCharsetMeta($charset = 'UTF-8') {
		$res = new HtmlMetaElement('', '', '');
		$res -> Charset($charset);
		$this -> _contents[] = $res;
		return $this;
	}
	public function AddHttpEquivMeta($httpEquiv, $value, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv($httpEquiv);
		$res->Content($value);
		$this -> _contents[] = $res;
		return $this;
	}
	public function AddMetaXUACompatible() {
		$res = new HtmlMetaElement();
		$res -> HttpEquiv('X-UA-Compatible');
		$res->Content('IE=edge,chrome=1');
		$this -> _contents[] = $res;
		return $this;
	}
	public function AddContentTypeMeta($contentType, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv('content-type');
		$res->Content($contentType);
		$this -> _contents[] = $res;
		return $this;
	}
	public function AddDefaultStyleMeta($defaultStyle, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv('default-style');
		$res->Content($defaultStyle);
		$this -> _contents[] = $res;
		return $this;
	}
	public function AddRefreshMeta($refresh, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv('refresh');
		$res->Content($refresh);
		$this -> _contents[] = $res;
		return $this;
	}
	public function AddApplicationNameMeta($appName, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('application-name', $appName, $id);
		return $this;
	}
	public function AddAuthorMeta($author, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('author', $author, $id);
		return $this;
	}
	public function AddDescriptionMeta($desc, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('description', $desc, $id);
		return $this;
	}
	public function AddGeneratorMeta($generator, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('generator', $generator, $id);
		return $this;
	}
	public function AddKeywordsMeta($keywords, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('keywords', $keywords, $id);
		return $this;
	}
	public function AddViewportMeta($viewport = 'width=device-width; initial-scale=1.0', $id = '') {
		$this -> _contents[] = new HtmlMetaElement('viewport', $viewport, $id);
		return $this;
	}
	public function AddRobotsMeta($robots, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('robots', $robots, $id);
		return $this;
	}
	public function AddGoogleBotMeta($googleBot, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('googlebot', $googleBot, $id);
		return $this;
	}
	public function AddBingBotMeta($bingbot, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('bingbot', $bingbot, $id);
		return $this;
	}
	public function AddSlurpMeta($slurp, $id = '') {
		$this -> _contents[] = new HtmlMetaElement('Slurp', $slurp, $id);
		return $this;
	}
	############################################################################
	# NON-CHAINABLE Add____ METHODS (returns added node)
	############################################################################
	# Content Adding Methods - General
	######################################
	public function RAddNode(IDOMMetaData $node) {
		return $this -> _contents[] = $node;
	}
	public function RAddLink($href = '', $rel = 'stylesheet', $type = 'text/css', $id = '') {
		return $this -> _contents[] = new HtmlLinkElement($href, $rel, $type, null, $id);
	}
	public function RAddMeta($name, $content) {
		return $this -> _contents[] = new HtmlMetaElement($name, $content);
	}
	public function RAddTitle($pageTitle, $id = '') {
		return $this -> _contents[] = new HtmlTitleElement($pageTitle, $id);
	}
	public function RAddBase($href = '', $target = '', $id = '') {
		return $this -> _contents[] = new HtmlBaseElement($href, $target, null);
	}
	public function RAddNoScript($note, $id = '') {
		return $this -> _contents[] = new HtmlNoScriptElement($note, $id);
	}
	# Specific Link Elements
	######################################
	public function RAddStylesheet($href, $id = '', $type = 'text/css') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'stylesheet', $type, null, $id);
	}
	public function RAddShortcutIcon($href, $id = '') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'shortcut icon', '', null, $id);
	}
	public function RAddAppleTouchIcon($href, $id = '') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'apple-touch-icon', '', null, $id);
	}
	public function RAddAlternateLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'index', $type);
	}
	public function RAddIndexLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'index', $type);
	}
	public function RAddUpLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'up', $type);
	}
	public function RAddNextLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'next', $type);
	}
	public function RAddPrevLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'prev', $type);
	}
	public function RAddStartLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'start', $type);
	}
	public function RAddChapterLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'chapter', $type);
	}
	public function RAddSectionLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'section', $type);
	}
	public function RAddSubsectionLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'subsection', $type);
	}
	public function RAddSearchLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'search', $type);
	}
	public function RAddContentsLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'contents', $type);
	}
	public function RAddGlossaryLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'glossary', $type);
	}
	public function RAddHelpLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'help', $type);
	}
	public function RAddBookmarkLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'bookmark', $type);
	}
	public function RAddCopyrightLink($href, $type = 'text/html') {
		return $this -> _contents[] = new HtmlLinkElement($href, 'copyright', $type);
	}
	# Specific Meta Elements
	######################################
	public function RAddCharsetMeta($charset = 'UTF-8') {
		$res = new HtmlMetaElement('', '', '');
		$res -> Charset($charset);
		return $this -> _contents[] = $res;
	}
	public function RAddHttpEquivMeta($httpEquiv, $value, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv($httpEquiv);
		$res->Content($value);
		return $this -> _contents[] = $res;
	}
	public function RAddMetaXUACompatible() {
		$res = new HtmlMetaElement();
		$res -> HttpEquiv('X-UA-Compatible');
		$res->Content('IE=edge,chrome=1');
		return $this -> _contents[] = $res;
	}
	public function RAddContentTypeMeta($contentType, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv('content-type');
		$res->Content($contentType);
		return $this -> _contents[] = $res;
	}
	public function RAddDefaultStyleMeta($defaultStyle, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv('default-style');
		$res->Content($defaultStyle);
		return $this -> _contents[] = $res;
	}
	public function RAddRefreshMeta($refresh, $id = '') {
		$res = new HtmlMetaElement('', '', $id);
		$res -> HttpEquiv('refresh');
		$res->Content($refresh);
		return $this -> _contents[] = $res;
	}
	public function RAddApplicationNameMeta($appName, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('application-name', $appName, $id);
	}
	public function RAddAuthorMeta($author, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('author', $author, $id);
	}
	public function RAddDescriptionMeta($desc, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('description', $desc, $id);
	}
	public function RAddGeneratorMeta($generator, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('generator', $generator, $id);
	}
	public function RAddKeywordsMeta($keywords, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('keywords', $keywords, $id);
	}
	public function RAddViewportMeta($viewport = 'width=device-width; initial-scale=1.0', $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('viewport', $viewport, $id);
	}
	public function RAddRobotsMeta($robots, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('robots', $robots, $id);
	}
	public function RAddGoogleBotMeta($googleBot, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('googlebot', $googleBot, $id);
	}
	public function RAddBingBotMeta($bingbot, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('bingbot', $bingbot, $id);
	}
	public function RAddSlurpMeta($slurp, $id = '') {
		return $this -> _contents[] = new HtmlMetaElement('Slurp', $slurp, $id);
	}
};
?>