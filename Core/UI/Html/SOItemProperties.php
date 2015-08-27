<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Supported items properties in schema.org meta-data
 */
final class SOItemProperties extends Enum{
	public static $Name, $Description, $Image;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Name = new SOItemProperties('Name', 'name');
		self::$Description = new SOItemProperties('Description', 'description');
		self::$Image = new SOItemProperties('Image', 'image');
	}
};
SOItemProperties::Initialize();
?>