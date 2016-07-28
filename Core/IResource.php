<?php
namespace Core;
/**
 * IResource is to be the base interface for all resources. Resources are wrappers around data representations or data sources. Examples of resources include
 * streams, datasets and data result sets, arrays and collections, files, data blobs, etc.
 * @property boolean CanRead - whether the resource can be read from or not
 * @property boolean CanWrite - whether the resource can be written to or not
 * @property boolean CanSeek - whether the resource can seek randomly or not
 * @property boolean IsBinary - whether the resource represents binary data
 * @property boolean IsOpen - whether the resource is open
 * @property boolean IsClosed - whether the resource is closed
 * @property boolean IsAtEnd - whether the resource is at the end position
 */
interface IResource extends IObject{
	###########################################################################
	# Public Readonly Properties
	###########################################################################
	/**
	 * CanRead Property, whether the resource can be read from or not
	 * @return boolean - whether the resource can be read from or not
	 */
	public function CanRead();
	/**
	 * CanWrite Property, whether the resource can be written to or not
	 * @return boolean - whether the resource can be written to or not
	 */
	public function CanWrite();
	/**
	 * CanSeek Property, whether the resource can seek randomly or not
	 * @return boolean - whether the resource can seek randomly or not
	 */
	public function CanSeek();
	/**
	 * IsBinary Property, whether the resource represents binary data
	 * @return boolean - whether the resource represents binary data
	 */
	public function IsBinary();
	/**
	 * IsOpen Property, whether the resource is open
	 * @return boolean - whether the resource is open
	 */
	public function IsOpen();
	/**
	 * IsClosed Property, whether the resource is closed
	 * @return boolean - whether the resource is closed
	 */
	public function IsClosed();
	/**
	 * IsAtEnd Property, whether the resource is at the end position
	 * @return boolean - whether the resource is at the end position
	 */
	public function IsAtEnd();
	###########################################################################
	# Public Methods
	###########################################################################
	/**
	 * Opens the current resource
	 * @return boolean - whether the resource was successfully opened
	 */
	public function Open();
	/**
	 * Closes the current resource
	 * @return boolean - whether the resource was successfully closed
	 */
	public function Close();
}