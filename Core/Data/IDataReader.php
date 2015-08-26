<?php
namespace Core\Data;
use Iterator, ArrayAccess;
/**
 * IDataReader is the interface all data readers should implement to be integrated with MythCore. It represents
 * the functionality required to be implemented by a class to be considered a higher level abstract data reader.
 * This means the class should shield the user from the specifics of reading from the data source and give them a common
 * programming interface to deal with that deals with all data sources as a collection of records that can be read 
 * sequentially.
 */
interface IDataReader extends IDataRecord{
	/**
	 * Reads a record from the result set and saves it internally. Returns whether a record has been retrieved or not
	 * @return bool
	 * true if there are more rows; otherwise, false.
	 */
	public function Read();
	/**
	 * Advances the data reader to the next result, when reading the results of batch SQL statements
	 * @return bool
	 * true if there are more rows; otherwise, false.
	 */
	public function NextResult();
};
?>