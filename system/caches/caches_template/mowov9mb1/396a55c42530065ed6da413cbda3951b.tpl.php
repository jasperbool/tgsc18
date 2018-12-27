<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="apple-touch-icon" href="/images/touch-icon.png?v=123456"/>
    <link href="<?php echo WEB_PATH; ?>/statics/templates/mowov9mb1/css/mobile3/comm.css?180914" rel="stylesheet" type="text/css" />
    <script src="<?php echo G_TEMPLATES_STYLE; ?>/js/mobile3/jquery-1.9.1.min.js" language="javascript" type="text/javascript"></script><script src="<?php echo G_TEMPLATES_STYLE; ?>/js/mobile3/pageDialog.js" language="javascript" type="text/javascript"></script>
	<script src="/statics/templates/mowov9mb1/js/mobile3/gt.js"></script>
	<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/top.css">
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css?v=130715" rel="stylesheet" type="text/css" />
	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
<style type="text/css">
    * {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        outline: none 0
    }

    .gray3 {
        color: #333;
    }

    .index-mem {
        max-width: 640px;
        margin: 0 auto;
        background-color: #FFF;
    }

    body {
        min-width: 320px;
        font-size: 12px;
        font-family: 'microsoft yahei', Verdana, Arial, Helvetica, sans-serif;
        -webkit-text-size-adjust: none;
    }

    body,
    button,
    dd,
    dl,
    dt,
    fieldset,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    input,
    legend,
    li,
    ol,
    p,
    select,
    table,
    td,
    textarea,
    th,
    ul {
        margin: 0;
        padding: 0;
    }

    .m_myInfo {
        /*margin-bottom: 5px;*/
        background: transparent url('/statics/templates/mowov9mb1/img/notice_bg.jpg') no-repeat fixed center top / cover;
    }
    .m_myInfo dt {
        padding: 15px 10px;
        position: relative;
        min-height: 60px;
    }

    .m_myInfo .bottom {
        width: 100%;
        height: 3rem;
        line-height: 3rem;
        font-size: 1rem;
    }

    .m_myInfo .bottom li:not(:last-child)::before {
        /*border-right: 1px solid #FFF;*/
        content: '';
        display: block;
        position: absolute;
        width: 1px;
        height: 1rem;
        right: 0;
        top: 1rem;
        background: rgba(255,255,255,.5);
        overflow: hidden;
    }

    .m_myInfo .bottom li {
        position: relative;
        float: left;
        width: calc(100% / 3);
        letter-spacing: 1px;
        background: transparent;
        box-sizing: border-box;
        cursor: pointer;
        overflow: hidden;
        z-index: 1;
    }

    .m_myInfo .bottom li::after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: -5rem;
        background: transparent url('/statics/templates/mowov9mb1/img/notice_bg.jpg') no-repeat fixed center top / cover;
        -webkit-filter: blur(30px);
        z-index: -1;
    }

    .m_myInfo .bottom li a {
        display: block;
        color: #fff;
        font-size: 16px;
        text-align: center;
    }

    .m_myInfo dt img {
        float: left;
        width: 52px;
        height: 52px;
        border-radius: 70px;
        overflow: hidden;
        margin-top: 15px;
    }

    fieldset,
    img {
        border: 0;
    }

    .m_myInfo dt p {
        font-size: 18px;
        line-height: 22px;
        padding-top: 3px;
        display: inline-block;
        margin-left:10px;
        color: #fff;
    }

    .m_myInfo dt em.gray9 {
        word-wrap: break-word;
        word-break: normal;
    }

    .m_myInfo dt em {
        display: inline-block;
        font-size: 12px;
    }
    .m_myInfo .exchange{
        width: 60px;
        height: 30px;
        background: #f60;
        border: none;
        text-align: center;
        line-height: 30px;
        color: #fff;
        border-radius: 6px;
        float: right;
        margin-top: 16px;
        font-size: 14px;
        cursor: pointer;
    }

    .gray9 {
        color: #999;
    }

    address,
    em,
    i,
    cite,
    s {
        font-style: normal;
    }

    .m_myInfo dt cite {
        display: block;
        font-size: 12px;
    }

    .m_myInfo dt span {
        color: #333;
    }
    .m_myInfo .info {
        font-size: 12px;
        color: #fff;
    }
    .m_myInfo .info:first-child {
        padding-right: 4px;
    }
    .m_myInfo .info em {
        color: #fff;
        font-size: 13px;
        font-weight: bold;
    }

    .z-class-icon01 s,
    .z-class-icon02 s,
    .z-class-icon03 s,
    .z-class-icon04 s,
    .z-class-icon05 s,
    .z-class-icon06 s,
    .z-class-icon07 s {
        position: absolute;
        width: 13px;
        height: 13px;
        display: inline-block;
        top: 4px;
        left: 0;
    }

    .z-class-icon01 s,
    .z-class-icon02 s,
    .z-class-icon03 s,
    .z-class-icon04 s,
    .z-class-icon05 s,
    .z-class-icon06 s,
    .z-class-icon07 s,
    .binSuccess span.grade em {
        background: url(/statics/templates/mowov9mb1/img/new-class-icon.png?v=130823);
        background-size: 102px auto;
    }

    .z-class-icon01,
    .z-class-icon02,
    .z-class-icon03,
    .z-class-icon04,
    .z-class-icon05,
    .z-class-icon06,
    .z-class-icon07 {
        line-height: 20px !important;
        color: #666;
    }
    .z-class-icon01 s {
        background-position: 0 0;
    }
    .z-class-icon02 s {
        background-position: -17px 0;
    }
    .z-class-icon03 s {
        background-position: -34px 0;
    }
    .z-class-icon04 s {
        background-position: -51px 0;
    }
    .z-class-icon05 s {
        background-position: -68px 0;
    }
    .z-class-icon06 s {
        background-position: -84px 0;
    }

    .m_myInfo dd {
        background-color: #fff;
        padding: 0 10px 0 0;
    }

    .m_myInfo dd b {
        float: left;
        text-align: center;
        line-height: 11px;
        width: 26%;
        margin-left: 6%;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    b {
        font-weight: normal;
    }

    .m_myInfo dd b a {
        display: block;
        color: #bbb;
        font-size: 11px;
        padding-top: 8px;
    }

    .clearfix::after {
        content: "";
        display: block;
        height: 0;
        clear: both;
    }
    .m_myInfo dd em {
        display: block;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .orange {
        color: #f60;
    }

    .m_myInfo dd em i {
        font-family: "微软雅黑";
    }

    .m_myInfo dd .orangeBtn {
        width: 70px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        text-align: center;
        color: #fff;
        font-size: 14px;
        margin: 5px;
        border-radius: 6px;
        letter-spacing: .1rem;
    }

    .orangeBtn {
        background: #f60;
        color: #fff;
    }

    .orangeBtn,
    .grayBtn,
    .whiteBtn {
        text-align: center;
        border-radius: 5px;
    }

    /*导航菜单开始*/
    .sub_nav s.m_s1 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_01.png);
    }

    .sub_nav s {
        width: 22px;
        height: 22px;
        background-size: 22px auto;
        margin-right: 6px;
    }
    .sub_nav i,
    .g-Recharge li s,
    .z-pay-mentsel,
    .shareCon p s,
    .pro_nav_wrap i,
    .edit-wrapper .s-icon,
    .m-set {
        background: url(/statics/templates/mowov9mb1/img/m_set.png?v=150119);
        background-size: 20px auto;
    }

    .m_myInfo dt .h-icon {
        background-image: url(/statics/templates/mowov9mb1/img/msg_logo.png);
        background-size: 70%;
        background-repeat: no-repeat;
        display: block;
        height: 40px;
        position: absolute;
        right: 10px;
        top: 2px;
        width: 40px;
        background-position: center;
    }
    .m_myInfo dt .h-icon em{
        display: block;
        background: #f60;
        padding: 1px;
        width: 20px;
        height: 20px;
        line-height: 20px;
        border-radius: 50%;
        color: #fff;
        position: absolute;
        top: -5px;
        right: -5px;
        font-family: Arial;
        text-align: center;
        font-size: 10px;
        overflow: hidden;
        display: none;
    }
    .m_myInfo .btngroup a {
        padding: 0;
    }

    .sub_nav i {
        float: right;
        background-position: 0 -70px;
        width: 7px;
        height: 13px;
        top: 18px;
    }

    .sub_nav s.m_s2 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_03.png);
    }

    .sub_nav s.m_s3 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_02.png);
    }

    .sub_nav s.m_s4 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_07.png);
    }

    .sub_nav s.m_s5 {
        background-position: 0 -229px;
    }

    .sub_nav s.m_s6 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_05.png);
    }

    .sub_nav s.m_s7 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_06.png);
    }

    .sub_nav s.m_s8 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_08.png);
    }

    .sub_nav s.m_s9 {
        background: url(/statics/templates/mowov9mb1/img/icon_09.png) no-repeat;
        background-position: 0 3px;
        background-size: 22px auto;
    }

    .sub_nav s.m_s10 {
        background-image: url(/statics/templates/mowov9mb1/img/icon_04.png);
    }
    .sub_nav s.m_s11 {
        background-image: url(/statics/templates/mowov9mb1/img/bm.png);
    }
    .sub_nav s.m_s12 {
        background-image: url(/statics/templates/mowov9mb1/img/apply.png);
    }
    .sub_nav s.m_s13 {
        background: url(/statics/templates/mowov9mb1/img/icon_13.png) no-repeat;
        background-position: 0 0px;
        background-size: 22px auto;
    }
    .sub_nav s.m_s14 {
        background-image: url("/statics/templates/mowov9mb1/img/logo.png");
    }

    .sub_nav a .orange {
        font-size: 12px;
        padding-left: 4px;
        position: relative;
        top: -1px;
    }

    .sub_nav em {
        float: right;
        color: #ff7c7e;
        font-size: 14px;
        letter-spacing: 2px;
        margin-right: .5rem;
        border-radius: 50%;
    }

    .orange {
        color: #f60;
    }

    .sub_nav .colorbbb {
        padding: 15px 0;
        text-align: center;
    }

    .colorbbb {
        color: #bbb;
    }
    .foot-copyright {
        color: #999;
        text-align: center;
    }

    .useroutm a {
        width: 85%;
        display: block;
        overflow: hidden;
        height: 38px;
        line-height: 38px;
        text-align: center;
        color: #fff;
        font-size: 18px;
        background: #F60;
        margin: 5px auto 20px;
        letter-spacing: .05rem;
        border-radius: 5px;
    }

    /*极验3.0*/
    #embed-captcha {
        width: 100%;
    }
    .geetest_holder.geetest_wind {
        width: 100% !important;
        height: 3rem !important;
        min-width: 256px !important;
    }
    .geetest_logo, .geetest_success_logo { /*隐藏极验官网链接*/
        display: none;
    }
    #wait {
        color: #F60;
        font-size: .8rem;
    }
    .show {
        display: block;
    }
    .hide {
        display: none;
    }
    /*end*/

    /*提示元素*/
    #notice, #notice * {
        box-sizing: border-box;
    }

    #notice {
        display: none;
        position: fixed;
        width: calc(100% - 4rem);
        height: auto;
        top: calc(50% - 3rem);
        left: 2rem;
        background: #FFF;
        text-align: center;
        letter-spacing: 1px;
        box-shadow: 0 0 15px #F60;
        border-radius: 3px;
        z-index: 111;
        overflow: hidden;
    }

    #notice dt, #notice dd {
        height: 3rem;
        line-height: 3rem;
        font-size: 1rem;
    }

    #notice dt {
        width: 100%;
        color: #F60;
    }

    #notice dd {
        float: left;
        width: 50%;
        border-top: 1px solid #F60;
    }

    #notice dd:first-of-type {
        border-right: 1px solid #F80;
    }

    #notice dd a {
        display: block;
        color: #F60;
    }

    #notice dd:first-of-type a {
        color: #666;
    }
    /*end*/
    .msg-num{
        float: right;
        display: none;
        background: #f60;
        padding: 1px;
        width: 20px;
        height: 20px;
        line-height: 20px;
        border-radius: 50%;
        color: #fff;
        font-family: Arial;
        text-align: center;
        font-size: 10px;
        overflow: hidden;
        margin-top: 14px;
        margin-right: 12px;
    }
    .vip{
        text-align: center;
        position: relative;
    }
    .vip:before{
        content: '';
        position: absolute;
        width: 18%;
        height: 1px;
        background: #f3e23f;
        left: 20%;
        top: 0;
        bottom: 0;
        margin: auto;
    }
    .vip:after{
        content: '';
        position: absolute;
        width: 18%;
        height: 1px;
        background: #f3e23f;
        right: 20%;
        top: 0;
        bottom: 0;
        margin: auto;
    }
    .vip img{
        width: 16%;
    }
    /*修改密码弹出层*/
    .showDanger .layui-layer-btn{
        display: flex;
        justify-content: space-between;
    }
    .showDanger .layui-layer-content{
        box-sizing: border-box;padding: 10px;
    }
    .showDanger .layui-layer-content p{
        font-weight: bold;
        font-size: 16px;
        text-indent:20px;
        color: #989898;
    }
    /*end*/

    .table_a{
        width: 100%;
    }
    .table_a td{
        width: 50%;
        text-align: center;
    }

    .box{
        display: flex;
        flex-direction: column;
    }
    .box .row{
        display: flex;
        border-bottom: 1px solid #F2F2F2;
    }
    .box .row a{
        flex-grow: 1;
        height: 48px;
        line-height: 48px;
        display: flex;
        justify-content: start;
        align-items: center;
        font-size: 14px;
        width: 50%;
        color: #4e4444;
        box-sizing: border-box;
        padding-left: 10%;
    }
    .box .row a:nth-child(1){
        border-right:1px solid #F2F2F2;;
    }
    .foot-service{
        font-size: 14px;
        color: #999;
        text-align: center;
        height: 48px;
        line-height: 48px;
    }
    .foot-service a{
        color: #F60;
    }
    #copyUrl{
        display: block;
        width: 100%;
        text-align: center;
        height: 48px;
        line-height: 48px;
        border-bottom: 1px solid #F2F2F2;
        font-size: 13px;
        color: #444444;
    }
    .userinfo{
        margin:4px 0;
    }
    .SVIP{
        position: absolute;
        top: -17px;
        left: 10px;
        overflow: hidden;
    }
    #photo1{
        z-index: 10;
    }
    .m_myInfo dt .SVIP img{
        width: 52px;
        height: 52px;
    }
