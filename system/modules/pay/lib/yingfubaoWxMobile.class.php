<?php
    class yingfubaoWxMobile {

        protected $pay_memberid;
        protected $pay_orderid;
        protected $pay_amount;
        protected $pay_applydate;
        protected $pay_bankcode;
        protected $pay_notifyurl;
        protected $pay_callbackurl;
        protected $Md5key;
        protected $tjurl;

        public function __construct()
        {
            $this->pay_memberid = "10026";   //商户ID
            $this->pay_amount = "0.01";    //交易金额
            $this->pay_applydate = date("Y-m-d H:i:s");  //订单时间
            $this->pay_bankcode = "1049";   //银行编码
            $this->pay_notifyurl = G_WEB_PATH.'/index.php/pay/yingfubao_url/notify';   //服务端返回地址
            $this->pay_callbackurl = G_WEB_PATH.'/index.php/pay/yingfubao_url/callback';  //页面跳转返回地址
            $this->Md5key = "7x2fmpidig3hqvqo1baq28na20w4z4i1";   //密钥
            $this->tjurl = "http://pay.csygo.com/Pay_Index.html";   //网关提交地址
        }

        public function pay($dingdancode, $money)
        {
            $jsapi = array(
                "pay_memberid" => $this->pay_memberid,
                "pay_orderid" => date("YmdHis").rand(100000,999999),
                "pay_applydate" => $this->pay_applydate,
                "pay_bankcode" => $this->pay_bankcode,
                "pay_notifyurl" => $this->pay_notifyurl,
                "pay_callbackurl" => $this->pay_callbackurl,
                "pay_amount" => $money,
//                "pay_amount" => '0.01',
            );

            ksort($jsapi);
            $md5str = "";
            foreach ($jsapi as $key => $val) {
                $md5str = $md5str . $key . "=" . $val . "&";
            }
            $sign = strtoupper(md5($md5str . "key=" . $this->Md5key));
            $jsapi["pay_md5sign"] = $sign;
            $jsapi["pay_attach"] = $dingdancode;

            $tjurl = $this->tjurl;

            include templates("mobile/cart","payform");
        }

    }
?>