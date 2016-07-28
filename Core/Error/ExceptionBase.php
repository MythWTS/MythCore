<?php
namespace Core\Error;
use Core\IObject;
use Core\TObject;
/**
 * ExceptionBase is to serve as the base class for all exceptions in the MythCore framework. Since it's necessary to extend the Exception class for
 * any class to be used with PHP throw statement, this class extends \Exception and implements IObject instead of extending Object like most classes
 * in the framework. This way, it is still integrated with the framework's class heirarchy and it can be used for exception handling as well.
 * Since most of the Object class functionality is in the TObject trait, it is also used in this class
 * @property string Message
 * @property int Code
 * @property string File
 * @property int Line
 * @property array Trace
 * @property Exception Previous
 * @property string TraceAsString
 */
class ExceptionBase extends \Exception implements IObject{
	use TObject;
	/**
	 * Overrides the standard Exception::__toString() method and returns a string that includes most of the details.
	 * {@inheritDoc}
	 * @see Exception::__toString()
	 */
	public function __toString(){
		return "An error occured with code [{$this->code}] in file [{$this->file}] at line [{$this->line}] with message:\n{$this->message}";
	}
}