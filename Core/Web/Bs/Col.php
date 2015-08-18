<?php
namespace \Core\Web\Bs;
class Col extends \Enum{
	public static $XS1, $XS2, $XS3, $XS4, $XS5, $XS6, $XS7, $XS8, $XS9, $XS10, $XS11, $XS12,
					$SM1, $SM2, $SM3, $SM4, $SM5, $SM6, $SM7, $SM8, $SM9, $SM10, $SM11, $SM12,
					$MD1, $MD2, $MD3, $MD4, $MD5, $MD6, $MD7, $MD8, $MD9, $MD10, $MD11, $MD12,
					$LG1, $LG2, $LG3, $LG4, $LG5, $LG6, $LG7, $LG8, $LG9, $LG10, $LG11, $LG12,

					$XSOff1, $XSOff2, $XSOff3, $XSOff4, $XSOff5, $XSOff6,
					$XSOff7, $XSOff8, $XSOff9, $XSOff10, $XSOff11, $XSOff12,
					$SMOff1, $SMOff2, $SMOff3, $SMOff4, $SMOff5, $SMOff6,
					$SMOff7, $SMOff8, $SMOff9, $SMOff10, $SMOff11, $SMOff12,
					$MDOff1, $MDOff2, $MDOff3, $MDOff4, $MDOff5, $MDOff6,
					$MDOff7, $MDOff8, $MDOff9, $MDOff10, $MDOff11, $MDOff12,
					$LGOff1, $LGOff2, $LGOff3, $LGOff4, $LGOff5, $LGOff6,
					$LGOff7, $LGOff8, $LGOff9, $LGOff10, $LGOff11, $LGOff12,

					$XSPush1, $XSPush2, $XSPush3, $XSPush4, $XSPush5, $XSPush6,
					$XSPush7, $XSPush8, $XSPush9, $XSPush10, $XSPush11, $XSPush12,
					$SMPush1, $SMPush2, $SMPush3, $SMPush4, $SMPush5, $SMPush6,
					$SMPush7, $SMPush8, $SMPush9, $SMPush10, $SMPush11, $SMPush12,
					$MDPush1, $MDPush2, $MDPush3, $MDPush4, $MDPush5, $MDPush6,
					$MDPush7, $MDPush8, $MDPush9, $MDPush10, $MDPush11, $MDPush12,
					$LGPush1, $LGPush2, $LGPush3, $LGPush4, $LGPush5, $LGPush6,
					$LGPush7, $LGPush8, $LGPush9, $LGPush10, $LGPush11, $LGPush12,

