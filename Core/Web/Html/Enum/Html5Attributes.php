<?php
final class Html5Attributes extends Enum{
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
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		//Display Attributes
		self::$ContextMenu = new Html5Attributes('ContextMenu', 'contextmenu');
		self::$Dir = new Html5Attributes('Dir', 'dir');
		self::$TabIndex = new Html5Attributes('ContextMenu', 'contextmenu');
		self::$Lang = new Html5Attributes('Lang', 'lang');
		self::$AccessKey = new Html5Attributes('AccessKey', 'accesskey');
		self::$DropZone = new Html5Attributes('DropZone', 'dropzone');
		//Item Events
		self::$OnBlur = new Html5Attributes('OnBlur', 'onblur');
		self::$OnFocus = new Html5Attributes('OnFocus', 'onfocus');
		self::$OnSelect = new Html5Attributes('OnSelect', 'onselect');
		self::$OnChange = new Html5Attributes('OnChange', 'onchange');
		self::$OnResize = new Html5Attributes('OnResize', 'onresize');
		self::$OnPopState = new Html5Attributes('OnPopState', 'onpopstate');
		self::$OnContextMenu = new Html5Attributes('OnContextMenu', 'oncontextmenu');
		//Keyboard Events
		self::$OnKeyDown = new Html5Attributes('OnKeyDown', 'onkeydown');
		self::$OnKeyUp = new Html5Attributes('OnKeyUp', 'onkeyup');
		self::$OnKeyPress = new Html5Attributes('OnKeyPress', 'onkeypress');
		//General Events
		self::$OnLoad = new Html5Attributes('OnLoad', 'onload');
		self::$OnUnload = new Html5Attributes('OnUnload', 'onunload');
		self::$OnBeforeUnload = new Html5Attributes('OnBeforeUnload', 'onbeforeunload');
		self::$OnError = new Html5Attributes('OnError', 'onerror');
		self::$OnHide = new Html5Attributes('OnHide', 'onhide');
		self::$OnShow = new Html5Attributes('OnShow', 'onshow');
		self::$OnAfterPrint = new Html5Attributes('OnAfterPrint', 'onafterprint');
		self::$OnBeforePrint = new Html5Attributes('OnBeforePrint', 'onbeforeprint');
		self::$OnHashChange = new Html5Attributes('OnHashChange', 'onhashchange');
		self::$OnMessage = new Html5Attributes('OnMessage', 'onmessage');
		self::$OnOffline = new Html5Attributes('OnOffline', 'onoffline');
		self::$OnOnline = new Html5Attributes('OnOnline', 'ononline');
		self::$OnStorage = new Html5Attributes('OnStorage', 'onstorage');
		//Mouse Events
		self::$OnClick = new Html5Attributes('OnClick', 'onclick');
		self::$OnDoubleClick = new Html5Attributes('OnDoubleClick', 'ondblclick');
		self::$OnMouseDown = new Html5Attributes('OnMouseDown', 'onmousedown');
		self::$OnMouseMove = new Html5Attributes('OnMouseMove', 'onmousemove');
		self::$OnMouseOut = new Html5Attributes('OnMouseOut', 'onmouseout');
		self::$OnMouseOver = new Html5Attributes('OnMouseOver', 'onmouseover');
		self::$OnMouseUp = new Html5Attributes('OnMouseUp', 'onmouseup');
		self::$OnMouseWheel = new Html5Attributes('OnMouseWheel', 'onmousewheel');
		self::$OnScroll = new Html5Attributes('OnScroll', 'onscroll');
		self::$OnWheel = new Html5Attributes('OnWheel', 'onwheel');
		//Drag Events
		self::$OnDrag = new Html5Attributes('OnDrag', 'ondrag');
		self::$OnDragEnd = new Html5Attributes('OnDragEnd', 'ondragend');
		self::$OnDragEnter = new Html5Attributes('OnDragEnter', 'ondragenter');
		self::$OnDragLeave = new Html5Attributes('OnDragLeave', 'ondragleave');
		self::$OnDragOver = new Html5Attributes('OnDragOver', 'ondragover');
		self::$OnDragStart = new Html5Attributes('OnDragStart', 'ondragstart');
		self::$OnDrop = new Html5Attributes('OnDrop', 'ondrop');
		//Clipboard Events
		self::$OnCopy = new Html5Attributes('OnCopy', 'oncopy');
		self::$OnCut = new Html5Attributes('OnCut', 'oncut');
		self::$OnPaste = new Html5Attributes('OnPaste', 'onpaste');
		//Form Events
		self::$OnInput = new Html5Attributes('OnInput', 'oninput');
		self::$OnInvalid = new Html5Attributes('OnInvalid', 'oninvalid');
		self::$OnReset = new Html5Attributes('OnReset', 'onreset');
		self::$OnSearch = new Html5Attributes('OnSearch', 'onsearch');
		self::$OnSubmit = new Html5Attributes('OnSubmit', 'onsubmit');
		//Media Events
		self::$OnPlay = new Html5Attributes('OnPlay', 'onplay');
		self::$OnPause = new Html5Attributes('OnPause', 'onpause');
		self::$OnAbort = new Html5Attributes('OnAbort', 'onabort');
		self::$OnEnded = new Html5Attributes('OnEnded', 'onended');
		self::$OnPlaying = new Html5Attributes('OnPlaying', 'onplaying');
		self::$OnProgress = new Html5Attributes('OnProgress', 'onprogress');
		self::$OnSeeked = new Html5Attributes('OnSeeked', 'onseeked');
		self::$OnSeeking = new Html5Attributes('OnSeeking', 'onseeking');
		self::$OnTimeUpdate = new Html5Attributes('OnTimeUpdate', 'ontimeupdate');
		self::$OnVolumeChange = new Html5Attributes('OnVolumeChange', 'onvolumechange');
		self::$OnSuspended = new Html5Attributes('OnSuspended', 'onsuspended');
		self::$OnWaiting = new Html5Attributes('OnWaiting', 'onwaiting');
		self::$OnCanPlay = new Html5Attributes('OnCanPlay', 'oncanplay');
		self::$OnCanPlayThrough = new Html5Attributes('OnCanPlayThrough', 'oncanplaythrough');
		self::$OnCueChange = new Html5Attributes('OnCueChange', 'onCueChange');
		self::$OnDurationChange = new Html5Attributes('OnDurationChange', 'ondurationchange');
		self::$OnLoadStart = new Html5Attributes('OnLoadStart', 'onloadstart');
		self::$OnRateChange = new Html5Attributes('OnRateChange', 'onratechange');
		self::$OnEmptied = new Html5Attributes('OnEmptied', 'onemptied');
		self::$OnLoadedData = new Html5Attributes('OnLoadedData', 'onloadeddata');
		self::$OnLoadedMetaData = new Html5Attributes('OnLoadedMetaData', 'onloadedmetadata');
		self::$OnStalled = new Html5Attributes('OnStalled', 'onstalled');
		//Flag Attributes
		self::$ContentEditable = new Html5Attributes('ContentEditable', 'contenteditable');
		self::$Draggable = new Html5Attributes('Draggable', 'draggable');
		self::$Hidden = new Html5Attributes('Hidden', 'hidden');
		self::$Disabled = new Html5Attributes('Disabled', 'disabled');
		self::$SpellCheck = new Html5Attributes('SpellCheck', 'spellcheck');
		self::$Translate = new Html5Attributes('Translate', 'translate');
		//Element Specific Attributes
		//------------------------------
		//Link
		self::$Rel = new Html5Attributes('Rel', 'rel');
		self::$Href = new Html5Attributes('Href', 'href');
		self::$Type = new Html5Attributes('Type', 'type');
		self::$Rev = new Html5Attributes('Rev', 'rev');
		self::$Target = new Html5Attributes('Target', 'target');
		self::$HrefLang = new Html5Attributes('HrefLang', 'hreflang');
		self::$Media = new Html5Attributes('Media', 'media');
		//Meta
		self::$Charset = new Html5Attributes('Charset', 'charset');
		self::$Scheme = new Html5Attributes('Scheme', 'scheme');
		self::$Content = new Html5Attributes('Content', 'content');
		self::$HttpEquiv = new Html5Attributes('HttpEquiv', 'http-equiv');
		//Script
		self::$Src = new Html5Attributes('Src', 'src');
		self::$Async = new Html5Attributes('Async', 'async');
		self::$Defer = new Html5Attributes('Defer', 'Defer');
		self::$Event = new Html5Attributes('Event', 'Event');
		self::$For = new Html5Attributes('For', 'For');
		self::$Language = new Html5Attributes('Language', 'Language');
		//Img
		self::$Align = new Html5Attributes('Align', 'align');
		self::$Alt = new Html5Attributes('Alt', 'alt');
		self::$Border = new Html5Attributes('Border', 'border');
		self::$Height = new Html5Attributes('Height', 'height');
		self::$Width = new Html5Attributes('Width', 'width');
		self::$HideFocus = new Html5Attributes('HideFocus', 'hidefocus');
		self::$HSpace = new Html5Attributes('HSpace', 'hspace');
		self::$VSpace = new Html5Attributes('VSpace', 'vspace');
		self::$IsMap = new Html5Attributes('IsMap', 'ismap');
		self::$UseMap = new Html5Attributes('UseMap', 'usemap');
		self::$LowSrc = new Html5Attributes('LowSrc', 'lowsrc');
		self::$Loop = new Html5Attributes('Loop', 'loop');
		//Form
		self::$AcceptCharset = new Html5Attributes('AcceptCharset', 'accept-charset');
		self::$Action = new Html5Attributes('Action', 'action');
		self::$EncType = new Html5Attributes('EncType', 'enctype');
		self::$Method = new Html5Attributes('Method', 'method');
		self::$Name = new Html5Attributes('Name', 'name');
		self::$NoValidate = new Html5Attributes('NoValidate', 'novalidate');
		self::$Unselectable = new Html5Attributes('Unselectable', 'unselectable');
		//Input
		self::$Accept = new Html5Attributes('Accept', 'accept');
		self::$Checked = new Html5Attributes('Checked', 'checked');
		self::$FormValidate = new Html5Attributes('FormValidate', 'formvalidate');
		self::$Max = new Html5Attributes('Max', 'max');
		self::$Min = new Html5Attributes('Min', 'min');
		self::$MaxLength = new Html5Attributes('MaxLength', 'maxlength');
		self::$Multiple = new Html5Attributes('Multiple', 'multiple');
		self::$Pattern = new Html5Attributes('Pattern', 'pattern');
		self::$PlaceHolder = new Html5Attributes('PlaceHolder', 'placeholder');
		self::$ReadOnly = new Html5Attributes('ReadOnly', 'readonly');
		self::$Required = new Html5Attributes('Required', 'required');
		self::$Size = new Html5Attributes('Size', 'size');
		self::$Step = new Html5Attributes('Step', 'step');
		self::$Value = new Html5Attributes('Vaue', 'value');
		//Area
		self::$Shape = new Html5Attributes('Shape', 'shape');
		self::$Coords = new Html5Attributes('Coords', 'coords');
		//Col
		self::$Span = new Html5Attributes('Span', 'span');
	}
};
Html5Attributes::Initialize();
?>