<?php
final class HtmlScriptTypes extends Enum{
	public static $TxtJavascript, $AppJavascript, $TxtEcmaScript, $AppEcmaScript, $TxtJScript, $TxtPHP, $TxtTCL, $TxtVBScript, $AppXShockwaveFlash;
	
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$TxtJavascript = new HtmlScriptTypes('Text-Javascript', 'text/javascript');
		self::$AppJavascript = new HtmlScriptTypes('Application-Javascript', 'application/javascript');
		self::$TxtEcmaScript = new HtmlScriptTypes('Text-ECMAScript', 'text/ecmascript');
		self::$AppEcmaScript = new HtmlScriptTypes('Application-ECMAScript', 'application/ecmascript');
		self::$TxtJScript = new HtmlScriptTypes('Text-JScript', 'text/jscript');
		self::$TxtPHP = new HtmlScriptTypes('Text-PHP', 'text/php');
		self::$TxtTCL = new HtmlScriptTypes('Text-TCL', 'text/tcl');
		self::$TxtVBScript = new HtmlScriptTypes('Text-VBScript', 'text/vbscript');
		self::$AppXShockwaveFlash = new HtmlScriptTypes('Application-X-Shockwave-Flash', 'application/x-shockwave-flash');
	}
};
HtmlScriptTypes::Initialize();
?>