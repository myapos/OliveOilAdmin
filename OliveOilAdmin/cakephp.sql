-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2014 at 07:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `euzone` varchar(20) NOT NULL,
  `currency` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `euzone`, `currency`) VALUES
(1, 'Brazil', 'NO', 'dollars'),
(4, 'France', 'YES', 'eu'),
(5, 'Greece', 'YES', 'eu');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE IF NOT EXISTS `demands` (
`id` int(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`id`, `country_id`, `product_id`, `quantity`, `price`) VALUES
(1, 4, 1, 12, 12),
(5, 4, 7, 1000, 3),
(7, 1, 3, 500, 4);

-- --------------------------------------------------------

--
-- Table structure for table `demos`
--

CREATE TABLE IF NOT EXISTS `demos` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `demos`
--

INSERT INTO `demos` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(2, 'A title once again Edited', 'And the post body follows. Edited', '2014-12-21 11:29:00', '2014-12-25 20:25:00', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-12-21 11:29:01', NULL, NULL),
(5, 'ÎŸ Ï†Ï„Ï‰Ï‡Î¿ÏÎ»Î·Ï‚ Ï„Î¿Ï… Î¸ÎµÎ¿Ï', 'Î.ÎšÎ±Î¶Î±Î½Ï„Î¶Î¬ÎºÎ·Ï‚', '2014-12-21 11:52:36', '2014-12-21 11:52:36', NULL),
(14, 'Oliver twist edited 2', 'Oliver twist edited 2', '2014-12-25 20:54:32', '2014-12-26 10:18:44', 18),
(15, 'O xristos ksanastaurwnetai', 'Kazantzakis Nikos', '2014-12-26 10:20:04', '2014-12-26 10:20:04', 18);

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE IF NOT EXISTS `factories` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `county` varchar(11) NOT NULL,
  `region` varchar(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(30) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `user_id`, `county`, `region`, `tax`, `name`, `type`, `telephone`) VALUES
(1, 1, 'HERAKLION', 'HERAKLION', 4545, 'MARIA KOUTSOGIANNAKI', '454', '+302810311406'),
(8, 6, 'heraklion', 'messara', 70016, 'Myros Apostolakis Elaiourgeio', '345', '281040650'),
(15, 3, 'messara', 'Heraklion', 70016, 'my factory', '300', '281041063');

-- --------------------------------------------------------

--
-- Table structure for table `merges`
--

CREATE TABLE IF NOT EXISTS `merges` (
`M_Id` int(10) NOT NULL,
  `demand_id` int(10) DEFAULT NULL,
  `offer_id` int(10) DEFAULT NULL,
  `round_id` int(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `merges`
--

INSERT INTO `merges` (`M_Id`, `demand_id`, `offer_id`, `round_id`) VALUES
(1, 7, 29, 7),
(2, 7, 105, 10),
(3, 1, 90, 1),
(4, 5, 23, 13),
(5, 7, 4, 4),
(6, 7, 30, 8),
(7, 7, 140, 11),
(8, 1, 133, 2),
(9, 5, 163, 14),
(10, 7, 8, 5),
(11, 7, 31, 9),
(12, 7, 162, 12),
(13, 1, 150, 3),
(14, 7, 24, 6);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `factory_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
`id` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`factory_id`, `product_id`, `quantity`, `price`, `id`) VALUES
(1, 3, 200, 3, 4),
(8, 3, 656, 5, 8),
(1, 7, 200, 5, 23),
(8, 3, 800, 1, 24),
(1, 3, 500, 1, 29),
(1, 3, 150, 45, 30),
(1, 3, 500, 8, 31),
(15, 1, 200, 300, 90),
(1, 3, 200, 546, 105),
(15, 1, 200, 3, 133),
(1, 3, 200, 3, 140),
(15, 1, 200, 3, 150),
(15, 3, 500, 5, 162);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(1, 'The title', 'This is the post body.', '2014-12-21 11:29:00', NULL, NULL),
(2, 'A title once again', 'And the post body follows.', '2014-12-21 11:29:00', NULL, NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-12-21 11:29:01', NULL, NULL),
(5, 'ÎŸ Ï†Ï„Ï‰Ï‡Î¿ÏÎ»Î·Ï‚ Ï„Î¿Ï… Î¸ÎµÎ¿Ï', 'Î.ÎšÎ±Î¶Î±Î½Ï„Î¶Î¬ÎºÎ·Ï‚', '2014-12-21 11:52:36', '2014-12-21 11:52:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `created`, `modified`) VALUES
(1, 'OLIVE OIL  - EXTRA VIRGIN', '2014-12-24 15:36:45', '2014-12-29 08:34:27'),
(2, 'OLIVE OIL - VIRGIN', '2014-12-24 15:36:45', '2014-12-03 00:00:00'),
(3, 'OLIVE OIL - BIOLOGICAL', '2014-12-25 09:16:28', '2014-12-25 09:16:49'),
(7, 'Pyrinelaio', '2014-12-27 01:25:16', '2014-12-27 01:25:16'),
(9, 'WINE', '2014-12-28 08:18:13', '2014-12-28 08:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
`id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `PH` varchar(10) NOT NULL,
  `package` varchar(10) NOT NULL,
  `certification` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `offer_id` int(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `product_id`, `PH`, `package`, `certification`, `size`, `offer_id`) VALUES
(35, 3, '2-4', 'BOTTLE', 'YES', '1-5', 90),
(69, 9, '2-4', 'BOTTLE', 'YES', '1-5', 4),
(70, 9, '2-4', 'BOTTLE', 'YES', '1-5', 4),
(71, 1, '<2', 'NONE', 'YES', '<1', 4),
(72, 1, '<2', 'NONE', 'YES', '<1', 133),
(86, 1, '2-4', 'BOTTLE', 'YES', '1-5', 150),
(115, 3, '2-4', 'NONE', 'YES', '<1', 162);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
`M_Id` int(10) NOT NULL,
  `demand_id` int(10) DEFAULT NULL,
  `offer_id` int(10) DEFAULT NULL,
  `round_id` int(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`M_Id`, `demand_id`, `offer_id`, `round_id`) VALUES
(1, 1, 90, NULL),
(2, 1, 133, NULL),
(3, 1, 150, NULL),
(4, 7, 4, NULL),
(5, 7, 8, NULL),
(6, 7, 24, NULL),
(7, 7, 29, NULL),
(8, 7, 30, NULL),
(9, 7, 31, NULL),
(10, 7, 105, NULL),
(11, 7, 140, NULL),
(12, 7, 162, NULL),
(13, 5, 23, NULL),
(14, 5, 163, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('elaiourgeio','admin','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES
(1, 'test1', 'test1', 'test@gmail.com', 'f8e2faaf14680c21726078681582c45adfdf03a2', 'elaiourgeio'),
(2, 'administrator', 'admin', 'admin@yahoo.com', 'b8618d99ef3d99481cb52a92be7668656b740d93', 'admin'),
(3, 'myapos', 'myapos', 'myapos@yahoo.com', '0108b53d87f812f3b05b52cd20db4ad5a8bbf927', 'elaiourgeio'),
(6, 'myros', 'myros', 'myapos@yahoo.com', 'f88a5652d93d6c1c21b9e4ad4ea54bccdfc23df0', 'elaiourgeio'),
(8, 'myros1', 'myros1', 'myapos@yahoo.com', '31e93c4f5d3ad50b505b945d7756d8337b42390c', 'elaiourgeio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
 ADD PRIMARY KEY (`id`), ADD KEY `country_id` (`country_id`), ADD KEY `demand_id` (`product_id`);

--
-- Indexes for table `demos`
--
ALTER TABLE `demos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `merges`
--
ALTER TABLE `merges`
 ADD PRIMARY KEY (`M_Id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
 ADD PRIMARY KEY (`id`), ADD KEY `factory_id` (`factory_id`,`product_id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
 ADD PRIMARY KEY (`id`), ADD KEY `product_id` (`product_id`), ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
 ADD PRIMARY KEY (`M_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `demos`
--
ALTER TABLE `demos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `merges`
--
ALTER TABLE `merges`
MODIFY `M_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
MODIFY `M_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `demands`
--
ALTER TABLE `demands`
ADD CONSTRAINT `country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `demand_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factories`
--
ALTER TABLE `factories`
ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
ADD CONSTRAINT `factory_id` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
ADD CONSTRAINT `offer_id` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
