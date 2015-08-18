<?php
namespace Core\Data\Db{
	interface IQueryResults extends \IObject{
		function IsRowset();
		function IsScalar();
		function IsSuccess();
		function FieldsCount();
		function RowsCount();
		function FieldsInfo();
		function Free();
		
		function FieldsCount();
		function RowsCount();
		
		function Read();
		function ReadArray();
		function ReadObject($className);
	};
}
?>