<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <title>个人资料修改 触屏版</title>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css?v=130715" rel="stylesheet" type="text/css" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/password.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/news/layui/css/layui.css" id="layuicss-layer">
 <!--   <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/news/switchery.css" id="layuicss-layer">-->
    <link href="<?php echo G_TEMPLATES_CSS; ?>/switchery.css" rel="stylesheet">
    <script src="<?php echo G_TEMPLATES_JS; ?>/switchery.js"></script>
</head>
 <style type="text/css">
 * {
    webkit-tap-highlight-color:rgba(0,0,0,0);
    outline:none 0
}
.index-mem {
    margin:2.9rem auto 0;
    background-color:#f7f7f7;
}
body {
    min-width:320px;
    font-size:12px;
    font-family:'microsoft yahei',Verdana,Arial,Helvetica,sans-serif;
    -webkit-text-size-adjust:none;
}
body,button,dd,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,input,legend,li,ol,p,select,table,td,textarea,th,ul {
    margin:0;
    padding:0;
}
.m_myInfo dt {
    padding:15px 10px;
    position:relative;
}
a {
    color:#000;
    text-decoration:none;
}
.m_myInfo dt img {
    float:left;
    width:52px;
    height:52px;
    border-radius:52px;
    overflow:hidden;
}
fieldset,img {
    border:0;
}
.m_myInfo dt p {
    margin-left:60px;
    font-size:16px;
    line-height:22px;
    padding-top:3px;
}
.m_myInfo dt em.gray9 {
    word-wrap:break-word;
    word-break:normal;
}
.m_myInfo dt em {
    display:inline-block;
    font-size:12px;
}
.gray9 {
    color:#999;
}
address,em,i,cite,s {
    font-style:normal;
}
.m_myInfo dt cite {
    display:block;
    font-size:12px;
}
.m_myInfo dt span {
    margin-right:10px;
    color:#333;
}
.z-class-icon01,.z-class-icon02,.z-class-icon03,.z-class-icon04,.z-class-icon05,.z-class-icon06,.z-class-icon07 {
    display:inline-block;
    position:relative;
    padding-left:15px;
    padding-right:5px;
    line-height:20px !important;
    color:#666;
}
.z-class-icon01 em {
    color:#f60;
}
.z-class-icon01 s {
    background-position:0 0;
}
.z-class-icon01 s,.z-class-icon02 s,.z-class-icon03 s,.z-class-icon04 s,.z-class-icon05 s,.z-class-icon06 s,.z-class-icon07 s {
    position:absolute;
    width:13px;
    height:13px;
    display:inline-block;
    top:4px;
    left:0;
}
.z-class-icon01 s,.z-class-icon02 s,.z-class-icon03 s,.z-class-icon04 s,.z-class-icon05 s,.z-class-icon06 s,.z-class-icon07 s,.binSuccess span.grade em {
    background:url(http://mskin.1yyg.com/v1/weixin/images/new-class-icon.png?v=130823);
    background-size:102px auto;
}
.z-class-icon01,.z-class-icon02,.z-class-icon03,.z-class-icon04,.z-class-icon05,.z-class-icon06,.z-class-icon07 {
    line-height:20px !important;
    color:#666;
}
.m_myInfo dd {
    text-align:left;
    background-color:#fff;
    padding:0 10px 0 0;
    border-top:1px solid #dedede;
    border-bottom:1px solid #dedede;
}
.m_myInfo dd b {
    float:left;
    text-align:center;
    line-height:11px;
    width:35%;
    border-right:1px solid #e6e6e6;
}
h1,h2,h3,h4,h5,b {
    font-weight:normal;
}
.m_myInfo dd b a {
    padding:15px 0;
    display:block;
    color:#bbb;
}
.clearfix::after {
    content:"";
    display:block;
    height:0;
    clear:both;
}
.m_myInfo dd em {
    display:block;
    font-size:16px;
    margin-bottom:8px;
}
.orange {
    color:#f60;
}
.m_myInfo dd em i {
    font-family:"微软雅黑";
}
.m_myInfo dd .orangeBtn {
    float:right;
    width:82px;
    height:30px;
    line-height:30px;
    display:block;
    text-align:center;
    color:#fff;
    font-size:14px;
    margin-top:15px;
}
.orangeBtn {
    background:#f60;
    color:#fff;
}
.orangeBtn,.grayBtn,.whiteBtn {
    text-align:center;
    border-radius:5px;
}
.sub_nav {
    clear:both;
    width:100%;
    background-color:#f7f7f7;
}
.marginB {
    margin-bottom:15px;
}
.sub_nav a {
    display:block;
    line-height:48px;
    color:#333;
    font-size:16px;
    padding:0 10px 0 13px;
    border-top:1px solid #dedede;
    border-bottom:1px solid #dedede;
    margin-top:-1px;
    background-color:#fff;
    position:relative;
}
.sub_nav i {
    display:block;
    position:relative;
    top:16px;
}
.sub_nav i {
    background:url(http://mskin.1yyg.com/v1/weixin/Member/Images/m_set.png?v=150119);
    background-size:20px auto;
}
.sub_nav i {
    float:right;
    background-position:0 -70px;
    width:7px;
    height:13px;
    top:18px;
}
.always-set span {
    float:right;
}
.always-set span img {
    padding:5px;
    height:40px;
}
.file {
    position:relative;
}
.file input {
    position:absolute;
    width:100%;
    height:100%;
    right:0;
    top:0;
    opacity:0;
}
#secret_node {
    display:none;
}
#secret_node.active {
    display:block;
}
#secret_node a {
    padding-left:30px;
}
.ios-switch {
    float:right;
}
.ios-switch span {
    box-sizing:border-box;
}
.sub_nav_content {
    font-size:12px;
    color:#666;
    margin-right:8px;
}
.useroutm {
    margin-top:15px;
}
.useroutm a {
    width:85%;
    display:block;
    overflow:hidden;
    height:38px;
    line-height:38px;
    text-align:center;
    color:#F60;
    font-size:18px;
    background:#fff;
    margin:5px auto 20px;
    letter-spacing:.05rem;
    border:1px solid #F60;
    border-radius:5px;
}
</style>
<body>
<div class="h5-1yyg-v11"> 
<!-- 栏目页面顶部 -->
<!-- 内页顶部 -->
  <body class="index-mem">
    <div class="sub_nav marginB">
      <a href="<?php echo WEB_PATH; ?>/mobile/user/nickname" class="always-set">昵称
        <i></i>
        <span class="sub_nav_content"><?php echo get_user_name($member['uid']); ?></span></a>
      <a href="<?php echo WEB_PATH; ?>/mobile/user/headimg" class="always-set file">头像
        <i></i>
        <span>
          <img id="userimg" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($member['uid'],'img'); ?>" border="0/"></span>
        <!-- <input type="file" name="files[]" id="touimg"> --></a>
      <a href="<?php echo WEB_PATH; ?>/mobile/user/password" class="always-set">修改密码</a>
      <a href="#" class="always-set">修改安全密码</a></div>
    <div class="sub_nav marginB">
      <a target="#secret_node" role="tab" class="always-set">隐私设置
        <i></i>
        <!--<span class="sub_nav_content">个人主页购买信息是否公开</span>--></a>
      <div id="secret_node" class="active">
        <a>享购记录
        	
          <div class="ios-switch" id="iosSwitchOne">
            <label class="sub_nav_content" >所有人可见</label>
            <?php 
              if($member['is_xgjl'] == 1){
                echo '<input class="js-switch" type="checkbox" checked id="ios-switch1">';
              }else{
                echo '<input class="js-switch" type="checkbox" id="ios-switch1">';
              }
             ?>
           
          </div>
        </a>
        <a>获得商品
          <div class="ios-switch" id="iosSwitchtwo">
            <label class="sub_nav_content" >所有人可见</label>
              <?php 
                  if($member['is_hdsp'] == 1){
                    echo '<input  class="js-switch" type="checkbox" id="ios-switch2" checked  data-switchery="true" >';
                  }else{
                    echo '<input  class="js-switch" type="checkbox" id="ios-switch2"  data-switchery="true" >';
                  }
               ?>

          </div>
        </a>
        <!--<a>切换登录方式-->
          <!--<div class="ios-switch" id="iosSwitchThree">-->
            <!--<label class="sub_nav_content" >短信/密码登录</label>-->
            <!--<input  class="js-switch" type="checkbox" id="ios-switch3"   data-switchery="true" >-->
           <!---->
          <!--</div>-->
        <!--</a>-->
      </div>
      <div class="useroutm">
        <a id="btnLogout" href="<?php echo WEB_PATH; ?>/mobile/user/cook_end">退出登录</a></div>
    </div>
	
	
	<script>
	$(function(){
		var switchery0 = null,switchery1 = null,switchery2 = null;
		var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
		elems.forEach(function(html,i) {
		  
		  var switchery = new Switchery(html, { 'disabled': 'true' });	
		  if(i==0){
		  	 switchery0 = switchery
		  }else if(i==1){
		  	switchery1 = switchery
		  }else{
		  		switchery2 = switchery
		  }
		});
		$('#iosSwitchOne .switchery').on('click',function(){//享购纪录
			var dom =  $(this).parent().find('input')
			var status = dom.attr('checked');
			if(status=='checked'){//代表当前被选中
				dom.removeAttr('checked')
                $.ajax({
                    url: "/mobile/user/changeXgjl/0",
                    type: "get",
                    dataType: "json",
                    success:function(data){
                        console.log(data);
                    }
                });
				
			}else{//代表当前是没选中的
				dom.attr('checked','checked')
                $.ajax({
                    url: "/mobile/user/changeXgjl/1",
                    type: "get",
                    dataType: "json",
                    success:function(data){
                        console.log(data);
                    }
                });
			}
		})
		
		
		$('#iosSwitchtwo .switchery').on('click',function(){//获得商品
			var dom =  $(this).parent().find('input')
			var status = dom.attr('checked');

			if(status=='checked'){//代表当前被选中
				dom.removeAttr('checked')
                $.ajax({
                    url: "/mobile/user/changeHdsp/0",
                    type: "get",
                    dataType: "json",
                    success:function(data){
                        console.log(data);
                    }
                });
				
			}else{//代表当前是没选中的
				dom.attr('checked','checked')
                $.ajax({
                    url: "/mobile/user/changeHdsp/1",
                    type: "get",
                    dataType: "json",
                    success:function(data){
                        console.log(data);
                    }
                });
			}
		})
		$('#iosSwitchThree .switchery').on('click',function(){//切换登录方式
			var dom =  $(this).parent().find('input')
			var status = dom.attr('checked');
			if(status=='checked'){//代表当前被选中
				dom.removeAttr('checked')
				alert('1111')
				
			}else{//代表当前是没选中的
				dom.attr('checked','checked')
			alert('222')
			}
		})
		
	})
		
		//Switchery.js
		//享购记录
