<?php
final class HtmlCommentNode extends HtmlNode implements IDOMMetaData{
	private $_comment, $_indentContents;
	/** Constructor($comment, $indentContents=false) */
	public function __construct($comment, $indentContents=false){
		$this->_comment = $comment; $this->_indentContents = $indentContents;
	}
	public function OuterHtml($indent=0){
		return U::TAB($indent) . 
				"<!-- " .
				($this->_indentContents?(U::$NL . U::Indent($this->_comment, $indent+1) . U::TAB($indent)):$this->_comment) .
				" -->" ;
	}
	public function Comment($value=null){
		if($value === null){return $this->_comment;}
		else{ $this->_comment = U::ES($value);}
	}
	public function IndentContents($value=null){
		if($value === null){return $this->_indentContents;}
		else{$this->_indentContents = U::EB($value);}
	}
};
?>