</style>
</head>

<body class="index-mem">
<div class="m_myInfo">
    <dl>
        <dt>
        <a href="<?php echo WEB_PATH; ?>/mobile/user/profile" class="a_set_img"></a>
        <a href="<?php echo WEB_PATH; ?>/mobile/mobile/userindex/<?php echo $member['uid']; ?>"><img class="a_user_img" id="headPic" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($member['uid'],'img'); ?>"></a>
		<p class="a_account_p2" style="width: 70%;height: 30px;float: left;text-align: left;"><span id="userId" class="a_orange" style="color:#fff;font-size: 18px;" ><?php echo $member['mobile']; ?></span></br>
	    <p class="a_account_p2"> <span class="a_orange" id="nickname" style="color: #fff;font-size: 14px;">账号:<?php echo get_user_name($member['uid']); ?></span> <em>&nbsp;&nbsp;</em> <span class="a_account_p2"></span><span id="userId" class="a_orange" style="color: #fff;font-size: 14px;"> ID:<?php echo $member['uid']; ?></span>
		</br>
		<p class="a_account_p2">   <span class="a_orange" id="moneyTotal" style="color: #fff;font-size: 14px;">余额:<?php echo $member['money']; ?>元</span> <em>&nbsp;&nbsp;</em> <span class="a_orange" id="score" style="color: #fff;font-size: 14px;">积分:<?php echo $member['score']; ?></span>    
        </dt>

        <div class="bottom" style="clear: both;">
            <ul>
                <!--<li><a href="<?php echo WEB_PATH; ?>/mobile/invite/cashout">兑换</a></li>-->
                <li><a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist">兑换</a></li>
                <li><a href="<?php echo WEB_PATH; ?>/mobile/home/userrecharge">充值</a></li>
                <li><a href="<?php echo WEB_PATH; ?>/mobile/home/userqiandao">签到</a></li>
                            </ul>
        </div>
    </dl>
