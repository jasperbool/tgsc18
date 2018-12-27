<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_member_band`;");
E_C("CREATE TABLE `go_member_band` (
  `b_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_uid` int(10) DEFAULT NULL COMMENT '用户ID',
  `b_type` char(10) DEFAULT NULL COMMENT '绑定登陆类型',
  `b_code` varchar(100) DEFAULT NULL COMMENT '返回数据1',
  `b_data` varchar(100) DEFAULT NULL COMMENT '返回数据2',
  `b_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  KEY `b_uid` (`b_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `go_member_band` values('1','12347','weixin','o3DOxv_iuwA0hwgFHfs4ygbcH3Ec',NULL,'1465375702');");
E_D("replace into `go_member_band` values('2','12348','weixin','o3DOxv-3wLXf8Dr23oZtoKH3WdEU',NULL,'1465437374');");
E_D("replace into `go_member_band` values('3','12350','weixin','o3DOxvwLwgkBAjF_ZtZ6z4yzPsbM',NULL,'1465474837');");
E_D("replace into `go_member_band` values('4','12351','weixin','o3DOxv2CB1DtA_pdDOc2VoDpJcdo',NULL,'1465497655');");
E_D("replace into `go_member_band` values('5','6','weixin','o3DOxv_SYi9_2vkx0jQnaVXsfKOI',NULL,'1465545261');");
E_D("replace into `go_member_band` values('6','12353','weixin','o3DOxv8bQbZ0ThSzpSajY5GuEf6Q',NULL,'1465562431');");
E_D("replace into `go_member_band` values('7','12354','weixin','o3DOxv5z03zzWFAGoxMky7fkZUoQ',NULL,'1465562471');");
E_D("replace into `go_member_band` values('8','12355','weixin','o3DOxvyHy2WLO1xOVfrTwQFfwH_4',NULL,'1465568708');");
E_D("replace into `go_member_band` values('9','12356','weixin','o3DOxvzcuWh8hvEPwXMC1lE6bBVk',NULL,'1465720189');");
E_D("replace into `go_member_band` values('10','12357','weixin','o3DOxvwH_Qc80G7rMIEyHaTQPFGk',NULL,'1465737423');");

require("../../inc/footer.php");
?>