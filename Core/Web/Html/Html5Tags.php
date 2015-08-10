<?php
final class Html5Tags extends Enum{
	public static 
		$A, $ABBR,$ADDRESS,$AREA,$ARTICLE,$ASIDE,$AUDIO,$B,$BASE,$BDI,$BDO,$BLOCKQUOTE,$BODY,$BR,$BUTTON,
		$CANVAS,$CAPTION,$CITE,$CODE,$COL,$COLGROUP,$DATALIST,$DD,$DEL,$DETAILS,$DFN,$DIALOG,$DIV,$DL,$DT,
		$EM,$EMBED,$FIELDSET,$FIGCAPTION,$FIGURE,$FOOTER,$FORM,$H1,$H2,$H3,$H4,$H5,$H6,$HEAD,$HEADER,$HR,$HTML,
		$I,$IFRAME,$IMG,$INPUT,$INS,$KBD,$KEYGEN,$LABEL,$LEGEND,$LI,$LINK,$MAIN,$MAP,$MARK,$MENU,$MENUITEM,$META,$METER,$NAV,$NOSCRIPT,
		$OBJECT,$OL,$OPTGROUP,$OPTION,$OUTPUT,$P,$PARAM,$PRE,$PROGRESS,$Q,$RP,$RT,$RUBY,$S,$SAMP,$SCRIPT,$SECTION,$SELECT,$SMALL,$SOURCE,
		$SPAN,$STRONG,$STYLE,$SUB,$SUMMARY,$SUP,$TABLE,$TBODY,$TD,$TEXTAREA,$TFOOT,$TH,$THEAD,$TIME,$TITLE,$TR,$TRACK,$U,$UL,$VARIABLE,$VIDEO,
		$WBR;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$A = new Html5Tags('A', 'a');
		self::$ABBR = new Html5Tags('ABBR', 'abbr');
		self::$ADDRESS = new Html5Tags('ADDRESS', 'address');
		self::$AREA = new Html5Tags('AREA', 'area');
		self::$ARTICLE = new Html5Tags('ARTICLE', 'article');
		self::$ASIDE = new Html5Tags('ASIDE', 'aside');
		self::$AUDIO = new Html5Tags('AUDIO', 'audio');
		self::$B = new Html5Tags('B', 'b');
		self::$BASE = new Html5Tags('BASE', 'base');
		self::$BDI = new Html5Tags('BDI', 'bdi');
		self::$BDO = new Html5Tags('BDO', 'bdo');
		self::$BLOCKQUOTE = new Html5Tags('BLOCKQUOTE', 'blockquote');
		self::$BODY = new Html5Tags('BODY', 'body');
		self::$BR = new Html5Tags('BR', 'br');
		self::$BUTTON = new Html5Tags('BUTTON', 'button');
		self::$CANVAS = new Html5Tags('CANVAS', 'canvas');
		self::$CAPTION = new Html5Tags('CAPTION', 'caption');
		self::$CITE = new Html5Tags('CITE', 'cite');
		self::$CODE = new Html5Tags('CODE', 'code');
		self::$COL = new Html5Tags('COL', 'col');
		self::$COLGROUP = new Html5Tags('COLGROUP', 'colgroup');
		self::$DATALIST = new Html5Tags('DATALIST', 'datalist');
		self::$DD = new Html5Tags('DD', 'dd');
		self::$DEL = new Html5Tags('DEL', 'del');
		self::$DETAILS = new Html5Tags('DETAILS', 'details');
		self::$DFN = new Html5Tags('DFN', 'dfn');
		self::$DIALOG = new Html5Tags('DIALOG', 'dialog');
		self::$DIV = new Html5Tags('DIV', 'div');
		self::$DL = new Html5Tags('DL', 'dl');
		self::$DT = new Html5Tags('DT', 'dt');
		self::$EM = new Html5Tags('EM', 'em');
		self::$EMBED = new Html5Tags('EMBED', 'embed');
		self::$FIELDSET = new Html5Tags('FIELDSET', 'fieldset');
		self::$FIGCAPTION = new Html5Tags('FIGCAPTION', 'figcaption');
		self::$FIGURE = new Html5Tags('FIGURE', 'figure');
		self::$FOOTER = new Html5Tags('FOOTER', 'footer');
		self::$FORM = new Html5Tags('FORM', 'form');
		self::$H1 = new Html5Tags('H1', 'h1');
		self::$H2 = new Html5Tags('H2', 'h2');
		self::$H3 = new Html5Tags('H3', 'h3');
		self::$H4 = new Html5Tags('H4', 'h4');
		self::$H5 = new Html5Tags('H5', 'h5');
		self::$H6 = new Html5Tags('H6', 'h6');
		self::$HEAD = new Html5Tags('HEAD', 'head');
		self::$HEADER = new Html5Tags('HEADER', 'header');
		self::$HR = new Html5Tags('HR', 'hr');
		self::$HTML = new Html5Tags('HTML', 'html');
		self::$I = new Html5Tags('I', 'i');
		self::$IFRAME = new Html5Tags('IFRAME', 'iframe');
		self::$IMG = new Html5Tags('IMG', 'img');
		self::$INPUT = new Html5Tags('INPUT', 'input');
		self::$INS = new Html5Tags('INS', 'ins');
		self::$KBD = new Html5Tags('KBD', 'kbd');
		self::$KEYGEN = new Html5Tags('KEYGEN', 'keygen');
		self::$LABEL = new Html5Tags('LABEL', 'label');
		self::$LEGEND = new Html5Tags('LEGEND', 'legend');
		self::$LI = new Html5Tags('LI', 'li');
		self::$LINK = new Html5Tags('LINK', 'link');
		self::$MAIN = new Html5Tags('MAIN', 'main');
		self::$MAP = new Html5Tags('MAP', 'map');
		self::$MARK = new Html5Tags('MARK', 'mark');
		self::$MENU = new Html5Tags('MENU', 'menu');
		self::$MENUITEM = new Html5Tags('MENUITEM', 'menuitem');
		self::$META = new Html5Tags('META', 'meta');
		self::$METER = new Html5Tags('METER', 'meter');
		self::$NAV = new Html5Tags('NAV', 'nav');
		self::$NOSCRIPT = new Html5Tags('NOSCRIPT', 'noscript');
		self::$OBJECT = new Html5Tags('OBJECT', 'object');
		self::$OL = new Html5Tags('OL', 'ol');
		self::$OPTGROUP = new Html5Tags('OPTGROUP', 'optgroup');
		self::$OPTION = new Html5Tags('OPTION', 'option');
		self::$OUTPUT = new Html5Tags('OUTPUT', 'output');
		self::$P = new Html5Tags('P', 'p');
		self::$PARAM = new Html5Tags('PARAM', 'param');
		self::$PRE = new Html5Tags('PRE', 'pre');
		self::$PROGRESS = new Html5Tags('PROGRESS', 'progress');
		self::$Q = new Html5Tags('Q', 'q');
		self::$RP = new Html5Tags('RP', 'rp');
		self::$RT = new Html5Tags('RT', 'rt');
		self::$RUBY = new Html5Tags('RUBY', 'ruby');
		self::$S = new Html5Tags('S', 's');
		self::$SAMP = new Html5Tags('SAMP', 'samp');
		self::$SCRIPT = new Html5Tags('SCRIPT', 'script');
		self::$SECTION = new Html5Tags('SECTION', 'section');
		self::$SELECT = new Html5Tags('SELECT', 'select');
		self::$SMALL = new Html5Tags('SMALL', 'small');
		self::$SOURCE = new Html5Tags('SOURCE', 'source');
		self::$SPAN = new Html5Tags('SPAN', 'span');
		self::$STRONG = new Html5Tags('STRONG', 'strong');
		self::$STYLE = new Html5Tags('STYLE', 'style');
		self::$SUB = new Html5Tags('SUB', 'sub');
		self::$SUMMARY = new Html5Tags('SUMMARY', 'summary');
		self::$SUP = new Html5Tags('SUP', 'sup');
		self::$TABLE = new Html5Tags('TABLE', 'table');
		self::$TBODY = new Html5Tags('TBODY', 'tbody');
		self::$TD = new Html5Tags('TD', 'td');
		self::$TEXTAREA = new Html5Tags('TEXTAREA', 'textarea');
		self::$TFOOT = new Html5Tags('TFOOT', 'tfoot');
		self::$TH = new Html5Tags('TH', 'th');
		self::$THEAD = new Html5Tags('THEAD', 'thead');
		self::$TIME = new Html5Tags('TIME', 'time');
		self::$TITLE = new Html5Tags('TITLE', 'title');
		self::$TR = new Html5Tags('TR', 'tr');
		self::$TRACK = new Html5Tags('TRACK', 'track');
		self::$U = new Html5Tags('U', 'u');
		self::$UL = new Html5Tags('UL', 'ul');
		self::$VARIABLE = new Html5Tags('VARIABLE', 'var');
		self::$VIDEO = new Html5Tags('VIDEO', 'video');
		self::$WBR = new Html5Tags('WBR', 'wbr');
	}
};
Html5Tags::Initialize();
?>