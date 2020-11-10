-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2019 at 09:49 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `TransferDate` date NOT NULL,
  `ArtRegNo` int(15) NOT NULL,
  `ChildNo` int(15) NOT NULL,
  `Year` date NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Gender` char(10) NOT NULL,
  `DoB` date NOT NULL,
  `Address` text NOT NULL,
  `PatientNo` int(15) NOT NULL,
  `GuardianName` varchar(250) NOT NULL,
  `GuardianNo` int(15) NOT NULL,
  `GRelation` varchar(250) NOT NULL,
  `FUB` char(15) NOT NULL,
  `RelatedDis` varchar(250) NOT NULL,
  `CD4` int(15) NOT NULL,
  `CD4Date` date NOT NULL,
  `Height` int(15) NOT NULL,
  `Weight` int(15) NOT NULL,
  `AgeInit` int(15) NOT NULL,
  `TBStatus` varchar(250) NOT NULL,
  `KS` char(10) NOT NULL,
  `PregBf` varchar(250) NOT NULL,
  `Arvs` char(10) NOT NULL,
  `LastArvsDate` date DEFAULT NULL,
  `SerialNo` int(15) NOT NULL,
  `TestDate` date NOT NULL,
  `TestResult` varchar(250) NOT NULL,
  `ARTeduct` char(10) NOT NULL,
  `ARTeductDate` date DEFAULT NULL,
  `TBtreatm` int(15) NOT NULL,
  `TBtreatmDate` date NOT NULL,
  `ARTreg` int(15) NOT NULL,
  `ARTregDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`TransferDate`, `ArtRegNo`, `ChildNo`, `Year`, `Name`, `Gender`, `DoB`, `Address`, `PatientNo`, `GuardianName`, `GuardianNo`, `GRelation`, `FUB`, `RelatedDis`, `CD4`, `CD4Date`, `Height`, `Weight`, `AgeInit`, `TBStatus`, `KS`, `PregBf`, `Arvs`, `LastArvsDate`, `SerialNo`, `TestDate`, `TestResult`, `ARTeduct`, `ARTeductDate`, `TBtreatm`, `TBtreatmDate`, `ARTreg`, `ARTregDate`) VALUES
