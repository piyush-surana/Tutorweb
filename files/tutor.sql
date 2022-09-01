-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 09:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtutor`
--

CREATE TABLE IF NOT EXISTS `addtutor` (
`id` int(11) NOT NULL,
  `tname` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `qualification` text NOT NULL,
  `email` varchar(111) NOT NULL,
  `photo` varchar(111) NOT NULL,
  `desc1` text NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtutor`
--

INSERT INTO `addtutor` (`id`, `tname`, `contact`, `qualification`, `email`, `photo`, `desc1`, `password`) VALUES
(2, 'Rhaul', '782477979', 'BCA,MCA,BCOM', 'abc@gmail.com', '3.jpg', 'Hello Thsosss', ''),
(3, 'mahesh', '87492837423', 'BCA,MCA,MTech', 'mahesh@gmail.com', 'Ajmer-Sharif-Khwaja-Garib-Nawaz.jpg', 'hello other desc', ''),
(4, 'manoj', '7492837483', 'BCA,MCA,MTech', 'mahesh@gmail.com', 'Ajmer-Sharif-Khwaja-Garib-Nawaz.jpg', 'hello other desc', ''),
(6, 'jignesh', '782477979', 'BCA,MCA,BCOM', 'abc@gmail.com', '3.jpg', 'Hello Thsosss', ''),
(7, 'manish jain', '766565889', 'BCA,MCA,MTech', 'manishjain@gmail.com', 'Desert.jpg', '				hello other desc', '123'),
(8, 'Vishal', '9723947293', 'M.tech,B.tech', 'vishal@gmail.com', 'Desert.jpg', 'helloo', '123'),
(9, 'manoj', '7492837492', 'bca,mca', 'abb@gmail.com', 'Desert.jpg', 'aaaaaaaaaa', '123');

-- --------------------------------------------------------

--
-- Table structure for table `add_service`
--

CREATE TABLE IF NOT EXISTS `add_service` (
`id` int(11) NOT NULL,
  `sname` varchar(111) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_service`
--

INSERT INTO `add_service` (`id`, `sname`, `description`, `images`) VALUES
(2, 'aaaaa', 'fffffffffffffff', 'about.jpg'),
(3, 'Video Teaching', 'Online video teaching classes available.pls note and check our video teaching classes', 'testimonials-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_subject`
--

CREATE TABLE IF NOT EXISTS `add_subject` (
`id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `subjectname` varchar(111) NOT NULL,
  `fee` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_subject`
--

INSERT INTO `add_subject` (`id`, `tutor_id`, `subjectname`, `fee`) VALUES
(2, 3, 'Maths', '4000'),
(3, 7, 'C language', '3000'),
(4, 7, 'java', '5000'),
(5, 7, 'python', '7000'),
(7, 7, 'Laravel', '5500'),
(8, 3, 'Java', '3344'),
(9, 4, 'Java', ''),
(10, 6, 'Maths', '1111'),
(11, 2, 'java', '2200');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
`id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `applytutor`
--

CREATE TABLE IF NOT EXISTS `applytutor` (
`id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sname` varchar(111) NOT NULL,
  `date_times` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applytutor`
--

INSERT INTO `applytutor` (`id`, `tid`, `uid`, `sname`, `date_times`) VALUES
(2, 7, 2, 'C language', '2021-09-07 06:31:42'),
(4, 3, 2, 'Java', '2021-09-07 06:31:42'),
(5, 6, 2, 'Maths', '2021-09-07 06:31:42'),
(6, 7, 2, 'Data Strcture', '2021-09-07 06:31:42'),
(7, 2, 2, 'java', '2021-09-07 06:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
`id` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `whatsup` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `address`, `email`, `contact`, `whatsup`) VALUES
(4, 'Udaipur,Rajasthan,India', 'abc@gmail.com', '80058 06959', '80058 06959');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `subject` varchar(111) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `contact`, `subject`, `message`) VALUES
(2, 'ssssssss', 'an@gmil.com', '9847293874', 'ssss', 'hhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
`id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `photo` varchar(111) NOT NULL,
  `qualification` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `contact`, `email`, `password`, `photo`, `qualification`) VALUES
(2, 'vishal jain', '9729837466', 'abc@gmail.com', '123', 'about.jpg', 'bca,mca');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
`id` int(11) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `images`) VALUES
(1, '634919626010255746_DSC00694.jpg'),
(2, 'Ajmer-Sharif-Khwaja-Garib-Nawaz.jpg'),
(3, '5(3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `toprank`
--

CREATE TABLE IF NOT EXISTS `toprank` (
`id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `examname` varchar(111) NOT NULL,
  `years` int(11) NOT NULL,
  `photo` varchar(111) NOT NULL,
  `rank` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toprank`
--

INSERT INTO `toprank` (`id`, `name`, `examname`, `years`, `photo`, `rank`) VALUES
(5, 'Vijay bana', 'Advance JEE Main', 2020, 'ppc.png', 'First Rank'),
(6, 'ssss', 'aaaa', 1980, 'Desert.jpg', 'First Rank');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtutor`
--
ALTER TABLE `addtutor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_service`
--
ALTER TABLE `add_service`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_subject`
--
ALTER TABLE `add_subject`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applytutor`
--
ALTER TABLE `applytutor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toprank`
--
ALTER TABLE `toprank`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtutor`
--
ALTER TABLE `addtutor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `add_service`
--
ALTER TABLE `add_service`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `add_subject`
--
ALTER TABLE `add_subject`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `applytutor`
--
ALTER TABLE `applytutor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `toprank`
--
ALTER TABLE `toprank`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
