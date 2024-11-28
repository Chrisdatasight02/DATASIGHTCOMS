-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 06:12 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datasight`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id` int(4) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `first name` varchar(50) NOT NULL,
  `middle name` varchar(50) NOT NULL,
  `last name` varchar(50) NOT NULL,
  `identification` varchar(50) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `employment` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `vehicle number plate` varchar(60) NOT NULL,
  `purpose` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `sign in` time NOT NULL,
  `sign out` time NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `salutation`, `first name`, `middle name`, `last name`, `identification`, `gender`, `employment`, `contact`, `email`, `address`, `vehicle number plate`, `purpose`, `department`, `date`, `sign in`, `sign out`) VALUES
(1, 'Mr.', 'Brian', 'Wachira', 'Njogu', '28656573', 'Male', 'Staff', '0714889600', 'brian11@yahoo.com', '																																																												', 'KCP 8899Y', 'Reporting', 'ICT', '2024-04-18', '08:30:00', '15:03:00'),
(2, 'None.', 'ken', 'Karanja', 'Maina', '31887654', 'Male', 'Guest', '0712889467', 'karanja45@gmail.com', '																																																							Nyeri', 'N/A', 'OFFICIAL', 'HR', '2024-04-19', '08:30:00', '13:00:00'),
(3, 'None.', 'Lilian', 'Achieng', 'wafula', '26886543', 'Female', 'Guest', '0734567890', 'lilian11@gmail.com', '																																					Nakuru																	', 'N/A', 'OFFICIAL', 'clerk', '2024-04-19', '09:36:00', '17:00:00'),
(4, 'Mr.', 'John', 'Njenga', 'Kiragu', '986654', 'Male', 'Staff', '0714889600', 'john56@gmail.com', '																											kisumu				 				         				     ', 'KCS 3452T', 'Reporting', 'Finance', '2024-04-18', '08:22:00', '19:12:00'),
(12, 'Mr.', 'Brian', 'Kamau', 'Njogu', '31887654', 'Male', 'Guest', '0712889467', 'admin@gmail.com', '								Nairobi					 				         ', 'n/a', 'Official', 'ICT', '2024-04-23', '12:07:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
`id` int(4) NOT NULL,
  `first name` varchar(50) NOT NULL,
  `last name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(60) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `first name`, `last name`, `email`, `contact`, `date`, `city`, `state`, `gender`, `service`, `username`, `password`) VALUES
(16, 'ken', 'Njogu', 'ken22@gmail.com', '0714889600', '1992-08-24', 'Mombasa', 'kenya', 'Male', 'Hotel Management System', 'admin@gmail.com', '2941843cb1fed78e045eee15fb30f9a4'),
(17, 'Raymond', 'Omondi', 'ray23@gmail.com', '0746238765', '1996-08-29', 'Nairobi', 'kenya', 'Male', 'Select Services', 'ray65@gmail.com', '65d2ea03425887a717c435081cfc5dbb'),
(18, 'Mercy ', 'Njogu', 'marcy11@gmail.com', '0723456789', '2003-07-29', 'Nairobi', 'kenya', 'Female', 'Select Services', 'mercy00@gmail.com', '38f629170ac3ab74b9d6d2cc411c2f3c'),
(25, 'Lilian', 'Njogu', 'www1@gmail.com', '0712889467', '2024-05-02', 'Nairobi', 'kenya', 'Female', 'Access control system Unit', 'lilian34@gmail.com', 'e9c775826e5d324b933c303330afc9b0'),
(27, 'Nelson', 'Kagia', 'nelson23@gmail.com', '0712889467', '0000-00-00', 'Nairobi', 'kenya', 'Male', 'Custom Website', 'nelson23@gmail.com', '05a5cf06982ba7892ed2a6d38fe832d6'),
(28, 'ken', 'Njogu', 'admin@gmail.com', '0714889600', '2024-05-02', 'Nairobi', 'kenya', 'Male', 'Computer system unit', 'njogu@gmail.com', '58d4fa778c253c8c598c98e99ad30aab'),
(31, 'john', 'Kamau', 'john56@gmail.com', '0714889600', '2024-05-02', 'Nairobi', 'kenya', 'Male', 'Select Services', 'john56@gmail.com', '26f5bd4aa64fdadf96152ca6e6408068'),
(32, 'Brian', 'Njogu', 'brian11@yahoo.com', '0714889600', '2018-01-02', 'Nairobi', 'kenya', 'Male', 'Select Services', 'brian123@gmail.com', 'dc513ea4fbdaa7a14786ffdebc4ef64e'),
(43, 'Lilian', 'Njogu', 'lilian11@gmail.com', '0714889600', '2024-05-09', 'Nairobi', 'kenya', 'Male', 'Access control system Unit', 'lilian34@gmail.com', '38f629170ac3ab74b9d6d2cc411c2f3c');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(4) NOT NULL,
  `first name` varchar(50) NOT NULL,
  `last name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first name`, `last name`, `email`, `phone`, `password`) VALUES
(1, 'joan', 'kimani', 'user@gmail.com', '0712567890', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Mercy', 'Wangare', 'mercy@gmail.com', '0712345687', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, 'kim', 'kinyua', 'kim00@gmail.com', '0713567890', ' d41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
