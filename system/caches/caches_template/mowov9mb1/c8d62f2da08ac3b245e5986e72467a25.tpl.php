<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
<head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" /><title>
	最新揭晓 - <?php echo $webname; ?>触屏版
</title><meta content="app-id=518966501" name="apple-itunes-app" /><meta content="yes" name="apple-mobile-web-app-capable" /><meta content="black" name="apple-mobile-web-app-status-bar-style" /><meta content="telephone=no" name="format-detection" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
<!-- <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/lottery.css" rel="stylesheet" type="text/css" /> -->
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
 <script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/Lottery.js" language="javascript" type="text/javascript"></script> 
 <link href="<?php echo G_TEMPLATES_CSS; ?>/news/lottery.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="h5-1yyg-v1" id="loadingPicBlock">
    
<!-- 栏目页面顶部 

<header class="g-header">
       
        <h2>最新揭晓</h2>
       
    </header>-->
<!-- <section class="revealed"> 
 <div id="divLottery" class="revCon">
     <ul class="rNow rFirst" id="4827263">
      <li class="revConL "><img src="./最新揭晓_files/5986e61289eb2.jpg@!thumb_200_200" /><span>第219期</span></li>
      <li class="revConR"><h4>中国黄金 投资金条 Au9999 2g（款式随机）</h4><h5>价值：￥676.00</h5><p name="pTime">揭晓倒计时 <strong><em>00</em> : <em>27</em> : <em>9</em><em>8</em></strong></p><b class="fr z-arrow"></b></li>
      <div class="rNowTitle">
       正在揭晓
      </div>
     </ul>
     <ul class="" id="4827251">
      <li class="revConL "><img src="./最新揭晓_files/5ba4aba592e53.png@!thumb_200_200" /><span>第134期</span></li>
      <li class="revConR">
       <dl>
        <dd>
         <img src="./最新揭晓_files/logo_an.png" />
        </dd>
        <dd>
         获得者：
         <em class="blue">对我要中奖</em>
         <br />本期：
         <em class="orange arial">278</em>人次
        </dd>
       </dl>
       <dt>
        幸运码：
        <em class="orange arial">10007801</em>
        <br />揭晓时间：
        <em class="c9 arial">2018-11-19 21:43:09</em>
       </dt><b class="fr z-arrow"></b></li>
     </ul>
  </div>
</section> -->
<!-- 内页顶部 -->

   <section class="revealed">
	    <div id="divLottery" class="revCon">
            <div id="divLotteryLoading" class="loading"><b></b>正在加载</div>
            <a id="btnLoadMore" class="loading" href="javascript:;" style="display:none;">点击加载更多</a>
        </div>
    </section> 
    
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  Path.path = "<?php echo G_WEB_PATH; ?>";
  Path.imgpath = "<?php echo G_WEB_PATH; ?>/statics";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js?v='+GetVerNum());
</script>

</div>


</body>
</html>
