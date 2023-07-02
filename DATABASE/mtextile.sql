-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 12:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtextile`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashdetails`
--

CREATE TABLE `cashdetails` (
  `ID` int(30) NOT NULL,
  `PaymentHistory_ID` int(30) NOT NULL,
  `OrderNumber` int(30) NOT NULL,
  `PaymentDate` date NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashdetails`
--

INSERT INTO `cashdetails` (`ID`, `PaymentHistory_ID`, `OrderNumber`, `PaymentDate`, `Amount`) VALUES
(2, 2, 123, '2022-06-30', 13000);

-- --------------------------------------------------------

--
-- Table structure for table `chequedetails`
--

CREATE TABLE `chequedetails` (
  `ID` int(30) NOT NULL,
  `PaymentHistory_ID` int(30) NOT NULL,
  `OrderNumber` int(30) NOT NULL,
  `PaymentDate` date NOT NULL,
  `BankName` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Amount` double NOT NULL,
  `IFSC` varchar(30) NOT NULL,
  `ChequeNumber` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chequedetails`
--

INSERT INTO `chequedetails` (`ID`, `PaymentHistory_ID`, `OrderNumber`, `PaymentDate`, `BankName`, `Branch`, `Amount`, `IFSC`, `ChequeNumber`) VALUES
(3, 2, 123, '2022-06-30', 'bob', 'italva', 13000, 'BARB0ITARWA', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryinformation`
--

CREATE TABLE `deliveryinformation` (
  `ID` int(30) NOT NULL,
  `OrderDetails_ID` int(30) NOT NULL,
  `CatalogName` varchar(30) NOT NULL,
  `DesignName` varchar(30) NOT NULL,
  `TotalLot` int(30) NOT NULL,
  `DeliveryNumber` int(30) NOT NULL,
  `DeliveryDate` date NOT NULL,
  `VehicleNumber` varchar(30) NOT NULL,
  `DriverName` varchar(30) NOT NULL,
  `DriverMobileNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryinformation`
--

INSERT INTO `deliveryinformation` (`ID`, `OrderDetails_ID`, `CatalogName`, `DesignName`, `TotalLot`, `DeliveryNumber`, `DeliveryDate`, `VehicleNumber`, `DriverName`, `DriverMobileNumber`) VALUES
(2, 2, 'ved251', 'xyz123', 25, 123, '2022-06-30', 'GJ-05-YY-7522', 'VED', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` int(10) NOT NULL DEFAULT 1,
  `vkey` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL,
  `DateOfRegister` datetime NOT NULL,
  `Role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`ID`, `Name`, `Email`, `PhoneNumber`, `Password`, `Status`, `vkey`, `verified`, `DateOfRegister`, `Role`) VALUES
(3, 'Patel Ved', 'patelved1791@gmail.com', '9510134029', '202cb962ac59075b964b07152d234b70', 1, '57cdd93cb098656e1cab5ae642ec84fb', '1', '0000-00-00 00:00:00', 0),
(4, 'admin', 'admin@gmail.com', '1234567890', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin', '1', '2022-06-07 11:57:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materialsdetail`
--

CREATE TABLE `materialsdetail` (
  `ID` int(30) NOT NULL,
  `MaterialType` varchar(30) NOT NULL,
  `MaterialID` varchar(30) NOT NULL,
  `FileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materialsdetail`
--

INSERT INTO `materialsdetail` (`ID`, `MaterialType`, `MaterialID`, `FileName`) VALUES
(3, 'coton', 'ved251', 'ved251.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `onlinedetails`
--

CREATE TABLE `onlinedetails` (
  `ID` int(30) NOT NULL,
  `Payment_ID` int(30) NOT NULL,
  `OrderNumber` int(30) NOT NULL,
  `PaymentDate` date NOT NULL,
  `TransferMode` varchar(30) NOT NULL,
  `Amount` double NOT NULL,
  `PaymentHistory_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlinedetails`
--

INSERT INTO `onlinedetails` (`ID`, `Payment_ID`, `OrderNumber`, `PaymentDate`, `TransferMode`, `Amount`, `PaymentHistory_ID`) VALUES
(2, 123, 123, '2022-06-30', 'upi', 13000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `ID` int(30) NOT NULL,
  `CatalogName` varchar(30) NOT NULL,
  `Wholesale_ID` int(30) NOT NULL,
  `DesignName` varchar(30) NOT NULL,
  `TotalGreyLot` int(30) NOT NULL,
  `AmountPerLot` int(30) NOT NULL,
  `TotalAmount` int(30) NOT NULL,
  `OrderNumber` int(30) NOT NULL,
  `OrderDate` date NOT NULL,
  `OrderStatus` varchar(30) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`ID`, `CatalogName`, `Wholesale_ID`, `DesignName`, `TotalGreyLot`, `AmountPerLot`, `TotalAmount`, `OrderNumber`, `OrderDate`, `OrderStatus`) VALUES
(2, 'ved251', 5, 'xyz123', 25, 1000, 25000, 123, '2022-06-30', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `orderprocessing`
--

CREATE TABLE `orderprocessing` (
  `ID` int(30) NOT NULL,
  `OrderDetails_ID` int(30) NOT NULL,
  `OrderNumber` int(30) NOT NULL,
  `OrderDate` date NOT NULL,
  `DesignName` varchar(30) NOT NULL,
  `CatalogName` varchar(30) NOT NULL,
  `MaterialType` varchar(30) NOT NULL,
  `TotalGrayLot` int(11) NOT NULL,
  `OrderStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderprocessing`
--

INSERT INTO `orderprocessing` (`ID`, `OrderDetails_ID`, `OrderNumber`, `OrderDate`, `DesignName`, `CatalogName`, `MaterialType`, `TotalGrayLot`, `OrderStatus`) VALUES
(2, 2, 123, '2022-06-30', 'xyz123', 'ved251', 'nylon', 25, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE `paymenthistory` (
  `ID` int(30) NOT NULL,
  `TotalAmount` double NOT NULL,
  `OrderNumber` int(30) NOT NULL,
  `PaymentID` varchar(30) NOT NULL,
  `PaymentDetails` varchar(30) NOT NULL,
  `PaymentMode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenthistory`
--

INSERT INTO `paymenthistory` (`ID`, `TotalAmount`, `OrderNumber`, `PaymentID`, `PaymentDetails`, `PaymentMode`) VALUES
(2, 25000, 123, '251', 'cash', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `ID` int(30) NOT NULL,
  `OrderDetails_ID` int(30) NOT NULL,
  `TotalAmount` double NOT NULL,
  `RemainingAmount` double NOT NULL,
  `AdvancePay` double NOT NULL,
  `OrderNumber` double NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`ID`, `OrderDetails_ID`, `TotalAmount`, `RemainingAmount`, `AdvancePay`, `OrderNumber`, `OrderDate`) VALUES
(2, 2, 25000, 12000, 13000, 123, '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `retailscatalog`
--

CREATE TABLE `retailscatalog` (
  `ID` int(30) NOT NULL,
  `CatalogName` varchar(30) NOT NULL,
  `ExpireDate` date NOT NULL,
  `FileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailscatalog`
--

INSERT INTO `retailscatalog` (`ID`, `CatalogName`, `ExpireDate`, `FileName`) VALUES
(9, 'ved251', '2022-06-30', 'Project-dbdesigner.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `wholesalecatalog`
--

CREATE TABLE `wholesalecatalog` (
  `ID` int(30) NOT NULL,
  `DesignName` varchar(30) NOT NULL,
  `ExpireDate` date NOT NULL,
  `CatalogName` varchar(30) NOT NULL,
  `FileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wholesalecatalog`
--

INSERT INTO `wholesalecatalog` (`ID`, `DesignName`, `ExpireDate`, `CatalogName`, `FileName`) VALUES
(5, 'xyz123', '2022-06-30', 'ved251', 'Project-dbdesigner.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `wholeselerdetails`
--

CREATE TABLE `wholeselerdetails` (
  `ID` int(30) NOT NULL,
  `FirmName` varchar(30) NOT NULL,
  `GST` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` int(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `PanCard` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PinCode` int(10) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `DateOfAnniversary` date NOT NULL,
  `Status` int(10) NOT NULL DEFAULT 1,
  `vkey` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL,
  `DateOfRegister` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--

-- admin table

--

CREATE TABLE `admin` (
  `admin_username` varchar(30) not NULL,
  `admin_password` varchar(30) not NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into admin values('admin','admin');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashdetails`
--
ALTER TABLE `cashdetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CashDetails_fk0` (`PaymentHistory_ID`);

--
-- Indexes for table `chequedetails`
--
ALTER TABLE `chequedetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ChequeDetails_fk0` (`PaymentHistory_ID`);

--
-- Indexes for table `deliveryinformation`
--
ALTER TABLE `deliveryinformation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DeliveryInformation_fk0` (`OrderDetails_ID`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `materialsdetail`
--
ALTER TABLE `materialsdetail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `onlinedetails`
--
ALTER TABLE `onlinedetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OnlineDetails_fk0` (`PaymentHistory_ID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OrderDetails_fk0` (`Wholesale_ID`);

--
-- Indexes for table `orderprocessing`
--
ALTER TABLE `orderprocessing`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OrderProcessing_fk0` (`OrderDetails_ID`);

--
-- Indexes for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Payments_fk0` (`OrderDetails_ID`);

--
-- Indexes for table `retailscatalog`
--
ALTER TABLE `retailscatalog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wholesalecatalog`
--
ALTER TABLE `wholesalecatalog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wholeselerdetails`
--
ALTER TABLE `wholeselerdetails`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashdetails`
--
ALTER TABLE `cashdetails`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chequedetails`
--
ALTER TABLE `chequedetails`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliveryinformation`
--
ALTER TABLE `deliveryinformation`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materialsdetail`
--
ALTER TABLE `materialsdetail`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `onlinedetails`
--
ALTER TABLE `onlinedetails`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderprocessing`
--
ALTER TABLE `orderprocessing`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `retailscatalog`
--
ALTER TABLE `retailscatalog`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wholesalecatalog`
--
ALTER TABLE `wholesalecatalog`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wholeselerdetails`
--
ALTER TABLE `wholeselerdetails`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cashdetails`
--
ALTER TABLE `cashdetails`
  ADD CONSTRAINT `CashDetails_fk0` FOREIGN KEY (`PaymentHistory_ID`) REFERENCES `paymenthistory` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chequedetails`
--
ALTER TABLE `chequedetails`
  ADD CONSTRAINT `ChequeDetails_fk0` FOREIGN KEY (`PaymentHistory_ID`) REFERENCES `paymenthistory` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deliveryinformation`
--
ALTER TABLE `deliveryinformation`
  ADD CONSTRAINT `DeliveryInformation_fk0` FOREIGN KEY (`OrderDetails_ID`) REFERENCES `orderdetails` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinedetails`
--
ALTER TABLE `onlinedetails`
  ADD CONSTRAINT `OnlineDetails_fk0` FOREIGN KEY (`PaymentHistory_ID`) REFERENCES `paymenthistory` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `OrderDetails_fk0` FOREIGN KEY (`Wholesale_ID`) REFERENCES `wholesalecatalog` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderprocessing`
--
ALTER TABLE `orderprocessing`
  ADD CONSTRAINT `OrderProcessing_fk0` FOREIGN KEY (`OrderDetails_ID`) REFERENCES `orderdetails` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `Payments_fk0` FOREIGN KEY (`OrderDetails_ID`) REFERENCES `orderdetails` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
