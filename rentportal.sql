-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 08:22 AM
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
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `user_ID` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `property_ID`, `propertyname`, `propertytype`, `propertyaddress`, `description`, `roomtype`, `totalrooms`, `availablerooms`, `monthlyrate`, `dailyrate`, `bed`, `kitchen`, `bathroom`, `aircon`, `date_created`, `user_ID`) VALUES
(1, 'PROP_19193', 'Seeker Pasa', 'Boarding House', '', '<div>gagu</div>', 'Single Room', 10, 8, 2500, 0, 0, 'Provided', 'Provided', 'Provided', '2023-05-18', ''),
(2, 'PROP_79584', 'Khytryn Room for Rent', 'Boarding House', '', '<div>kk</div>', 'Bedspacer', 10, 3, 2000, 0, 0, 'Provided', 'Provided', 'Provided', '2023-05-18', ''),
(3, 'PROP_94441', 'Jusayan Residence', 'Apartment', '', '<div>kikikiki</div>', 'Big Room', 10, 3, 3500, 500, 2, 'Not Provided', 'Provided', 'Optional', '2023-05-18', 'UID_0067');

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
(3, '', 6.11512, 125.171);

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
(31, 'Commercial Building'),
(32, 'Commercial Building'),
(33, 'test');

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
(25, 'UID_0025', 'dadidam@gmail.com', '$2y$10$mZZXjvNkd4n4DhLmyLW3wOl7ckBH85QyKfOMFovMmXZ', 'SE-26', 3, 1),
(33, 'UID_0033', 'imagetest12@gmail.com', '$2y$10$81f61fYy2R/RcMXiiG9OpueKYxgKE1Eu1AtGTkQCiwt', 'OW-34', 2, 0),
(35, 'UID_0035', 'kkkkk@gmail.com', '$2y$10$BSQzkhqTW5he78uxdIbAzOKrkGFs5/6UqFoGIghwl0p', 'OW-36', 2, 0),
(36, 'UID_0036', 'ssss@gmail.com', '$2y$10$Z.Fz4eEZ8Q39PCWVN6V1VO5lctn0avqym97WUV7kNEU', 'OW-37', 2, 0),
(37, 'UID_0037', 'nnn@gmail.com', '$2y$10$VzLIDKR2trKu6J/xj/tHzOeq7.KzFfq4vtZLwVfrbt3', 'OW-38', 2, 0),
(38, 'UID_0038', 'you@gmail.com', '$2y$10$Zm7XTS5ZuWba9TYBPV5nguwlbid6RSiw/wfamNkKycR', 'OW-39', 2, 0),
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
(53, 'UID_0053', 'chanienie@gmail.com', '$2y$10$mvgfvkkAR2Cj63UwzKnrsOcvI3GAF1un5m5qzniKB6u', 'SE-54', 3, 1),
(54, 'UID_0054', 'joochan@gmail.com', 'Joochan33', 'AD-55', 1, 0),
(55, 'UID_0055', 'ajlynn@gmail.com', '$2y$10$xmhnEeDZ0MDWsYUvXJ2ymObHivYlElH43Jt8SZkopY4', 'OW-56', 2, 0),
(56, 'UID_0056', 'ajlynn@gmail.com', '$2y$10$.2onQsyaBRUmnGb2OkIdweJYqhWkw9aFmyt7BqBh8cN', 'AD-57', 1, 1),
(57, 'UID_0057', 'makapasa@gmail.com', '$2y$10$ZRRH.46bxHs3UUmw1rxCTu0qNYjOAwi05oeLUYMsxSt', 'SE-58', 3, 1),
(58, 'UID_0058', 'samoka@gmail.com', '$2y$10$PqtnbeCxEjNYDa7CZ93QbO8cy6zxKZgfTjz5NQ5kK/H', 'SE-59', 3, 1),
(59, 'UID_0059', 'patuluganako@gmail.com', '$2y$10$ReVNrUKHjxRFrCXsUc6vTuSJ6uF75H3h9jY1T.T0HAY', 'SE-60', 3, 1),
(60, 'UID_0060', 'gggid@gmail.com', '$2y$10$gDEQg6.Ietk4bgbcIHyBou.HMGeeULAcyMaiMDFpwNM', 'OW-61', 2, 0),
(61, 'UID_0061', 'jebal@gmail.com', '$2y$10$0mLNnR5nKtYPRCuJI5uEQed8to4Jwsj8aCUSfud6VY3', 'SE-62', 3, 1),
(62, 'UID_0062', 'lastna@gmail.com', '$2y$10$dlmPKpJcE.zKO4QIi8tZO.wdrejamsq60twCT/tDjFb', 'SE-63', 3, 1),
(63, 'UID_0063', 'bosetjud@gmail.com', '$2y$10$LtcclIxw/rvg5AZ7Dlh8feKBTLsDVlOI26r7nUm9/ne', 'SE-64', 3, 1),
(64, 'UID_0064', 'purple@gmail.com', '$2y$10$GMFEgypvsgIaCIOlopc4GuCxejyQlFHzsso2bm8LaYL', 'SE-65', 3, 1),
(65, 'UID_0065', 'maganani@gmail.com', '$2y$10$0ZE3xN5.bHMAMHk1Q4Dcy.2/tRJx7t9oI/1WqmsbCic', 'SE-66', 3, 1),
(66, 'UID_0066', 'khytrynfaye@gmail.com', '$2y$10$U73cvaOBk4gMIKJlMrgL8uEMJILMMFEpON/ff9sgaF/', 'OW-67', 2, 0),
(67, 'UID_0067', 'kate@gmail.com', '$2y$10$lQQJ72lNP/O8obaVbqecN.q8EMT3zIW3Lqh6fWL6gsP', 'OW-68', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `address_ID` int(11) NOT NULL,
  `barangay` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`address_ID`, `barangay`) VALUES
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
(54, 'SE-54', 'Chanie', 'Hong', 2147483647, '2001-12-08', 'Female', 21, 'Sineguelas, Dadiangas East, General Santos City'),
(55, 'AD-55', 'joo', 'chan', 2147483647, NULL, 'Male', 0, ''),
(56, 'OW-56', 'Aj Lynn', 'Jusayan', 2147483647, '2001-12-06', 'Male', 21, 'test, Dadiangas South, General Santos City'),
(57, 'AD-57', 'Aj', 'Lynn', 2147483647, NULL, 'Female', 0, ''),
(58, 'SE-58', 'Seeker', 'Pasa', 9, '2001-06-18', 'Female', 21, 'ambot asa na, Ligaya, General Santos City'),
(59, 'SE-59', 'Seek', 'seek', 9, '2004-12-04', 'Male', 18, 'ambotttt, Dadiangas South, General Santos City'),
(60, 'SE-60', 'tulog', 'nako', 9, '2002-01-08', 'Female', 21, 'samokkk, Katangawan, General Santos City'),
(61, 'OW-61', 'gg', 'gid', 9, '2004-12-07', 'Female', 18, 'ambot asa na, Lagao (1st & 3rd), General Santos City'),
(62, 'SE-62', 'jebal', 'pls', 9, '2001-12-08', 'Female', 21, 'yawa judd, Dadiangas North, General Santos City'),
(63, 'SE-63', 'last ', 'na', 9, '2001-12-02', 'Female', 21, 'samokaaaaaaa, Dadiangas West, General Santos City'),
(64, 'SE-64', 'bo', 'set', 9, '2003-12-04', 'Female', 19, 'oksna, Dadiangas South, General Santos City'),
(65, 'SE-65', 'purple', 'woman', 0, '2001-12-03', 'Female', 21, 'purple world, Labangal, General Santos City'),
(66, 'SE-66', 'twoid', 'work', 9, '2004-10-06', 'Female', 18, 'ambotasaka, Lagao (1st & 3rd), General Santos City'),
(67, 'OW-67', 'Khytryn', 'Carcillar', 9, '2001-12-08', 'Female', 21, 'katangawan, Katangawan, General Santos City'),
(68, 'OW-68', 'Katren', 'Faye', 9, '2004-08-04', 'Male', 18, 'somewhere, Conel, General Santos City');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propertyaddress`
--
ALTER TABLE `propertyaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propertytype`
--
ALTER TABLE `propertytype`
  MODIFY `propertyType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `address_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

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
