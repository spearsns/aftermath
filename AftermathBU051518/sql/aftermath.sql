-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 11:07 PM
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
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `ID` int(11) NOT NULL,
  `campaignName` varchar(30) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `txtFile` varchar(30) DEFAULT NULL,
  `FATE` varchar(30) DEFAULT NULL,
  `FATE_PW` varchar(30) DEFAULT NULL,
  `player` varchar(30) DEFAULT NULL,
  `player_status` int(11) DEFAULT '0',
  `charName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`ID`, `campaignName`, `description`, `txtFile`, `FATE`, `FATE_PW`, `player`, `player_status`, `charName`) VALUES
(2, 'testcampaign', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'chat.txt', 'Overseer', 'testplay', NULL, 0, ''),
(20, 'testcampaign', NULL, 'chat.txt', NULL, NULL, 'Guest', 0, 'Appleseed'),
(22, 'testcampaign', NULL, 'chat.txt', NULL, NULL, 'Tony', 0, 'Brown'),
(25, 'testcampaign', NULL, 'chat.txt', NULL, NULL, 'Overseer', 1, 'Song'),
(26, 'test', 'test', 'test.txt', 'Guest', 'test', NULL, 0, ''),
(27, 'test2', 'test2', 'test2.txt', 'Overseer', 'test2', NULL, 0, ''),
(28, 'FINAL', 'FINAL', 'FINAL.txt', 'Overseer', 'FINAL', NULL, 0, ''),
(29, 'LE', 'LE', 'LE.txt', 'Overseer', 'LE', NULL, 0, '');

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
  `advSkill9` varchar(30) DEFAULT NULL,
  `advSkill10` varchar(30) DEFAULT NULL,
  `advSkill11` varchar(30) DEFAULT NULL,
  `advSkill12` varchar(30) DEFAULT NULL,
  `advSkillRate1` int(11) DEFAULT NULL,
  `advSkillRate2` int(11) DEFAULT NULL,
  `advSkillRate3` int(11) DEFAULT NULL,
  `advSkillRate4` int(11) DEFAULT NULL,
  `advSkillRate5` int(11) DEFAULT NULL,
  `advSkillRate6` int(11) DEFAULT NULL,
  `advSkillRate7` int(11) DEFAULT NULL,
  `advSkillRate8` int(11) DEFAULT NULL,
  `advSkillRate9` int(11) DEFAULT NULL,
  `advSkillRate10` int(11) DEFAULT NULL,
  `advSkillRate11` int(11) DEFAULT NULL,
  `advSkillRate12` int(11) DEFAULT NULL,
  `ability1` varchar(30) DEFAULT NULL,
  `ability2` varchar(30) DEFAULT NULL,
  `ability3` varchar(30) DEFAULT NULL,
  `ability4` varchar(30) DEFAULT NULL,
  `ability5` varchar(30) DEFAULT NULL,
  `ability6` varchar(30) DEFAULT NULL,
  `ability7` varchar(30) DEFAULT NULL,
  `ability8` varchar(30) DEFAULT NULL,
  `ability9` varchar(30) DEFAULT NULL,
  `ability10` varchar(30) DEFAULT NULL,
  `ability11` varchar(30) DEFAULT NULL,
  `ability12` varchar(30) DEFAULT NULL,
  `remEXP` int(11) DEFAULT NULL,
  `totalEXP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`charID`, `username`, `charName`, `ethnicity`, `age`, `sex`, `hairColor`, `hairStyle`, `eyeColor`, `build`, `habitat`, `background`, `MEM`, `LOG`, `PER`, `WILL`, `CHA`, `STR`, `END`, `DEX`, `SPD`, `BTY`, `SEQ`, `ACT`, `BLOCK`, `DODGE`, `UNARM`, `GRAPPLE`, `OFF`, `SHORTW`, `LONGW`, `TWOHW`, `CHAIN`, `THROW`, `ARCH`, `ONEHGUNS`, `TWOHGUNS`, `BURST`, `SPECIAL`, `WSYS`, `STEALTH`, `CLIMB`, `NEGOT`, `NAVIG`, `SURVIVAL`, `CRAFTING`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `skill7`, `skill8`, `skill9`, `skill10`, `skill11`, `skill12`, `skill13`, `skill14`, `skill15`, `skill16`, `skill17`, `skill18`, `skill19`, `skill20`, `skillRate1`, `skillRate2`, `skillRate3`, `skillRate4`, `skillRate5`, `skillRate6`, `skillRate7`, `skillRate8`, `skillRate9`, `skillRate10`, `skillRate11`, `skillRate12`, `skillRate13`, `skillRate14`, `skillRate15`, `skillRate16`, `skillRate17`, `skillRate18`, `skillRate19`, `skillRate20`, `advSkill1`, `advSkill2`, `advSkill3`, `advSkill4`, `advSkill5`, `advSkill6`, `advSkill7`, `advSkill8`, `advSkill9`, `advSkill10`, `advSkill11`, `advSkill12`, `advSkillRate1`, `advSkillRate2`, `advSkillRate3`, `advSkillRate4`, `advSkillRate5`, `advSkillRate6`, `advSkillRate7`, `advSkillRate8`, `advSkillRate9`, `advSkillRate10`, `advSkillRate11`, `advSkillRate12`, `ability1`, `ability2`, `ability3`, `ability4`, `ability5`, `ability6`, `ability7`, `ability8`, `ability9`, `ability10`, `ability11`, `ability12`, `remEXP`, `totalEXP`) VALUES
