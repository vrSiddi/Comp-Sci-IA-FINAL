-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2023 at 06:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Login System`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `collegeId` int(10) NOT NULL,
  `collegeName` varchar(128) NOT NULL,
  `dueDate` varchar(30) NOT NULL,
  `userId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`collegeId`, `collegeName`, `dueDate`, `userId`) VALUES
(7, 'USC', '1/15', 2),
(10, 'FSU', '12/2', 1),
(12, 'Florida Tech', '5/1', 1),
(18, 'Stanford', '1/5', 2),
(19, 'Stanford', '1/5', 5),
(20, 'Purdue University', '11/1', 6),
(22, 'USC', '1/15', 6),
(23, 'Purdue', '11/1', 1),
(24, 'University of Florida', '11/07', 7),
(25, 'Carnegie Mellon University', '01/03', 7),
(26, 'Johns Hopkins', '01/03', 7),
(27, 'MIT', '01/07', 7),
(28, 'University of Chicago', '01/03', 7),
(29, 'harvard', '2/9', 8),
(38, 'UNF', '6/5', 13),
(41, 'Stanford', '1/5', 13);

-- --------------------------------------------------------

--
-- Table structure for table `essays`
--

CREATE TABLE `essays` (
  `essayId` int(11) NOT NULL,
  `essayPrompt` varchar(1000) NOT NULL,
  `wordLimit` int(4) NOT NULL,
  `response` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `completed` enum('Yes','No') NOT NULL,
  `collegeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `essays`
--

INSERT INTO `essays` (`essayId`, `essayPrompt`, `wordLimit`, `response`, `notes`, `completed`, `collegeId`, `userId`) VALUES
(10, 'Why Honors College?', 250, 'I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. I have done it. It\'s worked. I know that contraction is grammaticallyy incorrect but I\'ve still done it. I think. Please let this work. ', 'let\'s go', 'No', 10, 1),
(11, 'Why FSU?', 300, 'help me with this', '-cool', 'Yes', 10, 1),
(12, 'Honors', 10, 'This is a test to see if the maximum wo iwjfeo ij', '', 'No', 10, 1),
(15, 'Test2', 4, 'interesting', '', 'No', 10, 1),
(19, 'Most Meaningful Extracurricular', 250, NULL, NULL, 'No', 18, 2),
(20, 'Why did you choose your major?', 100, 'I choose my major...', '-can write any notes here\r\n-essay is currently incomplete', 'No', 20, 6),
(21, 'Write about a meaningful extracurricular activity', 250, 'My most meaningful extracurricular activity is coding!', '-completed essay', 'Yes', 20, 6),
(24, 'Write about your greatest accomplishment', 250, 'You know I\'ve been thinking. This website might be that.', '', 'Yes', 22, 6),
(25, 'Test4', 200, NULL, NULL, 'No', 10, 1),
(26, 'Honors', 250, 'I deserve honors!!!!! :(', '', 'Yes', 24, 7),
(28, 'Why Us?', 150, 'I love John Hopkins!!', '', 'No', 26, 7),
(29, 'Why us?', 2, '\r\n', 'Hi I deserve to get in!!', 'Yes', 27, 7),
(30, 'HA-HA-HA-HA-HA!! Use another palindrome from another language and how it is significant to you?', 800, 'No', 'No', 'No', 28, 7),
(31, 'You are on an expedition to Mars where you encounter a group of Martians. They do not seem to be the friendly or patient kind. Explain one memory, idea, event, etc that would prove that humanity is worth their time.', 800, NULL, NULL, 'No', 28, 7),
(32, 'h', 6, 'ygiky', 'hjhb', 'Yes', 29, 8),
(44, 'Favorite Extracurriculars', 300, 'This is a test', 'notes', 'Yes', 38, 13),
(45, 'Why Honors', 5, 'I want honors because ', '', 'Yes', 38, 13),
(47, 'Stanford Roommate', 250, 'test', 'notes', 'No', 41, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersUid`, `usersPwd`) VALUES
(1, 'person', '$2y$10$PVfLRC3b5iCJJvxsJjj/JO6etUT8TRa8a7C9MbW8ZTkkwDYl/.ntO'),
(2, 'arms', '$2y$10$Iae4UAhWofWZM7GaZdVol.RShA0qfj1DD9FDS8rDhYpCd0ShVsRwq'),
(3, 'ib', '$2y$10$JfkdjpsmFGe162U78Ffi5OizYlttSziKXAbe69yQHnWII0XpNovcS'),
(4, 'hi', '$2y$10$nXUKawBzoGdrAv.LUrIsN.S99FCfOy3bDppzfzdHnFWBbZJSbKqGa'),
(5, 'ode', '$2y$10$Jas28WDQv738AzRAmuUy8.REHeoOxFB9YmWJtw6f08lgn3jkwSow.'),
(6, 'Tester', '$2y$10$lo7hs2PAEZVzFpR39fRInO71agnjqdH3A9GwbRK1BGMqECIY6Rm.W'),
(7, 'sanketh', '$2y$10$F/0KOhrhWa1og4IGFLa/4O.h6Db4xqOh60PLxCUME0xtnRFodiKMy'),
(8, 'h', '$2y$10$qbh39A7f5c8jnFvSzZ7Q2e/JdrDD2Zr6OPb9Q6VwRdGScicJ39woa'),
(9, 'per', '$2y$10$/yXa5ZZ2jRzfGWCXe7dvxep.z92YZ5w4YbncBmYsZLSirQJxfSF7O'),
(13, 'test', '$2y$10$eKbAEo4u1k30YrxaFN7pEupWaqYPet4klZmte7K9W3UVedOde3n6K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`collegeId`),
  ADD KEY `Test` (`userId`);

--
-- Indexes for table `essays`
--
ALTER TABLE `essays`
  ADD PRIMARY KEY (`essayId`),
  ADD KEY `collegeId` (`collegeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `collegeId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `essays`
--
ALTER TABLE `essays`
  MODIFY `essayId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colleges`
--
ALTER TABLE `colleges`
  ADD CONSTRAINT `Test` FOREIGN KEY (`userId`) REFERENCES `users` (`usersId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `essays`
--
ALTER TABLE `essays`
  ADD CONSTRAINT `essays_ibfk_1` FOREIGN KEY (`collegeId`) REFERENCES `colleges` (`collegeId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
