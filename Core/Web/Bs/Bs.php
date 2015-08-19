<?php
use Core\Web\Bs as B;
final class Bs extends Object{
	private function __construct(){}
	###########################################################################
	# Grid Elements
	###########################################################################
	# Containers
	######################################
	/** Creates a new Core\Web\Bs\Container Object  */
	public static function Container($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Container($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function ContainerDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Container('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function FluidContainer($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\FluidContainer($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function FluidContainerDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\FluidContainer('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Rows
	######################################
	public static function Row($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowHeader($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('header', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowFooter($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('footer', $contents, $id, $class, $title, $style, $indentContents);
	}
	public static function RowSection($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('section', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Columns
	######################################
	public static function Column($tag='div', $contents='', $id='', $xsmallWidth=0, $smallWidth=0, $mediumWidth=0, $largeWidth=0, $indentContents=true){
		return new Core\Web\Bs\Column(
			$tag, $contents, $id, 
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, $xsmallWidth),
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$SM, $smallWidth),
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$MD, $mediumWidth),
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$LG, $largeWidth),
			$indentContents
		);
	}
	######################################
	public static function ColumnFull($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, null, null, null, $indentContents);
	}
	public static function ColumnHalf($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 6));
	}
	public static function ColumnThird($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 4));
	}
	public static function ColumnQuarter($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 3));
	}
	public static function ColumnSixeth($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 2));
	}
	######################################
	public static function ColumnXS($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, $width));
	}
	public static function ColumnSM($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$SM, $width));
	}
	public static function ColumnMD($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$MD, $width));
	}
	public static function ColumnLG($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$LG, $width));
	}
	######################################
	public static function ColumnXSDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, $width));
	}
	public static function ColumnSMDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$SM, $width));
	}
	public static function ColumnMDDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$MD, $width));
	}
	public static function ColumnLGDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, null, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$LG, $width));
	}
	######################################
	public static function ColumnXSSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, $width));
	}
	public static function ColumnSMSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$SM, $width));
	}
	public static function ColumnMDSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$MD, $width));
	}
	public static function ColumnLGSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, null, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$LG, $width));
	}
	######################################
};
?>