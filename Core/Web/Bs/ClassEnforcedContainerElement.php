<?php
namespace Core\Web\Bs;
class ClassEnforcedContainerElement extends \HtmlContainerElement{
	protected $_classes;
	/** Constructor(array $classesToEnforce, $tag, $contents='', $id='', $class='', $title='', $style='', $indentContents=true) */
	public function __construct(array $classesToEnforce, $tag, $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct($tag, null, $contents, $id, $class, $title, $style, $indentContents);
		foreach($classesToEnforce as $class){$this->AddClassOnce($class);}
		$this->_classes = $classesToEnforce;
	}
	/** Accessor for the "class" html attribute. Overrides base class(HtmlElement) behavior by enforcing a set of classes to the element when a new value is assigned to the class attribute */
	public function Classes($value=null){
		if($value===null){return $this->_attributes['class'];}
		else{
			$this->_attributes['class'] = \U::ES($value);
			foreach($this->_classes as $class){$this->AddClassOnce($class);}
		}
	}
	/** Set the attribute to the supplied value, add it if it does not exist. Overriden from base(HtmlElement) to also make sure the element always have the set of enforced classes in case the user is setting the class attribute */
	public function SetAttribute($name, $value){
		$name = trim(strtolower(\U::ES($name)));
		if(!\U::NAW($name)){
			$this->_attributes[$name] = \U::ES($value);
		}
		if($name=='class'){foreach($this->_classes as $class){$this->AddClassOnce($class);}}
		return $this;
	}
	/** Set attributes from an associative array. Other items in the array will be ignored. Keys will be converted to strings if possible so will values */
	public function SetAttributes(array $attributes){
		foreach($attributes as $name=>$value){
			$name = trim(strtolower(\U::ES($name)));
			if(!\U::NAW($name)){
				$this->_attributes[$name] = \U::ES($value);
				if($name=='class'){foreach($this->_classes as $class){$this->AddClassOnce($class);}}
			}
		}
		return $this;
	}
	/** Removes the attribute with the supplied name if it exists, nothing if it does not. Overriden from base(HtmlElement) to also make sure the element always have the set of enforced classes in case the user is removing the class attribute */
	public function RemoveAttribute($name){
		$name = trim(strtolower(\U::ES($name)));
		if(array_key_exists($name, $this->_attributes)){
			unset($this->_attributes[$name]);
		}
		if($name=='class'){foreach($this->_classes as $class){$this->AddClassOnce($class);}}
		return $this;
	}
	/** Removes the attributes with the supplied names. Overriden from base(HtmlElement) to also make sure the element always have the set of enforced classes in case the user is removing the class attribute*/
	public function RemoveAttributes(array $names){
		foreach($names as $name){
			$name = trim(strtolower(\U::ES($name)));
			if(array_key_exists($name, $this->_attributes)){
				unset($this->_attributes[$name]);
			}
			if($name=='class'){foreach($this->_classes as $class){$this->AddClassOnce($class);}}
		}
		return $this;
	}
	/** Removes all occurences of the supplied class from the class attribute of this element. Overriden to ensure enforced classes do not get deleted  */
	public function RemoveClass($class){
		if(array_search($class, $this->_classes) !== false){return $this;}
		if(isset($this->_attributes['class'])){
			str_replace($class, '', $this->_attributes['class']);
		}
		return $this;
	}
	/** Removes all occurences of the supplied classes from the class attribute of this element.  */
	public function RemoveClasses($classes){
		if(isset($this->_attributes['class'])){
			foreach($classes as $class){
				if(array_search($class, $this->_classes) === false){str_replace($class, '', $this->_attributes['class']);}
			}
		}
		return $this;
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
			foreach($this->_classes as $class){$this->AddClassOnce($class);}
		}
	}
	
	public function EnforceedClasses(array $value=null){
		return $this->_classes;
	}
};
?>