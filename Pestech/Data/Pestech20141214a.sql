CREATE DATABASE  IF NOT EXISTS `myphytos_pes` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `myphytos_pes`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: myphytos_pes
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `conductorsizingcalculations`
--

DROP TABLE IF EXISTS `conductorsizingcalculations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conductorsizingcalculations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL DEFAULT '0',
  `rvikvrms` int(11) NOT NULL DEFAULT '0',
  `scxrratio` int(11) NOT NULL DEFAULT '0',
  `issccurrt` int(11) NOT NULL DEFAULT '0',
  `ssssscurrt` int(11) NOT NULL DEFAULT '0',
  `dosccurrt` int(11) NOT NULL DEFAULT '0',
  `dorsccurrt` int(11) NOT NULL DEFAULT '0',
  `sysfreq` int(11) NOT NULL DEFAULT '0',
  `rccratg` int(11) NOT NULL DEFAULT '0',
  `noppwires` int(11) DEFAULT '0',
  `spanlgth` int(11) NOT NULL DEFAULT '0',
  `hocondctr` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ipspacg` decimal(10,1) DEFAULT '0.0',
  `acsvgradt` int(11) NOT NULL DEFAULT '0',
  `make` varchar(255) DEFAULT NULL,
  `coorigin` varchar(255) DEFAULT NULL,
  `toalloy` varchar(255) DEFAULT NULL,
  `ccname` varchar(255) DEFAULT NULL,
  `edcrocond` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `shocmatrl` int(11) NOT NULL DEFAULT '0',
  `docondmatrl` int(11) NOT NULL DEFAULT '0',
  `comatrl` decimal(10,7) NOT NULL DEFAULT '0.0000000',
  `tcorestnce` decimal(10,5) NOT NULL DEFAULT '0.00000',
  `ccsectn` int(11) NOT NULL DEFAULT '0',
  `overalldiam` decimal(10,1) NOT NULL DEFAULT '0.0',
  `dbscctrs` int(11) NOT NULL DEFAULT '0',
  `mpulength` decimal(10,3) NOT NULL DEFAULT '0.000',
  `ambtemp` int(11) NOT NULL DEFAULT '0',
  `fctemp` int(11) NOT NULL DEFAULT '0',
  `ctabeginosc` int(11) NOT NULL DEFAULT '0',
  `ctaendosc` int(11) NOT NULL DEFAULT '0',
  `cwindspeed` decimal(10,1) NOT NULL DEFAULT '0.0',
  `sracoeff` decimal(10,1) NOT NULL DEFAULT '0.0',
  `iosradtn` int(11) NOT NULL DEFAULT '0',
  `ecoeffirtbb` decimal(10,1) NOT NULL DEFAULT '0.0',
  `ymoelas` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `projid1` (`projectid`),
  CONSTRAINT `projid1` FOREIGN KEY (`projectid`) REFERENCES `projects` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conductorsizingcalculations`
--

LOCK TABLES `conductorsizingcalculations` WRITE;
/*!40000 ALTER TABLE `conductorsizingcalculations` DISABLE KEYS */;
/*!40000 ALTER TABLE `conductorsizingcalculations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isactive`
--

DROP TABLE IF EXISTS `isactive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isactive` (
  `Id` int(11) NOT NULL,
  `isactivedescription` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isactive`
--

