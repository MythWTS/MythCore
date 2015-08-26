<?php
namespace Core;
/**
 * interface IObject - root interface in the framework.
 * Every class and interface within the framework implement this interface either directly or through one of its ancestors
 */
interface IObject{
	/**
	 * Magic __toString() method - returns a string representation of the IObject
	 * @return string
	 */
	public function __toString();
	/**
	 * string ToString() - alias of __toString()
	 * @return string
	 */
	public function ToString();
	/**
	 * string GetClassName() - returns the name of the class for the actual object at hand
	 * @return string
	 */
	public function GetClassName();
	/**
	 * bool Is($className) - returns whether the object is a descendant of the class named $className
	 * @return bool
	 */
	public function Is($className);
};
###############################################################################
/**
 * class Object - base class of all classes in the framework
 */
class Object implements IObject{
	/**
	 * Magic __toString() method - returns a string representation of the Object
	 * @return string
	 */
	public function __toString(){return get_class($this);}
	/**
	 * string ToString() - alias of __toString()
	 * @return string
	 */
	public function ToString(){return $this->__toString();}
	/**
	 * string GetClassName() - returns the name of the class for the actual object at hand
	 * @return string
	 */
	public function GetClassName(){return get_class($this);}
	/**
	 * bool Is($className) - returns whether the object is a descendant of the class named $className
	 * @return bool
	 */
	public function Is($className){return is_a($this, $className);}
	/**
	 * Magic getter.
	 * This is the framework's way of  implementing properties. Whenever a property is called in a get context this method
	 * gets called and it searches for a method with the same name as the property. If one exists, it calls it.
	 * This enables the use of method names as properties. So if you have a method Xyz() that can be called with no
	 * parameters you can call it by using its name as a property, so if $a is of class XYZ which declares a method Abc(a=0)
	 * you can write something like $x = $a->Abc; which is equivalen to $x = $a->Abc();
	 * Properties in the framework will usually be declared as methods with one parameter that defaults to null and within the 
	 * body of the method, the parameter is checked for equality with null using === and in the if section
	 * the getter of the property will be implmented and in the else section, will be the setter.
	 */
	public function __get($propertyName){
		if(method_exists($this, $propertyName)){return call_user_func(array($this, $propertyName));}
		else if(property_exists($this, $propertyName)){return $this->$propertyName;}
		else{return null;}
	}
	/**
	 * Magic setter.
	 * This is the framework's way of  implementing properties. Whenever a property is called in a set context this method
	 * gets called and it searches for a method with the same name as the property. If one exists, it calls it, supplying it
	 * with the value assigned to the property. This enables the use of method names as properties. So if you have a method
	 * Xyz() that can be called with one parameter you can call it by using its name as a property, so if $a is of class XYZ
	 * which declares a method Abc($a, $x=10), you can use Abc as the name of a property in any assignment
	 * So, you can write something like $a->Abc = 20 which is the same as $a->Abc(20)
	 * If no method is found, it defaults to the original behavior of adding the property dynamically.
	 * Properties in the framework will usually be declared as methods with one parameter that defaults to null and within the 
	 * body of the method, the parameter is checked for equality with null using === and in the if section
	 * the getter of the property will be implmented and in the else section, will be the setter.
	 */
	public function __set($propertyName, $value){
		if(method_exists($this, $propertyName)){return call_user_func(array($this, $propertyName), $value);}
		else{return ($this->{$propertyName} = $value);}
	}
};
###############################################################################
/**
 * class U - the framework's utility class
 * This class is used mainly to group PHP functions that are often used and some common tasks to the framework classes
 * It's meant to be the only class that uses short names and users of the framework do not need to use it as most of the 
 * names of the methods are really short. However, some of the methods are really useful, like U::NA() - not available, 
 * used to check if a parameter was passed or not usually in the framework for default behaviors that can not be expressed 
 * in the parameter list for example, or to give the user the option to skip one parameter by supplying null or an empty string
 * It also includes the setting for tabs, newlines, directory separators, quotes used in outputing results
 */
