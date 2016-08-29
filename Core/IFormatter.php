<?php
namespace Core;
/**
 * Interface to be implemented by classes that will provide a way to format the string representation of some objects.
 * Formatters make it possible to expand the behavior of methods such as Strings::Format(), Write(), WriteLine() methods to support formatting options
 * of the form {n:some formatting options go here} without requiring the methods themselves to be modified.
 * The way this works is as follows:
 * <ul>
 * 	<li>Format consumers (methods like Write(), WriteLine(), Format()) read the format and if they encounter a specifier with formatting options then,</li>
 * 	<li>
 * 		The registered global formatters are called one by one if any exists. If any of them return a non-null value, it is returned.
 * 		By default, the framework has a CoreGlobalFormatter object registered as the default global formatter. This formatter follows the line of execution
 * 		outlined here and executes it.
 * 	</li>
 * 	<li>The consumer will check for registered formatters in CoreConfig::Instance. If one exists, it will be used</li>
 * 	<li>
 * 		If no type formatters were registered or the ones that are couldn't format the object, it is checked to see if it is a native PHP primitive type.
 * 		If it is, the default formatting rules for primitive types are used, otherwise:
 * 	</li>
 * 	<li>The consumer will check the type of the object. If the object is IFormattable, a formatter will be obtained using the GetFormatter() method.</li>
 * 	<li>The formatter's Format() method will be called with the format options</li>
 * 	<li>If the object is not formattable or if no options were encountered, the normal method will be used (using U::ES())</li>
 * </ul>
 * @see \Core\CoreGlobalFormatter
 * @see \Core\IFormattable
 * @see \Core\U::ES()
 */
interface IFormatter extends IObject{
	/**
	 * Returns a string representation of the supplied object formatted according to the formatting options specified
	 * @param mixed $formattingOptions The formatting options to use when formatting the supplied object
	 * @param mixed $objectToFormat The object to be formatted using the supplied formatting options
	 * @throws FormatException If the format string was not valid
	 * @throws InvalidParameterTypeException If the object to be formatted is not a supported object
	 * @return string
	 */
	public function Format($formattingOptions, $objectToFormat);
}