<?php
class HtmlPageMetaData extends Object{
	############################################################################
	# Protected Fields
	############################################################################
	protected $_docType, $_charset;
	protected $_fbData, $_twitterData, $_soData;
	protected $_title, $_description, $_keywords, $_author, $_generator, $_publisher;
	protected $_rssFeeds, $_atomFeeds, $_altLangs;
	protected $_searchUrl, $_editUrl, $_copyrightUrl;
	protected $_nextUrl, $_prevUrl, $_homeUrl, $_firstUrl, $_lastUrl, $_upUrl, $_appendixUrl, $_tocUrl;
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
			$this->_searchUrl = $this->_editUrl = $this->_copyrightUrl =
			$this->_nextUrl = $this->_prevUrl = $this->_homeUrl = $this->_firstUrl = $this->_lastUrl= $this->_upUrl =
			$this->_appendixUrl = $this->_tocUrl = $this->_applicationName = '';
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
	public function EditUrl($value=null){
		if($value === null){return $this->_editUrl;}
		else{$this->_editUrl = U::ES($value);}
	}
	public function CopyrightUrl($value=null){
		if($value === null){return $this->_copyrightUrl;}
		else{$this->_copyrightUrl = U::ES($value);}
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
	public function AppendixUrl($value=null){
		if($value === null){return $this->_appendixUrl;}
		else{$this->_appendixUrl = U::ES($value);}
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
};
?>