<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `go_qiandao`;");
E_C("CREATE TABLE `go_qiandao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id ?',
  `lianxu` int(4) unsigned NOT NULL DEFAULT '0' COMMENT '???????????',
  `sum` int(4) unsigned NOT NULL DEFAULT '0' COMMENT '??????????',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '??????',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '???id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `go_qiandao` values('2','1','1','1465383514','12347');");
E_D("replace into `go_qiandao` values('3','1','2','1465630756','7');");
E_D("replace into `go_qiandao` values('4','1','1','1465437386','12348');");
E_D("replace into `go_qiandao` values('5','1','1','1465527971','12352');");
E_D("replace into `go_qiandao` values('6','1','1','1465561565','4');");
E_D("replace into `go_qiandao` values('7','1','2','1466074128','12369');");

require("../../inc/footer.php");
?>