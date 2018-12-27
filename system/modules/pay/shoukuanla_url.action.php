<?php 
/*
功能：实现支付宝扫码自动充值
作者：宇卓(QQ659915080)
官网：www.shoukuanla.net
*/
defined('G_IN_SYSTEM')or exit('No permission resources.');

class shoukuanla_url extends SystemAction {

private $db;

function __construct(){
  $this->db=System::load_sys_class('model');	
} 	


//接收软件提交的订单并处理
public function notify(){

$_GET['a']='external';
$_GET['c']='Shoukuanla';
require_once('./shoukuanla/index.php');

$post=skl_I();

$pay_type =$this->db->GetOne("SELECT * from `@#_pay` where `pay_class` = 'shoukuanlaAli' AND `pay_mobile`!='1'");
$pay_type_key = unserialize($pay_type['pay_key']);
$key =  trim($pay_type_key['key']['val']);		//支付KEY


//验证秘钥
if(!$shoukuanla->_checkKey($key,$post)){ exit('<errortype>signError</errortype>'); }

//根据备注订单号获取网站订单号
$getWebOrder=$shoukuanla->_getWebOrder($post);  
$out_trade_no=$getWebOrder[$shoukuanla->cfg_orderField]; 
if(empty($out_trade_no)){ exit('<errortype>orderEmpty</errortype>'); }


//开始处理及时到账和担保交易订单
	$this->db->Autocommit_start();
	$dingdaninfo = $this->db->GetOne("select * from `@#_member_addmoney_record` where `code` = '$out_trade_no' and `status` = '未付款' for update");  	 
	if(!$dingdaninfo){	echo "fail";exit;} 	//没有该订单,失败
	$c_money =$post['money'];	
	$uid = $dingdaninfo[$shoukuanla->cfg_uidField];
	$time = time();			
	//$up_q1 = $this->db->Query("UPDATE `@#_member_addmoney_record` SET `status` = '已付款' where `id` = '$dingdaninfo[id]' and `code` = '$dingdaninfo[code]'");

  //收款啦配置,开始
	if($post['type'] == $shoukuanla->aliAlias || $post['type'] == $shoukuanla->wxAlias || $post['type'] == $shoukuanla->tenAlias){
	   $upMoneySql="`status` = '$shoukuanla->cfg_stateValue',`$shoukuanla->cfg_jiaoyiField`='".$post['order']."',`$shoukuanla->cfg_moneyField`=$c_money";
	}else{
	   $upMoneySql="`status` = '$shoukuanla->cfg_stateValue',`$shoukuanla->cfg_jiaoyiField`='".$post['order']."'";
	}
	$up_q1 = $this->db->Query("UPDATE `@#_member_addmoney_record` SET $upMoneySql where `id` = '$dingdaninfo[id]' and `code` = '$dingdaninfo[code]'");
	//收款啦配置,结束

	$up_q2 = $this->db->Query("UPDATE `@#_member` SET `money` = `money` + $c_money where (`uid` = '$uid')");				
	$up_q3 = $this->db->Query("INSERT INTO `@#_member_account` (`uid`, `type`, `pay`, `content`, `money`, `time`) VALUES ('$uid', '1', '账户', '充值', '$c_money', '$time')");

		
	if($up_q1 && $up_q2 && $up_q3){
		$this->db->Autocommit_commit();			
	}else{
		$this->db->Autocommit_rollback();
		echo "fail";exit;
	}			
	if(empty($dingdaninfo['scookies'])){	

		 $shoukuanla->_echoInfo('success',$getWebOrder[$shoukuanla->cfg_uidField],null,$out_trade_no);exit;//收款啦配置
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

			
	}

	$shoukuanla->_echoInfo('success',$getWebOrder[$shoukuanla->cfg_uidField],null,$out_trade_no);exit;//收款啦配置
		
  echo "success";

}//开始处理订单结束	


	

}

?>