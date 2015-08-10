<?php
interface IStream extends IObject{
	function CanRead();
	function CanWrite();
	function CanSeek();
	function IsBinary();
	function IsOpen();
	function IsClosed();
	function Open();
	function Close();
	function Read($count);
	function Write($data);
	function Seek($offset);
	function Position();
	function Reset();
	function IsEOF();
	function Flush();
};
?>