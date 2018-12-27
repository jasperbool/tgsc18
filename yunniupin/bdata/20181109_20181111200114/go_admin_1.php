<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_admin`;");
E_C("CREATE TABLE `go_admin` (
  `uid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `mid` tinyint(3) unsigned NOT NULL,
  `username` char(15) NOT NULL,
  `userpass` char(32) NOT NULL,
  `useremail` varchar(100) DEFAULT NULL,
  `addtime` int(10) unsigned DEFAULT NULL,
  `logintime` int(10) unsigned DEFAULT NULL,
  `loginip` varchar(15) DEFAULT NULL,
  `qx` text,
  `gl` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='管理员表'");
E_D("replace into `go_admin` values('1','0','admin','7fef6171469e80d32c0559f88b377245',NULL,NULL,'1541932897','::1','N;','0');");
E_D("replace into `go_admin` values('6','0','yunniupin','f0f48f8e87d6cbd82fdb50193c313457','yunniupin@qq.com','1465530956','1537695645','117.188.179.90','a:8:{s:14:\"setting/webcfg\";s:1:\"1\";s:14:\"setting/config\";s:1:\"1\";s:14:\"setting/domain\";s:1:\"1\";s:10:\"user/lists\";s:1:\"1\";s:9:\"user/edit\";s:1:\"1\";s:8:\"user/reg\";s:1:\"1\";s:9:\"index/map\";s:1:\"1\";s:17:\"yunwei/websitemap\";s:1:\"1\";}','1');");
E_D("replace into `go_admin` values('7','0','1103770588','547e3e734530f12268c46e6c9d94a42c','123@qq.com','1465530983','1465560110','121.204.249.185','a:9:{s:10:\"user/lists\";s:1:\"1\";s:9:\"user/edit\";s:1:\"1\";s:8:\"user/reg\";s:1:\"1\";s:13:\"template/init\";s:1:\"1\";s:13:\"template/edit\";s:1:\"1\";s:12:\"template/see\";s:1:\"1\";s:15:\"template/update\";s:1:\"1\";s:9:\"index/map\";s:1:\"1\";s:17:\"yunwei/websitemap\";s:1:\"1\";}','0');");
E_D("replace into `go_admin` values('8','0','789','68053af2923e00204c3ca7c6a3150cf7','123@qq.com','1465531007','0','121.204.249.185',NULL,'0');");
E_D("replace into `go_admin` values('9','0','369','0c74b7f78409a4022a2c4c5a5ca3ee19','123@qq.com','1465531035','1465636975','120.41.127.30',NULL,'0');");

require("../../inc/footer.php");
?>