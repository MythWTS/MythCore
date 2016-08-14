<?php
namespace Core;
/**
 * Thrown when the implementation of a method or function is not available yet. Mainly used during code development.
 * @property string Message The exception message
 * @property int Code The error code associated with this exception
 * @property string File The filename of the file where the exception occured
 * @property int Line The line number of the code line where the exception was thrown
 * @property array Trace An array representing the stack trace
 * @property Exception Previous The previous exception
 * @property string TraceAsString A string representation of the stack trace
 * @property string FeatureName A string describing the name of the unimplemented feature
 */
class NotImplementedException extends ExceptionBase{
	/**
	 * The name of the feature that is not implemented
	 * @var string
	 */
	protected $_featureName;
	/**
	 * Creates a new instance of the exception
	 * @param string $featureName The name of the feature that is not implemented to be added to the standard exception message
	 */
	public function __construct($featureName){
		$this->_featureName = $featureName;
		parent::__construct("The feature [{$this->_featureName}] is not implemented yet.", 2);
	}
	/**
	 * Gets the name of the unimplemented feature
	 * @return string
	 */
	public function FeatureName(){
		return $this->_featureName;
	}
}