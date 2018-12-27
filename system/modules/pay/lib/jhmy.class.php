<?php 

class jhmy{
	
	private $config;
	//主入口
	public function config($config=null){

		$this->config = $config;
		
	}
	
	//及时到账
	public function send_pay(){
		$config = $this->config;
		
        //页面跳转同步通知页面路径
        $return_url = $config['ReturnUrl'];		
		$notify_url = $config['NotifyUrl'];//服务器异步通知地址
        //商户订单号 必填
        $out_trade_no = $config['code'];
        //订单名称 必填
        $subject = $config['title'];
        //付款金额 必填
        $total_fee = $config['money'] * 100;
		
		$user_id = $config['id'];                                  	//会员ID
		$key = $config['key'];									//安全检验码
		$alipay_config_input_charset = strtolower('utf-8');
		
		//生成签名
		$signa = md5(md5($total_fee.$notify_url.$out_trade_no).$key);
		
		$param = array (
		'notify_url' =>$notify_url,
		'return_url' =>$return_url,
		'order_sn' => $out_trade_no,//商户订单号
		'money' => $total_fee,//商户订单金额
		'user_id' => $user_id,//商户会员ID
		'sign' => $signa,//签名
		);
		
		//发送请求地址
		$url = 'https://www.mingyie.com/api/pal/post/index.php';
		$rets = $this->buildRequestForm($param,$url,'POST');//发起支付请求
		echo $rets;//输出前往支付
		exit;
		
	}
	
	public function buildRequestForm($para_temp,$url,$method) {
		
		$sHtml = '';
		$sHtml .= "<h3>正在跳转到铭翼支付....</h3>";
		$sHtml .= "<form id='cbjpaysubmit' name='cbjpaysubmit' action='".$url."' method='".$method."'>";
		while (list ($key, $val) = each ($para_temp)) {
            $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
        }
		
		$sHtml = $sHtml."<script>document.forms['cbjpaysubmit'].submit();</script>";
		return $sHtml;
	}
	
}

?>
