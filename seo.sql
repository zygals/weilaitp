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
-- Table structure for table `seo_set`
--

DROP TABLE IF EXISTS `seo_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seo_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_id` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1首页 2业务体系 3品牌案例 4资讯中心 5关于我们 6渠道与招商',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT 'seo标题',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo关键词',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo描述',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='seo set';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo_set`
--

LOCK TABLES `seo_set` WRITE;
/*!40000 ALTER TABLE `seo_set` DISABLE KEYS */;
INSERT INTO `seo_set` VALUES (1,1,'未来和讯-国内领先的企业营销服务平台','未来和讯,网管家,软文发布,企业品牌宣传,新闻发布,新闻营销,企业宣传片,微视频,视频推广,活动策划,营销活动,营销策划,市场营销活动,网站优化,网站推广,新媒体运营,APP运营,网站运营,网站品牌塑造','北京未来和讯信息科技有限公司专注于网络营销推广服务，业务涉及网站建设、APP开发、微信开发、网站托管、视频访谈、网络整合营销、新闻稿软文推广等。公司致力于为企业打造一体化网络营销服务。',1505699820,1505701072),(2,2,'yewutixi333','kdf0809285ladfj,adfjioadf,892o354','jklajdfia',1505699869,1505701700),(4,3,'anli-title','anli-key,alnikey2','anli-key,alnikey2asd',1505704286,1505704286),(5,4,'zixunbaiti','zixunkey,zikey2,key3,,,','',1505704463,1505704463),(6,5,'weiaizaina','huiliongguan,azuo','i et yu lb ',1505704619,1505704619);
/*!40000 ALTER TABLE `seo_set` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-18 11:40:15
