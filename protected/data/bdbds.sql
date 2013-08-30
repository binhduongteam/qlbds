-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2013 at 01:08 PM
-- Server version: 5.5.29-log
-- PHP Version: 5.3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdbds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_DUAN`
--

CREATE TABLE IF NOT EXISTS `tbl_DUAN` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `maduan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenduan` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NULL',
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bandoduan` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `project_manager_id` bigint(20) NOT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_HOSOS`
--

CREATE TABLE IF NOT EXISTS `tbl_HOSOS` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tenuser` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `socmnd` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ngaycapcmnd` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicapcmnd` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachithuongtru` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachilienhe` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dtdd1` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dtdd2` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taikhoan_id` bigint(20) NOT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_LO`
--

CREATE TABLE IF NOT EXISTS `tbl_LO` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tinhtrang` tinyint(4) NOT NULL,
  `sanpham_id` bigint(20) NOT NULL,
  `malo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toado` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loc_id` bigint(20) NOT NULL,
  `khachhang_id` bigint(20) NOT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_LOAISANPHAM`
--

CREATE TABLE IF NOT EXISTS `tbl_LOAISANPHAM` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `maloaisanpham` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenloaisanpham` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_LOC`
--

CREATE TABLE IF NOT EXISTS `tbl_LOC` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `maloc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duan_id` bigint(20) NOT NULL,
  `bandoloc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaisanpham_id` bigint(20) NOT NULL,
  `toado` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1374153842),
('m110805_153437_installYiiUser', 1374153854),
('m110810_162301_userTimestampFix', 1374153855);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `first_name`, `last_name`) VALUES
(1, 'Administrator', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` text,
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` text,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'first_name', 'First Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'last_name', 'Last Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_SANPHAM`
--

CREATE TABLE IF NOT EXISTS `tbl_SANPHAM` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tensanpham` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `loaisanpham_id` bigint(20) NOT NULL,
  `dientich` float NOT NULL,
  `huong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` decimal(10,0) NOT NULL,
  `logoc` int(11) NOT NULL,
  `dientichxaydung` float DEFAULT NULL,
  `kiot_mattienduong` int(11) DEFAULT NULL,
  `ch_tang` tinyint(4) DEFAULT NULL,
  `bt_np_tangcaonha` int(11) DEFAULT NULL,
  `np_link_bangvematbang` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `html_thongtinthem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_USERS`
--

CREATE TABLE IF NOT EXISTS `tbl_USERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_USERS`
--

INSERT INTO `tbl_USERS` (`id`, `username`, `password`, `email`, `activkey`, `superuser`, `status`, `create_at`, `lastvisit_at`, `role`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'nhan@glandoresystems.com', '9f9e76d3d9c401c7e880c0c78a1359df', 1, 1, '2013-07-18 13:24:14', '2013-08-13 21:15:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_USER_DUAN`
--

CREATE TABLE IF NOT EXISTS `tbl_USER_DUAN` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `duan_id` bigint(20) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_USER_LOC`
--

CREATE TABLE IF NOT EXISTS `tbl_USER_LOC` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `loc_id` bigint(20) NOT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
