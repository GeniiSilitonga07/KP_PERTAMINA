/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.3.16-MariaDB : Database - sistemgudang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sistemgudang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sistemgudang`;

/*Table structure for table `databarang` */

DROP TABLE IF EXISTS `databarang`;

CREATE TABLE `databarang` (
  `IDBarang` VARCHAR(10) NOT NULL,
  `JenisBarang` VARCHAR(100) NOT NULL,
  `NamaBarang` VARCHAR(100) NOT NULL,
  `StokBarang` INT(11) NOT NULL,
  `SatuanStok` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`IDBarang`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `databarang` */

INSERT  INTO `databarang`(`IDBarang`,`JenisBarang`,`NamaBarang`,`StokBarang`,`SatuanStok`) VALUES 
('AC001','Accessories Computer','Kabel VGA @ 30 meter',38,'Pcs'),
('AC002','Accessories Computer','Kabel VGA @ 25 meter',30,'Pcs'),
('AC003','Accessories Computer','Kabel VGA @ 20 meter',30,'Pcs'),
('AC004','Accessories Computer','Kabel VGA @ 15 meter',4,'Pcs'),
('AC005','Accessories Computer','Kabel VGA @ 10 meter',6,'Pcs'),
('AC006','Accessories Computer','Kabel VGA @ 5 meter',1,'Pcs'),
('AC007','Accessories Computer','Kabel VGA @ 1.5 meter',44,'Pcs'),
('AC008','Accessories Computer','Connector Kabel VGA to Kabel VGA',20,'Pcs'),
('AK001','Alat Komunikasi','Telephone Analog Panasonic KX-TS505MX',0,'Unit'),
('AK002','Alat Komunikasi','Telephone Analog Panasonic KX-T7705X',3,'Unit'),
('AK003','Alat Komunikasi','Telephone Digital DBC 223 / 4223, Aastra',2,'Unit'),
('AK004','Alat Komunikasi','IP Phone Aastra Dialog 4422',2,'Unit'),
('AK005','Alat Komunikasi','Telephone Test Dairem ',50,'Pcs'),
('AOK01','Accessories Operasi Komunikasi','Connector RG-45, AMP',6,'Pcs'),
('AOK02','Accessories Operasi Komunikasi','Connector RG-45 Cat.6e TE Connectivity',6,'Pcs'),
('AOK03','Accessories Operasi Komunikasi','Connector RG-45 Cat.6e merk Belden',0,'Pcs'),
('AOK04','Accessories Operasi Komunikasi','Connector RG-11',5,'Pcs'),
('AOK05','Accessories Operasi Komunikasi','Connecting Cord',20,'Pcs'),
('AOK06','Accessories Operasi Komunikasi','Handset Cord',0,'Pcs'),
('AOK07','Accessories Operasi Komunikasi','Roset Telephone 1 lobang',150,'Pcs'),
('AOK08','Accessories Operasi Komunikasi','Roset Telephone 2 lobang',100,'Pcs'),
('AOK09','Accessories Operasi Komunikasi','Roset / Barel RG-45',3,'Pcs'),
('AOK10','Accessories Operasi Komunikasi','LSA Plus Disconnecting module crone',2,'Pcs'),
('AOK11','Accessories Operasi Komunikasi','Magazine protection LSA plus Module',0,'Pcs'),
('AOK12','Accessories Operasi Komunikasi','Frame LSA plus (11 way)',32,'Pcs'),
('AOK13','Accessories Operasi Komunikasi','Terminal Box (TB) A-30',0,'Pcs'),
('AOK14','Accessories Operasi Komunikasi','Terminal Box (TB) A-100',0,'Pcs'),
('AOK15','Accessories Operasi Komunikasi','Blue Wire Connector (Penyambung kabel)',3,'Pcs'),
('AOK16','Accessories Operasi Komunikasi','Kabel PVC 2 x 2 x 0.6 mm, @ 500 meter, Merk Supreme',10,'Roll'),
('AOK17','Accessories Operasi Komunikasi','Kabel UTP Cat. 5 Lucent, @ 1000 Feet, Merk Balden, label violet',7,'Roll'),
('AOK18','Accessories Operasi Komunikasi','Kabel UTP Cat. 6  @ 1000 Feet, Merk Balden, label violet',1,'Roll'),
('AOK19','Accessories Operasi Komunikasi','Kabel Drop Wire 1 x 2 x 0.6 mm, @ 500 meter, Merk Supreme ',7000,'Roll'),
('AOK20','Accessories Operasi Komunikasi','Jumper Wire, 1 X 2 X 0.6 mm, @ 500 meter, Merk Supreme',0,'Roll'),
('AOR01','Accessories Operasi Radio','Kabel Loudspeeker Toyo Saki Japan, 1 x 2 x 2.5 mm, @ 100 meter',0,'Roll'),
('AOR02','Accessories Operasi Radio','Kabel Mic Canare @ 50 meter',0,'Roll'),
('AOR03','Accessories Operasi Radio','Coaxial Cable TV RG- 29, 75Ohm, @ 100 meter',0,'Meter'),
('AOR04','Accessories Operasi Radio','Coaxial Cable TV RG-59, 75 Ohm, @ 100 meter',1,'Meter'),
('AOR05','Accessories Operasi Radio','Male dan Female Canon Jack',0,'Set'),
('AOR06','Accessories Operasi Radio','Jack Phone Male Cable NC3FXX',3,'Pcs'),
('AOR07','Accessories Operasi Radio','Speakon Cable Connector X-LNIE / 4 Pole NL4FX / NLPFC',7,'Pcs'),
('AOR08','Accessories Operasi Radio','Speakon Cable Connector Chasis / 4 pole NL4MD-V',7,'Pcs'),
('AOR09','Accessories Operasi Radio','Jack Microfon Canon Neutric Female (MC3FX)',10,'Pcs'),
('AOR10','Accessories Operasi Radio','Jack Microfon Canon Neutric Male (NC3MX) / (CC3MX)',0,'Pcs'),
('AOR11','Accessories Operasi Radio','Jact Phone Neutric Mono (NP2C)',9,'Pcs'),
('AOR12','Accessories Operasi Radio','Microfon wireless jack Audio 3.5 mm Stereo merk Neutric',10,'Pcs'),
('AOR13','Accessories Operasi Radio','Steaker kaki 3 ke 2 merk Zodiac',5,'Pcs'),
('AOR14','Accessories Operasi Radio','Tape Lebel Printer Type Casio EZ lebel tape XR-9WE1-Putih',6,'Pcs'),
('AOR15','Accessories Operasi Radio','Cable Duct 25 x 16 mm',0,'Pcs'),
('AOR16','Accessories Operasi Radio','Vinyl Electrical Isolation tape 3M, Scotch 33, (19 mm x 20.1 m x 0.177 mm)',0,'Roll'),
('AOR17','Accessories Operasi Radio','Rubber Electrical Isolation tape 3M, Scotch 23, (19 mm x 9.1 m x 0.761 mm)',10,'Roll'),
('AOR18','Accessories Operasi Radio','Pengeras Suara / Diaphragm ZG-30D-A (Mimbran) TOA',0,'Pcs'),
('AOR19','Accessories Operasi Radio','Timah Solder 0.85 mm',0,'Roll'),
('AOR20','Accessories Operasi Radio','Contact Cleaner Flamable',0,'Kaleng'),
('AOR21','Accessories Operasi Radio','Contact Cleaner Unflamable',0,'Kaleng'),
('AOR22','Accessories Operasi Radio','Paint Spray / Cat Semprot Putih',0,'Kaleng'),
('AOR23','Accessories Operasi Radio','Paint Spray / Cat Semprot Hitam',3,'Kaleng'),
('AOR24','Accessories Operasi Radio','Paku Scrup + Viser',0,'Pcs'),
('AOR25','Accessories Operasi Radio','Klim kabel + Paku Baja',3,'Pcs'),
('AP001','Accessories Printer','Toner HP lserjet Q6001A for 1600,2600, 2065 cyan',2,'Pcs'),
('AP002','Accessories Printer','Toner HP lserjet Q6003A for 1600,2600, 2065 magenta',2,'Pcs'),
('AP003','Accessories Printer','Toner HP lserjet Q6002A for 1600,2600, 2065 yellow',2,'Pcs'),
('AP004','Accessories Printer','Printhead HP Dj. Z6200 Photo Black and Light Gray (CE020A)',41,'Pcs'),
('AP005','Accessories Printer','Clean Head Ploter HP Z6200 (CH644A)',7,'Pcs'),
('AP006','Accessories Printer','Toner HP laserjet CE401A for M551, 500, mfp 575 ( 507A ) cyan',6,'Pcs'),
('AP007','Accessories Printer','Toner HP laserjet CE403A for M551, 500, mfp 575 ( 507A ) magenta',5,'Pcs'),
('AP008','Accessories Printer','Toner HP laserjet CE402A for M551, 500, mfp 575 ( 507A ) yellow',3,'Pcs'),
('BT001','Battery','Battery 1.5 Volt, Size \"AA\"',0,'Pcs'),
('BT002','Battery','Battery 1.5 Volt, Size \"AAA\"',0,'Pcs'),
('BT003','Battery','Battery 1.5 Volt, Size \"C\"',2,'Pcs'),
('BT004','Battery','Battery 1.5 Volt, Size \"D\"',1,'Pcs'),
('BT005','Battery','Battery 9 Volt',100,'Pcs'),
('BT006','Battery','Battery 9 Volt, Recharge',5,'Pcs'),
('BT007','Battery','Battery Lead Acid  type Dry Charged, 12 Volt, Cap. 200AH,',0,'Pcs'),
('BT008','Battery','Battery Handy Talky ATS 2500 IS',7,'Pcs'),
('DD001','Disk Drive','CD - R',1,'Pcs'),
('DD002','Disk Drive','CD  - RW',1,'Pcs'),
('DD003','Disk Drive','DVD-R',5,'Pcs'),
('DD004','Disk Drive','Flash Disk USB 16 GB',6,'Pcs'),
('RCP01','Ribbon Catridge Printer','Ribbon Pack Epson LQ 2090 /S015586',10,'Pcs'),
('RCP02','Ribbon Catridge Printer','Ribbon Pack Epson LX 300+ S015516 / for 8750',47,'Pcs'),
('RCP03','Ribbon Catridge Printer','Ribbon Pack Epson LX 310 /S015632',4,'Pcs'),
('RCP04','Ribbon Catridge Printer','Ribbon cartr. colour YMCK Fargo HDP5000, PN 84051',0,'Pcs'),
('RCP05','Ribbon Catridge Printer','Ribbon cartr. HDP Retransfer Film Fargo HDP5000, PN 84053',0,'Pcs'),
('RCP06','Ribbon Catridge Printer','Ribbon Premium Black Fargo HDP5000, PN 84060',0,'Pcs'),
('RCP07','Ribbon Catridge Printer','Cleaning Kit Fargo HDP5000, PN 89200',60,'Pcs'),
('RPP01','Ribbon Pack Printer','Ribbon Pack LQ-2170/2180 #S010031',29,'Pcs'),
('TCH01','Toner cartridge HP laserjet Q7516A for 5200 black','Toner xerox cartridge CT200805 for C3055 series black',10,'Pcs'),
('TCL01','Toner Cartridge Printer Laser Jet','Ink Cartridge Brother  color MFC-J200 LC539 XL BK black',31,'Pcs'),
('TCL02','Toner Cartridge Printer Laser Jet','Ink Cartridge Brother  color MFC-J200 LC539 XL C cyan',5,'Pcs'),
('TCL03','Toner Cartridge Printer Laser Jet','Ink Cartridge Brother  color MFC-J200 LC539 XL M magenta',6,'Pcs'),
('TCL04','Toner Cartridge Printer Laser Jet','Ink Cartridge Brother  color MFC-J200 LC539 XL Y yellow',7,'Pcs'),
('TCL05','Toner Cartridge Printer Laser Jet','Ink Cartridge HP 704 black CN692A for HP Deskjet Ink  2060 All-in-One',3,'Pcs'),
('TCL06','Toner Cartridge Printer Laser Jet','Ink Cartridge HP 704 color CN693A for HP Deskjet Ink  2060 All-in-One',7,'Pcs'),
('TCL07','Toner Cartridge Printer Laser Jet','Ink Cartridge HP 860 black F6V27  HP Deskjet Ink  ',8,'Pcs'),
('TCL08','Toner Cartridge Printer Laser Jet','Ink Cartridge HP 860 tri color F6V26  HP Deskjet Ink  ',16,'Pcs'),
('TCL09','Toner Cartridge Printer Laser Jet','Toner HP LJ  Pro.CP1525N (CE320A), black',7,'Pcs'),
('TCL10','Toner Cartridge Printer Laser Jet','Toner HP LJ  Pro.CP1525N (CE321A), cyan',6,'Pcs'),
('TCL11','Toner Cartridge Printer Laser Jet','Toner HP LJ  Pro.CP1525N (CE322A), yellow',16,'Pcs'),
('TCL12','Toner Cartridge Printer Laser Jet','Toner HP LJ  Pro.CP1525N (CE323A), magenta ',13,'Pcs'),
('TCL13','Toner Cartridge Printer Laser Jet','Toner Cartr. HP Lj  Pro MFP 125  Series (CF283A)',7,'Pcs'),
('TCL14','Toner Cartridge Printer Laser Jet','Toner HP LJ  1536DMF (CE278A)',17,'Pcs'),
('TCL15','Toner Cartridge Printer Laser Jet','Toner HP Lj. CP 200MFP M276NW 131A (CF210A) black',17,'Pcs'),
('TCL16','Toner Cartridge Printer Laser Jet','Toner HP Lj. CP 200MFP M276NW 131A (CF211A) Cyan',0,'Pcs'),
('TCL17','Toner Cartridge Printer Laser Jet','Toner HP Lj. CP 200MFP M276NW 131A (CF212A)  yellow',0,'Pcs'),
('TCL18','Toner Cartridge Printer Laser Jet','Toner HP Lj. CP 200MFP M276NW 131A (CF213A) magenta',9,'Pcs'),
('TCL19','Toner Cartridge Printer Laser Jet','Toner HP Lj. Enterprise M750 (CE270A), black',9,'Pcs'),
('TCL20','Toner Cartridge Printer Laser Jet','Toner HP Lj. Enterprise M750 (CE271A), cyan',14,'Pcs'),
('TCL21','Toner Cartridge Printer Laser Jet','Toner HP Lj. Enterprise M750 (CE272A), yellow',14,'Pcs'),
('TCL22','Toner Cartridge Printer Laser Jet','Toner HP Lj. Enterprise M750 (CE273A), magenta',13,'Pcs'),
('TCL23','Toner Cartridge Printer Laser Jet','Toner Cartr. Fx. Doc. M355df (CT201938)',13,'Pcs'),
('TCL24','Toner Cartridge Printer Laser Jet','Toner Cartr. Fx. Doc. CM305df (CT201632) black',14,'Pcs'),
('TCL25','Toner Cartridge Printer Laser Jet','Toner Cartr. Fx. Doc. CM305df (CT201633) cyan',19,'Pcs'),
('TCL26','Toner Cartridge Printer Laser Jet','Toner Cartr. Fx. Doc. CM305df (CT201634) magenta',13,'Pcs'),
('TCL27','Toner Cartridge Printer Laser Jet','Toner Cartr. Fx. Doc. CM305df (CT201635) yellow',11,'Pcs'),
('TCP01','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE037A) Matte Black',0,'Pcs'),
('TCP02','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE038CA) Chromatic Red',0,'Pcs'),
('TCP03','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE039A) Magenta',0,'Pcs'),
('TCP04','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE040A) Yellow',2,'Pcs'),
('TCP05','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE041A) Light Magenta',1,'Pcs'),
('TCP06','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE042A) Light Cyan',1,'Pcs'),
('TCP07','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE043A) Photo Black',1,'Pcs'),
('TCP08','Tinta Cartr. Printer Desk Jet','Tinta Cartr. HP Designjet Z6200 (CE04A) Light Gray',10,'Pcs'),
('TCP09','Tinta Cartr. Printer Desk Jet','Ink Cartride HP Officejet color CN054AA XL 7110 cyan',10,'Pcs'),
('TCP10','Tinta Cartr. Printer Desk Jet','Ink Cartride HP Officejet color  CN055AA XL 7110 magenta',10,'Pcs');

/*Table structure for table `datapengguna` */

DROP TABLE IF EXISTS `datapengguna`;

CREATE TABLE `datapengguna` (
  `IDPengguna` INT(11) NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(50) NOT NULL,
  `Password` VARCHAR(50) NOT NULL,
  `Role` INT(11) NOT NULL,
  PRIMARY KEY (`IDPengguna`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `datapengguna` */

INSERT  INTO `datapengguna`(`IDPengguna`,`Username`,`Password`,`Role`) VALUES 
(1,'admin','d79dd77a1e65ea4861b4ebb23759d9d0',1),
(2,'warehouse','94ee97afd1bd3d34714bad98837096e0',2);

/*Table structure for table `transaksibarang` */

DROP TABLE IF EXISTS `transaksibarang`;

CREATE TABLE `transaksibarang` (
  `IDTransaksi` VARCHAR(10) NOT NULL,
  `IDBarang` VARCHAR(10) NOT NULL,
  `NamaBarang` VARCHAR(100) NOT NULL,
  `TanggalTransaksi` DATE NOT NULL,
  `JumlahTransaksi` INT(11) NOT NULL,
  `SatuanStok` VARCHAR(10) NOT NULL,
  `Keterangan` VARCHAR(100) NOT NULL,
  `Status` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`IDTransaksi`),
  KEY `transaksibarang_ibfk_1` (`IDBarang`),
  CONSTRAINT `transaksibarang_ibfk_1` FOREIGN KEY (`IDBarang`) REFERENCES `databarang` (`IDBarang`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `transaksibarang` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

SELECT * FROM databarang;