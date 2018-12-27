<?php

/*
//收款啦配置，开始，官网www.shoukuanla.net
//提交订单处理后跳转的付款页面
$_GET['c']='Shoukuanla';
$_GET['a']='external';
require_once(dirname(__FILE__).'/../../shoukuanla/index.php');
$shoukuanla->publicPost=array('payType'=>'alipay','seller_email'=>'yueruiwupay@163.com','out_trade_no'=>'2017072625898254657','price'=>'30.00','returnUrl'=>'');
$shoukuanla->_dopay();exit;
//收款啦配置，结束
*/




/*
//收款啦配置，开始，官网www.shoukuanla.net
//提交订单处理后跳转的付款页面(未生成网站订单情况)
session_start();
$_SESSION['skl_uid']='';//用户id
header("location: /shoukuanla/index.php?a=insert&payType=alipay&seller_email=yueruiwupay@163.com&price=30.00&returnUrl=");
exit;
//收款啦配置，结束
*/




/*
<!--收款啦配置，开始，官网www.shoukuanla.net--> 
<?php 
//输出选择金额样式
$_GET['c']='Selectmoney';
$_GET['a']='index';
require_once(dirname(__FILE__).'/../../../shoukuanla/index.php');
$shoukuanla->showmoney();


//输出选择支付类型组样式
$shoukuanla->showpaytype(array('alipay'=>'alipay','wxpay'=>'wxpay','tenpay'=>'tenpay'),'paytype');
?>
<!--收款啦配置，结束-->
*/





/*
<!--收款啦配置，开始，官网www.shoukuanla.net--> 
<?php
//扫描金额目录名称，返回数组遍历输出
$_GET['c']='Selectmoney';
$_GET['a']='index';
require_once(dirname(__FILE__).'/../../../shoukuanla/index.php');
$skl_moneyname=$shoukuanla->moneyname();

foreach($skl_moneyname as $skl_v){	
  echo $skl_v;		
}
?>
<!--收款啦配置，结束-->
*/




/*
//收款啦配置，开始，官网www.shoukuanla.net
//根据小数获取网站订单号后自己写处理代码
$_GET['c']='Shoukuanla';
$_GET['a']='external';
require_once(dirname(__FILE__).'/shoukuanla/index.php');
$post=skl_I($_POST);

//验证秘钥
if(!$shoukuanla->_checkKey($shoukuanla->_getKey(),$post)){ exit('<errortype>signError</errortype>'); }

//根据小数获取网站订单号
$getWebOrder=$shoukuanla->_getWebOrder($post);			 
$out_trade_no=$getWebOrder[$shoukuanla->cfg_orderField];
if(empty($out_trade_no)){  exit('<errortype>orderEmpty</errortype>');	}
.......


//修改订单状态
if($post['type'] == $shoukuanla->aliAlias || $post['type'] == $shoukuanla->wxAlias){
	 $upMoneySql="`$shoukuanla->cfg_stateField`='$shoukuanla->cfg_stateValue',`$shoukuanla->cfg_jiaoyiField`='".$post['order']."',`$shoukuanla->cfg_moneyField`=$c_money";
}else{
	 $upMoneySql="`$shoukuanla->cfg_stateField`='$shoukuanla->cfg_stateValue',`$shoukuanla->cfg_jiaoyiField`='".$post['order']."'";
}

$shoukuanla->_echoInfo('success',$getWebOrder[$shoukuanla->cfg_uidField],null,$out_trade_no);exit;//收款啦配置
//收款啦配置，结束

*/




/*
//收款啦配置，验证金额
if($getWebOrder[$shoukuanla->cfg_moneyField] != $post['money']){ exit('moneyError'); }
*/



/*
<!--收款啦配置，开始，官网www.shoukuanla.net  style="display:none;"-->
<iframe src="/shoukuanla/index.php?width=900" width="900px" height="700px"  frameborder=0  />
<!--收款啦配置，结束-->
*/



//测试接收软件提交数据写入文件
//file_put_contents($_POST['type'].'-'.$_POST['order'].'.txt',var_export($_POST,true));

?>