</div>
<!--获得的商品-->

<!--导航菜单-->
<a id="copyUrl" style="display: block;" data-clipboard-text="http://m.localhost" href="javascript:void(0)">官网:<span style="color: #F60;">http://m.tgsc18.com<!-- <?php echo WEB_PATH; ?> --> </span>请点击<span style="padding: 2px;border: 1px solid #F60;border-radius: 4px;color: #F60;margin: 0 4px;cursor: pointer;font-size: 14px;" onclick="sdta()">复制</span>保存</a>

<div class="sub_nav box">
    <div class="row">
        <a href="/mobile/home/invite"><s class="m_s6"></s><p>分享赚钱<span style="color: #f04900;font-size: 12px;">(6%)</span></p></a>
        <a href="/mobile/home/address"><s class="m_s3"></s>收货地址</a>
    </div>
    <div class="row">
        <a href="/mobile/home/orderlist"><s class="m_s2"></s>获得的商品</a>
        <a href="/mobile/home/userbuylist"><s class="m_s1"></s>参与记录</a>
    </div>
    <div class="row">
        <a href="/mobile/home/userbalance" class="always-set"><s class="m_s1"></s>账户明细</a>
        <a href="/mobile/home/singlelist"><s class="m_s4"></s>我的晒单</a>
    </div>
    <div class="row"> 
          <a href="/mobile/user/profile" class="always-set"><s class="m_s7"></s>客服咨询</a>
          <a href="/mobile/user/profile_one" class="always-set"><s class="m_s10"></s>账户设置</a>
      <!-- <?php echo WEB_PATH; ?>/mobile/user/cook_end -->
    </div>
    </div>
