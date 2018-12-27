<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_jiang_list`;");
E_C("CREATE TABLE `go_jiang_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `gettype` int(11) NOT NULL COMMENT '中奖类型',
  `time` int(11) NOT NULL COMMENT '中奖时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED COMMENT='抽奖记录表'");

require("../../inc/footer.php");
?>