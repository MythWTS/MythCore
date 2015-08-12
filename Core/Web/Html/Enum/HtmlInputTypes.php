<?php
final class HtmlInputTypes extends Enum{
	public static
		$Button,$Checkbox,$Color,$Date,$DateTime,$DateTimeLocal,$Email,$File,$Hidden,$Image,$Month,$Number,$Password,$Radio,$Range,$Reset,
		$Search,$Submit,$Tel,$Text,$Time,$Url,$Week;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Button = new HtmlInputTypes('Button', 'button');
		self::$Checkbox = new HtmlInputTypes('Checkbox', 'checkbox');
		self::$Color = new HtmlInputTypes('Color', 'color');
		self::$Date = new HtmlInputTypes('Date', 'date');
		self::$DateTime = new HtmlInputTypes('DateTime', 'datetime');
		self::$DateTimeLocal = new HtmlInputTypes('DateTimeLocal', 'datetime-local');
		self::$Email = new HtmlInputTypes('Email', 'email');
		self::$File = new HtmlInputTypes('File', 'file');
		self::$Hidden = new HtmlInputTypes('Hidden', 'hidden');
		self::$Image = new HtmlInputTypes('Image', 'image');
		self::$Month = new HtmlInputTypes('Month', 'month');
		self::$Number = new HtmlInputTypes('Number', 'number');
		self::$Password = new HtmlInputTypes('Password', 'password');
		self::$Radio = new HtmlInputTypes('Radio', 'radio');
		self::$Range = new HtmlInputTypes('Range', 'range');
		self::$Reset = new HtmlInputTypes('Reset', 'reset');
		self::$Search = new HtmlInputTypes('Search', 'search');
		self::$Submit = new HtmlInputTypes('Submit', 'submit');
		self::$Tel = new HtmlInputTypes('Tel', 'tel');
		self::$Text = new HtmlInputTypes('Text', 'text');
		self::$Time = new HtmlInputTypes('Time', 'time');
		self::$Url = new HtmlInputTypes('Url', 'url');
		self::$Week = new HtmlInputTypes('Week', 'week');
	}
};
HtmlInputTypes::Initialize();
?>