final class U extends Object{
	public static
		/** the tab chaaracter used for indentation across the framework. Changing it will affect any outputing from that point onward */ 
		$TAB = "\t",
		/** New line character used in the framework output */
		$NL = "\n",
		/** The string used to identify directory separators */
		$DS = DIRECTORY_SEPARATOR, 
		/** Quote character to be used for html output */
		$Q = '"';
	/** private constructor to forbid initializing objects */
	private function __construct(){}
	/**
	 * Extract String from mixed variable. Depending on the variable, tries to return a string representation (mostly suitable for use in the framework)
	 * - if a scalar, return the scalar enclosed in a string
	 * - if IObject, calls the __toString method
	 * - if object that has __toString() or ToString() method, calls one of them (__toString first)
	 * - if array, goes through the elements one by one and:
	 * - tries to obtain a string from it (any array elements will be recursively expanded with an indent string suitable to the level of depth)
	 * - adds the string to the result as a new line 
	 */
	public static function ES($var){
		if($var === null || $var === '' || (is_array($var) && count($var) == 0)){return '';}
		else if(is_scalar($var)){return "$var";}
		else if(is_a($var, 'IObject')){return $var->__toString();}
		else if(is_object($var)){
			if(method_exists($var, '__toString')){return $var->__toString();}
			else if(method_exists($var, 'ToString')){return $var->ToString();}
		}
		else if(is_array($var)){
			$res = '';
			foreach ($var as $item) {
				if(is_array($item)){
					$temp = self::ES($item);
					$res .= self::Indent($temp, 1);
				}
				else{
					$res .= self::ES($item) . self::$NL;
				}
			}
			return $res;
		}
		else{return '';}
	}
	/** Extracts a boolean value out of any mixed var and always return a true or false result */
	public static function EB($var){return $var?true:false;}
	/** Converts a mixed variable to string and then replaces html special characters with entities */
	public static function ENC($var){return htmlspecialchars(self::ES($var));}
	/** Checks to see if a variable is null or an empty string (if it's not set by the user) */
	public static function NA($var){return $var === null || $var === '';}
	/** Checks to see if a variable is null or an empty string/array */
	public static function NAE($var){return $var === null || $var === '' || (is_array($var) && count($var) == 0);}
	/** Checks to see if the variable is null, empty string or all whitespace characters (not available or whitespaces) */
	public static function NAW($var){return $var === null || $var === '' || trim($var) === '';}
	/** Returns $n number of tab/indentation characters as set in this class's $TAB public static property */
	public static function TAB($n=1){return str_repeat(self::$TAB, $n);}
	/** Returns $n newline characters/strings as set in the $NL public static property of this class */
	public static function NL($n=1){return str_repeat(self::$NL, $n);}
	/** Checks to see if an object $obj is an instance of the class $className or one of its child classes */
	public static function IsA($obj, $className){return is_a($obj, $className);}
	/** Checks if $var is a php string */
	public static function IsString($var){return is_string($var);}
	/** Checks if $var is a php numeric value */
	public static function IsN($var){return is_numeric($var);}
	/** Checks if $var is not a php numeric value */
	public static function IsNAN($var){return is_nan($var);}
	/** Checks if $var is a php integer */
	public static function IsInt($var){return is_int($var);}
	/** Checks if $var is a php array */
	public static function IsArray($var){return is_array($var);}
	/** Checks if $var is a php object (including but NOT LIMITED TO children of the Object class) */
	public static function IsObj($var){return is_object($var);}
	/** Checks if $var is a php float value */
	public static function IsFloat($var){return is_float($var);}
	/** Checks if the file $fileName exists and is readable */
	public static function IsReadable($filename){return is_readable($filename);}
	/** Checks if the file $fileName exists and is writeable */
	public static function IsWriteable($filename){return is_writable($filename);}
	/** Ensures there's a slash at the end of the path */
	public static function CleanPath($path){return rtrim($path, self::$DS).self::$DS;}
	/** Ensures there's a slash at the end of the path */
	public static function CP($path){return rtrim($path, self::$DS).self::$DS;}
	/** Returns a string containing $count repetitions of the string $str */
	public static function Repeat($str, $count){return str_repeat($str, $count);}
	/** Returns a string resulting from replacing each occurance of $toBeReplaced with $replacement in the input string $within */
	public static function Replace($toBeReplaced, $replacement, $within){return str_replace($toBeReplaced, $replacement, $within);}
	/** Returns an array resulting from splitting the string $string at each occurance of $delimiter */
	public static function Explode($delimiter, $string){return explode($delimiter, $string);}
	/** Returns a string resulting from gluing the array of strings $pieces using $glue in between each array element */
	public static function Implode($glue, array $pieces){return implode($glue, $pieces);}
	/** Returns an indented version of $text. $text can be an array of strings or a string. If it is an array, it is converted to a string first using U::ES */
	public static function Indent($text, $indent){
		$arr = array();
		if(is_array($text)){$arr = self::ES($text);}
		else{$arr = explode(U::$NL, $text);}
		$res = '';
		foreach ($arr as $line) {
			$res .= str_repeat(self::$TAB, $indent) . $line . self::$NL;
		}
		return rtrim($res, self::$NL);
	}
	/** Returns a $_SERVER['DOCUMENT_ROOT'] with a slash at the end */
	public static function DocRoot(){return rtrim($_SERVER['DOCUMENT_ROOT'], self::$DS) . self::$DS;}
	/** Returns whether an integer flags value has the specified flag or not */
	public static function HF($value, $flag){return (($value & $flag) === 0?false:true);}
	/** Returns whether an integer flags value has the specified flag or not */
	public static function HasFlag($value, $flag){return (($value & $flag) === 0?false:true);}
};
###############################################################################
/**
 * CoreConfig - basic configuration utility for the framework. It's a singelton class so there's always only one instance
 * of the class, and all susequent constructions basically returns that object.
 */
