<?php
namespace Core\UI\BS;
use Core\U;
use Core\UI\Html\Nodes\ContainerElement;
/**
 * Represents a bootstrap grid column
 * Constructor(
 * 		$tag='div', $contents='', $id='',
 * 		ColumnDeviceOptions $xsmallOptions=null,
 * 		ColumnDeviceOptions $smallOptions=null,
 * 		ColumnDeviceOptions $mediumOptions=null,
 * 		ColumnDeviceOptions $largeOptions=null,
 * 		$indentContents=true
 * )
 */
class Column extends ContainerElement{
	############################################################################
	# Protected Fields
	############################################################################
	protected $_xs, $_sm, $_md, $_lg;
	############################################################################
	# Constructor
	############################################################################
	/**
	 * Constructor(
	 * 		$tag='div', $contents='', $id='',
	 * 		ColumnDeviceOptions $xsmallOptions=null,
	 * 		ColumnDeviceOptions $smallOptions=null,
	 * 		ColumnDeviceOptions $mediumOptions=null,
	 * 		ColumnDeviceOptions $largeOptions=null,
	 * 		$indentContents=true
	 * )
	 */
	public function __construct(
		$tag='div', $contents='', $id='',
		ColumnDeviceOptions $xsmallOptions=null,
		ColumnDeviceOptions $smallOptions=null,
		ColumnDeviceOptions $mediumOptions=null,
		ColumnDeviceOptions $largeOptions=null,
		$indentContents=true
	){
		if(U::NA($xsmallOptions) && U::NA($smallOptions) && U::NA($mediumOptions) && U::NA($largeOptions)){
			$this->_lg = new ColumnDeviceOptions(Devices::$LG);
			$this->_md = new ColumnDeviceOptions(Devices::$MD);
			$this->_sm = new ColumnDeviceOptions(Devices::$SM);
			$this->_xs = new ColumnDeviceOptions(Devices::$XS, 12);
		}
		else{
			$this->_lg = $largeOptions?:new ColumnDeviceOptions(Devices::$LG);
			$this->_md = $mediumOptions?:new ColumnDeviceOptions(Devices::$MD);
			$this->_sm = $smallOptions?:new ColumnDeviceOptions(Devices::$SM);
			$this->_xs = $xsmallOptions?:new ColumnDeviceOptions(Devices::$XS);
		}
		parent::__construct($tag, null, $contents, $id, '', '', '', $indentContents);
		$this->addDeviceOptionsClasses();
	}
	############################################################################
	# Protected Utility Methods
	############################################################################
	protected function addDeviceOptionsClasses(){
		foreach($this->_lg->GetClasses() as $class){$this->AddClassOnce($class);}
		foreach($this->_md->GetClasses() as $class){$this->AddClassOnce($class);}
		foreach($this->_sm->GetClasses() as $class){$this->AddClassOnce($class);}
		foreach($this->_xs->GetClasses() as $class){$this->AddClassOnce($class);}
	}
	############################################################################
	# Base Overrides
	############################################################################
	/** Accessor for the "class" html attribute. Overrides base class(HtmlElement) behavior by enforcing a set of classes to the element when a new value is assigned to the class attribute */
	public function Classes($value=null){
		if($value===null){return $this->_attributes['class'];}
		else{
			$this->_attributes['class'] = U::ES($value);
			$this->addDeviceOptionsClasses();
		}
	}
	/** Set the attribute to the supplied value, add it if it does not exist. Overriden from base(HtmlElement) to also make sure the element always have the set of enforced classes in case the user is setting the class attribute */
	public function SetAttribute($name, $value){
		parent::SetAttribute($name, $value);
		$name = strtolower(U::ES($name));
		if($name=='class'){$this->addDeviceOptionsClasses();}
	}
	/** Removes the attribute with the supplied name if it exists, nothing if it does not. Overriden from base(HtmlElement) to also make sure the element always have the set of enforced classes in case the user is removing the class attribute */
	public function RemoveAttribute($name){
		parent::RemoveAttribute($name);
		if($name=='class'){$this->addDeviceOptionsClasses();}
	}
	/** 
	 * Accessor for the Attributes property
	 * get - returns the array of attributes
	 * set - extract attributes from the supplied array (any members that have a key that is string or can be converted to string and not white spaces)
	 * no checks are done on the validity of the names of attributes so far
	 * Overriden to ensure the element always has the enforced classes
	 */
	public function Attributes(array $value=null){
		if($value===null){return $this->_attributes;}
		else{
			parent::Attributes($value);
			$this->addDeviceOptionsClasses();
		}
	}
	############################################################################
	# Public Accessors
	############################################################################
	public function Xs(ColumnDeviceOptions $value=null){
		if($value===null){return $this->_xs;}
		else{$this->_xs = $value;}
	}
	public function Sm(ColumnDeviceOptions $value=null){
		if($value===null){return $this->_sm;}
		else{$this->_sm = $value;}
	}
	public function Md(ColumnDeviceOptions $value=null){
		if($value===null){return $this->_md;}
		else{$this->_md = $value;}
	}
	public function Lg(ColumnDeviceOptions $value=null){
		if($value===null){return $this->_lg;}
		else{$this->_lg = $value;}
	}
};
?>