<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * The attributes used to add Shema.org meta data to documents
 */
final class SOAttributes extends Enum{
	public static $ItemScope, $ItemProp, $ItemType;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$ItemScope = new SOAttributes('ItemScope', 'itemscope');
		self::$ItemProp = new SOAttributes('ItemProp', 'itemprop');
		self::$ItemType = new SOAttributes('ItemType', 'itemtype');
	}
};
SOAttributes::Initialize();
?>