class CoreConfig extends Object{
	private static
		/** CoreConfig::$_instance is the sole instance of the class and it can only be returned using the factory method Instance */ 
		$_instance = null;
	protected
		/** _basePath is the installation path of the MythCore framework  */
		$_basePath,
		/** The default chunk size to be read/written if a default is needed */
		$_streamDefaultChunkSize,
		/** The file extension used for php include files on this installation*/
		$_phpFilesExt = '.php',
		/** Internal storage of the debug mode. True activates debugging, false deactivatesit */
		$_debug=false,
		/** Internal storage of the debug log file location */
		$_debugFile = 'log.txt';
	/**
	 * CoreConfig::Instance() - factory method for the config class, returns the singelton instance of the class or creates 
	 * it and returns it if it hasn't been created yet.
	 */
	public static function Instance(){
		if(self::$_instance === null){
			self::$_instance = new CoreConfig();
		}
		return self::$_instance;
	}
	/** Private constructor */
	private function __construct(){
		$this->_streamDefaultChunkSize = 1024;
	}
	/** 
	 * Accessor to the BasePath Property [get, set]-[default U::DocRoot()]
	 * @return string
	 */
	public function BasePath($value=null){
		if($value === null){return $this->_basePath;}
		else{$this->_basePath = $value;}
	}
	/** 
	 * Accessor to the IndentString Property [get, set]-[default \t]. This actually modifies the value in the U utility class and
	 * affects outputting / indenting all over the framework.
	 * @return string
	 */
	public function IndentString($value=null){
		if($value === null){return U::$TAB;}
		else{U::$TAB = $value;}
	}
	/** 
	 * Accessor to the NewLineString Property [get, set]-[default \n]. This actually modifies the value in the U utility class and
	 * affects outputting / indenting all over the framework.
	 * @return string
	 */
	public function NewLineString($value=null){
		if($value === null){return U::$NL;}
		else{U::$NL = $value;}
	}
	/** 
	 * Accessor to the StreamDefaultChunkSize Property [get, set]-[default 1024]
	 * @return int
	 */
	public function StreamDefaultChunkSize($value=null){
		if($value === null){return $this->_streamDefaultChunkSize;}
		else if(is_int($value)){$this->_streamDefaultChunkSize = $value;}
	}
	/** 
	 * Accessor to the HtmlAttributesQuote Property [get, set]-[default "]. This actually modifies the value in the U utility class and
	 * affects outputting / indenting all over the framework.
	 * @return string
	 */
	public function HtmlAttributesQuote($value=null){
		if($value === null){return U::$Q;}
		else{U::$Q = $value;}
	}
	/**
	 * Accessor to the ClassFilesExtension Config Property [get, set]-[default '.php']. 
	 * the framework, otherwise it defaults to false (usual for production environments)
	 * @return string
	 */
	public function ClassFilesExtension($value=null){
		if($value === null){return $this->_phpFilesExt;}
		else{$this->_phpFilesExt = U::ES($value);}
	}
	/**
	 * Accessor to the DebugMode Config Setting [get, set]-[default false]. This is the file extension used by the class 
	 * loaderIf set to true, debugging will be enabled throughout the framework, otherwise it defaults to false 
	 * (usual for production environments)
	 * @return bool
	 */
	public function DebugMode($value=null){
		if($value === null){return $this->_debug;}
		else{$this->_debug = U::EB($value);}
	}
	/**
	 * Accessor to the DebugLogFile Config Setting [get, set]-[default log.txt]. This is used by debug classes to output
	 * log information. It returns a file path that will be used as is by those classes.
	 * @return string
	 */
	public function DebugLogFile($value=null){
		if($value === null){return $this->_debugFile;}
		else{$this->_debugFile = U::EB($value);}
	}
};
###############################################################################
/**
 * IClassLoader - Base interface for all class loader.
 */
