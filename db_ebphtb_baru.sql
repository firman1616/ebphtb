/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.36-MariaDB : Database - db_ebphtb_baru
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ebphtb_baru` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_ebphtb_baru`;

/*Table structure for table `jenis_surat_tanah` */

DROP TABLE IF EXISTS `jenis_surat_tanah`;

CREATE TABLE `jenis_surat_tanah` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_surat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_surat_tanah` */

insert  into `jenis_surat_tanah`(`id_jenis`,`nama_surat`) values 
(1,'PEPRIKSAN'),
(2,'TANAH NEGARA'),
(3,'J.B BANGUNAN DAN PENGOPERAN HAT'),
(4,'SK/IJIN PENUNJUKAN'),
(5,'TANAH GARAPAN'),
(6,'JB BANGUNAN DAN PENYERAHAAN HAK'),
(7,'MODEL D'),
(8,'SERTIFIKAT'),
(9,'GIRIK / IPEDA'),
(10,'PIPIL'),
(11,'KEKITIR'),
(12,'BEBAS SERTIFIKAT'),
(13,'KARTU KAVLING/PERPETAKAN'),
(14,'SURAT PERJANJIAN SEWA BELI R.N'),
(15,'SURAT TANDA LUNAS'),
(16,'JUAL BELI DAN PENGOPERAN HAK'),
(17,'SURAT PENYERAHAN RUMAH'),
(18,'MODEL E'),
(19,'SURAT KETERANGAN KEPALA DESA'),
(20,'GIRIK'),
(21,'SURAT PENGOPERAN H.A.T'),
(22,'SURAT OPER HAK PEKARANGAN'),
(23,'VERPONDING INDONESIA'),
(24,'SKT/SKGR/TEBAS/LAIN-LAIN'),
(25,'MODEL D/E'),
(26,'SURAT PENUNJUKAN KAVLING'),
(27,'LETTER C'),
(28,'SURAT PERNYATAAN'),
(29,'SURAT PENYERAHAN HAK KAVLING'),
(30,'SK. PELEPASAN HAK'),
(31,'SPPT'),
(32,'PEMINDAHAN HAK UNTUK PEKARANGAN'),
(33,'JB RUMAH DENGAN PENGOPERAN HAK'),
(34,'PETUK PAJAK BUMI'),
(35,'PELEPASAN HAK'),
(36,'SURAT JUAL BELI RUMAH');

/*Table structure for table `notaris` */

DROP TABLE IF EXISTS `notaris`;

CREATE TABLE `notaris` (
  `id_notaris` int(11) NOT NULL AUTO_INCREMENT,
  `nama_notaris` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `sk_notaris` varchar(20) DEFAULT NULL,
  `status_hubungan` varchar(20) DEFAULT NULL,
  `alamat_dinas_notaris` text,
  `foto_notaris` text,
  PRIMARY KEY (`id_notaris`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `notaris` */

insert  into `notaris`(`id_notaris`,`nama_notaris`,`jenis_kelamin`,`agama`,`tempat_lahir`,`tgl_lahir`,`nik`,`npwp`,`sk_notaris`,`status_hubungan`,`alamat_dinas_notaris`,`foto_notaris`) values 
(1,'Moch. Firman Firdaus, S.T','Laki-laki','Islam','Sidoarjo','2019-05-16','2143254364','324364','32436457','Jomblo','Janti','notaris_09072019143645.png'),
(2,'Choirun Nisa, S.T','Perempuan','Islam','Sidoarjo','2019-05-08','23214214','12321432','2132142','Jomblo','YPM','notaris_15052019094803.png'),
(3,'M. Farid Fathul Huda P., S.Kom., M. Kn','Laki-laki','Islam','Sidoarjo','2019-05-10','2132142','2132142','2132142','Menikah','Sambisari','notaris_21052019104325.jpg');

/*Table structure for table `objek_pajak` */

DROP TABLE IF EXISTS `objek_pajak`;

CREATE TABLE `objek_pajak` (
  `nop` varchar(20) NOT NULL,
  `kd_booking` varchar(20) DEFAULT NULL,
  `jenis_perolehan` varchar(50) DEFAULT NULL,
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

insert  into `objek_pajak`(`nop`,`kd_booking`,`jenis_perolehan`,`alamat`,`blok`,`rt`,`rw`,`desa`,`kecamatan`,`kota`,`kd_pos`,`njop_tanah`,`njop_bangunan`,`l_tanah`,`l_bangunan`,`njop_total`,`harga_transaksi`,`jenis_surat_tanah`,`no_sertifikat`,`npop`,`npoptkp`,`npopkp`,`bphtb_terutang`,`pengurangan`,`bphtb_telah_bayar`,`kurang_bayar`,`bphtb_harus_bayar`,`jml_setoran_berdasarkan`,`ket`,`status`,`tgl_pengajuan`,`notaris_pengusul`) values 
('737102001300100800','730414672529','Jual Beli','JL. LANDAK I','13',1,1,'LABUANG BAJI','MAMAJANG','MAKASSAR',90132,2352000,823000,200,100,400000000,552700000,'1','1243253454',552700000,50000000,502700000,25135000,0,4000000,0,21135000,'STPD BPHTB/SKPDB KB/SKPDB KBT/BA. VERLAB','Lain Lain',1,'2019-05-17 12:58:32','Moch. Firman Firdaus, S.T'),
('737102001300100801','730414672530','jual beli','JALAN SAWUNGGALING 2 KAVLINGAN UTARA SAMBISARI','A',31,6,'SAMBIBULU','TAMAN','SIDOARJO',61257,2000000,1250000,150,100,2250000,425000000,'1','123456789',300000000,200000000,100000000,5000000,0,0,0,5000000,'Perhitungan Wajib Pajak','tes',1,'2019-05-13 08:39:04','Choirun Nisa, S.T');

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
('12345678901234','21436587092143','Klutuk',NULL,5,1,'Kramat Jegu','Taman','Sidoarjo',61257,200000,400000),
('12345678901235','21436587092144','Kramat ',NULL,7,3,'Kramat Jegu','Taman','Sidoarjo',61257,670000,300000),
('12345678901236','21436587092145','Jegu ',NULL,1,7,'Kramat Jegu','Taman','Sidoarjo',61257,150000,300000),
('12345678901237','21436587092146','Jati',NULL,2,10,'Jatikalang','Krian','Sidoarjo',61258,200000,450000),
('12345678901238','21436587092147','Dlanggu',NULL,3,7,'Dlanggu','Dlanggu','Mojokerto',12345,800000,1200000),
('12345678901239','21436587092148','Mojosari',NULL,1,2,'Mojosari','Mojosari','Mojokerto',12344,100000,200000),
('12345678901240','21436587092149','Nambangan',NULL,1,2,'Tawangsari','Taman','Sidoarjo',12333,200000,300000),
('12345678901241','21436587092150','Gelang',NULL,3,2,'Tulangan','Krian','Sidoarjo',61259,300000,600000),
('12345678901242','21436587092151','Gilang',NULL,3,7,'Gilang','Taman','Sidoarjo',61257,170000,340000),
('12345678901243','21436587092152','Sidorejo',NULL,7,2,'Sidorejo','Krian','Sidoarjo',61258,200000,350000),
('12345678901244','21436587092153','Sukodono',NULL,3,3,'Sukodono','Sukodono','Sidoarjo',61255,100000,200000),
('12345678901245','21436587092154','Cangkir',NULL,1,3,'Cangkir','Driyorejo','Gresik',61254,300000,600000),
('12345678901246','21436587092155','Bambe',NULL,2,2,'Bambe','Driyorejo','Gresik',61254,150000,200000),
('12345678901247','21436587092156','Njenek',NULL,1,1,'Tawangsari','Taman','Sidoarjo',61255,160000,210000),
('12345678901248','21436587092157','Bringin',NULL,2,1,'Beringinbendo','Taman','Sidoarjo',61257,170000,240000),
('12345678901249','21436587092158','Laban Kulon',NULL,3,3,'Menganti','Menganti','Gresik',61253,240000,400000),
('12345678901250','21436587092159','Sidorogo',NULL,1,1,'Sidorogo','Krian','Sidoarjo',61257,170000,340000),
('12345678901251','21436587092160','Makarya Binangun','K12',2,3,'Makarya Binangun','Waru','Sidoarjo',61256,190000,380000),
('12345678901252','21436587092161','Janti',NULL,1,4,'Janti','Waru','Sidoarjo',61256,200000,410000),
('12345678901253','21436587092162','Geluran',NULL,5,5,'Geluran','Taman','Sidoarjo',61256,90000,280000),
('12345678901254','21436587092163','Sambibulu',NULL,4,3,'Sambibulu','Taman','Sidoarjo',61256,180000,360000),
('12345678901255','21436587092164','Wonoayu',NULL,3,4,'Wonoayu','Krian','Sidoarjo',61257,300000,500000),
('12345678901256','21436587092165','Kebraon',NULL,23,12,'Kebraon','Karangpilang','Surabaya',61254,200000,250000),
('12345678901257','21436587092166','Balas Klumprik',NULL,33,12,'Kebraon','Karangpilang','Surabaya',61254,200000,300000),
('12345678901258','21436587092167','Sambiroto',NULL,5,10,'Sambiroto','Taman','Sidoarjo',61256,100000,200000),
('12345678901259','21436587092168','Kedurus',NULL,23,11,'Kedurus','Karangpilang','Surabaya',61254,100000,200000),
('12345678901260','21436587092169','Wiyung',NULL,22,11,'Wiyung','Wiyung','Surabaya',61253,100200,200100),
('12345678901261','21436587092170','Cerme',NULL,2,12,'Cerme','Driyorejo','Gresik',61252,200000,350000),
('12345678901262','21436587092171','Tenaru',NULL,33,2,'Tenaru','Driyorejo','Gresik',61177,200100,410000),
('12345678901263','21436587092172','Simolawang',NULL,17,23,'Simolawang','Simokerto','Surabaya',60144,200000,350000),
('12345678901264','21436587092173','Ponokawan',NULL,22,44,'Ponokawan','Krian','Sidoarjo',61262,200000,400000),
('12345678901265','21436587092174','Kramat Jegu',NULL,5,1,'Kramat Jegu','Taman','Sidoarjo',61257,250000,500000),
('12345678901266','21436587092175','Klutuk',NULL,5,1,'Kramat Jegu','Taman','Sidoarjo',61257,200000,400000),
('12345678901267','21436587092176','Kramat ',NULL,7,3,'Kramat Jegu','Taman','Sidoarjo',61257,670000,300000),
('12345678901268','21436587092177','Jegu ',NULL,1,7,'Kramat Jegu','Taman','Sidoarjo',61257,150000,300000),
('12345678901269','21436587092178','Jati',NULL,2,10,'Jatikalang','Krian','Sidoarjo',61258,200000,450000),
('12345678901270','21436587092179','Dlanggu',NULL,3,7,'Dlanggu','Dlanggu','Mojokerto',12345,800000,1200000),
('12345678901271','21436587092180','Mojosari',NULL,1,2,'Mojosari','Mojosari','Mojokerto',12344,100000,200000),
('12345678901272','21436587092181','Nambangan',NULL,1,2,'Tawangsari','Taman','Sidoarjo',12333,200000,300000),
('12345678901273','21436587092182','Gelang',NULL,3,2,'Tulangan','Krian','Sidoarjo',61259,300000,600000),
('12345678901274','21436587092183','Gilang',NULL,3,7,'Gilang','Taman','Sidoarjo',61257,170000,340000),
('12345678901275','21436587092184','Sidorejo',NULL,7,2,'Sidorejo','Krian','Sidoarjo',61258,200000,350000),
('12345678901276','21436587092185','Sukodono',NULL,3,3,'Sukodono','Sukodono','Sidoarjo',61255,100000,200000),
('12345678901277','21436587092186','Cangkir',NULL,1,3,'Cangkir','Driyorejo','Gresik',61254,300000,600000),
('12345678901278','21436587092187','Bambe',NULL,2,2,'Bambe','Driyorejo','Gresik',61254,150000,200000),
('12345678901279','21436587092188','Njenek',NULL,1,1,'Tawangsari','Taman','Sidoarjo',61255,160000,210000),
('12345678901280','21436587092189','Bringin',NULL,2,1,'Beringinbendo','Taman','Sidoarjo',61257,170000,240000),
('12345678901281','21436587092190','Laban Kulon',NULL,3,3,'Menganti','Menganti','Gresik',61253,240000,400000),
('12345678901282','21436587092191','Sidorogo',NULL,1,1,'Sidorogo','Krian','Sidoarjo',61257,170000,340000),
('12345678901283','21436587092192','Makarya Binangun','K12',2,3,'Makarya Binangun','Waru','Sidoarjo',61256,190000,380000),
('12345678901284','21436587092193','Janti',NULL,1,4,'Janti','Waru','Sidoarjo',61256,200000,410000),
('12345678901285','21436587092194','Geluran',NULL,5,5,'Geluran','Taman','Sidoarjo',61256,90000,280000),
('12345678901286','21436587092195','Sambibulu',NULL,4,3,'Sambibulu','Taman','Sidoarjo',61256,180000,360000),
('12345678901287','21436587092196','Wonoayu',NULL,3,4,'Wonoayu','Krian','Sidoarjo',61257,300000,500000),
('12345678901288','21436587092197','Kebraon',NULL,23,12,'Kebraon','Karangpilang','Surabaya',61254,200000,250000),
('12345678901289','21436587092198','Balas Klumprik',NULL,33,12,'Kebraon','Karangpilang','Surabaya',61254,200000,300000),
('12345678901290','21436587092199','Sambiroto',NULL,5,10,'Sambiroto','Taman','Sidoarjo',61256,100000,200000),
('12345678901291','21436587092200','Kedurus',NULL,23,11,'Kedurus','Karangpilang','Surabaya',61254,100000,200000),
('12345678901292','21436587092201','Wiyung',NULL,22,11,'Wiyung','Wiyung','Surabaya',61253,100200,200100),
('12345678901293','21436587092202','Cerme',NULL,2,12,'Cerme','Driyorejo','Gresik',61252,200000,350000),
('12345678901294','21436587092203','Tenaru',NULL,33,2,'Tenaru','Driyorejo','Gresik',61177,200100,410000),
('12345678901295','21436587092204','Simolawang',NULL,17,23,'Simolawang','Simokerto','Surabaya',60144,200000,350000),
('12345678901296','21436587092205','Ponokawan',NULL,22,44,'Ponokawan','Krian','Sidoarjo',61262,200000,400000),
('12345678901297','21436587092206','Kramat Jegu',NULL,5,1,'Kramat Jegu','Taman','Sidoarjo',61257,250000,500000),
('12345678901298','21436587092207','Klutuk',NULL,5,1,'Kramat Jegu','Taman','Sidoarjo',61257,200000,400000),
('12345678901299','21436587092208','Kramat ',NULL,7,3,'Kramat Jegu','Taman','Sidoarjo',61257,670000,300000),
('12345678901300','21436587092209','Jegu ',NULL,1,7,'Kramat Jegu','Taman','Sidoarjo',61257,150000,300000),
('12345678901301','21436587092210','Jati',NULL,2,10,'Jatikalang','Krian','Sidoarjo',61258,200000,450000),
('12345678901302','21436587092211','Dlanggu',NULL,3,7,'Dlanggu','Dlanggu','Mojokerto',12345,800000,1200000),
('12345678901303','21436587092212','Mojosari',NULL,1,2,'Mojosari','Mojosari','Mojokerto',12344,100000,200000),
('12345678901304','21436587092213','Nambangan',NULL,1,2,'Tawangsari','Taman','Sidoarjo',12333,200000,300000),
('12345678901305','21436587092214','Gelang',NULL,3,2,'Tulangan','Krian','Sidoarjo',61259,300000,600000),
('12345678901306','21436587092215','Gilang',NULL,3,7,'Gilang','Taman','Sidoarjo',61257,170000,340000),
('12345678901307','21436587092216','Sidorejo',NULL,7,2,'Sidorejo','Krian','Sidoarjo',61258,200000,350000),
('12345678901308','21436587092217','Sukodono',NULL,3,3,'Sukodono','Sukodono','Sidoarjo',61255,100000,200000),
('12345678901309','21436587092218','Cangkir',NULL,1,3,'Cangkir','Driyorejo','Gresik',61254,300000,600000),
('12345678901310','21436587092219','Bambe',NULL,2,2,'Bambe','Driyorejo','Gresik',61254,150000,200000),
('12345678901311','21436587092220','Njenek',NULL,1,1,'Tawangsari','Taman','Sidoarjo',61255,160000,210000),
('12345678901312','21436587092221','Bringin',NULL,2,1,'Beringinbendo','Taman','Sidoarjo',61257,170000,240000),
('12345678901313','21436587092222','Laban Kulon',NULL,3,3,'Menganti','Menganti','Gresik',61253,240000,400000),
('12345678901314','21436587092223','Sidorogo',NULL,1,1,'Sidorogo','Krian','Sidoarjo',61257,170000,340000),
('12345678901315','21436587092224','Makarya Binangun','K12',2,3,'Makarya Binangun','Waru','Sidoarjo',61256,190000,380000),
('12345678901316','21436587092225','Janti',NULL,1,4,'Janti','Waru','Sidoarjo',61256,200000,410000),
('12345678901317','21436587092226','Geluran',NULL,5,5,'Geluran','Taman','Sidoarjo',61256,90000,280000),
('12345678901318','21436587092227','Sambibulu',NULL,4,3,'Sambibulu','Taman','Sidoarjo',61256,180000,360000),
('12345678901319','21436587092228','Wonoayu',NULL,3,4,'Wonoayu','Krian','Sidoarjo',61257,300000,500000),
('12345678901320','21436587092229','Kebraon',NULL,23,12,'Kebraon','Karangpilang','Surabaya',61254,200000,250000),
('12345678901321','21436587092230','Balas Klumprik',NULL,33,12,'Kebraon','Karangpilang','Surabaya',61254,200000,300000),
('12345678901322','21436587092231','Sambiroto',NULL,5,10,'Sambiroto','Taman','Sidoarjo',61256,100000,200000),
('12345678901323','21436587092232','Kedurus',NULL,23,11,'Kedurus','Karangpilang','Surabaya',61254,100000,200000),
('12345678901324','21436587092233','Wiyung',NULL,22,11,'Wiyung','Wiyung','Surabaya',61253,100200,200100),
('12345678901325','21436587092234','Cerme',NULL,2,12,'Cerme','Driyorejo','Gresik',61252,200000,350000),
('12345678901326','21436587092235','Tenaru',NULL,33,2,'Tenaru','Driyorejo','Gresik',61177,200100,410000),
('12345678901327','21436587092236','Simolawang',NULL,17,23,'Simolawang','Simokerto','Surabaya',60144,200000,350000),
('12345678901328','21436587092237','Ponokawan',NULL,22,44,'Ponokawan','Krian','Sidoarjo',61262,200000,400000),
('12345678901329','21436587092238','Balas Klumprik',NULL,33,12,'Kebraon','Karangpilang','Surabaya',61254,200000,300000),
('12345678901330','21436587092239','Sambiroto',NULL,5,10,'Sambiroto','Taman','Sidoarjo',61256,100000,200000),
('12345678901331','21436587092240','Kedurus',NULL,23,11,'Kedurus','Karangpilang','Surabaya',61254,100000,200000),
('12345678901332','21436587092241','Gelang',NULL,3,2,'Tulangan','Krian','Sidoarjo',61259,300000,600000),
('2132436543','3243543654','Sembarang','1',1,1,'Emboh','Emboh','Emboh',2324,13,132),
('271127069396','180827116062','Kramat Jegu',NULL,5,1,'Kramat Jegu','Taman','Sidoarjo',61257,250000,500000),
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `pembeli` */

insert  into `pembeli`(`id_pembeli`,`nama_pembeli`,`jkel_pembeli`,`tmpt_lahir_pembeli`,`tgl_lahir_pembeli`,`status_nikah_pembeli`,`jenis_pekerjaan_pembeli`,`alamat_pembeli`,`blok_pembeli`,`rt_pembeli`,`rw_pembeli`,`desa_pembeli`,`kecamatan_pembeli`,`kabupaten_pembeli`,`kd_pos_pembeli`,`ibu_kandung_pembeli`,`notelp_pembeli`,`email_pembeli`,`npwp_pembeli`,`jenis_identitas_pembeli`,`no_identitas_pembeli`,`ket_pembeli`,`nop_pembeli`) values 
(3,'Firman','Laki - Laki','Sidoarjo','1998-02-25','MENIKAH','PNS','SIDOARJO','C1',21,5,'JANTI','WARU','SIDOARJO',61257,'MARNI','085648220530','firman616@gmail.com','12345678965','KTP','1512362502980001',NULL,'737102001300100801'),
(6,'Farid','Laki - Laki','Sukodono','2019-05-10','Jomblo','PNS','Sukodono','8',2,2,'Sukodono','Taman','Surabaya',66552,'Iis Dahlia','08763645466','farid@gmail.com','2132325','KTP','2435435435325','Sehat jasmani Rohani','737102001300100800');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `penjual` */

insert  into `penjual`(`id_penjual`,`nama_penjual`,`jkel_penjual`,`tmpt_lahir_penjual`,`tgl_lahir_penjual`,`status_nikah_penjual`,`jenis_pekerjaan_penjual`,`alamat_penjual`,`blok_penjual`,`rt_penjual`,`rw_penjual`,`desa_penjual`,`kecamatan_penjual`,`kabupaten_penjual`,`kd_pos_penjual`,`ibu_kandung_penjual`,`notelp_penjual`,`email_penjual`,`npwp_penjual`,`jenis_identitas_penjual`,`no_identitas_penjual`,`ket_penjual`,`nop_penjual`) values 
(3,'Farid','Laki - Laki','Lamongan','1996-07-22','lajang','swasta','sidoarjo','A',31,6,'Sambibulu','Taman','Sidoarjo',61257,'Markamah','085707123161','muhamadfarid031@gmail.com','12345678910','KTP','3515132207960010','tes','737102001300100801'),
(6,'Es Cincau','Laki - Laki','Sidoarjo','2019-03-29','Jomblo','PNS','Jl. sedayu indah SBY','2',1,1,'Es Teler','Es Degan','Surabaya',61256,'Tutik Puianti','089776537478','firmanfirdaus@gmail.com','21434325','KTP','242342435345','Tanah Kavling','737102001300100800');

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
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`nama_user`,`username`,`password`,`level`) values 
(1,'Farid','admin','b34b40ca8771c48c204e55f927376885',1);

/*Table structure for table `tbl_user_notaris` */

DROP TABLE IF EXISTS `tbl_user_notaris`;

CREATE TABLE `tbl_user_notaris` (
  `id_user_notaris` int(11) NOT NULL AUTO_INCREMENT,
  `nama_notaris` varchar(100) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` text,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user_notaris`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user_notaris` */

insert  into `tbl_user_notaris`(`id_user_notaris`,`nama_notaris`,`username`,`password`,`level`) values 
(1,'Moch. Firman Firdaus, S.T','piman','39a6670dc1caf1ec49b200183ef43b94',2),
(2,'Choirun Nisa, S.T','ica_emoet','74b7468fe70d4cb1dd1495d0b4c7f5a0',2),
(3,'M. Farid Fathul Huda P., S.Kom., M. Kn','farid_ajaa','b3845f8fca366ef4e19bfe621b87f77f',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
