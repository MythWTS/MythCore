<?php
namespace Core;
/**
 * Provides information about a certain type. Part of the reflection feature, and is based partly on the Reflection extension.
 * 
 * @property boolean $IsPrimitive Whether the type is a primitive php type (string, integer, float, boolean, array, null)
 * @property boolean $IsBuiltIn Whether the type is defined internally by an extension, or the core, as opposed to user-defined.
 * @property boolean $IsInternal Whether the type is defined internally by an extension, or the core, as opposed to user-defined. Alias of IsBuiltIn
 * @property boolean $IsInterface Whether the type is an interface
 * @property boolean $IsTrait Whether the type is a trait
 * @property boolean $IsClass Whether the type is a class
 * @property boolean $IsFinal Whether the type is marked as final
 * @property boolean $IsAbstract Whether the type is abstract
 * @property boolean $IsInNamespace Whether the type is in a namespace or in the root namespace
 * @property boolean $IsUserDefined Whether the type is a user defined one (as opposed to being core PHP type)
 * @property boolean $IsInstantiable Whether the type can be used to instantiate objects using the new keyword
 * @property boolean $IsAnonymous If the type is an anonymous type
 * @property boolean $HasConstants Whether the type has constants
 * @property boolean $HasProperties Whether the type has properties/fields
 * @property boolean $HasPublicProperties Whether the type has public properties
 * @property boolean $HasProtectedProperties Whether the type has protected properties
 * @property boolean $HasPrivateProperties Whether the type has private properties
 * @property boolean $HasStaticProperties Whether the type has static properties
 * @property boolean $HasStaticPublicProperties Whether the type has static public properties
 * @property boolean $HasStaticProtectedProperties Whether the type has static protected properties
 * @property boolean $HasStaticPrivateProperties Whether the type has static private properties
 * @property boolean $HasMethods Whether the type has methods
 * @property boolean $HasPublicMethods Whether the type has public methods
 * @property boolean $HasProtectedMethods Whether the type has protected methods
 * @property boolean $HasPrivateMethods Whether the type has private methods
 * @property boolean $HasStaticMethods Whether the type has static methods
 * @property boolean $HasStaticPublicMethods Whether the type has static public methods
 * @property boolean $HasStaticProtectedMethods Whether the type has static protected methods
 * @property boolean $HasStaticPrivateMethods Whether the type has static private methods
 * @property boolean $HasAbstractMethods Whether the type has abstract methods
 * @property boolean $HasAbstractPublicMethods Whether the type has abstract public methods
 * @property boolean $HasAbstractProtectedMethods Whether the type has abstract protected methods
 * @property boolean $HasFinalMethods Whether the type has final methods
 * @property boolean $HasFinalPublicMethods Whether the type has final public methods
 * @property boolean $HasFinalProtectedMethods Whether the type has final protected methods
 * @property string $NamespaceName The namespace the type belongs to
 * @property string $Name The name of the type (without the namespace)
 * @property string $FullName The full name of the type (including the namespace)
 * @property string[] $Constants An array of any constants defined in the type
 * @property string[] $Properties An array of any properties defined in the type
 * @property string[] $PublicProperties An array of any public properties defined in the type
 * @property string[] $ProtectedProperties An array of any protected properties defined in the type
 * @property string[] $PrivateProperties An array of any private properties defined in the type
 * @property string[] $StaticProperties An array of any static properties defined in the type
 * @property string[] $StaticPublicProperties An array of any static public properties defined in the type
 * @property string[] $StaticProtectedProperties An array of any static protected properties defined in the type
 * @property string[] $StaticPrivateProperties An array of any static private properties defined in the type
 * @property string[] $Methods An array of methods names defined in the type
 * @property string[] $PublicMethods An array of public methods names defined in the type
 * @property string[] $ProtectedMethods An array of protected methods names defined in the type
 * @property string[] $PrivateMethods An array of private methods names defined in the type
 * @property string[] $StaticMethods An array of static methods names defined in the type
 * @property string[] $StaticPublicMethods An array of static public methods names defined in the type
 * @property string[] $StaticProtectedMethods An array of static protected methods names defined in the type
 * @property string[] $StaticPrivateMethods An array of static private methods names defined in the type
 * @property string[] $AbstractMethods An array of abstract methods names defined in the type
 * @property string[] $AbstractPublicMethods An array of abstract public methods names defined in the type
 * @property string[] $AbstractProtectedMethods An array of abstract protected methods names defined in the type
 * @property string[] $FinalMethods An array of final methods names defined in the type
 * @property string[] $FinalPublicMethods An array of final public methods names defined in the type
 * @property string[] $FinalProtectedMethods An array of final protected methods names defined in the type
 * @property string[] $Interfaces An array of the names of the interfaces implemented by the type at hand
 * @property string $ParentClass The fully qualified name of the parent class or an empty string if the type has no parent or the type is not a class
 * @property string[] $Traits An array of the names of the traits used by this type
 */
