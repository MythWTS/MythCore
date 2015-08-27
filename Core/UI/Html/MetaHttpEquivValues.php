<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported values for the "http-equiv" attribute of  "meta" html element
 */
final class MetaHttpEquivValues extends Enum{
	public static $ContentType, $DefaultStyle, $Refresh, $DnsPrefetchControl;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$ContentType = new MetaHttpEquivValues('Content-Type', 'content-type');
		self::$DefaultStyle = new MetaHttpEquivValues('Default-Style', 'default-style');
		self::$Refresh = new MetaHttpEquivValues('Refresh', 'refresh');
		self::$DnsPrefetchControl = new MetaHttpEquivValues('DNS-Prefetch-Control', 'x-dns-prefetch-control');
	}
};
MetaHttpEquivValues::Initialize();
?>