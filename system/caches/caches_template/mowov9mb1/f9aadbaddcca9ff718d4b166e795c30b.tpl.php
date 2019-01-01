<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE = edge">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/commnew.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/footer_header.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/indexnew.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/index.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/new_join.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/login_box.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/goods.css">
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/forgetPwd.css">
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/loginnew.css">
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/login_box.css">
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/registerNew.css">
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/cloud-zoom.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.webox.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cartlist.js"></script>


<style>
.pullDownList,.yMenuListCon{
	display:none
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/goods.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/page.css">
<!--S 2015-10-30 添加-->
<style>
/*全部参与*/
::-ms-clear, ::-ms-reveal{display: none;}
	.c_rob_box {
	    background: #f3f3f3 none repeat scroll 0 0;
	    margin: 0 -18px;
	    text-align: center;
	}
    .c_rob_box .w_rob{
      overflow: hidden;
      margin:0px 18px;
      padding:2px 0px 14px;
    }
    .c_rob_box .c_cumulative_box{
      padding:14px 0px;
      position: relative;
    }
    .c_rob_box .c_cumulative_box strong{
      font-size:14px;
      color:#333;
      font-style: normal;
    font-weight: 500;
    }
    .c_rob_box .c_detailsinputs{
      width:120px;
      height:28px;
      border:1px solid #ddd;
      text-align: center;
      color:#666;
    }
    .c_rob_box span{
      display: block;
      font-size:20px;
      color:#555;
      position: absolute;
      width:30px;
      height:30px;
      top:14px;
      cursor: pointer;
    }
    .c_rob_box .c_addnew_subtracts{
      left:127px;
      border-right:1px solid #ddd;
    }
    .c_rob_box .c_addnew_pluss{
      left:218px;
      border-left:1px solid #ddd;
    }
    .w_goods_details{
      height:430px;
    }
    .w_product_con{
      position: relative;
    }
    .w_product_con .c_join_all{
      position: absolute;
      right:0px;
      top:0px;
      display: block;
      width:98px;
      height:32px;
      background: #dd2726;
      border-radius: 4px;
      border-bottom:2px solid #dd2726;
      font-size:16px;
      color:#fff;
      line-height: 32px;
      text-align: center;
      cursor:pointer;
    }

/*全部参与 end*/
.w_specific_class1 ul li{
    width:80px;
    text-align: center;
    margin:0px 12px 10px;
    height:20px;
}
.w_specific_class1 ul li a{
    display:block;
    height:20px;
    padding:0px 6px;
    line-height: 20px;
  }
.w_specific_class1 ul li .c_addspans_icon{
    display:block;
    width:100%;
    height:20px;
    vertical-align: middle;
  }
.c_newgoods_brand .c_newgoods_brand_name{
  height:20px;
  line-height: 20px;
}
</style>

</head>
<body>
 


 


<style>
.loginContent {
    padding: 0px 0 0;
}
.loginContent form {
    padding-top: 30px;
}
/* S 2015-11-30 新增  */
.a_login_register_box {

    height: 375px;

}
.ygqq_b {
    background: #e7e7e7 none repeat scroll 0 0;
    display: block;
    float: left;
    height: 1px;
    margin-top: 7px;
    width: 107px;
}

/*E 2015-11-30 新增  */
/*S 2015-12-1 新增  */
body{min-width: 1210px;}
/*E 2015-12-1 新增  */


</style>

<script>
var userMId = '485554';
</script>
<!-- 顶部 -->
<input type="hidden" id="mid" value="">
<input type="hidden" id="signTime" value="">
<input type="hidden" id="signDays" value="">
<div class="header header_fixed" style="margin-bottom: 0px;">
	<div class="header1">
		<div class="header1in">
			<ul class="headerul1">
				<li><a style="padding-left:40px;font-size: 14px;"><i class="header-tel"></i><?php echo _cfg('cell'); ?></a></li>
				<li class="hreder-hover" style="border-right:none;"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg('qq'); ?>&site=qq&menu=yes" target="_blank">在线客服</a></li>
				<li class="phoneli header-WeChatli">
					<a href="/go/index/weixin" style=" padding-bottom: 0px;">关注我们<i class="i-header-WeChat"></i></a>
					<img src="<?php echo G_TEMPLATES_IMAGE; ?>/weixin.jpg">
				</li>
				<li class="phoneli header-Xlli">
					<a href="http://weibo.com/yunniupin" style=" padding-bottom: 0px;">新浪微博<i class="i-header-WeChat"></i></a>
					<img style="border:0px;width:180px;" src="<?php echo G_TEMPLATES_IMAGE; ?>/weibo.jpg">
				</li>
				<li class="phoneli header-phoneli">
					<a href="<?php echo WEB_PATH; ?>/app" style="border-right:0px;" target="_black">手机客户端<i class="i-header-phone"></i></a>
					 <img src="<?php echo G_TEMPLATES_IMAGE; ?>/shouji.jpg">
				</li>
			</ul>
			<ul class="headerul2">
			<?php if(get_user_arr()): ?>
		        <li><a href="<?php echo WEB_PATH; ?>/member/home/qiandao">签到</a></li>
				<li class="li_popup_doregister"><a href="<?php echo WEB_PATH; ?>/member/home">欢迎您：<?php echo get_user_name(get_user_arr(),'username'); ?></a></li>
				<li class="li_popup_login"><a href="<?php echo WEB_PATH; ?>/member/user/cook_end">退出</a></li>
			
			
			<?php  else: ?>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/qiandao">签到</a></li>
				<li class="li_popup_doregister"><a href="<?php echo WEB_PATH; ?>/register" style="padding-left:30px;color:#dd2726;"><img style="position:absolute;top:-2px;left:7px;" src="<?php echo G_TEMPLATES_IMAGE; ?>/top_add.png">免费注册</a></li>
				<li class="li_popup_login"><a href="<?php echo WEB_PATH; ?>/login">登录</a></li>
           <?php endif; ?>
				<li class="MyzhLi">
					<a href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?><i class="top"></i></a>
					<dl class="Myzh">
						<dd><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist"><?php echo _cfg('web_name_two'); ?>记录</a></dd>
						<dd><a href="<?php echo WEB_PATH; ?>/member/home/orderlist">获得的商品</a></dd>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/userrecharge">帐户充值</a></dd>
						<dd><a href="<?php echo WEB_PATH; ?>/member/home/modify">个人设置</a></dd>
					</dl>
				</li>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge">充值</a></li>	
				<li><a href="<?php echo WEB_PATH; ?>/help/11">帮助</a></li>
			    <li class="fl"><a href="javascript:;" onClick="AddFavorite(window.location,document.title)">收藏<?php echo _cfg('web_name_two'); ?></a></li>
				
				<li><a style="border-right:none;" href="<?php echo WEB_PATH; ?>/group_qq">官方QQ群</a></li>
			</ul>
		</div>
	</div>
	<div class="header2">
	    <span id="ww_span"></span>
		<a href="<?php echo G_WEB_PATH; ?>/" class="header_logo" title="<?php echo _cfg('web_name'); ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"></a>
		
		<div class="search_header2">
			<s></s>
			<input id="txtSearch" class="init" placeholder="搜索您需要的商品" value='iphon6s' type="text">
			<a id="butSearch" href="javascript:;" class="btnHSearch">搜索</a>
			
		</div>
		<!-- 头部显示累计交易金额 -->
		<div class="yJoinNum">
		<span class="yBefore">累计注册人数</span>
		<span>
             <div class="number">
                 <a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
                      <ul id="ulHTotalBuy">
                <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
				<li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
			</ul> </a>
			</span>
             </div>
		</div>
	</div>
</div>
<script>
$(function (){
  $(".left_nav dd").hover(function(){
  $(".nav_right",this).show();
  });
  $(".left_nav dd").mouseleave(function(){
  $(".nav_right",this).hide();
  });
});
</script>
<script>
$(document).ready(function(){
		$.get("<?php echo WEB_PATH; ?>/member/cart/getnumber/"+new Date().getTime(),function(data){
			$("#sCartTotal").text(data);
		});
	});

document.onkeydown=function(event)
{ 
	e = event ? event :(window.event ? window.event : null);
	ss= document.getElementById('txtSearch').value;
	if(e.keyCode==13 && ss!=""){
	 window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	}
}

$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#fff"});
		$(this).attr("placeholder","");
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		$(this).attr("placeholder","iphon6s");	
	});
	$("#butSearch").click(function(){
		var val1="iphon6s"
	    if($("#txtSearch").val()==""){
			window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+val1;
		}else
		if($("#txtSearch").val()==$("#txtSearch").val()){
			window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
		}
	});
});

	$(".yu_ff").mouseover(function(){
	  $(".h_1yyg_eject").show();
	})
	$(".yu_ff").mouseout(function(){
	  $(".h_1yyg_eject").hide();
	})

		
	//收藏
	function AddFavorite(sURL, sTitle){
		try
		{
			window.external.addFavorite(sURL, sTitle);
		}
		catch (e)
		{
			try
			{
				window.sidebar.addPanel(sTitle, sURL, "");
			}
			catch (e)
			{
				alert("您可以通过快捷键Ctrl+D进行添加");
			}
		}
	}
	
	$(".mobile").mouseover(function(){
		$(".h_mobile").show();
		$(".h_mobile  s").css("background","../images/headbg11.png").css("background-position","5px -64px");
	})
	$(".h_mobile").mouseout(function(){
		$(".h_mobile").hide();
	})

	
