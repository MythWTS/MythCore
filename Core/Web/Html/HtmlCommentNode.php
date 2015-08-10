<?php
final class HtmlCommentNode extends HtmlNode{
	private $_comment, $_indentContents;
	public function __construct($comment, $indentContents=false){
		$this->_comment = $comment; $this->_indentContents = $indentContents;
	}
	public function OuterHtml($indent=0){
		return U::TAB($indent) . 
				"<!-- " .
				($this->_indentContents?(U::$NL . U::Indent($this->_comment, $indent+1) . U::TAB($indent)):$this->_comment) .
				" -->" ;
	}
	//For now, no type checking. Later on, type checks might be incorporated into the function declaration using hints or dynamic checks as well
	public function Comment($value=null){
		if($value === null){return $this->_comment;}
		else{$this->_comment = $value;}
	}
	public function IndentContents($value=null){
		if($value === null){return $this->_indentContents;}
		else{$this->_indentContents = $value;}
	}
};
?>