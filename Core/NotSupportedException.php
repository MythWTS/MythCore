<?php
namespace Core;
/**
 * Thrown when a feature is not supported, like say joining arrays or something
 * @property string Message The exception message
 * @property int Code The error code associated with this exception
 * @property string File The filename of the file where the exception occured
 * @property int Line The line number of the code line where the exception was thrown
 * @property array Trace An array representing the stack trace
 * @property Exception Previous The previous exception
 * @property string TraceAsString A string representation of the stack trace
 * @property string FeatureName A string describing the name of the unsupported feature
 */
class NotSupportedException extends ExceptionBase{
	/**
	 * The name of the feature that is not supported
	 * @var string
	 */
	protected $_featureName;
	/**
	 * Creates a new instance of the exception
	 * @param string $featureName The name of the feature that is not supported to be added to the exception's message
	 */
	public function __construct($featureName){
		$this->_featureName = $featureName;
		parent::__construct("The feature [{$this->_featureName}] is not supported.", 3);
	}
	/**
	 * Gets the name of the unimplemented feature
	 * @return string
	 */
	public function FeatureName(){
		return $this->_featureName;
	}
}