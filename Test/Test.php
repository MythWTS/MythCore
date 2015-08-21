<?php
namespace Test;
use Core\Object;
/**
 * class Test\Test
 * Base class for tests, provides some very basic utilities for the child classes to use that relies on nothing but php
 * (and the Object class of the Core framework, which basically is in every package of the framework)
 */
abstract class Test extends Object implements ITest{
	/** Protected members */
	protected $_title, $_msg;
	/**
	 * protected Constructor($title='', $message='')
	 * Instantiates a new object of the class. To be used by inheritors.
	 * @param $title string [optional]
	 * The title of the test to be passed back to any consumers/users of the test object
	 * @param $message string [optional]
	 * The message (a brief description of the test) to be passed to consumers/users of the test object
	 */
	protected function __construct($title='', $message=''){
		$this->_title = $title;
		$this->_msg = $message;
	}
	/** 
	 * Abstract Run() method. This is the main method to be implemented by child classes.
	 * Should return true if the overall test succeeds and false if one of the tests fails
	 * @return bool
	 */
	abstract function Run();
	/**
	 * Hr()
	 * Outputs an hr tag in a line by itself
	 */
	public function Hr(){
		echo "<hr/>\n";
	}
	/**
	 * Out($format='', ...)
	 * Outputs the supplied string and if extra arguments are passed it substitutes any occurences of {n} within the string
	 * examples:
	 * -out('Name: {0}, Value: {1}') => outputs the string as is "Name: {0}, Value: {1}"
	 * -out('Name: {0}, Value: {1}', 'a1', 'Some value') => outputs "Name: a1, Value: Some value"
	 */
	public function Out($format=''){
		$args = func_get_args();
		$acount = func_num_args();
		$out = $format;
		if($acount>1){
			for($i=1; $i<$acount; $i++){
				$out = str_replace('{'.($i-1).'}', $args[$i], $out);
			}
		}
		echo $out;
	}
	/**
	 * Same as Out, but adds a new line character to the end of the output
	 * @see Out()
	 */
	public function OutL($format=''){
		$args = func_get_args();
		$acount = func_num_args();
		$out = $format;
		if($acount>1){
			for($i=1; $i<$acount; $i++){
				$out = str_replace('{'.($i-1).'}', $args[$i], $out);
			}
		}
		echo $out . "\n";
	}
	/**
	 * Same as Out but adds a "br" tag to the end along with a new line character
	 * @see Out()
	 */
	public function OutWBr($format=''){
		$args = func_get_args();
		$acount = func_num_args();
		$out = $format;
		if($acount>1){
			for($i=1; $i<$acount; $i++){
				$out = str_replace('{'.($i-1).'}', $args[$i], $out);
			}
		}
		echo $out . "<br/>\n";
	}
	/**
	 * Same as Out but puts the output string within a "p" tag and adds a new line character at the end.
	 * @see Out()
	 */
	public function OutP($format=''){
		$args = func_get_args();
		$acount = func_num_args();
		$out = $format;
		if($acount>1){
			for($i=1; $i<$acount; $i++){
				$out = str_replace('{'.($i-1).'}', $args[$i], $out);
			}
		}
		echo "<p>{$out}</p>\n";
	}
	/**
	 * Same as Out but puts the output string within a "h1" tag and adds a new line character at the end.
	 * @see Out()
	 */
	public function OutH1($format=''){
		$args = func_get_args();
		$acount = func_num_args();
		$out = $format;
		if($acount>1){
			for($i=1; $i<$acount; $i++){
				$out = str_replace('{'.($i-1).'}', $args[$i], $out);
			}
		}
		echo "<h1>{$out}</h1>\n";
	}
	/**
	 * Same as Out but puts the output string within a "h2" tag and adds a new line character at the end.
	 * @see Out()
	 */
	public function OutH2($format=''){
		$args = func_get_args();
		$acount = func_num_args();
		$out = $format;
		if($acount>1){
			for($i=1; $i<$acount; $i++){
				$out = str_replace('{'.($i-1).'}', $args[$i], $out);
			}
		}
		echo "<h2>{$out}</h2>\n";
	}
	/**
	 * Same as Out but puts the output string within a "h3" tag and adds a new line character at the end.
	 * @see Out()
	 */
	public function OutH3($format=''){
		$args = func_get_args();
		$acount = func_num_args();
		$out = $format;
		if($acount>1){
			for($i=1; $i<$acount; $i++){
				$out = str_replace('{'.($i-1).'}', $args[$i], $out);
			}
		}
		echo "<h3>{$out}</h3>\n";
	}
	/**
	 * Accessor for the Title property. Title to be passed to consumers/users of the test object
	 * @return string
	 */
	public function Title($value=null){
		if($value === null){return $this->_title;}
		else{$this->_title = $value;}
	}
	/**
	 * Accessor for the Message property. Message to be passed to consumers/users of the test object
	 * @return string
	 */
	public function Message($value=null){
		if($value === null){return $this->_msg;}
		else{$this->_msg = $value;}
	}
};
?>