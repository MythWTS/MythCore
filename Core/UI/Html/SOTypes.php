<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported Schema.org Types
 */
final class SOTypes extends Enum{
	public static $Article, $Blog, $Book, $Event, $LocalBusiness, $Organization, $Person, $Product, $Review;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Article = new SOTypes('Article', 'http://schema.org/Article');
		self::$Blog = new SOTypes('Blog', 'http://schema.org/Blog');
		self::$Book = new SOTypes('Book', 'http://schema.org/Book');
		self::$Event = new SOTypes('Event', 'http://schema.org/Event');
		self::$LocalBusiness = new SOTypes('LocalBusiness', 'http://schema.org/LocalBusiness');
		self::$Organization = new SOTypes('Organization', 'http://schema.org/Organization');
		self::$Person = new SOTypes('Person', 'http://schema.org/Person');
		self::$Product = new SOTypes('Product', 'http://schema.org/Product');
		self::$Review = new SOTypes('Review', 'http://schema.org/Review');
	}
};
SOTypes::Initialize();
?>