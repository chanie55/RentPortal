-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 09:52 AM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `user` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `content`, `user`) VALUES
(1, 'Sample', ' Some Content', ''),
(2, 'Test', ' Test', '');

-- --------------------------------------------------------

--
-- Table structure for table `businessname`
--

CREATE TABLE `businessname` (
  `id` int(11) NOT NULL,
  `bname_ID` varchar(99) NOT NULL,
  `bname` varchar(99) NOT NULL,
  `category` varchar(99) NOT NULL,
  `user_ID` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `businessname`
--

INSERT INTO `businessname` (`id`, `bname_ID`, `bname`, `category`, `user_ID`) VALUES
(1, 'BN_97402', 'Kate Apartment', 'Apartment', 'UID_0067'),
(2, 'BN_89890', 'Kate Commercial Office Space', 'House Rent', 'UID_0067'),
(3, 'BN_765', 'Kate Boarding House', 'Boarding House', 'UID_0067');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `user` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `user`) VALUES
(1, 'KKK', ' KKK', ''),
(2, 'hey', ' hi', ''),
(3, 'test', ' test', ''),
(4, 'test', ' test', ''),
(5, 'sample', ' add', ''),
(6, 'hey', ' hey', ''),
(7, 'hey', ' hey', ''),
(8, 'hi', ' hey', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `type` varchar(99) NOT NULL,
  `user_ID` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `type`, `user_ID`) VALUES
(32, 'PROOF-6470f89a42bec0.07106970.jpg', 'Proof of Payment', 'UID_0064'),
(35, 'ID-6471171279a932.75629399.png', 'Valid ID', 'UID_0069'),
(36, 'ID-64711712b54e01.30476211.png', 'Valid ID', 'UID_0069'),
(37, 'PROOF-647117725d5a75.00809192.png', 'Proof of Payment', 'UID_0069');

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
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `property_ID` varchar(99) NOT NULL,
  `bname_ID` varchar(99) NOT NULL,
  `title` varchar(99) NOT NULL,
  `propertyaddress` varchar(99) NOT NULL,
  `description` text NOT NULL,
  `bedtype` varchar(99) NOT NULL,
  `availablerooms` int(11) NOT NULL,
  `monthlyrate` int(11) NOT NULL,
  `dailyrate` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `kitchen` varchar(99) NOT NULL,
  `bathroom` varchar(99) NOT NULL,
  `aircon` varchar(99) NOT NULL,
  `dimension` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `user_ID` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `property_ID`, `bname_ID`, `title`, `propertyaddress`, `description`, `bedtype`, `availablerooms`, `monthlyrate`, `dailyrate`, `bed`, `kitchen`, `bathroom`, `aircon`, `dimension`, `date_created`, `user_ID`) VALUES
(3, 'PROP_94441', 'Jusayan Residence', '', '', '<div>kikikiki</div>', 'Big Room', 3, 3500, 500, 2, 'Not Provided', 'Provided', 'Optional', 0, '2023-05-18', 'UID_0067'),
(4, 'COM_1669', 'Gicale Office Space', '', '', 'lkcnxcnxmmx', '', 2, 7000, 0, 0, 'Provided', 'Provided', 'Provided', 16, '2023-05-19', 'UID_0067'),
(6, 'RES_57215', 'Khytryn Room for Rent', '', 'ADRS_65566', '<div>ka gg ba nimo ayy</div>', 'Big Room', 4, 7000, 50, 2, 'Provided', 'Provided', 'Provided', 0, '2023-05-20', ''),
(7, 'RES_44632', 'Faye Room for Rent', '', 'ADRS_26111', '<div>heyheyehye</div>', 'Big Room', 4, 7000, 50, 2, 'Provided', 'Provided', 'Provided', 0, '2023-05-20', ''),
(8, 'RES_57767', 'Hapi Hapi Apartment', '', 'ADRS_49599', '<div>ldnckdvksdbvkdsbvd</div>', 'Single Room', 5, 3500, 0, 1, 'Provided', 'Provided', 'Provided', 0, '2023-05-20', ''),
(9, 'RES_97792', 'Info Assurance', '', 'ADRS_49701', '<p>exam namo unyaaaa</p>', 'Single Room', 4, 5000, 0, 2, 'Not Provided', 'Provided', 'Provided', 0, '2023-05-23', 'UID_0068'),
(12, 'RES_3512', 'BN_97402', 'Ladies Room for Rent', 'ADRS_7855', '<p>fkdjsfkdsnsmdf</p>', 'Double Deck', 2, 2500, 0, 2, 'Provided', 'Provided', 'Provided', 0, '2023-05-27', ''),
(13, 'RES_38446', 'BN_765', 'COME ON', 'ADRS_87888', '<p>JSNKSDNVDNV</p>', 'Double Deck', 2, 2600, 0, 2, 'Provided', 'Provided', 'Provided', 0, '2023-05-27', ''),
(14, 'COM_66544', 'BN_89890', 'OFFICE SPACE FOR RENT', '', '<p>KGKLVXVKDFGKFDJN</p>', '', 2, 7000, 0, 0, 'Provided', 'Provided', 'Provided', 16, '2023-05-28', '');

