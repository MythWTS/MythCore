<?php
class HtmlHeadElement extends HtmlContainerElement{
	public function __construct($content=null, $id='', $indentContent=true){
		parent::__construct(Html5Tags::$HEAD, null, $content, $id, '', '', '', $indentContent);
	}

	###########################################################################
	# Content Adding Methods - General
	###########################################################################
	public function AddLink($href='', $rel='stylesheet', $type='text/css', $id=''){$this->_contents[] = new HtmlLinkElement($href, $rel, $type, null, $id); return $this;}
	public function AddMeta($name, $content){$this->_contents[] = new HtmlMetaElement($name, $content); return $this;}
	public function AddTitle($pageTitle, $id=''){$this->_contents[] = new HtmlTitleElement($pageTitle, $id); return $this;}
	public function AddBase($href='', $target='', $id=''){$this->_contents[] = new HtmlBaseElement($href, $target, $attributes); return $this;}
	public function AddNoScript($note, $id=''){$this->_contents[] = new HtmlNoScriptElement($note, $id); return $this;}

	###########################################################################
	# Specific Link Elements
	###########################################################################
	public function AddStylesheet($href, $id='', $type='text/css'){$this->_contents[] = new HtmlLinkElement($href, 'stylesheet', $type, $id); return $this;}
	public function AddShortcutIcon($href, $id=''){$this->_contents[] = new HtmlLinkElement($href, 'shortcut icon', '', null, $id); return $this;}
	public function AddAppleTouchIcon($href, $id=''){$this->_contents[] = new HtmlLinkElement($href, 'apple-touch-icon', '', null, $id); return $this;}

	public function AddAlternateLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'index', $type); return $this;}
	public function AddIndexLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'index', $type); return $this;}
	public function AddUpLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'up', $type); return $this;}
	public function AddNextLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'next', $type); return $this;}
	public function AddPrevLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'prev', $type); return $this;}
	public function AddStartLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'start', $type); return $this;}
	public function AddChapterLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'chapter', $type); return $this;}
	public function AddSectionLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'section', $type); return $this;}
	public function AddSubsectionLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'subsection', $type); return $this;}
	public function AddSearchLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'search', $type); return $this;}
	public function AddContentsLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'contents', $type); return $this;}
	public function AddGlossaryLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'glossary', $type); return $this;}
	public function AddHelpLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'help', $type); return $this;}
	public function AddBookmarkLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'bookmark', $type); return $this;}
	public function AddCopyrightLink($href, $type='text/html'){$this->_contents[] = new HtmlLinkElement($href, 'copyright', $type); return $this;}
	###########################################################################
	# Specific Meta Elements
	###########################################################################
	public function AddMetaCharset($charset='UTF-8'){$res = new HtmlMetaElement('', '', ''); $res->Charset($charset); $this->_contents[] = $res; return $this;}
	public function AddMetaHttpEquiv($httpEquiv, $value, $id=''){$res = new HtmlMetaElement('', $value, $id); $res->HttpEquiv($httpEquiv); $this->_contents[] = $res; return $this;}
	public function AddMetaXUACompatible(){$res = new HtmlMetaElement('', 'IE=edge,chrome=1'); $res->HttpEquiv('X-UA-Compatible'); $this->_contents[] = $res; return $this;}

	public function AddMetaContentType($contentType, $id=''){$res = new HtmlMetaElement('', $contentType, $id); $res->HttpEquiv('content-type'); $this->_contents[] = $res; return $this;}
	public function AddMetaDefaultStyle($defaultStyle, $id=''){$res = new HtmlMetaElement('', $defaultStyle, $id); $res->HttpEquiv('default-style'); $this->_contents[] = $res; return $this;}
	public function AddMetaRefresh($refresh, $id=''){$res = new HtmlMetaElement('', $refresh, $id);$res->HttpEquiv('refresh');$this->_contents[] = $res; return $this;}

	public function AddMetaApplicationName($appName, $id=''){$this->_contents[] = new HtmlMetaElement('application-name', $appName, $id); return $this;}
	public function AddMetaAuthor($author, $id=''){$this->_contents[] = new HtmlMetaElement('author', $author, $id); return $this;}
	public function AddMetaDescription($desc, $id=''){$this->_contents[] = new HtmlMetaElement('description', $desc, $id); return $this;}
	public function AddMetaGenerator($generator, $id=''){$this->_contents[] = new HtmlMetaElement('generator', $generator, $id); return $this;}
	public function AddMetaKeywords($keywords, $id=''){$this->_contents[] = new HtmlMetaElement('keywords', $keywords, $id); return $this;}
	public function AddMetaViewport($viewport='width=device-width; initial-scale=1.0', $id=''){$this->_contents[] = new HtmlMetaElement('viewport', $viewport, $id); return $this;}
	public function AddMetaRobots($robots, $id=''){$this->_contents[] = new HtmlMetaElement('robots', $robots, $id); return $this;}
	public function AddMetaGoogleBot($googleBot, $id=''){$this->_contents[] = new HtmlMetaElement('googlebot', $googleBot, $id); return $this;}
	public function AddMetaBingBot($bingbot, $id=''){$this->_contents[] = new HtmlMetaElement('bingbot', $bingbot, $id); return $this;}
	public function AddMetaSlurp($slurp, $id=''){$this->_contents[] = new HtmlMetaElement('Slurp', $slurp, $id); return $this;}
};
?>