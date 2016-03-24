-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2016 at 05:32 PM
-- Server version: 10.0.24-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `adminID` int(11) NOT NULL,
  `adminUserName` varchar(45) NOT NULL,
  `adminPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminID`, `adminUserName`, `adminPassword`) VALUES
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `price`) VALUES
(1, 'Ok', 112),
(2, 'Ok2', 222),
(3, 'nut', 0),
(5, 'pliers', 0),
(7, 'hammer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `hashedPassword` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `hashedPassword`, `role`) VALUES
(1, 'matt', '$2y$10$L0lCyfe.ByC1lgICDRhioO9dYo/Ozx5162OG/41HH6hsLnwQdmFbG', '', 1),
(2, 'joe', '$2y$10$jcssCBNGfB2f8ynktzkP7.O6xlSl7jTOoG2ysJZalhB1Xye8DUiki', '', 1),
(3, 'admin', '$2y$10$4d9LMlJihfBlqZm3aew51eQm9a0gZE2fabDUNF/E8SMcGY1LOk6jy', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `verses`
--

CREATE TABLE IF NOT EXISTS `verses` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `subheading1` text NOT NULL,
  `subheading2` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verses`
--

INSERT INTO `verses` (`id`, `heading`, `subheading1`, `subheading2`, `paragraph`) VALUES
(1000, 'Romans 8:35,38-39', 'Who shall separate us from the love of Christ?', 'Shall trouble or hardship or persecution or famine or nakedness or danger or sword? ...', 'I am convinced that neither death nor life, neither angels nor demons, neither the present nor the future, nor any powers, neither height nor depth, nor anything else in all creation, will be able to separate us from the love of God that is in Christ Jesus our Lord.'),
(1001, 'Matthew 28:5-7', 'The angel said to the women, Do not be afraid, for I know that you are looking for Jesus, who was crucified', 'He is not here; he has risen, just as he said.', 'Come and see the place where he lay. Then go quickly and tell his disciples: &#039;He has risen from the dead and is going ahead of you into Galilee. There you will see him.&#039; Now I have told you.'),
(1002, 'Isaiah 61:1-3', 'The Spirit of the Sovereign LORD is on me, because the LORD has anointed me to preach good news to the poor.', 'He has sent me to bind up the brokenhearted,', 'to proclaim freedom for the captives and release from darkness for the prisoners, to proclaim the year of the LORD&#039;s favor and the day of vengeance of our God, to comfort all who mourn, and provide for those who grieve in Zion -- to bestow on them a crown of beauty instead of ashes, the oil of gladness instead of mourning, and a garment of praise instead of a spirit of despair. They will be called oaks of righteousness, a planting of the LORD for the display of his splendor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verses`
--
ALTER TABLE `verses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `verses`
--
ALTER TABLE `verses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