-- --------------------------------------------------------

--
-- Table structure for table `propertyaddress`
--

CREATE TABLE `propertyaddress` (
  `id` int(11) NOT NULL,
  `addresscode` varchar(99) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertyaddress`
--

INSERT INTO `propertyaddress` (`id`, `addresscode`, `lat`, `lng`) VALUES
(3, '', 6.11512, 125.171),
(5, 'ADRS_26111', 6.16876, 124.767),
(6, 'ADRS_49599', 6.32387, 124.85),
(7, 'ADRS_49701', 6.11622, 125.178),
(8, 'ADRS_19760', 0, 0),
(9, 'ADRS_73255', 0, 0),
(10, 'ADRS_7855', 0, 0),
(11, 'ADRS_87888', 0, 0);

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
(28, 'Boarding House'),
(29, 'Apartment'),
(30, 'House Rent');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `user_ID` varchar(99) NOT NULL,
  `amount` float NOT NULL,
  `mop` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `user_ID`, `amount`, `mop`, `status`) VALUES
(8, '2023-05-26', 'UID_0064', 5250, 'Gcash', 'Acknowledge'),
(11, '2023-05-26', 'UID_0069', 5250, 'Gcash', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `reservationdetails`
--

CREATE TABLE `reservationdetails` (
  `id` int(11) NOT NULL,
  `resdetails_ID` varchar(99) NOT NULL,
  `prop_ID` varchar(99) NOT NULL,
  `downpayment` double NOT NULL,
  `paycon` int(11) NOT NULL,
  `paymet` varchar(99) NOT NULL,
  `payday` int(11) NOT NULL,
  `gname` varchar(99) NOT NULL,
  `gnumber` int(11) NOT NULL,
  `user_ID` varchar(99) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationdetails`
--

INSERT INTO `reservationdetails` (`id`, `resdetails_ID`, `prop_ID`, `downpayment`, `paycon`, `paymet`, `payday`, `gname`, `gnumber`, `user_ID`, `content`) VALUES
(8, 'Reservation Method ', '', 0, 0, '', 0, '', 0, '', '<p><strong>Reservation via Gcash</strong></p><p>1. On Gcash app, select &nbsp;“Send Money”</p><p>2. On the “Send Money to Gcash Account” section, select “Express Send”.</p><p>3. Input the contact number - (Your number here) (Your name here) and input the amount you want to give.&nbsp;<br>4. Review the registered name and amount for validation. Click send to continue.</p><p>5. Screenshot the gcash transaction.</p><p>6. On this page, click the “Reserve Now” button.</p><p>7. Fill-out the reservation form and attach your receipt.</p><p>'),
(9, 'RDES_18176', '', 1, 1, '1', 1, 'khytryn', 977554367, 'UID_0067', '<p><strong>Payment</strong></p><ul><li>You must pay the required amount stated. Unable to pay would result for your reservation to be cancelled.&nbsp;</li><li>Payment first before the reserve</li></ul>'),
(10, 'RDES_22575', '', 0.75, 2, '1', 1, 'khytryn', 977554367, 'UID_0067', '<p>hihi</p>'),
(11, 'RDES_79798', 'RES_57767', 0.5, 2, '1', 2, 'kakakaka', 909090909, 'UID_0067', '<p>anananmanmanwhwjwnn</p>');

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
  `verificationcode` varchar(99) NOT NULL,
  `is_verified` varchar(99) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_ID`, `email`, `password`, `userInfo_ID`, `userLevel_ID`, `verificationcode`, `is_verified`, `status`) VALUES
(64, 'UID_0064', 'purple@gmail.com', '$2y$10$GMFEgypvsgIaCIOlopc4GuCxejyQlFHzsso2bm8LaYL', 'SE-65', 3, '', '', 1),
(65, 'UID_0065', 'maganani@gmail.com', '$2y$10$0ZE3xN5.bHMAMHk1Q4Dcy.2/tRJx7t9oI/1WqmsbCic', 'SE-66', 3, '', '', 1),
(67, 'UID_0067', 'kate@gmail.com', '$2y$10$lQQJ72lNP/O8obaVbqecN.q8EMT3zIW3Lqh6fWL6gsP', 'OW-68', 2, '', '', 1),
(68, 'UID_0068', 'sample@gmail.com', '$2y$10$54fS/HOp1tVbnhsjFk9KLu.HPV/T4AwnAk2yHiH7Ick', 'AD-70', 1, '', '', 1),
(69, 'UID_0069', 'chaniejoo@gmail.com', '$2y$10$xXVAUFk/7yyQNacI72DH6u79jZf1eGI8jqOOHXdQIZB', 'SE-71', 3, '484805', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `id` int(11) NOT NULL,
  `barangay` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`id`, `barangay`) VALUES
(1, 'Apopong'),
(2, 'Baluan'),
(3, 'Batomelong'),
(4, 'Buayan'),
(5, 'Bula'),
(6, 'Calumpang'),
(7, 'City Heights'),
(8, 'Conel'),
(9, 'Dadiangas East'),
(10, 'Dadiangas North'),
(11, 'Dadiangas South'),
(12, 'Dadiangas West'),
(13, 'Fatima'),
(14, 'Katangawan'),
(15, 'Labangal'),
(16, 'Lagao (1st & 3rd)'),
(17, 'Ligaya'),
(18, 'Mabuhay'),
(19, 'Olympog'),
(20, 'San Isidro (Lagao 2nd)'),
(21, 'San Jose'),
(22, 'Siguel'),
(23, 'Sinawal'),
(24, 'Tambler'),
(25, 'Tinagacan'),
(26, 'Upper Labay'),
(51, 'Tinagacan'),
(52, 'Upper Labay');

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
(64, 'SE-64', 'bo', 'set', 9, '2003-12-04', 'Female', 19, 'oksna, Dadiangas South, General Santos City'),
(65, 'SE-65', 'purple', 'woman', 0, '2001-12-03', 'Female', 21, 'purple world, Labangal, General Santos City'),
(66, 'SE-66', 'twoid', 'work', 9, '2004-10-06', 'Female', 18, 'ambotasaka, Lagao (1st & 3rd), General Santos City'),
(67, 'OW-67', 'Khytryn', 'Carcillar', 9, '2001-12-08', 'Female', 21, 'katangawan, Katangawan, General Santos City'),
(68, 'OW-68', 'Katren', 'Faye', 9, '2004-08-04', 'Male', 18, 'somewhere, Conel, General Santos City'),
(69, 'SE-69', 'Khytryn Faye', 'Carcillar', 9, '2001-12-08', 'Female', 21, 'Sineguelas St. , Dadiangas East, General Santos City'),
(71, 'SE-71', 'Khytryn', 'Faye', 9, '2001-12-08', 'Female', 21, 'Sineguelas Street, Dadiangas East, General Santos City');

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
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businessname`
--
ALTER TABLE `businessname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_ID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyaddress`
--
ALTER TABLE `propertyaddress`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `addresscode` (`addresscode`);

--
-- Indexes for table `propertytype`
--
ALTER TABLE `propertytype`
  ADD PRIMARY KEY (`propertyType_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservationdetails`
--
ALTER TABLE `reservationdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_ID` (`user_ID`),
  ADD UNIQUE KEY `user_ID_2` (`user_ID`),
  ADD KEY `userInfo_ID` (`userInfo_ID`),
  ADD KEY `userLevel_ID` (`userLevel_ID`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `businessname`
--
ALTER TABLE `businessname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `propertyaddress`
--
ALTER TABLE `propertyaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `propertytype`
--
ALTER TABLE `propertytype`
  MODIFY `propertyType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservationdetails`
--
ALTER TABLE `reservationdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `userlevel`
--
ALTER TABLE `userlevel`
  MODIFY `userLevel_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`userLevel_ID`) REFERENCES `userlevel` (`userLevel_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
