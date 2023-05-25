-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 11:31 PM
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
(1, 'IMG-645e28f2ebff96.54406007.jpg', 'Business Permit', 'UID_0060'),
(2, 'ID-645e28f330c530.49656469.jpg', 'Valid ID', 'UID_0060'),
(3, 'ID-645e2b2293c8d4.32234339.jpg', 'Valid ID', 'UID_0063'),
(13, 'ID-646014f76e2d75.29559841.jpg', 'Valid ID', 'UID_0064'),
(18, 'PROPIMG-646053ea4da756.61214722.png', 'Valid ID', 'UID_0065'),
(19, 'PROPIMG-646053ea68ae54.39883327.png', 'Valid ID', 'UID_0065'),
(26, 'IMG-646301833dd845.51731827.jpg', 'Business Permit', 'UID_0066'),
(27, 'ID-646301836c0467.53521476.jpg', 'Valid ID', 'UID_0066'),
(28, 'ID-646301838454c7.66889883.jpg', 'Valid ID', 'UID_0066'),
(29, 'IMG-6466d1751a39f3.81879592.jpg', 'Business Permit', 'UID_0067');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `img`) VALUES
(1, 'PROPIMG-64601e8fccd7d1.96669442.jpg'),
(2, 'PROPIMG-64601e8fdd0260.42730592.jpg');

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
  `propertyname` varchar(99) NOT NULL,
  `propertytype` varchar(99) NOT NULL,
  `propertyaddress` varchar(99) NOT NULL,
  `description` text NOT NULL,
  `roomtype` varchar(99) NOT NULL,
  `totalrooms` int(11) NOT NULL,
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

INSERT INTO `property` (`id`, `property_ID`, `propertyname`, `propertytype`, `propertyaddress`, `description`, `roomtype`, `totalrooms`, `availablerooms`, `monthlyrate`, `dailyrate`, `bed`, `kitchen`, `bathroom`, `aircon`, `dimension`, `date_created`, `user_ID`) VALUES
(3, 'PROP_94441', 'Jusayan Residence', 'Apartment', '', '<div>kikikiki</div>', 'Big Room', 10, 3, 3500, 500, 2, 'Not Provided', 'Provided', 'Optional', 0, '2023-05-18', 'UID_0067'),
(4, 'COM_1669', 'Gicale Office Space', 'Commercial Property', '', 'lkcnxcnxmmx', '', 2, 2, 7000, 0, 0, 'Provided', 'Provided', 'Provided', 16, '2023-05-19', 'UID_0067'),
(6, 'RES_57215', 'Khytryn Room for Rent', 'House Rent', 'ADRS_65566', '<div>ka gg ba nimo ayy</div>', 'Big Room', 20, 4, 7000, 50, 2, 'Provided', 'Provided', 'Provided', 0, '2023-05-20', ''),
(7, 'RES_44632', 'Faye Room for Rent', 'House Rent', 'ADRS_26111', '<div>heyheyehye</div>', 'Big Room', 20, 4, 7000, 50, 2, 'Provided', 'Provided', 'Provided', 0, '2023-05-20', ''),
(8, 'RES_57767', 'Hapi Hapi Apartment', 'Apartment', 'ADRS_49599', '<div>ldnckdvksdbvkdsbvd</div>', 'Single Room', 10, 5, 3500, 0, 1, 'Provided', 'Provided', 'Provided', 0, '2023-05-20', ''),
(9, 'RES_97792', 'Info Assurance', 'House Rent', 'ADRS_49701', '<p>exam namo unyaaaa</p>', 'Single Room', 4, 4, 5000, 0, 2, 'Not Provided', 'Provided', 'Provided', 0, '2023-05-23', 'UID_0068');

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
(7, 'ADRS_49701', 6.11622, 125.178);

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
(30, 'House Rent'),
(31, 'Commercial Building');

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
  `proof` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `user_ID`, `amount`, `mop`, `proof`, `status`) VALUES
(1, '2023-05-22', 'UID_0067', 2000, '2', '', 0),
(2, '2023-05-23', 'UID_0068', 1000, '2', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservationdetails`
--

CREATE TABLE `reservationdetails` (
  `id` int(11) NOT NULL,
  `title` varchar(99) NOT NULL,
  `content` text NOT NULL,
  `user_ID` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationdetails`
--

INSERT INTO `reservationdetails` (`id`, `title`, `content`, `user_ID`) VALUES
(8, 'Reservation Method ', '<p><strong>Reservation via Gcash</strong></p><p>1. On Gcash app, select &nbsp;“Send Money”</p><p>2. On the “Send Money to Gcash Account” section, select “Express Send”.</p><p>3. Input the contact number - (Your number here) (Your name here) and input the amount you want to give.&nbsp;<br>4. Review the registered name and amount for validation. Click send to continue.</p><p>5. Screenshot the gcash transaction.</p><p>6. On this page, click the “Reserve Now” button.</p><p>7. Fill-out the reservation form and attach your receipt.</p><p><strong>Reservation in Person</strong></p><p>1. &nbsp;On this page, click the “Reserve Now” button.</p><p>2. Fill-out your personal information on the reservation form.</p><p>3. Choose the “Pay in Person” as your payment method.</p><p>4. Choose the day you wish to Pay.&nbsp;</p>', 'UID_0067');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomtype` varchar(99) NOT NULL,
  `totalrooms` varchar(99) NOT NULL,
  `availablerooms` varchar(99) NOT NULL,
  `monthlyrate` float NOT NULL,
  `kitchen` varchar(99) NOT NULL,
  `bathroom` varchar(99) NOT NULL,
  `aircon` varchar(99) NOT NULL,
  `property_ID` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomtype`, `totalrooms`, `availablerooms`, `monthlyrate`, `kitchen`, `bathroom`, `aircon`, `property_ID`) VALUES
