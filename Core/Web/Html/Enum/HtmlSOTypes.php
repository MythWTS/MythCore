<?php
final class HtmlSOTypes extends Enum{
	public static $Article, $Blog, $Book, $Event, $LocalBusiness, $Organization, $Person, $Product, $Review;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Article = new HtmlSOTypes('Article', 'http://schema.org/Article');
		self::$Blog = new HtmlSOTypes('Blog', 'http://schema.org/Blog');
		self::$Book = new HtmlSOTypes('Book', 'http://schema.org/Book');
		self::$Event = new HtmlSOTypes('Event', 'http://schema.org/Event');
		self::$LocalBusiness = new HtmlSOTypes('LocalBusiness', 'http://schema.org/LocalBusiness');
		self::$Organization = new HtmlSOTypes('Organization', 'http://schema.org/Organization');
		self::$Person = new HtmlSOTypes('Person', 'http://schema.org/Person');
		self::$Product = new HtmlSOTypes('Product', 'http://schema.org/Product');
		self::$Review = new HtmlSOTypes('Review', 'http://schema.org/Review');
	}
};
HtmlSOTypes::Initialize();
?>