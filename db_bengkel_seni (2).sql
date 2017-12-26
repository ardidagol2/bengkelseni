-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 11:33 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bengkel_seni`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(50) NOT NULL,
  `tgl` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `tgl`, `image`) VALUES
('1', 'da', 'ssds', '2017-12-21', 'afd997f32010f414b7517b2908d2ae8e.png'),
('B-00001', 'd', 'dsdsd', '2017-12-21', '0a9bcdd9aac49eb611f28f5ec3b7689c.jpg'),
('B-00002', '4', 'sfsf', '2017-12-23', 'f481757e7411167385f4ac50bb330f0b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(100) NOT NULL,
  `ip_address` varchar(42) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('er3kub29jipjg3o4mqni55bqsvipugdf', '::1', 1513895381, '__ci_last_regenerate|i:1513895381;'),
('d2r8ht0ve07tnvrakt34ueopmatbrk89', '::1', 1513895742, '__ci_last_regenerate|i:1513895742;'),
('m7jtgm9khufm9v2biid458bf44aigsv9', '::1', 1513895749, '__ci_last_regenerate|i:1513895749;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('k92llgdb430m4u8emc9uvujon2f7picv', '::1', 1513895752, '__ci_last_regenerate|i:1513895752;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('7tkqgh80kfk5jde5g9f950de9u5r5lmo', '::1', 1513895767, '__ci_last_regenerate|i:1513895767;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('suul4fq6rc851p19v4odhns37iamkh9b', '::1', 1513895787, '__ci_last_regenerate|i:1513895787;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('cs0nl0t9qj1ol859f5fqfr0s7ftn4q8b', '::1', 1513895889, '__ci_last_regenerate|i:1513895889;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('er6df52n6stcnrd3k049v245s1cueg45', '::1', 1513895898, '__ci_last_regenerate|i:1513895898;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('urjt9pn8v352qbs8mlks44f44kia1p4s', '::1', 1513895925, '__ci_last_regenerate|i:1513895925;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ugq4n5i8r7qo7jplgff2fj86aisuo7dr', '::1', 1513895927, '__ci_last_regenerate|i:1513895927;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('0445nnmhahkl6tiecsogvsqbd9ff38m5', '::1', 1513895938, '__ci_last_regenerate|i:1513895937;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('a22gq2vr87t62cd304sgchjjki6i4812', '::1', 1513895943, '__ci_last_regenerate|i:1513895943;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('diob8hdavd80b2r7kqpdctl1cor4cf9v', '::1', 1513896021, '__ci_last_regenerate|i:1513896021;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('aipfvlcm5fdhki6g6mi6ch81lmq5m4no', '::1', 1513896023, '__ci_last_regenerate|i:1513896023;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('b5n841ka7lk7ci863aujc0p44oqc1gtd', '::1', 1513896089, '__ci_last_regenerate|i:1513896089;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('h5r9d3402r00stkd76gdl7phq5bsam7g', '::1', 1513896127, '__ci_last_regenerate|i:1513896127;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('5a21b4lpptud5cvumr8bou99kg4h4k5d', '::1', 1513897753, '__ci_last_regenerate|i:1513897753;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('rh1jksghmhsj4qqgdju7pk705gcv5sjd', '::1', 1513897775, '__ci_last_regenerate|i:1513897775;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('38mqfal27c2sv2ber67l8vojibd1duce', '::1', 1513897894, '__ci_last_regenerate|i:1513897894;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('gg5qae055jpk8o42t76q2d5rramhdblh', '::1', 1513897942, '__ci_last_regenerate|i:1513897941;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('poelnk37qee8dgi2lg7do74at4ru03oq', '::1', 1513897956, '__ci_last_regenerate|i:1513897956;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('sjjn0bvfmioj48rgtpp54p5a0ee6n6cf', '::1', 1513898232, '__ci_last_regenerate|i:1513898231;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('n6s294ml1a64join8ois9o7dh06a5g1a', '::1', 1513898329, '__ci_last_regenerate|i:1513898329;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('603dngc1vhkm9nf8lhhp53u0sjp16d90', '::1', 1513898376, '__ci_last_regenerate|i:1513898376;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('47jbrivasgea5np1a8ldsgf6sbt2hh81', '::1', 1513898754, '__ci_last_regenerate|i:1513898754;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('84g5muvc7klgf5ntmf1hr5h2nq0gggge', '::1', 1513898844, '__ci_last_regenerate|i:1513898844;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ba18ef62pd2kteg7ak9jmbfanoqr4h8s', '::1', 1513898847, '__ci_last_regenerate|i:1513898847;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ke8hoo386418jrciiuflmedn03bmde30', '::1', 1513899011, '__ci_last_regenerate|i:1513899011;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('tdd0g0hgiu1huuidfaud09mnjq8spd71', '::1', 1513899043, '__ci_last_regenerate|i:1513899043;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('rfhnve1mkpjvls3e48jda6s153g55mvr', '::1', 1513899062, '__ci_last_regenerate|i:1513899062;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('f3nqj9qodijsblsehb5k0gb7p9c7eoqk', '::1', 1513899067, '__ci_last_regenerate|i:1513899067;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('vprufqqr2giabli496ijsh8fucb46jr9', '::1', 1513899107, '__ci_last_regenerate|i:1513899107;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('cj2o95bkirpb7vi0va2dhj7n5ofrqfe2', '::1', 1513899142, '__ci_last_regenerate|i:1513899142;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('2nnj1f278lltfg61r3rm99sh92q0jvpt', '::1', 1513899147, '__ci_last_regenerate|i:1513899147;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('m28a4bugf7pq9rdqf8rkmj2hik8k8pip', '::1', 1513899483, '__ci_last_regenerate|i:1513899483;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('5h6aaofoqp118lnmqflpr8tubfgailqo', '::1', 1513899486, '__ci_last_regenerate|i:1513899486;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('u4j9an4kmqi5e340ua78vlc0828vlajr', '::1', 1513900733, '__ci_last_regenerate|i:1513900733;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('bv8ge3o5bc9nlrp97djeg7al79mhrkhh', '::1', 1513900879, '__ci_last_regenerate|i:1513900879;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('gpblhf7703m91nsfip6pokomq9tq19an', '::1', 1513901025, '__ci_last_regenerate|i:1513901025;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('15vjefsjtq8brq2i8lo77mquj3do7b1b', '::1', 1513901104, '__ci_last_regenerate|i:1513901104;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('j90ln700m139o0ldfh6aqm6act60opor', '::1', 1513901136, '__ci_last_regenerate|i:1513901136;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('rebigjhbqn43vm3bltuu6dph3osmniqr', '::1', 1513901149, '__ci_last_regenerate|i:1513901149;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ftef770dmdc0f8kj6bopjopt01bt83jt', '::1', 1513901185, '__ci_last_regenerate|i:1513901185;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('qigt07g5m9ea3cbg98gkj86p8n50d0c6', '::1', 1513901204, '__ci_last_regenerate|i:1513901204;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('b7i03ponj89m0npjeti6pste1co1bk4s', '::1', 1513901218, '__ci_last_regenerate|i:1513901218;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ke1t27lj06m9d5ftpm9n2msols1f6ftl', '::1', 1513902132, '__ci_last_regenerate|i:1513902132;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('63v8ng3dv8pk83g2g3n5kod44j11njqu', '::1', 1513902169, '__ci_last_regenerate|i:1513902169;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mp80f467np9i53g8tg4kdk43drbg54gq', '::1', 1513903094, '__ci_last_regenerate|i:1513903093;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('7hoat6lnlfl3n60rpcoittg51ei0s4ik', '::1', 1513903144, '__ci_last_regenerate|i:1513903144;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('39tv0jbpo39if8ffo4mk2r4mrh9rqc0b', '::1', 1513903148, '__ci_last_regenerate|i:1513903148;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('i5c8kkkphrf0hv2kjfr61qmv8g4a2ttk', '::1', 1513903167, '__ci_last_regenerate|i:1513903167;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('bklekg34rq4c412norp0ap9qh365es3u', '::1', 1513903170, '__ci_last_regenerate|i:1513903170;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('qodfs50v1e4gb7j37f7enj2vfch6okul', '::1', 1513903217, '__ci_last_regenerate|i:1513903217;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('rgo57qn8h5d16hangrb55ii8hnfgvksr', '::1', 1513903321, '__ci_last_regenerate|i:1513903321;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('k325mabj5avul1m9aripktfpqj1i4trt', '::1', 1513903362, '__ci_last_regenerate|i:1513903362;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('dl4vug2e189rkq2n3tbo6kp8uns2fl5f', '::1', 1513903758, '__ci_last_regenerate|i:1513903758;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('d9da3vcmrnlr7bt86desu0ce2k5ml59f', '::1', 1513903851, '__ci_last_regenerate|i:1513903851;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('dggl5lofp4qvsjjjs9pasopp1nk902v7', '::1', 1513904076, '__ci_last_regenerate|i:1513904076;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('09hhcpi8rfbbj2so1sq8avubtidds6c6', '::1', 1513904080, '__ci_last_regenerate|i:1513904080;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('bpikmm6v3rp70bps6hdi7pvlds5iuo45', '::1', 1513904111, '__ci_last_regenerate|i:1513904111;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('9mibvj3eg47ir5a9j7u65dv336mq81es', '::1', 1513904168, '__ci_last_regenerate|i:1513904168;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('uo16q985ro5jptdmppvj9mmtcnubpmfa', '::1', 1513904199, '__ci_last_regenerate|i:1513904199;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('drno2gqr6e7bb5vis62f1s1qbtttaat8', '::1', 1513904217, '__ci_last_regenerate|i:1513904217;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('14oktn5guucaq55dtggsepa3e26o0cvr', '::1', 1513904265, '__ci_last_regenerate|i:1513904265;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('rlmbmfmic8c9g2kpma7kr3t2d4pkuu2m', '::1', 1513904302, '__ci_last_regenerate|i:1513904302;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('pbbkdqj6mq5p7gqe29h7sd4usup26ele', '::1', 1513904345, '__ci_last_regenerate|i:1513904345;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mfuddk7j4hfdac4jmrnbd1v3drhdc2bl', '::1', 1513904367, '__ci_last_regenerate|i:1513904367;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('fr10lfcbuul5jpn8ufhm185upiml6mie', '::1', 1513904389, '__ci_last_regenerate|i:1513904389;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('buknk1se91saui0sfmpticg8ums1fsdd', '::1', 1513904535, '__ci_last_regenerate|i:1513904535;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('smvih5c3fii97g2lrgcf95c8lnrm88d1', '::1', 1513904591, '__ci_last_regenerate|i:1513904591;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('o9j9drp5cetkep7fdslm9hk5gmp8mbef', '::1', 1513904604, '__ci_last_regenerate|i:1513904604;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"new\";}'),
('82fulibp8fsehrq2m9n68vvqtsknhmn7', '::1', 1513904609, '__ci_last_regenerate|i:1513904609;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('omtmd2vvksus2smkcfsdc7ftoig6rqq6', '::1', 1513904773, '__ci_last_regenerate|i:1513904773;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"new\";}'),
('khv5u394d382f5g36lag0qmj6p2f2gud', '::1', 1513904873, '__ci_last_regenerate|i:1513904873;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('6b0apgrtc2vpumobqto9c03g29sri438', '::1', 1513904877, '__ci_last_regenerate|i:1513904877;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"new\";}'),
('ujrd2ig4v5oeu7rk9tep15g1a3eke517', '::1', 1513904901, '__ci_last_regenerate|i:1513904901;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('vum3qcokvl4brdrcli8rhh0sacpvqjui', '::1', 1513904903, '__ci_last_regenerate|i:1513904903;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('i46o4bfnqiinfsrob2jrdbjte9bav79a', '::1', 1513904911, '__ci_last_regenerate|i:1513904911;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"new\";}'),
('4amr6el83v21i53ni8c9dfop3dfa12uv', '::1', 1513904915, '__ci_last_regenerate|i:1513904915;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('ipbl6a3k26a9c3a8ga1c8tl6dudobbb8', '::1', 1513904917, '__ci_last_regenerate|i:1513904917;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('t7i2d34jbc3fnmvsnpjrmvmbl6i7v1fa', '::1', 1513904930, '__ci_last_regenerate|i:1513904930;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('jdob7hodevtde3vvc35e2sn2pfltssi8', '::1', 1513904940, '__ci_last_regenerate|i:1513904940;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"new\";}'),
('ds9ab20d7glvlc50aln168tr80q1nrs1', '::1', 1513904981, '__ci_last_regenerate|i:1513904981;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('hiobm6gf0qppuqt8eo2ao0tpqfnksgn2', '::1', 1513904983, '__ci_last_regenerate|i:1513904983;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('hd8204d2dp7vsuhgq2f5pginpacajiq1', '::1', 1513905040, '__ci_last_regenerate|i:1513905040;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('j0ock4214gjtdl65nu1sfdupi8bueoql', '::1', 1513905222, '__ci_last_regenerate|i:1513905222;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('irl11a7pva5vj2s5im22lcf7fc3qdldo', '::1', 1513905650, '__ci_last_regenerate|i:1513905650;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('oqtnrahssf5dr4ic0n9agnvra7v7je8d', '::1', 1513905658, '__ci_last_regenerate|i:1513905658;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('scgugq10038cu850ae47uoepavabo298', '::1', 1513905665, '__ci_last_regenerate|i:1513905665;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('llk99gh0ako3rf2r6dlatdlhc2jocu2m', '::1', 1513905711, '__ci_last_regenerate|i:1513905711;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('3i0mb3jhelrf0gpq8nlj3v5qoh21oau7', '::1', 1513905737, '__ci_last_regenerate|i:1513905737;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ejhdj73jdv7ul6fbd8vkrujbjje92qbt', '::1', 1513905768, '__ci_last_regenerate|i:1513905768;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('uim1eektpbajfh08q5ach61ij6sukhgb', '::1', 1513905772, '__ci_last_regenerate|i:1513905772;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('foadjktb2gcvn2t9k6paosqr2d4f34q4', '::1', 1513906309, '__ci_last_regenerate|i:1513906308;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('iqo5htt0njoql6tqkqur931capprv7lg', '::1', 1513906316, '__ci_last_regenerate|i:1513906316;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('0kevj1te87osk796qqdf8e3p5604hk38', '::1', 1513906356, '__ci_last_regenerate|i:1513906356;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('3lee2g6ovqo7ftildcqv7047t7t1i3p7', '::1', 1513906462, '__ci_last_regenerate|i:1513906462;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ugjahatmbqbqa68132obibcm7solm3h4', '::1', 1513906478, '__ci_last_regenerate|i:1513906478;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('c4urv374ciev77vq5h2jovfpr9jbhn0h', '::1', 1513906527, '__ci_last_regenerate|i:1513906527;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('aoimobhc80l7ki4j6us1u2ta8fk8pkbv', '::1', 1513906541, '__ci_last_regenerate|i:1513906541;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('pogc8sjjkehbehn3gbp2luk3inloenup', '::1', 1513906566, '__ci_last_regenerate|i:1513906566;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('uqsahgab10ii5p4qsaae0eltjik4knvi', '::1', 1513906596, '__ci_last_regenerate|i:1513906596;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mu63s8tujrfhe171pgl36q3nidmvflj0', '::1', 1513906599, '__ci_last_regenerate|i:1513906599;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('t2c9pf2k5lqn6g5tnjct5oujslftfigf', '::1', 1513906644, '__ci_last_regenerate|i:1513906644;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('eo3nllmnrqhm2aiogvp6kavkj6ce5csn', '::1', 1513906655, '__ci_last_regenerate|i:1513906655;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('vt662tbh2mc85kp0nuehsdfr9l3lhpjp', '::1', 1513906671, '__ci_last_regenerate|i:1513906671;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('bjtostfen0fs86adin74cu3t4qadcf2n', '::1', 1513906777, '__ci_last_regenerate|i:1513906777;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ebdroiscbaln38p1kfe4gvrkdq6i8hh2', '::1', 1513906829, '__ci_last_regenerate|i:1513906829;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('5thrmkpotg6qdben1tu1a6b3nrhk2oqt', '::1', 1513906876, '__ci_last_regenerate|i:1513906875;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('n9dh9aq36emm1ikhuak6hk53f16jiicu', '::1', 1513906941, '__ci_last_regenerate|i:1513906941;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('u0uc2gucsvh9ej1dg5rrp88gg7gv00v6', '::1', 1513906985, '__ci_last_regenerate|i:1513906985;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mq8m0hmu8knap22tvh8cpglqe23jafge', '::1', 1513906989, '__ci_last_regenerate|i:1513906989;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ouboi8f6rrpgm6satog86n36t4fd69mh', '::1', 1513907006, '__ci_last_regenerate|i:1513907006;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('l385gp5d7edsmrrh85tjpbf16m3gb3d3', '::1', 1513907009, '__ci_last_regenerate|i:1513907009;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('rtdfn08kf1787p82ijv7n32d7cbl52gb', '::1', 1513907036, '__ci_last_regenerate|i:1513907036;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('24h84etoen03mceue57r4evkajjufffm', '::1', 1513907078, '__ci_last_regenerate|i:1513907078;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('uo5fba27poolmr4a2hdppn0nda86v9oe', '::1', 1513907130, '__ci_last_regenerate|i:1513907130;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('24rqrvlckt42kp6ao43bv034uavlr2kc', '::1', 1513907138, '__ci_last_regenerate|i:1513907138;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('8l9k4u0hpuo2fv39a7j3b7jr0ipevlc5', '::1', 1513907169, '__ci_last_regenerate|i:1513907169;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('tf4comj3qblcajgrjntqlt7k6uh8popl', '::1', 1513907221, '__ci_last_regenerate|i:1513907221;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('e36c051cdd2830b0tu4i1qfvot54b2qh', '::1', 1513907262, '__ci_last_regenerate|i:1513907262;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('uqf8vpo636ehpmh6cojtun3vo55dm3v5', '::1', 1513907283, '__ci_last_regenerate|i:1513907282;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('upvg92lnkfd30noo90ep0bmjhdk31917', '::1', 1513907288, '__ci_last_regenerate|i:1513907288;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('1ioeafoji9hdnr9c2tmis4lp76e5lh4k', '::1', 1513907310, '__ci_last_regenerate|i:1513907310;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('26gukctrh1k0dcnjrgempc26sk7rf6us', '::1', 1513907317, '__ci_last_regenerate|i:1513907317;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('6eh61acifghrd54bab6b39fgclf64n7k', '::1', 1513907359, '__ci_last_regenerate|i:1513907359;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('cbrtivap3eeamg2811v2m9alkb2p9pp0', '::1', 1513907373, '__ci_last_regenerate|i:1513907373;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('j4qf1pp1ca65iggf8pdrbpstvkei8jht', '::1', 1513907388, '__ci_last_regenerate|i:1513907388;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('6m4hs5vbmlj4dq1fpbs6gb5s895ibmt7', '::1', 1513907396, '__ci_last_regenerate|i:1513907396;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('04lqlqrqnia050ha6f8ek2n1l7lq456f', '::1', 1513907404, '__ci_last_regenerate|i:1513907404;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('lvsadcgdoopehpgk03qvp6o9uge2geqr', '::1', 1513907406, '__ci_last_regenerate|i:1513907406;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('7hkokin2mdhkt8ops9jhb7kt8inob5l1', '::1', 1513907409, '__ci_last_regenerate|i:1513907409;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('e6b9nb4vl1c67u0o2qecgd3fab9cocov', '::1', 1513907426, '__ci_last_regenerate|i:1513907426;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('o2tjo4k4dkp5up01brcarhb3j0qm1v5n', '::1', 1513907430, '__ci_last_regenerate|i:1513907429;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('4e8fhn15ncemj7g0otrjcdlisqtq4tvo', '::1', 1513908054, '__ci_last_regenerate|i:1513908054;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('d3d886bt7lakv82vqhj8vr8h4qctslo6', '::1', 1513908109, '__ci_last_regenerate|i:1513908109;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('iblg4qvrliaio7pj46eboo7afk917uo0', '::1', 1513908139, '__ci_last_regenerate|i:1513908139;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('amlg67isks4qconrt6q287aua83el5l4', '::1', 1513908174, '__ci_last_regenerate|i:1513908174;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('bb794ge4u0fia4umiddeitib4p369ahb', '::1', 1513908244, '__ci_last_regenerate|i:1513908244;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('cl1pdmnk2c9e67pvt2ktgv10r0cq76f0', '::1', 1513908269, '__ci_last_regenerate|i:1513908269;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('a5kj5gp94gmn1s0f2mncsv4kaosk7vuf', '::1', 1513908280, '__ci_last_regenerate|i:1513908280;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('m5986g7i4k43g1ps4liiqb0ctvee1n4j', '::1', 1513908361, '__ci_last_regenerate|i:1513908361;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('lfbrg0dl4h2rdvih12ra34qtueqv8lp4', '::1', 1513908373, '__ci_last_regenerate|i:1513908373;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('9o1javrh1nblosrif1rfov1q3o0s15jf', '::1', 1513908380, '__ci_last_regenerate|i:1513908380;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('8pm9qopc0clansf3u69heqvflcea5iup', '::1', 1513908391, '__ci_last_regenerate|i:1513908391;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('9ksr862m05nhv5fn1thqkdb333fpfdrd', '::1', 1513908408, '__ci_last_regenerate|i:1513908408;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('hqqrigr8uqlbt5qu4qhsne7vdum00ose', '::1', 1513908421, '__ci_last_regenerate|i:1513908421;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('9lf8rs955rph98ot1beu4q9o7b9v08e9', '::1', 1513915169, '__ci_last_regenerate|i:1513915169;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('akiakrjm5vqctlbeuj7iq8tqq95ca87g', '::1', 1513915204, '__ci_last_regenerate|i:1513915204;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ccdhih05ern4tvgfq4u5uu8cmc3869bg', '::1', 1513915280, '__ci_last_regenerate|i:1513915280;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('nu9mk1g52op10ke3i497at2pv5amvs9b', '::1', 1513915323, '__ci_last_regenerate|i:1513915323;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('uu2d0qskk528rftsimg5anlmkreiidhv', '::1', 1513915342, '__ci_last_regenerate|i:1513915342;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mtj5qhogo2db7fnpv4n1a1fgrkpsjgsr', '::1', 1513915398, '__ci_last_regenerate|i:1513915398;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('sto03qkdslrr79unl7g890odf719da7e', '::1', 1513915417, '__ci_last_regenerate|i:1513915417;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('6issa6h9nad1s8mqkuu84a319c0td8jp', '::1', 1513915483, '__ci_last_regenerate|i:1513915483;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('8cnq1in2ac2ff6fldclgbds1h2jef52o', '::1', 1513915493, '__ci_last_regenerate|i:1513915493;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('qe9p9f76jv942dv2ftfa3betmrfo5o4b', '::1', 1513915527, '__ci_last_regenerate|i:1513915527;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('2ei8he79lm4025v0ct3090q926kftd18', '::1', 1513915594, '__ci_last_regenerate|i:1513915594;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('2hjmihjrla6rdd3sv7p3jvvs5ie937i3', '::1', 1513915634, '__ci_last_regenerate|i:1513915634;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('j4leetnpbjuac5er179vrmbnggbm3dfk', '::1', 1513915670, '__ci_last_regenerate|i:1513915670;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('jclvui3n1d5s6kn7u49ffdvs44oo85f9', '::1', 1513915762, '__ci_last_regenerate|i:1513915762;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ja5m1nisqjj81fq8fmgkct0u5t5sfv6f', '::1', 1513915823, '__ci_last_regenerate|i:1513915823;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('o3vopn2s97kbbab5ai0ubg6fbupgb0dk', '::1', 1513915865, '__ci_last_regenerate|i:1513915865;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('9daj6159tmqc3cgoro90upr9l0c73lp5', '::1', 1513915890, '__ci_last_regenerate|i:1513915890;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('gins2fqqqh5ij7nfa47kdpjoda9ub3bi', '::1', 1513915923, '__ci_last_regenerate|i:1513915923;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('i4nsib12r99qhgv1o91jtq5ao36fpnqp', '::1', 1513915955, '__ci_last_regenerate|i:1513915955;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('c6tv7s3k8k95en6ve0li06i41jdnfptv', '::1', 1513915984, '__ci_last_regenerate|i:1513915984;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('j589n910097k1jeulo9vkqeukollu218', '::1', 1513916003, '__ci_last_regenerate|i:1513916003;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('m7bgqh9nc262cojgurruaavukdbb3bad', '::1', 1513916055, '__ci_last_regenerate|i:1513916055;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('6qnpe1snk7lqsr1dhmd8o8mokpvv0n37', '::1', 1513916070, '__ci_last_regenerate|i:1513916070;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('33tt4dersssj6u8vr4vvpuk95ee78teu', '::1', 1513916159, '__ci_last_regenerate|i:1513916159;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ufe866els1g23anca4nt5sc0kodntku4', '::1', 1513916180, '__ci_last_regenerate|i:1513916180;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('c7uqlkau2d7e7hf0bktc6lh831tppop3', '::1', 1513916226, '__ci_last_regenerate|i:1513916225;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('tdd8olblpm24hvg01i0o2ve09bq9ift6', '::1', 1513927325, '__ci_last_regenerate|i:1513927325;'),
('phfej43obn2fb4sb4jjojv15t1idjt6c', '::1', 1513927333, '__ci_last_regenerate|i:1513927332;'),
('dvev11aodvofqcmdpkp3e3c31qfrba0d', '::1', 1513928687, '__ci_last_regenerate|i:1513928687;'),
('esv8r8n4qjf1gcv9rh3is4o99u5heil6', '::1', 1513928696, '__ci_last_regenerate|i:1513928696;'),
('f31g9k6dlbbt54ifu65199u7vf1423hv', '::1', 1513928750, '__ci_last_regenerate|i:1513928750;'),
('uadvqisk16kbm3hg0e6h1utonocehiga', '::1', 1513928758, '__ci_last_regenerate|i:1513928758;'),
('r1sp7hb3jbdsfgcodek9ik3hkt6kgna0', '::1', 1513928760, '__ci_last_regenerate|i:1513928760;'),
('67jslb1psk14flg7720t0qee1265tcdm', '::1', 1513928777, '__ci_last_regenerate|i:1513928777;'),
('qsgvhuouqq195h6uapcbpe96u6sivri1', '::1', 1513928779, '__ci_last_regenerate|i:1513928779;'),
('0n6lhqudncehb93rnjf9h16ldsg4aine', '::1', 1513928783, '__ci_last_regenerate|i:1513928783;'),
('170bgbihqq3u66nd2jrftks2qv0t1h2h', '::1', 1513928834, '__ci_last_regenerate|i:1513928834;'),
('5bagk01ijbgme4uu1q90jvm73jga5ge3', '::1', 1513928837, '__ci_last_regenerate|i:1513928837;'),
('0l0vbv4o2f1ni3pe5hfik3gumkrd4di5', '::1', 1513928839, '__ci_last_regenerate|i:1513928839;'),
('p79crea150h9fmpcj9h53lvv16insgkm', '::1', 1513928846, '__ci_last_regenerate|i:1513928846;'),
('gnehbdaj8v4rkpsds14idv2al9aem6j6', '::1', 1513928850, '__ci_last_regenerate|i:1513928850;'),
('hll6e49h4md4mjf6565n3ddovf96bavi', '::1', 1513928853, '__ci_last_regenerate|i:1513928853;'),
('6do684ksc4hu5d73m1rl0gjj0f7ehq95', '::1', 1513928858, '__ci_last_regenerate|i:1513928858;'),
('h8qs3oq3bi5e6o7r5spe7h9b17r40791', '::1', 1513928862, '__ci_last_regenerate|i:1513928862;'),
('qaf9m2am0abvk9l6vrqkd0deg9ch3gdl', '::1', 1513928865, '__ci_last_regenerate|i:1513928865;'),
('re7jo20o7u231ti3qq1pmdip19s172b3', '::1', 1513928876, '__ci_last_regenerate|i:1513928876;'),
('mch667kr4lgco9ouk6hvrd43ru4iv378', '::1', 1513928928, '__ci_last_regenerate|i:1513928928;'),
('gd10dohteim5bls8iksche6h04m2le6f', '::1', 1513928952, '__ci_last_regenerate|i:1513928952;'),
('eaaol7numi1rt6r3keqisf92cu64a5qg', '::1', 1513929014, '__ci_last_regenerate|i:1513929013;'),
('6tq52k7ehe6btgltjsmda66nk74b2u88', '::1', 1513929024, '__ci_last_regenerate|i:1513929024;'),
('bri0gd3ap5rt7vqbdhnhric6pessnenf', '::1', 1513929763, '__ci_last_regenerate|i:1513929763;'),
('v55euihql58370sd2d8l19m4up7kcsfh', '::1', 1513929786, '__ci_last_regenerate|i:1513929786;'),
('q4n7g1rre1vb0mde3jg4j35m9thc8oom', '::1', 1513929857, '__ci_last_regenerate|i:1513929857;'),
('tu5ailpn5hefsn99vjollhhalegr2diu', '::1', 1513929864, '__ci_last_regenerate|i:1513929863;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('s2n7oaegivofbqev52lok9n75o8ucc3m', '::1', 1513929873, '__ci_last_regenerate|i:1513929873;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('dfjr8sc3cumqamv0jdmjsf1sbueuglrb', '::1', 1513929879, '__ci_last_regenerate|i:1513929879;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('t8cd18iblmuh8rdequnq41r78df5npv4', '::1', 1513929883, '__ci_last_regenerate|i:1513929883;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('okh0ouj9hcpqaoo3rvft12vlvbtp8r4s', '::1', 1513930037, '__ci_last_regenerate|i:1513930037;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('at0sh5gdsmvch52e18m4ss1v9eto8i6u', '::1', 1513930053, '__ci_last_regenerate|i:1513930053;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('h9u3ugm5bi3h3d0aipkfbq3je2ibpqur', '::1', 1513930072, '__ci_last_regenerate|i:1513930072;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('k2fv5p18hpbs80agvpepe36ei4ircmo9', '::1', 1513930615, '__ci_last_regenerate|i:1513930615;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mo8tcunbet796p60u4l0l3m784s5bvu4', '::1', 1513930654, '__ci_last_regenerate|i:1513930654;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mvgbqhmvos13pj33qssah1sgt7ifva61', '::1', 1513930700, '__ci_last_regenerate|i:1513930700;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ivkh2cnmrip1qask7tl9p4umbi8rbkit', '::1', 1513930735, '__ci_last_regenerate|i:1513930735;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('9lfn97n2dd2r6l0b922tusdt86hpnrjv', '::1', 1513930753, '__ci_last_regenerate|i:1513930753;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('nv3t3ebfb3goeia326g3ff29pfjalfkr', '::1', 1513930768, '__ci_last_regenerate|i:1513930768;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('oc89kai5e83r799trlkh8ji8rdis5v7o', '::1', 1513930826, '__ci_last_regenerate|i:1513930826;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('t8pg6veof5l9nsrp1pae5ouq9uggihdt', '::1', 1513930845, '__ci_last_regenerate|i:1513930845;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('g0mg2090cnhmld54iu15okjcoiqg171e', '::1', 1513930865, '__ci_last_regenerate|i:1513930865;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('2k3jc1ko8qli9odgn65pk1o41c0vsshm', '::1', 1513930899, '__ci_last_regenerate|i:1513930899;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('vk7b7e18rjrc2c7gv28oa9auu0hn4lhd', '::1', 1513930921, '__ci_last_regenerate|i:1513930921;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('j64jrpuhsu1pu5ao2tcmas72lbba15js', '::1', 1513930945, '__ci_last_regenerate|i:1513930945;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('llqui2fare8q3dfn9nlqj4ie67gsg3uf', '::1', 1513930973, '__ci_last_regenerate|i:1513930973;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('dnnm15akfdpabono1pvevi9sui5tq3no', '::1', 1513930985, '__ci_last_regenerate|i:1513930985;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('s1n7mchsn8vujvjc2msjnvu5ffcm7dp5', '::1', 1513931004, '__ci_last_regenerate|i:1513931004;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('evkd3mfk9mstfv0boakcevmj9hoov1rk', '::1', 1513931019, '__ci_last_regenerate|i:1513931019;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('b4fvfsdbigb3t2qjmujg4f0t0auljc2b', '::1', 1513931038, '__ci_last_regenerate|i:1513931038;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('hka9ecmhn01009i5u8ivvhgr99lgjsd8', '::1', 1513931056, '__ci_last_regenerate|i:1513931056;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ueq8ja60fneqjrpoqsa1po8co3ekds2f', '::1', 1513931072, '__ci_last_regenerate|i:1513931072;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('o3oi92g54df1ocip26km0u4ljs918o8d', '::1', 1513931096, '__ci_last_regenerate|i:1513931096;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('752opg300854avugm96lcn4peci9rq30', '::1', 1513931111, '__ci_last_regenerate|i:1513931111;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('3hlfe7jtnp1v4hg1g2b14k4dqjf5op6q', '::1', 1513931126, '__ci_last_regenerate|i:1513931126;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('k40313a6ses150egkm3uuqfljd8hj4uv', '::1', 1513931157, '__ci_last_regenerate|i:1513931157;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('n03m01gdpfgi3je6a66493madaqt3foi', '::1', 1513931181, '__ci_last_regenerate|i:1513931181;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('c15tmf7ma7jsar32aghr3ik8lmukpakr', '::1', 1513931201, '__ci_last_regenerate|i:1513931201;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('jongnsoqhhfvtgtnqrg0ifj9asqov52j', '::1', 1513931216, '__ci_last_regenerate|i:1513931216;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('e8e8t0h90dfgcujp15se4l4n9ahbn209', '::1', 1513931306, '__ci_last_regenerate|i:1513931306;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('vbovs7nd55gui6bleqqoikqd6p3358j6', '::1', 1513931345, '__ci_last_regenerate|i:1513931345;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('vn6tichup57qcfm1r8oiacdaosqlkf9i', '::1', 1513931359, '__ci_last_regenerate|i:1513931359;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('pc7sdcohv0405ua1a63n886pmrcto251', '::1', 1513934737, '__ci_last_regenerate|i:1513934737;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('o0hl2tpnhrirk6l3qdlmcvf00gulijis', '::1', 1513934860, '__ci_last_regenerate|i:1513934860;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('c8jmdm6g4tia5ae41lmc7egu7mptiof7', '::1', 1513934862, '__ci_last_regenerate|i:1513934862;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('hkol8ruehbetdca3dajfc2is1jpncepq', '::1', 1513934867, '__ci_last_regenerate|i:1513934867;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('j1odkdmnjehvt5hk23ithbrduo59829n', '::1', 1513934879, '__ci_last_regenerate|i:1513934878;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('1q2vfjdc734gam3vlflm3n06va15ohf4', '::1', 1513935122, '__ci_last_regenerate|i:1513935122;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"new\";}'),
('m6c7vj8ak7l95dqtd0bsh6bq39d10icr', '::1', 1513935206, '__ci_last_regenerate|i:1513935206;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('5bkq7bjnvcte305d5lshc4faoes21mfi', '::1', 1513935211, '__ci_last_regenerate|i:1513935211;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('cqmdfquk0flv4a4lhmjbikuiuclk2ob2', '::1', 1513935214, '__ci_last_regenerate|i:1513935213;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('rd7hue0mc8fg0tfe2vddl7id44kbmvgj', '::1', 1513935228, '__ci_last_regenerate|i:1513935228;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('4fg5179itlt4p3dovf1hn1io55hvsn2t', '::1', 1513935302, '__ci_last_regenerate|i:1513935302;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('n6i6bb9b1v11v2kohgidnjvg6jo6dend', '::1', 1513935376, '__ci_last_regenerate|i:1513935376;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('fn09apo02mtjiknsbur6isqn3qt89g57', '::1', 1513935388, '__ci_last_regenerate|i:1513935388;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('r76uiv8u4a978pc6ua1732m48f6ccuna', '::1', 1513935413, '__ci_last_regenerate|i:1513935413;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ue9v8kvrnfrdv5ud0v6lfa62bia0540s', '::1', 1513935432, '__ci_last_regenerate|i:1513935432;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('8kdn847qpcuu1jj5hpluck8itgslij2r', '::1', 1513935591, '__ci_last_regenerate|i:1513935591;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('mb2v845c8gs6dh40qf1qiqomp2hvnoi6', '::1', 1513936065, '__ci_last_regenerate|i:1513936065;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('fl0u0b8rrq7g0icci5eqv2trr95h8j45', '::1', 1513936801, '__ci_last_regenerate|i:1513936801;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('p6vfbbn1muqh9hq1pvc42udllfd8ia09', '::1', 1513936807, '__ci_last_regenerate|i:1513936806;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('5u3vfa29r6v60jc0n5loukqfkpged2tb', '::1', 1513936812, '__ci_last_regenerate|i:1513936812;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('c1kjeivrjbju5ff8t3hd1ajmn27j8jjl', '::1', 1513936816, '__ci_last_regenerate|i:1513936816;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('5gk7sej33b2l3kji81k6oek8qac62av4', '::1', 1513936822, '__ci_last_regenerate|i:1513936818;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('euhpcffjnslu8u80gau2evg92v3a3m7v', '::1', 1513936933, '__ci_last_regenerate|i:1513936933;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('5l6slbelfc9keofo7chriqg3r9ahskko', '::1', 1513936943, '__ci_last_regenerate|i:1513936936;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('6gbihoblvectji8j1gf78sr58v32m4f2', '::1', 1513937172, '__ci_last_regenerate|i:1513937168;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('dfbqhksme62lcdaj6bdmfl00j4lk067u', '::1', 1513937179, '__ci_last_regenerate|i:1513937179;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('qbcgo4mc2fr5n9a9m9s52h9h2pgua56o', '::1', 1513937185, '__ci_last_regenerate|i:1513937181;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('qubniebm5028t8bltqaabrdbmn4rq7m4', '::1', 1513937311, '__ci_last_regenerate|i:1513937311;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('0kgtb8pusgp6jh0i8iv4guc5d0cokaqt', '::1', 1513937311, '__ci_last_regenerate|i:1513937311;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('te40h34974ts9mj40j165q4clende3cb', '::1', 1513937319, '__ci_last_regenerate|i:1513937318;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('1vks1k1f0e6c21rhs5jnv1h6jfk2j409', '::1', 1513937323, '__ci_last_regenerate|i:1513937323;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('3o2kv7cl85e9bj01nvceqs4a39bsu7gt', '::1', 1513937329, '__ci_last_regenerate|i:1513937326;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('3o8d9qhg8vckb4i88nqknauovt1lc9l9', '::1', 1513937395, '__ci_last_regenerate|i:1513937390;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('k1ns5u0jpbna691cgc8vcv6m41jio28b', '::1', 1513937408, '__ci_last_regenerate|i:1513937408;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('tob2i6ogbe9pivqclgc0lb2b7mt04uir', '::1', 1513937411, '__ci_last_regenerate|i:1513937411;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('e4nd06lntp5lmujjuthb20jdmfpfhnnm', '::1', 1513937418, '__ci_last_regenerate|i:1513937414;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('s0relu76amrrsmkkhh4if8or3mlgn8g2', '::1', 1513937510, '__ci_last_regenerate|i:1513937506;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('tjhp77t32epqa506opq5ooginv6nm79f', '::1', 1513937544, '__ci_last_regenerate|i:1513937541;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('7v734c8tjmhupmqorof3h467snee0nup', '::1', 1513937675, '__ci_last_regenerate|i:1513937671;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('3f515mebs58mbhmerbj3gpqc2p4nrm61', '::1', 1513937771, '__ci_last_regenerate|i:1513937767;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('saejimnaff3ragkr86aja3jep9gvord1', '::1', 1513937830, '__ci_last_regenerate|i:1513937826;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('7kahahgjqg2qn4nqo29uf2bn6jhcnkru', '::1', 1513937930, '__ci_last_regenerate|i:1513937930;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('gkf8ird7jovs5uoa4t8dqpop63sb0jt2', '::1', 1513937932, '__ci_last_regenerate|i:1513937932;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('qgm6duelfhgrl0eqn9993htoskhuo93r', '::1', 1513937937, '__ci_last_regenerate|i:1513937934;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('ak58mp84ehj8mbegm9scjr25t3b57fbt', '::1', 1513938015, '__ci_last_regenerate|i:1513938010;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('aad3qhloadp3050pvcq8t9pnsbfcos0k', '::1', 1513938068, '__ci_last_regenerate|i:1513938065;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('gd42hi7lommqhcti7tj1l4han27rsnlb', '::1', 1513938072, '__ci_last_regenerate|i:1513938072;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('g8gc5e0riucr59lktkbavon3nppnd37s', '::1', 1513938075, '__ci_last_regenerate|i:1513938075;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('qnuvfkco3q3p87pbr5r7j6jnsaormo7t', '::1', 1513938082, '__ci_last_regenerate|i:1513938077;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";'),
('s4qruobc4u6luhg10c51p7atom30n07a', '::1', 1513938245, '__ci_last_regenerate|i:1513938242;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:13:\"Administrator\";nama|s:5:\"Admin\";');

-- --------------------------------------------------------

--
-- Table structure for table `detail_beli`
--

CREATE TABLE `detail_beli` (
  `id_alat` int(11) UNSIGNED NOT NULL,
  `no_layanan` varchar(11) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `harga` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kelas`
