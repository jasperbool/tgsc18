<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_template`;");
E_C("CREATE TABLE `go_template` (
  `template_name` char(25) NOT NULL,
  `template` char(25) NOT NULL,
  `des` varchar(100) DEFAULT NULL,
  KEY `template` (`template`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `go_template` values('cart.cartlist.html','mowov9','购物车列表');");
E_D("replace into `go_template` values('cart.pay.html','mowov9','购物车付款');");
E_D("replace into `go_template` values('cart.paysuccess.html','mowov9','购物车支付成功页面');");
E_D("replace into `go_template` values('group.index.html','mowov9','圈子首页');");
E_D("replace into `go_template` values('group.list.html','mowov9','圈子列表页');");
E_D("replace into `go_template` values('group.nei.html','mowov9','圈子内容');");
E_D("replace into `go_template` values('group.right.html','mowov9','圈子右边');");
E_D("replace into `go_template` values('help.help.html','mowov9','帮助页面');");
E_D("replace into `go_template` values('index.autolottery.html','mowov9','限时揭晓');");
E_D("replace into `go_template` values('index.buyrecord.html','mowov9','云购记录');");
E_D("replace into `go_template` values('index.buyrecordbai.html','mowov9','最新云购记录');");
E_D("replace into `go_template` values('index.dataserver.html','mowov9','已揭晓商品');");
E_D("replace into `go_template` values('index.detail.html','mowov9','晒单详情');");
E_D("replace into `go_template` values('index.footer.html','mowov9','底部');");
E_D("replace into `go_template` values('index.glist.html','mowov9','所有商品');");
E_D("replace into `go_template` values('index.header.html','mowov9','头部');");
E_D("replace into `go_template` values('index.index.html','mowov9','首页');");
E_D("replace into `go_template` values('index.item.html','mowov9','商品展示页');");
E_D("replace into `go_template` values('index.lottery.html','mowov9','最新揭晓');");
E_D("replace into `go_template` values('index.shaidan.html','mowov9','晒单页面');");
E_D("replace into `go_template` values('link.link.html','mowov9','友情链接');");
E_D("replace into `go_template` values('member.address.html','mowov9','会员地址添加');");
E_D("replace into `go_template` values('member.cashout.html','mowov9','提现申请');");
E_D("replace into `go_template` values('member.commissions.html','mowov9','佣金明细');");
E_D("replace into `go_template` values('member.index.html','mowov9','会员首页');");
E_D("replace into `go_template` values('member.invitefriends.html','mowov9','邀请好友');");
E_D("replace into `go_template` values('member.joingroup.html','mowov9','加入的圈子');");
E_D("replace into `go_template` values('member.left.html','mowov9','会员中心左边页面');");
E_D("replace into `go_template` values('member.mailchecking.html','mowov9','邮箱认证');");
E_D("replace into `go_template` values('member.mobilechecking.htm','mowov9','手机绑定');");
E_D("replace into `go_template` values('member.mobilesuccess.html','mowov9','手机认证成功');");
E_D("replace into `go_template` values('member.modify.html','mowov9','会员');");
E_D("replace into `go_template` values('member.orderlist.html','mowov9','会员资料');");
E_D("replace into `go_template` values('member.password.html','mowov9','会员修改密码');");
E_D("replace into `go_template` values('member.photo.html','mowov9','会员修改头像');");
E_D("replace into `go_template` values('member.qqclock.html','mowov9','会员QQ绑定');");
E_D("replace into `go_template` values('member.record.html','mowov9','提现记录');");
E_D("replace into `go_template` values('member.sendsuccess.html','mowov9','邮箱验证发送');");
E_D("replace into `go_template` values('member.sendsuccess2.html','mowov9','邮箱验证发送2');");
E_D("replace into `go_template` values('member.shezhi.html','mowov9','资料选项卡');");
E_D("replace into `go_template` values('member.singleinsert.html','mowov9','会员添加晒单');");
E_D("replace into `go_template` values('member.singlelist.html','mowov9','会员晒单');");
E_D("replace into `go_template` values('member.singleupdate.html','mowov9','晒单修改');");
E_D("replace into `go_template` values('member.topic.html','mowov9','圈子话题');");
E_D("replace into `go_template` values('member.userbalance.html','mowov9','账户明细');");
E_D("replace into `go_template` values('member.userbuydetail.html','mowov9','云购记录');");
E_D("replace into `go_template` values('member.userbuylist.html','mowov9','云购记录');");
E_D("replace into `go_template` values('member.userfufen.html','mowov9','会员福分');");
E_D("replace into `go_template` values('member.userrecharge.html','mowov9','账户充值');");
E_D("replace into `go_template` values('search.search.html','mowov9','搜索');");
E_D("replace into `go_template` values('single_web.business.html','mowov9','单页_合作专区');");
E_D("replace into `go_template` values('single_web.fund.html','mowov9','单页_云购基金');");
E_D("replace into `go_template` values('single_web.newbie.html','mowov9','单页_新手指南');");
E_D("replace into `go_template` values('single_web.pleasereg.html','mowov9','单页_邀请');");
E_D("replace into `go_template` values('single_web.qqgroup.html','mowov9','单页_QQ');");
E_D("replace into `go_template` values('system.message.html','mowov9','系统消息提示');");
E_D("replace into `go_template` values('us.index.html','mowov9','个人主页');");
E_D("replace into `go_template` values('us.left.html','mowov9','个人主页左边');");
E_D("replace into `go_template` values('us.tab.html','mowov9','个人主页选项');");
E_D("replace into `go_template` values('us.userbuy.html','mowov9','个人主页云购记录');");
E_D("replace into `go_template` values('us.userpost.html','mowov9','个人主页云购记录');");
E_D("replace into `go_template` values('us.userraffle.html','mowov9','个人主页云购记录');");
E_D("replace into `go_template` values('user.emailcheck.html','mowov9','邮箱验证');");
E_D("replace into `go_template` values('user.emailok.html','mowov9','邮箱验证成功');");
E_D("replace into `go_template` values('user.findemailcheck.html','mowov9','找回密码');");
E_D("replace into `go_template` values('user.finderror.html','mowov9','邮箱验证已过期');");
E_D("replace into `go_template` values('user.findmobilecheck.html','mowov9','手机验证');");
E_D("replace into `go_template` values('user.findok.html','mowov9','手机验证成功');");
E_D("replace into `go_template` values('user.findpassword.html','mowov9','重置密码');");
E_D("replace into `go_template` values('user.login.html','mowov9','会员登录');");
E_D("replace into `go_template` values('user.mobilecheck.html','mowov9','手机验证');");
E_D("replace into `go_template` values('user.register.html','mowov9','会员注册');");
E_D("replace into `go_template` values('vote.show.html','mowov9','投票内容页');");
E_D("replace into `go_template` values('vote.show_total.html','mowov9','投票列表');");
E_D("replace into `go_template` values('vote.vote.html','mowov9','投票主页');");
E_D("replace into `go_template` values('cart.payend.html','mowov9','购物车支付');");
E_D("replace into `go_template` values('index.item_animation.html','mowov9','商品介绍');");
E_D("replace into `go_template` values('index.item_contents.html','mowov9','已满员');");
E_D("replace into `go_template` values('index.itemifram.html','mowov9','购买记录');");
E_D("replace into `go_template` values('index.itemiframstory.html','mowov9','购买记录');");
E_D("replace into `go_template` values('index.qq.html','mowov9','QQ群文件');");
E_D("replace into `go_template` values('index.shaidan123.html','mowov9','刷单触发页面');");
E_D("replace into `go_template` values('member.qiandao.html','mowov9','PC端会员签到');");
E_D("replace into `go_template` values('member.top.html','mowov9','魔窝新版会员中心');");
E_D("replace into `go_template` values('mobile','mowov9','手机模板文件夹');");
E_D("replace into `go_template` values('member.mobilechecking.htm','mowov9','手机绑定');");
E_D("replace into `go_template` values('member.mobilechecking.htm','mowov9','手机绑定');");

require("../../inc/footer.php");
?>