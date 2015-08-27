<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * Html attributes enumeration. This enumeration includes most of the html attributes used and it is here for reference
 * and automation only. You are in no way restricted to using it
 */
final class Attributes extends Enum{
	public static
		//Display Attributes
		$ContextMenu, $Dir, $TabIndex, $Lang, $AccessKey, $DropZone,
		//Item Events
		$OnBlur, $OnFocus, $OnSelect, $OnChange, $OnResize, $OnPopState, $OnContextMenu,
		//Keyboard Events
		$OnKeyDown, $OnKeyUp, $OnKeyPress,
		//General Events
		$OnLoad, $OnUnload, $OnBeforeUnload, $OnError, $OnHide, $OnShow, $OnAfterPrint,
		$OnBeforePrint, $OnHashChange, $OnMessage, $OnOffline, $OnOnline, $OnStorage,
		//Mouse Events
		$OnClick, $OnDoubleClick, $OnMouseDown, $OnMouseMove, $OnMouseOut, $OnMouseOver, $OnMouseUp, $OnMouseWheel, $OnScroll, $OnWheel,
		//Drag Events
		$OnDrag, $OnDragEnd, $OnDragEnter, $OnDragLeave, $OnDragOver, $OnDragStart, $OnDrop,
		//Clipboard Events
		$OnCopy, $OnCut, $OnPaste,
		//Form Events
		$OnInput, $OnInvalid, $OnReset, $OnSearch, $OnSubmit,
		//Media Events
		$OnPlay, $OnPause, $OnAbort, $OnEnded, $OnPlaying, $OnProgress,
		$OnSeeked, $OnSeeking, $OnTimeUpdate, $OnVolumeChange, $OnSuspended, $OnWaiting,
		$OnCanPlay, $OnCanPlayThrough,
		$OnCueChange, $OnDurationChange, $OnLoadStart, $OnRateChange,
		$OnEmptied, $OnLoadedData, $OnLoadedMetaData, $OnStalled,
		//Flag Attributes
		/** true/false values */
		$ContentEditable,
		/** true/false values */
		$Draggable,
		/** "hidden"-style boolean value */
		$Hidden,
		/** "hidden"-style boolean value */
		$Disabled,
		/** true/false values */
		$SpellCheck,
		/** true/false values */
		$Translate,
		//Element Specific Attributes
		//------------------------------
		//Link
		$Rel, $Href, $Type, $Rev, $Target, $HrefLang, $Media,
		//Meta
		$Charset, $Scheme, $Content, $HttpEquiv,
		//Script
		$Src, $Async, $Defer, $Event, $For, $Language,
		//Img
		$Align, $Alt, $Border, $Height, $Width, $HideFocus, $HSpace, $VSpace, $IsMap, $UseMap, $LowSrc, $Loop,
		//Form
		$AcceptCharset, $Action, $EncType, $Method, $Name, $NoValidate, $Unselectable,
		//Input
		$Accept, $Checked, $FormValidate, $Max, $Min, $MaxLength, $Multiple, $Pattern, 
		$PlaceHolder, $ReadOnly, $Required, $Size, $Step, $Value,
		//Area
		$Shape, $Coords,
		//Col
		$Span
		;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		//Display Attributes
		self::$ContextMenu = new Attributes('ContextMenu', 'contextmenu');
		self::$Dir = new Attributes('Dir', 'dir');
		self::$TabIndex = new Attributes('ContextMenu', 'contextmenu');
		self::$Lang = new Attributes('Lang', 'lang');
		self::$AccessKey = new Attributes('AccessKey', 'accesskey');
		self::$DropZone = new Attributes('DropZone', 'dropzone');
		//Item Events
		self::$OnBlur = new Attributes('OnBlur', 'onblur');
		self::$OnFocus = new Attributes('OnFocus', 'onfocus');
		self::$OnSelect = new Attributes('OnSelect', 'onselect');
		self::$OnChange = new Attributes('OnChange', 'onchange');
		self::$OnResize = new Attributes('OnResize', 'onresize');
		self::$OnPopState = new Attributes('OnPopState', 'onpopstate');
		self::$OnContextMenu = new Attributes('OnContextMenu', 'oncontextmenu');
		//Keyboard Events
		self::$OnKeyDown = new Attributes('OnKeyDown', 'onkeydown');
		self::$OnKeyUp = new Attributes('OnKeyUp', 'onkeyup');
		self::$OnKeyPress = new Attributes('OnKeyPress', 'onkeypress');
		//General Events
		self::$OnLoad = new Attributes('OnLoad', 'onload');
		self::$OnUnload = new Attributes('OnUnload', 'onunload');
		self::$OnBeforeUnload = new Attributes('OnBeforeUnload', 'onbeforeunload');
		self::$OnError = new Attributes('OnError', 'onerror');
		self::$OnHide = new Attributes('OnHide', 'onhide');
		self::$OnShow = new Attributes('OnShow', 'onshow');
		self::$OnAfterPrint = new Attributes('OnAfterPrint', 'onafterprint');
		self::$OnBeforePrint = new Attributes('OnBeforePrint', 'onbeforeprint');
		self::$OnHashChange = new Attributes('OnHashChange', 'onhashchange');
		self::$OnMessage = new Attributes('OnMessage', 'onmessage');
		self::$OnOffline = new Attributes('OnOffline', 'onoffline');
		self::$OnOnline = new Attributes('OnOnline', 'ononline');
		self::$OnStorage = new Attributes('OnStorage', 'onstorage');
		//Mouse Events
		self::$OnClick = new Attributes('OnClick', 'onclick');
		self::$OnDoubleClick = new Attributes('OnDoubleClick', 'ondblclick');
		self::$OnMouseDown = new Attributes('OnMouseDown', 'onmousedown');
		self::$OnMouseMove = new Attributes('OnMouseMove', 'onmousemove');
		self::$OnMouseOut = new Attributes('OnMouseOut', 'onmouseout');
		self::$OnMouseOver = new Attributes('OnMouseOver', 'onmouseover');
		self::$OnMouseUp = new Attributes('OnMouseUp', 'onmouseup');
		self::$OnMouseWheel = new Attributes('OnMouseWheel', 'onmousewheel');
		self::$OnScroll = new Attributes('OnScroll', 'onscroll');
		self::$OnWheel = new Attributes('OnWheel', 'onwheel');
		//Drag Events
		self::$OnDrag = new Attributes('OnDrag', 'ondrag');
		self::$OnDragEnd = new Attributes('OnDragEnd', 'ondragend');
		self::$OnDragEnter = new Attributes('OnDragEnter', 'ondragenter');
		self::$OnDragLeave = new Attributes('OnDragLeave', 'ondragleave');
		self::$OnDragOver = new Attributes('OnDragOver', 'ondragover');
		self::$OnDragStart = new Attributes('OnDragStart', 'ondragstart');
		self::$OnDrop = new Attributes('OnDrop', 'ondrop');
		//Clipboard Events
		self::$OnCopy = new Attributes('OnCopy', 'oncopy');
		self::$OnCut = new Attributes('OnCut', 'oncut');
		self::$OnPaste = new Attributes('OnPaste', 'onpaste');
		//Form Events
		self::$OnInput = new Attributes('OnInput', 'oninput');
		self::$OnInvalid = new Attributes('OnInvalid', 'oninvalid');
		self::$OnReset = new Attributes('OnReset', 'onreset');
		self::$OnSearch = new Attributes('OnSearch', 'onsearch');
		self::$OnSubmit = new Attributes('OnSubmit', 'onsubmit');
		//Media Events
		self::$OnPlay = new Attributes('OnPlay', 'onplay');
		self::$OnPause = new Attributes('OnPause', 'onpause');
		self::$OnAbort = new Attributes('OnAbort', 'onabort');
		self::$OnEnded = new Attributes('OnEnded', 'onended');
		self::$OnPlaying = new Attributes('OnPlaying', 'onplaying');
		self::$OnProgress = new Attributes('OnProgress', 'onprogress');
		self::$OnSeeked = new Attributes('OnSeeked', 'onseeked');
		self::$OnSeeking = new Attributes('OnSeeking', 'onseeking');
		self::$OnTimeUpdate = new Attributes('OnTimeUpdate', 'ontimeupdate');
		self::$OnVolumeChange = new Attributes('OnVolumeChange', 'onvolumechange');
		self::$OnSuspended = new Attributes('OnSuspended', 'onsuspended');
		self::$OnWaiting = new Attributes('OnWaiting', 'onwaiting');
		self::$OnCanPlay = new Attributes('OnCanPlay', 'oncanplay');
		self::$OnCanPlayThrough = new Attributes('OnCanPlayThrough', 'oncanplaythrough');
		self::$OnCueChange = new Attributes('OnCueChange', 'onCueChange');
		self::$OnDurationChange = new Attributes('OnDurationChange', 'ondurationchange');
		self::$OnLoadStart = new Attributes('OnLoadStart', 'onloadstart');
		self::$OnRateChange = new Attributes('OnRateChange', 'onratechange');
		self::$OnEmptied = new Attributes('OnEmptied', 'onemptied');
		self::$OnLoadedData = new Attributes('OnLoadedData', 'onloadeddata');
		self::$OnLoadedMetaData = new Attributes('OnLoadedMetaData', 'onloadedmetadata');
		self::$OnStalled = new Attributes('OnStalled', 'onstalled');
		//Flag Attributes
		self::$ContentEditable = new Attributes('ContentEditable', 'contenteditable');
		self::$Draggable = new Attributes('Draggable', 'draggable');
		self::$Hidden = new Attributes('Hidden', 'hidden');
		self::$Disabled = new Attributes('Disabled', 'disabled');
		self::$SpellCheck = new Attributes('SpellCheck', 'spellcheck');
		self::$Translate = new Attributes('Translate', 'translate');
		//Element Specific Attributes
		//------------------------------
		//Link
		self::$Rel = new Attributes('Rel', 'rel');
		self::$Href = new Attributes('Href', 'href');
		self::$Type = new Attributes('Type', 'type');
		self::$Rev = new Attributes('Rev', 'rev');
		self::$Target = new Attributes('Target', 'target');
		self::$HrefLang = new Attributes('HrefLang', 'hreflang');
		self::$Media = new Attributes('Media', 'media');
		//Meta
		self::$Charset = new Attributes('Charset', 'charset');
		self::$Scheme = new Attributes('Scheme', 'scheme');
		self::$Content = new Attributes('Content', 'content');
		self::$HttpEquiv = new Attributes('HttpEquiv', 'http-equiv');
		//Script
		self::$Src = new Attributes('Src', 'src');
		self::$Async = new Attributes('Async', 'async');
		self::$Defer = new Attributes('Defer', 'Defer');
		self::$Event = new Attributes('Event', 'Event');
		self::$For = new Attributes('For', 'For');
		self::$Language = new Attributes('Language', 'Language');
		//Img
		self::$Align = new Attributes('Align', 'align');
		self::$Alt = new Attributes('Alt', 'alt');
		self::$Border = new Attributes('Border', 'border');
		self::$Height = new Attributes('Height', 'height');
		self::$Width = new Attributes('Width', 'width');
		self::$HideFocus = new Attributes('HideFocus', 'hidefocus');
		self::$HSpace = new Attributes('HSpace', 'hspace');
		self::$VSpace = new Attributes('VSpace', 'vspace');
		self::$IsMap = new Attributes('IsMap', 'ismap');
		self::$UseMap = new Attributes('UseMap', 'usemap');
		self::$LowSrc = new Attributes('LowSrc', 'lowsrc');
		self::$Loop = new Attributes('Loop', 'loop');
		//Form
		self::$AcceptCharset = new Attributes('AcceptCharset', 'accept-charset');
		self::$Action = new Attributes('Action', 'action');
		self::$EncType = new Attributes('EncType', 'enctype');
		self::$Method = new Attributes('Method', 'method');
		self::$Name = new Attributes('Name', 'name');
		self::$NoValidate = new Attributes('NoValidate', 'novalidate');
		self::$Unselectable = new Attributes('Unselectable', 'unselectable');
		//Input
		self::$Accept = new Attributes('Accept', 'accept');
		self::$Checked = new Attributes('Checked', 'checked');
		self::$FormValidate = new Attributes('FormValidate', 'formvalidate');
		self::$Max = new Attributes('Max', 'max');
		self::$Min = new Attributes('Min', 'min');
		self::$MaxLength = new Attributes('MaxLength', 'maxlength');
		self::$Multiple = new Attributes('Multiple', 'multiple');
		self::$Pattern = new Attributes('Pattern', 'pattern');
		self::$PlaceHolder = new Attributes('PlaceHolder', 'placeholder');
		self::$ReadOnly = new Attributes('ReadOnly', 'readonly');
		self::$Required = new Attributes('Required', 'required');
		self::$Size = new Attributes('Size', 'size');
		self::$Step = new Attributes('Step', 'step');
		self::$Value = new Attributes('Vaue', 'value');
		//Area
		self::$Shape = new Attributes('Shape', 'shape');
		self::$Coords = new Attributes('Coords', 'coords');
		//Col
		self::$Span = new Attributes('Span', 'span');
	}
};
Attributes::Initialize();
?>