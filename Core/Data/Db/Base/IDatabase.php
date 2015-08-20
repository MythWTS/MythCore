<?php
namespace Core\Data\Db;
interface IDatabase extends \IObject{
	public function TablesCount();
	public function ViewsCount();
	public function ProceduresCount();
	public function FunctionsCount();

	public function Tables();
	public function Views();
	public function Procedures();
	public function Functions();
};
?>