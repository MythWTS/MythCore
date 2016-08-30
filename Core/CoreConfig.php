<?php
namespace Core;
/**
 * CoreConfig is a singleton class that holds basic essential configuration settings for the whole of the MythCore framework. The settings stored
 * here affects the whole of the framework and are hardcoded into code files and can only be changed using code denoting their importance.
 * @property string $BasePath The base path to the installation root (usually the document root of the server) [get, set]
 * @property string $CoreDirectory The name of the Core directory (without the path) [get, set]
 * @property boolean $DebugMode Whether the debugging mode is enabled or not  [get, set]
 * @property string $DebugLogFile The path to the debug log file [get, set]
 * @property string $IndentString The currently used tab character by the framework [get, set]
 * @property string $NewLineString The currently used newline character by the framework [get, set]
 * @property string $HtmlAttributesQuote The currently used quoting character throughout the framework [get, set]
 * @property integer $StreamDefaultChunkSize The currently used chunk size for streams in the framework [get, set]
 * @property string $ClassFilesExtension The currently used file extension for code files for the class loader [get, set]
 * @property integer $GlobalFormattersCount The number of global formatters registered [get]
 * @property array $GlobalFormatters An array of global formatter objects and types registered [get]
 * @property array $TypeFormatters An array of type formatter objects and types registered [get]
 */
