<?php
class HtmlHeadElement extends HtmlContainerElement{
	public function __construct($content=null, $id='', $indentContent=true){
		parent::__construct(Html5Tags::$HEAD, null, $content, $id, '', '', '', $indentContent);
	}

	###########################################################################
	# Content Adding Methods - General
	###########################################################################
	public function AddLink($href='', $rel='stylesheet', $type='text/css', $id=''){$this->_contents[] = new HtmlLinkElement($href, $rel, $type, null, $id);}
	public function AddMeta($name, $content){$this->_contents[] = new HtmlMetaElement($name, $content);}
	public function AddMetaCharset($charset='UTF-8'){$res = new HtmlMetaElement('', '', ''); $res->Charset($charset); $this->_contents[] = $res;}
	public function AddMetaHttpEquiv($httpEquiv, $value, $id=''){$res = new HtmlMetaElement('', $value, $id); $res->HttpEquiv($httpEquiv); $this->_contents[] = $res;}
	public function AddMetaXUACompatible(){$res = new HtmlMetaElement('', 'IE=edge,chrome=1'); $res->HttpEquiv('X-UA-Compatible'); $this->_contents[] = $res;}
	public function AddTitle($pageTitle, $id=''){$this->_contents[] = new HtmlTitleElement($pageTitle, $id);}

	###########################################################################
	# Link Elements
	###########################################################################
	public function AddStylesheet($href, $id='', $type='text/css'){$this->_contents[] = new HtmlLinkElement($href, 'stylesheet', $type, $id);}
	public function AddShortcutIcon($href, $id=''){$this->_contents[] = new HtmlLinkElement($href, 'shortcut icon', '', null, $id);}
	public function AddAppleTouchIcon($href, $id=''){$this->_contents[] = new HtmlLinkElement($href, 'apple-touch-icon', '', null, $id);}

	public function AddAlternateLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'index', $type);}
	public function AddIndexLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'index', $type);}
	public function AddUpLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'up', $type);}
	public function AddNextLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'next', $type);}
	public function AddPrevLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'prev', $type);}
	public function AddStartLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'start', $type);}
	public function AddChapterLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'chapter', $type);}
	public function AddSectionLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'section', $type);}
	public function AddSubsectionLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'subsection', $type);}
	public function AddSearchLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'search', $type);}
	public function AddContentsLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'contents', $type);}
	public function AddGlossaryLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'glossary', $type);}
	public function AddHelpLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'help', $type);}
	public function AddBookmarkLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'bookmark', $type);}
	public function AddCopyrightLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'copyright', $type);}
	###########################################################################
	# Meta Elements
	###########################################################################
	public function AddMetaContentType($contentType, $id=''){$res = new HtmlMetaElement('', $contentType, $id); $res->HttpEquiv('content-type'); $this->_contents[] = $res;}
	public function AddMetaDefaultStyle($defaultStyle, $id=''){$res = new HtmlMetaElement('', $defaultStyle, $id); $res->HttpEquiv('default-style'); $this->_contents[] = $res;}
	public function AddMetaRefresh($refresh, $id=''){$res = new HtmlMetaElement('', $refresh, $id);$res->HttpEquiv('refresh');$this->_contents[] = $res;}

	public function AddMetaApplicationName($appName, $id=''){$this->_contents[] = new HtmlMetaElement('application-name', $appName, $id);}
	public function AddMetaAuthor($author, $id=''){$this->_contents[] = new HtmlMetaElement('author', $author, $id);}
	public function AddMetaDescription($desc, $id=''){$this->_contents[] = new HtmlMetaElement('description', $desc, $id);}
	public function AddMetaGenerator($generator, $id=''){$this->_contents[] = new HtmlMetaElement('generator', $generator, $id);}
	public function AddMetaKeywords($keywords, $id=''){$this->_contents[] = new HtmlMetaElement('keywords', $keywords, $id);}
	public function AddMetaViewport($viewport='width=device-width; initial-scale=1.0', $id=''){$this->_contents[] = new HtmlMetaElement('viewport', $viewport, $id);}
	public function AddMetaRobots($robots, $id=''){$this->_contents[] = new HtmlMetaElement('robots', $robots, $id);}
	public function AddMetaGoogleBot($googleBot, $id=''){$this->_contents[] = new HtmlMetaElement('googlebot', $googleBot, $id);}
	public function AddMetaBingBot($bingbot, $id=''){$this->_contents[] = new HtmlMetaElement('bingbot', $bingbot, $id);}
	public function AddMetaSlurp($slurp, $id=''){$this->_contents[] = new HtmlMetaElement('Slurp', $slurp, $id);}
};
?>