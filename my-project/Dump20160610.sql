-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: web_php
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.10-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_group_id` int(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (8,'khacchinh1234','e10adc3949ba59abbe56e057f20f883e','Huynh Khac Chinh',0),(10,'admin','e10adc3949ba59abbe56e057f20f883e','admin123',0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_group`
--

DROP TABLE IF EXISTS `admin_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  `permissions` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_group`
--

LOCK TABLES `admin_group` WRITE;
/*!40000 ALTER TABLE `admin_group` DISABLE KEYS */;
INSERT INTO `admin_group` VALUES (1,'Admin',1,'a:14:{s:4:\"tran\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:13:\"product_order\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:3:\"cat\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"product\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:11:\"admin_group\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"admin\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"user\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"news\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"info\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"support\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"contact\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"comment\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"slide\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"video\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}}'),(2,'Mod',2,'a:9:{s:3:\"cat\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"product\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"news\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:4:\"info\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"support\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"contact\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:7:\"comment\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"slide\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}s:5:\"video\";a:2:{i:0;s:4:\"list\";i:1;s:6:\"change\";}}');
/*!40000 ALTER TABLE `admin_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discription` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `link_html` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalog`
--

DROP TABLE IF EXISTS `catalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalog`
--

LOCK TABLES `catalog` WRITE;
/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;
INSERT INTO `catalog` VALUES (29,'Trái cây nhập','','','',0,2),(30,'Đồ khô','','','',0,3),(31,'Rau củ','','','',0,4),(32,'Trái cây miền trung','','','',27,6),(27,'Trái cây đặc sản việt','','','',0,1),(28,'Trái cây miền nam','','','',27,5);
/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `parent_id` int(255) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `count_like` int(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (12,19,0,'Mr. KC','',0,'','dcsdc',1463127358,0,0),(2,19,0,'Mr. Demo','',19,'','Mr. Demo comment here',0,0,0),(1,19,0,'Khac Chinh','',20,'','comment demo',0,0,0),(13,18,0,'Khac Chinh','khacchinh@gmail.com',20,'','Ôi nhãn quê hương , ngon , bổ, rẻ',1463127707,0,0),(14,17,0,'Khac Chinh','khacchinh@gmail.com',20,'','Măng cụt ngon quá!!',1463128172,0,0),(15,20,0,'Mr. Tony Chinh','',0,'','bưởi miền trung',1463128600,0,0),(19,20,0,'Khac Chinh','khacchinh@gmail.com',20,'','bflsadgfaf',1465545354,0,0);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_static`
--

DROP TABLE IF EXISTS `content_static`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT '',
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_static`
--

LOCK TABLES `content_static` WRITE;
/*!40000 ALTER TABLE `content_static` DISABLE KEYS */;
INSERT INTO `content_static` VALUES (3,'footer','<p class=\"bold\">\r\n &copy;2013 -2014 Bản quyền thuộc về&nbsp; <strong>C&ocirc;ng ty TNHH Tuấn Thoa media &ndash; Đại l&yacute; VTC Digital</strong></p>\r\n<p>\r\n Lĩnh vực hoạt động của c&ocirc;ng ty: Điện &amp; điện tử , b&aacute;n lẻ &amp; b&aacute;n bu&ocirc;n</p>\r\n<p>\r\n <strong>Cơ sở 1:</strong>: Cẩm La, X&atilde; Thanh Sơn, Huyện Kiến Thụy, Th&agrave;nh Phố Hải Ph&ograve;ng - DT: 0313881505</p>\r\n<p>\r\n <strong>Cơ sở 2:</strong>: Cẩm Xu&acirc;n, N&uacute;i Đối, Huyện Kiến Thụy, Th&agrave;nh Phố Hải Ph&ograve;ng - DT: 0313812682</p>\r\n'),(18,'shipping','<p>\r\n Chi ph&iacute; vận chuyển của Tuấn Thoa Media</p>\r\n');
/*!40000 ALTER TABLE `content_static` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (1,'Giới thiệu','<p>\r\n	Giới thiệu</p>\r\n','','',1409044792),(2,'Hướng dẫn mua hàng','<p>\r\n	Hướng dẫn mua h&agrave;ng</p>\r\n','','',1409044950);
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maker`
--

DROP TABLE IF EXISTS `maker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maker`
--

LOCK TABLES `maker` WRITE;
/*!40000 ALTER TABLE `maker` DISABLE KEYS */;
/*!40000 ALTER TABLE `maker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(255) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) COLLATE utf8_bin NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `feature` enum('0','1') COLLATE utf8_bin NOT NULL,
  `count_view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách','(Dân trí) - Loạt đồ chơi trung thu biển đảo hướng về quê hương mới xuất hiện nhưng đã hút khách, các mặt hàng vàng mã “xa xỉ” không còn được nhiều người mua sắm.','<p style=\"TEXT-ALIGN: left\">\r\n	Theo b&aacute;c Lan, một chủ cửa h&agrave;ng ở phố H&agrave;ng M&atilde; chia sẻ: &ldquo;Kinh tế kh&oacute; khăn n&ecirc;n người bỏ tiền triệu ra mua đồ c&uacute;ng đắt tiền như nh&agrave; lầu, xe hơi, điện thoại, ti vi c&ograve;n rất &iacute;t. Mọi người chỉ lựa chọn những loại đồ c&oacute; gi&aacute; b&igrave;nh d&acirc;n như quần &aacute;o, gi&agrave;y d&eacute;p v&agrave; mũ để c&uacute;ng. Những mặt h&agrave;ng b&aacute;n chạy nhất l&agrave; tiền &acirc;m phủ, v&agrave;ng, quần &aacute;o hay gi&agrave;y d&eacute;p v&igrave; c&oacute; gi&aacute; kh&aacute; b&igrave;nh d&acirc;n&rdquo;.</p>\r\n<p style=\"TEXT-ALIGN: center\">\r\n	<img alt=\"Mặt hàng đèn lồng biển đảo mới xuất hiện trong dịp Tết Trung Thu năm nay\" src=\"http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n1-242e1.jpg\" /><br />\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\">Mặt h&agrave;ng đ&egrave;n lồng biển đảo mới xuất hiện trong dịp Tết Trung Thu năm nay</span></p>\r\n<p style=\"TEXT-ALIGN: center\">\r\n	<span style=\"FONT-FAMILY: Tahoma\"><img alt=\"Các thông điệp ý nghĩa yêu quê hương, biển đảo được in lên đèn lồng\" src=\"http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n2-242e1.jpg\" /></span><br />\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\">C&aacute;c th&ocirc;ng điệp &yacute; nghĩa y&ecirc;u qu&ecirc; hương, biển đảo được in l&ecirc;n đ&egrave;n lồng</span></p>\r\n<p>\r\n	Một mặt h&agrave;ng đặc biệt của m&ugrave;a Vu Lan năm nay đ&oacute; l&agrave; loại đồ chơi &ldquo;biển đảo&rdquo;. Đ&oacute; l&agrave; những chiếc đ&egrave;n lồng được in những th&ocirc;ng điệp hướng về qu&ecirc; hương, biển đảo hết sức &yacute; nghĩa.</p>\r\n<div class=\"article-side-rail\" id=\"article-side-rail\">\r\n	<div class=\"article-video-relation\">\r\n		<div class=\"relative\">\r\n			<img alt=\"Mùa Vu Lan: \" class=\"thumb\" src=\"http://video-thumbs.vcmedia.vn///dantri/7iS0Ym1SbbOoTsWhJi6Q/2014/08/08/vangma-15e63.jpg\" /><img class=\"ico\" src=\"http://dantri3.vcmedia.vn/App_Themes/Default/Images/ico_video_play.png\" /></div>\r\n		<p class=\"caption\">\r\n			M&ugrave;a Vu Lan: &quot;Xe si&ecirc;u sang&quot; đỗ chật phố H&agrave;ng M&atilde;</p>\r\n	</div>\r\n</div>\r\n<p>\r\n	C&aacute;c chủ cửa h&agrave;ng tại đ&acirc;y cho biết, c&aacute;c loại mặt h&agrave;ng l&agrave;m thủ c&ocirc;ng truyền thống đ&egrave;n lồng, đầu l&acirc;n, đ&egrave;n &ocirc;ng sao vẫn được kh&aacute;ch h&agrave;ng ưa chuộng nhất. Ngo&agrave;i ra, mẫu đ&egrave;n lồng in sẵn mang th&ocirc;ng điệp hướng về biển đảo qu&ecirc; hương được nhiều bậc phụ huynh v&agrave; c&aacute;c em học sinh đặc biệt y&ecirc;u th&iacute;ch.</p>\r\n<p style=\"TEXT-ALIGN: center\">\r\n	<img alt=\"Mới xuất hiện nhưng những chiếc đèn lồng này được nhiều phụ huynh và các em nhỏ lựa chọn\" src=\"http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n4-242e1.jpg\" /><br />\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\">Mới xuất hiện nhưng những chiếc đ&egrave;n lồng n&agrave;y được nhiều phụ huynh v&agrave; c&aacute;c em nhỏ lựa chọn</span><br />\r\n	&nbsp;</p>\r\n<p>\r\n	Chiếc đ&egrave;n lồng mang th&ocirc;ng điệp biển đảo được gh&eacute;p lại bằng 3 mảnh b&igrave;a kh&aacute;c nhau. Chiếc đ&egrave;n c&oacute; thể thắp s&aacute;ng v&agrave; ph&aacute;t nhạc khi được lắp pin ở tay cầm.Tuy nhi&ecirc;n, chi tiết đ&aacute;ng ch&uacute; &yacute; nhất đ&oacute; l&agrave; những th&ocirc;ng điệp hướng về biển đảo in tr&ecirc;n th&acirc;n của chiếc đ&egrave;n lồng như &ldquo;Em y&ecirc;u biển đảo qu&ecirc; hương&rdquo;, &ldquo;B&eacute; hướng về biển đảo&rdquo;, &ldquo;Em y&ecirc;u biển đảo Việt Nam&rdquo;, &ldquo;Em y&ecirc;u ch&uacute; bộ đội hải qu&acirc;n Việt Nam&rdquo;, với những h&igrave;nh ảnh chiến sĩ Hải qu&acirc;n Việt Nam s&uacute;ng kho&aacute;c tr&ecirc;n vai bảo vệ chủ quyền biển đảo Tổ quốc hay những chiếc t&agrave;u mang d&ograve;ng chữ Cảnh s&aacute;t biển Việt Nam&hellip;</p>\r\n','','','n1-242e1.jpg',1407553602,'0',1),(2,'Arsenal đồng ý bán Vermaelen cho Barcelona','(Dân trí) - Theo những thông tin từ báo giới Anh, Arsenal đã quyết định từ chối MU, để bán trung vệ Vermarlen cho Barcelona. Mức giá của trung vệ này vào khoảng 15 triệu bảng.','<p>\r\n	Như đ&atilde; biết, c&aacute;ch đ&acirc;y v&agrave;i ng&agrave;y, trung vệ Vermaelen đ&atilde; từ chối gia hạn hợp đồng với Arsenal. Điều đ&oacute; khiến cho CLB th&agrave;nh London t&igrave;m c&aacute;ch b&aacute;n cầu thủ n&agrave;y bằng mọi gi&aacute; để &ldquo;gỡ gạc&rdquo; ch&uacute;t &iacute;t ph&iacute; chuyển nhượng thay v&igrave; mất trắng cầu thủ n&agrave;y&nbsp;ở m&ugrave;a H&egrave; sang năm.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div align=\"center\">\r\n	<span style=\"FONT-FAMILY: Tahoma; FONT-SIZE: 10pt\"><img _fl=\"\" align=\"middle\" alt=\"Vermaelen ở rất gần Barcelona\" src=\"http://dantri4.vcmedia.vn/uajiKupQ6reCuKKDlVlG/Image/2014/08/Vermaelen-d4361.jpg\" style=\"MARGIN: 5px\" width=\"450\" /><br />\r\n	Vermaelen ở rất gần Barcelona</span><br />\r\n	&nbsp;</div>\r\n<p>\r\n	Trong thời gian gần đ&acirc;y, MU v&agrave; Barcelona l&agrave; hai ứng cử vi&ecirc;n s&aacute;ng gi&aacute; trong cuộc đua gi&agrave;nh chữ k&yacute; của hậu vệ người Bỉ. Cuối c&ugrave;ng, HLV Wenger đ&atilde; quyết định từ chối MU để b&aacute;n Vermarlen cho Barcelona. Trước đ&oacute; c&oacute; th&ocirc;ng tin cho rằng Wenger muốn đổi Vermaelen lấy Smalling, tuy nhi&ecirc;n Van Gaal lại từ chối phương &aacute;n n&agrave;y.</p>\r\n<p>\r\n	Trước b&aacute;o giới, HLV Wenger cho biết: &ldquo;Ch&uacute;ng t&ocirc;i đ&atilde; nhận được những lời đề nghị từ nước ngo&agrave;i v&agrave; quyết định để Vermaelen rời khỏi Premier League. Bản th&acirc;n Arsenal cũng đang ở trong thế kh&oacute; trong vụ n&agrave;y&rdquo;.</p>\r\n<p>\r\n	Theo tờ BBC, Arsenal đ&atilde; đồng &yacute; lời đề nghị trị gi&aacute; 15 triệu bảng của Barcelona. Trong thời gian tới, trung vệ người Bỉ sẽ được quyền tự do đ&agrave;m ph&aacute;n với đội b&oacute;ng xứ Catalan.</p>\r\n<p>\r\n	Nhiều khả năng thương vụ n&agrave;y sẽ ho&agrave;n tất trong thời gian tới. Arsenal cũng bắt đầu t&igrave;m người thay thế Vermaelen. L&uacute;c n&agrave;y, ưu ti&ecirc;n số 1 của HLV Wenger l&agrave; trung vệ Nastasic của Man City, người nhiều khả năng sẽ mất vị tr&iacute; nếu như Mangala gia nhập Etihad.</p>\r\n<p align=\"right\">\r\n	<b>H.Long</b></p>\r\n','','','Vermaelen-d4361.jpg',1407553674,'0',2),(3,'Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc','(Dân trí) - Theo người thân cháu Chi, trong lúc gia đình nghỉ trưa, cháu Chi mải chơi đã đi lạc từ phía phường Ngọc Lâm (quận Long Biên) sang nội thành. Trong lúc đang hoang mang tìm cháu, gia đình nhận được tin báo của lực lượng cảnh sát giao thông.','<p>\r\n	Khoảng 15h30 ng&agrave;y 8/8, khi đang l&agrave;m nhiệm vụ tại chốt ph&iacute;a nam cầu Chương Dương (địa b&agrave;n quận Ho&agrave;n Kiếm, H&agrave; Nội), Thượng sĩ Phạm Gia Hợp v&agrave; Thượng t&aacute; L&ecirc; Đức Đo&agrave;n(Đội CSGT số 1) ph&aacute;t hiện một ch&aacute;u b&eacute; khoảng 7-8 tuổi đi bộ tr&ecirc;n khu vực cầu Chương Dương với vẻ mặt sợ sệt. Khi Thượng sĩ Hợp v&agrave; Thượng t&aacute; Đ&ograve;an tiến lại hỏi han, ch&aacute;u b&eacute; c&oacute; biểu hiện sợ sệt v&agrave; bật kh&oacute;c n&oacute;i rằng đi lạc đường.</p>\r\n<p>\r\n	Thấy ch&aacute;u b&eacute; lả đi v&igrave; mệt, Thượng sĩ Hợp đ&atilde; đưa ch&aacute;u về chốt trực, mua b&aacute;nh v&agrave; sữa để ch&aacute;u ăn đỡ đ&oacute;i v&agrave; trấn tĩnh lại. Đồng thời, Thượng sĩ Hợp th&ocirc;ng b&aacute;o tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng về đặc điểm nhận dạng của ch&aacute;u b&eacute;.</p>\r\n<p>\r\n	<img alt=\"Cháu Chi đoàn tụ với gia đình.\" src=\"http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/Image/2014/08/455-549e4.jpg\" /><br />\r\n	Ch&aacute;u Chi đo&agrave;n tụ với gia đ&igrave;nh.</p>\r\n<p>\r\n	Sau khi trấn tĩnh lại, ch&aacute;u b&eacute; cho biết t&ecirc;n l&agrave; Vương Kim Chi (SN 2007), năm nay l&ecirc;n lớp 2 trường tiểu học &Aacute;i Mộ, quận Long Bi&ecirc;n, H&agrave; Nội. Bằng c&aacute;c biện ph&aacute;p nghiệp vụ, Thượng sĩ Hợp v&agrave; Thượng t&aacute; Đo&agrave;n đ&atilde; li&ecirc;n hệ được với c&ocirc; gi&aacute;o chủ nhiệm ch&aacute;u Chi để th&ocirc;ng b&aacute;o với gia đ&igrave;nh ch&aacute;u b&eacute; biết.</p>\r\n<p>\r\n	Gần 2 tiếng đồng hồ sau, mẹ ch&aacute;u Chi l&agrave; chị Đo&agrave;n Thị Khuyến (SN 1983, ở Ngọc L&acirc;m, Long Bi&ecirc;n, H&agrave; Nội) đ&atilde; t&igrave;m đến trụ sở Đội CSGT số 1 nhận lại con. Chị Khuyến cho cho biết, khoảng 14h c&ugrave;ng ng&agrave;y, trong l&uacute;c gia đ&igrave;nh nghỉ trưa, ch&aacute;u Chi mải chơi đ&atilde; đi lạc từ b&ecirc;n n&agrave;y cầu sang b&ecirc;n kia nội th&agrave;nh.</p>\r\n<p>\r\n	Trong l&uacute;c hoang mang kh&ocirc;ng biết t&igrave;m ch&aacute;u ở đ&acirc;u, gia đ&igrave;nh được th&ocirc;ng b&aacute;o ch&aacute;u Chi đ&atilde; được c&aacute;c chiến sĩ CSGT tận t&igrave;nh gi&uacute;p đỡ. Thay mặt gia đ&igrave;nh, chị Khuyến đ&atilde; viết thư cảm ơn c&aacute;c chiến sĩ cảnh s&aacute;t giao th&ocirc;ng.</p>\r\n<p>\r\n	<strong>Tiến Nguy&ecirc;n</strong></p>\r\n','','','455-549e4.jpg',1407553969,'0',9),(4,'Mỹ tăng cường không kích Iraq','(Dân trí) - Sau khi Tổng thống Obama phê chuẩn cho không kích các mục tiêu của nhóm phiến quân Hồi giáo IS ở miền bắc Iraq, Lầu Năm Góc đã tiến hành 3 đợt không kích.','<p>\r\n	C&aacute;c vụ kh&ocirc;ng k&iacute;ch nhằm v&agrave;o nh&oacute;m Nh&agrave; nước Hồi gi&aacute;o (IS) ở miền bắc Iraq l&agrave; những cuộc tấn c&ocirc;ng đầu ti&ecirc;n kể từ khi Mỹ trực tiếp tham gia v&agrave;o hoạt động qu&acirc;n sự ở Iraq v&agrave; sau đ&oacute; r&uacute;t qu&acirc;n v&agrave;o cuối năm 2011.</p>\r\n<p>\r\n	Trong cuộc kh&ocirc;ng k&iacute;ch đầu ti&ecirc;n v&agrave;o ng&agrave;y thứ s&aacute;u, m&aacute;y bay kh&ocirc;ng người l&aacute;i c&ugrave;ng chiến đấu cơ hải qu&acirc;n Mỹ đ&atilde; nhắm v&agrave;o c&aacute;c mục ti&ecirc;u gần th&agrave;nh phố Irbil của người Kurd. Sau đ&oacute; họ tiến h&agrave;nh th&ecirc;m 2 đợt tấn c&ocirc;ng nữa.</p>\r\n<p>\r\n	Nh&oacute;m Hồi gi&aacute;o người Sunni IS đ&atilde; chiếm quyền kiểm so&aacute;t nhiều khu vực của Iraq v&agrave; cả Syria.</p>\r\n<p>\r\n	H&agrave;ng chục ng&agrave;n người thuộc c&aacute;c nh&oacute;m d&acirc;n tộc thiểu số đ&atilde; phải rời bỏ nh&agrave; cửa khi phiến qu&acirc;n tiến v&agrave;o.</p>\r\n<p>\r\n	Nh&oacute;m IS hay c&ograve;n được gọi l&agrave; ISIS cũng đ&atilde; chiếm đập lớn nhất Iraq.</p>\r\n<p>\r\n	Lầu Năm G&oacute;c cho biết trong đợt kh&ocirc;ng k&iacute;ch thứ hai, m&aacute;y bay kh&ocirc;ng người l&aacute;i của Mỹ đ&atilde; ph&aacute; hủy một vị tr&iacute; đặt ph&aacute;o của phiến qu&acirc;n v&agrave; ti&ecirc;u diệt một nh&oacute;m phiến qu&acirc;n.</p>\r\n<p>\r\n	Chỉ hơn một tiếng sau, chiến đấu cơ F/A-18 đ&atilde; d&ugrave;ng bom c&oacute; laser dẫn đường bắn tr&uacute;ng một đo&agrave;n 7 xe của IS.</p>\r\n<p>\r\n	Trước đ&oacute;, v&agrave;o ng&agrave;y thứ s&aacute;u, 2 quả bom đ&atilde; được thả xuống một khẩu ph&aacute;o của IS d&ugrave;ng để chống lại lực lượng đang bảo vệ Irbil, thủ phủ của v&ugrave;ng tự trị của người Kurd.</p>\r\n<p>\r\n	Ph&aacute;t ng&ocirc;n vi&ecirc;n Bộ Ngoại giao Mỹ Marie Harf cho biết mục ti&ecirc;u trước mắt của c&aacute;c cuộc kh&ocirc;ng k&iacute;ch l&agrave; &ldquo;ngăn chặn bước tiến&rdquo; của IS về Irbil.</p>\r\n<p>\r\n	&ldquo;Sau đ&oacute; về l&acirc;u d&agrave;i chung t&ocirc;i muốn phối hợp hỗ trợ th&ecirc;m thời gian v&agrave; kh&ocirc;ng gian cho c&aacute;c lực lượng của người Kurd để xốc lại lực lượng, chiến đấu với đe dọa của ch&iacute;nh họ&rdquo;.</p>\r\n<p>\r\n	B&agrave; cũng khẳng định &ldquo;kh&ocirc;ng c&oacute; giải ph&aacute;p qu&acirc;n sự l&acirc;u d&agrave;i của Mỹ ở đ&oacute;&rdquo;.</p>\r\n<p>\r\n	Mặc d&ugrave; ch&iacute;nh phủ Iraq v&agrave; V&ugrave;ng người Kurd vẫn c&ograve;n đang c&oacute; bất đồng trong những th&aacute;ng qua, nhưng Thủ tướng Nouri Maliki đ&atilde; ph&aacute;i một m&aacute;y bay chở đạn tới Irbil v&agrave; thứ s&aacute;u. Trước đ&oacute; &ocirc;ng đ&atilde; lệnh cho lực lượng kh&ocirc;ng qu&acirc;n hỗ trợ cho c&aacute;c tay s&uacute;ng người Kurd để chiến đấu chống IS.</p>\r\n<p>\r\n	<b>Trung Anh</b></p>\r\n','','','1-7d48c.jpg',1407554007,'0',0);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `transaction_id` int(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `data` text COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (42,50,20,1,32000.0000,'',0),(42,49,25,1,40000.0000,'',0),(41,48,24,1,347000.0000,'',0),(40,47,19,1,25000.0000,'',1),(40,46,18,1,30000.0000,'',1);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `maker_id` int(255) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `site_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `warranty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `buyed` int(255) NOT NULL,
  `rate_total` int(255) NOT NULL,
  `rate_count` int(255) NOT NULL,
  `gifts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `feature` enum('0','1') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (18,28,'Nhãn tiêu',0,30000.0000,'<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\"><strong><u>Nh&atilde;n ti&ecirc;u da b&ograve;</u>&nbsp;được biết đến l&agrave; một loại nh&atilde;n c&oacute; c&ugrave;i d&agrave;y ngon ngọt, hấp dẫn v&agrave; được nhiều người y&ecirc;u th&iacute;ch. C&oacute; nguồn gốc từ Huế nhưng hiện nay&nbsp;<u>nh&atilde;n ti&ecirc;u da b&ograve;</u>l&agrave; một trong những loại tr&aacute;i c&acirc;y đặc sản ở miền T&acirc;y.</strong></div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\"><strong><img alt=\"Nhãn tiêu da bò\" longdesc=\"http://www.quangminhrice.com/tin-tuc/Nh%C3%A3n%20ti%C3%AAu%20da%20b%C3%B2\" src=\"http://www.quangminhrice.com/kcfinder/upload/images/Nhan%20tieu%20da%20bo.jpg\" style=\"border:none; height:300px; margin:0px; max-width:100%; padding:0px; width:400px\" title=\"Nhãn tiêu da bò\" /></strong></div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\">Nh&atilde;n ti&ecirc;u da b&ograve;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">Du lịch miền t&acirc;y đang l&agrave; xu hướng mới của kh&aacute;ch du lịch. Với địa h&igrave;nh s&ocirc;ng nước chằng chịt với những h&agrave;ng dừa nước trĩu quả, những vườn tr&aacute;i c&acirc;y đơm hoa kết tr&aacute;i quanh năm, miền t&acirc;y đang đem đến cho kh&aacute;ch du lịch những trải nghiệm th&uacute; vị.</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">Gh&eacute; miền t&acirc;y, du kh&aacute;ch kh&ocirc;ng thể n&agrave;o bỏ qua việc nếm thử những loại tr&aacute;i c&acirc;y đặc sản v&ugrave;ng miền. Trong đ&oacute;,<strong>&nbsp;nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;l&agrave; một trong những đặc sản được nhiều du kh&aacute;ch v&agrave; người d&acirc;n địa phương đ&aacute;nh gi&aacute; l&agrave; loại tr&aacute;i c&acirc;y đặc biệt thơm ngon v&agrave; ưa chuộng.</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\"><img alt=\"Nhãn tiêu da bò rất được khách du lịch yêu thích\" longdesc=\"http://www.quangminhrice.com/tin-tuc/Nh%C3%A3n%20ti%C3%AAu%20da%20b%C3%B2%20r%E1%BA%A5t%20%C4%91%C6%B0%E1%BB%A3c%20kh%C3%A1ch%20du%20l%E1%BB%8Bch%20y%C3%AAu%20th%C3%ADch\" src=\"http://www.quangminhrice.com/kcfinder/upload/images/Nhan%20tieu%20da%20bo%20rat%20duoc%20khach%20du%20lich%20yeu%20thich.jpg\" style=\"border:none; height:180px; margin:0px; max-width:100%; padding:0px; width:240px\" title=\"Nhãn tiêu da bò rất được khách du lịch yêu thích\" /></div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\">Nh&atilde;n ti&ecirc;u da b&ograve; rất được kh&aacute;ch du lịch y&ecirc;u th&iacute;ch</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\"><strong>Nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;được trồng rộng r&atilde;i ở nhiều tỉnh thuộc Đồng bằng s&ocirc;ng Cửu Long. Tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng biết qu&ecirc; hương của loại nh&atilde;n n&agrave;y lại l&agrave; Huế. Do đ&oacute;, n&oacute; c&ograve;n được gọi với c&aacute;i t&ecirc;n l&agrave; nh&atilde;n ti&ecirc;u Huế, hay c&ograve;n gọi l&agrave; nh&atilde;n quế. Ng&agrave;y nay, c&aacute;c tỉnh Tiền Giang, Vĩnh Long,&hellip; l&agrave; c&aacute;c tỉnh trồng nhiều nhất giống nh&atilde;n n&agrave;y.</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\"><strong>Nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;l&agrave; một đặc sản của miền t&acirc;y. Giống như c&aacute;c giống nh&atilde;n kh&aacute;c,&nbsp;<strong>nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;c&oacute; h&igrave;nh cầu, b&ecirc;n trong l&agrave; c&ugrave;i v&agrave; hột.<strong>&nbsp;Nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;khi c&ograve;n non m&agrave;u n&acirc;u hơi xanh, vỏ x&ugrave; x&igrave; v&agrave; d&agrave;y. Quả được thu hoạch khi vỏ chuyển sang m&agrave;u n&acirc;u s&aacute;ng v&agrave;ng như m&agrave;u da b&ograve;, l&uacute;c n&agrave;y vỏ kh&ocirc;ng c&ograve;n x&ugrave; x&igrave; m&agrave; trơn nhẵn v&agrave; mỏng hơn, quả cũng mềm hơn do c&ugrave;i đ&atilde; h&igrave;nh th&agrave;nh đầy đủ v&agrave; chứa nước.</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\"><img alt=\"Vườn nhãn tiêu da bò\" longdesc=\"http://www.quangminhrice.com/tin-tuc/V%C6%B0%E1%BB%9Dn%20nh%C3%A3n%20ti%C3%AAu%20da%20b%C3%B2\" src=\"http://www.quangminhrice.com/kcfinder/upload/images/Vuon%20nhan%20tieu%20da%20bo.jpg\" style=\"border:none; height:194px; margin:0px; max-width:100%; padding:0px; width:259px\" title=\"Vườn nhãn tiêu da bò\" /></div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\">Vườn nh&atilde;n ti&ecirc;u da b&ograve;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">Lột bỏ lớp vỏ mỏng, người ăn sẽ được nh&igrave;n thấy phần c&ugrave;i m&agrave;u trắng trong, kh&ocirc;ng d&iacute;nh v&agrave;o hạt l&uacute;c n&agrave;y đ&atilde; c&oacute; m&agrave;u đen ho&agrave;n to&agrave;n.&nbsp;<strong>Nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;khi ch&iacute;n c&oacute; vị ngọt đậm ăn rất ngon, hạt nhỏ như hạt ti&ecirc;u, c&ugrave;i d&agrave;y v&agrave; mọng nước.</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">B&ecirc;n cạnh việc l&agrave; loại tr&aacute;i c&acirc;y được d&ugrave;ng để ăn chơi, tr&aacute;ng miệng,&nbsp;<strong>nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;c&ograve;n c&oacute; t&aacute;c dụng rất tốt trong chữa một số bệnh do chứa nhiều kho&aacute;ng chất, vitamin A, C, kali, photpho, magie v&agrave; sắt. C&ugrave;i nh&atilde;n c&oacute; t&aacute;c dụng trong chữa một số bệnh về thần kinh như suy nhược thần kinh, thần kinh hoạt động yếu hay chữa c&aacute;c bệnh về gan, cải thiện sức khỏe sau bệnh. Người ta c&ograve;n d&ugrave;ng l&aacute; nh&atilde;n chữa c&aacute;c bệnh cảm lạnh, sốt r&eacute;t, vi&ecirc;m dạ d&agrave;y,... Vỏ c&acirc;y d&ugrave;ng chữa bỏng, s&acirc;u răng.</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\"><img alt=\"Lá nhãn tiêu da bò còn được dùng làm thuốc\" longdesc=\"http://www.quangminhrice.com/tin-tuc/L%C3%A1%20nh%C3%A3n%20ti%C3%AAu%20da%20b%C3%B2%20c%C3%B2n%20%C4%91%C6%B0%E1%BB%A3c%20d%C3%B9ng%20l%C3%A0m%20thu%E1%BB%91c\" src=\"http://www.quangminhrice.com/kcfinder/upload/images/La%20nhan%20tieu%20da%20bo%20con%20duoc%20dung%20lam%20thuoc.jpg\" style=\"border:none; height:199px; margin:0px; max-width:100%; padding:0px; width:253px\" title=\"Lá nhãn tiêu da bò còn được dùng làm thuốc\" /></div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(240, 230, 140);\">L&aacute; nh&atilde;n ti&ecirc;u da b&ograve; c&ograve;n được d&ugrave;ng l&agrave;m thuốc</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\"><strong>Nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;l&agrave; một giống c&acirc;y dễ trồng, tăng trưởng nhanh. Từ khi c&acirc;y ra hoa tới khi thu hoạch khoảng 3 th&aacute;ng. C&oacute; thể nh&acirc;n<strong>&nbsp;giống</strong>&nbsp;<strong>nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;bằng c&aacute;ch gieo hạt hay chiết c&agrave;nh. Tuy nhi&ecirc;n, c&acirc;y nh&acirc;n giống từ hạt thường dễ bị s&acirc;u bệnh, do đ&oacute; nh&agrave; vườn thường chọn nh&acirc;n giống bằng chiết c&agrave;nh.&nbsp;<strong>Nh&atilde;n ti&ecirc;u da b&ograve;</strong>&nbsp;cho năng suất cao, gi&aacute; b&aacute;n tr&ecirc;n thị trường ổn định, nhờ đ&oacute; đem lại hiệu quả kinh tế t&iacute;ch cực cho người n&ocirc;ng d&acirc;n.</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\">&nbsp;</div>\r\n\r\n<div style=\"margin: 0px; padding: 0px; color: rgb(50, 50, 50); font-family: Tahoma, Geneva, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 25px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(240, 230, 140);\"><strong><u>Nh&atilde;n ti&ecirc;u da b&ograve;</u>&nbsp;sở hữu nhiều phẩm chất của một loại tr&aacute;i c&acirc;y thơm ngon, hấp dẫn người ti&ecirc;u d&ugrave;ng, bất cứ khi n&agrave;o c&oacute; cơ hội đi qua miền t&acirc;y, h&atilde;y nhớ ăn thử v&agrave; đem<u>nh&atilde;n ti&ecirc;u da b&ograve;</u>&nbsp;về l&agrave;m qu&agrave; cho gia đ&igrave;nh v&agrave; bạn b&egrave;</strong></div>\r\n',0,'5_klsl.jpg','[\"0_ppbn.jpg\",\"5_klsl1.jpg\",\"meo-tri-hoi-nach-2.jpg\"]',0,0,'','','',0,0,0,0,'','','','0'),(20,32,'Bưởi Thanh Trà',0,35000.0000,'Nhưng theo sử sách triều Nguyễn hơn 200 năm trước, trong nhiều của ngon vật lạ tiến cung triều Nguyễn, cùng với gạo de An Cựu, nhãn Kim Long, chè Tuần..., bưởi Thanh Trà của làng Nguyệt Biều đã góp mặt như là đặc sản vườn nổi tiếng của vùng đất Phú Xuân.\r\n\r\nNgày nay, bưởi Thanh Trà không còn là đặc sản riêng của làng Nguyệt Biều nữa, mà nó trở thành cây đặc sản vườn ở TT-Huế.  Bưởi Thanh Trà có hương vị đặc trưng rất riêng, ngon không kém giống bưởi nào trên cả nước.\r\n',3000,'buoi (1).jpg','[\"images.jpg\",\"buoi (1).jpg\",\"thanhtra00071.jpg\"]',1463119765,0,'','','',0,0,0,0,'','','','0'),(17,28,'Măng cụt',0,60000.0000,'Măng cụt, là một loài cây thuộc họ Bứa. Nó cũng là loại cây nhiệt đới cho quả ăn được, rất quen thuộc tại Đông Nam Á. Cây cao từ 7 đến 25 m. Quả khi chín có vỏ ngoài dày, màu đỏ tím đậm.',5000,'mang_cut_unxb.jpg','[\"mang_cut_unxb1.jpg\"]',0,0,'','','',0,0,0,0,'','','','0'),(19,32,'Táo mèo',0,30000.0000,'Táo mèo – một loại quả mà có vị chua chát, có hình trứng, khi chín màu vàng lục ăn có vị chua, hơi chát. Có tác dụng giúp tiêu hóa thức ăn, tăng cường miễn dịch, giảm cholesterol, giúp hạ mỡ máu, rối loạn lipid máu,xuất huyết, bảo vệ gan, chống ung thư…',5000,'tao-meo.jpg','[\"tao-meo1.jpg\"]',0,0,'','','',0,0,0,0,'','','','0'),(21,31,'Bắp cải tím Đà Lạt',0,36500.0000,'',500,'995116812303_550x487_142857143.jpg','[\"bap-cai-tim-da-lat-loai-1kg1.jpg\",\"bap-cai-tim-da-lat-loai-1kg-1.jpg\"]',1463209833,0,'','','',0,0,0,0,'','','','0'),(22,30,'Hồng khô Đà Lạt',0,50000.0000,'<p>Sau thời gian d&agrave;i bị hồng Trung Quốc lấn &aacute;t, gần đ&acirc;y nhờ sấy bằng c&ocirc;ng nghệ Nhật Bản, n&ocirc;ng d&acirc;n Đ&agrave; Lạt đ&atilde; tự tin mang quả hồng đặc sản giới thiệu đến kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<div class=\"the-article-body\">\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Hồng Đà Lạt dùng để sấy khô theo công nghệ Nhật Bản là hồng trứng và hồng vuông. Ảnh: Thạch Thảo.\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_1_1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Hồng Đ&agrave; Lạt d&ugrave;ng để sấy kh&ocirc; theo c&ocirc;ng nghệ Nhật Bản l&agrave; hồng trứng v&agrave; hồng vu&ocirc;ng. Việc đầu tư x&acirc;y dựng xưởng theo c&ocirc;ng nghệ Nhật Bản kh&ocirc;ng tốn k&eacute;m, phức tạp. Th&ocirc;ng thường, khu vực sấy hồng c&oacute; thể được thực hiện trong nh&agrave; m&aacute;i t&ocirc;n hoặc nh&agrave; k&iacute;nh, đảm bảo th&ocirc;ng tho&aacute;ng, c&oacute; &aacute;nh nắng mặt trời chiếu v&agrave;o nhưng phải ngăn mưa, sương.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Để có được chất lượng tốt nhất, gia đình bà Đặng Thị Thu Vân phải chọn những trái hồng to, tươi ngon nhất gọt sạch vỏ trước khi sấy. Ảnh: Thạch Thảo.\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_2_1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Để c&oacute; được chất lượng tốt nhất, gia đ&igrave;nh b&agrave; Đặng Thị Thu V&acirc;n ở đường Khe Sanh, phường 10, TP Đ&agrave; Lạt (L&acirc;m Đồng) phải chọn những tr&aacute;i hồng to, tươi ngon gọt sạch vỏ trước khi sấy. Bước tiếp theo l&agrave; cho hồng v&agrave;o m&aacute;y sấy để l&agrave;m kh&ocirc; lớp nước b&ecirc;n ngo&agrave;i trong v&ograve;ng 2 tiếng đồng hồ.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Xưởng sấy hồng theo công nghệ Nhật Bản được vệ sinh sạch sẽ, người ra vào xưởng buộc phải mặc trang phục bảo hộ để cách li mầm bệnh có thể lây nhiễm vào sản phẩm. Ảnh: Thạch Thảo.\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_3_1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Khi đ&atilde; r&aacute;o nước, tr&aacute;i hồng được m&oacute;c v&agrave;o m&oacute;c nhựa, treo th&agrave;nh từng d&acirc;y d&agrave;i khoảng 1,2 m. Xưởng sấy hồng theo c&ocirc;ng nghệ Nhật Bản được vệ sinh sạch sẽ, người ra v&agrave;o buộc phải mặc trang phục bảo hộ để c&aacute;ch ly mầm bệnh c&oacute; thể l&acirc;y nhiễm v&agrave;o sản phẩm.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nong dan Da Lat say hong bang cong nghe Nhat Ban hinh anh 1\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_6.jpg\" title=\"Nông dân Đà Lạt sấy hồng bằng công nghệ Nhật Bản hình ảnh 1\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Hồng được sấy bằng nắng, gi&oacute; tự nhi&ecirc;n c&oacute; th&ecirc;m quạt hỗ trợ. Theo b&agrave; V&acirc;n, l&agrave;m hồng theo phương thức n&agrave;y phụ thuộc rất nhiều v&agrave;o thời tiết. Nếu sấy đ&uacute;ng v&agrave;o thời điểm mưa k&eacute;o d&agrave;i, hoặc n&oacute;ng ẩm thất thường, độ n&oacute;ng kh&ocirc;ng đạt th&igrave; hồng sẽ bị chảy nước, l&ecirc;n men.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nong dan Da Lat say hong bang cong nghe Nhat Ban hinh anh 2\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_8.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>20 ng&agrave;y sau khi sấy, hồng đạt được độ kh&ocirc;, teo nhỏ, trong ruột đặc qu&aacute;nh mật ngọt.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Sau khi được đóng bào bao, bà Vân cho vào máy hút toàn bộ khí bên trong bao ra ngoài để hồng bảo quản được lâu, tăng độ mềm dẻo cho sản phẩm. Ảnh: Thạch Thảo.\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_10.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Đặc điểm nổi trội của hồng sấy kh&ocirc; theo c&ocirc;ng nghệ Nhật Bản l&agrave; mềm, dẻo, giữ được độ ngọt, thơm ngon tự nhi&ecirc;n. Hiện gi&aacute; b&aacute;n loại hồng n&agrave;y 300.000-350.000 đồng/kg. Thị trường ti&ecirc;u thụ ch&iacute;nh l&agrave; Đ&agrave; Lạt v&agrave; TP HCM.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nong dan Da Lat say hong bang cong nghe Nhat Ban hinh anh 3\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_11.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sau khi được đ&oacute;ng bao, hồng sấy được cho v&agrave;o m&aacute;y h&uacute;t ch&acirc;n kh&ocirc;ng để bảo quản được l&acirc;u, tăng độ mềm dẻo cho sản phẩm.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nhờ được sấy theo công nghệ Nhật Bản mà chất lượng hồng Đà Lạt được nâng lên rõ rệt, được người tiêu dùng lựa chọn. Ảnh: Thạch Thảo\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_12.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nhờ được sấy theo c&ocirc;ng nghệ ti&ecirc;n tiến n&agrave;y m&agrave; chất lượng hồng Đ&agrave; Lạt được n&acirc;ng l&ecirc;n r&otilde; rệt, người ti&ecirc;u d&ugrave;ng rất ưa chuộng.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" class=\"picture\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Hằng ngày du khách vấn đến cơ sở sấy hồng của bà Vân tham quan và mua hồng. Ảnh: Thạch Thảo.\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/uopuoka/2015_12_11/Anh_13.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Du kh&aacute;ch đến cơ sở sấy hồng tham quan trực tiếp v&agrave; mua sản phẩm.</p>\r\n\r\n			<p>Đ&acirc;y l&agrave; năm thứ 3 gia đ&igrave;nh b&agrave; V&acirc;n l&agrave;m hồng kh&ocirc; theo c&ocirc;ng nghệ Nhật Bản. Ri&ecirc;ng năm nay, sản lượng hồng sấy th&agrave;nh phẩm đưa ra thị trường ước khoảng 1,2 tấn.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n',3000,'cdw.jpg','[\"cdw1.jpg\",\"index.jpg\",\"scasdc.jpg\"]',1463210491,0,'','','',0,0,0,0,'','','','0'),(23,29,'Cherry Úc',0,550000.0000,'Cherry  Úc hay anh đào là loại trái cây thuộc họ Rosaceae, chi Prunus. Từ cherry là tên gọi chung để chỉ một số loại cây có quả hạch và có chứa hạt cứng. Trong tiếng Pháp, cherry được gọi là cerise, điều thú vị là trái “sơ ri” của Việt Nam được lấy tên từ chính trong tiếng Pháp “cerise”, nhưng thực tế quả sơ ri lại là trái của loài Malpighia Glabra. Loại quả này có hình dáng rất giống quả anh đào nhưng chúng lại không hề có họ hàng với nhau. Có rất nhiều chủng loại cherry khác nhau nhưng chỉ có khoảng 15 giống là được trồng nhiều vào mục đích thương mại. Cherry Úc thường được thu hoạch từ cuối tháng 11 đến tháng 2…Các loại quả chín đầu mùa thường có kích cỡ khoảng 26 – 28 mm, màu đỏ thẫm, vị ngọt thanh và ít bị sâu bệnh.\r\ncherry-uc-nhap-khau\r\n\r\ncherry úc nhập khẩu chín đầu mùa \r\n\r\nCherry Úc được chia thành nhiều giống khác nhau, gồm:\r\n\r\n    Bing: màu gụ sậm ruột đỏ, trái lớn, ngọt (độ ngọt (17 – 19 %)\r\n    Chelan: màu đỏ gụ, trái vừa, ngọt (độ ngọt 16 – 18 %)\r\n    Rainer: màu vàng ửng đỏ, trái lớn, rất ngọt (độ ngọt 17 – 23%)\r\n    Tieton: màu gụ sáng, trái lớn, ngọt (độ ngọt 16 – 18%)\r\n    Skeena: màu gụ, trái lớn, rất ngọt (độ ngọt 19 – 20%)\r\n    Sweetheart: đỏ sẫm, trái lớn, hình trái tim, ngọt (độ ngọt 16 – 19%)\r\n    Lapins: màu đỏ gụ, trái cứng và lớn, ngọt (độ ngọt 17 – 19%)\r\n\r\n \r\ncherry-uc-rat-tot-cho-suc-khoe\r\n\r\ncherry úc hay còn gọi là “siêu trái cây” \r\n\r\n \r\n\r\nCác nhà khoa học đã gọi cherry là “siêu trái cây” nhờ vào thành phần dinh dưỡng và tác dụng bất ngờ của trái Cherry đối với sức khỏe con người. Một số các nghiên cứu hiện đại đã chỉ ra rằng loại quả này có tác dụng đặc biệt trong việc ngăn ngừa ung thư, tiểu đường, tăng cường trí nhớ và giảm rủi ro về các bệnh tim mạch… Về thành phần dinh dưỡng, loại quả này chứa một vitamin A cao gấp 19 lần lượng vitamin A có trong quả dâu tây hoặc các trái thuộc họ berry như việt quất.\r\n\r\n>>> Tham khảo thêm:\r\n\r\n>> Dinh dưỡng tuyệt vời từ quả Cherry Úc\r\n\r\n>> Mua Cherry Úc ở đâu tại TpHCM\r\ncherry-uc-co-nhieu-dinh-duong\r\n\r\ncherry úc mang nhiều giá trị dinh dưỡng cao\r\n\r\nCherry Úc thường có màu đỏ đậm đặc trưng, chất nước màu đỏ chiết xuất từ quả cherry chứa tới 17 thành phần dinh dưỡng, đặc biệt là anthocyanins – có tác dụng chống oxy hóa mạnh mẽ, giúp cơ thể làm chậm tốc độ lão hóa và nguy cơ mắc bệnh ung thư. Bên cạnh đó, cherry đã được chứng minh có tác dụng giảm axit uric trong máu, giúp cho các bệnh nhân bị gout, viêm khớp giảm các cơn đau.\r\ncherry-uc-nhap-khau\r\n\r\ncherry úc nhập khẩu có tác dụng trong y học\r\n\r\nNhững quả cherry Úc đỏ mọng nổi tiếng bởi kích thước to hơn hẳn các quả khác, thịt chắc, thơm ngọt. Cherry Úc nhập khẩu thường có giá cao và được phân phối bởi nhiều đơn vị khác nhau, nếu có bất kì thắc mắc nào về giống trái cây quý này, bạn có thể liên hệ ngay với Greeny House để được tư vấn kỹ càng hơn nhé. Khi mua cherry Úc về dùng, bạn chú ý phải bảo quản cherry thật kỹ, đặt trong tủ lạnh, tránh nước, chỉ khi nào ăn thì mới mang rửa, sau đó dùng khăn mềm lau khô là tha hồ tận hưởng vị ngon của siêu trái cây này.',5000,'12_PWBT.jpg','[\"12_PWBT1.jpg\",\"item_s11362.jpg\"]',1463210622,0,'','','',0,0,0,0,'','','','0'),(24,29,'Quả Việt Quất',0,350000.0000,'<p><strong>Việt quất</strong> ( t&ecirc;n khoa học&nbsp;<em>Vaccinium myrtillus )</em>&nbsp;l&agrave; thuộc họ Thạch nam,dạng th&acirc;n bụi.N&oacute;&nbsp;thường mọc ở những v&ugrave;ng đất chua, đất bạc m&agrave;u tại những nơi c&oacute; kh&iacute; hậu &ocirc;n đới hay cận cực.Việt quất c&oacute; h&igrave;nh dạng kh&aacute; giống với quả sim của Việt Nam,quả c&oacute; m&agrave;u đậm,gần như đen với một ch&uacute;t &aacute;nh t&iacute;a,thịt quả c&oacute; m&agrave;u đỏ hoặc ngả t&iacute;m.<strong>Tr&aacute;i&nbsp;Việt quất</strong> c&oacute; vị ngọt thanh,mới ăn c&oacute; thể thấy hơi ch&aacute;t,sau quen rồi lại thấy hấp dẫn v&ocirc; c&ugrave;ng.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Quả việt quất\" src=\"http://media.bizwebmedia.net/sites/99161/data/Upload/2015/4/viet_quat%281%29.JPG\" style=\"height:375px; text-align:center; width:500px\" /></p>\r\n\r\n<p><strong>Việt quất</strong> rất kh&oacute; trồng n&ecirc;n &iacute;t nh&agrave; vườn n&agrave;o trồng được ch&uacute;ng,quả chủ yếu thu hoạch từ c&acirc;y mọc hoang n&ecirc;n rất&nbsp;an to&agrave;n.<strong>Quả việt quất </strong>ch&iacute;n rất mềm v&agrave;&nbsp;mọng ,người thu hoạch,vận chuyển phải rất cẩn thận để tr&aacute;nh dập thối,hư hỏng.</p>\r\n\r\n<p>Tr&aacute;i&nbsp;Việt quất c&oacute; thể d&ugrave;ng ăn tươi hay l&agrave;m mứt,trộn hoa quả,&eacute;p lấy nước,trang tr&iacute; b&aacute;nh kem...Trong ẩm thực Ph&aacute;p , &Yacute; việt quất được sử dụng để l&agrave;m rượu m&ugrave;i d&ugrave;ng trong pha chế</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nước ép việt quất\" src=\"http://media.bizwebmedia.net/Sites/99161/data/upload/2015/6/nuoc_ep_viet_quat.jpg?0\" style=\"height:327px; width:500px\" /></p>\r\n\r\n<p>1.Xuất xứ&nbsp;Việt quất New Zealand</p>\r\n\r\n<p><strong>-Việt quất</strong> &nbsp;được ph&aacute;t hiện bởi người bản địa tại c&aacute;c khu rừng ở Bắc Mỹ. Sau đ&oacute; n&oacute; phổ biến ra to&agrave;n thế giới v&agrave; được t&ocirc;n k&iacute;nh như l&agrave; thần dược chữa bệnh v&agrave; được sử dụng quanh năm.</p>\r\n\r\n<p style=\"text-align:justify\">2. &nbsp;Dinh dưỡng v&agrave; sức khỏe</p>\r\n\r\n<p><strong>-Việt quất</strong> l&agrave; loại <a href=\"http://cleverfood.com.vn/hoa-qua-nhap-khau-b1566500.html\" target=\"_blank\">tr&aacute;i c&acirc;y&nbsp;nhập khẩu</a> ngo&agrave;i việc rất ngon miệng c&ograve;n mang lại &iacute;ch lợi cho sức khỏe đến kh&ocirc;ng ngờ bởi n&oacute; nhiều v&agrave; đa dạng c&aacute;c th&agrave;nh phần dinh dưỡng.</p>\r\n\r\n<p style=\"text-align:justify\">-<strong>Quả&nbsp;việt quất</strong> New Zealand chứa nhiều anhthocyanidins gi&uacute;p tăng cường hệ miễn dịch cũng như v&ocirc; hiệu h&oacute;a c&aacute;c gốc tự do dẫn đến ung thư hay c&aacute;c bệnh li&ecirc;n quan đến tuổi t&aacute;c.</p>\r\n\r\n<p style=\"text-align:justify\">-Trong tr&aacute;i&nbsp;việt quất chứa nhiều c&aacute;c chất polyphenols, anthocyanins v&agrave; axit ellagic l&agrave;m giảm qu&aacute; tr&igrave;nh oxy h&oacute;a LDL, cholesterol, kết nối tiểu cầu v&agrave; vi&ecirc;m rất tốt cho tim mạch v&agrave; l&agrave;m hạ cholesterol xấu.</p>\r\n\r\n<p style=\"text-align:justify\">-Với chất pterostilbene c&oacute; khả năng chống l&atilde;o&nbsp;h&oacute;a v&agrave; chống vi&ecirc;m gi&uacute;p hạn chế nhiễm tr&ugrave;ng được tiết niệu.</p>\r\n\r\n<p style=\"text-align:justify\">-Việt quất l&agrave; nguồn cung cấp vitamin A dồi d&agrave;o tốt cho thị lực v&agrave; giảm nguy cơ tho&aacute;i h&oacute;a điểm v&agrave;ng đến 38% nếu ăn thường xuy&ecirc;n.</p>\r\n\r\n<p style=\"text-align:justify\">-<strong>Quả việt quất&nbsp;</strong>nhiều chất sơ c&oacute;<strong>&nbsp;</strong>khả năng đồng h&oacute;a chất natri, fructose v&agrave; c&aacute;c vitamin gi&uacute;p<strong>&nbsp;</strong>ngăn ngừa t&aacute;o b&oacute;n v&agrave; tăng cường ti&ecirc;u h&oacute;a</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Việt quất\" src=\"http://media.bizwebmedia.net/sites/99161/data/Upload/2015/4/viet_quat2.JPG\" style=\"height:300px; width:400px\" /><img alt=\"việt quất\" src=\"http://media.bizwebmedia.net/sites/99161/data/Upload/2015/4/viet_quat3.JPG\" style=\"height:300px; width:400px\" /></p>\r\n\r\n<p>4.T&aacute;c dụng trong l&agrave;m đẹp</p>\r\n\r\n<p>-<strong>Việt quất</strong> c&oacute; chứa nhiều &nbsp;chất chống oxy h&oacute;a mạnh nhất&nbsp;gi&uacute;p ngăn ngừa l&atilde;o h&oacute;a.</p>\r\n\r\n<p>-Abutin gi&uacute;p ngăn chặn qu&aacute; tr&igrave;nh h&igrave;nh th&agrave;nh sắc tố đen, melanin</p>\r\n\r\n<p>-Việt quất c&ograve;n gi&uacute;p giảm mỡ bụng theo nghi&ecirc;n cứu của Đại học Michigan ( Mỹ )</p>\r\n\r\n<p>V&igrave; vậy bạn n&ecirc;n ăn v&agrave;i <strong>tr&aacute;i</strong><strong>&nbsp;việt quất</strong> mỗi ng&agrave;y v&agrave; thường xuy&ecirc;n để c&oacute; một l&agrave;n da trẻ trung, trắng s&aacute;ng ,&nbsp;một th&acirc;n h&igrave;nh hấp dẫn.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"việt quất\" src=\"http://media.bizwebmedia.net/Sites/99161/data/upload/2015/6/viet_quat.jpg?0\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p>5. C&aacute;ch&nbsp;bảo quản</p>\r\n\r\n<p>- &nbsp; Vỏ của <em><strong>quả&nbsp;việt quất</strong></em> c&oacute; lớp phấn trắng bảo vệ, bạn n&ecirc;n cho v&agrave;o hộp v&agrave; cất v&agrave;o tủ lanh, l&uacute;c n&agrave;o ăn mới mang l&agrave; rửa</p>\r\n\r\n<p>- &nbsp; Bạn muốn sử dụng việt quất l&acirc;u d&agrave;i th&igrave; n&ecirc;n để v&agrave;o trong ngăn đ&aacute; của tủ lạnh khi đ&atilde; bắt đầu cứng th&igrave; cho v&agrave;o trong t&uacute;i nilong bịt k&iacute;n.</p>\r\n\r\n<p>Với c&aacute;ch bảo quản tr&ecirc;n chắc chắn bạn lu&ocirc;n c&oacute; những quả việt quất new zealand tươi ngon nhất.</p>\r\n\r\n<p>Nếu muốn mua&nbsp;<strong>việt quất Newzeland</strong>&nbsp;c&aacute;c bạn n&ecirc;n tới cửa h&agrave;ng&nbsp;<a href=\"http://cleverfood.com.vn/hoa-qua-nhap-khau-b1566500.html\" target=\"_blank\"><strong>hoa quả nhập khẩu</strong></a>&nbsp;H&agrave; Nội uy t&iacute;n&nbsp;<span style=\"background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:arial\">để tr&aacute;nh mua phải h&agrave;ng k&eacute;m chất lượng,kh&ocirc;ng đảm bảo vệ sinh&nbsp;an to&agrave;n.</span></p>\r\n',3000,'201_slide_1.jpg','[\"201_slide_11.jpg\",\"images1.jpg\",\"item_s113621.jpg\"]',1463210826,0,'','','',0,0,0,0,'','','','0'),(25,28,'Sầu riêng cơm vàng',0,40000.0000,'<p><strong>Nếu bạn đang buồn ch&aacute;n h&atilde;y ăn sầu ri&ecirc;ng v&igrave; loại quả n&agrave;y chứa vitamin B6, gi&uacute;p <a class=\"st_tag internal_tag\" href=\"http://www.sieuthicaythuoc.com/tag/cai-thien-tam-trang\" rel=\"tag\" title=\"Posts tagged with cải thiện tâm trạng\">cải thiện t&acirc;m trạng</a>. Ngo&agrave;i ra sầu ri&ecirc;ng c&ograve;n rất nhiều c&ocirc;ng dụng kh&aacute;c.</strong></p>\r\n\r\n<p><a class=\"cboxElement\" href=\"http://www.sieuthicaythuoc.com/images/post/2016/01/28/03/3024/sau-rieng-2.jpg\" rel=\"lightbox[3024]\" title=\"Tác dụng làm đẹp từ trái sầu riêng\"><img alt=\"sau rieng 2 Tác dụng làm đẹp từ trái sầu riêng\" class=\"aligncenter size-full wp-image-3025\" src=\"http://www.sieuthicaythuoc.com/images/post/2016/01/28/03/3024/sau-rieng-2.jpg\" style=\"height:410px; width:620px\" title=\"Tác dụng làm đẹp từ trái sầu riêng\" /></a>Ph&ograve;ng tr&aacute;nh v&agrave; giảm bớt chứng t&aacute;o b&oacute;n</p>\r\n\r\n<p>Sầu ri&ecirc;ng chứa nhiều chất xơ, một dưỡng chất quan trọng c&oacute; khả năng hấp thu nước v&agrave; l&agrave;m gi&atilde;n nở đường ti&ecirc;u h&oacute;a. Nhờ đ&oacute;, qu&aacute; tr&igrave;nh loại bỏ chất thải trong hệ thống ti&ecirc;u h&oacute;a được diễn ra nhanh ch&oacute;ng v&agrave; hiệu quả hơn.</p>\r\n',0,'durian.jpg','[\"durian1.jpg\",\"images2.jpg\",\"trai-sau-rieng-ri6.jpg\"]',1463470621,0,'','','',0,0,0,0,'','','','0');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide`
--

LOCK TABLES `slide` WRITE;
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
INSERT INTO `slide` VALUES (1,'Slide 1','','11.jpg','http://dantri.com.vn/','0',1),(2,'Slide 2','','21.jpg','http://dantri.com.vn/','',2),(3,'Slide 3','','31.jpg','http://dantri.com.vn/','',3);
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support`
--

DROP TABLE IF EXISTS `support`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `support` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support`
--

LOCK TABLES `support` WRITE;
/*!40000 ALTER TABLE `support` DISABLE KEYS */;
INSERT INTO `support` VALUES (1,'Hoang van tuyen','tuyenht90','hoangvantuyencnt@gmail.com','tuyencnt90','01686039488',1);
/*!40000 ALTER TABLE `support` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_info` text COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `security` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` VALUES (42,0,0,20,'Khac Chinh','khacchinh@live.com','01653762420',72000.0000,'Thanh toán khi nhận hàng','','','',1463489590),(40,0,1,20,'Khac Chinh','khacchinh@gmail.com','01653762420',55000.0000,'Thanh toán khi nhận hàng','','','',1463385329),(41,0,0,20,'Khac Chinh','khacchinh@gmail.com','01653762420',347000.0000,'Thanh toán khi nhận hàng','','','',1463385513);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (16,'Hoàng văn Tuyền','tuyenht90@yahoo.com','01686039488','111111','96e79218965eb72c92a549dd5a330112',1405589118),(19,'Hoàng văn Tuyền','khacchinh@live.com','123456789','1111','96e79218965eb72c92a549dd5a330112',0),(20,'Khac Chinh','khacchinh@gmail.com','1','1','e10adc3949ba59abbe56e057f20f883e',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `count_view` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `feature` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (10,0,'Chuyện Tình Trên Facebook - Hồ Việt Trung [Official]','1386147113843_video.jpg','','http://www.youtube.com/watch?v=3ZlLyU2L4P0',1386146497,2013,4),(8,0,'Chỉ còn trong mơ & Phải không em','1386147092891_video.jpg','','http://www.youtube.com/watch?v=RfNJ43HBzOM',1386146505,2013,6),(7,0,'[HD] Anh Xin Lỗi - Minh Vương M4U','1386147058495_video.jpg','','http://www.youtube.com/watch?v=OCZ4D9qT8lI',1386146502,2013,17),(16,0,'Nhốt Em Vào Tim - Hồ Việt Trung [Official]','1386147135763_video.jpg','','http://www.youtube.com/watch?v=fkDSnN_I_Ig',0,1386147135,0),(17,0,'Chỉ Yêu Mình Em - Châu Khải Phong [Official]','1386147154302_video.jpg','','http://www.youtube.com/watch?v=l2MydtlKra8',0,1386147154,4),(18,0,'Số Nghèo - Châu Khải Phong [Official]','138614718279_video.jpg','','http://www.youtube.com/watch?v=LJRvv8U6Dos',1386147576,1386147182,1),(19,0,'Trò Chơi Đắng Cay - Châu Khải Phong [Official]','138614721063_video.jpg','','http://www.youtube.com/watch?v=3J8d8-YgOlU',1386147575,1386147210,0),(20,0,'Sầu Tím Thiệp Hồng - Quang Lê & Lệ Quyên ( Liveshow Quang Lê )','1386147271236_video.jpg','','http://www.youtube.com/watch?v=Kd5OrV4Y_bs',0,1386147271,0),(21,0,'Gõ cửa trái tim Quang Lê - Mai Thiên Vân','1386147292776_video.jpg','','http://www.youtube.com/watch?v=9oVxDQsgXIQ',1386147577,1386147292,0),(22,0,'Cô Hàng Xóm - Quang Lê','1386147310490_video.jpg','','http://www.youtube.com/watch?v=nA9ub4zlel8',0,1386147310,0),(23,0,'Lam Truong - Mai Mai','1386147353743_video.jpg','','http://www.youtube.com/watch?v=o1igATj9lMw',0,1386147353,0),(24,0,'Lỡ Yêu Em Rồi - Bằng Kiều','1386147364632_video.jpg','','http://www.youtube.com/watch?v=HYi-5dM_c34',0,1386147364,0),(25,0,'Bản Tình Cuối - Bằng Kiều','1386147389790_video.jpg','','http://www.youtube.com/watch?v=pNr7jEQ8LT8',0,1386147389,2),(26,1,'Phút cuối - Bằng Kiều','1386150063515_video.jpg','','http://www.youtube.com/watch?v=sA_gM6_eqXU',0,1386150063,0),(27,0,'Giấc Mơ (Live) - Bùi Anh Tuấn ft Yanbi','1386150103768_video.jpg','','http://www.youtube.com/watch?v=XLr463dUNgQ',0,1386150103,0),(28,4,'Anh Nhớ Em - Tuấn Hưng','1386150121482_video.jpg','','http://www.youtube.com/watch?v=ewNQtt1RiSk',0,1386150121,0),(29,0,'LE QUYEN & TUAN HUNG - Nhu Giac Chiem Bao','1386150141608_video.jpg','','http://www.youtube.com/watch?v=DaMARvh0kms',0,1386150141,0),(30,10,'Dĩ Vãng Cuộc Tình - Duy Mạnh ft Tuấn Hưng','140905101897_video.jpg','','http://www.youtube.com/watch?v=g8I-LoBIFgQ',0,1409051018,0);
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-10 14:59:17
