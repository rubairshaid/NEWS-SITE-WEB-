-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 02:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`UserName`, `Password`) VALUES
('rubairshaid', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`UserName`, `Password`, `Active`) VALUES
('ruba', '1234567', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Body` text NOT NULL,
  `DatePosted` datetime NOT NULL,
  `Published` tinyint(4) NOT NULL DEFAULT 0,
  `Category` varchar(40) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Title`, `Body`, `DatePosted`, `Published`, `Category`, `Image`) VALUES
(4, 'pinaaple', '  pinapleeeeeeeeeeeeeeeeeeeeee', '2020-04-10 19:25:05', 1, 'FOOD', 'https://cdn.mos.cms.futurecdn.net/JEKZM22ZasnFC7JFGkAMvU-320-80.jpg'),
(5, 'sea', 'seaaaaaaaaaaaaaaaaaaaaasea', '2020-04-10 19:26:40', 1, 'NATURE', 'https://upload.wikimedia.org/wikipedia/commons/6/62/Paracas_National_Reserve%2C_Ica%2C_Peru-3April2011.jpg'),
(6, 'tree', 'treeeeeeeeeeeeeeeeeeeeeetre', '2020-04-10 19:26:40', 1, 'NATURE', 'https://arbordayblog.org/wp-content/uploads/2018/06/oak-tree-sunset-iStock-477164218-1080x608.jpg'),
(7, 'cat', 'cateeeeeeeeeeeeecat', '2020-04-10 19:29:59', 1, 'ANIMAL', 'https://i.pinimg.com/originals/89/29/2b/89292bdee28d8e20719c2b27f14cd7a4.jpg'),
(8, 'dog', 'dog dogggggggggggggggggi', '2020-04-10 19:29:59', 1, 'ANIMAL', 'https://www.irishtimes.com/polopoly_fs/1.4053711.1571300678!/image/image.jpg_gen/derivatives/landscape_620/image.jpg'),
(9, 'pubg', 'pubgggggggggggggggggggggggggggggggg', '2020-04-10 22:01:57', 1, 'GAME', 'https://www.slashgear.com/wp-content/uploads/2019/10/PUBG_mobile_main-1-1280x720.jpg'),
(10, 'disney', 'disneeeeeeeeeeeeey', '2020-04-11 16:35:33', 1, 'CARTOON', 'https://static.foxla.com/www.foxla.com/content/uploads/2020/03/GettyImages-611910256.jpg'),
(11, 'harvard university', 'harvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard universityharvard university', '2020-04-11 16:55:31', 1, 'EDUCATION', 'https://medicircle.in/uploads/2020/march2020/harvard_university_moved_their_classes_online.jpg'),
(13, 'football', 'footballfootballfootballfootballfootballfootballfootballfootballfootballfootballfootball', '2020-04-11 22:08:34', 1, 'SPORT', 'https://d3nfwcxd527z59.cloudfront.net/content/uploads/2019/10/03103831/Lionel-Messi-dribble-Barcelona-Real-Madrid.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
