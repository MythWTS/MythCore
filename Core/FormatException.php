<?php
namespace Core;
/**
 * Thrown when a format string is not well formatted or the format of a string is not valid in general
 * @property string $Message The exception message
 * @property int $Code The error code associated with this exception
 * @property string $File The filename of the file where the exception occured
 * @property int $Line The line number of the code line where the exception was thrown
 * @property array $Trace An array representing the stack trace
 * @property Exception $Previous The previous exception
 * @property string $TraceAsString A string representation of the stack trace
 */
class FormatException extends ExceptionBase{
	/**
	 * Creates a new instance of the exception
	 * @param string $featureName
	 */
	public function __construct(){
		parent::__construct("An invalid format or format string was used", 4);
	}
}