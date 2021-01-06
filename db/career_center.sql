-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Agu 2018 pada 12.05
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `career_center`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_admin`
--

CREATE TABLE IF NOT EXISTS `akun_admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_admin`
--

INSERT INTO `akun_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_alumni`
--

CREATE TABLE IF NOT EXISTS `akun_alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama_alumni` varchar(100) NOT NULL,
  `j_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_alumni` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_alumni`
--

INSERT INTO `akun_alumni` (`id_alumni`, `nama_alumni`, `j_kelamin`, `tgl_lahir`, `program_studi`, `tahun_masuk`, `tahun_lulus`, `email`, `no_hp`, `password`, `foto_alumni`) VALUES
(21350041, 'Rizal Adhietya', 'Pria', '1985-01-17', 'Teknik Informatika', 2002, 2007, 'fr334x@gmail.com', '81809684917', '1234', '20180821064501default-user-image.png'),
(31350030, 'Muhammad Alamsyah', 'Pria', '1976-06-16', 'Teknik Informatika', 2003, 2007, 'muh_alamsyah2000@yahoo.com', '8129539840', '1234', '20180821064501default-user-image.png'),
(41350038, 'Jayadi suparno', 'Pria', '1985-12-05', 'Teknik Informatika', 2004, 2008, 'Jayadi.Suparno@yahoo.co.id', '81909353734', '1234', '20180821064501default-user-image.png'),
(61351022, 'Dede Irmayanti', 'Wanita', '1987-04-12', 'Teknik Informatika', 2006, 2010, 'de2irmayanti@gmail.com', '85759284004', '1234', '20180821064501default-user-image.png'),
(71331006, 'Denna Kusdiana', 'Pria', '1989-12-12', 'Management Industri', 2007, 2010, 'denna.azah@gmail.com', '81383399959', '1234', '20180821064501default-user-image.png'),
(71351045, 'Wiro Sugeng Jatniko', 'Pria', '1989-04-05', 'Teknik Informatika', 2007, 2012, 'ws.zatniko@gmail.com', '81210144237', '1234', '20180821064501default-user-image.png'),
(81351044, 'Firmansyah ramdani', 'Pria', '1991-04-03', 'Teknik Informatika', 2008, 2014, 'firmansyahramdani63@gmail.com', '8111110509', '1234', '20180821064501default-user-image.png'),
(81351059, 'MOCHZEN GITO RESMI', 'Pria', '1990-03-01', 'Teknik Informatika', 2008, 2012, 'Mochzen_90@yahoo.com', '81213630003', '1234', '20180821064501default-user-image.png'),
(81351061, 'muhamad agus sunandar', 'Pria', '1990-08-14', 'Teknik Informatika', 2008, 2012, 'agoes.61@gmail.com', '88955667789', '1234', '20180821064501default-user-image.png'),
(81351085, 'Sugeng santosa', 'Pria', '1986-05-20', 'Teknik Informatika', 2008, 2013, 'Sugeng.santosa86@gmail.com', '85624866629', '1234', '20180821064501default-user-image.png'),
(81351106, 'Mamat Muhamad', 'Pria', '1990-07-31', 'Teknik Informatika', 2008, 2013, 'adbajri@yahoo.com', '89693233340', '1234', '20180821064501default-user-image.png'),
(91151004, 'Ahmad Hasan', 'Pria', '1991-02-10', 'Teknik Industri', 2009, 2013, 'ahmad.hasan.alif@gmail.com', '85600333585', '1234', '20180821064501default-user-image.png'),
(91151013, 'Gustian Manggala Swara', 'Pria', '1991-08-15', 'Teknik Industri', 2009, 2013, 'ti_gustian@yahoo.com', '85780009717', '1234', '20180821064501default-user-image.png'),
(91331010, 'Rudi ramdan permana ', 'Pria', '1983-06-12', 'Management Industri', 2009, 2014, 'Rudiramdan2@gmail.com', '85846455157', '1234', '20180821064501default-user-image.png'),
(91351033, 'PUTRA MANDA', 'Pria', '1989-12-20', 'Teknik Informatika', 2009, 2014, 'andha_putraminang@yahoo.com', '82111003267', '1234', '20180821064501default-user-image.png'),
(91351075, 'Luki Ridzkiana Rohmani', 'Pria', '1986-05-26', 'Teknik Informatika', 2009, 2014, 'luki.rohmani@mncgroup.com', '6,28E+11', '1234', '20180821064501default-user-image.png'),
(91351084, 'RIZKY HARIS FIRDAUS', 'Pria', '1989-09-15', 'Teknik Informatika', 2009, 2015, 'ibrameazza@gmail.com', '85759148986', '1234', '20180821064501default-user-image.png'),
(91351085, 'Rovina erviyana', 'Pria', '1992-01-21', 'Teknik Informatika', 2009, 2014, 'rovina.erviyana@gmail.com', '81909503610', '1234', '20180821064501default-user-image.png'),
(101151015, 'Raden Galih Krisna Murti Permana', 'Pria', '1992-05-06', 'Teknik Industri', 2000, 2014, 'galih.murti@gmail.com', '81290072450', '1234', '20180821064501default-user-image.png'),
(101151017, 'Rio.Napitupulu', 'Pria', '1992-08-15', 'Teknik Industri', 2010, 2014, 'sriyos@ymail.com', '81930756831', '1234', '20180821064501default-user-image.png'),
(101251035, 'Widi.Santoso', 'Pria', '1992-02-28', 'Teknik Mesin', 2010, 2014, 'Widi.santoso1992@gmail.com', '85891517015', '1234', '20180821064501default-user-image.png'),
(101251041, 'Dias Aditya Pratama', 'Pria', '1991-04-02', 'Teknik Mesin', 2010, 2015, 'Diasaditya21@gmail.com', '85780083766', '1234', '20180821064501default-user-image.png'),
(101251042, 'Samson Siburian', 'Pria', '1990-08-13', 'Teknik Mesin', 2010, 2014, 'Samsonsiburian112@yahoo.com', '81210787246', '1234', '20180821064501default-user-image.png'),
(101351013, 'Arief Bestari', 'Pria', '1992-10-10', 'Teknik Informatika', 2010, 2015, 'Ariefbestari123@gmail.com', '81909300329', '1234', '20180821064501default-user-image.png'),
(101351039, 'Iik Ropikoh', 'Wanita', '1992-01-01', 'Teknik Informatika', 2010, 2015, 'Fiqqroh@gmail.com', '6,29E+12', '1234', '20180821064501default-user-image.png'),
(101351055, 'Mansyur Jauharuddin', 'Pria', '1992-12-15', 'Teknik Informatika', 2010, 2015, 'mjauharuddin@gmail.com', '85797877377', '1234', '20180821064501default-user-image.png'),
(101351060, 'Nenden vivy', 'Wanita', '1991-08-26', 'Teknik Informatika', 2010, 2015, 'Nendenvivy@gmail.com', '85759915546', '1234', '20180821064501default-user-image.png'),
(101351088, 'Urip Sutaryo', 'Pria', '1984-04-18', 'Teknik Informatika', 2010, 2017, 'urip.sutaryo@gmail.com', '85697426124', '1234', '20180821064501default-user-image.png'),
(111131003, 'Diah Hari Anjani', 'Wanita', '1992-09-15', 'Teknik Tekstil', 2011, 2015, 'Diahh.anjani@gmail.com', '85798933303', '1234', '20180821064501default-user-image.png'),
(111131034, 'Nano Andiyana. ST', 'Pria', '1985-12-26', 'Teknik Industri', 2011, 2015, 'nanoandiyana4@gmail.com', '82211344781', '1234', '20180821064501default-user-image.png'),
(111251013, 'Bayu Zulfikar', 'Pria', '1993-07-16', 'Teknik Mesin', 2011, 2016, 'bayu.tm11@gmail.com', '', '1234', '20180821064501default-user-image.png'),
(111251042, 'Restu arrasyidin nugroho', 'Pria', '1993-09-04', 'Teknik Mesin', 2011, 2016, 'restu.arrasyidin@gmail.com', '85759086908', '1234', '20180821064501default-user-image.png'),
(111251046, 'Yanuat Ardiansyah', 'Pria', '1993-01-28', 'Teknik Mesin', 2011, 2016, 'ardiansyah661@gmail.com', '81210228173', '1234', '20180821064501default-user-image.png'),
(111331001, 'Andika Pratama Putra', 'Pria', '1992-03-25', 'Management Industri', 2011, 2015, 'dikhapratama238@gmail.com', '8977183404', '1234', '20180821064501default-user-image.png'),
(111331010, 'Ipan sumarna', 'Pria', '1981-07-14', 'Management Industri', 2011, 2014, 'Ipansumarna3@gmail.com', '81316311236', '1234', '20180821064501default-user-image.png'),
(111331013, 'NOVITA SARI SIBURIAN', 'Wanita', '1991-11-27', 'Management Industri', 2011, 2015, 'novhytha@gmail.com', '85775646453', '1234', '20180821064501default-user-image.png'),
(111351004, 'Ajat Sudrajat', 'Pria', '1982-03-03', 'Teknik Informatika', 2011, 2016, 'ajatsudrajat509@gmail.com', '85280593980', '1234', '20180821064501default-user-image.png'),
(111351012, 'aning supriadi', 'Pria', '1993-06-26', 'Teknik Informatika', 2011, 2016, 'aningsupriadi@gmail.com', '85759305648', '1234', '20180821064501default-user-image.png'),
(111351038, 'Haris Ratno Pambudi', 'Pria', '1994-01-06', 'Teknik Informatika', 2011, 2015, 'harisratnopambudi@gmail.com', '87784477751', '1234', '20180821064501default-user-image.png'),
(111351054, 'Indra Ahmad Iskandar', 'Pria', '1992-03-26', 'Teknik Informatika', 2011, 2015, 'indraiskandar10@gmail.com', '85872375192', '1234', '20180821064501default-user-image.png'),
(111351061, 'Khalid', 'Pria', '1993-07-18', 'Teknik Informatika', 2011, 2016, 'Khalidbajrei@gmail.com', '89642335002', '1234', '20180821064501default-user-image.png'),
(111351088, 'Tresna Dwi Firmansyah ', 'Pria', '1992-06-29', 'Teknik Informatika', 2011, 2016, 'rahadiantresnadwi@gmail.com', '81909444128', '1234', '20180821064501default-user-image.png'),
(111351095, 'Rian Apriansyah Sugianto', 'Pria', '1991-04-13', 'Teknik Informatika', 2011, 2016, 'rian.apsu@gmail.com', '89607072719', '1234', '20180821064501default-user-image.png'),
(111351131, 'Agus Suwarno', 'Pria', '1992-07-24', 'Teknik Informatika', 2011, 2015, 'Agoez.2370@gmail.com', '85647558920', '1234', '20180821064501default-user-image.png'),
(121151015, 'at nurhidayat', 'Pria', '1989-04-22', 'Teknik Industri', 2012, 2016, 'at29nurhidayat@gmail.com', '89504376146', '1234', '20180821064501default-user-image.png'),
(121151022, 'Erry Pratama', 'Pria', '1992-05-17', 'Teknik Industri', 2012, 2016, 'errytama17@gmail.com', '81572242212', '1234', '20180821064501default-user-image.png'),
(121151023, 'Eru Fandi', 'Pria', '1987-02-24', 'Teknik Industri', 2012, 2016, 'erufandi@gmail.com', '82125759627', '1234', '20180821064501default-user-image.png'),
(121151026, 'Fahmi Basya', 'Pria', '1990-09-26', 'Teknik Industri', 2012, 2016, 'fahmi_bas26@yahoo.com', '85224223369', '1234', '20180821064501default-user-image.png'),
(121151029, 'Hanifah hediyatin', 'Wanita', '1994-03-10', 'Teknik Industri', 2012, 2016, 'hanifahgediyatin38@gmail.com', '81909558563', '1234', '20180821064501default-user-image.png'),
(121151041, 'OLGA IKHSAN NURHAKIM', 'Pria', '1994-12-22', 'Teknik Industri', 2012, 2016, 'olgaikhsan@gmail.com', '81909309673', '1234', '20180821064501default-user-image.png'),
(121151044, 'Maria ulfa', 'Wanita', '1994-05-25', 'Teknik Industri', 2012, 2016, 'Mulfa982@gmail.com', '81291806123', '1234', '20180821064501default-user-image.png'),
(121151080, 'Pupun Kurniasih', 'Wanita', '1993-04-10', 'Teknik Industri', 2012, 2016, 'Pupunscan@gmail.com', '87778983246', '1234', '20180821064501default-user-image.png'),
(121151082, 'irfan andiyansyah', 'Pria', '1988-05-15', 'Teknik Industri', 2012, 2016, 'irfanandiyansyah@yahoo.co.id', '85759222113', '1234', '20180821064501default-user-image.png'),
(121331005, 'AmirudinHamzah', 'Pria', '1991-07-12', 'Management Industri', 2012, 2015, 'Amirudinhmzh@gmail.com', '81296601115', '1234', '20180821064501default-user-image.png'),
(121331008, 'Ati Latifah', 'Wanita', '1994-03-08', 'Management Industri', 2012, 2015, 'cakung124@gmail.com', '89622741705', '1234', '20180821064501default-user-image.png'),
(121331011, 'Derry ferdian novrianto', 'Pria', '1993-11-14', 'Management Industri', 2012, 2015, 'Ferdian.derry@gmail.com', '85795774993', '1234', '20180821064501default-user-image.png'),
(121331016, 'Iwan Setiawan', 'Pria', '1994-06-16', 'Management Industri', 2012, 2015, 'irwansetiawan68914@yahoo.com', '87779903422', '1234', '20180821064501default-user-image.png'),
(121331019, 'Maya suwanda rini', 'Wanita', '1993-05-10', 'Management Industri', 2012, 2015, 'mayasuwanda@gmail.com', '82299684422', '1234', '20180821064501default-user-image.png'),
(121331022, 'Nopitasari', 'Wanita', '1994-11-11', 'Management Industri', 2012, 2015, 'Novitha.amor@gmail.com', '87778903855', '1234', '20180821064501default-user-image.png'),
(121331024, 'Rekha Chintia', 'Wanita', '1993-05-15', 'Management Industri', 2012, 2015, 'rekhachintia@gmail.com', '85759112511', '1234', '20180821064501default-user-image.png'),
(121331025, 'Resty aulia septiani', 'Wanita', '1994-09-03', 'Management Industri', 2012, 2015, 'restyseptiani003@gmail.com', '89630453732', '1234', '20180821064501default-user-image.png'),
(121331027, 'SRI RATNA WULAN', 'Wanita', '1995-03-30', 'Management Industri', 2012, 2015, 'sratna.w@gmail.com', '8562237010', '1234', '20180821064501default-user-image.png'),
(121331030, 'Vini fitriani', 'Wanita', '1994-03-20', 'Management Industri', 2012, 2015, 'vinifitriani51@gmail.com', '81280122102', '1234', '20180821064501default-user-image.png'),
(121331034, 'awaludin fajar', 'Pria', '1994-04-04', 'Management Industri', 2012, 2015, 'awalfajar4444@gmail.com', '81281106702', '1234', '20180821064501default-user-image.png'),
(121351017, 'Andi Sukmayadi', 'Pria', '1994-06-01', 'Teknik Informatika', 2012, 2016, 'andisukmayadi60@gmail.com', '83815547467', '1234', '20180821064501default-user-image.png'),
(121351021, 'Ari Dewi Puspita', 'Wanita', '1994-05-26', 'Teknik Informatika', 2012, 2017, 'dewiari07@gmail.com', '85659957281', '1234', '20180821064501default-user-image.png'),
(121351026, 'Arina Rizqi Utami', 'Wanita', '1994-09-19', 'Teknik Informatika', 2012, 2016, 'Arina19.ar@gmail.com', '83816187994', '1234', '20180821064501default-user-image.png'),
(121351034, 'Dani Ramdani Purnama', 'Pria', '1985-11-25', 'Teknik Informatika', 2012, 2016, 'dani26112011@gmail.com', '83844753687', '1234', '20180821064501default-user-image.png'),
(121351036, 'deni sopian', 'Pria', '1990-07-02', 'Teknik Informatika', 2012, 2017, 'denniesofyan@gmail.com', '85759916789', '1234', '20180821064501default-user-image.png'),
(121351052, 'Fadel Muhammad', 'Pria', '1994-01-09', 'Teknik Informatika', 2012, 2016, 'fadel.mrajab@gmail.com', '83817778393', '1234', '20180821064501default-user-image.png'),
(121351061, 'Gindriyani', 'Wanita', '1994-10-11', 'Teknik Informatika', 2012, 2016, 'indri9644@gmail.com', '81288686780', '1234', '20180821064501default-user-image.png'),
(121351075, 'Irpan Hidayat Pamil', 'Pria', '1992-06-09', 'Teknik Informatika', 2012, 2016, 'irpanhidayatpamil.ip@gmail.com', '85216008066', '1234', '20180821064501default-user-image.png'),
(121351080, 'Kusdiyanto', 'Pria', '1992-08-30', 'Teknik Informatika', 2012, 2016, 'kusdiyantodiyant@gmail.com', '85926086262', '1234', '20180821064501default-user-image.png'),
(121351089, 'MOCHAMMAD YUSUP ISKANDAR', 'Pria', '1994-09-23', 'Teknik Informatika', 2012, 2016, 'Iskandaryusup23@yahoo.com', '87879610887', '1234', '20180821064501default-user-image.png'),
(121351091, 'Muhammad Iqbal Nyomba', 'Pria', '1992-10-12', 'Teknik Informatika', 2012, 2016, 'muhammadiqbal12101992@gmail.com', '85861235620', '1234', '20180821064501default-user-image.png'),
(121351121, 'RIZAL AKBAR FAUZI', 'Pria', '1990-06-02', 'Teknik Informatika', 2012, 2016, 'Akbarrizal24@gmail.com', '83824664874', '1234', '20180821064501default-user-image.png'),
(121351123, 'Roberca Dea Megasari', 'Wanita', '1994-11-17', 'Teknik Informatika', 2012, 2016, 'rdmsbeka@gmail.com', '85721006200', '1234', '20180821064501default-user-image.png'),
(121351137, 'Tono Hartono', 'Pria', '1991-12-10', 'Teknik Informatika', 2012, 2016, 'tono.hartono48@gmail.com', '88211282529', '1234', '20180821064501default-user-image.png'),
(121351141, 'Virgiansyah Surya Diwanda', 'Pria', '1992-09-14', 'Teknik Informatika', 2012, 2016, 'virgiansyahsuryad@gmail.com', '85926121734', '1234', '20180821064501default-user-image.png'),
(121351148, 'Yuda andika rakhman', 'Pria', '1994-05-30', 'Teknik Informatika', 2012, 2016, 'Om.yudaandika@gmail.com', '87708475051', '1234', '20180821064501default-user-image.png'),
(121351149, 'YUDHI NUGRAHA MARTHA', 'Pria', '1993-11-27', 'Teknik Informatika', 2012, 2016, 'yudhinmartha@gmail.com', '83816954503', '1234', '20180821064501default-user-image.png'),
(121351168, 'Eti Haryati', 'Wanita', '1993-08-25', 'Teknik Informatika', 2012, 2016, 'etiharyati2508@gmail.com', '85692155520', '1234', '20180821064501default-user-image.png'),
(121351176, 'Nurdin Cahyadi', 'Pria', '1990-08-13', 'Teknik Informatika', 2012, 2017, 'noerdin90@gmail.com', '81286141634', '1234', '20180821064501default-user-image.png'),
(121352166, 'Rendy Apriyandi', 'Pria', '1987-04-09', 'Teknik Informatika', 2012, 2015, 'randy090487@gmail.com', '85926162777', '1234', '20180821064501default-user-image.png'),
(131151046, 'Agung Maulana', 'Pria', '1994-05-17', 'Teknik Industri', 2013, 2017, 'agungmaul01@gmail.com', '85797400054', '1234', '20180821064501default-user-image.png'),
(131151057, 'Arief aditya wiharja', 'Pria', '1992-09-30', 'Teknik Industri', 2013, 2017, 'arief.aw30@gmail.com', '81288130307', '1234', '20180821064501default-user-image.png'),
(131151081, 'Indra kurniantoro', 'Pria', '1992-10-13', 'Teknik Industri', 2013, 2017, 'Indrajidd15@gmail.com', '85732565035', '1234', '20180821064501default-user-image.png'),
(131151131, 'ASEP ANGGA SUHENDAR', 'Pria', '1993-01-26', 'Teknik Industri', 2013, 2017, 'asepaangga26@gmail.com', '82213224414', '1234', '20180821064501default-user-image.png'),
(131251066, 'Diyas Tri Prastian', 'Pria', '1990-11-14', 'Teknik Mesin', 2013, 2017, 'diyastriprastian@gmail.com', '81282924526', '1234', '20180821064501default-user-image.png'),
(131331002, 'adi kurniawan', 'Pria', '1991-10-22', 'Management Industri', 2013, 2016, 'adikurniaw4n@gmail.com', '81574925482', '1234', '20180821064501default-user-image.png'),
(131331006, 'chandra restu pratama', 'Pria', '1991-01-06', 'Management Industri', 2013, 2016, 'charestama@gmail.com', '85721672647', '1234', '20180821064501default-user-image.png'),
(131331007, 'Dedi Purwanto', 'Pria', '1990-12-06', 'Management Industri', 2013, 2016, 'Dedi.DhedHonks@gmail.com', '89656458442', '1234', '20180821064501default-user-image.png'),
(131331008, 'Dendi yanuar sandika', 'Pria', '1993-01-14', 'Management Industri', 2013, 2016, 'Dendisandika19@gmail.com', '83817703658', '1234', '20180821064501default-user-image.png'),
(131331017, 'Lukman Nurahman ', 'Pria', '1985-04-23', 'Management Industri', 2013, 2016, 'lukmannurahman@gmail.com', '85217982781', '1234', '20180821064501default-user-image.png'),
(131331019, 'Nelisa', 'Wanita', '1994-02-07', 'Management Industri', 2013, 2016, 'budimannelisa@gmail.com', '85724470007', '1234', '20180821064501default-user-image.png'),
(131331023, 'Retno Agung Darmaningsih', 'Wanita', '1995-05-10', 'Management Industri', 2013, 2016, 'Retnoagung27@gmail.com', '87778812923', '1234', '20180821064501default-user-image.png'),
(131331026, 'Risca mustika sari dewi', 'Wanita', '1995-02-16', 'Management Industri', 2013, 2016, 'riscamustika16@gmail.com', '87760595371', '1234', '20180821064501default-user-image.png'),
(131331029, 'Siti Nurul Afifah', 'Wanita', '1994-02-05', 'Management Industri', 2013, 2016, 'Nurulafifah5294@gmail.com', '82320213962', '1234', '20180821064501default-user-image.png'),
(131331031, 'weni dwi ayu rizqia', 'Wanita', '1995-03-29', 'Management Industri', 2013, 2016, 'dwiayu395@gmail.com', '85759053516', '1234', '20180821064501default-user-image.png'),
(131331034, 'Asep Mulyadi Saleh', 'Pria', '1986-12-06', 'Management Industri', 2013, 2016, 'Lupuzzalfakir@gmail.com', '85759932186', '1234', '20180821064501default-user-image.png'),
(131331041, 'Sumardi', 'Pria', '1991-05-10', 'Management Industri', 2013, 2016, 'mardisu91@gmail.com', '89644494425', '1234', '20180821064501default-user-image.png'),
(131332036, 'Mahmudin', 'Pria', '1993-09-24', 'Management Industri', 2013, 2015, 'Mahumude@gmail.com', '81380589009', '1234', '20180821064501default-user-image.png'),
(131352229, 'HALIMIL FATHI', 'Pria', '1978-10-06', 'Teknik Informatika', 2013, 2016, 'opie06@gmail.com', '87879993011', '1234', '20180821064501default-user-image.png'),
(131352231, 'Ludwi Yusuf', 'Pria', '1994-06-26', 'Teknik Informatika', 2013, 2016, 'yludwi@gmail.com', '87879842754', '1234', '20180821064501default-user-image.png'),
(141152042, 'Eko hikmah ramadhan', 'Pria', '1987-05-22', 'Teknik Industri', 2014, 2016, 'Eckohikmahramadhan@gmail.com', '85659916001', '1234', '20180821064501default-user-image.png'),
(141331002, 'Andri Firmansyah', 'Pria', '1996-06-05', 'Management Industri', 2014, 2017, 'andridebon@gmail.com', '89669084312', '1234', '20180821064501default-user-image.png'),
(141331005, 'Rohanah', 'Wanita', '1994-11-12', 'Management Industri', 2014, 2017, 'rohanah.guna@gmail.com', '82210249618', '1234', '20180821064501default-user-image.png'),
(141331007, 'Dicky maulana', 'Pria', '1994-12-13', 'Management Industri', 2014, 2017, 'Dicky_maulana85@yahoo.com', '85759977698', '1234', '20180821064501default-user-image.png'),
(141331009, 'Dadi daryadi', 'Pria', '1979-05-25', 'Management Industri', 2014, 2017, 'dadidaryadi50@gmail.com', '85860728401', '1234', '20180821064501default-user-image.png'),
(141331011, 'Jenna Ritoria Sitorus', 'Wanita', '1995-01-30', 'Management Industri', 2014, 2017, 'Jennaritoria@gmail.com', '85759240468', '1234', '20180821064501default-user-image.png'),
(141331012, 'Karnoto', 'Pria', '1990-03-12', 'Management Industri', 2014, 2017, 'Karnoto1203@gmail.com', '87779096572', '1234', '20180821064501default-user-image.png'),
(141331013, 'Khairul Purwanto', 'Pria', '1996-09-22', 'Management Industri', 2014, 2017, 'khairulpurwa@gmail.com', '83817957223', '1234', '20180821064501default-user-image.png'),
(141331018, 'Resa Aldiana', 'Wanita', '1996-01-29', 'Management Industri', 2014, 2017, 'aldianaresa14@gmail.com', '81912581019', '1234', '20180821064501default-user-image.png'),
(141331019, 'mariman', 'Pria', '1992-05-18', 'Management Industri', 2014, 2017, 'gomansumpiuh@gmail.com', '85291543968', '1234', '20180821064501default-user-image.png'),
(141331022, 'Tia Rismayanti', 'Wanita', '1995-06-22', 'Management Industri', 2014, 2017, 'tiarismaynt@gmail.com', '85721046622', '1234', '20180821064501default-user-image.png'),
(141331025, 'SARMAN', 'Pria', '1988-09-23', 'Management Industri', 2014, 2017, 'stepanussarman@gmail.com', '81321681211', '1234', '20180821064501default-user-image.png'),
(141331027, 'Sobari Darman', 'Pria', '1991-05-04', 'Management Industri', 2014, 2017, 'sobaridarman77@gmail.com', '83815547470', '1234', '20180821064501default-user-image.png'),
(141331031, 'Winanda alvina', 'Wanita', '1997-04-11', 'Management Industri', 2014, 2017, 'Winandaalvina97@gmail.com', '87779930773', '1234', '20180821064501default-user-image.png'),
(141351093, 'Guruh Sindu Praputra', 'Pria', '1994-06-12', 'Teknik Informatika', 2014, 2018, 'guruhsindu@stt-wastukancana.ac.id', '085743029636', '1234', '20180820080819B612_20160513_164355.jpg'),
(141351211, 'Vinna Afriyanti', 'Wanita', '1994-05-05', 'Teknik Informatika', 2014, 2018, 'vina@gmail.com', '85743029636', '1234', '20180821064501default-user-image.png'),
(141431030, 'Wilda Rahmah', 'Wanita', '1995-04-11', 'Management Industri', 2014, 2017, 'Widabajry@gmail.com', '81912521603', '1234', '20180821064501default-user-image.png'),
(161332001, 'Yudan Sofyan Nugraha', 'Pria', '1992-04-04', 'Management Industri', 2010, 2017, 'yudansofyan040492@gmail.com', '87779851444', '1234', '20180821064501default-user-image.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_consult`
--

CREATE TABLE IF NOT EXISTS `alumni_consult` (
  `id_alumni` int(11) NOT NULL,
  `tgl_input` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `jadwal_consult` varchar(20) NOT NULL,
  `tgl_consult` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `apply_lowongan`
--

CREATE TABLE IF NOT EXISTS `apply_lowongan` (
  `id_alumni` int(11) NOT NULL,
  `file_cv` varchar(100) NOT NULL,
  `date_input` datetime NOT NULL,
  `id_lowongan_kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id_artikel` int(11) NOT NULL,
  `nama_artikel` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_chat_thread`
--

CREATE TABLE IF NOT EXISTS `forum_chat_thread` (
`id_chat` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_thread`
--

CREATE TABLE IF NOT EXISTS `forum_thread` (
`id_thread` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `thread` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `date_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_fair`
--

CREATE TABLE IF NOT EXISTS `job_fair` (
`id_job_fair` int(11) NOT NULL,
  `nama_job_fair` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tgl_test` date NOT NULL,
  `foto_jobfair` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_kerja`
--

CREATE TABLE IF NOT EXISTS `lowongan_kerja` (
`id_lowongan` int(11) NOT NULL,
  `nama_lowongan` varchar(100) NOT NULL,
  `nama_perusahaan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_post` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `tgl_tes` date NOT NULL,
  `foto_loker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mou`
--

CREATE TABLE IF NOT EXISTS `mou` (
`id_mou` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `desk_perusahaan` text NOT NULL,
  `foto_mou` varchar(100) NOT NULL,
  `file_mou` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracer_study`
--

CREATE TABLE IF NOT EXISTS `tracer_study` (
`id_tracerstudy` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `sts_kerja` varchar(10) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `posisi_kerja` varchar(50) NOT NULL,
  `mulai_kerja` varchar(20) NOT NULL,
  `waktu_bfr_kerja` varchar(50) NOT NULL,
  `date_input` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=161332003 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tracer_study`
--

INSERT INTO `tracer_study` (`id_tracerstudy`, `id_alumni`, `sts_kerja`, `nama_perusahaan`, `alamat_perusahaan`, `posisi_kerja`, `mulai_kerja`, `waktu_bfr_kerja`, `date_input`) VALUES
(1, 131352229, 'Sudah', 'PT. Haleyora Powerindo', 'Jl. Kaka. Singawinata', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(2, 81351061, 'Sudah', 'STT. Wastukancana', 'Jl. Cikopak no.  53', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(3, 81351085, 'Sudah', 'Pt. Mayora indah ', 'Jln telesonic tanggerang', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(4, 61351022, 'Sudah', 'STT Wastukancana', 'Jl. Cikopak Purwakarta', 'Administrasi', 'Sesudah Kuliah', '6 - 12 bulan', '0000-00-00 00:00:00'),
(5, 21350041, 'Sudah', 'PT. EAST WEST SEED INDONESIA', 'Jl. Raya Campaka Desa Benteng Purwakarta', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(6, 121351052, 'Sudah', 'PT. XSIS Mitra Utama', 'TCC Batavia Tower One Lt. 33 Jl. KH. Mas Mansyur Kav. 126', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(7, 121351137, 'Sudah', 'PT.Pindodeli Pulp & Paper Mills', 'Karawang', 'Administrasi', 'Sebelum Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(8, 91151004, 'Sudah', 'PT Citra Abadi Sejati', 'Jl Raya Kedung halang No 263 Bogor', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(9, 121151023, 'Sudah', 'PT. Asietex Sinar Indopratama', 'JL. Raya Akses Tol Interchange No.2 Dawuan, Cikampek, Karawang - Jawa Barat. ', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(10, 121151044, 'Sudah', 'Pt sumiindo wiring systems', 'Kawasan industri kota bukit indah', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(11, 121151080, 'Sudah', 'PT. Textile One Indonesia', 'Klari', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(12, 41350038, 'Sudah', 'PT ADIRA ', 'Jl veteran no 77 ciseureuh purwakarta', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(13, 141152042, 'Sudah', 'Pt adira dinamika multi finance tbk', 'Jl ir h juanda sukaseuri-sarimulya-kotabaru-karawang', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(14, 121151082, 'Sudah', 'PT.HMMI', 'BIC', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(15, 101151017, 'Sudah', 'PT. Santos Jaya Abadi', 'Jl.surya cipta karawang timur', 'Administrasi', 'Sebelum Kuliah', '> 12 Bulan', '0000-00-00 00:00:00'),
(16, 111351004, 'Sudah', 'PT.Surya Renggo Container', 'Jl.Maligi 3 KIIC Karawang Barat', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(17, 131331007, 'Sudah', 'PT Win Textile Purwakarta', 'Jatiluhur Purwakarta', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(18, 131331017, 'Sudah', 'PT. HPPM ', 'Kota bukit indah, Kawasan Industri Indotaisei, Sektor 1A Blok S, Kalihurip Cikampek, Karawang 41373 ', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(19, 121351075, 'Sudah', 'PT KALBE MORINAGA INDONESIA', 'Kawasan Industri Indotaisei Sektor 1A Blok Q1, Kota Bukit Indah Cikampek Karawang 41373', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(20, 131331019, 'Sudah', 'PT .Sinarmas Multifinance', 'Jl. Veteran, Nagri Kaler Purwakarta.', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(21, 131331034, 'Sudah', 'PT.Karya Yasantara Cakti', 'Kawasan bukit indah city blok A II - No 4 Purwakarta 41181\r\nJawa Barat Indonesia', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(22, 131331006, 'Sudah', 'PT. Nissan Motor Indonesia', 'Kawasan Industri Bukit Indah Plaza, Lot 1-4, Blok 4. Purwakarta.', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(23, 101151015, 'Sudah', 'Pt. Nissan Motor Indonesia', 'Kota bukit indah Purwakarta', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(24, 101251035, 'Sudah', 'PT.PETRODRILL MANUFAKTUR INDONESIA', 'Kawasan mandala pratama. Jl interchange Dawuan.', 'Administrasi', '', '<6 Bulan', '0000-00-00 00:00:00'),
(25, 131331041, 'Sudah', 'PT. Nissan Motors Indonesia', 'Kawasan Industri Kota Bukit Indah', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(26, 111251013, 'Sudah', 'PT. BFI Finance', 'Jl. Terusan Ibrahim Singadilaga Ruko Taman Pembaharuan no. 5&6', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(27, 101351013, 'Sudah', 'PT.JAPFA COMFEED INDONESIA', 'Jl. Veteran Purwakarta', 'Administrasi', 'Sebelum Kuliah', '> 12 Bulan', '0000-00-00 00:00:00'),
(28, 131331023, 'Sudah', 'Bank CIMB NIAGA', 'Jl.Veteran No 83 Purwakarta', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(29, 121151022, 'Sudah', 'PT.Prima Cahaya Indobeverage', 'Kota Bukit Indah Blok A-II Lot. 11, 12, 14 Purwakarta', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(30, 101351039, 'Sudah', 'PT Dirgantara Grup', 'Purwakarta Jawa Barat ', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(31, 91351085, 'Sudah', 'PT NIPSEA BEE CHEMICAL INDONESIA', 'Jl.raya subang, desa cijaya, kec. Campaka, purwakarta', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(32, 131352231, 'Sudah', 'Dinas Komunikasi Dan Informatika Kabupaten Purwakarta', 'Jl. Kk Singawinata Purwakarta', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(33, 121151026, 'Sudah', 'PT. Suryasmartekindo', 'Delta silicon 6, Delta commercial park 1 blok A16 .', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(34, 111351054, 'Sudah', 'PT Kinenta Indonesia', 'Jl.Cikananga, Cempaka-Purwakarta', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(35, 121151029, 'Sudah', 'PT.Sumi Indo Wiring System', 'Kawasan industri KBI Blok D.II Lot 27-29 Desa Dangdeur, kec.Bungursari, Purwakarta', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(36, 121351026, 'Sudah', 'Perusahaan Daerah Air Minum (PDAM)', 'Jln. Let. Jend. Basuki Rachmat No. 120, Sindangkasih, Kec. Purwakarta, Kab Purwakarta, Jawa Barat 41112', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(37, 111351131, 'Sudah', 'PT Sumi Rubber Indonesia', 'Kawasan industri Indotaisei  Cikampek karawang', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(38, 91151013, 'Sudah', 'PT. Honda Precision Part Mfg', 'Kawasan industri indotaisei sektor 1A blok S kalihurip karawang', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(39, 121331016, 'Sudah', 'PT. Bank Mandiri (persero) Tbk.', 'Jl. Cipeundeuy-subang Mandiri Mitra Usaha Cabang Cipeundeuy, Cluster Subang', 'Administrasi', 'Sebelum Kuliah', '> 12 Bulan', '0000-00-00 00:00:00'),
(40, 31350030, 'Sudah', 'PT Argha Karya Prima Industry Tbk', 'Citereup Bogor', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(41, 121352166, 'Sudah', 'PT.Nittsu Lemo Indonesia Logistik', 'Jl.raya cakung cilincing jakarta timur.kav 14', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(42, 101251041, 'Sudah', 'TUV RHEINLAND IND, PT', 'Menara Karya, Jl. Rasuna said JAKARTA', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(43, 111331013, 'Sudah', 'PT. Hino Motors Manufacturing Indonesia', 'Kawasan Industri Kota Bukit Indah Blok D1 No. 1 Purwakarta 41181 Jawa Barat - Indonesia', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(44, 121331027, 'Sudah', 'PT. PRIMA GENERAL PERSADA', 'JL. raya kosambi no 20 kec. Klari Kab. Karawang', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(45, 121331024, 'Sudah', 'PT. Dada Indonesia', 'Jl. Raya Sadang - Bungursari , Purwakarta 41181', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(46, 121351021, 'Sudah', 'PT. Subang Autocomp Indonesia', 'Jalan Raya Purwakarta - Subang Km. 22 RT 009 RW 003\nDesa Wantilan, Kecamatan Cipeundeuy, Kabupaten Subang - Jawa Barat\nKode Pos 41272  Telp: 0260 460 490\n', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(47, 91351075, 'Sudah', 'PT. Cipta TPI (MNCTV)', 'MNC STUDIOS, TOWER 3, Jl Raya Perjuangan, Kebon Jeruk, Jakarta Barat 11530.', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(48, 121351091, 'Sudah', 'PT Xsis Mitra Utama', 'Graha Tunas Unit C Lantai 5, Jl. Warung Jati Barat No. 63, RT.6/RW.5, Kalibata, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12560', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(49, 121351036, 'Sudah', 'PT SUMI INDO WIRING SYSTEMS', 'KAWASAN KOTA BUKIT INDAH BLOK D2 LOT 27-29\r\nDESA DANGDEUR KECAMATAN BUNGURSARI PURWAKARTA', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(50, 101351060, 'Sudah', 'PT TIRTAKENCANA TATAWARNA', 'Jl. raya bungursari kmp cilame Rt 14/ Rw 08 desa cibening, Purwakarta 41112', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(51, 101251035, 'Sudah', 'PT.PETRODRILL MANUFAKTUR INDONESIA', 'Jl.Raya Interchange desa kamojing kec.cikampek kab.Karawang', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(52, 121331008, 'Sudah', 'PT ELEGANT TEXTILE INDUSTRY', 'Desa Kembang Kuning, Jatiluhur, Purwakarta Jawa Barat', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(53, 121331005, 'Sudah', 'PT. Honda Logistics Indonesia', 'Jl. Mitra Timur IV Blok K No.7-10, Kawasan Industri Mitra Karawang (KIM) Desa Parung Mulya, Kec Ciampel - Karawang 41361 Indonesia', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(54, 111251042, 'Sudah', 'PT.Asia Pacific Fibers', 'Desa Kiara Payung, Kecamatan Klari, Kiarapayung, Klari, Kabupaten Karawang, Jawa Barat 41300', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(55, 121331025, 'Sudah', 'PT. Electronic City,Tbk', 'SCBD jakarta', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(56, 121351176, 'Sudah', 'Dinas Pendidikan Kabupaten Purwakarta', 'Jalan Surawinata No 30A Kabupaten Purwakarta', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(57, 141331009, 'Sudah', 'PT.Sumi Indo Wiring System', 'Kawasan Kota Bukit Indah Blok D 27_29 Bungursari Purwakarta', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(58, 141331018, 'Sudah', 'PT Metro Pearl Indonesia', 'Jl. Pramuka, Bunder, Jatiluhur, Kabupaten Purwakarta, Jawa Barat 41161', 'Administrasi', 'Sebelum Kuliah', '> 12 Bulan', '0000-00-00 00:00:00'),
(59, 141331005, 'Sudah', 'PT Gtekt Indonesia Manufacturing', 'Kawasan induatri indotaisei, kalihurip - karawang', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(60, 141331025, 'Sudah', 'PT. Mitra Usaha Jaya Utama', 'jl. pelajar pejuang. bandung', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(61, 141331027, 'Sudah', 'PT. Finansia Multi Finance', 'Mr dr kusumaatmadja no 62 cipaisan purwakarta', 'Administrasi', 'Sesudah Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(62, 131151081, 'Sudah', 'PT JAPFA COMFEED INDONESIA Tbk', 'Jl Raya Sadang - Subang KM 15.2 Cibatu Purwakarta Jawa Barat', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(63, 131151046, 'Sudah', 'PT Indorama Polychem Indonesia', 'Jatiluhur Purwakarta', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(64, 131151131, 'Sudah', 'PT. HONDA PRICISION PARTS MFG', 'Kota Bukit Indah, Kawasan Industri Indotaisei Sektor 1A, Blok S, Kalihurip Cikampek Karawang 41373 Jawa Barat ', 'Administrasi', 'Sebelum Kuliah', '> 12 Bulan', '0000-00-00 00:00:00'),
(65, 131151057, 'Sudah', 'PT. Furukawa Indomobil Battery Manufacturing', 'Kawasan Kota Bukit Indah ', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(66, 131331031, 'Sudah', 'PT Dada Indoneisa ', 'JL.Sadang Raya,Ciwangi, Bungursari - Purwakarta  West-Java 41118 | 0264-201621', 'Administrasi', 'Sesudah Kuliah', '6-12 Bulan', '0000-00-00 00:00:00'),
(67, 131331026, 'Sudah', 'PT.  Anugrah Mutu Bersama', 'Desa wantilan Rt. 07/03 kec.  Cipeundeuy Subang Jawa barat', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(68, 141331012, 'Sudah', 'PT.Citatah.Tbk', 'Ds.Tamelang,Kec.Cikampek.Kab.Karawang', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(69, 121351149, 'Sudah', 'AKADEMI KEPERAWATAN RS EFARINA PURWAKARTA', 'JL BUNGURSARI NO 1 CIBENING PURWAKARTA', 'Administrasi', 'Sebelum Kuliah', '<6 Bulan', '0000-00-00 00:00:00'),
(70, 131251066, 'Sudah', 'PT.SIAMINDO CONCRETE PRODUCTS', 'Jl. Raya kosambi ds.sumur kondang kmpng karang jati klari Karawang', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(71, 91331010, 'Sudah', 'Pt ssi ', 'Kawasa indotaisei', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(72, 71331006, 'Sudah', 'PT. Promits', 'Jl. Diponegoro Bandung no. 38', 'Administrasi', 'Sesudah Kuliah', '> 12 Bulan', '0000-00-00 00:00:00'),
(73, 111331010, 'Sudah', 'Indonesia thaisummit auto', 'Kiic karawang', 'Administrasi', 'Sebelum Kuliah', '', '0000-00-00 00:00:00'),
(74, 131331002, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(75, 111351038, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(76, 101351055, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(77, 81351044, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(78, 111351061, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(79, 71351045, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(80, 81351106, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(81, 81351059, 'Sudah', '', '', 'Administrasi', '', '', '0000-00-00 00:00:00'),
(82, 111331001, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(83, 121351148, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(84, 111351012, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(85, 121151015, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(86, 91351033, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(87, 121351141, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(88, 121151041, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(89, 131331008, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(90, 121351168, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(91, 121351080, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(92, 111351095, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(93, 121351123, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(94, 131331029, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(95, 91351084, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(96, 121351089, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(97, 121351061, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(98, 101251042, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(99, 111251046, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(100, 121331034, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(101, 91351075, 'Sudah', '', '', 'Administrasi', '', '', '0000-00-00 00:00:00'),
(102, 121351017, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(103, 131332036, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(104, 121331030, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(105, 111131003, 'Sudah', '', '', 'Administrasi', '', '', '0000-00-00 00:00:00'),
(106, 121351121, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(107, 91351082, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(108, 121331019, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(109, 121331011, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(110, 121351034, 'Sudah', '', '', 'Administrasi', '', '', '0000-00-00 00:00:00'),
(111, 111351088, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(112, 111131034, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(113, 101351088, 'Sudah', '', '', '', '', '', '0000-00-00 00:00:00'),
(114, 141331011, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(115, 141431030, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(116, 141331002, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(117, 141331031, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(118, 141331019, 'Sudah', '', '', 'Administrasi', '', '', '0000-00-00 00:00:00'),
(119, 141331013, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(120, 141331022, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(121, 141331007, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(122, 161332001, 'Sudah', '', '', 'Administrasi', '', '', '0000-00-00 00:00:00'),
(123, 121331022, 'Belum', '', '', '', '', '', '0000-00-00 00:00:00'),
(161332002, 141351093, 'Sudah', 'Alego Creative Studio', 'jl. Ipik gandamanah 82', 'Instrukur', 'Sebelum Kuliah', '< 6 bulan', '2018-08-22 13:05:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_admin`
--
ALTER TABLE `akun_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akun_alumni`
--
ALTER TABLE `akun_alumni`
 ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `alumni_consult`
--
ALTER TABLE `alumni_consult`
 ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `apply_lowongan`
--
ALTER TABLE `apply_lowongan`
 ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `forum_chat_thread`
--
ALTER TABLE `forum_chat_thread`
 ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `forum_thread`
--
ALTER TABLE `forum_thread`
 ADD PRIMARY KEY (`id_thread`);

--
-- Indexes for table `job_fair`
--
ALTER TABLE `job_fair`
 ADD PRIMARY KEY (`id_job_fair`);

--
-- Indexes for table `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
 ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `mou`
--
ALTER TABLE `mou`
 ADD PRIMARY KEY (`id_mou`);

--
-- Indexes for table `tracer_study`
--
ALTER TABLE `tracer_study`
 ADD PRIMARY KEY (`id_tracerstudy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_admin`
--
ALTER TABLE `akun_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_chat_thread`
--
ALTER TABLE `forum_chat_thread`
MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_thread`
--
ALTER TABLE `forum_thread`
MODIFY `id_thread` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_fair`
--
ALTER TABLE `job_fair`
MODIFY `id_job_fair` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mou`
--
ALTER TABLE `mou`
MODIFY `id_mou` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tracer_study`
--
ALTER TABLE `tracer_study`
MODIFY `id_tracerstudy` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161332003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
