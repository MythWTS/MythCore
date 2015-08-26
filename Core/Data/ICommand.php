<?php
namespace Core\Data;
use Core\IObject;
interface ICommand extends IObject{
	/**
	 * Gets or sets the text command to run against the data source. Implementers might choose to only implement get
	 * @param $value string
	 * The value to set the command text to. Only used when the method is used as the setter of the property
	 * @return string
	 * The text of the command to be executed against the data source
	 */
	public function Text($value=null);
	/**
	 * Gets or sets the Type property. Indicates or specifies how the ICommand Text property is interpreted.
	 * @param $value CommandType
	 * The value to set the command type to. Only used when the method is used as the setter of the property
	 * @return CommandType
	 * The type of the current command's text
	 */
	public function Type(CommandType $value=null);
	/**
	 * Gets or sets the Connection property
	 * @param $value IConnection
	 * The value to set the command connection to. Only used when the method is used as the setter of the property
	 * @return IConnection
	 * The connection object used by the current command as an IConnection.
	 */
	public function Connection(IConnection $value=null);
	/**
	 * Executes the command and returns an IDataReader object to read the results or null if the command is not a query
	 * @return IDataReader
	 * The data reader object to be used to read the data or null if the command is not a query
	 * For non query commands, use ExecuteNonQuery()
	 */
	public function Execute();
	/**
	 * Executes the command and returns the number of affected records. Appropriate for data update, insert or delete operations
	 * @return int the number of records affected
	 */
	public function ExecuteNonQuery();
	/**
	 * Executes the command and returns the scalar returned or the first field of the first record.
	 * @return mixed
	 * Either the scalar returned by a scalar command type or the first field of the first record of any dataset returned
	 */
	public function ExecuteScalar();
};
?>