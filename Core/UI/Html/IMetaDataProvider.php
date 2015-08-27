<?php
namespace Core\UI\Html;
use Core\IObject;
/**
 * Base interface to be implemented by meta data provider structs such as FBMetaData
 */
interface IMetaDataProvider extends IObject{
	public function GenerateHtmlNodes();
};
?>