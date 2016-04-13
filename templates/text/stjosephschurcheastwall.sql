-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2016 at 08:32 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stjosephschurcheastwall`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminID` int(11) NOT NULL,
  `adminUserName` varchar(45) NOT NULL,
  `adminPassword` varchar(10) NOT NULL,
  `adminHashedPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminID`, `adminUserName`, `adminPassword`, `adminHashedPassword`) VALUES
(1, 'Admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeeds`
--

CREATE TABLE `newsfeeds` (
  `id` int(11) NOT NULL,
  `author` text NOT NULL,
  `date` date NOT NULL,
  `newsFeedHeading` text NOT NULL,
  `newsFeedSubHeading1` text NOT NULL,
  `newsFeedSubHeading2` text NOT NULL,
  `newsFeedParagraph1` text NOT NULL,
  `newsFeedParagraph2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsfeeds`
--

INSERT INTO `newsfeeds` (`id`, `author`, `date`, `newsFeedHeading`, `newsFeedSubHeading1`, `newsFeedSubHeading2`, `newsFeedParagraph1`, `newsFeedParagraph2`) VALUES
(1, 'Howard A. Snyder, Daniel V. Runyon (Contributor)', '0000-00-00', 'Decoding the Church:', 'Mapping the DNA of Christ''s Body.', 'Decoding the Church takes this organic metaphor and examines its DNA to find the key to church structure and mission.', 'While many models have been proposed for understanding the nature of the church, the primary biblical image is that of the body of Christ.\r\nThe authors suggest that the classical understanding of the church as defined by the Nicene Creed-one, holy, \r\ncatholic, apostolic church-comprises only one strand of the churchs DNA.', 'They propose a more complex, living model for structuring the church and understanding its mission, and then explore how a biblically structured church can transform the world.\r\nDecoding the Church evaluates models based in hierarchy, psychology, and ecology, and stresses the biblical and contemporary reality of globalization. Includes discussion questions'),
(2, 'test Author', '0000-00-01', 'test Heading', 'test sub1', 'test sub2', 'test par 1', 'test par 2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `buildingId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `quantity`, `price`, `buildingId`) VALUES
(1, 'Mass Cards', 1000, 7.99, 1),
(2, 'Pillar Candle', 2000, 2.75, 1),
(3, 'Rosary Gift Set', 9999, 29.95, 1),
(4, 'Holy Water Font', 200, 15.55, 2),
(5, 'Miraculous Medal', 500, 9.99, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `hashedPassword` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verses`
--

CREATE TABLE `verses` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `subheading1` text NOT NULL,
  `subheading2` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verses`
--

INSERT INTO `verses` (`id`, `heading`, `subheading1`, `subheading2`, `paragraph`) VALUES
(1000, 'Romans 8:35,38-39', 'Who shall separate us from the love of Christ?', 'Shall trouble or hardship or persecution or famine or nakedness or danger or sword? ...', 'I am convinced that neither death nor life, neither angels nor demons, neither the present nor the future, nor any powers, neither height nor depth, nor anything else in all creation, will be able to separate us from the love of God that is in Christ Jesus our Lord.'),
(1001, 'Matthew 28:5-7', 'The angel said to the women, Do not be afraid, for I know that you are looking for Jesus, who was crucified', 'He is not here; he has risen, just as he said.', 'Come and see the place where he lay. Then go quickly and tell his disciples: &#039;He has risen from the dead and is going ahead of you into Galilee. There you will see him.&#039; Now I have told you.'),
(1002, 'Isaiah 61:1-3', 'The Spirit of the Sovereign LORD is on me, because the LORD has anointed me to preach good news to the poor.', 'He has sent me to bind up the brokenhearted,', 'to proclaim freedom for the captives and release from darkness for the prisoners, to proclaim the year of the LORD&#039;s favor and the day of vengeance of our God, to comfort all who mourn, and provide for those who grieve in Zion -- to bestow on them a crown of beauty instead of ashes, the oil of gladness instead of mourning, and a garment of praise instead of a spirit of despair. They will be called oaks of righteousness, a planting of the LORD for the display of his splendor'),
(1003, 'Luke 6:43-45', 'No good tree bears bad fruit, nor does a bad tree bear good fruit.', 'Each tree is recognized by its own fruit.', 'People do not pick figs from thornbushes, or grapes from briers. The good man brings good things out of the good stored up in his heart, and the evil man brings evil things out of the evil stored up in his heart. For out of the overflow of his heart his mouth speaks'),
(1004, 'Corinthians 12:9-10', 'But he said to me, “My grace is sufficient for you, for my power is made perfect in weakness.”', 'Therefore I will boast all the more gladly about my weaknesses, so that Christ’s power may rest on me.', 'That is why, for Christ’s sake, I delight in weaknesses, in insults, in hardships, in persecutions, in difficulties. For when I am weak, then I am strong.'),
(1005, 'Psalm 28:7-8', 'The LORD is my strength and my shield', 'my heart trusts in him, and he helps me. My heart leaps for joy, and with my song I praise him.', 'The LORD is the strength of his people, a fortress of salvation for his anointed one.'),
(1006, 'Nehemiah 8:10', 'Nehemiah said,', 'Go and enjoy choice food and sweet drinks, and send some to those who have nothing prepared. ', 'This day is holy to our Lord. Do not grieve, for the joy of the LORD is your strength.'),
(1007, 'James 1:2-4', 'Consider it pure joy, my brothers and sisters', 'whenever you face trials of many kinds,because you know that the testing of your faith produces perseverance.', 'Let perseverance finish its work so that you may be mature and complete, not lacking anything.'),
(1008, 'John 15:12-15', 'My command is this: Love each other as I have loved you.', 'Greater love has no one than this: to lay down one’s life for one’s friends.You are my friends if you do what I command.', 'I no longer call you servants, because a servant does not know his master’s business. Instead, I have called you friends, for everything that I learned from my Father I have made known to you.'),
(1009, 'Job 29:4-6', 'Oh, for the days when I was in my prime,', 'when God’s intimate friendship blessed my house,when the Almighty was still with me and my children were around me,', 'when my path was drenched with cream and the rock poured out for me streams of olive oil.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `newsfeeds`
--
ALTER TABLE `newsfeeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsfeeds`
--
ALTER TABLE `newsfeeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
