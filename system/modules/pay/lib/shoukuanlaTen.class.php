<?php 
/*
作者：宇卓(QQ659915080)
官网：www.shoukuanla.net
*/
class shoukuanlaTen{
	//配置
	private $config;
	private $url;

	public function config($config=null){
 
		//收款啦配置，开始
		//提交订单处理后跳转的付款页面
		$_GET['c']='Shoukuanla';
		$_GET['a']='external';
		require_once('./shoukuanla/index.php');
		$shoukuanla->publicPost=array('payType'=>'tenpay','seller_email'=>$config['pay_type_data']['id']['val'],'out_trade_no'=>$config['code'],'price'=>$config['money']);
		$shoukuanla->_dopay();exit;
		//收款啦配置，结束

		
	}

	//支付页面
	public function send_pay(){
		header('location: '.$this->url);		
		exit;
		//header("Location: $url");		
	}

}

?>
