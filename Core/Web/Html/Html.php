<?php
final class Html extends Object{
	private function __constructor(){}

	public static function RawHtml($html, $useIndent=true){return new HtmlRawTextNode($html, $useIndent);}
	public static function Element($tag, array $attributes = null, $contents='', $id='', $class='', $title='', $style='', $indentContents=true, $isEmptyElement=false){
		return new HtmlElement($tag, $attributes, $contents, $id, $class, $title, $style, $indentContents, $isEmptyElement);
	}
	###########################################################################
	# Link Elements
	###########################################################################
	public static function Link($href='', $rel='stylesheet', $type='text/css', $id=''){return new HtmlLinkElement($href, $rel, $type, null, $id);}

	public static function LinkStylesheet($href, $id='', $type='text/css'){return new HtmlLinkElement($href, 'stylesheet', $type, $id);}
	public static function LinkShortcutIcon($href, $id=''){return new HtmlLinkElement($href, 'shortcut icon', '', null, $id);}
	public static function LinkAppleTouchIcon($href, $id=''){return new HtmlLinkElement($href, 'apple-touch-icon', '', null, $id);}

	public static function LinkAlternate($href, $type='text/html'){return new HtmlLinkElement($href, 'index', $type);}
	public static function LinkIndex($href, $type='text/html'){return new HtmlLinkElement($href, 'index', $type);}
	public static function LinkUp($href, $type='text/html'){return new HtmlLinkElement($href, 'up', $type);}
	public static function LinkNext($href, $type='text/html'){return new HtmlLinkElement($href, 'next', $type);}
	public static function LinkPrev($href, $type='text/html'){return new HtmlLinkElement($href, 'prev', $type);}
	public static function LinkStart($href, $type='text/html'){return new HtmlLinkElement($href, 'start', $type);}
	public static function LinkChapter($href, $type='text/html'){return new HtmlLinkElement($href, 'chapter', $type);}
	public static function LinkSection($href, $type='text/html'){return new HtmlLinkElement($href, 'section', $type);}
	public static function LinkSubsection($href, $type='text/html'){return new HtmlLinkElement($href, 'subsection', $type);}
	public static function LinkSearch($href, $type='text/html'){return new HtmlLinkElement($href, 'search', $type);}
	public static function LinkContents($href, $type='text/html'){return new HtmlLinkElement($href, 'contents', $type);}
	public static function LinkGlossary($href, $type='text/html'){return new HtmlLinkElement($href, 'glossary', $type);}
	public static function LinkHelp($href, $type='text/html'){return new HtmlLinkElement($href, 'help', $type);}
	public static function LinkBookmark($href, $type='text/html'){return new HtmlLinkElement($href, 'bookmark', $type);}
	public static function LinkCopyright($href, $type='text/html'){return new HtmlLinkElement($href, 'copyright', $type);}
	###########################################################################
	# Meta Elements
	###########################################################################
	public static function Meta($name, $content){return new HtmlMetaElement($name, $content);}
	public static function MetaCharset($charset='UTF-8'){$res = new HtmlMetaElement('', '', ''); $res->Charset($charset); return $res;}
	public static function MetaHttpEquiv($httpEquiv, $value, $id=''){$res = new HtmlMetaElement('', $value, $id); $res->HttpEquiv($httpEquiv); return $res;}

	public static function MetaXUACompatible(){$res = new HtmlMetaElement('', 'IE=edge,chrome=1'); $res->HttpEquiv('X-UA-Compatible'); return $res;}
	public static function MetaContentType($contentType, $id=''){$res = new HtmlMetaElement('', $contentType, $id); $res->HttpEquiv('content-type'); return $res;}
	public static function MetaDefaultStyle($defaultStyle, $id=''){$res = new HtmlMetaElement('', $defaultStyle, $id); $res->HttpEquiv('default-style'); return $res;}
	public static function MetaRefresh($refresh, $id=''){$res = new HtmlMetaElement('', $refresh, $id);$res->HttpEquiv('refresh');return $res;}

	public static function MetaApplicationName($appName, $id=''){return new HtmlMetaElement('application-name', $appName, $id);}
	public static function MetaAuthor($author, $id=''){return new HtmlMetaElement('author', $author, $id);}
	public static function MetaDescription($desc, $id=''){return new HtmlMetaElement('description', $desc, $id);}
	public static function MetaGenerator($generator, $id=''){return new HtmlMetaElement('generator', $generator, $id);}
	public static function MetaKeywords($keywords, $id=''){return new HtmlMetaElement('keywords', $keywords, $id);}
	public static function MetaViewport($viewport='width=device-width; initial-scale=1.0', $id=''){return new HtmlMetaElement('viewport', $viewport, $id);}
	public static function MetaRobots($robots, $id=''){return new HtmlMetaElement('robots', $robots, $id);}
	public static function MetaGoogleBot($googleBot, $id=''){return new HtmlMetaElement('googlebot', $googleBot, $id);}
	public static function MetaBingBot($bingbot, $id=''){return new HtmlMetaElement('bingbot', $bingbot, $id);}
	public static function MetaSlurp($slurp, $id=''){return new HtmlMetaElement('Slurp', $slurp, $id);}
	###########################################################################
	# Script Elements
	###########################################################################
	public static function Script($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', false, false, $id);}
	public static function ScriptDefered($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', true, false, $id);}
	public static function ScriptAsync($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', false, true, $id);}
	public static function ScriptDeferedAsync($src, $id=''){return new HtmlScriptElement($src, 'text/javascript', '', true, true, $id);}

	public static function ScriptVBScript($src, $id=''){return new HtmlScriptElement($src, 'text/vbscript', '', false, false, $id);}
	public static function ScriptTCLScript($src, $id=''){return new HtmlScriptElement($src, 'text/tcl', '', false, false, $id);}
	public static function ScriptJScript($src, $id=''){return new HtmlScriptElement($src, 'text/jscript', '', false, false, $id);}
	
	public static function InlineScript($script, $id='', $type='text/javascript'){return new HtmlInlineScriptElement($script, $type, $id, true);}
	###########################################################################
	# Other Head Elements
	###########################################################################
	public static function Title($pageTitle, $id=''){return new HtmlTitleElement($pageTitle, $id);}
	public static function Style($style, $id=''){return new HtmlStyleElement($style, $id);}
};
?>