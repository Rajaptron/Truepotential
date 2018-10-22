-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2018 at 02:15 PM
-- Server version: 5.5.61-38.13-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microxnm_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(800) NOT NULL,
  `password` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'vishal@microcominternational.com', '123'),
(2, 'Admin', 'raj@microcominternational.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `sno` int(11) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `title` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`sno`, `image`, `title`) VALUES
(1, 'banner/download.jpg', '#TruePotential');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `sno` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`sno`, `invoice`, `user_id`, `package_id`, `status`, `date`) VALUES
(4, 1539862825, 12, 1, 'Success', '2018-10-18'),
(5, 1539866504, 12, 3, 'Success', '2018-10-18'),
(6, 1539866732, 12, 3, 'Success', '2018-10-18'),
(7, 1539866810, 12, 3, 'Success', '2018-10-18'),
(8, 1539867198, 12, 2, 'Success', '2018-10-18'),
(9, 1539867288, 12, 2, 'Success', '2018-10-18'),
(10, 1539867847, 12, 1, 'Success', '2018-10-18'),
(11, 1539869978, 12, 1, 'Success', '2018-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `edu_doc`
--

CREATE TABLE `edu_doc` (
  `sno` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(1500) NOT NULL,
  `document` varchar(2000) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_doc`
--

INSERT INTO `edu_doc` (`sno`, `user_id`, `title`, `document`, `date`) VALUES
(2, 12, '10th Mark sheet ', 'edu_doc/101 math short cuts[www.qmaths.in].pdf', 'Monday 22nd of October 2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `sno` int(11) NOT NULL,
  `package_type` varchar(50) NOT NULL,
  `package_title` varchar(500) NOT NULL,
  `features` longtext NOT NULL,
  `days` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `note` longtext NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`sno`, `package_type`, `package_title`, `features`, `days`, `price`, `note`, `date`) VALUES
(1, 'Paid', 'Silver', '   Free Certificate, Free Gifts, Task Assign  ', 15, 100, '   ', 'Saturday 20th of October 2018 '),
(2, 'Free', 'Free', '    Free Certificate, Free Gifts, Task Assign  ', 12, 0, '', 'Thursday 18th of October 2018 '),
(3, 'Paid', 'Gold', '      Free Certificate, Free Gifts, Task Assign   ', 12, 500, '', 'Thursday 18th of October 2018 '),
(4, 'Paid', 'Platinum', '     Free Certificate, Free Gifts, Task Assign      ', 12, 700, '     The other day I was cleaning my wardrobe and I realized that I picked a lot of pieces from the menâ€™s section, so I thought â€œwhy not sharing it with you guys ??â€ There are various ways in which you can style with menâ€™s wear and you are not aware of the them.\r\n\r\nSo, I&#039;m going to show you guys how I style with menâ€™s wear which you can steal from your father, brother, boyfriend, husband or you can buy one for yourself and trust me guys, it feels amazing to shop from menâ€™s section.\r\n\r\nThe fashion world has opened the channels in various ways, whether it is a fusion of a menâ€™s apparel with the girlâ€™s or styling it with different accessories which is in trend.  Certainly, this styling has given a great advantage for people to showcase their wise choice in fashion. Shirts are staple of everyoneâ€™s wardrobe; however, menâ€™s shirt has become a style icon for girlâ€™s wear now as they are considered as Boyfriend shirts. No matter how a girlâ€™s wardrobe is equipped with a variety of apparels, a shirt is a must-have.      ', 'Thursday 18th of October 2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `sno` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(200) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`sno`, `user_id`, `name`, `email`, `description`, `status`, `date`) VALUES
(2, 11, 'vishal', 'vish@gmail.com', ' If you&#039;re not completely satisfied with your first shirt, do not worry. Write into our Customer Care team who will ensure a pain free rectification process. After weâ€™ve identified the issue, we will either alter your shirt or completely remake it free of cost. \r\nIf you are a first time customer and ordering 3 or more shirts, we will compulsorily send you 1 shirt as a trial to confirm the fit. Once youâ€™re happy, we will proceed with the rest of your order.', 'yes', 'Friday 12th of October 2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(600) NOT NULL,
  `interest` varchar(1500) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `school` varchar(500) NOT NULL,
  `class` varchar(500) NOT NULL,
  `pimage` varchar(1200) NOT NULL,
  `registration_date` varchar(600) NOT NULL,
  `status` varchar(50) NOT NULL,
  `invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `fname`, `lname`, `phone`, `email`, `password`, `interest`, `gender`, `dob`, `city`, `state`, `address`, `school`, `class`, `pimage`, `registration_date`, `status`, `invoice`) VALUES
(12, 'vishal', '', 8233441959, 'vishal@microcominternational.com', '123', 'Pop,Romantic ', 'Male', '2018-10-10', 'jaipur', 'Rajasthan', 'malviya nagar, dgxdbh, sfgsdhg, malviya nagar, dgxdbh, sfgsdhg', 'gvm', '6', 'upload/1515778205090.png', 'Wednesday 10th of October 2018 ', 'Paid', 1539869978),
(13, 'vishal', '', 8233441900, 'vishal@microcominternational.com', '123', 'Pop', 'Male', '2018-10-11', '', 'Rajasthan', 'malviya nagar, dgxdbh, sfgsdhg, malviya nagar, dgxdbh, sfgsdhg', 'tgdfh', 'jdfj', '', 'Wednesday 10th of October 2018 ', 'free', 0),
(14, 'vishal', '', 8233441888, 'vish@gmail.com', '123', 'Pop,Romantic ', 'Male', '2018-10-09', '', 'rajasthan', 'malviya nagar, dgxdbh', 'gvm', 'subscribe', '', 'Thursday 11th of October 2018 ', 'no', 0),
(15, 'sudhanshu', '', 8233000000, 'vish@gmail.com', '123', 'Pop,Romantic ,Hip-Hop', 'Male', '2018-10-08', '', 'rajasthan', 'malviya nagar, dgxdbh', 'gvm', '3', '', 'Thursday 11th of October 2018 ', 'free', 0),
(16, 'raj agrawal', '', 9871507376, 'Raj@microcominternational.com', '1234', 'Pop,Cricket', 'Male', '1993-02-01', '', 'delhi', 'fc-6', 'sainik school', '12th', '', 'Thursday 11th of October 2018 ', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webcontent`
--

CREATE TABLE `webcontent` (
  `sno` int(11) NOT NULL,
  `whatwedo` longtext NOT NULL,
  `organisation` longtext NOT NULL,
  `featured` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcontent`
--

INSERT INTO `webcontent` (`sno`, `whatwedo`, `organisation`, `featured`) VALUES
(1, 'The other day I was cleaning my wardrobe and I realized that I picked a lot of pieces from the menâ€™s section, so I thought â€œwhy not sharing it with you guys ??â€ There are various ways in which you can style with menâ€™s wear and you are not aware of the them.\r\n\r\nSo, I&#039;m going to show you guys how I style with menâ€™s wear which you can steal from your father, brother, boyfriend, husband or you can buy one for yourself and trust me guys, it feels amazing to shop from menâ€™s section.\r\n\r\nThe fashion world has opened the channels in various ways, whether it is a fusion of a menâ€™s apparel with the girlâ€™s or styling it with different accessories which is in trend.  Certainly, this styling has given a great advantage for people to showcase their wise choice in fashion. Shirts are staple of everyoneâ€™s wardrobe; however, menâ€™s shirt has become a style icon for girlâ€™s wear now as they are considered as Boyfriend shirts. No matter how a girlâ€™s wardrobe is equipped with a variety of apparels, a shirt is a must-have.', 'The other day I was cleaning my wardrobe and I realized that I picked a lot of pieces from the menâ€™s section, so I thought â€œwhy not sharing it with you guys ??â€ There are various ways in which you can style with menâ€™s wear and you are not aware of the them.\r\n\r\nSo, I&#039;m going to show you guys how I style with menâ€™s wear which you can steal from your father, brother, boyfriend, husband or you can buy one for yourself and trust me guys, it feels amazing to shop from menâ€™s section.\r\n\r\nThe fashion world has opened the channels in various ways, whether it is a fusion of a menâ€™s apparel with the girlâ€™s or styling it with different accessories which is in trend.  Certainly, this styling has given a great advantage for people to showcase their wise choice in fashion. Shirts are staple of everyoneâ€™s wardrobe; however, menâ€™s shirt has become a style icon for girlâ€™s wear now as they are considered as Boyfriend shirts. No matter how a girlâ€™s wardrobe is equipped with a variety of apparels, a shirt is a must-have.', 'The other day I was cleaning my wardrobe and I realized that I picked a lot of pieces from the menâ€™s section, so I thought â€œwhy not sharing it with you guys ??â€ There are various ways in which you can style with menâ€™s wear and you are not aware of the them.\r\n\r\nSo, I&#039;m going to show you guys how I style with menâ€™s wear which you can steal from your father, brother, boyfriend, husband or you can buy one for yourself and trust me guys, it feels amazing to shop from menâ€™s section.\r\n\r\nThe fashion world has opened the channels in various ways, whether it is a fusion of a menâ€™s apparel with the girlâ€™s or styling it with different accessories which is in trend.  Certainly, this styling has given a great advantage for people to showcase their wise choice in fashion. Shirts are staple of everyoneâ€™s wardrobe; however, menâ€™s shirt has become a style icon for girlâ€™s wear now as they are considered as Boyfriend shirts. No matter how a girlâ€™s wardrobe is equipped with a variety of apparels, a shirt is a must-have.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `edu_doc`
--
ALTER TABLE `edu_doc`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `webcontent`
--
ALTER TABLE `webcontent`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `edu_doc`
--
ALTER TABLE `edu_doc`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `webcontent`
--
ALTER TABLE `webcontent`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
