<?php
namespace Core\UI\Html;
use Core\UI\Html\Nodes\CommentNode;
use Core\UI\Html\Nodes\RawTextNode;
use Core\UI\Html\Nodes\ScriptElement;
use Core\UI\Html\Nodes\InlineScriptElement;
use Core\UI\Html\Nodes\StyleElement;
/**
 * A generic container element. It provides inheritors with the ability to add generic elements that can be added
 * to any html element and produce valid html such a "script" elements
 * It does not allow adding 'ANY' html element, so that inheritors can decide what elements they want to allow
 * and what types of elements they don't. If you need a container element that allows ading any html node,
 * @see ContainerElement
 */
class GenericContainerElement extends Element{
	###########################################################################
	# Constructor
	###########################################################################
	/** Constructor($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true) */
	protected function __construct($tag, array $attributes = null, $contents=null, $id='', $class='', $title='', $style='', $indentContents=true){
		parent::__construct($tag, $attributes, $contents, $id, $class, $title, $style, $indentContents, false);
	}
	###########################################################################
	# Public Functions
	###########################################################################
	/** Returns whether the element has child nodes or not */
	public function HasContents(){return is_array($this->_contents) && count($this->_contents) > 0;}
	# Generic Content Addition Methods
	#####################################
	///TODO: Add RAdd methods
	public function AddComment($commentText, $indentContents=false){
		$this->_contents[] = new CommentNode($commentText, $indentContents);
		return $this;
	}
	public function AddRawText($text){
		$this->_contents[] = new RawTextNode(U::ENC($text), true);
		return $this;
	}
	public function AddUnindentedText($text){
		$this->_contents[] = new RawTextNode(U::ENC($text), false);
		return $this;
	}

	public function AddScript($src, $id=''){
		$this->_contents[] = new ScriptElement($src, 'text/javascript', '', false, false, $id);
		return $this;
	}
	public function AddInlineScript($script, $id='', $type='text/javascript'){
		$this->_contents[] = new InlineScriptElement($script, $type, $id, true);
		return $this;
	}
	public function AddScriptDefered($src, $id=''){
		$this->_contents[] = new ScriptElement($src, 'text/javascript', '', true, false, $id);
		return $this;
	}
	public function AddScriptAsync($src, $id=''){
		$this->_contents[] = new ScriptElement($src, 'text/javascript', '', false, true, $id);
		return $this;
	}
	public function AddScriptDeferedAsync($src, $id=''){
		$this->_contents[] = new ScriptElement($src, 'text/javascript', '', true, true, $id);
		return $this;
	}

	public function AddScriptVBScript($src, $id=''){
		$this->_contents[] = new ScriptElement($src, 'text/vbscript', '', false, false, $id);
		return $this;
	}
	public function AddScriptTCLScript($src, $id=''){
		$this->_contents[] = new ScriptElement($src, 'text/tcl', '', false, false, $id);
		return $this;
	}
	public function AddScriptJScript($src, $id=''){
		$this->_contents[] = new ScriptElement($src, 'text/jscript', '', false, false, $id);
		return $this;
	}

	public function AddStyle($style, $id=''){
		$this->_contents[] = new StyleElement($style, $id);
		return $this;
	}
};
?>