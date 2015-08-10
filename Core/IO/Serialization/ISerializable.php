<?php
interface ISerializable extends IObject{
	function Serialize();
	function SerializeTo(IWriter $writer);
	function Deserialize($serializedObject);
};
?>