-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: id6435364_system
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

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
-- Table structure for table `product_catalog`
--

DROP TABLE IF EXISTS `product_catalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `amoung` int(11) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_catalog`
--

LOCK TABLES `product_catalog` WRITE;
/*!40000 ALTER TABLE `product_catalog` DISABLE KEYS */;
INSERT INTO `product_catalog` VALUES (2,'Продам фиалки','iphone360_2005.jpg',1500,85,'Продам фиалки.Сам выращивал.'),(3,'АК 47','8480-1370419601-gta-sa2013-06-0513-44-03-663.jpg',50000,13,'Калибр	7,62 мм	7,62 мм\r\nПрименяемый патрон	7,62х39 мм	7,62х39 мм\r\nДлина	870 мм	868 мм\r\nДлина ствола	415 мм	415 мм\r\nМасса (без патронов)	4,3 кг	3,9 кг\r\nМасса (с патронами)	4,876 кг	4,476 кг\r\nПрицельна дальность стрельбы	800 м	800 м\r\nТемп стрельбы	600 в/м	600 в/м\r\nСкорострельность очередями	400 в/м	400 в/м\r\n Скорострельность одиночным огнем	90-100 в/м	90-100 в/м\r\nНачальная скорость полета пули	715 м/с	715 м/с\r\nЕмкость магазина	30 патронов	30 патронов'),(5,'Бейсбольная бита','1qa.jpg',3000,50,'Исключительно для бейсбола'),(20,'Длинный шарик','image.599xauto-1.jpg',5000,25,'Вашей девушке понравится'),(21,'Dance-car','maxresdefault.jpg',500000,2,'Будет весело'),(23,'Носки','3772373.jpg',8000,1,'Летние ношенные качественные.Пробег 500м.Состояние отличное .Торг уместен.Бартер не предлагать.');
/*!40000 ALTER TABLE `product_catalog` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-10 17:06:56
