-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2021 at 01:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `edwins`

CREATE TABLE `contact` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `contact` (`firstname`, `lastname`, `emailaddress`, `comments`, `is_deleted`) VALUES
('Edwins', 'Ainerukundo', 'ainedwins@gmail.com', 'I think it is working just fine', 0),
('Oliver', 'Akello', 'akeliver@gmail.com', 'good work there', 0);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;