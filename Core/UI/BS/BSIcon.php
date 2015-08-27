<?php
namespace Core\UI\BS;
use Core\Object;
use Core\UI\Html\Nodes\SpanElement;
/**
 * Factory class to generate glyphicon spans
 */
final class BSIcons extends Object{
	/** Private constructor since this is a factory static class and no objects should be instantiated from it */
	private function __construct(){}
	/**
	 * Generates a bootstrap span that displays the "Asterisk" glyphicon
	 * @return SpanElement
	 */
	public static function Asterisk($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-asterisk', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Plus" glyphicon
	 * @return SpanElement
	 */
	public static function Plus($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-plus', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Euro" glyphicon
	 * @return SpanElement
	 */
	public static function Euro($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-euro', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Eur" glyphicon
	 * @return SpanElement
	 */
	public static function Eur($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-eur', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Minus" glyphicon
	 * @return SpanElement
	 */
	public static function Minus($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-minus', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Cloud" glyphicon
	 * @return SpanElement
	 */
	public static function Cloud($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-cloud', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Envelope" glyphicon
	 * @return SpanElement
	 */
	public static function Envelope($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-envelope', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Pencil" glyphicon
	 * @return SpanElement
	 */
	public static function Pencil($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-pencil', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Glass" glyphicon
	 * @return SpanElement
	 */
	public static function Glass($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-glass', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Music" glyphicon
	 * @return SpanElement
	 */
	public static function Music($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-music', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Search" glyphicon
	 * @return SpanElement
	 */
	public static function Search($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-search', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Heart" glyphicon
	 * @return SpanElement
	 */
	public static function Heart($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-heart', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Star" glyphicon
	 * @return SpanElement
	 */
	public static function Star($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-star', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "StarEmpty" glyphicon
	 * @return SpanElement
	 */
	public static function StarEmpty($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-star-empty', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "User" glyphicon
	 * @return SpanElement
	 */
	public static function User($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-user', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Film" glyphicon
	 * @return SpanElement
	 */
	public static function Film($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-film', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ThLarge" glyphicon
	 * @return SpanElement
	 */
	public static function ThLarge($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-th-large', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Th" glyphicon
	 * @return SpanElement
	 */
	public static function Th($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-th', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ThList" glyphicon
	 * @return SpanElement
	 */
	public static function ThList($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-th-list', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Ok" glyphicon
	 * @return SpanElement
	 */
	public static function Ok($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-ok', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Remove" glyphicon
	 * @return SpanElement
	 */
	public static function Remove($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-remove', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ZoomIn" glyphicon
	 * @return SpanElement
	 */
	public static function ZoomIn($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-zoom-in', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ZoomOut" glyphicon
	 * @return SpanElement
	 */
	public static function ZoomOut($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-zoom-out', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Off" glyphicon
	 * @return SpanElement
	 */
	public static function Off($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-off', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Signal" glyphicon
	 * @return SpanElement
	 */
	public static function Signal($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-signal', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Cog" glyphicon
	 * @return SpanElement
	 */
	public static function Cog($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-cog', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Trash" glyphicon
	 * @return SpanElement
	 */
	public static function Trash($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-trash', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Home" glyphicon
	 * @return SpanElement
	 */
	public static function Home($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-home', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "File" glyphicon
	 * @return SpanElement
	 */
	public static function File($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-file', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Time" glyphicon
	 * @return SpanElement
	 */
	public static function Time($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-time', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Road" glyphicon
	 * @return SpanElement
	 */
	public static function Road($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-road', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "DownloadAlt" glyphicon
	 * @return SpanElement
	 */
	public static function DownloadAlt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-download-alt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Download" glyphicon
	 * @return SpanElement
	 */
	public static function Download($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-download', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Upload" glyphicon
	 * @return SpanElement
	 */
	public static function Upload($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-upload', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Inbox" glyphicon
	 * @return SpanElement
	 */
	public static function Inbox($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-inbox', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "PlayCircle" glyphicon
	 * @return SpanElement
	 */
	public static function PlayCircle($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-play-circle', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Repeat" glyphicon
	 * @return SpanElement
	 */
	public static function Repeat($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-repeat', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Refresh" glyphicon
	 * @return SpanElement
	 */
	public static function Refresh($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-refresh', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ListAlt" glyphicon
	 * @return SpanElement
	 */
	public static function ListAlt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-list-alt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Lock" glyphicon
	 * @return SpanElement
	 */
	public static function Lock($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-lock', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Flag" glyphicon
	 * @return SpanElement
	 */
	public static function Flag($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-flag', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Headphones" glyphicon
	 * @return SpanElement
	 */
	public static function Headphones($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-headphones', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "VolumeOff" glyphicon
	 * @return SpanElement
	 */
	public static function VolumeOff($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-volume-off', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "VolumeDown" glyphicon
	 * @return SpanElement
	 */
	public static function VolumeDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-volume-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "VolumeUp" glyphicon
	 * @return SpanElement
	 */
	public static function VolumeUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-volume-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Qrcode" glyphicon
	 * @return SpanElement
	 */
	public static function Qrcode($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-qrcode', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Barcode" glyphicon
	 * @return SpanElement
	 */
	public static function Barcode($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-barcode', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Tag" glyphicon
	 * @return SpanElement
	 */
	public static function Tag($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tag', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Tags" glyphicon
	 * @return SpanElement
	 */
	public static function Tags($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tags', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Book" glyphicon
	 * @return SpanElement
	 */
	public static function Book($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-book', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Bookmark" glyphicon
	 * @return SpanElement
	 */
	public static function Bookmark($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-bookmark', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Print" glyphicon. The _ in the name is only because print is a reserved word in php
	 * @return SpanElement
	 */
	public static function Print_($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-print', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Camera" glyphicon
	 * @return SpanElement
	 */
	public static function Camera($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-camera', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Font" glyphicon
	 * @return SpanElement
	 */
	public static function Font($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-font', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Bold" glyphicon
	 * @return SpanElement
	 */
	public static function Bold($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-bold', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Italic" glyphicon
	 * @return SpanElement
	 */
	public static function Italic($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-italic', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TextHeight" glyphicon
	 * @return SpanElement
	 */
	public static function TextHeight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-text-height', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TextWidth" glyphicon
	 * @return SpanElement
	 */
	public static function TextWidth($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-text-width', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "AlignLeft" glyphicon
	 * @return SpanElement
	 */
	public static function AlignLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-align-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "AlignCenter" glyphicon
	 * @return SpanElement
	 */
	public static function AlignCenter($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-align-center', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "AlignRight" glyphicon
	 * @return SpanElement
	 */
	public static function AlignRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-align-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "AlignJustify" glyphicon
	 * @return SpanElement
	 */
	public static function AlignJustify($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-align-justify', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "List" glyphicon. The _ in the name is because list is a reserved word in php
	 * @return SpanElement
	 */
	public static function List_($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-list', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "IndentLeft" glyphicon
	 * @return SpanElement
	 */
	public static function IndentLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-indent-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "IndentRight" glyphicon
	 * @return SpanElement
	 */
	public static function IndentRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-indent-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FacetimeVideo" glyphicon
	 * @return SpanElement
	 */
	public static function FacetimeVideo($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-facetime-video', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Picture" glyphicon
	 * @return SpanElement
	 */
	public static function Picture($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-picture', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "MapMarker" glyphicon
	 * @return SpanElement
	 */
	public static function MapMarker($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-map-marker', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Adjust" glyphicon
	 * @return SpanElement
	 */
	public static function Adjust($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-adjust', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Tint" glyphicon
	 * @return SpanElement
	 */
	public static function Tint($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tint', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Edit" glyphicon
	 * @return SpanElement
	 */
	public static function Edit($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-edit', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Share" glyphicon
	 * @return SpanElement
	 */
	public static function Share($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-share', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Check" glyphicon
	 * @return SpanElement
	 */
	public static function Check($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-check', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Move" glyphicon
	 * @return SpanElement
	 */
	public static function Move($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-move', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "StepBackward" glyphicon
	 * @return SpanElement
	 */
	public static function StepBackward($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-step-backward', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FastBackward" glyphicon
	 * @return SpanElement
	 */
	public static function FastBackward($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-fast-backward', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Backward" glyphicon
	 * @return SpanElement
	 */
	public static function Backward($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-backward', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Play" glyphicon
	 * @return SpanElement
	 */
	public static function Play($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-play', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Pause" glyphicon
	 * @return SpanElement
	 */
	public static function Pause($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-pause', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Stop" glyphicon
	 * @return SpanElement
	 */
	public static function Stop($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-stop', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Forward" glyphicon
	 * @return SpanElement
	 */
	public static function Forward($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-forward', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FastForward" glyphicon
	 * @return SpanElement
	 */
	public static function FastForward($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-fast-forward', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "StepForward" glyphicon
	 * @return SpanElement
	 */
	public static function StepForward($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-step-forward', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Eject" glyphicon
	 * @return SpanElement
	 */
	public static function Eject($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-eject', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ChevronLeft" glyphicon
	 * @return SpanElement
	 */
	public static function ChevronLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-chevron-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ChevronRight" glyphicon
	 * @return SpanElement
	 */
	public static function ChevronRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-chevron-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "PlusSign" glyphicon
	 * @return SpanElement
	 */
	public static function PlusSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-plus-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "MinusSign" glyphicon
	 * @return SpanElement
	 */
	public static function MinusSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-minus-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "RemoveSign" glyphicon
	 * @return SpanElement
	 */
	public static function RemoveSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-remove-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "OkSign" glyphicon
	 * @return SpanElement
	 */
	public static function OkSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-ok-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "QuestionSign" glyphicon
	 * @return SpanElement
	 */
	public static function QuestionSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-question-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "InfoSign" glyphicon
	 * @return SpanElement
	 */
	public static function InfoSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-info-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Screenshot" glyphicon
	 * @return SpanElement
	 */
	public static function Screenshot($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-screenshot', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "RemoveCircle" glyphicon
	 * @return SpanElement
	 */
	public static function RemoveCircle($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-remove-circle', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "OkCircle" glyphicon
	 * @return SpanElement
	 */
	public static function OkCircle($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-ok-circle', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "BanCircle" glyphicon
	 * @return SpanElement
	 */
	public static function BanCircle($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-ban-circle', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ArrowLeft" glyphicon
	 * @return SpanElement
	 */
	public static function ArrowLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-arrow-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ArrowRight" glyphicon
	 * @return SpanElement
	 */
	public static function ArrowRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-arrow-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ArrowUp" glyphicon
	 * @return SpanElement
	 */
	public static function ArrowUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-arrow-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ArrowDown" glyphicon
	 * @return SpanElement
	 */
	public static function ArrowDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-arrow-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ShareAlt" glyphicon
	 * @return SpanElement
	 */
	public static function ShareAlt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-share-alt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ResizeFull" glyphicon
	 * @return SpanElement
	 */
	public static function ResizeFull($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-resize-full', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ResizeSmall" glyphicon
	 * @return SpanElement
	 */
	public static function ResizeSmall($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-resize-small', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ExclamationSign" glyphicon
	 * @return SpanElement
	 */
	public static function ExclamationSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-exclamation-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Gift" glyphicon
	 * @return SpanElement
	 */
	public static function Gift($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-gift', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Leaf" glyphicon
	 * @return SpanElement
	 */
	public static function Leaf($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-leaf', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Fire" glyphicon
	 * @return SpanElement
	 */
	public static function Fire($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-fire', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "EyeOpen" glyphicon
	 * @return SpanElement
	 */
	public static function EyeOpen($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-eye-open', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "EyeClose" glyphicon
	 * @return SpanElement
	 */
	public static function EyeClose($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-eye-close', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "WarningSign" glyphicon
	 * @return SpanElement
	 */
	public static function WarningSign($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-warning-sign', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Plane" glyphicon
	 * @return SpanElement
	 */
	public static function Plane($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-plane', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Calendar" glyphicon
	 * @return SpanElement
	 */
	public static function Calendar($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-calendar', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Random" glyphicon
	 * @return SpanElement
	 */
	public static function Random($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-random', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Comment" glyphicon
	 * @return SpanElement
	 */
	public static function Comment($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-comment', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Magnet" glyphicon
	 * @return SpanElement
	 */
	public static function Magnet($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-magnet', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ChevronUp" glyphicon
	 * @return SpanElement
	 */
	public static function ChevronUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-chevron-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ChevronDown" glyphicon
	 * @return SpanElement
	 */
	public static function ChevronDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-chevron-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Retweet" glyphicon
	 * @return SpanElement
	 */
	public static function Retweet($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-retweet', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ShoppingCart" glyphicon
	 * @return SpanElement
	 */
	public static function ShoppingCart($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-shopping-cart', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FolderClose" glyphicon
	 * @return SpanElement
	 */
	public static function FolderClose($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-folder-close', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FolderOpen" glyphicon
	 * @return SpanElement
	 */
	public static function FolderOpen($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-folder-open', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ResizeVertical" glyphicon
	 * @return SpanElement
	 */
	public static function ResizeVertical($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-resize-vertical', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ResizeHorizontal" glyphicon
	 * @return SpanElement
	 */
	public static function ResizeHorizontal($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-resize-horizontal', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Hdd" glyphicon
	 * @return SpanElement
	 */
	public static function Hdd($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-hdd', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Bullhorn" glyphicon
	 * @return SpanElement
	 */
	public static function Bullhorn($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-bullhorn', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Bell" glyphicon
	 * @return SpanElement
	 */
	public static function Bell($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-bell', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Certificate" glyphicon
	 * @return SpanElement
	 */
	public static function Certificate($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-certificate', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ThumbsUp" glyphicon
	 * @return SpanElement
	 */
	public static function ThumbsUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-thumbs-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ThumbsDown" glyphicon
	 * @return SpanElement
	 */
	public static function ThumbsDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-thumbs-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "HandRight" glyphicon
	 * @return SpanElement
	 */
	public static function HandRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-hand-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "HandLeft" glyphicon
	 * @return SpanElement
	 */
	public static function HandLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-hand-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "HandUp" glyphicon
	 * @return SpanElement
	 */
	public static function HandUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-hand-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "HandDown" glyphicon
	 * @return SpanElement
	 */
	public static function HandDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-hand-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CircleArrowRight" glyphicon
	 * @return SpanElement
	 */
	public static function CircleArrowRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-circle-arrow-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CircleArrowLeft" glyphicon
	 * @return SpanElement
	 */
	public static function CircleArrowLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-circle-arrow-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CircleArrowUp" glyphicon
	 * @return SpanElement
	 */
	public static function CircleArrowUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-circle-arrow-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CircleArrowDown" glyphicon
	 * @return SpanElement
	 */
	public static function CircleArrowDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-circle-arrow-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Globe" glyphicon
	 * @return SpanElement
	 */
	public static function Globe($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-globe', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Wrench" glyphicon
	 * @return SpanElement
	 */
	public static function Wrench($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-wrench', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Tasks" glyphicon
	 * @return SpanElement
	 */
	public static function Tasks($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tasks', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Filter" glyphicon
	 * @return SpanElement
	 */
	public static function Filter($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-filter', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Briefcase" glyphicon
	 * @return SpanElement
	 */
	public static function Briefcase($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-briefcase', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Fullscreen" glyphicon
	 * @return SpanElement
	 */
	public static function Fullscreen($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-fullscreen', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Dashboard" glyphicon
	 * @return SpanElement
	 */
	public static function Dashboard($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-dashboard', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Paperclip" glyphicon
	 * @return SpanElement
	 */
	public static function Paperclip($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-paperclip', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "HeartEmpty" glyphicon
	 * @return SpanElement
	 */
	public static function HeartEmpty($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-heart-empty', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Link" glyphicon
	 * @return SpanElement
	 */
	public static function Link($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-link', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Phone" glyphicon
	 * @return SpanElement
	 */
	public static function Phone($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-phone', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Pushpin" glyphicon
	 * @return SpanElement
	 */
	public static function Pushpin($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-pushpin', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Usd" glyphicon
	 * @return SpanElement
	 */
	public static function Usd($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-usd', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Gbp" glyphicon
	 * @return SpanElement
	 */
	public static function Gbp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-gbp', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Sort" glyphicon
	 * @return SpanElement
	 */
	public static function Sort($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sort', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SortByAlphabet" glyphicon
	 * @return SpanElement
	 */
	public static function SortByAlphabet($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sort-by-alphabet', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SortByAlphabetAlt" glyphicon
	 * @return SpanElement
	 */
	public static function SortByAlphabetAlt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sort-by-alphabet-alt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SortByOrder" glyphicon
	 * @return SpanElement
	 */
	public static function SortByOrder($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sort-by-order', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SortByOrderAlt" glyphicon
	 * @return SpanElement
	 */
	public static function SortByOrderAlt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sort-by-order-alt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SortByAttributes" glyphicon
	 * @return SpanElement
	 */
	public static function SortByAttributes($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sort-by-attributes', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SortByAttributesAlt" glyphicon
	 * @return SpanElement
	 */
	public static function SortByAttributesAlt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sort-by-attributes-alt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Unchecked" glyphicon
	 * @return SpanElement
	 */
	public static function Unchecked($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-unchecked', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Expand" glyphicon
	 * @return SpanElement
	 */
	public static function Expand($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-expand', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CollapseDown" glyphicon
	 * @return SpanElement
	 */
	public static function CollapseDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-collapse-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CollapseUp" glyphicon
	 * @return SpanElement
	 */
	public static function CollapseUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-collapse-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "LogIn" glyphicon
	 * @return SpanElement
	 */
	public static function LogIn($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-log-in', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Flash" glyphicon
	 * @return SpanElement
	 */
	public static function Flash($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-flash', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "LogOut" glyphicon
	 * @return SpanElement
	 */
	public static function LogOut($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-log-out', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "NewWindow" glyphicon
	 * @return SpanElement
	 */
	public static function NewWindow($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-new-window', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Record" glyphicon
	 * @return SpanElement
	 */
	public static function Record($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-record', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Save" glyphicon
	 * @return SpanElement
	 */
	public static function Save($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-save', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Open" glyphicon
	 * @return SpanElement
	 */
	public static function Open($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-open', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Saved" glyphicon
	 * @return SpanElement
	 */
	public static function Saved($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-saved', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Import" glyphicon
	 * @return SpanElement
	 */
	public static function Import($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-import', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Export" glyphicon
	 * @return SpanElement
	 */
	public static function Export($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-export', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Send" glyphicon
	 * @return SpanElement
	 */
	public static function Send($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-send', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FloppyDisk" glyphicon
	 * @return SpanElement
	 */
	public static function FloppyDisk($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-floppy-disk', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FloppySaved" glyphicon
	 * @return SpanElement
	 */
	public static function FloppySaved($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-floppy-saved', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FloppyRemove" glyphicon
	 * @return SpanElement
	 */
	public static function FloppyRemove($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-floppy-remove', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FloppySave" glyphicon
	 * @return SpanElement
	 */
	public static function FloppySave($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-floppy-save', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "FloppyOpen" glyphicon
	 * @return SpanElement
	 */
	public static function FloppyOpen($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-floppy-open', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CreditCard" glyphicon
	 * @return SpanElement
	 */
	public static function CreditCard($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-credit-card', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Transfer" glyphicon
	 * @return SpanElement
	 */
	public static function Transfer($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-transfer', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Cutlery" glyphicon
	 * @return SpanElement
	 */
	public static function Cutlery($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-cutlery', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Header" glyphicon
	 * @return SpanElement
	 */
	public static function Header($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-header', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Compressed" glyphicon
	 * @return SpanElement
	 */
	public static function Compressed($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-compressed', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Earphone" glyphicon
	 * @return SpanElement
	 */
	public static function Earphone($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-earphone', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "PhoneAlt" glyphicon
	 * @return SpanElement
	 */
	public static function PhoneAlt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-phone-alt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Tower" glyphicon
	 * @return SpanElement
	 */
	public static function Tower($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tower', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Stats" glyphicon
	 * @return SpanElement
	 */
	public static function Stats($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-stats', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SdVideo" glyphicon
	 * @return SpanElement
	 */
	public static function SdVideo($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sd-video', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "HdVideo" glyphicon
	 * @return SpanElement
	 */
	public static function HdVideo($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-hd-video', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Subtitles" glyphicon
	 * @return SpanElement
	 */
	public static function Subtitles($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-subtitles', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SoundStereo" glyphicon
	 * @return SpanElement
	 */
	public static function SoundStereo($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sound-stereo', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SoundDolby" glyphicon
	 * @return SpanElement
	 */
	public static function SoundDolby($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sound-dolby', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Sound51" glyphicon
	 * @return SpanElement
	 */
	public static function Sound51($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sound-5-1', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Sound61" glyphicon
	 * @return SpanElement
	 */
	public static function Sound61($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sound-6-1', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Sound71" glyphicon
	 * @return SpanElement
	 */
	public static function Sound71($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sound-7-1', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CopyrightMark" glyphicon
	 * @return SpanElement
	 */
	public static function CopyrightMark($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-copyright-mark', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "RegistrationMark" glyphicon
	 * @return SpanElement
	 */
	public static function RegistrationMark($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-registration-mark', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CloudDownload" glyphicon
	 * @return SpanElement
	 */
	public static function CloudDownload($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-cloud-download', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "CloudUpload" glyphicon
	 * @return SpanElement
	 */
	public static function CloudUpload($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-cloud-upload', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TreeConifer" glyphicon
	 * @return SpanElement
	 */
	public static function TreeConifer($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tree-conifer', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TreeDeciduous" glyphicon
	 * @return SpanElement
	 */
	public static function TreeDeciduous($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tree-deciduous', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Cd" glyphicon
	 * @return SpanElement
	 */
	public static function Cd($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-cd', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "SaveFile" glyphicon
	 * @return SpanElement
	 */
	public static function SaveFile($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-save-file', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "OpenFile" glyphicon
	 * @return SpanElement
	 */
	public static function OpenFile($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-open-file', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "LevelUp" glyphicon
	 * @return SpanElement
	 */
	public static function LevelUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-level-up', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Copy" glyphicon
	 * @return SpanElement
	 */
	public static function Copy($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-copy', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Paste" glyphicon
	 * @return SpanElement
	 */
	public static function Paste($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-paste', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Alert" glyphicon
	 * @return SpanElement
	 */
	public static function Alert($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-alert', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Equalizer" glyphicon
	 * @return SpanElement
	 */
	public static function Equalizer($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-equalizer', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "King" glyphicon
	 * @return SpanElement
	 */
	public static function King($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-king', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Queen" glyphicon
	 * @return SpanElement
	 */
	public static function Queen($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-queen', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Pawn" glyphicon
	 * @return SpanElement
	 */
	public static function Pawn($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-pawn', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Bishop" glyphicon
	 * @return SpanElement
	 */
	public static function Bishop($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-bishop', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Knight" glyphicon
	 * @return SpanElement
	 */
	public static function Knight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-knight', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "BabyFormula" glyphicon
	 * @return SpanElement
	 */
	public static function BabyFormula($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-baby-formula', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Tent" glyphicon
	 * @return SpanElement
	 */
	public static function Tent($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-tent', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Blackboard" glyphicon
	 * @return SpanElement
	 */
	public static function Blackboard($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-blackboard', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Bed" glyphicon
	 * @return SpanElement
	 */
	public static function Bed($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-bed', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Apple" glyphicon
	 * @return SpanElement
	 */
	public static function Apple($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-apple', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Erase" glyphicon
	 * @return SpanElement
	 */
	public static function Erase($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-erase', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Hourglass" glyphicon
	 * @return SpanElement
	 */
	public static function Hourglass($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-hourglass', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Lamp" glyphicon
	 * @return SpanElement
	 */
	public static function Lamp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-lamp', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Duplicate" glyphicon
	 * @return SpanElement
	 */
	public static function Duplicate($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-duplicate', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "PiggyBank" glyphicon
	 * @return SpanElement
	 */
	public static function PiggyBank($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-piggy-bank', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Scissors" glyphicon
	 * @return SpanElement
	 */
	public static function Scissors($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-scissors', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Bitcoin" glyphicon
	 * @return SpanElement
	 */
	public static function Bitcoin($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-bitcoin', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Btc" glyphicon
	 * @return SpanElement
	 */
	public static function Btc($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-btc', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Xbt" glyphicon
	 * @return SpanElement
	 */
	public static function Xbt($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-xbt', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Yen" glyphicon
	 * @return SpanElement
	 */
	public static function Yen($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-yen', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Jpy" glyphicon
	 * @return SpanElement
	 */
	public static function Jpy($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-jpy', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Ruble" glyphicon
	 * @return SpanElement
	 */
	public static function Ruble($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-ruble', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Rub" glyphicon
	 * @return SpanElement
	 */
	public static function Rub($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-rub', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Scale" glyphicon
	 * @return SpanElement
	 */
	public static function Scale($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-scale', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "IceLolly" glyphicon
	 * @return SpanElement
	 */
	public static function IceLolly($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-ice-lolly', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "IceLollyTasted" glyphicon
	 * @return SpanElement
	 */
	public static function IceLollyTasted($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-ice-lolly-tasted', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Education" glyphicon
	 * @return SpanElement
	 */
	public static function Education($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-education', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "OptionHorizontal" glyphicon
	 * @return SpanElement
	 */
	public static function OptionHorizontal($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-option-horizontal', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "OptionVertical" glyphicon
	 * @return SpanElement
	 */
	public static function OptionVertical($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-option-vertical', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "MenuHamburger" glyphicon
	 * @return SpanElement
	 */
	public static function MenuHamburger($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-menu-hamburger', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ModalWindow" glyphicon
	 * @return SpanElement
	 */
	public static function ModalWindow($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-modal-window', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Oil" glyphicon
	 * @return SpanElement
	 */
	public static function Oil($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-oil', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Grain" glyphicon
	 * @return SpanElement
	 */
	public static function Grain($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-grain', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Sunglasses" glyphicon
	 * @return SpanElement
	 */
	public static function Sunglasses($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-sunglasses', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TextSize" glyphicon
	 * @return SpanElement
	 */
	public static function TextSize($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-text-size', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TextColor" glyphicon
	 * @return SpanElement
	 */
	public static function TextColor($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-text-color', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TextBackground" glyphicon
	 * @return SpanElement
	 */
	public static function TextBackground($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-text-background', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ObjectAlignTop" glyphicon
	 * @return SpanElement
	 */
	public static function ObjectAlignTop($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-object-align-top', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ObjectAlignBottom" glyphicon
	 * @return SpanElement
	 */
	public static function ObjectAlignBottom($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-object-align-bottom', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ObjectAlignHorizontal" glyphicon
	 * @return SpanElement
	 */
	public static function ObjectAlignHorizontal($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-object-align-horizontal', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ObjectAlignLeft" glyphicon
	 * @return SpanElement
	 */
	public static function ObjectAlignLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-object-align-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ObjectAlignVertical" glyphicon
	 * @return SpanElement
	 */
	public static function ObjectAlignVertical($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-object-align-vertical', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "ObjectAlignRight" glyphicon
	 * @return SpanElement
	 */
	public static function ObjectAlignRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-object-align-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TriangleRight" glyphicon
	 * @return SpanElement
	 */
	public static function TriangleRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-triangle-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TriangleLeft" glyphicon
	 * @return SpanElement
	 */
	public static function TriangleLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-triangle-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TriangleBottom" glyphicon
	 * @return SpanElement
	 */
	public static function TriangleBottom($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-triangle-bottom', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "TriangleTop" glyphicon
	 * @return SpanElement
	 */
	public static function TriangleTop($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-triangle-top', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Console" glyphicon
	 * @return SpanElement
	 */
	public static function Console($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-console', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Superscript" glyphicon
	 * @return SpanElement
	 */
	public static function Superscript($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-superscript', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "Subscript" glyphicon
	 * @return SpanElement
	 */
	public static function Subscript($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-subscript', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "MenuLeft" glyphicon
	 * @return SpanElement
	 */
	public static function MenuLeft($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-menu-left', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "MenuRight" glyphicon
	 * @return SpanElement
	 */
	public static function MenuRight($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-menu-right', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "MenuDown" glyphicon
	 * @return SpanElement
	 */
	public static function MenuDown($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-menu-down', $title);
	}
	/**
	 * Generates a bootstrap span that displays the "MenuUp" glyphicon
	 * @return SpanElement
	 */
	public static function MenuUp($class='', $id='', $title=''){
		return new SpanElement('', $id, ($class?"{$class} ":'') . 'glyphicon glyphicon-menu-up', $title);
	}
};
?>