(3, 'Guest', 'Appleseed', 'White', 22, 'Male', 'Brown', 'Pompadour', 'Brown', 'Athletic', 'Country', 'SCAVENGER', 7, 14, 17, 19, 15, 8, 20, 18, 12, 10, 14, 6, 15, 7, 86, 88, -6, 62, 105, 64, 80, 66, 130, 85, 84, 71, 80, 74, 103, 106, 94, 81, 103, 73, 'MATH', 'BOTANY', 'HORSEMANSHIP', 'TRAPS', 'FIRST_AID', 'LITERACY', 'HISTORY', 'MYCOLOGY', 'BIOLOGY', 'SURVEILLANCE', '', '', '', '', '', '', '', '', '', '', 49, 57, 67, 62, 42, 56, 28, 35, 42, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'PHYSICS', 'CONSTRUCTION', 'CONSTRUCTION', '', '', '', '', '', '', '', '', '', 35, 59, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'SPEEDLOAD_BOW', '', '', '', '', '', '', '', '', '', '', '', 18000, 40500),
(16, 'Overseer', 'Song', 'Asian', 29, 'Male', 'Black', 'Buzzcut', 'Brown', 'Athletic', 'Texokla', 'GANGSTER', 8, 20, 10, 16, 14, 10, 19, 12, 16, 15, 13, 8, 14, 7, 89, 87, -24, 100, 66, 60, 72, 90, 74, 96, 64, 72, 72, 76, 76, 46, 56, 82, 48, 74, 'FIRST_AID', 'HORSEMANSHIP', 'TRACKING', 'SURVEILLANCE', 'MATH', 'LITERACY', 'MOTORCYCLE', 'MECHANICS', 'AUTOMOBILE', 'COMPUTERS', 'ELECTRIC_SYSTEMS', '', '', '', '', '', '', '', '', '', 56, 54, 50, 50, 64, 72, 54, 80, 66, 56, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(19, 'Tony', 'Brown', 'Black', 27, 'Male', 'Black', 'Nappy', 'Brown', 'Average', 'Midwest', 'FARMER', 16, 14, 7, 15, 9, 11, 11, 19, 14, 7, 10, 7, 16, 8, 83, 66, -3, 72, 90, 74, 107, 74, 73, 78, 66, 65, 61, 56, 40, 68, 36, 51, 44, 63, 'BOTANY', 'HORSEMANSHIP', 'MATH', 'BIOLOGY', 'CHEMISTRY', 'MYCOLOGY', 'LITERACY', 'HISTORY', 'BICYCLES', 'TRAPS', 'FIRST_AID', 'SURVEILLANCE', 'TRACKING', '', '', '', '', '', '', '', 77, 59, 76, 60, 62, 62, 92, 64, 59, 42, 60, 35, 35, 0, 0, 0, 0, 0, 0, 0, 'CONSTRUCTION', 'DOCTOR', '', '', '', '', '', '', '', '', '', '', 58, 62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(38, 'Nick', 'Loxley', 'Caucasian', 28, 'Male', 'Brown', 'Viking Braids', 'Blue', 'Thin', 'Midwest', 'OUTDOORSMAN', 17, 10, 10, 13, 16, 12, 6, 10, 14, 17, 12, 7, 12, 6, 76, 79, -30, 88, 60, 58, 54, 54, 94, 50, 50, 52, 50, 54, 77, 50, 64, 79, 81, 68, 'TRAPS', 'TRACKING', 'HORSEMANSHIP', 'BICYCLES', 'LITERACY', 'MATH', 'FIRST_AID', 'SURVEILLANCE', '', '', '', '', '', '', '', '', '', '', '', '', 40, 40, 40, 40, 88, 71, 54, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Nick', 'Tyler', 'Half white and asian', 26, 'Male', 'Black', 'Ceasar cut', 'Brown', 'Thin', 'Urban', 'EDUCATED', 10, 12, 14, 8, 10, 11, 12, 13, 18, 15, 16, 9, 15, 7, 102, 107, -21, 78, 73, 66, 69, 60, 64, 94, 66, 62, 65, 70, 71, 50, 76, 48, 50, 56, 'LITERACY', 'MATH', 'COMPUTERS', 'ELECTRONICS', 'SPANISH_LANG', 'SPANISH_LIT', 'HISTORY', 'BICYCLES', 'FIRST_AID', 'SURVEILLANCE', 'MECHANICS', 'MOTORCYCLE', 'BIOLOGY', 'CHEMISTRY', '', '', '', '', '', '', 64, 54, 44, 44, 44, 54, 40, 52, 44, 54, 48, 52, 44, 42, 0, 0, 0, 0, 0, 0, 'ENCRYPTION', 'PROGRAMMING', 'FEDERAL_LAW', 'DOCTOR', '', '', '', '', NULL, NULL, NULL, NULL, 30, 46, 40, 42, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `idmarks`
--

CREATE TABLE `idmarks` (
  `ID` int(11) NOT NULL,
  `charName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `face` varchar(60) DEFAULT NULL,
  `head` varchar(60) DEFAULT NULL,
  `neck` varchar(60) DEFAULT NULL,
  `groin` varchar(60) DEFAULT NULL,
  `rear` varchar(60) DEFAULT NULL,
  `stomach` varchar(60) DEFAULT NULL,
  `lowerBack` varchar(60) DEFAULT NULL,
  `LRibs` varchar(60) DEFAULT NULL,
  `RRibs` varchar(60) DEFAULT NULL,
  `LShoulder` varchar(60) DEFAULT NULL,
  `RShoulder` varchar(60) DEFAULT NULL,
  `LUpperArm` varchar(60) DEFAULT NULL,
  `RUpperArm` varchar(60) DEFAULT NULL,
  `LThigh` varchar(60) DEFAULT NULL,
  `RThigh` varchar(60) DEFAULT NULL,
  `LForearm` varchar(60) DEFAULT NULL,
  `RForearm` varchar(60) DEFAULT NULL,
  `LCalf` varchar(60) DEFAULT NULL,
  `RCalf` varchar(60) DEFAULT NULL,
  `LHand` varchar(60) DEFAULT NULL,
  `RHand` varchar(60) DEFAULT NULL,
  `LFoot` varchar(60) DEFAULT NULL,
  `RFoot` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idmarks`
--

INSERT INTO `idmarks` (`ID`, `charName`, `username`, `face`, `head`, `neck`, `groin`, `rear`, `stomach`, `lowerBack`, `LRibs`, `RRibs`, `LShoulder`, `RShoulder`, `LUpperArm`, `RUpperArm`, `LThigh`, `RThigh`, `LForearm`, `RForearm`, `LCalf`, `RCalf`, `LHand`, `RHand`, `LFoot`, `RFoot`) VALUES
(1, 'Appleseed', 'Guest', '', 'knot on back of head', '', '', '', '3x stab wounds', '', '', '', '', '', 'massive puncture wound', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Song', 'Overseer', '', '', '', '', 'Leathery &amp; Scarred', '', '', '', '', '', '', 'Road rash scars', '', 'Road rash scars', '', '', '', 'Road rash scars', '', '', '', '', ''),
(5, 'Brown', 'Tony', 'scar from broken nose', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'burn scar', NULL, NULL, NULL),
(6, 'Loxley', 'Nick', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Tyler', 'Nick', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Meathead', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'blah', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'k', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'guy', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'k', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '5', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'ha', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'hal', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'ja', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'kk', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '55', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'plz', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'po', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'mad', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'grrr', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'lala', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Kenji', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `user_status` int(11) NOT NULL,
  `highest_EXP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `user_status`, `highest_EXP`) VALUES
(1, 'Overseer', 'Rem3mberthis', 'spears.ns@gmail.com', 1, 0),
(3, 'Guest', 'guest', '', 0, 0),
(4, 'Tony', 'M3m0r1z3', 'sspears87@gmail.com', 0, NULL),
(5, 'Nick', 'Rem3mberthis', 'spears.ns@gmail.com', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`charID`),
  ADD UNIQUE KEY `charName` (`charName`);

--
-- Indexes for table `idmarks`
--
ALTER TABLE `idmarks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `charID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `idmarks`
--
ALTER TABLE `idmarks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
