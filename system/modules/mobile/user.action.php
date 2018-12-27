<?php
defined('G_IN_SYSTEM')or exit('No permission resources.');
System::load_app_class('memberbase',null,'no');
System::load_app_fun('user','go');
System::load_app_fun('my','go');
System::load_sys_fun('send');
class user extends memberbase {
	private $conf;
	public function __construct(){
		parent::__construct();
		$this->db = System::load_sys_class("model");
		$this->conf = System::load_app_config("connect",'','api');
	}
	public function cook_end(){
		_setcookie("uid","",time()-3600);
		_setcookie("ushell","",time()-3600);
		header("location: ".WEB_PATH."/mobile/mobile/");
	}
	//返回登录页面
	public function login(){
		 $webname=$this->_cfg['web_name'];
		$user = $this->userinfo;
		if($user){
			header("Location:".WEB_PATH."/mobile/home/");exit;
		}

		include templates("mobile/user","login");

	}
	//返回注册页面
	public function register(){
	  $webname=$this->_cfg['web_name'];
		$code = $this->segment(4);
		if(!empty($code)){
			//取出用户id
			_setcookie("code",$code,60*60*24*7);
		}
		include templates("/mobile/user","register");
	}

	//返回发送验证码页面
	public function mobilecode(){
	    $webname=$this->_cfg['web_name'];
	    $mobilename=$this->segment(4);
	    $password=$this->segment(5);
	    $userpassword = md5($password);
	    $time = time();
	    $sql="INSERT INTO `go_member` (mobile,password,img,emailcode,mobilecode,reg_key,yaoqing,yaoqing1,time)VALUES('$mobilename','$userpassword','photo/member.jpg','1','1','$mobilename','1','1','$time')";

			if($this->db->Query($sql)){		

				$check_code  = serialize(array("name"=>$name,"time"=>$time));

				$check_code  = _encrypt($check_code,"ENCODE",'',3600*24);
				
				//header("location:".WEB_PATH."/member/user/".$regtype."check"."/".$check_code);
				_message("注册成功!",WEB_PATH.'');
				exit;

			}else{

				_message("注册失败!",WEB_PATH.'/register');

			}
	    //var_dump($mobilename);
	    //var_dump($password);die;
	    _setcookie("mobilename",$mobilename,60*60*24*7);
	    _setcookie("password",$password,60*60*24*7);


		include templates("/mobile/user","mobilecheck");
	}

	public function mobilecheck(){
	    $webname=$this->_cfg['web_name'];
		$title="验证手机";
		$time=3000;
		$name=$this->segment(4);
		$member=$this->db->GetOne("SELECT * FROM `@#_member` WHERE `mobile` = '$name' LIMIT 1");
		 //var_dump($member);exit;
		if(!$member)_message("参数不正确!");
		if($member['mobilecode']==1){
			_message("该账号验证成功",WEB_PATH."/mobile/mobile");
		}
		if($member['mobilecode']==-1){
			$sendok = send_mobile_reg_code($name,$member['uid']);
			if($sendok[0]!=1){
					_message($sendok[1]);
			}
			header("location:".WEB_PATH."/mobile/user/mobilecheck/".$member['mobile']);
			exit;
		}


		$enname=substr($name,0,3).'****'.substr($name,7,10);
		$time=120;
		include templates("mobile/user","mobilecheck");
	}


	public function buydetail(){
	 $webname=$this->_cfg['web_name'];
	 $member=$this->userinfo;
	 $itemid=intval($this->segment(4));

	 $itemlist=$this->db->GetList("select *,a.time as timego,sum(gonumber) as gonumber from `@#_member_go_record` a left join `@#_shoplist` b on a.shopid=b.id where a.uid='$member[uid]' and b.id='$itemid' group by a.id order by a.time" );

	 if(!empty($itemlist)){
		 if($itemlist[0]['q_end_time']!=''){
	   //商品已揭晓
			$itemlist[0]['codeState']='已揭晓...';
			$itemlist[0]['class']='z-ImgbgC02';
	    }elseif($itemlist[0]['shenyurenshu']==0){
		//商品购买次数已满
			$itemlist[0]['codeState']='已满员...';
			$itemlist[0]['class']='z-ImgbgC01';
		}else{
		//进行中
			$itemlist[0]['codeState']='进行中...';
			$itemlist[0]['class']='z-ImgbgC01';

		}
		$bl=($itemlist[0]['canyurenshu']/$itemlist[0]['zongrenshu'])*100;

		foreach ($itemlist as $k => $v) {
			$count += $v['gonumber'];
		}
	}
	$count = $count ? $count : 0;

	 include templates("/mobile/user","userbuydetail");
	}

