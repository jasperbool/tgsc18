<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_slide`;");
E_C("CREATE TABLE `go_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(50) DEFAULT NULL COMMENT '幻灯片',
  `title` varchar(30) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `way` int(1) unsigned DEFAULT '0' COMMENT '手机端的轮播图',
  PRIMARY KEY (`id`),
  KEY `img` (`img`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='幻灯片表'");
E_D("replace into `go_slide` values('1','banner/20160928/12190861038630.png','ad1','#','0');");
E_D("replace into `go_slide` values('3','banner/20160802/25605872125782.jpg','AD3','#','0');");
E_D("replace into `go_slide` values('5','banner/20160928/52365182039365.jpg','ad5','','0');");
E_D("replace into `go_slide` values('6','banner/20160928/87365138038778.jpg','','','0');");

require("../../inc/footer.php");
?>