-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ttcabinet_db
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.12.04.1

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
-- Table structure for table `analysts`
--

DROP TABLE IF EXISTS `analysts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analysts` (
  `id` int(11) NOT NULL,
  `login` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analysts`
--

LOCK TABLES `analysts` WRITE;
/*!40000 ALTER TABLE `analysts` DISABLE KEYS */;
/*!40000 ALTER TABLE `analysts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analytics`
--

DROP TABLE IF EXISTS `analytics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analytics` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(2000) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analytics`
--

LOCK TABLES `analytics` WRITE;
/*!40000 ALTER TABLE `analytics` DISABLE KEYS */;
INSERT INTO `analytics` VALUES (15,'New Analytics','07-31-2013','5'),(16,'Test new Post','1970-01-01','5'),(17,'Test new Post\n2','1970-01-01','5'),(18,'New Analytics with SMS TEST \n\nSergey ','2013-07-31','5'),(19,'Рубль падает, продавать!!!1','2013-08-01','18'),(20,'Рубль падает, продавать!!!1','2013-08-01','18'),(21,'0','0','18');
/*!40000 ALTER TABLE `analytics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ofis` int(255) NOT NULL,
  `datareg` varchar(1000) NOT NULL,
  `podpiska` int(10) NOT NULL,
  `tel` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'ivanov','202cb962ac59075b964b07152d234b70','Иван',1,'20.06.2013',1,'+7-911-555-74-85','ivanov@mail.ru',0),(2,'petrov','e10adc3949ba59abbe56e057f20f883e','Петров',0,'28.06.2013',0,'+7-911-888-85-85','ivanov@mail.ru',0),(3,'richard','e10adc3949ba59abbe56e057f20f883e','dsfsd',0,'0',0,'45454','info@pc35.ru',0),(4,'richardtest','827ccb0eea8a706c4c34a16891f84e7b','test',0,'17.07.2013',0,'1111111','test@gmail.com',0),(15,'test','test','',0,'18-07-2013',0,'2381859','owchzzz@gmail.com',1),(16,'test3','test','',0,'18-07-2013',0,'79114411118','makhtanov@pc35.ru',0);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'Director','Director'),(3,'Client','Client'),(4,'Manager','Manager');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offices` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `plan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offices`
--

LOCK TABLES `offices` WRITE;
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
INSERT INTO `offices` VALUES (2,'Internet Office','Moscow','0','test',15),(3,'Moscow Main Office','Moscow','0','',0),(4,'Moscow Second Branch','Moscow','','',0),(5,'Moscow Third Branch','Moscow','','',0);
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `page` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'<h2>Зачем нужна услуга Trade Expert?</h2>\r\n<p>Aliquam tincidunt ullamcorper mollis. Curabitur quis lorem neque. Nam ante dui, ultricies ut aliquet sit amet, condimentum a mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ultrices odio vitae lacus porttitor viverra.</p>\r\n<h2>Как я буду получать рекомендации?</h2>\r\n<p>Aliquam tincidunt ullamcorper mollis. Curabitur quis lorem neque. Nam ante dui, ultricies ut aliquet sit amet, condimentum a mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ultrices odio vitae lacus porttitor viverra. Phasellus ornare ut urna feugiat sagittis. Proin dignissim sapien ligula, vel consequat magna accumsan quis. </p>\r\n<h2>Что будет в рекомендациях?</h2>\r\n<p>Aliquam tincidunt ullamcorper mollis. Curabitur quis lorem neque. Nam ante dui, ultricies ut aliquet sit amet, condimentum a mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ultrices odio vitae lacus porttitor viverra. Nam posuere, elit quis accumsan volutpat, orci justo auctor dolor, ac gravida sapien libero eu metus. Nullam ut est commodo, ornare orci et, sollicitudin dolor. Praesent eget tempus velit, nec condimentum lorem. </p>      ','home');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recommendations`
--

DROP TABLE IF EXISTS `recommendations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recommendations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Heading` text COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `BuySell` double NOT NULL,
  `DateUpdated` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recommendations`
--

LOCK TABLES `recommendations` WRITE;
/*!40000 ALTER TABLE `recommendations` DISABLE KEYS */;
INSERT INTO `recommendations` VALUES (49,'Test 4','test',10.15,'2013-07-19');
/*!40000 ALTER TABLE `recommendations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_info`
--

DROP TABLE IF EXISTS `site_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_info`
--

LOCK TABLES `site_info` WRITE;
/*!40000 ALTER TABLE `site_info` DISABLE KEYS */;
INSERT INTO `site_info` VALUES (1,'0832-2100-2012'),(2,'test@test.com'),(3,'richard.abear2'),(4,'Office Hours From <br>\n12:00-5:00PM');
/*!40000 ALTER TABLE `site_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_history`
--

DROP TABLE IF EXISTS `subscription_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscription_history` (
  `SId` int(11) NOT NULL,
  `OfficeID` int(11) NOT NULL,
  `SubscriptionAmt` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_history`
--

LOCK TABLES `subscription_history` WRITE;
/*!40000 ALTER TABLE `subscription_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support_questions`
--

DROP TABLE IF EXISTS `support_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `support_questions` (
  `SId` int(11) NOT NULL AUTO_INCREMENT,
  `Office` text COLLATE utf8_unicode_ci NOT NULL,
  `Message` text COLLATE utf8_unicode_ci NOT NULL,
  `State` int(11) NOT NULL COMMENT '0-Unviewed 1-Unresolved 2-Resolved',
  `ClientID` int(11) NOT NULL COMMENT 'ID of Client that posted problem',
  `Header` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`SId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support_questions`
--

LOCK TABLES `support_questions` WRITE;
/*!40000 ALTER TABLE `support_questions` DISABLE KEYS */;
INSERT INTO `support_questions` VALUES (1,'test','My head hurts',0,16,'Complaint');
/*!40000 ALTER TABLE `support_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `TransactionId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Date` date NOT NULL,
  `CardType` text COLLATE utf8_unicode_ci NOT NULL,
  `CardHolder` text COLLATE utf8_unicode_ci NOT NULL,
  `Amt` int(11) NOT NULL,
  PRIMARY KEY (`TransactionId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,7,'0000-00-00','Visa','Richard Abear',5),(2,5,'0000-00-00','Visa','Richard Abear',12),(3,5,'0000-00-00','Visa','Richard Abear',12),(4,16,'0000-00-00','Visa','Richard Abear',12),(5,16,'0000-00-00','Visa','fghfhdf',1),(6,17,'0000-00-00','Visa','Richard Abear',15),(7,17,'2029-07-20','Visa','Mr Smith',5),(8,17,'2029-07-20','Visa','Richard Abear',10),(9,17,'2013-07-29','Visa','My Mom',5);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `podpiska` int(11) NOT NULL DEFAULT '0',
  `ofis` text NOT NULL,
  `created_on` date NOT NULL,
  `credit` int(11) NOT NULL,
  `tel` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'\0\0','administrator','e10adc3949ba59abbe56e057f20f883e','9462e8eee0','admin@admin.com','',NULL,NULL,NULL,1374501929,1,'Administrator',' ','ADMIN','0',1,'0','0000-00-00',0,'');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (3,1,1),(4,1,2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zilla_users`
--

DROP TABLE IF EXISTS `zilla_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zilla_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `group` int(11) NOT NULL COMMENT '0 - none-active, 1 - administrator, 3 - user/customer, 4 - manager, 5 - director  ',
  `userlevel` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `tel` text NOT NULL,
  `podpiska` int(11) NOT NULL,
  `podpiska_days` int(11) NOT NULL,
  `confirmation_code` text NOT NULL,
  `name` text NOT NULL,
  `company` text NOT NULL,
  `credit` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zilla_users`
--

LOCK TABLES `zilla_users` WRITE;
/*!40000 ALTER TABLE `zilla_users` DISABLE KEYS */;
INSERT INTO `zilla_users` VALUES (1,'test','e10adc3949ba59abbe56e057f20f883e','test@test.com',4,0,'0000-00-00','',1,0,'','Micheal Abear','Internet Office',0,0),(5,'makhtanov','e10adc3949ba59abbe56e057f20f883e','owchzzz@gmail.com',1,1,'0000-00-00','0',0,0,'2883832473222937671074035491108817801412458852631949959116186711463417889902791698342807169232157718841626878318962501750037568121323295018888257143955873641357104498396822193173513480217728599411495589951','','Internet Office',12,0),(16,'client','c26be8aaf53b15054896983b43eb6a65','richard.abear@yahoo.com',3,0,'2013-07-26','+7911441881118',0,24,'','Richard Abear','Internet Office',0,0),(17,'testclient','e10adc3949ba59abbe56e057f20f883e','richard.abear@yahoo.com',3,0,'2013-07-29','2981859',19,24,'','Richard Abear','Internet Office',0,0),(18,'olim','e10adc3949ba59abbe56e057f20f883e','info@trade-expert.pro',1,0,'2013-08-01','+79114411118',0,0,'','','',0,0),(19,'petrov','14e1b600b1fd579f47433b88e8d85291','info@card-wm.ru',3,0,'2013-08-01','+79115000045',1,0,'','Петров','Moscow Main Office',0,0),(20,'baninnoy','80b1a605584920c21b44d750bff2ae29','baninnoy@yahoo.com',1,0,'2013-08-02','+639328900245',0,0,'','','',0,0);
/*!40000 ALTER TABLE `zilla_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-08-02 17:52:00
