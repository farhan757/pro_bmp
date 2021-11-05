/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.14-MariaDB : Database - bmp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bmp` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bmp`;

/*Table structure for table `kandidat` */

DROP TABLE IF EXISTS `kandidat`;

CREATE TABLE `kandidat` (
  `kandidat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_kandidat` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `kode_wil` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kandidat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kandidat` */

insert  into `kandidat`(`kandidat_id`,`nama_kandidat`,`visi`,`misi`,`photo`,`kode_wil`) values (1,'Kandidat 1','Menjadi yang terbaik','Menjadi no 1 didunia','../storage/ashilla.jpg','JKT'),(2,'Kandidat 2','Menjadi yang terbaik','Menjadi no 1 didunia','../storage/ashilla.jpg','JKT'),(6,'Kandidat 3','Menjadi yang terbaik','Menjadi no 1 didunia','../storage/ashilla.jpg','PLB'),(7,'Kandidat 4','Menjadi yang terbaik','Menjadi no 1 didunia','../storage/ashilla.jpg','PLB');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
