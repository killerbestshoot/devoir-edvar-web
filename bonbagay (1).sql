-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 07:16 AM
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
  `id_achat` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_achat`),
  KEY `id_article` (`id_article`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID`, `NOCLIENTS`, `NOM`, `PRENOM`, `SEXE`, `DATENAISSANCE`, `ADDRESSE`, `CODEPOSTAL`, `VILLE`, `PAYS`, `TELEPHONE`) VALUES
(12, 'Yve-576480', 'Yvenord Jean Nance', 'Bastien', 'Masculin', '0000-00-00', 'Tabbare 43', 'HT7110', 'Port au prince', '', '46555695'),
(13, 'Yve-459577', 'Yvenord Jean Nance', 'Bastien', 'Masculin', '0000-00-00', 'Tabbare 43', 'HT7110', 'Port au prince', '', '46555695'),
(14, 'lub-161228', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(15, 'lub-679142', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(16, 'lub-840104', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(17, 'lub-797466', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(18, 'lub-265992', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(19, 'lub-517815', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(20, 'lub-141700', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(21, 'lub-447358', 'lubin', 'desinus', 'Masculin', '2022-10-10', 'juvenat 3 pv', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(22, 'jho-499705', 'jhon', '', 'Feminin', '2022-10-10', 'Tabbare 43', 'HT7110', 'Port au prince', '', '46555695'),
(23, 'luc-115384', 'lucas', 'belveder', 'Masculin', '2022-10-10', 'rue de la reunion', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(24, 'luc-792549', 'lucas', 'belveder', 'Masculin', '2022-10-10', 'rue de la reunion', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(25, 'luc-154024', 'lucas', 'belveder', 'Masculin', '2022-10-10', 'rue de la reunion', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(26, 'luc-598648', 'lucas', 'doe', 'Feminin', '2022-10-10', 'Tabbare 43', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(27, 'luc-182446', 'lucas', 'doe', 'Feminin', '2022-10-10', 'Tabbare 43', 'HT7110', 'Port au prince', 'haiti', '46555695'),
(28, 'Don-638915', 'Donley', 'Bonheur', 'Masculin', '1980-01-01', 'Delmas 31', 'HT-2356', 'Port au prince', 'Haiti', '44780987');

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
(24, 'Bastien', 'yvenord', 'babaskiller', 'killerbestshoot@gmail.com', 'vendeur', '+50946555695', 'killer3500', 'killer350', 'vendeur', 'active', 5, 0x300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `achats_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`reference`) ON UPDATE CASCADE,
  ADD CONSTRAINT `achats_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `clients` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
