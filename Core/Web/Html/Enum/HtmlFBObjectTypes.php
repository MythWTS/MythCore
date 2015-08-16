<?php
final class HtmlFBObjectTypes extends Enum{
	public static $Article,$BooksAuthor,$BooksBook,$BooksGenre,$BusinessBusiness,$FitnessCourse,$GameAchievement,$MusicAlbum,
	$MusicPlaylist,$MusicRadioStation,$MusicSong,$Place,$Product,$ProductGroup,$ProductItem,$Profile,$RestaurantMenu,
	$RestaurantMenuItem,$RestaurantMenuSection,$RestaurantRestaurant,$VideoEpisode,$VideoMovie,$VideoOther,$VideoTvShow;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Article = new HtmlFBObjectTypes('Article', 'article');
		self::$BooksAuthor = new HtmlFBObjectTypes('BooksAuthor', 'books.author');
		self::$BooksBook = new HtmlFBObjectTypes('BooksBook', 'books.book');
		self::$BooksGenre = new HtmlFBObjectTypes('BooksGenre', 'books.genre');
		self::$BusinessBusiness = new HtmlFBObjectTypes('BusinessBusiness', 'business.business');
		self::$FitnessCourse = new HtmlFBObjectTypes('FitnessCourse', 'fitness.course');
		self::$GameAchievement = new HtmlFBObjectTypes('GameAchievement', 'game.achievement');
		self::$MusicAlbum = new HtmlFBObjectTypes('MusicAlbum', 'music.album');
		self::$MusicPlaylist = new HtmlFBObjectTypes('MusicPlaylist', 'music.playlist');
		self::$MusicRadioStation = new HtmlFBObjectTypes('MusicRadioStation', 'music.radio_station');
		self::$MusicSong = new HtmlFBObjectTypes('MusicSong', 'music.song');
		self::$Place = new HtmlFBObjectTypes('Place', 'place');
		self::$Product = new HtmlFBObjectTypes('Product', 'product');
		self::$ProductGroup = new HtmlFBObjectTypes('ProductGroup', 'product.group');
		self::$ProductItem = new HtmlFBObjectTypes('ProductItem', 'product.item');
		self::$Profile = new HtmlFBObjectTypes('Profile', 'profile');
		self::$RestaurantMenu = new HtmlFBObjectTypes('RestaurantMenu', 'restaurant.menu');
		self::$RestaurantMenuItem = new HtmlFBObjectTypes('RestaurantMenuItem', 'restaurant.menu_item');
		self::$RestaurantMenuSection = new HtmlFBObjectTypes('RestaurantMenuSection', 'restaurant.menu_section');
		self::$RestaurantRestaurant = new HtmlFBObjectTypes('RestaurantRestaurant', 'restaurant.restaurant');
		self::$VideoEpisode = new HtmlFBObjectTypes('VideoEpisode', 'video.episode');
		self::$VideoMovie = new HtmlFBObjectTypes('VideoMovie', 'video.movie');
		self::$VideoOther = new HtmlFBObjectTypes('VideoOther', 'video.other');
		self::$VideoTvShow = new HtmlFBObjectTypes('VideoTvShow', 'video.tv_show');
	}
};
HtmlFBObjectTypes::Initialize();
?>