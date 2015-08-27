<?php
namespace Core\UI\BS;
use Core\Enum;
/**
 * A list of the text cases supported by bootstrap formatting classes
 */
class TextCase extends Enum{
	public static $Lower, $Upper, $Capitalize;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Lower = new TextCase('Lower', 'text-lowercase');
		self::$Upper = new TextCase('Upper', 'text-uppercase');
		self::$Capitalize = new TextCase('Capitalize', 'text-capitalize');
	}
};
TextCase::Initialize();
?>