--

CREATE TABLE `detail_kelas` (
  `nis` varchar(11) NOT NULL,
  `kode_kelas` varchar(11) NOT NULL,
  `id_pengajar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info_lukis`
--

CREATE TABLE `info_lukis` (
  `id` varchar(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_lukis`
--

INSERT INTO `info_lukis` (`id`, `judul`, `isi`, `tgl`, `image`) VALUES
('B-00001', 'd', 'dfd', '2017-12-15', 'c59b9090547ca6f73a4d062266080881.jpg'),
('B-00002', 'd', 'dfd', '2017-12-15', '0c980799aab99ca4700930b9cbc91284.jpg'),
('BL-00003', 'd', 'dfd', '2017-12-15', 'd4b2beb6d86c6c8f2109cf3934b9c88d.jpg'),
('BL-00004', 'e', 'ewew', '2017-12-21', '14311e549b5b3d975bc7eb6b24d9dade.jpg'),
('BL-00005', 'e', 'ewe', '2017-12-22', '293ef2f2823444344d991a6f8e85f9a6.jpg'),
('BL-00006', 'e', 'ewe', '2017-12-22', '2b3113c717fcd3dcb27d90a70e1fe537.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info_tari`
--

CREATE TABLE `info_tari` (
  `id` varchar(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_tari`
--

INSERT INTO `info_tari` (`id`, `judul`, `isi`, `tgl`, `image`) VALUES
('1', '', '', '0000-00-00', ''),
('BL-00002', 'tr', 'ddfgsdsad', '2017-12-14', 'c9963b3681e1018a2a3e8dfd6d828c06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(11) NOT NULL,
  `bidang_seni` varchar(50) NOT NULL,
  `jenis_kelas` varchar(50) NOT NULL,
  `hari_belajar` varchar(50) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `bidang_seni`, `jenis_kelas`, `hari_belajar`, `nama_kelas`, `waktu`) VALUES
('1', '', 'tari', '', 'dfsf', ''),
('KL-00002', 'e', 'e', 'e', 'ee', 'Pagi | 09.00 - 11.00');

-- --------------------------------------------------------

--
-- Table structure for table `minta_menari`
--

CREATE TABLE `minta_menari` (
  `no_permin` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_id` varchar(20) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tgl_tari` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_tari` varchar(50) NOT NULL,
  `lama_tari` varchar(50) NOT NULL,
  `estimasi` decimal(19,2) NOT NULL,
  `cara_bayar` varchar(50) NOT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minta_menari`
--

INSERT INTO `minta_menari` (`no_permin`, `nama`, `no_id`, `telp`, `email`, `tgl_tari`, `alamat`, `jenis_tari`, `lama_tari`, `estimasi`, `cara_bayar`, `file`) VALUES
('PM-00001', 'rr', 're', 'rr', 'r', '0000-00-00', 'r', 'd', 'r', '0.00', 'cash', NULL),
('PM-00002', 'sd', 'sd', 'sd', 'sd', '2017-12-20', 'sd', 'd', 'sd', '0.00', 'cash', NULL),
('PM-00003', 'fgf', 'dg', 'g', 'g', '2017-12-26', 'gg', 'd', '2', '2000000.00', 'Cash', NULL),
('PM-00004', 'sf', 's', 'sf', 's', '2017-12-19', 'dffd', 'd', '2', '2000000.00', 'Transfer', NULL),
('PM-00005', 'sr', 'r', 'r', 'r', '2017-12-28', 'r', '', '2', '2000000.00', 'Transfer', NULL),
('PM-00007', 'f', 'g', 'g', 'g', '2017-12-29', 'g', 'f', '1', '1000000.00', 'Cash', NULL),
('PM-00008', 'd', 'd', 'd', 'd', '0000-00-00', '', 'd', '', '0.00', '', NULL),
('PM-00009', 'e', 'e', 'e', 'e3@f.d', '2017-12-21', 'e', 'e', '4', '4000000.00', 'Transfer', '1278b0f8172245656e1d2597542b4d09.jpeg'),
('PM-00010', 's', 'f', 'g', 'g@f', '2017-12-27', 'f', 'g', '2', '2000000.00', 'Cash', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_pilihan`
--

CREATE TABLE `news_pilihan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_pilihan`
--

INSERT INTO `news_pilihan` (`id`, `nama`) VALUES
(1, 'Bengkel Lukis telah menghasilkan lulusan yang mahir dibidang seni Lukis sejak tahun 2017. Dalam kegi'),
(2, 'Bengkel Lukis telah menghasilkan lulusan yang mahir dibidang seni Lukis sejak tahun 2017. Dalam kegi');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_bayar` varchar(11) NOT NULL,
  `tgl` date NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama_bayar` varchar(50) NOT NULL,
  `status_bayar` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` decimal(19,2) NOT NULL,
  `total` decimal(19,2) NOT NULL,
  `sisa` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no_bayar`, `tgl`, `nis`, `nama_bayar`, `status_bayar`, `jenis`, `jumlah`, `total`, `sisa`) VALUES
('KB-00001', '2017-12-20', '  1 ', '  te', 'Aktif', 'Transfer', '20000.00', '65000.00', '374001.00');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_daftar` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_id` varchar(20) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `bidang_seni` varchar(50) NOT NULL,
  `biaya` decimal(19,2) NOT NULL,
  `jenis_kelas` varchar(25) NOT NULL,
  `hari_belajar` varchar(25) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `cara_bayar` varchar(25) NOT NULL,
  `file_transfer` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_daftar`, `nama`, `no_id`, `telp`, `email`, `alamat`, `bidang_seni`, `biaya`, `jenis_kelas`, `hari_belajar`, `waktu`, `cara_bayar`, `file_transfer`) VALUES
('P-00001', '', '', '', 'f', '', '', '0.00', '', '', 'Sore | 05.30 - 17-30', '', NULL),
('P-00002', 'r', '', 'r', '', '', 'Clasic', '4000000.00', '', '', 'Sore | 05.30 - 17-30', '', NULL),
('P-00003', 're', 're', 'rr', '', 'er', 'Clasic', '4000000.00', 'A', 'Rabu', 'Siang | 13.00 - 15.00', 'Transfer', NULL),
('P-00004', 'fgf', 'f', 'ff', 'f', 'f', '', '4000000.00', 'A', 'Selasa', 'Pagi | 09. - 11.00', 'Transfer', NULL),
('P-00005', 'fgf', 'f', 'ff', 'f', 'f', '', '4000000.00', 'A', 'Selasa', 'Pagi | 09. - 11.00', 'Transfer', NULL),
('P-00006', 'ds', 'ds', 'dfd', 'd', 'd', 'Clasic', '4000000.00', 'B', 'Rabu', 'Siang | 13.00 - 15.00', 'Cash', NULL),
('P-00007', 'ds', 'ds', 'dfd', 'd', 'd', 'Clasic', '4000000.00', 'B', 'Rabu', 'Siang | 13.00 - 15.00', 'Cash', NULL),
('P-00008', 'dgd', 'dg', 'dg', 'dg', 'dg', 'Clasic', '4000000.00', 'A', 'Selasa', 'Siang | 13.00 - 15.00', 'Transfer', NULL),
('P-00009', 's', 's', 's', 's', 's', 'Tematic', '4000000.00', 'B', 'Senin', 'Pagi | 09. - 11.00', 'Cash', NULL),
('P-00010', 'c', 'dgd', 'gf', 'dff', 'df', '', '4000000.00', '', '', 'Siang | 13.00 - 15.00', '', NULL),
('P-00011', '', 'fdg', '', '', '', '', '4000000.00', '', '', 'Sore | 05.30 - 17-30', '', NULL),
('P-00012', '', '', '', 'a', '', '', '4000000.00', '', '', 'Sore | 05.30 - 17-30', '', NULL),
('P-00013', '', '', '', 'a', '', '', '4000000.00', '', '', 'Sore | 05.30 - 17-30', '', NULL),
('P-00014', '', '', '', 'a', 'f', '', '4000000.00', '', '', 'Sore | 05.30 - 17-30', '', NULL),
('P-00015', '', '', '', 'a', 'f', '', '4000000.00', '', '', 'Sore | 05.30 - 17-30', '', NULL),
('P-00016', 'x', 'x', '', '', '', '', '4000000.00', '', '', 'Pagi | 09. - 11.00', '', NULL),
('P-00017', 'x', 'x', '', '', '', '', '4000000.00', '', '', 'Pagi | 09. - 11.00', '', NULL),
('P-00018', 'x', 'x', '', 'gf', '', '', '4000000.00', '', '', 'Pagi | 09. - 11.00', '', NULL),
('P-00024', '', '', '', '', '', '', '4000000.00', '', '', 'Siang | 13.00 - 15.00', '', NULL),
('P-00025', 'e', 'e', 'r', 'r', '', '', '4000000.00', '', '', 'Pagi | 09. - 11.00', '', NULL),
('P-00026', 'e', 'e', 'e', 'e', '', '', '4000000.00', '', '', 'Pagi | 09. - 11.00', '', NULL),
('P-00027', 'r', 'r', 'r', 'r', 'r', 'Clasic', '4000000.00', '1', 'Jumat', 'Pagi | 09. - 11.00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(11) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(45) NOT NULL,
  `bidang_seni` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama_pengajar`, `tempat`, `tgl_lahir`, `alamat`, `telp`, `email`, `bidang_seni`) VALUES
('ID-00001', '   dd   dgdg   ', 'e345455786   ', '2012-01-20', 'ddbbd', '345433   ', 'ardiantoa3@gmail.com', 'seni Lukis');

-- --------------------------------------------------------

--
-- Table structure for table `reparasi`
--

CREATE TABLE `reparasi` (
  `no_layanan` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_id` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pelayanan` varchar(45) NOT NULL,
  `item` int(11) DEFAULT NULL,
  `panjang_lukisan` varchar(50) NOT NULL,
  `cara_bayar` varchar(30) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `total_biaya` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reparasi`
--

INSERT INTO `reparasi` (`no_layanan`, `nama`, `no_id`, `telp`, `email`, `alamat`, `pelayanan`, `item`, `panjang_lukisan`, `cara_bayar`, `file`, `total_biaya`) VALUES
('PL-00001', '', '', '', '', '', '', NULL, '', NULL, NULL, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(25) NOT NULL,
  `bidang_seni` varchar(35) NOT NULL,
  `status_siswa` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `alamat`, `tempat`, `tgl_lahir`, `telp`, `email`, `bidang_seni`, `status_siswa`) VALUES
('.l;', '', '', '', '0000-00-00', '', '', '', ''),
('b', '', '', '', '0000-00-00', '', '', '', ''),
('cx', '', '', '', '0000-00-00', '', '', '', ''),
('e', '', '', '', '0000-00-00', '', '', '', ''),
('h', '', '', '', '0000-00-00', '', '', '', ''),
('io', '', '', '', '0000-00-00', '', '', '', ''),
('NIS-00001', 'rt', '5', 'rt', '2017-12-13', '56', 'ty', '', 'Aktif'),
('NIS-00002', 'tert', 'er', 'ee', '2017-12-06', 'dgd', '5d@f', 'Seni Tari', 'Tidak Aktif'),
('NIS-00003', 'dgeg', 'dfd', 'dd', '2017-12-14', 'fd', 'dff@f', 'Seni Lukis', 'Aktif'),
('o', '', '', '', '0000-00-00', '', '', '', ''),
('qd', '', '', '', '0000-00-00', '', '', '', ''),
('r', '', '', '', '0000-00-00', '', '', '', ''),
('s', '', '', '', '0000-00-00', '', '', '', ''),
('te', '', '', '', '0000-00-00', '', '', '', ''),
('vc', '', '', '', '0000-00-00', '', '', '', ''),
('w', '', '', '', '0000-00-00', '', '', '', ''),
('we', '', '', '', '0000-00-00', '', '', '', ''),
('x', '', '', '', '0000-00-00', '', '', '', ''),
('xc', '', '', '', '0000-00-00', '', '', '', ''),
('z', '', '', '', '0000-00-00', '', '', '', ''),
('zx', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(14) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_group` varchar(30) NOT NULL,
  `blokir` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `telp`, `email`, `username`, `password`, `user_group`, `blokir`) VALUES
('US-00001', 'Admin', 'Bekasi', '085812345233', 'admin@istrator', 'admin', '$2y$10$PcDeCc.bKDO31KTsjV3s.epV6U3DBlGQ25VLlHQbx/7XfnsE91gKa', 'Administrator', 'N'),
('US-00002', 'User', 'Bekasi', '085345221231', 'user@admin.us', 'user', '$2y$10$2ENnUoaIARUPMgt3i71kXusUmDF4.seuJNJ7e5kJaBKcPlphvSLI.', 'User', 'N'),
('US-00003', 'dere', 're', 're', '34@d', '34', '$2y$10$mrMOXQ6NBuwOc9JeTpAg9e0VxWWFfd1F14trOMFAfbdzC4El283Hu', 'Administrator', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `detail_kelas`
--
ALTER TABLE `detail_kelas`
  ADD KEY `nis` (`nis`),
  ADD KEY `id_kelas` (`kode_kelas`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `info_lukis`
--
ALTER TABLE `info_lukis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_tari`
--
ALTER TABLE `info_tari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `minta_menari`
--
ALTER TABLE `minta_menari`
  ADD PRIMARY KEY (`no_permin`);

--
-- Indexes for table `news_pilihan`
--
ALTER TABLE `news_pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_bayar`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `reparasi`
--
ALTER TABLE `reparasi`
  ADD PRIMARY KEY (`no_layanan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_beli`
--
ALTER TABLE `detail_beli`
  MODIFY `id_alat` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_kelas`
--
ALTER TABLE `detail_kelas`
  ADD CONSTRAINT `detail_kelas_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `detail_kelas_ibfk_2` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`),
  ADD CONSTRAINT `detail_kelas_ibfk_3` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
