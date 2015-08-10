<?php
final class FileOpenMode extends Enum{
	public static
		/** Open for reading only; place the file pointer at the beginning of the file (r) */
		$ReadOnly,
		/** Open for reading and writing; place the file pointer at the beginning of the file. (r+) */
		$ReadWrite,
		/** Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it. (w) */
		$WriteTruncate,
		/** Open for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it. (w+) */
		$ReadWriteTruncate,
		/** Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. (a) */
		$WriteAppend,
		/** Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. (a+) */
		$ReadWriteAppend,
		/** Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, openning call will fail by returning FALSE and generating an error of level E_WARNING. If the file does not exist, attempt to create it. This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call. (x) */
		$WriteCreateOnly,
		/** Create and open for reading and writing; otherwise it has the same behavior as WriteCreateOnly (x+) */
		$ReadWriteCreateOnly,
		/** Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to WriteTruncate), nor the call to the open function fails (as is the case with WriteCreateOnly). The file pointer is positioned on the beginning of the file. This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using WriteTruncate could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested). (c) */
		$WriteToStart,
		/** Open the file for reading and writing; otherwise it has the same behavior as WriteToStart (c+) */
		$ReadWriteToStart;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$ReadOnly = new FileOpenMode("ReadOnly", "r");
		self::$ReadWrite = new FileOpenMode("ReadWrite", "r+");
		self::$WriteTruncate = new FileOpenMode("WriteTruncate", "w");
		self::$ReadWriteTruncate = new FileOpenMode("ReadWriteTruncate", "w+");
		self::$WriteAppend = new FileOpenMode("WriteAppend", "a");
		self::$ReadWriteAppend = new FileOpenMode("ReadWriteAppend", "a+");
		self::$WriteCreateOnly = new FileOpenMode("WriteCreateOnly", "x");
		self::$ReadWriteCreateOnly = new FileOpenMode("ReadWriteCreateOnly", "x+");
		self::$WriteToStart = new FileOpenMode("WriteToStart", "c");
		self::$ReadWriteToStart = new FileOpenMode("ReadWriteToStart", "c+");
	}
};
FileOpenMode::Initialize();
?>