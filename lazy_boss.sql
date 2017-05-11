-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 07:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazy_boss`
--

-- --------------------------------------------------------

--
-- Table structure for table `affects_on`
--

CREATE TABLE `affects_on` (
  `productName` varchar(20) NOT NULL,
  `companyName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `numberOfPurchase` int(11) DEFAULT NULL,
  `companyName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`numberOfPurchase`, `companyName`) VALUES
(70, 'Bahringer, Predovic '),
(74, 'Blanda, Predovic and'),
(77, 'Buckridge-Treutel'),
(110, 'Connelly Inc'),
(119, 'Cruickshank-Anderson'),
(153, 'D''Amore Inc'),
(149, 'Dare Group'),
(188, 'Ernser Group'),
(76, 'Farrell, Mraz and Wu'),
(167, 'Ferry-Walter'),
(124, 'Franecki, Maggio and'),
(99, 'Gottlieb, Goyette an'),
(167, 'Harber-Marvin'),
(152, 'Ledner LLC'),
(152, 'Lesner LLC'),
(180, 'O''Conner and Sons'),
(68, 'Pacocha, Jones and L'),
(139, 'Pacocha-Daugherty'),
(114, 'Prosacco, Heidenreic'),
(197, 'Rutherford-Fritsch'),
(178, 'Sanford and Sons'),
(97, 'Schimmel LLC'),
(161, 'Schulist and Sons'),
(163, 'Trantow-Effertz'),
(106, 'Upton-Gleichner'),
(181, 'Veum-Ferry'),
(186, 'Wehner Inc');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `credAmount` int(11) NOT NULL,
  `credReason` varchar(20) DEFAULT NULL,
  `companyName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`credAmount`, `credReason`, `companyName`) VALUES
(0, 'Bain de Soleil', 'Bayer and Sons'),
(0, 'Dexlido Kit', 'Christiansen Inc'),
(0, 'Turkey', 'Dickens LLC'),
(0, 'NUCYNTA', 'Ebert, Koepp and Her'),
(0, 'Hydrocortisone', 'Gleason-Huel'),
(0, 'meijer', 'Heathcote-DuBuque'),
(0, 'Cefepime', 'Hills, Klocko and Pf'),
(0, 'ELYMUS REPENS POLLEN', 'Jones-Kautzer'),
(0, 'RESILIENCE LIFT FIRM', 'Kohler, Gleason and '),
(0, 'Family Wellness Mico', 'O''Reilly LLC'),
(0, 'Hydrocortisone', 'Wiza Inc'),
(0, 'Isoniazid', 'Wyman Inc');

-- --------------------------------------------------------

--
-- Table structure for table `creditor`
--

