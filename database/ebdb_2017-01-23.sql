# ************************************************************
# Sequel Pro SQL dump
# Version 4500
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: aa16v3pw7v67tv8.cn3bwky93pfs.ap-southeast-1.rds.amazonaws.com (MySQL 5.6.27-log)
# Database: ebdb
# Generation Time: 2017-01-23 12:14:23 +0000
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



# Dump of table db_countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_countries`;

CREATE TABLE `db_countries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `countryName` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `currencyCode` char(3) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `currencyRate` decimal(19,4) NOT NULL,
  `gig88Region` int(11) NOT NULL,
  PRIMARY KEY (`id`)
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



# Dump of table db_partners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_partners`;

CREATE TABLE `db_partners` (
  `partner_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `partner_name` text NOT NULL,
  `partner_stat` varchar(1) NOT NULL DEFAULT '',
  `partner_desc` text NOT NULL,
  `partner_cover` text NOT NULL,
  `partner_token` varchar(50) NOT NULL,
  `partner_country` text NOT NULL,
  `partner_state` text NOT NULL,
  `partner_city` text NOT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
  `log_day_count` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