	//wexin登录绑定
	public function wxinit(){
	$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->conf['weixin']['id'].'&redirect_uri='.WEB_PATH.'/mobile/user/wxcallback&response_type=code&scope=snsapi_userinfo&state=wechat123&connect_redirect=1#wechat_redirect';
		header("location:$url");
	}
	//wexin回调
	public function wxcallback(){
		$time = time();
		$member=$this->userinfo;
		$code = $_GET['code'];
		$state = $_GET['state'];
		if (empty($code)) $this->error('授权失败');
		$token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$this->conf['weixin']['id'].'&secret='.$this->conf['weixin']['key'].'&code='.$code.'&grant_type=authorization_code';
		$token = json_decode(getCurl($token_url));
		$access_token_url = 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid='.$this->conf['weixin']['id'].'&grant_type=refresh_token&refresh_token='.$token->refresh_token;
		//转成对象
		$access_token = json_decode(getCurl($access_token_url));
		$user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token->access_token.'&openid='.$access_token->openid.'&lang=zh_CN';
		//转成对象
		$user_info = json_decode(getCurl($user_info_url),true);
		$weixin_openid = $user_info['openid'];
		$go_user_himg  = $user_info['headimgurl'];
		if(empty($weixin_openid)){
			echo '信息获取失败，请返回刷新后重新操作';die;
		}
		$info = $this->db->GetOne("SELECT * FROM `@#_member_band` WHERE `b_code` = '$weixin_openid'");
		if(!empty($info)){
			_messagemobile("该微信号已经被绑定，您的操作失败",WEB_PATH."/mobile/home",3);
		}else{
			$uid = $member['uid'];
			$nickname = empty($member['username']) ? $user_info['nickname'] : $member['username'];
			$q1 = $this->db->Query("INSERT INTO `@#_member_band` (`b_uid`, `b_type`, `b_code`, `b_time`) VALUES ('$uid', 'weixin', '$weixin_openid', '$time')");
			$q2 = $this->db->Query("UPDATE  `@#_member` SET `wxid` = '$weixin_openid', `headimg`= '$go_user_himg', `username`='$nickname' WHERE `uid`=$uid");
			if($q1 && $q2){
				_messagemobile("微信账号绑定成功",WEB_PATH."/mobile/home",3);
			}
		}
	}
	public function password(){
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		$title="密码修改";	
		include templates("mobile/user","password");
	}
	public function oldpassword(){
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		if($member['password']==md5($_POST['param'])){
			echo '{
					"info":"",
					"status":"y"
				}';
		}else{
			echo "原密码错误";
		}
	}
	public function userpassword(){
			$mysql_model=System::load_sys_class('model');
			$member=$this->userinfo;
			$pwd1=isset($_POST['pwd1']) ? $_POST['pwd1'] : "";
			$pwd2=isset($_POST['pwd2']) ? $_POST['pwd2'] : "";
			$pwd3=isset($_POST['pwd3']) ? $_POST['pwd3'] : "";
			if($pwd3==null or $pwd2==null or $pwd1==null){
					echo "密码不能为空;";
					exit;
			}
			
			if(strlen($_POST['pwd2'])<6 || strlen($_POST['pwd2'])>20){
				echo "密码不能小于6位或者大于20位";
				exit;
			}
			if($_POST['pwd3']!==$_POST['pwd2']){
				echo "二次密码不一致";
				exit;
			}		
			$pwd2=md5($pwd2);
			$pwd1=md5($pwd1);
			if($member['password']!=$pwd1){
				echo "原密码错误";
			}else{
				$mysql_model->Query("UPDATE `@#_member` SET password='".$pwd2."' where uid='".$member['uid']."'");
				echo 'ok';
			}
		}

	public function headimg(){
		$member=$this->userinfo;
		if(!empty($_FILES)){	
			System::load_sys_class('upload','sys','no');
			upload::upload_config(array('png','jpg','jpeg'),500000,'touimg');
			upload::go_upload($_FILES['Filedata']);
			$files=$_POST['typeCode'];
			if(!upload::$ok){
				echo upload::$error;
			}else{
				$img=upload::$filedir."/".upload::$filename;				
				$size=getimagesize(G_UPLOAD."/touimg/".$img);
				$max=300;$w=$size[0];$h=$size[1];				
				if($w>300 or $h>300){
					if($w>$h){
						$w2=$max;
						$h2 = intval($h*($max/$w));
						upload::thumbs($w2,$h2,true);					
					}else{
						$h2=$max;
						$w2 = intval($w*($max/$h));
						upload::thumbs($w2,$h2,true);
					}
				}
			$tname="touimg/".$img;
			$this->db->Query("UPDATE `@#_member` SET img='$tname' where uid={$member['uid']}");
			_messagemobile("修改成功");
			}					
		}

		include templates("mobile/user","headimg");
	}


	public function profilechange(){
		$mysql_model=System::load_sys_class('model');
		$member=$this->userinfo;
		if($_POST){			
			$username=_htmtocode(trim($_POST['username']));
			$qianming=_htmtocode(trim($_POST['qianming']));
			$reg_user_str = $this->db->GetOne("select value from `@#_caches` where `key` = 'member_name_key' limit 1");
			$reg_user_str = explode(",",$reg_user_str['value']);
			if(is_array($reg_user_str) && !empty($username)){
				foreach($reg_user_str as $rv){
					if($rv == $username){
						_message("此昵称禁止使用!");
					}
				}
			
			}			
			//福分、经验添加
			$isset_user=$this->db->GetOne("select `uid` from `@#_member_account` where (`content`='手机认证完善奖励' or `content`='完善昵称奖励') and `type`='1' and `uid`='$member[uid]' and (`pay`='经验' or `pay`='福分')");	
			// if(!$isset_user){			
			// 	$config = System::load_app_config("user_fufen");//福分/经验
			// 	$time=time();
			// 	$this->db->Query("insert into `@#_member_account` (`uid`,`type`,`pay`,`content`,`money`,`time`) values ('$member[uid]','1','福分','完善昵称奖励','$config[f_overziliao]','$time')");
			// 	$this->db->Query("insert into `@#_member_account` (`uid`,`type`,`pay`,`content`,`money`,`time`) values ('$member[uid]','1','经验','完善昵称奖励','$config[z_overziliao]','$time')");			
			// 	$mysql_model->Query("UPDATE `@#_member` SET username='".$username."',qianming='".$qianming."',`score`=`score`+'$config[f_overziliao]',`jingyan`=`jingyan`+'$config[z_overziliao]' where uid='".$member['uid']."'");
			// }	
			$mysql_model->Query("UPDATE `@#_member` SET username='".$username."',qianming='".$qianming."' where uid='".$member['uid']."'");
			echo 1;
			die;
			
		}
		
	}

	public function profile(){
		$member=$this->userinfo;
		$uid = $member['uid'];
		$wxinfo = $this->db->GetOne("SELECT * FROM `@#_member_band` WHERE `b_uid` = '$uid' AND `b_type`='weixin' LIMIT 1");
		$qqinfo = $this->db->GetOne("SELECT * FROM `@#_member_band` WHERE `b_uid` = '$uid' AND `b_type`='qq' LIMIT 1");
		include templates("mobile/user","profile");
	}
