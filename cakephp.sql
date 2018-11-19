-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 31 Μαρ 2015 στις 11:24:15
-- Έκδοση διακομιστή: 5.5.32
-- Έκδοση PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `cakephp`
--
CREATE DATABASE IF NOT EXISTS `cakephp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cakephp`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `euzone` varchar(20) NOT NULL,
  `currency` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Άδειασμα δεδομένων του πίνακα `countries`
--

INSERT INTO `countries` (`id`, `name`, `euzone`, `currency`) VALUES
(1, 'Brazil', 'NO', 'dollars'),
(4, 'France', 'YES', 'eu'),
(8, 'Greece', 'YES', 'eu');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `demands`
--

CREATE TABLE IF NOT EXISTS `demands` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`),
  KEY `demand_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Άδειασμα δεδομένων του πίνακα `demands`
--

INSERT INTO `demands` (`id`, `country_id`, `product_id`, `quantity`, `price`) VALUES
(1, 4, 1, 12, 12),
(5, 4, 7, 1000, 3),
(7, 1, 3, 500, 4),
(9, 1, 7, 501, 2.3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `demos`
--

CREATE TABLE IF NOT EXISTS `demos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Άδειασμα δεδομένων του πίνακα `demos`
--

INSERT INTO `demos` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(2, 'A title once again Edited', 'And the post body follows. Edited', '2014-12-21 11:29:00', '2014-12-25 20:25:00', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-12-21 11:29:01', NULL, NULL),
(5, 'ÎŸ Ï†Ï„Ï‰Ï‡Î¿ÏÎ»Î·Ï‚ Ï„Î¿Ï… Î¸ÎµÎ¿Ï', 'Î.ÎšÎ±Î¶Î±Î½Ï„Î¶Î¬ÎºÎ·Ï‚', '2014-12-21 11:52:36', '2014-12-21 11:52:36', NULL),
(14, 'Oliver twist edited 2', 'Oliver twist edited 2', '2014-12-25 20:54:32', '2014-12-26 10:18:44', 18),
(15, 'O xristos ksanastaurwnetai', 'Kazantzakis Nikos', '2014-12-26 10:20:04', '2014-12-26 10:20:04', 18);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `factories`
--

CREATE TABLE IF NOT EXISTS `factories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `county` varchar(11) NOT NULL,
  `region` varchar(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(30) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Άδειασμα δεδομένων του πίνακα `factories`
--

INSERT INTO `factories` (`id`, `user_id`, `county`, `region`, `tax`, `name`, `type`, `telephone`) VALUES
(1, 1, 'HERAKLION', 'HERAKLION', 4545, 'MARIA KOUTSOGIANNAKI', '454', '+302810311406'),
(8, 6, 'heraklion', 'messara', 70016, 'Myros Apostolakis Elaiourgeio', '345', '281040650'),
(15, 3, 'messara', 'Heraklion', 70016, 'my factory', '300', '281041063');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `merges`
--

CREATE TABLE IF NOT EXISTS `merges` (
  `M_Id` int(10) NOT NULL AUTO_INCREMENT,
  `demand_id` int(10) DEFAULT NULL,
  `offer_id` int(10) DEFAULT NULL,
  `round_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`M_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Άδειασμα δεδομένων του πίνακα `merges`
--

INSERT INTO `merges` (`M_Id`, `demand_id`, `offer_id`, `round_id`) VALUES
(1, 1, 150, 1),
(2, 5, 23, 10),
(3, 7, 8, 3),
(4, 9, 23, 13),
(5, 1, 166, 2),
(6, 5, 133, 11),
(7, 7, 24, 4),
(8, 9, 133, 14),
(9, 5, 164, 12),
(10, 7, 30, 5),
(11, 9, 164, 15),
(12, 7, 31, 6),
(13, 7, 105, 7),
(14, 7, 140, 8),
(15, 7, 162, 9);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `factory_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `factory_id` (`factory_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

--
-- Άδειασμα δεδομένων του πίνακα `offers`
--

INSERT INTO `offers` (`factory_id`, `product_id`, `quantity`, `price`, `id`) VALUES
(8, 3, 656, 5, 8),
(1, 7, 200, 5, 23),
(8, 3, 800, 1, 24),
(1, 3, 150, 45, 30),
(1, 3, 500, 8, 31),
(1, 3, 200, 546, 105),
(15, 7, 200, 3, 133),
(1, 3, 200, 3, 140),
(15, 1, 200, 3, 150),
(15, 3, 500, 5, 162),
(1, 7, 200, 2.8, 164),
(15, 1, 3, 7, 166);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Άδειασμα δεδομένων του πίνακα `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(1, 'The title', 'This is the post body.', '2014-12-21 11:29:00', NULL, NULL),
(2, 'A title once again', 'And the post body follows.', '2014-12-21 11:29:00', NULL, NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-12-21 11:29:01', NULL, NULL),
(5, 'ÎŸ Ï†Ï„Ï‰Ï‡Î¿ÏÎ»Î·Ï‚ Ï„Î¿Ï… Î¸ÎµÎ¿Ï', 'Î.ÎšÎ±Î¶Î±Î½Ï„Î¶Î¬ÎºÎ·Ï‚', '2014-12-21 11:52:36', '2014-12-21 11:52:36', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`id`, `name`, `created`, `modified`) VALUES
(1, 'OLIVE OIL  - EXTRA VIRGIN', '2014-12-24 15:36:45', '2014-12-29 08:34:27'),
(2, 'OLIVE OIL - VIRGIN', '2014-12-24 15:36:45', '2014-12-03 00:00:00'),
(3, 'OLIVE OIL - BIOLOGICAL', '2014-12-25 09:16:28', '2014-12-25 09:16:49'),
(7, 'Pyrinelaio', '2014-12-27 01:25:16', '2014-12-27 01:25:16'),
(9, 'WINE', '2014-12-28 08:18:13', '2015-03-22 15:01:02');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `PH` varchar(10) NOT NULL,
  `package` varchar(10) NOT NULL,
  `certification` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `offer_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `offer_id` (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Άδειασμα δεδομένων του πίνακα `properties`
--

INSERT INTO `properties` (`id`, `product_id`, `PH`, `package`, `certification`, `size`, `offer_id`) VALUES
(72, 7, '<2', 'NONE', 'YES', '<1', 133),
(86, 1, '2-4', 'BOTTLE', 'YES', '1-5', 150),
(115, 3, '2-4', 'BOTTLE', 'YES', '1-5', 162),
(119, 3, '2-4', 'NONE', 'YES', '<1', 164),
(120, 1, '2-4', 'NONE', 'YES', '1-5', 166),
(122, 1, '<2', 'NONE', 'YES', '<1', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `M_Id` int(10) NOT NULL AUTO_INCREMENT,
  `demand_id` int(10) DEFAULT NULL,
  `offer_id` int(10) DEFAULT NULL,
  `round_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`M_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Άδειασμα δεδομένων του πίνακα `temp`
--

INSERT INTO `temp` (`M_Id`, `demand_id`, `offer_id`, `round_id`) VALUES
(1, 1, 150, 1),
(2, 1, 166, 2),
(3, 7, 8, 3),
(4, 7, 24, 4),
(5, 7, 30, 5),
(6, 7, 31, 6),
(7, 7, 105, 7),
(8, 7, 140, 8),
(9, 7, 162, 9),
(10, 5, 23, 10),
(11, 5, 133, 11),
(12, 5, 164, 12),
(13, 9, 23, 13),
(14, 9, 133, 14),
(15, 9, 164, 15);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('elaiourgeio','admin','','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES
(1, 'test1', 'test1', 'test@gmail.com', 'f8e2faaf14680c21726078681582c45adfdf03a2', 'elaiourgeio'),
(2, 'administrator', 'admin', 'admin@yahoo.com', 'b8618d99ef3d99481cb52a92be7668656b740d93', 'admin'),
(3, 'myapos', 'myapos', 'myapos@yahoo.com', '0108b53d87f812f3b05b52cd20db4ad5a8bbf927', 'elaiourgeio'),
(6, 'myros', 'myros', 'myapos@yahoo.com', 'f88a5652d93d6c1c21b9e4ad4ea54bccdfc23df0', 'elaiourgeio'),
(8, 'myros1', 'myros1', 'myapos@yahoo.com', '31e93c4f5d3ad50b505b945d7756d8337b42390c', 'elaiourgeio'),
(9, 'testfinal', 'testfinal', 'testfinal@gmail.com', 'e256134fb8a9115a4a6c41d291ae712114e96215', 'elaiourgeio');

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `demands`
--
ALTER TABLE `demands`
  ADD CONSTRAINT `country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demand_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `factories`
--
ALTER TABLE `factories`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `factory_id` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `offer_id` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
