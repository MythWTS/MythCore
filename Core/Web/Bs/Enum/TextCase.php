<?php
namespace Core\Web\Bs;
class TextCase extends \Enum{
	public static $Lower, $Upper, $Capitalize;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Lower = new TextCase('Lower', 'text-lowercase');
		self::$Upper = new TextCase('Upper', 'text-uppercase');
		self::$Capitalize = new TextCase('Capitalize', 'text-capitalize');
	}
};
TextCase::Initialize();
?>