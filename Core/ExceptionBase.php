<?php
namespace Core;
use \Exception;
/**
 * ExceptionBase is to serve as the base class for all exceptions in the MythCore framework. Since it's necessary to extend the Exception class for
 * any class to be used with PHP throw statement, this class extends \Exception and implements IObject instead of extending Object like most classes
 * in the framework. This way, it is still integrated with the framework's class heirarchy and it can be used for exception handling as well.
 * Since most of the Object class functionality is in the TObject trait, it is also used in this class
 * @property string Message - the exception message
 * @property int Code - the error code associated with this exception
 * @property string File - the filename of the file where the exception occured
 * @property int Line - the line number of the code line where the exception was thrown
 * @property array Trace - an array representing the stack trace
 * @property Exception Previous - the previous exception
 * @property string TraceAsString - a string representation of the stack trace
 */
class ExceptionBase extends Exception implements IObject{
	use TObject;
	/**
	 * Creates a new instance of the ExceptionBase class.
	 * @param string $message - The message of the exception
	 * @param int $code - the error code associated with the exception
	 * @param \Exception $previous - the previous exception that was thrown before this one
	 */
	public function __construct($message=null, $code=null, $previous=null){
		parent::__construct($message, $code, $previous);
	}
	/**
	 * Overrides the standard Exception::__toString() method and returns a string that includes most of the details.
	 * {@inheritDoc}
	 * @see Exception::__toString()
	 */
	public function __toString(){
		return "An error occured with code [{$this->code}] in file [{$this->file}] at line [{$this->line}] with message:\n{$this->message}";
	}
}