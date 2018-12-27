<?php
/*
  
*/
$data = array(
    '系统设置'	=>array('SEO设置'=>'setting/webcfg','基本设置'=>'setting/config','上传设置'=>'setting/upload','水印设置'=>'setting/watermark','邮箱设置'=>'setting/email','短信设置'=>'setting/mobile','支付列表'=>'pay/pay_list','支付设置'=>'pay/pay_set','模板域名'=>'setting/domain','交流群'=>'qq_admin/init','清空缓存'=>'cache/init'),
    '管理员管理' =>array('管理员管理'=>'user/lists','管理员设置'=>'user/edit','添加管理'=>'user/reg'),
	'内容管理' =>array('添加文章'=>'content/article_add','文章列表'=>'content/article_list','文章分类'=>'category/lists','修改文章'=>'category/article_edit','删除文章'=>'category/article_del','内容管理'=>'content/lists','内容模型'=>'content/model','广告模块'=>'admanage/admanage_admin','投票模块'=>'vote/vote_admin'),
	'栏目管理'	=>	array('栏目管理'=>'category/lists','添加栏目'=>'category/addcate'),
	'上传文件管理' => array('上传文件列表'=>'upload/lists'),
    '圈子' =>array('圈子管理'=>'quanzi/init','添加圈子'=>'quanzi/insert','帖子查看'=>'quanzi/tiezi','帖子回复查看'=>'quanzi/liuyan','删除'=>'quanzi/del','友情链接'=>'link/lists'),
    '商品管理'=>array('添加商品'=>'content/goods_add','商品管理'=>'content/goods_list','重置价格'=>'content/goods_set_money','修改商品'=>'content/goods_edit','查看往期'=>'qishu/qishu_list','撤销删除'=>'content/goods_del_key','商品回收站'=>'content/goods_del_list'),
    '品牌管理' => array('品牌列表'=>'brand/lists','修改品牌'=>'brand/edit','删除品牌'=>'brand/del','添加品牌'=>'brand/insert'),
	'推荐位管理' => array('推荐位列表'=>'position/lists','推荐位添加'=>'position/add'),

	'订单管理' => array('订单列表'=>'dingdan/lists','详细订单'=>'dingdan/get_dingdan','订单查询'=>'dingdan/select'),
	'晒单'	=>array('晒单查看'=>'shaidan_admin/init','晒单回复'=>'shaidan_admin/sd_hueifu','删除晒单回复'=>'shaidan_admin/hf_del','删除晒单'=>'shaidan_admin/sd_del'),

	'用户管理'=>array('会员列表'=>'member/lists','查找会员'=>'member/select','添加会员'=>'member/insert','会员配置'=>'member/config','会员福利'=>'member/member_fufen','充值记录'=>'member/recharge','修改会员'=>'member/modify','删除会员'=>'member/del','未注册成功'=>'member/noregmember','修改未成功会员'=>'member/modify','快捷及微信注册会员'=>'member/otherregmember','导入会员'=>'member/daorumember','会员消费'=>'member/pay_list','会员组'=>'member/member_group','修改组'=>'member/group_modify','佣金提现'=>'member/commissions'),


	'界面管理'=>array('导航条管理'=>'ments/navigation','导航条修改'=>'ments/editnav','导航删除'=>'ments/navdel','添加导航'=>'ments/addnav'),

	'幻灯片'=>array('幻灯管理'=>'slide/init','幻灯修改'=>'slide/update','幻灯删除'=>'slide/delete','幻灯添加'=>'slide/add'),

	'手机幻灯片'=>array('幻灯管理'=>'wap/init','幻灯修改'=>'wap/update','幻灯删除'=>'wap/delete','幻灯添加'=>'wap/add'),

	'推荐位图片'=>array('推荐位管理'=>'recom/init','推荐位修改'=>'wap/update','推荐位删除'=>'wap/delete','推荐位添加'=>'wap/add'),


	'模板设置'=>array('模板管理'=>'template/init','模板修改'=>'template/edit','查看模板'=>'template/see','查看修改'=>'template/update','后台首页'=>'index/Tdefault'),


	'登陆设置'=>array('QQ登陆'=>'qqlogin/qq_set_config','微博登陆'=>'weibologin/weibo_set_config','微信登陆'=>'wxlogin/wx_set_config','PC微信'=>'wxloginpc/wxpc_set_config'),



	'云应用'=>array('游戏设置'=>'plugin/admin','公益基金'=>'fund/fundset','指定中奖'=>'fund/specifylist','指定中奖删除'=>'fund/zddel','添加指定'=>'fund/specify','新版自动购买'=>'auto/show','批量注册'=>'auto_register/show','充值卡管理'=>'vote_admin/init'),

	'微商城'=>array('微信接口'=>'wechat/wechatcfg','微信菜单'=>'fund/menu','微信菜单2'=>'wechat/menu','微信设置'=>'wechat/cfg','关注回复'=>'wechat/reply','关键字回复'=>'wechat/keywordlists','互动积分'=>'wechat/hdcfg','红包设置'=>'wechat/huiyuan','红包列表'=>'wechat/hblist','红包添加'=>'wechat/hbadd','场景列表'=>'wechat/cjlist','场景添加'=>'wechat/cjadd','分享拿现'=>'wechat/share'),
	'后台地图'=>array('地图'=>'index/map','站点地图'=>'yunwei/websitemap','网站提交'=>'yunwei/websubmit','站长统计'=>'yunwei/webtongji'),



);


return $data;
?>