					$XSPull1, $XSPull2, $XSPull3, $XSPull4, $XSPull5, $XSPull6,
					$XSPull7, $XSPull8, $XSPull9, $XSPull10, $XSPull11, $XSPull12,
					$SMPull1, $SMPull2, $SMPull3, $SMPull4, $SMPull5, $SMPull6,
					$SMPull7, $SMPull8, $SMPull9, $SMPull10, $SMPull11, $SMPull12,
					$MDPull1, $MDPull2, $MDPull3, $MDPull4, $MDPull5, $MDPull6,
					$MDPull7, $MDPull8, $MDPull9, $MDPull10, $MDPull11, $MDPull12,
					$LGPull1, $LGPull2, $LGPull3, $LGPull4, $LGPull5, $LGPull6,
					$LGPull7, $LGPull8, $LGPull9, $LGPull10, $LGPull11, $LGPull12;
	protected function __construct($name, $value){parent::__construct($name, $value);}
	public static function Initialize(){
		self::$XS1 = new Col('XS1', 'col-xs-1');
		self::$XS2 = new Col('XS2', 'col-xs-2');
		self::$XS3 = new Col('XS3', 'col-xs-3');
		self::$XS4 = new Col('XS4', 'col-xs-4');
		self::$XS5 = new Col('XS5', 'col-xs-5');
		self::$XS6 = new Col('XS6', 'col-xs-6');
		self::$XS7 = new Col('XS7', 'col-xs-7');
		self::$XS8 = new Col('XS8', 'col-xs-8');
		self::$XS9 = new Col('XS9', 'col-xs-9');
		self::$XS10 = new Col('XS10', 'col-xs-10');
		self::$XS11 = new Col('XS11', 'col-xs-11');
		self::$XS12 = new Col('XS12', 'col-xs-12');
		
		self::$SM1 = new Col('SM1', 'col-sm-1');
		self::$SM2 = new Col('SM2', 'col-sm-2');
		self::$SM3 = new Col('SM3', 'col-sm-3');
		self::$SM4 = new Col('SM4', 'col-sm-4');
		self::$SM5 = new Col('SM5', 'col-sm-5');
		self::$SM6 = new Col('SM6', 'col-sm-6');
		self::$SM7 = new Col('SM7', 'col-sm-7');
		self::$SM8 = new Col('SM8', 'col-sm-8');
		self::$SM9 = new Col('SM9', 'col-sm-9');
		self::$SM10 = new Col('SM10', 'col-sm-10');
		self::$SM11 = new Col('SM11', 'col-sm-11');
		self::$SM12 = new Col('SM12', 'col-sm-12');
		
		self::$MD1 = new Col('MD1', 'col-md-1');
		self::$MD2 = new Col('MD2', 'col-md-2');
		self::$MD3 = new Col('MD3', 'col-md-3');
		self::$MD4 = new Col('MD4', 'col-md-4');
		self::$MD5 = new Col('MD5', 'col-md-5');
		self::$MD6 = new Col('MD6', 'col-md-6');
		self::$MD7 = new Col('MD7', 'col-md-7');
		self::$MD8 = new Col('MD8', 'col-md-8');
		self::$MD9 = new Col('MD9', 'col-md-9');
		self::$MD10 = new Col('MD10', 'col-md-10');
		self::$MD11 = new Col('MD11', 'col-md-11');
		self::$MD12 = new Col('MD12', 'col-md-12');
		
		self::$LG1 = new Col('LG1', 'col-lg-1');
		self::$LG2 = new Col('LG2', 'col-lg-2');
		self::$LG3 = new Col('LG3', 'col-lg-3');
		self::$LG4 = new Col('LG4', 'col-lg-4');
		self::$LG5 = new Col('LG5', 'col-lg-5');
		self::$LG6 = new Col('LG6', 'col-lg-6');
		self::$LG7 = new Col('LG7', 'col-lg-7');
		self::$LG8 = new Col('LG8', 'col-lg-8');
		self::$LG9 = new Col('LG9', 'col-lg-9');
		self::$LG10 = new Col('LG10', 'col-lg-10');
		self::$LG11 = new Col('LG11', 'col-lg-11');
		self::$LG12 = new Col('LG12', 'col-lg-12');
		
		self::$XSOff1 = new Col('XSOff1', 'col-xs-offset-1');
		self::$XSOff2 = new Col('XSOff2', 'col-xs-offset-2');
		self::$XSOff3 = new Col('XSOff3', 'col-xs-offset-3');
		self::$XSOff4 = new Col('XSOff4', 'col-xs-offset-4');
		self::$XSOff5 = new Col('XSOff5', 'col-xs-offset-5');
		self::$XSOff6 = new Col('XSOff6', 'col-xs-offset-6');
		self::$XSOff7 = new Col('XSOff7', 'col-xs-offset-7');
		self::$XSOff8 = new Col('XSOff8', 'col-xs-offset-8');
		self::$XSOff9 = new Col('XSOff9', 'col-xs-offset-9');
		self::$XSOff10 = new Col('XSOff10', 'col-xs-offset-10');
		self::$XSOff11 = new Col('XSOff11', 'col-xs-offset-11');
		self::$XSOff12 = new Col('XSOff12', 'col-xs-offset-12');
		
		self::$SMOff1 = new Col('SMOff1', 'col-sm-offset-1');
		self::$SMOff2 = new Col('SMOff2', 'col-sm-offset-2');
		self::$SMOff3 = new Col('SMOff3', 'col-sm-offset-3');
		self::$SMOff4 = new Col('SMOff4', 'col-sm-offset-4');
		self::$SMOff5 = new Col('SMOff5', 'col-sm-offset-5');
		self::$SMOff6 = new Col('SMOff6', 'col-sm-offset-6');
		self::$SMOff7 = new Col('SMOff7', 'col-sm-offset-7');
		self::$SMOff8 = new Col('SMOff8', 'col-sm-offset-8');
		self::$SMOff9 = new Col('SMOff9', 'col-sm-offset-9');
		self::$SMOff10 = new Col('SMOff10', 'col-sm-offset-10');
		self::$SMOff11 = new Col('SMOff11', 'col-sm-offset-11');
		self::$SMOff12 = new Col('SMOff12', 'col-sm-offset-12');
		
		self::$MDOff1 = new Col('MDOff1', 'col-md-offset-1');
		self::$MDOff2 = new Col('MDOff2', 'col-md-offset-2');
		self::$MDOff3 = new Col('MDOff3', 'col-md-offset-3');
		self::$MDOff4 = new Col('MDOff4', 'col-md-offset-4');
		self::$MDOff5 = new Col('MDOff5', 'col-md-offset-5');
		self::$MDOff6 = new Col('MDOff6', 'col-md-offset-6');
		self::$MDOff7 = new Col('MDOff7', 'col-md-offset-7');
		self::$MDOff8 = new Col('MDOff8', 'col-md-offset-8');
		self::$MDOff9 = new Col('MDOff9', 'col-md-offset-9');
		self::$MDOff10 = new Col('MDOff10', 'col-md-offset-10');
		self::$MDOff11 = new Col('MDOff11', 'col-md-offset-11');
		self::$MDOff12 = new Col('MDOff12', 'col-md-offset-12');
		
		self::$LGOff1 = new Col('LGOff1', 'col-lg-offset-1');
		self::$LGOff2 = new Col('LGOff2', 'col-lg-offset-2');
		self::$LGOff3 = new Col('LGOff3', 'col-lg-offset-3');
		self::$LGOff4 = new Col('LGOff4', 'col-lg-offset-4');
		self::$LGOff5 = new Col('LGOff5', 'col-lg-offset-5');
		self::$LGOff6 = new Col('LGOff6', 'col-lg-offset-6');
		self::$LGOff7 = new Col('LGOff7', 'col-lg-offset-7');
		self::$LGOff8 = new Col('LGOff8', 'col-lg-offset-8');
		self::$LGOff9 = new Col('LGOff9', 'col-lg-offset-9');
		self::$LGOff10 = new Col('LGOff10', 'col-lg-offset-10');
		self::$LGOff11 = new Col('LGOff11', 'col-lg-offset-11');
		self::$LGOff12 = new Col('LGOff12', 'col-lg-offset-12');
		
		self::$XSPush1 = new Col('XSPush1', 'col-xs-push-1');
		self::$XSPush2 = new Col('XSPush2', 'col-xs-push-2');
		self::$XSPush3 = new Col('XSPush3', 'col-xs-push-3');
		self::$XSPush4 = new Col('XSPush4', 'col-xs-push-4');
		self::$XSPush5 = new Col('XSPush5', 'col-xs-push-5');
		self::$XSPush6 = new Col('XSPush6', 'col-xs-push-6');
		self::$XSPush7 = new Col('XSPush7', 'col-xs-push-7');
		self::$XSPush8 = new Col('XSPush8', 'col-xs-push-8');
		self::$XSPush9 = new Col('XSPush9', 'col-xs-push-9');
		self::$XSPush10 = new Col('XSPush10', 'col-xs-push-10');
		self::$XSPush11 = new Col('XSPush11', 'col-xs-push-11');
		self::$XSPush12 = new Col('XSPush12', 'col-xs-push-12');
		
		self::$SMPush1 = new Col('SMPush1', 'col-sm-push-1');
		self::$SMPush2 = new Col('SMPush2', 'col-sm-push-2');
		self::$SMPush3 = new Col('SMPush3', 'col-sm-push-3');
		self::$SMPush4 = new Col('SMPush4', 'col-sm-push-4');
		self::$SMPush5 = new Col('SMPush5', 'col-sm-push-5');
		self::$SMPush6 = new Col('SMPush6', 'col-sm-push-6');
		self::$SMPush7 = new Col('SMPush7', 'col-sm-push-7');
		self::$SMPush8 = new Col('SMPush8', 'col-sm-push-8');
		self::$SMPush9 = new Col('SMPush9', 'col-sm-push-9');
		self::$SMPush10 = new Col('SMPush10', 'col-sm-push-10');
		self::$SMPush11 = new Col('SMPush11', 'col-sm-push-11');
		self::$SMPush12 = new Col('SMPush12', 'col-sm-push-12');
		
		self::$MDPush1 = new Col('MDPush1', 'col-md-push-1');
		self::$MDPush2 = new Col('MDPush2', 'col-md-push-2');
		self::$MDPush3 = new Col('MDPush3', 'col-md-push-3');
		self::$MDPush4 = new Col('MDPush4', 'col-md-push-4');
		self::$MDPush5 = new Col('MDPush5', 'col-md-push-5');
		self::$MDPush6 = new Col('MDPush6', 'col-md-push-6');
		self::$MDPush7 = new Col('MDPush7', 'col-md-push-7');
		self::$MDPush8 = new Col('MDPush8', 'col-md-push-8');
		self::$MDPush9 = new Col('MDPush9', 'col-md-push-9');
		self::$MDPush10 = new Col('MDPush10', 'col-md-push-10');
		self::$MDPush11 = new Col('MDPush11', 'col-md-push-11');
		self::$MDPush12 = new Col('MDPush12', 'col-md-push-12');
		
		self::$LGPush1 = new Col('LGPush1', 'col-lg-push-1');
		self::$LGPush2 = new Col('LGPush2', 'col-lg-push-2');
		self::$LGPush3 = new Col('LGPush3', 'col-lg-push-3');
		self::$LGPush4 = new Col('LGPush4', 'col-lg-push-4');
		self::$LGPush5 = new Col('LGPush5', 'col-lg-push-5');
		self::$LGPush6 = new Col('LGPush6', 'col-lg-push-6');
		self::$LGPush7 = new Col('LGPush7', 'col-lg-push-7');
		self::$LGPush8 = new Col('LGPush8', 'col-lg-push-8');
		self::$LGPush9 = new Col('LGPush9', 'col-lg-push-9');
		self::$LGPush10 = new Col('LGPush10', 'col-lg-push-10');
		self::$LGPush11 = new Col('LGPush11', 'col-lg-push-11');
		self::$LGPush12 = new Col('LGPush12', 'col-lg-push-12');
		
		self::$XSPull1 = new Col('XSPull1', 'col-xs-pull-1');
		self::$XSPull2 = new Col('XSPull2', 'col-xs-pull-2');
		self::$XSPull3 = new Col('XSPull3', 'col-xs-pull-3');
		self::$XSPull4 = new Col('XSPull4', 'col-xs-pull-4');
		self::$XSPull5 = new Col('XSPull5', 'col-xs-pull-5');
		self::$XSPull6 = new Col('XSPull6', 'col-xs-pull-6');
		self::$XSPull7 = new Col('XSPull7', 'col-xs-pull-7');
		self::$XSPull8 = new Col('XSPull8', 'col-xs-pull-8');
		self::$XSPull9 = new Col('XSPull9', 'col-xs-pull-9');
		self::$XSPull10 = new Col('XSPull10', 'col-xs-pull-10');
		self::$XSPull11 = new Col('XSPull11', 'col-xs-pull-11');
		self::$XSPull12 = new Col('XSPull12', 'col-xs-pull-12');
		
		self::$SMPull1 = new Col('SMPull1', 'col-sm-pull-1');
		self::$SMPull2 = new Col('SMPull2', 'col-sm-pull-2');
		self::$SMPull3 = new Col('SMPull3', 'col-sm-pull-3');
		self::$SMPull4 = new Col('SMPull4', 'col-sm-pull-4');
		self::$SMPull5 = new Col('SMPull5', 'col-sm-pull-5');
		self::$SMPull6 = new Col('SMPull6', 'col-sm-pull-6');
		self::$SMPull7 = new Col('SMPull7', 'col-sm-pull-7');
		self::$SMPull8 = new Col('SMPull8', 'col-sm-pull-8');
		self::$SMPull9 = new Col('SMPull9', 'col-sm-pull-9');
		self::$SMPull10 = new Col('SMPull10', 'col-sm-pull-10');
		self::$SMPull11 = new Col('SMPull11', 'col-sm-pull-11');
		self::$SMPull12 = new Col('SMPull12', 'col-sm-pull-12');
		
		self::$MDPull1 = new Col('MDPull1', 'col-md-pull-1');
		self::$MDPull2 = new Col('MDPull2', 'col-md-pull-2');
		self::$MDPull3 = new Col('MDPull3', 'col-md-pull-3');
		self::$MDPull4 = new Col('MDPull4', 'col-md-pull-4');
		self::$MDPull5 = new Col('MDPull5', 'col-md-pull-5');
		self::$MDPull6 = new Col('MDPull6', 'col-md-pull-6');
		self::$MDPull7 = new Col('MDPull7', 'col-md-pull-7');
		self::$MDPull8 = new Col('MDPull8', 'col-md-pull-8');
		self::$MDPull9 = new Col('MDPull9', 'col-md-pull-9');
		self::$MDPull10 = new Col('MDPull10', 'col-md-pull-10');
		self::$MDPull11 = new Col('MDPull11', 'col-md-pull-11');
		self::$MDPull12 = new Col('MDPull12', 'col-md-pull-12');
		
		self::$LGPull1 = new Col('LGPull1', 'col-lg-pull-1');
		self::$LGPull2 = new Col('LGPull2', 'col-lg-pull-2');
		self::$LGPull3 = new Col('LGPull3', 'col-lg-pull-3');
		self::$LGPull4 = new Col('LGPull4', 'col-lg-pull-4');
		self::$LGPull5 = new Col('LGPull5', 'col-lg-pull-5');
		self::$LGPull6 = new Col('LGPull6', 'col-lg-pull-6');
		self::$LGPull7 = new Col('LGPull7', 'col-lg-pull-7');
		self::$LGPull8 = new Col('LGPull8', 'col-lg-pull-8');
		self::$LGPull9 = new Col('LGPull9', 'col-lg-pull-9');
		self::$LGPull10 = new Col('LGPull10', 'col-lg-pull-10');
		self::$LGPull11 = new Col('LGPull11', 'col-lg-pull-11');
		self::$LGPull12 = new Col('LGPull12', 'col-lg-pull-12');
	}
};
?>