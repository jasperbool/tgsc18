<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <title>密码修改 触屏版</title>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css?v=130715" rel="stylesheet" type="text/css" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/password.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
</head>
<body>
<div class="h5-1yyg-v11">
    
<!-- 栏目页面顶部 -->
<!-- 内页顶部 -->

<!--     <header class="g-header">
        <div class="head-l">
	        <a href="javascript:;" onclick="history.go(-1)" class="z-HReturn"><s></s><b>返回</b></a>
        </div>
        <h2>密码修改</h2>
        <div class="head-r">
	        <a href="<?php echo WEB_PATH; ?>/mobile/mobile" class="z-Home"></a>
        </div>
    </header> -->
<div class="main-content clearfix">
<section>
<div class="registerCon">
<ul class="form">
<li>
如果您还没有设置过密码，请使用初始密码: 123456
</li>
<li>
<input name="pwd1" type="password" placeholder="请输入原密码" value="" style="padding-left: 60px;">
<span style="border: none;height: 34px;width: 60px;background-position: 0 -25px;position: absolute;top: 12px;left: 5px;">原密码：</span>
</li>
<li>
<input name="pwd2" type="password" placeholder="请输入新密码" value="" style="padding-left: 60px;">
<span style="border: none;height: 34px;width: 60px;background-position: 0 -25px;position: absolute;top: 12px;left: 5px;">新密码：</span>
</li>
<li>
<input name="pwd3" type="password" placeholder="请重复输入新密码" value="" style="padding-left: 60px;">
<span style="border: none;height: 34px;width: 60px;background-position: 0 -25px;position: absolute;top: 12px;left: 5px;">新密码：</span>
</li>
<li>
<a href="javascript:;" id="btnSave" class="nextBtn orgBtn">修改</a>
</li>
</ul>
</div>
</section>
<script>
$(function(){
var b = function() {
var submiting = false;
var pwd1 = $('input[name=pwd1]');
var pwd2 = $('input[name=pwd2]');
var pwd3 = $('input[name=pwd3]');
$('#btnSave').click(function(){
if (submiting) {
return false;
}
var post = {
pwd1 : pwd1.val(),
pwd2 : pwd2.val(),
pwd3 : pwd3.val()
};
if ( post.pwd1 == '' ) {
$.PageDialog.fail("原密码不能为空哦");
return false;
}
if ( post.pwd2 == '' ) {
$.PageDialog.fail("新密码不能为空哦");
return false;
}
if ( post.pwd2 != post.pwd3 ) {
$.PageDialog.fail("两次新密码输入不一致哦");
return false;
}
if ( post.pwd2.length < 6 || post.pwd2.length > 20) {
$.PageDialog.fail("密码长度为6-20个字符！");
return false;
}
var the = $(this).text('正在提交');
submiting = true;
$.post("<?php echo WEB_PATH; ?>/mobile/user/userpassword",post,function(s){
if (s=='ok') {
$.PageDialog.ok('修改成功！', function(){
window.location.href="<?php echo WEB_PATH; ?>/mobile/home";
});
} else {
submiting = false;
the.text('修改');
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


<script>
(function() {
if (!$){
return;
}
var bb = 80;
var b = $("#btnTop");
if ($(window).scrollTop() == bb) {
b.hide()
}
b.css("zIndex", "99").click(function() {
$("body,html").animate({
scrollTop: 0
},300);
});
$(window).scroll(function() {
if ($(this).scrollTop() > bb) {
b.fadeIn();
} else {
b.fadeOut();
}
});
})();
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