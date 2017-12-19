-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 112.74.46.113
-- Generation Time: 2017-11-05 02:16:14
-- 服务器版本： 5.7.17
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `content`, `ctime`) VALUES
(1, '<p style=\"background: rgb(255, 255, 255); text-align: justify; line-height: normal; text-indent: 0px; vertical-align: auto; page-break-before: auto; page-break-after: auto; direction: ltr; -ms-layout-grid-mode: both; -ms-word-break: normal; -ms-text-justify: inter-ideograph;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 特</span><span style=\"font-family: 宋体;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">房网是属于</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">北京聚友天下网络科技有限公司</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">。一家立志于为</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">一线城市</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">房地产行业提供线上与线下（O2O）全渠道营销解决方案的房地产互联网平台。</span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">特</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">房网以网络找房、O2O特许加盟、新房电商、住房金融为四大核心平台，服务行业、服务经纪公司、服务经纪人，这是</span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">特</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">房网始终不变的发展定位。</span></span></p><p style=\"background: rgb(255, 255, 255); text-align: justify; line-height: normal; text-indent: 0px; vertical-align: auto; page-break-before: auto; page-break-after: auto; direction: ltr; -ms-layout-grid-mode: both; -ms-word-break: normal; -ms-text-justify: inter-ideograph;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">&nbsp; &nbsp; 20</span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">16</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">年，凭借敏锐的市场前瞻力，创始团队敏锐地捕捉到了互联网引领房地产行业变革的商机，提出了打造“中国领先房地产互联网平台”的战略规划，正式开启</span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">特</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">房网发展之路。</span></span></p><p style=\"background: rgb(255, 255, 255); text-align: justify; line-height: normal; text-indent: 0px; vertical-align: auto; page-break-before: auto; page-break-after: auto; direction: ltr; -ms-layout-grid-mode: both; -ms-word-break: normal; -ms-text-justify: inter-ideograph;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">&nbsp; &nbsp; </span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">特</span><span style=\"font-family: 宋体;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">房网汇聚行业顶尖IT精英，倾力研发移动</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">端</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">的房地产营销工具，并以先进的线上线下相结合的O2O商业模式为利剑，以厚积薄发之势全力拓展</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">一线城市</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">市场，截至201</span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">7</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">年</span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">11</span><span style=\"font-family: 宋体;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">月，已在</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">北京</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">设立</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">总部</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">，并</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">与北京</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">300余家品牌</span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">合作房地产经纪公司展开业务合作</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">。</span></span></p><p style=\"background: rgb(255, 255, 255); text-align: justify; line-height: normal; text-indent: 0px; vertical-align: auto; page-break-before: auto; page-break-after: auto; direction: ltr; -ms-layout-grid-mode: both; -ms-word-break: normal; -ms-text-justify: inter-ideograph;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\"><span style=\"font-family: 宋体;\">&nbsp; &nbsp; </span></span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">特</span><span style=\"font-family: 宋体;\"><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-family: Hiragino Sans GB; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">房网以多元化业务模式，面向</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">一线城市</span><span style=\"color: rgb(102, 102, 102); letter-spacing: 0px; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; vertical-align: baseline;\">各大经纪公司提供开放式平台服务，构筑了房地产经纪行业新型生态链，引领行业全面进入O2O时代。</span></span></p><p><span style=\"font-family: 宋体;\"> &nbsp;&nbsp;&nbsp; </span></p><p></p>', 1509376980);

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
(2, '资料审核员', 'aef484683fc283db3c98551d67ffe218', 1, 0),
(3, '新房发布员', 'aef484683fc283db3c98551d67ffe218', 2, 0),
(4, '二手房发布员', 'aef484683fc283db3c98551d67ffe218', 3, 0),
(5, '租房发布员', 'aef484683fc283db3c98551d67ffe218', 4, 0),
(19, '租房发布员', 'aef484683fc283db3c98551d67ffe218', 2, 0),
(20, '新房发布员1', '89f0b495890138511edbca8d446aa63e', 2, 0),
(29, '二手房', 'aef484683fc283db3c98551d67ffe218', 3, 0),
(30, '租房', 'aef484683fc283db3c98551d67ffe218', 4, 0),
(31, '发布员', 'aef484683fc283db3c98551d67ffe218', 1, 0),
(35, '重庆存12a3s', '89f0b495890138511edbca8d446aa63e', 2, 0),
(36, 'tiany', 'aef484683fc283db3c98551d67ffe218', 3, 0),
(38, 'tianye', 'aef484683fc283db3c98551d67ffe218', 3, 0);

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
(25, 1, '雄安', 22, 0),
(31, 0, '重庆', 4, 1),
(32, 31, '江北', 1, 0),
(33, 32, '阿斯达', 10, 0),
(34, 0, '成都', 4, 0),
(35, 0, '雄安1', 6, 0);

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
(1, '/admin/uploads/20170905124620_408.png', '新房', 1, 0),
(2, '/admin/uploads/20170905124642_886.png', '二手房', 2, 0),
(3, '/admin/uploads/20170905124705_579.png', '租房', 3, 0),
(4, '/admin/uploads/20170905124725_348.png', '卖房', 4, 0),
(14, '/admin/uploads/2017-09-13/20170913181202_240.jpg', '789', 1, 1);

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

--
-- 转存表中的数据 `house_encyclopedia_article`
--

INSERT INTO `house_encyclopedia_article` (`id`, `hecid`, `title`, `content`, `ctime`) VALUES
(64, 183, 'asda', '<p>fasdadadasdasa<br/></p>', 1505291980),
(65, 182, '是萨达', '<p>&nbsp;发送 范德萨发四大法师打发所发生的<br/></p>', 1505296378),
(66, 188, '回迁房个人购买法律会保护吗,注意事项有哪些', '<p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><a title=\"回迁房\" style=\"transition:0.2s; color: rgb(41, 122, 204); text-decoration: none;\" href=\"http://www.66law.cn/special/hqf/\" target=\"_blank\">回迁房</a>比商品房便宜许多，有的朋友想要购买回迁房，但是又不清楚回迁房到底能不能买，购买是否受法律保护。今天，<a title=\"华律网\" style=\"transition:0.2s; color: rgb(41, 122, 204); text-decoration: none;\" href=\"http://www.66law.cn/\" target=\"_blank\">华律网</a>小编整理了关于回迁房个人购买法律会保护吗,注意事项有哪些的内容，希望对您有所帮助。</p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><strong>满足回迁房购买条件的受法律保护</strong></p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">回迁房一般是经济适用房的性质,不超过5年的买方要具备购买经济适用房的的资格。如果此房未超过5年,但你有购买经济适用房资格或此房已超过5年可自由上市,你就有购买资格,卖方反悔要承担违约责任。回迁房在办理了房屋产权证书后可进行买卖,购买未取得产权证书的回迁房则可能面临极大的风险,回迁手续更名并不能取代房屋产权证书。在这里须注意的事项包括要求卖方提供回迁协议及其身份证明, 并对回迁房的真实性进行核实,同时要注意确定该房屋之上是否有共有人,是否设定抵押权。另外须查明该房是属于危改回迁,还是属于商品房回迁。</p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><strong>注意事项</strong></p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">1、购买回迁房购买者要承担很大的风险，购买回迁房一定要注意回迁房过户手续问题 。</p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">2、如今回迁房的交易比例已在整个房产交易市场上占到一定的比例，这些回迁房总体分两种情况：一种是业主已经持有房产证，可以马上办理回迁房过户。另一种是业主只持有回迁协议，暂时不能办理回迁房过户。</p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">3、业主手中只有发展商的回迁协议的，在做二手交易时是不能在房地产交易所做公证过户和改名的。因为该回迁协议只是业主与发展商之间的私人商业协议，此协议并没有得到房管部门的认可。因此双方进行交易时，只能是在公证处做公证交易，待《房产证》出来后才能做真正的过户交易。</p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">4、《中华人民共和国城市<a title=\"房地产管理法\" style=\"transition:0.2s; color: rgb(41, 122, 204); text-decoration: none;\" href=\"http://www.66law.cn/tiaoli/8.aspx\" target=\"_blank\">房地产管理法</a>》第三十八条规定：“下列房地产，不得转让：……(六)未依法登记领取权属证书的……”。该条真实的立法意图不在于禁止预售商品房的再转让，而在于方便行政管理，不属于合同效力取缔性规范。只要是出卖人有《<a title=\"拆迁\" style=\"transition:0.2s; color: rgb(41, 122, 204); text-decoration: none;\" href=\"http://www.66law.cn/chaiqiananzhi/\" target=\"_blank\">拆迁</a>协议》和《回迁证》，即取得对房屋的准所有权，有权对其所安置的房屋进行处分。因此，只要双方意思表示真实，不损害国家、集体或第三人利益，在取得《房地产证》之前，可以转让房屋，买卖双方签订的房地产买卖合同有效。</p><p style=\"font: 14px/28px tahoma, 微软雅黑; margin: 15px 0px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 2em; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">5、因此，买受人不能以回迁房未过户主张房屋买卖合同无效，为减少损失，在购买回迁房时，应当注意回迁房的过户问题。</p><p></p>', 1506436927),
(67, 188, '法律规定回迁房有没有公摊面积', '<pre class=\"best-text mb-10\" style=\"font: 16px/29px &quot;PingFang SC&quot;, &quot;Lantinghei SC&quot;, &quot;Microsoft YaHei&quot;, arial, 宋体, sans-serif, tahoma; margin: 10px 0px; padding: 0px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: pre-wrap; -ms-word-wrap: break-word; min-height: 55px; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">按照国务院《中华人民共和国征收拆迁补偿条例》等文件，拆迁实物补偿，返迁房屋面积包含公摊。\n　　在实际操作中，可以与开发商讨价还价，因为在拆迁过程中，一般会搞模拟拆迁，也就是开发商与原居民讨价还价的过程，最终达成一致意见，补偿标准可能不会完全一样，这样，谈下来补偿的要求可以提高一些，这样就可以实现按照你的建筑面积同面积补偿，也就所谓你的返迁建筑面积已经不包含公摊，得到的是与你原来建筑面积相等的。\n　　不过，最终你领取的产权证里面的建筑面积（也就是比你的大的），按照建设部《关于房屋建筑面积计算与房屋权属登记有关问题的通知&nbsp;》和《关于贯彻执行的补充通知﻿&nbsp;，以及，登记的建筑面积包含公摊。</pre><p></p>', 1506437046),
(68, 188, '434334', '<p>344343fadf<br/></p>', 1507970530),
(69, 191, '福利房111', '<p style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">瑞士有两样东西在世界上是无可匹敌的，一是钟表，二是银行。其中，瑞士银行因其独一无二的保密性被称为有钱人的天堂。今年6月瑞士银行日内瓦分行的马桶堵了，随后几天周边3家餐馆的马桶也堵住了，最后经疏通发现堵住马桶的竟是一捆捆500欧的纸币，总价值达到10万欧。这场名副其实的“洗钱”让网友感叹瑞士人真是“视金钱如粪土”。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">本来只是一句玩笑话，没想到最近瑞士的下水道里真的发现了黄金。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">据CNN报道，科学家们在瑞士的下水道和废水处理厂中发现了微量黄金，而据瑞士联邦水科学和技术研究所（EAWAG）的一项研究统计估算称，瑞士每年被冲入废水系统的黄金价值不菲，大约有95磅，以当前的现货黄金价格计算，损失的黄金价值近200万美元（约合人民币1316.36万人民币）。</p><p><img class=\"large\" src=\"https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=1303628669,628592571&fm=173&s=F85229C4008726F400790D9203000083&w=550&h=315&img.JPEG\"/></p><p style=\"margin: 26px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">▲图片来源：CNN</p><p></p>', 1507996330),
(70, 191, '测试', '<p style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">瑞士有两样东西在世界上是无可匹敌的，一是钟表，二是银行。其中，瑞士银行因其独一无二的保密性被称为有钱人的天堂。今年6月瑞士银行日内瓦分行的马桶堵了，随后几天周边3家餐馆的马桶也堵住了，最后经疏通发现堵住马桶的竟是一捆捆500欧的纸币，总价值达到10万欧。这场名副其实的“洗钱”让网友感叹瑞士人真是“视金钱如粪土”。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">本来只是一句玩笑话，没想到最近瑞士的下水道里真的发现了黄金。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">据CNN报道，科学家们在瑞士的下水道和废水处理厂中发现了微量黄金，而据瑞士联邦水科学和技术研究所（EAWAG）的一项研究统计估算称，瑞士每年被冲入废水系统的黄金价值不菲，大约有95磅，以当前的现货黄金价格计算，损失的黄金价值近200万美元（约合人民币1316.36万人民币）。</p><p><img class=\"large\" src=\"https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=1303628669,628592571&fm=173&s=F85229C4008726F400790D9203000083&w=550&h=315&img.JPEG\"/></p><p style=\"margin: 26px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">▲图片来源：CNN</p><p></p>', 1507996581),
(71, 194, '测试', '<p style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">瑞士有两样东西在世界上是无可匹敌的，一是钟表，二是银行。其中，瑞士银行因其独一无二的保密性被称为有钱人的天堂。今年6月瑞士银行日内瓦分行的马桶堵了，随后几天周边3家餐馆的马桶也堵住了，最后经疏通发现堵住马桶的竟是一捆捆500欧的纸币，总价值达到10万欧。这场名副其实的“洗钱”让网友感叹瑞士人真是“视金钱如粪土”。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">本来只是一句玩笑话，没想到最近瑞士的下水道里真的发现了黄金。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">据CNN报道，科学家们在瑞士的下水道和废水处理厂中发现了微量黄金，而据瑞士联邦水科学和技术研究所（EAWAG）的一项研究统计估算称，瑞士每年被冲入废水系统的黄金价值不菲，大约有95磅，以当前的现货黄金价格计算，损失的黄金价值近200万美元（约合人民币1316.36万人民币）。</p><p><img class=\"large\" src=\"https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=1303628669,628592571&fm=173&s=F85229C4008726F400790D9203000083&w=550&h=315&img.JPEG\"/></p><p style=\"margin: 26px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">▲图片来源：CNN</p><p></p>', 1507996691);

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

--
-- 转存表中的数据 `house_encyclopedia_category`
--

