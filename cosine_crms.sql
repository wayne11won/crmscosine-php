-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 05:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosine_crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) UNSIGNED NOT NULL,
  `Contact_First` varchar(50) NOT NULL,
  `Contact_Last` varchar(50) NOT NULL,
  `Company` varchar(256) NOT NULL,
  `Industry` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Address_City` varchar(12) NOT NULL,
  `Phone` varchar(14) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `sales_repid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `Contact_First`, `Contact_Last`, `Company`, `Industry`, `Address`, `Address_City`, `Phone`, `Email`, `sales_repid`) VALUES
(1, 'Amir', 'Kahnzz', 'Company_test1', 'Construction', 'Valero Street', 'Makati City', '455-8588', 'email1@yahoo.com', 5),
(3, 'John', 'Kevin', 'Company_3', 'Education', 'Mindanao', 'Quezon City', '996-5544', 'test@gmail.com', 1),
(9, 'Waynewon', 'Won', 'University of the Philippines - Open University', 'da', 'National Highway, Brgy. Maahas', 'Los BaÃ±os', '9495635033', 'won_619@yahoo.com', 1),
(10, 'juan', 'jen', 'company23', 'education', 'St Charbel Executive Village MIndanao Avenue', 'Quezon City', '9495635033', 'won_619@yahoo.com', 5),
(11, '2', '20000', '3', '', '', '', '', '', 0),
(12, 'Waynewon', 'Won', 'University of the Philippines - Open University', 'test', 'National Highway, Brgy. Maahas', 'Los BaÃ±os', '9495635033', 'won_619@yahoo.com', 2),
(13, 'Waynewon', 'Won', 'University of the Philippines - Open University', 'test', 'National Highway, Brgy. Maahas', 'Los BaÃ±os', '9495635033', 'won_619@yahoo.com', 2),
(14, 'Waynewon', 'Won', 'University of the Philippines - Open University', 'test', 'National Highway, Brgy. Maahas', 'Los BaÃ±os', '9495635033', 'won_619@yahoo.com', 2),
(15, 'Waynewon', 'Won', 'University of the Philippines - Open University', 'fds', 'National Highway, Brgy. Maahas', 'Los BaÃ±os', '9495635033', 'won_619@yahoo.com', 2),
(16, 'Waynewon', 'Won', 'University of the Philippines - Open University', 'fds', 'National Highway, Brgy. Maahas', 'Los BaÃ±os', '9495635033', 'won_619@yahoo.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactstatus`
--

CREATE TABLE `tblcontactstatus` (
  `ID` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactstatus`
--

INSERT INTO `tblcontactstatus` (`ID`, `status`) VALUES
(1, 'lead'),
(2, 'opportunity'),
(3, 'customer/won'),
(4, 'archive');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotes`
--

CREATE TABLE `tblnotes` (
  `id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Notes` tinytext,
  `Is_New_Todo` int(11) UNSIGNED NOT NULL,
  `Todo_Type_ID` int(11) UNSIGNED NOT NULL,
  `Todo_Desc_ID` int(11) UNSIGNED NOT NULL,
  `Todo_Due_Date` varchar(29) DEFAULT NULL,
  `Contact` int(11) UNSIGNED NOT NULL,
  `Task_Status` int(11) UNSIGNED NOT NULL,
  `Task_Update` varchar(51) DEFAULT NULL,
  `Sales_Rep` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotes`
--

INSERT INTO `tblnotes` (`id`, `Date`, `Notes`, `Is_New_Todo`, `Todo_Type_ID`, `Todo_Desc_ID`, `Todo_Due_Date`, `Contact`, `Task_Status`, `Task_Update`, `Sales_Rep`) VALUES
(1, '2014-07-11', 'ddddd', 1, 1, 1, '07/23/2014 6:00pm to 8:00pm', 1, 1, '', 1),
(2, '2015-10-10', 'Sample Note', 0, 1, 1, NULL, 2, 1, NULL, 2),
(3, '2015-05-21', 'sx', 1, 1, 2, '07/31/2014', 3, 1, '', 1),
(4, '2014-06-01', 'Want to be sure to communicate weekly.', 1, 2, 3, '07/04/2014 10:00am to 10:30am', 4, 1, 'Ongoing', 1),
(5, '2014-01-31', 'Was introduced at textile conference.zzz', 1, 1, 1, '04/09/2014 3:45pm to 4:45pm', 5, 2, 'Great demo. All they needed to seal the deal.<br>', 1),
(6, '2014-11-11', 'Great to have this customer on board!', 0, 1, 4, NULL, 6, 1, NULL, 1),
(7, '2017-01-27', 'test', 0, 1, 2, '', 3, 1, '', 1),
(8, '2017-01-11', 'test123', 0, 1, 5, NULL, 6, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `prdID` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`prdID`, `product_name`, `price`) VALUES
(1, 'Capacitor Bank', 20000),
(2, 'Automatic voltage regulator', 5200),
(3, 'Panel board', 2),
(4, 'Transformer', 350000),
(5, 'Variable Frequency Drive', 400000),
(6, 'Lighting Panel', 8000),
(8, 'Unitized panel board', 5030),
(9, 'Programmable logic Controller', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `tblroles`
--

CREATE TABLE `tblroles` (
  `id` int(11) NOT NULL,
  `role` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblroles`
--

INSERT INTO `tblroles` (`id`, `role`) VALUES
(1, 'Sales Rep'),
(2, 'Sales Manager'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbltask`
--

CREATE TABLE `tbltask` (
  `pid` int(11) UNSIGNED NOT NULL,
  `Quantity` int(11) UNSIGNED NOT NULL,
  `Product` varchar(256) NOT NULL,
  `Subprice` decimal(10,2) DEFAULT NULL,
  `Total` decimal(10,2) DEFAULT NULL,
  `contact_id` int(11) UNSIGNED NOT NULL,
  `Sales_Rep_id` int(11) UNSIGNED NOT NULL,
  `notes` varchar(256) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltask`
--

INSERT INTO `tbltask` (`pid`, `Quantity`, `Product`, `Subprice`, `Total`, `contact_id`, `Sales_Rep_id`, `notes`, `status`) VALUES
(1, 3, 'product1', '50000.00', '150000.00', 1, 1, 'notes1', 'pending'),
(2, 2, 'product2', '10000.00', '20000.00', 2, 2, 'notes1', 'pending'),
(3, 2, 'product4', '3000.00', '6000.00', 3, 1, 'notes1', 'pending'),
(4, 21, 'Automatic voltage regulator', '5200.00', '213.00', 3, 1, 'dsa', 'PENDING'),
(5, 2, 'Capacitor Bank', '20000.00', '213.00', 3, 1, 'dasd', 'PENDING'),
(6, 2, 'Capacitor Bank', '20000.00', '40000.00', 3, 1, 'dasd', 'PENDING'),
(7, 2, 'Capacitor Bank', '20000.00', '40000.00', 3, 1, 'dasd', 'PENDING'),
(8, 2, 'Capacitor Bank', '20000.00', '40000.00', 3, 1, 'dasd', 'PENDING'),
(9, 2, 'Capacitor Bank', '20000.00', '40000.00', 3, 1, 'dasd', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `tbltaskstatus`
--

CREATE TABLE `tbltaskstatus` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltaskstatus`
--

INSERT INTO `tbltaskstatus` (`id`, `status`) VALUES
(1, 'pending'),
(2, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `tbltododesc`
--

CREATE TABLE `tbltododesc` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltododesc`
--

INSERT INTO `tbltododesc` (`id`, `description`) VALUES
(1, 'Follow Up Email'),
(2, 'Phone Call'),
(3, 'Lunch Meeting'),
(4, 'Tech Demo'),
(5, 'Meetup'),
(6, 'Conference'),
(7, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `tbltodotype`
--

CREATE TABLE `tbltodotype` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltodotype`
--

INSERT INTO `tbltodotype` (`id`, `type`) VALUES
(1, 'task'),
(2, 'meeting');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `Name_Title` varchar(30) DEFAULT NULL,
  `Name_First` varchar(6) NOT NULL,
  `Name_Middle` varchar(30) DEFAULT NULL,
  `Name_Last` varchar(8) NOT NULL,
  `Email` varchar(16) NOT NULL,
  `Password` varchar(9) NOT NULL,
  `User_Roles` int(11) UNSIGNED NOT NULL,
  `User_Status` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `Name_Title`, `Name_First`, `Name_Middle`, `Name_Last`, `Email`, `Password`, `User_Roles`, `User_Status`) VALUES
(1, 'testrep1', NULL, 'Johnny', NULL, 'Rep', 'rep@test.com', '1234', 1, 1),
(2, 'testrep2', NULL, 'Mary', NULL, 'Rep', 'rep2@test.com', '1234', 1, 1),
(3, 'testmanager3', NULL, 'Suzy', NULL, 'Manager', 'manager@test.com', '1234', 2, 1),
(4, 'testmanager4', NULL, 'Sales', NULL, 'Manager1', 'sm@sm.com', '1234', 2, 1),
(5, 'test5', NULL, 'Rich', NULL, 'C', 'test@test.com', '4321', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluserstatus`
--

CREATE TABLE `tbluserstatus` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluserstatus`
--

INSERT INTO `tbluserstatus` (`id`, `status`) VALUES
(1, 'active'),
(2, 'inactive'),
(3, 'pending approval');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotes`
--
ALTER TABLE `tblnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`prdID`);

--
-- Indexes for table `tblroles`
--
ALTER TABLE `tblroles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltask`
--
ALTER TABLE `tbltask`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbltaskstatus`
--
ALTER TABLE `tbltaskstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltododesc`
--
ALTER TABLE `tbltododesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltodotype`
--
ALTER TABLE `tbltodotype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluserstatus`
--
ALTER TABLE `tbluserstatus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblnotes`
--
ALTER TABLE `tblnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `prdID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblroles`
--
ALTER TABLE `tblroles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbltask`
--
ALTER TABLE `tbltask`
  MODIFY `pid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbltaskstatus`
--
ALTER TABLE `tbltaskstatus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltododesc`
--
ALTER TABLE `tbltododesc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbltodotype`
--
ALTER TABLE `tbltodotype`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluserstatus`
--
ALTER TABLE `tbluserstatus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
