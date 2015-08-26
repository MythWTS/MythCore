<?php
namespace Core\Data;
use Core\Enum;
/**
 * Specifies how an ICommand's command string is interpreted.
 */
final class CommandType extends Enum{
	public static
		/** The ICommand's command string is interpreted as a procedure or function name */
		$Procedure,
		///TODO: Should we keep this as table or change it to entity??
		/** The ICommand's command string is interpreted as the name of a table or entity */
		$Table,
		/** The ICommand's command string is interpreted as a normal expression (sql query, XPath query ... etc) depending on the context */
		$Expression;
	/** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$Procedure = new CommandType("Procedure", "procedure");
		self::$Table = new CommandType("Table", "table");
		self::$Expression = new CommandType("Expression", "expression");
	}
};
CommandType::Initialize();
?>