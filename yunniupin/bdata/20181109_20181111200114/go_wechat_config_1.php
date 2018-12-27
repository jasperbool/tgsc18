<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_wechat_config`;");
E_C("CREATE TABLE `go_wechat_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  `menu` text NOT NULL COMMENT '菜单',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `go_wechat_config` values('1','weixin123','wx8d3177e89f70ceb0','7f80f1b41c58b1ef125464f21716ab22','BMB3oZigRW86LBdIO1ViGafgS3tOhN-UKF-PpTVsb1e12h-oyu3H-KN9v98OoyzjGn9WEB5Yq3QMxxVACv54_uz8HVEzoUKbsBirh-93y1GUznKo4uIYepoPIYihCCWFSIXjAHAHXM','0','{\"button\":[{\"name\":\"云购全球\",\"sub_button\":[{\"type\":\"view\",\"name\":\"立即夺宝\",\"url\":\"http://m.yunniupin.com/\"},{\"type\":\"view\",\"name\":\"最新揭晓\",\"url\":\"http://m.yunniupin.com/mobile/mobile/lottery\"},{\"type\":\"view\",\"name\":\"了解云购\",\"url\":\"http://m.yunniupin.com/mobile/home/inviteshare\"},{\"type\":\"click\",\"name\":\"最新活动\",\"key\":\"xinban\"},{\"type\":\"click\",\"name\":\"快递查询\",\"key\":\"kdcx\"}]},{\"name\":\"会员专享\",\"sub_button\":[{\"type\":\"view\",\"name\":\"签到抽奖\",\"url\":\"http://m.yunniupin.com/mobile/home/userqiandao\"},{\"type\":\"view\",\"name\":\"充值抽奖\",\"url\":\"http://m.yunniupin.com/mobile/lottery\"},{\"type\":\"click\",\"name\":\"领取红包\",\"key\":\"zj\"},{\"type\":\"view\",\"name\":\"分享赚钱\",\"url\":\"http://m.yunniupin.com/mobile/home/invite\"},{\"type\":\"click\",\"name\":\"每日签到\",\"key\":\"qiandao\"}]},{\"name\":\"我的\",\"sub_button\":[{\"type\":\"click\",\"name\":\"中奖订单\",\"key\":\"ddcx\"},{\"type\":\"click\",\"name\":\"账户查询\",\"key\":\"jfcx\"},{\"type\":\"view\",\"name\":\"云购记录\",\"url\":\"http://m.yunniupin.com/mobile/home/userbuylist\"},{\"type\":\"view\",\"name\":\"中奖商品\",\"url\":\"http://m.yunniupin.com/mobile/home/orderlist\"},{\"type\":\"click\",\"name\":\"会员中心\",\"key\":\"member\"}]}]}');");

require("../../inc/footer.php");
?>