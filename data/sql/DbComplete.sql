CREATE DATABASE `z2d2-tuto` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

use `z2d2-tuto`;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO"; 
SET time_zone = "+00:00"; 

-- 
-- Base de données: `z2d2-tuto` 
-- 

-- -------------------------------------------------------- 

-- 
-- Structure de la table `Album` 
-- 

DROP TABLE IF EXISTS `Album`; 
CREATE TABLE IF NOT EXISTS `Album` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `artist` varchar(100) NOT NULL, 
  `title` varchar(100) NOT NULL, 
  PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------------------- 

--
-- Données exemples :
--

INSERT INTO `Album` (artist, title) VALUES 
  ('The  Military  Wives',  'In  My  Dreams'),
  ('Adele',  '21'),
  ('Bruce  Springsteen',  'Wrecking Ball (Deluxe)'),
  ('Lana  Del  Rey',  'Born  To  Die'),
  ('Gotye',  'Making  Mirrors');

