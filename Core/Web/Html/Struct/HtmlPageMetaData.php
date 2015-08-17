<?php
class HtmlPageMetaData extends Object{
	protected $_docType, $_charset;
	protected $_fbData, $_twitterData, $_soData;
	protected $_title, $_description, $_keywords, $_author, $_generator, $_publisher;
	protected $_rssFeeds, $_atomFeeds, $_altLangs;
	protected $_searchUrl, $_editUrl, $_copyrightUrl;
	protected $_nextUrl, $_prevUrl, $_homeUrl, $_firstUrl, $_lastUrl, $_upUrl;
	protected $_mediaType, $_applicationType, $_viewport;
	public function __construct(){
		$this->_docType = HtmlDocTypes::$Html5; $this->_charset = 'UTF-8';
		$this->_fbData = new HtmlFBMetaData();
		$this->_twitterData = new HtmlTwitterCard();
		$this->_soData = new HtmlSOMetaData();
		$this->_title = $this->_description = $this->_keywords = $this->_author = $this->_generator = $this->_publisher =
			$this->_searchUrl = $this->_editUrl = $this->_copyrightUrl =
			$this->_nextUrl = $this->_prevUrl = $this->_homeUrl = $this->_firstUrl = $this->_lastUrl= $this->_upUrl =
			$this->_applicationType = '';
		$this->_viewport = ''; $this->_mediaType = 'text/html';
		$this->_rssFeeds = array(); $this->_atomFeeds = array(); $this->_altLangs = array();
	}
};
?>