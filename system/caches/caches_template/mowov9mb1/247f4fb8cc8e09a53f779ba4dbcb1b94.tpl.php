<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<?php include templates("member","top");?>	
<div class="c_person_record">
<ul class="c_person_list">
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist" hidefocus="">云购记录</a></li>
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/singlelist" hidefocus="">我的晒单</a></li>
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/orderlist" hidefocus="">中奖记录</a></li>
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/userfufen" hidefocus="">我的福分</a></li>
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/userbalance" hidefocus="">账户管理</a></li>
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/commissions" hidefocus="">奖励专区</a></li>
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/invitefriends" hidefocus="">邀请好友</a></li>
	<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/address" hidefocus="">收货地址</a></li>
</ul>
<div class="main-content clearfix">
<?php include templates("member","left");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/layout-recharge.css"/>
<div class="R-content">
	<div class="member-t"><h2>账户明细</h2></div>
	<div class="last">
		<ul>
			<li><h3>您的账户可用余额为：</h3><b class="orange"><?php echo $member['money']; ?></b>元 <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" class="bluebut" title="充值">充值</a></li>
		</ul>
	</div>
	<div id="divList0" class="list-tab recordList">
	<ul class="listTitle">
		<li class="leftTitle">充值时间</li>
		<li class="price">资金渠道</li>
		<li class="regard">收入/支出</li>
	</ul>
	<?php $ln=1;if(is_array($account)) foreach($account AS $at): ?>
	<ul>
		<li class="leftTitle fontAri"><?php echo date("Y-m-d H:i:s",$at['time']); ?></li>
		<li class="price"><?php echo $at['content']; ?></li>
		<li class="regard">
		<?php if($at['type'] == 1): ?>
			<font color="#0c0">￥<?php echo $at['money']; ?></font>
		<?php  else: ?>
			<font color="red">￥<?php echo $at['money']; ?></font>
		<?php endif; ?>		
		</li>
	</ul>
	<?php  endforeach; $ln++; unset($ln); ?>
	</div>
    
        <style>
			#divPageNav{ padding-top:10px;text-align:right}
			#divPageNav li a{ padding:5px;}
		</style>
		<div id="divPageNav" class="page_nav">
        	<?php echo $page->show('one'); ?> <li>共 <?php echo $total; ?> 条</li>
        </div>
        
	<div id="divPageNav0" class="page_nav" style="display: none;"> </div>
	<div id="divList1" class="list-tab recordList" style="display:none;"></div>
	<div id="divPageNav1" class="page_nav" style="display:none;"></div>
	<div id="divDetailInfo" class="count" style="display:none;"></div>
	<div id="divbuyDetail" class="list-tab recordList buyDetail" style="display:none;"></div>
</div>

</div>
		</div>
	</div>
<!--center_center_end-->
<div class="right">				
</div>
<!--center_rjght_end-->

</div>
<?php include templates("index","footer");?>