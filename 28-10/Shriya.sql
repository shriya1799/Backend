-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 03:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shriya`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accessories`
--

CREATE TABLE `Accessories` (
  `SR. No` int(20) NOT NULL,
  `Product Name` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `Brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Accessories`
--

INSERT INTO `Accessories` (`SR. No`, `Product Name`, `Id`, `Brand`) VALUES
(1, 'Buckle', 135, 'Maybelline'),
(2, 'Rubber Band', 563, 'Nykaa'),
(3, 'Specs', 457, 'Lakme'),
(4, 'Ring', 898, 'Faces Canada'),
(5, 'Mascara', 895, 'Apsara'),
(6, 'Tshirt', 639, 'Puma'),
(7, 'Jeans', 842, 'Denim'),
(8, 'Perfume', 855, 'Miniso'),
(9, 'Bag', 565, 'Fastrack'),
(10, 'School Bag', 633, 'Sky Bags');

-- --------------------------------------------------------

--
-- Table structure for table `Electronics`
--

CREATE TABLE `Electronics` (
  `SR. No` int(20) NOT NULL,
  `Product Name` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `Area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Electronics`
--

INSERT INTO `Electronics` (`SR. No`, `Product Name`, `Id`, `Area`) VALUES
(1, 'TV', 369, 'Satellite'),
(2, 'Remote', 569, 'Shyamal'),
(3, 'Laptop', 453, 'Jodhpur'),
(4, 'Mouse', 598, 'CG Road'),
(5, 'KeyBoard', 896, 'Bodakdev'),
(6, 'Mobile', 632, 'Science City'),
(7, 'tablet', 843, 'South Bopal'),
(8, 'Earphones', 851, 'Ranip'),
(9, 'MacBook', 568, 'Law Garden'),
(10, 'IPhone', 633, 'Gurukul');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `SR. No` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Number` int(20) NOT NULL,
  `Mail-id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`SR. No`, `Name`, `Surname`, `Number`, `Mail-id`) VALUES
(1, 'Shriya', 'Patel', 971261781, 'sp@gmail.com'),
(2, 'Riya ', 'Patel', 91066257, 'rp@gmail.cpm'),
(3, 'root@localhost', 'Sanghavi', 9873483, 'ss@gmail.com'),
(4, 'root@localhost', 'Savaliya', 734334223, 'ks@gmail.com'),
(5, 'root@localhost', 'Suthar', 521232168, 'vs@gmail.com'),
(6, 'root@localhost', 'Rao', 465789123, 'hr@gmail.com'),
(7, 'root@localhost', 'Patel', 987654321, 'jp@gmail.com'),
(8, 'root@localhost', 'Thakkar', 845621563, 'kt@gmail.com'),
(9, 'root@localhost', 'Kotadiya', 543684561, 'sk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Jewellery`
--

CREATE TABLE `Jewellery` (
  `SR. No` int(20) NOT NULL,
  `Jewellery` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Mail-id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Jewellery`
--

INSERT INTO `Jewellery` (`SR. No`, `Jewellery`, `Id`, `Type`, `Mail-id`) VALUES
(1, 'Ring', 123, 'Diamond', 'ws@gmail.com'),
(2, 'Bracelet', 565, 'Platinum', 'ps@gmail.com'),
(3, 'Necklace', 457, 'Gold', 'hj@gmail.com'),
(4, 'Anklet', 898, 'SIlver', 'ss@gmail.com'),
(5, 'Nose Ring', 895, 'Gold', 'ks@gmail.com'),
(6, 'Necklace', 639, 'Platinum', 'vs@gmail.com'),
(7, 'Ring', 842, 'Gold', 'hr@gmail.com'),
(8, 'Bracelet', 854, 'Platinum', 'jp@gmail.com'),
(9, 'Payal', 563, 'SIlver', 'kt@gmail.com'),
(10, 'Earrings', 632, 'Diamond', 'sk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `SR. No` int(20) NOT NULL,
  `Movie Name` varchar(50) NOT NULL,
  `Release Date` date NOT NULL,
  `Star Cast` varchar(100) NOT NULL,
  `Review` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`SR. No`, `Movie Name`, `Release Date`, `Star Cast`, `Review`) VALUES
(1, '	War', '2019-10-01', 'Hritik Roshan,Tiger Shroff, Vani Kapoor', 'Good'),
(2, 'Saaho', '2019-05-21', 'Prabhas, Shraddha Kapoor', 'Moderate'),
(3, 'Kabir Singh', '2019-06-15', 'Shahid Kappor, Kiara Advani', 'Good'),
(4, 'Uri: The Surgical Strike	', '2019-11-08', 'Vicky Kaushal, Mohit Raina', 'Good'),
(5, 'Bharat', '2019-09-10', 'Salman Khan, Katrina Kaif', 'Moderate'),
(6, 'Good Newwz', '2019-08-30', 'Akshay Kumar, Kareena Kapoor, Diljit Dosang, Kiara Advani', 'Good'),
(7, 'Mission Mangal', '2019-09-11', 'Akshay Kumar, Vidya Balan, Tapsee Pannu', 'Good'),
(8, 'Housefull 4', '2019-10-07', 'Akshay Kumar, Riteish Deshmukh', 'Good'),
(9, 'Gully Boy', '2019-10-12', 'Ranveer Singh, Alia Bhatt', 'Good'),
(10, 'Dabangg 3', '2021-10-23', 'Salman Khan', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `SR. No` int(20) NOT NULL,
  `Product Name` varchar(20) NOT NULL,
  `Product Id` int(20) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`SR. No`, `Product Name`, `Product Id`, `Brand`, `Price`) VALUES
(1, 'Lip Stick', 561, 'Maybelline', 700),
(2, 'Kajal', 965, 'Nykaa', 500),
(3, 'Eye Liner', 951, 'Lakme', 900),
(4, 'Nail Paint', 854, 'Faces Canada', 600),
(5, 'Mascara', 654, 'Kay', 550),
(6, 'Makeup Brush', 956, 'Loreal', 800),
(7, 'Lip Gloss', 963, 'Sugar', 900),
(8, 'Foundation', 335, 'Mac', 1500),
(9, 'Toner', 548, 'Faces Canada', 1200),
(10, 'Compact powder', 751, 'Nykaa', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `Sports`
--

CREATE TABLE `Sports` (
  `SR. No` int(20) NOT NULL,
  `Product Name` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `Brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Sports`
--

INSERT INTO `Sports` (`SR. No`, `Product Name`, `Id`, `Brand`) VALUES
(1, 'Foot ball', 123, 'Adidas'),
(2, 'Basket ball', 565, 'Puma'),
(3, 'Tennis Ball', 457, 'Fastrack'),
(4, 'Badminton', 898, 'Puma'),
(5, 'Soccer', 895, 'Adidas');

-- --------------------------------------------------------

--
-- Table structure for table `Stationery`
--

CREATE TABLE `Stationery` (
  `SR. No` int(20) NOT NULL,
  `Product Name` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Stationery`
--

INSERT INTO `Stationery` (`SR. No`, `Product Name`, `Id`, `Brand`, `Price`) VALUES
(1, 'Pencil', 123, 'Apsara', 10),
(2, 'Eraser', 565, 'Natraj', 5),
(3, 'Sharpner', 457, 'Camlin', 5),
(4, 'Scale', 898, 'Hauser', 5),
(5, 'Rounder', 895, 'Apsara', 50),
(6, 'Notebook', 639, 'Classmate', 50),
(7, 'Pen', 842, 'Camlin', 5),
(8, 'Notepad', 854, 'Natraj', 100),
(9, 'Compass Box', 563, 'Apsara', 80),
(10, 'Pouch', 632, 'Camlin', 50);

-- --------------------------------------------------------

--
-- Table structure for table `Store`
--

CREATE TABLE `Store` (
  `SR. No` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Mail-id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Store`
--

INSERT INTO `Store` (`SR. No`, `Name`, `Id`, `Area`, `Mail-id`) VALUES
(1, 'Westside', 123, 'Satellite', 'ws@gmail.com'),
(2, 'Pantaloons', 565, 'Shyamal', 'ps@gmail.com'),
(3, 'H & M', 457, 'Jodhpur', 'hj@gmail.com'),
(4, 'Forever 21', 898, 'CG Road', 'fg@gmail.com'),
(5, 'Puma', 895, 'Bodakdev', 'ks@gmail.com'),
(6, 'Nike', 639, 'Science City', 'vs@gmail.com'),
(7, 'Adidas', 842, 'South Bopal', 'hr@gmail.com'),
(8, 'Fastrack', 854, 'Ranip', 'jp@gmail.com'),
(9, 'Titan', 563, 'Law Garden', 'kt@gmail.com'),
(10, 'Skechers', 632, 'Gurukul', 'sk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `SR. No` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Surname` varchar(10) NOT NULL,
  `Group` varchar(10) NOT NULL,
  `Hobby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`SR. No`, `Name`, `Surname`, `Group`, `Hobby`) VALUES
(1, 'Shriya', 'Patel', 'Challenger', 'Cooking'),
(2, 'Riya ', 'Kansagara', 'Rockers', 'Drawing'),
(3, 'Avani', 'Sangani', 'Fighters', 'Designing'),
(4, 'Shreyanshi', 'Vekariya', 'Warriors', 'Drawing'),
(5, 'Kajal', 'Panchal', 'Challenger', 'Singing'),
(6, 'Anjani', 'Patel', 'Fighters', 'Chatting'),
(7, 'Jaydeep', 'Bambhava', 'Rockers', 'Cricket'),
(8, 'Ranjeet', 'Jayswal', 'Warriors', 'Valleyball'),
(9, 'Devarsh', 'Chauhan', 'Challenger', 'Football'),
(10, 'Manish', 'Thakkar', 'Fighters', 'Tennis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accessories`
--
ALTER TABLE `Accessories`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Electronics`
--
ALTER TABLE `Electronics`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Jewellery`
--
ALTER TABLE `Jewellery`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Sports`
--
ALTER TABLE `Sports`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Stationery`
--
ALTER TABLE `Stationery`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Store`
--
ALTER TABLE `Store`
  ADD PRIMARY KEY (`SR. No`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`SR. No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accessories`
--
ALTER TABLE `Accessories`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Electronics`
--
ALTER TABLE `Electronics`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Jewellery`
--
ALTER TABLE `Jewellery`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Movie`
--
ALTER TABLE `Movie`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Sports`
--
ALTER TABLE `Sports`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Stationery`
--
ALTER TABLE `Stationery`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Store`
--
ALTER TABLE `Store`
  MODIFY `SR. No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `SR. No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
