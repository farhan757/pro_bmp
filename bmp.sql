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

/*Table structure for table `data_master` */

DROP TABLE IF EXISTS `data_master`;

CREATE TABLE `data_master` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nopol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nopol` (`nopol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `data_master` */

insert  into `data_master`(`id`,`nopol`,`nama_p`,`tmp_lahir`,`tgl_lahir`,`jk`,`email`,`nohp`,`alamat`,`kota`,`kode_pos`,`created_at`,`updated_at`) values (1,'POL-20210512','Farhan Nur Hilaludin','Jakarta','1994-01-20','L','','','','','',NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `log_activity_users` */

DROP TABLE IF EXISTS `log_activity_users`;

CREATE TABLE `log_activity_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aksi` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `log_activity_users` */

insert  into `log_activity_users`(`id`,`subject`,`aksi`,`url`,`method`,`ip`,`agent`,`user_id`,`created_at`,`updated_at`) values (1,'User Name  Telah Login',0,'http://localhost:8081/pro_bmp/public/login','POST','::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',1,'2021-09-14 12:25:52','2021-09-14 12:25:52'),(2,'User Name  Telah Login',0,'http://localhost:8081/pro_bmp/public/login','POST','::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',1,'2021-09-14 12:44:42','2021-09-14 12:44:42'),(3,'User Name  Telah Login',0,'http://localhost:8081/pro_bmp/public/login','POST','::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',1,'2021-09-14 14:23:11','2021-09-14 14:23:11'),(4,'User Name  Telah Login',0,'http://localhost:8081/pro_bmp/public/login','POST','::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',1,'2021-09-14 14:28:05','2021-09-14 14:28:05'),(5,'User Name  Telah Login',0,'http://localhost:8081/pro_bmp/public/login','POST','::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',1,'2021-09-14 14:28:57','2021-09-14 14:28:57');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_akses_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2021_09_14_093239_create_data_master',1),(4,'2021_09_14_093902_create_pempol_to_answer',1),(5,'2021_09_14_093925_create_question',1),(6,'2014_10_12_100000_create_password_resets_table',2),(7,'2021_06_28_070809_create_log_activity_user',2),(8,'2021_06_30_025846_update_log_activity_users',2),(9,'2021_07_02_033046_add_coloumn_table_users',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pempol_to_answer` */

DROP TABLE IF EXISTS `pempol_to_answer`;

CREATE TABLE `pempol_to_answer` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nopol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  `ya` int(11) NOT NULL,
  `tidak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pempol_to_answer` */

/*Table structure for table `question` */

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `text_ques` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `question` */

insert  into `question`(`id`,`text_ques`,`created_at`,`updated_at`) values (1,'Akan diadakan Polling terkait pemilihan BPA. Apakah anda setuju mengenai hal tersebut ?',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`nopol`,`email`,`email_verified_at`,`password`,`remember_token`,`aktif`,`created_at`,`updated_at`) values (1,'FARHAN','POL-20210512','farhan@xptlp.co.id',NULL,'$2y$10$5SU47jSzLpTGO.LnyVABQ.Pj/RcJYBYbkqEeBzXqBHcoY0u2YzyBu',NULL,'1','2021-07-02 09:16:18','2021-08-05 07:34:48'),(2,'NUR','POL-21354698','clientpc99@gmail.com',NULL,'$2y$10$/OODACvJtMC7tT9tdVFg6e4RfIg6a/s0leJG4kmqx5MoI8yHERx1e',NULL,'1','2021-07-06 03:21:51','2021-07-06 08:25:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
