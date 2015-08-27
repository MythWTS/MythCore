<?php
namespace Core\UI\BS;
use Core\Enum;
/**
 * The list of contextual classes used in bootstrap to denote certain states/contexts in different situations
 */
class Context extends Enum{
	public static $Success, $Danger, $Warning, $Info, $Active, $Default;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Active = new Context('Active', 'active');
		self::$Success = new Context('Success', 'success');
		self::$Danger = new Context('Danger', 'danger');
		self::$Warning = new Context('Warning', 'warning');
		self::$Info = new Context('Info', 'info');
		self::$Default = new Context('Default', 'default');
	}
};
Context::Initialize();
?>