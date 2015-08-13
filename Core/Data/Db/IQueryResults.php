<?php
namespace Core\Data\Db{
	interface IQueryResults extends \IObject{
		function IsRowset();
		function IsScalar();
		function FieldsCount();
		function RowsCount();
		function FieldsInfo();
	};
};
?>