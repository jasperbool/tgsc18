<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_member_addmoney_record`;");
E_C("CREATE TABLE `go_member_addmoney_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `code` char(20) NOT NULL,
  `money` decimal(10,2) unsigned NOT NULL,
  `pay_type` char(20) NOT NULL,
  `status` char(20) NOT NULL,
  `time` int(10) NOT NULL,
  `score` int(10) unsigned NOT NULL DEFAULT '0',
  `scookies` text COMMENT '购物车cookie',
  `skl_jiaoyi` char(50) DEFAULT NULL COMMENT '交易号',
  `skl_paytype` char(20) DEFAULT NULL COMMENT '支付类型',
  `skl_order` char(50) DEFAULT NULL COMMENT '扫码备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `go_member_addmoney_record` values('1','12346','C14653538407734586','98.00','微信扫码支付','未付款','1465353840','0','a:2:{s:10:\"MoenyCount\";i:1097;i:33;a:3:{s:6:\"shenyu\";i:1097;s:3:\"num\";s:4:\"1097\";s:5:\"money\";i:1;}}',NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('2','1','C14653571145630840','1.00','微信支付微信端','未付款','1465357114','0','a:2:{s:10:\"MoenyCount\";i:1;i:35;a:3:{s:6:\"shenyu\";i:1113;s:3:\"num\";s:1:\"1\";s:5:\"money\";i:1;}}',NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('3','12347','','10.00','微信关注送现金红包10.00元','已付款','1465383400','0',NULL,NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('4','12348','C14654374212638496','200.00','微信支付微信端','未付款','1465437421','0','0',NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('5','6','','10.00','微信关注送现金红包10.00元','已付款','1465562611','0',NULL,NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('6','12347','C14656246659553331','2.00','微信支付微信端','未付款','1465624665','0','a:2:{s:10:\"MoenyCount\";i:2;i:62;a:3:{s:6:\"shenyu\";i:63;s:3:\"num\";s:1:\"2\";s:5:\"money\";i:1;}}',NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('7','3','C14657222959802590','2.00','微信公众号','已付款','1465722295','0','1',NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('8','12369','C14660672838397649','10.00','微信扫码支付','未付款','1466067283','0','0',NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('9','12359','C14701212117554354','10.00','云支付','未付款','1470121211','0','0',NULL,NULL,NULL);");
E_D("replace into `go_member_addmoney_record` values('10','12359','C15112821087917102','10.00','支付宝(免签约支付)','未付款','1511282108','0','0',NULL,'alipay','10.01');");

require("../../inc/footer.php");
?>