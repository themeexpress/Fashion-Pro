-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 10:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `access_level` tinyint(1) NOT NULL COMMENT '1 = super Admin, 2=admin',
  `activation_status` varchar(1) NOT NULL COMMENT '0=active,1=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `access_level`, `activation_status`) VALUES
(1, 'Md. Kamrul Islam', 'adminkamrul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1'),
(2, 'simpleadmin', 'simpleadmin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(160) NOT NULL,
  `brand_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_description`, `publication_status`) VALUES
(1, 'ACNE', 'ACNE Bands all product here.', 0),
(2, 'GRÜNE ERDE ', 'GRUNE ERDE Brand\'s all product here', 0),
(3, 'ALBIRO RONHILL', 'ALBIRO RONHILL \'S All products here', 1),
(5, '  BOUDESTIJN', 'BOUDESTIJN All Products is here', 0),
(6, '  RÖSCH', 'Rouch Brand all products here', 1),
(7, ' CREATIVE', 'Creative brand\'s all products are here', 1),
(8, ' CULTURE', 'Culture Brands all products are here', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'SPORTSWEAR', '<strong xss=removed>Lorem Ipsum</strong><span xss=removed> is simply dummy text of the printing and typesetting industry. Lorem <b>Ipsum has been the industry\'s standard </b>dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</span>', 1),
(3, 'MENS', '<span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</span>', 1),
(4, 'WOMENS', '<span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</span>', 1),
(5, 'KIDS', 'All kids collections here', 0),
(7, ' HOUSE HOLDS', 'All House Holds product here', 1),
(10, 'SHOES', 'All means and wormen\'s shoes is under this category', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`, `user_status`) VALUES
(1, 'kamrul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
