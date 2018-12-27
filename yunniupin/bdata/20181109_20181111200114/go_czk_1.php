<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_czk`;");
E_C("CREATE TABLE `go_czk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `czknum` varchar(12) NOT NULL COMMENT '充值卡号码',
  `password` varchar(12) NOT NULL COMMENT '充值卡密码',
  `mianzhi` int(11) NOT NULL COMMENT '面值',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '使用状态',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '充值类型 1一次性 2永久',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `go_czk` values('1','551718068927','136117115489','100','1','1');");
E_D("replace into `go_czk` values('3','738380477141','104070239269','1','1','1');");
E_D("replace into `go_czk` values('5','219637369517','665747184185','1','1','1');");
E_D("replace into `go_czk` values('6','322850385845','887597945170','1','1','1');");
E_D("replace into `go_czk` values('7','4578545','4578545','10','1','1');");

require("../../inc/footer.php");
?>