/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 5.6.21-log : Database - db_lppm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_lppm` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_lppm`;

/*Table structure for table `tb_dosen` */

DROP TABLE IF EXISTS `tb_dosen`;

CREATE TABLE `tb_dosen` (
  `id_dsn` varchar(20) NOT NULL,
  `dsn_nip` varchar(30) NOT NULL,
  `dsn_nama` varchar(200) NOT NULL,
  `dsn_usr` varchar(100) NOT NULL,
  `dsn_pass` varchar(100) NOT NULL,
  `dsn_tipe` tinyint(1) NOT NULL,
  `dsn_jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_dsn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_dosen` */

insert  into `tb_dosen`(`id_dsn`,`dsn_nip`,`dsn_nama`,`dsn_usr`,`dsn_pass`,`dsn_tipe`,`dsn_jabatan`) values ('12340','12340','fitri','fitri','fitri',0,''),('12345','12345','bagus','bagus','bagus',0,'ketua'),('12346','12346','rahma','rahma','rahma',0,'wakil'),('12347','12347','dani','dani','dani',0,''),('12348','12348','farhan','farhan','farhan',0,''),('12349','12349','hasna','hasna','hasna',0,''),('12441','12442','sasa','sasa','sasa',0,''),('12442','12442','lala','lala','lala',0,''),('12443','12443','nur','nur','nur',0,''),('23456','23456','taufiq','taufiq','taufiq',0,'wakil');

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `id_nilai` varchar(20) NOT NULL,
  `id_seminar` varchar(20) NOT NULL,
  `noNilai` int(11) NOT NULL,
  `kriteriaNilai` text,
  `bobotNilai` int(11) DEFAULT NULL,
  `skor` int(11) NOT NULL,
  `nilai` decimal(10,0) NOT NULL,
  `nHuruf` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `id_seminar` (`id_seminar`),
  CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `tb_seminar` (`id_seminar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai` */

/*Table structure for table `tb_penelitian` */

DROP TABLE IF EXISTS `tb_penelitian`;

CREATE TABLE `tb_penelitian` (
  `id_penelitian` varchar(20) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `id_dsn` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `file_penelitian` varchar(11) NOT NULL,
  `judul_penelitian` varchar(11) NOT NULL,
  `desk_penelitian` varchar(500) NOT NULL,
  `stat_penelitian` tinyint(1) NOT NULL DEFAULT '0',
  `tgl_persetujuan` datetime NOT NULL,
  `kategori_penelitian` varchar(200) NOT NULL,
  PRIMARY KEY (`id_penelitian`),
  KEY `id_dsn` (`id_dsn`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tb_penelitian_ibfk_1` FOREIGN KEY (`id_dsn`) REFERENCES `tb_dosen` (`id_dsn`),
  CONSTRAINT `tb_penelitian_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_penelitian` */

insert  into `tb_penelitian`(`id_penelitian`,`tgl_upload`,`id_dsn`,`id_user`,`file_penelitian`,`judul_penelitian`,`desk_penelitian`,`stat_penelitian`,`tgl_persetujuan`,`kategori_penelitian`) values ('11111','2015-05-19 21:09:07','12345','1222','aku','aku','1',0,'2015-05-19 21:09:23','sdsdf'),('11112','2015-05-27 08:55:32','12340','1224','hasil','hasil','hasil',0,'0000-00-00 00:00:00',''),('11113','2015-05-28 08:56:35','12345','1225','jadi','jadi','jadi',0,'0000-00-00 00:00:00',''),('11114','2015-05-29 08:57:34','12346','1226','kalau','kalau','kalau',0,'0000-00-00 00:00:00',''),('11115','2015-05-31 08:58:49','12347','1227','jika','jika','jika',0,'0000-00-00 00:00:00',''),('22222','2015-05-21 14:24:09','23456','1223','lalal','lalal','lalal',1,'2015-05-21 14:24:47','lalala');

/*Table structure for table `tb_seminar` */

DROP TABLE IF EXISTS `tb_seminar`;

CREATE TABLE `tb_seminar` (
  `id_seminar` varchar(20) NOT NULL,
  `id_dsn` varchar(20) NOT NULL,
  `id_penelitian` varchar(20) NOT NULL,
  `tgl_seminar` date NOT NULL,
  `jam_seminar` time NOT NULL,
  `stat_seminar` tinyint(1) NOT NULL DEFAULT '0',
  `komentar` text,
  PRIMARY KEY (`id_seminar`),
  KEY `id_dsn` (`id_dsn`),
  KEY `id_penelitian` (`id_penelitian`),
  CONSTRAINT `tb_seminar_ibfk_1` FOREIGN KEY (`id_dsn`) REFERENCES `tb_dosen` (`id_dsn`),
  CONSTRAINT `tb_seminar_ibfk_2` FOREIGN KEY (`id_penelitian`) REFERENCES `tb_penelitian` (`id_penelitian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_seminar` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` char(20) NOT NULL,
  `nip_user` varchar(30) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `usr_name` varchar(100) NOT NULL,
  `usr_pass` varchar(100) NOT NULL,
  `usr_tipe` char(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nip_user`,`nama_user`,`usr_name`,`usr_pass`,`usr_tipe`) values ('1222','1222','riska','riska','riska','admin'),('1223','1223','wilda','wilda','wilda','super'),('1224','1224','april','april','april','admin'),('1225','1225','alan','alan','alan','super'),('1226','1226','tiara','tiara','tiara','admin'),('1227','1227','ain','ain','ain','admin'),('1228','1228','isnan','isnan','isnan','admin'),('1229','1229','evin','evin','evin','admin');

/*Table structure for table `v_peneliti_lolos` */

DROP TABLE IF EXISTS `v_peneliti_lolos`;

/*!50001 DROP VIEW IF EXISTS `v_peneliti_lolos` */;
/*!50001 DROP TABLE IF EXISTS `v_peneliti_lolos` */;

/*!50001 CREATE TABLE  `v_peneliti_lolos`(
 `id_dsn` varchar(20) ,
 `dsn_nip` varchar(30) ,
 `dsn_nama` varchar(200) ,
 `dsn_tipe` tinyint(1) ,
 `dsn_jabatan` varchar(50) ,
 `tgl_upload` datetime ,
 `file_penelitian` varchar(11) ,
 `judul_penelitian` varchar(11) ,
 `desk_penelitian` varchar(500) ,
 `stat_penelitian` tinyint(1) ,
 `tgl_persetujuan` datetime ,
 `kategori_penelitian` varchar(200) 
)*/;

/*Table structure for table `v_penliti_masuk` */

DROP TABLE IF EXISTS `v_penliti_masuk`;

/*!50001 DROP VIEW IF EXISTS `v_penliti_masuk` */;
/*!50001 DROP TABLE IF EXISTS `v_penliti_masuk` */;

/*!50001 CREATE TABLE  `v_penliti_masuk`(
 `id_dsn` varchar(20) ,
 `dsn_nip` varchar(30) ,
 `dsn_nama` varchar(200) ,
 `dsn_tipe` tinyint(1) ,
 `dsn_jabatan` varchar(50) ,
 `judul_penelitian` varchar(11) ,
 `desk_penelitian` varchar(500) ,
 `kategori_penelitian` varchar(200) ,
 `file_penelitian` varchar(11) ,
 `stat_penelitian` tinyint(1) 
)*/;

/*View structure for view v_peneliti_lolos */

/*!50001 DROP TABLE IF EXISTS `v_peneliti_lolos` */;
/*!50001 DROP VIEW IF EXISTS `v_peneliti_lolos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_peneliti_lolos` AS select `tb_dosen`.`id_dsn` AS `id_dsn`,`tb_dosen`.`dsn_nip` AS `dsn_nip`,`tb_dosen`.`dsn_nama` AS `dsn_nama`,`tb_dosen`.`dsn_tipe` AS `dsn_tipe`,`tb_dosen`.`dsn_jabatan` AS `dsn_jabatan`,`tb_penelitian`.`tgl_upload` AS `tgl_upload`,`tb_penelitian`.`file_penelitian` AS `file_penelitian`,`tb_penelitian`.`judul_penelitian` AS `judul_penelitian`,`tb_penelitian`.`desk_penelitian` AS `desk_penelitian`,`tb_penelitian`.`stat_penelitian` AS `stat_penelitian`,`tb_penelitian`.`tgl_persetujuan` AS `tgl_persetujuan`,`tb_penelitian`.`kategori_penelitian` AS `kategori_penelitian` from (`tb_dosen` left join `tb_penelitian` on((`tb_penelitian`.`id_dsn` = `tb_dosen`.`id_dsn`))) */;

/*View structure for view v_penliti_masuk */

/*!50001 DROP TABLE IF EXISTS `v_penliti_masuk` */;
/*!50001 DROP VIEW IF EXISTS `v_penliti_masuk` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_penliti_masuk` AS select `tb_dosen`.`id_dsn` AS `id_dsn`,`tb_dosen`.`dsn_nip` AS `dsn_nip`,`tb_dosen`.`dsn_nama` AS `dsn_nama`,`tb_dosen`.`dsn_tipe` AS `dsn_tipe`,`tb_dosen`.`dsn_jabatan` AS `dsn_jabatan`,`tb_penelitian`.`judul_penelitian` AS `judul_penelitian`,`tb_penelitian`.`desk_penelitian` AS `desk_penelitian`,`tb_penelitian`.`kategori_penelitian` AS `kategori_penelitian`,`tb_penelitian`.`file_penelitian` AS `file_penelitian`,`tb_penelitian`.`stat_penelitian` AS `stat_penelitian` from (`tb_dosen` left join `tb_penelitian` on((`tb_penelitian`.`id_dsn` = `tb_dosen`.`id_dsn`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
