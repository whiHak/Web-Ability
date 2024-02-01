-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 08:51 PM
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
-- Database: `webability`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `imageData` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `imageData`, `title`, `description`, `link`) VALUES
(8, '../uploads/Events1.jpg', 'CRPD', '        United Nations Convention on the Rights of Persons with Disabilities (CRPD): A groundbreaking international treaty adopted in 2006, the CRPD promotes equal opportunities and inclusion for people with disabilities in education, employment, healthca', 'https://www.paralympic.org/'),
(9, '../uploads/Events2.jpg', 'Paralympic Games', '        An inspiring international multi-sport event for athletes with disabilities, the Paralympics showcase their remarkable athletic abilities and challenge societal perceptions about disability, fostering inclusivity and recognition in the sports worl', 'https://humanrights.gov.au/our-work/disability-rights/united-nations-convention-rights-persons-disabilities-uncrpd#:~:text=The%20purpose%20of%20the%20United,respect%20for%20their%20inherent%20dignity.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `phoneNumber` varchar(16) NOT NULL,
  `disability` enum('Visual','Mobility','Hearing','Developemental','Other') NOT NULL,
  `imageData` varchar(255) NOT NULL,
  `telegram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullName`, `email`, `password`, `gender`, `phoneNumber`, `disability`, `imageData`, `telegram`) VALUES
(1, 'Hannah Fikadu', 'hana@gmail.com', '$2y$10$R/WtV5rIE5pKtCbRIizgZeKFG2yu1G9jaq4iAskP6LZ8HrKNHRz1O', 'female', '+251909090909', 'Visual', '../uploads/photo_2024-01-29_01-41-57.jpg', '@hannah'),
(2, 'Betselot Abraham', 'besteab1@gmail.com', '$2y$10$2etqV2DQko2prbeG66tXl.vgpu7dcALaOx2Hg0zXqkYxjljpqxbeO', 'male', '+251909090909', 'Visual', '../uploads/pp.png', '@betse'),
(3, 'Mengistu Tadesse', 'menge@gmail.com', '$2y$10$gm/A5e3JrUUMtuo/FFobBevbPZFcxL59c3OHoc/SybAksNycqY4Sa', 'male', '+251909090909', 'Visual', '../uploads/person3.jpg', '@menge'),
(4, 'Nati Bayu', 'nati@gmail.com', '$2y$10$cUlAYrda6wCY0UjIF8YouOGRIUz9wEIMrEWokZ..mdiKTyhbst03S', 'male', '+251909090909', 'Visual', '../uploads/person9.jpg', '@natis'),
(5, 'Nazrawi Teka', 'ha@gmail.com', '$2y$10$euoimIzIpM3jYBS2l2pvv.zpRadKPk4WLDakXUGXrlGYuftSkSIRO', 'female', '+251909090909', 'Visual', '../uploads/person8.jpg', '@jerry'),
(6, 'Abenezer Tamiru', 'abeni@gmail.com', '$2y$10$Uyt4sqkxVgaFAbGV7ffStuzYK9Ybpl5SyrNqBzvnfNNLRPoe9BHvC', 'male', '+251909090909', 'Visual', '../uploads/photo_2024-01-30_09-08-38.jpg', '@abeni'),
(7, 'Lemi Gedu', 'lemi@gmail.com', '$2y$10$wSvXCKWQdGtm6086Em6cPuYz.L8KVD/hTY5gemorr40ltxe2BXFXq', 'male', '+251909090909', 'Visual', '../uploads/person1.jpg', '@lemis'),
(8, 'Husna Jemal', 'husna@gmail.com', '$2y$10$hKA4H6iUhbcLJfEAutpeJ.jEDdA4W4n3gRjtArfgFzIESyIJgHAde', 'female', '+251909090909', 'Visual', '../uploads/photo_2024-01-30_09-13-46.jpg', '@husna'),
(9, 'Adane Teka', 'adane@gmail.com', '$2y$10$TOSYY7IlDKHuNpbXfPr0tOaibkOHisGthgV.TmOGga96iMQL83xJ.', 'male', '+251909090909', 'Visual', '../uploads/photo_2024-01-30_09-08-27.jpg', '@adane'),
(10, 'Feysel Teshome', 'feysel@gmail.com', '$2y$10$UhrPpExrcx/8VyJTVcYXkurRqlwzKVK/J/GdXTG3HQuLL23eqDQwa', 'male', '+251909090909', 'Visual', '../uploads/person11.jpg', '@feysel'),
(12, 'BETSELOT', 'betseab1123@gmail.com', '$2y$10$eSXM5fLMMBHysaGfKucpGud7Dl7lbk7qHKHleAs7AukgOKjGG7j.a', 'male', '0909090909', 'Mobility', '../uploads/pexels-johannes-plenio-1435075.jpg', '@pleaseWork');

-- --------------------------------------------------------

--
-- Table structure for table `supporters`
--

CREATE TABLE `supporters` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(16) NOT NULL,
  `location` varchar(50) NOT NULL,
  `imageData` varchar(255) NOT NULL,
  `telegram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supporters`
--

INSERT INTO `supporters` (`id`, `fullName`, `email`, `phoneNumber`, `location`, `imageData`, `telegram`) VALUES
(30, 'Dr. Yetnebersh Neguse', 'yetneberse@gmail.com', '0909090909', 'Addis Ababa', '../uploads/supportPersonTwo.jpg', '@yetnebersh'),
(31, 'Prof. Messeret Tesema', 'mesTes@gmail.com', '0909090909', 'Jimma, Ethiopia', '../uploads/supportPersonOne.jpg', '@mes'),
(32, 'Dr. Fasil Fikadu', 'fsil@gamil.com', '0909090909', 'Addis Ababa, Ethiopia', '../uploads/supportPersonThree.jpg', '@fasill'),
(33, 'Mrs. Meron Taye', 'bets@gamil.com', '0909090909', 'Addis Ababa, Ethiopia', '../uploads/supportPersonFour.jpg', '@meri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `supporters`
--
ALTER TABLE `supporters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supporters`
--
ALTER TABLE `supporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
