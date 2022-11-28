-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bdb
-- ------------------------------------------------------
-- Server version	10.5.15-MariaDB-0+deb11u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `relts`
--

DROP TABLE IF EXISTS `relts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relts` (
  `name` varchar(36) NOT NULL,
  `street` varchar(36) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home` varchar(36) DEFAULT NULL,
  `flat` varchar(36) DEFAULT NULL,
  `price` varchar(36) DEFAULT NULL,
  `actual` varchar(36) DEFAULT NULL,
  `date` varchar(36) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relts`
--

LOCK TABLES `relts` WRITE;
/*!40000 ALTER TABLE `relts` DISABLE KEYS */;
INSERT INTO `relts` VALUES ('55','rrrrrr',14,'','','','on','26.11.22 (03:10)',NULL),('Крутой район','Районная',15,'55','55',NULL,NULL,'25.11.22 (20:02)',NULL),('Рублёвка','Рублёвка',16,'555','5','','on','26.11.22 (03:09)',NULL),('qwer','qweqw',17,'qweqwe','',NULL,NULL,'25.11.22 (20:11)',NULL),('qwerq','qweqw',18,'qweqwe','',NULL,NULL,'25.11.22 (20:16)',NULL),('qwerty','qweqw',19,'qweqwe','50',NULL,NULL,'25.11.22 (20:18)',NULL),('qwerty5','qweqw',20,'qweqwe','50',NULL,NULL,'25.11.22 (20:21)',NULL),('qwerty51','qweqw',21,'qweqwe','50',NULL,NULL,'25.11.22 (20:23)',NULL),('none','none',22,'77','88',NULL,NULL,'25.11.22 (20:24)',NULL),('noned','none',23,'77','88',NULL,NULL,'25.11.22 (20:26)',NULL),('grom','mom',24,'45','99',NULL,NULL,'25.11.22 (20:29)',NULL),('gnum','glun',25,'445','on',NULL,NULL,'25.11.22 (20:32)',NULL),('ggggg','asasdsad',26,'12','75','88888888888','on','25.11.22 (20:33)',NULL),('fdsfsdf','dgssdg',27,'34','34','658585685','on','25.11.22 (21:22)',NULL),('fdsfsdff','dgssdg',28,'34','34','658585685','on','25.11.22 (21:24)',NULL),('dfhdfh','fgjfgkgfk',29,'44','44','65u856756','on','25.11.22 (21:24)',NULL),('jfghjfgj','gjgfjgfj',30,'999','55','7477474774','on','25.11.22 (21:41)',NULL),('jfghjfgjg','gjgfjgfj',31,'999','55','7477474774','on','26.11.22 (03:11)',NULL),('jfghjfgjga','gjgfjgfj',32,'999','55','7477474774','on','26.11.22 (04:20)','https://yamal.shop/img/reltor/reltor32.jpg'),('bcvncvbncvb','vbnvbvbnvbn',33,'55','55','555555555','on','25.11.22 (21:49)','http://yamal.shop/img/reltor/reltor33.jpg'),('abc','vbnvbvbnvbn',34,'55','55','555555555','on','28.11.22 (10:35)','https://yamal.shop/img/reltor/reltor34.jpg'),('ererrerererre','bcvbcvbcv',35,'55','55','5555555555555555','on','26.11.22 (01:10)','https://yamal.shop/img/reltor/reltor35.jpg');
/*!40000 ALTER TABLE `relts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-28 10:42:36
