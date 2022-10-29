-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 04:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclerent`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `cat_image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `is_deleted` int(2) NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `is_deleted`, `date_updated`) VALUES
(1, 'Shoe', 'download.jfif', 1, '2022-09-11 11:19:40'),
(2, 'Slipers', 'images.jfif', 1, '2022-09-05 21:19:24'),
(3, 'Slipers', 'images.jfif', 1, '2022-09-05 21:22:19'),
(4, 'dd', 'images.jfif', 1, '2022-09-05 21:21:35'),
(5, 'Phone Acc', 'hImYqMss.png', 1, '2022-09-05 22:23:22'),
(6, '', 'bottles-famous-global-beer-brands-poznan-pol-mar-including-heineken-becks-bud-miller-corona-stella-artois-san-miguel-143170440.jpg', 1, '2022-10-01 10:17:33'),
(7, 'Van', '2020-nissan-kicks1 (1).webp', 0, '2022-10-01 10:18:50'),
(8, 'Bus', '2020-nissan-kicks1 (1).webp', 0, '2022-10-01 10:20:19'),
(9, 'Car', 'images (1).jpeg', 0, '2022-10-01 14:49:14'),
(10, 'Burger', 'download.jfif', 1, '2022-10-01 14:49:15'),
(11, 'Burger', 'fast-food.jpg', 1, '2022-10-01 14:49:40'),
(12, 'Tracktor', 'images.jpeg', 0, '2022-10-01 15:35:24'),
(13, 'Dew', 'dsd.PNG', 1, '2022-10-01 22:24:45'),
(14, 'Dews', 'dsd.PNG', 1, '2022-10-01 22:26:14'),
(15, 'Main', 'download.jfif', 1, '2022-10-02 13:43:02'),
(16, 'dew', 'download.jfif', 1, '2022-10-02 13:43:56'),
(17, 'dew', 'download.jfif', 1, '2022-10-02 13:44:36'),
(18, 'dew', 'download.jfif', 1, '2022-10-02 13:46:58'),
(19, 'dew', 'Basin Mixer.jpg', 1, '2022-10-02 13:48:13'),
(20, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:27'),
(21, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:29'),
(22, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:48'),
(23, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `phone`, `nic`, `address`, `gender`, `password`, `is_deleted`) VALUES
(1, '', 'admin', '', '', '', 0, '123456', 0),
(2, 'Thilini Maheshika', 'thili@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 2, '123456', 1),
(3, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 1, '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `is_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `name`, `email`, `phone`, `nic`, `address`, `gender`, `is_deleted`) VALUES
(1, '', 'admin', '', '', '', 0, 1),
(2, 'Thilini Maheshika', 'thili@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 2, 1),
(3, 'Kanishka Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 1, 0),
(4, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', '4554545V55', 'Banwalgodalla, Kosmulla', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `extend`
--

CREATE TABLE `extend` (
  `extend_id` int(11) NOT NULL,
  `rent_id` int(255) NOT NULL,
  `changed_date` datetime NOT NULL,
  `extended_total` int(255) NOT NULL,
  `date_updated` datetime NOT NULL,
  `is_deleted` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_image`) VALUES
(20, 'sq_img_6.jpg'),
(21, 'sq_img_9.jpg'),
(22, 'sq_img_10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `guid_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `is_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`guid_id`, `name`, `email`, `phone`, `nic`, `address`, `gender`, `is_deleted`) VALUES
(1, '', 'admin', '', '', '', 0, 1),
(2, 'Thilini Maheshika Kuburage', 'thili@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 0, 0),
(3, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 1, 0),
(4, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', 'sa5145454', 'Banwalgodalla, Kosmulla', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `package_details` varchar(5000) NOT NULL,
  `package_status` int(2) NOT NULL,
  `package_image` varchar(255) NOT NULL,
  `is_deleted` int(2) NOT NULL,
  `date_updated` datetime NOT NULL,
  `package_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `cat_id`, `package_details`, `package_status`, `package_image`, `is_deleted`, `date_updated`, `package_price`) VALUES
(1, 'Ella Trip', 8, 'sasa sasa', 1, '2020-nissan-kicks1 (1).webp', 0, '2022-10-29 19:38:54', 15000),
(2, 'Aireport', 7, 'dsds', 1, '2020-nissan-kicks1 (1).webp', 0, '2022-10-29 19:47:28', 35000),
(3, 'Galle Trip', 9, 'saas', 1, 'images.jpeg', 0, '2022-10-29 19:58:16', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `package_orders`
--

CREATE TABLE `package_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `payment` int(2) NOT NULL,
  `date_updated` datetime NOT NULL,
  `is_deleted` int(2) NOT NULL,
  `order_status` int(5) NOT NULL,
  `start_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_orders`
--

INSERT INTO `package_orders` (`order_id`, `customer_id`, `total`, `payment`, `date_updated`, `is_deleted`, `order_status`, `start_date`) VALUES
(31, 3, 1000, 1, '2022-10-02 20:16:38', 0, 3, '0000-00-00 00:00:00'),
(33, 3, 450, 1, '2022-09-14 20:21:12', 0, 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `header_image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `header_title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `header_desc` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `about_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `about_desc` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `company_phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `sub_image` varchar(255) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `link_facebook` varchar(255) NOT NULL,
  `link_twiiter` varchar(255) NOT NULL,
  `link_instragram` varchar(255) NOT NULL,
  `header_rotate_image` varchar(255) NOT NULL,
  `about_experience` int(255) NOT NULL,
  `opening` varchar(255) CHARACTER SET cp1250 NOT NULL,
  `shop_status` int(2) NOT NULL,
  `privacy_policy` varchar(9999) NOT NULL,
  `terms_and_condition` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`header_image`, `header_title`, `header_desc`, `about_title`, `about_desc`, `company_phone`, `company_email`, `company_address`, `sub_image`, `about_image`, `link_facebook`, `link_twiiter`, `link_instragram`, `header_rotate_image`, `about_experience`, `opening`, `shop_status`, `privacy_policy`, `terms_and_condition`) VALUES
('bottles-famous-global-beer-brands-poznan-pol-mar-including-heineken-becks-bud-miller-corona-stella-artois-san-miguel-143170440.jpg', 'Welcome to Senving Restaurent', 'With this shop hompeage template', 'About Us', 'Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!', '0713664076', 'asn@gmail.com', 'Banwalgodalla, Kosmulla', 'mcdonaldsglobal.jpg', 'na-beers-counter-ebe988ba9d8751cbcbb6cd49476ba405673d252c-s1100-c50.jpg', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'hero.png', 20, 'Monday - Saturday 09AM - 09PM  Sunday 10AM - 08PM', 0, '<h1>What Is a Terms and Conditions Agreement?</h1></br>\n<p>A terms and conditions agreement outlines the website administratorâ€™s rules regarding user behavior and provides information about the actions the website administrator can and will perform.</p>\n\nEssentially, your terms and conditions text is a contract between your website and its users. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.\n\nCreating the best terms and conditions page possible will protect your business from the following:\n\nAbusive users: Terms and Conditions agreements allow you to establish what constitutes appropriate activity on your site or app, empowering you to remove abusive users and content that violates your guidelines.\nIntellectual property theft: Asserting your claim to the creative assets of your site in your terms and conditions will prevent ownership disputes and copyright infringement.\nPotential litigation: If a user lodges a legal complaint against your business, showing that they were presented with clear terms and conditions before they used your site will help you immensely in court.\nIn short, terms and conditions give you control over your site and legal enforcement if users try to take advantage of your operations.', 'sasasa');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `phone`, `nic`, `address`, `gender`, `password`, `is_deleted`) VALUES
(1, '', 'admin', '', '', '', 0, '123456', 0),
(2, 'Thilini Maheshika', 'thili@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 2, '123456', 1),
(3, 'Kanishka Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 1, '123456', 0),
(4, 'Kanishka Dew Sandaruwan', 'Kanishkadewsandaruwan@gmail.com', '0713664071', '965641V', 'Banwalgodalla, Kosmulla', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `vehicle_modal` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `vehicle_price` int(255) NOT NULL,
  `vehicle_status` int(2) NOT NULL,
  `vehicle_image` varchar(255) NOT NULL,
  `is_deleted` int(2) NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `cat_id`, `vehicle_name`, `vehicle_modal`, `vehicle_number`, `vehicle_price`, `vehicle_status`, `vehicle_image`, `is_deleted`, `date_updated`) VALUES
(1, 9, 'Audi A4', 'Audi A4 2015', 'SPCAR4569', 1500, 1, 'images (1).jpeg', 0, '2022-10-29 20:14:59'),
(2, 9, 'Nissan 6H', 'A4454GH', 'BGY4756', 2500, 1, 'z_p-i--Vehicle.jpg', 0, '2022-10-29 20:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_rent`
--

CREATE TABLE `vehicle_rent` (
  `rent_id` int(11) NOT NULL,
  `vehicle_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `total` int(255) NOT NULL,
  `rent_status` int(10) NOT NULL,
  `payment` int(5) NOT NULL,
  `is_deleted` int(5) NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `extend`
--
ALTER TABLE `extend`
  ADD PRIMARY KEY (`extend_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`guid_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_orders`
--
ALTER TABLE `package_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vehicle_rent`
--
ALTER TABLE `vehicle_rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `extend`
--
ALTER TABLE `extend`
  MODIFY `extend_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `guid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_orders`
--
ALTER TABLE `package_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_rent`
--
ALTER TABLE `vehicle_rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
