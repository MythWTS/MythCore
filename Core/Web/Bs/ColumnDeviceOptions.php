<?php
namespace Core\Web\Bs;
///TODO: Add support for visible-block, visible-inline-block, visible-inline
class ColumnDeviceOptions extends \Object{
	protected $_device, $_width, $_offset, $_push, $_pull, $_only, $_hidden, $_srOnly;
	public function __construct(Devices $device, $width=12, $offset=0, $push=0, $pull=0, $only=false, $hidden=false, $srOnly=false){
		$this->_device = $device?:Devices::$Mobile; $this->_width = $width; $this->_offset = $offset; $this->_push = $push;
		$this->_pull = $pull; $this->_only = $only; $this->_hidden = $hidden; $this->_srOnly = $srOnly;
	}
	public function GetClasses(){
		$res = array();
		$d = $this->_device->__toString();
		if($this->_width >= 1 && $this->_width <= 12){$res[] = "col-{$d}-{$this->_width}";}
		if($this->_pull >= 1 && $this->_pull <= 12){$res[] = "col-{$d}-pull-{$this->_pull}";}
		if($this->_push >= 1 && $this->_push <= 12){$res[] = "col-{$d}-push-{$this->_push}";}
		if($this->_srOnly){$res[] = "sr-only";}
		if($this->_only){$res[] = "visible-{$d}";}
		if($this->_hidden){$res[] = "hidden-{$d}";}
		return $res;
	}
	public function Device($value=null){
		return $this->_device;
	}
	public function Width($value=null){
		if($value === null){return $this->_width;}
		else {$this->_width = $value;}
	}
	public function Offset($value=null){
		if($value === null){return $this->_offset;}
		else {$this->_offset = $value;}
	}
	public function Push($value=null){
		if($value === null){return $this->_push;}
		else {$this->_push = $value;}
	}
	public function Pull($value=null){
		if($value === null){return $this->_pull;}
		else {$this->_pull = $value;}
	}
	public function SROnly($value=null){
		if($value === null){return $this->_srOnly;}
		else {$this->_srOnly = \U::EB($value);}
	}
	public function Only($value=null){
		if($value === null){return $this->_only;}
		else {$this->_only = \U::EB($value);}
	}
	public function Hidden($value=null){
		if($value === null){return $this->_hidden;}
		else {$this->_hidden = \U::EB($value);}
	}

};
?>