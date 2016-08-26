<?php
namespace Core;
/**
 * Interface to be implemented by classes that want to provide custom formatting options in format consumer functions/methods such as Write(), WriteLine(), Format().
 * Marking a type as formattable extends how standard methods that support formatting behave and the options they provide without actually changing their code.
 * The way this works is as follows:
 * <ul>
 * 	<li>Format consumers (methods like Write(), WriteLine(), Format()) read the format and if they encounter a specifier with formatting options then,</li>
 * 	<li>The consumer will check for registered formatters in CoreConfig::Instance. If one exists, it will be used</li>
 * 	<li>
 * 		If no formatter was registered for the type in the CoreConfig instance, the consumer will check the type of the object.
 * 		If the object is IFormattable, a formatter will be obtained using the GetFormatter() method
 * 	</li>
 * 	<li>The formatter's Format() method will be called with the format options</li>
 * 	<li>If the object is not formattable or if no options were encountered, the normal method will be used (checking for ToString())</li>
 * </ul>
 * @see \Core\IFormatter
 */
interface IFormattable extends IObject{
	/**
	 * Returnes an IFormatter object to be used to format the string representation of the formattable object
	 * @return \Core\IFormatter
	 */
	public function GetFormatter();
}