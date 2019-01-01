<?php
defined('G_IN_SYSTEM')or exit('No permission resources.');

class yingfubao_url extends SystemAction {

    private $db;

    function __construct(){
        $this->db=System::load_sys_class('model');
    }

    // 页面支付
    public function callback()
    {
        sleep(3);
        $out_trade_no = $_REQUEST['attach'];	//商户订单号
        $dingdaninfo = $this->db->GetOne("select * from `@#_member_addmoney_record` where `code` = '$out_trade_no'");
        if(!$dingdaninfo || $dingdaninfo['status'] == '未付款'){
            _message("支付失败");
        }else{
            if(empty($dingdaninfo['scookies'])){
                _setcookie('Cartlist',NULL);
                _message("充值成功!",WEB_PATH."/mobile/home/userbalance");
            }else{
                if($dingdaninfo['scookies'] == '1'){
                    _setcookie('Cartlist',NULL);
                    _message("支付成功!",WEB_PATH."/mobile/cart/paysuccess");
                }else{
                    _message("商品还未购买,请重新购买商品!",WEB_PATH."/mobile/cart/cartlist");
                }

            }
        }
    }


    // 支付成功后台回调
    public function notify()
    {

        $data = $_REQUEST;
        $ReturnArray = array( // 返回字段
            "memberid" => $data["memberid"], // 商户ID
            "orderid" => $data["orderid"], // 订单号
            "transaction_id" => $data["transaction_id"], // 支付流水号
            "amount" => $data["amount"], // 交易金额
            "datetime" => $data["datetime"], // 交易时间
            "returncode" => $data["returncode"]
        );

        $Md5key = "7x2fmpidig3hqvqo1baq28na20w4z4i1";
        ///////////////////////////////////////////////////////
        ksort($ReturnArray);
        reset($ReturnArray);
        $md5str = "";
        foreach ($ReturnArray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }
        $sign = strtoupper(md5($md5str . "key=" . $Md5key));


//        foreach($_REQUEST as $key => $val){
//            file_put_contents("test.txt", 'key:'.$key.'   val:'.$val, FILE_APPEND);
//        }


        $orderStatus = $_REQUEST['returncode'];
        $out_trade_no = $_REQUEST['attach'];


        $pay_type =$this->db->GetOne("SELECT * from `@#_pay` where `pay_class` = 'yingfubaoAliMobile' and `pay_start` = '1'");

        if($orderStatus == '00') {

            $dingdaninfo = $this->db->GetOne("select * from `@#_member_addmoney_record` where `code` = '$out_trade_no' and `status` = '未付款'");

            if(!$dingdaninfo){	echo "fail";exit;}	//没有该订单,失败

            $c_money = intval($dingdaninfo['money']);

            $uid = $dingdaninfo['uid'];

            $time = time();

            $this->db->Autocommit_start();

            $up_q1 = $this->db->Query("UPDATE `@#_member_addmoney_record` SET `status` = '已付款' where `id` = '$dingdaninfo[id]' and `code` = '$dingdaninfo[code]'");

            $up_q2 = $this->db->Query("UPDATE `@#_member` SET `money` = `money` + $c_money where (`uid` = '$uid')");

            $up_q3 = $this->db->Query("INSERT INTO `@#_member_account` (`uid`, `type`, `pay`, `content`, `money`, `time`) VALUES ('$uid', '1', '账户', '充值', '$c_money', '$time')");
//            file_put_contents("test.txt", var_dump($dingdaninfo['scookies']), FILE_APPEND);
            // 充值
            if($dingdaninfo['scookies'] == '0' && $c_money == 20){
                $orderMember = $this->db->GetOne("SELECT * FROM `@#_member` where `uid` = '$uid' for update");
//                foreach($orderMember as $key => $val){
//                    file_put_contents("test.txt", 'key:'.$key.'   val:'.$val, FILE_APPEND);
//                }
                if($orderMember['is_first_recharge'] == '1'){
                    $zs_money = 10;
                    $this->db->Query("UPDATE `@#_member` SET `money` = `money` + $zs_money where (`uid` = '$uid')");

                    $this->db->Query("INSERT INTO `@#_member_account` (`uid`, `type`, `pay`, `content`, `money`, `time`) VALUES ('$uid', '1', '账户', '首次充值20元赠送10元', '$zs_money', '$time')");

                    $is_first_recharge = 0;
                    $this->db->Query("UPDATE `@#_member` SET `is_first_recharge` = 0 where (`uid` = '$uid')");
                }
            }


            if($up_q1 && $up_q2 && $up_q3){

                $this->db->Autocommit_commit();

            }else{

                $this->db->Autocommit_rollback();
                _setcookie('Cartlist',NULL);
                echo "fail";exit;

            }

            if(empty($dingdaninfo['scookies'])){
                _setcookie('Cartlist',NULL);
                echo "success";exit;	//充值完成

            }

            $scookies = unserialize($dingdaninfo['scookies']);

            $pay = System::load_app_class('pay','pay');

            $pay->scookie = $scookies;

            $ok = $pay->init($uid,$pay_type['pay_id'],'go_record');	//云购商品

            if($ok != 'ok'){

                _setcookie('Cartlist',NULL);

                echo "fail";exit;	//商品购买失败

            }

            $check = $pay->go_pay(1);

            if($check){

                $this->db->Query("UPDATE `@#_member_addmoney_record` SET `scookies` = '1' where `code` = '$out_trade_no' and `status` = '已付款'");

                _setcookie('Cartlist',NULL);

                echo "ok";exit;

            }else{

                echo "fail";exit;

            }

        }else{
            echo '接收不到参数'; exit;
        }
    }

}

?>