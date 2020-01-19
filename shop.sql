-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: shop
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Current Database: `shop`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `shop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `shop`;

--
-- Table structure for table `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_description` text NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_brand`
--

LOCK TABLES `tbl_brand` WRITE;
/*!40000 ALTER TABLE `tbl_brand` DISABLE KEYS */;
INSERT INTO `tbl_brand` VALUES (1,'Symphony','                                    Symphony Desc',1),(2,'Samsung','Samsung desc',1),(3,'IPhone','IPhone Desc<br>',1);
/*!40000 ALTER TABLE `tbl_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(4) NOT NULL COMMENT 'Published=1,Unpublished=0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

LOCK TABLES `tbl_category` WRITE;
/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
INSERT INTO `tbl_category` VALUES (1,'Computer','Computer Desc',1),(2,'Laptop','Laptop Desc',1),(3,'Phone','Phone Desc',1);
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(32) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_zipcode` varchar(20) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_country` varchar(100) NOT NULL,
  `customer_active` tinyint(4) NOT NULL COMMENT 'Active=1,Unactive=0',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_customer`
--

LOCK TABLES `tbl_customer` WRITE;
/*!40000 ALTER TABLE `tbl_customer` DISABLE KEYS */;
INSERT INTO `tbl_customer` VALUES (4,'Rostom Ali4444','rostomali4444@gmail.com','202cb962ac59075b964b07152d234b70','Comilla,Bangladesh','Comilla','0152698','014795','Bangladesh',0),(5,'Rostom Ali4','rostomali4@gmail.com','202cb962ac59075b964b07152d234b70','Comilla,Bangladesh','Comilla','0152698','014795','Bangladesh',0),(6,'Rostom Ali','rostomali@gmail.com','202cb962ac59075b964b07152d234b70','Comilla,Bangladesh','Comilla','0152698','014795','Bangladesh',0),(7,'Rostom Ali3','rostomali444@gmail.com','202cb962ac59075b964b07152d234b70','Comilla,Bangladesh','Comilla','0152698','014795','Bangladesh',0),(8,'Rostom Ali','rostomali44445@gmail.com','202cb962ac59075b964b07152d234b70','Comilla,Bangladesh','Comilla','0152698','014795','Pakistan',0);
/*!40000 ALTER TABLE `tbl_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_option`
--

DROP TABLE IF EXISTS `tbl_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_option` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_logo` varchar(100) NOT NULL,
  `site_favicon` varchar(100) NOT NULL,
  `site_copyright` varchar(255) NOT NULL,
  `site_contact_num1` varchar(100) NOT NULL,
  `site_contact_num2` varchar(100) NOT NULL,
  `site_facebook_link` varchar(100) NOT NULL,
  `site_twitter_link` varchar(100) NOT NULL,
  `site_google_plus_link` varchar(100) NOT NULL,
  `site_email_link` varchar(100) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_subtitle` varchar(255) NOT NULL,
  `contact_description` text NOT NULL,
  `company_location` varchar(255) NOT NULL,
  `company_number` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_facebook` varchar(100) NOT NULL,
  `company_twitter` varchar(100) NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_option`
--

LOCK TABLES `tbl_option` WRITE;
/*!40000 ALTER TABLE `tbl_option` DISABLE KEYS */;
INSERT INTO `tbl_option` VALUES (1,'logo1.png','logo2.png','© Right By Rostom Ali','01793589850','01793589850','https://www.facebook.com','https://www.twitter.com','https://www.plus.google.com','https://www.gmail.com','Contact Page','Contact Page Subtitle','                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         Contact Page Description\r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                ','                                                                                                                                                Here Will Be Company Location<br>                                                                              ','01793589850','https://www.gmail.com','https://www.facebook.com','https://www.twitter.com');
/*!40000 ALTER TABLE `tbl_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `actions` varchar(50) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order`
--

LOCK TABLES `tbl_order` WRITE;
/*!40000 ALTER TABLE `tbl_order` DISABLE KEYS */;
INSERT INTO `tbl_order` VALUES (2,4,7,8,11500,'Pending'),(3,4,8,9,81075,'Pending'),(8,4,9,14,402500,'Pending');
/*!40000 ALTER TABLE `tbl_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `product_image` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order_details`
--

LOCK TABLES `tbl_order_details` WRITE;
/*!40000 ALTER TABLE `tbl_order_details` DISABLE KEYS */;
INSERT INTO `tbl_order_details` VALUES (1,2,5,'Product Five',10000,1,NULL),(2,3,5,'Product Five',10000,4,NULL),(3,3,3,'Product Three',3500,3,NULL),(4,3,1,'Product One',20000,1,NULL),(5,8,4,'Product Four',350000,1,'pic3.jpg');
/*!40000 ALTER TABLE `tbl_order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(50) NOT NULL,
  `actions` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment`
--

LOCK TABLES `tbl_payment` WRITE;
/*!40000 ALTER TABLE `tbl_payment` DISABLE KEYS */;
INSERT INTO `tbl_payment` VALUES (1,'cashon','pending'),(2,'ssl','pending'),(3,'cashon','pending'),(4,'cashon','pending'),(5,'cashon','pending'),(6,'cashon','pending'),(7,'cashon','pending'),(8,'cashon','pending'),(9,'cashon','pending'),(10,'cashon','pending'),(11,'cashon','pending'),(12,'cashon','pending'),(13,'cashon','pending'),(14,'cashon','pending');
/*!40000 ALTER TABLE `tbl_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_feature` tinyint(4) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_author` int(11) NOT NULL,
  `product_view` int(11) NOT NULL DEFAULT '0',
  `published_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publication_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,'Product One','                                                                                                            There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the                                                                                                ','                                                                                                            There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc                                                                                                ','feature-pic1.png',20000,50,1,1,2,1,0,'2017-11-30 14:24:41',1),(2,'Prduct Two','                                    There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, byThere are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing orem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etcd humour, or non-characteristic words etc                                ','                                    There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etcThere are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc                                ','feature-pic2.jpg',15000,50,1,3,3,1,0,'2017-11-30 14:29:04',1),(3,'Product Three','There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. ','                                                                        There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etcThere are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc                                                                ','feature-pic3.jpg',3500,35,1,3,3,1,0,'2017-11-30 14:38:25',1),(4,'Product Four','There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. ','                                                                        There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etcThere are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etcThere are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc                                                                ','pic3.jpg',350000,150,1,2,2,1,0,'2017-11-30 14:38:57',1),(5,'Product Five','There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. ','                                    There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etcThere are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc                                ','preview-img.jpg',10000,25,1,1,2,1,0,'2017-11-30 14:40:34',1);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_shipping`
--

DROP TABLE IF EXISTS `tbl_shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_name` varchar(50) NOT NULL,
  `shipping_email` varchar(100) NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_city` varchar(100) NOT NULL,
  `shipping_country` varchar(50) NOT NULL,
  `shipping_phone` varchar(20) NOT NULL,
  `shipping_zipcode` varchar(20) NOT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_shipping`
--

LOCK TABLES `tbl_shipping` WRITE;
/*!40000 ALTER TABLE `tbl_shipping` DISABLE KEYS */;
INSERT INTO `tbl_shipping` VALUES (3,4,'Amjad Hossain','amjad@gmail.com','bangladesh','comilla','Bangladesh','555','555'),(4,4,'Amjad Hossain','amjad2@gmail.com','bangladesh','comilla','Pakistan','555','555'),(5,4,'Amjad Hossain','amjad4@gmail.com','bangladesh','comilla','Bangladesh','555','555'),(6,4,'Amjad Hossain','amjad62@gmail.com','bangladesh','comilla','Afghanistan','555','555'),(7,4,'Amjad Hossain','amjad23@gmail.com','bangladesh','comilla','Afghanistan','555','555'),(8,4,'Amjad Hossain','amjad233@gmail.com','bangladesh','comilla','Bangladesh','555','555'),(9,0,'Rostom','rostom@gmail.com','bangladesh','comilla','Bangladesh','555','555');
/*!40000 ALTER TABLE `tbl_shipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_slider`
--

LOCK TABLES `tbl_slider` WRITE;
/*!40000 ALTER TABLE `tbl_slider` DISABLE KEYS */;
INSERT INTO `tbl_slider` VALUES (1,'slider','3.jpg','http://localhost/shop/single/5',1),(2,'slider 2','1.jpg','http://localhost/shop/single/5',1),(3,'slider 3','2.jpg','http://localhost/shop/add/slider 3',1);
/*!40000 ALTER TABLE `tbl_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'admin','admin@gmail.com','202cb962ac59075b964b07152d234b70',1,'2017-11-13 18:31:36','2017-11-13 18:31:36'),(2,'editor','editor@gmail.com','202cb962ac59075b964b07152d234b70',2,'2017-11-13 18:31:36','2017-11-13 18:31:36'),(3,'author','author@gmail.com','202cb962ac59075b964b07152d234b70',3,'2017-11-13 18:31:36','2017-11-13 18:31:36');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'Admin'),(2,'Author'),(3,'Editor');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-19 14:50:05
