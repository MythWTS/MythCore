<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Facebook Object-Types enumeration. Lists the avaialable open graph objects and their values in meta tags
 */
final class FBObjectTypes extends Enum{
	public static $Article,$BooksAuthor,$BooksBook,$BooksGenre,$BusinessBusiness,$FitnessCourse,$GameAchievement,$MusicAlbum,
	$MusicPlaylist,$MusicRadioStation,$MusicSong,$Place,$Product,$ProductGroup,$ProductItem,$Profile,$RestaurantMenu,
	$RestaurantMenuItem,$RestaurantMenuSection,$RestaurantRestaurant,$VideoEpisode,$VideoMovie,$VideoOther,$VideoTvShow;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Article = new FBObjectTypes('Article', 'article');
		self::$BooksAuthor = new FBObjectTypes('BooksAuthor', 'books.author');
		self::$BooksBook = new FBObjectTypes('BooksBook', 'books.book');
		self::$BooksGenre = new FBObjectTypes('BooksGenre', 'books.genre');
		self::$BusinessBusiness = new FBObjectTypes('BusinessBusiness', 'business.business');
		self::$FitnessCourse = new FBObjectTypes('FitnessCourse', 'fitness.course');
		self::$GameAchievement = new FBObjectTypes('GameAchievement', 'game.achievement');
		self::$MusicAlbum = new FBObjectTypes('MusicAlbum', 'music.album');
		self::$MusicPlaylist = new FBObjectTypes('MusicPlaylist', 'music.playlist');
		self::$MusicRadioStation = new FBObjectTypes('MusicRadioStation', 'music.radio_station');
		self::$MusicSong = new FBObjectTypes('MusicSong', 'music.song');
		self::$Place = new FBObjectTypes('Place', 'place');
		self::$Product = new FBObjectTypes('Product', 'product');
		self::$ProductGroup = new FBObjectTypes('ProductGroup', 'product.group');
		self::$ProductItem = new FBObjectTypes('ProductItem', 'product.item');
		self::$Profile = new FBObjectTypes('Profile', 'profile');
		self::$RestaurantMenu = new FBObjectTypes('RestaurantMenu', 'restaurant.menu');
		self::$RestaurantMenuItem = new FBObjectTypes('RestaurantMenuItem', 'restaurant.menu_item');
		self::$RestaurantMenuSection = new FBObjectTypes('RestaurantMenuSection', 'restaurant.menu_section');
		self::$RestaurantRestaurant = new FBObjectTypes('RestaurantRestaurant', 'restaurant.restaurant');
		self::$VideoEpisode = new FBObjectTypes('VideoEpisode', 'video.episode');
		self::$VideoMovie = new FBObjectTypes('VideoMovie', 'video.movie');
		self::$VideoOther = new FBObjectTypes('VideoOther', 'video.other');
		self::$VideoTvShow = new FBObjectTypes('VideoTvShow', 'video.tv_show');
	}
};
FBObjectTypes::Initialize();
?>