<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_card_pwd`;");
E_C("CREATE TABLE `go_card_pwd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pwd` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pwd` (`pwd`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='卡密密码表'");
E_D("replace into `go_card_pwd` values('1','21232f297a57a5a743894a0e4a801fc3');");

require("../../inc/footer.php");
?>