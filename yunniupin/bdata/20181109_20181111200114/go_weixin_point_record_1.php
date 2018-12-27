<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_weixin_point_record`;");
E_C("CREATE TABLE `go_weixin_point_record` (
  `pr_id` int(7) NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL,
  `point_name` varchar(64) NOT NULL,
  `num` int(5) NOT NULL,
  `lasttime` int(10) NOT NULL,
  `datelinie` int(10) NOT NULL,
  `total` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '总共签到次数',
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=251 DEFAULT CHARSET=utf8");
E_D("replace into `go_weixin_point_record` values('250','o3DOxv_iuwA0hwgFHfs4ygbcH3Ec','qiandao','1','1465383509','1465383509','1');");

require("../../inc/footer.php");
?>