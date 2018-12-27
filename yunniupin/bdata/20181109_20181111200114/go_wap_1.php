<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `go_wap`;");
E_C("CREATE TABLE `go_wap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '????',
  `title` char(100) DEFAULT '' COMMENT '????????',
  `link` char(255) DEFAULT '' COMMENT '??????',
  `img` text COMMENT '?????',
  `color` text COMMENT '????????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `go_wap` values('4','返字ad3','#','banner/20181111/22712866872310.png','#df4f66');");
E_D("replace into `go_wap` values('8','返字ad3','#','banner/20181111/70913271872585.jpg','#df4f66');");
E_D("replace into `go_wap` values('9','返字ad3','#','banner/20181111/16303389872252.png','#df4f66');");
E_D("replace into `go_wap` values('10','返字ad3','#','banner/20181111/70913271872585.jpg','#df4f66');");

require("../../inc/footer.php");
?>