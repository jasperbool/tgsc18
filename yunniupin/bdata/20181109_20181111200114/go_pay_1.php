<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_pay`;");
E_C("CREATE TABLE `go_pay` (
  `pay_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pay_name` char(20) NOT NULL,
  `pay_class` char(20) NOT NULL,
  `pay_type` tinyint(3) NOT NULL,
  `pay_thumb` varchar(255) DEFAULT NULL,
  `pay_des` text,
  `pay_start` tinyint(4) NOT NULL,
  `pay_key` text,
  `pay_mobile` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `go_pay` values('1','财付通','tenpay','1','photo/20160202/50845890427524.gif','腾讯财付通	','0','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:19:\"财付通商户号:\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:16:\"财付通密钥:\";s:3:\"val\";s:0:\"\";}}','0');");
E_D("replace into `go_pay` values('2','易宝支付','yeepay','1','photo/20160202/45455015427540.jpg','易宝支付','0','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:16:\"易宝商户号:\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:13:\"易宝密钥:\";s:3:\"val\";s:0:\"\";}}','0');");
E_D("replace into `go_pay` values('3','汇潮支付','ecpss','1','photo/20160202/59589236427573.jpg','汇潮支付','0','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:16:\"汇潮商户号:\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:13:\"汇潮密钥:\";s:3:\"val\";s:0:\"\";}}','0');");
E_D("replace into `go_pay` values('4','支付宝','alipay','2','photo/20160202/14846579427597.jpg','支付宝支付','0','a:3:{s:2:\"id\";a:2:{s:4:\"name\";s:19:\"支付宝商户号:\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:16:\"支付宝密钥:\";s:3:\"val\";s:0:\"\";}s:4:\"user\";a:2:{s:4:\"name\";s:16:\"支付宝账号:\";s:3:\"val\";s:0:\"\";}}','0');");
E_D("replace into `go_pay` values('5','手机支付宝支付','wapalipay','1','photo/20160202/14846579427597.jpg','支付宝转账接口\n','0','a:3:{s:2:\"id\";a:2:{s:4:\"name\";s:19:\"支付宝商户号:\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:16:\"支付宝密钥:\";s:3:\"val\";s:0:\"\";}s:4:\"user\";a:2:{s:4:\"name\";s:16:\"支付宝账号:\";s:3:\"val\";s:0:\"\";}}','1');");
E_D("replace into `go_pay` values('6','网银在线','chinabank','0','photo/20160202/35011794427644.jpg','网银在线','0','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:9:\"商户号\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:6:\"密匙\";s:3:\"val\";s:0:\"\";}}','0');");
E_D("replace into `go_pay` values('7','网银在线wap','chinabankwap','0','photo/20160202/68033751427661.jpg','网银手机支付','0','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:9:\"商户号\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:6:\"密匙\";s:3:\"val\";s:0:\"\";}}','1');");
E_D("replace into `go_pay` values('8','微信扫码支付','weixin','0','photo/20160202/92178645427680.gif','微信扫码支付','0','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:9:\"商户号\";s:3:\"val\";s:10:\"1330554401\";}s:3:\"key\";a:2:{s:4:\"name\";s:6:\"密匙\";s:3:\"val\";s:32:\"8Xa8fbH8gLBwSfaWRbR9Ds95jkrFsEMh\";}}','0');");
E_D("replace into `go_pay` values('9','微信支付微信端','wxpay_web','0','photo/20160202/92178645427680.gif','微信支付微信端','0','a:4:{s:5:\"APPID\";a:2:{s:4:\"name\";s:5:\"APPID\";s:3:\"val\";s:18:\"wx8d3177e89f70ceb0\";}s:5:\"MCHID\";a:2:{s:4:\"name\";s:11:\"受理商ID\";s:3:\"val\";s:10:\"1330554401\";}s:3:\"KEY\";a:2:{s:4:\"name\";s:9:\"密钥Key\";s:3:\"val\";s:32:\"8Xa8fbH8gLBwSfaWRbR9Ds95jkrFsEMh\";}s:9:\"APPSECRET\";a:2:{s:4:\"name\";s:9:\"APPSECRET\";s:3:\"val\";s:32:\"7f80f1b41c58b1ef125464f21716ab22\";}}','1');");
E_D("replace into `go_pay` values('10','银联在线支付','unionpay','0','photo/20160202/11594884427711.gif','银联在线支付','0','a:3:{s:2:\"id\";a:2:{s:4:\"name\";s:16:\"银联商户号:\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:13:\"银联密钥:\";s:3:\"val\";s:0:\"\";}s:4:\"user\";a:2:{s:4:\"name\";s:13:\"银联账号:\";s:3:\"val\";s:0:\"\";}}','0');");
E_D("replace into `go_pay` values('11','银联手机在线支付','unionpay_web','0','photo/20160202/11594884427711.gif','银联手机在线支付','0','a:3:{s:2:\"id\";a:2:{s:4:\"name\";s:16:\"银联商户号:\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:13:\"银联密钥:\";s:3:\"val\";s:0:\"\";}s:4:\"user\";a:2:{s:4:\"name\";s:13:\"银联账号:\";s:3:\"val\";s:0:\"\";}}','1');");
E_D("replace into `go_pay` values('12','盛付通','shengpay','0','photo/20160202/24417578427746.gif','盛付通','0','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:9:\"商户号\";s:3:\"val\";s:0:\"\";}s:3:\"key\";a:2:{s:4:\"name\";s:6:\"密匙\";s:3:\"val\";s:0:\"\";}}','0');");
E_D("replace into `go_pay` values('14','集合支付','jhmy','0','photo/jhmy.jpg','集合支付','1','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:8:\"用户ID\";s:3:\"val\";s:4:\"1712\";}s:3:\"key\";a:2:{s:4:\"name\";s:6:\"密匙\";s:3:\"val\";s:32:\"a3271c141ac71b4c1ee7708f4ae88f51\";}}','0');");
E_D("replace into `go_pay` values('15','集合支付','jhmy','0','photo/jhmy.jpg','集合支付','1','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:8:\"用户ID\";s:3:\"val\";s:4:\"1712\";}s:3:\"key\";a:2:{s:4:\"name\";s:6:\"密匙\";s:3:\"val\";s:32:\"a3271c141ac71b4c1ee7708f4ae88f51\";}}','1');");
E_D("replace into `go_pay` values('25','支付宝(免签约支付)','shoukuanlaAli','0','photo/shoukuanlaImg/alisweep.jpg','支付宝转账支付，免签约支付软件辅助实现自动充值','1','a:3:{s:2:\"id\";a:2:{s:4:\"name\";s:19:\"支付宝商户号:\";s:3:\"val\";s:9:\"可留空\";}s:3:\"key\";a:2:{s:4:\"name\";s:16:\"支付宝密钥:\";s:3:\"val\";s:30:\"a584140550973c64cdb5baabd04f60\";}s:4:\"user\";a:2:{s:4:\"name\";s:16:\"支付宝账号:\";s:3:\"val\";s:11:\"15194717347\";}}','0');");
E_D("replace into `go_pay` values('26','手机支付宝(免签约支付)','shoukuanlaAliMobile','0','photo/shoukuanlaImg/alimobie.jpg','支付宝转账支付，免签约支付软件辅助实现自动充值','1','a:3:{s:2:\"id\";a:2:{s:4:\"name\";s:19:\"支付宝商户号:\";s:3:\"val\";s:9:\"可留空\";}s:3:\"key\";a:2:{s:4:\"name\";s:16:\"支付宝密钥:\";s:3:\"val\";s:30:\"a584140550973c64cdb5baabd04f60\";}s:4:\"user\";a:2:{s:4:\"name\";s:16:\"支付宝账号:\";s:3:\"val\";s:11:\"15194717347\";}}','1');");
E_D("replace into `go_pay` values('27','微信(免签约支付)','shoukuanlaWx','0','photo/shoukuanlaImg/wxpay.png','支付宝转账支付，免签约支付软件辅助实现自动充值','1','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:16:\"微信商户号:\";s:3:\"val\";s:9:\"可留空\";}s:3:\"key\";a:2:{s:4:\"name\";s:13:\"微信密钥:\";s:3:\"val\";s:30:\"a584140550973c64cdb5baabd04f60\";}}','0');");
E_D("replace into `go_pay` values('28','手机微信(免签约支付)','shoukuanlaWxMobile','0','photo/shoukuanlaImg/wxmobie.png','支付宝转账支付，免签约支付软件辅助实现自动充值','1','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:16:\"微信商户号:\";s:3:\"val\";s:9:\"可留空\";}s:3:\"key\";a:2:{s:4:\"name\";s:13:\"微信密钥:\";s:3:\"val\";s:30:\"a584140550973c64cdb5baabd04f60\";}}','1');");
E_D("replace into `go_pay` values('29','QQ钱包(免签约支付)','shoukuanlaTen','0','photo/shoukuanlaImg/tenzhuan.jpg','支付宝转账支付，免签约支付软件辅助实现自动充值','1','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:18:\"QQ钱包商户号:\";s:3:\"val\";s:10:\"2471917171\";}s:3:\"key\";a:2:{s:4:\"name\";s:15:\"QQ钱包密钥:\";s:3:\"val\";s:30:\"a584140550973c64cdb5baabd04f60\";}}','0');");
E_D("replace into `go_pay` values('30','手机QQ钱包(免签约支付)','shoukuanlaTenMobile','0','photo/shoukuanlaImg/tenmobie.jpg','支付宝转账支付，免签约支付软件辅助实现自动充值','1','a:2:{s:2:\"id\";a:2:{s:4:\"name\";s:18:\"QQ钱包商户号:\";s:3:\"val\";s:10:\"2471917171\";}s:3:\"key\";a:2:{s:4:\"name\";s:15:\"QQ钱包密钥:\";s:3:\"val\";s:30:\"a584140550973c64cdb5baabd04f60\";}}','1');");

require("../../inc/footer.php");
?>