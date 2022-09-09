-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonbagay`
--
CREATE DATABASE IF NOT EXISTS `bonbagay` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bonbagay`;

-- --------------------------------------------------------

--
-- Table structure for table `achats`
--

CREATE TABLE IF NOT EXISTS `achats` (
  `ID_ACHAT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENT` int(11) NOT NULL,
  `ID_ARTICLE` int(11) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `DATEs` date NOT NULL,
  `PRIX` double(9,3) NOT NULL,
  PRIMARY KEY (`ID_ACHAT`),
  KEY `id_article` (`ID_ARTICLE`),
  KEY `id_client` (`ID_CLIENT`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achats`
--

INSERT INTO `achats` (`ID_ACHAT`, `ID_CLIENT`, `ID_ARTICLE`, `QUANTITE`, `DATEs`, `PRIX`) VALUES
(2, 24, 1, 67, '2022-09-07', 0.000);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_A` varchar(50) NOT NULL,
  `NOM_A` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(200) DEFAULT NULL,
  `PRIX` float NOT NULL,
  `QUANTITE` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `NUM_A`, `NOM_A`, `DESCRIPTION`, `PRIX`, `QUANTITE`) VALUES
(1, '', 'tube', 'ljhh', 1000, 0),
(2, 'tel-938050', 'televiseur lg', 'televiseur a ecran plat de couleur noire 32 pouce', 16000, 10),
(3, 'Ven-979310', 'Ventilateur panas', 'v', 2250, 19);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOCLIENTS` varchar(100) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `PRENOM` varchar(100) NOT NULL,
  `SEXE` text NOT NULL,
  `DATENAISSANCE` date DEFAULT NULL,
  `ADDRESSE` varchar(200) NOT NULL,
  `CODEPOSTAL` varchar(10) NOT NULL,
  `VILLE` varchar(100) NOT NULL,
  `PAYS` varchar(50) NOT NULL DEFAULT 'France',
  `TELEPHONE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID`, `NOCLIENTS`, `NOM`, `PRENOM`, `SEXE`, `DATENAISSANCE`, `ADDRESSE`, `CODEPOSTAL`, `VILLE`, `PAYS`, `TELEPHONE`) VALUES
(24, 'luc-792549', 'lucas', 'belveder', 'Masculin', '2022-10-10', 'rue de la reunion', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(30, 'lui-262369', 'luis', 'albinader', 'Masculin', '2022-10-10', 'st dmg', 'rd-7889', 'santiago', 'rd', '46555698'),
(31, 'lui-226709', 'luis', 'albinader', 'Masculin', '2022-10-10', 'st dmg', 'rd-7889', 'santiago', 'rd', '46555698'),
(32, 'lui-235317', 'luis', 'albinader', 'Masculin', '2022-10-10', 'st dmg', 'rd-7889', 'santiago', 'rd', '46555698'),
(33, 'lui-603681', 'luis', 'albinader', 'Masculin', '2022-10-10', 'st dmg', 'rd-7889', 'santiago', 'rd', '46555697');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` text NOT NULL,
  `PRENOM` text NOT NULL,
  `NOM_UTILISATEUR` varchar(255) NOT NULL,
  `E_MAIL` varchar(255) NOT NULL,
  `POSTES` text NOT NULL,
  `TELEPHONE` text NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  `MOT_DE_PASSE_CONF` varchar(255) NOT NULL,
  `USER_TYPE` text NOT NULL DEFAULT 'user_simple',
  `ETAT` text NOT NULL,
  `NIVEAU` int(10) NOT NULL,
  `Profile` binary(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NOM_UTILISATEUR` (`NOM_UTILISATEUR`),
  UNIQUE KEY `E_MAIL` (`E_MAIL`),
  UNIQUE KEY `TELEPHONE` (`TELEPHONE`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `NOM`, `PRENOM`, `NOM_UTILISATEUR`, `E_MAIL`, `POSTES`, `TELEPHONE`, `MOT_DE_PASSE`, `MOT_DE_PASSE_CONF`, `USER_TYPE`, `ETAT`, `NIVEAU`, `Profile`) VALUES
(24, 'Bastien', 'yvenord', 'leAdmin001', 'killerbestshoot@gmail.com', 'vendeur', '+50946555695', 'admin001', 'admin001', 'vendeur', 'active', 5, 0x300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `achats_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `achats_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `clients` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
