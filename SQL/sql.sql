CREATE DATABASE IF NOT EXISTS `JustCause` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `JustCause`;

-- --------------------------------------------------------

--
-- Table structure for table `Fundraiser`
--

CREATE TABLE IF NOT EXISTS `Fundraiser` (
  `FundraiserID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  PRIMARY KEY (`FundraiserID`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Donation`
--

CREATE TABLE IF NOT EXISTS `Donation` (
  `DonationID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` date NOT NULL,
  `Image` time NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Stocks` int(10) NOT NULL,
  PRIMARY KEY (`ReportID`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------