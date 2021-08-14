-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: 10119269_kepegawaian
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `data_absen`
--

DROP TABLE IF EXISTS `data_absen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_absen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `masuk` int(5) NOT NULL DEFAULT 0,
  `izin` int(5) NOT NULL DEFAULT 0,
  `alpha` int(5) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `nip` (`nip`),
  CONSTRAINT `data_absen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_absen`
--

LOCK TABLES `data_absen` WRITE;
/*!40000 ALTER TABLE `data_absen` DISABLE KEYS */;
INSERT INTO `data_absen` VALUES (1,'00001',20,5,0);
/*!40000 ALTER TABLE `data_absen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_gaji`
--

DROP TABLE IF EXISTS `data_gaji`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah_gaji` int(12) NOT NULL DEFAULT 0,
  `bonus` int(12) NOT NULL DEFAULT 0,
  `potongan` int(12) NOT NULL DEFAULT 0,
  `total_gaji` int(12) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `nip` (`nip`),
  CONSTRAINT `data_gaji_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_gaji`
--

LOCK TABLES `data_gaji` WRITE;
/*!40000 ALTER TABLE `data_gaji` DISABLE KEYS */;
INSERT INTO `data_gaji` VALUES (1,'00001','2021-06-07','',150000000,1800000,0,16800000);
/*!40000 ALTER TABLE `data_gaji` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_golongan`
--

DROP TABLE IF EXISTS `data_golongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_golongan` (
  `kodegolongan` varchar(4) NOT NULL,
  `nama_golongan` varchar(50) NOT NULL,
  `tunjangan_anak` int(12) NOT NULL DEFAULT 0,
  `tunjangan_makan` int(12) NOT NULL DEFAULT 0,
  PRIMARY KEY (`kodegolongan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_golongan`
--

LOCK TABLES `data_golongan` WRITE;
/*!40000 ALTER TABLE `data_golongan` DISABLE KEYS */;
INSERT INTO `data_golongan` VALUES ('A001','Menikah dan mempunyai anak',500000,250000),('A002','Menikah dan belum mempunyai anak',0,250000),('B001','Belum Menikah dan belum mempunyai anak',0,250000);
/*!40000 ALTER TABLE `data_golongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_jabatan`
--

DROP TABLE IF EXISTS `data_jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_jabatan` (
  `kodejabatan` varchar(4) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `gaji_pokok` int(12) NOT NULL DEFAULT 0,
  PRIMARY KEY (`kodejabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_jabatan`
--

LOCK TABLES `data_jabatan` WRITE;
/*!40000 ALTER TABLE `data_jabatan` DISABLE KEYS */;
INSERT INTO `data_jabatan` VALUES ('DRTU','Direktur',15000000);
/*!40000 ALTER TABLE `data_jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_lembur`
--

DROP TABLE IF EXISTS `data_lembur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_lembur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `tgl_lembur` date NOT NULL,
  `lembur` int(5) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `nip` (`nip`),
  CONSTRAINT `data_lembur_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_lembur`
--

LOCK TABLES `data_lembur` WRITE;
/*!40000 ALTER TABLE `data_lembur` DISABLE KEYS */;
INSERT INTO `data_lembur` VALUES (1,'00001','2021-05-03',1);
/*!40000 ALTER TABLE `data_lembur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pegawai`
--

DROP TABLE IF EXISTS `data_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskel` enum('Pria','Wanita') NOT NULL,
  `Tempatlahir` varchar(100) NOT NULL,
  `Tanggallahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `statusnikah` enum('Menikah','Belum Menikah') NOT NULL,
  `alamat` text NOT NULL,
  `kodejabatan` varchar(4) NOT NULL,
  `kodegolongan` varchar(4) NOT NULL,
  PRIMARY KEY (`nip`),
  KEY `kodejabatan_p` (`kodejabatan`),
  KEY `kodegologan_p` (`kodegolongan`),
  CONSTRAINT `data_pegawai_ibfk_1` FOREIGN KEY (`kodejabatan`) REFERENCES `data_jabatan` (`kodejabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `data_pegawai_ibfk_2` FOREIGN KEY (`kodegolongan`) REFERENCES `data_golongan` (`kodegolongan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pegawai`
--

LOCK TABLES `data_pegawai` WRITE;
/*!40000 ALTER TABLE `data_pegawai` DISABLE KEYS */;
INSERT INTO `data_pegawai` VALUES ('00001','Zaenal Abidin','Pria','Bandung','1974-11-10','Islam','Menikah','Jl. Saluyu 3 No. 33','DRTU','A001');
/*!40000 ALTER TABLE `data_pegawai` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER update_alamat_pegawai
    BEFORE UPDATE 
    ON data_pegawai
    FOR EACH ROW 
BEGIN
    INSERT INTO log_pegawai
    set nip = OLD.nip,
    alamat_lama=old.alamat,
    alamat_baru=new.alamat,
    waktu = NOW(); 
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `log_pegawai`
--

DROP TABLE IF EXISTS `log_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_pegawai` (
  `id_log` int(10) NOT NULL AUTO_INCREMENT,
  `nip` int(10) DEFAULT NULL,
  `alamat_lama` varchar(100) DEFAULT NULL,
  `alamat_baru` varchar(100) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_pegawai`
--

LOCK TABLES `log_pegawai` WRITE;
/*!40000 ALTER TABLE `log_pegawai` DISABLE KEYS */;
INSERT INTO `log_pegawai` VALUES (1,1,'Jl. Sejahtera No.56','Jl. Saluyu 3 No. 33','2021-08-14');
/*!40000 ALTER TABLE `log_pegawai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 20:33:47
