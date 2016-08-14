<?php
namespace Core;
/**
 * IResource is to be the base interface for all resources. Resources are wrappers around data representations or data sources. Examples of resources include
 * streams, datasets and data result sets, arrays and collections, files, data blobs, etc.
 * @property boolean CanRead Whether the resource can be read from or not
 * @property boolean CanWrite Whether the resource can be written to or not
 * @property boolean CanSeek Whether the resource can seek randomly or not
 * @property boolean IsBinary Whether the resource represents binary data
 * @property boolean IsOpen Whether the resource is open
 * @property boolean IsClosed Whether the resource is closed
 * @property boolean IsAtEnd Whether the resource is at the end position
 */
interface IResource extends IObject{
	###########################################################################
	# Public Readonly Properties
	###########################################################################
	/**
	 * CanRead Property, whether the resource can be read from or not
	 * @return boolean
	 */
	public function CanRead();
	/**
	 * CanWrite Property, whether the resource can be written to or not
	 * @return boolean
	 */
	public function CanWrite();
	/**
	 * CanSeek Property, whether the resource can seek randomly or not
	 * @return boolean
	 */
	public function CanSeek();
	/**
	 * IsBinary Property, whether the resource represents binary data
	 * @return boolean
	 */
	public function IsBinary();
	/**
	 * IsOpen Property, whether the resource is open
	 * @return boolean
	 */
	public function IsOpen();
	/**
	 * IsClosed Property, whether the resource is closed
	 * @return boolean
	 */
	public function IsClosed();
	/**
	 * IsAtEnd Property, whether the resource is at the end position
	 * @return boolean
	 */
	public function IsAtEnd();
	###########################################################################
	# Public Methods
	###########################################################################
	/**
	 * Opens the current resource
	 * @return boolean
	 */
	public function Open();
	/**
	 * Closes the current resource
	 * @return boolean
	 */
	public function Close();
}