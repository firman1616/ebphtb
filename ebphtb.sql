/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.33-MariaDB : Database - ebphtb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ebphtb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ebphtb`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`alamat`,`telp`) values 
('1514311002','Farid','Sidoarjo','085707123161'),
('1514311003','Candra','Sidoarjo','121345678900');

/*Table structure for table `notaris` */

DROP TABLE IF EXISTS `notaris`;

CREATE TABLE `notaris` (
  `id_notaris` int(11) NOT NULL AUTO_INCREMENT,
  `nama_notaris` varchar(70) DEFAULT NULL,
  `alamat_dinas_notaris` text,
  PRIMARY KEY (`id_notaris`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `notaris` */

insert  into `notaris`(`id_notaris`,`nama_notaris`,`alamat_dinas_notaris`) values 
(1,'Ica, SH., M. Kn','Sidoarjo'),
(2,'Farid, SH., MH., M. Kn','Sidoarjo'),
(3,'Firman, SH., MH','Surabaya');

/*Table structure for table `objek_pajak` */

DROP TABLE IF EXISTS `objek_pajak`;

CREATE TABLE `objek_pajak` (
  `nop` varchar(20) NOT NULL,
  `kd_booking` varchar(20) DEFAULT NULL,
  `alamat` text,
  `blok` varchar(10) DEFAULT NULL,
  `rt` int(3) DEFAULT NULL,
  `rw` int(3) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kd_pos` int(5) DEFAULT NULL,
  `njop_tanah` int(11) DEFAULT NULL,
  `njop_bangunan` int(11) DEFAULT NULL,
  `l_tanah` int(11) DEFAULT NULL,
  `l_bangunan` int(11) DEFAULT NULL,
  `njop_total` int(11) DEFAULT NULL,
  `harga_transaksi` int(11) DEFAULT NULL,
  `jenis_surat_tanah` varchar(50) DEFAULT NULL,
  `no_sertifikat` varchar(50) DEFAULT NULL,
  `npop` int(11) DEFAULT NULL,
  `npoptkp` int(11) DEFAULT NULL,
  `npopkp` int(11) DEFAULT NULL,
  `bphtb_terutang` int(11) DEFAULT NULL,
  `pengurangan` int(11) DEFAULT NULL,
  `bphtb_telah_bayar` int(11) DEFAULT NULL,
  `kurang_bayar` int(11) DEFAULT NULL,
  `bphtb_harus_bayar` int(11) DEFAULT NULL,
  `jml_setoran_berdasarkan` varchar(100) DEFAULT NULL,
  `ket` text,
  `status` int(1) DEFAULT NULL,
  `tgl_pengajuan` datetime DEFAULT NULL,
  `notaris_pengusul` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `objek_pajak` */

insert  into `objek_pajak`(`nop`,`kd_booking`,`alamat`,`blok`,`rt`,`rw`,`desa`,`kecamatan`,`kota`,`kd_pos`,`njop_tanah`,`njop_bangunan`,`l_tanah`,`l_bangunan`,`njop_total`,`harga_transaksi`,`jenis_surat_tanah`,`no_sertifikat`,`npop`,`npoptkp`,`npopkp`,`bphtb_terutang`,`pengurangan`,`bphtb_telah_bayar`,`kurang_bayar`,`bphtb_harus_bayar`,`jml_setoran_berdasarkan`,`ket`,`status`,`tgl_pengajuan`,`notaris_pengusul`) values 
('737102001300100800','730414672529','JL. LANDAK I','13',1,1,'LABUANG BAJI','MAMAJANG','MAKASSAR',90132,2352000,823000,200,150,3000000,350000000,'1','123789456',350000000,200000000,150000000,7500000,0,0,0,7500000,'Perhitungan Wajib Pajak','tes kedua',1,'2019-05-13 09:39:00','Farid, SH., MH., M. Kn'),
('737102001300100801','730414672530','JALAN SAWUNGGALING 2 KAVLINGAN UTARA SAMBISARI','A',31,6,'SAMBIBULU','TAMAN','SIDOARJO',61257,2000000,1250000,150,100,2250000,300000000,'1','123456789',300000000,200000000,100000000,5000000,0,0,0,5000000,'Perhitungan Wajib Pajak','tes',1,'2019-05-13 08:39:04','Ica, SH., M. Kn');

