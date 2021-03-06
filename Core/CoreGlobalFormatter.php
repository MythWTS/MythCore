<?php
namespace Core;
/**
 * The main default global formatter. Formatters are used to format text representations of objects. This formatter is registered as the default
 * global formatter by default at the initialization of the CoreConfig class. This means its Format() method will be called from every format consumer
 * method in the framework. It is also good practice to either use the Strings::Format() method to do the formatting or follow the framework's
 * conventions if you are developing a class with a format consumer method (like WriteLine, Write(), Format())
 * The logic implemented by this formatter is:
 * <ul>
 * 	<li>
 * 		First, the formatter looks to see if there's a type formatter registered for the type of the object supplied. If there are type formatters registered
 * 		for the type of the object, they are retreived and used one by one until one returns a non-null value, then that value is returned
 * 	</li>
 * 	<li>
 * 		If no type formatters are registered or the type formatters failed to format the object, the type is checked to see if it is primitive.
 * 		If the type is primitive, the default primitive type formatting rules are applied. If not:
 * 	</li>
 * 	<li>
 * 		The type is checked for being IFormattable. If it is, the type's GetFormatter() is called and the formatter is used and if it returns a non null
 * 		value, that value is returned. If not:
 * 	</li>
 * 	<li>U::ES() is used to extract a string value from the supplied object.</li>
 * </ul>
 * @see \Core\IFormatter
 * @see \Core\IFormattable
 * @see \Core\U::ES()
 */
final class CoreGlobalFormatter extends Object implements IFormatter{
	use TSingleton;
	###########################################################################
	# Overwrite of the Instance Method
	###########################################################################
	/**
	 * Property method to return the only instance of the singleton
	 * @return \Core\CoreGlobalFormatter
	 */
	public static function Instance(){
		return self::$_instance?: self::$_instance = new CoreGlobalFormatter();
	}
	###########################################################################
	# Empty Private Constructor
	###########################################################################
	/**
	 * Empty private constructor
	 */
	private function __construct(){}
	###########################################################################
	# Entry Point Method Format()
	###########################################################################
	/**
	 * Returns a string representation of the object to format using the supplied formatting options. This method is called by format consuming methods like
	 * Write(), WriteLine(), Format(). This allows the framework to be extensible and customizable without changing the code of the framework itself.
	 * This method is the default handler for all types since it's the main method of the default Core global formatter which is registered by default.
	 * It is not recommended to change this as the default global formatter since it includes code to handle the primitive types in the default manner.
	 * To be consistent with the framework, most formatting options should be designed in the same way. However, it is recommended that if you want to change the
	 * way primitive types are formatted, to only do it by expanding the options and leave the default capabilities untouched since it will produce code that
	 * is not consistenet with the standards of the framework.
	 * {@inheritDoc}
	 * @see \Core\IFormatter::Format()
	 */
	public function Format($formattingOptions, $objectToFormat){
		$type = Type::Of($objectToFormat);
		$typeName = $type->FullName();
		$config = CoreConfig::Instance();
		if($config->HasFormattersForType($typeName)){
			$formatters = $config->GetFormattersForType($typeName);
			foreach ($formatters as $f){
				$formatter = is_string($f) ? new $f() : $f;
				$formatted = $formatter->Format($formattingOptions, $objectToFormat);
				if($formatted !== null){
					return $formatted;
				}
			}
		}
		if(is_a($objectToFormat, '\Core\IFormattable')){
			$formatter = $objectToFormat->GetFormatter();
			$formatted = $formatter->Format($formattingOptions, $objectToFormat);
			if($formatted !== null){
				return $formatted;
			}
		}
		else{
			///TODO: Add code to handle standard formtting of primitive types
			///TODO: Decide how to handle primitive types' formatting (different formatters for each type, parser for options, one formatter for all, this class?)
			$options = FormattingOption::Parse($formattingOptions);
		}
	}
	###########################################################################
	# Private Utility Methods
	###########################################################################
	private function validateOptionsForType($typeName, array $options){
		$validNames = array('width', 'w', 'padding', 'p', 'padding-right', 'pr', 'padding-left', 'pl', 'overflow', 'o', 'padding-side', 'ps', 'null', 'n');
		switch($typeName){
			case 'integer':
			case 'float':
				$validNames[] = 'base'; $validNames[] = 'b'; $validNames[] = 'signed'; $validNames[] = 's'; $validNames[] = 'grouped'; $validNames[] = 'g';
				$validNames[] = 'group-separator'; $validNames[] = 'gs'; $validNames[] = 'group-every'; $validNames[] = 'ge';
				break;
			case 'Core\DateTime':
			case 'Core\TimeSpan':
			case 'Core\Guid':
			case 'Core\Version':
		}
		foreach ($options as $option){
			if(!in_array($option->Name(), $validNames)){
				return false;
			}
		}
		return true;
	}
}