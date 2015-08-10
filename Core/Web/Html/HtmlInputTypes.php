<?php
final class HtmlInputTypes extends Enum{
	public static
		$Button,$Checkbox,$Color,$Date,$DateTime,$DateTimeLocal,$Email,$File,$Hidden,$Image,$Month,$Number,$Password,$Radio,$Range,$Reset,
		$Search,$Submit,$Tel,$Text,$Time,$Url,$Week;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Button = new Html5Tags('Button', 'button');
		self::$Checkbox = new Html5Tags('Checkbox', 'checkbox');
		self::$Color = new Html5Tags('Color', 'color');
		self::$Date = new Html5Tags('Date', 'date');
		self::$DateTime = new Html5Tags('DateTime', 'datetime');
		self::$DateTimeLocal = new Html5Tags('DateTimeLocal', 'datetime-local');
		self::$Email = new Html5Tags('Email', 'email');
		self::$File = new Html5Tags('File', 'file');
		self::$Hidden = new Html5Tags('Hidden', 'hidden');
		self::$Image = new Html5Tags('Image', 'image');
		self::$Month = new Html5Tags('Month', 'month');
		self::$Number = new Html5Tags('Number', 'number');
		self::$Password = new Html5Tags('Password', 'password');
		self::$Radio = new Html5Tags('Radio', 'radio');
		self::$Range = new Html5Tags('Range', 'range');
		self::$Reset = new Html5Tags('Reset', 'reset');
		self::$Search = new Html5Tags('Search', 'search');
		self::$Submit = new Html5Tags('Submit', 'submit');
		self::$Tel = new Html5Tags('Tel', 'tel');
		self::$Text = new Html5Tags('Text', 'text');
		self::$Time = new Html5Tags('Time', 'time');
		self::$Url = new Html5Tags('Url', 'url');
		self::$Week = new Html5Tags('Week', 'week');
	}
};
HtmlInputTypes::Initialize();
?>