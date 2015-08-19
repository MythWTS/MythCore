<?php
use B as B;
final class Bs extends Object{
	private function __construct(){}
	###########################################################################
	# Grid Elements
	###########################################################################
	# Containers
	######################################
	/** Creates a new B\Container Object  */
	public static function Container($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Container($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function ContainerDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Container('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function FluidContainer($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\FluidContainer($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function FluidContainerDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\FluidContainer('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Rows
	######################################
	public static function Row($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Row($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Row('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowHeader($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Row('header', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowFooter($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Row('footer', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowSection($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Row('section', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Columns
	######################################
	public static function Column($tag='div', $contents='', $id='', $xsmallWidth=0, $smallWidth=0, $mediumWidth=0, $largeWidth=0, $indentContents=true){
		return new B\Column(
			$tag, $contents, $id, 
			new B\ColumnDeviceOptions(B\Devices::$XS, $xsmallWidth),
			new B\ColumnDeviceOptions(B\Devices::$SM, $smallWidth),
			new B\ColumnDeviceOptions(B\Devices::$MD, $mediumWidth),
			new B\ColumnDeviceOptions(B\Devices::$LG, $largeWidth),
			$indentContents
		);
	}
	######################################
	public static function ColumnFull($tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, null, null, null, null, $indentContents);
	}
	public static function ColumnHalf($tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, new B\ColumnDeviceOptions(B\Devices::$XS, 6));
	}
	public static function ColumnThird($tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, new B\ColumnDeviceOptions(B\Devices::$XS, 4));
	}
	public static function ColumnQuarter($tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, new B\ColumnDeviceOptions(B\Devices::$XS, 3));
	}
	public static function ColumnSixeth($tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, new B\ColumnDeviceOptions(B\Devices::$XS, 2));
	}
	######################################
	public static function ColumnXS($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, new B\ColumnDeviceOptions(B\Devices::$XS, $width));
	}
	public static function ColumnSM($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, null, new B\ColumnDeviceOptions(B\Devices::$SM, $width));
	}
	public static function ColumnMD($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, null, null, new B\ColumnDeviceOptions(B\Devices::$MD, $width));
	}
	public static function ColumnLG($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new B\Column($tag, $contents, $id, null, null, null, new B\ColumnDeviceOptions(B\Devices::$LG, $width));
	}
	######################################
	public static function ColumnXSDiv($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('div', $contents, $id, new B\ColumnDeviceOptions(B\Devices::$XS, $width));
	}
	public static function ColumnSMDiv($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('div', $contents, $id, null, new B\ColumnDeviceOptions(B\Devices::$SM, $width));
	}
	public static function ColumnMDDiv($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('div', $contents, $id, null, null, new B\ColumnDeviceOptions(B\Devices::$MD, $width));
	}
	public static function ColumnLGDiv($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('div', $contents, $id, null, null, null, new B\ColumnDeviceOptions(B\Devices::$LG, $width));
	}
	######################################
	public static function ColumnXSSection($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('section', $contents, $id, new B\ColumnDeviceOptions(B\Devices::$XS, $width));
	}
	public static function ColumnSMSection($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('section', $contents, $id, null, new B\ColumnDeviceOptions(B\Devices::$SM, $width));
	}
	public static function ColumnMDSection($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('section', $contents, $id, null, null, new B\ColumnDeviceOptions(B\Devices::$MD, $width));
	}
	public static function ColumnLGSection($width=1, $contents='', $id='', $indentContents=true){
		return new B\Column('section', $contents, $id, null, null, null, new B\ColumnDeviceOptions(B\Devices::$LG, $width));
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
		return new B\Lead($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function LeadP($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new B\Lead('p', $contents, $id, $class, $title, $style, $indentContents);
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
		if(!U::NA($content)){$cont[] = new HtmlPElement($content);}
		if(!U::NA($attribution)){
			$cont[] = new HtmlFooterElement(U::NA($source)?$attribution:array($attribution, new HtmlCiteElement($source)));
		}
		else if(!U::NA($source)){
			$cont[] = new HtmlFooterElement(new HtmlCiteElement($source));
		}
		return new HtmlBlockquoteElement($cont, $id, trim($class . ($isReversed?' blockquote-reverse':'')), $title, $style, $indentContents);
	}
	# Alignment
	######################################
	public static function LeftAligned($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\LeftAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function RightAligned($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\RightAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function CenterAligned($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\CenterAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function Justify($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\JustifyAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	public static function NoWrap($tag='p', $content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\NoWrapAligned($tag, $content, $id, $class, $title, $style, $indentContents);
	}
	######################################
	public static function LeftAlignedP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\LeftAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function RightAlignedP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\RightAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function CenterAlignedP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\CenterAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function JustifyP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\JustifyAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	public static function NoWrapP($content = '', $id = '', $class = '', $title = '', $style = '', $indentContents = false){
		return new B\NoWrapAligned('p', $content, $id, $class, $title, $style, $indentContents);
	}
	###########################################################################
	# Table Elements
	###########################################################################
	public static function Table($id='', $striped=false, $hovered=false, $condensed=true, $bordered=false, $indentContents=true){
		return new B\Table($id, $striped, $hovered, $condensed, $bordered, $indentContents);
	}
	###########################################################################
	# Form Elements
	###########################################################################
	public static function TextField($id, B\TextFieldTypes $type=null, $label='', $initialValue='', $placeholderText='', $rows='', $cols=''){
		return new B\TextField($id, $type, $label, $initialValue, $placeholderText, $rows, $cols);
	}
};
?>