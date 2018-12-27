<?php 
//声明：此文件不能用记事本修改否则会出错，请使用Dreamweaver、EditPlus、Notepad++ ...等专业的工具。

//版本号：1.3
//引入网站数据库配置文件
//if(!defined('THINK_PATH')){ define('THINK_PATH',true); }
$dbCfg=require(SKL_ROOT_PATH.'../system/config/database.inc.php');
$dbCfg=$dbCfg['default'];
//$explodeHost=explode(':',$dbCfg['DB_HOST']);
if(empty($dbCfg['DB_CHARSET'])){ $dbCfg['DB_CHARSET']='utf8'; }

return array(
//数据库配置信息
'cfg_DB_HOST'                 =>$dbCfg['hostname'], //服务器地址*
'cfg_DB_PORT'                 =>'3306',//端口号*
'cfg_DB_NAME'                 =>$dbCfg['database'], // 数据库名*
'cfg_DB_USER'                 =>$dbCfg['username'], // 用户名*
'cfg_DB_PWD'                  =>$dbCfg['password'], // 密码*
'cfg_DB_CHARSET'              =>$dbCfg['charset'],//编码*
'cfg_DB_PREFIX'               =>$dbCfg['tablepre'], // 数据库表前缀*

//'cfg_aliUser'               =>'yueruiwupay@163.com',//支付宝收款账号
//'cfg_tenUser'               =>'2323027019',//QQ钱包收款账号
'cfg_sign'                    =>'',//静态秘钥*
'cfg_geTime'                  =>60*8,//间隔时间8分钟*

'cfg_orderTableName'          =>'member_addmoney_record',//订单表名(不加表前缀)*
'cfg_uidField'                =>'uid',//会员id字段*
'cfg_orderField'              =>'code',//网站订单号字段*
'cfg_sklOrderField'           =>'skl_order',//扫码备注订单号字段(系统自动添加该字段)*
'cfg_moneyField'              =>'money',//金额字段*
'cfg_timeField'               =>'time',//订单创建时间字段*
'cfg_isTimestamp'             =>true,//订单时间是不是时间戳格式(如果不是填false)*
'cfg_stateField'              =>'status',//订单状态字段*
'cfg_stateValue'              =>'已付款',//支付成功订单用什么值代表*
'cfg_payTypeField'            =>'skl_paytype',//支付类型字段(如果没有该字段填skl_paytype系统会自动添加)*
'cfg_aliPayValue'             =>'alipay',//支付宝类型用什么值代表*
'cfg_wxPayValue'              =>'wxpay',//微信类型用什么值代表*
'cfg_tenPayValue'             =>'tenpay',//QQ钱包类用什么值代表*
'cfg_jiaoyiField'             =>'skl_jiaoyi',//交易号字段(如果没有该字段填skl_jiaoyi系统会自动添加)*
'cfg_userField'               =>'',//付款人姓名字段
'cfg_infoField'               =>'',//备注字段

'cfg_memberTableName'         =>'member',//会员表名(不加表前缀)*
'cfg_memberUidField'          =>'uid',//会员UID字段*
'cfg_memberUserField'         =>'username',//会员用户名字段*
'cfg_memberMoneyField'        =>'money',//会员加金额字段*

'cfg_findOrderUrl'            =>SKL_WEBROOT_PATH.'index.php?c=Querystatus',//ajax查询订单状态地址*
'cfg_returnUrl'               =>'/', //付款成功后返回地址,推荐使用相对地址*
'cfg_configId'                =>'',//配置文件识别id
'cfg_isWriteNoteAli'          =>'0',//支付宝输金额方式切换开关, 0=免输金额 1=输金额
'cfg_isWriteNoteWx'           =>'0',//微信输金额方式切换开关, 0=免输金额 1=输金额
'cfg_isWriteNoteTen'          =>'0',//QQ钱包输金额方式切换开关, 0=免输金额 1=输金额
'cfg_isOtherMoney'            =>'1',//是否开启其他金额充值，0=关闭 1=开启
'cfg_payTypeOrder'            =>array('alipay','wxpay','tenpay'),//支付类型显示排序,如果去掉某个值则不显示
);

?>