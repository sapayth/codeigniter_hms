-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 02:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rent` float NOT NULL,
  `category` int(10) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `description` text NOT NULL,
  `size` int(11) NOT NULL,
  `bed_type_id` int(11) NOT NULL,
  `picture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `name`, `rent`, `category`, `adult`, `child`, `description`, `size`, `bed_type_id`, `picture`) VALUES
(1, 'Comfort Triple Room', 1200, 1, 2, 1, 'Great choice for a relaxing vacation for families with children or a group of friends. This huge triple room features one queen-size bed and 1 single bed. Also, there can be 3 single beds in a room for up to 3 people.\r\n\r\nLarge triple rooms are located on the first floor and have an awesome Atlantic ocean view, large windows and a lot of space inside the room. You are also able to upgrade your room to an upper floor. The rooms on the second floor come with balcony and 2 comfortable chairs there.\r\n\r\nThe room is also supplied with a makeup mirror and chair. In-room safe is also in the room for your convenience.\r\n\r\nThe bathroom is equipped with a bathtub or shower, ground floor tiles and hairdryer. Smoking in rooms is allowed.', 1000, 2, 0),
(2, 'Superior Double Room', 1050, 2, 4, 3, 'Superior Double Rooms in our hotel are perfectly equipped for traveling couples or friends. The park or olive grove view will bring you unforgettable memories.\r\n\r\nThese rooms designed with open-concept living area are very bright and spacious – they are available with either double or queen beds. Room sizes are different – from 30 to 35 sqm. The interior is made with a warm palette tons of walls and furniture. A work desk and stationary set are at your disposal. Makeup mirror and chair are also included.\r\n\r\nThe bathrooms are equipped with shower or bathtub. Some rooms feature minimalist ceramic basin in bathroom have a lot of space and fresh air.\r\n\r\nFor honeymoons we have special propositions and services which may find out via direct contact.', 1200, 2, 0),
(3, 'Classic Double Room', 900, 2, 0, 0, 'Classic Double Rooms come with either double or single beds. Designed in open-concept living area, they have lots of in-room facilities.\r\n\r\nThe room sizes vary from 20 to 25 sqm. They are also equipped with a fully-stocked minibar and snacks, air-conditioning unit, two comfortable chairs, makeup mirror, huge wardrobe, a soft hand-made carpet and ensuite bathroom.\r\n\r\nYou\'ll enjoy a perfect city view with lots of city landmarks as our hotel is among top-rated locations for with stunning water iews. Great choice for travelers interested in active time spending and sports.\r\n\r\nMoreover, you may also order any type of meal any time as we work around-the-clock.', 0, 2, 0),
(4, 'Comfort', 700, 0, 2, 2, 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 900, 2, 0),
(5, 'STANDARD ROOM', 650, 0, 2, 0, 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.\r\n\r\nFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.', 600, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bed_type`
--

CREATE TABLE `bed_type` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed_type`
--

INSERT INTO `bed_type` (`id`, `name`) VALUES
(1, 'Single'),
(2, 'Double'),
(3, 'King Size'),
(4, 'Queen Size');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` char(3) NOT NULL,
  `comments` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `comments`, `type_id`) VALUES
(1, '101', 0, 2),
(2, '102', 0, 2),
(3, '103', 0, 2),
(4, '104', 0, 2),
(5, '105', 0, 2),
(6, '106', 0, 2),
(7, '107', 0, 2),
(8, '108', 0, 2),
(9, '109', 0, 2),
(10, '110', 0, 2),
(11, '111', 0, 2),
(12, '112', 0, 2),
(13, '113', 0, 2),
(14, '114', 0, 2),
(15, '115', 0, 2),
(16, '116', 0, 2),
(17, '117', 0, 2),
(18, '118', 0, 2),
(19, '119', 0, 2),
(20, '120', 0, 2),
(21, '121', 0, 1),
(22, '122', 0, 1),
(23, '123', 0, 1),
(24, '124', 0, 1),
(25, '125', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'Sapayth Hossain', 'safayet.qubee@gmail.com', '12345', 1),
(2, 'Waish Chowdhury', 'waish@gmail.com', '12345', 2),
(3, 'Munna Ahsan', 'munna@gmail.com', '12345', 2),
(4, 'MD. bellal khan', 'bellal@mail.com', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Standard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_type`
--
ALTER TABLE `bed_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bed_type`
--
ALTER TABLE `bed_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
