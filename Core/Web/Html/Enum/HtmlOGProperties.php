<?php
final class HtmlOGProperties extends Enum{
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
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Title = new HtmlOGProperties('Title', 'og:title');
		self::$Type = new HtmlOGProperties('Type', 'og:type');
		self::$Image = new HtmlOGProperties('Image', 'og:image');
		self::$Url = new HtmlOGProperties('Url', 'og:url');
		self::$Audio = new HtmlOGProperties('Audio', 'og:audio');
		self::$Description = new HtmlOGProperties('Description', 'og:description');
		self::$Determiner = new HtmlOGProperties('Determiner', 'og:determiner');
		self::$Locale = new HtmlOGProperties('Locale', 'og:locale');
		self::$AlternateLocale = new HtmlOGProperties('AlternateLocale', 'og:locale:alternate');
		self::$SiteName = new HtmlOGProperties('SiteName', 'og:site_name');
		self::$Video = new HtmlOGProperties('Video', 'og:video');

		self::$ImageUrl = new HtmlOGProperties('ImageUrl', 'og:image:url');
		self::$ImageType = new HtmlOGProperties('ImageType', 'og:image:type');
		self::$ImageWidth = new HtmlOGProperties('ImageWidth', 'og:image:width');
		self::$ImageHeight = new HtmlOGProperties('ImageHeight', 'og:image:height');

		self::$VideoUrl = new HtmlOGProperties('VideoUrl', 'og:video:url');
		self::$VideoType = new HtmlOGProperties('VideoType', 'og:video:type');
		self::$VideoWidth = new HtmlOGProperties('VideoWidth', 'og:video:width');
		self::$VideoHeight = new HtmlOGProperties('VideoHeight', 'og:video:height');

		self::$AudioUrl = new HtmlOGProperties('AudioUrl', 'og:audio:url');
		self::$AudioType = new HtmlOGProperties('AudioType', 'og:audio:type');

		self::$MusicDuration = new HtmlOGProperties('MusicDuration', 'og:music:duration');
		self::$MusicAlbum = new HtmlOGProperties('MusicAlbum', 'og:music:album');
		self::$MusicDisc = new HtmlOGProperties('MusicDisc', 'og:music:album:disc');
		self::$MusicTrack = new HtmlOGProperties('MusicTrack', 'og:music:album:track');
		self::$MusicMusician = new HtmlOGProperties('MusicMusician', 'og:music:musician');
		self::$MusicReleaseDate = new HtmlOGProperties('SongReleaseDate', 'og:music:release_date');

		self::$Song = new HtmlOGProperties('Song', 'og:music:song');
		self::$SongDisc = new HtmlOGProperties('SongDisc', 'og:music:song:disc');
		self::$SongTrack = new HtmlOGProperties('SongTrack', 'og:music:song:track');

		self::$VideoActor = new HtmlOGProperties('VideoActor', 'og:video:actor');
		self::$VideoActorRole = new HtmlOGProperties('VideoActorRole', 'og:video:actor:role');
		self::$VideoDirector = new HtmlOGProperties('VideoDirector', 'og:video:director');
		self::$VideoWriter = new HtmlOGProperties('VideoWriter', 'og:video:writer');
		self::$VideoDuration = new HtmlOGProperties('VideoDuration', 'og:video:duration');
		self::$VideoReleaseDate = new HtmlOGProperties('VideoReleaseDate', 'og:video:release_date');
		self::$VideoTag = new HtmlOGProperties('VideoTag', 'og:video:tag');
		self::$VideoSeries = new HtmlOGProperties('VideoSeries', 'og:video:series');

		self::$ArticlePublishedTime = new HtmlOGProperties('ArticlePublishedTime', 'og:article:published_time');
		self::$ArticleModifiedTime = new HtmlOGProperties('ArticleModifiedTime', 'og:article:modified_time');
		self::$ArticleExpirationTime = new HtmlOGProperties('ArticleExpirationTime', 'og:article:expiration_time');
		self::$ArticleAuthor = new HtmlOGProperties('ArticleAuthor', 'og:article:author');
		self::$ArticleSection = new HtmlOGProperties('ArticleSection', 'og:article:section');
		self::$ArticleTag = new HtmlOGProperties('ArticleTag', 'og:article:tag');

		self::$BookAuthor = new HtmlOGProperties('BookAuthor', 'og:book:author');
		self::$BookIsbn = new HtmlOGProperties('BookIsbn', 'og:book:isbn');
		self::$BookReleaseDate = new HtmlOGProperties('BookReleaseDate', 'og:book:release_date');
		self::$BookTag = new HtmlOGProperties('BookTag', 'og:book:tag');

		self::$ProfileFirstName = new HtmlOGProperties('ProfileFirstName', 'og:profile:first_name');
		self::$ProfileLastName = new HtmlOGProperties('ProfileLastName', 'og:profile:last_name');
		self::$ProfileUserName = new HtmlOGProperties('ProfileUserName', 'og:profile:username');
		self::$ProfileGender = new HtmlOGProperties('ProfileGender', 'og:profile:gender');

		self::$Website = new HtmlOGProperties('Website', 'og:website');
	}
};
HtmlOGProperties::Initialize();
?>