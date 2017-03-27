-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: yii_app
-- ------------------------------------------------------
-- Server version	5.5.49-0+deb8u1

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text NOT NULL,
  `header` varchar(200) NOT NULL,
  `author` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'test','test keyword','test desscription',NULL,'<p>Большой большой тестовый текст</p>','Заголовок',1,'test/',1488325849,1490093709),(2,'Песня в траве сидел кузнечик','','',NULL,'<p>В траве сидел кузнечик,</p>\r\n<p>В траве сидел кузнечик,</p>\r\n<p>Совсем как огуречик,</p>\r\n<p>Зелененький он был.</p>\r\n<p>Представьте себе, Представьте себе, Совсем как огуречик. Представьте себе, Представьте себе, Зелененький он был. Он ел одну лишь травку, Он ел одну лишь травку, Не трогал и козявку И с мухами дружил. Представьте себе, Представьте себе, Не трогал и козявку, Представьте себе, Представьте себе, И с мухами дружил. Но вот пришла лягушка, Но вот пришла лягушка - Прожорливое брюшко - И съела кузнеца. Представьте себе, Представьте себе, Прожорливое брюшко. Представьте себе, Представьте себе, И съела кузнеца. Не думал, не гадал он, Не думал, не гадал он, Никак не ожидал он Такого вот конца. Представьте себе, Представьте себе, Никак не ожидал он, Представьте себе, Представьте себе, Такого вот конца.</p>','Песня в траве сидел кузнечик',0,'kuznechik/',1490050529,1490173878);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1489173147),('m130524_201442_init',1489173149);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slids`
--

DROP TABLE IF EXISTS `slids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_src` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `valute` varchar(10) DEFAULT NULL,
  `text_on_button` varchar(15) DEFAULT NULL,
  `img_left` varchar(10) DEFAULT NULL,
  `img_top` varchar(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slids`
--

LOCK TABLES `slids` WRITE;
/*!40000 ALTER TABLE `slids` DISABLE KEYS */;
INSERT INTO `slids` VALUES (1,'http://gabetti.pro/upload/iblock/fd9/fd9480eebea65764c0888a9291b6060b.jpg','Квартиры и комнаты в Крыму','http://gabetti.pro/flats/',3000000,'руб.','Подобрать','0','-180px','2017-03-24 13:45:05'),(2,'http://gabetti.pro/upload/iblock/2eb/2ebfe10b559c935d7e0e65f0a88ea7e6.jpg','Новостройки в Крыму','http://gabetti.pro/flats/',NULL,'','Подобрать','','-180px','2017-03-24 13:47:14'),(3,'http://gabetti.pro/upload/iblock/d46/d4636f73e20d8de8e7bd9357f3deb1c2.jpg','Загородная недвижимость в Крыму','http://gabetti.pro/flats/',NULL,'','Подобрать','0','-180px','2017-03-24 13:48:14');
/*!40000 ALTER TABLE `slids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access` int(11) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','Дмитрий Николаевич',1,'3ZQhzA2sAOKmMupHs6wX8K36clIUJqgD','$2y$13$goSSbISpgpLUaF8yRa.INee8vEHaOf4ajJHrAEJnZZszoYtQ4yj86',NULL,'flow199@yandex.ru',10,1489173338,1489173338);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-27  9:42:24
