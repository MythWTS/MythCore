<?php
interface IObject{
	public function __toString();
	public function ToString();
	public function GetType();
	public function GetClassName();
	public function Is($className);
};
###############################################################################
class Object implements IObject{
	public function __toString(){return get_class($this);}
	public function ToString(){return $this->__toString();}
	public function GetType(){return Type::FromClassName(get_class($this));}
	public function GetClassName(){return get_class($this);}
	public function Is($className){return is_a($this, $className);}
	/**
	 * Magic getter.
	 * This is to enable developers to either create properties the usual way, or create the property then create a [PropertyName] method that will
	 * be called instead when retrieving the property value. These methods will usually contain both the set and get of the property.
	 */
	public function __get($propertyName){
		if(method_exists($this, $propertyName)){return call_user_func(array($this, $propertyName));}
		else if(property_exists($this, $propertyName)){return $this->$propertyName;}
		else{return null;}
	}
	/**
	 * Magic Setter.
	 * This is to enable developers to either create properties the usual way, or create the property then create a [PropertyName] method that will
	 * be called instead when assigning the property value.  These methods will usually contain both the set and get of the property.
	 */
	public function __set($propertyName, $value){
		if(method_exists($this, $propertyName)){return call_user_func(array($this, $propertyName), $value);}
		else{return ($this->{$propertyName} = $value);}
	}
};
###############################################################################
/**
 * class Type is the main class in the Reflection namespace. Currently it is a prototype implementation with the 
 * bare minimum required implementation just for the framework to function (as long as you don't expect to be using GetType for real)
 * TODO: Remove dummy implementation and replace with a real one (or remove the whole class alltogether if necessary)
 */
class Type extends Object{
	private $_className, $_moduleName, $_namespace, $_methods, $_properties;
	private function __construct($className='Object'){
		
	}
	public static function FromClassName($className){
		return new Type($className);
	}
};
###############################################################################
final class U extends Object{
	public static $TAB = "\t", $NL = "\n", $DS = DIRECTORY_SEPARATOR, $Q = '"';
	private function __construct(){}
	/** Checks to see if a variable is null or an empty string (if it's not set by the user) */
	public static function NA($var){return $var === null || $var === '';}
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
	/** Returns an indented version of $text. $text can be an array of strings or a string. If it is an array, the return is an array of the same strings indented $indent times. If it is a string, the string is split into lines and each line is indented the the results are glued back together  */
	public static function Indent($text, $indent){
		$res = '';
		if(is_array($text)){
			$res = array();
			foreach ($text as $line) {
				$res[] = str_repeat(self::$TAB, $indent) . $line;
			}
			return $res;
		}
		else{
			$arr = explode(U::$NL, $text);
			foreach ($arr as $line) {
				$res .= str_repeat(self::$TAB, $indent) . $line . self::$NL;
			}
			return $res;
		}
	}
	/** Returns a $_SERVER['DOCUMENT_ROOT'] with a slash at the end */
	public static function DocRoot(){return rtrim($_SERVER['DOCUMENT_ROOT'], self::$DS) . self::$DS;}
};
###############################################################################
class CoreConfig extends Object{
	protected $_basePath, $_streamDefaultChunkSize;
	public function __construct(){
		$this->_streamDefaultChunkSize = 1024;
	}

	public function BasePath($value=null){
		if($value === null){return $this->_basePath;}
		else{$this->_basePath = $value;}
	}
	public function IndentString($value=null){
		if($value === null){return U::$TAB;}
		else{U::$TAB = $value;}
	}
	public function NewLineString($value=null){
		if($value === null){return U::$NL;}
		else{U::$NL = $value;}
	}
	public function StreamDefaultChunkSize($value=null){
		if($value === null){return $this->_streamDefaultChunkSize;}
		else if(is_int($value)){$this->_streamDefaultChunkSize = $value;}
	}
	public function HtmlAttributesQuote($value=null){
		if($value === null){return U::$Q;}
		else{U::$Q = $value;}
	}
};
###############################################################################
interface IClassLoader{
	public function Register();
	public function LoadClass($class);
};
###############################################################################
abstract class ClassLoaderBase extends Object implements IClassLoader{
	protected $_basePath;
	protected function __construct($basePath=''){
		$this->_basePath = U::NAW($basePath)?U::DocRoot():U::CP($basePath);
	}
	public function Register(){spl_autoload_register(array($this, "LoadClass")); return $this;}
	public function LoadClass($class){
		if($this->canLoad($class)){
			require_once $this->getRequiredFileForClass($class);
		}
	}
	abstract protected function getRequiredFileForClass($className);
	abstract protected function canLoad($className);
};
###############################################################################
class CoreLoader extends ClassLoaderBase{
	private $_groups, $_classes, $_fext;
	public function __construct(array $groupedClasses, $basePath='', $filesExtension='.php'){
		parent::__construct($basePath);
		$this->_fext = $filesExtension;
		$this->_groups = array(); $this->_classes = array(); $groupKey = 0;
		foreach ($groupedClasses as $group => $classes) {
			$this->_groups[$groupKey] = $group;
			foreach ($classes as $class) {$this->_classes[$class] = $groupKey;}
			$groupKey++;
		}
	}
	protected function canLoad($className){return array_key_exists($className, $this->_classes);}
	protected function getRequiredFileForClass($className){
		$group = U::CP($this->_groups[$this->_classes[$className]]);
		return "{$this->_basePath}{$group}{$className}{$this->_fext}";
	}
	public function AddClass($className, $classGroupName){
		$group = array_search($classGroupName, $this->_groups);
		if($group === false){$group = count($this->_groups); $this->_groups[$group] = $classGroupName;}
		$this->_classes[$className] = $group;
		return $this;
	}
	public function AddGroup($classGroupName){
		$group = array_search($classGroupName, $this->_groups);
		if($group === false){$group = count($this->_groups); $this->_groups[$group] = $classGroupName;}
		return $this;
	}
};

?>