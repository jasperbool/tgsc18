<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_activity_lottery`;");
E_C("CREATE TABLE `go_activity_lottery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `prize` tinyint(1) unsigned NOT NULL,
  `money` mediumint(8) unsigned NOT NULL,
  `title` varchar(20) NOT NULL,
  `desc` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `go_activity_lottery` values('1','1417','1447153040','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('2','1417','1447153063','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('3','1417','1447153071','1','2','六等奖','2元红包');");
E_D("replace into `go_activity_lottery` values('4','1417','1447153080','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('5','100','1447370640','1','2','六等奖','2元红包');");
E_D("replace into `go_activity_lottery` values('6','1417','1447385803','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('7','1417','1447385811','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('8','1417','1447385820','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('9','1417','1447385828','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('10','1417','1447385836','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('11','1417','1447385845','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('12','1417','1447420754','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('13','1417','1448758648','1','2','六等奖','2元红包');");
E_D("replace into `go_activity_lottery` values('14','1469','1452667184','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('15','1469','1452667201','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('16','7','1454504687','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('17','7','1454504696','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('18','7','1454504706','0','1','七等奖','1元红包');");
E_D("replace into `go_activity_lottery` values('19','7','1455507668','1','2','六等奖','2元红包');");

require("../../inc/footer.php");
?>