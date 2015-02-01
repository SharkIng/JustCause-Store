CREATE DATABASE IF NOT EXISTS `JustCause` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `JustCause`;

--
-- Table structure for table `Donation`
--

CREATE TABLE IF NOT EXISTS `Donation` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Category` int(10) NOT NULL, 
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Table structure for table `Donation`
--

CREATE TABLE IF NOT EXISTS `Admins` (
  `AdminID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;