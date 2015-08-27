<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported values for the "type" attribute of  "script" html element
 */
final class ScriptTypes extends Enum{
	public static $TxtJavascript, $AppJavascript, $TxtEcmaScript, $AppEcmaScript, $TxtJScript, $TxtPHP, $TxtTCL, $TxtVBScript, $AppXShockwaveFlash;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$TxtJavascript = new ScriptTypes('Text-Javascript', 'text/javascript');
		self::$AppJavascript = new ScriptTypes('Application-Javascript', 'application/javascript');
		self::$TxtEcmaScript = new ScriptTypes('Text-ECMAScript', 'text/ecmascript');
		self::$AppEcmaScript = new ScriptTypes('Application-ECMAScript', 'application/ecmascript');
		self::$TxtJScript = new ScriptTypes('Text-JScript', 'text/jscript');
		self::$TxtPHP = new ScriptTypes('Text-PHP', 'text/php');
		self::$TxtTCL = new ScriptTypes('Text-TCL', 'text/tcl');
		self::$TxtVBScript = new ScriptTypes('Text-VBScript', 'text/vbscript');
		self::$AppXShockwaveFlash = new ScriptTypes('Application-X-Shockwave-Flash', 'application/x-shockwave-flash');
	}
};
ScriptTypes::Initialize();
?>