<?php 

defined('G_IN_SYSTEM')or exit('No permission resources.');
ini_set("display_errors","OFF");
class jhmy_url extends SystemAction {
	public function __construct(){			
		$this->db=System::load_sys_class('model');		
	} 	
	
	public function qiantai(){
		sleep(2);
		$out_trade_no = $_GET['order_sn'];	//商户订单号
		$dingdaninfo = $this->db->GetOne("select * from `@#_member_addmoney_record` where `code` = '$out_trade_no'");
		
		if($dingdaninfo['status'] == '未付款'){
			
			_message("付款失败!",WEB_PATH."/member/home/userbalance");
			
		}else{
			
			_message("付款成功!",WEB_PATH."/member/cart/paysuccess");
		}
		
		
	}
	
	public function houtai(){	
		sleep(2);
		
		
		$getsj = $_POST;
		$out_trade_no = $getsj['order_sn'];	//商户订单号
		$money = $getsj['money'];	//付款金额
		$trade_no = $getsj['trade_no'];	//交易流水号
		//?trade_no=交易流水号&order_sn=商户订单号&money=支付金额&user_id=会员ID&trade_status=10000&sign=签名
		
		$pay_type =$this->db->GetOne("SELECT * from `@#_pay` where `pay_class` = 'jhmy' and `pay_start` = '1'");
		$pay_type_key = unserialize($pay_type['pay_key']);
		$key =  $pay_type_key['key']['val'];		//支付KEY
		$partner =  (int)$pay_type_key['id']['val'];		//会员ID
		
		//验证支付签名
		$signa = md5(md5($out_trade_no.$money.$trade_no.$partner).$key);//生成签名
		
		if($signa != $getsj['sign']){
			
			_message("支付签名错误");
		}
		
		$dingdaninfo = $this->db->GetOne("select * from `@#_member_addmoney_record` where `code` = '$out_trade_no'");
		if($dingdaninfo['status'] == '未付款' && $getsj['trade_status'] == 10000){
			
			$up_q1 = $this->db->Query("UPDATE `@#_member_addmoney_record` SET `pay_type` = '".$pay_type['pay_name']."', `status` = '已付款' where `id` = '$dingdaninfo[id]' and `code` = '$dingdaninfo[code]'");
			$up_q2 = $this->db->Query("UPDATE `@#_member` SET `money` = `money` + $money where (`uid` = '".$dingdaninfo['uid']."')");				
			$up_q3 = $this->db->Query("INSERT INTO `@#_member_account` (`uid`, `type`, `pay`, `content`, `money`, `time`) VALUES ('".$dingdaninfo['uid']."', '1', '账户', '充值', '$money', '".$dingdaninfo['time']."')");
			
			
			if(empty($dingdaninfo['scookies'])){
				//如果是充值更改订单状态
				
				_message("充值成功!",WEB_PATH."/member/home/commissions");
				exit;
				
			}else{
				
				//购买商品
				$scookies = unserialize($dingdaninfo['scookies']);
				
				$pay = System::load_app_class('pay','pay');
				
				$pay->scookie = $scookies;
				$ok = $pay->init($dingdaninfo['uid'],$pay_type['pay_id'],'go_record');	//微购商品
				
				if($ok != 'ok'){
					
					$_COOKIE['Cartlist'] = '';_setcookie('Cartlist',NULL);
					
					_message("购买商品失败!",WEB_PATH."/member/home/userbalance");
					
				}
				
				$check = $pay->go_pay(1);
				
				if($check){
					
					$this->db->Query("UPDATE `@#_member_addmoney_record` SET `scookies` = '1' where `code` = '$out_trade_no' and `status` = '已付款'");
					
					$_COOKIE['Cartlist'] = '';_setcookie('Cartlist',NULL);
					
					_message("付款成功!",WEB_PATH."/member/cart/paysuccess");
					
					}else{
						
						_message("购买商品失败!",WEB_PATH."/member/home/userbalance");
					}
				
			}
			
		}
		
		
	}
	
	
}//

?>