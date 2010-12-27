-- phpMyAdmin SQL Dump
-- version 3.2.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2010 at 05:26 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pencaksilat`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `idcomment` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `commentdate` datetime NOT NULL,
  PRIMARY KEY (`idcomment`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idcomment`, `userid`, `articleid`, `comment`, `commentdate`) VALUES
(1, 3, 7, 'evwevwev', '2010-12-28 03:47:00'),
(2, 3, 7, '43y334b34bwebgs', '2010-12-28 04:22:00'),
(3, 3, 6, ' fwewegwevwev', '2010-12-28 04:23:00'),
(5, 3, 7, ' evwevwecwec', '2010-12-28 04:40:00'),
(6, 4, 7, ' evwevewvwewecwecwec', '2010-12-28 04:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `articleid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `postdate` datetime NOT NULL,
  PRIMARY KEY (`articleid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`articleid`, `userid`, `title`, `content`, `postdate`) VALUES
(11, 4, 'Buat munculin pagination', 'ini HArus diramanagahai ini aaduk apiu ngetik apa ini gat ua ah tersreah;', '2010-12-28 05:23:00'),
(5, 0, 'Etymology', 'Pencak silat was chosen in 1948 as a unifying term for the Indonesian fighting styles. It was a compound of the two most commonly used words for martial arts in Indonesia. Pencak was the term used in central and east Java, while silat was used in Sumatra. In modern usage, pencak and silat are seen as being two aspects of the same practice. Pencak is the performance aspects of the martial art, while silat is the essence of the fighting and self-defense.\n\nThe origin of the words pencak and silat have not been proven. Some believe that pencak comes from the Sanskrit word pancha meaning five, or from the Chinese pencha meaning avert or deflect. The most prominent origin theory of the word silat is that it derives from sekilat which means "as (fast as) lightning". This may have been used to describe a warrior''s movements before eventually being shortened to silat. Some believe it may come from the word elat which means to fool or trick. The word pencak appeared in the Malay language as early as Adat Raja Melayu the text: 1779; manuscripts: 1817, 1873, provenance: text & manuscripts: Melaka.[2]', '2010-12-27 02:35:00'),
(6, 0, 'International Competitions', 'The major international competition is Pencak Silat World Championship, organised by PERSILAT.[4] This competition takes place every 2 or 3 years period. More than 30 national teams competed in the latest tournament in Jakarta, 12-17 December 2010.', '2010-12-27 10:01:00'),
(7, 0, 'Sejarah Of Pencaksilat', '     The pencak silat tradition is mostly oral, having been passed down almost entirely by word of mouth. In the absence of written records, much of its history is known only through myth and archaeological evidence. The primary weapons of Indonesia''s tribal peoples were the single-edge sword, shield and javelin. The inhabitants of Nias Island had until the 20th century remained largely untouched by the outside world. However, they are culturally similar to the Himalayan Naga tribe. Neighbouring Sumatrans are said to have left the Nias people alone because they were fearless warriors.    ', '2010-12-27 10:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(5) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `type`) VALUES
(3, 'ubu', '562bdb388c042b36a24d8c6572267da2', 'ubu@ubu.com', 'user'),
(4, 'obo', '7f5b75c5bb4879bcede64d1f80bad9ad', 'obo@obo.com', 'admin'),
(5, 'uhu', 'ee6b4548f10eadbac6e13fe798c4f831', 'uhu@uhu.com', 'user');
