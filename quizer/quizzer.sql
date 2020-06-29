-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 juin 2020 à 18:11
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quizzer`
--

-- --------------------------------------------------------

--
-- Structure de la table `choice`
--

DROP TABLE IF EXISTS `choice`;
CREATE TABLE IF NOT EXISTS `choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_question` (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `choice`
--

INSERT INTO `choice` (`id`, `question_id`, `is_correct`, `text`) VALUES
(1, 1, 1, '$_GET[]'),
(40, 6, 1, 'null'),
(4, 1, 0, 'Reset.from'),
(30, 4, 0, '0'),
(29, 4, 0, '2'),
(28, 4, 0, '3'),
(27, 4, 1, '1'),
(9, 1, 0, '$_SERVER[]'),
(10, 1, 0, '$_FILE[]'),
(11, 2, 0, 'Create Myfunction'),
(12, 2, 0, 'Myfunction Create'),
(13, 2, 1, 'function myFunc()'),
(14, 2, 0, 'New Function()'),
(26, 5, 0, 'C++'),
(25, 5, 0, 'JAVASCRIPT'),
(24, 5, 1, 'PYTHON'),
(23, 5, 0, 'PHP'),
(43, 6, 0, 'C'),
(42, 6, 0, 'B'),
(41, 6, 0, 'A'),
(35, 3, 1, 'futur'),
(36, 3, 0, 'dad'),
(37, 3, 0, 'daa'),
(38, 3, 0, 'dddda'),
(39, 3, 0, 'dada');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL,
  `Text` text NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_id`, `Text`) VALUES
(1, 'How do you get information from a form that is submitted using the \"get\" method?'),
(2, 'What is the correct way to create a function in PHP?\r\n\r\n'),
(5, 'what the best backend language in the history '),
(4, 'how much parameter take the function mysqli->query()'),
(6, 'what is that?'),
(3, 'why programation?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
