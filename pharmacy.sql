-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: july 30, 2025 at 07:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` decimal(7,0) NOT NULL,
  `A_USERNAME` varchar(50) NOT NULL,
  `A_PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `A_USERNAME`, `A_PASSWORD`) VALUES
(1, 'pritom_sir', '1013');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` decimal(6,0) NOT NULL,
  `C_FNAME` varchar(30) NOT NULL,
  `C_LNAME` varchar(30) DEFAULT NULL,
  `C_AGE` int(11) NOT NULL,
  `C_SEX` varchar(6) NOT NULL,
  `C_PHNO` decimal(11,0) NOT NULL,
  `C_MAIL` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_FNAME`, `C_LNAME`, `C_AGE`, `C_SEX`, `C_PHNO`, `C_MAIL`) VALUES
(987101, 'Jannatul ', 'Bushra', 22, 'Female', 01632587415, 'jannatulbushra@gmail.com'),
(987102, 'Jabir ', 'Sharif', 24, 'Male', 01887565423, 'jabirsharif@gmail.com'),
(987103, 'Sharmista', 'Dev', 45, 'Female', 01796541236, 'sharmistadev@hotmail.com'),
(987104, 'Lazina', 'Shiddiq', 30, 'Female', 01645129635, 'lazinasiddiq@gmail.com'),
(987105, 'Kamruzzaman', 'Sohan', 40, 'Male', 01589541235, 'kamruzzamansohan@hotmail.com'),
(987106, 'Sowrob ', 'Roy', 60, 'Male', 01796574123, 'sowrobroy@yahoo.com'),
(987107, 'Mahim', 'Alam', 35, 'Male', 01745963259, 'mahimalam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `emplogin`
--

CREATE TABLE `emplogin` (
  `E_ID` decimal(7,0) NOT NULL,
  `E_USERNAME` varchar(20) NOT NULL,
  `E_PASS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emplogin`
--

INSERT INTO `emplogin` (`E_ID`, `E_USERNAME`, `E_PASS`) VALUES

(4567001, 'HRI', '232-15-013'),
(4567002, 'OBA', '232-15-350'),
(4567003, 'SAY', '232-15-854'),
(4567004, 'ROK', '232-15-061'),
(4567005, 'RIF', '232-15-694'),
(4567006, 'SRS6', 'pass6'),
(4567007, 'SRS7', 'pass7'),
(4567008, 'SRS8', 'pass8');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_ID` decimal(7,0) NOT NULL,
  `E_FNAME` varchar(30) NOT NULL,
  `E_LNAME` varchar(30) DEFAULT NULL,
  `BDATE` date NOT NULL,
  `E_AGE` int(11) NOT NULL,
  `E_SEX` varchar(6) NOT NULL,
  `E_TYPE` varchar(20) NOT NULL,
  `E_JDATE` date NOT NULL,
  `E_SAL` decimal(8,2) NOT NULL,
  `E_PHNO` decimal(11,0) NOT NULL,
  `E_MAIL` varchar(40) DEFAULT NULL,
  `E_ADD` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `E_FNAME`, `E_LNAME`, `BDATE`, `E_AGE`, `E_SEX`, `E_TYPE`, `E_JDATE`, `E_SAL`, `E_PHNO`, `E_MAIL`, `E_ADD`) VALUES
(1, 'Pranto Pritom', 'Choudhury', '1989-05-24', 30, 'Male', 'Admin', '2009-06-24', 95000.00, 01737043436, 'admin@pharmacia.com', 'Dhaka'),
(4567001, 'Hridoy', 'Kumar', '2003-02-28', 22, 'Male', 'Manager', '2020-05-06', 80000.00, 01791423692, 'hridoykumar@gmail.com', 'Sheujgari, Bogura'),
(4567002, 'Obaidul Haque', 'Buyan', '2003-12-27', 21, 'Male', 'Pharmacist', '2022-11-12', 35000.00, 01568898076, 'obaidulhaque@hotmail.com', 'Brahmanbaria, Chattagram'),
(4567003, 'Ataher Sayem ', 'Fahim', '2004-10-03', 20, 'Male', 'Pharmacist', '2020-10-06', 45000.00, 01775692383, 'atahersayem@gmail.com', 'Bhola, Barishal'),
(4567004, 'Rokonuzzaman', 'Ovi', '2004-01-08', 21, 'Male', 'Pharmacist', '2021-05-16', 32000.00, 01880981157, 'rokonuzzamanovi@gmail.com', 'Nawdapara, Rajshahi'),
(4567005, 'Abdullah Al', 'Rifat', '2004-06-04', 21, 'Male', 'Pharmacist', '2021-11-05', 30000.00, 01629081910, 'atiqueshahria@gmail.com', 'Chandpur, Bangladesh'),
(4567006, 'Sharika', 'Hossein', '1998-02-01', 27, 'Female', 'Pharmacist', '2025-07-06', 21000.00, 7854123694, 'sarikahossein@gmail.com', 'Dhaka'),
(4567007, 'Sumaiya', 'Afrin', '1999-12-11', 25, 'Female', 'Pharmacist', '2025-02-05', 28000.00, 01636541234, 'sumaiyaafrin@hotmail.com', 'Gabtoli, Dhaka'),
(4567008, 'Atique', 'Shahria', '2000-04-05', 25, 'Male', 'Pharmacist', '2020-11-05', 30000.00, 01896541235, 'atiqueshahria@gmail.com', 'Birulia, Savar');

-- --------------------------------------------------------

--
-- Table structure for table `meds`
--

CREATE TABLE `meds` (
  `MED_ID` decimal(6,0) NOT NULL,
  `MED_NAME` varchar(50) NOT NULL,
  `MED_QTY` int(11) NOT NULL,
  `CATEGORY` varchar(20) DEFAULT NULL,
  `MED_PRICE` decimal(6,2) NOT NULL,
  `LOCATION_RACK` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meds`
--

INSERT INTO `meds` (`MED_ID`, `MED_NAME`, `MED_QTY`, `CATEGORY`, `MED_PRICE`, `LOCATION_RACK`) VALUES
(123001, 'Paracetamol 650 MG', 625, 'Tablet', 1.00, 'rack 5'),
(123002, 'Panadol Cold & Flu', 90, 'Tablet', 2.50, 'rack 6'),
(123003, 'Livogen', 25, 'Capsule', 5.00, 'rack 3'),
(123004, 'Monus', 440, 'Tablet', 1.25, 'rack 4'),
(123005, 'Cyclopam', 120, 'Tablet', 6.00, 'rack 2'),
(123006, 'Benadryl 200 ML', 35, 'Syrup', 50.00, 'rack 10'),
(123007, 'Lopamide', 15, 'Capsule', 5.00, 'rack 7'),
(123008, 'Vitamin C', 90, 'Tablet', 3.00, 'rack 8'),
(123009, 'Omeprazole', 35, 'Capsule', 4.00, 'rack 3'),
(123010, 'Concur 5 MG', 600, 'Tablet', 3.50, 'rack 9'),
(123011, 'Augmentin 250 ML', 115, 'Syrup', 80.00, 'rack 7');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `P_ID` decimal(4,0) NOT NULL,
  `SUP_ID` decimal(3,0) NOT NULL,
  `MED_ID` decimal(6,0) NOT NULL,
  `P_QTY` int(11) NOT NULL,
  `P_COST` decimal(8,2) NOT NULL,
  `PUR_DATE` date NOT NULL,
  `MFG_DATE` date NOT NULL,
  `EXP_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`P_ID`, `SUP_ID`, `MED_ID`, `P_QTY`, `P_COST`, `PUR_DATE`, `MFG_DATE`, `EXP_DATE`) VALUES
(1001, 136, 123010, 200, 1500.50, '2025-03-01', '2025-01-05', '2028-01-04'),
(1002, 123, 123002, 1000, 3000.00, '2025-02-01', '2024-10-01', '2027-10-05'),
(1003, 145, 123006, 20, 800.00, '2025-04-22', '2024-12-05', '2026-07-01'),
(1004, 156, 123004, 250, 1000.00, '2025-04-02', '2025-05-06', '2028-05-06'),
(1005, 123, 123005, 200, 1200.00, '2025-02-01', '2024-08-02', '2026-04-01'),
(1006, 162, 123010, 500, 1500.00, '2024-11-22', '2024-01-01', '2027-01-02'),
(1007, 123, 123001, 500, 450.00, '2024-10-02', '2023-01-05', '2026-01-06');

--
-- Triggers `purchase`
--
DELIMITER $$
CREATE TRIGGER `QTYDELETE` AFTER DELETE ON `purchase` FOR EACH ROW BEGIN
UPDATE meds SET MED_QTY=MED_QTY-old.P_QTY WHERE meds.MED_ID=old.MED_ID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `QTYINSERT` AFTER INSERT ON `purchase` FOR EACH ROW BEGIN
UPDATE meds SET MED_QTY=MED_QTY+new.P_QTY WHERE meds.MED_ID=new.MED_ID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `QTYUPDATE` AFTER UPDATE ON `purchase` FOR EACH ROW BEGIN
UPDATE meds SET MED_QTY=MED_QTY-old.P_QTY WHERE meds.MED_ID=new.MED_ID;
UPDATE meds SET MED_QTY=MED_QTY+new.P_QTY WHERE meds.MED_ID=new.MED_ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SALE_ID` int(11) NOT NULL,
  `C_ID` decimal(6,0) NOT NULL,
  `S_DATE` date DEFAULT NULL,
  `S_TIME` time DEFAULT NULL,
  `TOTAL_AMT` decimal(8,2) DEFAULT NULL,
  `E_ID` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SALE_ID`, `C_ID`, `S_DATE`, `S_TIME`, `TOTAL_AMT`, `E_ID`) VALUES
(1, 987101, '2025-04-15', '13:23:03', 180.00, 4567002),
(2, 987106, '2025-04-21', '20:19:31', 585.00, 1),
(3, 987103, '2025-04-15', '11:23:53', 120.00, 4567003),
(4, 987104, '2025-04-14', '18:20:00', 955.00, 4567001),
(5, 987103, '2025-04-21', '15:24:43', 45.00, 1),
(6, 987102, '2025-03-11', '10:24:43', 140.00, 4567004),
(7, 987105, '2025-04-24', '00:25:54', 350.00, 1),
(8, 987104, '2025-04-21', '00:47:47', 35.00, 4567001),
(12, 987103, '2025-05-14', '19:33:16', 60.00, 1),
(13, 987104, '2025-05-24', '21:15:56', 62.50, 4567001),
(15, 987107, '2025-06-01', '18:39:46', 420.00, 1),
(16, 987106, '2025-06-04', '18:52:21', 30.00, 1),
(17, 987103, '2025-07-04', '19:35:56', 57.50, 1),
(18, 987105, '2025-07-14', '19:36:56', 160.00, 4567005),
(20, 987103, '2025-07-28', '22:53:18', 150.00, 4567005);

--
-- Triggers `sales`
--
DELIMITER $$
CREATE TRIGGER `SALE_ID_DELETE` BEFORE DELETE ON `sales` FOR EACH ROW BEGIN
DELETE from sales_items WHERE sales_items.SALE_ID=old.SALE_ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_items`
--

CREATE TABLE `sales_items` (
  `SALE_ID` int(11) NOT NULL,
  `MED_ID` decimal(6,0) NOT NULL,
  `SALE_QTY` int(11) NOT NULL,
  `TOT_PRICE` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_items`
--

INSERT INTO `sales_items` (`SALE_ID`, `MED_ID`, `SALE_QTY`, `TOT_PRICE`) VALUES
(1, 123001, 20, 20.00),
(1, 123011, 2, 160.00),
(2, 123003, 75, 225.00),
(2, 123005, 60, 360.00),
(3, 123008, 40, 120.00),
(4, 123010, 250, 875.00),
(4, 123011, 1, 80.00),
(5, 123001, 45, 45.00),
(6, 123006, 2, 100.00),
(6, 123009, 10, 40.00),
(7, 123001, 100, 100.00),
(7, 123003, 50, 250.00),
(8, 123001, 10, 10.00),
(8, 123002, 10, 25.00),
(12, 123005, 10, 60.00),
(13, 123002, 25, 62.50),
(15, 123005, 45, 270.00),
(15, 123006, 3, 150.00),
(16, 123008, 10, 30.00),
(17, 123004, 10, 12.50),
(17, 123007, 5, 25.00),
(17, 123009, 5, 20.00),
(18, 123011, 2, 160.00),
(20, 123005, 25, 150.00);

--
-- Triggers `sales_items`
--
DELIMITER $$
CREATE TRIGGER `SALEDELETE` AFTER DELETE ON `sales_items` FOR EACH ROW BEGIN
UPDATE meds SET MED_QTY=MED_QTY+old.SALE_QTY WHERE meds.MED_ID=old.MED_ID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `SALEINSERT` AFTER INSERT ON `sales_items` FOR EACH ROW BEGIN
UPDATE meds SET MED_QTY=MED_QTY-new.SALE_QTY WHERE meds.MED_ID=new.MED_ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `SUP_ID` decimal(3,0) NOT NULL,
  `SUP_NAME` varchar(25) NOT NULL,
  `SUP_ADD` varchar(30) NOT NULL,
  `SUP_PHNO` decimal(11,0) NOT NULL,
  `SUP_MAIL` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SUP_ID`, `SUP_NAME`, `SUP_ADD`, `SUP_PHNO`, `SUP_MAIL`) VALUES
(123, 'Square Pharmaceuticals PLC', '48, Dhaka 1212', 09613707070, 'square@pharma.com'),
(136, 'ACME Laboratoris Ltd', 'ACME 1/4, Kallayanpur', 0280910513, 'acme@pharmsupp.com'),
(145, 'Delta Pharmaceuticals Ltd', '34, Dhaka 1206', 02222292192, 'delta@dpharma.com'),
(156, 'Incepta Pharmaceutical Ltd', 'Tejgaon, Dhaka-1208', 09609222777, 'incepta@pharma.com'),
(162, 'Renata PLC', '7, Mirpur, Dhaka-1216', 24100275054, 'info@renata-ltd.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_USERNAME`),
  ADD UNIQUE KEY `USERNAME` (`A_USERNAME`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`),
  ADD UNIQUE KEY `C_PHNO` (`C_PHNO`),
  ADD UNIQUE KEY `C_MAIL` (`C_MAIL`);

--
-- Indexes for table `emplogin`
--
ALTER TABLE `emplogin`
  ADD PRIMARY KEY (`E_USERNAME`),
  ADD KEY `E_ID` (`E_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `meds`
--
ALTER TABLE `meds`
  ADD PRIMARY KEY (`MED_ID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`P_ID`,`MED_ID`),
  ADD KEY `SUP_ID` (`SUP_ID`),
  ADD KEY `MED_ID` (`MED_ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SALE_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `E_ID` (`E_ID`);

--
-- Indexes for table `sales_items`
--
ALTER TABLE `sales_items`
  ADD PRIMARY KEY (`SALE_ID`,`MED_ID`),
  ADD KEY `MED_ID` (`MED_ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`SUP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SALE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `employee` (`E_ID`);

--
-- Constraints for table `emplogin`
--
ALTER TABLE `emplogin`
  ADD CONSTRAINT `emplogin_ibfk_1` FOREIGN KEY (`E_ID`) REFERENCES `employee` (`E_ID`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`SUP_ID`) REFERENCES `suppliers` (`SUP_ID`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`MED_ID`) REFERENCES `meds` (`MED_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
