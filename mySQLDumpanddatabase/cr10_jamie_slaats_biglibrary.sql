-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 04:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_jamie_slaats_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `Admin_ID` int(11) NOT NULL,
  `fk_Media_ID` int(11) DEFAULT NULL,
  `fk_Employee_ID` int(11) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`Admin_ID`, `fk_Media_ID`, `fk_Employee_ID`, `Created_at`, `Updated_at`) VALUES
(1, 3, 1, '2019-03-16 08:38:56', '2019-03-16 08:38:56'),
(2, 4, 2, '2019-03-16 12:22:11', '2019-03-16 12:22:11'),
(3, 8, 3, '2019-03-16 12:32:20', '2019-03-16 12:32:20'),
(4, 7, 2, '2019-03-16 12:32:20', '2019-03-16 12:32:20'),
(5, 4, 1, '2019-03-16 12:32:20', '2019-03-16 12:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `Author_ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `MediaFocus` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`Author_ID`, `Name`, `Surname`, `MediaFocus`, `Created_at`, `Updated_at`) VALUES
(4, 'John', 'Updike', 'DVD', '2019-03-15 19:55:53', '2019-03-15 19:55:53'),
(5, 'Jonathan', 'Swift', 'DVD', '2019-03-15 19:56:03', '2019-03-15 19:56:03'),
(6, 'Joseph', 'Heller', 'Book', '2019-03-15 20:05:17', '2019-03-15 20:05:17'),
(7, 'Jules', 'Vern', 'Book', '2019-03-15 20:05:30', '2019-03-15 20:05:30'),
(8, 'Agatha', 'Christie', 'Book', '2019-03-15 20:09:16', '2019-03-15 20:09:16'),
(9, 'Anne', 'Frank', 'Book', '2019-03-15 20:11:08', '2019-03-15 20:11:08'),
(10, 'Franz', 'Ferdinand', 'CD', '2019-03-16 10:51:57', '2019-03-16 10:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(11) NOT NULL,
  `Empl_Code` int(20) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Empl_Code`, `Name`, `Surname`, `Email`, `Department`, `Password`, `Created_at`, `Updated_at`) VALUES
(1, 1, 'Jamie', 'Slaats', 'jamie@cfpubliclibrary.at', 'Services', '12hello45', '2019-03-15 19:22:47', '2019-03-15 19:22:47'),
(2, 2, 'Goran', 'Stevic', 'stevic@cfpubliclibrary.at', 'Services', '123456789', '2019-03-16 10:48:40', '2019-03-16 10:48:40'),
(3, 3, 'Serri', 'TheMan', 'serri@cfpubliclibrary.at', 'Services', '123456qwerty', '2019-03-16 11:05:02', '2019-03-16 11:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `Genres_ID` int(11) NOT NULL,
  `GenreName` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`Genres_ID`, `GenreName`, `Created_at`, `Updated_at`) VALUES
(1, 'Romance', '2019-03-15 22:01:32', '2019-03-16 05:13:30'),
(2, 'Drama', '2019-03-16 05:16:16', '2019-03-16 05:16:16'),
(3, 'Action/adventure', '2019-03-16 05:16:31', '2019-03-16 05:16:31'),
(4, 'Satire', '2019-03-16 05:16:43', '2019-03-16 05:16:43'),
(5, 'Comedy', '2019-03-16 05:17:44', '2019-03-16 05:17:44'),
(6, 'Western', '2019-03-16 05:20:40', '2019-03-16 05:20:40'),
(7, 'Dystopia', '2019-03-16 05:20:56', '2019-03-16 05:20:56'),
(8, 'Pop', '2019-03-16 05:21:22', '2019-03-16 05:21:22'),
(9, 'Hip Hop', '2019-03-16 05:21:28', '2019-03-16 05:21:28'),
(10, 'Thriller', '2019-03-16 05:21:54', '2019-03-16 05:21:54'),
(11, 'Rock', '2019-03-16 05:42:58', '2019-03-16 05:42:58'),
(12, 'Hard Rock', '2019-03-16 06:58:25', '2019-03-16 06:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `Media_ID` int(11) NOT NULL,
  `ISBN_No` varchar(30) DEFAULT NULL,
  `MediaCode` varchar(30) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `TitleImage` text,
  `Description` text,
  `MediaType` varchar(255) DEFAULT NULL,
  `PublisherDate` date DEFAULT NULL,
  `Total_Count` smallint(6) DEFAULT NULL,
  `Avail_Count` smallint(6) DEFAULT NULL,
  `Location_ID` varchar(200) NOT NULL,
  `fk_Author_ID` int(11) DEFAULT NULL,
  `fk_Publ_ID` int(11) DEFAULT NULL,
  `fk_Genres_ID` int(11) DEFAULT NULL,
  `fk_Admin_ID` int(11) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`Media_ID`, `ISBN_No`, `MediaCode`, `Title`, `TitleImage`, `Description`, `MediaType`, `PublisherDate`, `Total_Count`, `Avail_Count`, `Location_ID`, `fk_Author_ID`, `fk_Publ_ID`, `fk_Genres_ID`, `fk_Admin_ID`, `Created_at`, `Updated_at`) VALUES
(3, '1234567897', NULL, 'The Frog King', 'https://images-na.ssl-images-amazon.com/images/I/41ZmAHOrrxL._SX314_BO1,204,203,200_.jpg', 'A book all about how great frogs are!', 'Book', '2017-09-12', 5, 5, 'Isle5\r\nRow 8', 4, 1, 2, 1, '2019-03-16 08:38:19', '2019-03-16 09:13:01'),
(4, '1631494023', '', 'The Gulf: The Making of An American Sea', 'http://t0.gstatic.com/images?q=tbn:ANd9GcRIAfPww7QnzR_z2BlnAgXZsR1X9NjJcagFLCJ-nuvpUZDczvpG', 'Jack E. Davis’s The Gulf is “by turns informative, lyrical, inspiring and chilling for anyone who cares about the future of ‘America’s Sea’', 'Book', '2018-10-15', 10, 8, 'Aile 5\r\nRow 6', 6, 7, 7, 1, '2019-03-16 12:20:58', '2019-03-16 12:27:50'),
(5, '545791421', NULL, 'Harry Potter and the Goblet of Fire: The Illustrated Edition ', 'https://images-na.ssl-images-amazon.com/images/I/918DFird47L.jpg', 'The fourth book in the beloved Harry Potter series, now illustrated in glorious full color by award-winning artist Jim Kay.', 'Book', '2018-09-12', 5, 3, 'Aisle 20\r\nRow 40', 7, 1, 3, 2, '2019-03-16 12:26:48', '2019-03-16 12:26:48'),
(7, NULL, 'B07GW2RHQD', 'Fantastic Beasts: The Crimes of Grindelwald', 'https://images-na.ssl-images-amazon.com/images/I/A1RVdeLuYmL._SX425_.jpg', 'From the imagination of Wizarding World creator J.K. Rowling comes the Fantastic Beasts film series, magical adventures set before the time of Harry Potter. At the end of the first film, the powerful Dark wizard Gellert Grindelwald (Johnny Depp) was captured by MACUSA (Magical Congress of the United States of America), with the help of Newt Scamander (Eddie Redmayne).', 'BD', '2018-11-13', 2, 2, 'Aisle 6\r\nRow 30', 10, 9, 3, 1, '2019-03-16 12:31:28', '2019-03-16 12:31:28'),
(8, NULL, 'B07GW2ZW5K', 'Aquaman', 'https://images-na.ssl-images-amazon.com/images/I/A1ASFkYtZ6L._SL1500_.jpg', 'An action-packed adventure that spans the vast, visually breathtaking underwater world of the seven seas, “Aquaman” reveals the origin story of half-human, half-Atlantean Arthur Curry and takes him on the journey of his lifetime—one that will not only force him to face who he really is, but to discover if he is worthy of who he was born to be…a king.', 'BD', '2018-06-12', 4, 3, 'Aisle 30\r\nRow 1', 5, 3, 3, 2, '2019-03-16 12:31:28', '2019-03-16 12:31:28'),
(9, NULL, 'B07GN9PHHX', 'Good Man, Dalton', 'https://images-na.ssl-images-amazon.com/images/I/51Zo9wTHtqL.jpg', 'Greta Hansen has arrived in Manhattan to intern with the Vanderhaven Corporation, a company owned by distant and very wealthy relatives. But she soon realizes she’s actually been hired to keep watch on their capricious daughter, social media celebrity Cece. No last name required. Why bother?', 'Audio Book', '2019-03-13', 20, 5, 'Aisle 20\r\nRow 60', 10, 5, 1, 4, '2019-03-16 12:40:20', '2019-03-16 12:40:20'),
(10, '0393355551', 'B01HDSU3SU', 'The Death and Life of the Great Lakes', 'https://images-na.ssl-images-amazon.com/images/I/51CU3xjiozL.jpg', 'The Great Lakes—Erie, Huron, Michigan, Ontario, and Superior—hold 20 percent of the world’s supply of surface fresh water and provide sustenance, work, and recreation for tens of millions of Americans. But they are under threat as never before, and their problems are spreading across the continent. ', 'Paperback, Digital Book', '2018-10-08', 30, 25, 'Aisle 9\r\nRow 10', 5, 6, 7, 3, '2019-03-16 12:40:20', '2019-03-16 12:40:20'),
(11, '1503901491', 'B07F6BS5X1', 'Zoo Nebraska: The Dismantling of an American Dream', 'https://images-na.ssl-images-amazon.com/images/I/51fd0XCOBhL.jpg', 'Royal, Nebraska, population eighty-one—where the church, high school, and post office each stand abandoned, monuments to a Great Plains town that never flourished. But for nearly twenty years, they had a zoo, seven acres that rose from local peculiarity to key tourist attraction to devastating tragedy. And it all began with one man’s outsize vision.', 'Paperback, Audio, Digital', '2018-11-14', 5, 2, 'Aisle 3\r\nRow 30', 4, 10, 9, 3, '2019-03-16 12:46:09', '2019-03-16 12:46:09'),
(12, NULL, 'B07DL83X69', 'Si', 'https://images-na.ssl-images-amazon.com/images/I/81RudqzAWoL._SX522_.jpg', 'After 14 years, Andrea Bocelli is back with an incredible new album of original songs! Contains Sensational Duets With Ed Sheeran, Dua Lipa, Josh Groban, Aida Garifullina and Matteo Bocelli ', 'CD', '2019-03-05', 6, 6, 'Aisle 10\r\nRow 20', 9, 4, 11, 4, '2019-03-16 12:46:09', '2019-03-16 12:46:09'),
(13, NULL, 'B07G1YKQ3D', 'Let There Be Cello ', 'https://images-na.ssl-images-amazon.com/images/I/71YwSpj-fxL._SX522_.jpg', 'The Croatian duo of Luka Sulic and Stjepan Hauser, better known as 2CELLOS, return with their new album, Let There Be Cello. A follow-up to their successful 2017 album, Score, the new album finds the pair exploring a diverse catalogue with their signature boundary-breaking playing style. Let There Be Cello is a showcase of 2CELLOS\' exceptional talent for reinventing the music of any genre.', 'CD', '2018-10-15', 5, 5, 'Aisle 30\r\nRow 1', 9, 6, 7, 5, '2019-03-16 12:48:08', '2019-03-16 12:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `Publ_ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PostCode` varchar(10) DEFAULT NULL,
  `City` varchar(60) DEFAULT NULL,
  `Country` varchar(60) DEFAULT NULL,
  `Size` varchar(25) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`Publ_ID`, `Name`, `Address`, `PostCode`, `City`, `Country`, `Size`, `Created_at`, `Updated_at`) VALUES
(1, 'A Sohne & Vater', 'Wienstrasse 45', '1010', 'Vienna', 'Austria', 'Small', '2019-03-16 08:33:45', '2019-03-16 08:33:45'),
(2, 'Jabesi the Great', 'Franzstrasse 8', '19898', 'Munich', 'Germany', 'Medium', '2019-03-16 12:07:13', '2019-03-16 12:07:13'),
(3, 'Amazon', 'Amazon Way 1', '23456', 'Seattle, WA', 'USA', 'Large', '2019-03-16 12:07:47', '2019-03-16 12:07:47'),
(4, 'Picolo & Sons', 'Required Boulevard 4', '29928', 'Paris', 'France', 'Large', '2019-03-16 12:08:25', '2019-03-16 12:08:25'),
(5, 'Emirates Releases', 'Dubai Way', '1234', 'Dubai', 'UAE', 'Small', '2019-03-16 12:09:13', '2019-03-16 12:09:13'),
(6, 'Alfred Ancients', 'Fabulous 5', '1202NP', 'Amsterdam', 'The Netherlands', 'Medium', '2019-03-16 12:10:27', '2019-03-16 12:10:27'),
(7, 'Harvard Books Inc', 'London Derry 90', 'N0989 5P', 'London', 'United Kingdom', 'Large', '2019-03-16 12:11:33', '2019-03-16 12:11:33'),
(8, 'Hachette Book Group ', '237 Park Avenue', 'NY 10017', 'New York', 'USA', 'Large', '2019-03-16 12:12:36', '2019-03-16 12:12:36'),
(9, 'Harper Collins Asia', 'Weareway 89', '2345', 'Singapore', 'Singapore', 'Large', '2019-03-16 12:13:08', '2019-03-16 12:13:08'),
(10, 'Simon and Schuster ', '1230 Avenue of the Americas', 'NY 10020', 'New York', 'USA', 'Large', '2019-03-16 12:13:47', '2019-03-16 12:13:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `administration_ibfk_1` (`fk_Media_ID`),
  ADD KEY `administration_ibfk_2` (`fk_Employee_ID`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`Genres_ID`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`Media_ID`),
  ADD KEY `media_ibfk_1` (`fk_Author_ID`),
  ADD KEY `media_ibfk_2` (`fk_Admin_ID`),
  ADD KEY `media_ibfk_3` (`fk_Genres_ID`),
  ADD KEY `media_ibfk_4` (`fk_Publ_ID`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`Publ_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `Author_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `Genres_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `Media_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `Publ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administration`
--
ALTER TABLE `administration`
  ADD CONSTRAINT `administration_ibfk_1` FOREIGN KEY (`fk_Media_ID`) REFERENCES `media` (`Media_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `administration_ibfk_2` FOREIGN KEY (`fk_Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`fk_Author_ID`) REFERENCES `authors` (`Author_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`fk_Admin_ID`) REFERENCES `administration` (`Admin_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `media_ibfk_3` FOREIGN KEY (`fk_Genres_ID`) REFERENCES `genres` (`Genres_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `media_ibfk_4` FOREIGN KEY (`fk_Publ_ID`) REFERENCES `publishers` (`Publ_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
