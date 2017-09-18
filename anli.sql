-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: weilai
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `anli`
--

DROP TABLE IF EXISTS `anli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_anli_id` int(11) NOT NULL DEFAULT '1' COMMENT '分类id',
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '' COMMENT '列表图',
  `func_ids` varchar(100) DEFAULT '',
  `cont` text,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '1000',
  `st` tinyint(4) DEFAULT '1',
  `index_show` tinyint(4) DEFAULT '0' COMMENT '是否显示在轮番图',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_anli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='anli';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anli`
--

LOCK TABLES `anli` WRITE;
/*!40000 ALTER TABLE `anli` DISABLE KEYS */;
INSERT INTO `anli` VALUES (1,3,'sdfsfs','/upload/anli/20170914/e3dde9cdc781a26454ded453088fddf8.png','4,3','adsfadf243',NULL,NULL,1,1,0,1505377741,1505456271),(2,2,'bashifu','/upload/anli/20170914/4ee79dfb33487713b7fb9d2f03017788.jpg','4,1','<p>\r\n	adfsaf32254a4df56a32d1f3asd\r\n</p>\r\n<p>\r\n	2135asdf\r\n</p>',NULL,NULL,0,1,1,1505378157,1505444626),(3,4,'lvyou','/upload/anli/20170914/f2e637b862d767b96f1690508e917b27.jpg','2,1','这种方式仅需在项目配置文件中添加相关的布局模板配置，就可以简单实现模板布局功能，比较适用于全站使用相同布局的情况，需要配置开启layout_on 参数（默认不开启），并且设置',NULL,NULL,0,1,1,1505380655,1505456294),(4,4,'huahui','/upload/anli/20170914/ed083a48dba10338e1294de214e0cce1.jpg','2,1','<p>\r\n	<span style=\"color:#008000;background-color:#f7faff;font-weight:bold;\">AnliValidate</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#008000;background-color:#f7faff;font-weight:bold;\">\r\n	<p>\r\n		nkPHP的模板引擎内置了布局模板功能支持，可以方便的实现模板布局以及布局嵌套功能。\r\n	</p>\r\n	<p>\r\n		有三种布局模板的支持方式：\r\n	</p>\r\n<br />\r\n</span>\r\n</p>',NULL,NULL,800,0,0,1505380845,1505381083),(5,1,'adsf34','/upload/anli/20170915/549c4db5cf62bfb78b263349c11e9786.jpg','4,3,2','adsfafsdaw43w4',NULL,NULL,1000,1,1,1505442658,1505456257),(6,3,'banghisfu','/upload/anli/20170918/4887520f66613f2b2d361d9070ac7224.jpg','1','<p>\r\n	adsf789564564a56sd4f\r\n</p>\r\n<p>\r\n	ad1f54723432\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','shuiguo,dangao','adsg234',1000,1,0,1505700773,1505700773);
/*!40000 ALTER TABLE `anli` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-18 11:41:23