//		var elem = document.querySelector('.js-switch');
//		var init = new Switchery(elem);
//		
//		//获得商品
//		var elem2 = document.querySelector('.js-switch2');
//		var init2 = new Switchery(elem2);
//		//切换登录方式
//		var elem3 = document.querySelector('.js-switch3');
//		var init3 = new Switchery(elem3);
	</script>
 <!-- <header class="g-header">
        <div class="head-l">
	        <a href="javascript:;" onclick="history.go(-1)" class="z-HReturn"><s></s><b>返回</b></a>
        </div>
        <h2>资料修改</h2>
        <div class="head-r">
	        <a href="<?php echo WEB_PATH; ?>/mobile/mobile" class="z-Home"></a>
        </div>
    </header>
<div class="main-content clearfix">

<section>
<div class="registerCon">
<ul class="form">
<li>
<input name="username" type="text" placeholder="请输入昵称" value="" style="padding-left: 50px;">
<span style="border: none;height: 34px;width: 50px;background-position: 0 -25px;position: absolute;top: 12px;left: 5px;">昵称：</span>
</li>
<li>
<input name="qianming" type="text" placeholder="请输入签名" value="" style="padding-left: 50px;">
<span style="border: none;height: 34px;width: 50px;background-position: 0 -25px;position: absolute;top: 12px;left: 5px;">签名：</span>
</li>
<li>
    <p>绑定QQ登录：&nbsp;&nbsp;<?php if($qqinfo['b_code']): ?>已经绑定！ <?php  else: ?><a href="<?php echo WEB_PATH; ?>/api/qqlogin">点击去绑定</a> <?php endif; ?></</p>
