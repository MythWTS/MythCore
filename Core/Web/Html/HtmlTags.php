<?php
final class HtmlTags extends Enum{
	//HTML 5
	public static 
		$A, $ABBR,$ADDRESS,$AREA,$ARTICLE,$ASIDE,$AUDIO,$B,$BASE,$BDI,$BDO,$BLOCKQUOTE,$BODY,$BR,$BUTTON,
		$CANVAS,$CAPTION,$CITE,$CODE,$COL,$COLGROUP,$DATALIST,$DD,$DEL,$DETAILS,$DFN,$DIALOG,$DIV,$DL,$DT,
		$EM,$EMBED,$FIELDSET,$FIGCAPTION,$FIGURE,$FOOTER,$FORM,$H1,$H2,$H3,$H4,$H5,$H6,$HEAD,$HEADER,$HR,$HTML,
		$I,$IFRAME,$IMG,$INPUT,$INS,$KBD,$KEYGEN,$LABEL,$LEGEND,$LI,$LINK,$MAIN,$MAP,$MARK,$MENU,$MENUITEM,$META,$METER,$NAV,$NOSCRIPT,
		$OBJECT,$OL,$OPTGROUP,$OPTION,$OUTPUT,$P,$PARAM,$PRE,$PROGRESS,$Q,$RP,$RT,$RUBY,$S,$SAMP,$SCRIPT,$SECTION,$SELECT,$SMALL,$SOURCE,
		$SPAN,$STRONG,$STYLE,$SUB,$SUMMARY,$SUP,$TABLE,$TBODY,$TD,$TEXTAREA,$TFOOT,$TH,$THEAD,$TIME,$TITLE,$TR,$TRACK,$U,$UL,$VARIABLE,$VIDEO,
		$WBR;
	//Before HTML 5
	public static $Acronym, $Applet, $BaseFont, $Big, $Center, $Dir, $Font, $Frame, $Frameset, $NoFrames, $Strike, $Tt;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$A = new HtmlTags('A', 'a');
		self::$ABBR = new HtmlTags('ABBR', 'abbr');
		self::$ADDRESS = new HtmlTags('ADDRESS', 'address');
		self::$AREA = new HtmlTags('AREA', 'area');
		self::$ARTICLE = new HtmlTags('ARTICLE', 'article');
		self::$ASIDE = new HtmlTags('ASIDE', 'aside');
		self::$AUDIO = new HtmlTags('AUDIO', 'audio');
		self::$B = new HtmlTags('B', 'b');
		self::$BASE = new HtmlTags('BASE', 'base');
		self::$BDI = new HtmlTags('BDI', 'bdi');
		self::$BDO = new HtmlTags('BDO', 'bdo');
		self::$BLOCKQUOTE = new HtmlTags('BLOCKQUOTE', 'blockquote');
		self::$BODY = new HtmlTags('BODY', 'body');
		self::$BR = new HtmlTags('BR', 'br');
		self::$BUTTON = new HtmlTags('BUTTON', 'button');
		self::$CANVAS = new HtmlTags('CANVAS', 'canvas');
		self::$CAPTION = new HtmlTags('CAPTION', 'caption');
		self::$CITE = new HtmlTags('CITE', 'cite');
		self::$CODE = new HtmlTags('CODE', 'code');
		self::$COL = new HtmlTags('COL', 'col');
		self::$COLGROUP = new HtmlTags('COLGROUP', 'colgroup');
		self::$DATALIST = new HtmlTags('DATALIST', 'datalist');
		self::$DD = new HtmlTags('DD', 'dd');
		self::$DEL = new HtmlTags('DEL', 'del');
		self::$DETAILS = new HtmlTags('DETAILS', 'details');
		self::$DFN = new HtmlTags('DFN', 'dfn');
		self::$DIALOG = new HtmlTags('DIALOG', 'dialog');
		self::$DIV = new HtmlTags('DIV', 'div');
		self::$DL = new HtmlTags('DL', 'dl');
		self::$DT = new HtmlTags('DT', 'dt');
		self::$EM = new HtmlTags('EM', 'em');
		self::$EMBED = new HtmlTags('EMBED', 'embed');
		self::$FIELDSET = new HtmlTags('FIELDSET', 'fieldset');
		self::$FIGCAPTION = new HtmlTags('FIGCAPTION', 'figcaption');
		self::$FIGURE = new HtmlTags('FIGURE', 'figure');
		self::$FOOTER = new HtmlTags('FOOTER', 'footer');
		self::$FORM = new HtmlTags('FORM', 'form');
		self::$H1 = new HtmlTags('H1', 'h1');
		self::$H2 = new HtmlTags('H2', 'h2');
		self::$H3 = new HtmlTags('H3', 'h3');
		self::$H4 = new HtmlTags('H4', 'h4');
		self::$H5 = new HtmlTags('H5', 'h5');
		self::$H6 = new HtmlTags('H6', 'h6');
		self::$HEAD = new HtmlTags('HEAD', 'head');
		self::$HEADER = new HtmlTags('HEADER', 'header');
		self::$HR = new HtmlTags('HR', 'hr');
		self::$HTML = new HtmlTags('HTML', 'html');
		self::$I = new HtmlTags('I', 'i');
		self::$IFRAME = new HtmlTags('IFRAME', 'iframe');
		self::$IMG = new HtmlTags('IMG', 'img');
		self::$INPUT = new HtmlTags('INPUT', 'input');
		self::$INS = new HtmlTags('INS', 'ins');
		self::$KBD = new HtmlTags('KBD', 'kbd');
		self::$KEYGEN = new HtmlTags('KEYGEN', 'keygen');
		self::$LABEL = new HtmlTags('LABEL', 'label');
		self::$LEGEND = new HtmlTags('LEGEND', 'legend');
		self::$LI = new HtmlTags('LI', 'li');
		self::$LINK = new HtmlTags('LINK', 'link');
		self::$MAIN = new HtmlTags('MAIN', 'main');
		self::$MAP = new HtmlTags('MAP', 'map');
		self::$MARK = new HtmlTags('MARK', 'mark');
		self::$MENU = new HtmlTags('MENU', 'menu');
		self::$MENUITEM = new HtmlTags('MENUITEM', 'menuitem');
		self::$META = new HtmlTags('META', 'meta');
		self::$METER = new HtmlTags('METER', 'meter');
		self::$NAV = new HtmlTags('NAV', 'nav');
		self::$NOSCRIPT = new HtmlTags('NOSCRIPT', 'noscript');
		self::$OBJECT = new HtmlTags('OBJECT', 'object');
		self::$OL = new HtmlTags('OL', 'ol');
		self::$OPTGROUP = new HtmlTags('OPTGROUP', 'optgroup');
		self::$OPTION = new HtmlTags('OPTION', 'option');
		self::$OUTPUT = new HtmlTags('OUTPUT', 'output');
		self::$P = new HtmlTags('P', 'p');
		self::$PARAM = new HtmlTags('PARAM', 'param');
		self::$PRE = new HtmlTags('PRE', 'pre');
		self::$PROGRESS = new HtmlTags('PROGRESS', 'progress');
		self::$Q = new HtmlTags('Q', 'q');
		self::$RP = new HtmlTags('RP', 'rp');
		self::$RT = new HtmlTags('RT', 'rt');
		self::$RUBY = new HtmlTags('RUBY', 'ruby');
		self::$S = new HtmlTags('S', 's');
		self::$SAMP = new HtmlTags('SAMP', 'samp');
		self::$SCRIPT = new HtmlTags('SCRIPT', 'script');
		self::$SECTION = new HtmlTags('SECTION', 'section');
		self::$SELECT = new HtmlTags('SELECT', 'select');
		self::$SMALL = new HtmlTags('SMALL', 'small');
		self::$SOURCE = new HtmlTags('SOURCE', 'source');
		self::$SPAN = new HtmlTags('SPAN', 'span');
		self::$STRONG = new HtmlTags('STRONG', 'strong');
		self::$STYLE = new HtmlTags('STYLE', 'style');
		self::$SUB = new HtmlTags('SUB', 'sub');
		self::$SUMMARY = new HtmlTags('SUMMARY', 'summary');
		self::$SUP = new HtmlTags('SUP', 'sup');
		self::$TABLE = new HtmlTags('TABLE', 'table');
		self::$TBODY = new HtmlTags('TBODY', 'tbody');
		self::$TD = new HtmlTags('TD', 'td');
		self::$TEXTAREA = new HtmlTags('TEXTAREA', 'textarea');
		self::$TFOOT = new HtmlTags('TFOOT', 'tfoot');
		self::$TH = new HtmlTags('TH', 'th');
		self::$THEAD = new HtmlTags('THEAD', 'thead');
		self::$TIME = new HtmlTags('TIME', 'time');
		self::$TITLE = new HtmlTags('TITLE', 'title');
		self::$TR = new HtmlTags('TR', 'tr');
		self::$TRACK = new HtmlTags('TRACK', 'track');
		self::$U = new HtmlTags('U', 'u');
		self::$UL = new HtmlTags('UL', 'ul');
		self::$VARIABLE = new HtmlTags('VARIABLE', 'var');
		self::$VIDEO = new HtmlTags('VIDEO', 'video');
		self::$WBR = new HtmlTags('WBR', 'wbr');
		//Before HTML 5
		self::$Acronym = new HtmlTags('Acronym', 'acronym');
		self::$Applet = new HtmlTags('Applet', 'applet');
		self::$BaseFont = new HtmlTags('BaseFont', 'basefont');
		self::$Big = new HtmlTags('Big', 'big');
		self::$Center = new HtmlTags('Center', 'center');
		self::$Dir = new HtmlTags('Dir', 'dir');
		self::$Font = new HtmlTags('Font', 'font');
		self::$Frame = new HtmlTags('Frame', 'frame');
		self::$Frameset = new HtmlTags('Frameset', 'frameset');
		self::$NoFrames = new HtmlTags('NoFrames', 'noframes');
		self::$Strike = new HtmlTags('Strike', 'strike');
		self::$Tt = new HtmlTags('Tt', 'tt');
	}
};

HtmlTags::Initialize();
?>