<?php
namespace Core\UI\Html;
use Core\U;
use Core\UI\Html\Nodes\RawTextNode;
/**
 * Base class of all Html Element objects. It provides the basic functionality needed to render html to the standard
 * output and supports both empty element shortcut notation and normal notation.
 * This class ensures as much as possible that the html is valid html5 and xml at the same time.
 * It also provides attributes manipulation methods along with methods to manipulate the class attribute
 * of html elements such as adding and removing classes to an element
 * The constructor of this class is protected so as to disallow the instantiation of objects directly of this class
 */
class Element extends HtmlNode{
	###########################################################################
	# Private Fields
	###########################################################################
	protected $_tag, $_attributes, $_contents, $_isEmpty, $_indentContents;
	###########################################################################
	# Property Accessors
	###########################################################################
	/** Get accessor for the Tag property */
	public function Tag(){return $this->_tag;}
	/** Get accessor for the IsEmpty property */
	public function IsEmpty(){return $this->_isEmpty;}
	/** Accessor for the Attributes property
	 *  get - returns the array of attributes
	 *  set - extract attributes from the supplied array (any members that have a key that is string or can be converted to string and not white spaces)
	 *  no checks are done on the validity of the names of attributes so far
	 */
	public function Attributes(array $value=null){
		if($value===null){return $this->_attributes;}
		else{$this->_attributes = $this->extractValidAttributes($value);}
	}
	/** Get accessor for the ChildNodes property. Parameter is their so that children might implement set accessor. */
	public function ChildNodes(array $value=null){return $this->_contents;}
	/** Accessor for the IndentContent property */
	public function IndentContent($value=null){
		if($value === null){return $this->_indentContents;}
		else{$this->_indentContents = U::EB($value);}
	}
	/** Accessor for the id attribute of the element. */
	public function Id($value=null){
		if($value===null){return $this->_attributes['id'];}
		else{$this->_attributes['id'] = U::ES($value);}
	}
	/** Accessor for the class attribute of the element. Only named Classes because Class is a reserved word */
	public function Classes($value=null){
		if($value===null){return $this->_attributes['class'];}
		else{$this->_attributes['class'] = U::ES($value);}
	}
	/** Accessor for the title attribute of the element. */
	public function Title($value=null){
		if($value===null){return $this->_attributes['title'];}
		else{$this->_attributes['title'] = U::ES($value);}
	}
	/** Accessor for the style attribute of the element. */
	public function Style($value=null){
		if($value===null){return $this->_attributes['style'];}
		else{$this->_attributes['style'] = U::ES($value);}
	}
	public function TabIndex($value=null){
		if($value===null){return $this->_attributes['tabindex'];}
		else{$this->_attributes['tabindex'] = U::ES($value);}
	}
	public function AccessKey($value=null){
		if($value===null){return $this->_attributes['accesskey'];}
		else{$this->_attributes['accesskey'] = U::ES($value);}
	}
	public function Hidden($value=null){
		if($value===null){return $this->_attributes['hidden'];}
		else{
			if($value){$this->_attributes['hidden'] = 'hidden';}
			else{if(array_key_exists('hidden', $this->_attributes)){unset($this->_attributes['hidden']);}}
		}
	}
	public function ContentEditable($value=null){
		if($value===null){return $this->_attributes['contenteditable'] == 'true';}
		else{$this->_attributes['contenteditable'] = $value?'true':'false';}
	}
	public function Draggable($value=null){
		if($value===null){return $this->_attributes['draggable'] == 'true';}
		else{$this->_attributes['draggable'] = $value?'true':'false';}
	}
	###########################################################################
	# Constructor
	###########################################################################
	/**
	 * Constructor($tag, array $attributes = null, $contents='', $id='', $class='', 
	 * 				$title='', $style='', $indentContents=true, $isEmptyElement=false)
	 * Creates a new instance of the HtmlElement class
	 * $contents valid contents are extracted from the supplied value. depending on the type of the value supplied a new ChildNodes array is created and:
	 * - if a scalar or string-convertable value was supplied, it is wrapped in an RawTextNode and added to the array
	 * - if an array was supplied, the array's first level items are traversed and added as either themselves or RawTextNode(s). Nested arrays are simply ignored.
	 * - if an HtmlNode is supplied, it is added as is to the new ChildNodes array
	 * Acceptable values are: scalars/HtmlNode(s)/IObjects/Objects with __toString() or ToString()/array of any of the former
	 * $attributes are extracted the same way as in Attributes.
	 */
	protected function __construct($tag, array $attributes = null, $contents='', $id='', $class='', $title='', $style='', $indentContents=true, $isEmptyElement=false){
		$this->_tag = $tag;
		$this->_attributes = U::NA($attributes)?array():$this->extractValidAttributes($attributes); 
		if(!U::NA($id)){$this->_attributes['id'] = $id;}
		if(!U::NA($class)){$this->_attributes['class'] = $class;}
		if(!U::NA($title)){$this->_attributes['title'] = $title;}
		if(!U::NA($style)){$this->_attributes['style'] = $style;}
		$this->_isEmpty = $isEmptyElement;
        if($this->_isEmpty){$this->_contents = null;}
        elseif(U::NA($contents)){$this->_contents = array();}
        else{$this->_contents = $this->extractValidContents($contents);}
 		$this->_indentContents = $indentContents;
	}
	###########################################################################
	# Public Methods
	###########################################################################
	/** Returns whether the supplied attribute exists (whether it is assigned or not) */
	public function HasAttribute($name){return array_key_exists(trim(strtolower(U::ES($name))), $this->_attributes);}
	/** Returns whether the supplied attribute exists and has a value */
	public function HasAssignedAttribute($name){
		$name = trim(strtolower(U::ES($name)));
		return array_key_exists($name, $this->_attributes) && !U::NA($this->_attributes[$name]);
	}
	/** Returns the value of the attribute with the supplied name or null if the attribute does not exist. A null value does not always mean the attribute does not exist though */
	public function GetAttribute($name){
		$name = trim(strtolower(U::ES($name)));
		return array_key_exists($name, $this->_attributes)?$this->_attributes[$name]:null;
	}
	/** Set the attribute to the supplied value, add it if it does not exist */
	public function SetAttribute($name, $value){
		$name = trim(strtolower(U::ES($name)));
		if(!U::NAW($name)){
			$this->_attributes[$name] = U::ES($value);
		}
		return $this;
	}
	/** Set attributes from an associative array. Other items in the array will be ignored. Keys will be converted to strings if possible so will values */
	public function SetAttributes(array $attributes){
		foreach($attributes as $name=>$value){
			$name = trim(strtolower(U::ES($name)));
			if(!U::NAW($name)){
				$this->_attributes[$name] = U::ES($value);
			}
		}
		return $this;
	}
	/** Removes the attribute with the supplied name if it exists, nothing if it does not */
	public function RemoveAttribute($name){
		$name = trim(strtolower(U::ES($name)));
		if(array_key_exists($name, $this->_attributes)){
			unset($this->_attributes[$name]);
		}
		return $this;
	}
	/** Removes the attributes with the supplied names. Supplied array keys will be ignored and values will be treated as class names, converted to string if possible or no action if not */
	public function RemoveAttributes(array $names){
		foreach($names as $name){
			$name = trim(strtolower(U::ES($name)));
			if(array_key_exists($name, $this->_attributes)){
				unset($this->_attributes[$name]);
			}
		}
		return $this;
	}
	/** Adds the class name supplied to the class attribute string of this element. If class is not set, it sets it, otherwise it just adds the new class, it does not check if the class exists or not. @see AddClassOnce if that's what you're looking for */
	public function AddClass($class){
		if(isset($this->_attributes['class'])){
			$this->_attributes['class'] = trim("{$this->_attributes['class']} {$class}");
		}
		else{
			$this->_attributes['class'] = $class;
		}
		return $this;
	}
	/** Adds the class names supplied to the class attribute string of this element. If class is not set, it sets it, otherwise it just adds the new classes, it does not check if the class exists or not. @see AddClassesOnce if that's what you're looking for */
	public function AddClasses(array $classes){
		$class = implode(' ', $classes);
		if(isset($this->_attributes['class'])){
			$this->_attributes['class'] = trim("{$this->_attributes['class']} {$class}");
		}
		else{
			$this->_attributes['class'] = $class;
		}
		return $this;
	}
	/** Adds the class name suppied to the class attribute string of this element only if it is not already added or if the class attribute is not set. If you want to add the class even if it exists before, @see AddClass*/
	public function AddClassOnce($class){
		if(isset($this->_attributes['class'])){
			if(strpos($this->_attributes['class'], $class) === false){
				$this->_attributes['class'] = trim("{$this->_attributes['class']} {$class}");
			}
		}
		else{
			$this->_attributes['class'] = $class;
		}
		return $this;
	}
	/** Adds the class names suppied to the class attribute string of this element only if it is not already added or if the class attribute is not set. If you want to add the classes even if it exists before, @see AddClasses*/
	public function AddClassesOnce($classes){
		if(isset($this->_attributes['class'])){
			foreach($classes as $class){
				if(strpos($this->_attributes['class'], $class) === false){
					$this->_attributes['class'] = trim("{$this->_attributes['class']} {$class}");
				}
			}
		}
		else{
			$this->_attributes['class'] = implode(' ', $classes);
		}
		return $this;
	}
	/** Removes all occurences of the supplied class from the class attribute of this element.  */
	public function RemoveClass($class){
		if(isset($this->_attributes['class'])){
			str_replace($class, '', $this->_attributes['class']);
		}
		return $this;
	}
	/** Removes all occurences of the supplied classes from the class attribute of this element.  */
	public function RemoveClasses($classes){
		if(isset($this->_attributes['class'])){
			foreach($classes as $class){
				str_replace($class, '', $this->_attributes['class']);
			}
		}
		return $this;
	}
	###########################################################################
	# Protected Virtual Utility Methods
	###########################################################################
	/** Returns the string representing the attributes of this element to be used in the openning tag. */
	protected function attributesString(){
		$res = ''; $q= U::$Q;
		foreach ($this->_attributes as $key => $value) {
			$res .= "{$key}={$q}{$value}{$q} ";
		}
		return trim($res);
	}
	/**
	 * Extracts valid contents from the supplied argument. Might be overriden by children but take note that this affects the constructor
	 * $contents valid contents are extracted from the supplied value. depending on the type of the value supplied a new array is created and:
	 * - if a scalar or string-convertable value was supplied, it is wrapped in an RawTextNode and added to the array
	 * - if an array was supplied, the array's first level items are traversed and added as either themselves or RawTextNode(s). Nested arrays are simply ignored.
	 * - if an HtmlNode is supplied, it is added as is to the new array
	 * Acceptable values are: scalars/HtmlNode(s)/IObjects/Objects with __toString() or ToString()/array of any of the former
	 */
	protected function extractValidContents($contents){
		$res = array();
		if(is_scalar($contents)){$res[] = new RawTextNode($contents);}
		else if(is_array($contents)){
			foreach ($contents as $value) {
				if(is_scalar($value)){$res[] = new RawTextNode($value);}
				else if(is_a($value, "Core\UI\Html\HtmlNode")){$res[] = $value;}
				else if(is_a($value, "Core\IObject")){$res[] = new RawTextNode($value->__toString());}
				else if(is_object($value)){
					if(method_exists($value, '__toString()')){$res[] = new RawTextNode($value->__toString());}
					else if(method_exists($value, 'ToString()')){$res[] = new RawTextNode($value->ToString());}
				}
			}
		}
		else if(is_a($contents, 'Core\UI\Html\HtmlNode')){$res[] = $contents;}
		else if(is_a($contents, 'Core\IObject')){$res[] = new RawTextNode($contents->__toString());}
		else if(is_object($contents)){
			if(method_exists($contents, '__toString()')){$res[] = new RawTextNode($contents->__toString());}
			else if(method_exists($contents, 'ToString()')){$res[] = new RawTextNode($contents->ToString());}
		}
		return $res;
	}
	/** Returns the html of the openning tag of the element. Should be overriden if necessary. */
	protected function openTagHtml($indent=0){
		if($this->_isEmpty){return U::TAB($indent) . '<' . trim("{$this->_tag} {$this->attributesString()}") . '/>';}
		else {return U::TAB($indent) . '<' . trim("{$this->_tag} {$this->attributesString()}") . '>';}
	}
	/**
	 * Returns the contents html (inner html) of the element if applicable
	 * This method is responsible for handling the indentation of the child elements, not the child elements themselves as it
	 * passes the indent value to the child
	 */ 
	protected function contentsHtml($indent=1){
		if($this->_isEmpty){return "";}
		else{
			$res = "";
			foreach ($this->_contents as $value) {
				$res .= $value->OuterHtml($this->_indentContents?$indent:0) . ($this->_indentContents?U::$NL:"");
			}
			return $res;
		}
	}
	/** Returns the html of the closing tag of the element. Should be overriden if necessary. */
	protected function closeTagHtml($indent=0){return U::TAB($indent) . "</{$this->_tag}>";}
	###########################################################################
	# Base Overrides
	###########################################################################
	/** Returns the html of this element */
	public function OuterHtml($indent=0){
		if($this->_isEmpty){return $this->openTagHtml($indent);}
		else{
			$res = $this->contentsHtml($indent+1);
			if(U::NA($res)){return $this->openTagHtml($indent).$this->closeTagHtml(0);}
			else{return $this->openTagHtml($indent) . ($this->_indentContents?U::$NL:"") . $res . $this->closeTagHtml($this->_indentContents?$indent:0);}
		}
	}
	###########################################################################
	# Private Utility Methods
	###########################################################################
	private function extractValidAttributes(array $attributes){
		$res = array();
		foreach ($attributes as $name => $value) {
			if((is_string($name) && !U::NAW($name))||(is_a($name, "Core\IObject") && !U::NAW($name->__toString()))){
				$res[strtolower($name)] = is_scalar($value)?$value:(is_a($value, "Core\IObject")?$value->__toString():"");
			}
		}
		return $res;
	}
};
?>