(1, '', '4', '2', 7000, '0', '0', '0', 'PROP_22341'),
(2, 'again', '20', '10', 4500, 'Not Provided', 'common', 'Not Provided', 'PROP_95353'),
(3, 'again', '20', '0', 3500, 'Not Provided', 'common', 'Optional', 'PROP_23617'),
(4, 'again', '20', '0', 2000, 'Not Provided', 'common', 'Not Provided', 'PROP_35320'),
(5, 'again', '30', '2', 2500, 'Not Provided', 'common', 'Optional', 'PROP_98837'),
(6, 'again', '30', '5', 3500, 'Not Provided', 'common', 'Not Provided', 'PROP_30587'),
(7, 'again', '30', '0', 3400, 'Not Provided', 'common', 'Not Provided', 'PROP_83167'),
(8, 'again', '20', '2', 4000, 'Not Provided', 'common', 'Optional', 'PROP_23521'),
(9, 'again', '30', '2', 4500, 'Not Provided', 'common', 'Optional', 'PROP_85001'),
(10, 'again', '30', '4', 400, 'Not Provided', 'common', 'Optional', 'PROP_79140'),
(11, 'again', '30', '2', 4000, 'Not Provided', 'common', 'Optional', 'PROP_72669'),
(12, 'again', '30', '0', 5000, 'Not Provided', 'common', 'Optional', 'PROP_14665');

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
(60, 'UID_0060', 'gggid@gmail.com', '$2y$10$gDEQg6.Ietk4bgbcIHyBou.HMGeeULAcyMaiMDFpwNM', 'OW-61', 2, 1),
(61, 'UID_0061', 'jebal@gmail.com', '$2y$10$0mLNnR5nKtYPRCuJI5uEQed8to4Jwsj8aCUSfud6VY3', 'SE-62', 3, 1),
(62, 'UID_0062', 'lastna@gmail.com', '$2y$10$dlmPKpJcE.zKO4QIi8tZO.wdrejamsq60twCT/tDjFb', 'SE-63', 3, 1),
(63, 'UID_0063', 'bosetjud@gmail.com', '$2y$10$LtcclIxw/rvg5AZ7Dlh8feKBTLsDVlOI26r7nUm9/ne', 'SE-64', 3, 1),
(64, 'UID_0064', 'purple@gmail.com', '$2y$10$GMFEgypvsgIaCIOlopc4GuCxejyQlFHzsso2bm8LaYL', 'SE-65', 3, 1),
(65, 'UID_0065', 'maganani@gmail.com', '$2y$10$0ZE3xN5.bHMAMHk1Q4Dcy.2/tRJx7t9oI/1WqmsbCic', 'SE-66', 3, 1),
(66, 'UID_0066', 'khytrynfaye@gmail.com', '$2y$10$U73cvaOBk4gMIKJlMrgL8uEMJILMMFEpON/ff9sgaF/', 'OW-67', 2, 0),
(67, 'UID_0067', 'kate@gmail.com', '$2y$10$lQQJ72lNP/O8obaVbqecN.q8EMT3zIW3Lqh6fWL6gsP', 'OW-68', 2, 1),
(68, 'UID_0068', 'sample@gmail.com', '$2y$10$54fS/HOp1tVbnhsjFk9KLu.HPV/T4AwnAk2yHiH7Ick', 'AD-70', 1, 1);

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
(60, 'SE-60', 'tulog', 'nako', 9, '2002-01-08', 'Female', 21, 'samokkk, Katangawan, General Santos City'),
(61, 'OW-61', 'gg', 'gid', 9, '2004-12-07', 'Female', 18, 'ambot asa na, Lagao (1st & 3rd), General Santos City'),
(62, 'SE-62', 'jebal', 'pls', 9, '2001-12-08', 'Female', 21, 'yawa judd, Dadiangas North, General Santos City'),
(63, 'SE-63', 'last ', 'na', 9, '2001-12-02', 'Female', 21, 'samokaaaaaaa, Dadiangas West, General Santos City'),
(64, 'SE-64', 'bo', 'set', 9, '2003-12-04', 'Female', 19, 'oksna, Dadiangas South, General Santos City'),
(65, 'SE-65', 'purple', 'woman', 0, '2001-12-03', 'Female', 21, 'purple world, Labangal, General Santos City'),
(66, 'SE-66', 'twoid', 'work', 9, '2004-10-06', 'Female', 18, 'ambotasaka, Lagao (1st & 3rd), General Santos City'),
(67, 'OW-67', 'Khytryn', 'Carcillar', 9, '2001-12-08', 'Female', 21, 'katangawan, Katangawan, General Santos City'),
(68, 'OW-68', 'Katren', 'Faye', 9, '2004-08-04', 'Male', 18, 'somewhere, Conel, General Santos City'),
(69, 'SE-69', 'Khytryn Faye', 'Carcillar', 9, '2001-12-08', 'Female', 21, 'Sineguelas St. , Dadiangas East, General Santos City'),
(70, 'AD-70', 'kat', 'khyt', 2147483647, NULL, 'Female', 0, '');

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
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `room`
--
ALTER TABLE `room`
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
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `propertyaddress`
--
ALTER TABLE `propertyaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `propertytype`
--
ALTER TABLE `propertytype`
  MODIFY `propertyType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservationdetails`
--
ALTER TABLE `reservationdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

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