/*Table structure for table `objek_pajak_bpn` */

DROP TABLE IF EXISTS `objek_pajak_bpn`;

CREATE TABLE `objek_pajak_bpn` (
  `nop` varchar(20) NOT NULL,
  `kd_booking` varchar(20) DEFAULT NULL,
  `alamat` text,
  `blok` varchar(10) DEFAULT NULL,
  `rt` int(3) DEFAULT NULL,
  `rw` int(3) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kd_pos` int(5) DEFAULT NULL,
  `njop_tanah` int(30) DEFAULT NULL,
  `njop_bangunan` int(30) DEFAULT NULL,
  PRIMARY KEY (`nop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `objek_pajak_bpn` */

insert  into `objek_pajak_bpn`(`nop`,`kd_booking`,`alamat`,`blok`,`rt`,`rw`,`desa`,`kecamatan`,`kota`,`kd_pos`,`njop_tanah`,`njop_bangunan`) values 
('737102001300100800','730414672529','JL. LANDAK I','13',1,1,'LABUANG BAJI','MAMAJANG','MAKASSAR',90132,2352000,823000),
('737102001300100801','730414672530','JALAN SAWUNGGALING 2 KAVLINGAN UTARA SAMBISARI','A',31,6,'SAMBIBULU','TAMAN','SIDOARJO',61257,2000000,1250000);

/*Table structure for table `pembeli` */

DROP TABLE IF EXISTS `pembeli`;

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(50) DEFAULT NULL,
  `jkel_pembeli` varchar(15) DEFAULT NULL,
  `tmpt_lahir_pembeli` varchar(50) DEFAULT NULL,
  `tgl_lahir_pembeli` date DEFAULT NULL,
  `status_nikah_pembeli` varchar(20) DEFAULT NULL,
  `jenis_pekerjaan_pembeli` varchar(30) DEFAULT NULL,
  `alamat_pembeli` text,
  `blok_pembeli` varchar(10) DEFAULT NULL,
  `rt_pembeli` int(3) DEFAULT NULL,
  `rw_pembeli` int(3) DEFAULT NULL,
  `desa_pembeli` varchar(50) DEFAULT NULL,
  `kecamatan_pembeli` varchar(50) DEFAULT NULL,
  `kabupaten_pembeli` varchar(50) DEFAULT NULL,
  `kd_pos_pembeli` int(5) DEFAULT NULL,
  `ibu_kandung_pembeli` varchar(50) DEFAULT NULL,
  `notelp_pembeli` varchar(15) DEFAULT NULL,
  `email_pembeli` varchar(60) DEFAULT NULL,
  `npwp_pembeli` varchar(20) DEFAULT NULL,
  `jenis_identitas_pembeli` varchar(10) DEFAULT NULL,
  `no_identitas_pembeli` varchar(20) DEFAULT NULL,
  `ket_pembeli` varchar(256) DEFAULT NULL,
  `nop_pembeli` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pembeli` */

insert  into `pembeli`(`id_pembeli`,`nama_pembeli`,`jkel_pembeli`,`tmpt_lahir_pembeli`,`tgl_lahir_pembeli`,`status_nikah_pembeli`,`jenis_pekerjaan_pembeli`,`alamat_pembeli`,`blok_pembeli`,`rt_pembeli`,`rw_pembeli`,`desa_pembeli`,`kecamatan_pembeli`,`kabupaten_pembeli`,`kd_pos_pembeli`,`ibu_kandung_pembeli`,`notelp_pembeli`,`email_pembeli`,`npwp_pembeli`,`jenis_identitas_pembeli`,`no_identitas_pembeli`,`ket_pembeli`,`nop_pembeli`) values 
(3,'Firman','Laki - Laki','Sidoarjo','1998-02-25','MENIKAH','PNS','SIDOARJO','C1',21,5,'JANTI','WARU','SIDOARJO',61257,'MARNI','085648220530','firman616@gmail.com','12345678965','KTP','1512362502980001',NULL,'737102001300100801'),
(4,'Farid','Laki - Laki','LAMONGAN','2019-05-01','MENIKAH','PNS','Sambisari','A',31,6,'Sambibulu','Taman','Sidoarjo',61257,'Markamah','156897456','farid@gmail.com','456789321','KTP','147852369852147','tes kedua','737102001300100800');

/*Table structure for table `penjual` */

DROP TABLE IF EXISTS `penjual`;

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penjual` varchar(50) DEFAULT NULL,
  `jkel_penjual` varchar(15) DEFAULT NULL,
  `tmpt_lahir_penjual` varchar(50) DEFAULT NULL,
  `tgl_lahir_penjual` date DEFAULT NULL,
  `status_nikah_penjual` varchar(20) DEFAULT NULL,
  `jenis_pekerjaan_penjual` varchar(30) DEFAULT NULL,
  `alamat_penjual` text,
  `blok_penjual` varchar(10) DEFAULT NULL,
  `rt_penjual` int(3) DEFAULT NULL,
  `rw_penjual` int(3) DEFAULT NULL,
  `desa_penjual` varchar(50) DEFAULT NULL,
  `kecamatan_penjual` varchar(50) DEFAULT NULL,
  `kabupaten_penjual` varchar(50) DEFAULT NULL,
  `kd_pos_penjual` int(5) DEFAULT NULL,
  `ibu_kandung_penjual` varchar(50) DEFAULT NULL,
  `notelp_penjual` varchar(15) DEFAULT NULL,
  `email_penjual` varchar(60) DEFAULT NULL,
  `npwp_penjual` varchar(20) DEFAULT NULL,
  `jenis_identitas_penjual` varchar(10) DEFAULT NULL,
  `no_identitas_penjual` varchar(20) DEFAULT NULL,
  `ket_penjual` varchar(256) DEFAULT NULL,
  `nop_penjual` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_penjual`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `penjual` */

insert  into `penjual`(`id_penjual`,`nama_penjual`,`jkel_penjual`,`tmpt_lahir_penjual`,`tgl_lahir_penjual`,`status_nikah_penjual`,`jenis_pekerjaan_penjual`,`alamat_penjual`,`blok_penjual`,`rt_penjual`,`rw_penjual`,`desa_penjual`,`kecamatan_penjual`,`kabupaten_penjual`,`kd_pos_penjual`,`ibu_kandung_penjual`,`notelp_penjual`,`email_penjual`,`npwp_penjual`,`jenis_identitas_penjual`,`no_identitas_penjual`,`ket_penjual`,`nop_penjual`) values 
(3,'Farid','Laki - Laki','Lamongan','1996-07-22','lajang','swasta','sidoarjo','A',31,6,'Sambibulu','Taman','Sidoarjo',61257,'Markamah','085707123161','muhamadfarid031@gmail.com','12345678910','KTP','3515132207960010','tes','737102001300100801'),
(4,'Ica','Perempuan','Sidoarjo','2019-05-08','menikah','mahasiswa','Jegu, Sidoarjo','A',5,2,'Terosobo','Taman','Sidoarjo',61257,'Ani','78965432','ica@gmail.com','654912387','KTP','456789123456789','tes kedua','737102001300100800');

/*Table structure for table `perolehan` */

DROP TABLE IF EXISTS `perolehan`;

CREATE TABLE `perolehan` (
  `id_perolehan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perolehan` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_perolehan`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `perolehan` */

insert  into `perolehan`(`id_perolehan`,`nama_perolehan`) values 
(1,'Jual Beli'),
(2,'Tukar Menukar'),
(3,'Hibah'),
(4,'Hibah Wasiat'),
(5,'Waris'),
(6,'Masukkan dalam Personal/Badan Hukum Laainnya'),
(7,'Pemisahan Hak Yang Mengakibatkan Peralihan'),
(8,'Penunjukan Pemberi Dalam Lelang'),
(9,'Pelaksanaan Putusan Hakim Yang Mmemberi Hukum Tetap'),
(10,'Penggabungan Usaha'),
(11,'Peleburan Usaha'),
(12,'Pemekaran Usaha'),
(13,'Hadiah'),
(14,'Perolehan Hak Rumah Sederhana, Sehan, dan RSS Melalui KPR Bersubsidi'),
(15,'Pemberian Hak Baru'),
(16,'Pemberian Hak Baru Sebagai Kelanjutan Pelepasan Hak'),
(17,'Pemberian Hak Baru Diluar Pelepasan Hak');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` text,
  `level` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`username`,`password`,`level`,`nama`) values 
(1,'admin','afb91ef692fd08c445e8cb1bab2ccf9c',1,'Farid');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
