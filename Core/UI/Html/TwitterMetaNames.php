<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported values for the "name" attribute of "meta" html elements to add twitter card meta data
 */
final class TwitterMetaNames extends Enum{
	public static $Card, $Site, $SiteId, $Creator, $CreatorId, 
					$Description, $Title, $Image,
					$Player, $PlayerWidth, $PlayerHeight, $PlayerStream,
					$AppIPhoneName, $AppIPhoneId, $AppIPhoneUrl,
					$AppIPadName, $AppIPadId, $AppIPadUrl,
					$AppGooglePlayName, $AppGooglePlayId, $AppGooglePlayUrl;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Card = new TwitterMetaNames('TwitterCard', 'twitter:card');
		self::$Site = new TwitterMetaNames('TwitterSite', 'twitter:site');
		self::$SiteId = new TwitterMetaNames('TwitterSiteId', 'twitter:site:id');
		self::$Creator = new TwitterMetaNames('TwitterCreator', 'twitter:creator');
		self::$CreatorId	 = new TwitterMetaNames('TwitterCreatorId', 'twitter:creator:id');
		self::$Description = new TwitterMetaNames('TwitterDescription', 'twitter:description');
		self::$Title = new TwitterMetaNames('TwitterTitle', 'twitter:title');
		self::$Image = new TwitterMetaNames('TwitterImage', 'twitter:image');
		self::$Player = new TwitterMetaNames('TwitterPlayer', 'twitter:player');
		self::$PlayerWidth = new TwitterMetaNames('TwitterPlayerWidth', 'twitter:player:width');
		self::$PlayerHeight = new TwitterMetaNames('TwitterPlayerHeight', 'twitter:player:height');
		self::$PlayerStream = new TwitterMetaNames('TwitterPlayerStream', 'twitter:player:stream');
		self::$AppIPhoneName = new TwitterMetaNames('TwitterAppIPhoneName', 'twitter:app:name:iphone');
		self::$AppIPhoneId = new TwitterMetaNames('TwitterAppIPhoneId', 'twitter:app:id:iphone');
		self::$AppIPhoneUrl = new TwitterMetaNames('TwitterAppIPhoneUrl', 'twitter:app:url:iphone');
		self::$AppIPadName = new TwitterMetaNames('TwitterAppIPadName', 'twitter:app:name:ipad');
		self::$AppIPadId = new TwitterMetaNames('TwitterAppIPadId', 'twitter:app:id:ipad');
		self::$AppIPadUrl = new TwitterMetaNames('TwitterAppIPadUrl', 'twitter:app:url:ipad');
		self::$AppGooglePlayName = new TwitterMetaNames('TwitterAppGooglePlayName', 'twitter:app:name:googleplay');
		self::$AppGooglePlayId = new TwitterMetaNames('TwitterAppGooglePlayId', 'twitter:app:id:googleplay');
		self::$AppGooglePlayUrl = new TwitterMetaNames('TwitterAppGooglePlayUrl', 'twitter:app:url:googleplay');
	}
};
TwitterMetaNames::Initialize();
?>