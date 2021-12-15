-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `Ambulance_Service_Name` char(100) NOT NULL,
  `Contact_No` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`Ambulance_Service_Name`, `Contact_No`) VALUES
('Islamia Ambulance', '32145698701'),
('', ''),
('Khaled Ambulance Service', '01234567890'),
('Alif Ambulance Service', '02234567890'),
('Conscious Ambulance Service in Dhaka', '03234567890'),
('Ambulance Narayanganj', '04234567890'),
('M ICU Ambulance Service', '51234567890'),
('24 ambulance service', '06234567890'),
('Lamyea Ambulance Services', '07234567890'),
('Country Ambulance Service', '08234567890'),
('Ahad ambulance service', '09234567890'),
('URAL EMS', '01034567890');

-- --------------------------------------------------------

--
-- Table structure for table `ambval`
--

CREATE TABLE `ambval` (
  `name` char(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `hospital` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambval`
--

INSERT INTO `ambval` (`name`, `address`, `contact`, `hospital`) VALUES
('Subrata', 'dhaka, mirpur1', 2147483647, 'kkjkjdhagdjsgfa');

-- --------------------------------------------------------

--
-- Table structure for table `covidvac`
--

CREATE TABLE `covidvac` (
  `name` char(100) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `nid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidvac`
--

INSERT INTO `covidvac` (`name`, `DOB`, `nid`) VALUES
('Subrata', '20/09/2000', '18125469875'),
('Barshan', '22/09/2001', '5456487521254');

-- --------------------------------------------------------

--
-- Table structure for table `fire`
--

CREATE TABLE `fire` (
  `Fire_Station` char(100) NOT NULL,
  `Contact_No` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fire`
--

INSERT INTO `fire` (`Fire_Station`, `Contact_No`) VALUES
('Kurmitola Fire Station', '	01234567890'),
('Fire Service and Civil Defense, Tejgaon Fire Station', '01234567890'),
('Lalbagh Fire Station', '02234567890'),
('Fire Service & Civil Defence Station, Baridhara', '03234567890'),
('Bangladesh Fire Service and Civil Defense Head Quarter', '04234567890'),
('Fire Service & Civil Defence Station - Savar', '51234567890'),
('Sadarghat Fire Service and Civil Defense Station', '06234567890'),
('Purbachl Fire service and civil defence field', '07234567890'),
('Dhamrai Fire Station', '08234567890'),
('Sutrapur Fire Station', '09234567890'),
('Mirzaganj Fire station', '01034567890');

-- --------------------------------------------------------

--
-- Table structure for table `more`
--

CREATE TABLE `more` (
  `sname` varchar(100) NOT NULL,
  `surl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `more`
--

INSERT INTO `more` (`sname`, `surl`) VALUES
('Covid Vaccination', 'https://surokkha.gov.bd/'),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `passval`
--

CREATE TABLE `passval` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `nid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passval`
--

INSERT INTO `passval` (`fname`, `lname`, `dob`, `gender`, `mobile`, `nid`) VALUES
('Subrata', 'Das', '20/09/2000', 'Male', 1254789635, '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `Police_Station` varchar(100) NOT NULL,
  `Contact_No` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`Police_Station`, `Contact_No`) VALUES
('Kishoreganj Sadar Model Police Station', '	01234567890'),
('Office of the Superintendent of Police, Kishoreganj', '02234567890'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('CID Office, Kishoreganj', '	03234567890'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('m', '	01234567890'),
('', ''),
('', ''),
('', ''),
('', ''),
('Narayanganj Police Station', '78965412301'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('Kurmitola Fire Station', '87965412301'),
('Narayanganj Police Station', '02234567890'),
('', ''),
('BakshiBajar Police Station', '02234567895'),
('Dhanmondi Thana', '01320039550'),
('New Market Thana', '01320039578'),
('Hazaribag Thana', '01320-039605'),
('Kalabagan Thana', '01320039635'),
('Lalbag Thana', '01320-039838'),
('Bongsal Thana', '01320039866'),
('Chakbazar Thana', '01320039896'),
('Kamrangirchar Thana', '01320039924'),
('Sutrapur Thana', '01320039924'),
('Palton Model Thana', '01320040138');

-- --------------------------------------------------------

--
-- Table structure for table `policeval`
--

CREATE TABLE `policeval` (
  `name` char(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(50) NOT NULL,
  `complaints` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policeval`
--

INSERT INTO `policeval` (`name`, `address`, `contact`, `complaints`) VALUES
('Subrata', 'dhaka, mirpur1', 1761147513, 'nothing'),
('Subrata', 'dhaka, mirpur1', 1761147513, 'kkjkjdhagdjsgfa');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(100) NOT NULL,
  `P_Name` text NOT NULL,
  `P_Desc` text NOT NULL,
  `P_Category` text NOT NULL,
  `P_Price` float NOT NULL,
  `P_Picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_id`, `P_Name`, `P_Desc`, `P_Category`, `P_Price`, `P_Picture`) VALUES
(1, 'Shirt', 'Men', 'Garments', 123, '../files/Screenshot_2017-02-27-19-20-46.jpg'),
(2, 'Jeans', 'Men', 'Garments', 123, '../files/Screenshot_2017-02-27-19-20-46.jpg'),
(3, 'Shirt', 'Boys', 'Garments', 123, '../files/Screenshot_2017-02-27-19-20-46.jpg'),
(4, 'Bicycle', 'Blue', 'Sports', 2312, '../files/1626258015image/jpeg'),
(5, 'Shirt ', 'Women', 'Garments', 123, '../files/1626258060.jpg'),
(6, 'Jeans', 'Women', 'Garments', 123, '../files/1626258105.jpg'),
(7, 'Shorts', 'Men', 'Footwear', 123, '../file/Screenshot_2017-02-27-19-20-46.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Service_Nam` varchar(100) NOT NULL,
  `Service_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_Nam`, `Service_Type`) VALUES
('Police Dispatcher', 'Dispatcher'),
('Fire Dispatcher', 'Dispatcher'),
('Ambulance Dispatcher', 'Dispatcher'),
('Tow Truck Dispatcher', 'Dispatcher'),
('E-passport( apply online) ', 'government'),
('NID( apply online ) ', 'government'),
('Covid-19 vaccine', 'government'),
('Education Board', 'government'),
('Daily News', 'other'),
('Our Products', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `towval`
--

CREATE TABLE `towval` (
  `name` char(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `towval`
--

INSERT INTO `towval` (`name`, `address`, `contact`) VALUES
('Subrata', 'dhaka, mirpur1', 1761147513);

-- --------------------------------------------------------

--
-- Table structure for table `tow_truck`
--

CREATE TABLE `tow_truck` (
  `Tow_Truck_Services` varchar(1000) NOT NULL,
  `Contact_No` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tow_truck`
--

INSERT INTO `tow_truck` (`Tow_Truck_Services`, `Contact_No`) VALUES
('ABG Tow Truck service', 1234567890),
('Sheikh MM Truck service', 223456789),
('Akij Motors - Dhanmondi', 1755662545),
('Tijarah Motors Ltd.', 1733015114),
('Kia Motors Bangladesh', 1819224123),
('Rangs Motors Limited', 1711248646),
('LNB Automobiles', 1814823505),
('Hassan Enterprise', 1819276831),
('Walid Motors', 1921908054),
('Meghna Automobiles Ltd. (Service Division)', 1978057390);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Mobile` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `username`, `Age`, `Mobile`, `Email`, `Password`) VALUES
('raktim', 'dhar', 'sd199', 1254789635, 0, '20', 'Raktim2000@'),
('raktim', 'dhar', 'sd199', 1254789635, 0, '20', 'Raktim2000@'),
('raktim', 'dhar', 'sd199', 1254789635, 0, '20', 'Raktim2000@'),
('raktim', 'dhar', 'sd199', 1254789635, 0, '20', 'Raktim2000@'),
('raktim', 'dhar', 'sd199', 1254789635, 0, '20', 'Raktim2000@'),
('asfdasf', 'Das', 'digitalf', 30, 1761147513, 'mdmohiminulislam96@gmail.com', 'Aiubsubratadas1999@'),
('Barshan', 'ghosh', 'bgb', 22, 1254789635, 'bgb123@gmail.com', 'Bgb123@gmail.com'),
('Barshan', 'ghosh', 'bgb', 22, 1254789635, 'bgb123@gmail.com', 'Bgb123@gmail.com'),
('raktim', 'dhar', 'sd199', 1254789635, 0, '20', 'Raktim2000@'),
('Barshan', 'Das', 'digitalf', 22, 1254789635, 'mdmohiminulislam96@gmail.com', 'Bgb123@gmail.com'),
('lmmmmmm', 'afdsfsf', 'kk12', 21, 1761147563, 'abc123@gmail.com', 'Abc123@gmail'),
('Subrata', 'Das', 'sd199', 21, 1254789635, 'sumib2k17@gmail.com', 'Sumib2k17@'),
('najib', 'Uddin', 'NZ10', 1719060637, 0, '43', 'Nz10@gmail.com'),
('ranu ', 'Das', 'rn700', 50, 1719060637, 'rn123@gmail.com', 'Rn123@gmail.com'),
('ranu ', 'Das', 'rn700', 50, 1719060637, 'rn123@gmail.com', 'Rn123@gmail.com'),
('ranu ', 'Das', 'rn700', 50, 1719060637, 'rn123@gmail.com', 'Rn123@gmail.com'),
('ranu ', 'Das', 'rn700', 50, 1719060637, 'rn123@gmail.com', 'Rn123@gmail.com'),
('Subrata', 'das', 'sd199', 43, 1254789635, 'rn123@gmail.com', 'Raktim2000@'),
('Subrata', 'das', 'sd199', 43, 1254789635, 'rn123@gmail.com', 'Raktim2000@'),
('Subrata', 'das', 'sd199', 43, 1254789635, 'rn123@gmail.com', 'Raktim2000@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
