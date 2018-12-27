<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_navigation`;");
E_C("CREATE TABLE `go_navigation` (
  `cid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `type` char(10) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT 'Y' COMMENT '显示/隐藏',
  `order` smallint(6) unsigned DEFAULT '1',
  PRIMARY KEY (`cid`),
  KEY `status` (`status`),
  KEY `order` (`order`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `go_navigation` values('1','0','所有商品','index','/goods_list','Y','5');");
E_D("replace into `go_navigation` values('2','0','新手指南','foot','/single/newbie','Y','2');");
E_D("replace into `go_navigation` values('3','0','云购圈子','foot','/group','Y','2');");
E_D("replace into `go_navigation` values('4','0','关于云购','foot','/help/1','Y','1');");
E_D("replace into `go_navigation` values('5','0','隐私声明','foot','/help/12','Y','1');");
E_D("replace into `go_navigation` values('6','0','合作专区','foot','/single/business','Y','1');");
E_D("replace into `go_navigation` values('7','0','友情链接','foot','/link','Y','1');");
E_D("replace into `go_navigation` values('8','0','联系我们','foot','/help/3','Y','1');");
E_D("replace into `go_navigation` values('10','0','幸运晒单','index','/go/shaidan/','Y','1');");
E_D("replace into `go_navigation` values('13','0','邀请赚钱','index','/single/pleasereg','Y','1');");
E_D("replace into `go_navigation` values('14','0','限时揭晓','index','/go/autolottery','Y','1');");
E_D("replace into `go_navigation` values('15','0','抽奖游戏','foot','/api/plugin/get/egglotter','Y','1');");
E_D("replace into `go_navigation` values('16','0','最新揭晓','index','/goods_lottery','Y','1');");
E_D("replace into `go_navigation` values('17','0','云购QQ群','foot','/group_qq','Y','2');");
E_D("replace into `go_navigation` values('18','0','直购商城','index','/jf_goods_list','N','1');");
E_D("replace into `go_navigation` values('19','0','十元专区','index','/goods_list10','Y','4');");
E_D("replace into `go_navigation` values('20','0','百元专区','index','/goods_list100','Y','3');");
E_D("replace into `go_navigation` values('21','0','幸运转盘','index','/member/lottery','Y','3');");

require("../../inc/footer.php");
?>