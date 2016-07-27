<?php
namespace Core;
/**
 * CoreLoader is a class implementing the default class loader for the MythCore framework. More class loaders will be added to the framework later but this
 * is the main convention that will be used in the framework. Classes are loaded from a base path that has a directory structure that copies the namespace
 * structure of the framework. Whenever a class is to be loaded, the the loader searches for a file with the class name in a directory that is the same as the
 * namespace for the class after being appended to the base path. The value for the base path and the extension of the code files is stored in a config value that can
 * be changed (usually in the config.inc file)
 */
class CoreLoader extends Object implements IClassLoader{
	/** @var bool $_registered - whether an instance has been registered or not */
	private static $_registered = false;
	protected
		/** @var string $_basePath - the base path to the installation directory of the MythCore framework files (without the Core directory) */
		$_basePath,
		/** @var string $_ext - the file extension of code files */
		$_ext;
	/**
	 * constructor of the CoreLoader class. Instantiates a new object of the class
	 * @param string $basePath - the base path to the installation directory of the MythCore framework files (without the Core directory) [default docroot]
	 * @param string $fileExtension - the file extension of code files [default '.php']
	 */
	public function __construct($basePath='', $fileExtension = '.php'){
		$this->_ext = $fileExtension;
		$this->_basePath = U::NAW($basePath)?U::DocRoot():U::CP($basePath);;
	}
	/**
	 * Loads the given class by looking for a file with the class's name in a directory identical to the namespacing of 
	 * the class starting at the base path. If one exists, loads it and returns true. Otherwise returns false.
	 * {@inheritDoc}
	 * @see \Core\IClassLoader::LoadClass()
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
		$i = new CoreLoader(CoreConfig::Instance()->BasePath, CoreConfig::Instance()->ClassFilesExtension);
		$i->Register();
	}
}