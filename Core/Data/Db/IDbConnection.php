<?php
namespace Core\Data\Db;
use Core\Data\IConnection;
/**
 * An extension of the IConnection interface to be implemented where the data store is a database.
 * Besides the functionality already exposed by IConnection, IDbConnection exposes methods appropriate for
 * database functionalities such as Execute($sql) and ExecuteMultiQuery($sql)
 */
interface IDbConnection extends IConnection{
	/**
	 * Returns whether the connection has a connect error
	 * @return bool
	 */
	public function HasConnectError();
	/**
	 * Returns the connect error number associated with the last connect error. A value of 0 should mean no connect error
	 * @return int
	 */
	public function ConnectErrorNumber();
	/**
	 * Returns the connect error message associated with the last connect error. A value of 0 should mean no connect error
	 * @return string
	 */
	public function ConnectErrorMessage();
	/**
	 * Executes the supplied sql statement against the database and returns an IQueryResult object
	 * @param $sql string
	 * The SQL statement to execute. Regardless of the specifics of the database engine, this method should be implemented
	 * so that the statements are single SQL statements. There's another method: ExecuteMultiQuery() that should be used to
	 * execute multi-statement SQL queries
	 * @return IQueryResult
	 * The internal result of the query execution, to be used by comman objects mainly. However it also provides an 
	 * alternative method of handling databases through the direct use of the query results.
	 */
	public function Execute($sql);
	/**
	 * Executes the supplied sql statements against the database and returns an IQueryResult object
	 * @param $sql string
	 * The SQL statements to execute. Regardless of the specifics of the database engine, this method should be implemented
	 * so that it supports the execution of multiple sql statements at one go.
	 * @return IQueryResult
	 * The internal result of the query execution, to be used by comman objects mainly. However it also provides an 
	 * alternative method of handling databases through the direct use of the query results.
	 */
	public function ExecuteMultiQuery($sql);
	/**
	 * Returns whether the last execute call still has more results. To be used in conjunction with ExecuteMultiQuery,
	 * NextResult(), and CurrentResult() or CurrentResultBufffered()
	 * @return bool
	 * Whether there are still more results from the last execute call
	 */
	public function HasMoreResults();
	/**
	 * Moves to the next query result which then can be retrieved using CurrentResult() or CurrentResultBufffered()
	 * @return bool
	 * Whether the move to the next result was successfull or not
	 */
	public function NextResult();
	/**
	 * Retrieves the current result from the last execute call.
	 * @return IQueryResult
	 */
	public function CurrentResult();
	/**
	 * Retrieves the current result, buffered, from the last execute call.
	 * @return IQueryResult
	 */
	public function CurrentResultBufffered();
	/**
	 * Excapes the supplied string to be appropriate for use within a statement that will be executed against this connection.
	 * @param $string string the string to escape
	 * @return string
	 * The escaped string
	 */
	public function Escape($string);
	/**
	 * Returns the number of rows affected by the last execute call
	 * @return int
	 */
	public function AffectedRows();
	/**
	 * Returns the last auto-generated ID from the last INSERT statement executed
	 * @return scalar
	 * The last auto-generated ID from the last INSERT operation
	 */
	public function LastInsertId();
};
?>