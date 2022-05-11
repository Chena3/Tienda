-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `member_id` bigint(10) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `join date` date NOT NULL DEFAULT sysdate(),
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `member_id_UNIQUE` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (101,'Velasquez','Carmen','283 King Steet','Seatle','206-899-6666','2020-03-08'),(102,'Ngao','LaDoris','5 Mondrany','Bratislava','586-355-8882','2020-03-08'),(103,'Nagayama','Midori','68 Via Centralate','Sao Paulo','254-852-5764','2021-06-17'),(104,'Quick-to-See','Mark','6921 King Way','Lagos','63-559-87','2020-04-07'),(105,'Ropeburn','Audry','#6 Chu Street','Hong Kong','41-559-87','2021-01-18'),(106,'Urguart','Molly','3035 Laurier','Quebec','418-512-9988','2021-01-18');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rental`
--

DROP TABLE IF EXISTS `rental`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rental` (
  `book_date` date NOT NULL DEFAULT sysdate(),
  `miembro_id` bigint(10) NOT NULL,
  `copy_id` bigint(10) NOT NULL,
  `act_ret_date` date DEFAULT NULL,
  `exp_ret_date` date DEFAULT (`book_date` + 2),
  `titulo_id` bigint(10) NOT NULL,
  PRIMARY KEY (`book_date`,`miembro_id`,`copy_id`,`titulo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rental`
--

LOCK TABLES `rental` WRITE;
/*!40000 ALTER TABLE `rental` DISABLE KEYS */;
INSERT INTO `rental` VALUES ('2021-03-03',101,1,'2021-03-04','2021-03-05',92),('2022-05-11',101,2,NULL,'2022-05-11',93),('2022-05-11',102,3,NULL,'2022-05-11',95),('2022-05-11',106,1,'2022-05-11','2022-05-11',97);
/*!40000 ALTER TABLE `rental` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `res_date` date NOT NULL,
  `member_id` bigint(10) NOT NULL,
  `title_id` bigint(10) NOT NULL,
  PRIMARY KEY (`res_date`,`member_id`,`title_id`),
  UNIQUE KEY `res_date_UNIQUE` (`res_date`),
  UNIQUE KEY `member_id_UNIQUE` (`member_id`),
  KEY `member_id_idx` (`member_id`),
  KEY `title_id_idx` (`title_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `title`
--

DROP TABLE IF EXISTS `title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `title` (
  `title_id` bigint(10) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(400) NOT NULL,
  `rating` varchar(4) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  PRIMARY KEY (`title_id`),
  UNIQUE KEY `title_id_UNIQUE` (`title_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `title`
--

LOCK TABLES `title` WRITE;
/*!40000 ALTER TABLE `title` DISABLE KEYS */;
INSERT INTO `title` VALUES (91,'Willie and Christmas too','All of Willie’s friends make a christmas list for Santa, but Willie has yet to add his own wish list.','G','CHILD','2019-10-05'),(92,'Alien Again','Yet another installment of science fiction history.Can the heroine save the planet from the alien life  from?','R','SCIFI','2019-05-19'),(93,'The Glob','A meteor crashes near a small American town and inleashes carnivorous goo in this clasissic.','NR','SCIFI','2019-08-12'),(94,'My Day Off','With a little luck and a lot ingenuity, a teenager skips scholl for a day in New York.','PG','COMEDY','2019-07-12'),(95,'Miracles on lce','A six-year-old has doubts about Santa Claus, but she discovers that miracles that miracles really do exist','PG','DRAMA','2019-09-12'),(96,'Soda Gang','After discovering a cache pf drugs, a Young couple find themselves pitted against a vicious gang','NG','ACTION','2019-06-01');
/*!40000 ALTER TABLE `title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `title_copy`
--

DROP TABLE IF EXISTS `title_copy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `title_copy` (
  `copy_id` bigint(10) NOT NULL,
  `title_id` bigint(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`copy_id`,`title_id`),
  KEY `title_id_UNIQUE` (`title_id`) USING BTREE,
  CONSTRAINT `title_id` FOREIGN KEY (`title_id`) REFERENCES `title` (`title_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `title_copy`
--

LOCK TABLES `title_copy` WRITE;
/*!40000 ALTER TABLE `title_copy` DISABLE KEYS */;
INSERT INTO `title_copy` VALUES (1,91,'AVALIBLE'),(1,92,'AVALIBLE'),(1,93,'AVALIBLE'),(1,94,'AVALIBLE'),(1,95,'AVALIBLE'),(1,96,'AVALIBLE'),(2,92,'AVALIBLE'),(2,94,'AVALIBLE'),(3,94,'RENTED');
/*!40000 ALTER TABLE `title_copy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-11 11:50:07
