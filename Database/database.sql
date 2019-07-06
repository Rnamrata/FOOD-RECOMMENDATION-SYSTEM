-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 12:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `foodID` int(11) NOT NULL,
  `fooname` varchar(30) NOT NULL,
  `ftype` varchar(10) NOT NULL,
  `chooseRest` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`foodID`, `fooname`, `ftype`, `chooseRest`, `price`) VALUES
(1, 'BBQ Grilled Chicken Burger', 'Fast Food', 'Alfresco', 200),
(2, 'Pizza BBQ Chicken', 'Fast Food', 'Alfresco', 265),
(3, 'Chicken Fajita', 'Fast Food', 'Pizza Inn', 315),
(4, 'Taco Pizza', 'Fast Food', 'Pizza Inn', 420),
(5, 'Mutton Afgani', 'Indian', 'Boomers Cafe', 630),
(6, 'Palak Paneer', 'Indian', 'Boomers Cafe', 350),
(7, 'Prawn Masala', 'Indian', 'Boomers Cafe', 450),
(8, 'Thai Soup', 'Chineese', 'Boomers Cafe', 110),
(9, 'Pizza Jalapeno', 'Fast Food', 'Pizza Inn', 265),
(10, 'Chicken Cheese Burge', 'Fast Food', 'Boomers Cafe', 180),
(11, 'Philly Steak Sandwic', 'Fast Food', 'Boomers Cafe', 220),
(12, 'Crispy Fried Chicken', 'Fast Food', 'Boomers Cafe', 85),
(13, 'Chicken Lollipop', 'Fast Food', 'Tarka', 460),
(14, 'Vegetable Pakora', 'Indian', 'Tarka', 360),
(15, 'Soup of the Day', 'Continenta', 'Tarka', 490),
(16, 'Chicken Cashewnut Salad', 'Casual', 'Tarka', 470),
(17, 'Chef Special Chicken', 'Indian', 'Tarka', 250),
(18, 'Dahi Fuchka', 'Indian', 'Tarka', 250),
(19, 'Chicken Tangri Kabab', 'Indian', 'Tarka', 495),
(20, 'Pasta Italiano', 'Fast Food', 'Basillico', 285),
(21, 'Pasta Basta', 'Indian', 'Alfresco', 265),
(22, 'Pasta Basta', 'Fast Food', 'Basillico', 265),
(23, 'Jhal Pasta Basta', 'Indian', 'Basillico', 275),
(24, 'Choko Lava', 'Fast Food', 'Basillico', 120),
(25, 'French Fries', 'Fast Food', 'Basillico', 99),
(26, 'French Fries', 'Fast Food', 'Alfresco', 85),
(28, 'Buffalo Chicken Wings', 'Fast Food', 'Basillico', 210),
(29, 'Pizza Dhaka', 'Fast Food', 'Basillico', 350),
(30, 'Pizza Four Seasons', 'Fast Food', 'Pizza Inn', 315),
(31, 'Pizza Four Seasons', 'Fast Food', 'Alfresco', 350),
(32, 'Pizza BBQ Chicken', 'Fast Food', 'Basillico', 370),
(33, 'Pizza BBQ Chicken', 'Fast Food', 'Pizza Inn', 360),
(34, 'BBQ Grilled Chicken Burger', 'Fast Food', 'Basillico', 240),
(35, 'Chau Meing', 'Chineese', 'Alfresco', 339),
(36, 'Hot & Sour', 'Chineese', 'Alfresco', 150),
(37, 'Manchow Soup', 'Chineese', 'Alfresco', 160),
(38, 'French Fries', 'Fast Food', 'Alfresco', 89),
(39, 'French Fries', 'Chineese', 'Alfresco', 0);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `r_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `location` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `name`, `address`, `location`, `city`, `type`, `phone`) VALUES
(1, 'Alfresco', '25/a, Food Tower', 'Khilgao', 'Dhaka', 'Fast Food', 1234567891),
(3, 'Pizza Inn', '5/A', 'Banani', 'Dhaka', 'Fast Food', 1750055000),
(4, 'Basillico', 'House No: 9, Road :5', 'Khilgao', 'Dhaka', 'Continental', 1950000000),
(5, 'Boomers Cafe', 'House no. 25, 3rd floor, ', 'Baily Road', 'Dhaka', 'Casual', 1750099900),
(6, 'Mughal Darbar', '46/1 Islampur Road', 'Puran Dhaka', 'Dhaka', 'Indian', 1950000066),
(7, 'Tarka', '62, Road: 10', 'Banani', 'Dhaka', 'Indian', 1334533891),
(8, 'jjh', '25/a, Food Tower', 'Rampura', 'Dhaka', 'Chineese', 1620000077);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `password`, `gender`, `address`, `city`, `phone`, `email`) VALUES
(1, 'Namrata', 'Roy', 'nam25', 'female', 'Harun Manssion, Aftabnagar', 'dha', 1750000000, 'nam@gmail.com'),
(2, 'Saiba', 'Dipa', 'saiba12', 'female', 'Harun Manssion, Aftabnagar', 'dha', 1620000000, 'saiba@yahoo.com'),
(3, 'Sady', 'Rifat', 'sady123', 'male', 'White House, Badda', 'dha', 1750099999, 'sady@gmail.com'),
(4, 'Sady', 'Rifat', 'sday', 'male', 'White House, Badda', 'dha', 1750000055, 'rifat@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
