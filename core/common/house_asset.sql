-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-03 08:20:11
-- 服务器版本： 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_asset`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `content` mediumtext NOT NULL COMMENT '内容',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `username` varchar(25) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>超级管理员，1>资料审核员，2>新房发布员，3>二手房发布员',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>冻结'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`, `type`, `status`) VALUES
(1, '重庆存己科技', 'aef484683fc283db3c98551d67ffe218', 0, 0),
(2, '434334', 'feaf6def48f161ff0d54c74da4bfda14', 1, 0),
(3, '4334343', 'feaf6def48f161ff0d54c74da4bfda14', 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `city`
--

CREATE TABLE `city` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `pid` tinyint(3) UNSIGNED DEFAULT '0' COMMENT '父级id',
  `cname` varchar(25) NOT NULL COMMENT '名称',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `city`
--

INSERT INTO `city` (`id`, `pid`, `cname`, `sort`, `status`) VALUES
(1, 0, '北京', 1, 0),
(2, 0, '上海', 2, 0),
(3, 0, '深圳', 3, 0),
(4, 1, '东城', 1, 0),
(5, 1, '西城', 2, 0),
(6, 1, '朝阳', 3, 0),
(7, 1, '海淀', 4, 0),
(8, 1, '丰台', 5, 0),
(9, 1, '石景山', 6, 0),
(10, 1, '通州', 7, 0),
(11, 1, '大兴', 8, 0),
(12, 1, '怀柔', 9, 0),
(13, 1, '平谷', 10, 0),
(14, 1, '顺义', 11, 0),
(15, 1, '密云', 12, 0),
(16, 1, '延庆', 23, 0),
(17, 1, '房山', 14, 0),
(18, 1, '昌平', 15, 0),
(19, 1, '门头沟', 16, 0),
(20, 1, '固安', 17, 0),
(21, 1, '廊坊', 18, 0),
(22, 1, '香河', 19, 0),
(23, 1, '燕郊', 20, 0),
(24, 1, '涿州', 21, 0),
(25, 1, '雄安', 22, 0);

-- --------------------------------------------------------

--
-- 表的结构 `house_category`
--

CREATE TABLE `house_category` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `icon_path` varchar(255) NOT NULL COMMENT '图标路径',
  `cname` varchar(25) NOT NULL COMMENT '名称',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `house_category`
--

INSERT INTO `house_category` (`id`, `icon_path`, `cname`, `sort`, `status`) VALUES
(1, '/admin/uploads/20170727170620_737.png', '新房', 1, 0),
(2, '/admin/uploads/20170727170631_929.png', '二手房', 2, 0),
(4, '/admin/uploads/20170727170644_677.png', '租房', 3, 0),
(5, '/admin/uploads/20170727170656_249.png', '卖房', 4, 0);

-- --------------------------------------------------------

--
-- 表的结构 `house_encyclopedia_article`
--

CREATE TABLE `house_encyclopedia_article` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `hecid` int(11) UNSIGNED NOT NULL COMMENT '关联购房百科表主键id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` mediumtext NOT NULL COMMENT '内容',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `house_encyclopedia_category`
--

CREATE TABLE `house_encyclopedia_category` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `pid` int(11) UNSIGNED NOT NULL COMMENT '父级id',
  `icon_path` varchar(255) NOT NULL COMMENT '图标路径',
  `cname` varchar(50) NOT NULL COMMENT '名称',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>显示，1>隐藏'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `loan`
--

CREATE TABLE `loan` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '电话号码',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>抵押贷款，1>信用贷款，2>组合贷款',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `new_house_catalog`
--

CREATE TABLE `new_house_catalog` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `hcid` int(11) UNSIGNED NOT NULL COMMENT '关联房类别表主键id',
  `cid` int(11) UNSIGNED NOT NULL COMMENT '关联城市表主键id',
  `auid` int(11) UNSIGNED NOT NULL COMMENT '关联后台用户表主键id',
  `slideshow` mediumtext NOT NULL COMMENT '轮播图（序列化数组）',
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
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>展示，1>隐藏'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `new_house_catalog`
--

INSERT INTO `new_house_catalog` (`id`, `hcid`, `cid`, `auid`, `slideshow`, `title`, `community`, `price`, `show_price`, `trait`, `htype`, `prtype`, `area`, `house_type`, `ptype`, `address`, `ctime`, `remark`, `status`, `type`) VALUES
(3, 1, 4, 1, 's:213:\"s:204:\"a:4:{i:0;s:36:\"/admin/uploads/2017-08-03/卖房.png\";i:1;s:39:\"/admin/uploads/2017-08-03/二手房.png\";i:2;s:39:\"/admin/uploads/2017-08-03/新房-01.png\";i:3;s:36:\"/admin/uploads/2017-08-03/租房.png\";}\";\";', '4343', '4343', 4343, '43434343风方法', '4343', '一室,二室,三室', 0, 4343, 0, '普通住宅,公寓', '4343', 1501734509, '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `new_house_info`
--

CREATE TABLE `new_house_info` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `nhcid` int(11) UNSIGNED NOT NULL COMMENT '关联新房条目表主键id',
  `pcid` int(11) UNSIGNED NOT NULL COMMENT '关联置业顾问表主键id',
  `k` varchar(5000) NOT NULL COMMENT '键名（序列化数组）',
  `v` varchar(5000) NOT NULL COMMENT '键值（序列化数组）'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `new_house_info`
--

INSERT INTO `new_house_info` (`id`, `nhcid`, `pcid`, `k`, `v`) VALUES
(2, 3, 2, 'a:4:{i:0;s:4:\"3443\";i:1;s:4:\"4343\";i:2;s:4:\"4343\";i:3;s:4:\"4343\";}', 'a:4:{i:0;s:4:\"3443\";i:1;s:4:\"4343\";i:2;s:4:\"4343\";i:3;s:4:\"4343\";}');

-- --------------------------------------------------------

--
-- 表的结构 `new_house_main`
--

CREATE TABLE `new_house_main` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
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
  `analysis` mediumtext NOT NULL COMMENT '户型解析（UEditor）',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `new_house_main`
--

INSERT INTO `new_house_main` (`id`, `nhcid`, `cover_path`, `house_type_name`, `cname`, `trait`, `price`, `sell_type`, `covered_area`, `orientation`, `down_payment`, `mip`, `analysis`, `ctime`) VALUES
(3, 3, '/admin/uploads/20170803122701_494.jpg', '4343', '4343', '4334', '4343', 0, '4343', '4343', '4343', '4343', '<p>434334</p>', 1501734421),
(4, 3, '/admin/uploads/20170803122730_689.png', '4343', '4343', '434343', '4343', 0, '4343', '4334', '4343', '4343', '<p>4343</p>', 1501734450);

-- --------------------------------------------------------

--
-- 表的结构 `property_consultant`
--

CREATE TABLE `property_consultant` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `head_portrait` varchar(255) NOT NULL COMMENT '头像路径',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '电话',
  `belong_company` varchar(50) NOT NULL COMMENT '所属地产公司',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `property_consultant`
--

INSERT INTO `property_consultant` (`id`, `head_portrait`, `cname`, `phone`, `belong_company`, `ctime`, `status`) VALUES
(2, '/admin/uploads/20170727170602_557.png', '赵四', '18423031888', '到家了', 1501146362, 0),
(3, '/admin/uploads/20170727170547_675.jpg', '张三', '18423031888', '链家', 1501146347, 0);

-- --------------------------------------------------------

--
-- 表的结构 `sell_house_info`
--

CREATE TABLE `sell_house_info` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `community` varchar(255) NOT NULL COMMENT '小区',
  `area` smallint(5) UNSIGNED NOT NULL COMMENT '面积',
  `house_type` varchar(50) NOT NULL COMMENT '几室几厅几卫（以英文逗号分隔）',
  `selling_price` int(11) UNSIGNED NOT NULL COMMENT '售价',
  `htype` varchar(50) NOT NULL COMMENT '房屋类型',
  `orientation` varchar(50) NOT NULL COMMENT '朝向',
  `sdh` tinyint(1) UNSIGNED NOT NULL COMMENT '学区房？0>是，1>否',
  `spr` tinyint(1) UNSIGNED NOT NULL COMMENT '特价房？0>是，1>否',
  `house_img` mediumtext NOT NULL COMMENT '房屋图片（序列化数组）',
  `himg` varchar(500) NOT NULL COMMENT '户型图片（序列化数组）',
  `introduce` mediumtext NOT NULL COMMENT '房屋介绍（UEditor）',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '联系电话',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tenement_catalog`
--

CREATE TABLE `tenement_catalog` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `hcid` int(11) UNSIGNED NOT NULL COMMENT '关联房类别表主键id',
  `cid` int(11) UNSIGNED NOT NULL COMMENT '关联城市表主键id',
  `auid` int(11) UNSIGNED NOT NULL COMMENT '关联后台用户表主键id',
  `slideshow` mediumtext NOT NULL COMMENT '轮播图（序列化数组）',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `community` varchar(255) NOT NULL COMMENT '小区',
  `house_type` varchar(50) NOT NULL COMMENT '房型（以英文逗号分隔）',
  `htype` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>整租，1>合租',
  `rent` int(11) UNSIGNED NOT NULL COMMENT '租金',
  `show_rent` varchar(50) NOT NULL COMMENT '展示租金',
  `dtype` tinyint(1) UNSIGNED NOT NULL COMMENT '装修类型',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>待审核，1>未通过，2>已通过',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>展示，1>隐藏'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tenement_info`
--

CREATE TABLE `tenement_info` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `tcid` int(11) UNSIGNED NOT NULL COMMENT '关联租房条目表主键id',
  `pcid` int(11) UNSIGNED NOT NULL COMMENT '关联置业顾问表主键id',
  `area` smallint(5) UNSIGNED NOT NULL COMMENT '面积',
  `orientation` varchar(25) NOT NULL COMMENT '朝向',
  `tage` varchar(50) NOT NULL COMMENT '楼层',
  `htype` varchar(50) NOT NULL COMMENT '房屋类型',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '发布时间',
  `general_situation` mediumtext NOT NULL COMMENT '房源概况（UEditor）',
  `hconfig` varchar(50) NOT NULL COMMENT '房屋配置（序列化数组）'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `used_house_catalog`
--

CREATE TABLE `used_house_catalog` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `hcid` int(11) UNSIGNED NOT NULL COMMENT '关联房类别表主键id',
  `cid` int(11) UNSIGNED NOT NULL COMMENT '关联城市表主键id',
  `auid` int(11) UNSIGNED NOT NULL COMMENT '关联后台用户表主键id',
  `slideshow` mediumtext NOT NULL COMMENT '轮播图（序列化数组）',
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
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>待审核，1>未通过，2>已通过',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>展示，1>隐藏'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `used_house_info`
--

CREATE TABLE `used_house_info` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
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
  `selling_points` mediumtext NOT NULL COMMENT '核心卖点（UEditor）'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_category`
--
ALTER TABLE `house_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_encyclopedia_article`
--
ALTER TABLE `house_encyclopedia_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hecid` (`hecid`);

--
-- Indexes for table `house_encyclopedia_category`
--
ALTER TABLE `house_encyclopedia_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_house_catalog`
--
ALTER TABLE `new_house_catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hcid` (`hcid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `auid` (`auid`);

--
-- Indexes for table `new_house_info`
--
ALTER TABLE `new_house_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhcid` (`nhcid`),
  ADD KEY `pcid` (`pcid`);

--
-- Indexes for table `new_house_main`
--
ALTER TABLE `new_house_main`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhcid` (`nhcid`);

--
-- Indexes for table `property_consultant`
--
ALTER TABLE `property_consultant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_house_info`
--
ALTER TABLE `sell_house_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenement_catalog`
--
ALTER TABLE `tenement_catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hcid` (`hcid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `auid` (`auid`);

--
-- Indexes for table `tenement_info`
--
ALTER TABLE `tenement_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tcid` (`tcid`),
  ADD KEY `pcid` (`pcid`);

--
-- Indexes for table `used_house_catalog`
--
ALTER TABLE `used_house_catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hcid` (`hcid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `auid` (`auid`);

--
-- Indexes for table `used_house_info`
--
ALTER TABLE `used_house_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uhcid` (`uhcid`),
  ADD KEY `pcid` (`pcid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=26;
--
-- 使用表AUTO_INCREMENT `house_category`
--
ALTER TABLE `house_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `house_encyclopedia_article`
--
ALTER TABLE `house_encyclopedia_article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `house_encyclopedia_category`
--
ALTER TABLE `house_encyclopedia_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `new_house_catalog`
--
ALTER TABLE `new_house_catalog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `new_house_info`
--
ALTER TABLE `new_house_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `new_house_main`
--
ALTER TABLE `new_house_main`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `property_consultant`
--
ALTER TABLE `property_consultant`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `sell_house_info`
--
ALTER TABLE `sell_house_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `tenement_catalog`
--
ALTER TABLE `tenement_catalog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `tenement_info`
--
ALTER TABLE `tenement_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `used_house_catalog`
--
ALTER TABLE `used_house_catalog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `used_house_info`
--
ALTER TABLE `used_house_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
