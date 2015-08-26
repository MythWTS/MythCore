<?php
namespace Core\Data;
use Core\IObject;
/**
 * The IConnection interface is the base interface that all data connection classes should implement to be integrated
 * with MythCore. A connection to data stores is what a stream is to files. It provides a way to connect to data stores
 * in an abstract manner shielding the programmer from the implementation details of that data store. A data store can be
 * a database, an xml file or any other type of data storage engine. Connections provides a consistent way to connect
 * to data stores, retrieving and modifying data on these stores. This is done using a common methodology regardless
 * of the type of data store: a connection is opened to the data store, commands are executed against the connection and
 * results are read through a reader or a results class, and finally (when this feature is implemented), stored in a 
 * data set. There are currently future plans to implement adapters.
 */
interface IConnection extends IObject{
	/**
	 * Opens the connection to the data store. By default, in MythCore, a connection is not opened upon construction
	 * automatically. The developer has to explicitly call Open() to make the connection actually connect to the data
	 * store. Returns whether the connection was opened successfully or not.
	 * @return bool
	 */
	public function Open();
	/**
	 * Closes the connection to the data store. If the connection was not open at the time of calling Close(), nothing 
	 * happens. Returns whether the close was successfull or not
	 * @return bool
	 */
	public function Close();
	/**
	 * Returns whether the connection is currently opened to the data source or not
	 * @return bool
	 */
	public function IsOpen();
	/**
	 * Return whether the connection is closed at the time of call. The connection must have been closed explicitly using
	 * Close() for this to be true. This is important as at the time of construction, the connection is not open, but it's
	 * not closed as well.
	 * @return bool
	 */
	public function IsClosed();
	/**
	 * Returns whether the connection has errors or not
	 * @return bool
	 */
	public function HasError();
	/**
	 * Returns the last error number if any. Zero error code means no errors
	 * @return int
	 */
	public function LastErrorNumber();
	/**
	 * Returns the last error's message. If no errors and the last operation was successfull, returns an empty string
	 * @return string
	 */
	public function LastErrorMessage();
	/**
	 * Creates an ICommand object suitable for use with this connection. Inheritors usually will implement this class
	 * along with a command class and a data reader class as a minimum
	 * @return ICommand child
	 */
	public function CreateCommand();
};
?>