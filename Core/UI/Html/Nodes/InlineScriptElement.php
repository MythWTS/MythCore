<?php
namespace Core\UI\Html\Nodes;
use Core\U;
use Core\UI\Html\Element;
use Core\UI\Html\IDOMMetaData;
use Core\UI\Html\Tags;
/**
 * Represents an inline "script" html element in the documents object model
 * Constructor($script='', $type='text/javascript', $id='', $indentScript=true)
 */
class InlineScriptElement extends Element implements IDOMMetaData{
	/** Constructor($script='', $type='text/javascript', $id='', $indentScript=true) */
	public function __construct($script='', $type='text/javascript', $id='', $indentScript=true){
		$s = new RawTextNode($script, $indentScript);
		parent::__construct(Tags::$SCRIPT, null, $s, $id, '', '', '', $indentScript, false);
		if(!U::NA($type)){$this->_attributes['type'] = U::ES($type);}
	}
	
	public function Type($value=null){
		if($value===null){return $this->_attributes['type'];}
		else{$this->_attributes['type']=U::ES($value);}
	}
	
	public function Script($value=null){
		if($value===null){return $this->_contents[0]->Html;}
		else{$this->_contents[0] = new RawTextNode($value);}
	}
};
?>