('2019-03-12', 1111, 4, '2019-03-13', 'Daniel Mponda', 'M', '1994-03-08', 'Zomba', 994060454, 'Moses Mponda', 994060454, 'Father', 'Y', 'Nono', 83424, '2019-03-20', 168, 87, 26, 'N/>2yrs', 'Y', 'N', 'N', '2019-03-18', 937428, '2019-03-12', 'Rapid', 'N', '2019-03-12', 3746, '2019-03-13', 73642, '2019-03-13'),
('2019-03-13', 12, 2, '2019-03-06', 'Chealse Jackson', 'F', '2012-03-06', 'Mzuzu', 93847373, 'Peter Jackson', 83847373, 'Father', 'N', 'Nono', 83424, '2019-03-05', 138, 80, 37, 'N/>2yrs', 'N', 'N', 'Y', '2019-03-13', 937428, '2019-03-05', 'Rapid', 'Y', '2019-03-19', 3746, '2019-03-20', 73642, '2019-03-20'),
('2019-03-20', 12123, 2, '2019-03-20', 'Helene Aisthorpe', 'F', '1984-03-14', 'Kalonga', 993847373, 'Torry Aisthorpe', 88384737, 'Father', 'Y', 'Nono', 83424, '2019-03-12', 138, 70, 37, 'N/>2yrs', 'N', 'N', 'Y', '2019-03-19', 1003748, '2019-03-12', 'Rapid', 'Y', '2019-03-20', 3746, '2019-03-12', 73642, '2019-03-11'),
('2019-03-13', 100123, 2, '2019-03-13', 'Heda Tierney', 'F', '1989-03-08', 'Nsanje', 883945832, 'Peter Tierney', 993945832, 'Father', 'Y', 'Nono', 103447, '2019-03-04', 128, 60, 37, 'N/>2yrs', 'Y', 'N', 'Y', '2019-03-13', 337428, '2019-03-19', 'Rapid', 'Y', '2019-03-20', 2746, '2019-03-18', 53642, '2019-03-12'),
('2019-03-13', 30123, 2, '2019-03-12', 'Morgun Raye', 'M', '2003-03-05', 'Mulanje', 873948274, 'Louth Raye', 993948274, 'Brother', 'Y', 'Nono', 394824, '2019-03-13', 125, 66, 34, 'Last2yrs', 'N', 'N', 'Y', '2019-03-13', 497428, '2019-03-20', 'PCR', 'N', '2019-03-05', 2446, '2019-03-18', 834, '2019-03-18'),
('2019-03-13', 9382, 4, '2019-03-12', 'Duddin Tuckie', 'M', '1994-03-17', ' Lilongwe', 95584737, 'Farnell Tuckie', 88584737, 'Sister ', 'Y', 'Nono', 83274, '2019-03-12', 120, 73, 37, 'Last2yrs', 'N', 'N', 'Y', '2019-03-13', 835, '2019-03-20', 'PCR', 'Y', '2019-03-05', 9334, '2019-03-04', 34842, '2019-03-19'),
('2019-03-20', 8434, 5, '2019-03-20', 'Moss Barbera', 'M', '1998-03-04', 'Nkhotakota', 855584737, 'Caresse Barbera', 993945832, 'Father', 'Y', 'Nono', 83424, '2019-03-11', 125, 66, 27, 'Curr', 'N', 'N', 'N', '2019-03-21', 4637428, '2019-03-13', 'Rapid', 'Y', '2019-03-13', 37467, '2019-03-12', 35834, '2019-03-12'),
('2019-02-27', 7864, 2, '2019-03-13', 'Aisthorpe Helene ', 'M', '2019-03-20', 'NkhataBay', 855584737, 'Peter Price', 993945832, 'Friend', 'Y', 'Nono', 5749, '2019-03-05', 125, 70, 34, 'N/>2yrs', 'Y', 'N', 'Y', '2019-03-20', 3374, '2019-02-27', 'Rapid', 'Y', '2019-03-20', 2446, '2019-03-06', 53642, '2019-03-13'),
('2019-03-21', 867426, 4, '2019-03-21', 'Bollard Orviss', 'F', '2019-03-14', 'Ntchisi', 883847373, 'Louth Raye', 993948274, 'Father', 'N', 'Nono', 83424, '2019-03-12', 125, 66, 34, 'Last2yrs', 'N', 'Preg', 'Y', '2019-03-13', 937428, '2019-03-13', 'PCR', 'N', '2019-03-13', 7464, '2019-03-14', 749347, '2019-03-07'),
('2019-03-30', 9749, 2, '2019-03-14', 'Tierney Hanna', 'M', '2019-03-15', 'Chitipa', 8839482, 'Peter Jackson', 9939482, 'Friend', 'Y', 'Nono', 5749, '2019-03-12', 47, 74, 74, 'Last2yrs', 'N', 'Bf', 'Y', '2019-03-27', 6248, '2019-03-07', 'PCR', 'Y', '2019-03-21', 6824, '2019-03-06', 8465, '2019-03-28'),
('2019-03-13', 5463, 3, '2019-03-13', 'Peterson kapha', 'M', '2019-03-13', 'Mulanje', 93847379, 'Peter Homeage', 93847379, 'Father', 'Y', 'Nono', 5749, '2019-03-12', 138, 70, 45, 'N/>2yrs', 'Y', 'N', 'Y', '2019-03-14', 835, '2019-03-12', 'Rapid', 'Y', '2019-03-20', 3746, '2019-03-27', 73642, '2019-03-07'),
('2019-03-06', 7454, 5, '2019-03-07', 'Tuckie Duddin ', 'F', '2019-03-06', 'Lilongwe', 93847373, 'Moses Chisanya', 93847373, 'Brother', 'Y', 'Nono', 356, '2019-03-12', 138, 70, 34, 'N/>2yrs', 'Y', 'N', 'Y', '2019-03-21', 835, '2019-03-12', 'Rapid', 'Y', '2019-03-20', 4567, '2019-03-14', 5464, '2019-03-12'),
('2019-03-20', 3566, 4, '2019-03-20', 'Paffot Nealon ', 'M', '2019-03-14', 'Chitipa', 93847379, 'Farnell Nealon ', 98847379, 'Mother', 'Y', 'Nono', 5749, '2019-03-19', 138, 70, 53, 'N/>2yrs', 'Y', 'N', 'Y', '2019-03-27', 564, '2019-03-12', 'Rapid', 'Y', '2019-03-13', 466, '2019-03-21', 3635, '2019-03-13'),
('2019-03-06', 7435, 6, '2019-03-20', 'Michail Ronchetti', 'F', '2019-03-20', 'Kalonga', 873948274, 'Farnell Ronchetti', 993948274, 'Father', 'Y', 'Nono', 8475, '2019-03-20', 8495, 9375, 843, 'N/>2yrs', 'Y', 'N', 'Y', '2019-03-20', 9375, '2019-03-13', 'Rapid', 'Y', '2019-03-13', 8487, '2019-03-13', 9384, '2019-03-08'),
('2019-03-07', 123, 4, '2019-03-14', 'Otis James', 'M', '2019-03-21', 'Zomba', 993847373, 'Peter Price', 883847373, 'Friend', 'Y', 'Nono', 5749, '2019-03-20', 125, 70, 34, 'Last2yrs', 'Y', 'N', 'Y', '2019-03-19', 6475, '2019-03-20', 'PCR', 'Y', '2019-03-20', 3746, '2019-03-21', 3456, '2019-03-14'),
('2019-03-05', 6438, 4, '2019-03-13', 'Chifundo Mpatso', 'M', '2019-03-21', 'Mulanje', 994060454, 'Peterson Mpatso', 994843832, 'Brother', 'N', 'Nono', 435, '2019-03-12', 168, 86, 26, 'Last2yrs', 'N', 'Bf', 'N', '2019-03-21', 95858, '2019-03-11', 'PCR', 'N', '2019-03-20', 37, '2019-03-13', 535, '2019-03-21'),
('2019-03-13', 3556, 2, '2019-03-14', 'Martha Dzula', 'F', '2019-02-28', 'Mulanje', 884060454, 'Jane Dzula', 994843832, 'Mother', 'N', 'Nono', 435, '2019-03-12', 168, 86, 26, 'Last2yrs', 'N', 'Bf', 'Y', '2019-03-13', 958585, '2019-03-06', 'PCR', 'N', '2019-03-12', 37, '2019-03-13', 535, '2019-03-21'),
('2019-04-24', 12353, 5, '2019-04-16', 'Oviler Snake', 'M', '2019-04-03', 'Mulanje', 873948274, 'Peter Snake', 93847373, 'Friend', 'Y', 'Nono', 83424, '2019-04-23', 125, 283, 34, 'N/>2yrs', 'Y', 'N', 'Y', '2019-04-17', 937428, '2019-04-10', 'Rapid', 'Y', '2019-04-23', 2746, '2019-04-10', 34842, '2019-04-09'),
('2019-04-02', 43556, 2, '2019-04-10', 'sgdshtdhfsh', 'M', '0019-06-07', 'Zomba', 884060454, 'Peterson Mpatso', 994060454, 'Father', 'Y', 'Nono', 435, '2019-04-03', 168, 86, 24, 'N/>2yrs', 'Y', 'N', 'Y', '2019-04-17', 958585, '2019-04-17', 'Rapid', 'Y', '2019-04-04', 355, '2019-04-24', 535, '2019-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `visitation`
--

DROP TABLE IF EXISTS `visitation`;
CREATE TABLE IF NOT EXISTS `visitation` (
  `ArtRegNo` int(15) NOT NULL,
  `VisitDate` date NOT NULL,
  `PregBf` varchar(250) NOT NULL,
  `TBStatus` varchar(250) NOT NULL,
  `SideEffects` varchar(250) NOT NULL,
  `PillCount` int(15) NOT NULL,
  `DosesMis` int(15) NOT NULL,
  `ARTReg` varchar(250) NOT NULL,
  `NoARVsGiven` int(15) NOT NULL,
  `Givento` varchar(250) NOT NULL,
  `CptIptGiven` varchar(250) NOT NULL,
  `NoTabs` int(15) NOT NULL,
  `DepoGiven` varchar(250) NOT NULL,
  `NoCons` int(15) NOT NULL,
  `Months` varchar(250) NOT NULL,
  `VLTaken` varchar(250) NOT NULL,
  `Results` varchar(250) NOT NULL,
  `NextAppDate` date NOT NULL,
  `AdOutcome` varchar(250) NOT NULL,
  `Weight` int(15) NOT NULL,
  `Notes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitation`
--

INSERT INTO `visitation` (`ArtRegNo`, `VisitDate`, `PregBf`, `TBStatus`, `SideEffects`, `PillCount`, `DosesMis`, `ARTReg`, `NoARVsGiven`, `Givento`, `CptIptGiven`, `NoTabs`, `DepoGiven`, `NoCons`, `Months`, `VLTaken`, `Results`, `NextAppDate`, `AdOutcome`, `Weight`, `Notes`) VALUES
(1111, '2019-03-01', 'N', 'N', 'N', 1, 1, '4', 3, 'P', 'C', 1, '3', 1, '3', 'Bled', '4', '2019-04-09', 'Def', 70, 'Non'),
(123, '2019-04-03', 'N', 'N', 'N', 1, 1, '2', 1, 'P', 'C', 1, '1', 1, '1', 'Bled', '1', '2019-04-01', 'Def', 1, 'No notes'),
(1111, '2019-04-01', 'N', 'N', 'N', 23, 4, '9', 3, 'P', 'I', 3, '1', 1, '3', 'Bled', '4', '2019-04-15', 'Stop', 70, 'More comments'),
(12, '2019-01-01', 'Bf', 'C', 'N', 23, 1, '6', 3, 'P', 'I', 3, '3', 1, '1', 'Bled', '4', '2019-04-09', 'Stop', 70, 'More comments'),
(12123, '2019-04-01', 'Preg', 'C', 'N', 1, 1, '8', 3, 'G', 'I', 1, '1', 1, '1', 'Bled', '1', '2019-04-11', 'Stop', 60, 'none'),
(12123, '2019-05-01', 'Preg', 'Y', 'Y', 1, 1, '6', 1, 'G', 'I', 1, '1', 1, '1', 'Bled', '1', '1970-01-01', 'Stop', 65, 'none'),
(12123, '2019-04-19', 'Bf', 'Rx', 'Y', 57, 46, '6', 37, 'G', 'CI', 37, '373', 73, '74', 'Bled', '64', '2019-04-19', 'To', 60, 'none '),
(1111, '2019-01-01', 'Preg', 'Y', 'N', 23, 3, '7', 23, 'P', 'C', 23, '1', 3, '1', 'Bled', '1', '2019-04-09', 'Def', 70, 'none'),
(1111, '2019-02-01', 'Preg', 'C', 'N', 1, 1, '4', 3, 'P', 'C', 34, '3', 3, '4', 'Bled', '1', '2019-04-09', 'Stop', 70, 'none'),
(12, '2019-05-08', 'Preg', 'C', 'Y', 23, 1, '9', 23, 'G', 'CI', 23, '1', 3, '1', 'Bled', '1', '2019-04-19', 'Def', 70, 'More comments'),
(1111, '2019-12-01', 'Preg', 'C', 'N', 23, 1, '7', 3, 'P', 'C', 1, '4', 3, '4', 'Bled', '4', '2019-04-11', 'D', 70, 'More comments'),
(5463, '2019-04-01', 'N', 'N', 'N', 31, 1, '7', 37, 'G', 'I', 37, '1', 7, '1', 'Bled', '8', '2019-04-15', 'Stop', 65, 'none'),
(5463, '2019-04-23', 'Preg', 'Y', 'N', 3, 1, '7', 1, 'G', 'CI', 1, '3', 1, '1', 'Bled', '5', '2019-04-09', 'Stop', 1, 'none'),
(5463, '2020-03-18', 'Preg', 'Y', 'N', 23, 3, '7', 1, 'G', 'CI', 3, '3', 1, '4', 'Bled', '5', '2019-06-05', 'Stop', 87, 'Nan'),
(7454, '2019-09-20', 'Preg', 'Y', 'N', 57, 1, '10', 37, 'G', 'I', 37, '4', 4, '4', 'Bled', '4', '2019-04-16', 'Stop', 60, 'none'),
(6438, '1970-01-01', 'Preg', 'Y', 'N', 23, 3, '7', 23, 'P', 'I', 3, '4', 1, '1', 'Bled', '5', '2019-03-04', 'Stop', 70, 'none'),
(6438, '2018-12-12', 'Bf', 'Y', 'N', 3, 23, '7', 1, 'P', 'C', 1, '4', 1, '4', 'Bled', '4', '2019-04-02', 'Stop', 87, 'none'),
(43556, '2019-04-09', 'Preg', 'N', 'N', 1, 1, '5', 37, 'P', 'C', 1, '1', 4, '4', 'Bled', '4', '2019-04-01', 'Stop', 86, 'none'),
(1111, '2020-01-01', 'N', 'N', 'N', 23, 4, '6', 23, 'P', 'C', 1, '4', 1, '1', 'Bled', '4', '2019-04-17', 'Stop', 70, 'No notes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
