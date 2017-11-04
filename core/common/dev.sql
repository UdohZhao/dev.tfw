# 后台用户表
CREATE TABLE `admin_user`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `username` varchar(25) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>超级管理员，1>资料审核员，2>新房发布员，3>二手房发布员，4>租房发布员',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>冻结',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 城市表
CREATE TABLE `city`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `pid` tinyint(3) UNSIGNED DEFAULT 0 COMMENT '父级id',
  `cname` varchar(25) NOT NULL COMMENT '名称',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 房类别表
CREATE TABLE `house_category`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `icon_path` varchar(255) NOT NULL COMMENT '图标路径',
  `cname` varchar(25) NOT NULL COMMENT '名称',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 置业顾问表
CREATE TABLE `property_consultant`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `head_portrait` varchar(255) NOT NULL COMMENT '头像路径',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '电话',
  `belong_company` varchar(50) NOT NULL COMMENT '所属地产公司',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 新房条目表
CREATE TABLE `new_house_catalog`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `hcid` int(11) UNSIGNED NOT NULL COMMENT '关联房类别表主键id',
  `cid` int(11) UNSIGNED NOT NULL COMMENT '关联城市表主键id',
  `auid` int(11) UNSIGNED NOT NULL COMMENT '关联后台用户表主键id',
  `slideshow` varchar(50000) NOT NULL COMMENT '轮播图（序列化数组）',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `community` varchar(255) NOT NULL COMMENT '小区',
  `price` int(11) UNSIGNED NOT NULL COMMENT '价格',
  `show_price` varchar(50) NOT NULL COMMENT '展示价格',
  `trait` varchar(255) NOT NULL COMMENT '特点（以英文逗号分隔）',
  `htype` varchar(255) NOT NULL COMMENT '户型（以英文逗号分隔）',
  `prtype` tinyint(1) UNSIGNED NOT NULL COMMENT '产权类型',
  `area` smallint(5) UNSIGNED NOT NULL COMMENT '面积',
  `house_type` tinyint(1) UNSIGNED NOT NULL COMMENT '房屋类型',
  `ptype` varchar(255) NOT NULL COMMENT '物业类型（以英文逗号分隔）',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>默认，1>待审核，2=>未通过，3=>已通过',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>展示，1>隐藏',
  PRIMARY KEY (`id`),
  KEY (`hcid`),
  KEY (`cid`),
  KEY (`auid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 新房详细信息表
CREATE TABLE `new_house_info`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `nhcid` int(11) UNSIGNED NOT NULL COMMENT '关联新房条目表主键id',
  `pcid` int(11) UNSIGNED NOT NULL COMMENT '关联置业顾问表主键id',
  `k` varchar(5000) NOT NULL COMMENT '键名（序列化数组）',
  `v` varchar(5000) NOT NULL COMMENT '键值（序列化数组）',
  PRIMARY KEY (`id`),
  KEY (`nhcid`),
  KEY (`pcid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 新房主力户型表
CREATE TABLE `new_house_main`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `nhcid` int(11) UNSIGNED NOT NULL COMMENT '关联新房条目表主键id',
  `cover_path` varchar(255) NOT NULL COMMENT '封面图片路径',
  `house_type_name` varchar(25) NOT NULL COMMENT '户型',
  `cname` varchar(50) NOT NULL COMMENT '名称',
  `trait` varchar(255) NOT NULL COMMENT '特点（以英文逗号分隔）',
  `price` varchar(25) NOT NULL COMMENT '价格',
  `sell_type` tinyint(1) UNSIGNED NOT NULL COMMENT '销售类型？0>主推，1>在售，2>售完',
  `covered_area` varchar(25) NOT NULL COMMENT '建筑面积',
  `orientation` varchar(25) NOT NULL COMMENT '朝向',
  `down_payment` varchar(255) NOT NULL COMMENT '首付占比（以英文逗号分隔）',
  `mip` varchar(25) NOT NULL COMMENT '月供',
  `analysis` varchar(50000) NOT NULL COMMENT '户型解析（UEditor）',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY (`nhcid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 二手房条目表
CREATE TABLE `used_house_catalog`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `hcid` int(11) UNSIGNED NOT NULL COMMENT '关联房类别表主键id',
  `cid` int(11) UNSIGNED NOT NULL COMMENT '关联城市表主键id',
  `auid` int(11) UNSIGNED NOT NULL COMMENT '关联后台用户表主键id',
  `slideshow` varchar(50000) NOT NULL COMMENT '轮播图（序列化数组）',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `community` varchar(255) NOT NULL COMMENT '小区',
  `htype` varchar(50) NOT NULL COMMENT '房型（以英文逗号分隔）',
  `area` smallint(5) UNSIGNED NOT NULL COMMENT '面积',
  `selling_price` int(11) UNSIGNED NOT NULL COMMENT '售价',
  `show_price` varchar(50) NOT NULL COMMENT '展示售价',
  `trait` varchar(255) NOT NULL COMMENT '特点（以英文逗号分隔）',
  `prtype` tinyint(1) UNSIGNED NOT NULL COMMENT '产权类型',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>默认，1>待审核，2=>未通过，3=>已通过',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>展示，1>隐藏',
  PRIMARY KEY (`id`),
  KEY (`hcid`),
  KEY (`cid`),
  KEY (`auid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 二手房详细信息表
CREATE TABLE `used_house_info`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `uhcid` int(11) UNSIGNED NOT NULL COMMENT '关联二手房条目表主键id',
  `pcid` int(11) UNSIGNED NOT NULL COMMENT '关联置业顾问表主键id',
  `unit_price` varchar(50) NOT NULL COMMENT '单价',
  `tage` varchar(50) NOT NULL COMMENT '楼层',
  `orientation` varchar(25) NOT NULL COMMENT '朝向',
  `type` varchar(50) NOT NULL COMMENT '类型',
  `upfitter` varchar(50) NOT NULL COMMENT '装修',
  `era` varchar(50) NOT NULL COMMENT '年代',
  `ctime` int(10) NOT NULL COMMENT '发布时间',
  `community` varchar(255) NOT NULL COMMENT '小区',
  `rail_transit` varchar(500) NOT NULL COMMENT '轨交（以英文逗号分隔）',
  `selling_points` varchar(50000) NOT NULL COMMENT '核心卖点（UEditor）',
  PRIMARY KEY (`id`),
  KEY (`uhcid`),
  KEY (`pcid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 租房条目表
CREATE TABLE `tenement_catalog`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `hcid` int(11) UNSIGNED NOT NULL COMMENT '关联房类别表主键id',
  `cid` int(11) UNSIGNED NOT NULL COMMENT '关联城市表主键id',
  `auid` int(11) UNSIGNED NOT NULL COMMENT '关联后台用户表主键id',
  `slideshow` varchar(50000) NOT NULL COMMENT '轮播图（序列化数组）',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `community` varchar(255) NOT NULL COMMENT '小区',
  `house_type` varchar(50) NOT NULL COMMENT '房型（以英文逗号分隔）',
  `htype` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>整租，1>合租',
  `rent` int(11) UNSIGNED NOT NULL COMMENT '租金',
  `show_rent` varchar(50) NOT NULL COMMENT '展示租金',
  `dtype` tinyint(1) UNSIGNED NOT NULL COMMENT '装修类型',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>默认，1>待审核，2=>未通过，3=>已通过',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>展示，1>隐藏',
  PRIMARY KEY (`id`),
  KEY (`hcid`),
  KEY (`cid`),
  KEY (`auid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 租房详细信息表
CREATE TABLE `tenement_info`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `tcid` int(11) UNSIGNED NOT NULL COMMENT '关联租房条目表主键id',
  `pcid` int(11) UNSIGNED NOT NULL COMMENT '关联置业顾问表主键id',
  `area` smallint(5) UNSIGNED NOT NULL COMMENT '面积',
  `orientation` varchar(25) NOT NULL COMMENT '朝向',
  `tage` varchar(50) NOT NULL COMMENT '楼层',
  `htype` varchar(50) NOT NULL COMMENT '房屋类型',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '发布时间',
  `general_situation` varchar(50000) NOT NULL COMMENT '房源概况（UEditor）',
  `hconfig` varchar(50) NOT NULL COMMENT '房屋配置（序列化数组）',
  PRIMARY KEY (`id`),
  KEY (`tcid`),
  KEY (`pcid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 卖房信息表
CREATE TABLE `sell_house_info`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `community` varchar(255) NOT NULL COMMENT '小区',
  `area` smallint(5) UNSIGNED NOT NULL COMMENT '面积',
  `house_type` varchar(50) NOT NULL COMMENT '几室几厅几卫（以英文逗号分隔）',
  `selling_price` int(11) UNSIGNED NOT NULL COMMENT '售价',
  `prtype` varchar(50) NOT NULL COMMENT '房屋类型',
  `orientation` varchar(50) NOT NULL COMMENT '朝向',
  `characteristic` varchar(255) NOT NULL COMMENT '房屋特点（以英文逗号分隔）',
  `house_img` varchar(50000) NOT NULL COMMENT '房屋图片（序列化数组）',
  `himg` varchar(500) NOT NULL COMMENT '户型图片（序列化数组）',
  `introduce` varchar(50000) NOT NULL COMMENT '房屋介绍（UEditor）',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '联系电话',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 购房百科类别表
CREATE TABLE `house_encyclopedia_category`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `pid` int(11) UNSIGNED NOT NULL COMMENT '父级id',
  `icon_path` varchar(255) NOT NULL COMMENT '图标路径',
  `cname` varchar(50) NOT NULL COMMENT '名称',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>显示，1>隐藏',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 购房百科文章表
CREATE TABLE `house_encyclopedia_article`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `hecid` int(11) UNSIGNED NOT NULL COMMENT '关联购房百科表主键id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` varchar(50000) NOT NULL COMMENT '内容',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY (`hecid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 金融贷款表
CREATE TABLE `loan`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '电话号码',
  `money` varchar(25) NOT NULL COMMENT '预计贷款费用',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>抵押贷款，1>信用贷款，2>组合贷款',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 关于我们表
CREATE TABLE `about`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `content` varchar(50000) NOT NULL COMMENT '内容',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



