<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>

<!DOCTYPE html>
<html>
<head><title>
	帐户充值 - <?php echo $webname; ?>触屏版
</title>
<meta content="app-id=518966501" name="apple-itunes-app" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css?v=130715" rel="stylesheet" type="text/css" />
      <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/member.css?v=130726" rel="stylesheet" type="text/css" />
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
<script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/recharge.js" language="javascript" type="text/javascript"></script>
 <link href="<?php echo G_TEMPLATES_CSS; ?>/news/invite.css" rel="stylesheet" type="text/css">
      <script src="<?php echo G_TEMPLATES_CSS; ?>/news/layer/layer.js" language="javascript" type="text/javascript"></script>
</head>
<body>
<div class="h5-1yyg-v1" id="loadingPicBlock">
 <!--    <section class="clearfix">
        <div class="R-content">
            <div class="subMenu">
                <a class="" data-show="divSQTX" data-hide="divSQCZ" href="<?php echo WEB_PATH; ?>/mobile/invite/cashout">申请提现</a>
                <a data-show="divSQCZ" data-hide="divSQTX" class="current">充值到账户</a>
            </div>

            <div class="total">
                <div class="acct"><span class="title">收入</span>&nbsp;&nbsp;<span class="orange"><?php echo $cashouthdtotal; ?>元</span>
                </div>
                <div class="acct"><span class="title">余额</span>&nbsp;&nbsp;<span class="orange"><?php echo $member['money']; ?>元</span>
                </div>
                <div class="acct no-bottom"><span class="title">提现审核</span>&nbsp;&nbsp;<span class="orange">0元</span></div>
                <div class="acct no-bottom"><a class="block" href="<?php echo WEB_PATH; ?>/mobile/invite/record"><span class="orange">提现记录</span></a></div>
            </div>
           
            <div id="divSQCZ" class="Apply-con recharge">
                <form name="form2" action="<?php echo WEB_PATH; ?>/mobile/cart/addmoney" method="post">
                    <dl>
                        <dt>充值金额</dt>
                        <dd style="margin: 0 auto"><input id="txtCZMoney" name="txtCZMoney" type="tel" onkeyup="value=value.replace(/\D/g,&#39;&#39;)" class="input-txt inp-money txtAri" value="" placeholder="请输入大于1的金额">
                        </dd>
                    </dl>

                    <div class="Apply-button">
                        <input type="submit" name="submit2" id="btnSQCZ" class="bluebut" title="充值" value="充值">
                    </div>
                </form>
            </div>
        </div>
    </section> -->
<!-- 栏目页面顶部 -->

<!-- 内页顶部 -->

 <!--   <header class="g-header">
        <div class="head-l">
	        <a href="javascript:;" onclick="history.go(-1)" class="z-HReturn"><s></s><b>返回</b></a>
        </div>
        <h2>帐户充值</h2>
        <div class="head-r">
	        <a href="<?php echo WEB_PATH; ?>/mobile/home/userbalance" class="z-RCornerBtn"><i></i>帐户明细</a>
        </div>
    </header> -->

    <div class="g-Total gray9">您的当前余额：<span class="orange arial"><?php echo $member['money']; ?></span>元 <a style="width:100px;height: 30px;font-size:14px;color:#f60;line-height:30px;border-radius: 5px; text-align: center;float: right; border:1px solid #f60;display: block;padding: 0px 5px; " href="<?php echo WEB_PATH; ?>/mobile/invite/cashoutrecharge">佣金转余额</a></div>    
    <section class="clearfix g-member">
        <div class="g-Recharge">
	        <ul id="ulOption">
		        <li money="20"><a href="javascript:;" class="z-sel">20元<s></s></a></li>
		        <li money="50"><a href="javascript:;">50元<s></s></a></li>
		        <li money="100"><a href="javascript:;">100元<s></s></a></li>
		        <li money="200"><a href="javascript:;">200元<s></s></a></li>
		        <li money="500"><a href="javascript:;">500元<s></s></a></li>
		        <li>
		            <b>
		                <input type="text" class="z-init" placeholder="输入金额" maxlength="8" />
		                <s></s>
		            </b>
		        </li>
	        </ul>
	    </div>
	    <article class="clearfix mt10 m-round g-pay-ment g-bank-ct">
	        <ul id="ulBankList">
			     <li class="gray6">选择平台充值<em class="orange">20.00</em>元</li>
			<?php $ln=1;if(is_array($paylist)) foreach($paylist AS $pay): ?>
			     <li class="gray9" urm="<?php echo $pay['pay_id']; ?>">
			         <i class="z-bank-Round"><s></s></i><?php echo $pay['pay_name']; ?>
			     </li>
			<?php  endforeach; $ln++; unset($ln); ?>
		    </ul>
	    </article>
	    <div class="mt10 f-Recharge-btn">
			<a id="alertKefu" href="javascript:;" class="orgBtn" style="background: #cccccc; border-color: #cccccc;">点击加客服充值（充100送1，100起送）</a><br>
		    <a id="btnSubmit" href="javascript:;" class="orgBtn">确认充值</a>
	    </div>
	  <!--   <div class="mt10 f-Recharge-btn">
		    <a id="btnSubmit" href="<?php echo WEB_PATH; ?>/mobile/autolottery" class="orgBtn">我有充值卡</a>
	    </div> -->
    </section> 

<?php include templates("mobile/index","footer");?>

	<div id="forever_url" style="display: none;"><div class="main"><img id="i_img" src="/statics/templates/mowov9mb1/img/forever_chongzhikefu.jpg" alt="永久网址" width="100%" height="auto"></div><p id="for_url_close" class="close">✕</p></div>
	<script>
		$('#alertKefu').click(function(){
            $("#forever_url").show();
		});

        $("#for_url_close").click(function () {
            $("#forever_url").hide();
        });
        $("#i_img").click(function (e) {
            e.stopPropagation();
        });
        $("#forever_url").click(function () {
            $("#forever_url").hide();
        });
	</script>

<script language="javascript" type="text/javascript">
    var Path = new Object();
    Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";
    Path.Webpath = "<?php echo WEB_PATH; ?>";

    var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
    function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
    Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js?v='+GetVerNum());
</script>

</div>

<style>
	#forever_url{display:none;position:fixed;width:100%;height:100%;left:0;top:0;background:rgba(0,0,0,.79);z-index:111}#forever_url .main{width:12rem;height:auto;margin:8rem auto 0;border-radius:10px;box-sizing:border-box;overflow:hidden}#forever_url .main img{vertical-align:middle}#forever_url p.close{position:absolute;width:2rem;height:2rem;top:25rem;left:calc(50% - 1rem);margin:0 auto;color:#333;font-size:1.8rem;line-height:2rem;text-align:center;background:#FFF;border-radius:50%}
</style>

</body>
</html>
