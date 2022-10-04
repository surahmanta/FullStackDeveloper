/*
SQLyog - Free MySQL GUI v5.02
Host - 5.7.24 : Database - news
*********************************************************************
Server version : 5.7.24
*/


create database if not exists `news`;

USE `news`;

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten_ringkas` varchar(100) DEFAULT NULL,
  `konten` text,
  `gambar` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah_read` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

insert into `berita` values 
(1,'artikel_pertama','Artikel pertama','Artikel pertama di website','Artikel pertama kali yang diberikan pada website yang pertama kali','gambar.jpg','2022-04-10 10:09:12',1),
(2,'artikel_kedua','Artikel yang kedua','Artikel kedua','Artikel keuda kali yang diberikan pada website untuk artikel yang kedua','gambar2.jpg','2022-04-10 11:09:12',0),
(3,'artikel_ketiga','Artikel ketiganya','Artikel ketiga ini','Artikel ketiga kali yang diberikan pada website yang ketiga kalinya','gambar3.jpg','2022-04-10 13:09:12',3),
(4,'artikel_keempat','Artikel yang keempat','Artikel yang keempat merupakan artikel yang keeemp','Artiktel ke empat','gambar4.jpg','2022-04-08 09:22:21',2),
(5,'artikel_kedua','Artikel yang kedua','Artikel kedua diwebsti','Artikel ini merupakan artikel yang kedua','gbr.jpg','2022-04-09 08:12:01',0),
(6,'sdfsdf','sdfsdfsdf','sdfsdfdsfsdfsdf','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et reiciendis dignissimos neque quas fugit delectus.','gambar5.jpg','2022-05-10 00:00:00',0),
(7,'dfsdfsdf','sdffsdfsd','fsdfsdfsdfsdfsdf','sdfsdfsdfsdfsdfsdfsdfsdfdsfds','gambar6.jpg','2022-04-10 00:00:00',0),
(8,'','','fsdfsdf','','','0000-00-00 00:00:00',0),
(9,'dfgdgdf','gdfgdfg','','','','0000-00-00 00:00:00',0);
