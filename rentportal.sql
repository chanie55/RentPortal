-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 03:51 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `bed_ID` int(11) NOT NULL,
  `bed_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`bed_ID`, `bed_Type`) VALUES
(1, 'single'),
(2, '2 per room');

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `cr_ID` int(11) NOT NULL,
  `cr_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`cr_ID`, `cr_Type`) VALUES
(1, 'common'),
(2, 'per room'),
(3, 'test'),
(4, 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_ID` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_ID`, `question`, `answer`) VALUES
(1, 'KKK', ' KKK'),
(2, 'hey', ' hi');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_ID` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `type` varchar(99) NOT NULL,
  `user_ID` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_ID`, `image_url`, `type`, `user_ID`) VALUES
(2, 'IMG-645acb3c68dd90.56543285.jpg', 'on', 'UID_0048'),
(3, 'IMG-645acc111fb161.07107889.jpg', '0605 BIR Form', 'UID_0049'),
(4, 'ID-645acd19c51bb5.68084168.jpg', 'Valid ID', 'UID_0050'),
(5, 'IMG-645ad0a6b7e0d5.14677471.jpg', 'Business Permit', 'UID_0051'),
(6, 'ID-645ad0a6c92596.74562369.jpg', 'Valid ID', 'UID_0051'),
(7, 'IMG-645ae39468d5b4.23973847.jpg', 'Business Permit', 'UID_0052'),
(8, 'ID-645ae394b1f4e8.36146561.jpg', 'Valid ID', 'UID_0052');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `kitchen_ID` int(11) NOT NULL,
  `kitchen_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`kitchen_ID`, `kitchen_Type`) VALUES
(26, 'common'),
(27, 'per room'),
(28, 'not provided'),
(29, 'yahhhhh'),
(30, 'you okay?'),
(31, 'test owner');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_ID` int(11) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_ID`, `place`) VALUES
(1, 'Mall'),
(2, 'Supermarket'),
(3, 'School');

-- --------------------------------------------------------

--
-- Table structure for table `propertytype`
--

CREATE TABLE `propertytype` (
  `propertyType_ID` int(11) NOT NULL,
  `property` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertytype`
--

INSERT INTO `propertytype` (`propertyType_ID`, `property`) VALUES
(4, 'Apartment'),
(5, 'House Rent'),
(11, 'Commercial'),
(12, 'Residence'),
(16, 'Apartelle'),
(17, 'Apartelle'),
(18, 'hey'),
(19, 'hihi'),
(20, 'hihi'),
(21, 'apartelle'),
(22, 'test'),
(23, 'help'),
(24, 'what?!!'),
(25, 'what?!!'),
(26, 'again');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_ID` int(11) NOT NULL,
  `room_Type` varchar(99) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_ID`, `room_Type`, `status`) VALUES
