<?php
final class HtmlTwitterMetaNames extends Enum{
	public static $Card, $Site, $SiteId, $Creator, $CreatorId, 
					$Description, $Title, $Image,
					$Player, $PlayerWidth, $PlayerHeight, $PlayerStream,
					$AppIPhoneName, $AppIPhoneId, $AppIPhoneUrl,
					$AppIPadName, $AppIPadId, $AppIPadUrl,
					$AppGooglePlayName, $AppGooglePlayId, $AppGooglePlayUrl;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Card = new HtmlTwitterMetaNames('TwitterCard', 'twitter:card');
		self::$Site = new HtmlTwitterMetaNames('TwitterSite', 'twitter:site');
		self::$SiteId = new HtmlTwitterMetaNames('TwitterSiteId', 'twitter:site:id');
		self::$Creator = new HtmlTwitterMetaNames('TwitterCreator', 'twitter:creator');
		self::$CreatorId	 = new HtmlTwitterMetaNames('TwitterCreatorId', 'twitter:creator:id');
		self::$Description = new HtmlTwitterMetaNames('TwitterDescription', 'twitter:description');
		self::$Title = new HtmlTwitterMetaNames('TwitterTitle', 'twitter:title');
		self::$Image = new HtmlTwitterMetaNames('TwitterImage', 'twitter:image');
		self::$Player = new HtmlTwitterMetaNames('TwitterPlayer', 'twitter:player');
		self::$PlayerWidth = new HtmlTwitterMetaNames('TwitterPlayerWidth', 'twitter:player:width');
		self::$PlayerHeight = new HtmlTwitterMetaNames('TwitterPlayerHeight', 'twitter:player:height');
		self::$PlayerStream = new HtmlTwitterMetaNames('TwitterPlayerStream', 'twitter:player:stream');
		self::$AppIPhoneName = new HtmlTwitterMetaNames('TwitterAppIPhoneName', 'twitter:app:name:iphone');
		self::$AppIPhoneId = new HtmlTwitterMetaNames('TwitterAppIPhoneId', 'twitter:app:id:iphone');
		self::$AppIPhoneUrl = new HtmlTwitterMetaNames('TwitterAppIPhoneUrl', 'twitter:app:url:iphone');
		self::$AppIPadName = new HtmlTwitterMetaNames('TwitterAppIPadName', 'twitter:app:name:ipad');
		self::$AppIPadId = new HtmlTwitterMetaNames('TwitterAppIPadId', 'twitter:app:id:ipad');
		self::$AppIPadUrl = new HtmlTwitterMetaNames('TwitterAppIPadUrl', 'twitter:app:url:ipad');
		self::$AppGooglePlayName = new HtmlTwitterMetaNames('TwitterAppGooglePlayName', 'twitter:app:name:googleplay');
		self::$AppGooglePlayId = new HtmlTwitterMetaNames('TwitterAppGooglePlayId', 'twitter:app:id:googleplay');
		self::$AppGooglePlayUrl = new HtmlTwitterMetaNames('TwitterAppGooglePlayUrl', 'twitter:app:url:googleplay');
	}
};
HtmlTwitterMetaNames::Initialize();
?>