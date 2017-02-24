-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?02 �?21 �?17:20
-- 服务器版本: 5.5.40
-- PHP 版本: 5.6.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shixi`
--

-- --------------------------------------------------------

--
-- 表的结构 `dg_change`
--

CREATE TABLE IF NOT EXISTS `dg_change` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '申请类型,0变更企业1变更岗位',
  `profession` tinyint(1) NOT NULL DEFAULT '0' COMMENT '专业对口,0不对口1对口',
  `insurance` tinyint(1) NOT NULL DEFAULT '0' COMMENT '保险,0未购买1已购买',
  `student_id` int(10) NOT NULL DEFAULT '0' COMMENT '实习学生ID',
  `corporation_id` int(10) NOT NULL DEFAULT '0' COMMENT '企业ID',
  `position` char(255) NOT NULL DEFAULT '' COMMENT '实习岗位',
  `reason` text NOT NULL COMMENT '变更原因',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `applytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='变更实习申请表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `dg_change`
--

INSERT INTO `dg_change` (`id`, `type`, `profession`, `insurance`, `student_id`, `corporation_id`, `position`, `reason`, `status`, `applytime`) VALUES
(2, 0, 0, 0, 20170209, 2, '', '回家有事', -1, '2017-02-07 08:30:24'),
(3, 1, 1, 1, 20170209, 2, 'php工程师', '我不想干了', 1, '2017-02-20 08:30:25');

-- --------------------------------------------------------

--
-- 表的结构 `dg_class`
--

CREATE TABLE IF NOT EXISTS `dg_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classname` char(32) NOT NULL DEFAULT '' COMMENT '名称',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `profession` int(10) NOT NULL DEFAULT '0' COMMENT '院系专业ID',
  `master` varchar(10) NOT NULL,
  `grade` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='专业表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dg_class`
--

INSERT INTO `dg_class` (`id`, `classname`, `addtime`, `profession`, `master`, `grade`) VALUES
(1, '机设011', '2017-02-10 06:24:32', 1, '郭德纲', 1),
(2, '自动化002', '0000-00-00 00:00:00', 0, '于谦', 1);

-- --------------------------------------------------------

--
-- 表的结构 `dg_corporation`
--

