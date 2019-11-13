-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2019 at 09:29 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4ylthailandshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website`
--

CREATE TABLE `tbl_website` (
  `Id_setting` int(11) NOT NULL,
  `Detail_setting` text COLLATE utf8_unicode_ci NOT NULL,
  `Detail2_setting` text COLLATE utf8_unicode_ci NOT NULL,
  `Promotion` text COLLATE utf8_unicode_ci NOT NULL,
  `Detailtext_price` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'ข้อความ ราคาในเว็บ',
  `Price1_setting` decimal(65,2) NOT NULL COMMENT 'ราคาเต็ม',
  `Price2_setting` decimal(65,2) NOT NULL COMMENT 'ราคาลด',
  `Video_setting` text COLLATE utf8_unicode_ci NOT NULL,
  `Use_setting` enum('Video','Slide') COLLATE utf8_unicode_ci NOT NULL,
  `Detailhead_setting` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_website`
--

INSERT INTO `tbl_website` (`Id_setting`, `Detail_setting`, `Detail2_setting`, `Promotion`, `Detailtext_price`, `Price1_setting`, `Price2_setting`, `Video_setting`, `Use_setting`, `Detailhead_setting`) VALUES
(1, '<p style=\"text-align: center;\"><img alt=\"\" src=\"../upload/files/1565689600_timeline_25620531_093233.jpg\" style=\"height:730px; width:730px\" /></p>\r\n', '<p style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>​กลิ่นปากแรงงง<span style=\"color:#FF0000\">!!!</span></strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>ใครๆก้ไม่ชอบ</strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>ถ้ามีกลิ่นปาก ต้องรีบแก้ด้วย <span style=\"color:#006400\">&quot;ยาสีฟันบาบูเคลียร์&quot;</span></strong></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong><span style=\"color:#006400\"><img alt=\"\" src=\"../upload/files/1565690645_a1.jpg\" style=\"height:730px; width:730px\" /></span></strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:rgb(0, 128, 0)\"><span style=\"font-size:20px\"><strong>สมุนไพรแก้ปากเหม็น รูปแบบยาสีฟัน &quot;บาบูเคลียร์&quot;</strong></span></span></p>\r\n\r\n<p><strong>มีคุณสมบัติ</strong><br />\r\n1. แก้ปากเหม็น แปรงแค่ 2 นาที&nbsp;<span style=\"color:rgb(0, 128, 0)\">กลิ่นเหม็นหายยยยยย...เหม็น</span><br />\r\n2. กลิ่นปาก<span style=\"color:rgb(0, 128, 0)\"><strong>&nbsp;&quot;หอม&quot;</strong></span>&nbsp;ชื่นใจ<br />\r\n3. ใช้ปริมาณแค่&nbsp;<span style=\"color:rgb(0, 128, 0)\"><strong>เม็ดถั่ว ประยัดจริงๆ</strong></span><br />\r\n4.&nbsp;<span style=\"color:rgb(0, 128, 0)\"><strong>ขจัดคราบเหลืองบนผิวฟัน</strong></span>&nbsp;คราบชา กาแฟ บุหรี่&nbsp;<span style=\"color:rgb(0, 128, 0)\"><strong>ฟันขาวขึ้น</strong></span><br />\r\n5.&nbsp;<span style=\"color:rgb(0, 128, 0)\"><strong>เหงือกกระชับ</strong></span>ขึ้น</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:rgb(255, 0, 0)\"><strong><span style=\"background-color:rgb(255, 255, 0)\">&nbsp; &nbsp; &nbsp; *** ไม่เห็นผลยินดีคืนเงิน เต็มจำนวน ***</span></strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:rgb(0, 0, 205)\"><strong>ราคาเพียงหลอดละ&nbsp;&nbsp;390 บาท</strong></span></p>\r\n', 'DEC 30,2562 23:59:00', ' <font size=4><b> 1 ชุด 360<b> |</font> <font size=5 color=red><b>2 ชุดเพียง 720 บาท</b></font>', '450.00', '360.00', 'video.', 'Slide', 'XXXXXXXXXXXXXXXX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`Id_setting`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
