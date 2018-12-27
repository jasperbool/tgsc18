<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_activity_lottery_pay_log`;");
E_C("CREATE TABLE `go_activity_lottery_pay_log` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `trade` varchar(255) NOT NULL,
  `money` int(8) unsigned NOT NULL,
  `count` smallint(5) unsigned NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`trade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>