<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>﻿<!-- <footer class="footer">
	
	<p class="grayc">客服热线<span class="orange"><?php echo _cfg('cell'); ?></span></p>
	<p class="grayc"><?php echo _cfg('web_copyright'); ?></p>
	<a id="btnTop" href="javascript:;" class="z-top" style="display:none;"><b class="z-arrow"></b></a>	<br />	<br />
</footer> -->
<?php 
	$f_home = '';
	$f_whole = '';
	$f_jiexiao = '';
	$f_car = '';
	$f_personal = '';

	if( ROUTE_C == 'home' || ROUTE_C == 'user' ){
		$f_personal = 'hover';
	}else if( ROUTE_C == 'mobile' && ROUTE_A == 'init'){
		$f_home = 'hover';
	}else if( ROUTE_C == 'mobile' && ROUTE_A == 'glist'){
		$f_whole = 'hover';
	}else if( ROUTE_C == 'mobile' && ROUTE_A == 'lottery'){
		$f_jiexiao = 'hover';
	}else if( ROUTE_C == 'cart'){
		$f_car = 'hover';
	}
 ?>
<p>
	<br />
</p>
<p>
	<br />
</p>
<style>
.footerdi .f_home i.cur{
	background-position: 0 0 !important;
}
.footerdi .f_whole i.cur{
	background-position: 0 -52px !important;
}
.footerdi .f_jiexiao i.cur{
	background-position: 0 -222px !important;
}
.footerdi .f_car i.cur{
	background-position: 0 -105px !important;
}
.footerdi .f_personal i.cur{
	background-position: 0 -152px !important;
}
.u-ft-nav {
	clear: both;
	width: 100%;
	max-width: 640px;
	background: #f7f7f7;
	box-shadow: 0 0 10px 0 rgba(155,143,143,0.6);
	height: 52px;
	position: fixed;
	bottom: 0;
	z-index: 100;
}
.u-ft-nav a {
	display: block;
	float: left;
	width: 20%;
	height: 44px;
	padding-top: 4px;
	text-align: center;
	color: #666;
}
.u-ft-nav a:hover {
	text-decoration: none;
}
.u-ft-nav a.hover {
	color: #F60;
}
.u-ft-nav i {
	display: block;
	margin: 0 auto;
	height: 26px;
}
.u-ft-nav li.f_home a.hover i {
	background-position: 0 -107px;
}
.u-ft-nav li.f_home i {
	width: 26px;
	background-position: 0 -134px;
}
.u-ft-nav li.f_allgoods a.hover i {
	background-position: 0 -211px;
}
.u-ft-nav li.f_allgoods i {
	width: 23px;
	background-position: 0 -236px;
}
.u-ft-nav li.f_announced a.hover i {
	background-position: 0 -159px;
}
.u-ft-nav li.f_announced i {
	width: 23px;
	background-position: 0 -185px;
}
.u-ft-nav li.f_car a.hover i {
	background-position: 0 2px;
}
.u-ft-nav li.f_car i {
	width: 30px;
	background-position: 0 -26px;
}
.u-ft-nav li.f_car em {
	background: #F60;
}
.u-ft-nav li.f_personal a.hover i {
	background-position: 0 -55px;
}
.u-ft-nav li.f_personal i {
	width: 20px;
	background-position: 0 -80px;
}
.u-ft-nav li.f_personal em {
	/*background: #008AFF;*/
}
.u-ft-nav li i {
	position: relative;
}
.u-ft-nav li em {
	display: block;
	background: #f60;
	padding: 1px;
	width: 20px;
	height: 20px;
	line-height: 20px;
	border-radius: 50%;
	color: #fff;
	position: absolute;
	top: -10px;
	right: -12px;
	font-family: Arial;
	text-align: center;
	font-size: 10px;
	overflow: hidden;
}	
</style>
<style>
.u-ft-nav i {background: url(<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/footer_nav.png?v=20180622) no-repeat center/27px auto;}
.u-ft-nav li.f_home a.hover .foot_1 {background-position: 0 -112px;}
.u-ft-nav li.f_home .foot_1 {background-position: 0 -142px;}

.u-ft-nav li.f_allgoods a.hover .foot_2 {background-position: 0 -222px;}
.u-ft-nav li.f_allgoods .foot_2 {background-position: 0 -250px;}

.u-ft-nav li.f_announced a.hover .foot_3 {background-position: 0 -169px;}
.u-ft-nav li.f_announced .foot_3 {background-position: 0 -195px;}

.u-ft-nav li.f_car a.hover .foot_4 {background-position: 0 1px;}
.u-ft-nav li.f_car .foot_4 {background-position: 0 -28px;}

.u-ft-nav li.f_personal a.hover .foot_5 {background-position: 0 -57px;}
.u-ft-nav li.f_personal .foot_5 {background-position: 0 -83px;}
a[title='站长统计']{
    display: none;
}
</style>
<link rel="stylesheet" media="screen,projection,tv" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/header_footer.css">
   <!--S 底部导航 -->
     
   <div class="u-ft-nav">
        <ul>
            <li class="f_home"><a href="<?php echo WEB_PATH; ?>" class="<?php echo $f_home; ?>"><i class="foot_1"></i>首页</a></li>
            <li class="f_allgoods"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/0/s30/1"  class="<?php echo $f_whole; ?>"><i class="foot_2"></i>所有商品</a></li>
            <li class="f_announced"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/lottery"  class="<?php echo $f_jiexiao; ?>"><i class="foot_3"></i>最新揭晓</a></li>
            <li class="f_car"><a  href="<?php echo WEB_PATH; ?>/mobile/cart/cartlist"  class="<?php echo $f_car; ?>"><i class="foot_4" id="btnCart"></i>购物车</a></li>
            <li class="f_personal"><a href="<?php echo WEB_PATH; ?>/mobile/user/login" id="btnUser"  class="<?php echo $f_personal; ?>"><i class="foot_5"></i>我的<?php echo _cfg('web_name_two'); ?></a></li>
        </ul>
    </div> 

   <script type="text/javascript">
   	$(document).ready(function(){
   		console.log('12');
   			$.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/cartnum',function(data){
   				if(data.num > 0){
   					$("#btnCart").append('<em>'+data.num+'</em>');
   				}
			
		});
   	});
   
   </script>
    <!--E 底部导航 -->
