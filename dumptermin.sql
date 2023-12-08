-- MySQL dump 10.13  Distrib 5.7.44, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: teknotoppen
-- ------------------------------------------------------
-- Server version	11.1.2-MariaDB

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
-- Table structure for table `bestilling`
--

DROP TABLE IF EXISTS `bestilling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bestilling` (
  `idBestilling` int(11) NOT NULL AUTO_INCREMENT,
  `ProduktID` int(11) NOT NULL,
  `idKunde` int(11) NOT NULL,
  `antall` varchar(45) NOT NULL,
  PRIMARY KEY (`idBestilling`),
  KEY `fk_Bestilling_Kunde1_idx` (`ProduktID`),
  CONSTRAINT `fk_Bestilling_Kunde1` FOREIGN KEY (`ProduktID`) REFERENCES `kunde` (`idKunde`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bestilling`
--

LOCK TABLES `bestilling` WRITE;
/*!40000 ALTER TABLE `bestilling` DISABLE KEYS */;
INSERT INTO `bestilling` VALUES (1,1,2,'1');
/*!40000 ALTER TABLE `bestilling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kunde`
--

DROP TABLE IF EXISTS `kunde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kunde` (
  `idKunde` int(11) NOT NULL AUTO_INCREMENT,
  `brukernavn` varchar(45) NOT NULL,
  `epost` varchar(45) NOT NULL,
  `leveringsadresse` varchar(45) NOT NULL,
  `passord` varchar(255) NOT NULL,
  PRIMARY KEY (`idKunde`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kunde`
--

LOCK TABLES `kunde` WRITE;
/*!40000 ALTER TABLE `kunde` DISABLE KEYS */;
INSERT INTO `kunde` VALUES (1,'Henri','teknotoppen@gmail.com','kabelgata','12345'),(2,'Olav','standard kontaktinformasjon','standard leveringsadresse','$2y$10$.GoEYxA5xvWKSPTQfIQxc.CSmOxOqeEbXJQemm0c7b3FBLA2mGVju'),(3,'Henri','','','$2y$10$pl7tS0txx2fDWhzsgzxR4Ozo0/iCydUzUnRXW/Mjr1Dt5I5kgm2N.'),(4,'Olav','','','$2y$10$Qg2L1q.3jYyax.KPlagkruYQ7Ko6te4rds9Or542B.L4Jq5UnFb4S'),(5,'Olav','','','$2y$10$INV5v4g8ArAFG9QURKpSLe9a8rQ6umuFzQAvMNXdH/RSBKG1DGxoO'),(6,'Henri','henri123@gmail.com','kabelgata123','$2y$10$qc7dEN5rHuOC94Rs1cY94OSDdZLE7DQXwwQEZ.DKrfODjk4v5MBnu'),(7,'Henri','henri123@gmail.com','kabelgata123','$2y$10$O.pDjQvSDIZQikAw27EXf.QEngz8VqTI0AFtsTXUOfV0u8h5y6JAm'),(8,'Henri','henri123@gmail.com','kabelgata123','$2y$10$rWiII8dahtja0E0B.czXoeeecVAhsM1TFSOWCyBqbEY5wLP2r0MtW'),(9,'Aleksander','aleks@gmail.com','kabel gata12','$2y$10$QwESA73Mdyl186At2NZJ.uNzJlH2HU3ddY0w0OV1x94CgHr58D3DK'),(10,'Aleksander','aleks@gmail.com','kabel gata12','$2y$10$FMEylOy56wpPP8mpwYd5auZG95CG3DayqQ7d88LmjIlgjgPj3CoBO'),(11,'Henri','henri12345@gmail.com','kabelgta123\r\n','$2y$10$HJxkt7pXS/xPMJn6WnzN1.072.3dSEjDL69gRccBDfgbYJJIiZxhm'),(12,'Henri','12345678@gmail.com','123 gate\r\n','$2y$10$ypte1mFIOYYgAS2.EhVxI.MoUgs3dX2TA65VXWWyJo1l0WDhz19JK');
/*!40000 ALTER TABLE `kunde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produkt`
--

DROP TABLE IF EXISTS `produkt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produkt` (
  `ProduktID` int(11) NOT NULL AUTO_INCREMENT,
  `navn` varchar(255) NOT NULL,
  `type` varchar(45) NOT NULL,
  `levetid` varchar(45) NOT NULL,
  `Bilde` varchar(45) DEFAULT NULL,
  `Pris` varchar(45) NOT NULL,
  PRIMARY KEY (`ProduktID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Produkt\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produkt`
--

LOCK TABLES `produkt` WRITE;
/*!40000 ALTER TABLE `produkt` DISABLE KEYS */;
INSERT INTO `produkt` VALUES (1,'JBL hodetelefon','hodetelefon','48 timer','hode.jpg','300kr'),(2,'Surface Laptop 5','Microsoft','12 timer','laptop.jpg','13000kr'),(8,'Apple MacBook pro 13','Apple','14 timer','macbook.jpg','19000kr'),(9,'Airpods (3gen)','Apple','20 timer','airpod.jpg','2000kr'),(10,'Lenovo thinkpad','E14 gen 5','20 timer','lenovo.jpg','6500kr'),(11,'Samsung','Galaxy s22','20 timer','samsung.jpg','8400kr'),(12,'Logitech gaming headsett','G433','20 timer','logitech.jpg','1300kr'),(13,'Playstation 5','Standard editon','20 timer','ps5.jpg','6800kr');
/*!40000 ALTER TABLE `produkt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produkt_i_bestilling-tabell`
--

DROP TABLE IF EXISTS `produkt_i_bestilling-tabell`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produkt_i_bestilling-tabell` (
  `Bestilling_idBestilling` int(11) NOT NULL,
  `Antall` varchar(45) NOT NULL,
  `produktIdnummer` int(11) NOT NULL,
  PRIMARY KEY (`Bestilling_idBestilling`,`produktIdnummer`),
  KEY `fk_Bestilling_has_Kunde_Bestilling1_idx` (`Bestilling_idBestilling`),
  KEY `fk_Produkt_i_bestilling-tabell_Produkt1_idx` (`produktIdnummer`),
  CONSTRAINT `fk_Bestilling_has_Kunde_Bestilling1` FOREIGN KEY (`Bestilling_idBestilling`) REFERENCES `bestilling` (`idBestilling`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produkt_i_bestilling-tabell_Produkt1` FOREIGN KEY (`produktIdnummer`) REFERENCES `produkt` (`ProduktID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produkt_i_bestilling-tabell`
--

LOCK TABLES `produkt_i_bestilling-tabell` WRITE;
/*!40000 ALTER TABLE `produkt_i_bestilling-tabell` DISABLE KEYS */;
/*!40000 ALTER TABLE `produkt_i_bestilling-tabell` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-08  9:50:01