LOCK TABLES `isactive` WRITE;
/*!40000 ALTER TABLE `isactive` DISABLE KEYS */;
INSERT INTO `isactive` VALUES (0,'No'),(1,'Yes');
/*!40000 ALTER TABLE `isactive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `levelname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `levelname` (`levelname`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` VALUES (5,'Administrator'),(4,'Approver'),(3,'Checker'),(2,'Designer'),(1,'User');
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(255) NOT NULL DEFAULT '',
  `parentId` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `menuParentId` (`parentId`),
  CONSTRAINT `menuParentId` FOREIGN KEY (`parentId`) REFERENCES `menu` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Home',NULL,'../general/'),(2,'Admin',NULL,NULL),(3,'Users',2,'../admin/users.php'),(4,'Project Types',2,'../admin/projecttypes.php'),(5,'Projects',2,'../admin/projects.php');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `projecttype` int(11) NOT NULL DEFAULT '0',
  `projectname` varchar(255) NOT NULL DEFAULT '',
  `substation` varchar(255) DEFAULT NULL,
  `projectdescription` text,
  `drawingnumber` varchar(255) DEFAULT NULL,
  `revision` varchar(255) DEFAULT NULL,
  `designedby` int(11) DEFAULT NULL,
  `checkedby` int(11) DEFAULT NULL,
  `approvedby` int(11) DEFAULT NULL,
  `documentdate` date DEFAULT NULL,
  `projectyear` int(11) DEFAULT NULL,
  `isactive` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`),
  KEY `projprojecttype` (`projecttype`),
  KEY `projdesignedby` (`designedby`),
  KEY `projcheckedby` (`checkedby`),
  KEY `projapprovedby` (`approvedby`),
  KEY `projisactive` (`isactive`),
  CONSTRAINT `projapprovedby` FOREIGN KEY (`approvedby`) REFERENCES `users` (`Id`),
  CONSTRAINT `projcheckedby` FOREIGN KEY (`checkedby`) REFERENCES `users` (`Id`),
  CONSTRAINT `projdesignedby` FOREIGN KEY (`designedby`) REFERENCES `users` (`Id`),
  CONSTRAINT `projisactive` FOREIGN KEY (`isactive`) REFERENCES `isactive` (`Id`),
  CONSTRAINT `projprojecttype` FOREIGN KEY (`projecttype`) REFERENCES `projecttypes` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,1,'Murum Junction 275/33kV Substation','Murum Junction 275/33kV Substation','275kV, 2000A CONDUCTOR SIZING CALCULATION (CONDUCTOR DETAILS)','PLS090054-E-CAL-CO-0001-1','C',5,6,7,'2014-12-14',2014,1),(2,2,'Sample Project 1','Sample Substation 1',NULL,NULL,NULL,5,6,7,NULL,2014,1);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projecttypes`
--

DROP TABLE IF EXISTS `projecttypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projecttypes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(255) NOT NULL DEFAULT '',
  `typedescription` text,
  `isactive` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `typename` (`typename`),
  KEY `projtypeisactive` (`isactive`),
  CONSTRAINT `projtypeisactive` FOREIGN KEY (`isactive`) REFERENCES `isactive` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projecttypes`
--

LOCK TABLES `projecttypes` WRITE;
/*!40000 ALTER TABLE `projecttypes` DISABLE KEYS */;
INSERT INTO `projecttypes` VALUES (1,'Conductor Sizing Calculations','1. Introduction 		\r\n		\r\nThis technical calculation contains the conductor dimensioning details which include the following:- 		\r\n	i. 	Continuous Current Carrying Capacity \r\n	ii. 	Corona Effect \r\n	iii.	Thermal Short Time Rating \r\n		\r\n2. Standard- 		\r\n		\r\n	i. 	IEC 1597:1995 Calculation methods for Stranded bare conductors\r\n	ii. 	IEC 60865- Short Circuit Currents Calculation of effects\r\n	iii.	ABB Handbook on Switchgear Manual \r\n',1),(2,'Sample Project Type 1','Some descriptions here',1),(3,'Sample Project Type 2','Some descriptions here',1);
/*!40000 ALTER TABLE `projecttypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `telno` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `isactive` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `level` (`level`),
  KEY `isactive2` (`isactive`),
  CONSTRAINT `isactive2` FOREIGN KEY (`isactive`) REFERENCES `isactive` (`Id`),
  CONSTRAINT `level` FOREIGN KEY (`level`) REFERENCES `levels` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'admin','Admin','Admin','b7e283a09511d95d6eac86e39e7942c0','pestech@flameaters.com','60146252792',5,1),(5,'TestDesigner','Test','Designer','b7e283a09511d95d6eac86e39e7942c0','designer@flameaters.com',NULL,2,1),(6,'TestChecker','Test','Checker','b7e283a09511d95d6eac86e39e7942c0','checker@flameaters.com',NULL,3,1),(7,'TestApprover','Test','Approver','b7e283a09511d95d6eac86e39e7942c0','approver@flameaters.com',NULL,4,1),(8,'TestUser','Test','User','b7e283a09511d95d6eac86e39e7942c0','user@flameaters.com',NULL,1,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'myphytos_pes'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-14 18:35:22