</script>
<div style="clear:both;"></div>
<!-- 导航   start  -->
<div class="yNavIndexOut yNavIndexOut_fixed">
	<div class="yNavIndex">
		<div class="pullDown">
			<h4 class="pullDownTitle">
				<a href="<?php echo WEB_PATH; ?>/goods_list" target="">所有商品分类</a>
			</h4>
			<ul class="pullDownList" style="display: none;">
             	<?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1' and `parentid` = '0' order by `order` ASC",array("type"=>1,"key"=>'',"cache"=>0)); ?>
	<?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
		     	<li >
								<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $categoryx['cateid']; ?>"><i class="listi<?php echo $i; ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $categoryx['pic_url']; ?>" height="20"></i><?php echo $categoryx['name']; ?></a>
				<span>
				</span>
				</li>

	<?php  endforeach; $ln++; unset($ln); ?>
	<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #D80000;text-align:center"><b>This Tag</b></div>';}?>
			</ul>
			<!-- 下拉详细列表具体分类 -->
		 <!-- 	<div class="yMenuListCon">
		 	</div> -->
		</div>
		<ul class="yMenuIndex">
			
		<li><a href="<?php echo G_WEB_PATH; ?>" class="yMenua">首页</a><em>/</em></li>
		<li><?php echo Getheader('index'); ?><em></em></li>
		<li class="hide-menu-nav" style="padding: 0 13px 0px 15px;">
		<!--<span></span><a href="#" class="hide-menu-nava">发现</a>
		<dl>
		<dd><a href="<?php echo WEB_PATH; ?>/group" target="_blank">云粉社区</a></dd>
	    <dd style="border-top:1px solid #ddd;"><a href="<?php echo WEB_PATH; ?>/member/lottery" target="_blank">下单抽奖</a></dd>
		<dd style="border-top:1px solid #ddd;"><a href="#" target="_blank">自定义菜单</a></dd>
		<dd style="border-top:1px solid #ddd;"><a href="#" target="_blank">自定义菜单</a></dd>
		<dd style="border-top:1px solid #ddd;"><a href="#" target="_blank">自定义菜单</a></dd>
		<dd style="border-top:1px solid #ddd;"><a href="#" target="_blank">自定义菜单</a></dd>-->
		</dl>
		</li>
		</ul>
	</div>
</div>                                          
<!-- 导航   end  -->
<div style="clear:both;"></div>















<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/register.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/color.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/css.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/mycart.css"/>



<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/cloud-zoom.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.webox.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cartlist.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/koala.min.1.5.js"></script>

 <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('<?php echo G_TEMPLATES_JS; ?>/Bottom.js?v=' + GetVerNum());
 </script>
 <script>
$("body").attr('class','lottery');
</script>