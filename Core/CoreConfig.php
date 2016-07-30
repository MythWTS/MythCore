<?php
namespace Core;
/**
 * CoreConfig is a singleton class that holds basic essential configuration settings for the whole of the MythCore framework. The settings stored
 * here affects the whole of the framework and are hardcoded into code files and can only be changed using code denoting their importance.
 * @property string $BasePath The base path to the installation root (usually the document root of the server)
 * @property string $CoreDirectory The name of the Core directory (without the path)
 * @property boolean $DebugMode Whether the debugging mode is enabled or not 
 * @property string $DebugLogFile The path to the debug log file
 * @property string $IndentString The currently used tab character by the framework
 * @property string $NewLineString The currently used newline character by the framework
 * @property string $HtmlAttributesQuote The currently used quoting character throughout the framework
 * @property integer $StreamDefaultChunkSize The currently used chunk size for streams in the framework
 * @property string $ClassFilesExtension The currently used file extension for code files for the class loader
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
	###########################################################################
	# Public Config Properties
	###########################################################################
	# Path Config Properties
	###################################
	/**
	 * Accessor to the BasePath Property [get, set]-[default U::DocRoot()]
	 * @param string $value - the base path to assign to this property
	 * @return string - the base path to the installation root (usually the document root of the server)
	 */
	public function BasePath($value=null){
		if($value === null){return $this->_basePath;}
		else{$this->_basePath = U::ES($value);}
	}
	/**
	 * Accessor to the CoreDirectory Property [get, set]-[default 'Core']
	 * @param string $value - the name of the Core directory (without the path) to be assigned to the property
	 * @return string - the name of the Core directory (without the path)
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
	 * @param boolean $value - the value to assign to this property (true enables the debugging mode)
	 * @return boolean - whether the debugging mode is enabled or not
	 */
	public function DebugMode($value=null){
		if($value === null){return $this->_debug;}
		else{$this->_debug = U::EB($value);}
	}
	/**
	 * Accessor to the DebugLogFile Config Setting [get, set]-[default log.txt]. This is used by debug classes to output
	 * log information. It returns a file path that will be used as is by those classes.
	 * @param string $value - the log file path to assign to this property
	 * @return string - the path to the debug log file
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
	 * @param string $value - the tab character to use across the framework
	 * @return string - the currently used tab character by the framework
	 */
	public function IndentString($value=null){
		if($value === null){return U::$TAB;}
		else{U::$TAB = U::ES($value);}
	}
	/**
	 * Accessor to the NewLineString Property [get, set]-[default \n]. This actually modifies the value in the U utility class and
	 * affects outputting / indenting all over the framework.
	 * @param string $value - the newline character to use across the framework
	 * @return string - the currently used newline character by the framework
	 */
	public function NewLineString($value=null){
		if($value === null){return U::$NL;}
		else{U::$NL = $value;}
	}
	/**
	 * Accessor to the HtmlAttributesQuote Property [get, set]-[default "]. This actually modifies the value in the U utility class and
	 * affects outputting / indenting all over the framework.
	 * @param string $value - the quoting character to use across the framework
	 * @return string - the currently used quoting character throughout the framework
	 */
	public function HtmlAttributesQuote($value=null){
		if($value === null){return U::$Q;}
		else{U::$Q = $value;}
	}
	# Misc Config Properties
	###################################
	/**
	 * Accessor to the StreamDefaultChunkSize Property [get, set]-[default 1024]
	 * @param integer $value - the value to be assigned to this property
	 * @return integer - the currently used chunk size for streams in the framework
	 */
	public function StreamDefaultChunkSize($value=null){
		if($value === null){return $this->_streamDefaultChunkSize;}
		else if(is_int($value)){$this->_streamDefaultChunkSize = $value;}
	}
	/**
	 * Accessor to the ClassFilesExtension Config Property [get, set]-[default '.php'].
	 * The extension should include the dot if it uses it
	 * @param string $value - the file extension to be used for code files in the class loader, including the dot
	 * @return string - the currently used file extension for code files for the class loader
	 */
	public function ClassFilesExtension($value=null){
		if($value === null){return $this->_phpFilesExt;}
		else{$this->_phpFilesExt = U::ES($value);}
	}
}