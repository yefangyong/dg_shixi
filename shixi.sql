-- MySQL dump 10.11
--
-- Host: localhost    Database: shixi1
-- ------------------------------------------------------
-- Server version	5.0.95

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `shixi1`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `shixi1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `shixi1`;

--
-- Table structure for table `dg_change`
--

DROP TABLE IF EXISTS `dg_change`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_change` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `type` tinyint(1) NOT NULL default '0' COMMENT '申请类型,0变更企业1变更岗位',
  `profession` tinyint(1) NOT NULL default '0' COMMENT '专业对口,0不对口1对口',
  `insurance` tinyint(1) NOT NULL default '0' COMMENT '保险,0未购买1已购买',
  `student_id` int(10) NOT NULL default '0' COMMENT '实习学生ID',
  `corporation_id` int(10) NOT NULL default '0' COMMENT '企业ID',
  `cname` varchar(255) NOT NULL COMMENT '//企业名字，没有时可以自己添加',
  `position` char(255) NOT NULL default '' COMMENT '实习岗位',
  `reason` text NOT NULL COMMENT '变更原因',
  `status` tinyint(1) NOT NULL default '0' COMMENT '状态',
  `applytime` datetime NOT NULL default '0000-00-00 00:00:00',
  `guide` varchar(255) NOT NULL COMMENT '//企业指导老师',
  `guide_email` varchar(255) NOT NULL COMMENT '//企业老师邮箱',
  `address` varchar(255) default NULL COMMENT '//地址',
  `detailaddress` varchar(255) default '' COMMENT '//详细地址',
  `teacher_id` int(11) default NULL COMMENT '//审核人id',
  `phone` varchar(20) NOT NULL default '',
  `stu_del` tinyint(1) NOT NULL default '1' COMMENT '0|删除 1|正常',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8 COMMENT='变更实习申请表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_change`
--

