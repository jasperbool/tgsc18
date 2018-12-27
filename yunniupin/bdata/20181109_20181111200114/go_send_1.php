<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.yunniupin.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_send`;");
E_C("CREATE TABLE `go_send` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned DEFAULT '0',
  `gid` int(11) unsigned DEFAULT '0' COMMENT '商品ID',
  `username` char(50) CHARACTER SET gbk DEFAULT '' COMMENT '用户名',
  `shoptitle` char(120) CHARACTER SET gbk DEFAULT '' COMMENT '商品名称',
  `send_type` tinyint(4) unsigned DEFAULT '0' COMMENT '发送类型',
  `send_time` int(10) unsigned DEFAULT '0' COMMENT '发送时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COMMENT='中奖信息发送列表'");
E_D("replace into `go_send` values('1','11815','95','柏雪Princess_','MIUI/小米插线板 3个USB充电口 1.8m','5','1465624378');");
E_D("replace into `go_send` values('2','7738','97','月落花靡','MIUI/小米自拍杆','5','1465624423');");
E_D("replace into `go_send` values('3','5262','99','WEIWEI一孝','MIUI/小米移动电源 10000毫安','5','1465625623');");
E_D("replace into `go_send` values('4','2434','115','LIUJUNHUAI7758','MIUI/小米自拍杆','5','1465625833');");
E_D("replace into `go_send` values('5','12347','62','留乎人探听0','中国电信 话费充值卡面值100元','5','1465626366');");
E_D("replace into `go_send` values('6','2383','63','孟思佳msj','中国移动 话费充值卡面值100元','5','1465626403');");
E_D("replace into `go_send` values('7','8599','59','我好渴啊','富光保温杯男女真空不锈钢滤网大容量茶杯420ml【包邮】','5','1465626779');");
E_D("replace into `go_send` values('8','11318','117','罐罐黄','MIUI/小米自拍杆','5','1465626838');");
E_D("replace into `go_send` values('9','3794','60','尚说','中国联通 话费充值卡面值100元','5','1465626853');");
E_D("replace into `go_send` values('10','1343','111','幸运杨_GoodluckYiyi','925纯银KT猫凯蒂猫手链女','5','1465626905');");
E_D("replace into `go_send` values('11','2540','102','HAzura','Huawei/华为 小天鹅蓝牙免提音箱 AM08（白色）','5','1465626920');");
E_D("replace into `go_send` values('12','3184','116','hunhanxunlu','MIUI/小米移动电源&nbsp;10000毫安','5','1465627160');");
E_D("replace into `go_send` values('13','10921','118','闻雨水','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465627348');");
E_D("replace into `go_send` values('14','4891','113','爱我你会火v5','开光招财貔貅摆件大号一对镇宅辟邪风水客厅商务礼品办公室装饰品','5','1465627355');");
E_D("replace into `go_send` values('15','11163','107','你是我的TOPman','法国进口红酒 拉菲奥希耶徽纹干红葡萄酒 750ml（ASC）','5','1465627415');");
E_D("replace into `go_send` values('16','5715','122','暴力少女沈沐沐','MIUI/小米自拍杆','5','1465627505');");
E_D("replace into `go_send` values('17','9523','90','nanshuran','宝丽双面挂钟 欧式创意客厅时尚静音钟表两面创意个性田园石英钟（颜色随机）【包邮】','5','1465627573');");
E_D("replace into `go_send` values('18','10008','108','哥歌哥割歌','金喜路蒙古包蚊帐三开门拉链双人1.8米家用（颜色随机）【包邮】','5','1465627918');");
E_D("replace into `go_send` values('19','12293','92','KEKE皙LI','超人 电动剃须刀SA7253 【包邮】','5','1465627949');");
E_D("replace into `go_send` values('20','8994','91','heymiki924','超人电吹风机 SF7310 【包邮】','5','1465627978');");
E_D("replace into `go_send` values('21','6677','110','桑涞五行缺钱','华硕WT420无线鼠标 颜色随机【包邮】','5','1465628059');");
E_D("replace into `go_send` values('22','944','120','我就喜欢妳萌一点','中国移动&nbsp;话费充值卡面值100元','5','1465628090');");
E_D("replace into `go_send` values('23','8136','127','L婷仔仔仔','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465628180');");
E_D("replace into `go_send` values('24','8218','101','那痛绕指柔殇','小米手环2 颜色随机','5','1465628375');");
E_D("replace into `go_send` values('25','6212','126','ChirstieQto','MIUI/小米移动电源&nbsp;10000毫安','5','1465628563');");
E_D("replace into `go_send` values('26','10503','119','缺一份矜持W','中国电信&nbsp;话费充值卡面值100元','5','1465628744');");
E_D("replace into `go_send` values('27','6212','125','ChirstieQto','Huawei/华为&nbsp;小天鹅蓝牙免提音箱&nbsp;AM08（白色）','5','1465628819');");
E_D("replace into `go_send` values('28','3501','69','03小弘','Bear/小熊 隔水电炖盅预约定时白瓷电炖锅 DDZ-1181【包邮】','5','1465628900');");
E_D("replace into `go_send` values('29','1576','41','md就是不想看英语','美的电风扇 FS4013CR','5','1465629244');");
E_D("replace into `go_send` values('30','766','83','伊听凝少年无端iPhone6','银手镯999足银 女光面手镯时尚送女友百搭推拉银饰镯子【包邮】','5','1465629373');");
E_D("replace into `go_send` values('31','7367','137','紫芋恋','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465629613');");
E_D("replace into `go_send` values('32','8519','112','SNOWLE','RIO锐澳预调鸡尾酒 洋酒果酒275ML 24瓶装 8个口味全家福','5','1465629824');");
E_D("replace into `go_send` values('33','5221','79','致那些回不去的年少轻狂','斯伯丁NBA经典掌控室内室外PU篮球74-604Y 【包邮】','5','1465629920');");
E_D("replace into `go_send` values('34','12307','104','Zurich-BV','芝华士（Chivas）洋酒 12年苏格兰威士忌 700ml','5','1465629943');");
E_D("replace into `go_send` values('35','1043','144','瑶sss瑶嘎吱嘎吱嘣嘣脆','MIUI/小米自拍杆','5','1465629958');");
E_D("replace into `go_send` values('36','9967','139','彤心雾雨','MIUI/小米移动电源&nbsp;10000毫安','5','1465629995');");
E_D("replace into `go_send` values('37','2531','124','汏汏汏汏鬼toby','925纯银KT猫凯蒂猫手链女','5','1465630019');");
E_D("replace into `go_send` values('38','3571','100','来自火星的仁饼子',' 环奇升级版遥控电动玩具车防摔防撞儿童玩具 颜色随机【包邮】','5','1465630055');");
E_D("replace into `go_send` values('39','4676','109','譿艾啃梨的GD','纯银珐琅手链','5','1465630183');");
E_D("replace into `go_send` values('40','477','143','DXY丁ding','中国联通&nbsp;话费充值卡面值100元','5','1465630618');");
E_D("replace into `go_send` values('41','11536','129','DiBoBiDiBoBi','法国进口红酒&nbsp;拉菲奥希耶徽纹干红葡萄酒&nbsp;750ml（ASC）','5','1465630700');");
E_D("replace into `go_send` values('42','146','136','俊俊家的萌萌蟹Lily_LoveBie','中国移动&nbsp;话费充值卡面值100元','5','1465630700');");
E_D("replace into `go_send` values('43','10097','140','MRBESTKING','中国电信&nbsp;话费充值卡面值100元','5','1465630865');");
E_D("replace into `go_send` values('44','9218','147','解释系主任','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465630865');");
E_D("replace into `go_send` values('45','9335','141','桂房希Athena雅典','Huawei/华为&nbsp;小天鹅蓝牙免提音箱&nbsp;AM08（白色）','5','1465631023');");
E_D("replace into `go_send` values('46','6692','66','碳碳碳酸少女','SUPOR/苏泊尔 不粘锅电磁炉炒锅PJ28R4【包邮】','5','1465631114');");
E_D("replace into `go_send` values('47','10918','151','BY洁晓梵','MIUI/小米自拍杆','5','1465631188');");
E_D("replace into `go_send` values('48','11031','55','Angel海云','六福珠宝足金转运珠圆形路路通串珠黄金吊坠正品计价B01TBGP0001【包邮】约0.5g','5','1465631593');");
E_D("replace into `go_send` values('49','1264','160','我的事业4','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465631683');");
E_D("replace into `go_send` values('50','7891','134','Qusolitary','超人电吹风机&nbsp;SF7310&nbsp;【包邮】','5','1465631729');");
E_D("replace into `go_send` values('51','6298','163','Nancyzhangzz','MIUI/小米自拍杆','5','1465631743');");
E_D("replace into `go_send` values('52','1605','128','0703安心','开光招财貔貅摆件大号一对镇宅辟邪风水客厅商务礼品办公室装饰品','5','1465631788');");
E_D("replace into `go_send` values('53','506','132','恋上一座城爱上一个','金喜路蒙古包蚊帐三开门拉链双人1.8米家用（颜色随机）【包邮】','5','1465632015');");
E_D("replace into `go_send` values('54','9458','133','猫也腹黑','超人&nbsp;电动剃须刀SA7253&nbsp;【包邮】','5','1465632043');");
E_D("replace into `go_send` values('55','3958','135','Ys黄欢','华硕WT420无线鼠标&nbsp;颜色随机【包邮】','5','1465632305');");
E_D("replace into `go_send` values('56','4947','131','伪装假装浮夸','宝丽双面挂钟&nbsp;欧式创意客厅时尚静音钟表两面创意个性田园石英钟（颜色随机）【包邮】','5','1465632380');");
E_D("replace into `go_send` values('57','11536','70','DiBoBiDiBoBi','Midea/美的 迷你家用蒸汽挂烫机YGJ15B3【包邮】','5','1465632499');");
E_D("replace into `go_send` values('58','3252','169','vampire要吃糍粑吗','MIUI/小米自拍杆','5','1465632500');");
E_D("replace into `go_send` values('59','5429','156','岳齊齐哥','中国联通&nbsp;话费充值卡面值100元','5','1465632559');");
E_D("replace into `go_send` values('60','6298','138','Nancyzhangzz','小米手环2&nbsp;颜色随机','5','1465632560');");
E_D("replace into `go_send` values('61','11581','167','Re_暮染星丶末路灯火_Slaine','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465632793');");
E_D("replace into `go_send` values('62','8237','161','simmylong','Huawei/华为&nbsp;小天鹅蓝牙免提音箱&nbsp;AM08（白色）','5','1465632838');");
E_D("replace into `go_send` values('63','234','158','小嘟01','中国移动&nbsp;话费充值卡面值100元','5','1465632839');");
E_D("replace into `go_send` values('64','1362','94','相葉雅纪严重不足','爱奇高婴儿学步车防侧翻多功能儿童宝宝学步车 颜色随机 【包邮】','5','1465632898');");
E_D("replace into `go_send` values('65','7634','159','曾经两个小辫子的女孩','中国电信&nbsp;话费充值卡面值100元','5','1465632980');");
E_D("replace into `go_send` values('66','5483','165','再见来不及握手O_o','MIUI/小米移动电源&nbsp;10000毫安','5','1465633303');");
E_D("replace into `go_send` values('67','2296','50','晴朗太阳Kelly','Midea/美的 全自动多功能面包机EHS15AP-PWSY【包邮】','5','1465633550');");
E_D("replace into `go_send` values('68','6998','53','不认真学习就败不起ZB','日本泰福高正品304不锈钢真空保温饭盒 三层便当盒(颜色随机)','5','1465633588');");
E_D("replace into `go_send` values('69','9729','176','欧欧欧欧欧_碧丶','MIUI/小米自拍杆','5','1465633678');");
E_D("replace into `go_send` values('70','9547','179','玉小花','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465633798');");
E_D("replace into `go_send` values('71','12288','153','乐悠悠306','925纯银KT猫凯蒂猫手链女','5','1465633799');");
E_D("replace into `go_send` values('72','9955','145','茉莉小香珠封新城','美的电风扇&nbsp;FS4013CR','5','1465634008');");
E_D("replace into `go_send` values('73','11562','177','级酱是级长QWQ','中国联通&nbsp;话费充值卡面值100元','5','1465634264');");
E_D("replace into `go_send` values('74','8043','146','宸小小千金','银手镯999足银&nbsp;女光面手镯时尚送女友百搭推拉银饰镯子【包邮】','5','1465634540');");
E_D("replace into `go_send` values('75','3121','187','无忌韩','MIUI/小米自拍杆','5','1465634630');");
E_D("replace into `go_send` values('76','1773','184','雷裂天','MIUI/小米移动电源&nbsp;10000毫安','5','1465634878');");
E_D("replace into `go_send` values('77','1049','149','玉簟秋先生','斯伯丁NBA经典掌控室内室外PU篮球74-604Y&nbsp;【包邮】','5','1465635065');");
E_D("replace into `go_send` values('78','12087','142','璀璨新生312','Bear/小熊&nbsp;隔水电炖盅预约定时白瓷电炖锅&nbsp;DDZ-1181【包邮】','5','1465635088');");
E_D("replace into `go_send` values('79','9113','103','抢盐啦敏宪','英菲力尔20寸炫彩变速单速折叠自行车男女款学生车（颜色随机）【包邮】','5','1465635193');");
E_D("replace into `go_send` values('80','1739','157','把悲伤留给回忆b15','法国进口红酒&nbsp;拉菲奥希耶徽纹干红葡萄酒&nbsp;750ml（ASC）','5','1465635239');");
E_D("replace into `go_send` values('81','8803','188','小扑克xxx','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465635284');");
E_D("replace into `go_send` values('82','12086','106','慧婷yc卷子JUANZ','法国进口红酒 拉菲凯萨天堂古堡波尔多法定产区干红葡萄酒 750ml（ASC）','5','1465635305');");
E_D("replace into `go_send` values('83','8528','180','vela_wu','Huawei/华为&nbsp;小天鹅蓝牙免提音箱&nbsp;AM08（白色）','5','1465635314');");
E_D("replace into `go_send` values('84','9911','181','金热彬','中国移动&nbsp;话费充值卡面值100元','5','1465635359');");
E_D("replace into `go_send` values('85','10232','148','夔龍閯Aarif荔枝廷','RIO锐澳预调鸡尾酒&nbsp;洋酒果酒275ML&nbsp;24瓶装&nbsp;8个口味全家福','5','1465635515');");
E_D("replace into `go_send` values('86','2121','171','王金武99','金喜路蒙古包蚊帐三开门拉链双人1.8米家用（颜色随机）【包邮】','5','1465635606');");
E_D("replace into `go_send` values('87','1556','150','那么_____','芝华士（Chivas）洋酒&nbsp;12年苏格兰威士忌&nbsp;700ml','5','1465635650');");
E_D("replace into `go_send` values('88','1135','170','兮玥_','开光招财貔貅摆件大号一对镇宅辟邪风水客厅商务礼品办公室装饰品','5','1465635763');");
E_D("replace into `go_send` values('89','3602','193','daisy菌儿','MIUI/小米自拍杆','5','1465635784');");
E_D("replace into `go_send` values('90','8408','164','牛霞-x','富光保温杯男女真空不锈钢滤网大容量茶杯420ml【包邮】','5','1465635793');");
E_D("replace into `go_send` values('91','4110','85','张佳好bkb','七匹狼男包商务牛皮包 单肩包斜挎包 男士手提包真皮男公文包背包 颜色随机【包邮】','5','1465635898');");
E_D("replace into `go_send` values('92','2663','154','Whenyouholdmetight79','&nbsp;环奇升级版遥控电动玩具车防摔防撞儿童玩具&nbsp;颜色随机【包邮】','5','1465636139');");
E_D("replace into `go_send` values('93','8058','199','Xqueen7','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465636169');");
E_D("replace into `go_send` values('94','11617','178','灬小小小亮','小米手环2&nbsp;颜色随机','5','1465636205');");
E_D("replace into `go_send` values('95','7356','155','Lin7_Vickers','纯银珐琅手链','5','1465636214');");
E_D("replace into `go_send` values('96','1863','168','小璐璐仙儿','超人电吹风机&nbsp;SF7310&nbsp;【包邮】','5','1465636249');");
E_D("replace into `go_send` values('97','3852','194','JewellryKR','MIUI/小米移动电源&nbsp;10000毫安','5','1465636334');");
E_D("replace into `go_send` values('98','6876','174','容嬷嬷的表妹','宝丽双面挂钟&nbsp;欧式创意客厅时尚静音钟表两面创意个性田园石英钟（颜色随机）【包邮】','5','1465636378');");
E_D("replace into `go_send` values('99','3002','183','Cc雪蜜','中国电信&nbsp;话费充值卡面值100元','5','1465636430');");
E_D("replace into `go_send` values('100','4545','207','杨嘉敏小盆友','MIUI/小米自拍杆','5','1465636754');");
E_D("replace into `go_send` values('101','2970','173','夏半花开','华硕WT420无线鼠标&nbsp;颜色随机【包邮】','5','1465636775');");
E_D("replace into `go_send` values('102','10073','189','曾经曾经De丶那个哪个Ta小树懒0','925纯银KT猫凯蒂猫手链女','5','1465636934');");
E_D("replace into `go_send` values('103','11053','191','小熊喵2001','中国联通&nbsp;话费充值卡面值100元','5','1465637105');");
E_D("replace into `go_send` values('104','2270','172','_小小崔岩','超人&nbsp;电动剃须刀SA7253&nbsp;【包邮】','5','1465637219');");
E_D("replace into `go_send` values('105','3366','211','YYWU7','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465637264');");
E_D("replace into `go_send` values('106','7735','201','如鱼与海','Huawei/华为&nbsp;小天鹅蓝牙免提音箱&nbsp;AM08（白色）','5','1465637383');");
E_D("replace into `go_send` values('107','4830','98','Andy蹄儿_左沈右谢顶初七','好孩子婴儿推车折叠轻便可坐可躺双向四轮避震童车 颜色随机【包邮】','5','1465637533');");
E_D("replace into `go_send` values('108','8438','202','_XXXssssss','中国移动&nbsp;话费充值卡面值100元','5','1465637579');");
E_D("replace into `go_send` values('109','5741','218','happy0407hui','MIUI/小米自拍杆','5','1465637960');");
E_D("replace into `go_send` values('110','7909','223','丶萌小姐','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465638335');");
E_D("replace into `go_send` values('111','5445','215','孙一拾吴','MIUI/小米移动电源&nbsp;10000毫安','5','1465638359');");
E_D("replace into `go_send` values('112','8052','228','胜铉妹几','MIUI/小米自拍杆','5','1465638734');");
E_D("replace into `go_send` values('113','4025','217','qydjp','中国电信&nbsp;话费充值卡面值100元','5','1465638749');");
E_D("replace into `go_send` values('114','9982','208','郑州阿海','富光保温杯男女真空不锈钢滤网大容量茶杯420ml【包邮】','5','1465638823');");
E_D("replace into `go_send` values('115','8319','72','华航大专一高军艳','六福珠宝足金加冕皇冠黄金吊坠女款项坠送礼计价GMGTBP0036【包邮】约1.20g','5','1465638914');");
E_D("replace into `go_send` values('116','3771','190','秀秀秀LING','美的电风扇&nbsp;FS4013CR','5','1465639019');");
E_D("replace into `go_send` values('117','724','198','都比滚滚','法国进口红酒&nbsp;拉菲奥希耶徽纹干红葡萄酒&nbsp;750ml（ASC）','5','1465639160');");
E_D("replace into `go_send` values('118','2054','229','Aonny少女PuddingMilk','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465639325');");
E_D("replace into `go_send` values('119','1063','231','但笑如初心','MIUI/小米自拍杆','5','1465639355');");
E_D("replace into `go_send` values('120','8720','224','晴天雨09','Huawei/华为&nbsp;小天鹅蓝牙免提音箱&nbsp;AM08（白色）','5','1465639355');");
E_D("replace into `go_send` values('121','10954','212','7de憂傷','小米手环2&nbsp;颜色随机','5','1465639559');");
E_D("replace into `go_send` values('122','8297','192','不向阳得向阳花','银手镯999足银&nbsp;女光面手镯时尚送女友百搭推拉银饰镯子【包邮】','5','1465639610');");
E_D("replace into `go_send` values('123','1446','206','ILOVEYYH','开光招财貔貅摆件大号一对镇宅辟邪风水客厅商务礼品办公室装饰品','5','1465639634');");
E_D("replace into `go_send` values('124','2218','204','hhgns_k','金喜路蒙古包蚊帐三开门拉链双人1.8米家用（颜色随机）【包邮】','5','1465639655');");
E_D("replace into `go_send` values('125','9432','221','泥泥阿','中国联通&nbsp;话费充值卡面值100元','5','1465639730');");
E_D("replace into `go_send` values('126','4191','226','励志成功语录','中国移动&nbsp;话费充值卡面值100元','5','1465639814');");
E_D("replace into `go_send` values('127','7142','182','浅浅笑温暖爱','爱奇高婴儿学步车防侧翻多功能儿童宝宝学步车&nbsp;颜色随机&nbsp;【包邮】','5','1465640075');");
E_D("replace into `go_send` values('128','2227','166','流年似锦却已逝','六福珠宝足金转运珠圆形路路通串珠黄金吊坠正品计价B01TBGP0001【包邮】约0.5g','5','1465640128');");
E_D("replace into `go_send` values('129','2086','214','Miss2cherry','超人电吹风机&nbsp;SF7310&nbsp;【包邮】','5','1465640129');");
E_D("replace into `go_send` values('130','2058','175','我的最爱是泡面和烧烤','Midea/美的&nbsp;迷你家用蒸汽挂烫机YGJ15B3【包邮】','5','1465640188');");
E_D("replace into `go_send` values('131','2396','52','雨中遇彩虹','周大生黄金耳钉 女款 足金耳环 玫瑰花 新款正品结婚耳钉【包邮】约1.59','5','1465640204');");
E_D("replace into `go_send` values('132','11967','240','龙桃8893','MIUI/小米自拍杆','5','1465640240');");
E_D("replace into `go_send` values('133','6695','230','波尼咩咩哒','MIUI/小米移动电源&nbsp;10000毫安','5','1465640330');");
E_D("replace into `go_send` values('134','2357','219','秋天的海111','华硕WT420无线鼠标&nbsp;颜色随机【包邮】','5','1465640444');");
E_D("replace into `go_send` values('135','540','220','清普米','925纯银KT猫凯蒂猫手链女','5','1465640579');");
E_D("replace into `go_send` values('136','5306','162','赵三心only一意','SUPOR/苏泊尔&nbsp;不粘锅电磁炉炒锅PJ28R4【包邮】','5','1465640600');");
E_D("replace into `go_send` values('137','2938','239','小影5426','MIUI/小米插线板&nbsp;3个USB充电口&nbsp;1.8m','5','1465640834');");
E_D("replace into `go_send` values('138','12369','242','lls','小米手环2&nbsp;颜色随机','7','1465914911');");
E_D("replace into `go_send` values('139','12399','306','17058969856','MIUI/小米移动电源?10000毫安','7','1526999072');");

require("../../inc/footer.php");
?>