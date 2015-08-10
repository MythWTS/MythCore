<?php
class Enum extends Object{
	protected $_name, $_value;
	public function __toString(){return $this->_value;}
	protected function __construct($name, $value){$this->_name = $name; $this->_value = $value;}
	
	public function Name(){return $this->_name;}
	public function Value(){return $this->_value;}
};
?>