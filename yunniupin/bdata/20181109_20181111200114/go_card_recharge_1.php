<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_card_recharge`;");
E_C("CREATE TABLE `go_card_recharge` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned DEFAULT NULL COMMENT '用户id',
  `money` int(10) unsigned DEFAULT NULL COMMENT '卡密金额',
  `code` varchar(21) DEFAULT NULL COMMENT '卡号',
  `codepwd` varchar(20) DEFAULT NULL COMMENT '卡号密码',
  `isrepeat` varchar(1) DEFAULT 'N' COMMENT '是否一次性',
  `rechargecount` int(10) DEFAULT '0' COMMENT '充值次数',
  `maxrechargecout` int(10) DEFAULT '0' COMMENT '多最可重复多少次',
  `rechargetime` int(10) DEFAULT NULL COMMENT '充值期限',
  `time` int(10) DEFAULT NULL COMMENT '充值时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='卡密表'");
E_D("replace into `go_card_recharge` values('8','12359','10','LC5f5b40d0baada8a8a74','550286','Y','1','0','1538064000','1537978853');");
E_D("replace into `go_card_recharge` values('9',NULL,'10','LC87a91c5b67e6fa33c58','297774','Y','0','0','1538064000',NULL);");
E_D("replace into `go_card_recharge` values('10',NULL,'13','LCd1e654f9b7f720f6892','093556','Y','0','0','1538236800',NULL);");
E_D("replace into `go_card_recharge` values('11',NULL,'25','LCe186749f744335ca3b8','253288','Y','0','0','1538236800',NULL);");
E_D("replace into `go_card_recharge` values('12',NULL,'25','LCc8e18af4658b8c185f5','153505','Y','0','0','1538236800',NULL);");
E_D("replace into `go_card_recharge` values('13',NULL,'10','LCff08ff33af64b695ff3','943886','Y','0','0','1538150400',NULL);");
E_D("replace into `go_card_recharge` values('14',NULL,'10','LC7b849a129128f84e51e','157559','Y','0','0','1538150400',NULL);");
E_D("replace into `go_card_recharge` values('15',NULL,'10','LC705adfbae19eaab767c','509853','Y','0','0','1538150400',NULL);");
E_D("replace into `go_card_recharge` values('16',NULL,'11','LC5cc656115dfe37ad0bc','494675','Y','0','0','1569427200',NULL);");
E_D("replace into `go_card_recharge` values('17',NULL,'11','LCb464af12dc99313de8f','363286','Y','0','0','1569427200',NULL);");
E_D("replace into `go_card_recharge` values('18',NULL,'11','LCcb38d9cf1e14927e6df','658731','Y','0','0','1569427200',NULL);");

require("../../inc/footer.php");
?>