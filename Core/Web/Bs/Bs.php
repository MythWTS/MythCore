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
	public function Container($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Container($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public function ContainerDiv($contents, $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Container('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public function FluidContainer($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\FluidContainer($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public function FluidContainerDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\FluidContainer('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Rows
	######################################
	public function Row($tag='div', $contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row($tag, $contents, $id, $class, $title, $style, $indentContents);
	}
	public function RowDiv($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('div', $contents, $id, $class, $title, $style, $indentContents);
	}
	public function RowHeader($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('header', $contents, $id, $class, $title, $style, $indentContents);
	}
	public function RowFooter($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('footer', $contents, $id, $class, $title, $style, $indentContents);
	}
	public function RowSection($contents='', $id='', $class='', $title='', $style='', $indentContents=true){
		return new Core\Web\Bs\Row('section', $contents, $id, $class, $title, $style, $indentContents);
	}
	# Columns
	######################################
	public function Column($tag='div', $contents='', $id='', $xsmallWidth=0, $smallWidth=0, $mediumWidth=0, $largeWidth=0, $indentContents=ture){
		return new Core\Web\Bs\Column(
			$tag, $contents, $id, 
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Col::$XS, $xsmallWidth),
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Col::$SM, $smallWidth),
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Col::$MD, $mediumWidth),
			new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Col::$LG, $largeWidth),
			$indentContents
		);
	}
	######################################
	public function ColumnFull($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, null, null, null, $indentContents);
	}
	public function ColumnHalf($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 6));
	}
	public function ColumnThird($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 4));
	}
	public function ColumnQuarter($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 3));
	}
	public function ColumnSixeth($tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, 2));
	}
	######################################
	public function ColumnXS($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, $width));
	}
	public function ColumnSM($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$SM, $width));
	}
	public function ColumnMD($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$MD, $width));
	}
	public function ColumnLG($width=1, $tag='div', $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column($tag, $contents, $id, null, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$LG, $width));
	}
	######################################
	public function ColumnXSDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, $width));
	}
	public function ColumnSMDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$SM, $width));
	}
	public function ColumnMDDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$MD, $width));
	}
	public function ColumnLGDiv($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('div', $contents, $id, null, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$LG, $width));
	}
	######################################
	public function ColumnXSSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$XS, $width));
	}
	public function ColumnSMSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$SM, $width));
	}
	public function ColumnMDSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$MD, $width));
	}
	public function ColumnLGSection($width=1, $contents='', $id='', $indentContents=true){
		return new Core\Web\Bs\Column('section', $contents, $id, null, null, null, new Core\Web\Bs\ColumnDeviceOptions(Core\Web\Bs\Devices::$LG, $width));
	}
	######################################
};
?>