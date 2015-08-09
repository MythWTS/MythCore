<?php
interface IWriter extends IObject{
	function Write($data);
	function Flush();
	function Seek($offset);
	function Reset();
	function Position();
};
?>