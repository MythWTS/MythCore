<?php
class HtmlPageMetaData extends Object{
	############################################################################
	# Protected Fields
	############################################################################
	protected $_docType, $_baseUrl, $_baseTarget, $_charset;
	protected $_fbData, $_twitterData, $_soData;
	protected $_title, $_description, $_keywords, $_author, $_generator, $_publisher;
	protected $_shortcutIcon, $_appleTouchIcon;
	protected $_rssFeeds, $_atomFeeds, $_altLangs;
	protected $_searchUrl, $_editUri, $_copyrightUrl, $_helpUrl, $_glossaryUrl;
	protected $_nextUrl, $_prevUrl, $_homeUrl, $_firstUrl, $_lastUrl, $_upUrl, $_indexUrl, $_tocUrl;
	protected $_mediaType, $_applicationName, $_viewport;
	############################################################################
	# Constructor
	############################################################################
	/**
	 * Constructor(
	 * 		$title='New Page', $desc='New Page', $keywords='', HtmlDocTypes $docType=null, $charset='UTF-8',
	 * 		HtmlFBMetaData $fbData = null, HtmlTwitterCard $twitterCard = null, HtmlSOMetaData $soData = null
	 * 		)
	 */
	public function __construct(
			$title='New Page', $desc='New Page', $keywords='', HtmlDocTypes $docType=null, $charset='UTF-8',
			HtmlFBMetaData $fbData = null, HtmlTwitterCard $twitterCard = null, HtmlSOMetaData $soData = null){
		$this->_docType = $docType?:HtmlDocTypes::$Html5;
		$this->_charset = $charset;
		$this->_fbData = $fbData?: new HtmlFBMetaData();
		$this->_twitterData = $twitterCard?: new HtmlTwitterCard();
		$this->_soData = $soData?: new HtmlSOMetaData();
		$this->_title = $title;
		$this->_description = $desc;
		$this->_keywords = $keywords;
		$this->_author = $this->_generator = $this->_publisher =
			$this->_searchUrl = $this->_editUri = $this->_copyrightUrl =
			$this->_nextUrl = $this->_prevUrl = $this->_homeUrl = $this->_firstUrl = $this->_lastUrl= $this->_upUrl =
			$this->_indexUrl = $this->_tocUrl = $this->_applicationName = $this->_glossaryUrl = $this->_helpUrl =
			$this->_appleTouchIcon = $this->_shortcutIcon = '';
		$this->_viewport = ''; $this->_mediaType = 'text/html';
		$this->_rssFeeds = array(); $this->_atomFeeds = array(); $this->_altLangs = array();
	}
	############################################################################
	# Properties Accessors
	############################################################################
	public function DocType(HtmlDocTypes $value=null){
		if($value === null){return $this->_docType;}
		else{$this->_docType = $value;}
	}
	public function Charset($value=null){
		if($value === null){return $this->_charset;}
		else{$this->_charset = U::ES($value);}
	}
	public function BaseUrl($value=null){
		if($value === null){return $this->_baseUrl;}
		else{$this->_baseUrl = U::ES($value);}
	}
	public function BaseTarget($value=null){
		if($value === null){return $this->_baseTarget;}
		else{$this->_baseTarget = U::ES($value);}
	}
	############################################################################
	public function FBData(HtmlFBMetaData $value=null){
		if($value === null){return $this->_fbData;}
		else{$this->_fbData = $value;}
	}
	public function TwitterCard(HtmlTwitterCard $value=null){
		if($value === null){return $this->_twitterData;}
		else{$this->_twitterData = $value;}
	}
	public function SchemaOrgData(HtmlSOMetaData $value=null){
		if($value === null){return $this->_soData;}
		else{$this->_soData = $value;}
	}
	############################################################################
	public function Title($value=null){
		if($value === null){return $this->_title;}
		else{$this->_title = U::ES($value);}
	}
	public function Description($value=null){
		if($value === null){return $this->_description;}
		else{$this->_description = U::ES($value);}
	}
	public function Keywords($value=null){
		if($value === null){return $this->_keywords;}
		else{$this->_keywords = U::ES($value);}
	}
	public function Author($value=null){
		if($value === null){return $this->_author;}
		else{$this->_author = U::ES($value);}
	}
	public function Generator($value=null){
		if($value === null){return $this->_generator;}
		else{$this->_generator = U::ES($value);}
	}
	public function Publisher($value=null){
		if($value === null){return $this->_publisher;}
		else{$this->_publisher = U::ES($value);}
	}
	############################################################################
	public function SearchUrl($value=null){
		if($value === null){return $this->_searchUrl;}
		else{$this->_searchUrl = U::ES($value);}
	}
	public function EditUri($value=null){
		if($value === null){return $this->_editUri;}
		else{$this->_editUri = U::ES($value);}
	}
	public function CopyrightUrl($value=null){
		if($value === null){return $this->_copyrightUrl;}
		else{$this->_copyrightUrl = U::ES($value);}
	}
	public function GlossaryUrl($value=null){
		if($value === null){return $this->_glossaryUrl;}
		else{$this->_glossaryUrl = U::ES($value);}
	}
	public function HelpUrl($value=null){
		if($value === null){return $this->_helpUrl;}
		else{$this->_helpUrl = U::ES($value);}
	}
	############################################################################
	public function NextUrl($value=null){
		if($value === null){return $this->_nextUrl;}
		else{$this->_nextUrl = U::ES($value);}
	}
	public function PreviousUrl($value=null){
		if($value === null){return $this->_prevUrl;}
		else{$this->_prevUrl = U::ES($value);}
	}
	public function HomeUrl($value=null){
		if($value === null){return $this->_homeUrl;}
		else{$this->_homeUrl = U::ES($value);}
	}
	public function FirstUrl($value=null){
		if($value === null){return $this->_firstUrl;}
		else{$this->_firstUrl = U::ES($value);}
	}
	public function LastUrl($value=null){
		if($value === null){return $this->_lastUrl;}
		else{$this->_lastUrl = U::ES($value);}
	}
	public function UpUrl($value=null){
		if($value === null){return $this->_upUrl;}
		else{$this->_upUrl = U::ES($value);}
	}
	public function IndexUrl($value=null){
		if($value === null){return $this->_indexUrl;}
		else{$this->_indexUrl = U::ES($value);}
	}
	public function TOCUrl($value=null){
		if($value === null){return $this->_tocUrl;}
		else{$this->_tocUrl = U::ES($value);}
	}
	############################################################################
	public function MediaType($value=null){
		if($value === null){return $this->_mediaType;}
		else{$this->_mediaType = U::ES($value);}
	}
	public function ApplicationName($value=null){
		if($value === null){return $this->_applicationName;}
		else{$this->_applicationName = U::ES($value);}
	}
	public function Viewport($value=null){
		if($value === null){return $this->_viewport;}
		else{$this->_viewport = U::ES($value);}
	}
	############################################################################
	public function ShortcutIcon($value=null){
		if($value === null){return $this->_shortcutIcon;}
		else{$this->_shortcutIcon = U::ES($value);}
	}
	public function AppleTouchIcon($value=null){
		if($value === null){return $this->_appleTouchIcon;}
		else{$this->_appleTouchIcon = U::ES($value);}
	}
	############################################################################
	public function RSSFeeds(array $value=null){
		if($value === null){return $this->_rssFeeds;}
		else{$this->_rssFeeds = $value?:array();}
	}
	public function AtomFeeds(array $value=null){
		if($value === null){return $this->_atomFeeds;}
		else{$this->_atomFeeds = $value?:array();}
	}
	public function AltLangs(array $value=null){
		if($value === null){return $this->_altLangs;}
		else{$this->_altLangs = $value?:array();}
	}
	###########################################################################
	# Html generation Methods
	###########################################################################
	public function GenerateHtmlNodes(){
		$res = array();
		if(!U::NA($this->_mediaType)){$res[] = Html::ContentTypeMeta($this->_mediaType);}
		if(!(U::NA($this->_baseTarget) && U::NA($this->_baseUrl))){$res[] = Html::Base($this->_baseUrl, $this->_baseTarget);}
		if(!U::NA($this->_charset)){$res[] = Html::CharsetMeta($this->_charset);}
		$res[] = Html::XUACompatibleMeta();

		if(!U::NA($this->_title)){$res[] = Html::Title($this->_title);}

		if(!U::NA($this->_fbData)){$nodes = $this->_fbData->GenerateHtmlNodes(); foreach ($nodes as $node) {$res[] = $node;}}
		if(!U::NA($this->_twitterData)){$nodes = $this->_twitterData->GenerateHtmlNodes(); foreach ($nodes as $node) {$res[] = $node;}}
		if(!U::NA($this->_soData)){$nodes = $this->_soData->GenerateHtmlNodes(); foreach ($nodes as $node) {$res[] = $node;}}

		if(!U::NA($this->_description)){$res[] = Html::DescriptionMeta($this->_description);}
		if(!U::NA($this->_keywords)){$res[] = Html::KeywordsMeta($this->_keywords);}
		if(!U::NA($this->_author)){$res[] = Html::AuthorMeta($this->_author);}
		if(!U::NA($this->_generator)){$res[] = Html::GeneratorMeta($this->_generator);}
		if(!U::NA($this->_publisher)){$res[] = Html::PublisherMeta($this->_publisher);}

		if(!U::NA($this->_applicationName)){$res[] = Html::ApplicationNameMeta($this->_applicationName);}
		if(!U::NA($this->_viewport)){$res[] = Html::ViewportMeta($this->_viewport);}

		if(!U::NA($this->_shortcutIcon)){$res[] = Html::ShortcutIcon($this->_shortcutIcon);}
		if(!U::NA($this->_appleTouchIcon)){$res[] = Html::AppleTouchIcon($this->_appleTouchIcon);}

		if(!U::NA($this->_searchUrl)){$res[] = Html::SearchLink($this->_searchUrl);}
		if(!U::NA($this->_editUri)){$res[] = Html::EditUriLink($this->_editUri);}
		if(!U::NA($this->_copyrightUrl)){$res[] = Html::CopyrightLink($this->_copyrightUrl);}
		if(!U::NA($this->_nextUrl)){$res[] = Html::NextLink($this->_nextUrl);}
		if(!U::NA($this->_prevUrl)){$res[] = Html::PrevLink($this->_prevUrl);}
		if(!U::NA($this->_homeUrl)){$res[] = Html::HomeLink($this->_homeUrl);}
		if(!U::NA($this->_firstUrl)){$res[] = Html::FirstLink($this->_firstUrl); $res[] = Html::StartLink($this->_firstUrl);}
		if(!U::NA($this->_lastUrl)){$res[] = Html::LastLink($this->_lastUrl);}
		if(!U::NA($this->_upUrl)){$res[] = Html::UpLink($this->_upUrl);}
		if(!U::NA($this->_indexUrl)){$res[] = Html::IndexLink($this->_indexUrl);}
		if(!U::NA($this->_tocUrl)){$res[] = Html::ContentsLink($this->_tocUrl);}
		if(!U::NA($this->_helpUrl)){$res[] = Html::HelpLink($this->_helpUrl);}
		if(!U::NA($this->_glossaryUrl)){$res[] = Html::GlossaryLink($this->_glossaryUrl);}

		if(!U::NA($this->_rssFeeds)){foreach ($this->_rssFeeds as $href => $title) {$res[] = Html::RssFeedLink($href, $title);}}
		if(!U::NA($this->_atomFeeds)){foreach ($this->_atomFeeds as $href => $title) {$res[] = Html::AtomFeedLink($href, $title);}}
		if(!U::NA($this->_altLangs)){foreach ($this->_altLangs as $href => $hrefLang) {$res[] = Html::AtomFeedLink($href, $hrefLang);}}
		return $res;
	}
	public function GenerateHeadElement($id='', $indentContents=true){
		$res = new HtmlHeadElement($id, $indentContents);
		$nodes = $this->GenerateHtmlNodes();
		foreach ($nodes as $node) {
			$res->AddNode($node);
		}
		return $res;
	}
	public function GenerateDocTypeNode(){
		return new HtmlDocTypeNode($this->_docType);
	}
};
?>