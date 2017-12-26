-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 10:38 AM
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
('jlrpu7h74rkt9n07lah033j193t69857', '::1', 1513232027, '__ci_last_regenerate|i:1513232027;'),
('rhjk8chb0qe6jdh23vapabo00rgsqi3q', '::1', 1513232033, '__ci_last_regenerate|i:1513232033;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('irku2ftevamukhbcbpd8t7ctnuk7revg', '::1', 1513232082, '__ci_last_regenerate|i:1513232081;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('sl814dru500se5f06sjm8rqqs16eguc0', '::1', 1513232085, '__ci_last_regenerate|i:1513232085;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('2snvulp2o4u0kabj5qov56ggo0k6h97c', '::1', 1513232101, '__ci_last_regenerate|i:1513232101;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('51gepjpq09uqepc9vlsdeuab4qp1b0t0', '::1', 1513232151, '__ci_last_regenerate|i:1513232151;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('168s891r5f5077fk3v4nh45u38snn7q3', '::1', 1513232206, '__ci_last_regenerate|i:1513232206;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('hfroi203s65t5na3jv78185p4gih5sp3', '::1', 1513232219, '__ci_last_regenerate|i:1513232219;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('e9dk5edlatdo9l3kicoa3kk85qr7nleg', '::1', 1513232230, '__ci_last_regenerate|i:1513232230;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('ee2l18lb42a56o5mbmu2r482323kh31v', '::1', 1513232266, '__ci_last_regenerate|i:1513232266;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('i1fsmmmo3jai006k1trf908hc5hb7du8', '::1', 1513232286, '__ci_last_regenerate|i:1513232286;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('8v8a61nkh9t1cvd35gl0d3ka9ca57jlu', '::1', 1513232299, '__ci_last_regenerate|i:1513232298;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";pesan|s:224:\"<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('dlqqf6m8lnrinptqavo0nhmrkdj5h5jd', '::1', 1513232307, '__ci_last_regenerate|i:1513232307;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('6itpa2dt892fk570scmbrpojkq00nt8l', '::1', 1513232316, '__ci_last_regenerate|i:1513232316;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('1ik8p1nab0uequn5stsh04k5sgn2vjqq', '::1', 1513232332, '__ci_last_regenerate|i:1513232332;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('dj3aea8g152ueo3bhrn0fa1v5l11emu6', '::1', 1513232335, '__ci_last_regenerate|i:1513232335;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('3boq4dc9fb9bujcmdem59bvt8goucu46', '::1', 1513232340, '__ci_last_regenerate|i:1513232340;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('9gjvgdt6j58a5d6tgu28dt8d62pn66ro', '::1', 1513233023, '__ci_last_regenerate|i:1513233023;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('hkn3jn5botjpqjr82icrnncu3vg1gtmr', '::1', 1513233189, '__ci_last_regenerate|i:1513233189;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('rfr5gi2se3nv4675nd7dlmudahhe939m', '::1', 1513233198, '__ci_last_regenerate|i:1513233198;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('960n5vt80o88dvt3tfpsvve2qljsj2n4', '::1', 1513233201, '__ci_last_regenerate|i:1513233201;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('sl9dqseuho19qj4vibakdlo5e2ti91hv', '::1', 1513233268, '__ci_last_regenerate|i:1513233268;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('btrhc6fo1hf6eggaabi27esr2h5nhjk9', '::1', 1513233270, '__ci_last_regenerate|i:1513233270;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('g47jkocgbks2uls9etbgvkpgd9fk27q8', '::1', 1513233275, '__ci_last_regenerate|i:1513233275;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('pgndo7gseo08eie463s37nadkom7k3c2', '::1', 1513233277, '__ci_last_regenerate|i:1513233277;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('gfqij5q4t0c01l762u2pls9cl78rtgfa', '::1', 1513233336, '__ci_last_regenerate|i:1513233336;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('a47if17suebfie4ckhbau0qu7loar74d', '::1', 1513233353, '__ci_last_regenerate|i:1513233353;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('uc90p0occc838e8ntm915kbdqld82f09', '::1', 1513233477, '__ci_last_regenerate|i:1513233477;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('eb18b02jcns1nkv272lnvij2ir3abhjv', '::1', 1513233487, '__ci_last_regenerate|i:1513233487;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('j7m70j0gqkml22q2csk8a91ovandq27i', '::1', 1513233491, '__ci_last_regenerate|i:1513233491;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('ouebem0fnl88g9gi39vq0fbcs327qrq7', '::1', 1513233506, '__ci_last_regenerate|i:1513233506;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('piqp31f97ichaevjj815duo4o6eujhdj', '::1', 1513233549, '__ci_last_regenerate|i:1513233548;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('9s8aja9mmujne5kkd5pbmok61gj3k8dr', '::1', 1513233660, '__ci_last_regenerate|i:1513233660;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('87c0044i2p1pdgr7rdjp7j0ddsma3k8k', '::1', 1513233781, '__ci_last_regenerate|i:1513233781;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('7nl6ictost2mfr496c0l13m38fegvl52', '::1', 1513233884, '__ci_last_regenerate|i:1513233884;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('lmai0ohmmetsceiq0pjm2g8dn2qrk0o4', '::1', 1513233906, '__ci_last_regenerate|i:1513233906;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('2lf8t1qclmg8jr6ku6vmhs30is03g8mc', '::1', 1513233914, '__ci_last_regenerate|i:1513233914;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('658gq6hmj4oi9pi6so1fclbglifp8cua', '::1', 1513233918, '__ci_last_regenerate|i:1513233918;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('vjk07hjh2ubrbdfu5pg2sh7jtsl85e38', '::1', 1513234221, '__ci_last_regenerate|i:1513234221;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('tfn7phgg24rhml5p2m26hpetlaf08q1u', '::1', 1513234232, '__ci_last_regenerate|i:1513234232;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('3aped7d9ggd9c2dviaq8ftscfllfsvqv', '::1', 1513234247, '__ci_last_regenerate|i:1513234246;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('er9rfi1o0bc8bob69poer4ag64as867o', '::1', 1513234251, '__ci_last_regenerate|i:1513234251;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('0ncjcj0ku6h5ffsco61l1fcchgbtlg39', '::1', 1513234256, '__ci_last_regenerate|i:1513234256;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('6gnuldt44hpsg67nerntm1j1c4i8go3g', '::1', 1513234267, '__ci_last_regenerate|i:1513234267;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('63c7hdop0okmrf3h1lkbds9ef1afbr25', '::1', 1513234285, '__ci_last_regenerate|i:1513234285;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('63ukardpkskchbgk55vujtbfl0j3ia89', '::1', 1513234296, '__ci_last_regenerate|i:1513234295;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('1jqk6b87utnrsuhv0dk85uqhfjb7c8ci', '::1', 1513234365, '__ci_last_regenerate|i:1513234365;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('4f2ctnkb94ddflc2rsstghil56vrtibk', '::1', 1513234406, '__ci_last_regenerate|i:1513234406;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('ufv82v0o5bihlo9bcr1pe6m63h8lnumc', '::1', 1513234489, '__ci_last_regenerate|i:1513234489;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('kr9gphbhim2m147sr6luv9d78re5o9n7', '::1', 1513234510, '__ci_last_regenerate|i:1513234509;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('7nu6uuvjek2jcd0ma4h7jfpr9tff9q9d', '::1', 1513234522, '__ci_last_regenerate|i:1513234522;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('j33s1r9hce79a02dae8grjsnkgg2vds6', '::1', 1513234545, '__ci_last_regenerate|i:1513234545;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('8q8kgl8t26g4amgnad9tk923u6b69dsv', '::1', 1513235098, '__ci_last_regenerate|i:1513235098;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('266iih0dsulfrpj17ejjrcbd38802n8t', '::1', 1513235108, '__ci_last_regenerate|i:1513235108;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('n8o7o1tkarfmt4lqftu9e3avm0iavn3e', '::1', 1513235110, '__ci_last_regenerate|i:1513235110;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('shd9l42llkq9hn67rtfl3lobmj12fadv', '::1', 1513235151, '__ci_last_regenerate|i:1513235151;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('4ur4hitjtb6gk6bdlv8ghqd291g6c6ck', '::1', 1513235153, '__ci_last_regenerate|i:1513235153;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('igirda7hck4jls4qlfj69rhu84unbtus', '::1', 1513235155, '__ci_last_regenerate|i:1513235155;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('lm312pu3ehi8uhu35lq975j9h8l5f86i', '::1', 1513235163, '__ci_last_regenerate|i:1513235163;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('mjl65b79f0bmvpm4vagjqggf53gkeo8h', '::1', 1513235368, '__ci_last_regenerate|i:1513235368;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('om996fu5u7eh7eb1q876htf189ndn1l9', '::1', 1513235381, '__ci_last_regenerate|i:1513235381;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('biahmkdedpfku9ifbslube8r8giltien', '::1', 1513235408, '__ci_last_regenerate|i:1513235408;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('sd2nlsnhvt1gdhsq3v6cjtu19e1s91uj', '::1', 1513235447, '__ci_last_regenerate|i:1513235447;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('2qhi5kcg7ig2eae4p98bcuq3tqkr1acc', '::1', 1513235505, '__ci_last_regenerate|i:1513235505;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('plfo529bibg5m6usk75bvdno01lipe9l', '::1', 1513235522, '__ci_last_regenerate|i:1513235522;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('bekfisrakilbkppat5uoc9bfadakr72l', '::1', 1513235764, '__ci_last_regenerate|i:1513235764;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('tqb6cqjd4f32hp170cutca6iqhqdbrkl', '::1', 1513235771, '__ci_last_regenerate|i:1513235771;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('6rvs108tjqo4uqdbgk3uf301slud9o08', '::1', 1513235818, '__ci_last_regenerate|i:1513235818;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('iho4k1sq02tg5o9558kesal4vu7kq731', '::1', 1513235890, '__ci_last_regenerate|i:1513235890;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('fhglgg1uabps7ss9q23eegq994mbj398', '::1', 1513235893, '__ci_last_regenerate|i:1513235893;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('fqpr37tjm4t520hjj8bmilmldup1q5v9', '::1', 1513235898, '__ci_last_regenerate|i:1513235898;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('sfcej5mmdr43a3v0rq1gmm2ntghg3j4p', '::1', 1513236192, '__ci_last_regenerate|i:1513236192;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('71f0kcgsq0uf3l09iq3vr444cuq5de7h', '::1', 1513236211, '__ci_last_regenerate|i:1513236211;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('1v3fma2etbp5cf298toe1b1uj8qfmdlh', '::1', 1513236230, '__ci_last_regenerate|i:1513236230;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('1dsgvomqfqmfa6osd082tcu5aqnr6bia', '::1', 1513236378, '__ci_last_regenerate|i:1513236378;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('mkvggf21jltn0bgengmgqcd2o3c6ehdf', '::1', 1513237381, '__ci_last_regenerate|i:1513237381;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('iod577e19ofct4ikcpc06pu7bf46uvha', '::1', 1513237418, '__ci_last_regenerate|i:1513237418;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('tigm08qgs4e59mu202aen62bnl01dmlm', '::1', 1513237429, '__ci_last_regenerate|i:1513237429;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('6pr71ntjdiu3tnqh23gov8ec73o8vdg2', '::1', 1513237444, '__ci_last_regenerate|i:1513237444;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('01d4778l8no63i1r4h2j5ug2s8m6kt3b', '::1', 1513237455, '__ci_last_regenerate|i:1513237455;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('20kukdgo34gji0djubnibm5a8q26dvbi', '::1', 1513237469, '__ci_last_regenerate|i:1513237469;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('1vqce37eib934iv6113p2hulbel012un', '::1', 1513237488, '__ci_last_regenerate|i:1513237488;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('bqik88in3od9qhtnipt590iq6ljgke41', '::1', 1513237497, '__ci_last_regenerate|i:1513237497;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('0rqp5np6it3r6ma88fiij6rqlsaqdbr9', '::1', 1513237508, '__ci_last_regenerate|i:1513237508;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('vv63d7o8qiqnsjlgtm77k002q4hn2lh6', '::1', 1513237541, '__ci_last_regenerate|i:1513237541;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('fbi3fj2u80bsd2i16cai8iibfon8a82q', '::1', 1513237549, '__ci_last_regenerate|i:1513237549;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('rbe7mv8rhn4dbme0amja7g98e3kao0pv', '::1', 1513237558, '__ci_last_regenerate|i:1513237558;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('uuq0sisceimm29tj7l9g1rv3gf6nv8m5', '::1', 1513237576, '__ci_last_regenerate|i:1513237576;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('a829k03o247aao3c74m267h775aqu45o', '::1', 1513237610, '__ci_last_regenerate|i:1513237610;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('6s4u37bpo071g9dn610er018320tjjeu', '::1', 1513237626, '__ci_last_regenerate|i:1513237625;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('vqoiri73f1fej2po3ma91hpkd0m8adqv', '::1', 1513238749, '__ci_last_regenerate|i:1513238749;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('49v1pk5kfehu414gvkspq8ldvaqasqkf', '::1', 1513238755, '__ci_last_regenerate|i:1513238755;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('vcgrj0t15sngng9u3t82behg434mjcr4', '::1', 1513238757, '__ci_last_regenerate|i:1513238757;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('q3uan3cjiabtg0kk1aue466pl8s42nae', '::1', 1513238763, '__ci_last_regenerate|i:1513238763;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('g2dvll4omlacde828019n0dqoglq86mj', '::1', 1513238765, '__ci_last_regenerate|i:1513238765;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('pou01hanb8rc6lh37s1j1o40v7d6t6ss', '::1', 1513238792, '__ci_last_regenerate|i:1513238792;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('kvo21cf7u08v2946touf5n239dl0uhc9', '::1', 1513238820, '__ci_last_regenerate|i:1513238820;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('bgspv8h2of8n5s9fh9jhth8rttuimpi9', '::1', 1513238822, '__ci_last_regenerate|i:1513238822;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('mea7k9iqm0raoosoeonn3hbpufv1ouke', '::1', 1513238826, '__ci_last_regenerate|i:1513238826;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('qbd7dq3ji8d4e9ml322ijbrqae3rnend', '::1', 1513238828, '__ci_last_regenerate|i:1513238828;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('aegucb7ukdoj2fq0qm92gprigadr6t5g', '::1', 1513239203, '__ci_last_regenerate|i:1513239203;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('2me3glf42m94kife12e9d48lute0sr0u', '::1', 1513239879, '__ci_last_regenerate|i:1513239879;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('bpukolgngmp6bfmb41i3iqtac88vutnb', '::1', 1513239898, '__ci_last_regenerate|i:1513239898;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('bsvvmok02lbtlcofs33d3ft36dvc06mb', '::1', 1513239902, '__ci_last_regenerate|i:1513239902;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('vl3fn0l8i98dqkeb8a3s6odt2as4clau', '::1', 1513240000, '__ci_last_regenerate|i:1513240000;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('s2v05742fosu03at9rmcr4b7lnpfsti8', '::1', 1513240002, '__ci_last_regenerate|i:1513240002;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('5hslpcnchsqfdl06k04e46s8083aun7p', '::1', 1513240149, '__ci_last_regenerate|i:1513240149;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('g0b2jss3pke43ja8md79q4jgvhos47oa', '::1', 1513240174, '__ci_last_regenerate|i:1513240174;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('sptge49cea5j3lovdiff1pbojte3am2e', '::1', 1513240212, '__ci_last_regenerate|i:1513240212;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('tmfjb667ov06u2kfvbluvbmk9gpu5acv', '::1', 1513240246, '__ci_last_regenerate|i:1513240246;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('ld06ln5dcnb2httnj25q95u86aomdrlr', '::1', 1513241546, '__ci_last_regenerate|i:1513241546;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('7dnshi9rsap5st9msj4gg13lm4migkda', '::1', 1513241946, '__ci_last_regenerate|i:1513241946;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('fkgqeuk5efnu2fiqmsj2cq103lnt0eqb', '::1', 1513242332, '__ci_last_regenerate|i:1513242332;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('0hvpdtq67matpjk2fpp4d382dc26c6db', '::1', 1513242478, '__ci_last_regenerate|i:1513242478;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('1i489botnbndjqq66de6ac9b7f7lm7ib', '::1', 1513242731, '__ci_last_regenerate|i:1513242731;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('rigl5ao7odc5cgg8d80lp6ilc2f4aj4g', '::1', 1513242750, '__ci_last_regenerate|i:1513242750;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('38oprh9i1qti7ohri1nvebpgbair5umg', '::1', 1513242757, '__ci_last_regenerate|i:1513242757;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('7ndjkddova262rm5millgplf08s2tera', '::1', 1513242761, '__ci_last_regenerate|i:1513242761;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('rukf5jmefc682tgn9mlvref1seqlb712', '::1', 1513242777, '__ci_last_regenerate|i:1513242777;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('iejr65sbet1oqk0a5j1h6d2t8nk234n4', '::1', 1513242794, '__ci_last_regenerate|i:1513242794;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('n2q9qp2rivotnvsr9o65aufrjudcccnd', '::1', 1513242796, '__ci_last_regenerate|i:1513242796;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('9rfmpqp064bb8ng483kgoeifkjasp4fu', '::1', 1513242798, '__ci_last_regenerate|i:1513242798;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('k3bvuhpvafeahdhj3ifr4idqrms7adiv', '::1', 1513242805, '__ci_last_regenerate|i:1513242805;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('ap69d7clim6tocc4k67tudcvlepnnka5', '::1', 1513242835, '__ci_last_regenerate|i:1513242835;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('6e2va1r7hsivcfnj7pb88e69auksg3dj', '::1', 1513242854, '__ci_last_regenerate|i:1513242854;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('10vicjjhp1mlk35ubi9b2ncbn1l9dobm', '::1', 1513242868, '__ci_last_regenerate|i:1513242868;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('a5l9prq7i1iiiksdldglavjok4faji15', '::1', 1513242913, '__ci_last_regenerate|i:1513242912;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('ggppumk4hq371paar8sv9dnb839p6are', '::1', 1513242916, '__ci_last_regenerate|i:1513242916;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('sfjn5dflhurlb5280clp31ss1d32refi', '::1', 1513242920, '__ci_last_regenerate|i:1513242920;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('30uv4bleesco4duiac841rrtr0sjtvav', '::1', 1513242937, '__ci_last_regenerate|i:1513242936;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";pesan|s:228:\"<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>\";__ci_vars|a:1:{s:5:\"pesan\";s:3:\"old\";}'),
('baa2v8efb42t7vp4r3flui123gko15bs', '::1', 1513242985, '__ci_last_regenerate|i:1513242985;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('todtgb557t94tdvqkpj3bo4j633imms5', '::1', 1513242989, '__ci_last_regenerate|i:1513242989;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('6a5tdoofbom4lajeuacc2u3uoveavsl1', '::1', 1513244060, '__ci_last_regenerate|i:1513244060;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('lumcdr8dmipj41t84obe83puj4phn2b4', '::1', 1513244064, '__ci_last_regenerate|i:1513244064;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('8112dd0t0fd20d1grt7vrs5g1aipotor', '::1', 1513244112, '__ci_last_regenerate|i:1513244112;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('332ko4kj7e5of2k04u37s3inf8r5poo9', '::1', 1513244123, '__ci_last_regenerate|i:1513244123;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('17u3csogog95lms7q04gfsk9ric5m0bv', '::1', 1513244128, '__ci_last_regenerate|i:1513244128;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";'),
('9f7mpfpuqsiucfb9otpfea0iujvt7uof', '::1', 1513244134, '__ci_last_regenerate|i:1513244134;id_user|s:8:\"US-00001\";username|s:5:\"admin\";group_user|s:0:\"\";nama|s:1:\"d\";');

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
  `waktu` varchar(50) NOT NULL,
  `nis` varchar(11) DEFAULT NULL,
  `id_pengajar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `jenis_tari` varchar(50) DEFAULT NULL,
  `lama_tari` varchar(50) NOT NULL,
  `estimasi` decimal(19,2) NOT NULL,
  `cara_bayar` varchar(50) NOT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minta_menari`
--

INSERT INTO `minta_menari` (`no_permin`, `nama`, `no_id`, `telp`, `email`, `tgl_tari`, `alamat`, `jenis_tari`, `lama_tari`, `estimasi`, `cara_bayar`, `file`) VALUES
('a', '', '', '', '', '0000-00-00', '', NULL, '', '0.00', '', NULL),
('e', 'ee', 'e', 'e', 'e', '2017-12-14', 'e', NULL, 'e', '0.00', 'e', NULL),
('w', 'wr', 'w', 'w', 'w', '2017-12-14', 'w', NULL, 'w', '0.00', 'w', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_bayar` varchar(11) NOT NULL,
  `tgl` date NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` decimal(19,2) NOT NULL,
  `total` decimal(19,2) NOT NULL,
  `sisa` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `waktu` date NOT NULL,
  `cara_bayar` varchar(25) NOT NULL,
  `file_transfer` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_daftar`, `nama`, `no_id`, `telp`, `email`, `alamat`, `bidang_seni`, `biaya`, `jenis_kelas`, `hari_belajar`, `waktu`, `cara_bayar`, `file_transfer`) VALUES
('f', 'f', 'f', 'f', 'f', 'f', 'Tematic', '0.00', 'A', 'Senin', '0000-00-00', 'Transfer', NULL),
('r', 'rr', 'r', 'r', 'r', 'r', 'Clasic', '0.00', 'A', 'Selasa', '0000-00-00', 'Transfer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(45) NOT NULL,
  `bidang_seni` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `estimasi` decimal(19,2) NOT NULL,
  `cara_bayar` varchar(30) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `total_biaya` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reparasi`
--

INSERT INTO `reparasi` (`no_layanan`, `nama`, `no_id`, `telp`, `email`, `alamat`, `pelayanan`, `item`, `panjang_lukisan`, `estimasi`, `cara_bayar`, `file`, `total_biaya`) VALUES
('', 'r', 'r', 'r', '', 'r', '', NULL, 'r', '0.00', NULL, NULL, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(25) NOT NULL,
  `bidang_seni` varchar(35) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `tempat`, `tgl_lahir`, `telp`, `email`, `bidang_seni`, `status`) VALUES
('1', '2', '', '', '0000-00-00', '', '', '', '2');

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
('US-00001', 'd', '', '', '', 'admin', '$2y$10$PcDeCc.bKDO31KTsjV3s.epV6U3DBlGQ25VLlHQbx/7XfnsE91gKa', '', 'N'),
('US-00002', '', '', '', '', '', '', '', 'Y'),
('US-00003', '', '', '', '', '', '', '', 'Y'),
('US-00004', '', '', '', '', '', '', '', 'Y'),
('US-00005', '', '', '', '', '', '', '', 'Y'),
('US-00006', 'e', 'e', 'e', 'e', 'e', 'e', 'Administrator', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `id_siswa` (`nis`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `minta_menari`
--
ALTER TABLE `minta_menari`
  ADD PRIMARY KEY (`no_permin`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_kelas_pengajar` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`),
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