(1, 'test', 0),
(2, 'test', 1),
(7, 'hey', 1),
(8, 'again', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_ID` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userInfo_ID` varchar(99) NOT NULL,
  `userLevel_ID` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_ID`, `email`, `password`, `userInfo_ID`, `userLevel_ID`, `status`) VALUES
(17, '', 'killll@gmail.com', 'Password1234', 'SE-18', 3, 1),
(18, '', 'katrin@gmail.com', 'Katrin1234', 'SE-19', 3, 1),
(19, 'UID_0019', 'rinrin@gmail.com', 'Rinrin1234', 'SE-20', 3, 1),
(20, 'UID_0020', 'admin1@gmail.com', 'Admin1234', 'AD-21', 1, 1),
(21, 'UID_0021', 'dean@gmail.com', 'Dean1234', 'SE-22', 3, 1),
(22, 'UID_0022', 'tantan@gmail.com', 'Tantan1234', 'SE-23', 3, 1),
(23, 'UID_0023', 'myname@gmail.com', 'Myname1234', 'SE-24', 3, 1),
(24, 'UID_0024', 'katkat@gmail.com', 'Katkat1234', 'SE-25', 3, 1),
(25, 'UID_0025', 'dadidam@gmail.com', '$2y$10$mZZXjvNkd4n4DhLmyLW3wOl7ckBH85QyKfOMFovMmXZ', 'SE-26', 3, 1),
(26, 'UID_0026', 'ownerone@gmail.com', 'Owner1234', 'OW-27', 2, 0),
(27, 'UID_0027', 'ownertwo@gmail.com', 'Owner1222', 'OW-28', 2, 0),
(28, 'UID_0028', 'iamme@gmail.com', 'IamMe1234', 'OW-29', 2, 0),
(29, 'UID_0029', 'imagetest@gmail.com', 'Imagetest123', 'OW-30', 2, 0),
(30, 'UID_0030', 'myonly@gmail.com', 'Myonly1234', 'OW-31', 2, 0),
(31, 'UID_0031', 'anotherone@gmail.com', 'Another123', 'OW-32', 2, 0),
(32, 'UID_0032', 'abcd@gmail.com', 'Abcd1234', 'OW-33', 2, 0),
(33, 'UID_0033', 'imagetest12@gmail.com', '$2y$10$81f61fYy2R/RcMXiiG9OpueKYxgKE1Eu1AtGTkQCiwt', 'OW-34', 2, 0),
(34, 'UID_0034', 'hapihapi@gmail.com', '$2y$10$Gf7WSbpEPOJXx28Gd6x1Q..FUr7AUVLL76Jey36nj1w', 'OW-35', 2, 0),
(35, 'UID_0035', 'kkkkk@gmail.com', '$2y$10$BSQzkhqTW5he78uxdIbAzOKrkGFs5/6UqFoGIghwl0p', 'OW-36', 2, 0),
(36, 'UID_0036', 'ssss@gmail.com', '$2y$10$Z.Fz4eEZ8Q39PCWVN6V1VO5lctn0avqym97WUV7kNEU', 'OW-37', 2, 0),
(37, 'UID_0037', 'nnn@gmail.com', '$2y$10$VzLIDKR2trKu6J/xj/tHzOeq7.KzFfq4vtZLwVfrbt3', 'OW-38', 2, 0),
(38, 'UID_0038', 'you@gmail.com', '$2y$10$Zm7XTS5ZuWba9TYBPV5nguwlbid6RSiw/wfamNkKycR', 'OW-39', 2, 0),
(39, 'UID_0039', 'katrinfaye@gmail.com', 'kitikiti', 'AD-40', 1, 1),
(40, 'UID_0040', 'sonogong@gmail.com', '$2y$10$JrAqeA.ki8tADWdAhZBE1extTaV0Sh9dM95lX0lZYs0', 'OW-41', 2, 0),
(41, 'UID_0041', 'recycle@gmail.com', '$2y$10$UxvsGZUEbId5vFNMrIYic.Dzh8WPaLs4P8qc2M79klt', 'OW-42', 2, 0),
(42, 'UID_0042', 'onelast@gmail.com', '$2y$10$WP43/GsiDt4ZY3qMI3LKUOd.dqTx2k/9CRhp9GIYILU', 'OW-43', 2, 0),
(43, 'UID_0043', 'lasttime@gmail.com', '$2y$10$G5f14OxZMVP5eANf/YfmyOkIEqJDdcrAIE7yIlQwyu.', 'OW-44', 2, 0),
(44, 'UID_0044', 'againagain@gmail.com', '$2y$10$qOLCq.4W5LTtqCNVXxM8Ge7yrKtHXuYxnZBVKtdEhEE', 'OW-45', 2, 0),
(45, 'UID_0045', 'attemptone@gmail.com', '$2y$10$otIM8m0L2j2BAyc75HNuSenuEgBtZpa0oUDxGiQmKcC', 'OW-46', 2, 0),
(46, 'UID_0046', 'twoattempt@gmail.com', '$2y$10$BMVoCYXlkO0wxvsAYIkkrOyEmQVyq8adNLfv5EoKVON', 'OW-47', 2, 0),
(47, 'UID_0047', 'attemptthree@gmail.com', '$2y$10$D.l.ALV0.y4j2vf.qwEhDukXkNDr6vQH40DIyLa6Ef6', 'OW-48', 2, 0),
(48, 'UID_0048', 'fourtimes@gmail.com', '$2y$10$SmcjKWoWojH5V6mzcNfeouif/gADc1e.JnvP0ggjpB6', 'OW-49', 2, 0),
(49, 'UID_0049', 'fifthy@gmail.com', '$2y$10$pEnkgYiY/zCjUNYWJLfxOe8k8pg4SU1rtJRhEJe0roE', 'OW-50', 2, 0),
(50, 'UID_0050', 'huhi@gmail.com', '$2y$10$HO8uquIhtWR5SIxAtOsvRu0ETxaqh4KUe6BQ/czlbOO', 'OW-51', 2, 0),
(51, 'UID_0051', 'dave@gmail.com', '$2y$10$VkIy03QORal91r.uk2MfgumA7pq429U6lDw9s.q4xrr', 'OW-52', 2, 0),
(52, 'UID_0052', 'stephcurry@gmail.com', '$2y$10$X9jsWiSYcachebxb75zJw.4nIG4KaMlfK9goyPpP2tu', 'OW-53', 2, 0),
(53, 'UID_0053', 'chanienie@gmail.com', '$2y$10$mvgfvkkAR2Cj63UwzKnrsOcvI3GAF1un5m5qzniKB6u', 'SE-54', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `address_ID` int(11) NOT NULL,
  `stpurok` varchar(99) NOT NULL,
  `barangay` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`address_ID`, `stpurok`, `barangay`) VALUES
(1, '', 'Apopong'),
(2, '', 'Baluan'),
(3, '', 'Batomelong'),
(4, '', 'Buayan'),
(5, '', 'Bula'),
(6, '', 'Calumpang'),
(7, '', 'City Heights'),
(8, '', 'Conel'),
(9, '', 'Dadiangas East'),
(10, '', 'Dadiangas North'),
(11, '', 'Dadiangas South'),
(12, '', 'Dadiangas West'),
(13, '', 'Fatima'),
(14, '', 'Katangawan'),
(15, '', 'Labangal'),
(16, '', 'Lagao (1st & 3rd)'),
(17, '', 'Ligaya'),
(18, '', 'Mabuhay'),
(19, '', 'Olympog'),
(20, '', 'San Isidro (Lagao 2nd)'),
(21, '', 'San Jose'),
(22, '', 'Siguel'),
(23, '', 'Sinawal'),
(24, '', 'Tambler'),
(25, '', 'Tinagacan'),
(26, '', 'Upper Labay'),
(27, '', 'Apopong'),
(28, '', 'Baluan'),
(29, '', 'Batomelong'),
(30, '', 'Buayan'),
(31, '', 'Bula'),
(32, '', 'Calumpang'),
(33, '', 'City Heights'),
(34, '', 'Conel'),
(35, '', 'Dadiangas East'),
(36, '', 'Dadiangas North'),
(37, '', 'Dadiangas South'),
(38, '', 'Dadiangas West'),
(39, '', 'Fatima'),
(40, '', 'Katangawan'),
(41, '', 'Labangal'),
(42, '', 'Lagao (1st & 3rd)'),
(43, '', 'Ligaya'),
(44, '', 'Mabuhay'),
(45, '', 'Olympog'),
(46, '', 'San Isidro (Lagao 2nd)'),
(47, '', 'San Jose'),
(48, '', 'Siguel'),
(49, '', 'Sinawal'),
(50, '', 'Tambler'),
(51, '', 'Tinagacan'),
(52, '', 'Upper Labay');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `userinfo_ID` varchar(99) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `contact` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `userinfo_ID`, `firstname`, `lastname`, `contact`, `dob`, `gender`, `age`, `address`) VALUES
(16, 'SE-16', 'First', 'Last', 2147483647, '2023-04-30', 'Female', 0, ''),
(17, 'SE-17', 'Name', 'ME', 2147483647, '2023-05-03', 'Male', 0, ''),
(18, 'SE-18', 'Killll', 'Killll', 2147483647, '2023-05-22', 'Male', 0, ''),
(19, 'SE-19', 'Kat', 'Rin', 2147483647, '2023-05-25', 'Female', 0, ''),
(20, 'SE-20', 'Rinrin', 'Heh', 2147483647, '2023-05-25', 'Female', 0, ''),
(21, 'AD-21', 'Admin1', 'Me', 2147483647, NULL, 'Female', 0, ''),
(22, 'SE-22', 'Dean', 'Ehhh', 2147483647, '2023-05-07', 'Female', 0, 'kkkkk, Conel, General Santos City'),
(23, 'SE-23', 'tantan', 'lala', 2147483647, '2018-02-13', 'Male', -1, 'IDK Street, Ligaya, General Santos City'),
(24, 'SE-24', 'Myname', 'Shit', 2147483647, '2015-09-28', 'Female', 1, 'Fkin Street, Batomelong, General Santos City'),
(25, 'SE-25', 'Katkatt', 'Fayye', 2147483647, '2009-06-15', 'Female', 13, 'Far Away, Dadiangas North, General Santos City'),
(26, 'SE-26', 'Dada', 'dididam', 2147483647, '2008-01-14', 'Female', 15, 'Block 9, Ligaya, General Santos City'),
(27, 'OW-27', 'Owner', 'One', 2147483647, '2001-12-03', 'Male', 21, 'IDK Fckin Street, Dadiangas South, General Santos City'),
(28, 'OW-28', 'Owner', 'Two', 2147483647, '2001-12-03', 'Female', 21, 'IDK Fckin Street, Dadiangas South, General Santos City'),
(29, 'OW-29', 'I am', 'Me', 2147483647, '2004-11-08', 'Male', 18, 'far away, Fatima, General Santos City'),
(30, 'OW-30', 'Image', 'Test', 2147483647, '2003-02-03', 'Male', 20, 'frekin frekin, Dadiangas South, General Santos City'),
(31, 'OW-31', 'my', 'only', 2147483647, '2004-03-04', 'Male', 19, 'likyliky, Dadiangas West, General Santos City'),
(32, 'OW-32', 'another', 'one', 2147483647, '2001-04-03', 'Female', 22, 'likikili, Dadiangas East, General Santos City'),
(33, 'OW-33', 'abcd', 'efg', 96543765, '2012-01-17', 'Female', 11, 'somewhere, Dadiangas South, General Santos City'),
(34, 'OW-34', 'image', 'test', 2147483647, '2001-12-03', 'Male', 21, 'ememe, Dadiangas North, General Santos City'),
(35, 'OW-35', 'hapihapi', 'purple', 965432186, '2001-12-08', 'Male', 21, 'hapihapi, Dadiangas West, General Santos City'),
(36, 'OW-36', 'kkkk', 'kkkk', 2147483647, '2002-02-12', 'Male', 21, 'kkkkkk, Labangal, General Santos City'),
(37, 'OW-37', 'ssssss', 'ssss', 2147483647, '2001-11-01', 'Male', 21, 'sssss, Labangal, General Santos City'),
(38, 'OW-38', 'nnnn', 'nnnn', 2147483647, '2003-03-23', 'Female', 20, 'nnnnn, Lagao (1st & 3rd), General Santos City'),
(39, 'OW-39', 'you', 'you', 2147483647, '2004-02-24', 'Female', 19, 'youyu, Dadiangas East, General Santos City'),
(40, 'AD-40', 'Katren', 'Fey', 2147483647, NULL, 'Female', 0, ''),
(41, 'OW-41', 'sono', 'gong', 2147483647, '2001-02-04', 'Female', 22, 'sonogong, Dadiangas South, General Santos City'),
(42, 'OW-42', 'recycle', 'it', 2147483647, '2003-12-04', 'Male', 19, 'kikikiki, Katangawan, General Santos City'),
(43, 'OW-43', 'One', 'Last', 2147483647, '2001-11-04', 'Female', 21, 'idkidk, Labangal, General Santos City'),
(44, 'OW-44', 'last', 'time', 2147483647, '2001-11-03', 'Male', 21, 'lololo, Katangawan, General Santos City'),
(45, 'OW-45', 'again', 'again', 2147483647, '2003-12-04', 'Male', 19, 'againgain, Buayan, General Santos City'),
(46, 'OW-46', 'attempt', 'one', 965736452, '2001-12-04', 'Female', 21, 'attempt, Fatima, General Santos City'),
(47, 'OW-47', 'attempt', 'two', 2147483647, '2004-03-12', 'Male', 19, 'twosome, Mabuhay, General Santos City'),
(48, 'OW-48', 'attempt', 'three', 2147483647, '2004-10-05', 'Male', 18, 'threethree, Katangawan, General Santos City'),
(49, 'OW-49', 'four', 'four', 2147483647, '2003-10-06', 'Male', 19, 'foursome, Lagao (1st & 3rd), General Santos City'),
(50, 'OW-50', 'fifth', 'attempt', 2147483647, '2001-12-04', 'Male', 21, 'fifthhhh, Dadiangas South, General Santos City'),
(51, 'OW-51', 'Huhu', 'hihi', 2147483647, '2005-12-04', 'Female', 17, 'huhuhuhuh, Lagao (1st & 3rd), General Santos City'),
(52, 'OW-52', 'Dave', 'Froilan', 2147483647, '2000-05-15', 'Male', 22, 'farrr waaayy, Katangawan, General Santos City'),
(53, 'OW-53', 'Steph', 'Curry', 2147483647, '2001-05-15', 'Male', 21, 'stephcurry, Labangal, General Santos City'),
(54, 'SE-54', 'Chanie', 'Hong', 2147483647, '2001-12-08', 'Female', 21, 'Sineguelas, Dadiangas East, General Santos City');

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE `userlevel` (
  `userLevel_ID` int(11) NOT NULL,
  `userlevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlevel`
--

INSERT INTO `userlevel` (`userLevel_ID`, `userlevel`) VALUES
(1, 'admin'),
(2, 'owner'),
(3, 'seeker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_ID`);

--
-- Indexes for table `cr`
--
ALTER TABLE `cr`
  ADD PRIMARY KEY (`cr_ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_ID`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`kitchen_ID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_ID`);

--
-- Indexes for table `propertytype`
--
ALTER TABLE `propertytype`
  ADD PRIMARY KEY (`propertyType_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userInfo_ID` (`userInfo_ID`),
  ADD KEY `userLevel_ID` (`userLevel_ID`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`address_ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlevel`
--
ALTER TABLE `userlevel`
  ADD PRIMARY KEY (`userLevel_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bed_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cr`
--
ALTER TABLE `cr`
  MODIFY `cr_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `kitchen_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propertytype`
--
ALTER TABLE `propertytype`
  MODIFY `propertyType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `address_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `userlevel`
--
ALTER TABLE `userlevel`
  MODIFY `userLevel_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `userinfo` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`userLevel_ID`) REFERENCES `userlevel` (`userLevel_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
