<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><div style="clear:both" > </div></div>
<div class="footer_change">
	<div class="footer">
	<ul class="footerIn">
				<li>
					<span style="display:block;background-position: -119px -70px;height: 46px;margin-top: 6px"></span>
					<p>100%公平公正公开</p>
				</li>
				<li>
					<span style="display:block;background-position: -119px -122px;margin-top: 4px;height: 48px;"></span>
					<p>100%品质保障</p>
				</li>
				<li>
					<span style="display:block;background-position: -193px -18px;margin-top: 7px;height: 43px;"></span>
					<p>全国免运费（港澳除外）</p>
				</li>
				<li>
					<span style="display:block;background-position: -193px -62px;"></span>
					<p>100%权益保障</p>
				</li>
			</ul>
		<div class="yFootSupport">
			<div class="yFootSupport_in">
				<div id="articleTypeList" style="float: left;">
		<?php $category=$this->DB()->GetList("select * from `@#_category` where `parentid`='13'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
		<?php $ln=1;if(is_array($category)) foreach($category AS $help): ?>
		   <dl>
		   	<dt><?php echo $help['name']; ?></dt>
			<?php $article=$this->DB()->GetList("select * from `@#_article` where `cateid`='$help[cateid]'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
			<?php 
			foreach($article as $art){
			echo "<dd><a href='".WEB_PATH.'/help/'.$art['id']."' target='_blank'>".$art['title'].'</a></dd>';}
			 ?>				
		 </dl>   			
			<?php  endforeach; $ln++; unset($ln); ?>
		           	 <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #D80000;text-align:center"><b>This Tag</b></div>';}?>

			
			</div>			
				<dl class="dl_Time">
					<dd title="服务热线" style="background:url(<?php echo G_TEMPLATES_IMAGE; ?>/phone.png) no-repeat 0px 5px;margin-top: 29px;"><?php echo _cfg('cell'); ?></dd>
					<dd title="服务器时间" style="background:url(<?php echo G_TEMPLATES_IMAGE; ?>/time.png) no-repeat 0px 6px;background-size:21px;margin-top: 15px;" id='pServerTime' class="sysTime"></dd>
					
				</dl>
				<dl class="dlLast">
					<a href="javascript:void(0);">
						<dd class="dlLast-WeChat">
							<div class="y-popover">
								<span class="y-arrow"></span>
								<b><?php echo _cfg('web_name_two'); ?>官方微信</b>
								<img src="<?php echo G_TEMPLATES_IMAGE; ?>/weixin.jpg" alt="">
							</div>
						</dd>
					</a>
					<a href="javascript:void(0);">
						<dd class="dlLast-Sina">
							<div class="y-popover">
								<span class="y-arrow"></span>
								<b><?php echo _cfg('web_name_two'); ?>在线客服</b>
								<img src="<?php echo G_TEMPLATES_IMAGE; ?>/weibo.jpg" alt="">
							</div>
						</dd>
					</a>
					
				</dl>
			</div>
			<div class="footer-time-list" id="pageEnd">
				<div class="yFootBottomRight" style="text-align:left;">
				 版权所有  <?php echo _cfg('web_copyright'); ?>
				</div>
				<div class="yFootBottomLeft">
					 <a href="https://ss.knet.cn/verifyseal.dll?sn=e15040114010058156enlr000000&a=1&pa=0.5496295503773193" target="_blank" class="yFootBottomLeft1"></a>
 				 	 <a href="http://webscan.360.cn/index/checkwebsite/url/" class="yFootBottomLeft2"></a>				
					 <a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1325737350" target="_blank" class="yFootBottomLeft3"></a>
					 <a href="http://218.26.1.108/businessPublicity.jspx?id=4FA23AC6152B1BAC3D5A1FF847D3D615" target="_blank" class="yFootBottomLeft4"></a>
				</div>
			</div>
		</div>
		<div class="yFootBottom">
			<div class="yFootBottomIn" style="clear: both;">
				<p>友情链接：
				
				
				
				
				<?php 
		$mysql_model=System::load_sys_class('model');
		$title="友情链接";
		$link_size=$mysql_model->GetList("select * from `@#_link` where `type`='1'");
       ?>

				<?php $ln=1;if(is_array($link_size)) foreach($link_size AS $size): ?>	
					|<a target="_blank" href="<?php echo $size['url']; ?>"><?php echo $size['name']; ?></a>

				<?php  endforeach; $ln++; unset($ln); ?>
				</p>
			</div>
		</div>

	</div>
</div>

	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/common.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/common_ajaxfunction_main.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/common_ajaxfunction_other.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/footer_header.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/mowo.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/index.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/header_box.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.lazyload.min.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookies.2.2.0.js"></script>
	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/tj.js"></script>


	
	
	
	
<!--r-fixed start-->
<div class="r-fixed">
    <ul class="r-fixed-nav">
        <li class="toolbar-item" id="btnMyCart">
        	<a href="<?php echo WEB_PATH; ?>/member/cart/cartlist" class="shoppingCartRightFix" id="sCartNavi">
        		<em class="num-rt" id="sCartTotal"></em>
	            <div class="item-tip-c item-tip-checkpage" id="sCart">
	                <div class="item-box">
	                    <u class="u-code u-g-ft-wx"></u>
	                    <div class="item-tip">购物车</div>
	                </div>
	            </div>
	            <i id="iconfont" class="iconfont" style="background:url(/statics/templates/mowov9mb1/img/front/add_index/r-fixed1.png) no-repeat center center;"></i>
	        </a>
        </li>
        <li class="toolbar-item">
            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg('qq'); ?>&site=qq&menu=yes" title="在线客服" target="_blank">
                <div class="item-tip-c item-tip-kefu">
                    <div class="item-box">
                        <div class="item-tip">在线客服</div>
                    </div>
                </div>
                <i class="iconfont" style="background:url(/statics/templates/mowov9mb1/img/front/add_index/r-fixed2.png) no-repeat center center;"></i>
            </a>
        </li>
        <li class="toolbar-item">
        	<a href="javascript:void(0);">
	            <div class="item-tip-c item-tip-wx">
	                <div class="item-box">
	                    <u class="u-code u-g-ft-wx">
	                    	<img src="<?php echo G_TEMPLATES_IMAGE; ?>/weixin.jpg">
	                    </u>
	                    <div class="item-tip">关注微信</div>
	                </div>
	            </div>
	            <i class="iconfont" style="background:url(/statics/templates/mowov9mb1/img/front/add_index/r-fixed3.png) no-repeat center center;"></i>
	        </a>
        </li>
         <li class="toolbar-item">
        	<a href="javascript:void(0);">
	            <div class="item-tip-c item-tip-app">
	                <div class="item-box">
	                    <u class="u-code u-g-ft-app">
	                    	  <img src="<?php echo G_TEMPLATES_IMAGE; ?>/shouji.jpg">
	                    </u>
	                    <div class="item-tip">扫码下载APP</div>
	                </div>
	            </div>
	            <i class="iconfont" style="background:url(/statics/templates/mowov9mb1/img/front/add_index/r-fixed4.png) no-repeat center center;"></i>
	        </a>
        </li>
        <li class="toolbar-item">
            <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" title="我要充值">
                <div class="item-tip-c item-tip-checkpage">
                    <div class="item-box">
                        <div class="item-tip">我要充值</div>
                    </div>
                </div>
                <i class="iconfont" style="background:url(/statics/templates/mowov9mb1/img/front/add_index/r-fixed5.png) no-repeat center center;"></i>
            </a>
        </li>
        <li id="back" class="toolbar-item">
        	<a href="javascript:void(0);">
	            <div class="item-tip-c item-tip-back">
	                <div class="item-box">
	                    <div class="item-tip">返回顶部</div>
	                </div>
	            </div>
	            <i class="iconfont" style="background:url(/statics/templates/mowov9mb1/img/front/add_index/r-fixed6.png) no-repeat center center;"></i>
	        </a>
        </li>
    </ul>
</div>
<!--r-fixed end-->
<script type="text/javascript">
(function(){				
		var week = '日一二三四五六';
		var innerHtml = '{0}:{1}:{2}';
		var dateHtml = "{0}月{1}日 &nbsp;周{2}";
		var timer = 0;
		var beijingTimeZone = 8;				
				function format(str, json){
					return str.replace(/{(\d)}/g, function(a, key) {
						return json[key];
					});
				}				
				function p(s) {
					return s < 10 ? '0' + s : s;
				}			

				function showTime(time){
					var timeOffset = ((-1 * (new Date()).getTimezoneOffset()) - (beijingTimeZone * 60)) * 60000;
					var now = new Date(time - timeOffset);
					document.getElementById('pServerTime').innerHTML = format(innerHtml, [p(now.getHours()), p(now.getMinutes()), p(now.getSeconds())]);				
					//document.getElementById('date').innerHTML = format(dateHtml, [ p((now.getMonth()+1)), p(now.getDate()), week.charAt(now.getDay())]);
				}				
				
				window.yungou_time = 	function(time){						
					showTime(time);
					timer = setInterval(function(){
						time += 1000;
						showTime(time);
					}, 1000);					
				}
	window.yungou_time(<?php echo time(); ?>*1000);
				
})();

	$(".weixinload").click(function(){
		$(".yun_mobile").fadeIn();
	})
	$(".yun_close").click(function(){
		$(".yun_mobile").fadeOut();
	})
	
	
</script>
</body></html>