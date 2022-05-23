-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `nic`, `user_name`, `password`) VALUES
(1, 'Jonney', 'Depth', '200012401988', 'jonneydepth', '6adfb183a4a2c94a2f92dab5ade762a47889a5a1'),
(3, 'Nimal', 'Persis', '200025417589', 'nimalperis', '57a9957cffb1b52d5910195403bee61b827f728b');

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `card_no` bigint(16) NOT NULL,
  `status` varchar(255) NOT NULL,
  `expire_date` date NOT NULL,
  `cvv_no` int(3) NOT NULL,
  `issue_date` date NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `credit_limit` double NOT NULL,
  `credit_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit_cards`
--

INSERT INTO `credit_cards` (`id`, `nic`, `card_no`, `status`, `expire_date`, `cvv_no`, `issue_date`, `card_type`, `credit_limit`, `credit_amount`) VALUES
(1, '200026301925', 2005697852452159, 'Active', '2025-05-22', 458, '2022-05-20', 'Gold Credit Card', 200000, 65000);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `frist_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nic`, `title`, `frist_name`, `last_name`, `email`, `phone_number`, `address_1`, `address_2`, `city`) VALUES
(2, '200012401988', 'Mr.', 'Praboda', 'Sankalpa', 'praboda@gmail.com', 774633510, 'N0.36 Pasal Mawatha', 'Wanchawala', 'Galle'),
(4, '200014453159', 'Ms.', 'Ruvini', 'Balasuriya', 'balasuriya@gmail.com', 712914206, 'No; 10, Vihara Road,', 'Vijaya Lane,', 'Galle'),
(3, '200014527841', 'Ms.', 'Nimali', 'Peris', 'nimali@gmail.com', 715489635, '79/A Gangodawila,', 'Temple Road,', 'Matara'),
(1, '200026301925', 'Mr.', 'Janith', 'Sandamal', 'janithsandamal@gmail.com', 712984706, 'dfhfdhfdhfdhfdhfd', 'fhfhfhhfhgf', 'hgfhgfhfgjgfj'),
(5, '200045784520', 'Mr.', 'Nuwan', 'Jayakodi', 'nuwan@gmail.com', 712945789, 'No; 7, Weliwita Road', 'Pasal Lane,', 'Matara');

-- --------------------------------------------------------

--
-- Table structure for table `debit_cards`
--

CREATE TABLE `debit_cards` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `acc_no` bigint(10) NOT NULL,
  `card_no` bigint(16) NOT NULL,
  `expire_date` date NOT NULL,
  `cvv_no` int(3) NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `debit_cards`
--