CREATE TABLE IF NOT EXISTS `dg_corporation` (
  `isUsed` tinyint(1) DEFAULT '1' COMMENT '1|启用 0|停用',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(255) NOT NULL DEFAULT '' COMMENT '企业名称',
  `city` char(255) NOT NULL DEFAULT '0' COMMENT '地址',
  `type` varchar(30) NOT NULL DEFAULT '' COMMENT '企业性质',
  `contact` varchar(30) NOT NULL DEFAULT '' COMMENT '联系人',
  `department` varchar(30) NOT NULL DEFAULT '' COMMENT '部门',
  `position` varchar(30) NOT NULL DEFAULT '' COMMENT '职务',
  `telephone` varchar(30) NOT NULL DEFAULT '' COMMENT '电话号码',
  `mobile` varchar(30) NOT NULL DEFAULT '' COMMENT '手机',
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '企业邮箱',
  `zipcode` varchar(30) NOT NULL DEFAULT '' COMMENT '邮政编码',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '详细地址',
  `website` varchar(30) NOT NULL DEFAULT '' COMMENT '企业网址',
  `introduction` text COMMENT '企业介绍',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='实习企业表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dg_corporation`
--

INSERT INTO `dg_corporation` (`isUsed`, `id`, `name`, `city`, `type`, `contact`, `department`, `position`, `telephone`, `mobile`, `email`, `zipcode`, `address`, `website`, `introduction`, `addtime`) VALUES
(1, 1, '上海斐讯数字科技股份有限公司', '苏州市', '私企', '董嘉耀', '开发部', '宣传', '12345678', '15850978623', '', '', '三个兵哥哥', '', NULL, '0000-00-00 00:00:00'),
(1, 2, '上海腾讯计算机有限公司', '上海', '私企', '马化腾', '宣传部', '开发', '8912878', '13053112897', '1281074511@qq.com', '123456', '上海', 'www.qq.com', '腾讯有限公司', '2017-02-16 07:12:36');

-- --------------------------------------------------------

--
-- 表的结构 `dg_grade`
--

CREATE TABLE IF NOT EXISTS `dg_grade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL DEFAULT '' COMMENT '名称',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='专业表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dg_leave`
--

CREATE TABLE IF NOT EXISTS `dg_leave` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emegencyconcat` char(32) NOT NULL DEFAULT '' COMMENT '紧急联系人',
  `telephone` varchar(30) NOT NULL DEFAULT '' COMMENT '电话号码',
  `content` text COMMENT '请假内容',
  `student_id` int(10) NOT NULL DEFAULT '0' COMMENT '请假人ID',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `address` varchar(255) NOT NULL DEFAULT '0' COMMENT '位置',
  `applytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `endtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='请假表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dg_leave`
--

INSERT INTO `dg_leave` (`id`, `emegencyconcat`, `telephone`, `content`, `student_id`, `status`, `address`, `applytime`, `endtime`) VALUES
(2, '叶方勇', '12345678', '1月3日、4日，全国文化厅局长会议在北京友谊宾馆召开。会议分别由文化部党组副书记、副部长杨志今和副部长项兆伦主持。我院管向群书记作为共建高校代表出席会议。\r\n与会代表首先听取了文化部部长雒树刚作工作报告。雒部长在报告中系统梳理了党的十八大以来习近平总书记关于文化建设的重要论述，以及文化系统贯彻落实中央部署开展的工作。报告从党的建设、关于艺术创作生产、关于公共文化服务体系建设、关于文物保护利用关于非物质文化遗产保护传承、关于文化市场培育和监管、关于文化产业发展、关于对外和对港澳台文化交流等十个方面总结了2016年文化工作。报告全面部署了2017年文化工作：1、深入贯彻落实习近平总书记关于文艺工作的重要讲话精神，大力繁荣艺术创作生产。2、深入贯彻落实《公共文化服务保障法》，推动公共文化服务体系建设再上新台阶。3、深入贯彻落实中央关于保护弘扬中华优秀传统文化的新部署，加大文化遗产保护利用力度。4、积极应对文化市场发展新形势，不断提高文化市场管', 20170209, 1, '0', '2017-02-16 00:00:00', '2017-02-18 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `dg_notice`
--

CREATE TABLE IF NOT EXISTS `dg_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text COMMENT '内容',
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '上传人',
  `pro_id` int(10) NOT NULL,
  `views` int(10) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `pubtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edittime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='请假表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `dg_notice`
--

INSERT INTO `dg_notice` (`id`, `title`, `content`, `user_id`, `pro_id`, `views`, `pubtime`, `edittime`) VALUES
(1, '明天', '明天会更好', 100, 1, 0, '2017-02-15 08:42:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `dg_practice`
--

CREATE TABLE IF NOT EXISTS `dg_practice` (
  `guide` char(255) DEFAULT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) NOT NULL DEFAULT '0' COMMENT '请假人ID',
  `corporation_id` int(10) NOT NULL DEFAULT '0' COMMENT '企业ID',
  `profession` tinyint(1) NOT NULL DEFAULT '0',
  `insurance` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `teacher` varchar(10) NOT NULL COMMENT '//校内指导老师',
  `starttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '开始时间',
  `endtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '结束时间',
  `applytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `position` varchar(255) NOT NULL,
  `isPractice` int(1) unsigned NOT NULL DEFAULT '1',
  `mode` tinyint(4) NOT NULL DEFAULT '1' COMMENT '//1自找 |2学校安排',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='实习申请表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dg_practice`
--

INSERT INTO `dg_practice` (`guide`, `id`, `student_id`, `corporation_id`, `profession`, `insurance`, `phone`, `address`, `status`, `teacher`, `starttime`, `endtime`, `applytime`, `position`, `isPractice`, `mode`) VALUES
('郭德纲', 2, 20170209, 2, 1, 0, '8912878', '安徽省', -1, '', '2016-12-09 00:25:00', '2017-02-02 14:50:00', '2016-12-09 00:25:00', 'php开发工程师', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `dg_profession`
--

CREATE TABLE IF NOT EXISTS `dg_profession` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL DEFAULT '' COMMENT '名称',
  `school` int(10) NOT NULL DEFAULT '0' COMMENT '学校ID',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='专业表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dg_profession`
--

INSERT INTO `dg_profession` (`id`, `name`, `school`, `addtime`) VALUES
(1, '机械设计', 1, '2017-01-11 17:31:15'),
(2, '所有人', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `dg_report`
--

CREATE TABLE IF NOT EXISTS `dg_report` (
  `score` tinyint(2) DEFAULT NULL,
  `result` tinyint(1) DEFAULT '0' COMMENT '0|未审核-1|已退回 1|已审阅',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course` varchar(30) NOT NULL DEFAULT '' COMMENT '实习课程',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text COMMENT '内容',
  `nexplan` text COMMENT '下周计划',
  `student_id` int(10) NOT NULL DEFAULT '0' COMMENT '上传人',
  `pic` varchar(255) DEFAULT NULL COMMENT '图片',
  `pubtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edittime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` varchar(255) NOT NULL DEFAULT '0' COMMENT '地址',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '类型0周报1月报2实习总结',
  `suggestion` text,
  `isDel` tinyint(1) DEFAULT '0' COMMENT '0|未删除 1|删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='请假表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `dg_report`
--

INSERT INTO `dg_report` (`score`, `result`, `id`, `course`, `title`, `content`, `nexplan`, `student_id`, `pic`, `pubtime`, `edittime`, `address`, `status`, `type`, `suggestion`, `isDel`) VALUES
(40, 0, 1, '数学', '学好数学，走遍天下都不怕', '学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕', '学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕，学好数学，走遍天下都不怕', 20170209, NULL, '2017-02-09 21:01:00', '0000-00-00 00:00:00', '安徽省舒城县干汊河镇', -1, 0, '先生家店铺', 0);

-- --------------------------------------------------------

--
-- 表的结构 `dg_school`
--

CREATE TABLE IF NOT EXISTS `dg_school` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL DEFAULT '' COMMENT '名称',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='学校表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dg_signin`
--

CREATE TABLE IF NOT EXISTS `dg_signin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) NOT NULL DEFAULT '0' COMMENT '上传人',
  `pubtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` varchar(255) NOT NULL DEFAULT '0' COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='签到表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dg_student`
--

CREATE TABLE IF NOT EXISTS `dg_student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentno` char(32) NOT NULL DEFAULT '' COMMENT '教师工号',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '姓名',
  `phone` varchar(60) NOT NULL DEFAULT '' COMMENT '手机',
  `classno` int(10) unsigned NOT NULL COMMENT '班级名称',
  `course` varchar(30) NOT NULL DEFAULT '' COMMENT '实习课程',
  `corporation_id` int(10) unsigned NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '邮箱',
  `sex` tinyint(1) NOT NULL DEFAULT '0' COMMENT '性别0为男1为女',
  `address` varchar(10) NOT NULL,
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dg_student`
--

INSERT INTO `dg_student` (`id`, `studentno`, `password`, `name`, `phone`, `classno`, `course`, `corporation_id`, `email`, `sex`, `address`, `addtime`) VALUES
(1, '20170209', '202cb962ac59075b964b07152d234b70', 'yfy', '13053112897', 1, '数学', 1, '1281074511@qq.com', 0, '安徽省', '2017-02-09 11:20:14'),
(2, '20170210', '202cb962ac59075b964b07152d234b70', '胡家园', '13053112897', 1, '数学', 1, '1281074511@qq.com', 0, '安徽省', '2017-02-10 15:33:47');

-- --------------------------------------------------------

--
-- 表的结构 `dg_teacher`
--

CREATE TABLE IF NOT EXISTS `dg_teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teacherno` char(32) NOT NULL DEFAULT '' COMMENT '教师工号',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `name` char(32) NOT NULL DEFAULT '' COMMENT '名称',
  `profession` int(10) NOT NULL DEFAULT '0' COMMENT '院系专业ID',
  `identity` varchar(10) NOT NULL,
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='专业表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dg_teacher`
--

INSERT INTO `dg_teacher` (`id`, `teacherno`, `password`, `name`, `profession`, `identity`, `addtime`) VALUES
(1, '100', '202cb962ac59075b964b07152d234b70', '叶方勇', 1, '班主任', '2017-02-15 08:19:22'),
(2, '200', '202cb962ac59075b964b07152d234b70', '梦梦', 2, '系主任', '2017-02-17 05:28:41');

-- --------------------------------------------------------

--
-- 表的结构 `dg_user`
--

CREATE TABLE IF NOT EXISTS `dg_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '昵称',
  `phone` varchar(60) NOT NULL DEFAULT '' COMMENT '手机',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '类型0学生1教师2企业3管理员',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员用户表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `dg_user`
--

INSERT INTO `dg_user` (`id`, `password`, `username`, `phone`, `type`, `addtime`) VALUES
(1, '202cb962ac59075b964b07152d234b70', 'yfy', '13053112897', 0, '2017-02-05 22:10:48'),
(2, '202cb962ac59075b964b07152d234b70', '胡家园', '13053112897', 0, '2017-02-10 10:39:48'),
(3, '202cb962ac59075b964b07152d234b70', '叶方勇', '13053112897', 1, '2017-02-01 11:34:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
