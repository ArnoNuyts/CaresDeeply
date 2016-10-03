-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `fredrgc115_cal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fredrgc115_cal`;

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` varchar(255) CHARACTER SET latin1 NOT NULL,
  `editCode` varchar(40) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `lineup` text NOT NULL,
  `genre` text NOT NULL,
  `date` date NOT NULL,
  `from` time NOT NULL,
  `till` varchar(5) NOT NULL,
  `canceled` tinyint(1) NOT NULL,
  `checkYourNetwork` tinyint(1) NOT NULL,
  `venueName` text NOT NULL,
  `venueAddress` text NOT NULL,
  `venueWebsite` text NOT NULL,
  `venueLatitude` varchar(20) DEFAULT NULL,
  `venueLongitude` varchar(20) DEFAULT NULL,
  `venueZoom` tinyint(2) unsigned NOT NULL,
  `facebook` text NOT NULL,
  `website` text NOT NULL,
  `flyer` text NOT NULL,
  `priceChange` tinyint(1) NOT NULL,
  `priceChangePrice` varchar(10) DEFAULT NULL,
  `priceChangeTime` varchar(5) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `freeToilet` tinyint(1) NOT NULL,
  `volontaryContribution` tinyint(4) NOT NULL,
  `status` enum('unknown','rejected','accepted') NOT NULL,
  `email` text NOT NULL,
  `ticket` tinyint(1) NOT NULL,
  `ticketPrice` varchar(10) DEFAULT NULL,
  `ticketWebsite` text NOT NULL,
  `ticketOffline` text NOT NULL,
  `log` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `date_2` (`date`),
  KEY `from` (`from`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `events` (`id`, `editCode`, `name`, `type`, `lineup`, `genre`, `date`, `from`, `till`, `canceled`, `checkYourNetwork`, `venueName`, `venueAddress`, `venueWebsite`, `venueLatitude`, `venueLongitude`, `venueZoom`, `facebook`, `website`, `flyer`, `priceChange`, `priceChangePrice`, `priceChangeTime`, `price`, `freeToilet`, `volontaryContribution`, `status`, `email`, `ticket`, `ticketPrice`, `ticketWebsite`, `ticketOffline`, `log`) VALUES

('test',	'c68e58ab6f33000d98dcc605a3ad7a8a21d21fb3',	'test',	'Party',	'test',	'test',	'2021-12-20',	'21:00:00',	'21:00',	0,	0,	'test',	'test',	'',	'',	'',	18,	'',	'',	'',	0,	'1',	'21:00',	1.00,	0,	0,	'accepted',	'test@test.be',	0,	'1',	'',	'test',	'2016-04-08 13:51:28	Create event	none\n2016-04-08 17:35:39	Update event	Fred\n2016-04-08 17:54:29	Update status to accepted	Fred\n'),
('test1',	'8e19d482833063570fb9fa0e567a8dafee2d44f8',	'test',	'Party',	'test',	'test',	'2021-12-20',	'21:00:00',	'21:00',	0,	0,	'test',	'test',	'',	'',	'',	18,	'',	'',	'',	0,	'1',	'21:00',	1.00,	0,	0,	'unknown',	'test@test.be',	0,	'1',	'',	'test',	'2016-04-08 14:19:09	Create event	none\n'),
('test2',	'061c6a630022ef35c2a7a35dd284541b83ceb432',	'test',	'Party',	'test',	'test',	'2021-12-20',	'21:00:00',	'21:00',	0,	0,	'test',	'test',	'',	'',	'',	18,	'',	'',	'',	0,	'1',	'21:00',	1.00,	0,	0,	'unknown',	'test@test.be',	0,	'1',	'',	'test',	'2016-04-08 14:40:43	Create event	none\n'),
('test3',	'917d9131996c0dd827bfdbfb9306a77c56beb59d',	'test',	'Party',	'test',	'test',	'2021-12-20',	'21:00:00',	'21:00',	0,	0,	'test',	'test',	'',	'',	'',	18,	'',	'',	'',	0,	'1',	'21:00',	1.00,	0,	0,	'unknown',	'test@test.be',	0,	'1',	'',	'test',	'2016-04-08 16:08:03	Create event	none\n'),
('test4',	'c63782a94aa22f92a89dab3153da4eca20f7cdd2',	'test',	'Party',	'test',	'test',	'2021-12-20',	'21:00:00',	'21:00',	0,	0,	'test',	'test',	'',	'',	'',	18,	'',	'',	'',	0,	'1',	'21:00',	1.00,	0,	0,	'unknown',	'test@test.be',	0,	'1',	'',	'test',	'2016-04-08 16:22:55	Create event	none\n'),
('test5',	'7d6d510e9ac2615a3e20a31ac5f3fab205ce8cd2',	'test',	'Party',	'test',	'test',	'2021-12-20',	'21:00:00',	'21:00',	0,	0,	'test',	'test',	'',	'',	'',	18,	'',	'',	'',	0,	'1',	'21:00',	1.00,	0,	0,	'unknown',	'test@test.be',	0,	'1',	'',	'test',	'2016-04-08 16:24:08	Create event	none\n'),
('test6',	'c5d34e1967c581ac01fc981f738b0128c700c751',	'test',	'Party',	'test',	'test',	'2021-12-20',	'21:00:00',	'21:00',	0,	0,	'test',	'test',	'',	'',	'',	18,	'',	'',	'',	0,	'1',	'21:00',	1.00,	0,	0,	'unknown',	'test@test.be',	0,	'1',	'',	'test',	'2016-04-08 16:26:02	Create event	none\n’);

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

INSERT INTO `genres` (`id`, `name`) VALUES
(1,	'House'),
(2,	'Hardcore'),
(3,	'Hiphop'),
(4,	'Drum and Bass'),
(5,	'Acid'),
(6,	'Jungle'),
(7,	'Techno'),
(8,	'Tekno'),
(9,	'Garage'),
(10,	'Elektro'),
(11,	'Dubstep'),
(12,	'Grime'),
(13,	'Funk'),
(14,	'Soul'),
(15,	'Jazz'),
(16,	'Disco'),
(17,	'Goa'),
(18,	'Trance'),
(19,	'Electronica'),
(20,	'Dancehall'),
(21,	'Reggae'),
(22,	'Booty'),
(23,	'Opera'),
(24,	'Lecture'),
(25,	'People\'s kitchen'),
(26,	'Punk'),
(27,	'Cinema'),
(28,	'Freeparty'),
(29,	'Dub'),
(30,	'Ska'),
(31,	'World'),
(32,	'Folk'),
(33,	'Rhythm and Blues'),
(34,	'Rock'),
(35,	'Metal'),
(36,	'Rap'),
(37,	'Open Mic'),
(38,	'Jam'),
(39,	'Cabaret'),
(40,	'Noise'),
(41,	'Bass'),
(42,	'Ambient'),
(43,	'Industrial'),
(44,	'Gnawa'),
(46,	'Pop'),
(47,	'Beats'),
(48,	'Psychedelic'),
(49,	'Tropical'),
(50,	'Moody'),
(51,	'Experimental'),
(52,	'Expo'),
(53,	'Installation'),
(54,	'Decor'),
(55,	'Visuals'),
(56,	'Black Metal'),
(57,	'Nu-wave'),
(58,	'Surf'),
(59,	'Kwaito'),
(60,	'Kuduro'),
(61,	'Baile Funk'),
(62,	'Juke'),
(63,	'film'),
(64,	'Live'),
(65,	'Balkan'),
(66,	'Latino'),
(67,	'Blues'),
(68,	'African'),
(69,	'Happy Hardcore'),
(70,	'Afrobeat'),
(71,	'New Beat'),
(72,	'Post Rock'),
(73,	'Boogie');

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `mailinglist`;
CREATE TABLE `mailinglist` (
  `email` text NOT NULL,
  `addDate` datetime NOT NULL,
  PRIMARY KEY (`email`(50))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(2,	'Admin',	'$P$BDkm8ncfSeUSN6XGU1dNEx4wM34sox/',	'temp@localhost',	1,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	'::1',	'2016-10-03 12:11:41',	'2013-11-15 17:56:29',	'2016-10-03 10:13:21');

DROP TABLE IF EXISTS `user_autologin`;
CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('32603d5d64040923671816d6d5d7245f',	3,	'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36',	'173.245.53.132',	'2016-03-14 11:54:40'),
('671e05db730e14e042475e7835a6da4d',	3,	'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36',	'173.245.53.181',	'2016-03-10 11:43:49');

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `venues`;
CREATE TABLE `venues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `latitude` text,
  `longitude` text,
  `website` text NOT NULL,
  `zoom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO `venues` (`id`, `name`, `address`, `latitude`, `longitude`, `website`, `zoom`) VALUES
(1,	'Le Coq',	'Auguste Ortsstraat 14,\r\n1000 Brussels',	'50.848500986953944',	'4.348617196083069',	'',	'18'),
(2,	'Dali\'s Bar',	'Petit Rue des Bouchers 35,\r\n1000 Brussels',	'50.8479473233233',	'4.353981614112854',	'',	'18'),
(3,	'VK*',	'Schoolstraat 76\r\nRue de L\'ecole 76\r\n1080 Molenbeek',	'50.8560069',	'4.3380567',	'http://www.vkconcerts.be/',	'16'),
(4,	'Recyclart',	'Rue des Ursulines 25, 1000 Brussels',	'50.8419806',	'4.3498714',	'http://www.recyclart.be',	'16'),
(5,	'Barlok',	'Avenue du Port 53, 1000 Bruxelles',	'50.8642784',	'4.35048233292637',	'',	'16'),
(6,	'Au Quai',	'Quai du Hainaut 23 1080 Bruxelles ',	'50.8519822',	'4.33937890096327',	'http://auquai.blogspot.be',	'16'),
(7,	'Beursschouwburg',	'rue auguste orts 20, 1000 Brussel',	'50.8488826',	'4.3481816',	'http://www.beursschouwburg.be/en/#intro',	'16'),
(8,	'Cafe Central',	'Borgval 14, 1000 Brussel',	'50.84768285',	'4.34769130046442',	'http://lecafecentral.com',	'16'),
(9,	'Magasin 4',	'51 B avenue du port, 1000 Bruxelles',	'50.8689097',	'4.3535282',	'http://www.magasin4.be',	'16'),
(10,	'Les Ateliers Claus',	'Crickxstraat 15, 1060 Région de Bruxelles-Capitale',	'50.8277415',	'4.3389523891897',	'http://www.lesateliersclaus.com/fr',	'16'),
(11,	'Allee Du Kaai',	'Havenlaan 53\n1000 Brussel',	'50.8610386',	'4.347233',	'http://www.alleedukaai.be',	'16'),
(13,	'Communa asbl',	'44 avenue des statuaires, Uccle',	'',	'',	'http://www.facebook.com/asblcommuna/',	''),
(15,	'Soul Inn',	'Plattesteen, 18, 1000 Brussels',	'50.84667538563696',	'4.348960518836975',	'https://www.facebook.com/soulinnbrussels/',	'18'),
(16,	'Bokal Royal',	'Rue Royale 123 1000 Bruxelles',	'',	'',	'http://www.123rueroyale.be/',	''),
(17,	'The Lodge',	'Rue François Mus 41\r\nBrussels',	'',	'',	'https://www.facebook.com/Areyouintown-At-the-LODGE-345254252339679/?fref=ts',	''),
(18,	'La Tentation',	'28, Rue de Laekensestraat - 1000 Bruxelles / Brussel',	'',	'',	'http://www.centrogalego.be/',	'');

-- 2016-10-03 10:14:39