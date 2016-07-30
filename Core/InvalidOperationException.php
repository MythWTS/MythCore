<?php
namespace Core;
/**
 * Exception thrown when an invalid operation is attempted
 * @property string Message The exception message
 * @property int Code The error code associated with this exception
 * @property string File The filename of the file where the exception occured
 * @property int Line The line number of the code line where the exception was thrown
 * @property array Trace An array representing the stack trace
 * @property Exception Previous The previous exception
 * @property string TraceAsString A string representation of the stack trace
 * @property string Operation A string explaining the operation that caused this exception
 */
class InvalidOperationException extends ExceptionBase{
	/**
	 * A string explaining the operation that caused this exception
	 * @var string
	 */
	protected $_operation;
	/**
	 * Creates a new instance of the InvalidOperationException exception
	 * @param string $operation - string explaining the operation that caused this exception
	 */
	public function __construct($operation){
		$this->_operation = $operation;
		parent::__construct("An invalid operation [{$this->_operation}] was carried out.", 1);
	}
	/**
	 * Gets the name of the parameter that caused the exception to be thrown
	 * @return string
	 */
	public function Operation(){
		return $this->_operation;
	}
}