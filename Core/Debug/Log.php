<?php
namespace Core\Debug;
use Core\Object;
use Core\CoreConfig;
use Core\U;
/**
 * class Log - logging class. Methods of this class will work only if CoreConfig::Instance()->DebugMode is set to true
 */
final class Log extends Object{
	private function __construct(){}
	private static function enabled(){return CoreConfig::Instance()->DebugMode;}
	private static function fileName(){return CoreConfig::Instance()->DebugLogFile;}
	public static function Out($info){
		if(CoreConfig::Instance()->DebugMode){echo $info;}
	}
	public static function OutL($info){
		if(CoreConfig::Instance()->DebugMode){echo $info . U::$NL;}
	}
	public static function OutBr($info){
		if(CoreConfig::Instance()->DebugMode){echo "{$info}<br/>" . U::$NL;}
	}
	public static function OutP($info){
		if(CoreConfig::Instance()->DebugMode){echo "<p>{$info}</p>" . U::$NL;}
	}
	
	public static function File($info){
		if(CoreConfig::Instance()->DebugMode){
			$f = fopen(CoreConfig::Instance()->DebugLogFile, 'ab');
			fwrite($f, $info);
			fflush($f);
			fclose($f);
		}
	}
	public static function FileL($info){
		if(CoreConfig::Instance()->DebugMode){
			if($f = fopen(CoreConfig::Instance()->DebugLogFile, 'ab')){
				fwrite($f, $info . U::$NL);
				fflush($f);
				fclose($f);
			}
		}
	}
};
?>