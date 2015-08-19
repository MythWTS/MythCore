<?php
namespace Core\Web\Bs;
class FormState extends \Enum{
	public static $Success, $Warning, $Error;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Success = new FormState('Success', 'has-success');
		self::$Warning = new FormState('Warning', 'has-warning');
		self::$Error = new FormState('Error', 'has-error');
	}
};
FormState::Initialize();
?>