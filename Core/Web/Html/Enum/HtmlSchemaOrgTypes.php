<?php
final class HtmlSchemaOrgTypes extends Enum{
	public static $Article, $Blog, $Book, $Event, $LocalBusiness, $Organization, $Person, $Product, $Review;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Article = new HtmlSchemaOrgTypes('Article', 'http://schema.org/Article');
		self::$Blog = new HtmlSchemaOrgTypes('Blog', 'http://schema.org/Blog');
		self::$Book = new HtmlSchemaOrgTypes('Book', 'http://schema.org/Book');
		self::$Event = new HtmlSchemaOrgTypes('Event', 'http://schema.org/Event');
		self::$LocalBusiness = new HtmlSchemaOrgTypes('LocalBusiness', 'http://schema.org/LocalBusiness');
		self::$Organization = new HtmlSchemaOrgTypes('Organization', 'http://schema.org/Organization');
		self::$Person = new HtmlSchemaOrgTypes('Person', 'http://schema.org/Person');
		self::$Product = new HtmlSchemaOrgTypes('Product', 'http://schema.org/Product');
		self::$Review = new HtmlSchemaOrgTypes('Review', 'http://schema.org/Review');
	}
};
HtmlSchemaOrgTypes::Initialize();
?>