</li>
<li>
    <p>绑定微信登录：&nbsp;&nbsp;<?php if($wxinfo['b_code']): ?>已经绑定！<?php  else: ?><a href="<?php echo WEB_PATH; ?>/mobile/user/wxinit">点击去绑定</a> <?php endif; ?></p>
</li>
<li>
    <p>提示：(请在微信里面进行绑定，如在微信端外会报错哦！)</p>
</li>


<a href="javascript:;" id="btnSave" class="nextBtn orgBtn">保存</a>
</li>
</ul>
</div>
</section>  -->
<script>
$(function(){
var b = function() {
var submiting = false;
var $username = $('input[name=username]');
var $qianming = $('input[name=qianming]');
$('#btnSave').click(function(){
if (submiting) {
return false;
}
var post = {
username : $username.val(),
qianming : $qianming.val()
};
if ( post.username == '' ) {
$.PageDialog.fail("昵称不能为空哦");
return false;
}
if ( post.qianming == '' ) {
$.PageDialog.fail("签名不能为空哦");
return false;
}
var the = $(this).text('正在提交');
submiting = true;
$.post("<?php echo WEB_PATH; ?>/mobile/user/profilechange",post,function(s){
if (s==1) {
$.PageDialog.ok('保存成功！', function(){
window.location.href="<?php echo WEB_PATH; ?>/mobile/home";
});
} else {
submiting = false;
the.text('保存');
$.PageDialog.fail(s);
}
},'text');
});
};
var a = function() {
Base.getScript(Path.Skin + "/js/mobile/pageDialog.js", b);
};
Base.getScript(Path.Skin + "/js/mobile/Comm.js", a);
});
</script>

</div>
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  Path.imgpath = "<?php echo G_WEB_PATH; ?>/statics";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js?v='+GetVerNum());
</script>
 
</div>

</body></html>