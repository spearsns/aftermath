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
  `charName` varchar(30) NOT NULL,
  `ethnicity` text NOT NULL,
  `age` int(11) NOT NULL,
  `hairColor` text NOT NULL,
  `hairStyle` text NOT NULL,
  `eyeColor` text NOT NULL,
  `build` text NOT NULL,
  `habitat` text NOT NULL,
  `background` text NOT NULL,
  `radiation` int(11) NOT NULL,
  `idMarks` text NOT NULL COMMENT 'array',
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
  `2HW` int(11) NOT NULL,
  `CHAIN` int(11) NOT NULL,
  `THROW` int(11) NOT NULL,
  `ARCH` int(11) NOT NULL,
  `1HGUNS` int(11) NOT NULL,
  `2HGUNS` int(11) NOT NULL,
  `BURST` int(11) NOT NULL,
  `SPECIAL` int(11) NOT NULL,
  `WSYS` int(11) NOT NULL,
  `abilities` text NOT NULL COMMENT 'array',
  `STEALTH` int(11) NOT NULL,
  `CLIMB` int(11) NOT NULL,
  `NEGOT` int(11) NOT NULL,
  `NAVIG` int(11) NOT NULL,
  `skills` text NOT NULL COMMENT 'array',
  `skillRate` int(11) NOT NULL COMMENT 'array',
  `EXP` int(11) NOT NULL,
  `remEXP` int(11) NOT NULL,
  `inventory` text NOT NULL COMMENT 'array'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `highest_EXP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `highest_EXP`) VALUES
(1, 'Overseer', 'Rem3mberthis', 'spears.ns@gmail.com', 0),
(2, 'SpearZNS', 'Rem3mberthis', 'spears.ns@gmail.com', 0),
(3, 'Guest', 'guest', '', 0),
(10, 'testoperator', '1111', 'test@gmail.com', 0);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `charID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
