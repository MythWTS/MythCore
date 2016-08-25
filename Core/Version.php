<?php
namespace Core;
/**
 * Represents a version number (for example for a component, a library, a unit, a file .. etc)
 * @property integer $Major The major version number
 * @property integer $Minor The minor version number
 * @property integer $Revision The revision version number
 * @property integer $MajorRevision The high 16 bits of the revision number
 * @property integer $MinorRevision The low 16 bits of the revision number
 * @property integer $Build The build version number
 */
class Version extends Object{
	###########################################################################
	# Private Fields
	###########################################################################
	/**
	 * The major version component
	 * @var integer
	 */
	private $_major;
	/**
	 * The minor version component
	 * @var integer
	 */
	private $_minor;
	/**
	 * The revision version component
	 * @var integer
	 */
	private $_revision;
	/**
	 * The build version component
	 * @var integer
	 */
	private $_build;
	/**
	 * A regex pattern to be used to match components of a version string in Parse()
	 * @var string
	 */
	private static $_pattern = "/^(\\d+)\.(\\d+)(?:\.(\\d+))?(?:\.(\\d+))?$/";
	###########################################################################
	# Comparison Methods
	###########################################################################
	/**
	 * Compares this version to the supplied one and returns true if they are equal, false otherwise
	 * @param Version $version The version to compare to
	 * @return boolean
	 */
	public function IsEqualTo(Version $version){
		return $this->_major == $version->_major && $this->_minor == $version->_minor && $this->_revision == $version->_revision && $this->_build == $version->_build;
	}
	/**
	 * Compares this version to the supplied one and returns true if they are not equal, false otherwise
	 * @param Version $version The version to compare to
	 * @return boolean
	 */
	public function IsNotEqualTo(Version $version){
		return $this->_major != $version->_major || $this->_minor != $version->_minor || $this->_revision != $version->_revision || $this->_build != $version->_build;
	}
	/**
	 * Compares this version to the supplied one and returns true if this one is greater than the supplied one, false otherwise.
	 * @param Version $version The version to compare to
	 * @return boolean
	 */
	public function IsGT(Version $version){
		if($this->_major > $version->_major){return true;}
		elseif($this->_major == $version->_major){
			if($this->_minor > $version->_minor){return true;}
			elseif($this->_minor == $version->_minor){
				if($this->_revision > $version->_revision){return true;}
				elseif($this->_revision == $version->_revision){
					return $this->_build > $version->_build;
				}
			}
		}
		return false;
	}
	/**
	 * Compares this version to the supplied one and returns true if this one is greater than or equals the supplied one, false otherwise.
	 * @param Version $version The version to compare to
	 * @return boolean
	 */
	public function IsGTE(Version $version){
		return $this->IsEqualTo($version) || $this->IsGT($version);
	}
	/**
	 * Compares this version to the supplied one and returns true if this one is less than the supplied one, false otherwise.
	 * @param Version $version The version to compare to
	 * @return boolean
	 */
	public function IsLT(Version $version){
		if($this->_major < $version->_major){return true;}
		elseif($this->_major == $version->_major){
			if($this->_minor < $version->_minor){return true;}
			elseif($this->_minor == $version->_minor){
				if($this->_revision < $version->_revision){return true;}
				elseif($this->_revision == $version->_revision){
					return $this->_build < $version->_build;
				}
			}
		}
		return false;
	}
	/**
	 * Compares this version to the supplied one and returns true if this one is less than or equals the supplied one, false otherwise.
	 * @param Version $version The version to compare to
	 * @return boolean
	 */
	public function IsLTE(Version $version){
		return $this->IsEqualTo($version) || $this->IsLT($version);
	}
	###########################################################################
	# Constructor & Factory Methods
	###########################################################################
	/**
	 * Creates a new instance from the supplied components
	 * @param integer $major The major version component
	 * @param integer $minor The minor version component
	 * @param integer $revision The revision version component
	 * @param integer $build The build version component
	 */
	public function __construct($major = 0, $minor = 0, $revision = 0, $build = 0){
		$this->_major = Params::GetInsuredGTE0Int($major, "major");
		$this->_minor = Params::GetInsuredGTE0Int($minor, "minor");
		$this->_revision = Params::GetInsuredGTE0Int($revision, "revision");
		$this->_build = Params::GetInsuredGTE0Int($build, "build");
	}
	/**
	 * Parses a string value and creates a Version object that represents the version parsed from the string
	 * @param mixed $version A string-convertable value that can be parsed into a Version object
	 * @throws InvalidParameterValueException If the value supplied is not a string that can be parsed into a version object (of the format: major.minor[.build[.revision]])
	 * @return \Core\Version
	 */
	public static function Parse($version){
		$v = U::ES($version);
		$matches = array();
		if(preg_match_all(self::$_pattern, $v, $matches, PREG_SET_ORDER)){
			$componentsCount = count($matches) - 1;
			$major = (integer)$matches[1];
			$minor = (integer)$matches[2];
			$revision = $componentsCount > 2 ? (integer)$matches[3] : 0;
			$build = $componentsCount > 3 ? (integer)$matches[4] : 0;
			return new Version($major, $minor, $revision, $build);
		}
		else{
			throw new InvalidParameterValueException(
					"version", __METHOD__, "a string that can be parsed into a version object (of the format: major.minor[.build[.revision]])"
			);
		}
	}
	###########################################################################
	# Property Accessors
	###########################################################################
	/**
	 * Accessor for the Major version component
	 * @param integer $value The value to assign to this property in assign mode
	 * @return integer
	 */
	public function Major($value = null){
		if($value === null){
			return $this->_major;
		}
		else{
			$this->_major = Params::GetInsuredGTE0Int($value, "value");
		}
	}
	/**
	 * Accessor for the Minor version component
	 * @param integer $value The value to assign to this property in assign mode
	 * @return integer
	 */
	public function Minor($value = null){
		if($value === null){
			return $this->_minor;
		}
		else{
			$this->_minor = Params::GetInsuredGTE0Int($value, "value");
		}
	}
	/**
	 * Accessor for the Revision version component
	 * @param integer $value The value to assign to this property in assign mode
	 * @return integer
	 */
	public function Revision($value = null){
		if($value === null){
			return $this->_revision;
		}
		else{
			$this->_revision = Params::GetInsuredGTE0Int($value, "value");
		}
	}
	/**
	 * Gets the high 16 bits of the revision number.
	 * @return integer
	 */
	public function MajorRevision(){
		return ($this->_revision & BitMasks::$Word02->Value) >> 16;
	}
	/**
	 * Gets the low 16 bits of the revision number.
	 * @return integer
	 */
	public function MinorRevision(){
		return $this->_revision & BitMasks::$Word01->Value;
	}
	/**
	 * Accessor for the Build version component
	 * @param integer $value The value to assign to this property in assign mode
	 * @return number
	 */
	public function Build($value = null){
		if($value === null){
			return $this->_build;
		}
		else{
			$this->_build = Params::GetInsuredGTE0Int($value, "value");
		}
	}
	###########################################################################
	# Base Overrides
	###########################################################################
	/**
	 * Returns a string representation of the version number of the format major.minor.revision.build
	 * {@inheritDoc}
	 * @see \Core\Object::__toString()
	 */
	public function __toString(){
		return "{$this->_major}.{$this->_minor}.{$this->_revision}.{$this->_build}";
	}
}