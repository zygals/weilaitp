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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` int(11) NOT NULL DEFAULT '1' COMMENT '分类id 1媒体报道 2行业资讯 3企业动态',
  `name` varchar(100) NOT NULL,
  `click` int(11) DEFAULT '0' COMMENT '点击量',
  `img` varchar(255) NOT NULL DEFAULT '' COMMENT '列表图',
  `cont` text,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '1000' COMMENT '排序',
  `st` tinyint(4) DEFAULT '1',
  `index_show` tinyint(4) DEFAULT '0' COMMENT '是否显示在轮番图',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cate` (`cate`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='资讯表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,1,'微信小程序势不可挡',0,'/upload/article/20170914/e632ca2835c75b911fb791935718858e.jpg','<div>\r\n	<strong>微信小程序功能持续完善！</strong><br />\r\n \r\n</div>\r\n<div>\r\n	据统计，小程序一共公布公布了25项新能力，其中不乏“附近的小程序”、“自定义关键词”等重量级功能，如此频繁的更新速度，可见微信团队押注小程序的决心。近期又增加3项功能。<br />\r\n \r\n</div>\r\n<div>\r\n	1、小程序打开小程序<br />\r\n \r\n</div>\r\n<div>\r\n	同一个公众号下关联的10个同主体小程序和3个非同主体小程序之间，可以调用接口直接相互跳转。微信客户端6.5.9及以上版本支持。<br />\r\n \r\n</div>\r\n<div>\r\n	2、门店小程序的门店页支持添加视频<br />\r\n \r\n</div>\r\n<div>\r\n	为了方便宣传门店形象，门店小程序的门店页支持可添加视频。添加视频方式有两种：<br />\r\n \r\n</div>\r\n<div>\r\n	上传视频至公众号素材库添加。<br />\r\n \r\n</div>\r\n<div>\r\n	输入视频链接或含视频的图文消息链接添加。<br />\r\n \r\n</div>\r\n<div>\r\n	3、门店小程序支持接口管理<br />\r\n \r\n</div>\r\n<div>\r\n	门店小程序支持接口管理，提供创建商家，新增、查询、修改和删除门店等接口，同时支持第三方平台授权调用，方便批量管理门店。<br />\r\n \r\n</div>\r\n<div>\r\n	<strong>央视财经连续播报！涵盖各行各业</strong><br />\r\n<br />\r\n	<div>\r\n		作为独霸一方的国民级应用，微信的一举一动都牵动万千人心，小程序作为其开放生态战略的体现，重要性不言而喻。根据央视财经报道：在微信小程序正式上线的第一天里，开发者们发布的“小程序”至少有上百个，覆盖教育、媒体、工具、交通、房地产、生活服务、科技、旅游、电商、政务民生、餐饮等多方面。另外央视报道还指出“小程序的出现使得开发门槛大幅降低，小程序推广现商机。”<br />\r\n \r\n	</div>\r\n	<div>\r\n		<strong>轻应用联盟，帮商家抢占第一波红利</strong><br />\r\n \r\n	</div>\r\n	<div>\r\n		轻应用联盟这是由北京未来和讯信息科技有限公司（www.weilaihexun.com）早在2017年2月研发推出的新产品，它以轻量无痕、多元化场景、无需安装、即开即用、方便快捷的“轻应用”属性，迅速打开知名度。轻应用联盟主要服务于具有共同营销目标的单一企业或线下商家，通过小程序、公众号、微应用等轻应用产品结成联盟，再利用轻应用商店（www.qingyy.net）的市场媒介进行推广，形成闭环的轻应用互联网生态圈。<br />\r\n \r\n	</div>\r\n	<div>\r\n		综上所述，微信小程序发展势不可挡，各个平台纷纷都在抢入口，再不行动，就要错过又一次投资牛市，加入轻应用联盟，抢占第一波红利。\r\n	</div>\r\n</div>',NULL,NULL,0,1,1,1505365732,1505367644),(2,1,'轻应用联盟：让小程序不再“孤独”',0,'/upload/article/20170914/793af7cbf446b00374fee98626d097a1.png','<p>\r\n	　2017年1月9日微信小程序正式上线。小程序是一种不需要下载安装即可使用的应用，它实现了应用“触手可及”的梦想，用户扫一扫或者搜一下即可打开应用。用完即走、无需安装卸载、方便快捷的“轻盈”特性让小程序一经上市便吸引了大批用户。小程序的应用无疑开辟了微信研发领域的新高度，同时构建了一个更加完善、良性、有效的互联网生态圈。\r\n</p>\r\n<p>\r\n	　　近日，根据可靠消息，背靠阿里巴巴集团、同样拥有至多线下场景的支付宝也加入了小程序平台的开发阵地，支付宝此举并不令人意外。从微信小程序开放内测到正式发布，短短几个月的时间，已有数千个小程序投入使用。更关键的是，微信利用“扫一扫”的调用方式将小程序的潜力放在线下，腾讯“连接线上线下”的野心已昭然若揭，抢占小程序入口已经迫在眉睫，而小程序应用场景也必将成为传统企业及线下商家的必争之地，移动互联网即将迎来一种新的服务形态。\r\n</p>\r\n<p>\r\n	　　未来小程序将无处不在，无时不用。但因小程序用完即走的特性及微信缺少小程序展示入口的原因，使得初创品牌或线下商家被用户搜索并引导其扫描前往是一大难题，可以预见，用户因抢占流量而付出的成本将大大提高。那么，基于微信庞大的用户群体，用户如何充分利用微信更好地进行推广?又如何将微信的各个功能整合，从而使小程序应用场景实现最佳的推广效果呢?\r\n</p>\r\n<p>\r\n	　　近日，北京未来和讯信息科技有限公司（www.weilaihexun.com）为帮助企业建立轻应用生态成功推出——轻应用联盟。据了解，轻应用联盟主要服务于具有共同营销目标的单一企业或线下商家，通过小程序、公众号、微应用等轻应用云产品结成联盟，再利用轻应用商店的市场媒介进行推广，形成闭环的轻应用互联网生态圈。从而实现企业更大范围、更大程度的推广效果，打造小程序在内的互联网轻应用生态环境。\r\n</p>\r\n<p>\r\n	　　与其他推广平台不同，轻应用联盟在服务企业的基础上，更具有受众定位精准、推广手段多种、传播范围广泛的特点。众所周知，微信可以说是时下使用频度、用户黏性较高的社交媒体。轻应用联盟正式基于这一点进行推广，充分利用微信使用人群，用户目标辐射全国，主要定位于18-60岁、具有消费能力、观看口味高端、对新生事物敏感的智慧型受众。在此基础上，轻应用联盟利用大数据技术准确地寻找受众，从而进行精准传播。同时，轻应用联盟利用自身轻应用商店，联合圈内知名的小程序商店等众多优质平台形成了小程序商店推广圈，在行业内各大知名媒体进行多渠道营销。\r\n</p>\r\n<p>\r\n	　　未来和讯CEO吴总说:“在互联网发展日新月异的今天，pc互联网时代的营销模式为企业带来的利润已经受限，很多企业想置身移动互联网新服务形态，却终究找不到合适的方法和渠道，轻应用联盟的诞生正是为了弥补这一缺憾，在帮助企业适应新的服务形态的同时，重新帮助企业找到一种有效方便的载体，推出服务”。\r\n</p>','用户扫一扫,安装卸载','2017年1月9日微信小程序正式上线。小程序是一种不需要下载安装即可使用的应用，它实现了应用“触手可及”的梦想，用户扫一扫或者搜一下即可打开应用。用完即走、无需安装卸载、',1000,1,1,1505367613,1505705126),(3,2,'共同关爱失独、空巢老人家庭',0,'/upload/article/20170914/4f4ead3e982a7a9f42e84faf487fa222.jpg','<div>\r\n	  “只要人人都献出一点爱，世界将变成美好的家园……”在我国，失独家庭成为社会的一大群体，失独父母需要社会各界的关怀与温暖，为失独家庭提供实际帮助，给予精神力量是全社会的共同责任。<br />\r\n \r\n</div>\r\n<div>\r\n	 随着社会的发展，越来越多的组织和个人关注失独家庭，帮助失独家庭。作为国内的最早启动“失独家庭爱心帮扶工程”的全国性公益组织——“中国生命关怀协会”作为国家卫计委主管的全国性非营利性社会组织，长期以来致力于对失独家庭的关怀，除了在物质上的帮助，该协会也注重对失独父母的精神鼓舞。除了协会外，株洲市畅想慈灯社会服务中心也一直从事失独、空巢老人家庭的公益活动，他们以多样的演出形式，无偿帮助失独、空巢老人，为他们带来温暖和力量。<br />\r\n \r\n</div>\r\n<div>\r\n	为了呼吁社会各界对失独家庭的关注，1月20日，“爱洒这方土”大型公益文艺汇演活动在株洲举行，活动为失独父母铸就关爱“失独家庭”爱的长城，为了让更多人加入到关爱失独家庭以及空巢老人的行动中来，活动启动关爱失独家庭公益项目。<br />\r\n \r\n</div>\r\n<div>\r\n	 本次活动中，最受大家欢迎的便是湖南铁路科技职业技术学院师生自编、自导、参演的音乐情景剧《爱的传承》，舞台剧的演出将带入高潮，演员动情的表演让现场观众纷纷落泪，同时也让大家更加感受到了爱的力量，把正能量传递到每个人的心中。<br />\r\n   \r\n</div>',NULL,NULL,1000,1,1,1505367733,1505368240),(4,3,'轻应用联盟：为手机减负，为生活减压',0,'/upload/article/20170914/750fa6865e2ee53026df9aeaa9d9779a.jpg','<p style=\"color:#3E3E3E;font-family:\"font-size:16px;\">\r\n	   智能手机给我们的生活带来很多便捷，在移动互联网盛行的今天，各种应用软件也是层出不穷，它们覆盖了我们生活的方方面面，吃、穿、住、行等等。近日，国内某知名媒体针对各类应用软件的使用情况进行了一项调查。调查结果显示，有近80%的人手机中下载的软件超过20个，有一半以上的用户超过30个。繁多的应用软件让手机不堪重负，也直接影响手机的使用“寿命”。那么，如何为手机减压，却不影响使用，成为各大应用商们的一大难题。为解决这一难题，北京未来和讯信息科技有限公司在今年2月份推出了一款全新应用产品——轻应用联盟。<br />\r\n<br />\r\n<strong>轻应用联盟</strong><strong>是什么?</strong>\r\n</p>\r\n<p style=\"color:#3E3E3E;font-family:\"font-size:16px;\">\r\n	<br />\r\n<a href=\"http://www.qingyy.net/\">轻应用联盟</a>是一款致力于打造互联网轻应用新生态的革命性产品， 主要服务于具有共同目标的单一企业，通过将企业的小程序、公众号、微应用等轻应用云产品结合成联盟，再利用<a href=\"http://www.qingyy.net/\">轻应用商店</a>（www.qingyy.net）的市场媒介进行全方位、立体化的推广传播，从而帮助企业进行大范围、深层次的宣传，打造一种全新的轻应用生态环境。\r\n</p>',NULL,NULL,1000,1,0,1505368130,1505459989),(5,3,'我们在设计中',0,'/upload/article/20170918/6791cc92353fd03fe9ffbb5987d10b5b.jpg','<p>\r\n	adfs7978768东奔西走132234\r\n</p>\r\n<p>\r\n	东奔西走\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','不中不中,也许是吧,谈笑风生,或许不行','描述加上中以，你懂的',1000,1,0,1505700831,1505700848);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-18 11:41:35
