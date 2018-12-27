<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `go_weixin_sign`;");
E_C("CREATE TABLE `go_weixin_sign` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '????',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '???id\r\n',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '????????',
  `input_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '??????',
  `typeid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '????????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=gbk COMMENT='?????????????????'");
E_D("replace into `go_weixin_sign` values('38','12347','1','1465383400','10');");
E_D("replace into `go_weixin_sign` values('39','6','1','1465562611','10');");

require("../../inc/footer.php");
?>