-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 01:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(100) NOT NULL,
  `a_name` varchar(300) NOT NULL,
  `a_email` varchar(300) NOT NULL,
  `a_profile_pic` varchar(1000) NOT NULL,
  `a_password` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_profile_pic`, `a_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'upload/Screenshot.png', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(300) NOT NULL,
  `c_email` varchar(300) NOT NULL,
  `c_phone` bigint(20) NOT NULL,
  `c_profile_pic` varchar(1000) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_city` varchar(300) NOT NULL,
  `c_state` varchar(300) NOT NULL,
  `c_pin` int(10) NOT NULL,
  `c_password` varchar(800) NOT NULL,
  `c_created_date` date NOT NULL,
  `c_updated_date` date NOT NULL,
  `c_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_profile_pic`, `c_address`, `c_city`, `c_state`, `c_pin`, `c_password`, `c_created_date`, `c_updated_date`, `c_status`) VALUES
(9, 'Karthi', 'karthik45@gmail.com', 9993905973, 'upload/Screenshot.png', 'Nidle house kokkada', 'Ujire, Dhramasthala', 'Karnataka', 574240, '12345', '2023-06-07', '0000-00-00', 'registered');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(100) NOT NULL,
  `f_date` date NOT NULL,
  `f_discription` varchar(200) NOT NULL,
  `o_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(100) NOT NULL,
  `m_name` varchar(300) NOT NULL,
  `m_discription` varchar(300) NOT NULL,
  `m_price` int(100) NOT NULL,
  `m_manufactured_date` varchar(200) NOT NULL,
  `m_expiry_date` varchar(200) NOT NULL,
  `m_added_date` date NOT NULL,
  `m_updated_date` date NOT NULL,
  `m_status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_discription`, `m_price`, `m_manufactured_date`, `m_expiry_date`, `m_added_date`, `m_updated_date`, `m_status`) VALUES
(4, 'Paracetamol', 'for fever and headache.', 10, '2023-04', '2026-12', '2023-06-14', '0000-00-00', 'posted');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(150) NOT NULL,
  `o_date` date NOT NULL,
  `c_id` int(150) NOT NULL,
  `m_id` int(150) NOT NULL,
  `o_qty` int(200) NOT NULL,
  `o_total_amt` int(200) NOT NULL,
  `o_updated_date` date NOT NULL,
  `o_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pt_id` int(100) NOT NULL,
  `pt_date` date NOT NULL,
  `o_id` int(150) NOT NULL,
  `pt_pay_mode` varchar(200) NOT NULL,
  `pt_total_amt` int(250) NOT NULL,
  `pt_updated_date` date NOT NULL,
  `pt_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `ps_id` int(11) NOT NULL,
  `ps_date` date NOT NULL,
  `ps_patient_name` varchar(200) NOT NULL,
  `ps_age` int(11) NOT NULL,
  `ps_gender` varchar(100) NOT NULL,
  `ps_file` varchar(200) NOT NULL,
  `ps_discrption` longtext NOT NULL,
  `ps_response` longtext NOT NULL,
  `ps_updated_date` date NOT NULL,
  `ps_status` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pr_id` int(150) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_dealer_name` varchar(300) NOT NULL,
  `pr_dealer_phone` varchar(20) NOT NULL,
  `m_title` varchar(500) NOT NULL,
  `pr_qty` int(200) NOT NULL,
  `pr_rate` int(11) NOT NULL,
  `pr_total_amt` int(100) NOT NULL,
  `pr_manufacturing_date` varchar(200) NOT NULL,
  `pr_expiry_date` varchar(200) NOT NULL,
  `pr_updated_date` date NOT NULL,
  `pr_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pr_id`, `pr_date`, `pr_dealer_name`, `pr_dealer_phone`, `m_title`, `pr_qty`, `pr_rate`, `pr_total_amt`, `pr_manufacturing_date`, `pr_expiry_date`, `pr_updated_date`, `pr_status`) VALUES
(4, '2023-06-17', 'sharath', '1234567890', 'Dereplin', 100, 10, 1000, '2023-06', '2027-07', '0000-00-00', 'posted');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `st_id` int(11) NOT NULL,
  `st_date` date NOT NULL,
  `m_id` int(11) NOT NULL,
  `st_qty` int(11) NOT NULL,
  `st_updated_date` date NOT NULL,
  `st_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pr_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
