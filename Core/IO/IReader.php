<?php
interface IReader extends IObject{
	function Read($count);
	function Reset();
	function Seek($offset);
	function Position();
	function IsEOF();
};
?>