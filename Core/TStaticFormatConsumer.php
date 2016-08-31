<?php
namespace Core;
/**
 * A trait to be used by any instance class that wants to provide string formatting capabilities that are integrated with the framework's standards.
 * This trait simply implements an instance method called Format() which takes a string-convertable format and a set of variable parameters.<br/>
 * <b>THIS TRAIT CREATES STATIC METHODS. IF YOU WANT TO ADD THE FUNCTIONALITY TO AN INSTANCE CLASS, USE TFormatConsumer</b><br/>
 * The method works as follows:
 * <ul>
 * 	<li>
 * 		First, the method parses the format string for formatting placeholders/specifiers. Formatting specifiers are partial strings of the form:<br/>
 * 		{i[: formatting-options]} <br/>
 * 		Where:
 * 		<ul>
 * 			<li>
 * 				<b>i</b> is an integer that specifies which argument/parameter passed to Format() to apply the formatting to and replace this whole placeholder<br/>
 * 				<i>If this is not the first thing inside the curly brackets other than whitespace characters, the whole pattern/placeholder will be ignored</i>
 * 			</li>
 * 			<li>
 * 				<b>formatting-options</b> are a set of options that modify how the parameter will be formatted as a string. These can be a series of letters/modifiers,
 * 				or they can be more complicated options based on the type and its supported formatting options. For example, for numbers, you can by default use
 * 				the xp format to denote that the number is to be displayed as a hexadecimal integer and to be prefixed. However, you can also use
 * 				{0:base(hex); prefixed;} or {0:b(h); p; padding(8, `#`, right)}
 * 				This completely depends on the implementation of the formatters used for the type (see below)
 * 			</li>
 * 		</ul>
 * 		Note that formatting options can themselves include complete specifiers. For example:<br/>
 * 		<i>{0: padding-width({1}); padding-right(`}`); padding-left(`{`); padding-side({2: to-lower()});}</i><br/>
 * 		Will first replace {1} and {2: to-lower()} with the second and third parameters passed after the format string, then replace the resulting pattern
 * 	</li>
 * 	<li>If no formating placeholders encountered, the string is returned as is</li>
 * 	<li>
 * 		If one or more specifiers were found:
 * 		<ul>
 * 			<li>
 * 				Loop while specifiers can be matched. For each iteration:
 * 				<ul>
 * 					<li>
 * 						Loop through the matched specifiers and for each one:
 * 						<ul>
 * 							<li>
 * 								If there are global formatters registered with CoreConfig, use them in order to see if they can handle the formatting option
 * 								and the object to be formatted. If one returns a non-null value, use it to replace the placeholder
 * 							</li>
 * 							<li>
 * 								If no global formatters registered or non of the registered one could handle the formatting options/object combination,
 * 								check to see if there are any type formatters registered for the type of the object. If there are, iterate through them and use
 * 								until one returns a non-null value. If one does, use it to replace the placeholder.
 * 							</li>
 * 							<li>
 * 								If non of the type formatters succeeded or non exist, check to see if the type of the object is IFormattable. If so, call
 * 								the GetFormatter() method to obatin a formatter and use it. If the formatter yields a non-null value, use it to replace the placeholder
 * 							</li>
 * 							<li>
 * 								If non of the above works, use the framework's Strings::Extract() method and ignore the formatting options to replace the placeholder
 * 							</li>
 * 						</ul>
 * 					</li>
 * 				</ul>
 * 			</li>
 * 		</ul>
 * </li>
 * </ul>
 * @see \Core\TFormatConsumer
 * @see \Core\Strings::Extract()
 */
