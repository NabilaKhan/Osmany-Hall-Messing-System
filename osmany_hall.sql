-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 03:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osmany_hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `date` date NOT NULL,
  `items` text NOT NULL,
  `ata` int(11) NOT NULL,
  `price_ata` int(11) NOT NULL,
  `dal` int(11) NOT NULL,
  `price_dal` int(11) NOT NULL,
  `egg` int(11) NOT NULL,
  `price_egg` int(11) NOT NULL,
  `chillies` int(11) NOT NULL,
  `price_chillies` int(11) NOT NULL,
  `onions` int(11) NOT NULL,
  `price_onions` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`date`, `items`, `ata`, `price_ata`, `dal`, `price_dal`, `egg`, `price_egg`, `chillies`, `price_chillies`, `onions`, `price_onions`, `total`) VALUES
('2016-10-26', 'ruti, dal', 2, 20, 1, 30, 0, 10, 1, 10, 0, 60, 80),
('2016-10-27', '', 0, 0, 3, 10, 3, 10, 0, 0, 0, 0, 60),
('2016-10-28', 'df', 0, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-11-27', '', 12, 3, 0, 0, 0, 0, 0, 0, 0, 0, 36);

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `date` date NOT NULL,
  `items` text CHARACTER SET latin1 NOT NULL,
  `rice` int(11) NOT NULL,
  `price_rice` int(11) NOT NULL,
  `chicken` int(11) NOT NULL,
  `price_chicken` int(11) NOT NULL,
  `beef` int(11) NOT NULL,
  `price_beef` int(11) NOT NULL,
  `fish` int(11) NOT NULL,
  `price_fish` int(11) NOT NULL,
  `potato` int(11) NOT NULL,
  `price_potato` int(11) NOT NULL,
  `vegetable` int(11) NOT NULL,
  `price_vege` int(11) NOT NULL,
  `chillies` int(11) NOT NULL,
  `price_chillies` int(11) NOT NULL,
  `onions` int(11) NOT NULL,
  `price_onions` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`date`, `items`, `rice`, `price_rice`, `chicken`, `price_chicken`, `beef`, `price_beef`, `fish`, `price_fish`, `potato`, `price_potato`, `vegetable`, `price_vege`, `chillies`, `price_chillies`, `onions`, `price_onions`, `total`) VALUES
