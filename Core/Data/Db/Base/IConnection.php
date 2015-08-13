<?php
namespace Core\Data\Db{
	interface IConnection extends \IObject{
		function Open();
		function Close();
		function IsOpen();
		function IsClosed();
		function ExecuteSql();
	};
}
?>