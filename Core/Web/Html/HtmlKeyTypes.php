<?php
final class HtmlKeyTypes extends Enum{
	public static $RSA, $DSA, $EC;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$RSA = new HtmlKeyTypes('RSA', 'rsa');
		self::$DSA = new HtmlKeyTypes('DSA', 'dsa');
		self::$EC = new HtmlKeyTypes('EC', 'ec');
	}
};
HtmlKeyTypes::Initialize();
?>