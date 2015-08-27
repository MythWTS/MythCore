<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * List of Html5 supported tags. For a list of all html tags (including tags deprecatd or obselete in html5)
 * @see AllTags
 */
final class Tags extends Enum{
	public static 
		$A, $ABBR,$ADDRESS,$AREA,$ARTICLE,$ASIDE,$AUDIO,$B,$BASE,$BDI,$BDO,$BLOCKQUOTE,$BODY,$BR,$BUTTON,
		$CANVAS,$CAPTION,$CITE,$CODE,$COL,$COLGROUP,$DATALIST,$DD,$DEL,$DETAILS,$DFN,$DIALOG,$DIV,$DL,$DT,
		$EM,$EMBED,$FIELDSET,$FIGCAPTION,$FIGURE,$FOOTER,$FORM,$H1,$H2,$H3,$H4,$H5,$H6,$HEAD,$HEADER,$HR,$HTML,
		$I,$IFRAME,$IMG,$INPUT,$INS,$KBD,$KEYGEN,$LABEL,$LEGEND,$LI,$LINK,$MAIN,$MAP,$MARK,$MENU,$MENUITEM,$META,$METER,$NAV,$NOSCRIPT,
		$OBJECT,$OL,$OPTGROUP,$OPTION,$OUTPUT,$P,$PARAM,$PRE,$PROGRESS,$Q,$RP,$RT,$RUBY,$S,$SAMP,$SCRIPT,$SECTION,$SELECT,$SMALL,$SOURCE,
		$SPAN,$STRONG,$STYLE,$SUB,$SUMMARY,$SUP,$TABLE,$TBODY,$TD,$TEXTAREA,$TFOOT,$TH,$THEAD,$TIME,$TITLE,$TR,$TRACK,$U,$UL,$VAR,$VIDEO,
		$WBR;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$A = new Tags('A', 'a');
		self::$ABBR = new Tags('ABBR', 'abbr');
		self::$ADDRESS = new Tags('ADDRESS', 'address');
		self::$AREA = new Tags('AREA', 'area');
		self::$ARTICLE = new Tags('ARTICLE', 'article');
		self::$ASIDE = new Tags('ASIDE', 'aside');
		self::$AUDIO = new Tags('AUDIO', 'audio');
		self::$B = new Tags('B', 'b');
		self::$BASE = new Tags('BASE', 'base');
		self::$BDI = new Tags('BDI', 'bdi');
		self::$BDO = new Tags('BDO', 'bdo');
		self::$BLOCKQUOTE = new Tags('BLOCKQUOTE', 'blockquote');
		self::$BODY = new Tags('BODY', 'body');
		self::$BR = new Tags('BR', 'br');
		self::$BUTTON = new Tags('BUTTON', 'button');
		self::$CANVAS = new Tags('CANVAS', 'canvas');
		self::$CAPTION = new Tags('CAPTION', 'caption');
		self::$CITE = new Tags('CITE', 'cite');
		self::$CODE = new Tags('CODE', 'code');
		self::$COL = new Tags('COL', 'col');
		self::$COLGROUP = new Tags('COLGROUP', 'colgroup');
		self::$DATALIST = new Tags('DATALIST', 'datalist');
		self::$DD = new Tags('DD', 'dd');
		self::$DEL = new Tags('DEL', 'del');
		self::$DETAILS = new Tags('DETAILS', 'details');
		self::$DFN = new Tags('DFN', 'dfn');
		self::$DIALOG = new Tags('DIALOG', 'dialog');
		self::$DIV = new Tags('DIV', 'div');
		self::$DL = new Tags('DL', 'dl');
		self::$DT = new Tags('DT', 'dt');
		self::$EM = new Tags('EM', 'em');
		self::$EMBED = new Tags('EMBED', 'embed');
		self::$FIELDSET = new Tags('FIELDSET', 'fieldset');
		self::$FIGCAPTION = new Tags('FIGCAPTION', 'figcaption');
		self::$FIGURE = new Tags('FIGURE', 'figure');
		self::$FOOTER = new Tags('FOOTER', 'footer');
		self::$FORM = new Tags('FORM', 'form');
		self::$H1 = new Tags('H1', 'h1');
		self::$H2 = new Tags('H2', 'h2');
		self::$H3 = new Tags('H3', 'h3');
		self::$H4 = new Tags('H4', 'h4');
		self::$H5 = new Tags('H5', 'h5');
		self::$H6 = new Tags('H6', 'h6');
		self::$HEAD = new Tags('HEAD', 'head');
		self::$HEADER = new Tags('HEADER', 'header');
		self::$HR = new Tags('HR', 'hr');
		self::$HTML = new Tags('HTML', 'html');
		self::$I = new Tags('I', 'i');
		self::$IFRAME = new Tags('IFRAME', 'iframe');
		self::$IMG = new Tags('IMG', 'img');
		self::$INPUT = new Tags('INPUT', 'input');
		self::$INS = new Tags('INS', 'ins');
		self::$KBD = new Tags('KBD', 'kbd');
		self::$KEYGEN = new Tags('KEYGEN', 'keygen');
		self::$LABEL = new Tags('LABEL', 'label');
		self::$LEGEND = new Tags('LEGEND', 'legend');
		self::$LI = new Tags('LI', 'li');
		self::$LINK = new Tags('LINK', 'link');
		self::$MAIN = new Tags('MAIN', 'main');
		self::$MAP = new Tags('MAP', 'map');
		self::$MARK = new Tags('MARK', 'mark');
		self::$MENU = new Tags('MENU', 'menu');
		self::$MENUITEM = new Tags('MENUITEM', 'menuitem');
		self::$META = new Tags('META', 'meta');
		self::$METER = new Tags('METER', 'meter');
		self::$NAV = new Tags('NAV', 'nav');
		self::$NOSCRIPT = new Tags('NOSCRIPT', 'noscript');
		self::$OBJECT = new Tags('OBJECT', 'object');
		self::$OL = new Tags('OL', 'ol');
		self::$OPTGROUP = new Tags('OPTGROUP', 'optgroup');
		self::$OPTION = new Tags('OPTION', 'option');
		self::$OUTPUT = new Tags('OUTPUT', 'output');
		self::$P = new Tags('P', 'p');
		self::$PARAM = new Tags('PARAM', 'param');
		self::$PRE = new Tags('PRE', 'pre');
		self::$PROGRESS = new Tags('PROGRESS', 'progress');
		self::$Q = new Tags('Q', 'q');
		self::$RP = new Tags('RP', 'rp');
		self::$RT = new Tags('RT', 'rt');
		self::$RUBY = new Tags('RUBY', 'ruby');
		self::$S = new Tags('S', 's');
		self::$SAMP = new Tags('SAMP', 'samp');
		self::$SCRIPT = new Tags('SCRIPT', 'script');
		self::$SECTION = new Tags('SECTION', 'section');
		self::$SELECT = new Tags('SELECT', 'select');
		self::$SMALL = new Tags('SMALL', 'small');
		self::$SOURCE = new Tags('SOURCE', 'source');
		self::$SPAN = new Tags('SPAN', 'span');
		self::$STRONG = new Tags('STRONG', 'strong');
		self::$STYLE = new Tags('STYLE', 'style');
		self::$SUB = new Tags('SUB', 'sub');
		self::$SUMMARY = new Tags('SUMMARY', 'summary');
		self::$SUP = new Tags('SUP', 'sup');
		self::$TABLE = new Tags('TABLE', 'table');
		self::$TBODY = new Tags('TBODY', 'tbody');
		self::$TD = new Tags('TD', 'td');
		self::$TEXTAREA = new Tags('TEXTAREA', 'textarea');
		self::$TFOOT = new Tags('TFOOT', 'tfoot');
		self::$TH = new Tags('TH', 'th');
		self::$THEAD = new Tags('THEAD', 'thead');
		self::$TIME = new Tags('TIME', 'time');
		self::$TITLE = new Tags('TITLE', 'title');
		self::$TR = new Tags('TR', 'tr');
		self::$TRACK = new Tags('TRACK', 'track');
		self::$U = new Tags('U', 'u');
		self::$UL = new Tags('UL', 'ul');
		self::$VAR = new Tags('VAR', 'var');
		self::$VIDEO = new Tags('VIDEO', 'video');
		self::$WBR = new Tags('WBR', 'wbr');
	}
};
Tags::Initialize();
?>