public function profile_one(){
		$member=$this->userinfo;
		$uid = $member['uid'];
		$wxinfo = $this->db->GetOne("SELECT * FROM `@#_member_band` WHERE `b_uid` = '$uid' AND `b_type`='weixin' LIMIT 1");
		$qqinfo = $this->db->GetOne("SELECT * FROM `@#_member_band` WHERE `b_uid` = '$uid' AND `b_type`='qq' LIMIT 1");
		include templates("mobile/user","profile_one");
	}

	//手机验证界面
	public function mobile(){
		include templates("mobile/user","mobile");
	}

	public function mobiles2(){
		$mobile=$this->segment(4);
		include templates("mobile/user","mobiles2");
	}


	public function mobilesuccess(){
		$title="手机验证";
		$member=$this->userinfo;	
		if($_POST){
		$mobile=isset($_POST['mobile']) ? $_POST['mobile'] : "";
		if(!_checkmobile($mobile) || $mobile==''){
			echo "手机号错误";die;	
		}
		$member2=$this->db->GetOne("select mobilecode,uid,mobile from `@#_member` where `mobile`='$mobile'");
			if($member2 && $member2['mobilecode'] == 1){
					echo "手机号已被注册或验证！";die;
			}					
			if($member['mobilecode']!=1){
			//验证码
			$ok = send_mobile_reg_code($mobile,$member['uid']);			
			if($ok[0]!=1){
				echo "发送失败,失败状态:".$ok[1];die;
				}else{
				_setcookie("mobilecheck",base64_encode($mobile));
			}					
			}
			$time=120;
			echo  123;die;
		}
	}
	public function mobilecheckband(){	
		$member=$this->userinfo;
		if($_POST){		
			$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
			$checkcodes=isset($_POST['code']) ? $_POST['code'] : '';
		if(empty($mobile)){
			echo "验证出错，请重新绑定";die;
		}
		if(strlen($checkcodes)!=6){
			echo "验证码输入不正确!";die;
		}
		$usercode=explode("|",$member['mobilecode']);
		if($checkcodes!=$usercode[0]){
			echo "验证码输入不正确!";die;
		}
		$this->db->Query("UPDATE `@#_member` SET `mobilecode`='1',`mobile` = '$mobile' where `uid`='$member[uid]'");
		$this->db->Query("DELETE FROM `@#_member` WHERE `mobile` = '$mobile' AND `username`=''");
		_setcookie("uid",_encrypt($member['uid']));	
		_setcookie("ushell",_encrypt(md5($member['uid'].$member['password'].$member['mobile'].$member['email'])));				
		echo 123;die;
		}else{
		echo '绑定失败，请重新操作';die;
		}
	}

    /**
     * Jasper 2018.12.15
     * 发送手机验证码
     */
	public function sendRegisterMobileCode()
    {
        $phone = $this->segment(4);
        $isUser = $this->db->GetOne("SELECT * FROM `@#_member` WHERE `mobile` = '$phone' LIMIT 1");
        if($isUser){
            echo json_encode(['status' => 0, 'message' => '手机号已被注册，请更换手机号']);
            die();
        }

        $code = $this->getRandStr(6);
        $message = "【TG商城】您的注册验证码为：".$code;
        $result = $this->sendCodeBySms($phone, $message);
        if($result == 0){
            echo json_encode(['status' => 1, 'message' => '验证码发送成功', 'code' => $code]);
            die();
        }else{
            echo json_encode(['status' => 0, 'message' => '验证码发送失败']);
            die();
        }
    }

    public function sendLoginMobileCode()
    {
        $phone = $this->segment(4);
        $isUser = $this->db->GetOne("SELECT * FROM `@#_member` WHERE `mobile` = '$phone' LIMIT 1");
        if(!$isUser){
            echo json_encode(['status' => 0, 'message' => '该用户不存在']);
            die();
        }

        $code = $this->getRandStr(6);
        $message = "【TG商城】您的登录验证码为：".$code;
        $result = $this->sendCodeBySms($phone, $message);
        if($result == 0){
            echo json_encode(['status' => 1, 'message' => '验证码发送成功', 'code' => $code]);
            die();
        }else{
            echo json_encode(['status' => 0, 'message' => '验证码发送失败']);
            die();
        }
    }

    public function sendCodeBySms($phone, $content)
    {
        $statusStr = array(
            "0" => "短信发送成功",
            "-1" => "参数不全",
            "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
            "30" => "密码错误",
            "40" => "账号不存在",
            "41" => "余额不足",
            "42" => "帐户已过期",
            "43" => "IP地址限制",
            "50" => "内容含有敏感词"
        );
        $smsapi = "http://api.smsbao.com/";
        $user = "18tgsc"; //短信平台帐号
        $pass = md5("Aa012345"); //短信平台密码
        $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);
        $result =file_get_contents($sendurl) ;
        return $statusStr[$result];
    }

    function getRandStr($length){
//        $str='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $str='0123456789';
        $len=strlen($str)-1;
        $randstr='';
        for($i=0;$i<$length;$i++){
            $num=mt_rand(0,$len);
            $randstr .= $str[$num];
        }
        return $randstr;
    }

    public function changeXgjl()
    {
        $value = $this->segment(4);
        $member = $this->userinfo;
        $this->db->Query("UPDATE `@#_member` SET `is_xgjl` = '.$value.' where `uid`='$member[uid]'");
        echo json_encode(['status' => 1, 'message' => '更新成功']);
        die();
    }
    public function changeHdsp()
    {
        $value = $this->segment(4);
        $member = $this->userinfo;
        $this->db->Query("UPDATE `@#_member` SET `is_hdsp` = '.$value.' where `uid`='$member[uid]'");
        echo json_encode(['status' => 1, 'message' => '更新成功']);
        die();
    }

}