-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 06:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenrx`
--

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `lab_id` int(100) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `lab_address` varchar(255) NOT NULL,
  `lab_phone` bigint(10) NOT NULL,
  `lab_details` varchar(255) NOT NULL,
  `lab_ratings` enum('1','2','3','4','5') NOT NULL,
  `lab_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`lab_id`, `lab_name`, `lab_address`, `lab_phone`, `lab_details`, `lab_ratings`, `lab_image`) VALUES
(1, '1mg Labs', 'New Delhi', 8981061157, '1mglabs is a state-of-art facility offering highest quality diagnostic services at the convenience of your doorstep. We pride ourselves on three things 1) Assured Quality 2) Best Prices 3) Excellent Turn Around Time. ', '5', 'Final_1mg_labs_logo-2.png'),
(2, 'Dr. Lal PathLabs Ltd. ', 'New Delhi', 7004312549, 'We focus on providing patients quality diagnostic healthcare services in India. Through our network, we offer patients convenient locations for their diagnostic healthcare services and efficient service. ', '4', 'mlkrsnvxj3yqtbzxo4wj_new.png'),
(4, 'Thyrocare Laboratories Ltd.', 'Kolkata', 8981061157, 'Thyrocare Technologies Limited has one of the most advanced laboratory and offer quality diagnostic services. With a strong presence in more than 2,000 cities and towns, Thyrocare offer diagnostic tests for hormonal imbalance, age related diseases, nutrit', '4', 'Thyrocare_vyednk.png'),
(5, 'SRL Diagonostics', 'New Delhi', 7004312549, 'SRL Diagnostics is the indisputable leader in the Indian Diagnostic Industry, which started its operations in the year 1996. With a network of more than 280 laboratories in the country, SRL offers premium diagnostic services', '5', 'SRL-LOgo_sp8xl2.png'),
(6, 'Medall', 'Kolkata', 8981061157, 'Medall Healthcare Pvt Ltd operates 60 diagnostic centers in South India and provides quality diagnostic services. With a dedicated team of more than 100 radiologists and pathologists, Medall Healthcare Pvt Ltd provides pathology and radiology services of ', '4', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `test_id` int(100) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `bill` int(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_name`, `test_id`, `test_name`, `lab_name`, `appointment_date`, `bill`, `status`) VALUES
(12, 'hitesh', 1, 'Dengue Antigen NS1, IgG & IgM', '1mg Labs', '2020-05-23', 1536, 'completed'),
(15, 'hitesh', 6, 'Glycosylated Hemoglobin', 'Dr. Lal PathLabs Ltd.', '2020-05-22', 440, ''),
(17, 'hitesh', 10, 'Beta Thalassemia Test', '1mg Labs', '2020-05-21', 1578, '');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` int(100) NOT NULL,
  `lab_id` int(100) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_type` enum('at home','at lab') NOT NULL,
  `test_price` int(8) NOT NULL,
  `test_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `lab_id`, `test_name`, `test_type`, `test_price`, `test_details`) VALUES
(1, 1, 'Dengue Antigen NS1, IgG & IgM', 'at home', 1536, 'The Dengue Antigen NS1, IgG & IgM test is done in case there is high fever within 2 weeks of travel to an area where dengue outbreak is occurring or dengue fever is endemic.'),
(3, 1, 'CT Head', 'at lab', 2400, 'The Computed Tomography (CT) Head is an imaging procedure where rotating beams of X-rays are used to create a detailed three dimensional image of the head to detect damage or other disorders of the brain and skull.'),
(5, 1, 'PET CT Scan (Whole Body)', 'at home', 14340, 'Positron emission tomography (PET) uses small amounts of radioactive materials called radiotracers, a special camera and a computer to help evaluate your organ and tissue functions. By identifying body changes at the cellular level, PET may detect the early onset of disease before it is evident on other imaging tests.'),
(6, 2, 'Glycosylated Hemoglobin', 'at lab', 440, 'Glycosylated Hemoglobin, also called Glycated Hemoglobin, Hemoglobin A1c, or HbA1c, refers to hemoglobin which is bound to glucose. Glycosylated Hemoglobin Test measures the percentage of glycosylated hemoglobin in blood which reflects the average blood glucose over a period of past two to three months (8 - 12 weeks).'),
(8, 1, '2D Echo', 'at home', 1450, '2D Echocardiography or 2D Echo as it is commonly referred to, is a test used to diagnose cardiac disorders. Sound waves are used to observe and assess cardiac muscles, cardiac chambers, valves etc. This test also helps to determine the amount and rate of blood flow through all the chambers of heart'),
(9, 1, 'Blood Sugar test ', 'at lab', 120, 'Blood Sugar test is useful to measure levels of glucose present in blood at any given time. A venous blood sample is required to perform this test. This simple blood test is conducted at most pathology labs equipped with advanced medical techniques and equipment.'),
(10, 1, 'Beta Thalassemia Test', 'at home', 1578, 'Beta thalassemia greatly affects spleen and causes gallbladder stones. It is of three types; namely, minor, intermediate and major. Minor thalassemia do not show any significant symptom. People may suffer from slight anemia and related symptoms. Thalassemia in intermediate and major forms cause serious discomforts.'),
(11, 2, 'Beta Thalassemia Test', 'at home', 1578, 'Beta thalassemia greatly affects spleen and causes gallbladder stones. It is of three types; namely, minor, intermediate and major. Minor thalassemia do not show any significant symptom. People may suffer from slight anemia and related symptoms. Thalassemia in intermediate and major forms cause serious discomforts.'),
(12, 2, 'Blood Sugar test ', 'at lab', 120, 'Blood Sugar test is useful to measure levels of glucose present in blood at any given time. A venous blood sample is required to perform this test. This simple blood test is conducted at most pathology labs equipped with advanced medical techniques and equipment.'),
(13, 2, '2D Echo', 'at home', 1450, '2D Echocardiography or 2D Echo as it is commonly referred to, is a test used to diagnose cardiac disorders. Sound waves are used to observe and assess cardiac muscles, cardiac chambers, valves etc. This test also helps to determine the amount and rate of blood flow through all the chambers of heart.'),
(14, 2, 'ECG', 'at home', 320, 'ECG is short for “Electrocardiogram.” Alternatively, it is also known as EKG. An ECG is used to detect the \'rhythm\' of the heart, to detect any anomaly. ECG machine records the small electrical signals from our heart muscles which pump our heart');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `role` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `phone`, `gender`, `role`, `address`, `image`, `prescription`) VALUES
(1, 'hitesh', 'hkhiteshkumar66@gmail.com', '1235', 7004312549, 'male', 'admin', 'jamshedpur', 'hitesh.jpeg', ''),
(3, 'arpita', 'arpita0897@gmail.com', 'arpita0897', 8981061157, 'female', 'admin', 'kolkata', 'elyse.png', ''),
(5, 'mohit', 'mohit@gmail.com', 'mohit', 8969608764, 'male', 'user', 'kadma, jamshedpur', 'passport.jpg', ''),
(21, 'rishab', 'risha@gmail.com', 'rishab', 4585967612, 'male', 'user', 'kolkata', 'mirage-no-connection.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `lab_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