INSERT INTO `debit_cards` (`id`, `nic`, `acc_no`, `card_no`, `expire_date`, `cvv_no`, `issue_date`) VALUES
(2, '200012401988', 8001235356, 4003453434324789, '2026-05-13', 547, '2022-05-22'),
(1, '200026301925', 8004563214, 4007845123659745, '2024-05-01', 754, '2022-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `inform_us`
--

CREATE TABLE `inform_us` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inform_us`
--

INSERT INTO `inform_us` (`id`, `type`, `first_name`, `last_name`, `email`, `phone_number`, `Message`) VALUES
(11, 'Saving Accounts', 'P.G.E Janith', 'Sandamal', '2000janith@gmail.com', 712984706, 'Hello'),
(12, 'Credit Cards', 'P.G.E Janith', 'Sandamal', '2000janith@gmail.com', 712984706, 'Hi'),
(13, 'Saving Accounts', 'P.G.E Janith', 'Sandamal', '2000janith@gmail.com', 712984706, 'Hey');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `acc_no` bigint(10) NOT NULL,
  `loan_type` varchar(255) NOT NULL,
  `loan_amount` double NOT NULL,
  `due_date` date NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `nic`, `acc_no`, `loan_type`, `loan_amount`, `due_date`, `issue_date`) VALUES
(1, '200026301925', 8004563214, 'Education Loan', 1100000, '2028-05-12', '2022-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `saving_acc`
--

CREATE TABLE `saving_acc` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `acc_no` bigint(10) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saving_acc`
--

INSERT INTO `saving_acc` (`id`, `nic`, `acc_no`, `amount`) VALUES
(2, '200012401988', 8001235356, 764500),
(4, '200014453159', 8004547593, 10000),
(3, '200014527841', 8004564578, 25000),
(1, '200026301925', 8004563214, 490000),
(5, '200045784520', 8004478513, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE `temp_users` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `receive_acc` bigint(10) NOT NULL,
  `sent_acc` bigint(10) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(255) NOT NULL,
  `ben_name` varchar(255) NOT NULL,
  `ben_email` varchar(255) NOT NULL,
  `ben_mobile` int(10) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `receive_acc`, `sent_acc`, `remark`, `amount`, `type`, `ben_name`, `ben_email`, `ben_mobile`, `branch`, `datetime`) VALUES
(1, 8004575236, 8004563214, 'For Credit Settle', 25000, 'One Time Transaction', 'Praboda', 'praboda@gmail.com', 712984706, 'Malabe', '2022-05-20 21:32:56'),
(2, 8001235356, 8004563214, 'Test Transaction', 250000, 'one time transaction', 'Jonney', 'nimal@gmail.com', 776169784, 'galle', '2022-05-22 14:08:39'),
(3, 8001235356, 6004578145, 'Test Transaction Two', 6000, 'one time transaction', 'Tom', 'maxtintinmax@gmail.com', 776169784, 'matara', '2022-05-22 14:20:48'),
(4, 8001235356, 8004563214, 'Fee', 8500, 'one time transaction', 'Praboda', 'sankalpa@gmail.com', 712984706, 'malabe', '2022-05-22 16:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nic`, `email`, `user_name`, `password`) VALUES
(2, '200012401988', '', 'PrabodaSankalpa', 'fc488cf22f6a04f2c0e30e5ebf30055078177970'),
(1, '200026301925', '', 'JanithSandamal', 'fc488cf22f6a04f2c0e30e5ebf30055078177970');

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `receive_acc` bigint(10) NOT NULL,
  `sent_acc` bigint(10) NOT NULL,
  `bill_type` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`id`, `nic`, `receive_acc`, `sent_acc`, `bill_type`, `provider`, `amount`, `datetime`) VALUES
(1, '200026301925', 2147483647, 2147483647, 'internet bill', 'dialog', 100000, '2022-05-22 15:21:05'),
(2, '200026301925', 2147483647, 2147483647, 'telephone bill', 'slt', 10000, '2022-05-22 15:22:03'),
(3, '200026301925', 712984706, 8004563214, 'internet bill', 'slt', 1500, '2022-05-22 16:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `youth_acc`
--

CREATE TABLE `youth_acc` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `acc_no` bigint(10) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youth_acc`
--

INSERT INTO `youth_acc` (`id`, `nic`, `acc_no`, `amount`) VALUES
(1, '200026301925', 6004578145, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `card_no` (`card_no`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`nic`,`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `debit_cards`
--
ALTER TABLE `debit_cards`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `acc_no` (`acc_no`),
  ADD UNIQUE KEY `card_no` (`card_no`);

--
-- Indexes for table `inform_us`
--
ALTER TABLE `inform_us`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `acc_no` (`acc_no`);

--
-- Indexes for table `saving_acc`
--
ALTER TABLE `saving_acc`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `acc_no` (`acc_no`);

--
-- Indexes for table `temp_users`
--
ALTER TABLE `temp_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youth_acc`
--
ALTER TABLE `youth_acc`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `acc_no` (`acc_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `credit_cards`
--
ALTER TABLE `credit_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `debit_cards`
--
ALTER TABLE `debit_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inform_us`
--
ALTER TABLE `inform_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saving_acc`
--
ALTER TABLE `saving_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temp_users`
--
ALTER TABLE `temp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `youth_acc`
--
ALTER TABLE `youth_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
