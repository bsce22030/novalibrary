-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 10:47 AM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `PDFDownloadLink` varchar(255) NOT NULL,
  `ReadOnlineLink` varchar(255) NOT NULL,
  `AverageRating` decimal(10,0) NOT NULL DEFAULT 0,
  `ImageURL` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `Title`, `Author`, `Genre`, `Description`, `PDFDownloadLink`, `ReadOnlineLink`, `AverageRating`, `ImageURL`) VALUES
(1, 'Calculus', 'Morris Kline', 'Education', 'Description for Calculus book.', 'pdf_links/calculus.pdf', 'read_links/calculus', 0, 'media/books/Education/calculus.jpg'),
(2, 'Digital Logic Design', 'Mansaf Alam', 'Education', 'Description for Digital Logic Design book.', 'pdf_links/digital_logic_design.pdf', 'read_links/digital_logic_design', 0, 'media/books/Education/digital logic design.jpg'),
(3, 'JavaScript and DSA', 'Sammie Bae', 'Education', 'Description for JavaScript and DSA book.', 'pdf_links/javascript_dsa.pdf', 'read_links/javascript_dsa', 0, 'media/books/Education/javascript dsa.jpeg'),
(4, 'Linear Algebra', 'Drago Atanasiu', 'Education', 'Description for Linear Algebra book.', 'pdf_links/linear_algebra.pdf', 'read_links/linear_algebra', 0, 'media/books/Education/linear algebra.jpeg'),
(5, 'Object Oriented Programming', 'Timothy Budd', 'Education', 'Description for Object Oriented Programming book.', 'pdf_links/oop.pdf', 'read_links/oop', 0, 'media/books/Education/object oriented programming.jpg'),
(6, 'Python Programming', 'Deiz Knots', 'Education', 'Description for Python Programming book.', 'pdf_links/python_programming.pdf', 'read_links/python_programming', 0, 'media/books/Education/python programming.jpg'),
(7, 'Harry Potter and The Chamber of Secrets', 'J.K. Rowling', 'Drama', 'Description for Harry Potter and The Chamber of Secrets.', 'pdf_links/chamber_of_secrets.pdf', 'read_links/chamber_of_secrets', 0, 'media/books/Drama/Harry potter and the chamber of secrets.jpg'),
(8, 'Harry Potter and The Cursed Child', 'J.K. Rowling', 'Drama', 'Description for Harry Potter and The Cursed Child.', 'pdf_links/cursed_child.pdf', 'read_links/cursed_child', 0, 'media/books/Drama/Harry potter and the cursed child.jpg'),
(9, 'Harry Potter and The Goblet of Fire', 'J.K. Rowling', 'Drama', 'Description for Harry Potter and The Goblet of Fire.', 'pdf_links/goblet_of_fire.pdf', 'read_links/goblet_of_fire', 0, 'media/books/Drama/Harry Potter and the goblet of fire.jpg'),
(10, 'Harry Potter and the order of phoenix', 'J.K. Rowling', 'Drama', 'Description for Harry Potter and the order of phoenix.', 'pdf_links/order_of_phoenix.pdf', 'read_links/order_of_phoenix', 0, 'media/books/Drama/Harry Potter and the order of the phoenix.jpg'),
(11, 'Harry Potter and The philosopher stone', 'J.K. Rowling', 'Drama', 'Description for Harry Potter and The philosopher stone.', 'pdf_links/philosopher_stone.pdf', 'read_links/philosopher_stone', 0, 'media/books/Drama/harry potter and the philosopher stone.jpg'),
(12, 'Harry Potter and the sorcerer stone', 'J.K. Rowling', 'Drama', 'Description for Harry Potter and the sorcerer stone.', 'pdf_links/sorcerer_stone.pdf', 'read_links/sorcerer_stone', 0, 'media/books/Drama/Harry Potter and the sorcerer stone.jpeg'),
(13, 'A clockwork orange', 'Anthony Burgess', 'History', 'Description for A clockwork orange.', 'pdf_links/clockwork_orange.pdf', 'read_links/clockwork_orange', 0, 'media/books/History/a clockwork orange.jpg'),
(14, 'Invisible Man', 'Ralph Ellison', 'History', 'Description for Invisible Man.', 'pdf_links/invisible_man.pdf', 'read_links/invisible_man', 0, 'media/books/History/invisible man.jpg'),
(15, 'The Book thief', 'Markus Zusak', 'History', 'Description for The Book thief.', 'pdf_links/book_thief.pdf', 'read_links/book_thief', 0, 'media/books/History/the book thief.png'),
(16, 'The godfather', 'Mario Puzo', 'History', 'Description for The godfather.', 'pdf_links/godfather.pdf', 'read_links/godfather', 0, 'media/books/History/the godfather.jpg'),
(17, 'The Great Gatsby', 'Scott Fitzgerald', 'History', 'Description for The Great Gatsby.', 'pdf_links/great_gatsby.pdf', 'read_links/great_gatsby', 0, 'media/books/History/the great gatsby.jpg'),
(18, 'The Road', 'Cormac McCarthy', 'History', 'Description for The Road.', 'pdf_links/road.pdf', 'read_links/road', 0, 'media/books/History/the road.jpg'),
(19, 'Blood in My Closet', 'Rooney Moosely', 'Horror', 'Description for Blood in My Closet.', 'pdf_links/blood_in_my_closet.pdf', 'read_links/blood_in_my_closet', 0, 'media/books/horror/blood in my closet.jpg'),
(20, 'It, The Book', 'Stephen King', 'Horror', 'Description for It, The Book.', 'pdf_links/it_the_book.pdf', 'read_links/it_the_book', 0, 'media/books/horror/it.jpg'),
(21, 'Last Days', 'Adam Nevill', 'Horror', 'Description for Last Days.', 'pdf_links/last_days.pdf', 'read_links/last_days', 0, 'media/books/horror/last days.jpg'),
(22, 'Manhunt', 'Gretchen Felker', 'Horror', 'Description for Manhunt.', 'pdf_links/manhunt.pdf', 'read_links/manhunt', 0, 'media/books/horror/manhunt.jpg'),
(23, 'The Night', 'Postermayll', 'Horror', 'Description for The Night.', 'pdf_links/the_night.pdf', 'read_links/the_night', 0, 'media/books/horror/the night.jpg'),
(24, 'The Ritual', 'Adam Nevill', 'Horror', 'Description for The Ritual.', 'pdf_links/the_ritual.pdf', 'read_links/the_ritual', 0, 'media/books/horror/the ritual.jpg'),
(25, 'A rose winter', 'Kathleen E. Woodiwiss', 'Romance', 'Description for A rose winter.', 'pdf_links/a_rose_winter.pdf', 'read_links/a_rose_winter', 0, 'media/books/Romance/a rose winter.jpg'),
(26, 'And then there were none', 'Cigathe Chistie', 'Romance', 'Description for And then there were none.', 'pdf_links/and_then_there_were_none.pdf', 'read_links/and_then_there_were_none', 0, 'media/books/Romance/and then there were none.png'),
(27, 'I know why', 'Maya Angelou', 'Romance', 'Description for I know why.', 'pdf_links/i_know_why.pdf', 'read_links/i_know_why', 0, 'media/books/Romance/i know why the caged bird sings.jpeg'),
(28, 'Love', 'Olivia Wilson', 'Romance', 'Description for Love.', 'pdf_links/love.pdf', 'read_links/love', 0, 'media/books/Romance/love.jpg'),
(29, 'The Little Prince', 'Antoine Exupery', 'Romance', 'Description for The Little Prince.', 'pdf_links/the_little_prince.pdf', 'read_links/the_little_prince', 0, 'media/books/Romance/the little prince.jpg'),
(30, 'Waiting for you', 'Claudia Wilson', 'Romance', 'Description for Waiting for you.', 'pdf_links/waiting_for_you.pdf', 'read_links/waiting_for_you', 0, 'media/books/Romance/waiting for you.jpg'),
(31, 'Encaladus', 'Barnden Q. Morris', 'Sci-Fi', 'Description for Encaladus.', 'pdf_links/encaladus.pdf', 'read_links/encaladus', 0, 'media/books/Sci-fi/Encaladus.jpg'),
(32, 'Exile of Snake', 'Petrica Renard', 'Sci-Fi', 'Description for Exile of Snake.', 'pdf_links/exile_of_snake.pdf', 'read_links/exile_of_snake', 0, 'media/books/Sci-fi/Exile of Snake.webp'),
(33, 'Fight or Flight', 'Francisco Carpenter', 'Sci-Fi', 'Description for Fight or Flight.', 'pdf_links/fight_or_flight.pdf', 'read_links/fight_or_flight', 0, 'media/books/Sci-fi/Fight or Flight.jpg'),
(34, 'The Encounter Effect', 'George Mchinkel', 'Sci-Fi', 'Description for The Encounter Effect.', 'pdf_links/the_encounter_effect.pdf', 'read_links/the_encounter_effect', 0, 'media/books/Sci-fi/The Encounter Effect.jpg'),
(35, 'The Portal', 'Brandon Scott', 'Sci-Fi', 'Description for The Portal.', 'pdf_links/the_portal.pdf', 'read_links/the_portal', 0, 'media/books/Sci-fi/The Portal.jpg'),
(36, 'The Rings of Saturn', 'Isaac Asimov', 'Sci-Fi', 'Description for The Rings of Saturn.', 'pdf_links/the_rings_of_saturn.pdf', 'read_links/the_rings_of_saturn', 0, 'media/books/Sci-fi/The RIngs of Saturn.jpg'),
(37, 'Bauhas Color Theory', 'George H. Bauhas', 'Featured', 'A book about color theory.', 'download_link_1', 'read_online_link_1', 0, 'media/books/featured section/bauhaus book.jpg'),
(38, 'The Polaroid Book', 'Sir Polaroid', 'Featured', 'A book about polaroids.', 'download_link_2', 'read_online_link_2', 0, 'media/books/featured section/polaroid book.jpg'),
(39, 'The Passion Within', 'Cathy Mcfarth', 'Featured', 'A passionate book.', 'download_link_3', 'read_online_link_3', 0, 'media/books/featured section/the passion within book.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
