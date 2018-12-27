<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_brand`;");
E_C("CREATE TABLE `go_brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cateid` int(10) unsigned DEFAULT NULL COMMENT '所属栏目ID',
  `status` char(1) DEFAULT 'Y' COMMENT '显示隐藏',
  `name` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `order` (`order`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COMMENT='品牌表'");
E_D("replace into `go_brand` values('1','1','Y','联想','1');");
E_D("replace into `go_brand` values('2','1','Y','联想','1');");
E_D("replace into `go_brand` values('3','1','Y','乐视','1');");
E_D("replace into `go_brand` values('4','1','Y','努比亚','1');");
E_D("replace into `go_brand` values('5','1','Y','金立','1');");
E_D("replace into `go_brand` values('6','1','Y','小米','1');");
E_D("replace into `go_brand` values('7','1','Y','锤子','1');");
E_D("replace into `go_brand` values('8','1','Y','魅族','1');");
E_D("replace into `go_brand` values('9','1','Y','三星','1');");
E_D("replace into `go_brand` values('10','1','Y','苹果','1');");
E_D("replace into `go_brand` values('11','1','Y','华为','1');");
E_D("replace into `go_brand` values('12','2','Y','本田','1');");
E_D("replace into `go_brand` values('13','2','Y','大众','1');");
E_D("replace into `go_brand` values('14','2','Y','雪铁龙','1');");
E_D("replace into `go_brand` values('15','2','Y','标志','1');");
E_D("replace into `go_brand` values('16','2','Y','宝马','1');");
E_D("replace into `go_brand` values('17','2','Y','奔驰','1');");
E_D("replace into `go_brand` values('18','2','Y','捷豹','1');");
E_D("replace into `go_brand` values('19','2','Y','保时捷','1');");
E_D("replace into `go_brand` values('20','2','Y','奥迪','1');");
E_D("replace into `go_brand` values('21','2','Y','路虎','1');");
E_D("replace into `go_brand` values('22','3','Y','苏泊尔','1');");
E_D("replace into `go_brand` values('23','3','Y','美的','1');");
E_D("replace into `go_brand` values('24','3','Y','西门子','1');");
E_D("replace into `go_brand` values('25','3','Y','海尔','1');");
E_D("replace into `go_brand` values('26','3','Y','格力','1');");
E_D("replace into `go_brand` values('27','3','Y','小天鹅','1');");
E_D("replace into `go_brand` values('28','3','Y','索尼','1');");
E_D("replace into `go_brand` values('29','3','Y','戴森','1');");
E_D("replace into `go_brand` values('30','3','Y','三星','1');");
E_D("replace into `go_brand` values('31','4','Y','其他','1');");
E_D("replace into `go_brand` values('32','18','Y','中国黄金','1');");
E_D("replace into `go_brand` values('33','18','Y','周大生','1');");
E_D("replace into `go_brand` values('34','3','Y','创维','112');");
E_D("replace into `go_brand` values('41','18','Y','六福珠宝','1');");
E_D("replace into `go_brand` values('36','18','Y','周大福','1');");
E_D("replace into `go_brand` values('37','18','Y','Doido','1');");
E_D("replace into `go_brand` values('38','1','Y','vivo','1');");
E_D("replace into `go_brand` values('39','20','Y','充值卡','1');");
E_D("replace into `go_brand` values('40','3','Y','泰福高','1');");
E_D("replace into `go_brand` values('42','4','Y','富光','1');");
E_D("replace into `go_brand` values('43','3','Y','Bear/小熊','1');");
E_D("replace into `go_brand` values('44','1','Y','佳能','1');");
E_D("replace into `go_brand` values('45','3','Y','SIEMENS西门子','1');");
E_D("replace into `go_brand` values('46','18','Y','银饰品','1');");
E_D("replace into `go_brand` values('47','4','Y','斯伯丁','1');");
E_D("replace into `go_brand` values('48','4','Y','七匹狼','1');");
E_D("replace into `go_brand` values('49','20','Y','洋酒','1');");
E_D("replace into `go_brand` values('55','4','Y','珍皮士','1');");
E_D("replace into `go_brand` values('52','20','Y','红酒','1');");
E_D("replace into `go_brand` values('53','20','Y','鸡尾酒','1');");
E_D("replace into `go_brand` values('54','1','Y','索尼','1');");
E_D("replace into `go_brand` values('56','4','Y','恒源祥','1');");
E_D("replace into `go_brand` values('57','4','Y','宝丽','1');");
E_D("replace into `go_brand` values('58','4','Y','超人','1');");
E_D("replace into `go_brand` values('64','4','Y','金喜路','1');");
E_D("replace into `go_brand` values('60','4','Y','爱奇高','1');");
E_D("replace into `go_brand` values('61','4','Y','好孩子','1');");
E_D("replace into `go_brand` values('62','4','Y','环奇','1');");
E_D("replace into `go_brand` values('63','4','Y','英菲力尔','1');");
E_D("replace into `go_brand` values('65','3','Y','华硕','1');");
E_D("replace into `go_brand` values('66','3','Y','酷开','1');");
E_D("replace into `go_brand` values('67','18','Y','玉器 水晶','1');");
E_D("replace into `go_brand` values('68','20','Y','洋酒','1');");
E_D("replace into `go_brand` values('69','4','Y','洋酒','1');");
E_D("replace into `go_brand` values('70','4','Y','红酒','1');");
E_D("replace into `go_brand` values('71','4','Y','鸡尾酒','1');");
E_D("replace into `go_brand` values('72','4','Y','充值卡','1');");
E_D("replace into `go_brand` values('73','17','Y','古驰','1');");
E_D("replace into `go_brand` values('74','17','Y','香奈儿','1');");
E_D("replace into `go_brand` values('75','17','Y','LV','1');");
E_D("replace into `go_brand` values('76','17','Y','欧米茄','1');");
E_D("replace into `go_brand` values('77','17','Y','阿玛尼','1');");
E_D("replace into `go_brand` values('78','3','Y','11','111');");

require("../../inc/footer.php");
?>