INSERT INTO `house_encyclopedia_category` (`id`, `pid`, `icon_path`, `cname`, `sort`, `status`) VALUES
(175, 0, '/admin/uploads/2017-10-14/20171014164440_188.jpeg', '大大', 3, 0),
(180, 0, '/admin/uploads/2017-09-13/20170913160530_634.jpg', '未知名称', 6, 0),
(182, 0, '/admin/uploads/2017-10-14/20171014164449_977.jpeg', '789', 4, 0),
(183, 175, '/admin/uploads/2017-09-13/20170913163853_371.jpg', '789', 2, 0),
(184, 0, '/admin/uploads/2017-09-13/20170913175239_474.jpg', '123456', 5, 0),
(186, 0, '/admin/uploads/2017-10-14/20171014164459_752.jpeg', '法拍房注意点', 2, 0),
(187, 0, '/admin/uploads/2017-10-14/20171014163747_718.jpeg', '回迁房注意点', 1, 0),
(188, 187, '/admin/uploads/2017-10-14/20171014163819_975.jpeg', '回迁房法律问题', 1, 0),
(190, 0, '/admin/uploads/2017-10-14/20171014235053_191.jpg', '福利房', 1, 0),
(191, 190, '/admin/uploads/2017-10-14/20171014235115_997.jpg', '福利房1', 2, 0),
(192, 0, '/admin/uploads/2017-10-14/20171014235326_378.jpg', '商住两用新政', 1, 0),
(193, 0, '/admin/uploads/2017-10-14/20171014235701_944.jpg', '法制房', 2, 0),
(194, 193, '/admin/uploads/2017-10-14/20171014235752_306.jpg', '发脂肪1', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `loan`
--

CREATE TABLE `loan` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键id',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '电话号码',
  `money` varchar(25) NOT NULL COMMENT '预计贷款费用',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>抵押贷款，1>信用贷款，2>组合贷款',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `loan`
--

INSERT INTO `loan` (`id`, `cname`, `phone`, `money`, `ctime`, `type`, `status`) VALUES
(122, '张三', '18290508520', '', 1504973494, 2, 1),
(123, '赵四', '18423031898', '', 1504974223, 1, 1),
(125, '田野', '18518793908', '', 1506436527, 1, 1),
(126, '田野', '18518793908', '', 1506436529, 1, 1),
(135, '田野', '18518793908', '', 1507982061, 0, 1),
(136, '好', '18518793907', '', 1507982092, 2, 1),
(137, '王玉', '18518793902', '', 1509377073, 2, 1),
(138, '344343', '18423031899', '4343万', 1509767025, 2, 1),
(139, '赵四', '18423031899', '500万', 1509768835, 2, 1);

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
(78, 1, 13, 3, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-04\\201709041504518125.jpg\";}', '阳光一样的花园', '阳光小区', 2000, '1万/平方', '四季如冬', '二室', 1, 21, 1, '公寓', '未知街道', 1504518152, '什么都不比较翻遍', 3, 1),
(79, 1, 4, 3, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-04\\201709041504525655.jpg\";}', '新房', '按时', 2000, '2000', ',好房,大气', '二室', 1, 100, 1, '公寓', '未知街道', 1504525673, '交通比较方便', 3, 1),
(80, 1, 4, 3, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-05\\201709051504578050.jpg\";}', '阿斯达', '啊实打实夫人访问', 12, '2000', '阿斯达', '二室', 1, 1000, 1, '公寓', '阿斯达', 1504578063, '交通比较方便', 1, 0),
(81, 1, 4, 3, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-05\\201709051504578188.jpg\";}', '买买买', '粉粉粉', 123, '213', '的稳定', '三室', 2, 1000, 3, '花园式洋房', '东城大楼', 1504578219, '交通比较方便', 1, 0),
(82, 1, 13, 1, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-05\\201709051504578616.jpg\";}', '大房', '阳光花园小区', 120, '100', '优美', '四室', 2, 108, 1, '花园式洋房', '北京四合院', 1504691446, '交通比较方便', 3, 1),
(83, 1, 10, 3, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-05\\201709051504599607.jpg\";}', '好房', '啊实打实夫人访问', 12, '213', '的稳定', '二室', 1, 100, 2, '花园式洋房', '东城大楼', 1504599617, '交通比较方便', 1, 0),
(84, 1, 4, 1, 'a:4:{i:0;s:51:\"/admin/uploads/2017-09-05/15045997841215528804.jpeg\";i:1;s:51:\"/admin/uploads/2017-09-05/15045997841123784556.jpeg\";i:2;s:51:\"/admin/uploads/2017-09-05/15045997841248424825.jpeg\";i:3;s:50:\"/admin/uploads/2017-09-05/1504599784196026223.jpeg\";}', '东城小区', '东原D7', 4334, '160万元／套起', '采光好，通风，环境优美', '二室,三室', 0, 4334, 1, '公寓,花园式洋房', '大石坝东原D7', 1504599936, '交通比较方便', 3, 1),
(85, 1, 25, 1, 'a:4:{i:0;s:49:\"/admin/uploads/2017-09-05/1504602298331210635.jpg\";i:1;s:49:\"/admin/uploads/2017-09-05/1504602298440789223.jpg\";i:2;s:50:\"/admin/uploads/2017-09-05/15046022981659273138.jpg\";i:3;s:50:\"/admin/uploads/2017-09-05/15046022981607584609.jpg\";}', '九龙坡中粮鸿云', '中粮鸿云', 12000, '12000元/m² ', '采光好，通风，地段好，环境优美', '二室,三室', 3, 105, 1, '公寓,花园式洋房', '[ 九龙坡 - 盘龙 ] 九龙坡区蟠龙大道', 1504603293, '交通比较方便', 3, 0),
(86, 1, 4, 3, 'a:4:{i:0;s:49:\"/admin/uploads/2017-09-05/1504607290576624022.jpg\";i:1;s:49:\"/admin/uploads/2017-09-05/1504607290809556839.jpg\";i:2;s:50:\"/admin/uploads/2017-09-05/15046072901662494663.jpg\";i:3;s:49:\"/admin/uploads/2017-09-05/1504607290780141486.jpg\";}', '沙坪坝国盛园墅', '国盛园墅', 1474578, '80-126 万元/套', '采光好,通风,地段好,环境优美', '一室,二室,三室,四室,五室及以上', 0, 105, 0, '普通住宅,公寓', '九龙坡区小时代', 1504607456, '交通比较方便', 3, 0),
(87, 1, 13, 1, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-06\\15046914673381.jpg\";}', '好的房子', '花园小区', 150, '200', '很好的', '二室', 1, 120, 1, '公寓', '城市', 1504691470, '交通比较方便', 0, 0),
(89, 1, 10, 20, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-06\\15046874278096.jpg\";}', '好的房子这特房网', '阳光', 2000, '20万', '很好的房子', '三室', 2, 80, 3, '别野,写字楼,商铺', '北京一环', 1504687519, '交通比较方便', 0, 0),
(90, 1, 4, 20, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-06\\150468806420254.jpg\";}', '结束', '阳光小区', 120, '2000', '123,好房,大气', '二室', 2, 100, 1, '公寓', '北京一环', 1504688068, '交通比较方便', 1, 0),
(94, 1, 4, 20, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-07\\15047491802974.jpg\";}', '二手房买卖', '按时', 120, '1万/平方', '低烧', '三室', 2, 108, 2, '酒店式公寓', '北京四合院', 1504749227, '无需付款，秩序买卖', 3, 1),
(96, 1, 11, 3, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-08\\150486458518041.jpg\";}', '音乐未来城', '沙坪坝 西永', 1000000, '8300元/m²', '地势好，位子好，风景好。', '三室,四室', 1, 63, 1, '花园式洋房,酒店式公寓', '九龙坡区巴国城 保利可爱岛 ', 1504865156, '很好的环境优美如画', 1, 0),
(97, 1, 25, 1, 'a:1:{i:0;s:49:\"/admin/uploads/2017-09-08/1504867812812280510.jpg\";}', '33232', '332', 2332, '323232', '3232', '二室,三室', 1, 3232, 2, '公寓', '322', 1504867817, '3232', 1, 0),
(98, 1, 10, 3, 'a:1:{i:0;s:45:\"/admin/uploads/2017-09-08/150486826423488.jpg\";}', '新房AS  ', '按时', 120, '1万/平方', '123,好房,大气', '二室', 1, 100, 2, '花园式洋房', '阿斯达', 1504868278, '阿斯达', 1, 0),
(99, 1, 13, 1, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-08\\15048697127750.jpg\";}', '新的房子', '阳光小区', 20000, '1万/平方', '低烧', '一室,二室', 1, 120, 2, '花园式洋房,酒店式公寓', '北京一环', 1504869776, '无需付款，秩序买卖', 0, 0),
(100, 1, 4, 1, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-08\\15048697878487.jpg\";}', '按时', '12354', 12, '1300', '123,好房,大气', '二室', 1, 100, 2, '花园式洋房', '阿斯达', 1504869813, '阿斯达', 0, 0),
(101, 1, 19, 3, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-09\\150491966931885.jpg\";}', '东方港湾，', '陆玲小区', 400000, '3000元/月', '优美的环境，城市气氛好', '三室', 3, 120, 3, '花园式洋房', '江北区大石坝 大石坝六村 ', 1504919696, '距地铁6号线号线124.00米', 0, 0),
(102, 1, 13, 3, 'a:8:{i:0;s:45:\"/admin/uploads\\2017-09-09\\150495027315255.jpg\";i:1;s:44:\"/admin/uploads\\2017-09-09\\15049503434484.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-09\\150495034322694.jpg\";i:3;s:44:\"/admin/uploads\\2017-09-09\\15049503438127.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-09\\150495034323917.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-09\\150495034326252.jpg\";i:6;s:43:\"/admin/uploads\\2017-09-09\\1504950343743.jpg\";i:7;s:45:\"/admin/uploads\\2017-09-09\\150495034311682.jpg\";}', '杨家坪', '球笼破去海峰楼', 120000, '200元', '好抵挡', '二室', 1, 23, 1, '花园式洋房', '水电费', 1504950346, '123', 0, 0),
(103, 1, 10, 3, 'a:8:{i:0;s:45:\"/admin/uploads\\2017-09-09\\150495134424042.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-09\\150495134425486.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-09\\150495134430939.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-09\\150495134422447.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-09\\150495134424440.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-09\\150495134422460.jpg\";i:6;s:45:\"/admin/uploads\\2017-09-09\\150495143126193.jpg\";i:7;s:44:\"/admin/uploads\\2017-09-09\\15049514649546.jpg\";}', '4254345', '按时', 12, '2000', '123,好房,大气', '二室', 1, 100, 1, '公寓', '北京一环', 1504951486, '无需付款，秩序买卖', 1, 0),
(104, 1, 4, 1, 'a:5:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150527252115948.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150527252110167.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150527252124213.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150527252123332.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150527252123466.jpg\";}', '好房需要买吗', '号小区', 10000, '100万', '交通壕', '一室', 0, 149, 0, '普通住宅', '北京市丰台区sdfsdf', 1505210429, '很好', 3, 1),
(106, 1, 4, 1, 'a:5:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150527252115948.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150527252110167.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150527252124213.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150527252123332.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150527252123466.jpg\";}', '新房12啊', '按时', 12, '2000', '阿斯达', '二室', 1, 100, 1, '公寓', '阿斯达', 1505272540, '阿斯达', 1, 0),
(107, 1, 10, 1, 'a:1:{i:0;s:43:\"/admin/uploads\\2017-09-13\\1505281032511.jpg\";}', 'asdasd ', '按时', 12, '1300', '阿斯达', '二室', 1, 120, 1, '公寓', '未知街道', 1505281057, '阿斯达', 1, 0),
(108, 1, 4, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150529250111370.jpg\";}', '新房阿斯达', '12354', 2000, '2000', '阿斯达', '二室', 1, 108, 2, '花园式洋房', '阿斯达', 1505292522, '阿斯达', 1, 0),
(109, 1, 13, 1, 'a:8:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150529259912103.jpg\";i:1;s:44:\"/admin/uploads\\2017-09-13\\15052925992009.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150529259929556.jpg\";i:3;s:44:\"/admin/uploads\\2017-09-13\\15052925999630.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150529259912445.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-13\\150529259922655.jpg\";i:6;s:45:\"/admin/uploads\\2017-09-13\\150529259914610.jpg\";i:7;s:44:\"/admin/uploads\\2017-09-13\\15052925994172.jpg\";}', '开始的低啊法犯法阿斯达萨法', '12354', 12, '2000', '123,好房,大气', '二室', 1, 100, 1, '公寓', '阿斯达', 1505292621, '无需付款，秩序买卖', 2, 0),
(110, 1, 4, 1, 'a:6:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150529275225947.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150529275222197.jpg\";i:2;s:44:\"/admin/uploads\\2017-09-13\\15052927524600.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150529275231017.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150529275216714.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-13\\150529275226321.jpg\";}', '新房12', '12354', 12, '1300', '阿斯达', '二室', 1, 120, 1, '公寓', '北京四合院中间', 1505292770, 'haode', 2, 0),
(111, 1, 4, 1, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-13\\15052929371153.jpg\";}', '新房啊实打实大', '12354', 12, '2000', '阿斯达', '二室', 1, 12, 1, '公寓', '北京一环', 1505292953, '阿斯达', 1, 0),
(112, 1, 4, 1, 'a:6:{i:0;s:44:\"/admin/uploads\\2017-09-13\\15052930989526.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150529309813475.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150529309831799.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150529309817312.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150529309821924.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-13\\150529309829263.jpg\";}', '新房阿斯', '按时', 2000, '1300', '阿斯达', '二室,三室', 2, 108, 3, '酒店式公寓,商住两用', '阿斯达', 1505293122, '阿斯达', 2, 0),
(114, 1, 4, 1, 'a:5:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150529526332485.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150529526316447.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150529526332186.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150529526315628.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150529526325707.jpg\";}', '按时三打三防打死', '阳光小区', 12, '1300', '低烧', '二室', 1, 100, 1, '公寓', '未知街道', 1505295281, 'haode', 2, 0),
(115, 1, 4, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150529612210262.jpg\";}', '新房撒大声大声', '12354', 12, '1300', '123,好房,大气', '二室', 1, 100, 1, '公寓', '北京一环', 1505296139, '无需付款，秩序买卖', 1, 0),
(116, 1, 4, 1, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-13\\15052976338901.jpg\";}', '新房陪【', '按时', 120, '1300', '123,好房,大气', '二室', 1, 100, 1, '公寓', '阿斯达', 1505297637, 'haode', 1, 0),
(117, 1, 4, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-14\\150535421127794.jpg\";}', '按时asd', '阳光小区', 12, '2000', '123,好房,大气', '二室', 1, 108, 1, '公寓', '未知街道', 1505354229, '阿斯达', 0, 0),
(118, 1, 13, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-14\\150535452426211.jpg\";}', '新房adsada', '12354', 2000, '13', '阿斯达', '二室', 1, 100, 1, '公寓', '北京一环', 1505354540, 'haode', 0, 0),
(119, 1, 10, 1, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-15\\15054426843223.jpg\";}', '按时asddsgdrhrthdsf', '12354', 12, '1300', 'NNN', '二室', 1, 100, 1, '公寓', '阿斯达', 1505442701, '无需付款，秩序买卖', 0, 0),
(120, 1, 7, 1, 'a:3:{i:0;s:49:\"/admin/uploads/2017-09-26/1506433735229285595.jpg\";i:1;s:50:\"/admin/uploads/2017-09-26/15064337352017324306.jpg\";i:2;s:48:\"/admin/uploads/2017-09-26/150643373614229037.jpg\";}', '海淀好房，着急出售', '世纪家园', 100000, '100000/平米', '南北通透，学区，临公园，便宜', '一室', 0, 76, 0, '普通住宅', '北京市海淀区学府路38号', 1506434109, '首开香溪郡现房即将入市，项目实体样板间已于9月10日开放，9月16日开始办卡，户型面积为90-105平米三居。具体推出时间待定，价格待定。项目位于通州东北五环通顺路与窑管路交汇处。敬请关注！', 3, 1),
(121, 1, 8, 1, 'a:5:{i:0;s:50:\"/admin/uploads/2017-09-26/15064404661992470272.jpg\";i:1;s:49:\"/admin/uploads/2017-09-26/1506440466746924557.jpg\";i:2;s:49:\"/admin/uploads/2017-09-26/1506440466122777864.jpg\";i:3;s:49:\"/admin/uploads/2017-09-26/1506440466499409255.jpg\";i:4;s:50:\"/admin/uploads/2017-09-26/15064404671243129893.jpg\";}', '丰台科技园新房出售', '鹏程万里', 70000, '70000元/平', '学区，南北，临街，商业发达', '一室,二室,三室,四室', 5, 89, 2, '普通住宅', '北京市丰台区科技园32号', 1506439756, '北京市丰台区科技园32号北京市丰台区科技园32号', 3, 1),
(122, 1, 6, 1, 'a:5:{i:0;s:50:\"/admin/uploads/2017-09-26/15064404661992470272.jpg\";i:1;s:49:\"/admin/uploads/2017-09-26/1506440466746924557.jpg\";i:2;s:49:\"/admin/uploads/2017-09-26/1506440466122777864.jpg\";i:3;s:49:\"/admin/uploads/2017-09-26/1506440466499409255.jpg\";i:4;s:50:\"/admin/uploads/2017-09-26/15064404671243129893.jpg\";}', '朝阳好房', '朝阳园', 80000, '80000元/平米', '南北，临海', '二室,三室', 5, 65535, 0, '商住两用', '朝阳大悦城', 1506440577, '很好的房屋', 3, 1),
(123, 1, 8, 1, 'a:3:{i:0;s:49:\"/admin/uploads/2017-10-14/1507988704108175550.jpg\";i:1;s:49:\"/admin/uploads/2017-10-14/1507988704117619970.jpg\";i:2;s:49:\"/admin/uploads/2017-10-14/1507988704759126172.jpg\";}', '丰台科技园', '科技园之光', 50000, '50000元/㎡', '地铁近', '五室及以上', 0, 65535, 1, '商住两用', '丰台科技园', 1507988994, '房子便宜还好', 0, 0),
(124, 1, 7, 1, 's:0:\"\";', '海淀好房', '海定校区', 10000, '10000元', '很好，很好啊，很好啊啊', '三室', 1, 100, 1, '普通住宅', '海淀区啊  ', 1507997031, '斯蒂芬斯蒂芬', 3, 1),
(125, 1, 8, 1, 's:0:\"\";', '庞各庄新盘', '庞各庄1号', 30000, '30000/㎡', '交通好，朝向好', '一室,二室,三室', 0, 65535, 1, '普通住宅', '庞各庄1号', 1508679975, '很好的房', 3, 1),
(126, 1, 8, 1, 'a:3:{i:0;s:48:\"/admin/uploads/2017-10-30/150937428525755050.jpg\";i:1;s:49:\"/admin/uploads/2017-10-30/1509374285490950322.jpg\";i:2;s:50:\"/admin/uploads/2017-10-30/15093742851663345552.jpg\";}', '丰台火车站', '丰台火车站', 888, '888万', '交通方便，朝向好', '二室,三室', 1, 300, 0, '商住两用', '丰台火车站', 1509374393, '丰台火车站', 3, 1),
(127, 1, 18, 1, 'a:3:{i:0;s:50:\"/admin/uploads/2017-10-30/15093751651591681273.jpg\";i:1;s:49:\"/admin/uploads/2017-10-30/1509375165659022748.gif\";i:2;s:49:\"/admin/uploads/2017-10-30/1509375165825656562.jpg\";}', '昌平新房测试', '昌平新房测试小区', 20000, '20000/㎡', '便宜，朝向好，交通好', '一室,二室,三室,四室,五室及以上', 0, 50000, 2, '商住两用', '昌平新房测试水电费', 1509375283, '这是昌平的测试', 3, 1),
(128, 1, 8, 1, 'a:1:{i:0;s:48:\"/admin/uploads/2017-10-30/150937589252772901.gif\";}', '测试1', '测试1', 10000, '20000元/平米', 'AAA,BBB,CC对方水电费', '一室,二室,三室,四室,五室及以上', 1, 50000, 1, '普通住宅', '测试地址', 1509375982, '很好', 3, 1),
(129, 1, 8, 1, 's:0:\"\";', '测试1435454', '融创金开融府', 3443, '5445', '采光好，通风，地段好，环境优美', '一室,二室,三室', 0, 65535, 1, '普通住宅,公寓', '45454', 1509695573, '545445', 1, 0),
(130, 1, 8, 1, 's:0:\"\";', '111111111', '11232344', 34454, '5454', '5454', '一室,二室,三室', 0, 2323, 0, '普通住宅', '445', 1509696629, '545454', 0, 0),
(131, 1, 25, 1, 's:0:\"\";', '测试新房', '4343', 4554, '54554', '545454', '一室,二室,三室', 0, 4554, 0, '普通住宅,公寓,花园式洋房', '5454', 1509703764, '455454', 0, 0),
(132, 1, 25, 1, 's:0:\"\";', '434343', '434343', 4343443, '34545434', '434334', '一室,二室', 0, 65535, 0, '普通住宅,公寓,花园式洋房', '434343', 1509704066, '44343', 0, 0),
(133, 1, 4, 1, 'a:2:{i:0;s:50:\"/admin/uploads/2017-11-03/15097141651125556977.jpg\";i:1;s:50:\"/admin/uploads/2017-11-03/15097141651934846147.jpg\";}', '5454545454', '545445', 4545, '4554', '4554', '一室,二室,三室,四室', 0, 4554, 0, '公寓,花园式洋房', '5454', 1509714190, '5454', 0, 0),
(135, 1, 25, 1, 'a:3:{i:0;s:50:\"/admin/uploads/2017-11-04/15097645461574917161.jpg\";i:1;s:50:\"/admin/uploads/2017-11-04/15097645461348459622.jpg\";i:2;s:49:\"/admin/uploads/2017-11-04/1509764546872996031.jpg\";}', '蓝光林肯公园11月将推建面142㎡-168㎡房源', '蓝光林肯公园', 4354, '4554', '4554', '一室,二室,三室,四室,五室及以上', 0, 5454, 0, '普通住宅,公寓', '4554', 1509764553, '5454', 3, 0);

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
(71, 78, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(72, 79, 4, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(73, 80, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(74, 81, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(75, 82, 1, 'a:1:{i:0;s:6:\"123456\";}', 'a:1:{i:0;s:6:\"123456\";}'),
(76, 83, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(77, 84, 1, 'a:3:{i:0;s:4:\"AAAA\";i:1;s:4:\"BBBB\";i:2;s:4:\"CCCC\";}', 'a:3:{i:0;s:4:\"AAAA\";i:1;s:4:\"BBBB\";i:2;s:4:\"CCCC\";}'),
(78, 85, 1, 'a:3:{i:0;s:4:\"AAAA\";i:1;s:4:\"BBBB\";i:2;s:4:\"CCCC\";}', 'a:3:{i:0;s:4:\"AAAA\";i:1;s:4:\"BBBB\";i:2;s:4:\"CCCC\";}'),
(79, 86, 2, 'a:3:{i:0;s:4:\"AAAA\";i:1;s:4:\"BBBB\";i:2;s:4:\"CCCC\";}', 'a:3:{i:0;s:4:\"AAAA\";i:1;s:4:\"BBBB\";i:2;s:4:\"CCCC\";}'),
(80, 87, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(81, 87, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(82, 88, 1, 'a:1:{i:0;s:3:\"789\";}', 'a:1:{i:0;s:3:\"789\";}'),
(83, 89, 4, 'a:1:{i:0;s:12:\"好的房子\";}', 'a:1:{i:0;s:12:\"好的房子\";}'),
(84, 90, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(86, 92, 1, 'a:1:{i:0;s:6:\"123435\";}', 'a:1:{i:0;s:6:\"123435\";}'),
(87, 93, 3, 'a:1:{i:0;s:15:\"说的发送到\";}', 'a:1:{i:0;s:15:\"说的发送到\";}'),
(88, 94, 1, 'a:1:{i:0;s:8:\"12345789\";}', 'a:1:{i:0;s:8:\"12345789\";}'),
(89, 94, 1, 'a:1:{i:0;s:8:\"12345789\";}', 'a:1:{i:0;s:8:\"12345789\";}'),
(90, 95, 1, 'a:1:{i:0;s:15:\"111111111111111\";}', 'a:1:{i:0;s:15:\"111111111111111\";}'),
(91, 96, 4, 'a:1:{i:0;s:15:\"是否电梯房\";}', 'a:1:{i:0;s:15:\"是否电梯房\";}'),
(92, 97, 1, 'a:1:{i:0;s:3:\"rer\";}', 'a:1:{i:0;s:3:\"rer\";}'),
(93, 98, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(94, 98, 1, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(95, 100, 10, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(96, 101, 1, 'a:2:{i:0;s:12:\"物业公司\";i:1;s:9:\"物管费\";}', 'a:2:{i:0;s:12:\"物业公司\";i:1;s:9:\"物管费\";}'),
(97, 102, 1, 'a:1:{i:0;s:6:\"王五\";}', 'a:1:{i:0;s:6:\"王五\";}'),
(98, 103, 10, 'a:1:{i:0;s:9:\"水电费\";}', 'a:1:{i:0;s:9:\"水电费\";}'),
(99, 104, 2, 'a:2:{i:0;s:15:\"好房可以买\";i:1;s:16:\"好房可以买2\";}', 'a:2:{i:0;s:15:\"好房可以买\";i:1;s:16:\"好房可以买2\";}'),
(101, 106, 1, 'a:1:{i:0;s:6:\"王五\";}', 'a:1:{i:0;s:6:\"王五\";}'),
(102, 107, 1, 'a:1:{i:0;s:6:\"123456\";}', 'a:1:{i:0;s:6:\"123456\";}'),
(103, 108, 3, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(104, 108, 3, 'a:1:{i:0;s:3:\"123\";}', 'a:1:{i:0;s:3:\"123\";}'),
(105, 109, 1, 'a:1:{i:0;s:15:\"按时大大大\";}', 'a:1:{i:0;s:15:\"按时大大大\";}'),
(106, 110, 1, 'a:1:{i:0;s:18:\"斯蒂芬十多个\";}', 'a:1:{i:0;s:18:\"斯蒂芬十多个\";}'),
(107, 111, 1, 'a:1:{i:0;s:15:\"啊实打实大\";}', 'a:1:{i:0;s:15:\"啊实打实大\";}'),
(108, 112, 1, 'a:1:{i:0;s:6:\"123456\";}', 'a:1:{i:0;s:6:\"123456\";}'),
(110, 114, 1, 'a:1:{i:0;s:12:\"啊实打实\";}', 'a:1:{i:0;s:12:\"啊实打实\";}'),
(111, 115, 1, 'a:1:{i:0;s:9:\"王二伟\";}', 'a:1:{i:0;s:9:\"王二伟\";}'),
(112, 116, 1, 'a:1:{i:0;s:12:\"啊我去问\";}', 'a:1:{i:0;s:12:\"啊我去问\";}'),
(113, 117, 1, 'a:1:{i:0;s:4:\"asda\";}', 'a:1:{i:0;s:4:\"asda\";}'),
(114, 118, 1, 'a:1:{i:0;s:6:\"王五\";}', 'a:1:{i:0;s:6:\"王五\";}'),
(115, 119, 1, 'a:1:{i:0;s:4:\"adsa\";}', 'a:1:{i:0;s:4:\"adsa\";}'),
(116, 120, 53, 'a:2:{i:0;s:15:\"特房网建值\";i:1;s:0:\"\";}', 'a:2:{i:0;s:15:\"特房网建值\";i:1;s:0:\"\";}'),
(117, 121, 48, 'a:2:{i:0;s:9:\"开发商\";i:1;s:0:\"\";}', 'a:2:{i:0;s:9:\"开发商\";i:1;s:0:\"\";}'),
(118, 122, 3, 'a:1:{i:0;s:9:\"开发商\";}', 'a:1:{i:0;s:9:\"开发商\";}'),
(119, 124, 1, 'a:2:{i:0;s:13:\"海淀好房1\";i:1;s:13:\"海淀好房2\";}', 'a:2:{i:0;s:13:\"海淀好房1\";i:1;s:13:\"海淀好房2\";}'),
(120, 125, 55, 'a:3:{i:0;s:6:\"总价\";i:1;s:6:\"北京\";i:2;s:6:\"这事\";}', 'a:3:{i:0;s:6:\"总价\";i:1;s:6:\"北京\";i:2;s:6:\"这事\";}'),
(121, 126, 55, 'a:3:{i:0;s:6:\"丰台\";i:1;s:6:\"北京\";i:2;s:12:\"这事测试\";}', 'a:3:{i:0;s:6:\"丰台\";i:1;s:6:\"北京\";i:2;s:12:\"这事测试\";}'),
(122, 127, 55, 'a:3:{i:0;s:12:\"楼盘位置\";i:1;s:15:\"楼盘开发商\";i:2;s:18:\"楼盘地铁交通\";}', 'a:3:{i:0;s:12:\"楼盘位置\";i:1;s:15:\"楼盘开发商\";i:2;s:18:\"楼盘地铁交通\";}'),
(123, 128, 55, 'a:1:{i:0;s:18:\"斯蒂芬斯蒂芬\";}', 'a:1:{i:0;s:18:\"斯蒂芬斯蒂芬\";}'),
(124, 129, 55, 'a:3:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";}', 'a:3:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";}'),
(125, 130, 1, 'a:4:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";i:3;s:3:\"DDD\";}', 'a:4:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";i:3;s:3:\"DDD\";}'),
(126, 132, 4, 'a:4:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";i:3;s:3:\"DDD\";}', 'a:4:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";i:3;s:3:\"DDD\";}'),
(127, 132, 4, 'a:4:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";i:3;s:3:\"DDD\";}', 'a:4:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";i:3;s:3:\"DDD\";}'),
(128, 133, 3, 'a:5:{i:0;s:4:\"4343\";i:1;s:6:\"434343\";i:2;s:6:\"434343\";i:3;s:5:\"44554\";i:4;s:6:\"545454\";}', 'a:5:{i:0;s:4:\"4343\";i:1;s:6:\"434343\";i:2;s:6:\"434343\";i:3;s:5:\"44554\";i:4;s:6:\"545454\";}'),
(129, 133, 3, 'a:5:{i:0;s:4:\"4343\";i:1;s:6:\"434343\";i:2;s:6:\"434343\";i:3;s:5:\"44554\";i:4;s:6:\"545454\";}', 'a:5:{i:0;s:4:\"4343\";i:1;s:6:\"434343\";i:2;s:6:\"434343\";i:3;s:5:\"44554\";i:4;s:6:\"545454\";}'),
(130, 135, 55, 'a:3:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";}', 'a:3:{i:0;s:3:\"AAA\";i:1;s:3:\"BBB\";i:2;s:3:\"CCC\";}');

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
(83, 78, '/admin/uploads/20170904174300_972.jpg', '大户型', '未知名称', '123,好房,大气', '12', 1, '110', '东南', '30', '30', '<p>123456489撒大声地<br/></p>', 1504518180),
(84, 79, '/admin/uploads/20170904194859_229.jpg', '只能高兴', '未知名称', '阿斯达', '2000', 0, '100', '阿斯达', '30', '20', '<p>123465<br/></p>', 1504525739),
(85, 80, '/admin/uploads/20170905102144_430.jpg', '大户型', '案例设计', '的稳定', '200', 1, '213', '东', '30000', '324', '<p>123456</p>', 1504578104),
(86, 81, '/admin/uploads/20170905102412_594.jpg', '大户型', '案例体验', '大气', '200', 1, '213', '阿斯达', '3', '324', '<p>1111</p>', 1504578252),
(87, 82, '/admin/uploads/20170905103147_398.jpg', '大户型', '牛逼的', '123,好房,大气', '120', 1, '100', '东南', '20', '1000', '<p>123456798<br/></p>', 1504578707),
(88, 83, '/admin/uploads/20170905162051_358.jpg', '大户型', '案例体验', '大气', '200', 1, 'asd', '的发送到', 'asd', '324', '<p>123456798</p>', 1504599651),
(89, 85, '/admin/uploads/20170905172453_433.jpg', 'D户型', 'D户型， 3室2厅1卫1厨， 建筑面积约79.61平米', '采光好，通风，地段好，环境优美', '434343元起', 0, '约79.61㎡', '朝北', '1:100,2:200,3:300,4:400', '3230', '<p>434344334433434</p>', 1504603493),
(90, 86, '/admin/uploads/20170905183227_685.jpg', '434343', '344343', '4343', '434343', 0, '3443', '4343', '4343', '3443', '<p>#########</p>', 1504607547),
(91, 86, '/admin/uploads/20170905183444_132.jpg', '在离这很远的地方', '推开门离去', '采光好，通风，地段好，环境优美', '3344334', 1, '433', '朝南', '1:100,2:200,3::300,4:400', '333', '<p>43434343</p>', 1504607684),
(92, 87, '/admin/uploads/20170908144228_791.jpg', '大户型', '案例体验', '的稳定', '123', 0, '213', '东', '30000', '324', '<p style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: left; margin: 0px 0px 10px;\"><em>啊实打实大师阿斯达 实打实大师的<span style=\"font-family: 楷体,楷体_GB2312,SimKai;\">啊实打实大<span style=\"font-family: 楷体,楷体_GB2312,SimKai; font-size: 14px;\">按时大大<span style=\"font-family: 楷体,楷体_GB2312,SimKai; font-size: 24px;\">啊实打实大</span></span></span><br/></em></p>', 1504852948),
(93, 88, '/admin/uploads/20170906110801_301.jpg', '大放送', '阿斯达', '的稳定', '12', 0, '213', '东', 'asd', '324', '<p>123456</p>', 1504667281),
(94, 89, '/admin/uploads/20170907145200_823.jpg', '大户型', '商业', '四级入春', '2000', 0, '100', '东', '2/5', '5000元', '<p>123456789<br/></p>', 1504767120),
(95, 90, '/admin/uploads/20170906170503_721.jpg', '其实房很好', '可买可卖', '有没得放假', '123', 0, '50平方米', '东南西北', '120', '30.00', '<p>啊实打实大师大<br/></p>', 1504688703),
(97, 92, '/admin/uploads/20170906221522_763.jpg', '大户型', '案例体验', '很好的', '200', 1, '213', '东', 'asd', '324', '<p>撒地方发生的</p>', 1504707322),
(98, 93, '/admin/uploads/20170906225144_832.jpg', '大', '撒', '阿斯达', '2000', 1, 'asdasdas', '东', 'asd', 'dasdasd', '<p>的非官方的公司法规的发生高发的是多个</p>', 1504709504),
(99, 94, '/admin/uploads/20170907095424_641.jpg', '大户型', '123456', '123,好房,大气', '120', 1, '150', '东南', '30万元', '1000元', '<p>12346798<br/></p>', 1504749264),
(100, 95, '/admin/uploads/20170907144816_504.jpg', '1111111', '1111111111', '111111111', '11111111', 1, '111111111111', '1111111111111', '111111111111', '11111111111', '<p>11111111111111111<br/></p>', 1504766896),
(101, 96, '/admin/uploads/20170908180950_210.jpg', '超大户型', '未知名', '优美如画', '1000', 1, '100', '东南', '2/5', '200元', '<p><strong>这里的房价不高，但是质量好，</strong><br/></p>', 1504865390),
(103, 98, '/admin/uploads/20170908185831_733.jpg', '123456789', '大大', 'NNN', '12', 1, '100', '东南', '20', '20', '<p>青蛙啊大师<br/></p>', 1504868311),
(104, 100, '/admin/uploads/20170908192515_436.jpg', '大户型', '大大', '123,好房,大气', '120', 1, '120', '东南', '20', '1000元', '<p>i哦哦<br/></p><h1 style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: left; margin: 0px 0px 10px;\">开始将地方开始就丹佛斯<span style=\"text-decoration: underline;\">伺服电机时空裂缝<em>谁发的发梵蒂冈的说法</em></span></h1><h1 style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: left; margin: 0px 0px 10px;\">四季度粉红色的换地方可刷卡收费是尽快发货时快捷的流口水的开发考虑几十块了大家发老师就浪费了；会计师看到了<span style=\"font-size: 16px;\">多环芳烃尽快答复后尽快答复和会计师的分开发的是</span><br/></h1>', 1504869915),
(105, 101, '/admin/uploads/20170909091925_536.jpg', '大户型', '案例设计', '什么都是最好的', '200000', 1, '127.00㎡', '不详', '5/2', '2000元', '<h1 style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;\"><strong>持续买卖</strong><br/></h1><p>&nbsp;&nbsp;&nbsp;&nbsp;买房，租房，卖房，上特房网。<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;没有找不到的。只有不想要的</p>', 1504919965),
(106, 102, '/admin/uploads/20170909180148_112.jpg', '大大', '大大', '123,好房,大气', '120', 0, '100', '阿斯达', '20', '20', '<p>啊啊实打实<br/></p>', 1504951308),
(107, 103, '/admin/uploads/20170909180902_685.jpg', '123456789', '大大', '阿斯达', '789', 1, '120', '东南', '20', '20', '<p>啊阿斯达所发生的V刹需查询下翅膀下班选择性阿斯顿发<br/></p>', 1504951742),
(108, 112, '', '123456789', '大大', '123,好房,大气', '2000', 0, '100', '东南', '20', '1000元', '<p>陪【】i哦你音乐剧 <br/></p>', 1505294530),
(110, 112, '/admin/uploads/2017-09-13/20170913172126_234.jpg', '123456789', '大大', '123,好房,大气', '2000', 1, '100', '东南', '30', '20', '<p>啊实打实地方司法<br/></p>', 1505294486),
(113, 115, '/admin/uploads/2017-09-13/20170913175028_572.jpg', '123456789', '未知名称', 'NNN', '12', 0, '100', '东南', '20', '20', '<p>阿斯达萨法阿斯达<br/></p>', 1505296228),
(114, 115, '/admin/uploads/2017-09-13/20170913174919_516.jpg', '123456789', '未知名称', 'NNN', '12', 1, '100', '东南', '20', '20', '<p>阿斯达萨法阿斯达<br/></p>', 1505296159),
(115, 116, '/admin/uploads/2017-09-13/20170913181321_103.jpg', '123456789', '大大', '123,好房,大气', '12', 0, '120', '1111111111111111111', '20', '4000', '<p>斯蒂芬尔特死人头都发生过<br/></p>', 1505297601),
(116, 120, '/admin/uploads/2017-09-26/20170926215758_818.jpg', '两室1厅', '好房', '南北通透，学区房，临河等等等', '110000', 0, '87', '东西', '30%', '4000000', '<p class=\"par2\" style=\"font: 15px/28px &quot;microsoft yahei&quot;; margin: 0px; padding: 20px 0px 0px; border: 0px currentColor; border-image: none; color: rgb(51, 51, 51); text-transform: none; text-indent: 28px; letter-spacing: normal; text-decoration: none; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">随着城市轨道交通的发展，近年来通州区域建设也不断提升，一直吸引了诸多购房者来此安家置业。伴随着北京市中心城区向外疏解，功能分散化的战略趋势，通州以其明显的区位优势迎来全面发展新阶段，通州楼市无疑也将引发更多关注。</p><ul class=\"yqd-dl clearfix list-paddingleft-2\" style=\"font: 15px/22px &quot;microsoft yahei&quot;; margin: 0px; padding: 25px 0px 0px; border: 0px currentColor; border-image: none; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; text-decoration: none; word-spacing: 0px; white-space: normal; -ms-zoom: 1; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><li><p><em class=\"merit-ic\" style=\"background: url(&quot;http://img1.soufun.com/house/images/daogou/singleDaogou/sprite2.png&quot;) no-repeat; margin: 3px 0px 0px; width: 24px; height: 24px; font-family: &quot;microsoft yahei&quot;; font-style: normal; font-weight: normal; text-decoration: none; float: left; display: inline-block;\"></em><em style=\"padding: 0px 20px 0px 14px; font-family: &quot;microsoft yahei&quot;; font-style: normal; font-weight: normal; text-decoration: none; float: left;\">优点</em></p></li><li><p style=\"margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; line-height: 30px; font-family: &quot;microsoft yahei&quot;; font-style: normal; font-weight: normal; text-decoration: none;\">1、邻近京平高速、机场高速、通顺路等交通线路，自驾便捷。<br/>2、天然资源优渥，东郊森林公园、温榆河、小中河等自然景观丰富，环境优美。<br/>3、90-105平三居现房，可满足刚需及改善用户的需求。</p></li></ul><ul class=\"yqd-dl clearfix list-paddingleft-2\" style=\"font: 15px/22px &quot;microsoft yahei&quot;; margin: 0px; padding: 12px 0px 0px; border: 0px currentColor; border-image: none; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; text-decoration: none; word-spacing: 0px; white-space: normal; -ms-zoom: 1; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><li><p><em class=\"defect-ic\" style=\"background: url(&quot;http://img1.soufun.com/house/images/daogou/singleDaogou/sprite2.png&quot;) no-repeat -24px 0px; margin: 3px 0px 0px; width: 24px; height: 24px; font-family: &quot;microsoft yahei&quot;; font-style: normal; font-weight: normal; text-decoration: none; float: left; display: inline-block;\"></em><em style=\"padding: 0px 20px 0px 14px; font-family: &quot;microsoft yahei&quot;; font-style: normal; font-weight: normal; text-decoration: none; float: left;\">缺点</em></p></li><li><p style=\"margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; line-height: 30px; font-family: &quot;microsoft yahei&quot;; font-style: normal; font-weight: normal; text-decoration: none;\">周边暂无地铁线路，出行主要依赖自驾。</p></li></ul><p></p>', 1506434278),
(117, 121, '/admin/uploads/2017-09-26/20170926233158_423.jpg', '两室1厅', '主力户型', '卖的号', '20000元/平', 0, '89', '东西', '10%', '20000元', '<p><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">交通方便 包物业取暖，，随时可以看房子，小杨15811157188</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">1小区环境优越，绿化室内阳光充足，家具家电齐全的！</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">2房屋正规南北通透，宽敞明亮</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">3小区里就有卖菜，卖水果，主食，超市，方便</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">4小区地理位置优越，六环路，距离公交车站步行两即可，交通便利有41，826，821</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">846，975，12,542路等多辆公交车，</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">5配套设施，苏宁电器，百尚生活广场，同仁医院，通州第二医院，，马驹桥小</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">学，通州实验，公园，中国建设银行，邮政银行等等是您过日子的之选</span><br/><span style=\"font: 14px/30px &quot;Microsoft Yahei UI&quot;, &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; display: inline !important; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;\">感谢你在白忙之中打开我的帖子，期待您的来电！</span></p>', 1506439918),
(118, 121, '/admin/uploads/2017-09-26/20170926233345_609.jpg', '3室一厅', '好户型', '很大', '20000元/平', 1, '109', '南北', '20%', '30000元', '<p style=\"font: 15px/30px &quot;microsoft yahei&quot;; margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; color: rgb(51, 51, 51); text-transform: none; text-indent: 30px; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><a style=\"color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;; text-decoration: none;\" href=\"http://wanxiangfuhr.fang.com/\" target=\"_blank\">华润·萬橡府</a>项目整体为高层板楼，南北通透平层。近期预计推出高品质185-295平米4-5居房源，正在等新预售证的下发，开盘时间待定，价格待定。具体信息详情可致电售楼处。敬请关注！ &nbsp; &nbsp; &nbsp;&nbsp;</p><p style=\"font: 15px/30px &quot;microsoft yahei&quot;; margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; color: rgb(51, 51, 51); text-transform: none; text-indent: 30px; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><br/></p><p style=\"font: 15px/30px &quot;microsoft yahei&quot;; margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; color: rgb(51, 51, 51); text-transform: none; text-indent: 30px; letter-spacing: normal; word-spacing: 0px; white-space: normal; widows: 1; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\">项目位于海淀上地商圈，学府树北街(清河桥西500米)，紧邻的20万㎡华润五彩城购物中心。</p><p></p>', 1506440025),
(119, 122, '/admin/uploads/2017-09-26/20170926234434_989.jpg', '2室一厅', '年轻人居住', '好房，南北', '70012元/平', 0, '89', '东西', '10', '60000', '<p>水电费水电费水电费水电费斯蒂芬斯蒂芬</p>', 1506440674),
(120, 122, '/admin/uploads/2017-09-26/20170926234528_606.jpg', '三室一厅', '改善型', '南北，学区', '80000元/平米', 1, '109', '南北', '10', '80000', '<p>水电费水电费水电费水电费斯蒂芬斯蒂芬</p>', 1506440728),
(121, 124, '/admin/uploads/2017-10-15/20171015000505_470.jpg', '南北', '很好', '很好，很好1，很好2', '10000', 0, '100', '南北', '30%', '10000', '<p>很好啊，这事测试测试</p>', 1507997105),
(122, 125, '/admin/uploads/2017-10-22/20171022214756_736.jpg', '一室两厅', '特价房', '互相好', '300万', 1, '120平米', '南北', '30', '40000', '<h2 style=\"margin: 0px; padding: 0px; line-height: 40px; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, 宋体; font-size: 28px; font-weight: 700;\">必读！十九大报告对全面从严治党的九个新论述</h2><p><span class=\"source\" style=\"color: rgb(153, 153, 153); line-height: 2; padding-right: 10px; font-size: 13px; border-right-color: rgb(242, 242, 242); border-right-width: 1px; border-right-style: solid;\">凤凰新闻</span><span class=\"Apple-converted-space\">&nbsp;</span><span class=\"date\" style=\"margin: 0px 9px 0px 6px; color: rgb(153, 153, 153); line-height: 2; font-size: 13px;\">10-22</span><span class=\"Apple-converted-space\">&nbsp;</span><span class=\"time\" style=\"color: rgb(153, 153, 153); line-height: 2; font-size: 13px;\">16:32</span></p><p style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">原标题：必读！十九大报告对全面从严治党的九个新论述</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">习近平总书记所作的十九大报告强调，坚定不移全面从严治党，不断提高党的执政能力和领导水平。报告中16次出现“党的领导”，提出要坚持党对一切工作的领导；13次提到“党的建设”，提出党的建设新的伟大工程在“四个伟大”中起决定性作用；7次出现“全面从严治党”，提出夺取反腐败斗争压倒性胜利。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">这份报告通篇闪烁着马克思主义的理论光辉，是我们在新时代加强党的建设的指导纲领和行动指南。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">中纪委机关报在今日刊发的一篇文章中，摘录出了报告关于全面从严治党的若干新论述，进行了系统梳理。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">一、坚持党要管党、全面从严治党</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“坚持和加强党的全面领导，坚持党要管党、全面从严治党”</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“党要管党、从严治党”是我们党长期坚持的党的建设的基本方针。2014年12月，习近平总书记在江苏省调研时强调，协调推进全面建成小康社会、全面深化改革、全面推进依法治国、全面从严治党。由此，“全面从严治党”作为“四个全面”战略布局的一部分，被提升到全新的高度。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">十九大报告在新时代党的建设总要求的一开头便提出，要“坚持和加强党的全面领导，坚持党要管党、全面从严治党”，更加突出“全面”的要求。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">二、政治建设</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“把党的政治建设摆在首位”“党的政治建设是党的根本性建设，决定党的建设方向和效果”</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">旗帜鲜明讲政治是我们党作为马克思主义政党的根本要求。十九大报告在新时代党的建设总要求中提出，要以党的政治建设为统领，并将政治建设放在党的建设的首位。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">党的政治建设的首要任务，是保证全党服从中央，坚持党中央权威和集中统一领导。全党要坚定执行党的政治路线，严格遵守政治纪律和政治规矩，在政治立场、政治方向、政治原则、政治道路上同党中央保持高度一致。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">三、压倒性胜利</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“夺取反腐败斗争压倒性胜利”“当前，反腐败斗争形势依然严峻复杂，巩固压倒性态势、夺取压倒性胜利的决心必须坚如磐石”</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">十九大报告在总结过去五年的工作和历史性变革时指出，全面从严治党成效卓著。党的十八大以来，党中央坚持反腐败无禁区、全覆盖、零容忍，坚定不移“打虎”“拍蝇”“猎狐”，反腐败斗争压倒性态势已经形成并巩固发展。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">党中央对反腐败斗争形势的判断，从“呈胶着状态”到“压倒性态势正在形成”，到“压倒性态势已经形成”，再到“压倒性态势已经形成并巩固发展”，折射出五年来全面从严治党波澜壮阔的历程。接下来，要进一步夺取反腐败斗争压倒性胜利。</p><p></p>', 1508680076),
(123, 126, '/admin/uploads/2017-10-30/20171030224616_154.jpg', '两室一厅', '丰台火车站', '丰台火车站，超强好', '400万', 0, '220平米', '南北', '30%', '50000', '<p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">普通家庭都是重视孩子，明星豪门家庭更紧致下一代，没有生孩子被嫌弃，这6位太委屈了。</p><p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">1、鲁豫</p><p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">鲁豫嫁给外国老公遭到家暴，回国之后，和初恋男友结婚，两人感情十分恩爱，47岁鲁豫迟迟未孕，男方家里也十分着急。</p><p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\"><img src=\"http://p1.qhimgs4.com/t0193961fd2de0ac5b2.webp\"/>2、周慧敏</p><p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">一代女神周慧敏，嫁给情场浪子倪震，结婚那么久，一直没有自己的孩子，传周慧敏年纪大了不能生。</p><p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\"><img src=\"http://p2.qhimgs4.com/t0138fcf5b7c9353ccc.webp\"/>3、车晓</p><p>&nbsp;</p>', 1509374776),
(124, 127, '/admin/uploads/2017-10-30/20171030225658_571.jpg', '三室一厅', '主力', '朝向好，方便，便宜', '400万', 0, '200平米', '东南', '10%', '200000', '<p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\"><img src=\"http://p0.qhimgs4.com/t01e9c5d09ac7cfa4df.webp\"/>6、刘嘉玲</p><p style=\"margin: 0px 0px 26px; color: rgb(51, 51, 51); text-transform: none; text-indent: 0px; letter-spacing: 0.5px; overflow: hidden; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">梁朝伟和刘嘉玲才是最可惜，两人是俊男美女，下一代肯定会很帅气。两人虽然很努力要孩子，但是刘嘉玲年龄大了，身体原因比较困难。</p><p></p>', 1509375418),
(125, 128, '/admin/uploads/2017-10-30/20171030230724_493.jpg', '1是1厅', '很好', '水电费，斯蒂芬斯蒂芬', '20000元平米', 0, '100', '东西', '12%', '40000', '<p>斯蒂芬斯蒂芬</p>', 1509376044),
(126, 129, '/admin/uploads/2017-11-03/20171103160336_534.jpg', '434354', '5454', '5454', '5454', 0, '5454', '5454', '5454', '5454', '<p>545454</p>', 1509696217),
(127, 130, '/admin/uploads/2017-11-03/20171103161132_908.jpg', '545454', '5454', '5454', '5454', 0, '5445', '5455', '5454', '4545', '<p>5454</p>', 1509696692),
(128, 132, '/admin/uploads/2017-11-03/20171103181630_573.png', '545465', '6565', '6565', '445', 0, '4554', '4545', '4554', '4554', '<p>544545</p>', 1509704190),
(129, 132, '/admin/uploads/2017-11-03/20171103181651_154.png', '5454', '5454', '5454', '4554', 0, '4554', '4554', '4545', '4545', '<p>45544</p>', 1509704211),
(130, 133, '/admin/uploads/2017-11-03/20171103210732_275.png', '4554', '4554', '4554', '4554', 0, '4554', '4554', '4545', '4554', '<p>544554</p>', 1509714452),
(131, 133, '/admin/uploads/2017-11-03/20171103210755_495.png', '4343', '4343', '4343', '4343', 0, '3443', '3443', '4334', '3443', '<p>434334</p>', 1509714475),
(132, 135, '/admin/uploads/2017-11-04/20171104110142_803.png', '434', '3433', '3443', '4333', 0, '4343', '3443', '3443', '3434', '<p>343434</p>', 1509764502),
(133, 135, '/admin/uploads/2017-11-04/20171104110206_934.png', '43434', '4343', '344343', '3443', 0, '344334', '3433', '4343', '4343', '<p>43344</p>', 1509764526);

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
(1, '/admin/uploads/20170831162128_525.jpg', '小王', '13579984628', '到家了', 1504167688, 0),
(2, '/admin/uploads/20170831162210_298.jpg', '小李', '15794682541', '链家了', 1505522376, 0),
(3, '', '小贱', '15465785421', '特房网', 1505519232, 0),
(4, '/admin/uploads/20170904154052_147.jpg', '小明', '15794685214', '安居客总公司', 1504702703, 0),
(48, '/admin/uploads/2017-09-13/20170913145111_825.jpg', '未知名称', '1534682941', '安居客总公司', 1505285471, 0),
(49, '/admin/uploads/2017-09-13/20170913163759_845.jpg', '789', '15465785421', '安居客总公司', 1505291879, 1),
(52, '/admin/uploads/2017-09-13/20170913181151_692.jpg', '大大', '1534682941', '安居客总公司', 1505297511, 0),
(53, '/admin/uploads/2017-09-13/20170913190014_472.png', '赵四', '18423031888', '链家', 1505300414, 0),
(54, '/admin/uploads/2017-09-26/20170926214738_556.jpg', '田野1', '18518793907', '链家地产', 1506433674, 1),
(55, '/admin/uploads/2017-10-22/20171022211910_873.jpg', '田野', '18518793908', 'K2地产', 1508678350, 0);

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
  `prtype` varchar(50) NOT NULL COMMENT '房屋类型',
  `orientation` varchar(50) NOT NULL COMMENT '朝向',
  `characteristic` varchar(255) NOT NULL COMMENT '房屋特点（以英文逗号分隔）',
  `house_img` mediumtext NOT NULL COMMENT '房屋图片（序列化数组）',
  `himg` varchar(500) NOT NULL COMMENT '户型图片（序列化数组）',
  `introduce` mediumtext NOT NULL COMMENT '房屋介绍（UEditor）',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '联系电话',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sell_house_info`
--

INSERT INTO `sell_house_info` (`id`, `community`, `area`, `house_type`, `selling_price`, `prtype`, `orientation`, `characteristic`, `house_img`, `himg`, `introduce`, `cname`, `phone`, `ctime`, `status`) VALUES
(1, '434334', 4343, '3443', 4343, '回迁房', '西南', '', '/admin/uploads/2017-10-14/20171014114805_538.jpeg', '', '434334', '434334', '18423031899', 1507952888, 0),
(2, '656556', 65535, '344343', 4343, '福利房', '西南', '434343', '/admin/uploads/2017-10-14/20171014115600_420.jpeg', '', '434343', '434334', '18423031899', 1507953362, 0),
(3, '北京科技园', 200, '2室1厅', 630, '法拍房', '西', '交通方便，采光好', '/admin/uploads/2017-10-14/20171014215436_973.jpg,/admin/uploads/2017-10-14/20171014215445_122.jpg,/admin/uploads/2017-10-14/20171014215450_233.jpg', '', '很好的房，南北通透', '小四', '18518793905', 1507989303, 1),
(4, '北京丰台', 123, '两室一厅', 200, '回迁房', '东西', '脸红好，啊啊啊', '/admin/uploads/2017-10-30/20171030232054_481.jpg,/admin/uploads/2017-10-30/20171030232100_399.jpg', '', '很好高跟', '田野', '18518793907', 1509376875, 1);

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

--
-- 转存表中的数据 `tenement_catalog`
--

INSERT INTO `tenement_catalog` (`id`, `hcid`, `cid`, `auid`, `slideshow`, `title`, `community`, `house_type`, `htype`, `rent`, `show_rent`, `dtype`, `ctime`, `remark`, `status`, `type`) VALUES
(36, 3, 4, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-09\\150492413831058.jpg\";}', '首创鸿恩国际生活社区', '江北区大石坝 国际生活社区', '四室', 0, 500, '500元/月', 0, 1504924213, '无需付款，秩序买卖', 1, 1),
(38, 3, 7, 1, 'a:5:{i:0;s:49:\"/admin/uploads/2017-09-09/1504925144499421144.jpg\";i:1;s:50:\"/admin/uploads/2017-09-09/15049251441441787038.jpg\";i:2;s:49:\"/admin/uploads/2017-09-09/1504925144470803843.jpg\";i:3;s:49:\"/admin/uploads/2017-09-09/1504925144911971209.jpg\";i:4;s:50:\"/admin/uploads/2017-09-09/15049251442078705608.jpg\";}', '（舒客屋）寰宇天下 豪装三房 全套配置 随时看房 多套房源', '寰宇天下天玺', '3室2厅2卫', 0, 5500, '5500元/月', 0, 1504925149, '测试租房条目', 3, 0),
(41, 3, 12, 1, 'a:6:{i:0;s:50:\"/admin/uploads/2017-09-09/15049259631949522368.jpg\";i:1;s:47:\"/admin/uploads/2017-09-09/15049259637247176.jpg\";i:2;s:50:\"/admin/uploads/2017-09-09/15049259632000329354.jpg\";i:3;s:49:\"/admin/uploads/2017-09-09/1504925963367976668.jpg\";i:4;s:50:\"/admin/uploads/2017-09-09/15049259631288817273.jpg\";i:5;s:50:\"/admin/uploads/2017-09-09/15049259631890564743.jpg\";}', '舒客屋特选 寰宇天下250平办公5房 1楼进出方便赠送大阳台', '寰宇天下观澜苑', '4室2厅4卫', 1, 10000, '10000元/月', 1, 1504925967, '测试租房条目', 3, 0),
(48, 3, 10, 5, 'a:8:{i:0;s:45:\"/admin/uploads\\2017-09-09\\150493118031305.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-09\\150493118032590.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-09\\150493118010351.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-09\\150493118014716.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-09\\150493118029189.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-09\\150493118016986.jpg\";i:6;s:45:\"/admin/uploads\\2017-09-09\\150493118011438.jpg\";i:7;s:45:\"/admin/uploads\\2017-09-09\\150493118014927.jpg\";}', '江北区大石坝 东原D7', '东原D7距轻轨2号线号线879.00米', '三室', 1, 3000, '3000元/月', 1, 1504931184, '物业公司：新东原物业管理有限公司', 3, 1),
(49, 3, 8, 1, 'a:1:{i:0;s:50:\"/admin/uploads/2017-09-12/15052108711651844814.jpg\";}', '好租房', '好租房啊', '一室', 0, 10000, '10000', 0, 1505210965, '水电费水电费', 1, 0),
(50, 3, 10, 1, 'a:5:{i:0;s:45:\"/admin/uploads\\2017-09-12\\150521584329651.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-12\\150521584310996.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-12\\150521584331770.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-12\\150521584319216.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-12\\150521584321021.jpg\";}', '新房', '按时', '123', 1, 1235, '567', 1, 1505215854, 'haode', 0, 0),
(51, 3, 4, 1, 'a:2:{i:0;s:45:\"/admin/uploads\\2017-09-12\\150521609628703.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-12\\150521609618159.jpg\";}', '顿时感到', '幸福小区', '二室', 1, 2000, '2000', 2, 1505216122, '地方', 0, 0),
(52, 3, 4, 1, 'a:6:{i:0;s:44:\"/admin/uploads\\2017-09-13\\15052708999095.jpg\";i:1;s:44:\"/admin/uploads\\2017-09-13\\15052708997293.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150527089929364.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150527089916902.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150527089926482.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-13\\150527089924285.jpg\";}', '按时', '按时', '三室', 1, 1235, '567', 2, 1505270912, 'haode', 0, 0),
(53, 3, 4, 1, 'a:9:{i:0;s:44:\"/admin/uploads\\2017-09-13\\15052862066864.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150528620631433.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150528620613774.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150528620612791.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150528626923791.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-13\\150528626914436.jpg\";i:6;s:44:\"/admin/uploads\\2017-09-13\\15052862695116.jpg\";i:7;s:45:\"/admin/uploads\\2017-09-13\\150528626931365.jpg\";i:8;s:45:\"/admin/uploads\\2017-09-13\\150528626910957.jpg\";}', 'asdads', '12354', '二室', 1, 1235, '567', 1, 1505286285, '阿斯达', 0, 0),
(54, 3, 4, 1, 'a:4:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150529646919062.jpg\";i:1;s:44:\"/admin/uploads\\2017-09-13\\15052964694406.jpg\";i:2;s:44:\"/admin/uploads\\2017-09-13\\15052964691290.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150529646922647.jpg\";}', '阿斯达', '12354', '三室', 1, 21, '132', 1, 1505296476, '啊实打实', 0, 0),
(55, 3, 4, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150529642022801.jpg\";}', '新房水电费', '按时', '二室', 1, 123, '567', 1, 1505296435, 'haode', 1, 0),
(56, 3, 8, 1, 'a:1:{i:0;s:49:\"/admin/uploads/2017-09-14/1505386328557839673.jpg\";}', '很好的水电费水电费', '用膳盈利', '一室', 0, 10000, '10000', 0, 1505386389, '很好', 3, 0),
(57, 3, 25, 1, 'a:1:{i:0;s:48:\"/admin/uploads/2017-11-03/150970208669197779.png\";}', '1123', '344354', '四室', 1, 5454, '454', 3, 1509702091, '3445', 0, 0);

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

--
-- 转存表中的数据 `tenement_info`
--

INSERT INTO `tenement_info` (`id`, `tcid`, `pcid`, `area`, `orientation`, `tage`, `htype`, `ctime`, `general_situation`, `hconfig`) VALUES
(30, 36, 3, 21, '东南', '25', '一室', 1504924342, '<h1 style=\"font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;\">很好的条件，</h1><p>&nbsp; <strong>就等各位来住了</strong><span style=\"font-size: 24px;\"></span><br/></p>', '空调，洗衣机，电视，沙发，床，等'),
(33, 38, 10, 120, '南', '30/45层', '普通住宅', 1504925514, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">每个深夜都是矛盾体在释放，忍住了，你是天使；忍不住，你是恶魔。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">圣诞结，嗯，我没写错，不是圣诞节；</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">有些事，解得开，是结，解不开，是劫；</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">对于橘子来说，似乎每一场喧嚣的节日，都像是形单影只煎熬的渡劫；</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">热闹是别人的，她什么也没有，就像奶茶歌里唱得“一群人的狂欢一个人的孤单……”</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">快两年了……时间这个狡猾的骗子，所有一切掩藏的毫无痕迹，伤痛仿佛快要被治愈，却又慢慢衍生着新的伤痛慢慢入侵，像个后发制人的突击者，毫无防备，瞬间击杀，随之崩塌。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">我一直以为，她笑得那么开心，一定从病房走出来了。原来，坚强，不过是温柔生的茧。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">平安夜，很多朋友邀橘子出去嗨，看电影、蒸桑拿、飙车去外滩、K歌、吃饭…后来她统统推掉，说回家陪父母。本以为回家了就能好一些，可是敲门没人应，自己拿钥匙开门，家里空无一人…憋了一天的情绪仿佛找到一个泄洪口，一下子爆发，然后再也守不住。橘子又掉眼泪了！！甩掉背包、脱掉棉衣，跑进房间坐地上就哭，也不知道哪来这么多委屈，哪来这么多眼泪…这个平安夜真的平静又安静……</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">或许，她没有走出内心的阴霾。一到深夜，橘子就会释放自己的恶魔，变成另一个自己。我问，她只说没事。后来，我装作知道，又装作不知道，静静的看着黑夜沉沦的另一个橘子。只是，夜尽天明，她若无其事的样子，真得好令人心疼。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">前任和她说：“在我们的事情上，确实错在我，那么优秀的你，该过好的生活。我希望你好，也希望有那么样的机会以最最最好朋友的身份照顾你陪着你！”</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">看着橘子的记录，黄莲味的心酸缱绻在舌尖，吃了大半个橙子，嘴里还是觉得有些涩，就像你听见有一个异性对你说“你是个好人”一样。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><strong style=\"margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">我们诚惶诚恐，我们小心翼翼，我们毫无保留，却不一定就能把爱，变成相爱。如果这一次真得背过身我们不再遇见了，那我希望我们可以面对面再背对背，永远不留遗憾，一生山高水阔。只是，后来，我们都甘愿被生活凌迟。</span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">大道理，橘子都懂，只是安慰别人的话劝不了自己。橘子说，我不怪他，我也不会再需要他。可有时候，你会觉得谁都可以，又觉得谁都不可以。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><blockquote style=\"margin: 0px; padding: 0px 0px 0px 10px; list-style: none; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; border-left-width: 3px; border-left-style: solid; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">就像曾经的那段日子</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">“早”，“晚安”</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">一天，甜蜜的开始，幸福的结束。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">后来，</span><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-family: 黑体; font-size: 15px; line-height: 1.6; box-sizing: border-box !important; word-wrap: break-word !important;\">只有冷冷的早晨，</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-family: 黑体; font-size: 15px; line-height: 1.6; box-sizing: border-box !important; word-wrap: break-word !important;\">没有了夜里的温暖。</span><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-family: 黑体; font-size: 15px; line-height: 1.6; box-sizing: border-box !important; word-wrap: break-word !important;\">没有了晚安</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">后来，再也没有了后来</span></p></blockquote><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">我们熟悉的习惯，突然被抽离的时候，你会觉得少了什么，可又说不出是什么，只知道，有一种空落落，让自己夜夜辗转难侧。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">就像等得公交没有按时来，点得外卖拖了一刻又一刻</span><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-family: 宋体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;&nbsp;</span></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">我们都像是上了桌的赌徒，从未想着输着离开</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><strong style=\"margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">我们不是在逞强，只是忘记了怎么软弱；</span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">于是，夜里，都变成了自己的吸血鬼。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">橘子，记得，难过的时候，嘴里含一颗糖</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</p><blockquote style=\"margin: 0px; padding: 0px 0px 0px 10px; list-style: none; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; border-left-width: 3px; border-left-style: solid; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">你的眼睛，辣么好看</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">适合装下所有深情</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">你的鼻子，辣么好看</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">适合闻爱情的味道</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">你的手，辣么好看</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">适合牵着到老</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">你的耳朵，辣么好看</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; max-width: 100%; clear: both; min-height: 1em; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">适合听上一生的情话</span></p></blockquote><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><strong style=\"margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">脱缰的马不是好马，宝马跑了，你会有奥迪的</span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto; max-width: 100%; clear: both; min-height: 1em; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;\"><strong style=\"margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%; font-size: 15px; font-family: 黑体; box-sizing: border-box !important; word-wrap: break-word !important;\">深夜，是和往事和解的咖啡屋，晚安即释怀</span></strong></p><p><br/></p>', '床,电视,空调,冰箱,洗衣机,热水器,宽带,可做饭,独立卫生间,阳台,衣柜,沙发,暖气'),
(34, 40, 4, 100, '东南', '15', '高档房', 1504925709, '<p>计征方式：\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong class=\"\">总价</strong><br/></p>', '空调洗衣机，统统都有'),
(35, 41, 2, 252, '南', '1/31层', '普通住宅', 1504926202, '<p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">初春，暖意未感，寒意依然，心思徘徊在昨天。人物依稀，拾起记忆已不见初识情怀，不见想念，相见恨晚，满怀你侬我侬已被现实击碎，各走一方，渐远渐消散。</p><p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">　　小楼逸居，静观花儿绽放，嗅闻阵阵芬香，月夜添曲，风儿传来阵阵情歌，美好时光定位在那一刻，现今收拾起情绪封存。</p><p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">　　春意，总使人遐想，向往与大自然融为一体，陈年往事已远，不提，无殇，新起点静待迷离眼眸看穿世事沧桑。曾几何，太在意也无法挽留，放手回落安然。时光无限好，随景移不纠缠，年年花事近相似，人物更改已花非花，雾非雾，隐忍一笑，无需纠结适应了人间烟火。</p><p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">　　惊叹小草的通幽之术，无论外界有多少未知，春来破土摇曳。无论风雨来临有多少未知癫狂，雨来低头，日出昂头；风来四面倒，依然笑对风雨声。花开花落不悲怀，欣然接受生活给予的百般滋味。</p><p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">　　春来，赏百花，满眼绿意懂得生命珍贵；夏来，抛开束缚，抵得住严酷，怜悯自然界事物。秋来，收获丰硕，别忘困境疾苦，珍惜这份缘分；冬来，底蕴暗藏，因知道，来年春光谁也挡不住，依然释放葱郁点缀。</p><p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">　　花儿娇艳，却很短暂，时不时被外界缩减了生命。也许，寓意美好事物不长久，疏忽的往往在身边。</p><p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">　　春光渐暖，窗外枝条吐绿，抑制不住心情大好。只因，看破红尘事，犹如四季轮回，曲折路久困坚持不懈渐能安。</p><p style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; list-style: none; text-indent: 2em; color: rgb(79, 93, 65); font-family: -webkit-standard; font-size: 14px; white-space: normal; text-size-adjust: auto;\">　　音乐缭绕，一段段往事尘封，活在当下惜缘之人，无需花言巧语，只要一个眼眸，从此无怨无悔紧握双手，为你改变小任性，苦乐相陪不离不弃便是无限幸福，最快乐的事。</p>', '床,电视,空调,冰箱,洗衣机,热水器,宽带,可做饭,独立卫生间,阳台,衣柜,沙发,暖气'),
(36, 43, 2, 100, '东南', '25', '1234', 1504926389, '<p>阿萨斯打死大家爱思考的噶<br/></p>', '撒阿斯达'),
(37, 44, 4, 100, '东南', '15', '啊沙发', 1504926536, '<p>啊实打实大地势都<br/></p>', '1235'),
(38, 45, 4, 100, '东南', '15', '啊沙发', 1504926595, '啊实打实大 啊实打实大师大<br/>', '1235'),
(39, 46, 3, 123, '45456', '张先生的倒萨', '啊沙发', 1504926772, '<p>啊实打实大师大大<br/></p>', '1235'),
(40, 47, 3, 100, '东南', '15', '1234', 1504926923, '阿斯达打死发萨达', '撒阿斯达'),
(41, 48, 4, 100, '东', '20', '二室', 1504931412, '<p><a title=\"黄泥磅龙塔实验学校对面森柯一馨园正规两房带阳台 读书方便哟\" href=\"https://chongqing.anjuke.com/prop/view/A951618624?from=filter-saleMetro&spread=commsearch_p&position=1&kwtype=filter&now_time=1504931239\" target=\"_blank\" class=\"houseListTitle  visited\"><strong>黄泥磅龙塔实验学校对面森柯一馨园正规两房带阳台 读书方便哟</strong></a></p>', '为'),
(42, 49, 2, 100, '南北', '1', '好房', 1505210901, '<p>水电费水电费水电费水电费水电费是</p>', '都有水电费水电费水电费水电费'),
(43, 50, 3, 12, '1111111111111111111', '15', '啊沙发', 1505215864, '<p>asdasdfafdasasda<br/></p>', '撒阿斯达'),
(44, 51, 3, 120, '北', '20', '大概', 1505216138, '<p>大气污染区<br/></p>', '郭德纲'),
(45, 52, 4, 12, '东', '15', '1234', 1505270923, '<p>按时发达大大是打发发生法<br/></p>', '撒阿斯达'),
(46, 53, 3, 100, '东南', '25', '啊沙发', 1505286295, '<p>asfadasdasfadas<br/></p>', '1235'),
(47, 54, 3, 100, '东', '20', '整租', 1505290817, '<p>asdfsaertrsd trdgfd</p>', '大声道'),
(48, 55, 4, 100, '东南', '15', '1234', 1505296444, '<p>是的范德萨发鬼地方个<br/></p>', '撒阿斯达'),
(49, 56, 1, 20, '南北', '3', '自住', 1505386361, '<p>很好的房子</p>', '都有'),
(50, 57, 53, 45454, '5454', '434345', '2332', 1509702103, '<p>5454</p>', '454');

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

--
-- 转存表中的数据 `used_house_catalog`
--

INSERT INTO `used_house_catalog` (`id`, `hcid`, `cid`, `auid`, `slideshow`, `title`, `community`, `htype`, `area`, `selling_price`, `show_price`, `trait`, `prtype`, `ctime`, `remark`, `status`, `type`) VALUES
(45, 2, 13, 4, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-04\\201709041504514312.jpg\";}', '豪华农村', '打样小区', '二室', 120, 250, '1万/平方', '四季如冬', 1, 1504514358, '无需付款，秩序买卖', 0, 0),
(46, 2, 4, 1, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-04\\201709041504525793.jpg\";}', '按时', '12354', '二室', 100, 250, '1300', '阿斯达', 1, 1504525806, '阿斯达', 0, 0),
(47, 2, 10, 4, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-04\\201709041504527809.jpg\";}', '重庆', '粉粉粉', '二室', 1000, 320, '213', '阿斯达', 1, 1504527812, '备注', 1, 0),
(48, 2, 10, 1, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-04\\201709041504527852.jpg\";}', '789', '啊实打实夫人访问', '二室', 100, 320, '36551', '阿斯达', 1, 1504527857, '备注', 2, 0),
(49, 2, 13, 1, 'a:1:{i:0;s:48:\"/admin/uploads/2017-09-04\\201709041504527902.jpg\";}', '得得', '阿斯达啊', '二室', 100, 3321, '2000', '大气', 1, 1504527905, '阿斯达', 3, 1),
(51, 2, 10, 1, 'a:1:{i:0;s:42:\"/admin/uploads\\2017-09-06\\150467023895.jpg\";}', '123', '阳光', '二室', 1000, 320, '100', '的稳定', 1, 1504670248, '备注', 3, 1),
(52, 2, 13, 1, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-06\\15046890431567.jpg\";}', '欢迎来到的来联盟', '超大', '四室,五室及以上', 100, 120, '200', '很好的', 4, 1504689047, '这个杀手有点冷', 0, 0),
(53, 2, 4, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-06\\150468877015925.jpg\";}', '阿斯达', '12354', '二室', 100, 250, '2000', '123,好房,大气', 1, 1504688788, '阿斯达', 1, 0),
(54, 2, 4, 4, 'a:1:{i:0;s:44:\"/admin/uploads\\2017-09-07\\15047679067969.jpg\";}', '菜园坝花园', '卫星半岛小区', '三室,四室', 100, 50, '1万/平方', '空气质量比较高', 2, 1504768109, '好的位置 好的环境', 1, 0),
(56, 2, 5, 1, 'a:4:{i:0;s:50:\"/admin/uploads/2017-09-08/15048524081068107737.jpg\";i:1;s:49:\"/admin/uploads/2017-09-08/1504852408234697833.jpg\";i:2;s:50:\"/admin/uploads/2017-09-08/15048524081554769601.jpg\";i:3;s:49:\"/admin/uploads/2017-09-08/1504852408535523805.jpg\";}', '双拼别墅 赖特风格 全采光地下室 一湖四岛六公 花园300米', '融创金开融府', '一室,二室,三室,四室,五室及以上', 255, 860000, '86万', '次新小区,交通便利,素质住户,繁华地段', 1, 1504853279, '测试二手房条目', 3, 0),
(57, 2, 6, 1, 'a:4:{i:0;s:50:\"/admin/uploads/2017-09-08/15048546541608459033.jpg\";i:1;s:49:\"/admin/uploads/2017-09-08/1504854654351985802.jpg\";i:2;s:50:\"/admin/uploads/2017-09-08/15048546541904368694.jpg\";i:3;s:50:\"/admin/uploads/2017-09-08/15048546542131253910.jpg\";}', '协信豪装三改二，全实木家具，20多万的装修，让你享受品质生活', '协信城立方', '二室,三室', 150, 2300000, '230万', '采光充足,急售', 4, 1504854657, '测试二手房条目', 3, 0),
(58, 2, 10, 1, 'a:5:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150528618125474.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150528618124497.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150528618126290.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150528618110899.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150528618123702.jpg\";}', '好的房子', '阳光小区', '三室', 100, 20000000, '1万/平方', '四季如冬', 1, 1505286185, '没有什么不是好的', 0, 0),
(59, 2, 4, 4, 'a:8:{i:0;s:45:\"/admin/uploads\\2017-09-09\\150494166124284.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-09\\150494166112376.jpg\";i:2;s:44:\"/admin/uploads\\2017-09-09\\15049416617141.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-09\\150494166122202.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-09\\150494166118795.jpg\";i:5;s:44:\"/admin/uploads\\2017-09-09\\15049416615553.jpg\";i:6;s:44:\"/admin/uploads\\2017-09-09\\15049416613272.jpg\";i:7;s:44:\"/admin/uploads\\2017-09-09\\15049416614449.jpg\";}', '好房', '阳光小区', '三室', 108, 20000, '1万/平方', '四季如冬', 2, 1504941693, '无需付款，秩序买卖', 3, 1),
(60, 2, 4, 4, 'a:6:{i:0;s:45:\"/admin/uploads\\2017-09-09\\150494328721731.jpg\";i:1;s:44:\"/admin/uploads\\2017-09-09\\15049432874332.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-09\\150494328732480.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-09\\150494328719637.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-09\\150494328730105.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-09\\150494328732586.jpg\";}', '新房', '12354', '二室', 21, 250, '2000', '123,好房,大气', 1, 1504943298, '阿斯达', 1, 0),
(61, 2, 10, 1, 'a:7:{i:0;s:45:\"/admin/uploads\\2017-09-12\\150521571521295.jpg\";i:1;s:44:\"/admin/uploads\\2017-09-12\\15052157155645.jpg\";i:2;s:44:\"/admin/uploads\\2017-09-12\\15052157151542.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-12\\150521571627964.jpg\";i:4;s:44:\"/admin/uploads\\2017-09-12\\15052157162498.jpg\";i:5;s:44:\"/admin/uploads\\2017-09-12\\15052157165319.jpg\";i:6;s:45:\"/admin/uploads\\2017-09-12\\150521571631429.jpg\";}', '新房12', '阳光小区', '二室,三室', 100, 250, '1300', '阿斯达', 1, 1505215735, '阿斯达', 1, 0),
(63, 2, 4, 1, 'a:15:{i:0;s:44:\"/admin/uploads\\2017-09-13\\15052855779891.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150528557721802.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150528557722826.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150528557719872.jpg\";i:4;s:45:\"/admin/uploads\\2017-09-13\\150528557716155.jpg\";i:5;s:45:\"/admin/uploads\\2017-09-13\\150528557732089.jpg\";i:6;s:45:\"/admin/uploads\\2017-09-13\\150528557718616.jpg\";i:7;s:45:\"/admin/uploads\\2017-09-13\\150528563029467.jpg\";i:8;s:45:\"/admin/uploads\\2017-09-13\\150528563127832.jpg\";i:9;s:44:\"/admin/uploads\\2017-09-13\\15052856312705.jpg\";i:10;s:45:\"/admin/uploads\\2017-09-13\\150528563124054.jpg\";i:11;s:45:\"/admin/uploads\\2017-09-13\\150528563113969.jpg\";i:12;s:45:\"/admin/uploads\\2017-09-13\\150528563111550.jpg\";i:13;s:44:\"/admin/uploads\\2017-09-13\\15052856316646.jpg\";i:14;s:44:\"/admin/uploads\\2017-09-13\\15052856319719.jpg\";}', 'asddwadsa', '12354', '二室,三室', 100, 35, '13', '阿斯达', 1, 1505285652, '阿斯达', 0, 0),
(64, 2, 13, 1, 'a:4:{i:0;s:45:\"/admin/uploads\\2017-09-13\\150528610918734.jpg\";i:1;s:44:\"/admin/uploads\\2017-09-13\\15052861097268.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150528610923759.jpg\";i:3;s:45:\"/admin/uploads\\2017-09-13\\150528610916077.jpg\";}', '1231484', '12354', '二室', 108, 35, '2000', '123,好房,大气', 1, 1505286132, '阿斯达', 0, 0),
(65, 2, 4, 1, 'a:3:{i:0;s:43:\"/admin/uploads\\2017-09-13\\1505295571721.jpg\";i:1;s:45:\"/admin/uploads\\2017-09-13\\150529557120853.jpg\";i:2;s:45:\"/admin/uploads\\2017-09-13\\150529557210545.jpg\";}', '按时啊实打实大', '阳光小区', '二室', 108, 35, '2000', '123,好房,大气', 1, 1505295587, '阿斯达', 1, 0),
(66, 2, 13, 1, 'a:1:{i:0;s:45:\"/admin/uploads\\2017-09-15\\150544263624396.jpg\";}', '新房sdfsdf', '阳光小区', '二室', 108, 250, '2000', '阿斯达', 1, 1505442658, '阿斯达', 0, 0),
(67, 2, 25, 1, 'a:1:{i:0;s:50:\"/admin/uploads/2017-10-14/1507944264152975773.jpeg\";}', '4545', '544545', '二室,三室', 4554, 4554, '4554', '4545', 0, 1507944268, '5454', 0, 0),
(68, 2, 25, 36, 'a:1:{i:0;s:51:\"/admin/uploads/2017-10-14/15079444741110552695.jpeg\";}', '435445', '4554', '二室,三室', 5454, 5445, '5454', '4545', 2, 1507944477, '545445', 0, 0),
(69, 2, 25, 1, 'a:1:{i:0;s:51:\"/admin/uploads/2017-10-14/15079790801247914798.jpeg\";}', '3443', '344343', '一室,二室,三室', 4343, 4343, '4343', '4343', 0, 1507979083, '4343', 0, 0),
(70, 2, 25, 36, 'a:1:{i:0;s:51:\"/admin/uploads/2017-10-14/15079791822044789133.jpeg\";}', 'tiany测试', '4343', '一室,二室,三室', 4334, 4343, '4334', '4343', 0, 1507979185, '3443', 0, 0),
(71, 2, 8, 38, 'a:2:{i:0;s:50:\"/admin/uploads/2017-10-18/15083354941247222783.jpg\";i:1;s:50:\"/admin/uploads/2017-10-18/15083354952119519198.jpg\";}', '丰台房测试', '丰台放测试', '二室', 100, 10000, '10000/㎡', '各方面都好，这号，那好', 2, 1508335498, '很好的房', 1, 0),
(72, 2, 11, 1, 'a:4:{i:0;s:50:\"/admin/uploads/2017-10-22/15086785211725661963.jpg\";i:1;s:49:\"/admin/uploads/2017-10-22/1508678521330821894.jpg\";i:2;s:50:\"/admin/uploads/2017-10-22/15086785211895876899.jpg\";i:3;s:50:\"/admin/uploads/2017-10-22/15086785221477156020.jpg\";}', '庞各庄好房', '庞各庄小区', '三室', 120, 20000, '20000元/㎡', '朝向好，职位好，阳光好', 0, 1508678602, '好房，大家快来看啊', 3, 0),
(73, 2, 15, 1, 'a:3:{i:0;s:50:\"/admin/uploads/2017-10-30/15093762532008862415.jpg\";i:1;s:49:\"/admin/uploads/2017-10-30/1509376253404709074.jpg\";i:2;s:50:\"/admin/uploads/2017-10-30/15093762532090100946.jpg\";}', '密云好房', '密云1号', '二室', 123, 300, '300万', '朝向好，便宜', 0, 1509376435, '这是备注', 3, 0);

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
-- 转存表中的数据 `used_house_info`
--

INSERT INTO `used_house_info` (`id`, `uhcid`, `pcid`, `unit_price`, `tage`, `orientation`, `type`, `upfitter`, `era`, `ctime`, `community`, `rail_transit`, `selling_points`) VALUES
(25, 45, 3, '20', '15', '东', '电梯', '有', '2011', 1504514397, '大地名', '有', '<p>可以交付的<br/></p>'),
(26, 46, 2, '20', '15', '阿斯达', '忠告', '123456', '123456', 1504525822, '按时', '可以.在z', '<p>123as4d65as456das<br/></p>'),
(27, 47, 1, '121', '打死', '阿斯达', '23132', '阿斯达', '51按时', 1504527824, '啊实打实夫人访问', '阿斯达', '<p>说的发送到萨达啊</p>'),
(28, 48, 4, '121', 'SAS', '发的我', '阿瓦尔多', '的稳定', 'dasd', 1504527880, '粉粉粉', '访问服务', '<p>啊实打实大师</p>'),
(29, 49, 4, '32', 'SAS', '的发送到', '期望的渠道', '阿斯达', '打死多问问f', 1504527919, '啊实打实夫人访问', '访问服务', '<p>斯蒂芬创造性</p>'),
(30, 51, 1, '120', '20', '东南', '电梯房 ', '有装修', '1996', 1504670362, '海峰楼', '2号地铁', '<p>关于这儿写的初始东西</p>'),
(31, 52, 4, '200', '20', '东', '高级', '有装修', '2013', 1504685895, '大型', '阿斯达', '<p>123456789</p>'),
(32, 53, 4, '123', '25', '东南', '123456', '有', '123456', 1504688815, '阳光小区', '可以.在z', '<p>阿萨萨达安达市<br/></p>'),
(33, 54, 3, '20', '20', '东南', '电梯房', '高档精装', '2013', 1504768303, '阳光小区', '有', '<p>市场上的这个地方都比较好<br/></p>'),
(35, 56, 4, '11622', '低层（共30层）', '南北', '普通住在', '精装修', '2008年', 1504853564, '奔力绿色空间', '3号线唐家院子步行361m', '<p style=\"margin-top: 1em; margin-bottom: 1em; unicode-bidi: embed; color: rgb(51, 51, 51); font-size: 13.92px; white-space: normal; text-size-adjust: auto;\">卖点是商品销售链条中的生死环节，是交易成功的决定因素。无论你是导购还是<a href=\"http://wiki.mbalib.com/wiki/%E5%BA%97%E9%95%BF\" title=\"店长\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">店长</a>，都需要把你们产品的卖点准确地传达给<a href=\"http://wiki.mbalib.com/wiki/%E5%AE%A2%E6%88%B7\" title=\"客户\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">客户</a>。假如你的产品卖点提炼得不好，就无法打动消费者去接受你的产品。这样，你所做的一切也都将是徒劳无益的。</p><p style=\"margin-top: 1em; margin-bottom: 1em; unicode-bidi: embed; color: rgb(51, 51, 51); font-size: 13.92px; white-space: normal; text-size-adjust: auto;\">　　那么，如何利用卖点来完成销售呢?也许很多销售人员在销售时会乐此不疲地向<a href=\"http://wiki.mbalib.com/wiki/%E9%A1%BE%E5%AE%A2\" title=\"顾客\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">顾客</a>罗列自己产品的优点，其实这是不正确的，一个商品固然有很多个卖点，但是在面对顾客的时候，我们不能也不必把所有的卖点都介绍给顾客。那我们要怎样对顾客介绍我们的卖点呢?事实上，在和顾客交谈的过程中，<a href=\"http://wiki.mbalib.com/wiki/%E9%94%80%E5%94%AE%E4%BA%BA%E5%91%98\" title=\"销售人员\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">销售人员</a>只需把产品的核心卖点告知顾客即可。然而，核心卖点又是什么呢?怎样才能把核心卖点介绍给顾客呢?</p><p style=\"margin-top: 1em; margin-bottom: 1em; unicode-bidi: embed; color: rgb(51, 51, 51); font-size: 13.92px; white-space: normal; text-size-adjust: auto;\">　　所谓“核心卖点”不是我们自己认定的，而是针对不同的<a href=\"http://wiki.mbalib.com/wiki/%E6%B6%88%E8%B4%B9%E8%80%85\" title=\"消费者\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">消费者</a>的，是对方最关心的产品的特点。卖点是需要销售人员在面对顾客时灵活采用的，比如，一套沙发的卖点有几个或是十几个，但是，顾客最在意和关心的是产品的安全性和外观，那么，针对<a href=\"http://wiki.mbalib.com/wiki/%E9%A1%BE%E5%AE%A2\" title=\"顾客\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">顾客</a>，这套沙发的<a href=\"http://wiki.mbalib.com/wiki/%E7%8E%AF%E4%BF%9D\" title=\"环保\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">环保</a>、美观就是产品的核心卖点；再如，一扇木门的卖点也有很多，但是，顾客所最关心的是<a href=\"http://wiki.mbalib.com/wiki/%E4%BA%A7%E5%93%81%E7%9A%84%E5%AE%89%E5%85%A8%E6%80%A7\" title=\"产品的安全性\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">产品的安全性</a>、<a href=\"http://wiki.mbalib.com/wiki/%E6%9D%90%E6%96%99\" title=\"材料\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">材料</a>和<a href=\"http://wiki.mbalib.com/wiki/%E5%B7%A5%E8%89%BA\" title=\"工艺\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">工艺</a>，那么就可以根据这三点打造产品的卖点。</p><p style=\"margin-top: 1em; margin-bottom: 1em; unicode-bidi: embed; color: rgb(51, 51, 51); font-size: 13.92px; white-space: normal; text-size-adjust: auto;\">　　卖点是动态的，所以需要销售人员在营销过程中不断地发掘、完善，并赋予产品新的理念和活力，把产品的独特之处带给顾客，让<a href=\"http://wiki.mbalib.com/wiki/%E6%B6%88%E8%B4%B9%E8%80%85\" title=\"消费者\" style=\"margin: 0px; color: rgb(23, 58, 189); text-decoration-line: none;\">消费者</a>留下深刻印象。</p><p><br/></p>'),
(36, 57, 2, '15333', '高层(共30层)', '南北', '普通住宅', '精装修', '2012年', 1504854889, '鲁能新城五街区', '10号线龙头寺公园步行633m', '<p>昨天我梦见一只狮子吻了一只鹿，或许换个方式，另一页你会发现不一样的结局，他们含笑起舞，但一切还是老样子。希望你的梦里，有想要的铁马和冰河。</p><p>&nbsp;</p><p>&nbsp;</p><p>休息，打算早起。当我拿起手机的一刻，早起计划正式破产；</p><p>&nbsp;</p><p>&nbsp;</p><p>想着明天入冬以来的初雪，盘算着今日可能刺骨的寒风，这样的天，窝在被窝，追个剧，来点番茄味的薯片，姜糖味的瓜子，最好再叫一杯卡布奇诺，才是冬天正确的打开方式吧。</p><p>&nbsp;</p><p>&nbsp;</p><p>初雪，总有一种期待与怀念。</p><p>&nbsp;</p><p>&nbsp;</p><p>小兰说，去年11月24日，北京大雪，她游历长城，甚至还翻出当时的视频，照片；</p><p>&nbsp;</p><p>&nbsp;</p><p>我能想象到一个柔依的南方女孩，穿着厚重的羽绒服，哆嗦着却依然雀跃的欢颜；</p><p>&nbsp;</p><p>&nbsp;</p><p>因为那是她心之所向，梦之所往的场景，或许只有当期待和现实重合的时候，才是距离快乐最近的时候；</p><p>&nbsp;</p><p>&nbsp;</p><p>而我，昨日往昔又在作何，回忆似乎有些记不清。</p><p>&nbsp;</p><p>&nbsp;</p><p>可能是只身独自飘零在外，隐隐有一种负面感染。我只记得那个蹲在街角抽烟的人，公园里寂寞荡着秋千的人，深夜坐在路边醉酒心碎的人，公交车上眼眶突然红起来的人，街边长椅拿着手机落泪的人，隔壁一个人吃饭慢慢吞吞的人，高楼的栏杆犹犹豫豫往下看的人，还有那个突然在人群中突然哽咽的人，那个笑着也会流泪的人……</p><p>&nbsp;</p><p>&nbsp;</p><p>心烦，又拿起枕边的《心灵捕手》，里面说“你和我们不一样，你不应该过这种被埋没的日子，我希望有一天来敲你的门，发现你已经走了，去过属于你的生活”。</p><p>&nbsp;</p><p>&nbsp;</p><p>对哦，去过属于你的，仅限于你自己的生活。其实，过去你们只是走过一段路而已，何必弄得怀念比回忆还长。</p><p>&nbsp;</p><p>&nbsp;</p><p>就像拜伦在《沉默》中写到“若我会见到你，时隔经年，我如何和你招呼，以眼泪，以沉默”，其实也不外乎是几句无关痛痒的寒暄而已。</p><p>&nbsp;</p><p>&nbsp;</p><p>想到这，突然有一种豁然晴空的爽朗。你所顾及的，纠结的，担虑的。并不像飞机，火车一样，你晚了，我得等；我晚了，他们就走了；流年的沙漏会过滤一些杂质，留下陪伴在你身边的才是你为之倾心的珍惜。</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;爬雪山吃烧烤，撑着渔船追落日，漂洋过海看极光，七老八十写情书……你该走了，去过属于你的生活。就好像朋友说得，明天初雪，会不会走着走着一不小心白了头……</p><p>&nbsp;</p><p>&nbsp;</p><p>愿你都懂，愿你由衷</p><p>&nbsp;</p><p>&nbsp;</p><p>愿你此生都过得清澈明亮，不言不由衷，不口不对心；</p><p>&nbsp;</p><p>&nbsp;</p><p>没有疾病，没有牵过，没有烦恼，有所追求，不辜负梦想，不深陷过去，懂得活得当下；</p><p>&nbsp;</p><p>&nbsp;</p><p>有人真心待你，诚心做你听众，最好像个孩子无忧无虑；</p><p>&nbsp;</p><p>&nbsp;</p><p>有个人全心全意顾及你，理解你，懂你，挫折迷茫累了也别怕，最后你也活在他的梦里</p><p><br/></p>'),
(37, 58, 3, '20', '15', '东', '忠告', '有', '2011', 1504856623, '按时', '有', '<p><em><strong>阿达</strong>啊实打实大<br/></em></p>'),
(38, 58, 3, '20', '15', '东', '忠告', '有', '2011', 1504856624, '按时', '有', '<p><em><strong>阿达</strong>啊实打实大<br/></em></p>'),
(39, 59, 3, '123456', '15', '东南', '忠告', '有', '123456', 1504941716, '阳光小区', '可以.在z', '<p>哎SDFRTG4DBHAZBNJKSWTYHCBGD<br/></p>'),
(40, 60, 10, '123456', '25', '东南', '忠告', '123456', '2000', 1504943315, '12354', '有', '<p>asdasdsasadarwqeerqwe <br/></p>'),
(41, 61, 4, '20', '15', '阿斯达', '12', '有', '2000', 1505215753, '12354', '可以.在z', '<p>asdasfafsfsafsaf<br/></p>'),
(43, 63, 4, '20', '5', '阿斯达', '12', '123456', '123456', 1505285666, '按时', '有', '<p>asdarwqrasd<br/></p>'),
(44, 64, 3, '123456', '15', '东南', '12', '没有', '2000', 1505286144, '按时', '可以.在z', '<p>asfaffdasdadas<br/></p>'),
(45, 65, 3, '20', '25', '东南', '忠告', '123456', '2000', 1505295600, '12354', '可以.在z', '<p>自行车是最大的发生房阿斯达按时<br/></p>'),
(46, 66, 4, '123456', '25', '东南', '12', '123456', '2000', 1505442671, '12354', '有', '<p>asdasfasf<br/></p>'),
(47, 67, 1, '5454', '5454', '4554', '4554', '5454', '4545', 1507944281, '4554', '4554', '<p>5454</p>'),
(48, 68, 4, '4554', '5454', '5454', '4545', '4545', '5445', 1507944499, '4545', '544545,5566565,656556', '<p>455445</p>'),
(49, 69, 1, '3443', '4343', '4343', '4343', '4334', '4343', 1507979093, '34', '4334', '<p>4343</p>'),
(50, 70, 1, '4343', '4343', '4343', '4343', '4343', '4334', 1507979200, '343', '4334', '<p>433434</p>'),
(51, 71, 1, '10000', '1', '南北', '法拍房', '精装', '2019', 1508335613, '丰台科技园', '10号线，5号线，3号线', '<p style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">阴阳师胧车副本高输出阵容 阴阳师胧车结算方式调整内容，看看阴阳师胧车副本高输出阵容 阴阳师胧车结算方式调整内容。</p><p><img width=\"500\" class=\"normal\" src=\"https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=2244051179,3283430660&fm=173&s=5182C8BD54C2D2F158B5B8FC03001020&w=500&h=332&img.JPEG\"/></p><p style=\"margin: 26px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">胧车结算方式调整</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">调整胧车结算方式，从原有的纯粹团队成绩结算，改为团队成绩与个人贡献共同结算，每位阴阳师大人都会看到自己各个部分的得分以及最终成绩。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">胧车结算方式更改：结算方式使用团队击杀时间积分和个人排名积分二者加和进行结算。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">具体结算分数档次如下：</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">分数&gt; 3500 S</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">3000&lt;分数&lt; 3500 A</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">2500&lt;分数&lt; 3000 B</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">2000&lt;分数&lt; 2500 C</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">分数&lt; 2000且成功击杀 D</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">未成功击杀 E</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">设计师观点：胧车原有的结算方式对团队的依赖程度比较大。新的结算方式加入个人积分设置，阴阳师们在整体通关时间不佳的情况下，若个人输出较高依然可以获得较好的奖励。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\">胧车高输出阵容推荐：破势酒吞童子+针女大天狗+针女姑获鸟+心眼丑时之女+针女花鸟卷/其他奶妈</p><p></p>'),
(52, 72, 55, '20000', '4层', '南北', '回迁房', '精装修', '2013', 1508678697, '庞各庄小区', '10号线，4号线，5号线', '<h2 style=\"margin: 0px; padding: 0px; line-height: 40px; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, 宋体; font-size: 28px; font-weight: 700;\">必读！十九大报告对全面从严治党的九个新论述</h2><p><span class=\"source\" style=\"color: rgb(153, 153, 153); line-height: 2; padding-right: 10px; font-size: 13px; border-right-color: rgb(242, 242, 242); border-right-width: 1px; border-right-style: solid;\">凤凰新闻</span><span class=\"Apple-converted-space\">&nbsp;</span><span class=\"date\" style=\"margin: 0px 9px 0px 6px; color: rgb(153, 153, 153); line-height: 2; font-size: 13px;\">10-22</span><span class=\"Apple-converted-space\">&nbsp;</span><span class=\"time\" style=\"color: rgb(153, 153, 153); line-height: 2; font-size: 13px;\">16:32</span></p><p style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">原标题：必读！十九大报告对全面从严治党的九个新论述</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">习近平总书记所作的十九大报告强调，坚定不移全面从严治党，不断提高党的执政能力和领导水平。报告中16次出现“党的领导”，提出要坚持党对一切工作的领导；13次提到“党的建设”，提出党的建设新的伟大工程在“四个伟大”中起决定性作用；7次出现“全面从严治党”，提出夺取反腐败斗争压倒性胜利。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">这份报告通篇闪烁着马克思主义的理论光辉，是我们在新时代加强党的建设的指导纲领和行动指南。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">中纪委机关报在今日刊发的一篇文章中，摘录出了报告关于全面从严治党的若干新论述，进行了系统梳理。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">一、坚持党要管党、全面从严治党</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“坚持和加强党的全面领导，坚持党要管党、全面从严治党”</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“党要管党、从严治党”是我们党长期坚持的党的建设的基本方针。2014年12月，习近平总书记在江苏省调研时强调，协调推进全面建成小康社会、全面深化改革、全面推进依法治国、全面从严治党。由此，“全面从严治党”作为“四个全面”战略布局的一部分，被提升到全新的高度。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">十九大报告在新时代党的建设总要求的一开头便提出，要“坚持和加强党的全面领导，坚持党要管党、全面从严治党”，更加突出“全面”的要求。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">二、政治建设</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“把党的政治建设摆在首位”“党的政治建设是党的根本性建设，决定党的建设方向和效果”</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">旗帜鲜明讲政治是我们党作为马克思主义政党的根本要求。十九大报告在新时代党的建设总要求中提出，要以党的政治建设为统领，并将政治建设放在党的建设的首位。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">党的政治建设的首要任务，是保证全党服从中央，坚持党中央权威和集中统一领导。全党要坚定执行党的政治路线，严格遵守政治纪律和政治规矩，在政治立场、政治方向、政治原则、政治道路上同党中央保持高度一致。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">三、压倒性胜利</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">“夺取反腐败斗争压倒性胜利”“当前，反腐败斗争形势依然严峻复杂，巩固压倒性态势、夺取压倒性胜利的决心必须坚如磐石”</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">十九大报告在总结过去五年的工作和历史性变革时指出，全面从严治党成效卓著。党的十八大以来，党中央坚持反腐败无禁区、全覆盖、零容忍，坚定不移“打虎”“拍蝇”“猎狐”，反腐败斗争压倒性态势已经形成并巩固发展。</p><p style=\"margin: 22px 0px 0px; padding: 0px; text-align: justify; color: rgb(51, 51, 51); line-height: 24px; font-size: 16px;\">党中央对反腐败斗争形势的判断，从“呈胶着状态”到“压倒性态势正在形成”，到“压倒性态势已经形成”，再到“压倒性态势已经形成并巩固发展”，折射出五年来全面从严治党波澜壮阔的历程。接下来，要进一步夺取反腐败斗争压倒性胜利。</p><p></p>'),
(53, 73, 55, '20009', '6层', '东西', '回迁房', '精装', '2016', 1509376385, '密云2号', '10号线', '<div style=\"height: 90px; color: rgb(34, 34, 34); text-transform: none; text-indent: 0px; letter-spacing: normal; overflow: hidden; padding-bottom: 20px; font-family: &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, &quot;WenQuanYi Micro Hei&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 12px; font-style: normal; font-weight: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;\"></div><p><section></section></p><p><a style=\"color: rgb(68, 68, 68); padding-right: 8px; font-size: 14px; text-decoration: none; display: inline-block;\" href=\"http://sh.qihoo.com/pc/home\">首页</a><span class=\"Apple-converted-space\">&nbsp;</span><a style=\"color: rgb(68, 68, 68); padding-right: 8px; font-size: 14px; text-decoration: none; display: inline-block;\" href=\"http://sh.qihoo.com/pc/home?ch=fun\">娱乐</a><span class=\"Apple-converted-space\">&nbsp;</span><span style=\"color: rgb(153, 153, 153); padding-right: 8px; font-size: 14px; text-decoration: none; display: inline-block;\">正文</span></p><p><p><article><h1 style=\"margin: 0px 0px 9px; color: rgb(64, 64, 64); line-height: 44px; letter-spacing: 1px; font-size: 34px; font-weight: 700;\">生不出孩子，遭男方家&quot;嫌弃&quot;的6大女星，最后一对太可惜了!</h1><p class=\"info\" style=\"margin: 0px; color: gray; line-height: 26px; font-size: 14px;\"><span class=\"source\">北京时间</span><span class=\"Apple-converted-space\">&nbsp;</span>今天09:05</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\">普通家庭都是重视孩子，明星豪门家庭更紧致下一代，没有生孩子被嫌弃，这6位太委屈了。</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\">1、鲁豫</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\">鲁豫嫁给外国老公遭到家暴，回国之后，和初恋男友结婚，两人感情十分恩爱，47岁鲁豫迟迟未孕，男方家里也十分着急。</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\"><img src=\"http://p1.qhimgs4.com/t0193961fd2de0ac5b2.webp\"/>2、周慧敏</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\">一代女神周慧敏，嫁给情场浪子倪震，结婚那么久，一直没有自己的孩子，传周慧敏年纪大了不能生。</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\"><img src=\"http://p2.qhimgs4.com/t0138fcf5b7c9353ccc.webp\"/>3、车晓</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\">车晓曾经是女明星&quot;嫁得好&quot;的典范，嫁入豪门深似海，婚后几年没有生育孩子，老公李兆会和她离婚，传李兆会喜欢程媛媛才离婚。</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\"><img src=\"http://p0.qhimgs4.com/t01ea3b7430397c8b83.webp\"/>4、周海媚</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\">周海媚一直没有自己孩子，丈夫却十分喜欢孩子，最后两人只能去领养一个。</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\"><img src=\"http://p0.qhimgs4.com/t01f1f5e154f82e592e.webp\"/>5、杨丽萍</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\">杨丽萍为了终身事业，放弃了生育孩子的机会，因此离婚了2次，第二任丈夫最后理解她，选择了复合。</p><p style=\"margin: 0px 0px 26px; overflow: hidden;\"><img src=\"http://p0.qhimgs4.com/t01e9c5d09ac7cfa4df.webp\"/></p></article></p><p></p><p><br/></p><p></p><p></p></p>');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=30;

--
-- 使用表AUTO_INCREMENT `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=39;

--
-- 使用表AUTO_INCREMENT `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=36;

--
-- 使用表AUTO_INCREMENT `house_category`
--
ALTER TABLE `house_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=15;

--
-- 使用表AUTO_INCREMENT `house_encyclopedia_article`
--
ALTER TABLE `house_encyclopedia_article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=72;

--
-- 使用表AUTO_INCREMENT `house_encyclopedia_category`
--
ALTER TABLE `house_encyclopedia_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=195;

--
-- 使用表AUTO_INCREMENT `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=140;

--
-- 使用表AUTO_INCREMENT `new_house_catalog`
--
ALTER TABLE `new_house_catalog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=136;

--
-- 使用表AUTO_INCREMENT `new_house_info`
--
ALTER TABLE `new_house_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=131;

--
-- 使用表AUTO_INCREMENT `new_house_main`
--
ALTER TABLE `new_house_main`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=134;

--
-- 使用表AUTO_INCREMENT `property_consultant`
--
ALTER TABLE `property_consultant`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=56;

--
-- 使用表AUTO_INCREMENT `sell_house_info`
--
ALTER TABLE `sell_house_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `tenement_catalog`
--
ALTER TABLE `tenement_catalog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=58;

--
-- 使用表AUTO_INCREMENT `tenement_info`
--
ALTER TABLE `tenement_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=51;

--
-- 使用表AUTO_INCREMENT `used_house_catalog`
--
ALTER TABLE `used_house_catalog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=74;

--
-- 使用表AUTO_INCREMENT `used_house_info`
--
ALTER TABLE `used_house_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
