<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_period`;");
E_C("CREATE TABLE `go_period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `period` varchar(15) NOT NULL,
  `num` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=utf8");
E_D("replace into `go_period` values('170','20160205018','18','82250','2016-02-05 01:31:23');");
E_D("replace into `go_period` values('171','20160205017','17','59982','2016-02-05 01:31:23');");
E_D("replace into `go_period` values('172','20160205016','16','90650','2016-02-05 01:31:23');");
E_D("replace into `go_period` values('173','20160205015','15','18463','2016-02-05 01:31:23');");
E_D("replace into `go_period` values('174','20160205014','14','34555','2016-02-05 01:31:23');");

require("../../inc/footer.php");
?>