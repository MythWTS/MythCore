<?php
namespace Core\Web\Bs;
class Icons extends \Enum{
	public static
		$Asterisk, $Plus, $Euro, $Eur, $Minus, $Cloud, $Envelope, $Pencil, $Glass, $Music, $Search, $Heart, $Star, $StarEmpty,
		$User, $Film, $ThLarge, $Th, $ThList, $Ok, $Remove, $ZoomIn, $ZoomOut, $Off, $Signal, $Cog, $Trash,$Home, $File,
		$Time, $Road, $DownloadAlt, $Download, $Upload, $Inbox, $PlayCircle, $Repeat, $Refresh, $ListAlt, $Lock, $Flag,
		$Headphones, $VolumeOff, $VolumeDown, $VolumeUp, $Qrcode, $Barcode, $Tag, $Tags, $Book, $Bookmark, $Print, $Camera,
		$Font, $Bold, $Italic, $TextHeight, $TextWidth, $AlignLeft, $AlignCenter, $AlignRight, $AlignJustify, $List,
		$IndentLeft, $IndentRight, $FacetimeVideo, $Picture, $MapMarker, $Adjust, $Tint, $Edit, $Share, $Check, $Move,
		$StepBackward, $FastBackward, $Backward, $Play, $Pause, $Stop, $Forward, $FastForward, $StepForward, $Eject,
		$ChevronLeft, $ChevronRight, $PlusSign, $MinusSign, $RemoveSign, $OkSign, $QuestionSign, $InfoSign, $Screenshot,
		$RemoveCircle, $OkCircle, $BanCircle, $ArrowLeft, $ArrowRight, $ArrowUp, $ArrowDown, $ShareAlt, $ResizeFull,
		$ResizeSmall, $ExclamationSign, $Gift, $Leaf, $Fire, $EyeOpen, $EyeClose, $WarningSign, $Plane, $Calendar, $Random,
		$Comment, $Magnet, $ChevronUp, $ChevronDown, $Retweet, $ShoppingCart, $FolderClose, $FolderOpen, $ResizeVertical,
		$ResizeHorizontal, $Hdd, $Bullhorn, $Bell, $Certificate, $ThumbsUp, $ThumbsDown, $HandRight, $HandLeft, $HandUp,
		$HandDown, $CircleArrowRight, $CircleArrowLeft, $CircleArrowUp, $CircleArrowDown, $Globe, $Wrench, $Tasks, $Filter,
		$Briefcase, $Fullscreen, $Dashboard, $Paperclip, $HeartEmpty, $Link, $Phone, $Pushpin, $Usd, $Gbp, $Sort,
		$SortByAlphabet, $SortByAlphabetAlt, $SortByOrder, $SortByOrderAlt, $SortByAttributes, $SortByAttributesAlt,
		$Unchecked, $Expand, $CollapseDown, $CollapseUp, $LogIn, $Flash, $LogOut, $NewWindow, $Record, $Save, $Open, $Saved,
		$Import, $Export, $Send, $FloppyDisk, $FloppySaved, $FloppyRemove, $FloppySave, $FloppyOpen, $CreditCard, $Transfer,
		$Cutlery, $Header, $Compressed, $Earphone, $PhoneAlt, $Tower, $Stats, $SdVideo, $HdVideo, $Subtitles, $SoundStereo,
		$SoundDolby, $Sound51, $Sound61, $Sound71, $CopyrightMark, $RegistrationMark, $CloudDownload, $CloudUpload,
		$TreeConifer, $TreeDeciduous, $Cd, $SaveFile, $OpenFile, $LevelUp, $Copy, $Paste, $Alert, $Equalizer, $King, $Queen,
		$Pawn, $Bishop, $Knight, $BabyFormula, $Tent, $Blackboard, $Bed, $Apple, $Erase, $Hourglass, $Lamp, $Duplicate,
		$PiggyBank, $Scissors, $Bitcoin, $Btc, $Xbt, $Yen, $Jpy, $Ruble, $Rub, $Scale, $IceLolly, $IceLollyTasted, $Education,
		$OptionHorizontal, $OptionVertical, $MenuHamburger, $ModalWindow, $Oil, $Grain, $Sunglasses, $TextSize, $TextColor,
		$TextBackground, $ObjectAlignTop, $ObjectAlignBottom, $ObjectAlignHorizontal, $ObjectAlignLeft, $ObjectAlignVertical,
		$ObjectAlignRight, $TriangleRight, $TriangleLeft, $TriangleBottom, $TriangleTop, $Console, $Superscript, $Subscript,
		$MenuLeft, $MenuRight, $MenuDown, $MenuUp;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$Asterisk = new Icons('Asterisk', 'glyphicon glyphicon-asterisk');
		self::$Plus = new Icons('Plus', 'glyphicon glyphicon-plus');
		self::$Euro = new Icons('Euro', 'glyphicon glyphicon-euro');
		self::$Eur = new Icons('Eur', 'glyphicon glyphicon-eur');
		self::$Minus = new Icons('Minus', 'glyphicon glyphicon-minus');
		self::$Cloud = new Icons('Cloud', 'glyphicon glyphicon-cloud');
		self::$Envelope = new Icons('Envelope', 'glyphicon glyphicon-envelope');
		self::$Pencil = new Icons('Pencil', 'glyphicon glyphicon-pencil');
		self::$Glass = new Icons('Glass', 'glyphicon glyphicon-glass');
		self::$Music = new Icons('Music', 'glyphicon glyphicon-music');
		self::$Search = new Icons('Search', 'glyphicon glyphicon-search');
		self::$Heart = new Icons('Heart', 'glyphicon glyphicon-heart');
		self::$Star = new Icons('Star', 'glyphicon glyphicon-star');
		self::$StarEmpty = new Icons('Star-Empty', 'glyphicon glyphicon-star-empty');
		self::$User = new Icons('User', 'glyphicon glyphicon-user');
		self::$Film = new Icons('Film', 'glyphicon glyphicon-film');
		self::$ThLarge = new Icons('Th-Large', 'glyphicon glyphicon-th-large');
		self::$Th = new Icons('Th', 'glyphicon glyphicon-th');
		self::$ThList = new Icons('Th-List', 'glyphicon glyphicon-th-list');
		self::$Ok = new Icons('Ok', 'glyphicon glyphicon-ok');
		self::$Remove = new Icons('Remove', 'glyphicon glyphicon-remove');
		self::$ZoomIn = new Icons('Zoom-In', 'glyphicon glyphicon-zoom-in');
		self::$ZoomOut = new Icons('Zoom-Out', 'glyphicon glyphicon-zoom-out');
		self::$Off = new Icons('Off', 'glyphicon glyphicon-off');
		self::$Signal = new Icons('Signal', 'glyphicon glyphicon-signal');
		self::$Cog = new Icons('Cog', 'glyphicon glyphicon-cog');
		self::$Trash = new Icons('Trash', 'glyphicon glyphicon-trash');
		self::$Home = new Icons('Home', 'glyphicon glyphicon-home');
		self::$File = new Icons('File', 'glyphicon glyphicon-file');
		self::$Time = new Icons('Time', 'glyphicon glyphicon-time');
		self::$Road = new Icons('Road', 'glyphicon glyphicon-road');
		self::$DownloadAlt = new Icons('Download-Alt', 'glyphicon glyphicon-download-alt');
		self::$Download = new Icons('Download', 'glyphicon glyphicon-download');
		self::$Upload = new Icons('Upload', 'glyphicon glyphicon-upload');
		self::$Inbox = new Icons('Inbox', 'glyphicon glyphicon-inbox');
		self::$PlayCircle = new Icons('Play-Circle', 'glyphicon glyphicon-play-circle');
		self::$Repeat = new Icons('Repeat', 'glyphicon glyphicon-repeat');
		self::$Refresh = new Icons('Refresh', 'glyphicon glyphicon-refresh');
		self::$ListAlt = new Icons('List-Alt', 'glyphicon glyphicon-list-alt');
		self::$Lock = new Icons('Lock', 'glyphicon glyphicon-lock');
		self::$Flag = new Icons('Flag', 'glyphicon glyphicon-flag');
		self::$Headphones = new Icons('Headphones', 'glyphicon glyphicon-headphones');
		self::$VolumeOff = new Icons('Volume-Off', 'glyphicon glyphicon-volume-off');
		self::$VolumeDown = new Icons('Volume-Down', 'glyphicon glyphicon-volume-down');
		self::$VolumeUp = new Icons('Volume-Up', 'glyphicon glyphicon-volume-up');
		self::$Qrcode = new Icons('Qrcode', 'glyphicon glyphicon-qrcode');
		self::$Barcode = new Icons('Barcode', 'glyphicon glyphicon-barcode');
		self::$Tag = new Icons('Tag', 'glyphicon glyphicon-tag');
		self::$Tags = new Icons('Tags', 'glyphicon glyphicon-tags');
		self::$Book = new Icons('Book', 'glyphicon glyphicon-book');
		self::$Bookmark = new Icons('Bookmark', 'glyphicon glyphicon-bookmark');
		self::$Print = new Icons('Print', 'glyphicon glyphicon-print');
		self::$Camera = new Icons('Camera', 'glyphicon glyphicon-camera');
		self::$Font = new Icons('Font', 'glyphicon glyphicon-font');
		self::$Bold = new Icons('Bold', 'glyphicon glyphicon-bold');
		self::$Italic = new Icons('Italic', 'glyphicon glyphicon-italic');
		self::$TextHeight = new Icons('Text-Height', 'glyphicon glyphicon-text-height');
		self::$TextWidth = new Icons('Text-Width', 'glyphicon glyphicon-text-width');
		self::$AlignLeft = new Icons('Align-Left', 'glyphicon glyphicon-align-left');
		self::$AlignCenter = new Icons('Align-Center', 'glyphicon glyphicon-align-center');
		self::$AlignRight = new Icons('Align-Right', 'glyphicon glyphicon-align-right');
		self::$AlignJustify = new Icons('Align-Justify', 'glyphicon glyphicon-align-justify');
		self::$List = new Icons('List', 'glyphicon glyphicon-list');
		self::$IndentLeft = new Icons('Indent-Left', 'glyphicon glyphicon-indent-left');
		self::$IndentRight = new Icons('Indent-Right', 'glyphicon glyphicon-indent-right');
		self::$FacetimeVideo = new Icons('Facetime-Video', 'glyphicon glyphicon-facetime-video');
		self::$Picture = new Icons('Picture', 'glyphicon glyphicon-picture');
		self::$MapMarker = new Icons('Map-Marker', 'glyphicon glyphicon-map-marker');
		self::$Adjust = new Icons('Adjust', 'glyphicon glyphicon-adjust');
		self::$Tint = new Icons('Tint', 'glyphicon glyphicon-tint');
		self::$Edit = new Icons('Edit', 'glyphicon glyphicon-edit');
		self::$Share = new Icons('Share', 'glyphicon glyphicon-share');
		self::$Check = new Icons('Check', 'glyphicon glyphicon-check');
		self::$Move = new Icons('Move', 'glyphicon glyphicon-move');
		self::$StepBackward = new Icons('Step-Backward', 'glyphicon glyphicon-step-backward');
		self::$FastBackward = new Icons('Fast-Backward', 'glyphicon glyphicon-fast-backward');
		self::$Backward = new Icons('Backward', 'glyphicon glyphicon-backward');
		self::$Play = new Icons('Play', 'glyphicon glyphicon-play');
		self::$Pause = new Icons('Pause', 'glyphicon glyphicon-pause');
		self::$Stop = new Icons('Stop', 'glyphicon glyphicon-stop');
		self::$Forward = new Icons('Forward', 'glyphicon glyphicon-forward');
		self::$FastForward = new Icons('Fast-Forward', 'glyphicon glyphicon-fast-forward');
		self::$StepForward = new Icons('Step-Forward', 'glyphicon glyphicon-step-forward');
		self::$Eject = new Icons('Eject', 'glyphicon glyphicon-eject');
		self::$ChevronLeft = new Icons('Chevron-Left', 'glyphicon glyphicon-chevron-left');
		self::$ChevronRight = new Icons('Chevron-Right', 'glyphicon glyphicon-chevron-right');
		self::$PlusSign = new Icons('Plus-Sign', 'glyphicon glyphicon-plus-sign');
		self::$MinusSign = new Icons('Minus-Sign', 'glyphicon glyphicon-minus-sign');
		self::$RemoveSign = new Icons('Remove-Sign', 'glyphicon glyphicon-remove-sign');
		self::$OkSign = new Icons('Ok-Sign', 'glyphicon glyphicon-ok-sign');
		self::$QuestionSign = new Icons('Question-Sign', 'glyphicon glyphicon-question-sign');
		self::$InfoSign = new Icons('Info-Sign', 'glyphicon glyphicon-info-sign');
		self::$Screenshot = new Icons('Screenshot', 'glyphicon glyphicon-screenshot');
		self::$RemoveCircle = new Icons('Remove-Circle', 'glyphicon glyphicon-remove-circle');
		self::$OkCircle = new Icons('Ok-Circle', 'glyphicon glyphicon-ok-circle');
		self::$BanCircle = new Icons('Ban-Circle', 'glyphicon glyphicon-ban-circle');
		self::$ArrowLeft = new Icons('Arrow-Left', 'glyphicon glyphicon-arrow-left');
		self::$ArrowRight = new Icons('Arrow-Right', 'glyphicon glyphicon-arrow-right');
		self::$ArrowUp = new Icons('Arrow-Up', 'glyphicon glyphicon-arrow-up');
		self::$ArrowDown = new Icons('Arrow-Down', 'glyphicon glyphicon-arrow-down');
		self::$ShareAlt = new Icons('Share-Alt', 'glyphicon glyphicon-share-alt');
		self::$ResizeFull = new Icons('Resize-Full', 'glyphicon glyphicon-resize-full');
		self::$ResizeSmall = new Icons('Resize-Small', 'glyphicon glyphicon-resize-small');
		self::$ExclamationSign = new Icons('Exclamation-Sign', 'glyphicon glyphicon-exclamation-sign');
		self::$Gift = new Icons('Gift', 'glyphicon glyphicon-gift');
		self::$Leaf = new Icons('Leaf', 'glyphicon glyphicon-leaf');
		self::$Fire = new Icons('Fire', 'glyphicon glyphicon-fire');
		self::$EyeOpen = new Icons('Eye-Open', 'glyphicon glyphicon-eye-open');
		self::$EyeClose = new Icons('Eye-Close', 'glyphicon glyphicon-eye-close');
		self::$WarningSign = new Icons('Warning-Sign', 'glyphicon glyphicon-warning-sign');
		self::$Plane = new Icons('Plane', 'glyphicon glyphicon-plane');
		self::$Calendar = new Icons('Calendar', 'glyphicon glyphicon-calendar');
		self::$Random = new Icons('Random', 'glyphicon glyphicon-random');
		self::$Comment = new Icons('Comment', 'glyphicon glyphicon-comment');
		self::$Magnet = new Icons('Magnet', 'glyphicon glyphicon-magnet');
		self::$ChevronUp = new Icons('Chevron-Up', 'glyphicon glyphicon-chevron-up');
		self::$ChevronDown = new Icons('Chevron-Down', 'glyphicon glyphicon-chevron-down');
		self::$Retweet = new Icons('Retweet', 'glyphicon glyphicon-retweet');
		self::$ShoppingCart = new Icons('Shopping-Cart', 'glyphicon glyphicon-shopping-cart');
		self::$FolderClose = new Icons('Folder-Close', 'glyphicon glyphicon-folder-close');
		self::$FolderOpen = new Icons('Folder-Open', 'glyphicon glyphicon-folder-open');
		self::$ResizeVertical = new Icons('Resize-Vertical', 'glyphicon glyphicon-resize-vertical');
		self::$ResizeHorizontal = new Icons('Resize-Horizontal', 'glyphicon glyphicon-resize-horizontal');
		self::$Hdd = new Icons('Hdd', 'glyphicon glyphicon-hdd');
		self::$Bullhorn = new Icons('Bullhorn', 'glyphicon glyphicon-bullhorn');
		self::$Bell = new Icons('Bell', 'glyphicon glyphicon-bell');
		self::$Certificate = new Icons('Certificate', 'glyphicon glyphicon-certificate');
		self::$ThumbsUp = new Icons('Thumbs-Up', 'glyphicon glyphicon-thumbs-up');
		self::$ThumbsDown = new Icons('Thumbs-Down', 'glyphicon glyphicon-thumbs-down');
		self::$HandRight = new Icons('Hand-Right', 'glyphicon glyphicon-hand-right');
		self::$HandLeft = new Icons('Hand-Left', 'glyphicon glyphicon-hand-left');
		self::$HandUp = new Icons('Hand-Up', 'glyphicon glyphicon-hand-up');
		self::$HandDown = new Icons('Hand-Down', 'glyphicon glyphicon-hand-down');
		self::$CircleArrowRight = new Icons('Circle-Arrow-Right', 'glyphicon glyphicon-circle-arrow-right');
		self::$CircleArrowLeft = new Icons('Circle-Arrow-Left', 'glyphicon glyphicon-circle-arrow-left');
		self::$CircleArrowUp = new Icons('Circle-Arrow-Up', 'glyphicon glyphicon-circle-arrow-up');
		self::$CircleArrowDown = new Icons('Circle-Arrow-Down', 'glyphicon glyphicon-circle-arrow-down');
		self::$Globe = new Icons('Globe', 'glyphicon glyphicon-globe');
		self::$Wrench = new Icons('Wrench', 'glyphicon glyphicon-wrench');
		self::$Tasks = new Icons('Tasks', 'glyphicon glyphicon-tasks');
		self::$Filter = new Icons('Filter', 'glyphicon glyphicon-filter');
		self::$Briefcase = new Icons('Briefcase', 'glyphicon glyphicon-briefcase');
		self::$Fullscreen = new Icons('Fullscreen', 'glyphicon glyphicon-fullscreen');
		self::$Dashboard = new Icons('Dashboard', 'glyphicon glyphicon-dashboard');
		self::$Paperclip = new Icons('Paperclip', 'glyphicon glyphicon-paperclip');
		self::$HeartEmpty = new Icons('Heart-Empty', 'glyphicon glyphicon-heart-empty');
		self::$Link = new Icons('Link', 'glyphicon glyphicon-link');
		self::$Phone = new Icons('Phone', 'glyphicon glyphicon-phone');
		self::$Pushpin = new Icons('Pushpin', 'glyphicon glyphicon-pushpin');
		self::$Usd = new Icons('Usd', 'glyphicon glyphicon-usd');
		self::$Gbp = new Icons('Gbp', 'glyphicon glyphicon-gbp');
		self::$Sort = new Icons('Sort', 'glyphicon glyphicon-sort');
		self::$SortByAlphabet = new Icons('Sort-By-Alphabet', 'glyphicon glyphicon-sort-by-alphabet');
		self::$SortByAlphabetAlt = new Icons('Sort-By-Alphabet-Alt', 'glyphicon glyphicon-sort-by-alphabet-alt');
		self::$SortByOrder = new Icons('Sort-By-Order', 'glyphicon glyphicon-sort-by-order');
		self::$SortByOrderAlt = new Icons('Sort-By-Order-Alt', 'glyphicon glyphicon-sort-by-order-alt');
		self::$SortByAttributes = new Icons('Sort-By-Attributes', 'glyphicon glyphicon-sort-by-attributes');
		self::$SortByAttributesAlt = new Icons('Sort-By-Attributes-Alt', 'glyphicon glyphicon-sort-by-attributes-alt');
		self::$Unchecked = new Icons('Unchecked', 'glyphicon glyphicon-unchecked');
		self::$Expand = new Icons('Expand', 'glyphicon glyphicon-expand');
		self::$CollapseDown = new Icons('Collapse-Down', 'glyphicon glyphicon-collapse-down');
		self::$CollapseUp = new Icons('Collapse-Up', 'glyphicon glyphicon-collapse-up');
		self::$LogIn = new Icons('Log-In', 'glyphicon glyphicon-log-in');
		self::$Flash = new Icons('Flash', 'glyphicon glyphicon-flash');
		self::$LogOut = new Icons('Log-Out', 'glyphicon glyphicon-log-out');
		self::$NewWindow = new Icons('New-Window', 'glyphicon glyphicon-new-window');
		self::$Record = new Icons('Record', 'glyphicon glyphicon-record');
		self::$Save = new Icons('Save', 'glyphicon glyphicon-save');
		self::$Open = new Icons('Open', 'glyphicon glyphicon-open');
		self::$Saved = new Icons('Saved', 'glyphicon glyphicon-saved');
		self::$Import = new Icons('Import', 'glyphicon glyphicon-import');
		self::$Export = new Icons('Export', 'glyphicon glyphicon-export');
		self::$Send = new Icons('Send', 'glyphicon glyphicon-send');
		self::$FloppyDisk = new Icons('Floppy-Disk', 'glyphicon glyphicon-floppy-disk');
		self::$FloppySaved = new Icons('Floppy-Saved', 'glyphicon glyphicon-floppy-saved');
		self::$FloppyRemove = new Icons('Floppy-Remove', 'glyphicon glyphicon-floppy-remove');
		self::$FloppySave = new Icons('Floppy-Save', 'glyphicon glyphicon-floppy-save');
		self::$FloppyOpen = new Icons('Floppy-Open', 'glyphicon glyphicon-floppy-open');
		self::$CreditCard = new Icons('Credit-Card', 'glyphicon glyphicon-credit-card');
		self::$Transfer = new Icons('Transfer', 'glyphicon glyphicon-transfer');
		self::$Cutlery = new Icons('Cutlery', 'glyphicon glyphicon-cutlery');
		self::$Header = new Icons('Header', 'glyphicon glyphicon-header');
		self::$Compressed = new Icons('Compressed', 'glyphicon glyphicon-compressed');
		self::$Earphone = new Icons('Earphone', 'glyphicon glyphicon-earphone');
		self::$PhoneAlt = new Icons('Phone-Alt', 'glyphicon glyphicon-phone-alt');
		self::$Tower = new Icons('Tower', 'glyphicon glyphicon-tower');
		self::$Stats = new Icons('Stats', 'glyphicon glyphicon-stats');
		self::$SdVideo = new Icons('Sd-Video', 'glyphicon glyphicon-sd-video');
		self::$HdVideo = new Icons('Hd-Video', 'glyphicon glyphicon-hd-video');
		self::$Subtitles = new Icons('Subtitles', 'glyphicon glyphicon-subtitles');
		self::$SoundStereo = new Icons('Sound-Stereo', 'glyphicon glyphicon-sound-stereo');
		self::$SoundDolby = new Icons('Sound-Dolby', 'glyphicon glyphicon-sound-dolby');
		self::$Sound51 = new Icons('Sound-5-1', 'glyphicon glyphicon-sound-5-1');
		self::$Sound61 = new Icons('Sound-6-1', 'glyphicon glyphicon-sound-6-1');
		self::$Sound71 = new Icons('Sound-7-1', 'glyphicon glyphicon-sound-7-1');
		self::$CopyrightMark = new Icons('Copyright-Mark', 'glyphicon glyphicon-copyright-mark');
		self::$RegistrationMark = new Icons('Registration-Mark', 'glyphicon glyphicon-registration-mark');
		self::$CloudDownload = new Icons('Cloud-Download', 'glyphicon glyphicon-cloud-download');
		self::$CloudUpload = new Icons('Cloud-Upload', 'glyphicon glyphicon-cloud-upload');
		self::$TreeConifer = new Icons('Tree-Conifer', 'glyphicon glyphicon-tree-conifer');
		self::$TreeDeciduous = new Icons('Tree-Deciduous', 'glyphicon glyphicon-tree-deciduous');
		self::$Cd = new Icons('Cd', 'glyphicon glyphicon-cd');
		self::$SaveFile = new Icons('Save-File', 'glyphicon glyphicon-save-file');
		self::$OpenFile = new Icons('Open-File', 'glyphicon glyphicon-open-file');
		self::$LevelUp = new Icons('Level-Up', 'glyphicon glyphicon-level-up');
		self::$Copy = new Icons('Copy', 'glyphicon glyphicon-copy');
		self::$Paste = new Icons('Paste', 'glyphicon glyphicon-paste');
		self::$Alert = new Icons('Alert', 'glyphicon glyphicon-alert');
		self::$Equalizer = new Icons('Equalizer', 'glyphicon glyphicon-equalizer');
		self::$King = new Icons('King', 'glyphicon glyphicon-king');
		self::$Queen = new Icons('Queen', 'glyphicon glyphicon-queen');
		self::$Pawn = new Icons('Pawn', 'glyphicon glyphicon-pawn');
		self::$Bishop = new Icons('Bishop', 'glyphicon glyphicon-bishop');
		self::$Knight = new Icons('Knight', 'glyphicon glyphicon-knight');
		self::$BabyFormula = new Icons('Baby-Formula', 'glyphicon glyphicon-baby-formula');
		self::$Tent = new Icons('Tent', 'glyphicon glyphicon-tent');
		self::$Blackboard = new Icons('Blackboard', 'glyphicon glyphicon-blackboard');
		self::$Bed = new Icons('Bed', 'glyphicon glyphicon-bed');
		self::$Apple = new Icons('Apple', 'glyphicon glyphicon-apple');
		self::$Erase = new Icons('Erase', 'glyphicon glyphicon-erase');
		self::$Hourglass = new Icons('Hourglass', 'glyphicon glyphicon-hourglass');
		self::$Lamp = new Icons('Lamp', 'glyphicon glyphicon-lamp');
		self::$Duplicate = new Icons('Duplicate', 'glyphicon glyphicon-duplicate');
		self::$PiggyBank = new Icons('Piggy-Bank', 'glyphicon glyphicon-piggy-bank');
		self::$Scissors = new Icons('Scissors', 'glyphicon glyphicon-scissors');
		self::$Bitcoin = new Icons('Bitcoin', 'glyphicon glyphicon-bitcoin');
		self::$Btc = new Icons('Btc', 'glyphicon glyphicon-btc');
		self::$Xbt = new Icons('Xbt', 'glyphicon glyphicon-xbt');
		self::$Yen = new Icons('Yen', 'glyphicon glyphicon-yen');
		self::$Jpy = new Icons('Jpy', 'glyphicon glyphicon-jpy');
		self::$Ruble = new Icons('Ruble', 'glyphicon glyphicon-ruble');
		self::$Rub = new Icons('Rub', 'glyphicon glyphicon-rub');
		self::$Scale = new Icons('Scale', 'glyphicon glyphicon-scale');
		self::$IceLolly = new Icons('Ice-Lolly', 'glyphicon glyphicon-ice-lolly');
		self::$IceLollyTasted = new Icons('Ice-Lolly-Tasted', 'glyphicon glyphicon-ice-lolly-tasted');
		self::$Education = new Icons('Education', 'glyphicon glyphicon-education');
		self::$OptionHorizontal = new Icons('Option-Horizontal', 'glyphicon glyphicon-option-horizontal');
		self::$OptionVertical = new Icons('Option-Vertical', 'glyphicon glyphicon-option-vertical');
		self::$MenuHamburger = new Icons('Menu-Hamburger', 'glyphicon glyphicon-menu-hamburger');
		self::$ModalWindow = new Icons('Modal-Window', 'glyphicon glyphicon-modal-window');
		self::$Oil = new Icons('Oil', 'glyphicon glyphicon-oil');
		self::$Grain = new Icons('Grain', 'glyphicon glyphicon-grain');
		self::$Sunglasses = new Icons('Sunglasses', 'glyphicon glyphicon-sunglasses');
		self::$TextSize = new Icons('Text-Size', 'glyphicon glyphicon-text-size');
		self::$TextColor = new Icons('Text-Color', 'glyphicon glyphicon-text-color');
		self::$TextBackground = new Icons('Text-Background', 'glyphicon glyphicon-text-background');
		self::$ObjectAlignTop = new Icons('Object-Align-Top', 'glyphicon glyphicon-object-align-top');
		self::$ObjectAlignBottom = new Icons('Object-Align-Bottom', 'glyphicon glyphicon-object-align-bottom');
		self::$ObjectAlignHorizontal = new Icons('Object-Align-Horizontal', 'glyphicon glyphicon-object-align-horizontal');
		self::$ObjectAlignLeft = new Icons('Object-Align-Left', 'glyphicon glyphicon-object-align-left');
		self::$ObjectAlignVertical = new Icons('Object-Align-Vertical', 'glyphicon glyphicon-object-align-vertical');
		self::$ObjectAlignRight = new Icons('Object-Align-Right', 'glyphicon glyphicon-object-align-right');
		self::$TriangleRight = new Icons('Triangle-Right', 'glyphicon glyphicon-triangle-right');
		self::$TriangleLeft = new Icons('Triangle-Left', 'glyphicon glyphicon-triangle-left');
		self::$TriangleBottom = new Icons('Triangle-Bottom', 'glyphicon glyphicon-triangle-bottom');
		self::$TriangleTop = new Icons('Triangle-Top', 'glyphicon glyphicon-triangle-top');
		self::$Console = new Icons('Console', 'glyphicon glyphicon-console');
		self::$Superscript = new Icons('Superscript', 'glyphicon glyphicon-superscript');
		self::$Subscript = new Icons('Subscript', 'glyphicon glyphicon-subscript');
		self::$MenuLeft = new Icons('Menu-Left', 'glyphicon glyphicon-menu-left');
		self::$MenuRight = new Icons('Menu-Right', 'glyphicon glyphicon-menu-right');
		self::$MenuDown = new Icons('Menu-Down', 'glyphicon glyphicon-menu-down');
		self::$MenuUp = new Icons('Menu-Up', 'glyphicon glyphicon-menu-up');
	}
};
Icons::Initialize();
?>