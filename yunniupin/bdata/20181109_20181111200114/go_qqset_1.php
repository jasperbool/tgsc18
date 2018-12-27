<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `go_qqset`;");
E_C("CREATE TABLE `go_qqset` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qq` text CHARACTER SET utf8,
  `name` text CHARACTER SET utf8,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `qqurl` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `full` char(10) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '???????',
  `province` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `county` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `subtime` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

require("../../inc/footer.php");
?>