# ************************************************************
# Sequel Pro SQL dump
# Version 4500
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: aa16v3pw7v67tv8.cn3bwky93pfs.ap-southeast-1.rds.amazonaws.com (MySQL 5.6.27-log)
# Database: ebdb
# Generation Time: 2016-10-09 08:56:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table db_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_admin`;

CREATE TABLE `db_admin` (
  `admin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` text NOT NULL,
  `website_title` text NOT NULL,
  `nav_options` int(11) NOT NULL,
  `web_launch` int(11) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` varchar(120) NOT NULL DEFAULT '',
  `admin_stat` varchar(1) NOT NULL,
  `admin_unique` varchar(60) NOT NULL,
  `admin_log_date` date NOT NULL,
  `admin_log_time` text NOT NULL,
  `admin_log_count` int(11) NOT NULL,
  `system_error` text NOT NULL,
  `front_email` text NOT NULL,
  `front_phone` text NOT NULL,
  `front_google_map_embed` text NOT NULL,
  `front_bhour_mon` text NOT NULL,
  `front_bhour_tue` text NOT NULL,
  `front_bhour_wed` text NOT NULL,
  `front_bhour_thu` text NOT NULL,
  `front_bhour_fri` text NOT NULL,
  `front_bhour_sat` text NOT NULL,
  `front_bhour_sun` text NOT NULL,
  `founder_name` text NOT NULL,
  `founder_tag` text NOT NULL,
  `founder_desc` text NOT NULL,
  `founder_cover` text NOT NULL,
  `admin_post` varchar(10) NOT NULL,
  `meta_placeNAME` text NOT NULL,
  `header_body_addon` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_admin` WRITE;
/*!40000 ALTER TABLE `db_admin` DISABLE KEYS */;

INSERT INTO `db_admin` (`admin_id`, `admin_name`, `website_title`, `nav_options`, `web_launch`, `admin_email`, `admin_password`, `admin_stat`, `admin_unique`, `admin_log_date`, `admin_log_time`, `admin_log_count`, `system_error`, `front_email`, `front_phone`, `front_google_map_embed`, `front_bhour_mon`, `front_bhour_tue`, `front_bhour_wed`, `front_bhour_thu`, `front_bhour_fri`, `front_bhour_sat`, `front_bhour_sun`, `founder_name`, `founder_tag`, `founder_desc`, `founder_cover`, `admin_post`, `meta_placeNAME`, `header_body_addon`)
VALUES
	(1,'Admin Name','WebbyCMS',1,1,'admin@domain.com','be4e5ec43257c4e574c9b956a49f91b0','','5649fe9cc98a66.61720547','2016-09-20','2:01 AM',0,'','','','','','','','','','','','','','','','admin','',''),
	(2,'Notions','WebbyCMS',1,0,'superadmin','7e953d47c2851bca09158ac6d7fb2ec6','','5621fe81c98a66.61830547','2016-10-04','12:25 AM',2,'','','','','','','','','','','','','','','','superadmin','','');

/*!40000 ALTER TABLE `db_admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_blog_post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_blog_post`;

CREATE TABLE `db_blog_post` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `post_time` text NOT NULL,
  `post_pdate` date NOT NULL,
  `post_ptime` text NOT NULL,
  `post_title` text NOT NULL,
  `post_slug` varchar(120) NOT NULL,
  `post_contents` blob NOT NULL,
  `post_stat` varchar(1) NOT NULL,
  `post_display` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `post_cover` text NOT NULL,
  `post_token` text NOT NULL,
  `post_type` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_blog_post_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_blog_post_category`;

CREATE TABLE `db_blog_post_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` text NOT NULL,
  `cate_stat` varchar(1) NOT NULL,
  `cate_slug_url` varchar(120) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_blog_post_category` WRITE;
/*!40000 ALTER TABLE `db_blog_post_category` DISABLE KEYS */;

INSERT INTO `db_blog_post_category` (`cate_id`, `cate_name`, `cate_stat`, `cate_slug_url`)
VALUES
	(1,'General','','general'),
	(2,'Blog','','blog'),
	(3,'News','','news'),
	(4,'Annoucement','','annoucement');

/*!40000 ALTER TABLE `db_blog_post_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_blog_post_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_blog_post_comments`;

CREATE TABLE `db_blog_post_comments` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_date` date NOT NULL,
  `comment_time` text NOT NULL,
  `visitor_token` text NOT NULL,
  `comment_contents` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_email` text NOT NULL,
  `blog_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `comment_stat` varchar(1) NOT NULL,
  `comment_display` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `comment_token` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_enquiry
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_enquiry`;

CREATE TABLE `db_enquiry` (
  `enquiry_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `enquiry_date` date NOT NULL,
  `enquiry_time` text NOT NULL,
  `enquiry_name` text NOT NULL,
  `enquiry_phone` text NOT NULL,
  `enquiry_email` text NOT NULL,
  `enquiry_title` text NOT NULL,
  `enquiry_contents` text NOT NULL,
  `enquiry_stat` varchar(1) NOT NULL DEFAULT '',
  `enquiry_read` varchar(1) NOT NULL,
  `enquiry_token` text NOT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_feature
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_feature`;

CREATE TABLE `db_feature` (
  `feature_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `feature_name` text NOT NULL,
  `feature_stat` varchar(1) NOT NULL,
  `feature_desc` text NOT NULL,
  `feature_image` text NOT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_gallery`;

CREATE TABLE `db_gallery` (
  `image_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` text NOT NULL,
  `image_url` text NOT NULL,
  `image_thumb` text NOT NULL,
  `image_stat` varchar(1) NOT NULL,
  `page_slug` varchar(120) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_display` int(11) NOT NULL,
  `image_sort` int(11) NOT NULL,
  `image_link` text NOT NULL,
  `image_target` varchar(50) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_home_contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_home_contents`;

CREATE TABLE `db_home_contents` (
  `item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item_icon` text NOT NULL,
  `item_name` text NOT NULL,
  `item_desc` text NOT NULL,
  `item_stat` varchar(1) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_pages`;

CREATE TABLE `db_pages` (
  `page_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_slug` varchar(120) NOT NULL,
  `backend_menu_name` varchar(120) NOT NULL DEFAULT '',
  `page_stat` varchar(1) NOT NULL DEFAULT '',
  `page_title` text NOT NULL,
  `page_short_desc` text NOT NULL,
  `page_desc` text NOT NULL,
  `page_cover` text NOT NULL,
  `page_pdate` date NOT NULL,
  `page_ptime` text NOT NULL,
  `page_keywords` text NOT NULL,
  `meta_placeNAME` text NOT NULL,
  `meta_location` text NOT NULL,
  `meta_type` text NOT NULL,
  `page_url` text NOT NULL,
  `page_contents` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_pages` WRITE;
/*!40000 ALTER TABLE `db_pages` DISABLE KEYS */;

INSERT INTO `db_pages` (`page_id`, `page_slug`, `backend_menu_name`, `page_stat`, `page_title`, `page_short_desc`, `page_desc`, `page_cover`, `page_pdate`, `page_ptime`, `page_keywords`, `meta_placeNAME`, `meta_location`, `meta_type`, `page_url`, `page_contents`)
VALUES
	(1,'home','Home','','','','','','2016-08-13','11:36 AM','','','','','',''),
	(2,'about-us','About Us','','About Us','','','','2016-08-13','11:36 AM','','','','','',''),
	(3,'contact-us','Contact Us','','','','','','2016-07-21','8:13 AM','','','','','',''),
	(4,'services','Services','','','','','','2016-08-13','11:35 AM','','','','','',''),
	(5,'blog','Blog','','','','','','2016-07-21','8:14 AM','','','','','',''),
	(6,'gallery','Gallery','','','','','','2016-08-13','11:36 AM','','','','','',''),
	(7,'policy','Privacy','','Privacy Policy','','','','0000-00-00','','','','','','','');

/*!40000 ALTER TABLE `db_pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_products`;

CREATE TABLE `db_products` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_slug` varchar(60) NOT NULL,
  `product_stat` varchar(1) NOT NULL,
  `product_contents` blob NOT NULL,
  `product_specs` blob NOT NULL,
  `product_tags` text NOT NULL,
  `product_sort` int(11) NOT NULL,
  `product_cover` text NOT NULL,
  `product_display` int(11) NOT NULL,
  `product_SKU` varchar(60) NOT NULL,
  `product_EAN` varchar(120) NOT NULL,
  `product_token` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sub_sub_id` int(11) NOT NULL,
  `sub_sub_sub_id` int(11) NOT NULL,
  `product_price` decimal(19,2) NOT NULL,
  `product_currency` varchar(3) NOT NULL,
  `product_offer_price` decimal(19,2) NOT NULL,
  `product_offer_rate` decimal(19,2) NOT NULL,
  `product_stocks` int(11) NOT NULL,
  `product_date` date NOT NULL,
  `product_time` varchar(20) NOT NULL DEFAULT '',
  `product_pdate` date NOT NULL,
  `product_ptime` varchar(20) NOT NULL DEFAULT '',
  `product_mdate` date NOT NULL,
  `product_mtime` varchar(20) NOT NULL,
  `product_vdate` date NOT NULL,
  `product_vtime` varchar(20) NOT NULL,
  `product_rate` decimal(2,2) NOT NULL,
  `product_rate_date` date NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_products_cate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_products_cate`;

CREATE TABLE `db_products_cate` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` text NOT NULL,
  `cate_slug` varchar(60) NOT NULL,
  `cate_stat` varchar(1) NOT NULL,
  `cate_contents` blob NOT NULL,
  `cate_cover` text NOT NULL,
  `cate_sort` int(11) NOT NULL,
  `cate_display` int(11) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_products_cate` WRITE;
/*!40000 ALTER TABLE `db_products_cate` DISABLE KEYS */;

INSERT INTO `db_products_cate` (`cate_id`, `cate_name`, `cate_slug`, `cate_stat`, `cate_contents`, `cate_cover`, `cate_sort`, `cate_display`)
VALUES
	(1,'VLUTASEæ— ç¡«é…¸ç› ä¿®æŠ¤ç³»åˆ—','vlutaseæ— ç¡«é…¸ç›-ä¿®æŠ¤ç³»åˆ—','','','',0,0),
	(2,'K2æ»‹æ¶¦ç³»åˆ—','k2æ»‹æ¶¦ç³»åˆ—','','','',0,0),
	(3,'K2æœ‰æœºç³»åˆ—','k2æœ‰æœºç³»åˆ—','','','',0,0),
	(4,'K2å¼¹æ€§ç³»åˆ—','k2å¼¹æ€§ç³»åˆ—','','','',0,0);

/*!40000 ALTER TABLE `db_products_cate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_products_cate_sub
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_products_cate_sub`;

CREATE TABLE `db_products_cate_sub` (
  `sub_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `cate_name` text NOT NULL,
  `cate_slug` varchar(60) NOT NULL DEFAULT '',
  `cate_stat` varchar(1) NOT NULL DEFAULT '',
  `cate_contents` blob NOT NULL,
  `cate_cover` text NOT NULL,
  `cate_sort` int(11) NOT NULL,
  `cate_display` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_products_cate_sub_sub
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_products_cate_sub_sub`;

CREATE TABLE `db_products_cate_sub_sub` (
  `sub_sub_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `cate_name` text NOT NULL,
  `cate_slug` varchar(60) NOT NULL DEFAULT '',
  `cate_stat` varchar(1) NOT NULL DEFAULT '',
  `cate_contents` blob NOT NULL,
  `cate_cover` text NOT NULL,
  `cate_sort` int(11) NOT NULL,
  `cate_display` int(11) NOT NULL,
  PRIMARY KEY (`sub_sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_products_cate_sub_sub_sub
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_products_cate_sub_sub_sub`;

CREATE TABLE `db_products_cate_sub_sub_sub` (
  `sub_sub_sub_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sub_sub_id` int(11) NOT NULL,
  `cate_name` text NOT NULL,
  `cate_slug` varchar(60) NOT NULL DEFAULT '',
  `cate_stat` varchar(1) NOT NULL DEFAULT '',
  `cate_contents` blob NOT NULL,
  `cate_cover` text NOT NULL,
  `cate_sort` int(11) NOT NULL,
  `cate_display` int(11) NOT NULL,
  PRIMARY KEY (`sub_sub_sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_services`;

CREATE TABLE `db_services` (
  `service_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` text NOT NULL,
  `service_image` text NOT NULL,
  `service_desc` text NOT NULL,
  `service_slug` text NOT NULL,
  `service_stat` varchar(1) NOT NULL,
  `service_style` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_teachers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_teachers`;

CREATE TABLE `db_teachers` (
  `teacher_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_name` text NOT NULL,
  `teacher_stat` varchar(1) NOT NULL,
  `teacher_experiences` varchar(11) NOT NULL DEFAULT '',
  `teacher_desc` text NOT NULL,
  `teacher_cover` text NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_testimonial
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_testimonial`;

CREATE TABLE `db_testimonial` (
  `testimonial_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `testimonial_name` text NOT NULL,
  `testimonial_sub_name` text NOT NULL,
  `testimonial_content` text NOT NULL,
  `testimonial_stat` varchar(1) NOT NULL,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_tiny_url
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_tiny_url`;

CREATE TABLE `db_tiny_url` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tiny_page` varchar(60) NOT NULL,
  `tiny_cate` varchar(60) NOT NULL,
  `tiny_action` varchar(60) NOT NULL,
  `tiny_id` varchar(60) NOT NULL,
  `tiny_slug` varchar(60) NOT NULL,
  `tiny_stat` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_token
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_token`;

CREATE TABLE `db_token` (
  `token_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `token_date` text NOT NULL,
  `token_time` text NOT NULL,
  `token_code` text NOT NULL,
  `token_stat` varchar(1) NOT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_token` WRITE;
/*!40000 ALTER TABLE `db_token` DISABLE KEYS */;

INSERT INTO `db_token` (`token_id`, `token_date`, `token_time`, `token_code`, `token_stat`)
VALUES
	(1,'2016-10-04','8:48 AM','fc5dc60d97494f8ab1dd9781f0fb1135',''),
	(2,'2016-10-04','8:48 AM','e023139b3f714af11d1f2215c84a1287',''),
	(3,'2016-10-04','8:48 AM','1b22e1e30074c2acf233309961bdc809',''),
	(4,'2016-10-04','8:48 AM','fd8e0339bd326d88b5ccfc35bb73030e','');

/*!40000 ALTER TABLE `db_token` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_visitor_log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_visitor_log`;

CREATE TABLE `db_visitor_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_date` date NOT NULL,
  `log_time` text NOT NULL,
  `log_stamp_date` date NOT NULL,
  `log_stamp_time` text NOT NULL,
  `log_desc` text NOT NULL,
  `log_stat` varchar(1) NOT NULL,
  `log_unique` text NOT NULL,
  `log_count` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_visitor_log` WRITE;
/*!40000 ALTER TABLE `db_visitor_log` DISABLE KEYS */;

INSERT INTO `db_visitor_log` (`log_id`, `log_date`, `log_time`, `log_stamp_date`, `log_stamp_time`, `log_desc`, `log_stat`, `log_unique`, `log_count`)
VALUES
	(1,'2016-10-04','1:27 AM','0000-00-00','','','','57f294e4da516',0),
	(2,'2016-10-04','1:29 AM','0000-00-00','','','','57f2955f77c63',0),
	(3,'2016-10-04','1:29 AM','0000-00-00','','','','57f295686afff',0),
	(4,'2016-10-04','1:32 AM','0000-00-00','','','','57f2961a923c2',0),
	(5,'2016-10-04','1:46 AM','2016-10-04','1:50 AM','','','57f2997307654',0),
	(6,'2016-10-04','3:59 AM','0000-00-00','','','','57f2b8894e0ad',0),
	(7,'2016-10-04','6:20 AM','0000-00-00','','','','57f2d9cb522c4',0),
	(8,'2016-10-04','8:23 AM','2016-10-04','8:25 AM','','','57f2f69b9306c',0),
	(9,'2016-10-04','10:37 AM','0000-00-00','','','','57f315d0b7122',0),
	(10,'2016-10-04','3:06 PM','0000-00-00','','','','57f35501a815f',0),
	(11,'2016-10-04','6:56 PM','0000-00-00','','','','57f38aedc072e',0),
	(12,'2016-10-04','7:03 PM','0000-00-00','','','','57f38c9815721',0),
	(13,'2016-10-04','7:11 PM','0000-00-00','','','','57f38e700aef4',0),
	(14,'2016-10-04','10:07 PM','0000-00-00','','','','57f3b796b27bb',0),
	(15,'2016-10-04','10:07 PM','0000-00-00','','','','57f3b7adb6428',0),
	(16,'2016-10-04','10:35 PM','0000-00-00','','','','57f3be2db0e8d',0),
	(17,'2016-10-04','10:45 PM','0000-00-00','','','','57f3c08151735',0),
	(18,'2016-10-05','12:26 AM','0000-00-00','','','','57f3d842cc2c3',0),
	(19,'2016-10-05','6:39 AM','0000-00-00','','','','57f42f9442db7',0),
	(20,'2016-10-05','9:47 AM','0000-00-00','','','','57f45ba698a45',0),
	(21,'2016-10-05','12:27 PM','0000-00-00','','','','57f48136834f8',0),
	(22,'2016-10-05','12:29 PM','0000-00-00','','','','57f481a823b95',0),
	(23,'2016-10-05','12:29 PM','0000-00-00','','','','57f481a826b70',0),
	(24,'2016-10-05','12:29 PM','0000-00-00','','','','57f481b1ec06b',0),
	(25,'2016-10-05','12:29 PM','0000-00-00','','','','57f481b5181b5',0),
	(26,'2016-10-05','12:34 PM','0000-00-00','','','','57f482de4ded1',0),
	(27,'2016-10-05','1:52 PM','0000-00-00','','','','57f4950339fbc',0),
	(28,'2016-10-05','2:09 PM','0000-00-00','','','','57f49929a1ecb',0),
	(29,'2016-10-05','2:12 PM','0000-00-00','','','','57f499e49fcf5',0),
	(30,'2016-10-05','2:14 PM','0000-00-00','','','','57f49a46d1e7d',0),
	(31,'2016-10-05','2:35 PM','0000-00-00','','','','57f49f1c8eab4',0),
	(32,'2016-10-05','2:36 PM','0000-00-00','','','','57f49f80218f7',0),
	(33,'2016-10-05','3:05 PM','0000-00-00','','','','57f4a65485361',0),
	(34,'2016-10-05','3:16 PM','0000-00-00','','','','57f4a8e97471f',0),
	(35,'2016-10-05','6:10 PM','0000-00-00','','','','57f4d17c97172',0),
	(36,'2016-10-05','6:12 PM','0000-00-00','','','','57f4d1f195929',0),
	(37,'2016-10-05','7:20 PM','0000-00-00','','','','57f4e2155eccc',0),
	(38,'2016-10-05','9:15 PM','0000-00-00','','','','57f4fcf427b14',0),
	(39,'2016-10-05','9:30 PM','0000-00-00','','','','57f500769f4f1',0),
	(40,'2016-10-05','11:33 PM','0000-00-00','','','','57f51d4f96d8a',0),
	(41,'2016-10-05','11:33 PM','0000-00-00','','','','57f51d4fd6428',0),
	(42,'2016-10-06','3:21 AM','0000-00-00','','','','57f552bec69a4',0),
	(43,'2016-10-06','4:20 AM','0000-00-00','','','','57f560795e07f',0),
	(44,'2016-10-06','4:22 AM','0000-00-00','','','','57f5611242b3b',0),
	(45,'2016-10-06','4:22 AM','0000-00-00','','','','57f561154f61b',0),
	(46,'2016-10-06','4:22 AM','0000-00-00','','','','57f5611736f72',0),
	(47,'2016-10-06','7:43 AM','0000-00-00','','','','57f59004dd474',0),
	(48,'2016-10-06','9:00 AM','0000-00-00','','','','57f5a245466d5',0),
	(49,'2016-10-06','10:13 AM','0000-00-00','','','','57f5b32f4121c',0),
	(50,'2016-10-06','2:13 PM','0000-00-00','','','','57f5eb91b8f5d',0),
	(51,'2016-10-06','3:31 PM','0000-00-00','','','','57f5fdc09e5b8',0),
	(52,'2016-10-06','3:38 PM','0000-00-00','','','','57f5ff7292daa',0),
	(53,'2016-10-06','3:38 PM','0000-00-00','','','','57f5ff72d350e',0),
	(54,'2016-10-06','5:36 PM','0000-00-00','','','','57f61b39c0ecc',0),
	(55,'2016-10-06','8:11 PM','0000-00-00','','','','57f63f8952ba3',0),
	(56,'2016-10-06','8:13 PM','0000-00-00','','','','57f63feb8e864',0),
	(57,'2016-10-06','8:15 PM','0000-00-00','','','','57f64059b2201',0),
	(58,'2016-10-06','8:48 PM','0000-00-00','','','','57f6481e81bfe',0),
	(59,'2016-10-06','9:24 PM','0000-00-00','','','','57f650a6d2ffd',0),
	(60,'2016-10-06','10:00 PM','0000-00-00','','','','57f659083285d',0),
	(61,'2016-10-07','8:13 AM','0000-00-00','','','','57f6e89ca1f03',0),
	(62,'2016-10-07','9:17 AM','0000-00-00','','','','57f6f7b18fe7a',0),
	(63,'2016-10-07','9:17 AM','0000-00-00','','','','57f6f7b6b307f',0),
	(64,'2016-10-07','1:15 PM','0000-00-00','','','','57f72f77330f3',0),
	(65,'2016-10-07','1:42 PM','0000-00-00','','','','57f735c73bac2',0),
	(66,'2016-10-07','4:17 PM','0000-00-00','','','','57f75a34dad6e',0),
	(67,'2016-10-07','5:33 PM','0000-00-00','','','','57f76bea110fc',0),
	(68,'2016-10-07','6:44 PM','0000-00-00','','','','57f77c7c87353',0),
	(69,'2016-10-07','6:44 PM','0000-00-00','','','','57f77c7dcbb07',0),
	(70,'2016-10-07','6:53 PM','0000-00-00','','','','57f77eb09a260',0),
	(71,'2016-10-07','6:54 PM','0000-00-00','','','','57f77ed5163ea',0),
	(72,'2016-10-07','6:54 PM','0000-00-00','','','','57f77f032a786',0),
	(73,'2016-10-07','6:55 PM','0000-00-00','','','','57f77f157b558',0),
	(74,'2016-10-07','6:55 PM','0000-00-00','','','','57f77f213a29e',0),
	(75,'2016-10-07','6:55 PM','0000-00-00','','','','57f77f2f4394e',0),
	(76,'2016-10-07','6:56 PM','0000-00-00','','','','57f77f5def310',0),
	(77,'2016-10-07','6:57 PM','0000-00-00','','','','57f77f928f26f',0),
	(78,'2016-10-07','6:59 PM','0000-00-00','','','','57f7802d43f64',0),
	(79,'2016-10-07','7:28 PM','0000-00-00','','','','57f786f08e1bb',0),
	(80,'2016-10-07','8:53 PM','0000-00-00','','','','57f79adae40b9',0),
	(81,'2016-10-07','9:04 PM','0000-00-00','','','','57f79d4db026d',0),
	(82,'2016-10-07','9:42 PM','0000-00-00','','','','57f7a66234b3e',0),
	(83,'2016-10-07','9:42 PM','0000-00-00','','','','57f7a66255edd',0),
	(84,'2016-10-07','10:25 PM','0000-00-00','','','','57f7b03e51187',0),
	(85,'2016-10-07','11:22 PM','0000-00-00','','','','57f7bdb85d096',0),
	(86,'2016-10-07','11:26 PM','0000-00-00','','','','57f7be90b7848',0),
	(87,'2016-10-08','2:53 AM','0000-00-00','','','','57f7ef164017b',0),
	(88,'2016-10-08','2:53 AM','0000-00-00','','','','57f7ef19e246c',0),
	(89,'2016-10-08','3:30 AM','0000-00-00','','','','57f7f7d872e6f',0),
	(90,'2016-10-08','5:57 AM','0000-00-00','','','','57f81a59e7975',0),
	(91,'2016-10-08','8:00 AM','0000-00-00','','','','57f83714ac8f5',0),
	(92,'2016-10-08','9:04 AM','0000-00-00','','','','57f8460e391ea',0),
	(93,'2016-10-08','9:33 AM','0000-00-00','','','','57f84cf38fdd4',0),
	(94,'2016-10-08','10:59 AM','0000-00-00','','','','57f8610b0d87e',0),
	(95,'2016-10-08','12:18 PM','0000-00-00','','','','57f87393ef369',0),
	(96,'2016-10-08','12:18 PM','0000-00-00','','','','57f8739930bff',0),
	(97,'2016-10-08','3:00 PM','0000-00-00','','','','57f899a1749c3',0),
	(98,'2016-10-08','3:49 PM','0000-00-00','','','','57f8a51fd8b0d',0),
	(99,'2016-10-08','4:14 PM','0000-00-00','','','','57f8aaf92a638',0),
	(100,'2016-10-08','4:14 PM','0000-00-00','','','','57f8ab0212e51',0),
	(101,'2016-10-08','6:18 PM','0000-00-00','','','','57f8c7d997aa1',0),
	(102,'2016-10-08','6:35 PM','0000-00-00','','','','57f8cbe9773fc',0),
	(103,'2016-10-08','6:54 PM','0000-00-00','','','','57f8d06508a90',0),
	(104,'2016-10-08','8:24 PM','0000-00-00','','','','57f8e56dc5b70',0),
	(105,'2016-10-08','8:44 PM','0000-00-00','','','','57f8ea3bb6be1',0),
	(106,'2016-10-08','9:56 PM','0000-00-00','','','','57f8fb2333865',0),
	(107,'2016-10-08','10:00 PM','0000-00-00','','','','57f8fc12060ef',0),
	(108,'2016-10-08','10:00 PM','0000-00-00','','','','57f8fc1738a60',0),
	(109,'2016-10-08','11:18 PM','0000-00-00','','','','57f90e29afdf8',0),
	(110,'2016-10-08','11:18 PM','0000-00-00','','','','57f90e2a29bac',0),
	(111,'2016-10-08','11:43 PM','0000-00-00','','','','57f91410c8f24',0),
	(112,'2016-10-09','12:13 AM','0000-00-00','','','','57f91b37a9e62',0),
	(113,'2016-10-09','12:18 AM','0000-00-00','','','','57f91c3e24768',0),
	(114,'2016-10-09','12:33 AM','0000-00-00','','','','57f91fdd7c881',0),
	(115,'2016-10-09','2:33 AM','0000-00-00','','','','57f93c09a42e6',0),
	(116,'2016-10-09','3:20 AM','0000-00-00','','','','57f946f6ba0bd',0),
	(117,'2016-10-09','5:36 AM','0000-00-00','','','','57f966f783e6e',0),
	(118,'2016-10-09','5:36 AM','0000-00-00','','','','57f966f7b2c25',0),
	(119,'2016-10-09','6:19 AM','0000-00-00','','','','57f970ea48478',0),
	(120,'2016-10-09','6:22 AM','0000-00-00','','','','57f971c3b933f',0),
	(121,'2016-10-09','7:38 AM','0000-00-00','','','','57f983925cb66',0),
	(122,'2016-10-09','9:04 AM','0000-00-00','','','','57f9978a5831c',0),
	(123,'2016-10-09','11:06 AM','0000-00-00','','','','57f9b438422e7',0),
	(124,'2016-10-09','11:06 AM','0000-00-00','','','','57f9b43a75510',0),
	(125,'2016-10-09','11:34 AM','0000-00-00','','','','57f9bab3e906c',0),
	(126,'2016-10-09','11:34 AM','0000-00-00','','','','57f9bab45f576',0),
	(127,'2016-10-09','11:54 AM','0000-00-00','','','','57f9bf5c735a3',0),
	(128,'2016-10-09','11:54 AM','0000-00-00','','','','57f9bf5d7bec2',0),
	(129,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a28a90a',0),
	(130,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6807f8',0),
	(131,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a680edb',0),
	(132,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6815c7',0),
	(133,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a69f322',0),
	(134,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6aa6f1',0),
	(135,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6aaaa1',0),
	(136,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6c8361',0),
	(137,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6d89fa',0),
	(138,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6db566',0),
	(139,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a6ea687',0),
	(140,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a881edd',0),
	(141,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a8bd4eb',0),
	(142,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a8d4ea3',0),
	(143,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a900fb5',0),
	(144,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a914a5e',0),
	(145,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a91522f',0),
	(146,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a92de72',0),
	(147,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a933be0',0),
	(148,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a94f1d0',0),
	(149,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a95ec2b',0),
	(150,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a965db0',0),
	(151,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a968857',0),
	(152,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a976301',0),
	(153,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a978c6b',0),
	(154,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a97a557',0),
	(155,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0a97d07d',0),
	(156,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0ac7c054',0),
	(157,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0b07d34a',0),
	(158,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0b07e514',0),
	(159,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0b088adf',0),
	(160,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0b09c36d',0),
	(161,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0b18c2af',0),
	(162,'2016-10-09','11:59 AM','0000-00-00','','','','57f9c0b18c6f5',0),
	(163,'2016-10-09','12:00 PM','0000-00-00','','','','57f9c0f42d7e1',0),
	(164,'2016-10-09','12:01 PM','0000-00-00','','','','57f9c10383554',0),
	(165,'2016-10-09','12:02 PM','0000-00-00','','','','57f9c153a4074',0),
	(166,'2016-10-09','12:02 PM','0000-00-00','','','','57f9c15ba3026',0),
	(167,'2016-10-09','2:34 PM','0000-00-00','','','','57f9e4dc0f4b7',0),
	(168,'2016-10-09','3:05 PM','0000-00-00','','','','57f9ec436c28e',0),
	(169,'2016-10-09','4:09 PM','0000-00-00','','','','57f9fb452d699',0),
	(170,'2016-10-09','4:45 PM','0000-00-00','','','','57fa038d4586f',0),
	(171,'2016-10-09','4:45 PM','0000-00-00','','','','57fa038e40960',0);

/*!40000 ALTER TABLE `db_visitor_log` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
