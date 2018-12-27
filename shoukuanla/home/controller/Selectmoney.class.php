<?php
/*
功能：输出选择金额样式
作者：宇卓(QQ659915080)
官网：www.shoukuanla.net 
备用域名：www.chonty.com
版本号:1.1
*/
class Selectmoney extends ShoukuanlaBase{

function __construct(){  
  
	$this->_newCfg();	

}


public function index(){ }


/*调用方法：
<?php 
$_GET['c']='Selectmoney';
require_once(dirname(__FILE__).'/../../../shoukuanla/index.php');
$skl_moneyname=$shoukuanla->moneyname();

foreach($skl_moneyname as $skl_v){	
  echo $skl_v;		
}
?>*/
public function moneyname(){
	
 	//扫描目录名称
	require_once(SKL_FUNCTION_PATH.'skl_scanDirFile.php');

  $payType=str_replace('pay','',$this->cfg_payTypeOrder[0]);	
	$dirName=skl_scanDirFile(SKL_ROOT_PATH.'images/'.$payType.'qrcode','dir'); 
	sort($dirName);

  return $dirName;
}



//输出选择金额组样式
/*调用方法：      
<?php 
$_GET['c']='Selectmoney';
require_once(dirname(__FILE__).'/../shoukuanla/index.php');
$shoukuanla->showmoney();
?>
*/
public function showmoney($skl_moneyName='money'){

  $dirName=$this->moneyname();

  require(SKL_VIEW_PATH.SKL_CONTROLLER.'/showmoney.php');

}


//输出支付方式样式
public function showpaytype($payType=array('alipay'=>'alipay','wxpay'=>'wxpay','tenpay'=>'tenpay'),$inputName='paytype',$imgHeight=40){

//排序
$payTypeOrder=array();
foreach($this->cfg_payTypeOrder as $vp){
  $payTypeOrder[$vp]=$payType[$vp];

}

foreach($payTypeOrder as $k=>$v){

  if(in_array($k,$this->cfg_payTypeOrder)){

		if($k == 'alipay'){ $checked='checked="checked"'; }else{ $checked='';  }
		echo '
		<label><input name="'.$inputName.'" value="'.$v.'" type="radio" '.$checked.'>
		<img height="'.$imgHeight.'" src="'.SKL_WEBROOT_PATH.'images/'.$k.'.png"></label>&nbsp;

		';

	}

}

}


}
?>