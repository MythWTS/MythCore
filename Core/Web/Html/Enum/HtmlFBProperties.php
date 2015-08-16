<?php
final class HtmlFBProperties extends Enum{
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
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Title = new HtmlFBProperties('Title', 'og:title');
		self::$Type = new HtmlFBProperties('Type', 'og:type');
		self::$Image = new HtmlFBProperties('Image', 'og:image');
		self::$Url = new HtmlFBProperties('Url', 'og:url');
		self::$Audio = new HtmlFBProperties('Audio', 'og:audio');
		self::$Description = new HtmlFBProperties('Description', 'og:description');
		self::$Determiner = new HtmlFBProperties('Determiner', 'og:determiner');
		self::$Locale = new HtmlFBProperties('Locale', 'og:locale');
		self::$AlternateLocale = new HtmlFBProperties('AlternateLocale', 'og:locale:alternate');
		self::$SiteName = new HtmlFBProperties('SiteName', 'og:site_name');
		self::$Video = new HtmlFBProperties('Video', 'og:video');

		self::$ImageUrl = new HtmlFBProperties('ImageUrl', 'og:image:url');
		self::$ImageType = new HtmlFBProperties('ImageType', 'og:image:type');
		self::$ImageWidth = new HtmlFBProperties('ImageWidth', 'og:image:width');
		self::$ImageHeight = new HtmlFBProperties('ImageHeight', 'og:image:height');

		self::$VideoUrl = new HtmlFBProperties('VideoUrl', 'og:video:url');
		self::$VideoType = new HtmlFBProperties('VideoType', 'og:video:type');
		self::$VideoWidth = new HtmlFBProperties('VideoWidth', 'og:video:width');
		self::$VideoHeight = new HtmlFBProperties('VideoHeight', 'og:video:height');

		self::$AudioUrl = new HtmlFBProperties('AudioUrl', 'og:audio:url');
		self::$AudioType = new HtmlFBProperties('AudioType', 'og:audio:type');

		self::$MusicDuration = new HtmlFBProperties('MusicDuration', 'og:music:duration');
		self::$MusicAlbum = new HtmlFBProperties('MusicAlbum', 'og:music:album');
		self::$MusicDisc = new HtmlFBProperties('MusicDisc', 'og:music:album:disc');
		self::$MusicTrack = new HtmlFBProperties('MusicTrack', 'og:music:album:track');
		self::$MusicMusician = new HtmlFBProperties('MusicMusician', 'og:music:musician');
		self::$MusicReleaseDate = new HtmlFBProperties('SongReleaseDate', 'og:music:release_date');

		self::$Song = new HtmlFBProperties('Song', 'og:music:song');
		self::$SongDisc = new HtmlFBProperties('SongDisc', 'og:music:song:disc');
		self::$SongTrack = new HtmlFBProperties('SongTrack', 'og:music:song:track');

		self::$VideoActor = new HtmlFBProperties('VideoActor', 'og:video:actor');
		self::$VideoActorRole = new HtmlFBProperties('VideoActorRole', 'og:video:actor:role');
		self::$VideoDirector = new HtmlFBProperties('VideoDirector', 'og:video:director');
		self::$VideoWriter = new HtmlFBProperties('VideoWriter', 'og:video:writer');
		self::$VideoDuration = new HtmlFBProperties('VideoDuration', 'og:video:duration');
		self::$VideoReleaseDate = new HtmlFBProperties('VideoReleaseDate', 'og:video:release_date');
		self::$VideoTag = new HtmlFBProperties('VideoTag', 'og:video:tag');
		self::$VideoSeries = new HtmlFBProperties('VideoSeries', 'og:video:series');

		self::$ArticlePublishedTime = new HtmlFBProperties('ArticlePublishedTime', 'og:article:published_time');
		self::$ArticleModifiedTime = new HtmlFBProperties('ArticleModifiedTime', 'og:article:modified_time');
		self::$ArticleExpirationTime = new HtmlFBProperties('ArticleExpirationTime', 'og:article:expiration_time');
		self::$ArticleAuthor = new HtmlFBProperties('ArticleAuthor', 'og:article:author');
		self::$ArticleSection = new HtmlFBProperties('ArticleSection', 'og:article:section');
		self::$ArticleTag = new HtmlFBProperties('ArticleTag', 'og:article:tag');

		self::$BookAuthor = new HtmlFBProperties('BookAuthor', 'og:book:author');
		self::$BookIsbn = new HtmlFBProperties('BookIsbn', 'og:book:isbn');
		self::$BookReleaseDate = new HtmlFBProperties('BookReleaseDate', 'og:book:release_date');
		self::$BookTag = new HtmlFBProperties('BookTag', 'og:book:tag');

		self::$ProfileFirstName = new HtmlFBProperties('ProfileFirstName', 'og:profile:first_name');
		self::$ProfileLastName = new HtmlFBProperties('ProfileLastName', 'og:profile:last_name');
		self::$ProfileUserName = new HtmlFBProperties('ProfileUserName', 'og:profile:username');
		self::$ProfileGender = new HtmlFBProperties('ProfileGender', 'og:profile:gender');

		self::$Website = new HtmlFBProperties('Website', 'og:website');
		
		self::$Admins = new HtmlFBProperties('Admins', 'fb:admins');
		self::$AppId = new HtmlFBProperties('AppId', 'fb:app_id');
	}
};
HtmlFBProperties::Initialize();
?>