trait TStaticFormatConsumer{
	###########################################################################
	# Static Fields
	###########################################################################
	/**
	 * Regex pattern to use to match format specifiers in format strings
	 * @var string
	 */
	private static $_formatPattern = '/\{\s*(\d+)\s*(?:\:((?:[^{}`]|`(?:[^`\\\\]|\\\\`)*`)*))?\}/';
	###########################################################################
	# Methods
	###########################################################################
	/**
	 * Uses a format string with formatting specifiers/placeholders to format a set of parameters.
	 * The method works as follows:
	 * <ul>
	 * 	<li>
	 * 		First, the method parses the format string for formatting placeholders/specifiers. Formatting specifiers are partial strings of the form:<br/>
	 * 		{i[: formatting-options]} <br/>
	 * 		Where:
	 * 		<ul>
	 * 			<li>
	 * 				<b>i</b> is an integer that specifies which argument/parameter passed to Format() to apply the formatting to and replace this whole placeholder<br/>
	 * 				<i>If this is not the first thing inside the curly brackets other than whitespace characters, the whole pattern/placeholder will be ignored</i>
	 * 			</li>
	 * 			<li>
	 * 				<b>formatting-options</b> are a set of options that modify how the parameter will be formatted as a string. These can be a series of letters/modifiers,
	 * 				or they can be more complicated options based on the type and its supported formatting options. For example, for numbers, you can by default use
	 * 				the xp format to denote that the number is to be displayed as a hexadecimal integer and to be prefixed. However, you can also use
	 * 				{0:base(hex); prefixed;} or {0:b(h); p; padding(8, `#`, right)}
	 * 				This completely depends on the implementation of the formatters used for the type (see below)
	 * 			</li>
	 * 		</ul>
	 * 		Note that formatting options can themselves include complete specifiers. For example:<br/>
	 * 		<i>{0: padding-width({1}); padding-right(`}`); padding-left(`{`); padding-side({2: to-lower()});}</i><br/>
	 * 		Will first replace {1} and {2: to-lower()} with the second and third parameters passed after the format string, then replace the resulting pattern
	 * 	</li>
	 * 	<li>If no formating placeholders encountered, the string is returned as is</li>
	 * 	<li>
	 * 		If one or more specifiers were found:
	 * 		<ul>
	 * 			<li>
	 * 				Loop while specifiers can be matched. For each iteration:
	 * 				<ul>
	 * 					<li>
	 * 						Loop through the matched specifiers and for each one:
	 * 						<ul>
	 * 							<li>
	 * 								If there are global formatters registered with CoreConfig, use them in order to see if they can handle the formatting option 
	 * 								and the object to be formatted. If one returns a non-null value, use it to replace the placeholder
	 * 							</li>
	 * 							<li>
	 * 								If no global formatters registered or non of the registered one could handle the formatting options/object combination,
	 * 								check to see if there are any type formatters registered for the type of the object. If there are, iterate through them and use
	 * 								until one returns a non-null value. If one does, use it to replace the placeholder.
	 * 							</li>
	 * 							<li>
	 * 								If non of the type formatters succeeded or non exist, check to see if the type of the object is IFormattable. If so, call
	 * 								the GetFormatter() method to obatin a formatter and use it. If the formatter yields a non-null value, use it to replace the placeholder
	 * 							</li>
	 * 							<li>
	 * 								If non of the above works, use the framework's Strings::Extract() method and ignore the formatting options to replace the placeholder
	 * 							</li>
	 * 						</ul>
	 * 					</li>
	 * 				</ul>
	 * 			</li>
	 * 		</ul>
	 * </li>
	 * </ul>
	 * @param mixed $format The format string to use
	 * @return string
	 */
	public static function Format($format){
		$argsCount = func_num_args();
		$formatString = U::ES($format);
		if($argsCount > 1){
			$args = func_get_args();
			$matches = array();
			do {
				$continue = false;
				$res = preg_match_all(self::$_formatPattern, $formatString, $matches, PREG_SET_ORDER);
				if($res === false){
					throw new FormatException();
				}
				elseif($res !== 0){
					$continue = true;
					$config = CoreConfig::Instance();
					foreach ($matches as $match){
						$formatOptions = isset($match[2]) ? $match[2] : "";
						$paramIndex = (integer)$match[1] + 1;
						if(!isset($args[$paramIndex])){
							throw new FormatException();
						}
						$objectToFormat = $args[$paramIndex];
						$replacement = "";
						$found = false;
						if($config->GlobalFormattersCount > 0){
							$res = self::tryFormatters($config->GlobalFormatters(), $formatOptions, $objectToFormat);
							if($res !== null){
								$found = true; $replacement = $res;
							}
						}
						if(!$found){
							$typeName = Type::Of($objectToFormat)->FullName();
							if($config->HasFormattersForType($typeName)){
								$res = self::tryFormatters($config->GetFormatterForType($typeName), $formatOptions, $objectToFormat);
								if($res !== null){
									$found = true; $replacement = $res;
								}
							}
						}
						if(!$found && is_a($objectToFormat, '\Core\IFormattable')){
							$formatter = $objectToFormat->GetFormatter();
							$res = $formatter->Format($formatOptions, $objectToFormat);
							if($res !== null){
								$found = true; $replacement = $res;
							}
						}
						if(!$found){
							$replacement = self::Extract($objectToFormat);
						}
						$formatString = str_replace($match[0], $replacement, $formatString);
					}
				}
			}while($continue);
		}
		return $formatString;
	}
	/**
	 * Tries to format an object with the formatting options supplied using an array of IFormatter objects or type names. The first one that returns a non-null value
	 * is used. Otherwise the method returns null to indicate non of the formatters could handle the combination
	 * @param array $formatters An array of formatter objects or formatter types to use one by one on the parameters until one returns a non-null value
	 * @param string $formatOptions The options for formatting the supplied object/variable
	 * @param mixed $objectToFormat The object to be formatted using the formatters supplied
	 * @return NULL|string
	 */
	private static function tryFormatters(array $formatters, $formatOptions, $objectToFormat){
		$return = null;
		foreach ($formatters as $formatter){
			if(is_string($formatter)){
				$formatter = new $formatter();
			}
			$res = $formatter->Format($formatOptions, $objectToFormat);
			if($res !== null){
				$return = $res; break;
			}
		}
		return $return;
	}
}