<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_config`;");
E_C("CREATE TABLE `go_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `value` mediumtext,
  `zhushi` text,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `go_config` values('1','web_name','泰广商城演示站','网站名');");
E_D("replace into `go_config` values('2','web_key','泰广商城演示站','网站关键字');");
E_D("replace into `go_config` values('3','web_des','泰广商城演示站','网站介绍');");
E_D("replace into `go_config` values('4','web_path','http://m.yita.run','网站地址');");
E_D("replace into `go_config` values('5','templates_edit','1','是否允许在线编辑模板');");
E_D("replace into `go_config` values('6','templates_name','mowov9','当前模板方案');");
E_D("replace into `go_config` values('7','charset','utf-8','网站字符集');");
E_D("replace into `go_config` values('8','timezone','Asia/Shanghai','网站时区');");
E_D("replace into `go_config` values('9','error','0','1、保存错误日志到 cache/error_log.php | 0、在页面直接显示');");
E_D("replace into `go_config` values('10','gzip','1','是否Gzip压缩后输出,服务器没有gzip请不要启用');");
E_D("replace into `go_config` values('11','lang','zh-cn','网站语言包');");
E_D("replace into `go_config` values('12','cache','3600','默认缓存时间');");
E_D("replace into `go_config` values('13','web_off','1','网站是否开启');");
E_D("replace into `go_config` values('14','web_off_text','网站关闭。升级中....','关闭原因');");
E_D("replace into `go_config` values('15','tablepre','QCNf',NULL);");
E_D("replace into `go_config` values('16','index_name','','隐藏首页文件名');");
E_D("replace into `go_config` values('17','expstr','/','url分隔符号');");
E_D("replace into `go_config` values('18','admindir','admin','后台管理文件夹');");
E_D("replace into `go_config` values('19','qq','1103770588','qq');");
E_D("replace into `go_config` values('20','cell','QQ1103770588','联系电话');");
E_D("replace into `go_config` values('21','web_logo','banner/20160802/74567270118883.png','logo');");
E_D("replace into `go_config` values('22','web_copyright','Copyright © 2018 泰广商城','版权');");
E_D("replace into `go_config` values('23','web_name_two','云购','短网站名');");
E_D("replace into `go_config` values('24','qq_qun','','QQ群');");
E_D("replace into `go_config` values('25','goods_end_time','90','开奖动画秒数(单位秒)');");
E_D("replace into `go_config` values('26','xianshi','0','手机端限时揭晓是否显示');");
E_D("replace into `go_config` values('27','web_verify','1','验证码是否开启');");
E_D("replace into `go_config` values('28','sendmobile','1','发货微信提醒');");

require("../../inc/footer.php");
?>