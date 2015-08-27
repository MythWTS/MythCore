<?php
namespace Core\UI\BS;
use Core\U;
use Core\Object;
use Core\UI\Html\Html;
use Core\UI\Html\Nodes\DivElement;
use Core\UI\Html\Nodes\LabelElement;
use Core\UI\Html\Nodes\InputElement;
use Core\UI\Html\Nodes\SpanElement;
use Core\UI\Html\Nodes\PElement;
use Core\UI\Html\Nodes\FooterElement;
use Core\UI\Html\Nodes\CiteElement;
use Core\UI\Html\Nodes\BlockquoteElement;
use Core\UI\Html\Nodes\ButtonElement;
/**
 * Factory Class for the bootstrap module of MythCore.
 * The class exposes and implments methods for creating various Bootstrap components an compound elements
 * For the Glyph icon library factory class 
 * @see BSIcon class
 */
final class BS extends Object{
	private function __construct(){}
	###########################################################################
	# Grid Elements
	###########################################################################
	# Containers
	######################################
	/** Creates a new Container Object  */
	public static function Container($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Container($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function ContainerDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Container('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function FluidContainer($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new FluidContainer($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function FluidContainerDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new FluidContainer('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Rows
	######################################
	public static function Row($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Row($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Row('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowHeader($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Row('header', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowFooter($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Row('footer', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowSection($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Row('section', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Columns
	######################################
	public static function Column($tag='div', $contents='', $id='', $xsmallWidth=0, $smallWidth=0, $mediumWidth=0, $largeWidth=0, $indentContents=true){
		return new Column(
			$tag, $contents, $id, 
			new ColumnDeviceOptions(Devices::$XS, $xsmallWidth),
			new ColumnDeviceOptions(Devices::$SM, $smallWidth),
			new ColumnDeviceOptions(Devices::$MD, $mediumWidth),
			new ColumnDeviceOptions(Devices::$LG, $largeWidth),
			$indentContents
		);
	}
	######################################
	public static function ColumnFull($tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, null, null, null, null, $indentContents);
	}
	public static function ColumnHalf($tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, new ColumnDeviceOptions(Devices::$XS, 6));
	}
	public static function ColumnThird($tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, new ColumnDeviceOptions(Devices::$XS, 4));
	}
	public static function ColumnQuarter($tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, new ColumnDeviceOptions(Devices::$XS, 3));
	}
	public static function ColumnSixeth($tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, new ColumnDeviceOptions(Devices::$XS, 2));
	}
	######################################
	public static function ColumnXS($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, new ColumnDeviceOptions(Devices::$XS, $width));
	}
	public static function ColumnSM($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, null, new ColumnDeviceOptions(Devices::$SM, $width));
	}
	public static function ColumnMD($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, null, null, new ColumnDeviceOptions(Devices::$MD, $width));
	}
	public static function ColumnLG($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Column($tag, $contents, $id, null, null, null, new ColumnDeviceOptions(Devices::$LG, $width));
	}
	######################################
	public static function ColumnXSDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Column('div', $contents, $id, new ColumnDeviceOptions(Devices::$XS, $width));
	}
	public static function ColumnSMDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Column('div', $contents, $id, null, new ColumnDeviceOptions(Devices::$SM, $width));
	}
	public static function ColumnMDDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Column('div', $contents, $id, null, null, new ColumnDeviceOptions(Devices::$MD, $width));
	}
	public static function ColumnLGDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Column('div', $contents, $id, null, null, null, new ColumnDeviceOptions(Devices::$LG, $width));
	}
	######################################
	public static function ColumnXSSection($width=1, $contents='', $id='', $indentContents=true){
		return new Column('section', $contents, $id, new ColumnDeviceOptions(Devices::$XS, $width));
	}
	public static function ColumnSMSection($width=1, $contents='', $id='', $indentContents=true){
		return new Column('section', $contents, $id, null, new ColumnDeviceOptions(Devices::$SM, $width));
	}
	public static function ColumnMDSection($width=1, $contents='', $id='', $indentContents=true){
		return new Column('section', $contents, $id, null, null, new ColumnDeviceOptions(Devices::$MD, $width));
	}
	public static function ColumnLGSection($width=1, $contents='', $id='', $indentContents=true){
		return new Column('section', $contents, $id, null, null, null, new ColumnDeviceOptions(Devices::$LG, $width));
	}
	###########################################################################
	# Simple Text & Formatting Elements
	###########################################################################
	# Headings
	######################################
	public static function Heading1($main='', $secondary='', $id=''){
		return Html::H1(array($main, Html::Small($secondary)), $id);
	}
	public static function Heading2($main='', $secondary='', $id=''){
		return Html::H2(array($main, Html::Small($secondary)), $id);
	}
	public static function Heading3($main='', $secondary='', $id=''){
		return Html::H3(array($main, Html::Small($secondary)), $id);
	}
	public static function Heading4($main='', $secondary='', $id=''){
		return Html::H4(array($main, Html::Small($secondary)), $id);
	}
	public static function Heading5($main='', $secondary='', $id=''){
		return Html::H5(array($main, Html::Small($secondary)), $id);
	}
	public static function Heading6($main='', $secondary='', $id=''){
		return Html::H6(array($main, Html::Small($secondary)), $id);
	}
	# Formatting
	######################################
	public static function Lead($tag='p', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Lead($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function LeadP($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Lead('p', $contents, $id, $class, $title, $style, $indentContents);
	}
	######################################
	public static function Highlight($content='', $id='', $class='', $title='', $style='', $indentContents=false){
		return Html::Mark($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Deleted($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::Del($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Strikethrough($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::S($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Inserted($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::Ins($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Underlined($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::U($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Small($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::Small($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Bold($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::Strong($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Italics($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::Em($content, $id, $class, $title, $style, $indentContents);
	}
	public static function Abbreviation($content = '', $initialism=false, $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return Html::Em($content, $id, trim($class . ($initialism?' initialism':'')), $title, $style, $indentContents);
	}
	public static function Blockquote($content='', $attribution='', $source='', $isReversed=fales, $id='', $class='', $title='', $style='', $indentContents=true) {
		$cont = array();
		if(!U::NA($content)){$cont[] = new PElement($content);}
		if(!U::NA($attribution)){
			$cont[] = new FooterElement(U::NA($source)?$attribution:array($attribution, new CiteElement($source)));
		}
		else if(!U::NA($source)){
			$cont[] = new FooterElement(new CiteElement($source));
		}
		return new BlockquoteElement($cont, $id, trim($class . ($isReversed?' blockquote-reverse':'')), $title, $style, $indentContents);
	}
	# Alignment
	######################################
	public static function LeftAligned($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new LeftAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function RightAligned($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new RightAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function CenterAligned($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new CenterAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function Justify($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new JustifyAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function NoWrap($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new NoWrapAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	######################################
	public static function LeftAlignedP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new LeftAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function RightAlignedP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new RightAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function CenterAlignedP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new CenterAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function JustifyP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new JustifyAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function NoWrapP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new NoWrapAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Table Elements
	###########################################################################
	public static function Table($id='', $striped=false, $hovered=false, $condensed=true, $bordered=false, $indentContents=true){
		return new Table($id, $striped, $hovered, $condensed, $bordered, $indentContents);
	}
	###########################################################################
	# Form Elements
	###########################################################################
	public static function InlineForm($contents='', $action='', $method='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new InlineForm($contents, $action, $method, $id, $class, $title, $style, $indentContents);
	}
	public static function HorizontalForm($contents='', $action='', $method='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new HorizontalForm($contents, $action, $method, $id, $class, $title, $style, $indentContents);
	}
	######################################
	public static function FormGroup($contents='', FormState $state=null, $id='', $class='', $title='', $style='', $indentContents=true){
		return new FormGroup($contents, $state, $id, $class, $title, $style, $indentContents);
	}
	public static function InputGroup($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new InputGroup($contents, $id, $class, $title, $style, $indentContents);
	}
	public static function InputGroupAddon($contents='', $id='', $class='', $title='', $style='', $indentContents=false){
		return new InputGroupAddon($contents, $id, $class, $title, $style, $indentContents);
	}
	######################################
	public static function TextField($id, TextFieldTypes $type=null, $label='', $initialValue='', $placeholderText='', $rows='', $cols=''){
		return new TextField($id, $type, $label, $initialValue, $placeholderText, $rows, $cols);
	}
	######################################
	public static function CheckBox($id, $label='', $value='', $checked=false, $disabled=false, $class='', $title='', $style='', $indentContents=true){
		return new CheckBox($id, $label, $value, $checked, $disabled, $class, $title, $style, $indentContents);
	}
	public static function CheckBoxInline($id, $label='', $value='', $checked=false, $disabled=false, $class='', $title='', $style='', $indentContents=true){
		return new CheckBoxInline($id, $label, $value, $checked, $disabled, $class, $title, $style, $indentContents);
	}
	public static function RadioBox($id, $label='', $value='', $checked=false, $disabled=false, $class='', $title='', $style='', $indentContents=true){
		return new RadioBox($id, $label, $value, $checked, $disabled, $class, $title, $style, $indentContents);
	}
	public static function RadioBoxInline($id, $label='', $value='', $checked=false, $disabled=false, $class='', $title='', $style='', $indentContents=true){
		return new RadioBoxInline($id, $label, $value, $checked, $disabled, $class, $title, $style, $indentContents);
	}
	######################################
	public static function StaticFormControl($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new StaticFormControl($contents, $id, $class, $title, $style, $indentContents);
	}
	######################################
	public static function Icon(Icons $icon, $id='', $title=''){
		return new SpanElement('', $id, $icon->__toString(), $title);
	}
	###########################################################################
	# Various non-classed Form Elements
	###########################################################################
	public static function InputWithFeedback($id, $label='', $type='text', $feedbackIcon='glyphicon glyphicon-ok', $state='', $srStatus=''){
		return new DivElement(array(
			new LabelElement($label, $id, '', 'control-label'),
			new InputElement($type, $id, array('describedby'=>"{$id}Status"), $id, 'form-control'),
			new SpanElement('', '', trim("{$feedbackIcon} form-control-feedback")),
			new SpanElement($srStatus, "{$id}Status", 'sr-only')
		), '', "form-group {$state} has-feedback" );
	}
	public static function TextWithFeedback($id, $label='', $feedbackIcon='glyphicon glyphicon-ok', $state='', $srStatus=''){
		return new DivElement(array(
			new LabelElement($label, $id, '', 'control-label'),
			new InputElement('text', $id, array('describedby'=>"{$id}Status"), $id, 'form-control'),
			new SpanElement('', '', trim("{$feedbackIcon} form-control-feedback")),
			new SpanElement($srStatus, "{$id}Status", 'sr-only')
		), '', "form-group {$state} has-feedback" );
	}
	public static function TextSuccessWithFeedback($id, $label='', $feedbackIcon='glyphicon glyphicon-ok', $srStatus=''){
		return new DivElement(array(
			new LabelElement($label, $id, '', 'control-label'),
			new InputElement('text', $id, array('describedby'=>"{$id}Status"), $id, 'form-control'),
			new SpanElement('', '', trim("{$feedbackIcon} form-control-feedback")),
			new SpanElement($srStatus, "{$id}Status", 'sr-only')
		), '', "form-group has-success has-feedback" );
	}
	public static function TextWarningWithFeedback($id, $label='', $feedbackIcon='glyphicon glyphicon-warning-sign', $srStatus=''){
		return new DivElement(array(
			new LabelElement($label, $id, '', 'control-label'),
			new InputElement('text', $id, array('describedby'=>"{$id}Status"), $id, 'form-control'),
			new SpanElement('', '', trim("{$feedbackIcon} form-control-feedback")),
			new SpanElement($srStatus, "{$id}Status", 'sr-only')
		), '', "form-group has-warning has-feedback" );
	}
	public static function TextErrorWithFeedback($id, $label='', $feedbackIcon='glyphicon glyphicon-remove', $srStatus=''){
		return new DivElement(array(
			new LabelElement($label, $id, '', 'control-label'),
			new InputElement('text', $id, array('describedby'=>"{$id}Status"), $id, 'form-control'),
			new SpanElement('', '', trim("{$feedbackIcon} form-control-feedback")),
			new SpanElement($srStatus, "{$id}Status", 'sr-only')
		), '', "form-group has-error has-feedback" );
	}
	###########################################################################
	# Buttons
	###########################################################################
	public static function InputButtonDefaultXs($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('button', $id, null, $id, 'btn btn-default btn-xs' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputButtonDefaultSm($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('button', $id, null, $id, 'btn btn-default btn-sm' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputButtonDefaultMd($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('button', $id, null, $id, 'btn btn-default btn-md' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputButtonDefaultLg($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('button', $id, null, $id, 'btn btn-default btn-lg' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	######################################
	public static function InputSubmitDefaultXs($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('submit', $id, null, $id, 'btn btn-default btn-xs' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputSubmitDefaultSm($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('submit', $id, null, $id, 'btn btn-default btn-sm' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputSubmitDefaultMd($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('submit', $id, null, $id, 'btn btn-default btn-md' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputSubmitDefaultLg($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('submit', $id, null, $id, 'btn btn-default btn-lg' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	######################################
	public static function InputResetDefaultXs($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('reset', $id, null, $id, 'btn btn-default btn-xs' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputResetDefaultSm($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('reset', $id, null, $id, 'btn btn-default btn-sm' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputResetDefaultMd($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('reset', $id, null, $id, 'btn btn-default btn-md' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	public static function InputResetDefaultLg($txt='', $id='', $isBlock=false, $title=''){
		$res =  InputElement('reset', $id, null, $id, 'btn btn-default btn-lg' . $isBlock?' btn-block':'', $title);
		$res->Value($txt);
		return $res;
	}
	###########################################################################
	public static function ButtonDefaultXs($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-xs' . $isBlock?' btn-block':'', $title);
		$res->Type('button');
		return $res;
	}
	public static function ButtonDefaultSm($txt='', $id='', $isBlock=false, $title=''){
		$res = new InputElement($txt, $id, null, $id, 'btn btn-default btn-sm' . $isBlock?' btn-block':'', $title);
		$res->Type('button');
		return $res;
	}
	public static function ButtonDefaultMd($txt='', $id='', $isBlock=false, $title=''){
		$res = new InputElement($txt, $id, 'btn btn-default btn-md' . $isBlock?' btn-block':'', $title);
		$res->Type('button');
		return $res;
	}
	public static function ButtonDefaultLg($txt='', $id='', $isBlock=false, $title=''){
		$res = new InputElement($txt, $id, 'btn btn-default btn-lg' . $isBlock?' btn-block':'', $title);
		$res->Type('button');
		return $res;
	}
	######################################
	public static function ButtonSubmitDefaultXs($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-xs' . $isBlock?' btn-block':'', $title);
		$res->Type('submit');
		return $res;
	}
	public static function ButtonSubmitDefaultSm($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-sm' . $isBlock?' btn-block':'', $title);
		$res->Type('submit');
		return $res;
	}
	public static function ButtonSubmitDefaultMd($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-md' . $isBlock?' btn-block':'', $title);
		$res->Type('submit');
		return $res;
	}
	public static function ButtonSubmitDefaultLg($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-lg' . $isBlock?' btn-block':'', $title);
		$res->Type('submit');
		return $res;
	}
	######################################
	public static function ButtonResetDefaultXs($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-xs' . $isBlock?' btn-block':'', $title);
		$res->Type('reset');
		return $res;
	}
	public static function ButtonResetDefaultSm($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-sm' . $isBlock?' btn-block':'', $title);
		$res->Type('reset');
		return $res;
	}
	public static function ButtonResetDefaultMd($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-md' . $isBlock?' btn-block':'', $title);
		$res->Type('reset');
		return $res;
	}
	public static function ButtonResetDefaultLg($txt='', $id='', $isBlock=false, $title=''){
		$res = new ButtonElement($txt, $id, 'btn btn-default btn-lg' . $isBlock?' btn-block':'', $title);
		$res->Type('reset');
		return $res;
	}
};
?>