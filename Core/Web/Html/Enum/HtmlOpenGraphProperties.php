<?php
final class HtmlOpenGraphProperties extends Enum{
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
		self::$Title = new HtmlOpenGraphProperties('Title', 'og:title');
		self::$Type = new HtmlOpenGraphProperties('Type', 'og:type');
		self::$Image = new HtmlOpenGraphProperties('Image', 'og:image');
		self::$Url = new HtmlOpenGraphProperties('Url', 'og:url');
		self::$Audio = new HtmlOpenGraphProperties('Audio', 'og:audio');
		self::$Description = new HtmlOpenGraphProperties('Description', 'og:description');
		self::$Determiner = new HtmlOpenGraphProperties('Determiner', 'og:determiner');
		self::$Locale = new HtmlOpenGraphProperties('Locale', 'og:locale');
		self::$AlternateLocale = new HtmlOpenGraphProperties('AlternateLocale', 'og:locale:alternate');
		self::$SiteName = new HtmlOpenGraphProperties('SiteName', 'og:site_name');
		self::$Video = new HtmlOpenGraphProperties('Video', 'og:video');

		self::$ImageUrl = new HtmlOpenGraphProperties('ImageUrl', 'og:image:url');
		self::$ImageType = new HtmlOpenGraphProperties('ImageType', 'og:image:type');
		self::$ImageWidth = new HtmlOpenGraphProperties('ImageWidth', 'og:image:width');
		self::$ImageHeight = new HtmlOpenGraphProperties('ImageHeight', 'og:image:height');

		self::$VideoUrl = new HtmlOpenGraphProperties('VideoUrl', 'og:video:url');
		self::$VideoType = new HtmlOpenGraphProperties('VideoType', 'og:video:type');
		self::$VideoWidth = new HtmlOpenGraphProperties('VideoWidth', 'og:video:width');
		self::$VideoHeight = new HtmlOpenGraphProperties('VideoHeight', 'og:video:height');

		self::$AudioUrl = new HtmlOpenGraphProperties('AudioUrl', 'og:audio:url');
		self::$AudioType = new HtmlOpenGraphProperties('AudioType', 'og:audio:type');

		self::$MusicDuration = new HtmlOpenGraphProperties('MusicDuration', 'og:music:duration');
		self::$MusicAlbum = new HtmlOpenGraphProperties('MusicAlbum', 'og:music:album');
		self::$MusicDisc = new HtmlOpenGraphProperties('MusicDisc', 'og:music:album:disc');
		self::$MusicTrack = new HtmlOpenGraphProperties('MusicTrack', 'og:music:album:track');
		self::$MusicMusician = new HtmlOpenGraphProperties('MusicMusician', 'og:music:musician');
		self::$MusicReleaseDate = new HtmlOpenGraphProperties('SongReleaseDate', 'og:music:release_date');

		self::$Song = new HtmlOpenGraphProperties('Song', 'og:music:song');
		self::$SongDisc = new HtmlOpenGraphProperties('SongDisc', 'og:music:song:disc');
		self::$SongTrack = new HtmlOpenGraphProperties('SongTrack', 'og:music:song:track');

		self::$VideoActor = new HtmlOpenGraphProperties('VideoActor', 'og:video:actor');
		self::$VideoActorRole = new HtmlOpenGraphProperties('VideoActorRole', 'og:video:actor:role');
		self::$VideoDirector = new HtmlOpenGraphProperties('VideoDirector', 'og:video:director');
		self::$VideoWriter = new HtmlOpenGraphProperties('VideoWriter', 'og:video:writer');
		self::$VideoDuration = new HtmlOpenGraphProperties('VideoDuration', 'og:video:duration');
		self::$VideoReleaseDate = new HtmlOpenGraphProperties('VideoReleaseDate', 'og:video:release_date');
		self::$VideoTag = new HtmlOpenGraphProperties('VideoTag', 'og:video:tag');
		self::$VideoSeries = new HtmlOpenGraphProperties('VideoSeries', 'og:video:series');

		self::$ArticlePublishedTime = new HtmlOpenGraphProperties('ArticlePublishedTime', 'og:article:published_time');
		self::$ArticleModifiedTime = new HtmlOpenGraphProperties('ArticleModifiedTime', 'og:article:modified_time');
		self::$ArticleExpirationTime = new HtmlOpenGraphProperties('ArticleExpirationTime', 'og:article:expiration_time');
		self::$ArticleAuthor = new HtmlOpenGraphProperties('ArticleAuthor', 'og:article:author');
		self::$ArticleSection = new HtmlOpenGraphProperties('ArticleSection', 'og:article:section');
		self::$ArticleTag = new HtmlOpenGraphProperties('ArticleTag', 'og:article:tag');

		self::$BookAuthor = new HtmlOpenGraphProperties('BookAuthor', 'og:book:author');
		self::$BookIsbn = new HtmlOpenGraphProperties('BookIsbn', 'og:book:isbn');
		self::$BookReleaseDate = new HtmlOpenGraphProperties('BookReleaseDate', 'og:book:release_date');
		self::$BookTag = new HtmlOpenGraphProperties('BookTag', 'og:book:tag');

		self::$ProfileFirstName = new HtmlOpenGraphProperties('ProfileFirstName', 'og:profile:first_name');
		self::$ProfileLastName = new HtmlOpenGraphProperties('ProfileLastName', 'og:profile:last_name');
		self::$ProfileUserName = new HtmlOpenGraphProperties('ProfileUserName', 'og:profile:username');
		self::$ProfileGender = new HtmlOpenGraphProperties('ProfileGender', 'og:profile:gender');

		self::$Website = new HtmlOpenGraphProperties('Website', 'og:website');
	}
};
HtmlOpenGraphProperties::Initialize();
?>