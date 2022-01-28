-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 06 juin 2021 à 22:59
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `capsule`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `tel` int(20) NOT NULL,
  `dateF` date NOT NULL,
  `dateT` date NOT NULL,
  `nbPpl` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`tel`, `dateF`, `dateT`, `nbPpl`) VALUES
(4852, '2021-03-04', '2021-03-05', 5);

-- --------------------------------------------------------

--
-- Structure de la table `lesclient`
--

CREATE TABLE `lesclient` (
  `namee` varchar(20) NOT NULL,
  `emaill` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dayy` int(20) NOT NULL,
  `monthh` int(20) NOT NULL,
  `yearr` int(20) NOT NULL,
  `genderr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lesclient`
--

INSERT INTO `lesclient` (`namee`, `emaill`, `pwd`, `dayy`, `monthh`, `yearr`, `genderr`) VALUES
('ziad boudihaj', 'ziad@gmail.com', 'azeRTY123', 4, 1, 1998, 'Male'),
('sdsd', '', 'azeRTY123', 12, 12, 12557, 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
