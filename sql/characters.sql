-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 09:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aftermath`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `charID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `charName` varchar(30) DEFAULT NULL,
  `ethnicity` text,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `hairColor` text,
  `hairStyle` text,
  `eyeColor` text,
  `build` text,
  `habitat` text,
  `background` text NOT NULL,
  `MEM` int(11) NOT NULL,
  `LOG` int(11) NOT NULL,
  `PER` int(11) NOT NULL,
  `WILL` int(11) NOT NULL,
  `CHA` int(11) NOT NULL,
  `STR` int(11) NOT NULL,
  `END` int(11) NOT NULL,
  `DEX` int(11) NOT NULL,
  `SPD` int(11) NOT NULL,
  `BTY` int(11) NOT NULL,
  `SEQ` int(11) NOT NULL,
  `ACT` int(11) NOT NULL,
  `BLOCK` int(11) NOT NULL,
  `DODGE` int(11) NOT NULL,
  `UNARM` int(11) NOT NULL,
  `GRAPPLE` int(11) NOT NULL,
  `OFF` int(11) NOT NULL,
  `SHORTW` int(11) NOT NULL,
  `LONGW` int(11) NOT NULL,
  `TWOHW` int(11) NOT NULL,
  `CHAIN` int(11) NOT NULL,
  `THROW` int(11) NOT NULL,
  `ARCH` int(11) NOT NULL,
  `ONEHGUNS` int(11) NOT NULL,
  `TWOHGUNS` int(11) NOT NULL,
  `BURST` int(11) NOT NULL,
  `SPECIAL` int(11) NOT NULL,
  `WSYS` int(11) NOT NULL,
  `STEALTH` int(11) NOT NULL,
  `CLIMB` int(11) NOT NULL,
  `NEGOT` int(11) NOT NULL,
  `NAVIG` int(11) NOT NULL,
  `SURVIVAL` int(11) NOT NULL,
  `CRAFTING` int(11) NOT NULL,
  `EXP` int(11) DEFAULT NULL,
  `remEXP` int(11) DEFAULT NULL,
  `idMarks` varchar(30) DEFAULT NULL,
  `skill1` varchar(30) DEFAULT NULL,
  `skill2` varchar(30) DEFAULT NULL,
  `skill3` varchar(30) DEFAULT NULL,
  `skill4` varchar(30) DEFAULT NULL,
  `skill5` varchar(30) DEFAULT NULL,
  `skill6` varchar(30) DEFAULT NULL,
  `skill7` varchar(30) DEFAULT NULL,
  `skill8` varchar(30) DEFAULT NULL,
  `skill9` varchar(30) DEFAULT NULL,
  `skill10` varchar(30) DEFAULT NULL,
  `skill11` varchar(30) DEFAULT NULL,
  `skill12` varchar(30) DEFAULT NULL,
  `skill13` varchar(30) DEFAULT NULL,
  `skill14` varchar(30) DEFAULT NULL,
  `skill15` varchar(30) DEFAULT NULL,
  `skill16` varchar(30) DEFAULT NULL,
  `skill17` varchar(30) DEFAULT NULL,
  `skill18` varchar(30) DEFAULT NULL,
  `skill19` varchar(30) DEFAULT NULL,
  `skill20` varchar(30) DEFAULT NULL,
  `skillRate1` int(11) DEFAULT NULL,
  `skillRate2` int(11) DEFAULT NULL,
  `skillRate3` int(11) DEFAULT NULL,
  `skillRate4` int(11) DEFAULT NULL,
  `skillRate5` int(11) DEFAULT NULL,
  `skillRate6` int(11) DEFAULT NULL,
  `skillRate7` int(11) DEFAULT NULL,
  `skillRate8` int(11) DEFAULT NULL,
  `skillRate9` int(11) DEFAULT NULL,
  `skillRate10` int(11) DEFAULT NULL,
  `skillRate11` int(11) DEFAULT NULL,
  `skillRate12` int(11) DEFAULT NULL,
  `skillRate13` int(11) DEFAULT NULL,
  `skillRate14` int(11) DEFAULT NULL,
  `skillRate15` int(11) DEFAULT NULL,
  `skillRate16` int(11) DEFAULT NULL,
  `skillRate17` int(11) DEFAULT NULL,
  `skillRate18` int(11) DEFAULT NULL,
  `skillRate19` int(11) DEFAULT NULL,
  `skillRate20` int(11) DEFAULT NULL,
  `advSkill1` varchar(30) DEFAULT NULL,
  `advSkill2` varchar(30) DEFAULT NULL,
  `advSkill3` varchar(30) DEFAULT NULL,
  `advSkill4` varchar(30) DEFAULT NULL,
  `advSkill5` varchar(30) DEFAULT NULL,
  `advSkill6` varchar(30) DEFAULT NULL,
  `advSkill7` varchar(30) DEFAULT NULL,
  `advSkill8` varchar(30) DEFAULT NULL,
  `advSkillRate1` int(11) DEFAULT NULL,
  `advSkillRate2` int(11) DEFAULT NULL,
  `advSkillRate3` int(11) DEFAULT NULL,
  `advSkillRate4` int(11) DEFAULT NULL,
  `advSkillRate5` int(11) DEFAULT NULL,
  `advSkillRate6` int(11) DEFAULT NULL,
  `advSkillRate7` int(11) DEFAULT NULL,
  `advSkillRate8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`charID`),
  ADD UNIQUE KEY `charName` (`charName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `charID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
