<?php
namespace Core\Data\Db{
	interface IConnection extends \IObject{
		function Open();
		function Close();
		function IsOpen();
		function IsClosed();
		function Execute($sql);
		function ExecuteMultiQuery($sql);
		function HasMoreResults();
		function NextResult();
		function CurrentResult();
		function CurrentResultBufffered();
		function Escape($string);
		function LastErrorNumber();
		function LastErrorMsg();
		function AffectedRows();
		function LastInsertId();
	};
}
?>