final class CoreConfig extends Object{
	use TSingleton;
	###########################################################################
	# Implementation of the singleton
	###########################################################################
	/**
	 * Property/Method to retreive the sole instance of the singleton. Overrides the TSingleton implementation just for autocomplete in IDEs
	 * @return \Core\CoreConfig
	 */
	public static function Instance(){
		return self::$_instance ?: self::$_instance = new CoreConfig();
	}
	/**
	 * Private constructor used to instantiate the sole instance of the singleton
	 */
	private function __construct(){
		$this->_coreDir = 'Core';
		$this->_basePath = U::DocRoot();
		$this->_debug = false;
		$this->_debugFile = 'log.txt';
		$this->_phpFilesExt = '.php';
		$this->_streamDefaultChunkSize = 1024;
		$this->_globalFormatters = array();
		$this->_typeFormatters = array();
	}
	###########################################################################
	# Private fields
	###########################################################################
	/**
	 * Name of the core directory/folder where all the code resides (normally Core)
	 * @var string
	 */
	private $_coreDir;
	/**
	 * The installation path of the MythCore framework (root folder, without the Core folder itself)
	 * @var string
	 */
	private $_basePath;
	/**
	 * The default chunk size to be read/written if a default is needed
	 * @var integer
	 */
	private $_streamDefaultChunkSize;
	/**
	 * The file extension used for php include files on this installation
	 * @var string
	 */
	private $_phpFilesExt;
	/**
	 * Internal storage of the debug mode. True activates debugging, false deactivates it
	 * @var boolean
	 */
	private $_debug;
	/**
	 * Internal storage of the debug log file location
	 * @var string
	 */
	private $_debugFile;
	/**
	 * An array of formatters to be used with all types of objects in a format consumer method. The array is iterated by the consumer and the first
	 * formatter that returns a non-null return will be used to format the object's string representation.
	 * The array either holds the name of the formatter class or an object of that class
	 * @var array
	 */
	private $_globalFormatters;
	/**
	 * An associative array of type formatters.
	 * The array is ordered so that the type name is the key and the formatter class name or an object of that class is the value.
	 * If more than one formatter are to be registered for a type, the value will be an array of class names/objects or both
	 * @var array
	 */
	private $_typeFormatters;
	###########################################################################
	# Public Config Properties
	###########################################################################
	# Formatter Related Properties
	###################################
	/**
	 * Gets the number of global formatters registered
	 * @return integer
	 */
	public function GlobalFormattersCount(){
		return count($this->_globalFormatters);
	}
	/**
	 * Returns the global formatters registery array
	 * @return array
	 */
	public function GlobalFormatters(){
		return $this->_globalFormatters;
	}
	/**
	 * Returns the global formatters registery array
	 * @return array
	 */
	public function TypeFormatters(){
		return $this->_typeFormatters;
	}
	# Path Config Properties
	###################################
	/**
	 * Accessor to the BasePath Property [get, set]-[default U::DocRoot()]
	 * @param string $value The base path to assign to this property
	 * @return string
	 */
	public function BasePath($value=null){
		if($value === null){return $this->_basePath;}
		else{$this->_basePath = U::ES($value);}
	}
	/**
	 * Accessor to the CoreDirectory Property [get, set]-[default 'Core']
	 * @param string $value The name of the Core directory (without the path) to be assigned to the property
	 * @return string
	 */
	public function CoreDirectory($value=null){
		if($value === null){return $this->_coreDir;}
		else{$this->_coreDir = U::ES($value);}
	}
	# Debug Config Properties
	###################################
	/**
	 * Accessor to the DebugMode Config Setting [get, set]-[default false].
	 * If set to true, debugging will be enabled throughout the framework, otherwise it defaults to false (usual for production environments)
	 * @param boolean $value The value to assign to this property (true enables the debugging mode)
	 * @return boolean
	 */
	public function DebugMode($value=null){
		if($value === null){return $this->_debug;}
		else{$this->_debug = U::EB($value);}
	}
	/**
	 * Accessor to the DebugLogFile Config Setting [get, set]-[default log.txt]. This is used by debug classes to output
	 * log information. It returns a file path that will be used as is by those classes.
	 * @param string $value The log file path to assign to this property
	 * @return string
	 */
	public function DebugLogFile($value=null){
		if($value === null){return $this->_debugFile;}
		else{$this->_debugFile = U::EB($value);}
	}
	# Utility Config Wrapper Properties
	###################################
	/**
	 * Accessor to the IndentString Property [get, set]-[default \t]. This actually modifies the value in the U utility class and affects
	 * outputting / indenting all over the framework.
	 * @param string $value The tab character to use across the framework
	 * @return string
	 */
	public function IndentString($value=null){
		if($value === null){return U::$TAB;}
		else{U::$TAB = U::ES($value);}
	}
	/**
	 * Accessor to the NewLineString Property [get, set]-[default \n]. This actually modifies the value in the U utility class and
	 * affects outputting / indenting all over the framework.
	 * @param string $value The newline character to use across the framework
	 * @return string
	 */
	public function NewLineString($value=null){
		if($value === null){return U::$NL;}
		else{U::$NL = $value;}
	}
	/**
	 * Accessor to the HtmlAttributesQuote Property [get, set]-[default "]. This actually modifies the value in the U utility class and
	 * affects outputting / indenting all over the framework.
	 * @param string $value The quoting character to use across the framework
	 * @return string
	 */
	public function HtmlAttributesQuote($value=null){
		if($value === null){return U::$Q;}
		else{U::$Q = $value;}
	}
	# Misc Config Properties
	###################################
	/**
	 * Accessor to the StreamDefaultChunkSize Property [get, set]-[default 1024]
	 * @param integer $value The value to be assigned to this property
	 * @return integer
	 */
	public function StreamDefaultChunkSize($value=null){
		if($value === null){return $this->_streamDefaultChunkSize;}
		else if(is_int($value)){$this->_streamDefaultChunkSize = $value;}
	}
	/**
	 * Accessor to the ClassFilesExtension Config Property [get, set]-[default '.php'].
	 * The extension should include the dot if it uses it
	 * @param string $value The file extension to be used for code files in the class loader, including the dot
	 * @return string
	 */
	public function ClassFilesExtension($value=null){
		if($value === null){return $this->_phpFilesExt;}
		else{$this->_phpFilesExt = U::ES($value);}
	}
	###########################################################################
	# Public Config Methods
	###########################################################################
	# Formatter Related Methods
	###################################
	# Type Formatters
	###################################
	/**
	 * Registers a type formatter object to handle the formatting for the supplied type. Returns the CoreConfig instance for method chaining
	 * @param string $typeName The name of the type for which to register the type formatter
	 * @param IFormatter $formatter The formatter object to register for the specified type
	 * @throws InvalidParameterValueException If type name is not a valid type name
	 * @return \Core\CoreConfig
	 */
	public function AddTypeFormatter($typeName, IFormatter $formatter){
		$type = null; Params::InsureNotNull($formatter, "formatter", __METHOD__);
		try{
			$type = new Type($typeName);
		}
		catch(\Exception $ex){
			throw new InvalidParameterValueException("typeName", __METHOD__, "a valid class name or one of the primitive type names");
		}
		$tn = $type->FullName;
		if(isset($this->_typeFormatters[$tn])){
			$this->_typeFormatters[$tn][] = $formatter;
		}
		else {
			$this->_typeFormatters[$tn] = array($formatter);
		}
		return $this;
	}
	/**
	 * Registers a type formatter class to handle the formatting of the supplied type. Returns the CoreConfig instance for method chaining
	 * @param string $typeName The name of the type for which to register the type formatter
	 * @param string $formatterClassName The name of the formatter class
	 * @throws InvalidParameterValueException If the type supplied is not a valid existing type or primitive one
	 * @return \Core\CoreConfig
	 */
	public function AddTypeFormatterType($typeName, $formatterClassName){
		$type = null; $formatterType = Params::GetInsuredInstantiable(U::ES($formatterClassName));
		try{
			$type = new Type($typeName);
		}
		catch(\Exception $ex){
			throw new InvalidParameterValueException("typeName", __METHOD__, "a valid class name or one of the primitive type names");
		}
		$tn = $type->FullName;
		if(isset($this->_typeFormatters[$tn])){
			$this->_typeFormatters[$tn][] = $formatterType;
		}
		else {
			$this->_typeFormatters[$tn] = array($formatterType);
		}
		return $this;
	}
	/**
	 * Registers a type formatter for a supplied type at a supplied index
	 * @param string $typeName The name of the type for which to register the type formatter
	 * @param IFormatter $formatter The formatter object to register for the specified type
	 * @param integer $index The index/offset at which to add the formatter
	 * @throws InvalidParameterValueException If type name is not a valid type name
	 * @return \Core\CoreConfig
	 */
	public function AddTypeFormatterAt($typeName, IFormatter $formatter, $index = 0){
		$type = null; Params::InsureNotNull($formatter, "formatter", __METHOD__);
		try{
			$type = new Type($typeName);
		}
		catch(\Exception $ex){
			throw new InvalidParameterValueException("typeName", __METHOD__, "a valid class name or one of the primitive type names");
		}
		$tn = $type->FullName;
		if(!isset($this->_typeFormatters[$tn])){
			$this->_typeFormatters[$tn] = array();
		}
		$i = $index >= count($this->_typeFormatters[$tn]) ? count($this->_typeFormatters[$tn]) : $index;
		if(isset($this->_typeFormatters[$tn][$i])){
			if($i === 0){
				$this->_typeFormatters[$tn] = array_merge(array($formatter), $this->_typeFormatters[$tn]);
			}
			else{
				$this->_typeFormatters[$tn] = 
					array_merge(array_slice($this->_typeFormatters[$tn], 0, $i), array($formatter), array_slice($this->_typeFormatters[$tn], $i));
			}
		}
		else{
			$this->_typeFormatters[$tn][$i] = $formatter;
		}
		return $this;
	}
	/**
	 * Registers a type formatter for a supplied type at a supplied index
	 * @param string $typeName The name of the type for which to register the type formatter
	 * @param string $formatterClassName The name of the formatter class
	 * @param integer $index The index/offset at which to add the formatter
	 * @throws InvalidParameterValueException If type name is not a valid type name
	 * @return \Core\CoreConfig
	 */
	public function AddTypeFormatterTypeAt($typeName, $formatterClassName, $index = 0){
		$type = null; $formatterType = Params::GetInsuredInstantiable(U::ES($formatterClassName));
		try{
			$type = new Type($typeName);
		}
		catch(\Exception $ex){
			throw new InvalidParameterValueException("typeName", __METHOD__, "a valid class name or one of the primitive type names");
		}
		$tn = $type->FullName;
		if(!isset($this->_typeFormatters[$tn])){
			$this->_typeFormatters[$tn] = array();
		}
		$i = $index >= count($this->_typeFormatters[$tn]) ? count($this->_typeFormatters[$tn]) : $index;
		if(isset($this->_typeFormatters[$tn][$i])){
			if($i === 0){
				$this->_typeFormatters[$tn] = array_merge(array($formatterClassName), $this->_typeFormatters[$tn]);
			}
			else{
				$this->_typeFormatters[$tn] =
				array_merge(array_slice($this->_typeFormatters[$tn], 0, $i), array($formatterClassName), array_slice($this->_typeFormatters[$tn], $i));
			}
		}
		else{
			$this->_typeFormatters[$tn][$i] = $formatterClassName;
		}
		return $this;
	}
	/**
	 * Removes a specific type formatter from the list of registered type formatters. Returns the CoreConfig instance for method chaining
	 * @param mixed $formatter The formatter to remove
	 * @return \Core\CoreConfig
	 */
	public function RemoveTypeFormatter($formatter){
		foreach ($this->_typeFormatters as $type=>$formatters){
			$k = -1;
			foreach ($formatters as $key=>$f){
				if($f == $formatter){
					$k = $key;
					break;
				}
			}
			if($k > -1){
				unset($this->_typeFormatters[$type][$k]);
			}
		}
		return $this;
	}
	/**
	 * Removes all type formatters registered for a specific type. Returns the CoreConfig instance for method chaining
	 * @param string $typeName The name of the type to remove all formatters for
	 * @return \Core\CoreConfig
	 */
	public function RemoveFormattersForType($typeName){
		if(isset($this->_typeFormatters[$typeName])){
			unset($this->_typeFormatters[$typeName]);
		}
		return $this;
	}
	/**
	 * Returns an array of registered type formatters for the specified type as it is internally stored
	 * (members are either class names of IFormatter classes or IFormatter objects)
	 * @param string $typeName The type name of the type to retreive a formatters array for
	 * @throws InvalidOperationException If the typeName does not have any formatters registered for it
	 * @return array
	 */
	public function GetFormattersForType($typeName){
		if(!isset($this->_typeFormatters[$typeName])){
			throw new InvalidOperationException("accessing a formatter for a type that has no type formatters registered for it");
		}
		return $this->_typeFormatters[$typeName];
	}
	/**
	 * Returns the registered formatter for the supplied type at the supplied index in the list as it is stored (class name or IFormatter object)
	 * @param string $typeName The type name of the type to retreive a formatter for
	 * @param integer $index The index of the Type formatter within the type formatters list registered for this type
	 * @throws InvalidOperationException If the typeName does not have any formatters registered for it
	 * @throws InvalidParameterTypeException If the value of the index is not an integer
	 * @throws InvalidParameterValueException If the value of the index is less than zero or greater than the maximum index for the type's registsred formatters list
	 * @return string|\Core\IFormatter
	 */
	public function GetFormatterForType($typeName, $index = 0){
		if(!isset($this->_typeFormatters[$typeName]) || count($this->_typeFormatters[$typeName]) == 0){
			throw new InvalidOperationException("accessing a formatter for a type that has no type formatters registered for it");
		}
		Params::InsureUnsignedInt($index, "index"); Params::InsureInRange($index, 0, count($this->_typeFormatters[$typeName]) - 1, "index");
		return $this->_typeFormatters[$typeName][$index];
	}
	/**
	 * Returns an IFormatter object for the specified type from the list of registered type formatters for this type at the specified index
	 * @param string $typeName The type name of the type to retreive a formatter object for
	 * @param integer $index The index of the Type formatter within the type formatters list registered for this type
	 * @throws InvalidOperationException If the typeName does not have any formatters registered for it
	 * @throws InvalidParameterTypeException If the value of the index is not an integer
	 * @throws InvalidParameterValueException If the value of the index is less than zero or greater than the maximum index for the type's registsred formatters list
	 * @return \Core\IFormatter
	 */
	public function GetFormatterObjectForType($typeName, $index = 0){
		if(!isset($this->_typeFormatters[$typeName]) || count($this->_typeFormatters[$typeName]) == 0){
			throw new InvalidOperationException("accessing a formatter for a type that has no type formatters registered for it");
		}
		Params::InsureUnsignedInt($index, "index"); Params::InsureInRange($index, 0, count($this->_typeFormatters[$typeName]) - 1, "index");
		$formatter = $this->_typeFormatters[$typeName][$index];
		return is_string($formatter) ? new $formatter() : $formatter;
	}
	/**
	 * Returns whether the specified type has a type formatter registered for it or not
	 * @param string $typeName The name of the type to check if it has any type formatters registered for
	 * @return boolean
	 */
	public function HasFormattersForType($typeName){
		return isset($this->_typeFormatters[$typeName]) && (count($this->_typeFormatters[$typeName]) > 0);
	}
	/**
	 * Returns the number of registered type formatters for a specific type
	 * @param string $typeName The name of the type to get the count of registered type formatters for
	 * @return integer
	 */
	public function FormattersCountForType($typeName){
		return isset($this->_typeFormatters[$typeName]) ? count($this->_typeFormatters[$typeName]) : 0;
	}
	# Global Formatters
	###################################
	/**
	 * Adds a new formatter object to the end of the list of registered global formatters.
	 * Adding a formatter object means this object will be used for all formatting processes as opposed to adding a formatter type which will be created each time.
	 * This is the recommended mode for global formatters since they will be called for every single format specifier encountered
	 * Returns the CoreConfig instance for method chaining.
	 * @param \Core\IFormatter $formatter The formatter object to add
	 * @return \Core\CoreConfig
	 * @see \Core\CoreConfig::AddGlobalFormatterType()
	 */
	public function AddGlobalFormatter(IFormatter $formatter){
		$this->_globalFormatters[] = Params::GetInsuredNotNull($formatter);
		return $this;
	}
	/**
	 * Adds a new formatter class name / type to the end of the list of registered global formatters. The class name must exist and have an empty constructor.
	 * Adding a formatter type means an object of that type will be created for each and every formatting operations. Not recommended for global formatters.
	 * Returns the CoreConfig instance for method chaining.
	 * @param mixed $formatterClassName A value to be converted to string and has the class name of the formatter to be registered.
	 * @return \Core\CoreConfig
	 * @see \Core\CoreConfig::AddGlobalFormatter()
	 */
	public function AddGlobalFormatterType($formatterClassName){
		$typeName = Params::GetInsuredInstantiable(U::ES($formatterClassName));
		$this->_globalFormatters[] = $typeName;
		return $this;
	}
	/**
	 * Adds a new formatter object at the specified index of the list of registered global formatters.
	 * Adding a formatter object means this object will be used for all formatting processes as opposed to adding a formatter type which will be created each time.
	 * This is the recommended mode for global formatters since they will be called for every single format specifier encountered
	 * Returns the CoreConfig instance for method chaining.
	 * @param \Core\IFormatter $formatter The formatter object to add
	 * @param integer $atIndex The index at which to add the formatter. Must be >= 0 and will be truncated if it's larger than the last index to the count of elements
	 * @return \Core\CoreConfig
	 * @see \Core\CoreConfig::AddGlobalFormatterTypeAt()
	 */
	public function AddGlobalFormatterAt(IFormatter $formatter, $atIndex = 0){
		$at = Params::GetInsuredUnsignedInt($atIndex, "atIndex");
		$count = count($this->_globalFormatters);
		$at = $at < $count ? $at : $count;
		Params::InsureNotNull($formatter, "formatter");
		if(isset($this->_globalFormatters[$at])){
			if($at == 0){
				$this->_globalFormatters = array_merge(array($formatter), $this->_globalFormatters);
			}
			else{
				$this->_globalFormatters = array_merge(array_slice($this->_globalFormatters, 0, $at), array($formatter), array_slice($this->_globalFormatters, $at));
			}
			
		}
		else{
			$this->_globalFormatters[$at] = $formatter;
		}
		return $this;
	}
	/**
	 * Adds a new formatter class name / type at the specified index of the list of registered global formatters. The class name must exist and have an empty constructor.
	 * Adding a formatter type means an object of that type will be created for each and every formatting operations. Not recommended for global formatters.
	 * Returns the CoreConfig instance for method chaining.
	 * @param mixed $formatterClassName A value to be converted to string and has the class name of the formatter to be registered.
	 * @param integer $atIndex The index at which to add the formatter. Must be >= 0 and will be truncated if it's larger than the last index to the count of elements
	 * @return \Core\CoreConfig
	 * @see \Core\CoreConfig::AddGlobalFormatterAt()
	 */
	public function AddGlobalFormatterTypeAt($formatterClassName, $atIndex = 0){
		$typeName = Params::GetInsuredInstantiable(U::ES($formatterClassName));
		$at = Params::GetInsuredUnsignedInt($atIndex, "atIndex");
		$count = count($this->_globalFormatters);
		$at = $at < $count ? $at : $count;
		if(isset($this->_globalFormatters[$at])){
			if($at == 0){
				$this->_globalFormatters = array_merge(array($typeName), $this->_globalFormatters);
			}
			else{
				$this->_globalFormatters = array_merge(array_slice($this->_globalFormatters, 0, $at), array($typeName), array_slice($this->_globalFormatters, $at));
			}
			
		}
		else{
			$this->_globalFormatters[$at] = $typeName;
		}
		return $this;
	}
	/**
	 * Removes the supplied formatter from the list of registered global formatters if it exists. Returns the CoreConfig instance for method chaining.
	 * @param string|\Core\IFormatter $formatter The formatter to remove, either a type name or an IFormatter object
	 * @return \Core\CoreConfig
	 */
	public function RemoveGlobalFormatter($formatter){
		$at = -1;
		foreach ($this->_globalFormatters as $key => $value){
			if($formatter == $value){
				$at = $key;
				break;
			}
		}
		if($at > -1){
			unset($this->_globalFormatters[$at]);
			$this->_globalFormatters = array_values($this->_globalFormatters);
		}
		return $this;
	}
	/**
	 * Returns an IFormatter object from the global formatters registery
	 * @param integer $index The index of the global formatter in the global formatters registery
	 * @return \Core\IFormatter
	 */
	public function GetGlobalFormatterObject($index = 0){
		$count = count($this->_globalFormatters);
		if($count === 0){
			throw new InvalidOperationException("Tried accessing an empty array");
		}
		Params::InsureUnsignedInt($index, "index"); Params::InsureInRange($index, 0, $count - 1);
		$formatter = $this->_globalFormatters[$index];
		return is_string($formatter) ? new $formatter() : $formatter;
	}
}