LOCK TABLES `dg_change` WRITE;
/*!40000 ALTER TABLE `dg_change` DISABLE KEYS */;
INSERT INTO `dg_change` VALUES (109,0,0,0,2017300,0,'沃尔玛超市','收银员','变更不需要理由！',1,'2017-03-29 14:19:52','马云','','南京江宁区','南京江宁区南京江宁区南京江宁区南京江宁区南京江宁区南京江宁区',200,'123456',1),(110,1,0,0,2017888,0,'Huii','Uii','就默默',0,'2017-03-29 18:40:58','May','','Yujingh 无话','',200,'10010',1),(108,1,1,0,2017300,23,'大疆机器人','软件工程师','我需要变更岗位',-1,'2017-03-29 14:16:00','赵本山','111','南京江宁区','南京江宁区南京江宁区南京江宁区南京江宁区++',200,'13609098877',1),(111,0,1,1,2017888,0,'飞云','Gujkko','我有我的杨',0,'2017-03-29 18:43:46','Joanna','','Wrtfhhjgjjjjjhg fghhjjjfg审计学院','',200,'19260099675',1),(99,1,0,1,2017103,0,'汇顶科技','audio调试','我很有才，想变就变！',0,'2017-03-24 17:10:57','李健','','南京市雨花区小航路','深圳市宝安区小航空路128号',200,'13699881235',1),(102,1,1,0,2017104,0,'上海宝马汽车','机械师222','我想换个岗位',1,'2017-03-25 12:57:13','马云2','','南京市雨花区小航路','',300,'13661623965',1),(105,1,1,0,2017109,0,'富智力康','驱动工程师','胡椒粉解放军打击经常解放军',1,'2017-03-27 16:00:02','Sherry','','浦口','',200,'10089',1),(106,0,1,1,2017109,0,'富智力康','软件测试工程师','国家级聚居哈哈',1,'2017-03-27 16:02:23','蚂蚁','','HiFi TG打火机大航海','',200,'$678微软发广告',1);
/*!40000 ALTER TABLE `dg_change` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_class`
--

DROP TABLE IF EXISTS `dg_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_class` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `classname` char(32) NOT NULL default '' COMMENT '名称',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `profession` int(10) NOT NULL default '0' COMMENT '院系专业ID',
  `master` varchar(10) NOT NULL,
  `grade` varchar(255) default '',
  `master_no` varchar(20) NOT NULL default '',
  `dep_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='专业表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_class`
--

LOCK TABLES `dg_class` WRITE;
/*!40000 ALTER TABLE `dg_class` DISABLE KEYS */;
INSERT INTO `dg_class` VALUES (1,'机设011','2017-02-10 06:24:32',1,'梦梦','1','909',1),(2,'自动化002','0000-00-00 00:00:00',1,'胡家园','1','999',2),(13,'计算机八班','0000-00-00 00:00:00',0,'','2016','900',11),(12,'test','0000-00-00 00:00:00',0,'','2016','',11);
/*!40000 ALTER TABLE `dg_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_corporation`
--

DROP TABLE IF EXISTS `dg_corporation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_corporation` (
  `isUsed` tinyint(1) default '1' COMMENT '1|启用 0|停用',
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` char(255) NOT NULL default '' COMMENT '企业名称',
  `city` char(255) NOT NULL default '0' COMMENT '地址',
  `type` varchar(30) NOT NULL default '' COMMENT '企业性质',
  `contact` varchar(30) NOT NULL default '' COMMENT '联系人',
  `department` varchar(30) NOT NULL default '' COMMENT '部门',
  `position` varchar(30) NOT NULL default '' COMMENT '职务',
  `telephone` varchar(30) NOT NULL default '' COMMENT '电话号码',
  `mobile` varchar(30) NOT NULL default '' COMMENT '手机',
  `email` varchar(30) NOT NULL default '' COMMENT '企业邮箱',
  `zipcode` varchar(30) NOT NULL default '' COMMENT '邮政编码',
  `address` varchar(255) NOT NULL default '' COMMENT '详细地址',
  `website` varchar(255) NOT NULL default '',
  `introduction` text COMMENT '企业介绍',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `detailaddress` varchar(255) NOT NULL COMMENT '//详细地址',
  `fax` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='实习企业表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_corporation`
--

LOCK TABLES `dg_corporation` WRITE;
/*!40000 ALTER TABLE `dg_corporation` DISABLE KEYS */;
INSERT INTO `dg_corporation` VALUES (1,2,'上海腾讯计算机有限公司','上海','私企','马化腾','宣传部','CEO','8912878','','1281074511@qq.com','225653','上海','www.qq.comm','腾讯有限公司','2017-03-28 16:41:54','深圳',''),(1,3,'百度','苏州','国资','李彦宏','','美工','123456','1234567','123456','225653','百度大厦','www.baidu.com','百度一下，你就知道','2017-03-28 16:41:54','北京百度科技园',''),(1,6,'华为','苏州','国资','习近平','','工程师','1234567','12345678900','东方大道','225653','的点点滴滴多多','得到','的境况放假啊','2017-03-28 16:41:54','',''),(1,10,'阿里巴巴','杭州','私企','马云','总裁','美工','123456','1234567','123456','225653','百度大厦','www.baidu.com','百度一下，你就知道','2017-03-28 16:41:54','北京百度科技园',''),(1,11,'漫麦科技','南京','私企','习近平','技术部','','025-3889009','','yk@163.com','225653','雨花台','','一家私企','2017-03-28 16:41:54','南京市雨花台区南京市雨花台区南京市雨花台区南京市雨花台区南京市雨花台区南京市雨花台区',''),(1,13,'三星','韩国','私企','朴槿惠','IT部','','011-900887','','1@163.com','225653','喔喔','www.sanxing.com','一家有思想的电视台，深受老百姓喜欢','2017-03-28 16:41:54','香港尖沙咀',''),(1,15,'上海展讯','上海祖冲之路','国资','Macal','','','021-3899066','','u@sohu.com','225653','上海祖冲之路188号','www.zhanxun.com','一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司，一家做芯片的公司！','2017-03-28 16:41:54','','021-669900'),(1,16,'小米科技','北京','私企','雷军','董事会','CEO','010-8800668','13899002288','yk@sohu.com','200000','北京市海淀区','www.xiaomi.com','为热爱而生','2017-03-28 16:41:54','北京市海淀区北京市海淀区北京市海淀区北京市海淀区北京市海淀区北京市海淀区北京市海淀区北京市海淀区北京市海淀区','010-6688909'),(1,22,'思科','美国','外企','奥巴马','总统府','CEO','121','21','2@COM','333','我就是我就是我就是我就是我就是我就是我就是','www.com.com','我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是','2017-03-28 16:41:54','我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是我就是','1111111'),(1,24,'TCL','上海浦东软件园','外资','张工','','CEO','13899005678','13899005678','yk@sohu.com','20000','上海浦东软件园上海浦东软件园上海浦东软件园上海浦东软件园','www.com','这是一家做电视手机家用电器的公司！！！','2017-03-28 16:41:54','',''),(1,23,'娃哈哈','杭州市西湖区','国资','宗总','','CEO','13661623988','13661623988','11@sohu.com','200000','杭州西湖区西湖区西湖区西湖区','www.wahaha.com','娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈娃哈哈！','2017-03-28 16:41:54','',''),(1,25,'北大青鸟','青岛','私企','明明','技术部','工程师','13599008962','13599008962','2@qq.com','111111','南京市','wwwwww','神奇的一家公司','2017-03-28 16:41:54','雨花台区小行路小行路小行路小行路','123'),(1,26,'谷歌','企业地址','外资','企业联系人','部门','职务','0101234567','13111111111','test@gmail.com','225653','详细地址详细地址详细地址','www.ifeng.com','企业介绍企业介绍企业介绍企业介绍企业介绍企业介绍','2017-03-23 20:39:56','','0101234567'),(1,27,'戴尔科技','无锡市','国资','老于','技术部','工程师','026-9999086','13898986633','1@sohu.com','250000','无锡市无锡市无锡市无锡市无锡市','www.addd.com','卖电脑的公司！','2017-03-24 10:27:17','','2222222'),(1,28,'上海大众','上海','私企','阿牛','销售部','销售经理','15899002689','13698980011','yj@126.com','300000','上海徐汇','www.baidu','一家买汽车的公司，一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司一家买汽车的公司！','2017-03-26 22:04:23','上海徐汇区上海徐汇区上海徐汇区上海徐汇区上海徐汇区上海徐汇区上海徐汇区上海徐汇区','123'),(1,30,'苏果超市','南京','私企','苏果果','业务部','业务员','18996883876','17899002298','y@sohu.com','20000','南京江浦区南京审计学院','www.baidu.com','','2017-03-27 14:52:04','南京江浦区南京审计学院南京江浦区南京审计学院南京江浦区南京审计学院',''),(1,32,'搜狐科技','北京','外资','张朝阳','董事会','CEO','15890908866','15890908866','yk_0821@163.com','20000','北京朝阳北京朝阳北京朝阳+++','www.sohu.com','搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频，搜狐网络，搜狐视频！','2017-03-29 15:35:27','','010-3877990');
/*!40000 ALTER TABLE `dg_corporation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_department`
--

DROP TABLE IF EXISTS `dg_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_department` (
  `id` int(11) NOT NULL auto_increment,
  `dname` varchar(255) character set utf8 NOT NULL COMMENT '//系部名',
  `school_id` int(11) NOT NULL default '0',
  `telephone` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_department`
--

LOCK TABLES `dg_department` WRITE;
/*!40000 ALTER TABLE `dg_department` DISABLE KEYS */;
INSERT INTO `dg_department` VALUES (1,'卫生管理系',1,''),(2,'护理系',2,''),(11,'计算机科学与技术',0,'13661623965');
/*!40000 ALTER TABLE `dg_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_grade`
--

DROP TABLE IF EXISTS `dg_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_grade` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `score` char(32) NOT NULL default '' COMMENT '名称',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `student_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='专业表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_grade`
--

LOCK TABLES `dg_grade` WRITE;
/*!40000 ALTER TABLE `dg_grade` DISABLE KEYS */;
INSERT INTO `dg_grade` VALUES (1,'90','2017-03-01 15:46:23',20170209);
/*!40000 ALTER TABLE `dg_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_leave`
--

DROP TABLE IF EXISTS `dg_leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_leave` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `emegencyconcat` char(32) NOT NULL default '' COMMENT '紧急联系人',
  `telephone` varchar(30) NOT NULL default '' COMMENT '电话号码',
  `content` text COMMENT '请假内容',
  `student_id` int(10) NOT NULL default '0' COMMENT '请假人ID',
  `status` tinyint(1) NOT NULL default '0' COMMENT '状态',
  `address` varchar(255) NOT NULL default '0' COMMENT '位置',
  `applytime` datetime NOT NULL default '0000-00-00 00:00:00',
  `endtime` datetime NOT NULL,
  `teacher_id` int(11) NOT NULL COMMENT '//审核老师的id',
  `starttime` datetime default '0000-00-00 00:00:00',
  `stu_del` tinyint(4) default '1' COMMENT '//0|删除 1|正常',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8 COMMENT='请假表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_leave`
--

LOCK TABLES `dg_leave` WRITE;
/*!40000 ALTER TABLE `dg_leave` DISABLE KEYS */;
INSERT INTO `dg_leave` VALUES (107,'阿斯顿发生','撒的发生','是的撒',2017888,-1,'0','2017-03-20 12:27:04','2017-03-30 12:25:00',100,'2017-03-20 12:25:00',0),(112,'美女','10086','look你爹',2017888,-1,'0','2017-03-20 23:24:02','2017-03-20 00:00:00',200,'2017-03-20 00:00:00',1),(134,'2232','13062612878','的大幅度',2017300,0,'0','2017-03-31 17:35:45','2017-03-31 00:00:00',909,'2017-03-31 00:00:00',1),(114,'','',NULL,2017888,-1,'0','2017-03-20 23:24:33','2017-03-20 00:00:00',200,'2017-03-20 00:00:00',1),(130,'嗯嗯','10086','今天周二\n测试好低温',2017109,0,'0','2017-03-28 16:12:46','2017-03-28 00:00:00',200,'2016-03-28 00:00:00',1),(117,'','',NULL,2017888,0,'0','2017-03-22 20:15:11','2017-03-22 00:00:00',200,'2017-03-22 00:00:00',1),(118,'qqq','qq','qqq',2017888,0,'0','2017-03-22 23:11:51','1900-02-09 09:30:00',0,'1899-12-31 00:00:00',1),(119,'时萌','10010','今天是周四。明天有点急事\n需要请假\n望批准\n谢谢!',2017888,-1,'0','2017-03-23 14:24:09','2017-03-22 00:00:00',200,'2017-03-24 00:00:00',1),(124,'','',NULL,2017888,-1,'0','2017-03-24 18:09:54','2017-01-24 00:00:00',200,'2017-03-24 00:00:00',1),(133,'Hello','10086','Fghhhjhnjbnnhhk\nHjjjkkk\nBnmmmnnnnnmmmmnmm\nBnmmmnnnnnmmmmnmm',2017888,0,'0','2017-03-30 23:01:37','2017-03-30 00:00:00',200,'2017-03-30 00:00:00',1),(127,'地方刚刚','123456789','实习期',2017888,-1,'0','2017-03-27 09:37:11','2017-04-27 00:00:00',200,'2017-03-29 00:00:00',1),(132,'时','10086','你明明',2017888,1,'0','2017-03-29 18:30:29','2017-03-25 00:00:00',200,'2016-03-28 00:00:00',1),(129,'哈哈哈','13661623965','我问问',2017109,1,'0','2017-03-27 17:32:41','2017-03-27 00:00:00',300,'2017-03-27 00:00:00',1),(131,'得得','56666','的',2017109,0,'0','2017-03-28 16:13:42','2017-03-28 00:00:00',0,'2011-08-28 00:00:00',1);
/*!40000 ALTER TABLE `dg_leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_notice`
--

DROP TABLE IF EXISTS `dg_notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_notice` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '' COMMENT '标题',
  `content` text COMMENT '内容',
  `user_id` int(10) NOT NULL default '0' COMMENT '上传人',
  `pro_id` text,
  `views` int(10) NOT NULL default '0' COMMENT '浏览量',
  `pubtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `edittime` datetime NOT NULL default '0000-00-00 00:00:00',
  `class_id` text,
  `dep_id` text,
  `school` tinyint(1) NOT NULL default '0' COMMENT ' �',
  `type` tinyint(1) NOT NULL default '0' COMMENT '0:all,1:student,2:teacher',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8 COMMENT='请假表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_notice`
--

LOCK TABLES `dg_notice` WRITE;
/*!40000 ALTER TABLE `dg_notice` DISABLE KEYS */;
INSERT INTO `dg_notice` VALUES (110,'系领导发布','卫生管理系  系领导发布  ',100,NULL,0,'2017-03-27 22:14:16','0000-00-00 00:00:00','0','1',0,0),(111,'我','我我我',2,NULL,0,'2017-03-28 16:12:39','0000-00-00 00:00:00','1','1',0,0),(112,'么','啊啊啊',2,NULL,0,'2017-03-28 23:16:51','0000-00-00 00:00:00','1','1',0,0),(113,'Gghhj','Hhu',2,NULL,0,'2017-03-29 18:49:09','0000-00-00 00:00:00','1','1',0,0),(114,'Gghhj','Hhu',2,NULL,0,'2017-03-29 18:49:26','0000-00-00 00:00:00','1','1',0,0),(109,'校长发布','校长发布 to 自动化002',300,NULL,0,'2017-03-27 22:10:50','0000-00-00 00:00:00','2','0',0,0),(108,'To 机设011 【2】','To 机设011【2】',200,NULL,0,'2017-03-27 20:30:00','0000-00-00 00:00:00','1','0',0,1);
/*!40000 ALTER TABLE `dg_notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_notice_view`
--

DROP TABLE IF EXISTS `dg_notice_view`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_notice_view` (
  `id` int(11) NOT NULL auto_increment,
  `notice_id` int(11) NOT NULL default '0' COMMENT '公告ID',
  `user_id` int(11) NOT NULL default '0' COMMENT '学号或教师工号',
  `type` tinyint(1) NOT NULL default '0' COMMENT '0已读,1已删除',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COMMENT='公告预览删除记录';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_notice_view`
--

LOCK TABLES `dg_notice_view` WRITE;
/*!40000 ALTER TABLE `dg_notice_view` DISABLE KEYS */;
INSERT INTO `dg_notice_view` VALUES (22,18,20170209,1),(20,18,0,0),(23,45,2017888,0),(24,46,2017888,0),(25,54,2017888,0),(27,54,2017102,0),(54,54,20170209,1),(29,54,2017103,0),(55,55,20170209,0),(57,56,20170209,0),(56,56,2017103,1),(66,57,20170209,0),(63,55,2017888,0),(65,57,2017888,0),(68,57,200,0),(69,51,200,0),(70,56,200,0),(71,58,200,0),(58,58,2017888,1),(73,59,200,0),(74,59,2017888,0),(75,60,200,0),(83,62,200,0),(78,63,2017888,0),(79,63,100,0),(86,64,100,0),(85,63,200,0),(84,64,200,0),(87,70,200,0),(88,70,100,0),(94,70,20170209,0),(95,70,2017888,0),(96,72,200,0),(97,73,2017103,0),(98,73,100,0),(99,73,200,0),(111,73,20170209,0),(101,74,2017888,0),(104,83,100,0),(105,84,100,0),(106,85,300,0),(107,85,100,0),(108,86,200,0),(109,87,200,0),(110,92,300,0),(112,97,200,0),(113,95,200,0),(115,98,2017888,0),(116,102,200,0),(117,103,2017888,0),(118,104,20170209,0),(121,104,200,0),(126,108,200,0),(123,107,200,0),(127,108,100,0),(128,107,100,0),(129,107,2017103,1),(130,108,2017103,1),(131,108,300,0),(132,111,100,0),(133,109,300,0);
/*!40000 ALTER TABLE `dg_notice_view` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_practice`
--

DROP TABLE IF EXISTS `dg_practice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_practice` (
  `guide` char(255) default NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  `student_id` int(10) NOT NULL default '0' COMMENT '请假人ID',
  `corporation_id` int(10) default '0' COMMENT '企业ID',
  `cname` varchar(255) NOT NULL COMMENT '//公司名字',
  `profession` tinyint(1) NOT NULL default '0',
  `insurance` tinyint(1) NOT NULL default '0',
  `phone` varchar(11) NOT NULL,
  `detailaddress` varchar(255) NOT NULL default '',
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL default '0' COMMENT '状态',
  `teacher` varchar(10) NOT NULL COMMENT '//校内指导老师',
  `starttime` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '开始时间',
  `endtime` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '结束时间',
  `applytime` datetime NOT NULL default '0000-00-00 00:00:00',
  `position` varchar(255) NOT NULL,
  `isPractice` int(1) unsigned NOT NULL default '1',
  `mode` tinyint(4) NOT NULL default '1' COMMENT '//1自找 |2学校安排',
  `teacher_id` int(11) NOT NULL COMMENT '//指导老师工号',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=utf8 COMMENT='实习申请表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_practice`
--

LOCK TABLES `dg_practice` WRITE;
/*!40000 ALTER TABLE `dg_practice` DISABLE KEYS */;
INSERT INTO `dg_practice` VALUES ('时萌',225,2017109,0,'富智力康',0,1,'1862550987','','鼓楼区广州路民防大厦14楼膜拜仁宗',1,'','2017-03-27 00:00:00','2017-03-27 00:00:00','2017-03-27 15:55:44','软件测试工程师',1,1,300),('李克强',239,2018181,23,'',0,0,'','','杭州西湖区西湖区西湖区西湖区',1,'','2017-03-28 00:00:00','2017-03-31 00:00:00','0000-00-00 00:00:00','操作工',1,2,0),('马云',220,2017104,0,'上海宝马汽车',0,1,'15633994638','','南京市雨花区晓航luw160号',1,'','2017-03-25 00:00:00','2017-03-26 00:00:00','2017-03-25 12:53:29','机械师',1,1,300),('李克强',236,2017103,23,'',0,0,'','','杭州西湖区西湖区西湖区西湖区',1,'','2017-03-28 00:00:00','2017-03-31 00:00:00','0000-00-00 00:00:00','操作工',1,2,0),('李克强',235,20170209,23,'',0,0,'','','杭州西湖区西湖区西湖区西湖区',1,'','2017-03-28 00:00:00','2017-03-31 00:00:00','0000-00-00 00:00:00','操作工',1,2,0),('Sherry',242,2017888,0,'南京富智康有限公司',1,1,'13914759065','','民房大厦14楼',0,'','2017-03-29 00:00:00','2017-03-29 00:00:00','2017-03-29 18:35:32','软件测试HR',1,1,200),('Gjkkkk',243,2017888,0,'Huii',0,0,'107997998','','Qwertuihdhjjkkopjfghhg@',0,'','2017-03-29 00:00:00','2017-03-29 00:00:00','2017-03-29 18:37:00','Gujkko',1,1,200),('时梦萌',244,2017888,0,'富智康',0,0,'10086','','LOL LOMO',0,'','2017-03-30 00:00:00','2017-03-30 00:00:00','2017-03-30 23:03:23','测量的',1,1,200),('Sherry',245,2017888,0,'南京富智康',0,0,'18116543109','','南京市浦口区江浦街道北江豪庭47栋602',0,'','2017-03-30 00:00:00','2017-03-30 00:00:00','2017-03-30 23:26:08','软件测试工程师',1,1,200),('小果冻',241,2017300,NULL,'大疆机器人',0,0,'13661623098','南京江宁区南京江宁区南京江宁区南京江宁区++','南京江宁区',1,'','2017-03-28 00:00:00','2017-03-31 00:00:00','2017-03-28 23:37:41','工程师',1,1,200);
/*!40000 ALTER TABLE `dg_practice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_profession`
--

DROP TABLE IF EXISTS `dg_profession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_profession` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` char(32) NOT NULL default '' COMMENT '名称',
  `school` int(10) NOT NULL default '0' COMMENT '学校ID',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='专业表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_profession`
--

LOCK TABLES `dg_profession` WRITE;
/*!40000 ALTER TABLE `dg_profession` DISABLE KEYS */;
INSERT INTO `dg_profession` VALUES (1,'机械设计',1,'2017-01-11 17:31:15'),(2,'水利',2,'2017-01-31 21:49:19');
/*!40000 ALTER TABLE `dg_profession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_report`
--

DROP TABLE IF EXISTS `dg_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_report` (
  `score` tinyint(2) default NULL,
  `result` tinyint(1) default '0' COMMENT '0|未审核-1|已退回 1|已审阅',
  `id` int(10) unsigned NOT NULL auto_increment,
  `course` varchar(30) NOT NULL default '' COMMENT '实习课程',
  `title` varchar(255) NOT NULL default '' COMMENT '标题',
  `content` text COMMENT '内容',
  `nexplan` text COMMENT '下周计划',
  `student_id` int(10) NOT NULL default '0' COMMENT '上传人',
  `pic` varchar(255) default NULL COMMENT '图片',
  `pubtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `edittime` datetime NOT NULL default '0000-00-00 00:00:00',
  `address` varchar(255) NOT NULL default '0' COMMENT '地址',
  `status` tinyint(1) NOT NULL default '0' COMMENT '状态',
  `type` tinyint(1) NOT NULL default '0' COMMENT '类型0周报1月报2实习总结',
  `suggestion` text,
  `teacher_id` int(11) NOT NULL COMMENT '//审核老师id',
  `stu_del` tinyint(1) NOT NULL default '1' COMMENT '//0|删除 1|正常',
  `tea_del` tinyint(1) NOT NULL default '1' COMMENT '0|删除 1|正常',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=213 DEFAULT CHARSET=utf8 COMMENT='请假表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_report`
--

LOCK TABLES `dg_report` WRITE;
/*!40000 ALTER TABLE `dg_report` DISABLE KEYS */;
INSERT INTO `dg_report` VALUES (80,0,212,'a','你Jojo look','被你可以了解一下','a',2017888,'/upload/2017/03/29/58db907f0d829.png;/upload/2017/03/29/58db908aa230b.png;','2017-03-29 18:47:25','0000-00-00 00:00:00','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦',1,0,'在步行街',200,1,1),(NULL,0,208,'','test','test',NULL,2017888,'','2017-03-27 22:30:46','0000-00-00 00:00:00','安徽省蚌埠市龙子湖区东风街道国庆街80号',0,0,NULL,0,1,0),(NULL,0,209,'a','今天测试高低温，一会高一会低\n一会冷死0\n一会热死','为什么这个定位跟上次的不一样','a',2017109,'/upload/2017/03/28/58da1dbf8e5cc.png;/upload/2017/03/28/58da1e4489b87.png;','2017-03-28 16:27:24','0000-00-00 00:00:00','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦',0,0,NULL,200,1,1),(NULL,0,210,'a','周报测试','周报内容','a',2017888,'/upload/2017/03/28/58da75adcab2a.png;','2017-03-28 22:39:44','0000-00-00 00:00:00','湖北省武汉市洪山区关山街道东湖广场',0,0,NULL,200,1,0),(80,0,162,'','test','第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报第一篇周报',NULL,2017888,'/upload/2017/03/19/58ce9c0655638.png','2017-03-19 22:56:14','0000-00-00 00:00:00','啊啊啊啊啊啊啊',1,0,'app端评价',200,0,0),(100,0,160,'','是的撒','多舒服撒',NULL,20170209,'','2017-03-19 21:39:05','0000-00-00 00:00:00','是的撒',1,0,'uuu',200,0,0),(50,0,161,'','fdsfd','dfgsd',NULL,20170209,'/upload/2017/03/19/58ce8cd10939f.jpg','2017-03-19 21:51:26','0000-00-00 00:00:00','dfgsd',-1,0,'',0,0,0),(NULL,0,156,'','dasf','dasfsa',NULL,20170209,'','2017-03-19 19:40:04','0000-00-00 00:00:00','sdfa',0,0,NULL,0,0,0),(70,0,199,'','汽车维修实习报告','1.汽车维修实习报告汽车维修实习报告汽车维修实习报告汽车维修实习报告汽车维修实习报告\r\n2.我的第一份报告汽车维修实习报告汽车维修实习报告汽车维修实习报告汽车维修实习报告',NULL,2017888,'','2017-03-24 15:34:32','0000-00-00 00:00:00','我去',1,0,'很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好很好',0,0,0),(100,0,211,'a','我在路上','我在路上啦！','a',2017103,'/upload/2017/03/29/58db42d26c4d3.png;/upload/2017/03/29/58db42e62d8e9.png;','2017-03-29 13:15:25','0000-00-00 00:00:00','江苏省南京市雨花台区赛虹桥街道江苏警官学院',1,0,'非常好',200,1,0),(NULL,0,157,'','sdsa','sadfsa',NULL,20170209,'','2017-03-19 19:53:44','0000-00-00 00:00:00','sdsa',0,0,NULL,0,0,0),(NULL,0,163,'','web端发送','web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送',NULL,2017888,'','2017-03-20 09:30:54','0000-00-00 00:00:00','啊啊啊',0,0,NULL,0,0,0),(NULL,0,164,'a','天天','天天','a',2017888,'/upload/2017/03/20/58cf31ebcd9a7.png;','2017-03-20 09:35:52','0000-00-00 00:00:00','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院',0,0,NULL,0,0,0),(NULL,0,165,'','dgfds','dfgds',NULL,2018100,'','2017-03-20 09:57:49','0000-00-00 00:00:00','dfdsg',0,0,NULL,0,1,0),(NULL,0,166,'','11','11',NULL,2018100,'','2017-03-20 09:58:01','0000-00-00 00:00:00','11',0,0,NULL,0,1,0),(60,0,167,'','123','123',NULL,2018100,'','2017-03-20 10:00:11','0000-00-00 00:00:00','123',1,0,'',0,1,0),(NULL,0,168,'','ghfg','fghfdgh',NULL,2018100,'','2017-03-20 10:07:32','0000-00-00 00:00:00','fdghfd',0,0,NULL,0,1,0),(NULL,0,169,'','fghfd','fgfdh',NULL,2018100,'','2017-03-20 10:07:42','0000-00-00 00:00:00','fghfd',0,0,NULL,0,1,0),(60,0,170,'','test','test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000test0000',NULL,2017888,'','2017-03-20 10:10:09','0000-00-00 00:00:00','123',1,0,'',0,0,0),(20,0,171,'','test','test',NULL,2017888,'','2017-03-20 10:12:14','0000-00-00 00:00:00','123',-1,0,'123',0,0,0),(NULL,0,172,'','123','123',NULL,2017888,'','2017-03-20 10:14:29','0000-00-00 00:00:00','123',0,0,NULL,0,0,0),(100,0,173,'','11','11',NULL,2017888,'','2017-03-20 11:48:11','0000-00-00 00:00:00','11',1,0,'',0,0,0),(NULL,0,174,'','22','22',NULL,2017888,'','2017-03-20 11:50:23','0000-00-00 00:00:00','22',0,0,NULL,0,0,0),(NULL,0,175,'a','uuu','uuu','a',2017888,'/upload/2017/03/20/58cf53d8d904e.png;','2017-03-20 12:00:29','0000-00-00 00:00:00','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院',0,0,NULL,0,0,0),(60,0,182,'','test','test from web',NULL,2017888,'/upload/2017/03/20/58cf957f2ec80.jpg','2017-03-20 16:40:33','0000-00-00 00:00:00','aa',1,0,'可以可以可以',0,0,0),(90,0,176,'','南京高等','南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等南京高等！',NULL,2017888,'','2017-03-20 14:31:37','0000-00-00 00:00:00','111',1,0,'很好！',0,0,0),(NULL,0,177,'','111','111',NULL,2017888,'','2017-03-20 14:33:58','0000-00-00 00:00:00','111',0,0,NULL,0,0,0),(NULL,0,178,'a','APP','APP','a',2017888,'/upload/2017/03/20/58cf7dd1cdfaf.png;','2017-03-20 14:59:32','0000-00-00 00:00:00','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院',0,0,NULL,0,0,0),(NULL,0,179,'','test 图片','test 图片test 图片test 图片test 图片test 图片',NULL,2017888,'/upload/2017/03/20/58cf82eab70aa.jpg','2017-03-20 15:21:19','0000-00-00 00:00:00','啊啊啊',0,0,NULL,0,0,0),(NULL,0,180,'','test','test',NULL,2017888,'','2017-03-20 16:14:54','0000-00-00 00:00:00','test',0,0,NULL,0,0,0),(90,0,181,'a','123321','123321321321','a',2017888,'/upload/2017/03/20/58cf93d77a77a.png;','2017-03-20 16:33:33','0000-00-00 00:00:00','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院',1,0,'',200,0,0),(NULL,0,183,'','地方','是的撒',NULL,20170209,'','2017-03-20 16:49:09','0000-00-00 00:00:00','萨达',0,0,NULL,0,0,0),(100,0,184,'','test','test',NULL,2017888,'','2017-03-20 20:42:09','0000-00-00 00:00:00','000',1,0,'',0,0,0),(50,0,185,'','123','123',NULL,2018100,'','2017-03-21 09:46:52','0000-00-00 00:00:00','123',-1,0,'',0,1,0),(60,0,186,'','11','11',NULL,2017888,'','2017-03-21 09:51:22','0000-00-00 00:00:00','11',1,0,'那你呢',0,0,0),(100,0,187,'','11','11',NULL,2018100,'','2017-03-21 11:49:04','0000-00-00 00:00:00','11',1,0,'刚刚',200,1,0),(100,0,188,'','111','111',NULL,2018100,'','2017-03-21 12:32:57','0000-00-00 00:00:00','111',1,0,'uuu',200,1,0),(90,0,195,'','web端发送','web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送web端发送！',NULL,2017888,';/upload/2017/03/23/58d34892d3252.jpg;/upload/2017/03/23/58d3489c110e9.jpg','2017-03-23 12:01:45','0000-00-00 00:00:00','q',1,0,'',0,0,0),(100,0,191,'','test','test',NULL,2017888,';/upload/2017/03/22/58d1fc0658c26.png;/upload/2017/03/22/58d1fc07b48eb.png','2017-03-22 12:22:36','0000-00-00 00:00:00','test',1,0,'齐全',0,0,0),(100,0,192,'','测试多张图片','测试多张图片测试多张图片测试多张图片测试多张图片测试多张图片测试多张图片测试多张图片',NULL,2017888,';/upload/2017/03/22/58d21c9b8e152.jpg;/upload/2017/03/22/58d21caa87fb2.jpg','2017-03-22 14:42:08','0000-00-00 00:00:00','啊啊啊',1,0,'美女啊啊',0,0,0),(NULL,0,193,'a','测试','测试','a',2017888,'','2017-03-22 22:42:51','0000-00-00 00:00:00','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城',0,0,NULL,0,0,0),(NULL,0,194,'a','丰富的','吃的啥','a',2017888,'/upload/2017/03/23/58d3081c1a9c4.png;/upload/2017/03/23/58d3082181e1c.png;','2017-03-23 07:26:38','0000-00-00 00:00:00','黑龙江省大庆市龙凤区开发区黎明街道科创街',0,0,NULL,100,0,0),(30,0,196,'','测试周报','测试周报测试周报测试周报测试周报测试周报',NULL,2017888,'','2017-03-23 13:05:51','0000-00-00 00:00:00','11',-1,0,'',0,0,0),(60,0,197,'a','今天晴天','明天周五了。\n后天周末了有什么安排吗\n我要多减肥减肥\n多运动运动\n拜将封侯减肥减肥\nHdjfjdkdh\nHdjfjdkdk减肥减肥看过军恢复聚聚\n河坊街冠军国家和飞机飞机\n毕福剑故居军几分巨款\n河坊街冠军国家10987582758594','a',2018100,'/upload/2017/03/23/58d37855ddd97.png;/upload/2017/03/23/58d3785b1ac75.png;/upload/2017/03/23/58d3787b47b32.png;/upload/2017/03/23/58d3784ff0a4d.png;','2017-03-23 15:26:24','0000-00-00 00:00:00','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦',1,0,'规划局经济',200,1,0),(100,0,198,'','我的第一篇周报','这周到公司第一天，公司环境非常好。主要学习了桌面办公软件的安装和使用，又去实验室做了几个实验，感觉非常好！',NULL,2017888,';/upload/2017/03/23/58d3ef8b51c7f.jpg;/upload/2017/03/23/58d3ef94416c5.jpg','2017-03-23 23:54:10','0000-00-00 00:00:00','南京市雨花台区小行路',1,0,'表现非常好！',200,1,0),(10,0,200,'a','APP侧发送','今天周五，下雨了！为啥下雨，TMD！','a',2017888,'/upload/2017/03/24/58d4d361a8d8f.png;/upload/2017/03/24/58d4d36f380e1.png;','2017-03-24 16:06:13','0000-00-00 00:00:00','江苏省南京市雨花台区赛虹桥街道尤家凹路菊花小区(菊花路)',-1,0,'下雨管你吊事！',200,1,0),(20,0,201,'a','Fghjj','Fghhjj','a',2017103,'/upload/2017/03/24/58d4f24901952.png;','2017-03-24 18:17:52','0000-00-00 00:00:00','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦',-1,0,'太可怜了',200,1,0),(100,0,202,'a','呜呜呜呜','呜呜呜呜呜呜呜呜呜呜看看快快快坎坎坷坷！','a',2017103,'/upload/2017/03/24/58d5386ecac9d.png;/upload/2017/03/24/58d5387f08b1d.png;','2017-03-24 23:17:43','0000-00-00 00:00:00','江苏省南京市浦口区江浦街道雨山西路97号雨山美地',1,0,'很好',200,1,0),(NULL,0,203,'a','我','我就是','a',2017104,'/upload/2017/03/25/58d60877b516e.png;','2017-03-25 14:04:44','0000-00-00 00:00:00','江苏省南京市雨花台区赛虹桥街道尤家凹路菊花小区(菊花路)',0,0,NULL,300,1,1),(100,0,204,'a','周报测试','周报内容测试','a',2017888,'','2017-03-26 22:29:39','0000-00-00 00:00:00','湖北省武汉市洪山区关东街道东湖高新关南社区3期',1,0,'也一样',200,1,0),(70,0,205,'a','测试周报','测试周报','a',2017103,'/upload/2017/03/27/58d87056061c1.png;','2017-03-27 09:52:28','0000-00-00 00:00:00','江苏省南京市建邺区沙洲街道富春江东街71号万科·金域缇香',1,0,'',200,1,0),(20,0,206,'','tets','tets',NULL,2017888,'','2017-03-27 17:45:59','0000-00-00 00:00:00','得到',-1,0,'测',200,1,0),(NULL,0,207,'','（）','（）：“”',NULL,2017888,'','2017-03-27 20:05:04','0000-00-00 00:00:00','前期',0,0,NULL,0,1,0);
/*!40000 ALTER TABLE `dg_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_school`
--

DROP TABLE IF EXISTS `dg_school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_school` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` char(32) NOT NULL default '' COMMENT '名称',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='学校表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_school`
--

LOCK TABLES `dg_school` WRITE;
/*!40000 ALTER TABLE `dg_school` DISABLE KEYS */;
INSERT INTO `dg_school` VALUES (1,'卫生管理系','2017-02-01 19:51:53'),(2,'护理系','2017-02-01 19:52:09');
/*!40000 ALTER TABLE `dg_school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_signin`
--

DROP TABLE IF EXISTS `dg_signin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_signin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `student_id` int(10) NOT NULL default '0' COMMENT '上传人',
  `pubtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `address` varchar(255) NOT NULL default '0' COMMENT '地址',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=296 DEFAULT CHARSET=utf8 COMMENT='签到表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_signin`
--

LOCK TABLES `dg_signin` WRITE;
/*!40000 ALTER TABLE `dg_signin` DISABLE KEYS */;
INSERT INTO `dg_signin` VALUES (1,20170209,'2017-03-01 15:33:20','安徽省'),(4,20170210,'2017-03-02 03:49:05','南京市'),(3,20170209,'2017-03-02 03:36:57','南京市'),(5,20170211,'2017-03-02 03:49:28','南京市'),(6,20170209,'2017-03-03 21:28:17','武汉市'),(7,20170209,'2017-03-04 13:05:16','武汉市'),(8,20170209,'2017-03-05 17:54:36','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(9,20170209,'2017-03-06 08:48:29','湖北省武汉市洪山区关山街道关山大道'),(10,20170209,'2017-03-08 08:06:58','湖北省武汉市洪山区关山街道关山街葛光社区(光谷大道)'),(11,20170209,'2017-03-08 15:15:27','安徽省蚌埠市龙子湖区蚌埠医学院学生公寓2幢蚌埠医学院'),(12,20170209,'2017-03-08 15:15:28','安徽省蚌埠市龙子湖区蚌埠医学院学生公寓2幢蚌埠医学院'),(13,20170209,'2017-03-08 23:01:56','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(14,20170209,'2017-03-08 23:01:58','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(15,20170209,'2017-03-08 23:01:59','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(16,20170209,'2017-03-08 23:01:59','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(17,20170209,'2017-03-08 23:02:00','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(18,20170209,'2017-03-08 23:02:01','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(19,20170209,'2017-03-08 23:02:02','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(20,20170209,'2017-03-08 23:02:04','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(21,20170209,'2017-03-08 23:02:08','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(22,20170209,'2017-03-08 23:02:13','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(23,20170209,'2017-03-08 23:22:18','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(24,20170209,'2017-03-08 23:22:34','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(25,20170209,'2017-03-08 23:22:55','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(26,20170209,'2017-03-08 23:23:01','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(27,20170209,'2017-03-08 23:23:26','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(28,20170209,'2017-03-08 23:44:51','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(29,20170209,'2017-03-08 23:44:58','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(30,20170209,'2017-03-08 23:45:13','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(31,20170209,'2017-03-09 09:03:55','安徽省蚌埠市龙子湖区蚌埠医学院(新校区)理论教学楼蚌埠医学院'),(32,20170209,'2017-03-10 00:04:11','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(33,20170209,'2017-03-10 00:04:19','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(34,20170209,'2017-03-10 00:04:37','江苏省南京市浦口区江浦街道文心路南京审计大学浦口校区'),(35,20170209,'2017-03-10 14:07:09','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(36,20170209,'2017-03-10 14:07:12','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(37,20170209,'2017-03-10 22:15:53','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(38,20170209,'2017-03-10 22:15:57','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(39,20170209,'2017-03-10 22:15:58','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(40,20170209,'2017-03-10 22:15:59','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(41,20170209,'2017-03-10 22:16:00','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(42,20170209,'2017-03-10 22:16:04','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(43,20170209,'2017-03-10 22:16:05','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(44,20170209,'2017-03-10 22:16:08','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(45,20170209,'2017-03-10 22:16:09','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(46,20170209,'2017-03-10 22:16:13','湖北省武汉市洪山区关东街道鑫谨训驾校理想城基地光谷理想城'),(47,20170209,'2017-03-10 22:17:33','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(48,20170209,'2017-03-10 22:17:44','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(49,20170209,'2017-03-10 22:17:49','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(50,20170209,'2017-03-10 22:17:51','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(51,20170209,'2017-03-10 22:17:53','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(52,20170209,'2017-03-10 22:17:53','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(53,20170209,'2017-03-10 22:17:53','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(54,20170209,'2017-03-10 22:17:53','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(55,20170209,'2017-03-10 22:17:53','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(56,20170209,'2017-03-10 22:17:53','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(57,20170209,'2017-03-10 22:17:54','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(58,20170209,'2017-03-10 22:18:16','江苏省南京市浦口区江浦街道雨山西路57号北江锦城'),(59,20170209,'2017-03-11 07:59:50','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(60,20170209,'2017-03-11 08:03:12','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(61,20170209,'2017-03-12 17:08:29','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(62,20170209,'2017-03-12 17:09:30','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(63,20170209,'2017-03-12 17:14:09','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(64,20170209,'2017-03-12 17:14:11','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(65,20170209,'2017-03-12 17:14:11','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(66,20170209,'2017-03-12 17:14:11','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(67,20170209,'2017-03-12 17:14:12','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(68,20170209,'2017-03-12 17:14:12','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(69,20170209,'2017-03-12 17:14:22','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(70,20170209,'2017-03-12 17:14:43','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(71,20170209,'2017-03-12 17:16:43','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(72,20170209,'2017-03-12 17:17:07','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(73,20170209,'2017-03-12 17:19:48','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(74,20170209,'2017-03-12 17:19:53','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(75,20170209,'2017-03-12 17:22:24','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(76,20170209,'2017-03-12 17:45:59','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(77,20170209,'2017-03-12 18:01:09','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(78,20170209,'2017-03-12 18:01:10','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(79,20170209,'2017-03-12 18:01:11','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(80,20170209,'2017-03-12 18:01:11','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(81,20170209,'2017-03-12 18:01:12','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(82,20170209,'2017-03-12 18:01:13','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(83,20170209,'2017-03-12 18:01:14','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(84,20170209,'2017-03-12 18:01:14','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(85,20170209,'2017-03-12 18:01:15','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(86,20170209,'2017-03-12 18:01:19','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(87,20170209,'2017-03-12 18:01:20','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(88,20170209,'2017-03-12 18:01:21','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(89,20170209,'2017-03-12 18:01:21','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(90,20170209,'2017-03-12 18:01:22','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(91,20170209,'2017-03-12 18:01:22','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(92,20170209,'2017-03-12 18:01:23','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(93,20170209,'2017-03-12 18:01:23','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(94,20170209,'2017-03-12 18:01:26','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(95,20170209,'2017-03-12 18:01:33','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(96,20170209,'2017-03-12 18:01:46','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(97,20170209,'2017-03-12 18:01:47','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(98,20170209,'2017-03-12 20:13:58','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(99,20170209,'2017-03-12 20:57:01','江苏省南京市浦口区江浦街道南京鼎业开元大酒店'),(100,20170209,'2017-03-12 20:57:02','江苏省南京市浦口区江浦街道南京鼎业开元大酒店'),(101,20170209,'2017-03-12 21:02:07','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(102,20170209,'2017-03-12 21:02:18','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(103,20170209,'2017-03-12 22:06:44','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(104,20170209,'2017-03-12 23:02:20','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(105,20170209,'2017-03-13 10:12:46','江苏省南京市秦淮区晨光巷晨光巷小区'),(106,20170209,'2017-03-13 10:22:29','江苏省南京市秦淮区晨光巷晨光巷小区'),(107,20170209,'2017-03-13 20:19:38','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(108,20170209,'2017-03-13 20:19:48','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(109,20170209,'2017-03-13 21:43:12','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(110,20170209,'2017-03-13 21:44:27','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(111,20170209,'2017-03-13 23:14:22','江苏省南京市浦口区江浦街道南京鼎业开元大酒店'),(112,20170209,'2017-03-14 08:43:19','江苏省南京市浦口区江浦街道临江(地铁站)'),(113,20170209,'2017-03-14 20:59:52','江苏省南京市建邺区江心洲街道江心洲(地铁站)'),(114,20170209,'2017-03-14 20:59:53','江苏省南京市建邺区江心洲街道江心洲(地铁站)'),(115,20170209,'2017-03-14 21:27:36','江苏省南京市浦口区江浦街道南京工业大学-基本建设处南京工业大学江浦校区'),(116,20170209,'2017-03-14 21:56:54','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(117,20170209,'2017-03-14 22:26:51','江苏省南京市浦口区江浦街道南京工业大学-基本建设处南京工业大学江浦校区'),(118,2017100,'2017-03-16 09:39:22','江苏省南京市雨花台区赛虹桥街道软件大道'),(119,2017100,'2017-03-16 09:39:33','江苏省南京市雨花台区赛虹桥街道软件大道'),(120,2017100,'2017-03-16 09:39:33','江苏省南京市雨花台区赛虹桥街道软件大道'),(121,2017100,'2017-03-16 09:39:55','江苏省南京市雨花台区赛虹桥街道菊花台公园'),(122,2017100,'2017-03-16 09:40:20','江苏省南京市雨花台区赛虹桥街道菊花台公园'),(123,2017105,'2017-03-16 11:07:49','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(124,2017105,'2017-03-16 11:13:20','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(125,2017105,'2017-03-16 11:43:29','上海市浦东新区潍坊新村街道张家浜山泉玉苑北区'),(126,2017105,'2017-03-16 11:43:40','上海市浦东新区潍坊新村街道张家浜山泉玉苑北区'),(127,2017100,'2017-03-16 12:23:01','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(128,2017100,'2017-03-16 12:23:10','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(129,2017100,'2017-03-16 23:16:33','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(130,2017100,'2017-03-17 08:26:19','安徽省蚌埠市龙子湖区东海大道蚌埠医学院'),(131,2017104,'2017-03-17 21:48:23','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(132,2017104,'2017-03-17 21:51:16','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(133,2017102,'2017-03-17 21:53:46','江苏省南京市浦口区江浦街道光明路北江锦城'),(134,2017103,'2017-03-17 21:55:07','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(135,2018100,'2017-03-17 21:55:38','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(136,2019001,'2017-03-17 21:56:49','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(137,2018181,'2017-03-17 21:57:23','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(138,2017888,'2017-03-17 22:31:36','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(139,2017888,'2017-03-17 22:32:09','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(140,2017888,'2017-03-18 08:21:57','江苏省南京市浦口区江浦街道光明路北江锦城'),(141,2017888,'2017-03-18 22:47:17','江苏省扬州市高邮市送桥镇扬州市普林斯化工有限公司'),(142,2017888,'2017-03-18 22:47:23','江苏省扬州市高邮市送桥镇扬州市普林斯化工有限公司'),(143,2017888,'2017-03-18 22:47:25','江苏省扬州市高邮市送桥镇扬州市普林斯化工有限公司'),(144,2017888,'2017-03-18 23:16:02','江苏省扬州市高邮市送桥镇扬州市普林斯化工有限公司'),(145,2017888,'2017-03-19 07:51:51','江苏省扬州市高邮市送桥镇扬州市普林斯化工有限公司'),(146,2017888,'2017-03-19 22:58:55','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(147,2017888,'2017-03-20 15:15:23','江苏省南京市雨花台区赛虹桥街道江苏苏通轨道交通学校江苏警官学院'),(148,2017888,'2017-03-20 15:16:08','江苏省南京市雨花台区赛虹桥街道江苏苏通轨道交通学校江苏警官学院'),(149,2017888,'2017-03-20 15:16:15','江苏省南京市雨花台区赛虹桥街道江苏苏通轨道交通学校江苏警官学院'),(150,2017888,'2017-03-21 08:40:09','江苏省南京市建邺区兴隆街道扬子江大道南京中国绿化博览园'),(151,2017103,'2017-03-22 10:02:42','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(152,2017888,'2017-03-22 18:54:53','江苏省南京市雨花台区赛虹桥街道农香居粗菜馆(小行路)德安花园'),(153,2017888,'2017-03-22 19:50:34','江苏省南京市雨花台区赛虹桥街道农香居粗菜馆(小行路)德安花园'),(154,2017888,'2017-03-23 07:33:24','黑龙江省大庆市龙凤区开发区黎明街道科创街'),(155,2017888,'2017-03-23 07:33:25','黑龙江省大庆市龙凤区开发区黎明街道科创街'),(156,2017888,'2017-03-23 10:27:53','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(157,2018100,'2017-03-23 15:37:47','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(158,2017888,'2017-03-23 22:47:11','江苏省宿迁市沭阳县沭城街道东莞路'),(159,2017888,'2017-03-24 13:52:12','江苏省南京市雨花台区赛虹桥街道尤家凹路菊花小区(菊花路)'),(160,2017103,'2017-03-24 23:18:32','江苏省南京市浦口区江浦街道雨山西路97号雨山美地'),(161,2017104,'2017-03-25 14:10:49','江苏省南京市雨花台区赛虹桥街道尤家凹路菊花小区(菊花路)'),(162,2017104,'2017-03-25 14:11:26','江苏省南京市雨花台区赛虹桥街道尤家凹路菊花小区(菊花路)'),(163,2017104,'2017-03-25 14:11:57','江苏省南京市雨花台区赛虹桥街道尤家凹路菊花小区(菊花路)'),(164,2017104,'2017-03-25 14:26:54','江苏省南京市雨花台区赛虹桥街道尤家凹路菊花小区(菊花路)'),(165,2017888,'2017-03-26 23:42:11','湖北省武汉市洪山区关东街道东湖高新关南社区3期'),(166,2017888,'2017-03-26 23:42:18','湖北省武汉市洪山区关东街道东湖高新关南社区3期'),(167,2017888,'2017-03-26 23:42:22','湖北省武汉市洪山区关东街道东湖高新关南社区3期'),(168,2017888,'2017-03-26 23:42:26','湖北省武汉市洪山区关东街道东湖高新关南社区3期'),(169,2017888,'2017-03-26 23:42:33','湖北省武汉市洪山区关东街道东湖高新关南社区3期'),(170,2017103,'2017-03-27 09:52:58','江苏省南京市建邺区沙洲街道富春江东街71号万科·金域缇香'),(171,2017103,'2017-03-27 09:53:00','江苏省南京市建邺区沙洲街道富春江东街71号万科·金域缇香'),(172,2017103,'2017-03-27 09:53:29','江苏省南京市建邺区沙洲街道富春江东街71号万科·金域缇香'),(173,2017103,'2017-03-27 14:14:00','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(174,2017103,'2017-03-27 14:14:12','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(175,2017103,'2017-03-27 14:14:13','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(176,2017103,'2017-03-27 14:14:13','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(177,2017103,'2017-03-27 14:14:13','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(178,2017103,'2017-03-27 14:14:14','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(179,2017103,'2017-03-27 14:19:21','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(180,2017103,'2017-03-27 14:19:23','江苏省南京市秦淮区中华门街道养虎巷南京晨光1865创意产业园'),(181,2017109,'2017-03-27 15:49:35','江苏省南京市鼓楼区华侨路街道国家民防南京培训基地南京民防大厦'),(182,2017109,'2017-03-28 09:48:18','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(183,2017109,'2017-03-28 09:48:29','江苏省南京市雨花台区赛虹桥街道小行路14号江苏警官学院'),(184,2017888,'2017-03-28 15:17:12','湖北省武汉市洪山区关山街道华中科技大学虹景花园A区'),(185,2017888,'2017-03-28 15:17:25','湖北省武汉市洪山区关山街道华中科技大学虹景花园A区'),(186,2017888,'2017-03-28 15:18:19','上海市浦东新区金桥经济技术开发区金港路诺基亚通信园'),(187,2017888,'2017-03-28 15:18:22','上海市浦东新区金桥经济技术开发区金港路诺基亚通信园'),(188,2017109,'2017-03-28 16:22:48','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(189,2017109,'2017-03-28 16:22:53','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(190,2017109,'2017-03-28 16:22:55','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(191,2017109,'2017-03-28 16:22:56','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(192,2017109,'2017-03-28 16:22:58','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(193,2017109,'2017-03-28 16:22:59','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(194,2017109,'2017-03-28 16:23:01','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(195,2017103,'2017-03-29 10:47:56','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(196,2017103,'2017-03-29 10:49:04','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(197,2017888,'2017-03-29 10:53:45','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(198,2017888,'2017-03-29 10:53:48','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(199,2017103,'2017-03-29 11:13:05','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(200,2017103,'2017-03-29 11:13:11','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(201,2017103,'2017-03-29 11:13:15','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(202,2017103,'2017-03-29 11:13:16','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(203,2017103,'2017-03-29 11:13:17','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(204,2017103,'2017-03-29 11:13:17','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(205,2017103,'2017-03-29 11:13:18','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(206,2017103,'2017-03-29 11:13:18','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(207,2017103,'2017-03-29 11:13:18','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(208,2017103,'2017-03-29 11:13:18','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(209,2017103,'2017-03-29 11:13:19','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(210,2017103,'2017-03-29 11:13:19','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(211,2017103,'2017-03-29 11:13:19','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(212,2017103,'2017-03-29 11:13:20','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(213,2017103,'2017-03-29 11:13:50','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(214,2017103,'2017-03-29 11:13:51','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(215,2017103,'2017-03-29 11:13:53','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(216,2017109,'2017-03-29 11:14:26','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(217,2017109,'2017-03-29 11:14:27','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(218,2017109,'2017-03-29 11:14:28','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(219,2017300,'2017-03-29 11:15:06','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(220,2017103,'2017-03-29 12:07:20','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(221,2017103,'2017-03-29 12:08:06','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(222,2017103,'2017-03-29 12:09:42','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(223,2017300,'2017-03-29 12:14:34','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(224,2017109,'2017-03-29 12:25:36','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(225,2017109,'2017-03-29 12:25:38','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(226,2017109,'2017-03-29 12:25:38','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(227,2017109,'2017-03-29 12:25:44','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(228,2017103,'2017-03-29 12:55:33','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(229,2017103,'2017-03-29 13:13:48','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(230,2017103,'2017-03-29 13:13:49','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(231,2017300,'2017-03-29 14:12:24','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(232,2017109,'2017-03-29 15:23:28','江苏省南京市雨花台区赛虹桥街道江苏苏通轨道交通学校江苏警官学院'),(233,2017109,'2017-03-29 15:23:34','江苏省南京市雨花台区赛虹桥街道江苏苏通轨道交通学校江苏警官学院'),(234,2017109,'2017-03-29 15:23:34','江苏省南京市雨花台区赛虹桥街道江苏苏通轨道交通学校江苏警官学院'),(235,2017109,'2017-03-29 15:24:34','江苏省南京市雨花台区赛虹桥街道小行路16-3号楼江苏警官学院'),(236,2017109,'2017-03-29 17:14:11','江苏省南京市雨花台区赛虹桥街道小行路16-3号楼江苏警官学院'),(237,2017109,'2017-03-29 17:14:21','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(238,2017888,'2017-03-29 18:49:50','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(239,2017888,'2017-03-29 18:49:52','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(240,2017888,'2017-03-29 18:49:52','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(241,2017888,'2017-03-29 18:49:54','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(242,2017888,'2017-03-29 18:49:54','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(243,2017888,'2017-03-29 18:49:54','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(244,2017888,'2017-03-29 18:49:54','江苏省南京市鼓楼区华侨路街道汉口西路79号南京民防大厦'),(245,2017300,'2017-03-29 23:11:19','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(246,2017300,'2017-03-29 23:11:44','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(247,2017300,'2017-03-29 23:11:46','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(248,2017300,'2017-03-29 23:11:59','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(249,2017300,'2017-03-29 23:12:01','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(250,2017300,'2017-03-29 23:25:54','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(251,2017300,'2017-03-29 23:25:59','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(252,2017300,'2017-03-29 23:28:06','江苏省南京市雨花台区赛虹桥街道江苏警官学院'),(253,2017300,'2017-03-29 23:29:55','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(254,2017300,'2017-03-29 23:29:58','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(255,2017300,'2017-03-29 23:30:06','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(256,2017888,'2017-03-29 23:36:30','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(257,2017888,'2017-03-29 23:37:11','湖北省武汉市洪山区关东街道关山街汽标社区哈乐城'),(258,2017888,'2017-03-30 08:57:55','湖北省武汉市洪山区关山街道雄楚大道1072附13关山街湖电社区'),(259,2017888,'2017-03-30 09:22:46','湖北省武汉市洪山区关山街道华中科技大学'),(260,2017300,'2017-03-30 09:24:27','江苏省南京市建邺区兴隆街道扬子江大道南京中国绿化博览园'),(261,2017300,'2017-03-30 09:25:00','江苏省南京市建邺区兴隆街道扬子江大道南京中国绿化博览园'),(262,2017888,'2017-03-30 09:25:49','湖北省武汉市洪山区关山街道华中科技大学虹景花园A区'),(263,2017300,'2017-03-30 09:26:04','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(264,2017300,'2017-03-30 09:26:14','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(265,2017300,'2017-03-30 09:26:37','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(266,2017300,'2017-03-30 09:26:54','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(267,2017300,'2017-03-30 09:27:05','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(268,2017300,'2017-03-30 09:27:11','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(269,2017300,'2017-03-30 09:27:36','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(270,2017300,'2017-03-30 09:27:49','江苏省南京市建邺区兴隆街道松花江西街61号听雨苑'),(271,2017300,'2017-03-30 09:28:17','江苏省南京市建邺区兴隆街道乐山路滨江奥城'),(272,2017109,'2017-03-30 09:28:47','江苏省南京市建邺区兴隆街道乐山路滨江奥城'),(273,2017109,'2017-03-30 09:28:59','江苏省南京市建邺区兴隆街道乐山路滨江奥城'),(274,2017109,'2017-03-30 09:29:05','江苏省南京市建邺区兴隆街道乐山路滨江奥城'),(275,2017109,'2017-03-30 09:29:29','江苏省南京市建邺区兴隆街道乐山路南京奥林匹克体育中心'),(276,2017109,'2017-03-30 09:29:37','江苏省南京市建邺区兴隆街道乐山路南京奥林匹克体育中心'),(277,2017888,'2017-03-30 09:30:12','江苏省南京市建邺区兴隆街道乐山路180号'),(278,2017300,'2017-03-30 09:31:46','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(279,2017300,'2017-03-30 09:31:56','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(280,2017300,'2017-03-30 09:32:27','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(281,2017300,'2017-03-30 09:33:05','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(282,2017300,'2017-03-30 09:33:07','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(283,2017300,'2017-03-30 09:33:08','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(284,2017300,'2017-03-30 09:33:09','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(285,2017300,'2017-03-30 09:33:10','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(286,2017300,'2017-03-30 09:33:10','江苏省南京市建邺区建邺区河西中央商务区江东中路'),(287,2017300,'2017-03-30 09:36:26','江苏省南京市建邺区建邺区新城科技园凤台南路'),(288,2017300,'2017-03-30 23:05:07','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(289,2017300,'2017-03-30 23:05:08','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(290,2017300,'2017-03-30 23:25:21','江苏省南京市浦口区江浦街道雨山西路14号北江锦城'),(291,2017300,'2017-03-31 07:43:58','上海市闵行区浦锦街道江桐南路浦江颐城-尚院'),(292,2017300,'2017-03-31 07:44:00','上海市闵行区浦锦街道江桐南路浦江颐城-尚院'),(293,2017300,'2017-03-31 07:44:01','上海市闵行区浦锦街道江桐南路浦江颐城-尚院'),(294,2017300,'2017-03-31 07:44:02','上海市闵行区浦锦街道江桐南路浦江颐城-尚院'),(295,2017300,'2017-03-31 07:44:03','上海市闵行区浦锦街道江桐南路浦江颐城-尚院');
/*!40000 ALTER TABLE `dg_signin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_student`
--

DROP TABLE IF EXISTS `dg_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_student` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `studentno` char(32) NOT NULL default '' COMMENT '教师工号',
  `password` char(32) NOT NULL default '' COMMENT '密码',
  `name` varchar(30) NOT NULL default '' COMMENT '姓名',
  `phone` varchar(60) NOT NULL default '' COMMENT '手机',
  `classno` int(10) unsigned NOT NULL COMMENT '班级id',
  `course` varchar(30) NOT NULL default '' COMMENT '实习课程',
  `corporation_id` int(10) unsigned NOT NULL,
  `email` varchar(30) NOT NULL default '' COMMENT '邮箱',
  `sex` tinyint(1) NOT NULL default '0' COMMENT '性别0为男1为女',
  `address` varchar(255) NOT NULL default '',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `emegencyconcat` varchar(11) NOT NULL COMMENT '//紧急联系人',
  `emegencyphone` int(11) NOT NULL COMMENT '//紧急联系人电话',
  `department_id` int(11) default NULL COMMENT '//系部id',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_student`
--

LOCK TABLES `dg_student` WRITE;
/*!40000 ALTER TABLE `dg_student` DISABLE KEYS */;
INSERT INTO `dg_student` VALUES (1,'20170209','202cb962ac59075b964b07152d234b70','yfy','13053112897',1,'a',23,'1281074511@qq.com',1,'安徽省蚌埠市蚌埠医学院','2017-03-01 16:53:29','周波',123,1),(71,'2017103','202cb962ac59075b964b07152d234b70','孟非','18800009996',1,'',23,'103@qq.com',0,'雨花台区晓航路雨花台','2017-03-09 22:21:14','习近平',2147483647,1),(72,'2017104','202cb962ac59075b964b07152d234b70','张柏龙','18800009991',2,'',3,'105@qq.com',0,'雨花台区晓航路雨花台','2017-03-09 22:21:14','习近平',2147483647,2),(79,'2017888','c8837b23ff8aaa8a2dde915473ce0991','好学生','13678890099',1,'',23,'y@sohu.com',1,'河南洛阳南京路122号','2017-03-16 10:10:32','马龙',2147483647,1),(74,'2018100','202cb962ac59075b964b07152d234b70','刘德华','18890008765',1,'',23,'1@qq',1,'中国香港尖沙咀','2017-03-12 08:00:24','习近平',2147483647,1),(87,'2017109','202cb962ac59075b964b07152d234b70','阿宽','13661623965',2,'',0,'',1,'南京浦口区江浦大道','2017-03-26 21:50:54','习近平',2147483647,NULL),(77,'2018181','202cb962ac59075b964b07152d234b70','齐秦','18900098998',1,'',23,'2@qq.com',1,'澳门南京路127号湖南路呼兰路啦啦啦啦啦澳门南京路127号湖南路呼兰路啦啦啦啦啦','2017-03-12 18:10:32','习近平',2147483647,1),(94,'2017300','caf1a3dfb505ffed0d024130f58c5cfa','test','18116272106',1,'',23,'',1,'南京雨花区','2017-03-28 17:32:29','习近平',2147483647,NULL);
/*!40000 ALTER TABLE `dg_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_teacher`
--

DROP TABLE IF EXISTS `dg_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_teacher` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `teacherno` char(32) NOT NULL default '' COMMENT '教师工号',
  `password` char(32) NOT NULL default '' COMMENT '密码',
  `name` char(32) NOT NULL default '' COMMENT '名称',
  `profession` int(10) NOT NULL default '0' COMMENT '院系专业ID',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `identity` varchar(10) default NULL,
  `class_id` int(11) default '0' COMMENT '//班级id',
  `department_id` int(11) NOT NULL COMMENT '//所属部门id',
  `type` tinyint(4) NOT NULL default '0' COMMENT '//0班主任|1系主任|2校领导',
  `phone` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='专业表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_teacher`
--

LOCK TABLES `dg_teacher` WRITE;
/*!40000 ALTER TABLE `dg_teacher` DISABLE KEYS */;
INSERT INTO `dg_teacher` VALUES (1,'100','202cb962ac59075b964b07152d234b70','叶方勇',1,'2017-02-15 08:19:22','系主任',0,1,1,'123'),(2,'200','698d51a19d8a121ce581499d7b701668','梦梦',2,'2017-02-17 05:28:41','班主任',1,1,0,'456'),(3,'300','202cb962ac59075b964b07152d234b70','左世明',2,'2017-03-01 17:23:36','校领导',0,1,2,'789'),(23,'999','202cb962ac59075b964b07152d234b70','fdsa',0,'2017-03-31 12:06:37','班主任',2,1,0,'12333333333'),(18,'400','202cb962ac59075b964b07152d234b70','开发测试',0,'2017-03-27 22:27:44','班主任',1,1,0,'13127880395'),(28,'900','202cb962ac59075b964b07152d234b70','阿宽',0,'2017-03-31 16:12:16','班主任',13,11,0,'15951989598');
/*!40000 ALTER TABLE `dg_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_user`
--

DROP TABLE IF EXISTS `dg_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_user` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `password` char(32) NOT NULL default '' COMMENT '密码',
  `username` varchar(30) NOT NULL default '' COMMENT '昵称',
  `phone` varchar(60) NOT NULL default '' COMMENT '手机',
  `type` tinyint(1) NOT NULL default '0' COMMENT '类型0学生1教师2企业3管理员',
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `no` int(10) NOT NULL COMMENT '//学生的学号或者教师的工号',
  PRIMARY KEY  (`id`,`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='管理员用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_user`
--

LOCK TABLES `dg_user` WRITE;
/*!40000 ALTER TABLE `dg_user` DISABLE KEYS */;
INSERT INTO `dg_user` VALUES (1,'202cb962ac59075b964b07152d234b70','yfy','13053112897',0,'2017-02-05 22:10:48',20170209),(2,'202cb962ac59075b964b07152d234b70','胡家园','13053112898',0,'2017-02-10 10:39:48',20170210),(3,'202cb962ac59075b964b07152d234b70','叶方勇','13053112899',1,'2017-02-01 11:34:10',100),(4,'202cb962ac59075b964b07152d234b70','梦梦','13053112890',1,'2017-02-08 14:32:44',200),(5,'202cb962ac59075b964b07152d234b70','开发测试','13127880395',1,'2017-02-08 14:32:44',300);
/*!40000 ALTER TABLE `dg_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_verify_code`
--

DROP TABLE IF EXISTS `dg_verify_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg_verify_code` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `phone` varchar(255) collate utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `status` int(11) NOT NULL default '1' COMMENT '1正常，2删除',
  `created_at` timestamp NULL default NULL,
  `updated_at` timestamp NULL default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_verify_code`
--

LOCK TABLES `dg_verify_code` WRITE;
/*!40000 ALTER TABLE `dg_verify_code` DISABLE KEYS */;
INSERT INTO `dg_verify_code` VALUES (5,'13127880395',57652,1,'2017-03-29 14:55:44','2017-03-29 14:55:44'),(18,'13127880395',66007,1,'2017-03-29 15:49:31','2017-03-29 15:49:31'),(94,'18116272106',14821,1,'2017-03-30 02:34:35','2017-03-30 02:34:35');
/*!40000 ALTER TABLE `dg_verify_code` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-31 22:49:40
