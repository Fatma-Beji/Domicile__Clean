-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Mai 2022 à 23:25
-- Version du serveur :  5.6.21
-- Version de PHP :  5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `domicileclean`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`idad` int(11) NOT NULL,
  `nomad` varchar(30) NOT NULL,
  `passwordad` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idad`, `nomad`, `passwordad`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
`ida` int(8) NOT NULL,
  `namea` varchar(30) NOT NULL,
  `adra` varchar(30) NOT NULL,
  `villea` varchar(30) NOT NULL,
  `maila` varchar(30) NOT NULL,
  `notea` varchar(30) NOT NULL,
  `gendera` varchar(30) NOT NULL,
  `agea` varchar(30) NOT NULL,
  `imga` varchar(255) NOT NULL,
  `tela` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `agent`
--

INSERT INTO `agent` (`ida`, `namea`, `adra`, `villea`, `maila`, `notea`, `gendera`, `agea`, `imga`, `tela`) VALUES
(2, 'Alex', 'aa', 'Antarctica', 'Alex@gmail.com', '23', 'Female', '23', 't1.png', '3456'),
(3, 'alice', 'sousse', 'Algeria', 'alice@email', '23', 'Female', '21', 'user2.png', '34'),
(5, 'meyssem', 'sousse', 'Kairouan', 'fatma@email', '23', 'Female', '21', 't2.png', '99945607');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`idcl` int(8) NOT NULL,
  `namecl` varchar(30) NOT NULL,
  `adrcl` varchar(30) NOT NULL,
  `telcl` varchar(30) NOT NULL,
  `mailcl` varchar(30) NOT NULL,
  `passwordcl` varchar(30) NOT NULL,
  `imgcl` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idcl`, `namecl`, `adrcl`, `telcl`, `mailcl`, `passwordcl`, `imgcl`) VALUES
(16, 'jacob', 'sousse', '123', 'jacob@ja', '123', 'admin'),
(17, 'jacob', 'sousse', '123', 'jacob@ja', '123', 'admin'),
(18, 'a', 'g', 'g', 'f', 'g', 'pexels-photo-220453.jpeg'),
(19, 'aa', 'aa', '23', 'aa', 'aa', 'pexels-photo-220453.jpeg'),
(20, 'fatma', 'kairouan', '99945607', 'fatma@email', '123', '2');

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE IF NOT EXISTS `domaine` (
`idd` int(8) NOT NULL,
  `nomd` varchar(30) NOT NULL,
  `desc` text NOT NULL,
  `imgd` text NOT NULL,
  `refd` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `domaine`
--

INSERT INTO `domaine` (`idd`, `nomd`, `desc`, `imgd`, `refd`) VALUES
(31, 'Cleaning', 'Cleaning', 'bucket.png', '111'),
(32, 'Ironing', 'Ironing', 'iron.png', '222'),
(33, 'Gardening', 'Gardening', 'man.png', '333'),
(34, 'Supporting Children', 'Children', 'mother.png', '444'),
(35, 'Animals Breeding', 'Animals ', 'animal-kingdom.png', '555'),
(39, 'dressage', 'a', 'kisspng-maid-service-cleaner-miranda-s-cleaning-housekeepi-cleaning-service-5b0d3a96d831c5.6264884715275936228855.jpg', '12');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`ids` int(8) NOT NULL,
  `noms` varchar(30) NOT NULL,
  `materiel` varchar(225) NOT NULL,
  `idd` int(8) DEFAULT NULL,
  `nomd` varchar(30) NOT NULL,
  `descs` text NOT NULL,
  `imgs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`ids` int(8) NOT NULL,
  `noms` varchar(30) NOT NULL,
  `refs` varchar(30) NOT NULL,
  `descs` varchar(30) NOT NULL,
  `nomd` varchar(30) NOT NULL,
  `ims` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`ids`, `noms`, `refs`, `descs`, `nomd`, `ims`) VALUES
(9, 'Carpet Cleaning', '111', 'Carpet Cleaning', 'Cleaning', 'service-carpet-cleaning.jpg'),
(10, 'Window Cleaning', '222', 'Window Cleaning', 'Cleaning', 'vitre.jpg'),
(11, 'Washing the dishes', '4455', 'Washing the dishes', 'Cleaning', '10507437.webp'),
(12, 'Washing Clothes', '456', 'Washing Clothes', 'Cleaning', 'eviter-vetement-deteint.jpg'),
(16, 'Watering the plants', '456', 'Watering ', 'Gardening', 'gardening-equipment-for-gardener-with-flowerpots-royalty-free-image-643182988-1555499917.jpg'),
(17, 'Weeding', '678', 'Weeding', 'Gardening', 'The-Joy-of-Weeding.jpg'),
(18, 'Taking Care Of Babies', '788', 'Children', 'Taking Care Of Children', 'baby-happy-nanny.png'),
(19, 'Animals Feeding', '7898', 'Animals', 'Animals Breeding', 'Dog-eating-from-bowl-Alamy-C26KYF-335lc122013.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`idad`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
 ADD PRIMARY KEY (`ida`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`idcl`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
 ADD PRIMARY KEY (`idd`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`ids`), ADD KEY `idd` (`idd`), ADD KEY `idd_2` (`idd`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`ids`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
MODIFY `ida` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
MODIFY `idcl` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
MODIFY `idd` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
MODIFY `ids` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
MODIFY `ids` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
ADD CONSTRAINT `servicepk1` FOREIGN KEY (`idd`) REFERENCES `domaine` (`idd`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
