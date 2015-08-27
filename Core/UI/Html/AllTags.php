<?php
namespace Core\UI\Html;
use Core\Enum;
/**
 * An enumeration of all html tags. Its is recommended to use the Tags enumeration instead, which only includes HTML5
 * tags. This enumeration is used for backward compatibility with previous versions of HTML when needed only
 */
final class AllTags extends Enum{
	//HTML 5
	public static 
		$A, $ABBR,$ADDRESS,$AREA,$ARTICLE,$ASIDE,$AUDIO,$B,$BASE,$BDI,$BDO,$BLOCKQUOTE,$BODY,$BR,$BUTTON,
		$CANVAS,$CAPTION,$CITE,$CODE,$COL,$COLGROUP,$DATALIST,$DD,$DEL,$DETAILS,$DFN,$DIALOG,$DIV,$DL,$DT,
		$EM,$EMBED,$FIELDSET,$FIGCAPTION,$FIGURE,$FOOTER,$FORM,$H1,$H2,$H3,$H4,$H5,$H6,$HEAD,$HEADER,$HR,$HTML,
		$I,$IFRAME,$IMG,$INPUT,$INS,$KBD,$KEYGEN,$LABEL,$LEGEND,$LI,$LINK,$MAIN,$MAP,$MARK,$MENU,$MENUITEM,$META,$METER,$NAV,$NOSCRIPT,
		$OBJECT,$OL,$OPTGROUP,$OPTION,$OUTPUT,$P,$PARAM,$PRE,$PROGRESS,$Q,$RP,$RT,$RUBY,$S,$SAMP,$SCRIPT,$SECTION,$SELECT,$SMALL,$SOURCE,
		$SPAN,$STRONG,$STYLE,$SUB,$SUMMARY,$SUP,$TABLE,$TBODY,$TD,$TEXTAREA,$TFOOT,$TH,$THEAD,$TIME,$TITLE,$TR,$TRACK,$U,$UL,$VAR,$VIDEO,
		$WBR;
	//Before HTML 5
	public static $Acronym, $Applet, $BaseFont, $Big, $Center, $Dir, $Font, $Frame, $Frameset, $NoFrames, $Strike, $Tt;
    /** Protected Constructor - instantiates an instance of the enumeration. Used internally only */
	protected function __construct($name, $value){parent::__construct($name, $value);}
	/** Static Constructor */
	public static function Initialize(){
		self::$A = new AllTags('A', 'a');
		self::$ABBR = new AllTags('ABBR', 'abbr');
		self::$ADDRESS = new AllTags('ADDRESS', 'address');
		self::$AREA = new AllTags('AREA', 'area');
		self::$ARTICLE = new AllTags('ARTICLE', 'article');
		self::$ASIDE = new AllTags('ASIDE', 'aside');
		self::$AUDIO = new AllTags('AUDIO', 'audio');
		self::$B = new AllTags('B', 'b');
		self::$BASE = new AllTags('BASE', 'base');
		self::$BDI = new AllTags('BDI', 'bdi');
		self::$BDO = new AllTags('BDO', 'bdo');
		self::$BLOCKQUOTE = new AllTags('BLOCKQUOTE', 'blockquote');
		self::$BODY = new AllTags('BODY', 'body');
		self::$BR = new AllTags('BR', 'br');
		self::$BUTTON = new AllTags('BUTTON', 'button');
		self::$CANVAS = new AllTags('CANVAS', 'canvas');
		self::$CAPTION = new AllTags('CAPTION', 'caption');
		self::$CITE = new AllTags('CITE', 'cite');
		self::$CODE = new AllTags('CODE', 'code');
		self::$COL = new AllTags('COL', 'col');
		self::$COLGROUP = new AllTags('COLGROUP', 'colgroup');
		self::$DATALIST = new AllTags('DATALIST', 'datalist');
		self::$DD = new AllTags('DD', 'dd');
		self::$DEL = new AllTags('DEL', 'del');
		self::$DETAILS = new AllTags('DETAILS', 'details');
		self::$DFN = new AllTags('DFN', 'dfn');
		self::$DIALOG = new AllTags('DIALOG', 'dialog');
		self::$DIV = new AllTags('DIV', 'div');
		self::$DL = new AllTags('DL', 'dl');
		self::$DT = new AllTags('DT', 'dt');
		self::$EM = new AllTags('EM', 'em');
		self::$EMBED = new AllTags('EMBED', 'embed');
		self::$FIELDSET = new AllTags('FIELDSET', 'fieldset');
		self::$FIGCAPTION = new AllTags('FIGCAPTION', 'figcaption');
		self::$FIGURE = new AllTags('FIGURE', 'figure');
		self::$FOOTER = new AllTags('FOOTER', 'footer');
		self::$FORM = new AllTags('FORM', 'form');
		self::$H1 = new AllTags('H1', 'h1');
		self::$H2 = new AllTags('H2', 'h2');
		self::$H3 = new AllTags('H3', 'h3');
		self::$H4 = new AllTags('H4', 'h4');
		self::$H5 = new AllTags('H5', 'h5');
		self::$H6 = new AllTags('H6', 'h6');
		self::$HEAD = new AllTags('HEAD', 'head');
		self::$HEADER = new AllTags('HEADER', 'header');
		self::$HR = new AllTags('HR', 'hr');
		self::$HTML = new AllTags('HTML', 'html');
		self::$I = new AllTags('I', 'i');
		self::$IFRAME = new AllTags('IFRAME', 'iframe');
		self::$IMG = new AllTags('IMG', 'img');
		self::$INPUT = new AllTags('INPUT', 'input');
		self::$INS = new AllTags('INS', 'ins');
		self::$KBD = new AllTags('KBD', 'kbd');
		self::$KEYGEN = new AllTags('KEYGEN', 'keygen');
		self::$LABEL = new AllTags('LABEL', 'label');
		self::$LEGEND = new AllTags('LEGEND', 'legend');
		self::$LI = new AllTags('LI', 'li');
		self::$LINK = new AllTags('LINK', 'link');
		self::$MAIN = new AllTags('MAIN', 'main');
		self::$MAP = new AllTags('MAP', 'map');
		self::$MARK = new AllTags('MARK', 'mark');
		self::$MENU = new AllTags('MENU', 'menu');
		self::$MENUITEM = new AllTags('MENUITEM', 'menuitem');
		self::$META = new AllTags('META', 'meta');
		self::$METER = new AllTags('METER', 'meter');
		self::$NAV = new AllTags('NAV', 'nav');
		self::$NOSCRIPT = new AllTags('NOSCRIPT', 'noscript');
		self::$OBJECT = new AllTags('OBJECT', 'object');
		self::$OL = new AllTags('OL', 'ol');
		self::$OPTGROUP = new AllTags('OPTGROUP', 'optgroup');
		self::$OPTION = new AllTags('OPTION', 'option');
		self::$OUTPUT = new AllTags('OUTPUT', 'output');
		self::$P = new AllTags('P', 'p');
		self::$PARAM = new AllTags('PARAM', 'param');
		self::$PRE = new AllTags('PRE', 'pre');
		self::$PROGRESS = new AllTags('PROGRESS', 'progress');
		self::$Q = new AllTags('Q', 'q');
		self::$RP = new AllTags('RP', 'rp');
		self::$RT = new AllTags('RT', 'rt');
		self::$RUBY = new AllTags('RUBY', 'ruby');
		self::$S = new AllTags('S', 's');
		self::$SAMP = new AllTags('SAMP', 'samp');
		self::$SCRIPT = new AllTags('SCRIPT', 'script');
		self::$SECTION = new AllTags('SECTION', 'section');
		self::$SELECT = new AllTags('SELECT', 'select');
		self::$SMALL = new AllTags('SMALL', 'small');
		self::$SOURCE = new AllTags('SOURCE', 'source');
		self::$SPAN = new AllTags('SPAN', 'span');
		self::$STRONG = new AllTags('STRONG', 'strong');
		self::$STYLE = new AllTags('STYLE', 'style');
		self::$SUB = new AllTags('SUB', 'sub');
		self::$SUMMARY = new AllTags('SUMMARY', 'summary');
		self::$SUP = new AllTags('SUP', 'sup');
		self::$TABLE = new AllTags('TABLE', 'table');
		self::$TBODY = new AllTags('TBODY', 'tbody');
		self::$TD = new AllTags('TD', 'td');
		self::$TEXTAREA = new AllTags('TEXTAREA', 'textarea');
		self::$TFOOT = new AllTags('TFOOT', 'tfoot');
		self::$TH = new AllTags('TH', 'th');
		self::$THEAD = new AllTags('THEAD', 'thead');
		self::$TIME = new AllTags('TIME', 'time');
		self::$TITLE = new AllTags('TITLE', 'title');
		self::$TR = new AllTags('TR', 'tr');
		self::$TRACK = new AllTags('TRACK', 'track');
		self::$U = new AllTags('U', 'u');
		self::$UL = new AllTags('UL', 'ul');
		self::$VAR = new AllTags('VAR', 'var');
		self::$VIDEO = new AllTags('VIDEO', 'video');
		self::$WBR = new AllTags('WBR', 'wbr');
		//Before HTML 5
		self::$Acronym = new AllTags('Acronym', 'acronym');
		self::$Applet = new AllTags('Applet', 'applet');
		self::$BaseFont = new AllTags('BaseFont', 'basefont');
		self::$Big = new AllTags('Big', 'big');
		self::$Center = new AllTags('Center', 'center');
		self::$Dir = new AllTags('Dir', 'dir');
		self::$Font = new AllTags('Font', 'font');
		self::$Frame = new AllTags('Frame', 'frame');
		self::$Frameset = new AllTags('Frameset', 'frameset');
		self::$NoFrames = new AllTags('NoFrames', 'noframes');
		self::$Strike = new AllTags('Strike', 'strike');
		self::$Tt = new AllTags('Tt', 'tt');
	}
};

AllTags::Initialize();
?>