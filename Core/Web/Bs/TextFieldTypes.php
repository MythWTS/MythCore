<?php
namespace Core\Web\Bs;
class TextFieldTypes extends \Enum{
	public static 
		$Color, $Date, $DateTime, $DateTimeLocal, $Email, $Month, $Number,
		$Password, $Search, $Tel, $Text, $Time, $Url, $Week, $Range, $Multiline;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Color = new TextFieldTypes('Color', 'color');
		self::$Date = new TextFieldTypes('Date', 'date');
		self::$DateTime = new TextFieldTypes('DateTime', 'datetime');
		self::$DateTimeLocal = new TextFieldTypes('DateTimeLocal', 'datetime-local');
		self::$Email = new TextFieldTypes('Email', 'email');
		self::$Month = new TextFieldTypes('Month', 'month');
		self::$Number = new TextFieldTypes('Number', 'number');
		self::$Password = new TextFieldTypes('Password', 'password');
		self::$Search = new TextFieldTypes('Search', 'search');
		self::$Tel = new TextFieldTypes('Tel', 'tel');
		self::$Text = new TextFieldTypes('Text', 'text');
		self::$Time = new TextFieldTypes('Time', 'time');
		self::$Url = new TextFieldTypes('Url', 'url');
		self::$Week = new TextFieldTypes('Week', 'week');
		self::$Range = new TextFieldTypes('Range', 'range');
		self::$Multiline = new TextFieldTypes('Multiline', 'textarea');
	}
};
TextFieldTypes::Initialize();
?>