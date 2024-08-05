-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 12:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptech_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `check_in` varchar(255) NOT NULL,
  `check_out` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `title`, `email`, `check_in`, `check_out`) VALUES
(1, '', 'Slide Share', 'imamamushtaq@gmail.com', '2024-08-07', '2024-08-10'),
(2, '', 'Slide Share', 'imamamushtaq@gmail.com', '2024-08-07', '2024-08-10'),
(3, '', 'Slide Share', 'imamamushtaq@gmail.com', '2024-07-31', '2024-07-31'),
(4, '', 'Slide Share', 'imamamushtaq@gmail.com', '2024-07-31', '2024-07-31'),
(5, '', 'Slide Share', 'imamamushtaq@gmail.com', '2024-08-10', '2024-08-09'),
(6, 'abc', 'Slide Share', 'imamamushtaq@gmail.com', '2024-08-09', '2024-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `message`) VALUES
(19, 'Gabriela ', 'Shaw', 'imamamushtaq5@gmail.com', '03112033680', 'Is a coworking space worth it?'),
(20, 'Brooks ', 'Sanchez', 'mushtaqueimama@gmail.com', '03112033680', 'What is the minimum commitment I need to make to join Works?'),
(21, 'Emily', ' Yatesv', 'abc@gmail.com', '03112033680', 'How do shared office spaces work?');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `office_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`id`, `name`, `email`, `start_date`, `phone`, `gender`, `cv`, `office_name`) VALUES
(9, 'Anaya Beck', 'mushtaqueimama@gmail.com', '2024-08-02', '03112033680', 'Female', 'Anaya Beck.pdf', 'OCEANIC TRADING COMPANY'),
(10, 'John', 'imamamushtaq5@gmail.com', '2024-08-31', '03112033680', 'male', 'John.pdf', 'CODEUP'),
(11, 'Peyton Wright', 'mushtaqueimama@gmail.com', '2024-08-31', '03112033680', 'male', 'Peyton Wright.pdf', 'CODEUP'),
(12, 'Imama Mushtaq ', 'mushtaqueimama@gmail.com', '2024-08-28', '03112033680', 'Female', 'CV.pdf', 'CODEUP'),
(13, 'Asad Ali', 'asadali@gmail.com', '2024-08-30', '03112033680', 'male', 'CV.pdf', '10PEARLS'),
(14, 'Bushra Shakeel', 'bushrashakeel@gmail.com', '2024-08-30', '03112033680', 'Female', 'CV.pdf', 'THE DAWOOD GROUP');

-- --------------------------------------------------------

--
-- Table structure for table `job_app_report`
--

CREATE TABLE `job_app_report` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `office_name` varchar(255) NOT NULL,
  `selection` varchar(255) NOT NULL,
  `inter_date` date NOT NULL,
  `inter_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_app_report`
--

INSERT INTO `job_app_report` (`id`, `name`, `email`, `phone`, `office_name`, `selection`, `inter_date`, `inter_time`) VALUES
(4, 'Anaya Beck', 'mushtaqueimama@gmail.com', '03112033680', 'OCEANIC TRADING COMPANY', 'Selected', '2024-08-31', '3pm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'Imama Mushtaq ', 'imamamushtaq@gmail.com', 'imama'),
(2, 'Bushra Shakeel', 'bushrashakeel@gmail.com', 'bushra'),
(3, 'Asad Ali', 'asadali@gmail.com', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_office`
--

CREATE TABLE `meeting_office` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meeting_office`
--

INSERT INTO `meeting_office` (`id`, `title`, `about`, `image`, `price`) VALUES
(4, 'Collins Dictionary', 'A buildig or part of a ilding where one or more person are affairs of a private enterprise', '1.jpg', '10000'),
(7, 'Slide Share', 'A buildig or part of a ilding where one or more person are affairs of a private enterprise', '3.jpg', '15000'),
(8, 'Franklin', 'a building or part of a building where one or more person affairs of a private enterprise', '2.jpg', '10000'),
(10, 'Velvet', 'a building or part of a building where one or more person affairs of a private enterprise', '4.jpg', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `office_req`
--

CREATE TABLE `office_req` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `office_email` varchar(255) NOT NULL,
  `office_password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office_req`
--

INSERT INTO `office_req` (`id`, `username`, `office_email`, `office_password`, `status`) VALUES
(1, 'OCEANIC TRADING COMPANY', 'mushtaqueimama@gmail.com', 'OCEANIC', 1),
(2, 'THE DAWOOD GROUP', 'mushtaqueimama@gmail.com', 'DAWOOD', 1),
(3, 'SYSTEMS LIMITED', 'mushtaqueimaa@gmail.com', 'SYSTEMS\r\n', 1),
(4, '10PEARLS', 'mushtaqueimama@gmail.com', '10PEARLS', 0),
(6, 'CODEUP', 'mushtaqueimama@gmail.com', 'CODEUP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office_space`
--

CREATE TABLE `office_space` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office_space`
--

INSERT INTO `office_space` (`id`, `title`, `about`, `image`, `price`) VALUES
(1, 'Homepro workspace', 'HomePro Workspace; Desk Dynasty; Virtual HQ Ventures; Office Overture; HomeDesk Universe; DwellDesk Ventures', 'office1.jpg', '54,990'),
(2, 'Creative Arena', 'Creative Coworking Spaces Name Ideas. Artistic Abode; Visionary Village; Idea Incubator; Design Den; Creative Collective; Imagination Station. Tech-Focused', 'office2.jpg', '12,000'),
(3, 'Colab', 'coLab offers 24 hour access, comfortable working environmentCreativity Corner; CoShift Hub; Fusion Workspace; Incubate CoSpace; Community CoWork; Inspire Hub; ShareDesk Space; Nexus CoLab', 'office3.jpg', '40,000 '),
(4, 'Coffee nook', 'Coffee Nook; Comfort Cove; Tranquility Base; Pause Pavilion; Break Barn; Repose Refuge; Peaceful Pier; Serenity Stop; Unwind Hub; The Chill Pad; Chillax Corner ', 'office4.jpg', '35,000 ');

-- --------------------------------------------------------

--
-- Table structure for table `profile_office`
--

CREATE TABLE `profile_office` (
  `id` int(11) NOT NULL,
  `office_name` varchar(255) NOT NULL,
  `keyword1` varchar(255) NOT NULL,
  `keyword2` varchar(255) NOT NULL,
  `keyword3` varchar(255) NOT NULL,
  `about_office` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile_office`
--

INSERT INTO `profile_office` (`id`, `office_name`, `keyword1`, `keyword2`, `keyword3`, `about_office`, `timing`, `location`, `contact`, `links`, `email`) VALUES
(1, 'THE DAWOOD GROUP', 'SEO ', 'DEVELOPMENT', 'GRAPHICS', 'The Dawood is a group of companies 0909 in Karachi. It is active in diverse businesses and industries of the Dawood family-business and is owned by Dawood family.', '09:00 am to 11:30 am Monday - Saturday', 'Dawood Centre, M.T. Khan Road, Karachi', '03112033680', 'http://www.instagram.com/dawood', 'dawood@gmail.com'),
(2, 'OCEANIC TRADING COMPANY', 'Innovation', 'Flexible\r\n', 'Cooperative', 'Oceanic Trading specialises in supplying a wide range of premium quality seafood products for the Australian and Overseas markets', '10:00 am to 10:00 pm Mon-Fri', 'Suite 3, 69C 24th Commercial St, Phase 2 Ext Defence Housing Authority, Karachi, Karachi City, Sindh 75500', '0332 2000298', 'http/instagram/trading.com', 'oceanic@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `rate`, `message`) VALUES
(1, 'Rhett Hart', '⭐⭐⭐⭐', 'I had an amazing experience with this company! The customer service was top-notch, and the product exceeded my expectations. I highly recommend them to anyone looking for quality products and excellent service.'),
(2, 'Cristian Vazquez', '⭐⭐⭐⭐', 'I  am a repeat customer of this business, and they never disappoint.'),
(3, 'Rosalyn Hawkins', '⭐⭐⭐⭐⭐', 'After trying several other companies, I finally found the perfect fit with this one. '),
(4, 'Mya Bradshaw', '⭐⭐⭐⭐⭐', 'I’ve been a loyal customer for years, and I continue to be impressed with this company.'),
(5, 'Harold O’brien', '⭐⭐⭐⭐', 'The product itself is of excellent quality, and I couldn’t be happier with my decision to buy from this company.'),
(6, 'Imama Mushtaq ', '⭐⭐⭐⭐⭐', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `user_email`, `user_password`) VALUES
(1, 'Gabriela Shaw', 'gabriela@gmail.com', '12345'),
(2, 'Emily Yates', 'emily@gmal.om', '12345'),
(3, 'Henrik York', 'henrik@gmail.com', '12345'),
(4, 'Samir Riley', 'samir@gmail.com', '12345'),
(5, 'Amora Case', 'amora@gmail.com', '12345'),
(6, 'Brooks Sanchez', 'brooks@gmail.com', '12345'),
(8, 'Nixon Salgado', 'nixon@gmail.com', '12345'),
(9, 'Harold Silva', 'harold@gmail.com', '12345'),
(10, 'Bella Garcia', 'bella@gmail.com', '12345'),
(11, 'Hassan Berg', 'hassan@gmail.com', '12345'),
(12, 'Dakota Felix', 'oakota@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `office_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `office_name`, `job_title`, `experience`, `about`, `image`) VALUES
(1, 'OCEANIC TRADING COMPANY', 'Customer service', '2 years minimum', 'Oceanic Trading specialises in supplying a wide range of premium quality seafood products for the Australian and Overseas markets', '1.jpg'),
(2, ' THE DAWOOD GROUP', 'Sales Associate', '1 year or fresh ', 'The Dawood is a group of companies headquartered in Karachi. It is active in diverse businesses and industries of the Dawood family-business and is owned by Dawood family.', '2.png'),
(3, 'SYSTEMS LIMITED', 'Network administrator', '2 years minimum', 'Systems Limited is a Pakistani multi-national public technology company, involved in mortgage, apparel, retail and BPO services.', '2.jpg'),
(4, '10PEARLS', 'Office Manager', '5 years ', '10Pearls is recognized as one of the best software company based in Karachi, Pakistan, specializing in digital transformation, development,', '4.jpg'),
(6, 'CODEUP', 'Receptionist', '2 years minimum', 'Codup.co is a software development company that provides custom software development, web development, and e-commerce development', '6.png'),
(9, 'THE DAWOOD GROUP', 'Customer service', 'fresh', ' jobs typically involve employees working directly with customers', '2.png'),
(10, '10PEARLS', 'Receptionist', 'fresh', 'Business titles can be from CEO to receptionist and everything in between. But there are some acronyms that can make us confused. ', '4.jpg'),
(11, 'CODEUP', 'Sales Associate', '5 years ', 'A Sales Job Title is a label assigned to professionals responsible for selling products or services to customers.', '6.png'),
(12, 'THE DAWOOD GROUP', 'Receptionist', '2 years ', 'A Receptionist is a professional who manages the front desk of an organization', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_office`
--

CREATE TABLE `virtual_office` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `virtual_office`
--

INSERT INTO `virtual_office` (`id`, `title`, `about`, `image`, `price`) VALUES
(1, 'Business Address', 'Choose a new business address in a prime location as part of our virtual office packages. We can also supply you with a local phone number, call handling etc', 'virtual1.jpg', '35,900'),
(2, 'Virtual Nook', 'A virtual office is an arrangement that lets business have professional addresses as well as', 'virtual3.jpg', '20,500 '),
(3, 'SmartServe', 'SmartServe can be used by entrepreneurs, freelancers, and small businesses that do not need or cannot afford a traditional office space', 'try.jpg', '40,000'),
(4, 'TaskTrekker', 'A TaskTrekker  is a service that gives you a business address, a place to receive mail, and access to meeting rooms & physical office space', 'virtual4.jpg', '12,000 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_app_report`
--
ALTER TABLE `job_app_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_office`
--
ALTER TABLE `meeting_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_req`
--
ALTER TABLE `office_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_space`
--
ALTER TABLE `office_space`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_office`
--
ALTER TABLE `profile_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `virtual_office`
--
ALTER TABLE `virtual_office`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_app_report`
--
ALTER TABLE `job_app_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `office_req`
--
ALTER TABLE `office_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `office_space`
--
ALTER TABLE `office_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profile_office`
--
ALTER TABLE `profile_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `virtual_office`
--
ALTER TABLE `virtual_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
