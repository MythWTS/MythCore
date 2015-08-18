<?php
namespace \Core\Web\Bs;
class Context extends \Enum{
	public static $Success, $Danger, $Warning, $Info, $Active, $Default;
	protected function __construct($name, $value){parent::__construct($name, $value);}
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