<div class="foot-service">客服:<a href="tel:13288068368" style="color:#F60">13288068368</a><span style="font-size: 12px;">(工作时间9:00-18:00)</span></div>


<div id="notice"></div>
<script type="text/javascript" src="<?php echo G_TEMPLATES_CSS; ?>/news/layer/layer.js"></script>
<script src="<?php echo G_TEMPLATES_CSS; ?>/news/clipboard.min.js"></script>
<script type="text/javascript">
   
    function sdta(){
        layer.msg("复制成功");
       var clipboard = new Clipboard('#copyUrl');    
        clipboard.on('success', function(e) {    
           // layer.msg("复制成功"); 
            e.clearSelection();    
            console.log(e.clearSelection);    
        });  
    };
   
</script>
<script>
    function app_event() {
        $("#btnLogout").attr("href", "/index.php/mobile/user/cook_end/ActionUserDel");
    }
</script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/mobile3/layer.js?v=20171007"></script>
<link href="<?php echo WEB_PATH; ?>/statics/templates/mowov9mb1/css/mobile3/layer.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_PATH; ?>/statics/templates/mowov9mb1/css/mobile3/message.css?18060601" rel="stylesheet" type="text/css"/>
<style>#forever_url{display:none;position:fixed;width:100%;height:100%;left:0;top:0;background:rgba(0,0,0,.79);z-index:111}#forever_url .main{width:12rem;height:auto;margin:8rem auto 0;border-radius:10px;box-sizing:border-box;overflow:hidden}#forever_url .main img{vertical-align:middle}#forever_url p.close{position:absolute;width:2rem;height:2rem;top:25rem;left:calc(50% - 1rem);margin:0 auto;color:#333;font-size:1.8rem;line-height:2rem;text-align:center;background:#FFF;border-radius:50%}
.msg-logo{vertical-align: text-bottom;  width: 20px; margin-right: 5px;}
.footer .u-ft-nav i {background: url(/statics/templates/mowov9mb1/img/footer_nav.png?v=20180622) no-repeat center/27px auto;}
.footer li.f_home a.hover .foot_1 {background-position: 0 -112px;}
.footer li.f_home .foot_1 {background-position: 0 -142px;}

.footer li.f_allgoods a.hover .foot_2 {background-position: 0 -222px;}
.footer li.f_allgoods .foot_2 {background-position: 0 -250px;}

.footer li.f_announced a.hover .foot_3 {background-position: 0 -169px;}
.footer li.f_announced .foot_3 {background-position: 0 -195px;}

.footer li.f_car a.hover .foot_4 {background-position: 0 1px;}
.footer li.f_car .foot_4 {background-position: 0 -28px;}

.footer li.f_personal a.hover .foot_5 {background-position: 0 -57px;}
.footer li.f_personal .foot_5 {background-position: 0 -83px;}
a[title='站长统计']{
    display: none;
}
</style>
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js');
</script>
 
</div>
</body>
</html>
