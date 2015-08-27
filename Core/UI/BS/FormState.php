<?php
namespace Core\UI\BS;
use Core\Enum;
/**
 * A list of html form states supported by the bootstrap formatting classes
 */
class FormState extends Enum{
	public static $Success, $Warning, $Error;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Success = new FormState('Success', 'has-success');
		self::$Warning = new FormState('Warning', 'has-warning');
		self::$Error = new FormState('Error', 'has-error');
	}
};
FormState::Initialize();
?>