CREATE TABLE `creditor` (
  `allCredits` int(11) DEFAULT NULL,
  `companyName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditor`
--

INSERT INTO `creditor` (`allCredits`, `companyName`) VALUES
(0, 'Brekke-Marvin'),
(0, 'Klocko and Sons'),
(0, 'Koss-Jones'),
(0, 'Lindgren Inc'),
(0, 'Reinger LLC'),
(0, 'Romaguera-Dickens'),
(0, 'Spencer Group'),
(0, 'Tremblay-Hartmann'),
(0, 'Waelchi Group'),
(0, 'Weissnat, Gibson and');

-- --------------------------------------------------------

--
-- Table structure for table `debt`
--

CREATE TABLE `debt` (
  `debtAmount` int(11) NOT NULL,
  `debtReason` varchar(20) DEFAULT NULL,
  `dateOfOwing` date DEFAULT NULL,
  `companyName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debt`
--

INSERT INTO `debt` (`debtAmount`, `debtReason`, `dateOfOwing`, `companyName`) VALUES
(0, 'Parrot Head Dedicate', '0000-00-00', 'Bartoletti, Keebler '),
(0, 'Purminerals 4-in-1 1', '0000-00-00', 'Batz, Pfeffer and Tu'),
(0, 'Oxycodone Hydrochlor', '0000-00-00', 'Bednar-Schowalter'),
(0, 'Cerebellum Thalamus ', '0000-00-00', 'Daniel, Zieme and Wo'),
(0, 'Ipratropium Bromide ', '0000-00-00', 'Durgan LLC'),
(0, 'Metoprolol Tartrate', '0000-00-00', 'Farrell-Donnelly'),
(0, 'ATOPALM BB LIGHT SPF', '0000-00-00', 'Feil, Hintz and Bash'),
(0, 'Sinus Congestion and', '0000-00-00', 'Hansen, Fritsch and '),
(0, 'Cold and Hot Medicat', '0000-00-00', 'Lindgren Inc'),
(0, 'MucaPlex', '0000-00-00', 'Pouros Group'),
(0, 'Vitamin A and D', '0000-00-00', 'Sawayn-Cormier'),
(0, 'Degree', '0000-00-00', 'Schinner LLC'),
(0, 'SensiGel', '0000-00-00', 'Schulist LLC'),
(0, 'Flebogamma', '0000-00-00', 'Stoltenberg and Sons');

-- --------------------------------------------------------

--
-- Table structure for table `debtor`
--

CREATE TABLE `debtor` (
  `allDebts` int(11) DEFAULT NULL,
  `companyName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtor`
--

INSERT INTO `debtor` (`allDebts`, `companyName`) VALUES
(0, 'Harvey and Sons'),
(0, 'Krajcik, Fadel and C'),
(0, 'Moen, Rempel and Ger'),
(0, 'Monahan Inc'),
(0, 'O''Connell and Sons'),
(0, 'Sipes, Kerluke and H'),
(0, 'Streich and Sons');

-- --------------------------------------------------------

--
-- Table structure for table `decreases`
--

CREATE TABLE `decreases` (
  `taxType` varchar(20) NOT NULL,
  `lastChangedTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expence`
--

CREATE TABLE `expence` (
  `rawMaterial` varchar(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `electricity` int(11) DEFAULT NULL,
  `gas` int(11) DEFAULT NULL,
  `water` int(11) DEFAULT NULL,
  `amortization` int(11) DEFAULT NULL,
  `spendTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expence`
--

INSERT INTO `expence` (`rawMaterial`, `salary`, `electricity`, `gas`, `water`, `amortization`, `spendTime`) VALUES
('NaOH', 0, 0, 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `initialBalance` int(11) DEFAULT NULL,
  `outcome` int(11) DEFAULT NULL,
  `income` int(11) DEFAULT NULL,
  `totExpence` int(11) DEFAULT NULL,
  `remainder` int(11) DEFAULT NULL,
  `lastChangedTime` date NOT NULL,
  `debtAmount` int(11) DEFAULT NULL,
  `companyName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`initialBalance`, `outcome`, `income`, `totExpence`, `remainder`, `lastChangedTime`, `debtAmount`, `companyName`) VALUES
(0, 0, 0, 0, 0, '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `given_as`
--

CREATE TABLE `given_as` (
  `debtAmount` int(11) DEFAULT NULL,
  `productName` varchar(20) NOT NULL,
  `companyName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE `has` (
  `productName` varchar(20) NOT NULL,
  `spendTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `has_a`
--

CREATE TABLE `has_a` (
  `spendTime` date NOT NULL,
  `lastChangedTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `incomeDate` date DEFAULT NULL,
  `incomeValue` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `taxType` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`incomeDate`, `incomeValue`, `ID`, `taxType`) VALUES
('0000-00-00', 0, 90, NULL),
('0000-00-00', 0, 106, NULL),
('0000-00-00', 0, 112, NULL),
('0000-00-00', 0, 113, 'utility'),
('0000-00-00', 0, 122, NULL),
('0000-00-00', 0, 131, 'utility'),
('0000-00-00', 0, 134, NULL),
('0000-00-00', 0, 148, 'utility'),
('0000-00-00', 0, 160, NULL),
('0000-00-00', 0, 170, 'utility'),
('0000-00-00', 0, 190, NULL),
('0000-00-00', 0, 197, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productName` varchar(20) NOT NULL,
  `shelfLife` date DEFAULT NULL,
  `costPrice` int(11) DEFAULT NULL,
  `sellingPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productName`, `shelfLife`, `costPrice`, `sellingPrice`) VALUES
('Arthricream', '0000-00-00', 0, 0),
('Cetirizine Hydrochlo', '0000-00-00', 0, 0),
('Galantamine', '0000-00-00', 0, 0),
('Head and Shoulders', '0000-00-00', 0, 0),
('Johnson Grass', '0000-00-00', 0, 0),
('Nasal', '0000-00-00', 0, 0),
('Premier Value Steril', '0000-00-00', 0, 0),
('ZENPEP', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taken_for`
--

CREATE TABLE `taken_for` (
  `productName` varchar(20) NOT NULL,
  `credAmount` int(11) DEFAULT NULL,
  `companyName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `taxType` varchar(20) NOT NULL,
  `taxAmount` int(11) DEFAULT NULL,
  `payedTax` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`taxType`, `taxAmount`, `payedTax`) VALUES
('gas', 0, 0),
('salary', 0, 0),
('type1', 0, 0),
('utility', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `secretpin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `secretpin`) VALUES
(1, 'Azam Ergashev', 'azamergashev', '12345', '7410'),
(2, 'Ismoil Omiliy', 'ismoilomiliy', '12345', '7410'),
(3, 'Jamshid Axadov', 'jamshid', '456', '8520'),
(4, 'sardor', 'ergashev', '7410', '8520'),
(5, 'farhod', 'farhod', '7410', '8520'),
(6, 'Muslima Irmuhamedova', 'muslima', '7410', '8520'),
(7, 'Farangiz Nishonova', 'uzbfarangiz', 'inha', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affects_on`
--
ALTER TABLE `affects_on`
  ADD PRIMARY KEY (`productName`,`companyName`),
  ADD KEY `R_39` (`companyName`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`companyName`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`credAmount`,`companyName`),
  ADD KEY `R_56` (`companyName`);

--
-- Indexes for table `creditor`
--
ALTER TABLE `creditor`
  ADD PRIMARY KEY (`companyName`);

--
-- Indexes for table `debt`
--
ALTER TABLE `debt`
  ADD PRIMARY KEY (`debtAmount`,`companyName`),
  ADD KEY `R_52` (`companyName`);

--
-- Indexes for table `debtor`
--
ALTER TABLE `debtor`
  ADD PRIMARY KEY (`companyName`);

--
-- Indexes for table `decreases`
--
ALTER TABLE `decreases`
  ADD PRIMARY KEY (`taxType`,`lastChangedTime`),
  ADD KEY `R_51` (`lastChangedTime`);

--
-- Indexes for table `expence`
--
ALTER TABLE `expence`
  ADD PRIMARY KEY (`spendTime`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`lastChangedTime`),
  ADD KEY `R_60` (`debtAmount`,`companyName`);

--
-- Indexes for table `given_as`
--
ALTER TABLE `given_as`
  ADD PRIMARY KEY (`productName`),
  ADD KEY `R_53` (`debtAmount`,`companyName`);

--
-- Indexes for table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`productName`,`spendTime`),
  ADD KEY `R_42` (`spendTime`);

--
-- Indexes for table `has_a`
--
ALTER TABLE `has_a`
  ADD PRIMARY KEY (`spendTime`,`lastChangedTime`),
  ADD KEY `R_44` (`lastChangedTime`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `R_46` (`taxType`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productName`);

--
-- Indexes for table `taken_for`
--
ALTER TABLE `taken_for`
  ADD PRIMARY KEY (`productName`),
  ADD KEY `R_59` (`credAmount`,`companyName`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`taxType`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `affects_on`
--
ALTER TABLE `affects_on`
  ADD CONSTRAINT `R_39` FOREIGN KEY (`companyName`) REFERENCES `agent` (`companyName`),
  ADD CONSTRAINT `R_40` FOREIGN KEY (`productName`) REFERENCES `product` (`productName`);

--
-- Constraints for table `credit`
--
ALTER TABLE `credit`
  ADD CONSTRAINT `R_56` FOREIGN KEY (`companyName`) REFERENCES `creditor` (`companyName`);

--
-- Constraints for table `debt`
--
ALTER TABLE `debt`
  ADD CONSTRAINT `R_52` FOREIGN KEY (`companyName`) REFERENCES `debtor` (`companyName`);

--
-- Constraints for table `decreases`
--
ALTER TABLE `decreases`
  ADD CONSTRAINT `R_50` FOREIGN KEY (`taxType`) REFERENCES `taxes` (`taxType`),
  ADD CONSTRAINT `R_51` FOREIGN KEY (`lastChangedTime`) REFERENCES `fund` (`lastChangedTime`);

--
-- Constraints for table `fund`
--
ALTER TABLE `fund`
  ADD CONSTRAINT `R_60` FOREIGN KEY (`debtAmount`,`companyName`) REFERENCES `debt` (`debtAmount`, `companyName`);

--
-- Constraints for table `given_as`
--
ALTER TABLE `given_as`
  ADD CONSTRAINT `R_53` FOREIGN KEY (`debtAmount`,`companyName`) REFERENCES `debt` (`debtAmount`, `companyName`),
  ADD CONSTRAINT `R_54` FOREIGN KEY (`productName`) REFERENCES `product` (`productName`);

--
-- Constraints for table `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `R_41` FOREIGN KEY (`productName`) REFERENCES `product` (`productName`),
  ADD CONSTRAINT `R_42` FOREIGN KEY (`spendTime`) REFERENCES `expence` (`spendTime`);

--
-- Constraints for table `has_a`
--
ALTER TABLE `has_a`
  ADD CONSTRAINT `R_43` FOREIGN KEY (`spendTime`) REFERENCES `expence` (`spendTime`),
  ADD CONSTRAINT `R_44` FOREIGN KEY (`lastChangedTime`) REFERENCES `fund` (`lastChangedTime`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `R_46` FOREIGN KEY (`taxType`) REFERENCES `taxes` (`taxType`);

--
-- Constraints for table `taken_for`
--
ALTER TABLE `taken_for`
  ADD CONSTRAINT `R_57` FOREIGN KEY (`productName`) REFERENCES `product` (`productName`),
  ADD CONSTRAINT `R_59` FOREIGN KEY (`credAmount`,`companyName`) REFERENCES `credit` (`credAmount`, `companyName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
