<?php
namespace Core\UI\Html;
use Core\Enum;
/** Facebook Open Graph protocol properties. @see http://ogp.me/*/
final class FBProperties extends Enum{
	public static $Title, $Type, $Image, $Url, $Audio, $Description, $Determiner, $Locale, $AlternateLocale, $SiteName, $Video;
	public static $ImageUrl, $ImageType, $ImageWidth, $ImageHeight,
					$VideoUrl, $VideoType, $VideoWidth, $VideoHeight,
					$AudioUrl, $AudioType;
	public static $MusicDuration, $MusicAlbum, $MusicDisc, $MusicTrack, $MusicMusician, $MusicReleaseDate;
	public static $Song, $SongDisc, $SongTrack;
	public static $VideoActor, $VideoActorRole, $VideoDirector, $VideoWriter, $VideoDuration, $VideoReleaseDate, $VideoTag, $VideoSeries;
	public static $ArticlePublishedTime, $ArticleModifiedTime, $ArticleExpirationTime, $ArticleAuthor, $ArticleSection, $ArticleTag;
	public static $BookAuthor, $BookIsbn, $BookReleaseDate, $BookTag;
	public static $ProfileFirstName, $ProfileLastName, $ProfileUserName, $ProfileGender;
	public static $Website;
	public static $Admins, $AppId;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Title = new FBProperties('Title', 'og:title');
		self::$Type = new FBProperties('Type', 'og:type');
		self::$Image = new FBProperties('Image', 'og:image');
		self::$Url = new FBProperties('Url', 'og:url');
		self::$Audio = new FBProperties('Audio', 'og:audio');
		self::$Description = new FBProperties('Description', 'og:description');
		self::$Determiner = new FBProperties('Determiner', 'og:determiner');
		self::$Locale = new FBProperties('Locale', 'og:locale');
		self::$AlternateLocale = new FBProperties('AlternateLocale', 'og:locale:alternate');
		self::$SiteName = new FBProperties('SiteName', 'og:site_name');
		self::$Video = new FBProperties('Video', 'og:video');

		self::$ImageUrl = new FBProperties('ImageUrl', 'og:image:url');
		self::$ImageType = new FBProperties('ImageType', 'og:image:type');
		self::$ImageWidth = new FBProperties('ImageWidth', 'og:image:width');
		self::$ImageHeight = new FBProperties('ImageHeight', 'og:image:height');

		self::$VideoUrl = new FBProperties('VideoUrl', 'og:video:url');
		self::$VideoType = new FBProperties('VideoType', 'og:video:type');
		self::$VideoWidth = new FBProperties('VideoWidth', 'og:video:width');
		self::$VideoHeight = new FBProperties('VideoHeight', 'og:video:height');

		self::$AudioUrl = new FBProperties('AudioUrl', 'og:audio:url');
		self::$AudioType = new FBProperties('AudioType', 'og:audio:type');

		self::$MusicDuration = new FBProperties('MusicDuration', 'og:music:duration');
		self::$MusicAlbum = new FBProperties('MusicAlbum', 'og:music:album');
		self::$MusicDisc = new FBProperties('MusicDisc', 'og:music:album:disc');
		self::$MusicTrack = new FBProperties('MusicTrack', 'og:music:album:track');
		self::$MusicMusician = new FBProperties('MusicMusician', 'og:music:musician');
		self::$MusicReleaseDate = new FBProperties('SongReleaseDate', 'og:music:release_date');

		self::$Song = new FBProperties('Song', 'og:music:song');
		self::$SongDisc = new FBProperties('SongDisc', 'og:music:song:disc');
		self::$SongTrack = new FBProperties('SongTrack', 'og:music:song:track');

		self::$VideoActor = new FBProperties('VideoActor', 'og:video:actor');
		self::$VideoActorRole = new FBProperties('VideoActorRole', 'og:video:actor:role');
		self::$VideoDirector = new FBProperties('VideoDirector', 'og:video:director');
		self::$VideoWriter = new FBProperties('VideoWriter', 'og:video:writer');
		self::$VideoDuration = new FBProperties('VideoDuration', 'og:video:duration');
		self::$VideoReleaseDate = new FBProperties('VideoReleaseDate', 'og:video:release_date');
		self::$VideoTag = new FBProperties('VideoTag', 'og:video:tag');
		self::$VideoSeries = new FBProperties('VideoSeries', 'og:video:series');

		self::$ArticlePublishedTime = new FBProperties('ArticlePublishedTime', 'og:article:published_time');
		self::$ArticleModifiedTime = new FBProperties('ArticleModifiedTime', 'og:article:modified_time');
		self::$ArticleExpirationTime = new FBProperties('ArticleExpirationTime', 'og:article:expiration_time');
		self::$ArticleAuthor = new FBProperties('ArticleAuthor', 'og:article:author');
		self::$ArticleSection = new FBProperties('ArticleSection', 'og:article:section');
		self::$ArticleTag = new FBProperties('ArticleTag', 'og:article:tag');

		self::$BookAuthor = new FBProperties('BookAuthor', 'og:book:author');
		self::$BookIsbn = new FBProperties('BookIsbn', 'og:book:isbn');
		self::$BookReleaseDate = new FBProperties('BookReleaseDate', 'og:book:release_date');
		self::$BookTag = new FBProperties('BookTag', 'og:book:tag');

		self::$ProfileFirstName = new FBProperties('ProfileFirstName', 'og:profile:first_name');
		self::$ProfileLastName = new FBProperties('ProfileLastName', 'og:profile:last_name');
		self::$ProfileUserName = new FBProperties('ProfileUserName', 'og:profile:username');
		self::$ProfileGender = new FBProperties('ProfileGender', 'og:profile:gender');

		self::$Website = new FBProperties('Website', 'og:website');
		
		self::$Admins = new FBProperties('Admins', 'fb:admins');
		self::$AppId = new FBProperties('AppId', 'fb:app_id');
	}
};
FBProperties::Initialize();
?>