interface IClassLoader extends IObject{
	/**
	 * Registers the class loader instance with the spl load services
	 */
	public function Register();
	/**
	 * Given a class $className, implementations of this method should be able to load the class file if the class
	 * is handled by this instance of the class loader. Returns true if the class was loaded, false otherwise.
	 * @return bool
	 */
	public function LoadClass($className);
};
###############################################################################
/**
 * Abstract class ClassLoaderBase is an optional base class for class loaders
 */
abstract class ClassLoaderBase extends Object implements IClassLoader{
	protected $_basePath;
	protected function __construct($basePath=''){
		$this->_basePath = U::NAW($basePath)?U::DocRoot():U::CP($basePath);
	}
	/** Proposed implementation of the Register method, registering LoadClass with spl autoload */
	public function Register(){spl_autoload_register(array($this, "LoadClass")); return $this;}
	/** Must be implemented in child classes to do the necessary to load classes */
	abstract public function LoadClass($className);
};
###############################################################################
class CoreLoader extends ClassLoaderBase{
	private static $_registered = false;
	protected $_ext;
	/** Constructor($basePath='', $fileExtension = '.php') */
	public function __construct($basePath='', $fileExtension = '.php'){
		parent::__construct($basePath); $this->_ext = $fileExtension;
	}
	/** 
	 * Loads the given class by looking for a file with the class's name in a directory identical to the namespacing of 
	 * the class starting at the base path. If one exists, loads it and returns true. Otherwise returns false.
	 * @return bool
	 */
	public function LoadClass($className){
		$fileName = $this->_basePath . str_replace("\\", U::$DS, $className) . $this->_ext;
		if(file_exists($fileName)){
			return require_once $fileName;
		}
		else{return false;}
	}
	/**
	 * Registers the class loader instance with the spl load services
	 * Overriden to make sure only one instnace is registered of this type of class loaders
	 */
	public function Register(){
		if(!self::$_registered){
			spl_autoload_register(array($this, "LoadClass"));
			self::$_registered = true;
		}
	}
	/**
	 * Registers the class loader instance with the spl load services
	 * In the config file, set the configurations using CoreConfig::Instance->Setting_Name then call this!
	 */
	public static function RegisterInstance(){
		$i = new CoreLoader(CoreConfig::Instance()->BasePath, CoreConfig::Instance()->ClassFilesExtension());
		$i->Register();
	}
};
?>
