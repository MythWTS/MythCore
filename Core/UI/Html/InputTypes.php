<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Lists the supported types of input (the value of the "type" attribute of an "input" html element)
 */
final class InputTypes extends Enum{
	public static
		$Button,$Checkbox,$Color,$Date,$DateTime,$DateTimeLocal,$Email,$File,$Hidden,$Image,$Month,$Number,$Password,$Radio,$Range,$Reset,
		$Search,$Submit,$Tel,$Text,$Time,$Url,$Week;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Button = new InputTypes('Button', 'button');
		self::$Checkbox = new InputTypes('Checkbox', 'checkbox');
		self::$Color = new InputTypes('Color', 'color');
		self::$Date = new InputTypes('Date', 'date');
		self::$DateTime = new InputTypes('DateTime', 'datetime');
		self::$DateTimeLocal = new InputTypes('DateTimeLocal', 'datetime-local');
		self::$Email = new InputTypes('Email', 'email');
		self::$File = new InputTypes('File', 'file');
		self::$Hidden = new InputTypes('Hidden', 'hidden');
		self::$Image = new InputTypes('Image', 'image');
		self::$Month = new InputTypes('Month', 'month');
		self::$Number = new InputTypes('Number', 'number');
		self::$Password = new InputTypes('Password', 'password');
		self::$Radio = new InputTypes('Radio', 'radio');
		self::$Range = new InputTypes('Range', 'range');
		self::$Reset = new InputTypes('Reset', 'reset');
		self::$Search = new InputTypes('Search', 'search');
		self::$Submit = new InputTypes('Submit', 'submit');
		self::$Tel = new InputTypes('Tel', 'tel');
		self::$Text = new InputTypes('Text', 'text');
		self::$Time = new InputTypes('Time', 'time');
		self::$Url = new InputTypes('Url', 'url');
		self::$Week = new InputTypes('Week', 'week');
	}
};
InputTypes::Initialize();
?>