('0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-02', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-05', 'ertytttttttttttttttttttttttttttttt', 32, 3, 2, 7, 6, 5, 8, 9, 5, 9, 6, 4, 4, 4, 3, 3, 306),
('2016-10-12', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-13', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-20', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-22', 'ert', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 0, 7, 7, 7, 7, 7, 392),
('2016-10-23', 'ert', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 392),
('2016-10-24', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-26', 'vat, dim, daal', 2, 40, 0, 200, 0, 400, 0, 200, 0, 40, 0, 50, 1, 30, 1, 60, 170),
('2016-10-27', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-28', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-11-27', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hallbill_month`
--

CREATE TABLE `hallbill_month` (
  `id` varchar(40) CHARACTER SET latin1 NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `bill` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `paid` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `hallbill_month`
--

INSERT INTO `hallbill_month` (`id`, `month`, `year`, `bill`, `pay_date`, `paid`, `remaining`, `image`) VALUES
('201414105', 0, 0, 0, '2016-10-14', 5000, 0, 'Screenshot (23).png'),
('201414105', 0, 0, 0, '0000-00-00', 0, 0, '10885361_744163655672781_4018094530659828602_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hall_manager`
--

CREATE TABLE `hall_manager` (
  `name` varchar(50) NOT NULL,
  `id` varchar(30) NOT NULL,
  `join_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `maritual` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hall_manager`
--

INSERT INTO `hall_manager` (`name`, `id`, `join_date`, `birth_date`, `father_name`, `mother_name`, `phone`, `email`, `address`, `maritual`, `blood`, `image`) VALUES
('Jobaeda Begum', '10001', '2014-09-04', '1982-06-20', 'Morshed Ali', 'Khodeja Begum', 1934345466, 'J@gmail.com', 'Sheorapara, Mirpur 10', 'married', 'B+', 'developer3.png');

-- --------------------------------------------------------

--
-- Table structure for table `hall_staff`
--

CREATE TABLE `hall_staff` (
  `name` varchar(50) NOT NULL,
  `id` varchar(30) NOT NULL,
  `join_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `maritual` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `post` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hall_staff`
--

INSERT INTO `hall_staff` (`name`, `id`, `join_date`, `birth_date`, `father_name`, `mother_name`, `phone`, `email`, `address`, `maritual`, `blood`, `post`, `image`) VALUES
('Halema Khatun', '20010', '2015-06-15', '1988-03-09', 'Abul Faruq', 'Amena Khatun', 172345667, 'Halema@yahoo.com', 'Mirpur 10', 'unmarried', 'A+', 'Cleaner', 'developer3.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `role` varchar(20) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`role`, `name`, `id`, `password`) VALUES
('manager', 'Amena', '10001', 'mmm'),
('staff', 'Siddique', '20010', 'aaa'),
('student', 'Athaya', '201414015', '123'),
('student', 'Nabila', '201414105', 'nsk555');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `date` date NOT NULL,
  `items` text CHARACTER SET utf8 NOT NULL,
  `rice` int(11) NOT NULL,
  `price_rice` int(11) NOT NULL,
  `chicken` int(11) NOT NULL,
  `price_chicken` int(11) NOT NULL,
  `beef` int(11) NOT NULL,
  `price_beef` int(11) NOT NULL,
  `fish` int(11) NOT NULL,
  `price_fish` int(11) NOT NULL,
  `potato` int(11) NOT NULL,
  `price_potato` int(11) NOT NULL,
  `vegetable` int(11) NOT NULL,
  `price_vege` int(11) NOT NULL,
  `chillies` int(11) NOT NULL,
  `price_chillies` int(11) NOT NULL,
  `onions` int(11) NOT NULL,
  `price_onions` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`date`, `items`, `rice`, `price_rice`, `chicken`, `price_chicken`, `beef`, `price_beef`, `fish`, `price_fish`, `potato`, `price_potato`, `vegetable`, `price_vege`, `chillies`, `price_chillies`, `onions`, `price_onions`, `total`) VALUES
('0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-02', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-05', 'fghjtttttttttttttttttttttttttttttttttttttt', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 72),
('2016-10-12', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-13', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-20', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-22', 'dfg', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 64),
('2016-10-23', 'dfg', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 64),
('2016-10-24', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-26', 'khichuri, murgi', 2, 40, 8, 200, 0, 400, 0, 300, 1, 30, 0, 40, 2, 20, 1, 60, 1810),
('2016-10-27', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-10-28', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2016-11-27', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` varchar(40) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `breakfast` varchar(10) CHARACTER SET latin1 NOT NULL,
  `lunch` varchar(10) CHARACTER SET latin1 NOT NULL,
  `dinner` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `date`, `breakfast`, `lunch`, `dinner`) VALUES
('201414105', '2016-10-28', 'yes', 'yes', 'no'),
('201414105', '2016-10-20', 'yes', 'yes', 'yes'),
('201414105', '2016-10-27', 'yes', 'yes', 'no'),
('201414105', '2016-10-24', 'yes', 'yes', 'no'),
('201414105', '2016-11-06', 'yes', 'yes', 'yes'),
('201414105', '2016-11-23', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `messbill`
--

CREATE TABLE `messbill` (
  `id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `breakfast` int(11) NOT NULL,
  `lunch` int(11) NOT NULL,
  `dinner` int(11) NOT NULL,
  `Bill` int(11) NOT NULL,
  `Paid` int(11) NOT NULL,
  `Remaining` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `messbill`
--

INSERT INTO `messbill` (`id`, `date`, `breakfast`, `lunch`, `dinner`, `Bill`, `Paid`, `Remaining`) VALUES
('201414105', '0000-00-00', 1, 0, 0, 1, 0, 0),
('201414105', '0000-00-00', 20, 0, 0, 20, 0, 0),
('201414105', '2016-10-20', 20, 0, 0, 20, 0, 0),
('201414105', '2016-10-28', 0, 0, 0, 0, 0, 0),
('201414105', '2016-10-28', 0, 0, 0, 0, 0, 0),
('201414105', '2016-10-28', 0, 0, 0, 0, 0, 0),
('201414105', '2016-10-28', 0, 0, 0, 0, 0, 0),
('201414105', '2016-10-27', 60, 0, 0, 60, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messbill_month`
--

CREATE TABLE `messbill_month` (
  `id` varchar(40) CHARACTER SET latin1 NOT NULL,
  `year` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `month` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_date` date NOT NULL,
  `paid` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `fine` int(11) NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `messbill_month`
--

INSERT INTO `messbill_month` (`id`, `year`, `month`, `amount`, `payment_date`, `paid`, `remaining`, `fine`, `image`) VALUES
('201414015', '2016', '10', 0, '0000-00-00', 0, 0, 0, ''),
('201414105', '2016', '10', 80, '0000-00-00', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Name` varchar(60) CHARACTER SET latin1 NOT NULL,
  `ID` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Session` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Contact` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Birthdate` date NOT NULL,
  `Blood_Group` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Father` varchar(60) CHARACTER SET latin1 NOT NULL,
  `Father_occu` varchar(60) CHARACTER SET latin1 NOT NULL,
  `Mother` varchar(60) CHARACTER SET latin1 NOT NULL,
  `Mother_occu` varchar(60) CHARACTER SET latin1 NOT NULL,
  `Present` text CHARACTER SET latin1 NOT NULL,
  `Permanent` text CHARACTER SET latin1 NOT NULL,
  `guardian_name` varchar(60) CHARACTER SET latin1 NOT NULL,
  `relation` varchar(60) CHARACTER SET latin1 NOT NULL,
  `guardian_occu` varchar(100) CHARACTER SET latin1 NOT NULL,
  `guardian_contact` int(60) NOT NULL,
  `Seat` date NOT NULL,
  `Room` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Tobe_paid` int(11) NOT NULL,
  `Paid` int(11) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Name`, `ID`, `Session`, `Contact`, `sex`, `email`, `Birthdate`, `Blood_Group`, `Father`, `Father_occu`, `Mother`, `Mother_occu`, `Present`, `Permanent`, `guardian_name`, `relation`, `guardian_occu`, `guardian_contact`, `Seat`, `Room`, `Tobe_paid`, `Paid`, `image`) VALUES
('Tasbiraha Athaya', '201414015', 'saab', 172345667, 'female', '', '1995-08-03', 'B+', 'Shafkat Ali', 'Police', 'Nuria Begum', 'housewife', 'Nakhalpara', 'Rajshahi', 'Uncle', 'Selim', '0193456789', 0, '2016-10-24', '205', 1000, 9000, ''),
('Nabila Shahnaz Khan', '201414105', '2013-14', 1475455557, 'female', 'Nabilakhan1024@gmail.com', '1995-10-24', 'A+', 'Showkat Ali', 'Business', 'Mariam', 'Housewife', '13/A Dhaka', '13/A Dhaka', 'Abul Halim', 'Uncle', 'Businessman', 434666, '0000-00-00', '404', 0, 12345, 'developer3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `hall_manager`
--
ALTER TABLE `hall_manager`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hall_staff`
--
ALTER TABLE `hall_staff`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `messbill_month`
--
ALTER TABLE `messbill_month`
  ADD UNIQUE KEY `id` (`id`,`year`,`month`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD UNIQUE KEY `ID` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