final class Type extends Object{
	###########################################################################
	# Private Fields
	###########################################################################
	/**
	 * Whether the type is a primitive php type (string, integer, float, boolean, array, null)
	 * @var bool
	 */
	private $_isPrimitive;
	/**
	 * Whether the type is defined internally by an extension, or the core, as opposed to user-defined.
	 * @var bool
	 */
	private $_isBuiltIn;
	/**
	 * Whether the type is an interface
	 * @var bool
	 */
	private $_isInterface;
	/**
	 * Whather the type is a trait
	 * @var bool
	 */
	private $_isTrait;
	/**
	 * Whether the type is a class
	 * @var bool
	 */
	private $_isClass;
	/**
	 * Whether the type is a class that is final
	 * @var bool
	 */
	private $_isFinal;
	/**
	 * Whether the type is abstract
	 * @var bool
	 */
	private $_isAbstract;
	/**
	 * The namespace of the type if it exists, empty string if it doesn't
	 * @var string
	 */
	private $_namespace;
	/**
	 * The short name of the type (the name of the type or clas without the namespace)
	 * @var string
	 */
	private $_typeName;
	/**
	 * The internal reflection class object
	 * @var \ReflectionClass
	 */
	private $_reflect;
	###########################################################################
	# Static Fields
	###########################################################################
	/**
	 * @var \Core\Type $_int An off-the-shelf Type object to represent the native/primitive integer type
	 * @var \Core\Type $_float An off-the-shelf Type object to represent the native/primitive float type
	 * @var \Core\Type $_bool An off-the-shelf Type object to represent the native/primitive boolean type
	 * @var \Core\Type $_string An off-the-shelf Type object to represent the native/primitive string type
	 * @var \Core\Type $_array An off-the-shelf Type object to represent the native/primitive array type
	 * @var \Core\Type $_null An off-the-shelf Type object to represent the native/primitive null type
	 */
	private static $_int, $_float, $_bool, $_string, $_array, $_null;
	###########################################################################
	# Static Properties
	###########################################################################
	/**
	 * Returns an off-the-shelf Type object representing the native PHP integer type
	 * @return \Core\Type
	 */
	public static function PHPInt(){return self::$_int;}
	/**
	 * Returns an off-the-shelf Type object representing the native PHP float type
	 * @return \Core\Type
	 */
	public static function PHPFloat(){return self::$_float;}
	/**
	 * Returns an off-the-shelf Type object representing the native PHP bool type
	 * @return \Core\Type
	 */
	public static function PHPBool(){return self::$_bool;}
	/**
	 * Returns an off-the-shelf Type object representing the native PHP string type
	 * @return \Core\Type
	 */
	public static function PHPString(){return self::$_string;}
	/**
	 * Returns an off-the-shelf Type object representing the native PHP array type
	 * @return \Core\Type
	 */
	public static function PHPArray(){return self::$_array;}
	/**
	 * Returns an off-the-shelf Type object representing the native PHP null type
	 * @return \Core\Type
	 */
	public static function PHPNull(){return self::$_null;}
	###########################################################################
	# Constructor & Factory Methods
	###########################################################################
	/**
	 * Static Constructor
	 */
	public static function Initialize(){
		self::$_array = new Type("array");
		self::$_bool = new Type("boolean");
		self::$_float = new Type("float");
		self::$_int = new Type("integer");
		self::$_null = new Type("null");
		self::$_string = new Type("string");
	}
	/**
	 * Creates a new Type object from the fully qualified name of a class or type. For essential/trivial types use int, integer, float, string, bool, boolean, null, array
	 * Note that aliases of primitive types are allowed and will be converted to the actual name as follows:
	 * <ul>
	 * 	<li>int, long => integer</li>
	 * 	<li>bool => boolean</li>
	 * 	<li>double, real => float</li>
	 * </ul>
	 * @param string $fullyQualifiedName The fully qualified name of the type to create an instance of the Type class for
	 * @throws InvalidParameterValueException If the name supplied is not a valid type or class name
	 */
	public function __construct($fullyQualifiedName){
		$name = U::ES($fullyQualifiedName);
		if(U::NAE($name)){
			throw new InvalidParameterValueException("fullyQualifiedName", "Type()", "a value convertable to a non-empty string");
		}
		if(
				$name == "string" || $name == "array" || $name == "null" ||
				$name == "bool" || $name == "boolean" || $name == "int" || $name == "integer" || $name == "long" ||
				$name == "float" || $name == "real" || $name == "double"
		){
			$this->_isAbstract = $this->_isInterface = $this->_isTrait = $this->_isClass = false;
			$this->_isPrimitive = $this->_isBuiltIn = $this->_isFinal = true;
			$n = $name;
			if($n == "int" || $n == "long"){
				$n = "integer";
			}
			elseif ($n == "double" || $n == "real"){
				$name = "float";
			}
			elseif ($n == "bool"){
				$n = "boolean";
			}
			$this->_typeName = $n;
			$this->_namespace = "";
			$this->_reflect = null;
		}
		elseif (class_exists($name) || interface_exists($name) || trait_exists($name)){
			$ref = new \ReflectionClass($name); $this->_reflect = $ref;
			$this->_isAbstract = $ref->isAbstract();
			$this->_isBuiltIn = $ref->isInternal();
			$this->_isFinal = $ref->isFinal();
			$this->_isInterface = $ref->isInterface();
			$this->_isPrimitive = false;
			$this->_isTrait = $ref->isTrait();
			$this->_isClass = !$this->_isInterface && !$this->_isTrait;
			$this->_namespace = $ref->inNamespace()?$ref->getNamespaceName() : "";
			$this->_typeName = $ref->getShortName();
		}
		else{
			throw new InvalidParameterValueException(
					"fullyQualifiedName",
					"Type()",
					"a value that, when converted to a string, is a valid class, interface, trait or primitive type name"
			);
		}
	}
	/**
	 * Takes a variable and detects the type and then return a Type object representing that type
	 * @param mixed $object The object to detect the type of and return a Type object representing that type
	 * @throws InvalidParameterValueException If the object parameter is not a valid type of objects or variables
	 * @return \Core\Type
	 */
	public static function Of($object){
		if(is_object($object)){
			return new Type(get_class($object));
		}
		elseif (is_null($object)){return self::$_null;}
		elseif (is_array($object)){return self::$_array;}
		elseif (is_bool($object)){return self::$_bool;}
		elseif (is_int($object)){return self::$_int;}
		elseif (is_float($object)){return self::$_float;}
		elseif (is_string($object)){return self::$_string;}
		else {
			throw new InvalidParameterValueException("object", "\\Core\\Type::Of()", "a valid object, primitive type variable, interface, trait, or null");
		}
	}
	###########################################################################
	# Flag Properties
	###########################################################################
	/**
	 * Whether the type is a primitive php type (string, integer, float, boolean, array, null)
	 * @return boolean
	 */
	public function IsPrimitive(){
		return $this->_isPrimitive;
	}
	/**
	 * Whether the type is defined internally by an extension, or the core, as opposed to user-defined.
	 * @return boolean
	 */
	public function IsBuiltIn(){
		return $this->_isBuiltIn;
	}
	/**
	 * Whether the type is defined internally by an extension, or the core, as opposed to user-defined. Alias of IsBuiltIn
	 * @return boolean
	 */
	public function IsInternal(){
		return $this->_isBuiltIn;
	}
	/**
	 * Whether the type is an interface
	 * @return boolean
	 */
	public function IsInterface(){
		return $this->_isInterface;
	}
	/**
	 * Whether the type is a trait
	 * @return boolean
	 */
	public function IsTrait(){
		return $this->_isTrait;
	}
	/**
	 * Whether the type is a class
	 * @return boolean
	 */
	public function IsClass(){
		return $this->_isClass;
	}
	/**
	 * Whether the type is marked as final
	 * @return boolean
	 */
	public function IsFinal(){
		return $this->_isFinal;
	}
	/**
	 * Whether the type is abstract
	 * @return boolean
	 */
	public function IsAbstract(){
		return $this->_isAbstract;
	}
	/**
	 * Whether the type is in a namespace or in the root namespace
	 * @return boolean
	 */
	public function IsInNamespace(){
		return $this->_namespace != "";
	}
	/**
	 * Whether the type is a user defined one (as opposed to being core PHP type)
	 * @return boolean
	 */
	public function IsUserDefined(){
		return !$this->_isPrimitive && !$this->_isBuiltIn;
	}
	/**
	 * Whether the type can be used to instantiate objects using the new keyword
	 * @return boolean
	 */
	public function IsInstantiable(){
		return $this->_isPrimitive ? false : $this->_reflect->isInstantiable();
	}
	/**
	 * If the type is an anonymous type
	 * @return boolean
	 */
	public function IsAnonymous(){
		return $this->_isPrimitive ? false : $this->_reflect->isAnonymous();
	}
	###########################################################################
	# Check Properties
	###########################################################################
	/**
	 * Whether the type has constants
	 * @return boolean
	 */
	public function HasConstants(){
		return $this->_isPrimitive ? false : count($this->_reflect->getConstants()) != 0; 
	}
	/**
	 * Whether the type has properties/fields
	 * @return boolean
	 */
	public function HasProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties()) != 0;
	}
	/**
	 * Whether the type has public properties
	 * @return boolean
	 */
	public function HasPublicProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties(\ReflectionProperty::IS_PUBLIC)) != 0;
	}
	/**
	 * Whether the type has protected properties
	 * @return boolean
	 */
	public function HasProtectedProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties(\ReflectionProperty::IS_PROTECTED)) != 0;
	}
	/**
	 * Whether the type has private properties
	 * @return boolean
	 */
	public function HasPrivateProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties(\ReflectionProperty::IS_PRIVATE)) != 0;
	}
	/**
	 * Whether the type has static properties
	 * @return boolean
	 */
	public function HasStaticProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties(\ReflectionProperty::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has static public properties
	 * @return boolean
	 */
	public function HasStaticPublicProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has static protected properties
	 * @return boolean
	 */
	public function HasStaticProtectedProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties(\ReflectionProperty::IS_PROTECTED | \ReflectionProperty::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has static private properties
	 * @return boolean
	 */
	public function HasStaticPrivateProperties(){
		return $this->_isPrimitive ? false : count($this->_reflect->getProperties(\ReflectionProperty::IS_PRIVATE | \ReflectionProperty::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has methods
	 * @return boolean
	 */
	public function HasMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods()) != 0;
	}
	/**
	 * Whether the type has public methods
	 * @return boolean
	 */
	public function HasPublicMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_PUBLIC)) != 0;
	}
	/**
	 * Whether the type has protected methods
	 * @return boolean
	 */
	public function HasProtectedMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_PROTECTED)) != 0;
	}
	/**
	 * Whether the type has private methods
	 * @return boolean
	 */
	public function HasPrivateMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_PRIVATE)) != 0;
	}
	/**
	 * Whether the type has static methods
	 * @return boolean
	 */
	public function HasStaticMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has static public methods
	 * @return boolean
	 */
	public function HasStaticPublicMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_PUBLIC | \ReflectionMethod::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has static protected methods
	 * @return boolean
	 */
	public function HasStaticProtectedMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_PROTECTED | \ReflectionMethod::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has static private methods
	 * @return boolean
	 */
	public function HasStaticPrivateMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_PRIVATE | \ReflectionMethod::IS_STATIC)) != 0;
	}
	/**
	 * Whether the type has abstract methods
	 * @return boolean
	 */
	public function HasAbstractMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_ABSTRACT)) != 0;
	}
	/**
	 * Whether the type has abstract public methods
	 * @return boolean
	 */
	public function HasAbstractPublicMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_ABSTRACT | \ReflectionMethod::IS_PUBLIC)) != 0;
	}
	/**
	 * Whether the type has abstract protected methods
	 * @return boolean
	 */
	public function HasAbstractProtectedMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_ABSTRACT | \ReflectionMethod::IS_PROTECTED)) != 0;
	}
	/**
	 * Whether the type has final methods
	 * @return boolean
	 */
	public function HasFinalMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_FINAL)) != 0;
	}
	/**
	 * Whether the type has final public methods
	 * @return boolean
	 */
	public function HasFinalPublicMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_FINAL | \ReflectionMethod::IS_PUBLIC)) != 0;
	}
	/**
	 * Whether the type has final protected methods
	 * @return boolean
	 */
	public function HasFinalProtectedMethods(){
		return $this->_isPrimitive ? false : count($this->_reflect->getMethods(\ReflectionMethod::IS_FINAL | \ReflectionMethod::IS_PROTECTED)) != 0;
	}
	###########################################################################
	# Type Information Properties 
	###########################################################################
	/**
	 * The namespace the type belongs to
	 * @return string
	 */
	public function NamespaceName(){
		return $this->_namespace;
	}
	/**
	 * The name of the type (without the namespace)
	 * @return string
	 */
	public function Name(){
		return $this->_typeName;
	}
	/**
	 * The full name of the type (including the namespace)
	 * @return string
	 */
	public function FullName(){
		return $this->_isPrimitive? $this->_typeName : "{$this->_namespace}\\{$this->_typeName}";
	}
	/**
	 * The fully qualified name of the parent class or an empty string if the type has no parent or the type is not a class
	 * @return string
	 */
	public function ParentClass(){
		if ($this->_isPrimitive){
			return "";
		}
		elseif ($p = $this->_reflect->getParentClass()){
			return $p->getName();
		}
		else{
			return "";
		}
	}
	/**
	 * The names of the interfaces implemented by the type at hand.
	 * @return string[]
	 */
	public function Interfaces(){
		return $this->_isPrimitive ? array() : $this->_reflect->getInterfaceNames();
	}
	/**
	 * The names of the traits used by this type
	 * @return string[]
	 */
	public function Traits(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$ts = $this->_reflect->getTraitNames();
			return $ts ?: array();
		}
	}
	###########################################################################
	# Members Properties 
	###########################################################################
	/**
	 * Gets an array of constants names defined in this type. Empty array if the type is primitive or does not have any constants
	 * @return string[][]
	 */
	public function Constants(){
		return $this->_isPrimitive ? array() : $this->_reflect->getConstants();
	}
	/**
	 * An array of any properties names defined in the type
	 * @return string[]
	 */
	public function Properties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties();
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of any public properties names defined in the type
	 * @return string[]
	 */
	public function PublicProperties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties(\ReflectionProperty::IS_PUBLIC);
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of any protected properties defined in the type
	 * @return string[]
	 */
	public function ProtectedProperties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties(\ReflectionProperty::IS_PROTECTED);
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of any private properties names defined in the type
	 * @return string[]
	 */
	public function PrivateProperties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties(\ReflectionProperty::IS_PRIVATE);
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of any static properties names defined in the type
	 * @return string[]
	 */
	public function StaticProperties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties(\ReflectionProperty::IS_STATIC);
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of any static public properties names defined in the type
	 * @return string[]
	 */
	public function StaticPublicProperties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties(\ReflectionProperty::IS_STATIC | \ReflectionProperty::IS_PUBLIC);
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of any static protected properties names defined in the type
	 * @return string[]
	 */
	public function StaticProtectedProperties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties(\ReflectionProperty::IS_STATIC | \ReflectionProperty::IS_PROTECTED);
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of any static private properties names defined in the type
	 * @return string[]
	 */
	public function StaticPrivateProperties(){
		if($this->_isPrimitive){
			return array();
		}
		else{
			$res = array();
			$props = $this->_reflect->getProperties(\ReflectionProperty::IS_STATIC | \ReflectionProperty::IS_PRIVATE);
			foreach ($props as $prop){
				$res[] = $prop->name;
			}
			return $res;
		}
	}
	/**
	 * An array of methods names defined in the type
	 * @return string[]
	 */
	public function Methods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods();
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of public methods names defined in the type
	 * @return string[]
	 */
	public function PublicMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_PUBLIC);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of protected methods names defined in the type
	 * @return string[]
	 */
	public function ProtectedMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_PROTECTED);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of private methods names defined in the type
	 * @return string[]
	 */
	public function PrivateMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_PRIVATE);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of static methods names defined in the type
	 * @return string[]
	 */
	public function StaticMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_STATIC);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of static public methods names defined in the type
	 * @return string[]
	 */
	public function StaticPublicMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_STATIC | \ReflectionMethod::IS_PUBLIC);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of static protected methods names defined in the type
	 * @return string[]
	 */
	public function StaticProtectedMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_STATIC | \ReflectionMethod::IS_PROTECTED);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of static private methods names defined in the type
	 * @return string[]
	 */
	public function StaticPrivateMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_STATIC | \ReflectionMethod::IS_PRIVATE);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of abstract methods names defined in the type
	 * @return string[]
	 */
	public function AbstractMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_ABSTRACT);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of abstract public methods names defined in the type
	 * @return string[]
	 */
	public function AbstractPublicMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_ABSTRACT | \ReflectionMethod::IS_PUBLIC);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of abstract protected methods names defined in the type
	 * @return string[]
	 */
	public function AbstractProtectedMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_ABSTRACT | \ReflectionMethod::IS_PROTECTED);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of final methods names defined in the type
	 * @return string[]
	 */
	public function FinalMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_FINAL);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of final public methods names defined in the type
	 * @return string[]
	 */
	public function FinalPublicMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_FINAL | \ReflectionMethod::IS_PUBLIC);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
	/**
	 * An array of final protected methods names defined in the type
	 * @return string[]
	 */
	public function FinalProtectedMethods(){
		if($this->_isPrimitive){
			return array();
		}
		else {
			$res = array();
			$methods = $this->_reflect->getMethods(\ReflectionMethod::IS_FINAL | \ReflectionMethod::IS_PROTECTED);
			foreach ($methods as $method){
				$res[] = $method->name;
			}
			return $res;
		}
	}
}
Type::Initialize();